
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
    <link href="../layout/login.css" rel="stylesheet" type="text/css" />
    <link href="../layout/custom.css" rel="stylesheet" type="text/css" />
    <link href='http://fonts.googleapis.com/css?family=Londrina+Shadow' rel='stylesheet' type='text/css'>

    <!--font-family: 'Londrina Shadow', cursive; -->
    
    <title></title>
    
</head>
<body>

<header>
<?php include '../include/content_header.php'; ?> 
</header>

<?php include'../include/navigation.php'; ?>

<section>
    <div class="desktop_body_container">


       <div style="width:85%;margin:0 auto;height:350px;">
            <div style="width:48%;float:left;height:95%;margin-top:2.5%;">
            
               <form method="post" action="../admin/login_function.php" id="login_form">
                  <div style="width:400px;height:600px;">
                  <h2 id="welcome_post" style="color:black;">Welcome back!</h2>
                  <hr/>
                  <div style="width:50%;float:left;margin-top:7px;color:black;">
                  <label for="admin_name"><h4 id="username">Username:</h4></label>
                  
                  <label for="admin_password"><h4 style="margin-top:41px;color:black;" id="password" onkeypress="handle(event)">Password:</h4></label>
                  </div>
                  <div style="width:50%;float:right;margin-top:20px;">
                  <input type="text" id="admin_name" name="admin_name" maxlength="30" size="20" /><br/><br/>
                  
                  <input type="password" id="admin_password" name="admin_password" maxlength="25" size="20" autofill="off" />
                  </div>
                  
                  
                  <div style="width:100%;clear:both;">
                  <div  style="width:50%;float:left;">
                  <input type="submit" style="display:none;" />
                  <a onclick="document.getElementById('login_form').submit()">
                  <h2 style="color:black;" id="login_form_button1">
                  <p>Submit</p>
                  </h2>
                  </a>
                  </div>
                  
                  
                  <div style="width:50%;float:left;">
                  <a onclick="document.getElementById('login_form').reset()">
                  <h2 style="color:black;" id="login_form_button2">
                  <p>Reset</p>
                  </h2>
                  </a>
                  </div>
                  </div>
                  
                  </div>
               </form>
            
            </div>
       
            <div style="width:48%;float:right;height:95%;margin-top:2.5%">
            
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


<script>


function handle(e){

   if(e.keyCode === 13){
   
      document.getElementById("login_form").submit();
   }

}


</script>

            <script>
    
    var url = window.location.pathname;

if(url == "/hillview_002/content/login.php"){

   
   document.getElementById("index").href = "../index.php";
   document.getElementById("about").href = "about.php";
   document.getElementById("gallery").href = "gallery.php";
   
   document.getElementById("index_02").href = "../index.php";
   document.getElementById("about_02").href = "about.php";
   document.getElementById("gallery_02").href = "gallery.php";
   
  
}

    
    </script>
</footer>
</body>
</html>
<script src="//code.jquery.com/jquery-1.11.3.min.js">
</script>
<script src="../js/hover_scroll.js"> </script>