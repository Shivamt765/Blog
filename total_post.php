<?php include "db.php";
    $sql="SELECT COUNT(id) AS total_count FROM blog_data";
   $result=mysqli_query($conn,$sql);
   if(mysqli_num_rows($result)>0){
    $row=mysqli_fetch_assoc($result);
    $total_count=$row['total_count'];

   }
?>