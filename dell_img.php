<?php
  $db = mysqli_connect("localhost", "root", "", "prictik");
$sql = "DELETE FROM `slider` WHERE id='" . $_GET["id"] . "'";
if (mysqli_query($db, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($db);
}
mysqli_close($db);
?>