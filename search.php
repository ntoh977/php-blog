<?php
    $link = mysqli_connect("localhost", "root", "") or die("Error connecting to database: ".mysql_error());
    /*
        localhost - it's location of the mysql server, usually localhost
        root - your username
        third is your password
        
        if connection fails it will stop loading the page and display an error
    */
    
    mysqli_select_db($link, "prictik") or die(mysql_error());
    /* tutorial_search is the name of database we've created */
?>

<?php
    $query = $_GET['query']; 
    // gets value sent over search form
    
    $min_length = 1;
    // you can set minimum length of the query if you want
    
    if(strlen($query) >= $min_length){ // if query length is more or equal minimum length then
        
        $query = htmlspecialchars($query); 
        // changes characters used in html to their equivalents, for example: < to &gt;
        
        $query = mysqli_real_escape_string($link, $query);
        // makes sure nobody uses SQL injection
        
        $raw_results = mysqli_query($link,"SELECT * FROM `table`
            WHERE (`imag` LIKE '%".$query."%') OR (`texts` LIKE '%".$query."%') OR  (`title` LIKE '%".$query."%') ")  or die(mysqli_error($link));
            
        // * means that it selects all fields, you can also write: `id`, `title`, `text`
        // articles is the name of our tabli
        
        // '%$query%' is what we're looking for, % means anything, for example if $query is Hello
        // it will match "hello", "Hello man", "gogohello", if you want exact match use `title`='$query'
        // or if you want to match just full word so "gogohello" is out use '% $query %' ...OR ... '$query %' ... OR ... '% $query'
        
        if(mysqli_num_rows($raw_results) > 0){ // if one or more rows are returned do following
            
            while($results = mysqli_fetch_array($raw_results)){
                $id = $results['id'];
            // $results = mysql_fetch_array($raw_results) puts data from database into array, while it's valid it does the loop
                   $text_obrez = "<p>".$results['texts']."</p>";
       $e =  mb_strimwidth($text_obrez, 0, 50, "...");
                echo "<div id='content1'><p><a href='post.php?id=$id'>".$results['title']."</a><h7>".  "<img src='images/".$results['imag']."' >"."</p><h7>" . $e . "</h7><br></div>";
                // posts results gotten from database(title and text) you can also show id ($results['id'])
            }
            
        }
        else{ // if there is no matching rows do following
            echo "No results";
        }
        
    }
    else{ // if query length is less than minimum
        echo "Minimum length is ".$min_length;
    }
?>

<style type="text/css">

   #content1{
    width: 85%;
    margin: 0 auto;

    display: flex;

    flex-wrap:wrap;
    flex-direction: column;
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