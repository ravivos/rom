<!DOCTYPE html>
<html lang="en">

<head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>רא"מ מרפאת מומחים</title>

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
        <!-- Image Background Page Header -->
        <!-- Note: The background image is set within the business-casual.css file. -->
        <header>
            <div class="container">
                <div class="row">
                    <div class="col-lg-12">






                        <script type="text/javascript" src="../js/jquery-1.9.1.min.js"></script>
                        <!-- use jssor.slider.mini.js (40KB) instead for release -->
                        <!-- jssor.slider.mini.js = (jssor.js + jssor.slider.js) -->
                        <script type="text/javascript" src="../js/jssor.js"></script>
                        <script type="text/javascript" src="../js/jssor.slider.js"></script>
                        <script>

                            jQuery(document).ready(function ($) {

                                var _SlideshowTransitions = [
            //Fade in L
            {$Duration: 1200, x: 0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out R
            , { $Duration: 1200, x: -0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in R
            , { $Duration: 1200, x: -0.3, $During: { $Left: [0.3, 0.7] }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out L
            , { $Duration: 1200, x: 0.3, $SlideOut: true, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in T
            , { $Duration: 1200, y: 0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out B
            , { $Duration: 1200, y: -0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in B
            , { $Duration: 1200, y: -0.3, $During: { $Top: [0.3, 0.7] }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out T
            , { $Duration: 1200, y: 0.3, $SlideOut: true, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR
            , { $Duration: 1200, x: 0.3, $Cols: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR
            , { $Duration: 1200, x: 0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade in TB
            , { $Duration: 1200, y: 0.3, $Rows: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade out TB
            , { $Duration: 1200, y: 0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in LR Chess
            , { $Duration: 1200, y: 0.3, $Cols: 2, $During: { $Top: [0.3, 0.7] }, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out LR Chess
            , { $Duration: 1200, y: -0.3, $Cols: 2, $SlideOut: true, $ChessMode: { $Column: 12 }, $Easing: { $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade in TB Chess
            , { $Duration: 1200, x: 0.3, $Rows: 2, $During: { $Left: [0.3, 0.7] }, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out TB Chess
            , { $Duration: 1200, x: -0.3, $Rows: 2, $SlideOut: true, $ChessMode: { $Row: 3 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }

            //Fade in Corners
            , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }
            //Fade out Corners
            , { $Duration: 1200, x: 0.3, y: 0.3, $Cols: 2, $Rows: 2, $During: { $Left: [0.3, 0.7], $Top: [0.3, 0.7] }, $SlideOut: true, $ChessMode: { $Column: 3, $Row: 12 }, $Easing: { $Left: $JssorEasing$.$EaseInCubic, $Top: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2, $Outside: true }

            //Fade Clip in H
            , { $Duration: 1200, $Delay: 20, $Clip: 3, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out H
            , { $Duration: 1200, $Delay: 20, $Clip: 3, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip in V
            , { $Duration: 1200, $Delay: 20, $Clip: 12, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseInCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            //Fade Clip out V
            , { $Duration: 1200, $Delay: 20, $Clip: 12, $SlideOut: true, $Assembly: 260, $Easing: { $Clip: $JssorEasing$.$EaseOutCubic, $Opacity: $JssorEasing$.$EaseLinear }, $Opacity: 2 }
            ];

            var options = {
                $AutoPlay: true,                                    //[Optional] Whether to auto play, to enable slideshow, this option must be set to true, default value is false
                $AutoPlayInterval: 1500,                            //[Optional] Interval (in milliseconds) to go for next slide since the previous stopped if the slider is auto playing, default value is 3000
                $PauseOnHover: 1,                                //[Optional] Whether to pause when mouse over if a slider is auto playing, 0 no pause, 1 pause for desktop, 2 pause for touch device, 3 pause for desktop and touch device, 4 freeze for desktop, 8 freeze for touch device, 12 freeze for desktop and touch device, default value is 1

                $DragOrientation: 3,                                //[Optional] Orientation to drag slide, 0 no drag, 1 horizental, 2 vertical, 3 either, default value is 1 (Note that the $DragOrientation should be the same as $PlayOrientation when $DisplayPieces is greater than 1, or parking position is not 0)
                $ArrowKeyNavigation: true,                          //[Optional] Allows keyboard (arrow key) navigation or not, default value is false
                $SlideDuration: 800,                                //Specifies default duration (swipe) for slide in milliseconds

                $SlideshowOptions: {                                //[Optional] Options to specify and enable slideshow or not
                    $Class: $JssorSlideshowRunner$,                 //[Required] Class to create instance of slideshow
                    $Transitions: _SlideshowTransitions,            //[Required] An array of slideshow transitions to play slideshow
                    $TransitionsOrder: 1,                           //[Optional] The way to choose transition to play slide, 1 Sequence, 0 Random
                    $ShowLink: true                                    //[Optional] Whether to bring slide link on top of the slider when slideshow is running, default value is false
                },

                $ArrowNavigatorOptions: {                       //[Optional] Options to specify and enable arrow navigator or not
                    $Class: $JssorArrowNavigator$,              //[Requried] Class to create arrow navigator instance
                    $ChanceToShow: 1                               //[Required] 0 Never, 1 Mouse Over, 2 Always
                },

                $ThumbnailNavigatorOptions: {                       //[Optional] Options to specify and enable thumbnail navigator or not
                    $Class: $JssorThumbnailNavigator$,              //[Required] Class to create thumbnail navigator instance
                    $ChanceToShow: 2,                               //[Required] 0 Never, 1 Mouse Over, 2 Always

                    $ActionMode: 1,                                 //[Optional] 0 None, 1 act by click, 2 act by mouse hover, 3 both, default value is 1
                    $SpacingX: 8,                                   //[Optional] Horizontal space between each thumbnail in pixel, default value is 0
                    $DisplayPieces: 10,                             //[Optional] Number of pieces to display, default value is 1
                    $ParkingPosition: 360                          //[Optional] The offset position to park thumbnail
                }
            };

            var jssor_slider1 = new $JssorSlider$("slider1_container", options);
            //responsive code begin
            //you can remove responsive code if you don't want the slider scales while window resizes
            function ScaleSlider() {
                var parentWidth = jssor_slider1.$Elmt.parentNode.clientWidth;
                if (parentWidth)
                    jssor_slider1.$ScaleWidth(1500);
                else
                    window.setTimeout(ScaleSlider, 30);
            }
            ScaleSlider();

            $(window).bind("load", ScaleSlider);
            $(window).bind("resize", ScaleSlider);
            $(window).bind("orientationchange", ScaleSlider);
            //responsive code end
        });
</script>

<!-- Jssor Slider Begin -->
<!-- To move inline styles to css file/block, please specify a class name for each element. --> 
<div id="slider1_container" style="position: relative; top: 0px; left: 0px; width: 2100px;
height: 600px;overflow: hidden; margin-right:-9%;">

<!-- Loading Screen -->
<div u="loading" style="position: absolute; top: 0px; left: 0px;">
    <div style="filter: alpha(opacity=70); opacity:0.7; position: absolute; display: block;
    background-color: #000000; top: 0px; left: 0px;width: 50%;height:50%;">
</div>
<div style="position: absolute; display: block; background: url(../img/loading.gif) no-repeat center center;
top: 0px; left: 0px;width: 50%;height:50%;">
</div>
</div>

<!-- Slides Container -->
<div u="slides" style="position: relative; left: 0px; top: 0px; width: 2100px; height: 600px; overflow: hidden;margin-right:-9%;">
    <div>
        <img u="image" src="Clinic/clinic1.jpg" />
        <img u="thumb" src="../img/alila/thumb-01.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic2.jpg" />
        <img u="thumb" src="../img/alila/thumb-02.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic3.jpg" />
        <img u="thumb" src="../img/alila/thumb-03.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic4.jpg" />
        <img u="thumb" src="../img/alila/thumb-04.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic5.jpg" />
        <img u="thumb" src="../img/alila/thumb-05.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic6.jpg" />
        <img u="thumb" src="../img/alila/thumb-06.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic7.jpg" />
        <img u="thumb" src="../img/alila/thumb-07.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic8.jpg" />
        <img u="thumb" src="../img/alila/thumb-08.jpg" />
    </div>
    <div>
        <img u="image" src="Clinic/clinic9.jpg" />
        <img u="thumb" src="../img/alila/thumb-09.jpg" />
    </div>
</div>
<div dir="rtl" style="text-align:right; position: absolute; width: 480px; height: 120px; top: 30px; margin-right: 10%; padding: 5px;
line-height: 60px;  font-size: 50px;
text-shadow: 0 0 10px #000;
color: #fff;">ר.א.מ - מרפאת מומחים
</div>
<!--#region Arrow Navigator Skin Begin -->
<style>
    /* jssor slider arrow navigator skin 05 css */
            /*
            .jssora05l                  (normal)
            .jssora05r                  (normal)
            .jssora05l:hover            (normal mouseover)
            .jssora05r:hover            (normal mouseover)
            .jssora05l.jssora05ldn      (mousedown)
            .jssora05r.jssora05rdn      (mousedown)
            */
            .jssora05l, .jssora05r {
                display: block;
                position: absolute;
                /* size of arrow element */
                width: 40px;
                height: 40px;
                cursor: pointer;
                background: url(../img/a17.png) no-repeat;
                overflow: hidden;
            }
            .jssora05l { background-position: -10px -40px; }
            .jssora05r { background-position: -70px -40px; }
            .jssora05l:hover { background-position: -130px -40px; }
            .jssora05r:hover { background-position: -190px -40px; }
            .jssora05l.jssora05ldn { background-position: -250px -40px; }
            .jssora05r.jssora05rdn { background-position: -310px -40px; }
        </style>
        <!-- Arrow Left -->

        <!--#endregion Arrow Navigator Skin End -->
        <!--#region Thumbnail Navigator Skin Begin -->
        <!-- Help: http://www.jssor.com/development/slider-with-thumbnail-navigator-jquery.html -->
        <style>
            /* jssor slider thumbnail navigator skin 01 css */
            /*
            .jssort01 .p            (normal)
            .jssort01 .p:hover      (normal mouseover)
            .jssort01 .p.pav        (active)
            .jssort01 .p.pdn        (mousedown)
            */

            .jssort01 {
                position: absolute;
                /* size of thumbnail navigator container */
                width: 800px;
                height: 100px;
            }

            .jssort01 .p {
                position: absolute;
                top: 0;
                left: 0;
                width: 72px;
                height: 72px;
            }

            .jssort01 .t {
                position: absolute;
                top: 0;
                left: 0;
                width: 100%;
                height: 100%;
                border: none;
            }

            .jssort01 .w {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 100%;
                height: 100%;
            }

            .jssort01 .c {
                position: absolute;
                top: 0px;
                left: 0px;
                width: 68px;
                height: 68px;
                border: #000 2px solid;
                background: url(../img/t01.png) -800px -800px no-repeat;
                _background: none;
            }

            .jssort01 .pav .c {
                top: 2px;
                _top: 0px;
                left: 2px;
                _left: 0px;
                width: 68px;
                height: 68px;
                border: #000 0px solid;
                _border: #fff 2px solid;
                background-position: 50% 50%;
            }

            .jssort01 .p:hover .c {
                top: 0px;
                left: 0px;
                width: 70px;
                height: 70px;
                border: #fff 1px solid;
                background-position: 50% 50%;
            }

            .jssort01 .p.pdn .c {
                background-position: 50% 50%;
                width: 68px;
                height: 68px;
                border: #000 2px solid;
            }

            * html .jssort01 .c, * html .jssort01 .pdn .c, * html .jssort01 .pav .c {
                /* ie quirks mode adjust */
                width /**/: 72px;
                height /**/: 72px;
            }
        </style>


        <!-- Jssor Slider End -->
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
     </div>
 </div>
 <div class="row">
    <div class="col-sm-4">
    </div>
    <div class = "col-sm-4" style="margin-left:50%">
        <br />
        <address >
            <abbr title="Phone">טלפון:</abbr>03-5358336
            <br>
            <abbr title="Phone">פקס:</abbr>03-5358337
            <br>
            <abbr title="Email">אימייל:</abbr> <a href="mailto:#">dr.rachmiel@gmail.com</a>
        </address>
    </div>
    <div class="col-sm-4">
    </div>
</div>
<hr>
<div class="row">
    <div class="col-sm-8">
    </div>
    <div class="col-sm-4">
     <div id="mainform" style="margin-right:-70%;">
        <!-- Required Div Starts Here -->
        <form id="form" name="contactform" method="post">
            <p id="returnmessage"></p>
            <label>שם מלא: <span>*</span></label>
            <input type="text" id="name" name="name" placeholder="שם פרטי ומשפחה"/>
            <label>אימייל: <span>*</span></label>
            <input type="text" id="email" name="email" placeholder="אימייל תקין"/>
            <label>הנידון:<span>*</span></label>
            <input type="text" id="subject" name="subject" placeholder="נושא"/>
            <label>ההודעה:</label>
            <textarea id="message" name="message" placeholder="כתוב כאן את הודעתך"></textarea>
            <input type="submit" id="submit" value="שלח"/>
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
