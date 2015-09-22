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
                    <h3>Welcome to Hillview PC Repair</h3>
                    <p>
IT solutions for every day hard working people. That's what we focus on. No need to break the bank either. We're by no means a large corporate entity. In fact HPCR is like a small
collection of dream oriented freelancers looking to provide you with the answer that a light-weight wallet could appreciate. Need web design? We got it. Need an advanced program
that has never been designed before? Discuss with us to get a mockup design built. The list goes on. Pretty impressive for a small overhead startup if I do say so myself.
                    </p>


                </div>
            </div>
            <div class="profile_layout">

                <div class="profile_window">

                <div class="profile_header">
                    <h3>Christopher Hodges</h3>
                    <hr />
                </div>
<div class="profile_information">

<table class="profile_table" >

<tr style="margin-bottom:10px;"><td class="table_lable">Location: </td><td>Louisville, KY</td></tr>
<br/>
<tr><td class="table_lable">Team Treehouse: </td><td>Front-End Web Development Track</td>
<br/>
<td class="table_lable">Score: </td><td>4,092</td></tr>

<tr><td class="table_lable">Description: </td><td colspan="2">Founder of HPCR. Avid lover of pizza, Titanfall powerhouse, and somewhat of a perfectionist. Dedicated to finding the solution.</td></tr>
</table>


</div>

                <div class="portrait_window">
                     <img src="../images/portrait_pic_small.png" alt="Pro pic" style="-webkit-border-radius: 25px;-moz-border-radius: 25px;border-radius: 25px;" />
                </div>
                <div class="bar_chart" id="bar_chart">
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
                    <div id="bar1" class="bar" style="width:<?php echo $calculated_width."px" ?>;">HTML</div><br/><br/>
                    <div id="bar2" class="bar" style="width:<?php echo $calculated_width2."px" ?>;">CSS</div><br/><br/>
                    <div id="bar3" class="bar" style="width:<?php echo $calculated_width3."px" ?>;">Javascript</div><br/><br/>
                    <div id="bar4" class="bar" style="width:<?php echo $calculated_width4."px" ?>;">PHP</div><br/><br/>
                    <div id="bar5" class="bar" style="width:<?php echo $calculated_width5."px" ?>;">C#</div>
                  </div>
                </div>
                </div>

            </div>
    </div>

    <div class="tablet_body_container">



    </div>

    <div class="mobile_body_container">



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
   document.getElementById("logout").href = "../admin/logout_function.php";
   document.getElementById("admin").href = "../admin/admin.php"; 
   
   
   document.getElementById("index_02").href = "../index.php";
   document.getElementById("about_02").href = "about.php";
   document.getElementById("gallery_02").href = "gallery.php";
   document.getElementById("logout_02").href = "../admin/logout_function.php";
   document.getElementById("admin_02").href = "../admin/admin.php"; 
} 

    
    </script>

    
</body>
</html>

<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<script src="../js/hover_scroll.js">
</script>