<?php
 $MaSP= $_GET['id'];
 $conn=mysqli_connect('localhost','root','','thegioituixach') or die ('connect failed');
 
 $sql = "DELETE FROM caphocsinhtomi Where id = $MaSP ";
 $query=mysqli_query($conn,$sql);
 if($query)
 {   $message = "Đã xóa thành công ";
     echo "<script type='text/javascript'>alert('$message');</script>";
     header('Location:../Display.php');
 }
 else  {echo "lỗi";}
?>
	