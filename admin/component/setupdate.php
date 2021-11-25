<?php
 $MaSp= $_GET['id'];
 $h3=$_POST['ten'];
//  $h7=$_POST['tomtat'];
$h9=$_POST['image'];
$h8=$_POST['gia'];
 $conn=mysqli_connect('localhost','root','','thegioituixach') or die ('connect failed');
 $sql= "UPDATE caphocsinhtomi SET ten = '$h3', image ='$h9', gia='$h8'   WHERE id = $MaSp";
 $result= $conn->query($sql);
 if($result)
    {echo "oke"; header('Location:../display.php');}
 else  
 {echo "lỗi";}
 $conn->close();
?>