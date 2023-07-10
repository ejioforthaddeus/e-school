<?php 
include '../components/conn.php';

if(isset($_POST['delete'])){

    $id_to_delete = mysqli_real_escape_string($conn, $_POST['id_to_delete']);

    $rows = "DELETE FROM contact WHERE id = $id_to_delete";

    if(mysqli_query($conn, $rows)){
        header('Location: ../contact');
    } else {
        echo 'query error: '. mysqli_error($conn);
    }

}
?>