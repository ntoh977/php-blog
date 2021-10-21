<?php
   $db = mysqli_connect("localhost", "root", "", "prictik");
$mysqli = mysqli_connect("localhost", "root", "", "prictik");
  $result = mysqli_query($db, "SELECT * FROM `table`");
?>
<a href="index.php">вернуться</a>
<html>
<head>   
   <title>Display data in table with edit button </title>
</head>

<body>


   <table width='50%'height='15%' border='0'>

   <tr bgcolor='yellow'>
      <td>id</td>
      <td>изображение</td>
      <td>title</td>
      <td>texts</td>   
   </tr>
   <?php 
   
   while($res = mysqli_fetch_array($result)) {     
      echo "<tr>";
      echo "<td bgcolor=''>".$res['id']."</td>";
      echo "<td><img src='images/".$res['imag']."' ></td>";
      echo "<td>".$res['title']."</td>";  
       $text_obrez = "<p>".$res['texts']."</p>";
     $texts = mb_strimwidth($text_obrez, 0, 70, "...");
        echo "<td>".$texts."</td>";  
echo "<td bgcolor='green'><a href='edit.php?id=$res[id]'><font color='white'>Редактировать</a>";         
   }
   ?>
   </table>
      </table>
   редактировать слайдер
      <table width='50%'height='15%' border='0'>

   <tr bgcolor='yellow'>
      <td>id</td>
      <td>изображение</td>
      <td>title</td>
      <td>texts</td>   
   </tr>
   <?php 
    $result1 = mysqli_query($db, "SELECT * FROM `slider`");
   while($res = mysqli_fetch_array($result1)) {     
      echo "<tr>";
      
      echo "<td><img src='images/".$res['slider_image']."' ></td>";
     
        
echo "<td bgcolor='green'><a href='edit.php?id=$res[id]'><font color='white'>Редактировать</a>";         
   }
   ?>
   </table>
</body>
</html>
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
