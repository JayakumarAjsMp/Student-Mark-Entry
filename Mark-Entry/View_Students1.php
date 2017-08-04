<?php
		?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. Sasurie .::</title>
<link rel="stylesheet" type="text/css" href="css/style_view.css" />
</head>

<body>
<div id="style_div" >
<form method="post">
<table width="755">
	<tr>
    	<td width="190px" style="font-size:18px; color:#006; text-indent:30px;">View Students</td>
        <td>
        	<input type="text" name="searchtxt" title="Enter name for search " class="search" autocomplete="off"/>
        </td>
        <td style="float:right">
        	<input type="submit" name="btnsearch" value="Search" id="button-search" title="Search Student" />
        </td>
    </tr>
</table>
</form>
</div><!--- end of style_div -->
<br />
<div id="content-input">
<form method="post">

    <table border="1" width="1050px" align="center" cellpadding="3" class="mytable" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Student Name</th>
            <th>Gender</th>
            <th>Date of Birth</th>
            <th>Place of Birth</th>
            <th>Address</th>
            <th>Phone</th>
            <th>E-mail</th>
            <th>Note</th>
        </tr>
        
        <?php
	$key="";
	if(isset($_POST['searchtxt']))
		$key=$_POST['searchtxt'];
	
	if($key !="")
		$sql_sel=mysql_query("SElECT * FROM stu_tbl WHERE f_name  like '%$key%' or l_name like '%$key%'");
	else
		 $sql_sel=mysql_query("SELECT * FROM stu_tbl");
	
		
       
    $i=0;
    while($row=mysql_fetch_array($sql_sel)){
    $i++;
    $color=($i%2==0)?"lightblue":"white";
    ?>
      <tr bgcolor="<?php echo $color?>">
            <td><?php echo $i;?></td>
            <td><?php echo $row['f_name']."    ".$row['l_name'];?></td>
            <td><?php echo $row['gender'];?></td>
            <td><?php echo $row['dob'];?></td>
            <td><?php echo $row['pob'];?></td>
            <td><?php echo $row['address'];?></td>
            <td><?php echo $row['phone'];?></td>
            <td><?php echo $row['email'];?></td>
            <td><?php echo $row['note'];?></td>
                  
        </tr>
    <?php	
    }
	// ----- for search studnens------	
		
	
    ?>
    </table>
</form>
</div>
</body>
</html>