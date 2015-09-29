<?php 

if(isset($_SESSION["admin_id"])){

session_start();
}

?>
<?php include '../include/connect.php';

$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db = mysql_select_db("$db_name")or die("can not select DB");

if($search_filter != "")
{
$sql = mysql_query("SELECT image FROM gallery ORDER by id DESC")or die(mysql_error());
$sql3 = mysql_query("SELECT image FROM gallery ORDER by id DESC")or die(mysql_error());
$sql5 = mysql_query("SELECT image FROM gallery ORDER by id DESC")or die(mysql_error());
}
else
{
$sql = mysql_query("SELECT image FROM gallery ORDER by id DESC")or die(mysql_error());
$sql3 = mysql_query("SELECT image FROM gallery ORDER by id DESC")or die(mysql_error());
$sql5 = mysql_query("SELECT image FROM gallery ORDER by id DESC")or die(mysql_error());
}
$nr = mysql_num_rows($sql); // GET TOTAL RESULTS FROM YOUR QUERY HERE
if (isset($_GET['pn'])) { // Get PAGE NUMBER from URL vars if it is present
    $pn = preg_replace('#[^0-9]#i', '', $_GET['pn']); // filter everything but numbers for security(new)
    //$pn = ereg_replace("[^0-9]", "", $_GET['pn']); // filter everything but numbers for security(deprecated)    
} else { // If the PAGE NUMBER URL variable is not present force it to be value of page number 1
    $pn = 1;
} 
//THIS IS THE NUMBER OF RESULTS PER PAGE 
$itemsPerPage = 9; 
// Get the value of the last page in the pagination result set
$lastPage = ceil($nr / $itemsPerPage);
// Be sure URL variable $pn(page number) is no lower than page 1 and no higher than $lastpage
if ($pn < 1) { // If it is less than 1
    $pn = 1; // force if to be 1
} else if ($pn > $lastPage) { // if it is greater than $lastpage
    $pn = $lastPage; // force it to be $lastpage's value
} 
// This creates the numbers to click in between the next and back buttons
// This section is explained well in the video that accompanies this script
$centerPages = "";
$sub1 = $pn - 1;
$sub2 = $pn - 2;
$add1 = $pn + 1;
$add2 = $pn + 2;
if ($pn == 1) {
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '& search_filter=' . $search_filter . '">' . $add1 . '</a> &nbsp;';
} else if ($pn == $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '& search_filter=' . $search_filter . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
} else if ($pn > 2 && $pn < ($lastPage - 1)) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub2 . '& search_filter=' . $search_filter . '">' . $sub2 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '& search_filter=' . $search_filter . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '& search_filter=' . $search_filter . '">' . $add1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add2 . '& search_filter=' . $search_filter . '">' . $add2 . '</a> &nbsp;';
} else if ($pn > 1 && $pn < $lastPage) {
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $sub1 . '& search_filter=' . $search_filter . '">' . $sub1 . '</a> &nbsp;';
    $centerPages .= '&nbsp; <span class="pagNumActive">' . $pn . '</span> &nbsp;';
    $centerPages .= '&nbsp; <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $add1 . '& search_filter=' . $search_filter . '">' . $add1 . '</a> &nbsp;';
}
// This line sets the "LIMIT" range... the 2 values we place to choose a range of rows from database in our query
$limit = 'LIMIT ' .($pn - 1) * $itemsPerPage .',' .$itemsPerPage; 
// Now we are going to run the same query as above but this time add $limit onto the end of the SQL syntax
// $sql2 is what we will use to fuel our while loop statement below
if($search_filter != "")
{
$sql2 = mysql_query("SELECT image FROM gallery ORDER by id DESC $limit");
$sql4 = mysql_query("SELECT image FROM gallery ORDER by id DESC $limit");
$sql6 = mysql_query("SELECT image FROM gallery ORDER by id DESC $limit");
}
else
{
$sql2 = mysql_query("SELECT image FROM gallery ORDER by id DESC $limit");
$sql4 = mysql_query("SELECT image FROM gallery ORDER by id DESC $limit");
$sql6 = mysql_query("SELECT image FROM gallery ORDER by id DESC $limit");
}
//////////////////////////////// END Adam's Pagination Logic ////////////////////////////////////////////////////////////////////////////////
///////////////////////////////////// Adam's Pagination Display Setup /////////////////////////////////////////////////////////////////////
$paginationDisplay = ""; // Initialize the pagination output variable
// This code runs only if the last page variable is ot equal to 1, if it is only 1 page we require no paginated links to display
if ($lastPage != "1"){
    // This shows the user what page they are on, and the total number of pages
    $paginationDisplay .= 'Page <strong>' . $pn . '</strong> of ' . $lastPage. '&nbsp;  &nbsp;  &nbsp; ';
    // If we are not on page 1 we can place the Back button
    if ($pn != 1) {
        $previous = $pn - 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $previous . ' & search_filter=' . $search_filter . '"> Back</a> ';
    } 
    // Lay in the clickable numbers display here between the Back and Next links
    $paginationDisplay .= '<span class="paginationNumbers">' . $centerPages . '</span>';
    // If we are not on the very last page we can place the Next button
    if ($pn != $lastPage) {
        $nextPage = $pn + 1;
        $paginationDisplay .=  '&nbsp;  <a href="' . $_SERVER['PHP_SELF'] . '?pn=' . $nextPage . ' & search_filter=' . $search_filter . '"> Next</a> ';
    } 
}
///////////////////////////////////// END Adam's Pagination Display Setup ///////////////////////////////////////////////////////////////////////////
// Build the Output Section Here
$outputList = '';
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
    <link href="../layout/gallery.css" rel="stylesheet" type="text/css" />
    <link href="../layout/custom.css" rel="stylesheet" type="text/css" />
    <title></title>
    
<style>
ul li:nth-child(4), ul li:nth-child(7), ul li:nth-child(10) {  
margin-left:0px;padding-left:0px;
}
</style>
</head>
<body>
<header>
<?php include '../include/content_header.php'; ?> 
</header>
<?php include'../include/navigation.php'; ?>

<section>

<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

<div class="desktop_body_container">


<div id="gallery">
      <section>
        <figure>
        <div class="gallery_caption">
          
        <h2>Current and past projects</h2>
          
        </div>
          <ul class="clear">
            <?php while($info = mysql_fetch_array($sql2))
                        {

                        ///  get our variables from the database

                        $image = $info['image'];
                        /// show data on page
                       ?>
                          
                            <li class="gallery_image_layout"><a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" style="width:100%;"/></a></li>
                                                     <?php
                        }
                        ?> 
 
          </ul>
          <figcaption class="gallery_description" style="">
            <p>This gallery reflects all work done in repairs and website builds. This website itself speaks for...well...itself.</p>
            <p>Please understand that all prices listed for previous work, should there be any associated with these pictures, was specific to that product/customer's need. Some parts cost more, some projects take longer (shipping from China i.e.), but all in all my goal is to provide you excellent service without
            having to face large enterprise pricing.<!--  Check the <a href="about.php" style="color:black;">About</a> section for more details. --></p>
          </figcaption>
        </figure>
      </section>

            <div style="width:200px;margin:0px auto;">
                        <div style="margin:0px auto;">
                             <h2>Total Items: <?php echo $nr; ?></h2>
                        </div>                   
                        <li class="prev" style="list-style:none;"><?php echo $paginationDisplay; ?></li>
            </div>
      
</div>
</div>


<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>

    <div class="tablet_body_container">

<div id="gallery">
      <section>
        <figure>
        <div class="gallery_caption">
          
        <h2>Current and past projects</h2>
          
        </div>
          <ul class="clear">
            <?php while($info = mysql_fetch_array($sql4))
                        {

                        ///  get our variables from the database

                        $image = $info['image'];
                        /// show data on page
                       ?>
                          
                            <li class="gallery_image_layout"><a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" style="width:100%;"/></a></li>
                            
                         <?php
                        }
                        ?> 
          </ul>
          <figcaption class="gallery_description" style="">
            <p>This gallery reflects all work done in repairs and website builds. This website itself speaks for...well...itself.</p>
            <p>Please understand that all prices listed for previous work, should there be any associated with these pictures, was specific to that product/customer's need. Some parts cost more, some projects take longer (shipping from China i.e.), but all in all my goal is to provide you excellent service without
            having to face large enterprise pricing.<!--  Check the <a href="about.php" style="color:black;">About</a> section for more details. --></p>
          </figcaption>
        </figure>
      </section>

            <div style="width:200px;margin:0px auto;">
                        <div style="margin:0px auto;">
                             <h2>Total Items: <?php echo $nr; ?></h2>
                        </div>                   
                        <li class="prev" style="list-style:none;"><?php echo $paginationDisplay; ?></li>
            </div>
      
</div>

    </div>
    
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>


    <div class="mobile_body_container">







<div id="mobile_gallery">
      <section>
        <figure>
        <div class="mobile_gallery_caption">
          
        <h2>Current and past projects</h2>

          <figcaption class="mobile_gallery_description" style="">
            <p>This gallery reflects all work done in repairs and website builds. This website itself speaks for...well...itself.</p>
            <p>Please understand that all prices listed for previous work, should there be any associated with these pictures, was specific to that product/customer's need. Some parts cost more, some projects take longer (shipping from China i.e.), but all in all my goal is to provide you excellent service without
            having to face large enterprise pricing.<!--  Check the <a href="about.php" style="color:black;">About</a> section for more details. --></p>
          </figcaption>
<br /><br />
          
        </div>
          <ul class="clear">
            <?php while($info = mysql_fetch_array($sql6))
                        {

                        ///  get our variables from the database

                        $image = $info['image'];
                        /// show data on page
                       ?>
                          
                            <li class="mobile_gallery_image_layout"><a href="<?php echo $image; ?>"><img src="<?php echo $image; ?>" style="width:100%;"/></a></li>
                            
                         <?php
                        }
                        ?> 
          </ul>

        </figure>
      </section>

            <div style="width:200px;margin:0px auto;">
                        <div style="margin:0px auto;">
                             <h2>Total Items: <?php echo $nr; ?></h2>
                        </div>                   
                        <li class="prev" style="list-style:none;"><?php echo $paginationDisplay; ?></li>
            </div>
      
</div>


    </div>
    
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>
<!------------------------------------------------------------------------------------------------------------------------------>


</section>

<footer>
<?php include '../include/content_footer.php'; ?>
</footer>
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

if(url == "/hillview_002/content/gallery.php"){

   document.getElementById("gallery_selected").style.color = "red";
   document.getElementById("index").href = "../index.php";
   document.getElementById("about").href = "about.php";
   document.getElementById("gallery").href = "gallery.php";

   
   document.getElementById("gallery_selected_02").style.color = "red";
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