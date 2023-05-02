<?php

$conn = mysqli_connect('localhost','root','','contact_db') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Nithya Shree</title>
   <link rel="icon" type="image/x-icon" href="images/20230423_172334_0000.png">

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

   <!-- aos css link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="css/style.css">

</head>
<body>

<?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

<!-- header section starts  -->

<header class="header">

   <div id="menu-btn" class="fas fa-bars"></div>

   <a href="#home" class="logo">Portfolio</a>

   <nav class="navbar">
      <a href="#home" class="active">home</a>
      <a href="#about">about</a>
      <a href="#services">Find me in</a>
      <a href="#portfolio">portfolio</a>
      <a href="#contact">contact</a>
   </nav>

   <div class="follow">
      <a href="https://www.instagram.com/unique.cliche/?next=%2F" class="fab fa-instagram"></a>
      <a href="https://www.linkedin.com/in/nithya-shree-thiyagarajan-9a4b80273?lipi=urn%3Ali%3Apage%3Ad_flagship3_profile_view_base_contact_details%3BUNbjOTM8Tu2gYh9TckS6KA%3D%3D" class="fab fa-linkedin"></a>
      <a href="https://github.com/NithyaShree0007" class="fab fa-github"></a>
   </div>

</header>

<!-- header section ends -->

<!-- home section starts  -->

<section class="home" id="home">

   <div class="image" data-aos="fade-right">
      <img src="images/20230423_172334_0000.png" alt="">
   </div>

   <div class="content">
      <h3 data-aos="fade-up">hi, i am Nithya Shree</h3>
      <span data-aos="fade-up">Thriving learner</span>
      <p data-aos="fade-up">I will be an adaptable and quick learning asset to your oraganization.</p>
      <a data-aos="fade-up" href="#about" class="btn">Click me for more details</a>
   </div>

</section>

<!-- home section ends -->

<!-- about section starts  -->

<section class="about" id="about">

   <h1 class="heading" data-aos="fade-up"> <span>about</span> </h1>

   <div class="biography">

      <p data-aos="fade-up">Get to know me!</p>

      <div class="bio">
         <h3 data-aos="zoom-in"> <span>name : </span> Nithya Shree </h3>
         <h3 data-aos="zoom-in"> <span>email : </span> nithyashreet4@gmail.com </h3>
         <h3 data-aos="zoom-in"> <span>address : </span> chennai, india </h3>
         <h3 data-aos="zoom-in"> <span>phone : </span> +91 72999 17555 </h3>
         <h3 data-aos="zoom-in"> <span>age : </span> 20 years </h3>
      </div>

      <a href="#" class="btn" data-aos="fade-up">About me</a>

   </div>
   
   <div class="skills" data-aos="fade-up">

      <h1 class="heading"> <span>skills</span> </h1>

      <div class="progress">
      <div class="bar" data-aos="fade-left"> <h3><span>Microsoft Office</span> <span>90%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>HTML, CSS and JavaScript</span> <span>75%</span></h3> </div>
         <div class="bar" data-aos="fade-right"> <h3><span>Python and PHP</span> <span>70%</span></h3> </div>
         <div class="bar" data-aos="fade-left"> <h3><span>Illustrator</span> <span>80%</span></h3> </div>
      </div>

   </div>

   <div class="edu-exp">

      <h1 class="heading" data-aos="fade-up"> <span>education</span> </h1>

      <div class="row">

         <div class="box-container">

            <h3 class="title" data-aos="fade-right">education</h3>

            <div class="box" data-aos="fade-right">
               <span>( 2020 - 2024 )</span>
               <h3>B.E. BIOMEDICAL ENGINEERING</h3>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2020 )</span>
               <h3>Higher Secondary School</h3>
               <p>Percentage - 73.33%</p>
            </div>

            <div class="box" data-aos="fade-right">
               <span>( 2018 )</span>
               <h3>High School</h3>
               <p>Percentage - 86.4%</p>
            </div>          

         </div>

      </div>

   </div>

</section>

<!-- about section ends -->

<!-- services section starts  -->

<section class="services" id="services">

   <h1 class="heading" data-aos="fade-up"> <span>Also find me here!</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-github"></i>
         <h3>GitHub</h3>
         <p>Find me in GitHub.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-linkedin"></i>
         <h3>LinkedIn</h3>
         <p>Find me in LinkedIn.</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fab fa-instagram"></i>
         <h3>Instagram</h3>
         <p>Find me in instagram.</p>
      </div>

   </div>

</section>

<!-- services section ends -->

<!-- portfolio section starts  -->

<section class="portfolio" id="portfolio">

   <h1 class="heading" data-aos="fade-up"> <span>portfolio</span> </h1>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <img src="images/neon.jpg" alt="">
         <h3>Logo design</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/Trail1 C.jpg" alt="">
         <h3>Visiting card design</h3>
      </div>

      <div class="box" data-aos="zoom-in">
         <img src="images/Poster.jpg" alt="">
         <h3>Poster design</h3>
         </div>
  
   </div>

</section>

<!-- portfolio section ends -->

<!-- contact section starts  -->

<section class="contact" id="contact">

   <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

   <form action="" method="post">
      <div class="flex">
         <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
         <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box" required>
      </div>
      <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
      <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
      <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
   </form>

   <div class="box-container">

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-phone"></i>
         <h3>phone</h3>
         <p>+91 72999 17555</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-envelope"></i>
         <h3>email</h3>
         <p>nithyashreethiyagarajan@gmail.com</p>
      </div>

      <div class="box" data-aos="zoom-in">
         <i class="fas fa-map-marker-alt"></i>
         <h3>address</h3>
         <p>Avadi, Chennai-600071</p>
      </div>

   </div>

</section>

<!-- contact section ends -->

<div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Nithya Shree</span> </div>












<!-- custom js file link  -->
<script src="js/script.js"></script>

<!-- aos js link  -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

<script>

   AOS.init({
      duration:800,
      delay:300
   });

</script>
   
</body>
</html>