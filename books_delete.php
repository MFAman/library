<?php 
   echo  $id = $_GET['id'];

   include_once("includes/db_config.php");

   $sql = "DELETE FROM book WHERE book_id = '$id'";
   $db->query($sql);
   if($db->affected_rows>0){
        header("Location:books.php");
   }

?>