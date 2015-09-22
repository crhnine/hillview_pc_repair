<nav class="desktop_nav_container">
    <div class="nav_container"  id="js_scroll_disappear">
    
       <ul class="navigation_block">
         <a id="index" href="index.php" ><li class="nav_link" id="index_selected">Home</li></a>
         <a id="about" href="content/about.php" ><li class="nav_link" id="about_selected">About</li></a>
         <a id="gallery" href="content/gallery.php" ><li class="nav_link" id="gallery_selected">Gallery</li></a> 
         <?php
         
         if(isset($_SESSION["admin_id"])){
         echo '<a id="admin" href="#" ><li class="nav_link" id="admin_selected">Admin</li></a>' ;
         
         echo '<a id="logout" href="#" ><li class="nav_link" id="logout_selected">Logout</li></a>' ; 
         
         }
         ?>
         
       </ul>
     
    </div>

</nav>

    <!-------------------------------------------------------------------------------------->
    <!--To be displayed once a certain part of the screen has been reached on the y-axis. -->
    <!-------------------------------------------------------------------------------------->

<div id="desktop_float_nav">

<nav class="desktop_nav_container">
    <div class="nav_container">
    
       <ul class="navigation_block">
         <a id="index_02" href="../index.php" ><li class="nav_link" id="index_selected_02">Home</li></a>
         <a id="about_02" href="about.php" ><li class="nav_link" id="about_selected_02">About</li></a>
         <a id="gallery_02" href="gallery.php" ><li class="nav_link" id="gallery_selected_02">Gallery</li></a> 
         <?php
         
         if(isset($_SESSION["admin_id"])){
         echo '<a id="admin_02" href="#" ><li class="nav_link" id="admin_selected_02">Admin</li></a>' ;
         echo '<a id="logout_02" href="#" ><li class="nav_link" id="logout_selected_02">Logout</li></a>' ;
         
         }
         ?> 
       </ul>
    
    </div>

</nav>

</div>

    <!-------------------------------------------------------------------------------------->
    <!-------------------------------------------------------------------------------------->

<nav class="tablet_nav">
    <div class="tablet_nav_container" id="js_scroll_disappear_02">
    
       <ul class="tablet_navigation_block">       
         <a id="tablet_index" href="../index.php" ><li class="tablet_nav_link" id="tablet_index_selected">Home</li></a>
         <a id="tablet_about" href="about.php" ><li class="tablet_nav_link" id="tablet_about_selected">About</li></a>
         <a id="tablet_gallery" href="gallery.php" ><li class="tablet_nav_link" id="tablet_gallery_selected">Gallery</li></a>       
       </ul>
    
    </div>
</nav>

<div id="tablet_float_nav">

<nav class="tablet_nav_container">
    <div class="tablet_nav_container">
    
       <ul class="tablet_navigation_block">
         <a id="index_03" href="index.php" ><li class="tablet_nav_link" id="index_selected_03">Home</li></a>
         <a id="about_03" href="content/about.php" ><li class="tablet_nav_link" id="about_selected_03">About</li></a>
         <a id="gallery_03" href="content/gallery.php" ><li class="tablet_nav_link" id="gallery_selected_03">Gallery</li></a> 

       </ul>
    
    </div>

</nav>

</div>




<nav class="mobile_nav">
    
   <div class="mobile_nav_container">
   
    <select onchange="window.location=this.value">
    
       <option value="index.php">Home</option>
       <option value="content/about.php">About</option>
       <option value="content/gallery.php">Gallery</option>

    </select>
    
   </div>
</nav>

<script>

var url = window.location.pathname;
if(url == "/hillview_002/index.php"){


        document.getElementById("index_selected_02").style.color = "red";
        document.getElementById('index_02').href = "index.php";
        document.getElementById('about_02').href = "content/about.php";
        document.getElementById('gallery_02').href = "content/gallery.php";

        document.getElementById('index_selected_03').style.color = "yellow";
        document.getElementById('index_03').href = "index.php";
        document.getElementById('about_03').href = "content/about.php";
        document.getElementById('gallery_03').href = "content/gallery.php";

        document.getElementById('tablet_index_selected').style.color = "yellow";
        document.getElementById('tablet_index').href = "index.php";
        document.getElementById('tablet_about').href = "content/about.php";
        document.getElementById('tablet_gallery').href = "content/gallery.php";

}
if(url == "/hillview_002/content/gallery.php"){


        document.getElementById('gallery_selected_02').style.color = "red";
        document.getElementById('gallery_selected_03').style.color = "yellow";
        document.getElementById('index_03').href = "../index.php";
        document.getElementById('about_03').href = "about.php";
        document.getElementById('gallery_03').href = "gallery.php";

        document.getElementById('tablet_gallery_selected').style.color = "yellow";
        document.getElementById('tablet_index').href = "../index.php";
        document.getElementById('tablet_about').href = "about.php";
        document.getElementById('tablet_gallery').href = "gallery.php";
}

if(url == "/hillview_002/content/about.php"){
        document.getElementById("about_selected_02").style.color = "red";
        document.getElementById('about_selected_03').style.color = "yellow";
        document.getElementById('index_03').href = "../index.php";
        document.getElementById('about_03').href = "about.php";
        document.getElementById('gallery_03').href = "gallery.php";

        document.getElementById('tablet_about_selected').style.color = "yellow";
        document.getElementById('tablet_index').href = "../index.php";
        document.getElementById('tablet_about').href = "about.php";
        document.getElementById('tablet_gallery').href = "gallery.php";

}
</script>