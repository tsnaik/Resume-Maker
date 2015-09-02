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

    $cv = "<html lang=\"en\">
    <head>
        <meta charset=\"UTF-8\"><link rel=\"stylesheet\" href=\"style.css\">
        <script type=\"text/javascript\" src=\"//use.typekit.net/lyj3wzr.js\"></script>
        <script type=\"text/javascript\">try{Typekit.load();}catch(e){}</script>";

		
		
    if($name != "")
    {
        $cv .= "<body>
        <div class=\"page\">
            <div class=\"section row\">
                <h1 class=\"col\"><span style=\"font-weight:700\">".$name."</span>";
    }

	$cv.="<div class=\"contact-info col-right\">";
   
    if($phone != "" && $email !="")
    {
        $cv .= "<div>".$phone."</div>
                    <div><a href=\"".$email."\">".$email."</a></div>";
    }


	if($address !="")
	{
		$cv.="".$address."</div>";
	}

	$cv.="                </div>
            </div>";

    if($object != "")
    {
        $cv .= "  <div class=\"section row\">
                <h2 class=\"col\">Interests</h2>
                <div class=\"section-text col-right\"><span class=\"key\">$object</span> </div>
            </div>";
    }
	

	
	  if($ski!="" || $ski2!="" || $ski3!="")
    {
        $cv .= "<div class=\"section row\">
                <h2 class=\"col\">Skills</h2>
                <div class=\"section-text col-right row\">
                    <ul class=\"skills\" style=\"width:25%\">";

        if($ski!="")
        {
            $cv .= "<li>$ski</li>
";
        }

        if($ski2!="")
        {
                      $cv .= "<li>$ski2</li>
";
        }

        if($ski3!="")
        {
			          $cv .= "<li>$ski3</li>
";
        }

        $cv .= "</ul>
                </div>
            </div>
";


    }
    
	
    if($ed1!="" || $ed2!="" || $ed3!="" || $ed4!="" || $ed5!="")
    {
        $cv .= "<div class=\"section row\">
                <h2 class=\"col\">Education</h2>
";

        if($ed1 != "")
        {
            $cv .= "<div class=\"section-text col-right\">
                    
					<div>$ed1</div>
					</div>
";


        }

        if($ed2 != "")
        {
             $cv .= "<div class=\"section-text col-right\">
                    
					<div>$ed2</div>
					</div>
";

        }

        if($ed3 != "")
        {
            $cv .= "<div class=\"section-text col-right\">
                    
					<div>$ed3</div>
					</div>
";


        }

        if($ed4 != "")
        {        $cv .= "<div class=\"section-text col-right\">
                    
					<div>$ed4</div>
					</div>
";


        }

        if($ed5 != "")
        {
        $cv .= "<div class=\"section-text col-right\">
                    
					<div>$ed5</div>
					</div>
";


        }

        


    }
	
	if($tit_ex!="" || $tit_ex2!="" || $tit_ex3!="" || $tit_ex4!="" || $tit_ex5!="" || $desc_ex!="" || $desc_ex2!="" || $desc_ex3!="" || $desc_ex4!="" || $desc_ex5!="")
    {
        $cv .= "<div class=\"section row\">
                <h2 class=\"col\">Experience</h2>
                <div class=\"section-text col-right\">
                    
";





        if($tit_ex!="" && $desc_ex!="")
        {
            $cv .= "<div class=\"row\">
                        <div class=\"col\">
                            <h3>$tit_ex</h3>
                        </div>
                    </div>
					<div>$desc_ex</div>
";


        }


        if($tit_ex2!="" && $desc_ex2!="")
        {
            $cv .= "<div class=\"row\">
                        <div class=\"col\">
                            <h3>$tit_ex2</h3>
                        </div>
                    </div>
					<div>$desc_ex2</div>
";

        }


        if($tit_ex3!="" && $desc_ex3!="")
        {
          $cv .= "<div class=\"row\">
                        <div class=\"col\">
                            <h3>$tit_ex3</h3>
                        </div>
                    </div>
					<div>$desc_ex3</div>
";
        }


        if($tit_ex4!="" && $desc_ex4!="")
        {           $cv .= "<div class=\"row\">
                        <div class=\"col\">
                            <h3>$tit_ex4</h3>
                        </div>
                    </div>
					<div>$desc_ex4</div>
";


        }


        if($tit_ex5!="" && $desc_ex5!="")
        {            $cv .= "<div class=\"row\">
                        <div class=\"col\">
                            <h3>$tit_ex5</h3>
                        </div>
                    </div>
					<div>$desc_ex5</div>
";

        }

        $cv.="                </div>
            </div>
        </div>
    </body>
</html>";









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
