<?php
$id="";
$opr="";
if(isset($_GET['opr']))
	$opr=$_GET['opr'];
			
	if(isset($_GET['rs_id']))
		$id=$_GET['rs_id'];
		//--------------add data-----------------
		if(isset($_POST['btn_sub'])){
			$f_name=$_POST['fnametxt'];
			$note=$_POST['notetxt'];

			$sql_ins=mysql_query("INSERT INTO facuties_tbl
					VALUES(
					
					'$f_name',
					'$note'
					)
					");
			if($sql_ins==true)
				$msg="1 Row Inserted";
				else
					$msg="Insert Error:".mysql_error();

		}
		//------------------uodate data----------
		if(isset($_POST['btn_upd'])){
			$f_name=$_POST['fnametxt'];
			$note=$_POST['notetxt'];

			$sql_update=mysql_query("UPDATE facuties_tbl SET
					f_name='$f_name',
					note='$note'
					WHERE
					facuties_id=$id
					");
			if($sql_update==true)
				header("location:?tag=view_faculties");
				else
					$msg="Update Fail".mysql_error();
		}
		?>


<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<link rel="stylesheet"  type="text/css" href="css/style_entry.css" />
<title>::. Sasurie .::</title>
</head>
<body>
<?php

if($opr=="upd")
{
	$sql_upd=mysql_query("SELECT * FROM facuties_tbl WHERE faculties_id=$id");
	$rs_upd=mysql_fetch_array($sql_upd);
?>

<!-- for form Upadte-->

<div id="top_style">
        <div id="top_style_text">
        Faculties Update </div>
        <!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_faculties"><input type="button" name="btn_view" title="View Faculties" value="Back" id="button_view" style="width:70px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

 
<div id="style_informations">
	<form method="post" >
    	<div>
    	<table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td>Faculties Name:</td>
            	<td>
                	<input type="text" name="fnametxt" id="textbox" value="<?php echo $rs_upd['f_name'];?>"/>
                </td>
            </tr>
            
            <tr>
            
            <tr>
            	<td>Note:</td>
                <td>
                	<textarea name="notetxt" cols="22" rows="5"><?php echo $rs_upd['note'];?></textarea>
                </td>
            </tr>
    	</table>
  </div>
    </form>

</div><!-- end of style_informatios -->

<?php	
}
else
{
?>
<!-- for form Register-->
	
<div id="top_style">
        <div id="top_style_text">
        Faculties Entry
        </div><!-- end of top_style_text-->
       <div id="top_style_button"> 
       		<form method="post">
            	<a href="?tag=view_faculties"><input type="button" name="btn_view" title="View Faculties" value="View_Faculties" id="button_view" style="width:120px;"  /></a>
             
       		</form>
       </div><!-- end of top_style_button-->
</div><!-- end of top_style-->

<div id="style_informations">
	<form method="post" >
    <div>
   	  <table border="0" cellpadding="4" cellspacing="0">
        	<tr>
            	<td>Faculties Name:</td>
            	<td>
                	<input type="text" name="fnametxt" id="textbox"/>
                </td>
            </tr>
           
   	    <tr>
	      <td>Note:</td>
	      <td><textarea name="notetxt" cols="22" rows="5"></textarea></td>
        </tr>
      </table>
      
	</div>
    </form>

</div><!-- end of style_informatios -->
<?php
}
?>
</body>
</html>