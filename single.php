<!DOCTYPE html>
<html lang="en">
  <head>
    <title>Elit Photography&mdash; Onepage Website Template by Colorlib</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  
    <link href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,700,900|Oswald:400,700" rel="stylesheet">
    
    <link rel="stylesheet" href="fonts/icomoon/style.css">

    <link rel="stylesheet" href="css/bootstrap.min.css">
    <link rel="stylesheet" href="css/magnific-popup.css">
    <link rel="stylesheet" href="css/jquery-ui.css">
    <link rel="stylesheet" href="css/owl.carousel.min.css">
    <link rel="stylesheet" href="css/owl.theme.default.min.css">

    <link rel="stylesheet" href="css/bootstrap-datepicker.css">

    <link rel="stylesheet" href="fonts/flaticon/font/flaticon.css">

    <link rel="stylesheet" href="css/aos.css">
    <link rel="stylesheet" href="css/fancybox.min.css">

    <link rel="stylesheet" href="css/style.css">

  </head>
  <body data-spy="scroll" data-target=".site-navbar-target" data-offset="200">
  

  <div class="site-wrap">

  <div class="site-mobile-menu site-navbar-target">
    <div class="site-mobile-menu-header">
      <div class="site-mobile-menu-close mt-3">
        <span class="icon-close2 js-menu-toggle"></span>
      </div>
    </div>
    <div class="site-mobile-menu-body"></div>
  </div>

  <header class="header-bar d-flex d-lg-block align-items-center site-navbar-target" data-aos="fade-right">
    <div class="site-logo">
      <a href="index.php">Elit Photo</a>
    </div>
    
    <div class="d-inline-block d-lg-none ml-md-0 ml-auto py-3" style="position: relative; top: 3px;"><a href="#" class="site-menu-toggle js-menu-toggle text-white"><span class="icon-menu h3"></span></a></div>

    <div class="main-menu">
      <ul class="js-clone-nav">
        <li><a href="index.php#section-home" class="nav-link">Home</a></li>
        <li><a href="index.php#section-photos" class="nav-link">Photos</a></li>
        <li><a href="index.php#section-bio" class="nav-link">Biography</a></li>
        <li class="active"><a href="index.php#section-blog" class="nav-link">Blog</a></li>
        <li><a href="index.php#section-contact" class="nav-link">Contact</a></li>
      </ul>
      <ul class="social js-clone-nav">
        <li><a href="#"><span class="icon-facebook"></span></a></li>
        <li><a href="#"><span class="icon-twitter"></span></a></li>
        <li><a href="#"><span class="icon-instagram"></span></a></li>
      </ul>
    </div>
  </header> 
  <main class="main-content">
      <?php
   $db = mysqli_connect("localhost", "root", "", "prictik");
 $result = mysqli_query($db, "SELECT * FROM `header`");
    while($row = mysqli_fetch_array($result)) { ?>
   <section class="site-section-hero bg-image" style="background-image: url('<?php echo "images/".$row['imag']." " ?> ');"  data-stellar-background-ratio="0.5" id="section-home">
        <div class="row justify-content-center align-items-center">
          <div class="col-md-7 text-center">
            <h1 class="text-white heading text-uppercase" data-aos="fade-up"><?php echo $row['texts_h'] ?></h1>
            <p class="lead text-white mb-5" data-aos="fade-up" data-aos-delay="100">
              October 18, 2019 &bullet; <em>by</em> Jed Smith
            </p>
          </div>
        </div>
      </section>
<?php } ?>

    
    <div class="container-fluid">
          <div class="site-section">
      <div class="container">
        <div class="row">
          <div class="col-md-8 blog-content pr-lg-5">
        <?php 
     $id = $_GET['id'];
      $db = mysqli_connect("localhost", "root", "", "prictik");
$result = mysqli_query($db, "SELECT * FROM `table` WHERE id='$id' ");

 $row = mysqli_fetch_array($result);
           
  ?>

 
 

  
            <?php  echo "<a href='single.php?id=$id'>".$row['title'] ."</a>"; ?>
         <p class="lead"><?php echo $row['texts']; ?></p>
    
  <?php   
?>
            <div class="pt-5">
              <p>Categories:  <a href="#">Design</a>, <a href="#">Events</a>  Tags: <a href="#">#html</a>, <a href="#">#trends</a></p>
            </div>


            <div class="pt-5">
              <h3 class="mb-5"><?php 
                 $db = mysqli_connect("localhost", "root", "", "prictik");
                  $t=mysqli_query($db,"select * from `comments`");
      $total=mysqli_num_rows($t);
      $db = mysqli_connect("localhost", "root", "", "prictik");
   $id2 = $_GET['id'];
  $t1=mysqli_query($db,"select * from `comments` WHERE  page_id='$id2'");
$total1=mysqli_num_rows($t1);
print_r($total1);
?> Comments</h3>
              <ul class="comment-list">
                  <?php
   $db = mysqli_connect("localhost", "root", "", "prictik");
    $id = $_GET['id'];
 $result = mysqli_query($db, "SELECT * FROM `comments` WHERE  page_id='$id'");
    while($row = mysqli_fetch_array($result)) { ?>
                <li class="comment">

        
                  <div class="vcard bio">
    <?php  
     $thumb_name = $_SERVER['DOCUMENT_ROOT'] .$row['images'];
            if(!file_exists( $thumb_name)){ ?>
         <?php  echo "<img src='images/". $row['images'] ."' "  ?> alt="Image" >
           <?php }else {
            echo "no image";
        };
  

           ?>
                  </div>
                  <div class="comment-body">
                    <h3><?php echo  $row['Name']; ?></h3>
                    <div class="meta"><?php echo  $row['date_comments']; ?></div>
                    <p><?php echo  $row['Message']; ?></p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>
                </li>
<?php } ?>

                <li class="comment">
                  <div class="vcard bio">
                    <img src="images/person_3.jpg" alt="Image">
                  </div>
                  <div class="comment-body">
                    <h3>Chris Meyer</h3>
                    <div class="meta">January 9, 2018 at 2:21pm</div>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Pariatur quidem laborum necessitatibus, ipsam impedit vitae autem, eum officia, fugiat saepe enim sapiente iste iure! Quam voluptas earum impedit necessitatibus, nihil?</p>
                    <p><a href="#" class="reply">Reply</a></p>
                  </div>

                  <ul class="children">
                    <li class="comment">
                      <div class="vcard bio">
                        <img src="images/person_5.jpg" alt="Image">
                      </div>
                      <div class="comment-body">
                        <h3>Chintan Patel</h3>
                        <div class="meta">January 9, 2018 at 2:21pm</div>
                        <p>Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast of the Semantics, a large language ocean.</p>
                        <p><a href="#" class="reply">Reply</a></p>
                      </div>



            
              <!-- END comment-list -->
              
              <div class="comment-form-wrap pt-5">
                <h3 class="mb-5">Leave a comment</h3>
                <form method="POST" id="idForm" onsubmit="call()" action="" enctype="multipart/form-data">
                  <div class="form-group">
                    <label for="name">Name *</label>
                    <input type="text" name="name_comm" class="form-control" id="name">
                  </div>
                  <div class="form-group">
                    <label for="email">Email *</label>
                    <input type="email" name="Email" class="form-control" id="email">
                  </div>
                  <div class="form-group">
                    <label for="">Image/avatar</label>
                    <input type="file" name="image" class="form-control" id="name">
                  </div>

                  <div class="form-group">
                    <label for="message">Message</label>
                    <textarea name="Message" id="message" cols="30" rows="10" class="form-control"></textarea>
                  </div>
                  <div class="form-group">
                    <input type="submit" value="Post Comment" name="Post_Comment"   class="btn btn-primary btn-md text-white">
                  </div>

                </form>
              </div>
            </div>
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
 <!--            
<script>








  function call() {
    var msg   = $('#idForm').serialize();
        $.ajax({
          type: 'POST',
          url:  'single.php',
          data: msg,
          success: function(data) {
            $('.comment').html(data);
          },
          error:  function(xhr, str){
      alert('Возникла ошибка: ' + xhr.responseCode);
          }
        });
 
    }
</script>
 -->
<?php
  // Create database connection
  $db = mysqli_connect("localhost", "root", "", "prictik");

  // Initialize message variable
  $msg = "";

  // If upload button is clicked ...
  if (isset($_POST['Post_Comment'])) {

 $date =  date('F  j,  Y g:i a');
    // Get image name
    $image = $_FILES['image']['name'];
    // Get text
    $name_comm = mysqli_real_escape_string($db, $_POST['name_comm']);
   $Email = mysqli_real_escape_string($db, $_POST['Email']);
     $Message = mysqli_real_escape_string($db, $_POST['Message']);
    // image file directory
    $target = "images/".basename($image);
$id = $_GET['id'];
    $sql = "INSERT INTO `comments` (images, Name, Email, Message, date_comments,page_id) VALUES ('$image', '$name_comm','$Email','$Message','$date','$id')";
    // execute query
    mysqli_query($db, $sql);
    
 if (move_uploaded_file($_FILES['image']['tmp_name'], $target)) {
        $msg = "Image uploaded successfully";
    }else{
        $msg = "Failed to upload image";
    }


  }
  $result = mysqli_query($db, "SELECT * FROM `practika`");

?>
          </div>
          <div class="col-md-4 sidebar">
            <div class="sidebar-box">
              <form action="#" class="search-form">
                <div class="form-group">
                  <span class="icon fa fa-search"></span>
                  <input type="text" class="form-control" placeholder="Type a keyword and hit enter">
                </div>
              </form>
            </div>
            <div class="sidebar-box">
              <div class="categories">
                <h3>Categories</h3>
                <li><a href="#">Creatives <span>(12)</span></a></li>
                <li><a href="#">News <span>(22)</span></a></li>
                <li><a href="#">Design <span>(37)</span></a></li>
                <li><a href="#">HTML <span>(42)</span></a></li>
                <li><a href="#">Web Development <span>(14)</span></a></li>
              </div>
            </div>
            <div class="sidebar-box">
              <img src="images/person_1.jpg" alt="Image" class="img-fluid mb-4 w-50 rounded-circle">
              <h3 class="text-white">About The Author</h3>
              <p>Even the all-powerful Pointing has no control about the blind texts it is an almost unorthographic life One day however a small line of blind text by the name of Lorem Ipsum decided to leave for the far World of Grammar.</p>
              <p><a href="#" class="btn btn-primary btn-md text-white">Read More</a></p>
            </div>

            <div class="sidebar-box">
              <h3 class="text-white">Paragraph</h3>
              <p>When she reached the first hills of the Italic Mountains, she had a last view back on the skyline of her hometown Bookmarksgrove, the headline of Alphabet Village and the subline of her own road, the Line Lane. Pityful a rethoric question ran over her cheek, then she continued her way.</p>
            </div>
          </div>
        </div>
      </div>
    </div>

    <script>
    if ( window.history.replaceState ) {
        window.history.replaceState( null, null, window.location.href );
    }
</script>

      <div class="row justify-content-center">
        <div class="col-md-12 text-center py-5">
          <p>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved | This template is made with <i class="icon-heart text-danger" aria-hidden="true"></i> by <a href="https://colorlib.com" target="_blank" >Colorlib</a>
            <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
        </div>
      </div>
    </div>
  </main>

</div> <!-- .site-wrap -->

  <script src="js/jquery-3.3.1.min.js"></script>
  <script src="js/jquery-migrate-3.0.1.min.js"></script>
  <script src="js/jquery.easing.1.3.js"></script>
  <script src="js/jquery-ui.js"></script>
  <script src="js/popper.min.js"></script>
  <script src="js/bootstrap.min.js"></script>
  <script src="js/owl.carousel.min.js"></script>
  <script src="js/jquery.stellar.min.js"></script>
  <script src="js/jquery.countdown.min.js"></script>
  <script src="js/jquery.magnific-popup.min.js"></script>
  <script src="js/bootstrap-datepicker.min.js"></script>
  <script src="js/aos.js"></script>
  

  <script src="js/jquery.fancybox.min.js"></script>

  <script src="js/main.js"></script>
    
  </body>
</html>