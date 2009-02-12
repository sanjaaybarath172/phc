/*
 * phc -- the open source PHP compiler
 * See doc/license/README.license for licensing information
 *
 * Callgraph construction.
 */

#include "Callgraph.h"

using namespace MIR;
using namespace boost;
using namespace std;

Callgraph::Callgraph (Whole_program* wp)
: WPA(wp)
{
	methods.insert ("__MAIN__");
}

void
Callgraph::forward_bind (Basic_block* context, CFG* callee_cfg, MIR::Actual_parameter_list* actuals, MIR::VARIABLE_NAME* retval)
{
	if (context == NULL)
		return;

	add_call_edge (ST (context), *callee_cfg->method->signature->method_name->value);
}

void
Callgraph::add_summary_call (Basic_block* context, Method_info* callee)
{
	add_call_edge (ST (context), *callee->method_name);
}

void
Callgraph::add_call_edge (string caller, string callee)
{
	methods.insert (callee);
	call_edges[caller].insert (callee);
}

String_list*
Callgraph::get_called_methods ()
{
	String_list* result = new String_list;

	foreach (string m, methods)
		result->push_back (s(m));

	return result;
}

String_list*
Callgraph::bottom_up ()
{
	String_list* result = new String_list;

	List<string> worklist ("__MAIN__");
	Set<string> seen;

	while (worklist.size ())
	{
		string method = worklist.front ();
		worklist.pop_front ();

		if (seen.has (method))
			continue;

		seen.insert (method);

		// Note _front_ for bottom-up
		result->push_front (s(method));

		// Successors
		foreach (string callee, call_edges[method])
			worklist.push_back (callee);

	}

	return result;
}

bool
Callgraph::equals (WPA* wpa)
{
	// There is the question, why not use ==. I agree, it does make sense to
	// use == in some cases. However, == will do pointer equality when we have
	// pointers, whereas equals will not. However, this is at the expense of
	// having to reimplement equality ourselves, when the STL generally
	// provides it for us. In the long term, it might be best to use the STL
	// properly, but now is not a good time.
	Callgraph* other = dyc<Callgraph> (wpa);
	return methods.equals (&other->methods)
		 && call_edges.equals (&other->call_edges);
}



void
Callgraph::dump(Basic_block* bb)
{
	// Only dump on entry and exit
	if (!isa<Entry_block> (bb) && !isa<Exit_block> (bb))
		return;

	dump_graphviz (s(lexical_cast<string> (bb->ID)));
}

void
Callgraph::dump_graphviz (String* label)
{
	if (label == NULL)
	{
		CHECK_DEBUG ();
		label = s("TEST");
	}

	cout
	<< "digraph G {\n"
	<< "graph [labelloc=t];\n"
	<< "graph [label=\"Callgraph: " << *label << "\"];\n"
	;

	foreach (string method, methods)
	{
		// Target
		cout
		<< "\""
		<< method
		<< "\""
		<< ";\n"
		;

		foreach (string callee, call_edges[method])
		{
			// Edge
			cout 
			<< "\""
			<< method
			<< "\" -> \"" 
			<< callee 
			<< "\";\n"
			;
		}
	}

	cout
	<< "}\n"
	;
}
