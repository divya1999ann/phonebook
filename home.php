<html>
    <head>
        <link rel="stylesheet"  type="text/css" href="home.css">
        <div class="navbar">
            <p>PHONE DIRECTORY</p>
        </div>
    </head>
    <body>
        <form action="home.php" method="POST">
                <table><tr><td>Name:</td><td><input id="nm" type="text" name="name" placeholder="Enter Name" required/></td></tr>
                <tr><td>Phone:</td><td><input type="phone" id="ph" name="phno" placeholder="phone number" /></td></tr>
                <td><input type="submit" name="rbtn" value="Add" onclick="return validation()" /></td>
                </table>
        </form>
        <form action="list.php">
        <input type="submit" name="dbtn" value='List of Subscribers'>
        </form>
<?php
    if(isset($_POST['rbtn']))
{
  $pfn=$_REQUEST['name'];

$pph=$_REQUEST['phno'];

$connect=mysqli_connect("localhost","root","");
mysqli_select_db($connect,"phnodir");
$query="INSERT INTO adduser VALUES(0,'$pfn','$pph')";
mysqli_query($connect,$query);
mysqli_close($connect);
}
?>
    <script language="javascript" type="text/javascript">
        function validation(){
            var a=document.getElementById("nm").value;
            var b=document.getElementById("ph").value;
            if(a=="")
          {alert("Empty field");
          document.getElementById("nm").focus();
          return false;}
          if(b=="")
         { alert("Empty field");
          document.getElementById("ph").focus();
          return false;}
          else if(isNaN(f)){
            alert("Enter correct phone number");
            document.getElementById("ph").focus();
            return false;
          }
          else if(f.length!=10){alert("Enter correct phone number");
            document.getElementById("ph").focus();
            return false;}
          }
    </script>  
    </body>
</html>
 
