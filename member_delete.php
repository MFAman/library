<?php 
   echo  $id = $_GET['id'];

   include_once("includes/db_config.php");

   $sql = "DELETE FROM user WHERE user_id = '$id'";
   $db->query($sql);
   if($db->affected_rows>0){
        header("Location:members.php");
   }

?>