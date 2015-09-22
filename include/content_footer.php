<?php
   $data = mysql_query("SELECT image FROM gallery ORDER BY id DESC LIMIT 9")
   or die(mysql_error());
   $data2 = mysql_query("SELECT image FROM gallery ORDER BY id DESC LIMIT 8")
   or die(mysql_error());
?>
<!-- DESKTOP -->
<div class="footer_container" id="content_footer1_js_styling">
   <div class="footer_information">
    
      <div class="footer_quarter">
      
      <h4 class="footer_title">Site Navigation</h4>
      <div class="footer_content_shell">
      
      <ul>
         <a href="../index.php"><li>Home Page</li></a>
         <a href="about.php"><li>About</li></a>
<!--     <li>About Website Builds</li>
         <li>About Repairs</li> -->
         <a href="gallery.php"><li>Gallery</li></a>
<!--     <a href="../admin/admin.php"><li>Admin</li></a> -->
      </ul>
      
      </div>
      
      </div>
      <div class="footer_quarter">
      
      <h4 class="footer_title">Latest Gallery</h4>
      <div class="footer_content_shell">
      
         <ul id="ft_gallery" class="nospace spacing clear">
                <?php
                 while($info = mysql_fetch_array( $data ))
                   {
                   echo 
                   '
                   <li class="one_third" style="margin-left:-12px;">
                   <a id="admin_target" href="../content/'.$info['image'].'">
                   <div class="not_cell" style="width:77px;height:40px;overflow:hidden;float:left;margin-left:5px;margin-top:5px;">
                   <img id="admin_target_img" src="../content/'.$info['image'].'" width="100%"/>   
                   </div>
                   </a>
                   </li>
                   ';
                   }
                ?>
          </ul>
      
      </div>
      
      </div>
      <div class="footer_half">
      
      <h4 class="footer_title">Current Projects Quick Updates</h4>
      
      <div class="footer_content_shell_2">



<div id="scrollUp" ><div style="width:40.5%;height:35px;position:absolute;z-index:670;margin-left:25px;-webkit-border-top-left-radius: 15px;-webkit-border-top-right-radius: 15px;-moz-border-radius-topleft: 15px;-moz-border-radius-topright: 15px;border-top-left-radius: 15px;border-top-right-radius: 15px;"></div></div>
    <div id="scrollDown"><div style="width:40.5%;height:35px;position:absolute;z-index:670;margin-top:175px;margin-left:25px;-webkit-border-bottom-left-radius: 15px;-webkit-border-bottom-right-radius: 15px;-moz-border-radius-bottomleft: 15px;-moz-border-radius-bottomright: 15px;border-bottom-left-radius: 15px;border-bottom-right-radius: 15px;"></div></div>


<?php
    $updates = mysql_query("SELECT * FROM project_updates ORDER BY id DESC");
    ?>

    <div class="one_half" style="width:95%;margin-left:25px;margin-top:25px;">

    <div id="content" style="height:200px;background-color:white;-webkit-box-shadow:inset 0 0 10px 0 #232323;box-shadow:inset 0 0 10px 0 #232323;padding:5px;overflow:auto;-webkit-border-radius: 15px;-moz-border-radius: 15px;border-radius: 15px;overflow-y:hidden;">

     
    <?php 
    while($status = mysql_fetch_array($updates))
    {
    
    $dateCreated = $status['dateCreated'];
    $customer_name = $status['customer_name'];
    $customer_progress = $status['customer_progress'];
    
    ?>  
        

      <div syle="width:100%;border-bottom:solid #232323 1px;color: black;overflow:auto;">
      <div style="background-color: rgba(215, 215, 215, 0.5);">
        <div style="width:35%;float:left;color:black;">
        <?php 
              echo $dateCreated,  '&nbspEST'
        ?>        
        </div>
        <div stlye="float:right;width:60%;">
        <?php echo '<div style="color:black">';?><?php echo $customer_name ?><?php echo '</div>'; ?>        
        </div></div><br />
        <div style="color:#1e1e1e;text-align:left;">
        <?php echo $customer_progress ?>
        </div>
      </div><br />
    <?php } ?>
      </div>
</div>




      </div>
      
      </div>
     
   </div>
   <div class="footer_copyright_container" id="content_footer2_js_styling">
   
       <div class="footer_copyright_shell1" >
           <h4 class="footer_copyright">Copyright &copy; 2014-2015 Hillview PC Repair</h4>
       </div>
       <div class="footer_copyright_shell2">
           <h4 class="footer_company_name"><a href="../index.php">Developed by Hillview PC Repair</a></h4>
       </div>
   
      </div>
</div>

    <script type="text/javascript">
   
         
    
        var red = Math.floor(Math.random() * 256);
        var green = Math.floor(Math.random() * 256);
        var blue = Math.floor(Math.random() * 256);
        rgbcolor = 'rgb(' + red + ',' + green + ',' + blue + ')';
        
        document.getElementById("content_header1_js_styling").style.borderTopWidth = "3px";
        document.getElementById("content_header1_js_styling").style.borderTopStyle = "solid";
        document.getElementById("content_header1_js_styling").style.borderTopColor = rgbcolor;
        
        document.getElementById("content_footer1_js_styling").style.borderTopWidth = "3px";
        document.getElementById("content_footer1_js_styling").style.borderTopStyle = "solid";
        document.getElementById("content_footer1_js_styling").style.borderTopColor = rgbcolor;
        
        document.getElementById("content_footer2_js_styling").style.borderTopWidth = "3px";
        document.getElementById("content_footer2_js_styling").style.borderTopStyle = "solid";
        document.getElementById("content_footer2_js_styling").style.borderTopColor = rgbcolor;
        
        document.getElementById("welcome_post").style.color = rgbcolor;
        document.getElementById("username").style.color = rgbcolor;
        document.getElementById("password").style.color = rgbcolor;
        document.getElementById("login_form_button1").style.color = rgbcolor;
        document.getElementById("login_form_button2").style.color = rgbcolor;
        
 
        
        
    </script>
<!--------------->

<!-- TABLET -->

<div class="tablet_footer_container">
    <div class="mobile_tablet_top_shell">
    
        <div class="tablet_footer_text_navigation">
            <h4 class="tablet_footer_title">Site Navigation</h4>
            <div class="tablet_footer_content_shell">
                <ul>
                
                    <a href="../index.php"><li>Home</li></a>
                    <a href="about.php"><li>About</li></a>
<!--                <li>About Websites</li>
                    <li>About Repairs</li> -->
                    <a href="gallery.php"><li>Gallery</li></a>
<!--                <a href="login.php"><li>Admin</li></a> -->
                    
                </ul>           
            </div>
        </div>
        <div class="tablet_footer_latest_gallery">
            <h4 class="tablet_footer_title">Latest Gallery</h4>

            <ul id="tablet_ft_gallery" class="nospace spacing clear">
                <?php
                 while($info = mysql_fetch_array( $data2 ))
                   {
                   echo 
                   '
                   <li class="tablet_gallery_block" style="margin-left:12px;">
                   <a id="admin_target" href="../content/'.$info['image'].'">
                   <div class="not_cell" style="width:120px;height:60px;overflow:hidden;float:left;margin-left:5px;margin-top:5px;">
                   <img id="admin_target_img" src="../content/'.$info['image'].'" width="100%"/>   
                   </div>
                   </a>
                   </li>
                   ';
                   }
                ?>
          </ul>


        </div>
    
    </div>
</div>

<div class="tablet_footer_copyright_container">
    <div class="tablet_footer_shell1">
        <h4 class="tablet_footer_copyright">Copyright &copy; 2014-2015 Hillview PC Repair</h4>
    </div>
    <div class="tablet_footer_shell2">
        <h4 class="tablet_footer_company_name">Developed by <a href="../index.php">Hillview PC Repair</a></h4>
    </div>
</div>

<!--------------->

<!-- MOBILE FOOTER -->
<div class="mobile_footer_container">

   <div class="mobile_footer_text_navigation">
       <h4 class="mobile_footer_title">Site Navigation</h4>
   
   
   </div>
   <div class="mobile_footer_copyright">
      <div class="mobile_footer_copyright_shell1">
        <h4 class="footer_copyright">Copyright &copy; 2014-2015 Hillview PC Repair</h4>
      </div>
      <div class="mobile_footer_copyright_shell2">
        <h4 class="footer_company_name"><a href="../index.php">Developed by Hillview PC Repair</a></h4>
      </div>
   </div>
</div>