<?php 
$conn=new mysqli('localhost','root','','dbstud');
if($conn->error){
    die('failed');
}

$flag=0;
if($_SERVER['REQUEST_METHOD']=='POST'){
    $nm=$_POST['name'];
    $eid=$_POST['empid'];
    $dob=$_POST['dob'];
    echo "Hello $nm , u'r eid: $eid and DOB: $dob ";
    if($conn->query("insert into stud values('$nm','$eid','$dob');")){
        $flag=1;
    }
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <?php 
    if($flag==1){
        echo "
    <script>
        alert('Success!')
    </script>";
    }   
    ?>
    
</body>
</html>