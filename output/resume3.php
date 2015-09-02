<?php

/*require_once("dompdf_config.custom.inc.php");*/
/*require_once("dompdf_config.inc.php");
require_once('html2pdf.class.php');
include('mpdf60/mpdf.php');*/
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

    $cv = "
<html>

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
	{font-family:\"Calisto MT\";
	panose-1:2 4 6 3 5 5 5 3 3 4;}
@font-face
	{font-family:Consolas;
	panose-1:2 11 6 9 2 2 4 3 2 4;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;}
@font-face
	{font-family:\"Century Gothic\";
	panose-1:2 11 5 2 2 2 2 2 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	text-align:left;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoNormalCxSpFirst, li.MsoNormalCxSpFirst, div.MsoNormalCxSpFirst
	{margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoNormalCxSpMiddle, li.MsoNormalCxSpMiddle, div.MsoNormalCxSpMiddle
	{margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoNormalCxSpLast, li.MsoNormalCxSpLast, div.MsoNormalCxSpLast
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
h1
	{mso-style-link:\"Heading 1 Char\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:14.0pt;
	margin-left:0in;
	line-height:13.0pt;
	border:none;
	padding:0in;
	font-size:14.0pt;
	font-family:Consolas;
	letter-spacing:2.0pt;}
h1.CxSpFirst
	{mso-style-link:\"Heading 1 Char\";
	margin:0in;
	margin-bottom:.0001pt;
	line-height:13.0pt;
	border:none;
	padding:0in;
	font-size:14.0pt;
	font-family:Consolas;
	letter-spacing:2.0pt;}
h1.CxSpMiddle
	{mso-style-link:\"Heading 1 Char\";
	margin:0in;
	margin-bottom:.0001pt;
	line-height:13.0pt;
	border:none;
	padding:0in;
	font-size:14.0pt;
	font-family:Consolas;
	letter-spacing:2.0pt;}
h1.CxSpLast
	{mso-style-link:\"Heading 1 Char\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:14.0pt;
	margin-left:0in;
	line-height:13.0pt;
	border:none;
	padding:0in;
	font-size:14.0pt;
	font-family:Consolas;
	letter-spacing:2.0pt;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{mso-style-link:\"Header Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoHeaderCxSpFirst, li.MsoHeaderCxSpFirst, div.MsoHeaderCxSpFirst
	{mso-style-link:\"Header Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoHeaderCxSpMiddle, li.MsoHeaderCxSpMiddle, div.MsoHeaderCxSpMiddle
	{mso-style-link:\"Header Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoHeaderCxSpLast, li.MsoHeaderCxSpLast, div.MsoHeaderCxSpLast
	{mso-style-link:\"Header Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{mso-style-link:\"Footer Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:9.0pt;
	font-family:Consolas;}
p.MsoFooterCxSpFirst, li.MsoFooterCxSpFirst, div.MsoFooterCxSpFirst
	{mso-style-link:\"Footer Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:9.0pt;
	font-family:Consolas;}
p.MsoFooterCxSpMiddle, li.MsoFooterCxSpMiddle, div.MsoFooterCxSpMiddle
	{mso-style-link:\"Footer Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:9.0pt;
	font-family:Consolas;}
p.MsoFooterCxSpLast, li.MsoFooterCxSpLast, div.MsoFooterCxSpLast
	{mso-style-link:\"Footer Char\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:9.0pt;
	font-family:Consolas;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{mso-style-link:\"No Spacing Char\";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0in;
	margin-right:31.9pt;
	margin-bottom:10.0pt;
	margin-left:31.5pt;
	text-align:justify;
	text-indent:-13.5pt;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0in;
	margin-right:31.9pt;
	margin-bottom:0in;
	margin-left:31.5pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-13.5pt;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0in;
	margin-right:31.9pt;
	margin-bottom:0in;
	margin-left:31.5pt;
	margin-bottom:.0001pt;
	text-align:justify;
	text-indent:-13.5pt;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0in;
	margin-right:31.9pt;
	margin-bottom:10.0pt;
	margin-left:31.5pt;
	text-align:justify;
	text-indent:-13.5pt;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
span.Heading1Char
	{mso-style-name:\"Heading 1 Char\";
	mso-style-link:\"Heading 1\";
	font-family:Consolas;
	letter-spacing:2.0pt;
	font-weight:bold;}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:11.0pt;
	font-family:Consolas;
	text-transform:uppercase;
	letter-spacing:3.0pt;
	font-weight:bold;}
p.NameCxSpFirst, li.NameCxSpFirst, div.NameCxSpFirst
	{mso-style-name:NameCxSpFirst;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:11.0pt;
	font-family:Consolas;
	text-transform:uppercase;
	letter-spacing:3.0pt;
	font-weight:bold;}
p.NameCxSpMiddle, li.NameCxSpMiddle, div.NameCxSpMiddle
	{mso-style-name:NameCxSpMiddle;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:11.0pt;
	font-family:Consolas;
	text-transform:uppercase;
	letter-spacing:3.0pt;
	font-weight:bold;}
p.NameCxSpLast, li.NameCxSpLast, div.NameCxSpLast
	{mso-style-name:NameCxSpLast;
	margin:0in;
	margin-bottom:.0001pt;
	text-align:right;
	font-size:11.0pt;
	font-family:Consolas;
	text-transform:uppercase;
	letter-spacing:3.0pt;
	font-weight:bold;}
span.HeaderChar
	{mso-style-name:\"Header Char\";
	mso-style-link:Header;}
span.FooterChar
	{mso-style-name:\"Footer Char\";
	mso-style-link:Footer;
	font-family:Consolas;}
span.NoSpacingChar
	{mso-style-name:\"No Spacing Char\";
	mso-style-link:\"No Spacing\";
	font-family:\"Garamond\",\"serif\";}
p.NormalConsolas, li.NormalConsolas, div.NormalConsolas
	{mso-style-name:\"Normal Consolas\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:Consolas;}
p.NormalConsolasCxSpFirst, li.NormalConsolasCxSpFirst, div.NormalConsolasCxSpFirst
	{mso-style-name:\"Normal ConsolasCxSpFirst\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:Consolas;}
p.NormalConsolasCxSpMiddle, li.NormalConsolasCxSpMiddle, div.NormalConsolasCxSpMiddle
	{mso-style-name:\"Normal ConsolasCxSpMiddle\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:Consolas;}
p.NormalConsolasCxSpLast, li.NormalConsolasCxSpLast, div.NormalConsolasCxSpLast
	{mso-style-name:\"Normal ConsolasCxSpLast\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:10.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:Consolas;}
span.BoldExpandedConsola
	{mso-style-name:\"Bold Expanded Consola\";
	font-family:Consolas;
	font-variant:normal !important;
	text-transform:uppercase;
	/*letter-spacing:1.0pt;*/
	word-spacing: 2px;

	font-weight:bold;}
p.NormalTabbed, li.NormalTabbed, div.NormalTabbed
	{mso-style-name:\"Normal Tabbed\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	word-spacing: -40px;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.NormalTabbedCxSpFirst, li.NormalTabbedCxSpFirst, div.NormalTabbedCxSpFirst
	{mso-style-name:\"Normal TabbedCxSpFirst\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.NormalTabbedCxSpMiddle, li.NormalTabbedCxSpMiddle, div.NormalTabbedCxSpMiddle
	{mso-style-name:\"Normal TabbedCxSpMiddle\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.NormalTabbedCxSpLast, li.NormalTabbedCxSpLast, div.NormalTabbedCxSpLast
	{mso-style-name:\"Normal TabbedCxSpLast\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:13.0pt;
	font-size:11.0pt;
	font-family:\"Cambria Math\",\"serif\";}
p.OrangeItalic, li.OrangeItalic, div.OrangeItalic
	{mso-style-name:\"Orange Italic\";
	margin:0in;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Century Gothic\",\"sans-serif\";
	color:#C45911;
	font-style:italic;}
.MsoChpDefault
	{font-family:\"Calibri\",\"sans-serif\";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
 /* Page Definitions */
 @page WordSection1
	{size:8.5in 11.0in;
	margin:45.35pt .6in .25in .6in;}
div.WordSection1
	{page:WordSection1;}
 /* List Definitions */
 ol
	{margin-bottom:0in;}
ul
	{margin-bottom:0in;}
-->
</style>

</head>

<body lang=EN-US link=blue vlink=purple>

<div class=WordSection1 dir=RTL>

<p class=MsoNoSpacing dir=LTR>&nbsp;</p>

<div align=left dir=ltr>

<table class=MsoTableGrid border=0 cellspacing=0 cellpadding=0
 style='border-collapse:collapse;border:none'>
 <tr>
  <td width=146 valign=top style='width:109.5pt;padding:0in 0in 0in 0in'>";

    if($name != "")
    {
        $cv .= " <p class=Name dir=LTR>".$name."</p>";
    }

    if($address != "")
    {
        $cv .= "<p class=MsoNormalCxSpFirst align=right dir=LTR style='margin-bottom:0in;
  margin-bottom:.0001pt;text-align:right'>".$address."</p>";
    }

    if($phone != "")
    {
        $cv .= "<p class=MsoNormalCxSpMiddle align=right dir=LTR style='margin-bottom:0in;
  margin-bottom:.0001pt;text-align:right'>".$phone."</p>";
    }

    if($email!="")
    {
        $cv .= "<p class=MsoNormalCxSpMiddle align=right dir=LTR style='margin-bottom:0in;
  margin-bottom:.0001pt;text-align:right'>".$email."</p>
    ";

    }

    $cv .= "<p class=MsoNormalCxSpMiddle align=right dir=LTR style='margin-bottom:0in;
  margin-bottom:.0001pt;text-align:right'>&nbsp;</p>
  </td>
  <td width=16 valign=top style='width:12.0pt;padding:0in 0in 0in 0in'>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
  </td>";

    if($object != "")
    {
        $cv .= "<td width=539 valign=top style='width:404.1pt;padding:0in 0in 0in 0in'>
  <div style='border:none;border-top:solid black 1.0pt;padding:14.0pt 0in 0in 0in'>
  <h1 dir=LTR>OBJECTIVE</h1>
  </div>
  <p class=MsoNormalCxSpFirst dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>".$object."               </p>
  
  <p class=MsoNormalCxSpMiddle dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
  </td>
 </tr>";
    }
	

	if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!="" || $tit_ex4!="" || $tit_ex5!="" || $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="" || $desc_ex4!="" || $desc_ex5!="")
    {
        $cv .= "<tr>
  <td width=146 valign=top style='width:109.5pt;padding:0in 0in 0in 0in'>
  <p class=MsoNormalCxSpMiddle align=right dir=LTR style='margin-bottom:0in;
  margin-bottom:.0001pt;text-align:right'>&nbsp;</p>
  </td>
  <td width=16 valign=top style='width:12.0pt;padding:0in 0in 0in 0in'>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
  </td>
  <td width=539 valign=top style='width:404.1pt;padding:0in 0in 0in 0in'>
  <div style='border:none;border-top:solid black 1.0pt;padding:14.0pt 0in 0in 0in'>
  <h1 dir=LTR>WORK EXPERIENCE</h1>
  </div>
";





        if($tit_ex!="" && $desc_ex!="")
        {
            $cv .= "<p class=NormalTabbed dir=LTR><span class=BoldExpandedConsola>".$tit_ex."</span>                                                                                                                              </p>
  
  <p class=MsoNormalCxSpMiddle dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>".$desc_ex." </p>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
";


        }


        if($tit_ex2!="" && $desc_ex2!="")
        {
            $cv .= " <p class=NormalTabbed dir=LTR><span class=BoldExpandedConsola>".$tit_ex2."</span>                                                                                                                                 </p>
  <p class=MsoNormalCxSpMiddle dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>".$desc_ex2."</p>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
";


        }


        if($tit_ex3!="" && $desc_ex3!="")
        {
			   $cv .= " <p class=NormalTabbed dir=LTR><span class=BoldExpandedConsola>".$tit_ex3."</span>                                                                                                                                 </p>
  <p class=MsoNormalCxSpMiddle dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>".$desc_ex3."</p>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
";

        }


        if($tit_ex4!="" && $desc_ex4!="")
        {   $cv .= " <p class=NormalTabbed dir=LTR><span class=BoldExpandedConsola>".$tit_ex4."</span>                                                                                                                                 </p>
  <p class=MsoNormalCxSpMiddle dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>".$desc_ex4."</p>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
";


        }


        if($tit_ex5!="" && $desc_ex5!="")
        {   $cv .= " <p class=NormalTabbed dir=LTR><span class=BoldExpandedConsola>".$tit_ex2."</span>                                                                                                                                 </p>
  <p class=MsoNormalCxSpMiddle dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>".$desc_ex."</p>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
";


        }

        









    }
	
	
    if($ed1!="" || $ed2!="" || $ed3!="" || $ed4!="" || $ed5!="")
    {
        $cv .= "<div style='border:none;border-top:solid black 1.0pt;padding:14.0pt 0in 0in 0in'>
  <h1 dir=LTR>EDUCATION</h1>
  </div>
";

        if($ed1 != "")
        {
            $cv .= "<p class=NormalTabbedCxSpFirst dir=LTR style='margin-left:.5in;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ed1."</p>
";


        }

        if($ed2 != "")
        {
            $cv .= "<p class=NormalTabbedCxSpFirst dir=LTR style='margin-left:.5in;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ed2."</p>
";


        }

        if($ed3 != "")
        {
            $cv .= "<p class=NormalTabbedCxSpFirst dir=LTR style='margin-left:.5in;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ed3."</p>
";


        }

        if($ed4 != "")
        {
            $cv .= "<p class=NormalTabbedCxSpFirst dir=LTR style='margin-left:.5in;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ed4."</p>
";


        }

        if($ed5 != "")
        {
            $cv .= "<p class=NormalTabbedCxSpFirst dir=LTR style='margin-left:.5in;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ed5."</p>
";


        }

        $cv .= "<p class=MsoNormal dir=LTR style='margin-bottom:0in;margin-bottom:.0001pt'>&nbsp;</p>";



    }
	
    if($ski!="" || $ski2!="" || $ski3!="")
    {
        $cv .= "<div style='border:none;border-top:solid black 1.0pt;padding:14.0pt 0in 0in 0in'>
  <h1 dir=LTR>SKILLS</h1>
  </div>";

        if($ski!="")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst dir=LTR style='margin-top:0in;margin-right:
  31.9pt;margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ski." </p>
";
        }

        if($ski2!="")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst dir=LTR style='margin-top:0in;margin-right:
  31.9pt;margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ski2." </p>
";
        }

        if($ski3!="")
        {
            $cv .= "<p class=MsoListParagraphCxSpFirst dir=LTR style='margin-top:0in;margin-right:
  31.9pt;margin-bottom:0in;margin-left:.5in;margin-bottom:.0001pt;text-indent:
  -.25in'><span style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
  </span></span>".$ski3." </p>
";
        }

        $cv .= "<p class=MsoNormalCxSpFirst dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
  </td>
 </tr> <tr>
  <td width=146 valign=top style='width:109.5pt;padding:0in 0in 0in 0in'>
  <p class=MsoNormalCxSpMiddle align=right dir=LTR style='margin-bottom:0in;
  margin-bottom:.0001pt;text-align:right'>&nbsp;</p>
  </td>
  <td width=16 valign=top style='width:12.0pt;padding:0in 0in 0in 0in'>
  <p class=MsoNormalCxSpLast dir=LTR style='margin-bottom:0in;margin-bottom:
  .0001pt'>&nbsp;</p>
  </td>
  <td width=539 valign=top style='width:404.1pt;padding:0in 0in 0in 0in'>
  <div style='border:none;border-top:solid black 1.0pt;padding:14.0pt 0in 0in 0in'>
  <h1 dir=LTR>&nbsp;</h1>
  </div>
  </td>
 </tr>
</table>

</div>

<p class=MsoNoSpacing dir=LTR>&nbsp;</p>

</div>

</body>";


    }
    


   /* $mpdf=new mPDF('c','A4','','',32,25,27,25,16,13);
    $mpdf->SetDisplayMode('fullpage');
    $mpdf->list_indent_first_level = 0;
    $mpdf->WriteHTML($html);
    $mpdf->Output('mpdf.pdf','D');*/

    /*$mpdf=new mPDF();

    $mpdf->WriteHTML($cv);

    $mpdf->Output("ex.pdf","D");*/








    /*$html2pdf = new HTML2PDF('P','A4','en');
    $html2pdf->WriteHTML($cv);
    $html2pdf->Output('example.pdf');*/

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

   /* $dompdf = new DOMPDF();
    $dompdf->load_html($cv);
    $dompdf->render();
    $dompdf->stream("".$name.".pdf");
*/
    if($_POST['rad'] == 'print')
    {
        $cv .= "<script language=\"javascript\" type=\"text/javascript\">
<!--
   window.print();
//-->
</script>
</html>
";
    echo $cv;
    }

}
?>
