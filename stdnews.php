


<?php include 'onedu/headermstd.php'; ?>
<?php

include 'components/connect.php';

$db_name = 'mysql:host=localhost;dbname=course_db';
   $user_name = 'root';
   $user_password = '';
$conn = mysqli_connect("localhost",$user_name,"","course_db");

// if(isset($_POST['id_to_delete'])){
//    $id = $_POST['delete'];
//    echo $id;
//    $sql1 = "DELETE FROM news WHERE id = '$id' ";
//    $res1 = mysqli_query($conn,$sql1) or die("Error deleting contacts ".mysqli_error($conn));
//    if($res1){
//       echo "unsubscribed!!";
//    }else{
//       echo "Error fetching contacts!!!!";

//    }
// }

$sql = "SELECT * FROM news";
$res = mysqli_query($conn,$sql ) or die("Error fetching contacts ".mysqli_error($conn));

while($row = mysqli_fetch_array($res)){
   $name = $row['name'];
   $mess = $row['message']
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
   <link rel="stylesheet" href="css/admin_style.css">

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

   <h1 class="heading">SCHOOL ANNOUNCMENT!!-</h1>

   <div class="show-comments bg">
   <div class="box" style="">
         <div class="content"><span></span><p> - - </p></div>
         <p class="text">anounsment by--<?php echo $name?></p>
         <p class="text"><?php echo $mess?></p>
   <!-- <form action="" method="post">
            <input type="hidden" name="id_to_delete" value="<?= $fetch_contact['id']; ?>">
            <button type="submit" name="delete" class="inline-delete-btn" onclick="return confirm('delete this subscriber?');">unsubscribe subscriber</button>
         </form> -->
      </div>



      </div>
   
   </section>

   
 <?php


}

?>
