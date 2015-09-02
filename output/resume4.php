<?php
/**
 * Created by PhpStorm.
 * User: Tanmay
 * Date: 03/04/15
 * Time: 14:31
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
	{font-family:Shruti;
	panose-1:2 11 5 2 4 2 4 2 2 3;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:2 4 5 3 5 4 6 3 2 4;}
@font-face
	{font-family:Calibri;
	panose-1:2 15 5 2 2 2 4 3 2 4;}
@font-face
	{font-family:Georgia;
	panose-1:2 4 5 2 5 4 5 2 3 3;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	font-size:11.0pt;
	font-family:\"Georgia\",serif;}
h1
	{mso-style-link:\"Heading 1 Char\";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:5.0pt;
	margin-left:0cm;
	page-break-after:avoid;
	border:none;
	padding:0cm;
	font-size:12.0pt;
	font-family:\"Georgia\",serif;
	color:black;
	text-transform:uppercase;
	letter-spacing:1.25pt;}
h2
	{mso-style-link:\"Heading 2 Char\";
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	font-size:11.0pt;
	font-family:\"Georgia\",serif;}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:18.0pt;
	text-indent:-18.0pt;
	font-size:11.0pt;
	font-family:\"Georgia\",serif;}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin-top:6.0pt;
	margin-right:0cm;
	margin-bottom:6.0pt;
	margin-left:0cm;
	text-align:center;
	font-size:20.0pt;
	font-family:\"Georgia\",serif;
	font-weight:bold;}
p.ContactInfo, li.ContactInfo, div.ContactInfo
	{mso-style-name:\"Contact Info\";
	margin:0cm;
	margin-bottom:.0001pt;
	text-align:center;
	font-size:10.0pt;
	font-family:\"Georgia\",serif;}
span.Heading1Char
	{mso-style-name:\"Heading 1 Char\";
	mso-style-link:\"Heading 1\";
	font-family:\"Georgia\",serif;
	color:black;
	text-transform:uppercase;
	letter-spacing:1.25pt;
	font-weight:bold;}
span.Heading2Char
	{mso-style-name:\"Heading 2 Char\";
	mso-style-link:\"Heading 2\";
	font-family:\"Arial\",sans-serif;
	font-weight:bold;}
span.NormalBold
	{mso-style-name:\"Normal Bold\";
	font-weight:bold;}
span.NormalItalic
	{mso-style-name:\"Normal Italic\";
	font-family:\"Arial\",sans-serif;
	font-style:italic;}
p.Contactinfo0, li.Contactinfo0, div.Contactinfo0
	{mso-style-name:\"Contact info\";
	margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:4.5pt;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Calibri\",sans-serif;
	color:#969696;}
.MsoChpDefault
	{font-family:\"Calibri\",sans-serif;}
.MsoPapDefault
	{margin-top:8.0pt;
	margin-right:0cm;
	margin-bottom:8.0pt;
	margin-left:18.0pt;
	text-indent:-18.0pt;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;
	border:solid windowtext 1.0pt;
	padding:31.0pt 31.0pt 31.0pt 31.0pt;}
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

";

    if($name != "")
    {
        $cv .= "<p class=Name><span lang=EN-US>$name</span></p>";
    }

    if($address != "")
    {
        $cv .= "<p class=ContactInfo><span lang=EN-US>$address</span></p>";
    }

    if($phone != "")
    {
        $cv .= "<p class=ContactInfo><span lang=EN-US>$phone
";
    }

    if($email!="")
    {
        $cv .= " | $email</span></p>";
    }

    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>";

    if($object != "")
    {
        $cv .= "<h1><span lang=EN-US>objective</span></h1>

</div><p class=MsoNormal><span lang=EN-US>$object</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";




    }

    if($ed1!="" || $ed2!="" || $ed3!="" || $ed4!="" || $ed5!="")
    {
        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Education</span></h1>

</div>
";

        if($ed1 != "")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ed1</span></p>
";
        }

        if($ed2 != "")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ed2</span></p>
";
        }

        if($ed3 != "")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ed3</span></p>
";
        }

        if($ed4 != "")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ed4</span></p>
";
        }

        if($ed5 != "")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ed5</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";
    }

    if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!="" || $tit_ex4!="" || $tit_ex5!="" || $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="" || $desc_ex4!="" || $desc_ex5!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Experience</span></h1>

</div>";

        if($tit_ex!="" && $desc_ex!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex</span></span><span
lang=EN-US>                                                                                                           </span></p>

<p class=MsoNormal><span lang=EN-US>            $desc_ex</span></p>
";
        }

        if($tit_ex2!="" && $desc_ex2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex2</span></span><span
lang=EN-US>                                                                                                           </span></p>

<p class=MsoNormal><span lang=EN-US>            $desc_ex2</span></p>
";
        }

        if($tit_ex3!="" && $desc_ex3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex3</span></span><span
lang=EN-US>                                                                                                           </span></p>

<p class=MsoNormal><span lang=EN-US>            $desc_ex3</span></p>
";
        }

        if($tit_ex4!="" && $desc_ex4!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex4</span></span><span
lang=EN-US>                                                                                                           </span></p>

<p class=MsoNormal><span lang=EN-US>            $desc_ex4</span></p>
";
        }

        if($tit_ex5!="" && $desc_ex5!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span class=NormalBold><span lang=EN-US>$tit_ex5</span></span><span
lang=EN-US>                                                                                                           </span></p>

<p class=MsoNormal><span lang=EN-US>            $desc_ex5</span></p>
";
        }

        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }

    if($ski!="" || $ski2!="" || $ski3!="")
    {

        $cv .= "<div style='border:none;border-bottom:solid windowtext 1.0pt;padding:0cm 0cm 5.0pt 0cm'>

<h1><span lang=EN-US>Skills</span></h1>

</div>";

        if($ski!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ski</span></p>";
        }

        if($ski2!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ski2</span></p>";
        }

        if($ski3!="")
        {
            $cv .= "<p class=MsoListParagraph style='margin-left:36.0pt'><span lang=EN-US
style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>$ski3</span></p>";
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
        echo $cv;
    }

}