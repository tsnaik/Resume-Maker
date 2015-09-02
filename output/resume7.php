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

    $cv = "<html>

<head>
<meta http-equiv=Content-Type content=\"text/html; charset=windows-1252\">
<meta name=Generator content=\"Microsoft Word 15 (filtered)\">
<style>
<!--
 /* Font Definitions */
 @font-face
	{font-family:\"Tms Rmn\";
	panose-1:2 2 6 3 4 5 5 2 3 4;}
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
	{font-family:Times;
	panose-1:2 2 6 3 5 4 5 2 3 4;}
@font-face
	{font-family:Garamond;
	panose-1:2 2 4 4 3 3 1 1 8 3;}
@font-face
	{font-family:\"Arial Black\";
	panose-1:2 11 10 4 2 1 2 2 2 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
h1
	{margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:12.0pt;
	margin-left:-1.5in;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:11.5pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:1.0pt;
	font-weight:normal;}
h2
	{margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:12.0pt;
	margin-left:0in;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:10.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:.25pt;
	font-weight:normal;}
h3
	{margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:10.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:-.1pt;
	font-weight:normal;
	font-style:italic;}
h4
	{margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:12.0pt;
	font-family:\"Garamond\",\"serif\";
	letter-spacing:.25pt;
	font-weight:normal;
	font-style:italic;}
h5
	{margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:9.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:1.0pt;
	font-weight:bold;}
h6
	{margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	text-align:justify;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";
	font-weight:bold;}
p.MsoHeader, li.MsoHeader, div.MsoHeader
	{margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:-1.5in;
	text-align:justify;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;}
p.MsoFooter, li.MsoFooter, div.MsoFooter
	{margin-top:11.0pt;
	margin-right:-42.0pt;
	margin-bottom:11.0pt;
	margin-left:-1.5in;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;}
p.MsoBodyText, li.MsoBodyText, div.MsoBodyText
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.MsoBodyTextIndent, li.MsoBodyTextIndent, div.MsoBodyTextIndent
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:.5in;
	text-align:justify;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.MsoDate, li.MsoDate, div.MsoDate
	{margin-top:0in;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
em
	{font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:0pt;
	font-style:normal;}
p
	{margin-right:0in;
	margin-left:0in;
	font-size:12.0pt;
	font-family:\"Times New Roman\",\"serif\";}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0in;
	margin-bottom:.0001pt;
	font-size:11.0pt;
	font-family:\"Calibri\",\"sans-serif\";}
p.Responsibilitieslist, li.Responsibilitieslist, div.Responsibilitieslist
	{mso-style-name:\"Responsibilities list\";
	margin-top:0in;
	margin-right:12.2pt;
	margin-bottom:3.0pt;
	margin-left:26.4pt;
	text-align:justify;
	text-indent:-12.2pt;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.Contactinfo, li.Contactinfo, div.Contactinfo
	{mso-style-name:\"Contact info\";
	margin:0in;
	margin-bottom:.0001pt;
	text-align:center;
	line-height:8.0pt;
	font-size:7.5pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:1.5pt;}
p.CompanyName, li.CompanyName, div.CompanyName
	{mso-style-name:\"Company Name\";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.Institution, li.Institution, div.Institution
	{mso-style-name:Institution;
	margin-top:3.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.ItalicExpanded, li.ItalicExpanded, div.ItalicExpanded
	{mso-style-name:\"Italic Expanded\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:4.0pt;
	margin-left:103.7pt;
	font-size:11.5pt;
	font-family:\"Garamond\",\"serif\";
	letter-spacing:.8pt;
	font-style:italic;}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin-top:0in;
	margin-right:0in;
	margin-bottom:22.0pt;
	margin-left:0in;
	text-align:center;
	font-size:22.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:4.0pt;}
p.Objective, li.Objective, div.Objective
	{mso-style-name:Objective;
	margin-top:3.0pt;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.SectionTitle, li.SectionTitle, div.SectionTitle
	{mso-style-name:\"Section Title\";
	margin-top:20.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	border:none;
	padding:0in;
	font-size:10.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:.75pt;}
p.PersonalInfo, li.PersonalInfo, div.PersonalInfo
	{mso-style-name:\"Personal Info\";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:3.0pt;
	margin-left:12.25pt;
	text-align:justify;
	text-indent:-12.25pt;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.HeadingBase, li.HeadingBase, div.HeadingBase
	{mso-style-name:\"Heading Base\";
	margin-top:12.0pt;
	margin-right:0in;
	margin-bottom:12.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;}
p.HeaderBase, li.HeaderBase, div.HeaderBase
	{mso-style-name:\"Header Base\";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:-1.5in;
	text-align:justify;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;}
p.DocumentLabel, li.DocumentLabel, div.DocumentLabel
	{mso-style-name:\"Document Label\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	text-align:justify;
	font-size:24.0pt;
	font-family:\"Garamond\",\"serif\";
	letter-spacing:-1.0pt;}
p.CityState, li.CityState, div.CityState
	{mso-style-name:\"City\/State\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:11.0pt;
	margin-left:0in;
	text-align:justify;
	line-height:12.0pt;
	page-break-after:avoid;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
span.Lead-inEmphasis
	{mso-style-name:\"Lead-in Emphasis\";
	font-family:\"Arial Black\",\"sans-serif\";
	letter-spacing:-.3pt;}
p.SectionSubtitle, li.SectionSubtitle, div.SectionSubtitle
	{mso-style-name:\"Section Subtitle\";
	margin-top:20.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	border:none;
	padding:0in;
	font-size:12.0pt;
	font-family:\"Garamond\",\"serif\";
	letter-spacing:.5pt;
	font-style:italic;}
span.Job
	{mso-style-name:Job;}
p.PersonalData, li.PersonalData, div.PersonalData
	{mso-style-name:\"Personal Data\";
	margin-top:0in;
	margin-right:.75in;
	margin-bottom:6.0pt;
	margin-left:-.75in;
	text-align:justify;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Arial\",\"sans-serif\";
	font-style:italic;}
p.CompanyNameOne, li.CompanyNameOne, div.CompanyNameOne
	{mso-style-name:\"Company Name One\";
	margin-top:3.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.NoTitle, li.NoTitle, div.NoTitle
	{mso-style-name:\"No Title\";
	margin-top:20.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:0in;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	font-size:10.0pt;
	font-family:\"Garamond\",\"serif\";
	text-transform:uppercase;
	letter-spacing:.75pt;}
span.papertitle
	{mso-style-name:papertitle;}
p.References, li.References, div.References
	{mso-style-name:References;
	margin-top:3.0pt;
	margin-right:0in;
	margin-bottom:6.0pt;
	margin-left:24.1pt;
	text-align:justify;
	text-indent:-24.1pt;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.Educationdegree, li.Educationdegree, div.Educationdegree
	{mso-style-name:\"Education degree\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:4.0pt;
	margin-left:103.7pt;
	font-size:11.5pt;
	font-family:\"Garamond\",\"serif\";
	letter-spacing:.8pt;
	font-style:italic;}
p.Box, li.Box, div.Box
	{mso-style-name:Box;
	margin:0in;
	margin-bottom:.0001pt;
	line-height:14.0pt;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";
	color:#323232;}
p.Textwiththreetabs, li.Textwiththreetabs, div.Textwiththreetabs
	{mso-style-name:\"Text with three tabs\";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:103.7pt;
	margin-bottom:.0001pt;
	line-height:11.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.Crossbulletlist, li.Crossbulletlist, div.Crossbulletlist
	{mso-style-name:\"Cross bullet list\";
	margin-top:0in;
	margin-right:12.2pt;
	margin-bottom:3.0pt;
	margin-left:139.5pt;
	text-align:justify;
	text-indent:-.25in;
	line-height:12.0pt;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.Normalwithleftindent, li.Normalwithleftindent, div.Normalwithleftindent
	{mso-style-name:\"Normal with left indent\";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:103.7pt;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.NormalwithleftindentCxSpFirst, li.NormalwithleftindentCxSpFirst, div.NormalwithleftindentCxSpFirst
	{mso-style-name:\"Normal with left indentCxSpFirst\";
	margin-top:11.0pt;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:103.7pt;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.NormalwithleftindentCxSpMiddle, li.NormalwithleftindentCxSpMiddle, div.NormalwithleftindentCxSpMiddle
	{mso-style-name:\"Normal with left indentCxSpMiddle\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:103.7pt;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
p.NormalwithleftindentCxSpLast, li.NormalwithleftindentCxSpLast, div.NormalwithleftindentCxSpLast
	{mso-style-name:\"Normal with left indentCxSpLast\";
	margin-top:0in;
	margin-right:0in;
	margin-bottom:0in;
	margin-left:103.7pt;
	margin-bottom:.0001pt;
	text-align:justify;
	font-size:11.0pt;
	font-family:\"Garamond\",\"serif\";}
.MsoChpDefault
	{font-size:10.0pt;}
@page WordSection1
	{size:8.5in 11.0in;
	margin:1.0in 1.25in 1.0in 1.25in;}
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

<body lang=EN-US link=blue vlink=purple><div class=WordSection1>";


    if($address != "")
    {
        $cv .= "<p class=Contactinfo>$address</p>";
    }

    if($phone != "" && $email !="")
    {
        $cv .= "<p class=Contactinfo>Phone ".$phone."  • E-mail $email</p>";
    }


    if($name != "")
    {
        $cv .= "<p class=Name>$name</p>";
    }


  

    if($object != "")
    {
        $cv .= "<div style='border:none;border-bottom:solid gray 1.0pt;padding:0in 0in 1.0pt 0in'>

<p class=SectionTitle>OBJECTIVE</p>

</div>

<p class=Textwiththreetabs>$object</p>";
    }
	

	
	
	
    if($ed1!="" || $ed2!="" || $ed3!="" || $ed4!="" || $ed5!="")
    {
        $cv .= "<div style='border:none;border-bottom:solid gray 1.0pt;padding:0in 0in 1.0pt 0in'>

<p class=SectionTitle>Education</p>

</div>
";

        if($ed1 != "")
        {
            $cv .= "<p class=Textwiththreetabs>".$ed1."         </p><p class=ItalicExpanded>&nbsp;</p>
";


        }

        if($ed2 != "")
        {
            $cv .= "<p class=Textwiththreetabs>".$ed2."         </p>

<p class=ItalicExpanded>&nbsp;</p>
";


        }

        if($ed3 != "")
        {
             $cv .= "<p class=Textwiththreetabs>".$ed3."         </p>

<p class=ItalicExpanded>&nbsp;</p>
";


        }

        if($ed4 != "")
        {
      $cv .= "<p class=Textwiththreetabs>".$ed4."         </p>

<p class=ItalicExpanded>&nbsp;</p>
";


        }

        if($ed5 != "")
        {
              $cv .= "<p class=Textwiththreetabs>".$ed5."         </p>

<p class=ItalicExpanded>&nbsp;</p>
";


        }

        


    }
	
	if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!="" || $tit_ex4!="" || $tit_ex5!="" || $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="" || $desc_ex4!="" || $desc_ex5!="")
    {
        $cv .= "<div style='border:none;border-bottom:solid gray 1.0pt;padding:0in 0in 1.0pt 0in'>

<p class=SectionTitle>Work experience</p>

</div>
";





        if($tit_ex!="" && $desc_ex!="")
        {
            $cv .= "<br>

<p class=Crossbulletlist style='margin-left:67.7pt;text-indent:.5in'>$desc_ex</p>
";


        }


        if($tit_ex2!="" && $desc_ex2!="")
        {
           $cv .= "<p class=Textwiththreetabs>$tit_ex2                                                       </p>

<p class=ItalicExpanded>&nbsp;</p>

<p class=Crossbulletlist style='margin-left:67.7pt;text-indent:.5in'>$desc_ex2</p>
";

        }


        if($tit_ex3!="" && $desc_ex3!="")
        {
		 $cv .= "<p class=Textwiththreetabs>$tit_ex3                                                       </p>

<p class=ItalicExpanded>&nbsp;</p>

<p class=Crossbulletlist style='margin-left:67.7pt;text-indent:.5in'>$desc_ex3</p>
";

        }


        if($tit_ex4!="" && $desc_ex4!="")
        {  $cv .= "<p class=Textwiththreetabs>$tit_ex4                                                       </p>

<p class=ItalicExpanded>&nbsp;</p>

<p class=Crossbulletlist style='margin-left:67.7pt;text-indent:.5in'>$desc_ex4</p>
";


        }


        if($tit_ex5!="" && $desc_ex5!="")
        {  $cv .= "<p class=Textwiththreetabs>$tit_ex5                                                       </p>

<p class=ItalicExpanded>&nbsp;</p>

<p class=Crossbulletlist style='margin-left:67.7pt;text-indent:.5in'>$desc_ex5</p>
";

        }

        $cv.="<p class=Crossbulletlist style='margin-left:0in;text-indent:0in'>            </p>";









    }
	
    if($ski!="" || $ski2!="" || $ski3!="")
    {
        $cv .= "<div style='border:none;border-bottom:solid gray 1.0pt;padding:0in 0in 1.0pt 0in'>

<p class=SectionTitle>skills</p>

</div>";

        if($ski!="")
        {
            $cv .= "<p class=NormalwithleftindentCxSpFirst>$ski</p><br>
";
        }

        if($ski2!="")
        {
            $cv .= "<p class=NormalwithleftindentCxSpMiddle style='margin-left:67.7pt;text-indent:
.5in'>$ski2</p><br>
";
        }

        if($ski3!="")
        {
            $cv .= "<p class=NormalwithleftindentCxSpLast>$ski3</p><br>
";
        }

        $cv .= "<p class=MsoNormal align=left style='text-align:left'>&nbsp;</p>

</div>

</body>

</html>
";


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
