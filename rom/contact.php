<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>רא"מ ממרפאת מומחים</title>

    <!-- Bootstrap Core CSS -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Custom CSS -->
    <link href="css/business-frontpage.css" rel="stylesheet">

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
        <script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
        <script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
    <![endif]-->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
<link rel="stylesheet" href="contact.css" />
<script src="contact.js"></script>
<style>
.business-header {
    height: 400px;
    /*background: url('http://placehold.it/1920x400') center center no-repeat scroll;*/
    

    background: url('http://techaisle.com/images/headers/home1_header_1920x400.jpg') center center no-repeat scroll;
    /*background: url('http://www.onestepfoundation.co.uk/images/slider/slides/1920x400/southern-alps-1920x400.png') center center no-repeat scroll;*/
    /*background-image: url("images/RAM.jpg");*/
    /*background-image: url("images/RAM.jpg") center center no-repeat scroll;*/
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}
.business-header2 {
    height: 400px;
    /*background: url('http://placehold.it/1920x400') center center no-repeat scroll;*/
    

    background: url('http://www.onestepfoundation.co.uk/images/slider/slides/1920x400/southern-alps-1920x400.png') center center no-repeat scroll;
    /*background: url('http://www.onestepfoundation.co.uk/images/slider/slides/1920x400/southern-alps-1920x400.png') center center no-repeat scroll;*/
    /*background-image: url("images/RAM.jpg");*/
    /*background-image: url("images/RAM.jpg") center center no-repeat scroll;*/
    -webkit-background-size: cover;
    -moz-background-size: cover;
    background-size: cover;
    -o-background-size: cover;
}

</style>
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
<script>
$(function() {
  var body = $('body');
  var backgrounds = ['business-header','business-header2'];
var current = 0;

function nextBackground() {
    $("#headerr").toggleClass(backgrounds[current]); 
  $("#headerr").toggleClass(backgrounds[current = ++current % backgrounds.length]);

 setTimeout(nextBackground, 4000);
 }
 setTimeout(nextBackground, 4000);
$("#headerr").toggleClass(backgrounds[0]);
   
 });

</script>
</head>

<body dir="rtl">

    <!-- Navigation  TODO - right to left -->
    <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation" >
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1">
                    <span class="sr-only">Toggle navigation</span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                    <span class="icon-bar"></span>
                </button>
                 <a class="navbar-brand" href="index.html" style="color: #fff  "> <img height="40" width="100" class="img-rounded" style="  margin: -9px;" src="images/logo.jpg" alt="logo" ></a>
            </div>
            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
                <ul class="nav navbar-nav">
                    <li>
                        <a href="odot.html">אודות</a> 
                    </li>
                    <li>
                        <a href="rent.html">השכרה</a>
                    </li>
                    <li>
                        <a href="#" style="color: #fff  ">צור קשר</a>
                    </li>
                </ul>
            </div>
            <!-- /.navbar-collapse -->
        </div>
        <!-- /.container -->
    </nav>

    <!-- Image Background Page Header -->
    <!-- Note: The background image is set within the business-casual.css file. -->
    <header id="headerr">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="tagline">צור קשר</h1>
                </div>
            </div>
        </div>
    </header>

    <!-- Page Content -->
    <div class="container">

        <hr>
        <div class="row">
            <div class="col-sm-8">
            </div>
            <div class="col-sm-4">
               <h2>פנה אלינו:</h2>
                <div id="mainform" style="margin-right:-70%;">
            <!-- Required Div Starts Here -->
            <form id="form">
            <p id="returnmessage"></p>
            <label>שם מלא: <span>*</span></label>
            <input type="text" id="name" placeholder="שם פרטי ומשפחה"/>
            <label>אימייל: <span>*</span></label>
            <input type="text" id="email" placeholder="אימייל תקין"/>
            <label>הנידון:<span>*</span></label>
            <input type="text" id="subject" placeholder="נושא"/>
            <label>ההודעה:</label>
            <textarea id="message" placeholder="כתוב כאן את הודעתך"></textarea>
            <input type="button" id="submit" value="שלח"/>
            </form>
            </div>    
            </div>
        </div>
        <!-- /.row -->

        <hr>

        <!-- Footer -->
        <footer>
            <div class="row">
                <div class="col-lg-12" dir="ltr">
                    <p>Raviv Web Design &copy; ram.co.il 2015</p>
                </div>
            </div>
            <!-- /.row -->
        </footer>

    </div>
    <!-- /.container -->

    <!-- jQuery -->
    <script src="js/jquery.js"></script>

    <!-- Bootstrap Core JavaScript -->
    <script src="js/bootstrap.min.js"></script>

</body>

</html>
