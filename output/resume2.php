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
<!DOCTYPE html>
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
	{font-family:\"MS Mincho\";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
@font-face
	{font-family:\"Cambria Math\";
	panose-1:0 0 0 0 0 0 0 0 0 0;}
@font-face
	{font-family:Verdana;
	panose-1:2 11 6 4 3 5 4 4 2 4;}
@font-face
	{font-family:\"High Tower Text\";
	panose-1:2 4 5 2 5 5 6 3 3 3;}
@font-face
	{font-family:\"\@MS Mincho\";
	panose-1:2 2 6 9 4 2 5 8 3 4;}
 /* Style Definitions */
 p.MsoNormal, li.MsoNormal, div.MsoNormal
	{margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
h1
	{mso-style-link:\"Heading 1 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	border:none;
	padding:0cm;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
h2
	{mso-style-link:\"Heading 2 Char\";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Verdana\",\"sans-serif\";}
a:link, span.MsoHyperlink
	{color:blue;
	text-decoration:underline;}
a:visited, span.MsoHyperlinkFollowed
	{color:purple;
	text-decoration:underline;}
p.MsoNoSpacing, li.MsoNoSpacing, div.MsoNoSpacing
	{margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraph, li.MsoListParagraph, div.MsoListParagraph
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraphCxSpFirst, li.MsoListParagraphCxSpFirst, div.MsoListParagraphCxSpFirst
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraphCxSpMiddle, li.MsoListParagraphCxSpMiddle, div.MsoListParagraphCxSpMiddle
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.MsoListParagraphCxSpLast, li.MsoListParagraphCxSpLast, div.MsoListParagraphCxSpLast
	{margin-top:0cm;
	margin-right:0cm;
	margin-bottom:0cm;
	margin-left:18.0pt;
	margin-bottom:.0001pt;
	text-indent:-18.0pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
span.Heading1Char
	{mso-style-name:\"Heading 1 Char\";
	mso-style-link:\"Heading 1\";
	font-family:\"Arial\",\"sans-serif\";
	font-weight:bold;}
span.Heading2Char
	{mso-style-name:\"Heading 2 Char\";
	mso-style-link:\"Heading 2\";
	font-family:\"Verdana\",\"sans-serif\";
	font-weight:bold;}
p.Tabbedtextleftandright, li.Tabbedtextleftandright, div.Tabbedtextleftandright
	{mso-style-name:\"Tabbed text left and right\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.Name, li.Name, div.Name
	{mso-style-name:Name;
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	border:none;
	padding:0cm;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";
	font-weight:bold;}
p.Contactinfo, li.Contactinfo, div.Contactinfo
	{mso-style-name:\"Contact info\";
	margin:0cm;
	margin-bottom:.0001pt;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
p.Topborder, li.Topborder, div.Topborder
	{mso-style-name:\"Top border\";
	margin:0cm;
	margin-bottom:.0001pt;
	line-height:115%;
	border:none;
	padding:0cm;
	font-size:10.0pt;
	font-family:\"Arial\",\"sans-serif\";}
.MsoChpDefault
	{font-family:\"Calibri\",\"sans-serif\";}
.MsoPapDefault
	{margin-bottom:10.0pt;
	line-height:115%;}
@page WordSection1
	{size:612.0pt 792.0pt;
	margin:72.0pt 72.0pt 72.0pt 72.0pt;}
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

<body lang=EN-IN link=blue vlink=purple>

<div class=WordSection1>
";

    if($name != "")
    {
        $cv .= "<p class=MsoNormal><b><span lang=EN-US style='font-size:16.0pt;line-height:
115%'>".$name."</span></b></p>";
    }

    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:1.0pt 0cm 0cm 0cm'>

<p class=Topborder style='border:none;padding:0cm'><span lang=EN-US>&nbsp;</span></p>

</div>

";

    if($address != "")
    {
        $cv .= "<p class=MsoNormal><span lang=EN-US>".$address."</span></p>";
    }

    if($phone != "")
    {
        $cv .= "<p class=MsoNormal><span lang=EN-US>".$phone."</span></p>";
    }

    if($email!="")
    {
        $cv .= "<p class=MsoNormal><span lang=EN-US>".$email."</span></p>
    ";

    }

    $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>

";

    if($ed1!="" || $ed2!="" || $ed3!="" || $ed4!="" || $ed5!="")
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>
<h1 style='border:none;padding:0cm'><span lang=EN-US>Education</span></h1><br>
</div>
";

        if($ed1 != "")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$ed1."</span></p>
";
        }

        if($ed2 != "")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$ed2."</span></p>
";
        }

        if($ed3 != "")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$ed3."</span></p>
";


        }

        if($ed4 != "")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".ed4."</span></p>
";


        }

        if($ed5 != "")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$ed5."</span></p>
";


         }
        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";
    }
    if($ski!="" || $ski2!="" || $ski3!="")
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>

<h1 style='border:none;padding:0cm'><span lang=EN-US>Skills</span></h1><br>

</div>";

        if($ski!="")
        {
            $cv .= "<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
lang=EN-US style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$ski."</span></p>
";
        }

        if($ski2!="")
        {
            $cv .= "<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
lang=EN-US style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$ski2."</span></p>
";
        }

        if($ski3!="")
        {
            $cv .= "<p class=MsoNormal style='margin-left:18.0pt;text-indent:-18.0pt'><span
lang=EN-US style='font-family:Symbol'>·<span style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$ski3."</span></p>
";
        }
        $cv .= "<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>";
    }


    if($object != "")
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>

<h1 style='border:none;padding:0cm'><span lang=EN-US>Objective</span></h1><br>

</div>

<p class=Tabbedtextleftandright><span lang=EN-US>".$object."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";
    }


    if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!="" || $tit_ex4!="" || $tit_ex5!="" || $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="" || $desc_ex4!="" || $desc_ex5!="")
    {
        $cv .= "<div style='border:none;border-top:solid #26ADE4 3.0pt;padding:10.0pt 0cm 0cm 0cm'>

<h1 style='border:none;padding:0cm'><span lang=EN-US>Experience</span></h1><br>

</div>
";





        if($tit_ex!="" && $desc_ex!="")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$tit_ex."</span></p>

<p class=MsoListParagraph><span lang=EN-US style='font-family:Symbol'>·<span
style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$desc_ex."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";


        }


        if($tit_ex2!="" && $desc_ex2!="")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$tit_ex2."</span></p>

<p class=MsoListParagraph><span lang=EN-US style='font-family:Symbol'>·<span
style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$desc_ex2."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";


        }


        if($tit_ex3!="" && $desc_ex3!="")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$tit_ex3."</span></p>

<p class=MsoListParagraph><span lang=EN-US style='font-family:Symbol'>·<span
style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$desc_ex3."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";


        }


        if($tit_ex4!="" && $desc_ex4!="")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$tit_ex4."</span></p>

<p class=MsoListParagraph><span lang=EN-US style='font-family:Symbol'>·<span
style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$desc_ex4."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
";


        }


        if($tit_ex5!="" && $desc_ex5!="")
        {
            $cv .= "<p class=Tabbedtextleftandright><span lang=EN-US>".$tit_ex5."</span></p>

<p class=MsoListParagraph><span lang=EN-US style='font-family:Symbol'>·<span
style='font:7.0pt \"Times New Roman\"'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
</span></span><span lang=EN-US>".$desc_ex5."</span></p>

<p class=MsoNormal><span lang=EN-US>&nbsp;</span></p>
            ";


        }
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
