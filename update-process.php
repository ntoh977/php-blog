


<?php
  $conn = mysqli_connect("localhost", "root", "", "prictik");
if(count($_POST)>0) {
mysqli_query($conn,"UPDATE `table` set id='" . $_POST['id'] . "', title='" . $_POST['title'] . "', imag='" . $_POST['imag'] . "', texts='" . $_POST['texts1'] . "'  WHERE id='" . $_POST['id'] . "'");
$message = "Record Modified Successfully";
}
$result = mysqli_query($conn,"SELECT * FROM `table` WHERE id='" . $_GET['id'] . "'");
$row= mysqli_fetch_array($result);
?>
<html>
<head>
<title>Update Employee Data</title>
</head>
<body>
<form name="frmUser" method="post" action="">
<div><?php if(isset($message)) { echo $message; } ?>
</div>
<div style="padding-bottom:5px;">
<a href="http://2php/">Employee List</a>
</div>
Username: <br>
<input type="hidden" name="id" class="txtField" value="<?php echo $row['id']; ?>">
<input type="text" name="userid"  value="<?php echo $row['id']; ?>">
<br>
First Name: <br>
<input type="text" name="title" class="txtField" value="<?php echo $row['title']; ?>">
<br>
Last Name :<br>
<input type="file" name="imag" class="txtField" value="<?php echo  "<img src='images/".$row['imag']."' >"; ?>">
<br>
textt<br>
<input type="text" name="texts1" class="txtField" value="<?php echo $row['texts']; ?>">
<br>



<input type="submit" name="submit" value="Submit" class="buttom">

</form>
</body>
</html>
<?php
$image = $_FILES['imag']['name'];
   $target = "images/".basename($image);

 if (move_uploaded_file($_FILES['imag']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }


