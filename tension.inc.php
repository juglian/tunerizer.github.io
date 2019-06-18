<?

$freq = array();

$freq["C"]  = 16.352;
$freq["C#"] = 17.324;
$freq["D"]  = 18.354;
$freq["D#"] = 19.445;
$freq["E"]  = 20.602;
$freq["F"]  = 21.827;
$freq["F#"] = 23.125;
$freq["G"]  = 24.500;
$freq["G#"] = 25.957;
$freq["A"]  = 27.500;
$freq["A#"] = 29.135;
$freq["B"]  = 30.868;

$enharm = array();
$enharm["Db"] = "C#";
$enharm["Eb"] = "D#";
$enharm["Gb"] = "F#";
$enharm["Ab"] = "G#";
$enharm["Bb"] = "A#";

$g = array();
$g["s"]["w"]["min"] = .017;
$g["s"]["w"]["max"] = .080;
$g["s"]["p"]["min"] = .008;
$g["s"]["p"]["max"] = .026;

$g["n"]["w"]["min"] = .020;
$g["n"]["w"]["max"] = .056;
$g["n"]["p"]["min"] = .018;
$g["n"]["p"]["max"] = .041;

$mass = array("n" => array("p" => array(), "w" => array()), "s" => array("p" => array(), "w" => array()));

$mass["n"]["p"][".018"]  = 0.00000916;
$mass["n"]["p"][".019"]  = 0.00001020;
$mass["n"]["p"][".020"]  = 0.00001130;
$mass["n"]["p"][".021"]  = 0.00001246;
$mass["n"]["p"][".022"]  = 0.00001368;
$mass["n"]["p"][".024"]  = 0.00001628;
$mass["n"]["p"][".027"]  = 0.00002060;
$mass["n"]["p"][".028"]  = 0.00002216;
$mass["n"]["p"][".029"]  = 0.00002377;
$mass["n"]["p"][".030"]  = 0.00002543;
$mass["n"]["p"][".031"]  = 0.00002716;
$mass["n"]["p"][".032"]  = 0.00002894;
$mass["n"]["p"][".033"]  = 0.00003078;
$mass["n"]["p"][".034"]  = 0.00003267;
$mass["n"]["p"][".038"]  = 0.00004081;
$mass["n"]["p"][".039"]  = 0.00004298;
$mass["n"]["p"][".040"]  = 0.00004522;
$mass["n"]["p"][".041"]  = 0.00004989;

$mass["n"]["w"][".020"]  = 0.00005341;
$mass["n"]["w"][".022"]  = 0.00006498;
$mass["n"]["w"][".024"]  = 0.00007408;
$mass["n"]["w"][".026"]  = 0.00009438;
$mass["n"]["w"][".028"]  = 0.00010511;
$mass["n"]["w"][".029"]  = 0.00011667;
$mass["n"]["w"][".030"]  = 0.00012419;
$mass["n"]["w"][".031"]  = 0.00012821;
$mass["n"]["w"][".033"]  = 0.00017913;
$mass["n"]["w"][".034"]  = 0.00019270;
$mass["n"]["w"][".035"]  = 0.00020667;
$mass["n"]["w"][".036"]  = 0.00022105;
$mass["n"]["w"][".040"]  = 0.00028260;
$mass["n"]["w"][".041"]  = 0.00028319;
$mass["n"]["w"][".042"]  = 0.00030466;
$mass["n"]["w"][".043"]  = 0.00033302;
$mass["n"]["w"][".045"]  = 0.00036470;
$mass["n"]["w"][".048"]  = 0.00041400;
$mass["n"]["w"][".050"]  = 0.00045369;
$mass["n"]["w"][".052"]  = 0.00049500;
$mass["n"]["w"][".054"]  = 0.00053793;
$mass["n"]["w"][".056"]  = 0.00059524;

$mass["s"]["p"][".007"] = 0.00001085;
$mass["s"]["p"][".008"] = 0.00001418;
$mass["s"]["p"][".009"] = 0.00001794;
$mass["s"]["p"][".010"] = 0.00002215;
$mass["s"]["p"][".011"] = 0.00002680;
$mass["s"]["p"][".012"] = 0.00003190;
$mass["s"]["p"][".013"] = 0.00003744;
$mass["s"]["p"][".014"] = 0.00004342;
$mass["s"]["p"][".015"] = 0.00004984;
$mass["s"]["p"][".016"] = 0.00005671;
$mass["s"]["p"][".017"] = 0.00006402;
$mass["s"]["p"][".018"] = 0.00007177;
$mass["s"]["p"][".019"] = 0.00007997;
$mass["s"]["p"][".020"] = 0.00008861;
$mass["s"]["p"][".022"] = 0.00010722;
$mass["s"]["p"][".024"] = 0.00012760;
$mass["s"]["p"][".026"] = 0.00014975;

$mass["s"]["w"][".017"] = 0.00005524;
$mass["s"]["w"][".018"] = 0.00006215;
$mass["s"]["w"][".019"] = 0.00006947;
$mass["s"]["w"][".020"] = 0.00007495;
$mass["s"]["w"][".021"] = 0.00008293;
$mass["s"]["w"][".022"] = 0.00009184;
$mass["s"]["w"][".023"] = 0.00009762;
$mass["s"]["w"][".024"] = 0.00010857;
$mass["s"]["w"][".026"] = 0.00012671;
$mass["s"]["w"][".028"] = 0.00014666;
$mass["s"]["w"][".030"] = 0.00017236;
$mass["s"]["w"][".032"] = 0.00019347;
$mass["s"]["w"][".034"] = 0.00021590;
$mass["s"]["w"][".035"] = 0.00022925;
$mass["s"]["w"][".036"] = 0.00023964;
$mass["s"]["w"][".038"] = 0.00024549; // GUESTIMATE
$mass["s"]["w"][".039"] = 0.00027932;
$mass["s"]["w"][".040"] = 0.00029322;
$mass["s"]["w"][".042"] = 0.00032279;
$mass["s"]["w"][".044"] = 0.00035182;
$mass["s"]["w"][".046"] = 0.00038216;
$mass["s"]["w"][".048"] = 0.00041382;
$mass["s"]["w"][".049"] = 0.00043014;
$mass["s"]["w"][".052"] = 0.00048109;
$mass["s"]["w"][".053"] = 0.00051484;
$mass["s"]["w"][".054"] = 0.00053838;
$mass["s"]["w"][".056"] = 0.00057598;
$mass["s"]["w"][".059"] = 0.00064191;
$mass["s"]["w"][".060"] = 0.00066542;
$mass["s"]["w"][".062"] = 0.00070697;
$mass["s"]["w"][".064"] = 0.00074984;
$mass["s"]["w"][".066"] = 0.00079889;
$mass["s"]["w"][".068"] = 0.00084614;
$mass["s"]["w"][".070"] = 0.00089304;
$mass["s"]["w"][".072"] = 0.00094124;
$mass["s"]["w"][".074"] = 0.00098869;
$mass["s"]["w"][".080"] = 0.00115011;

$vulgFrac = array();
$vulgFrac["25"] = "¼";
$vulgFrac["5"] = "½";
$vulgFrac["75"] = "¾";

?>
