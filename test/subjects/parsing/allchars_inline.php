<?php

	/* if we search an entire string for a character, say \x00, and we
	 * don't find it, even though its there, then it looks like a bug.
	 * However, if the string also contains another character we're
	 * searching for, say \x01, then this will mask the bug. The allchars
	 * test had this problem. If you make all the strings different, this
	 * takes the problem away */

	/* might add a fouble characters test later, but for now single is all
	 * we need */

	echo "Single characters:";
	echo "0: ";
	echo " ";
	echo "1: ";
	echo "";
	echo "2: ";
	echo "";
	echo "3: ";
	echo "";
	echo "4: ";
	echo "";
	echo "5: ";
	echo "";
	echo "6: ";
	echo "";
	echo "7: ";
	echo "";
	echo "8: ";
	echo "";
	echo "9: ";
	echo "	";
	echo "10: ";
	echo "
";
	echo "11: ";
	echo "";
	echo "12: ";
	echo "";
	echo "13: ";
	echo "";
	echo "14: ";
	echo "";
	echo "15: ";
	echo "";
	echo "16: ";
	echo "";
	echo "17: ";
	echo "";
	echo "18: ";
	echo "";
	echo "19: ";
	echo "";
	echo "20: ";
	echo "";
	echo "21: ";
	echo "";
	echo "22: ";
	echo "";
	echo "23: ";
	echo "";
	echo "24: ";
	echo "";
	echo "25: ";
	echo "";
	echo "26: ";
	echo "";
	echo "27: ";
	echo "";
	echo "28: ";
	echo "";
	echo "29: ";
	echo "";
	echo "30: ";
	echo "";
	echo "31: ";
	echo "";
	echo "32: ";
	echo " ";
	echo "33: ";
	echo "!";
	echo "34: ";
	echo "\"";
	echo "35: ";
	echo "#";
	echo "36: ";
	echo "$";
	echo "37: ";
	echo "%";
	echo "38: ";
	echo "&";
	echo "39: ";
	echo "'";
	echo "40: ";
	echo "(";
	echo "41: ";
	echo ")";
	echo "42: ";
	echo "*";
	echo "43: ";
	echo "+";
	echo "44: ";
	echo ",";
	echo "45: ";
	echo "-";
	echo "46: ";
	echo ".";
	echo "47: ";
	echo "/";
	echo "48: ";
	echo "0";
	echo "49: ";
	echo "1";
	echo "50: ";
	echo "2";
	echo "51: ";
	echo "3";
	echo "52: ";
	echo "4";
	echo "53: ";
	echo "5";
	echo "54: ";
	echo "6";
	echo "55: ";
	echo "7";
	echo "56: ";
	echo "8";
	echo "57: ";
	echo "9";
	echo "58: ";
	echo ":";
	echo "59: ";
	echo ";";
	echo "60: ";
	echo "<";
	echo "61: ";
	echo "=";
	echo "62: ";
	echo ">";
	echo "63: ";
	echo "?";
	echo "64: ";
	echo "@";
	echo "65: ";
	echo "A";
	echo "66: ";
	echo "B";
	echo "67: ";
	echo "C";
	echo "68: ";
	echo "D";
	echo "69: ";
	echo "E";
	echo "70: ";
	echo "F";
	echo "71: ";
	echo "G";
	echo "72: ";
	echo "H";
	echo "73: ";
	echo "I";
	echo "74: ";
	echo "J";
	echo "75: ";
	echo "K";
	echo "76: ";
	echo "L";
	echo "77: ";
	echo "M";
	echo "78: ";
	echo "N";
	echo "79: ";
	echo "O";
	echo "80: ";
	echo "P";
	echo "81: ";
	echo "Q";
	echo "82: ";
	echo "R";
	echo "83: ";
	echo "S";
	echo "84: ";
	echo "T";
	echo "85: ";
	echo "U";
	echo "86: ";
	echo "V";
	echo "87: ";
	echo "W";
	echo "88: ";
	echo "X";
	echo "89: ";
	echo "Y";
	echo "90: ";
	echo "Z";
	echo "91: ";
	echo "[";
	echo "92: ";
	echo "\\";
	echo "93: ";
	echo "]";
	echo "94: ";
	echo "^";
	echo "95: ";
	echo "_";
	echo "96: ";
	echo "`";
	echo "97: ";
	echo "a";
	echo "98: ";
	echo "b";
	echo "99: ";
	echo "c";
	echo "100: ";
	echo "d";
	echo "101: ";
	echo "e";
	echo "102: ";
	echo "f";
	echo "103: ";
	echo "g";
	echo "104: ";
	echo "h";
	echo "105: ";
	echo "i";
	echo "106: ";
	echo "j";
	echo "107: ";
	echo "k";
	echo "108: ";
	echo "l";
	echo "109: ";
	echo "m";
	echo "110: ";
	echo "n";
	echo "111: ";
	echo "o";
	echo "112: ";
	echo "p";
	echo "113: ";
	echo "q";
	echo "114: ";
	echo "r";
	echo "115: ";
	echo "s";
	echo "116: ";
	echo "t";
	echo "117: ";
	echo "u";
	echo "118: ";
	echo "v";
	echo "119: ";
	echo "w";
	echo "120: ";
	echo "x";
	echo "121: ";
	echo "y";
	echo "122: ";
	echo "z";
	echo "123: ";
	echo "{";
	echo "124: ";
	echo "|";
	echo "125: ";
	echo "}";
	echo "126: ";
	echo "~";
	echo "127: ";
	echo "";
	echo "128: ";
	echo "�";
	echo "129: ";
	echo "�";
	echo "130: ";
	echo "�";
	echo "131: ";
	echo "�";
	echo "132: ";
	echo "�";
	echo "133: ";
	echo "�";
	echo "134: ";
	echo "�";
	echo "135: ";
	echo "�";
	echo "136: ";
	echo "�";
	echo "137: ";
	echo "�";
	echo "138: ";
	echo "�";
	echo "139: ";
	echo "�";
	echo "140: ";
	echo "�";
	echo "141: ";
	echo "�";
	echo "142: ";
	echo "�";
	echo "143: ";
	echo "�";
	echo "144: ";
	echo "�";
	echo "145: ";
	echo "�";
	echo "146: ";
	echo "�";
	echo "147: ";
	echo "�";
	echo "148: ";
	echo "�";
	echo "149: ";
	echo "�";
	echo "150: ";
	echo "�";
	echo "151: ";
	echo "�";
	echo "152: ";
	echo "�";
	echo "153: ";
	echo "�";
	echo "154: ";
	echo "�";
	echo "155: ";
	echo "�";
	echo "156: ";
	echo "�";
	echo "157: ";
	echo "�";
	echo "158: ";
	echo "�";
	echo "159: ";
	echo "�";
	echo "160: ";
	echo "�";
	echo "161: ";
	echo "�";
	echo "162: ";
	echo "�";
	echo "163: ";
	echo "�";
	echo "164: ";
	echo "�";
	echo "165: ";
	echo "�";
	echo "166: ";
	echo "�";
	echo "167: ";
	echo "�";
	echo "168: ";
	echo "�";
	echo "169: ";
	echo "�";
	echo "170: ";
	echo "�";
	echo "171: ";
	echo "�";
	echo "172: ";
	echo "�";
	echo "173: ";
	echo "�";
	echo "174: ";
	echo "�";
	echo "175: ";
	echo "�";
	echo "176: ";
	echo "�";
	echo "177: ";
	echo "�";
	echo "178: ";
	echo "�";
	echo "179: ";
	echo "�";
	echo "180: ";
	echo "�";
	echo "181: ";
	echo "�";
	echo "182: ";
	echo "�";
	echo "183: ";
	echo "�";
	echo "184: ";
	echo "�";
	echo "185: ";
	echo "�";
	echo "186: ";
	echo "�";
	echo "187: ";
	echo "�";
	echo "188: ";
	echo "�";
	echo "189: ";
	echo "�";
	echo "190: ";
	echo "�";
	echo "191: ";
	echo "�";
	echo "192: ";
	echo "�";
	echo "193: ";
	echo "�";
	echo "194: ";
	echo "�";
	echo "195: ";
	echo "�";
	echo "196: ";
	echo "�";
	echo "197: ";
	echo "�";
	echo "198: ";
	echo "�";
	echo "199: ";
	echo "�";
	echo "200: ";
	echo "�";
	echo "201: ";
	echo "�";
	echo "202: ";
	echo "�";
	echo "203: ";
	echo "�";
	echo "204: ";
	echo "�";
	echo "205: ";
	echo "�";
	echo "206: ";
	echo "�";
	echo "207: ";
	echo "�";
	echo "208: ";
	echo "�";
	echo "209: ";
	echo "�";
	echo "210: ";
	echo "�";
	echo "211: ";
	echo "�";
	echo "212: ";
	echo "�";
	echo "213: ";
	echo "�";
	echo "214: ";
	echo "�";
	echo "215: ";
	echo "�";
	echo "216: ";
	echo "�";
	echo "217: ";
	echo "�";
	echo "218: ";
	echo "�";
	echo "219: ";
	echo "�";
	echo "220: ";
	echo "�";
	echo "221: ";
	echo "�";
	echo "222: ";
	echo "�";
	echo "223: ";
	echo "�";
	echo "224: ";
	echo "�";
	echo "225: ";
	echo "�";
	echo "226: ";
	echo "�";
	echo "227: ";
	echo "�";
	echo "228: ";
	echo "�";
	echo "229: ";
	echo "�";
	echo "230: ";
	echo "�";
	echo "231: ";
	echo "�";
	echo "232: ";
	echo "�";
	echo "233: ";
	echo "�";
	echo "234: ";
	echo "�";
	echo "235: ";
	echo "�";
	echo "236: ";
	echo "�";
	echo "237: ";
	echo "�";
	echo "238: ";
	echo "�";
	echo "239: ";
	echo "�";
	echo "240: ";
	echo "�";
	echo "241: ";
	echo "�";
	echo "242: ";
	echo "�";
	echo "243: ";
	echo "�";
	echo "244: ";
	echo "�";
	echo "245: ";
	echo "�";
	echo "246: ";
	echo "�";
	echo "247: ";
	echo "�";
	echo "248: ";
	echo "�";
	echo "249: ";
	echo "�";
	echo "250: ";
	echo "�";
	echo "251: ";
	echo "�";
	echo "252: ";
	echo "�";
	echo "253: ";
	echo "�";
	echo "254: ";
	echo "�";
	echo "255: ";
	echo "�";

?>	
