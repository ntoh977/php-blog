<a href="index.php">вернуться</a>

  <form method="POST"  action="" enctype="multipart/form-data" >
    <input type="hidden" name="size" value="1000000">
     сделать запись в шапке сайта
      <div>
   изображение
        <input type="file" name="img_header" >
    </div>
         <div>
   text
        <input type="text" name="texts_header" >
    </div>
    <div>
   title
        <input type="text" name="title_header" >
    </div>
        <button type="submit" name="upload_heder">POST</button>
    
  </form>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "prictik");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload_heder'])) {

  $image_back_post = $_FILES['img_header']['name'];
    // Get text
  $texts_head = mysqli_real_escape_string($db, $_POST['texts_header']);
    $title_head = mysqli_real_escape_string($db, $_POST['title_header']);
    // image file directory
    $target = "images/".basename($image_back_post);

    // Get text
  
    // image file directory

    $sql1 = "UPDATE  `header` SET imag='$image_back_post',texts_h='$texts_head', title='$title_head' ";

  
    // execute query
    mysqli_query($db, $sql1);

    if (move_uploaded_file($_FILES['img_header']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }



  }


?>



-----------------------
  <form method="POST"  action="" enctype="multipart/form-data" >
    <input type="hidden" name="size" value="1000000">
   
      <div>
     Изображение в галерею
        <input type="file" name="im_slaider" >
    </div>
         
        <button type="submit" name="upload_slaider">POST</button>
    
  </form>
  -----------------------
<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "prictik");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload_slaider'])) {


    // Get image name
    $image_s = $_FILES['im_slaider']['name'];
    // Get text
  
    // image file directory
    $target = "images/".basename($image_s);
 
    $sql = "INSERT INTO `slider` (slider_image) VALUES ('$image_s') ";
    // execute query
    mysqli_query($db, $sql);
    
 if (move_uploaded_file($_FILES['im_slaider']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }


  }
 

?>


<form method="POST" action="" enctype="multipart/form-data" >
    <input type="hidden" name="size" value="1000000">
     <div>
     Изображение заднего фона сайта главной страницы
        <input type="file" name="image_back">
    </div>
      <div>
   title
        <input type="text" name="titles">
    </div>
      <div>
text
        <input type="text" name="texts">
    </div>
        <button type="submit" name="upload_img">POST</button>
    
  </form>
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "prictik");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['upload_img'])) {

 $date =  date('F  j,  Y');
    // Get image name
    $image = $_FILES['image_back']['name'];
    // Get text
    $image_text = mysqli_real_escape_string($db, $_POST['texts']);
   $title_post = mysqli_real_escape_string($db, $_POST['titles']);
    // image file directory
    $target = "images/".basename($image);

    $sql = "INSERT INTO `table` (imag, texts, title,cifre) VALUES ('$image', '$image_text','$title_post',' $date')";
    print_r($sql);
    // execute query
    mysqli_query($db, $sql);
    
 if (move_uploaded_file($_FILES['image_back']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }


  }
  $result = mysqli_query($db, "SELECT * FROM `table`");

?>