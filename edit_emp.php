 <?php
            
            $id = $_post["id"];
            $fname =$_POST["fname"];
            $lname =$_POST["lname"];
            $phone =$_POST["phone"];
            $ofc =$_POST["ofc"];
            $email = $_POST["email"];
            $gend =$_POST["gend"];
            $pwd = $_POST["pwd"];
            $dob = $_POST["year"]."-".$_POST["mon"]."-".$_POST["day"]; 
            $age = $_POST["age"];
            $pin = $_POST["pin"];
            $abt = $_POST["abt"]; 
            $cn = mysql_connect("localhost","root","ac3r")or die(mysql_error());
            $db = mysql_select_db("emp_asgn3",$cn) or die(mysql_error());
            $str = "update emp set fname='".$fname."',lname='".$lname."',phone='".$phone."',ofc='".$ofc."',email='".$email."',gend='".$gend."',pwd='".$pwd."',dob='".$dob."',age=".(int)$age.",pin='".$pin."',abt='".$abt."' where id=".(int)$id;
            mysql_query($str) or die(mysql_error());
            echo"RECORD EDITED SUCCESSFULLY !";
            echo"<br>Check the next page";
            
         
         
?> 
<html><body> <a href="view.php"> Next page </a></body></html>  