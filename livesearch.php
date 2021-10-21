<?php
$xmlDoc=new DOMDocument();
$xmlDoc->load("http://2php/search.php?query=");

$x=$xmlDoc->getElementsByTagName('link');

//get the q parameter from URL
$q=$_GET["q"];

//lookup all links from the xml file if length of q>0
if (strlen($q)>0) {
  $hint="";
  for($i=0; $i<($x->length); $i++) {
    $y=$x->item($i)->getElementsByTagName('post_title');
    $z=$x->item($i)->getElementsByTagName('url');
    if ($y->item(0)->nodeType==1) {
      //find a link matching the search text
      if (stristr($y->item(0)->childNodes->item(0)->nodeValue,$q)) {
        if ($hint=="") {
          $hint="<a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        } else {
          $hint=$hint . "<br /><a href='" .
          $z->item(0)->childNodes->item(0)->nodeValue .
          "' target='_blank'>" .
          $y->item(0)->childNodes->item(0)->nodeValue . "</a>";
        }
      }
    }
  }
}

// Set output to "no suggestion" if no hint was found
// or to the correct values
if ($hint=="") {
  $response="no suggestion";
} else {
  $response=$hint;
}

//output the response
echo $response;
?>

<style type="text/css">

   #content{
    width: 85%;
    margin: 0 auto;

    display: flex;

    flex-wrap:wrap;
    flex-direction: column;
   }
#livesearch #content{
 
    flex-direction: column!important;
   }
   #livesearch {
   
    position: absolute;
    background-color: antiquewhite;
    transition: all .7s;
    width: 50%;
    -webkit-box-shadow: 1px 4px 8px 6px rgba(34, 60, 80, 0.16);
-moz-box-shadow: 1px 4px 8px 6px rgba(34, 60, 80, 0.16);
box-shadow: 1px 4px 8px 6px rgba(34, 60, 80, 0.16);
     }
     #livesearch#content{
        flex-direction: column!important;
     }
   form{



    z-index: 9999999999999;
   }
   form div{
    margin-top: 5px;
   }
    #livesearch#img_div{
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
    width: 90%;
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
    width: 50%;
    height: 27px;
 
   }
</style>