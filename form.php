<html>
<head>
    <title>
        Form | Resume Maker | Codelicious
    </title>
    <style>
        body {
            background-image: url(img/banner-bg.jpg);
            background-repeat: no-repeat;
            background-attachment: fixed;
            background-size: cover;
        }
    </style>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">
 <link href="stylesheets/basic-grey.css" rel="stylesheet" type="text/css">
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/landing-page.css" rel="stylesheet">

    <!-- Custom Fonts -->
    <link href="font-awesome/css/font-awesome.min.css" rel="stylesheet" type="text/css">
    <link href="http://fonts.googleapis.com/css?family=Lato:300,400,700,300italic,400italic,700italic" rel="stylesheet" type="text/css">
</head>
<body>

<nav class="navbar navbar-default navbar-fixed-top topnav" role="navigation">
    <div class="container topnav">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand topnav" href="templates.php">Change Template</a>



        </div>
        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">


                <li>
                    <a href="/resume-maker"><img src="img/home.png" height="23" width="23"></a>
                </li>

                <li>
                    <a href="about.php">About Us</a>
                </li>




            </ul>
        </div>
        <!-- /.navbar-collapse -->
    </div>
    <!-- /.container -->
</nav>
<br><br><br>

<form action="output/resume

<?php
echo $_GET["tmp"];
?>

.php" method="post" class="basic-grey">
            <h1>Basic Information</h1>
            <label><span>Full Name: </span><input name="name" placeholder="First and Last name" id="in" type="text" /></label>
            <label><span>Address:</span><input name="address" placeholder="Insert your address" id="in" type="text" /></label>

            <label><span>Phone Number:</span><input name="phone" placeholder="Enter Phone number" id="in" type="text" /></label>
            <label><span>Email:</span><input name="email" placeholder="Enter E-mail Address" id="in" type="text" /></label>


        <label><span>Objective:</span><textarea name="object" placeholder="Enter your objective."></textarea></label>



    <br><h1>Education</h1>
            <label><span></span><input name="ed1" placeholder="Education 1" id="in2" type="text" /></label>
    <label><span></span><input name="ed2" placeholder="Education 2" id="in2" type="text" /></label>
    <label><span></span><input name="ed3" placeholder="Education 3" id="in2" type="text" /></label>
    <label><span></span><input name="ed4" placeholder="Education 4" id="in2" type="text" /></label>
    <label><span></span><input name="ed5" placeholder="Education 5" id="in2" type="text" /></label>

    <br><h1>Skills & Abilities</h1>
            <label><span></span><input name="ski" placeholder="Skill 1" id="in2" type="text" /></label>
    <label><span></span><input name="ski2" placeholder="Skill 2" id="in2" type="text" /></label>
    <label><span></span><input name="ski3" placeholder="Skill 3" id="in2" type="text" /></label>

    <br><h1>Experience</h1>
            <label><span>Work 1:</span><input name="tit_ex" placeholder="Work 1 Title" id="in4" type="text" /><span></span><input name="desc_ex" placeholder="Work 1 Description" id="in5" type="text" /></label>
    <br><label><span>Work 2: </span><input name="tit_ex2" placeholder="Work 2 Title" id="in4" type="text" /><span></span><input name="desc_ex2" placeholder="Work 2 Description" id="in5" type="text" /></label>
    <br><label><span>Work 3:</span><input name="tit_ex3" placeholder="Work 3 Title" id="in4" type="text" /><span></span><input name="desc_ex3" placeholder="Work 3 Description" id="in5" type="text" /></label>
    <br><label><span>Work 4:</span><input name="tit_ex4" placeholder="Work 4 Title" id="in4" type="text" /><span></span><input name="desc_ex4" placeholder="Work 4 Description" id="in5" type="text" /></label>
    <br><label><span>Work 5:</span><input name="tit_ex5" placeholder="Work 5 Title" id="in4" type="text" /><span></span><input name="desc_ex5" placeholder="Work 5 Description" id="in5" type="text" /></label>
    <label>
        <span></span><input type="radio" value="print" name="rad" checked="checked">Print resume &nbsp;&nbsp; <input type="radio" value="doc" name="rad">Download as .doc
    </label>
    <br>
    <label><span></span><input name="sub" type="submit" id="sub" value="Create your resume" class="button"/></label>


    </div>
</form>

</body>
</html>