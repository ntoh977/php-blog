<a href="index.php">вернуться</a>
<table>
   <tr>
   Удалить записи
   </tr>
   <?php
     $db = mysqli_connect("localhost", "root", "", "prictik");
    $result = mysqli_query($db, "SELECT * FROM `table`");
   $i=0;
   while($row = mysqli_fetch_array($result)) {
   ?>
   <tr class="<?php if(isset($classname)) echo $classname;?>">
   <td><?php echo $row["id"]; ?></td>
   <td><?php echo $row["title"]; ?></td>
  
   <td><?php echo $row["texts"]; ?></td>
   <td><?php  echo "<img src='images/".$row['imag']."' >"; ?></td>
   <td><a href="dell.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
   </tr>
   <?php
   $i++;
   }
   ?>
</table>
Удалить слайдеры
<table>
   <tr>
   
   </tr>
   <?php
     $db = mysqli_connect("localhost", "root", "", "prictik");
    $result = mysqli_query($db, "SELECT * FROM `slider`");
   $i=0;
   while($row = mysqli_fetch_array($result)) {
   ?>
   <tr class="<?php if(isset($classname)) echo $classname;?>">
   <td><?php echo $row["id"]; ?></td>
  
  

   <td><?php  echo "<img src='images/".$row['slider_image']."' >"; ?></td>
   <td><a href="dell_img.php?id=<?php echo $row["id"]; ?>">Delete</a></td>
   </tr>
   <?php
   $i++;
   }
   ?>
</table>
<style type="text/css">
   #content{
    width: 99%;
    margin: 20px auto;
    border: 1px solid #cbcbcb;
    display: flex;
    flex-direction: inherit;
    flex-wrap:wrap;
   }
   form{
    width: 50%;
    margin: 20px auto;
   }
   form div{
    margin-top: 5px;
   }
   #img_div{
    width: 40%;
    padding: 5px;
    margin: 15px auto;
    border: 1px solid #cbcbcb;
   }
   #img_div:after{
    content: "";
    display: block;
    clear: both;
   }
   img{
    float: left;
    margin: 5px;
    width: 250px;
    height: 140px;
   }
   body{
    padding-right: 15px;
    padding-left: 15px;
    margin-right: auto;
    margin-left: auto;
    
    box-sizing: border-box;
   }
   .imagee img{
    width: 35px;
    height: 27px;
 
   }
</style>