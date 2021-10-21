<?php
$mysqli = mysqli_connect("localhost", "root", "", "prictik");

 if (isset($_POST['upload_img'])) {




$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$name = mysqli_real_escape_string($mysqli, $_POST['name']);

  $age1 = mysqli_real_escape_string($mysqli, $_POST['age']);

 
$email = mysqli_real_escape_string($mysqli, $_POST['email']);	
 print_r($_POST);
  $msg = "";
   $image = $_FILES['age']['name'];
  $target = "images/". basename($image);
 if (move_uploaded_file($_FILES['age']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
if(empty($name) || empty($age) || empty($email)) {	
if(empty($name)) {
echo '<font color="red">Name field is empty.</font><br>';
}
if(empty($age)) {
echo '<font color="red">Age field is empty.</font><br>';
}
if(empty($email)) {
echo '<font color="red">Email field is empty.</font><br>';
}		
} else {	
$result = mysqli_query($mysqli, "UPDATE `table` SET  title='$email',imag='$age1', texts='$name'  WHERE id=$id");
header("Location: index.php");
}

}



  
?>

<script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>
