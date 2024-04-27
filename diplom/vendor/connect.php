<?
 $conn=mysqli_connect('localhost','root', '', 'diplom');
 if (!$conn){
    echo "Error connecting to";
 }
 else{
    echo "Connected successfully";
 }
?>