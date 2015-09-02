<?php
/**
 * Created by PhpStorm.
 * User: Tanmay
 * Date: 03/04/15
 * Time: 16:01
 */
$name="";
$email="";
$address="";
$phone="";
$object="";

$ed1="";
$ed2="";
$ed3="";
$ed4="";
$ed5="";

$ski="";
$ski2="";
$ski3="";

$tit_ex="";
$desc_ex="";
$tit_ex2="";
$desc_ex2="";
$tit_ex3="";
$desc_ex3="";
$tit_ex4="";
$desc_ex4="";
$tit_ex5="";
$desc_ex5="";

if(isset($_POST["sub"]))
{
    if($_POST["name"] !== "")
    {
        $name = $_POST["name"];
    }

    if($_POST["email"] !== "")
    {
        $email = $_POST["email"];
    }
    if($_POST["address"] !== "")
    {
        $address = $_POST["address"];
    }
    if($_POST["phone"] !== "")
    {
        $phone = $_POST["phone"];
    }

    if($_POST["object"] !== "")
    {
        $object = $_POST["object"];
    }
    if($_POST["ed1"] !== "")
    {
        $ed1 = $_POST["ed1"];
    }
    if($_POST["ed2"] !== "")
    {
        $ed2 = $_POST["ed2"];
    }
    if($_POST["ed3"] !== "")
    {
        $ed3 = $_POST["ed3"];
    }
    if($_POST["ed4"] !== "")
    {
        $ed4 = $_POST["ed4"];
    }
    if($_POST["ed5"] !== "")
    {
        $ed5 = $_POST["ed5"];
    }
    if($_POST["ski"] !== "")
    {
        $ski = $_POST["ski"];
    }
    if($_POST["ski2"] !== "")
    {
        $ski2 = $_POST["ski2"];
    }
    if($_POST["ski3"] !== "")
    {
        $ski3 = $_POST["ski3"];
    }
    if($_POST["tit_ex"] !== "")
    {
        $tit_ex = $_POST["tit_ex"];
    }
    if($_POST["desc_ex"] !== "")
    {
        $desc_ex = $_POST["desc_ex"];
    }
    if(isset($_POST["tit_ex2"]))
    {
        $tit_ex2 = $_POST["tit_ex2"];
    }
    if(isset($_POST["desc_ex2"]))
    {
        $desc_ex2 = $_POST["desc_ex2"];
    }
    if(isset($_POST["tit_ex3"]))
    {
        $tit_ex3 = $_POST["tit_ex3"];
    }
    if(isset($_POST["desc_ex3"]))
    {
        $desc_ex3 = $_POST["desc_ex3"];
    }
    if(isset($_POST["tit_ex4"]))
    {
        $tit_ex4 = $_POST["tit_ex4"];
    }
    if(isset($_POST["desc_ex4"]))
    {
        $desc_ex4 = $_POST["desc_ex4"];
    }
    if(isset($_POST["tit_ex5"]))
    {
        $tit_ex5 = $_POST["tit_ex5"];
    }
    if(isset($_POST["desc_ex5"]))
    {
        $desc_ex5 = $_POST["desc_ex5"];
    }

    $cv = "<html>

<head>
<meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">
<meta name=Generator content=\"Microsoft Word 15 (filtered)\">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:Wingdings;
	panose-1:5 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;}
@font-face
	{font-family:\"Wingdings 2\";
	panose-1:5 2 1 2 1 5 7 7 7 7;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;}
h1
	{mso-style-link:\"Heading 1 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#741B47;
	text-transform:uppercase;
	letter-spacing:2.0pt;}
h1.CxSpFirst
	{mso-style-link:\"Heading 1 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#741B47;
	text-transform:uppercase;
	letter-spacing:2.0pt;}
h1.CxSpMiddle
	{mso-style-link:\"Heading 1 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#741B47;
	text-transform:uppercase;
	letter-spacing:2.0pt;}
h1.CxSpLast
	{mso-style-link:\"Heading 1 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#741B47;
	text-transform:uppercase;
	letter-spacing:2.0pt;}
h2
	{mso-style-link:\"Heading 2 Char\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#4C1130;
	text-transform:uppercase;
	letter-spacing:1.0pt;}
h2.CxSpFirst
	{mso-style-link:\"Heading 2 Char\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#4C1130;
	text-transform:uppercase;
	letter-spacing:1.0pt;}
h2.CxSpMiddle
	{mso-style-link:\"Heading 2 Char\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#4C1130;
	text-transform:uppercase;
	letter-spacing:1.0pt;}
h2.CxSpLast
	{mso-style-link:\"Heading 2 Char\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#4C1130;
	text-transform:uppercase;
	letter-spacing:1.0pt;}
p.MsoTitle, li.MsoTitle, div.MsoTitle
	{mso-style-link:\"Title Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:14.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;
	font-weight:bold;}
p.MsoTitleCxSpFirst, li.MsoTitleCxSpFirst, div.MsoTitleCxSpFirst
	{mso-style-link:\"Title Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:14.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;
	font-weight:bold;}
p.MsoTitleCxSpMiddle, li.MsoTitleCxSpMiddle, div.MsoTitleCxSpMiddle
	{mso-style-link:\"Title Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:14.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;
	font-weight:bold;}
p.MsoTitleCxSpLast, li.MsoTitleCxSpLast, div.MsoTitleCxSpLast
	{mso-style-link:\"Title Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:14.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;
	font-weight:bold;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0cm;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:\"Cambria\",serif;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:90.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:90.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:90.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:90.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
span.TitleChar
	{mso-style-name:\"Title Char\";
	mso-style-link:Title;
	font-family:\"Georgia\",serif;
	color:#666666;
	font-weight:bold;}
p.Contact, li.Contact, div.Contact
	{mso-style-name:Contact;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;}
p.ContactCxSpFirst, li.ContactCxSpFirst, div.ContactCxSpFirst
	{mso-style-name:ContactCxSpFirst;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;}
p.ContactCxSpMiddle, li.ContactCxSpMiddle, div.ContactCxSpMiddle
	{mso-style-name:ContactCxSpMiddle;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;}
p.ContactCxSpLast, li.ContactCxSpLast, div.ContactCxSpLast
	{mso-style-name:ContactCxSpLast;
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;
	color:#666666;}
span.Heading1Char
	{mso-style-name:\"Heading 1 Char\";
	mso-style-link:\"Heading 1\";
	font-family:\"Georgia\",serif;
	color:#741B47;
	text-transform:uppercase;
	letter-spacing:2.0pt;
	font-weight:bold;}
span.Heading2Char
	{mso-style-name:\"Heading 2 Char\";
	mso-style-link:\"Heading 2\";
	font-family:\"Arial\",sans-serif;
	color:#4C1130;
	text-transform:uppercase;
	letter-spacing:1.0pt;
	font-weight:bold;}
p.Normalwithleftindent, li.Normalwithleftindent, div.Normalwithleftindent
	{mso-style-name:\"Normal with left indent\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
p.NormalwithleftindentCxSpFirst, li.NormalwithleftindentCxSpFirst, div.NormalwithleftindentCxSpFirst
	{mso-style-name:\"Normal with left indentCxSpFirst\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
p.NormalwithleftindentCxSpMiddle, li.NormalwithleftindentCxSpMiddle, div.NormalwithleftindentCxSpMiddle
	{mso-style-name:\"Normal with left indentCxSpMiddle\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
p.NormalwithleftindentCxSpLast, li.NormalwithleftindentCxSpLast, div.NormalwithleftindentCxSpLast
	{mso-style-name:\"Normal with left indentCxSpLast\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:72.0pt;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",sans-serif;
	color:#666666;}
.MsoChpDefault
	{font-family:\"Calibri\",sans-serif;}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:36.0pt 36.0pt 36.0pt 36.0pt;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0cm;}
ul
	{margin-bottom:0cm;}
-->
</style>

</head>

<body lang=EN-GB link=blue vlink=purple>

<div class=WordSection1>

<p class=MsoNormal><span lang=EN-US style='color:#666666'>&nbsp;</span></p>

";

    if($name != "")
    {
        $cv .= "<p class=MsoTitle><a name=h.ydgpbs5gi5fx></a><span lang=EN-US>$name</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }

    if($address != "")
    {
        $cv .= "<p class=ContactCxSpFirst><span lang=EN-US>$address</span></p>
";
    }

    if($phone != "")
    {
        $cv .= "<p class=ContactCxSpMiddle><span lang=EN-US>$phone</span></p>
";
    }

    if($email!="")
    {
        $cv .= "<p class=ContactCxSpLast><span lang=EN-US>$email</span></p>
";
    }

    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>";

    if($object != "")
    {
        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 1.0pt 0cm'>

<p class=MsoNormalCxSpFirst align=center style='text-align:center;border:none;
padding:0cm'><span lang=EN-US style='font-family:\"Georgia\",serif;color:#666666'>&nbsp;</span></p>

</div>

<p class=MsoNormalCxSpMiddle><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#666666'>&nbsp;</span></b></p>

<p class=MsoNormalCxSpLast><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#666666'>&nbsp;</span></b></p>

<p class=MsoNormalCxSpLast><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#741B47;text-transform:uppercase;letter-spacing:2.0pt'>Objective</span></b></p>

<p class=MsoNormal><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#741B47;text-transform:uppercase;letter-spacing:2.0pt'>        </span></b></p>

<p class=Normalwithleftindent><span lang=DE>$object</span></p>
<br>
";




    }

    if($ed1!="" || $ed2!="" || $ed3!="" || $ed4!="" || $ed5!="")
    {
        $cv .= "<p class=MsoNormalCxSpLast><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#741B47;text-transform:uppercase;letter-spacing:2.0pt'>EDUCATION</span></b></p>

";

        if($ed1 != "")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ed1</span></p>

";
        }

        if($ed2 != "")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ed2</span></p>

";
        }

        if($ed3 != "")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ed3</span></p>

        ";
        }

        if($ed4 != "")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ed4</span></p>

";
        }

        if($ed5 != "")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ed5</span></p>

";
        }

        $cv .= "<br>";
    }

    if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!="" || $tit_ex4!="" || $tit_ex5!="" || $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="" || $desc_ex4!="" || $desc_ex5!="")
    {

        $cv .= "<p class=MsoNormalCxSpMiddle><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#741B47;text-transform:uppercase;letter-spacing:2.0pt'>Experience</span></b></p>



";

        if($tit_ex!="" && $desc_ex!="")
        {
            $cv .= "<h2><span lang=EN-US>$tit_ex</span></h2><br>

<p class=MsoListParagraph><span lang=EN-US style='font-size:14.0pt;line-height:
115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$desc_ex</span></p>

<br>
";
        }

        if($tit_ex2!="" && $desc_ex2!="")
        {
            $cv .= "<h2><span lang=EN-US>$tit_ex2</span></h2><br>

<p class=MsoListParagraph><span lang=EN-US style='font-size:14.0pt;line-height:
115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$desc_ex2</span></p>
<br>

";
        }

        if($tit_ex3!="" && $desc_ex3!="")
        {
            $cv .= "<h2><span lang=EN-US>$tit_ex3</span></h2><br>

<p class=MsoListParagraph><span lang=EN-US style='font-size:14.0pt;line-height:
115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$desc_ex3</span></p>

<br>
";
        }

        if($tit_ex4!="" && $desc_ex4!="")
        {
            $cv .= "<h2><span lang=EN-US>$tit_ex4</span></h2><br>

<p class=MsoListParagraph><span lang=EN-US style='font-size:14.0pt;line-height:
115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$desc_ex4</span></p>

<br>
";
        }

        if($tit_ex5!="" && $desc_ex5!="")
        {
            $cv .= "<h2><span lang=EN-US>$tit_ex5</span></h2><br>

<p class=MsoListParagraph><span lang=EN-US style='font-size:14.0pt;line-height:
115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$desc_ex5</span></p>

<br>
";
    }
    }

    if($ski!="" || $ski2!="" || $ski3!="")
    {

        $cv .= "<p class=MsoNormalCxSpLast><b><span lang=EN-US style='font-family:\"Georgia\",serif;
color:#741B47;text-transform:uppercase;letter-spacing:2.0pt'>Skills</span></b></p>
";

        if($ski!="")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ski</span></p>
";
        }

        if($ski2!="")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ski2</span></p>
";
        }

        if($ski3!="")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst><span lang=EN-US style='font-size:14.0pt;
line-height:115%;font-family:\"Wingdings 2\";color:#244A58;letter-spacing:3.0pt'>å<span
style='font:7.0pt \"Times New Roman\"'> </span></span><span lang=EN-US>$ski3</span></p>
";
        }
    }

    $cv .= "</div></body>";

    if($_POST['rad'] == 'doc')
    {


        $cv .= "</html>";
        $file = fopen($name.".doc","w");
        fwrite($file,$cv);
        fclose($file);

        header("Content-disposition: attachment; filename=".$name.".doc");

        header("Content-type: application/msword");
        readfile($name.".doc");

    }








    if($_POST['rad'] == 'print')
    {
        $cv .= "<script language=\"javascript\" type=\"text/javascript\">
<!--
   window.print();
//-->
</script>
</html>
";
    }



echo $cv;
}