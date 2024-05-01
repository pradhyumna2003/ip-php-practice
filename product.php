<?php
$conn=new mysqli('localhost','root','','productdb');
$cat=$_REQUEST['category'];
$re=$conn->query("select * from products where cat='$cat';");
// echo "$"
if ($re->num_rows > 0) {
    // output data of each row
    while($row = $re->fetch_assoc()) {
        echo "<p>Name:".$row['name'].";Price:".$row['price']."</p><br>";
    }
}
?>