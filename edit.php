
<?php
// including the database connection file
$mysqli = mysqli_connect("localhost", "root", "", "prictik");
?>



<?php
//getting id from url
$id = $_GET['id'];

//selecting data associated with this particular id
$result = mysqli_query($mysqli, "SELECT * FROM `table` WHERE id=$id");

while($res = mysqli_fetch_array($result))
{
	  
	$name = $res['texts'];
	$age = $res['imag'];
	$email = $res['title'];
}

?>
<html>
<head>	
	<title>Edit Data</title>
</head>

<body>
	<a href="index.php">Home</a>
	<br><br>
	
<!-- 	<form name="form1" method="post" action="editprocess.php" enctype="multipart/form-data">
		<table border="0">
			<tr>
				<td>img</td>
				<td><input type="file" name="age" value="<?php echo $age;?>"></td>
			</tr>
			<tr>
				<td>texts</td>
				<td><input type="text" name="name" value="<?php echo $name;?>"></td>
			</tr>
			
		<tr> 
				<td>title</td>
				<td><input type="text" name="email" value="<?php echo $email;?>"></td>
			</tr>
			<tr>
				<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
				<td><button type="submit" name="update" value="Update">update</button></td>
			</tr>
		</table>
	</form> -->

  <form method="POST"  action="" enctype="multipart/form-data" >
    <input type="hidden" name="size" value="1000000">
   
      <div>
   title
        <input type="text" name="email">
    </div>
      <div>
text
        <input type="text" name="name">
    </div>
      <div>
     Изображение 
        <input type="file" name="age" value="">
    </div>
    		<td><input type="hidden" name="id" value=<?php echo $_GET['id'];?>></td>
        <button type="submit" name="upload_img">POST</button>
    
  </form>

</body>
</html>

<?php
$mysqli = mysqli_connect("localhost", "root", "", "prictik");

 if (isset($_POST['upload_img'])) {




$id = mysqli_real_escape_string($mysqli, $_POST['id']);
$name = mysqli_real_escape_string($mysqli, $_POST['name']);
if(isset($age1)){
  $age1 = mysqli_real_escape_string($mysqli, $_POST['age']);
}

 
$email = mysqli_real_escape_string($mysqli, $_POST['email']);	

  $msg = "";
   $image = $_FILES['age']['name'];
  $target = "images/". basename($image);
 if (move_uploaded_file($_FILES['age']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }
	
$result = mysqli_query($mysqli, "UPDATE `table` SET  title='$email',imag='$image', texts='$name'  WHERE id=$id");
header("Location: index.php");


}



  
?>