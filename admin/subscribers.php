


<?php include '../components/headerm.php'; ?>
<?php

include '../components/connect.php';

$db_name = 'mysql:host=localhost;dbname=course_db';
   $user_name = 'root';
   $user_password = '';
$conn = mysqli_connect("localhost",$user_name,"","course_db");

$sql = "SELECT * FROM subscriber";
$res = mysqli_query($conn,$sql ) or die("Error fetching contacts ".mysqli_error($conn));

while($row = mysqli_fetch_array($res)){
   $name = $row['name'];
  
   ?>
   <html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Dashboard</title>

   <!-- font awesome cdn link  -->
   <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.2.0/css/all.min.css">

   <!-- custom css file link  -->
   <link rel="stylesheet" href="../css/admin_style.css">

</head>
<style>.bg{
   background-color:
      grey !important
   ;
}
p{
   font-size:20px !important;
   font-weight:700px !important;
   text-align:center;
}</style>
<body style="padding-left: 0;">
<section class="comments">

   <h1 class="heading">Subscriber--</h1>

   <div class="show-comments bg">
   <div class="box" style="">
         <div class="content"><span></span><p> - - </p></div>
         <p class="text"><?php echo $name?></p>
   <form action="" method="post">
            <input type="hidden" name="comment_id" value="<?= $fetch_contact['id']; ?>">
            <button type="submit" name="delete_comment" class="inline-delete-btn" onclick="return confirm('delete this comment?');">delete message</button>
         </form>
      </div>



      </div>
   
   </section>

   
 <?php


}

?>
