<?php
if($_SESSION["admin_id"] = '1'){
session_start();
}
else{


}
?>
<?php include 'include/connect.php'; 
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db = mysql_select_db("$db_name")or die("can not select DB");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="layout/normalize.css" rel="stylesheet" type="text/css" />
    <link href="layout/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width:1191px)" /> 
    <link href="layout/tablet.css" rel="stylesheet" type="text/css" media="screen and (min-width:737.999px) and (max-width:1190px)" />  
    <link href="layout/mobile.css" rel="stylesheet" type="text/css" media="screen and (max-width:737px)" />      
    <link href="layout/index.css" rel="stylesheet" type="text/css" />
    <link href="layout/custom.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Open+Sans+Condensed:300' rel='stylesheet' type='text/css'>
 
    <style>
       ul li:nth-child(4), ul li:nth-child(7), ul li:nth-child(10) {  
       margin-left:0px;padding-left:0px;
       }
    </style>
    <style>

    </style>
    <title>Hillview, Louisville PC Repair</title>
</head>
<body>

<header>
<?php include 'include/header.php'; ?> 

</header>

<!-- index_nav.php will need to be changed to navigation.php
all navigation files except -->
<?php include 'include/navigation.php'; ?>

<section>
    <div class="desktop_body_container">
    
       <div><img src="images/laptop_focus.jpg" alt="laptop background" id="backdrop_image" /></div>

       <div class="googleapi_container">
                <div>
                <button style="margin:0 auto;margin-top:15px;margin-left:15px;font-family: 'Open Sans Condensed', sans-serif;">Geolocation Services</button>
                </div>
                <div id="map"></div>
                <script src="https://maps.googleapis.com/maps/api/js?signed_in=true&callback=initMap"
                    async defer>
                </script>
                <script>
            // Note: This example requires that you consent to location sharing when
            // prompted by your browser. If you see the error "The Geolocation service
            // failed.", it means you probably did not give permission for the browser to
            // locate you.

            function initMap() {
              var map = new google.maps.Map(document.getElementById('map'), {
                center: {lat: -34.397, lng: 150.644},
                zoom: 12
              });
              var infoWindow = new google.maps.InfoWindow({map: map});

              // Try HTML5 geolocation.
              if (navigator.geolocation) {
                navigator.geolocation.getCurrentPosition(function(position) {
                  var pos = {
                    lat: position.coords.latitude,
                    lng: position.coords.longitude
                  };

                  infoWindow.setPosition(pos);
                  infoWindow.setContent('You are here!');
                  map.setCenter(pos);
                }, function() {
                  handleLocationError(true, infoWindow, map.getCenter());
                });
              } else {
                // Browser doesn't support Geolocation
                handleLocationError(false, infoWindow, map.getCenter());
              }
            }

            function handleLocationError(browserHasGeolocation, infoWindow, pos) {
              infoWindow.setPosition(pos);
              infoWindow.setContent(browserHasGeolocation ?
                                    'Error: The Geolocation service failed.' :
                                    'Error: Your browser doesn\'t support geolocation.');
            }

                </script>



       </div>
       <div id="content_block">
       <noscript><div>
       <p style="color:red;"><b>Just so you're aware...this site utilizes Javascript. There may be functionality that will not work properly if you have
       Javascript disabled. If you are seeing this message you do in fact have Javascript disabled. Please enable Javascript for your browser!</b></p>
       </div></noscript>
       
       


        <div style="margin:0 auto;margin-top:25px;width:85%;">
       
        <div style="border-top:1px solid #ccc;width:100%;">


        <div style="width:100%;height:450px;border-bottom:1px solid #ccc;margin-bottom:30px;">

                   <?php include 'include/js/js_slider/demos-jquery/content-slider.source.html' ;?>

        </div>
<!--         <div style="width:40%;float:right;height:450px;border-bottom:1px solid #ccc;margin-bottom:30px;">

            <img src="" alt="" />
        
        </div> -->



        </div>
        </div>
       
       
       </div>
       
       <div id="content_block1">
       
        <div style="width:90%;margin:0 auto;padding-top:10px;">
                    <div style="margin:0 auto;">
                            <div class="index_content">

                            <h3 class="content_text">Web design for User Experience</h3>
                                <p class="content_text2">Reach your visitors in a classy, well organized, and efficient way utilizing the world's largest advertising platform the web. Get in person help with building a wireframe for your project and then have it developed.</p>
                            </div>
                            <div class="index_content">

                            <h3 class="content_text">Technology Solutions</h3>
                                <p class="content_text2">Computer and mobile device repairs to get you back to work. Screen replacements, local area network setup, firewall adjustments, and more! Check out the gallery for HPCR's previous projects.</p>

                            </div>
                            <div class="index_content">

                            <h3 class="content_text">Business Solutions for Business Professionals</h3>
                                <p class="content_text2">The web can be a powerful tool for offsite hosting of your business applications. No need to install on every machine. Let the web do the work for you! Applications that can drive your business to success.</p>
                            </div>
                    </div>
        </div>


       </div>
    </div>

    <div class="tablet_body_container">
         
         <div class="tablet_intro_paragraph">
         
         <h4>Welcome to the tablet version!</h4>
         <h5>Please note there are major differences between this version, mobile, and desktop/laptop versions. If this is not the proper version alert me to which device you are using and which version you are seeing and I will work on fixing the problem. Thank you for visiting!</h5>
         </div>

    </div>

    <div class="mobile_body_container">

        <div class="mobile_intro_paragraph">
        
        <h4>Welcome to the mobile version!</h4>
        <h5>Please note there are major differences between this version, tablet, and desktop/laptop versions. If this is not the proper version alert me to which device you are using and which version you are seeing and I will work on fixing the problem. Thank you for visiting!</h5>
        
        </div>
        
        <div>
        
           <div></div>
           <div></div>
           
           
        </div>

    </div>
</section>




<footer>

<?php include 'include/footer.php'; ?>

</footer>


    <script type="text/javascript">

        var ypos, image;

        function parallax() {


            ypos = window.pageYOffset;

            backdrop_image = document.getElementById('backdrop_image');
            backdrop_image.style.top = ypos * .8 + 'px';

            header = document.getElementById('header_container');
            header_container.style.top = ypos * .8 + 'px';

            nav = document.getElementById('desktop_nav_container');
            desktop_nav_container.style.top = ypos * .8 + 'px';

            footer = document.getElementById('footer_container');
            footer_container.style.top = ypos * .8 + 'px';
        }

        window.addEventListener('scroll', parallax)
    </script>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="https://code.jquery.com/jquery-latest.js"></script>
    
    <script type="text/javascript">
        (function ($) {
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 120) {
                        $('#desktop_float_nav').fadeIn(10);
                        js_scroll_disappear = document.getElementById("js_scroll_disappear");
                        
                        js_scroll_disappear.style.display = "none";
                    } else {
                        $('#desktop_float_nav').fadeOut(5);
                        
                        js_scroll_disappear.style.display = "block";
                    }

                    if ($(this).scrollTop() > 1000) {
                        $().fadeIn(500);

                    }
                    else {
                        $().fadeOut(10);
                    }

                });
            });
        })(jQuery);
        

        (function ($) {
            $(document).ready(function () {
                $(window).scroll(function () {
                    if ($(this).scrollTop() > 120) {
                        $('#tablet_float_nav').fadeIn(10);
                        js_scroll_disappear_02 = document.getElementById("js_scroll_disappear_02");
                        
                        js_scroll_disappear_02.style.display = "none";
                    } else {
                        $('#tablet_float_nav').fadeOut(5);
                        
                        js_scroll_disappear_02.style.display = "block";
                    }

                    if ($(this).scrollTop() > 1000) {
                        $().fadeIn(500);

                    }
                    else {
                        $().fadeOut(10);
                    }

                });
            });
        })(jQuery);



        
    
    </script>   
    
    <script>    
            var url = window.location.pathname;

            if(url == "/hillview_002/index.php")
            {
               document.getElementById("index_selected").style.color = "red";
               document.getElementById("index").href = "index.php";
               document.getElementById("about").href = "content/about.php";
               document.getElementById("gallery").href = "content/gallery.php";
               <!-- document.getElementById("logout").href = "admin/logout_function.php"; -->
               document.getElementById("admin").href = "admin/admin.php"; 
   
               
               document.getElementById("index_02").href = "index.php";
               document.getElementById("about_02").href = "content/about.php";
               document.getElementById("gallery_02").href = "content/gallery.php";
               <!-- document.getElementById("logout_02").href = "admin/logout_function.php"; -->
               document.getElementById("admin_02").href = "admin/admin.php"; 
            } 
    </script>

</body>
</html>

<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<script src="js/hover_scroll.js">
</script>