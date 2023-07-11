<?php 
include 'onedu/header.php'
?>

<?php

include 'components/connect.php';

if(isset($_COOKIE['user_id'])){
   $user_id = $_COOKIE['user_id'];
}else{
   $user_id = '';
}

$select_likes = $conn->prepare("SELECT * FROM `likes` WHERE user_id = ?");
$select_likes->execute([$user_id]);
$total_likes = $select_likes->rowCount();

$select_comments = $conn->prepare("SELECT * FROM `comments` WHERE user_id = ?");
$select_comments->execute([$user_id]);
$total_comments = $select_comments->rowCount();

$select_bookmark = $conn->prepare("SELECT * FROM `bookmark` WHERE user_id = ?");
$select_bookmark->execute([$user_id]);
$total_bookmarked = $select_bookmark->rowCount();

?>

<main>

<div class="slider-area slider-height">
<div class="slider-active">

<div class="single-slider">
<div class="slider-cap-wrapper">
 <div class="hero-caption">
<h1 data-animation="fadeInUp" data-delay=".2s">Learn new skills online with top educators</h1>
<p data-animation="fadeInUp" data-delay=".6s">Learn 100% online with world-class universities<br> and industry experts.</p>

<form action="#" class="search-box">
<div class="input-form">
<h1>START LEARNING>>>
<a class="search-form" href="login">
    <i class="ti-arrow-right"></i></a></h1>
<!-- <input type="text" placeholder="What do you want to learn?"> -->
</div>
</form>
</div>
<div class="hero-img position-relative">
<img src="assets/img/ban.jpeg" alt="" data-animation="fadeInRight" data-transition-duration="5s">
</div>
</div>
</div>
</div>
</div>


<section class="popular-directorya-area section-padding fix">
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="section-tittle text-center mb-40">
<h2>The world's largest selection of courses</h2>
<p>Choose from 130,000 online video courses with new additions published every month</p>
</div>
</div>
</div>
<div class="directory-active">
<?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt=""></a>
<div class="img-text">
<span>
         <a href="playlist?get_id=<?= $course_id; ?>" class="inline-btn ">view playlist</a></span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#"><?= $fetch_course['title']; ?></a>
</h3>
<p>by <?= $fetch_tutor['name']; ?></p>||
               <span>On:<?= $fetch_course['date']; ?></span>
               
         <style>.echo{
    color:purple;
    font-size:20px;
}</style>
 <div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>
<?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>
<!-- <div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses2.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
 <div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses3.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses4.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses2.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div> -->
</section>


<section class="about-area1 about-area2 fix">
<div class="container">
<div class="row align-items-center section-overlay">
<div class="col-xxl-5 col-xl-5 col-lg-6 col-md-12">

<div class="about-img about-img1  ">
<img src="assets/img/gallery/about1.jpg" alt="">
</div>
</div>
<div class="offset-xxl-1 col-xxl-5 col-xl-7 col-lg-6 col-md-12">
<div class="about-caption about-caption1">

<div class="section-tittle mb-25">
<h2>The world’s largest selection of online courses</h2>
<p class="mb-20">Millions of people have used Kingster to decide which online course to take. We aggregate courses from many universities to help you find the best courses on almost any subject, wherever they exist. Our goal is to make online education work for everyone.</p>
</div>

<div class="slider-btns">
<a data-animation="fadeInLeft" data-delay="1.0s" href="about" class="btn hero-btn">learn more>>></a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="popular-directorya-area section-padding fix">
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="section-tittle text-center mb-40">
<h2>Students are viewing</h2>
</div>
</div>
</div>
<div class="directory-active">

<?php
         $select_courses = $conn->prepare("SELECT * FROM `playlist` WHERE status = ? ORDER BY date DESC LIMIT 6");
         $select_courses->execute(['active']);
         if($select_courses->rowCount() > 0){
            while($fetch_course = $select_courses->fetch(PDO::FETCH_ASSOC)){
               $course_id = $fetch_course['id'];

               $select_tutor = $conn->prepare("SELECT * FROM `tutors` WHERE id = ?");
               $select_tutor->execute([$fetch_course['tutor_id']]);
               $fetch_tutor = $select_tutor->fetch(PDO::FETCH_ASSOC);
      ?>
<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="uploaded_files/<?= $fetch_course['thumb']; ?>" class="thumb" alt=""></a>
<div class="img-text">
<span>
         <a href="playlist?get_id=<?= $course_id; ?>" class="inline-btn ">view playlist</a></span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#"><?= $fetch_course['title']; ?></a>
</h3>
<p>by <?= $fetch_tutor['name']; ?></p>||
               <span>On:<?= $fetch_course['date']; ?></span>
               
         <style>.echo{
    color:purple;
    font-size:20px;
}</style>
 <div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>
<?php
         }
      }else{
         echo '<p class="empty">no courses added yet!</p>';
      }
      ?>
<!-- 
<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses6.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses7.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
 <a href="#"><img src="assets/img/gallery/courses8.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>

<div class="properties pb-20">
<div class="properties-card">
<div class="properties-img overlay1">
<a href="#"><img src="assets/img/gallery/courses4.jpg" alt=""></a>
<div class="img-text">
<span>$118</span>
</div>
</div>
<div class="properties-caption">
<h3>
<a href="#">Python for Data Science and Machine Learning</a>
</h3>
<p>by Mario Speedwagon</p>
<div class="ratting">
<ul>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><i class="fas fa-star"></i></li>
<li><span>4.9 (120 Review)</span></li>
</ul>
</div>
</div>
</div>
</div>
</div>
</div>
</section>


<div class="testimonial-area testimonial-padding">
<div class="container">
<div class="row justify-content-center">
<div class="col-xl-10 col-lg-10 col-md-11">
<div class="h1-testimonial-active">

<div class="single-testimonial text-center">
<div class="testimonial-caption ">
<div class="testimonial-top-cap">
<h2>Student says about us</h2>
<p>Everybody is different, which is why we offer styles for every body. Laborum fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla earum.</p>
</div>

<div class="testimonial-founder d-flex align-items-center justify-content-center">
<div class="founder-img">
 <img src="assets/img/gallery/founder-img.png" alt="">
</div>
<div class="founder-text">
<span>Petey Cruiser</span>
<p>Student at Onedu</p>
</div>
</div>
</div>
</div>

<div class="single-testimonial text-center">
<div class="testimonial-caption ">
<div class="testimonial-top-cap">
<h2>Student says about us</h2>
<p>Everybody is different, which is why we offer styles for every body. Laborum fuga incidunt laboriosam voluptas iure, delectus dignissimos facilis neque nulla earum.</p>
</div>

<div class="testimonial-founder d-flex align-items-center justify-content-center">
<div class="founder-img">
<img src="assets/img/gallery/founder-img.png" alt="">
</div>
<div class="founder-text">
<span>Petey Cruiser</span>
<p>Student at Onedu</p>
</div>
</div>
</div>
</div> -->
</div>
</div>
</div>
</div>
</div>


<section class="popular-location section-padding">
<div class="container">
<div class="row">
<div class="col-lg-12">

<div class="section-tittle text-center mb-40">
<h2>Explore top categoriesn</h2>
</div>
</div>
</div>
<div class="row">
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories1.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">Programing</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories2.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">VFX</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories3.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">App Development</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories4.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">Technology</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories5.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">Graphics Design</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories6.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">Music</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories7.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">Product Design</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
<div class="col-xl-3 col-lg-4 col-md-6 col-sm-6">
<div class="single-location mb-20">
<div class="location-img">
<img src="assets/img/gallery/categories8.jpg" alt="">
</div>
<div class="location-details">
<h4><a href="#">Video Editing</a></h4>
<a href="#" class="location-btn">View Courses</a>
</div>
</div>
</div>
</div>
</div>
</section>


<section class="about-area2 section-bg">
<div class="container">
<div class="row align-items-center">
<div class="offset-xxl-1 col-xxl-4 col-xl-5 col-lg-6 col-md-12">
<div class="about-caption about-caption2">

<div class="section-tittle mb-25">
<h2>Become an Instructor</h2>
<p class="mb-20">The automated process all your website tasks. Discover tools and
techniques to engage effectively with vulnerable children and young people.</p>
 </div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/tick.svg" alt="">
</div>
<div class="features-caption">
<p>Techniques to engage effectively with vulnerable children and young people.</p>
</div>
</div>
<div class="single-features">
<div class="features-icon">
<img src="assets/img/icon/tick.svg" alt="">
</div>
<div class="features-caption">
<p>Join millions of people from around the world learning together.</p>
</div>
</div>
<div class="single-features mb-40">
<div class="features-icon">
<img src="assets/img/icon/tick.svg" alt="">
</div>
<div class="features-caption">
<p>Join millions of people from around the world learning together.</p>
</div>
</div>

<div class="slider-btns">
<a data-animation="fadeInLeft" data-delay="1.0s" href="login" class="btn hero-btn mr-15">Become a Instructor</a>
<a data-animation="fadeInRight" data-delay="1.0s" class="popup-video video-btn" href="https://www.youtube.com/">
<img src="assets/img/icon/play-button.svg" alt="">
Watch Video
</a>
</div>
</div>
</div>
<div class="offset-xl-1  col-xxl-5 col-xl-5 col-lg-6 col-md-12">

<div class="about-img about-img2  ">
<img src="assets/img/gallery/about2.jpg" alt="">
</div>
</div>
</div>
</div>
</section>

</main>

<style>
    .courses .box-container{
   display: grid;
   grid-template-columns: repeat(auto-fit, 35rem);
   gap: 1.5rem;
   align-items: flex-start;
   justify-content: center;
}

.courses .box-container .box{
   border-radius: .5rem;
   background-color: var(--white);
   padding: 2rem;
}

.courses .box-container .box .tutor{
   margin-bottom: 2rem;
   display: flex;
   align-items: center;
   gap: 2rem;
}

.courses .box-container .box .tutor img{
   width: 5rem;
   height: 5rem;
   border-radius: 50%;
   object-fit: cover;
   margin-bottom: .5rem;
}

.courses .box-container .box .tutor h3{
   font-size: 2rem;
   color: var(--black);
   margin-bottom: .2rem;
}

.courses .box-container .box .tutor span{
   font-size: 1.5rem;
   color: var(--light-color);
}

.courses .box-container .box .thumb{
   width: 100%;
   border-radius: .5rem;
   height: 20rem;
   object-fit: cover;
   margin-bottom: .3rem;
}

.courses .box-container .box .title{
   font-size: 2rem;
   color: var(--black);
   margin-top: .5rem;
   padding: .5rem 0;
}

.courses .more-btn{
   margin-top: 2rem;
   text-align: center;
}


</style>

<?php include 'onedu/footer.php' ?>