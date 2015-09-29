<?php 
if(isset($_SESSION["admin_id"])){
session_start();
}
?>
<?php include '../include/connect.php';
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db = mysql_select_db("$db_name")or die("can not select DB");
?>
<!DOCTYPE html>
<html lang="en" xmlns="http://www.w3.org/1999/xhtml">
<head>
    <meta name="description" content="Looking for inexpensive and quality repairs, network setups, or website designs? You came to the right place. ;)" />
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="../layout/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../layout/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width:1191px)" /> 
    <link href="../layout/tablet.css" rel="stylesheet" type="text/css" media="screen and (min-width:737.999px)" />  
    <link href="../layout/mobile.css" rel="stylesheet" type="text/css" media="screen and (max-width:737px)" /> 
    <link href="../layout/about.css" rel="stylesheet" type="text/css" />
    <link href="../layout/custom.css" rel="stylesheet" type="text/css" />
    <title></title>

</head>
<body class="about_body">

<header>
<?php include '../include/content_header.php'; ?> 

</header>

<?php include'../include/navigation.php'; ?>

<section>
    <div class="desktop_body_container">


            <div class="about_content">
                <div class="about_content_block">
                    <h3 id="welcome_post" style="color:#1e1e1e">Welcome to Hillview PC Repair</h3>
                    <p>
Solutions for every day hard working people. That's what we focus on. No need to break the bank either. We're by no means a large corporate entity. In fact HPCR is like a small
collection of dream oriented freelancers looking to provide you with the answer that a light-weight wallet could appreciate. Need web design? We got it. Need an advanced program
that has never been designed before? Discuss with us to get a mockup design built. The list goes on. Pretty impressive for a small overhead startup if I do say so myself.
                    </p>


                </div>
            </div>




            <div class="profile_layout">

<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->

                <div style="width:100%;float:left;">
                <div class="profile_window">
                <div style="width:40%;float:left;">
                <div class="profile_header">
                    <h3 style="width:100%;text-align:center;">Christopher Hodges</h3>
                    <hr />
                </div>
                <div class="profile_information">

                <table class="profile_table" >

                <tr style="margin-bottom:10px;"><td class="table_label">Location: </td><td>Louisville, KY</td></tr>
                <br/>
                <tr><td class="table_label">Team Treehouse: </td><td>Front-End Web Development Track</td>
                <br/>
                <td class="table_label">Score: </td><td>6,626</td></tr>

                <tr><td class="table_label">Description: </td><td colspan="2">Founder of HPCR. Avid lover of pizza, Titanfall powerhouse, and somewhat of a perfectionist. Dedicated to finding the solution.</td></tr>
                </table>
                </div>
                </div>
                
                

<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->
<!-- ------------------------------------------------------------ -->

                <div style="width:55%;float:right;">
                <div class="portrait_window">
                     <img src="../images/portrait_pic_small.png" alt="Pro pic" style="-webkit-border-radius: 25px;-moz-border-radius: 25px;border-radius: 25px;margin-left:185px;" />
                </div>
                <div class="bar_chart" id="bar_chart" style="margin-top:45px;">

                  <div class="bar_container">
                                    <?php                  
                                    $description = mysql_query("SELECT description FROM bar_chart ORDER BY id");
                                    $value_query = mysql_query("SELECT value FROM bar_chart ORDER BY id");
                                    $maximum_value = mysql_query("SELECT maximum_value FROM bar_chart ORDER BY id");

                                    while(($description_array = mysql_fetch_assoc($description)) && ($value_array = mysql_fetch_assoc($value_query)) && ($maximum_value_array = mysql_fetch_assoc($maximum_value))){
                
                                    //while($counter <= 5){
                                    foreach($description_array as $key => $value)
                                    {
                                    foreach($value_array as $key2 => $value2){

                                    foreach($maximum_value_array as $key3 => $value3){
                                    ?>
                                    <?php
                                    $group_counted = array ( "db_collection"  => array ( 
                                    "value" => $value, 

                                            "db_collection2" => array(
                                            "value2" => $value2,
                                            "db_collection3" => array(
                                            "value3" => $value3                                                                                                    
                                    ))));
                                    ?>
                                    <?php   

                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    ///////////////REACH OUT TO EACH GROUP AND GRAB THEIR CORRESPONDING WIDTH CALCULATION/////////////////////////
                                    //////////////////////////////////////////////////////////////////////////////////////////////////////////////

                                    if($group_counted["db_collection"]["value"] === "HTML"){

                                    $value2_collected = $group_counted["db_collection"]["db_collection2"]["value2"];//Sets first value for calculation
                                    $value3_collected = $group_counted["db_collection"]["db_collection2"]["db_collection3"]["value3"];//Sets second value for calculation
                                    $calculated_width = $value3_collected * $value2_collected;//Calculates necessary number for width
                                    
   
                                    }

                                    if($group_counted["db_collection"]["value"] === "CSS"){


                                    $value2_collected = $group_counted["db_collection"]["db_collection2"]["value2"];//Sets first value for calculation
                                    $value3_collected = $group_counted["db_collection"]["db_collection2"]["db_collection3"]["value3"];//Sets second value for calculation
                                    $calculated_width2 = $value3_collected * $value2_collected;//Calculates necessary number for width
                                    
   

                                    }

                                    if($group_counted["db_collection"]["value"] === "JAVASCRIPT"){

                                    $value2_collected = $group_counted["db_collection"]["db_collection2"]["value2"];//Sets first value for calculation
                                    $value3_collected = $group_counted["db_collection"]["db_collection2"]["db_collection3"]["value3"];//Sets second value for calculation
                                    $calculated_width3 = $value3_collected * $value2_collected;//Calculates necessary number for width
                                    

                                    }

                                    if($group_counted["db_collection"]["value"] === "PHP"){

                                    $value2_collected = $group_counted["db_collection"]["db_collection2"]["value2"];//Sets first value for calculation
                                    $value3_collected = $group_counted["db_collection"]["db_collection2"]["db_collection3"]["value3"];//Sets second value for calculation
                                    $calculated_width4 = $value3_collected * $value2_collected;//Calculates necessary number for width
                                    

                                    }

                                    if($group_counted["db_collection"]["value"] === "C#"){

                                    $value2_collected = $group_counted["db_collection"]["db_collection2"]["value2"];//Sets first value for calculation
                                    $value3_collected = $group_counted["db_collection"]["db_collection2"]["db_collection3"]["value3"];//Sets second value for calculation
                                    $calculated_width5 = $value3_collected * $value2_collected;//Calculates necessary number for width
                                    

                                    }
                                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    ///////////////////////////////////////////////////////////////////////////////////////////////////////////////
                                    ?>
                                    <br/><br/>
                                    <?php 
                                    }}}///For Loop closing tags
                                    ?>
                                    <?php }///While Loop closing tag?>
                    <h3>Skill improvements the last 12 months</h3>
                    <div id="bar1" class="bar" style="width:<?php echo $calculated_width."px" ?>;">HTML</div>
                    <div id="bar2" class="bar" style="width:<?php echo $calculated_width2."px" ?>;">CSS</div>
                    <div id="bar3" class="bar" style="width:<?php echo $calculated_width3."px" ?>;">Javascript</div>
                    <div id="bar4" class="bar" style="width:<?php echo $calculated_width4."px" ?>;">PHP</div>
                    <div id="bar5" class="bar" style="width:<?php echo $calculated_width5."px" ?>;">C#</div>
                  </div>
                </div>
                </div>
                </div>
</div>
            </div>
    </div>

<!-- ------------------------------------------------- -->
<!-- ---------------------TABLET---------------------- -->
<!-- ------------------------------------------------- -->


     <div class="tablet_about_body_container">

             <div class="tablet_about_content">
                    <div class="tablet_about_content_block">
                      <h3 id="welcome_post2" style="color:#1e1e1e">Welcome to Hillview PC Repair</h3>
                            <p>
                            IT solutions for every day hard working people. That's what we focus on. No need to break the bank either. We're by no means a large corporate entity. In fact HPCR is like a small
                            collection of dream oriented freelancers looking to provide you with the answer that a light-weight wallet could appreciate. Need web design? We got it. Need an advanced program
                            that has never been designed before? Discuss with us to get a mockup design built. The list goes on. Pretty impressive for a small overhead startup if I do say so myself.
                            </p>


                    </div>
             </div>


                    <br />



            <div class="tablet_profile_layout">

                <div class="tablet_profile_window">
                <div class="tablet_profile_group">
                <div class="tablet_profile_header">
                    <h3>Christopher Hodges</h3>
                    <hr />
                </div>
                <div class="tablet_profile_information">

                <table class="tablet_profile_table" >

                <tr style="margin-bottom:10px;"><td class="table_label">Location: </td><td>Louisville, KY</td></tr>
                <br/>
                <tr><td class="table_label">Team Treehouse: </td><td>Front-End Web Development Track</td>
                <br/>
                <br />
                <td class="table_label">Score: </td><td>6,626</td></tr>

                <tr><td class="table_label">Description: </td><td colspan="2" class="tablet_description_text">Founder of HPCR. Avid lover of pizza, Titanfall powerhouse, and somewhat of a perfectionist. Dedicated to finding the solution.</td></tr>
                </table>


                </div>
                </div>

                <div class="tablet_responsive_section2">
                <div style="width:100%;height:150px;">
                <div class="tablet_portrait_window">
                     <img src="../images/portrait_pic_small.png" alt="Pro pic" class="tablet_profile_pic"  />
                </div>
                </div>
                <br /><br />
                
                <div style="width:100%;clear:both;margin-top:60px;">
                <h3>Skill improvements the last 12 months</h3>
                    <div class="tablet_bar_chart" id="bar_chart">
                  <div class="tablet_bar_container" style="-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;border-right:1px solid #464545;">
                                   
                    <div id="tablet_bar1" class="tablet_bar" style="width:<?php echo $calculated_width."px" ?>;">HTML</div>
                    <div id="tablet_bar2" class="tablet_bar" style="width:<?php echo $calculated_width2."px" ?>;">CSS</div>
                    <div id="tablet_bar3" class="tablet_bar" style="width:<?php echo $calculated_width3."px" ?>;">Javascript</div>
                    <div id="tablet_bar4" class="tablet_bar" style="width:<?php echo $calculated_width4."px" ?>;">PHP</div>
                    <div id="tablet_bar5" class="tablet_bar" style="width:<?php echo $calculated_width5."px" ?>;">C#</div>
                  </div>
                    </div>
                </div>
                </div>
                </div>

            </div>




    </div>
<br />
<br />

<!-- ------------------------------------------------- -->
<!-- ---------------------MOBILE---------------------- -->
<!-- ------------------------------------------------- -->

    <div class="mobile_body_container">


             <div class="mobile_about_content">
                    <div class="mobile_about_content_block">
                      <h3  style="width:90%;color:#1e1e1e;margin:0 auto;text-align:center;">Welcome to Hillview PC Repair</h3>
                            <p>
                            IT solutions for every day hard working people. That's what we focus on. No need to break the bank either. We're by no means a large corporate entity. In fact HPCR is like a small
                            collection of dream oriented freelancers looking to provide you with the answer that a light-weight wallet could appreciate. <br /><br />Need web design? We got it. Need an advanced program
                            that has never been designed before? Discuss with us to get a mockup design built. The list goes on. Pretty impressive for a small overhead startup if I do say so myself.
                            </p>


                    </div>
             </div>


                    <br />


            <div class="mobile_profile_layout">

                <div class="mobile_profile_window">
                <div class="mobile_profile_group" style="border-right:2px solid red">
                <div class="mobile_portrait_window">
                     <img src="../images/portrait_pic_small.png" alt="Pro pic" class="mobile_profile_pic"  />
                </div>
                    <div class="mobile_profile_header">
                        <h3>Christopher Hodges</h3>
                    <hr />
                    <div class="table_label" style="margin-bottom:10px;margin-top:10px;">Location: Louisville, KY</div>
                </div>
                </div>
                


 


                <div class="mobile_profile_information" style="margin-bottom:60px;">

                <table class="mobile_profile_table" >

                
                <tr><td class="table_label">Description: </td><td  class="mobile_description_text">Founder of HPCR. Avid lover of pizza, Titanfall powerhouse, and somewhat of a perfectionist. Dedicated to finding the solution.</td></tr>
                <br/>
                <tr><td class="table_label">Team Treehouse: </td><td>Front-End Web Development Track</td></tr>
                <br/>
                <br />
                <tr><td class="table_label">Score: </td><td>6,626</td></tr>

                
                </table>


                </div>

                <br /><br />
                
                <div style="width:95%;clear:both;margin-left:15px;">
                <h3>Skill improvements the last 12 months</h3>
                    <div class="mobile_bar_chart" id="bar_chart">
                  <div class="mobile_bar_container" style="-webkit-border-radius: 5px;-moz-border-radius: 5px;border-radius: 5px;border-right:1px solid #464545;">
                                   
                    <div id="mobile_bar1" class="mobile_bar" style="width:<?php echo $calculated_width."px" ?>;">HTML</div>
                    <div id="mobile_bar2" class="mobile_bar" style="width:<?php echo $calculated_width2."px" ?>;">CSS</div>
                    <div id="mobile_bar3" class="mobile_bar" style="width:<?php echo $calculated_width3."px" ?>;">Javascript</div>
                    <div id="mobile_bar4" class="mobile_bar" style="width:<?php echo $calculated_width4."px" ?>;">PHP</div>
                    <div id="mobile_bar5" class="mobile_bar" style="width:<?php echo $calculated_width5."px" ?>;">C#</div>
                  </div>
                    </div>
                </div>
                </div>

            </div>






    </div>

</section>

<footer>
<?php include '../include/content_footer.php'; ?>

</footer>
<script>


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

if(url == "/hillview_002/content/about.php"){

   document.getElementById("about_selected").style.color = "red";
   document.getElementById("index").href = "../index.php";
   document.getElementById("about").href = "about.php";
   document.getElementById("gallery").href = "gallery.php"; 
   
   
   document.getElementById("index_02").href = "../index.php";
   document.getElementById("about_02").href = "about.php";
   document.getElementById("gallery_02").href = "gallery.php";

} 

    
    </script>

    
</body>
</html>

<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<script src="../js/hover_scroll.js">
</script>