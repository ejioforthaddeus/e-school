


<?php include '../components/headerm.php'; ?>
<?php

include '../components/connect.php';

$db_name = 'mysql:host=localhost;dbname=course_db';
   $user_name = 'root';
   $user_password = '';
$conn = mysqli_connect("localhost",$user_name,"","course_db");

if(isset($_POST['id_to_delete'])){
   $id = $_POST['delete'];
   echo $id;
   $sql1 = "DELETE FROM contact WHERE id = '$id' ";
   $res1 = mysqli_query($conn,$sql1) or die("Error deleting contacts ".mysqli_error($conn));
   if($res1){
      echo "guidian info DELETED !!!";
   }else{
      echo "Error fetching contacts!!!!";

   }
}

$sql = "SELECT * FROM users";
$res = mysqli_query($conn,$sql ) or die("Error fetching contacts ".mysqli_error($conn));

while($row = mysqli_fetch_array($res)){
   $name = $row['name'];
   $pnum = $row['pnum'];
   $unum = $row['unum'];
   ?>
 

   <html lang="en">
<head>
   <meta charset="UTF-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1.0">
   <title>Parents/guidians numbers</title>

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

   <h1 class="heading">Parents/guidians numbers--</h1>

   <div class="show-comments bg">
   <div class="box" style="">
         <div class="content"><span></span><p> - - </p></div>
         <p class="text">students name:_<?php echo $name?></p>
         <p class="text">students guidian number:_<?php echo $pnum?></p>
         <p class="text">students number:_<?php echo $unum?></p>
   
      </div>



      </div>
   
   </section>

   
 <?php


}

?>
