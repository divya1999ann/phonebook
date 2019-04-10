<?php
if(isset($_GET['dbtn']))
{
  
$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"phnodir");
$query="SELECT * FROM adduser";
$result=mysqli_query($connect,$query);
echo "List of subscribers :" . "<br>"."<br>";
if (mysqli_num_rows($result) > 0) {
    // output data of each row
    
    while($row = mysqli_fetch_assoc($result)) {
        echo  $row["Slno"]." . ".$row["name"]." - ". $row["phone"]. " " . "<br>";
    }}
mysqli_close($connect);
}

?>