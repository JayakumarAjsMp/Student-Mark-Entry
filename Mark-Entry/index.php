<?php
session_start();

require("conection/connect.php");

$msg="";
if(isset($_POST['btn_log'])){
	$uname=$_POST['unametxt'];
	$pwd=$_POST['pwdtxt'];
	session_start();
	error_reporting(0);
	$pwd1=$_SESSION["unametxt"];
	$uname1=$_SESSION["pwdtxt"];
	

	$sql=mysql_query("SELECT * FROM users_tbl
			WHERE (username='$uname' OR email='$uname') AND password='$pwd'

			");

	$cout=mysql_num_rows($sql);
	if($cout>0){
		$row=mysql_fetch_array($sql);
		if($row['type']=='')
			$msg="Worng detail pls Login !.....";
			else
				header("location: every.php");
					
	}
		
	else{

		$sql=mysql_query("SELECT * FROM teacher_tbl
				WHERE (username='$uname' OR email='$uname') AND password='$pwd'
		
				");
		
		$cout=mysql_num_rows($sql);
		if($cout>0){
			$row=mysql_fetch_array($sql);
			if($row['dob']=='')
				$msg="Worng detail pls Login !.....";
			else
					header("location: everyteach.php");
						
		}
		
		else{
			$sql=mysql_query("SELECT * FROM stu_tbl
					WHERE email='$uname' AND password='$pwd'
			
					");
			
			$cout=mysql_num_rows($sql);
			if($cout>0){
				$row=mysql_fetch_array($sql);
				if($row['dob']=='')
					$msg="Worng detail pls Login !.....";
					else
						$name=$row['f_name'];
						$id=$row['stu_id'];
						header("location: everystu.php");
			
			}
			
			else{$msg="Worng detail pls Login !.....";
			}
		}
		
	}
		
}

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />

<title>Sasurie Login</title>
<link rel="stylesheet" type="text/css" href="css/login.css" />
</head>

<body>
	<form method="post">
    	<fieldset>
        	<fieldset></fieldset>
            	<div id="login_back">
        			<div id="msg">
                    
        			</div>
                    
                    <div id="login_form">
                    	<label for="login">Username:</label>
                    	<input type="text" class="fields" name="unametxt" title="Enter username here"  />
                        <div class="clear"></div>
                        <label for="login">Password:</label>
                        <input type="password" class="fields" name="pwdtxt"  title="Enter Password here"  autocomplete="off"/>
                        <div class="clear"></div>                       
                        <div id="space_div"></div>
                        <input type="submit" class="button" name="btn_log" value="Log in" />	
                    
                    </div>
        		</div>
    	</fieldset>
    </form>
	<h2 style="color:#00F;" align="center">
	<?php echo $msg; ?>
	</h2>
</body>
</html>