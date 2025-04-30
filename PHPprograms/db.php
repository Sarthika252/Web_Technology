<?php
 $a=(int)$_POST['rollno'];
 $b=$_POST['name'];
 $mysqli=mysqli_connect("localhost","root","root","stud");
 if(mysqli_connect_errno()){
    print("error %s".mysqli_connect_error());
    exit();
 }
 else{
 $sql="INSERT INTO student(rollno,name) VALUES($a,'$b')";
 $res=mysqli_query($mysqli,$sql);
 if($res==TRUE)
    echo"success";
 else
    echo "error",mysqli_error($mysqli);
}
?>

 