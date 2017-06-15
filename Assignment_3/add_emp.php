 <?php
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
            
            
            echo " ".$dob;
            $mydate = new DateTime($dob);
             

            
             $cn = mysql_connect("localhost","root","ac3r")or die(mysql_error());
         $db = mysql_select_db("emp_asgn3",$cn) or die(mysql_error());
         $str = "INSERT INTO emp(fname,lname,phone,ofc,email,gend,pwd,dob,age,pin,abt) VALUES ('".$fname."','".$lname."','".$phone."','".$ofc."','".$email."','".$gend."','".$pwd."','".$mydate."',".(int)$age.",'".$pin."','".$abt."')";
         mysql_query($str) or die(mysql_error());
         echo"<br> Please go to next page ! ";
         echo"<br>RECORD INSERTED SUCCESSFULLY !";
         $dob = date("yyy")
         ?>
<html><body> <a href="view.php"> Next page </a></body></html>  