<?php


if(isset($_SESSION["admin_id"])){
session_start();
}

else{

header('Location: ../content/login.php');
}


include '../include/connect.php';
$con = mysql_connect("$host", "$username", "$password")or die("cannot connect");
$db = mysql_select_db("$db_name")or die("can not select DB");


?>

<!DOCTYPE html>
<html>
<head>

    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width,initial-scale=1.0">
    <link href="../layout/normalize.css" rel="stylesheet" type="text/css" />
    <link href="../layout/desktop.css" rel="stylesheet" type="text/css" media="screen and (min-width:1191px)" /> 
    <link href="../layout/tablet.css" rel="stylesheet" type="text/css" media="screen and (min-width:737.999px)" />  
    <link href="../layout/mobile.css" rel="stylesheet" type="text/css" media="screen and (max-width:737px)" /> 
    <link href="../layout/admin.css" rel="stylesheet" type="text/css" />
    <link href="../layout/custom.css" rel="stylesheet" type="text/css" />


<title>Hillview PC Repair Admin</title>

</head>
<body>

<? include '../include/content_header.php'; ?>

<? include '../include/navigation.php' ?>

<div class="admin_main_container">


<div class="form_panel">
<div class="form_description">

<h3></h3>

</div>
<form method="post" action="admin_form_submit.php">
<label for="select_group"><b>Select the area</b> you wish to update to:</label>
<select name="post_location" style="width:200px;margin:0 auto;" class="select" id="select_group">

    <optgroup label="Projects: ">
    <option value="repair">Repairs</option>
    <option value="website">Websites</option>
    </optgroup>
    
    <optgroup label="Status: ">
    <option value="update">Quick Updates</option></optgroup>
    
</select>  
<br/><br/>
    <label for="title" id="title_tag"><b>Title</b> of the project:</label>
        <input type="text" name="title" id="title" />
        <br/>
        <br/>
        
        <!-- SELECT IMAGE BUTTON -->
        <div class="image_select_container">
        <label for="image" id="image_tag" class="image_tag"><b>Image</b> for the project:</label>
        <button type="button" onclick="chooseFile();" id="image" class="image_select_button" style="float:left;margin-left:85px;">Choose Image</button>
        <div style="height:0px;overflow:hidden">
        <input type="file" name="image" id="file_input" />
        </div>
        
        </div>
        <!------------------------>
        
        <br/>
        <br/>
        <br/>
    <label for="project_description" id="project_description_tag"><b>Project</b> Description: </label>
        <textarea name="project_description" id="project_description" class="project_description"></textarea>
    <br/>
    <br/>
 <div id="button_container"> 
<input type="submit" name="submit" id="submit" style="" />
<button type="rest" name="reset" id="reset" />Reset</button>

</div>  
</form>

</div>
</div>


<? include '../include/content_footer.php'; ?>

<script>

var url = window.location.pathname;


if(url === "hillview_002/admin/admin.php"){
   document.getElementById("admin_target").href = "../content/'.$info['image'].'";
   document.getElementById("admin_target_img").src = "../content/'.$info['image'].'";
   }


if(url === "/hillview_002/admin/admin.php"){

   
   
   
   document.getElementById("index").href = "../index.php";
   document.getElementById("about").href = "../content/about.php";
   document.getElementById("gallery").href = "../content/gallery.php";
   document.getElementById("logout").href = "../content/login_again.php";
   
   
   document.getElementById("index_02").href = "../index.php";
   document.getElementById("about_02").href = "../content/about.php";
   document.getElementById("gallery_02").href = "../content/gallery.php";
   document.getElementById("logout_02").href = "../content/login_again.php";
  
}


 function chooseFile() {
      $("#file_input").click();
   }
</script>
</body>
</html>