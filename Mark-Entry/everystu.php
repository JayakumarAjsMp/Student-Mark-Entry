<?php
session_start();
error_reporting(0);
$pwd=$_SESSION[$pwd1];
$uname=$_SESSION[$uname];
require("conection/connect.php");
$tag="";
if (isset($_GET['tag']))
	$tag=$_GET['tag'];


	?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>::. Sasurie .::</title>
<link rel="stylesheet" type="text/css" href="css/everyone_format.css" />
<link rel="stylesheet" type="text/css" href="css/menu.css"/>
<link rel="stylesheet" type="text/css" href="css/home.css"/>

</head>

<body>

   <div id="top">
      <div><a href="?tag=logout"><button>Log out</button></a>
      </div>
</div>
<br /><br />
<div id="admin">
	
        <div id="lmain">
                <a href="#" title="logo" ><img src="picture/logo.png" /></a>
                <div id="leftmanu">
                	<div >
                        <a href="?tag=home" title="HOME (Shift+Ctrl+H)">Home</a><br />
                	</div>
                    
                   <!-- ?php  
                    
						$sql_menu=mysql_query("SELECT * FROM  article_tbl WHERE loca_id=1");
						while($row=mysql_fetch_array($sql_menu)){
						?>
						 <div><a href="?tag=view&v_id=<!--?php echo $row['a_id'];?>"><!--?php echo $row['title'];?></a></div>
						?php	
							}
						?> -->  
                    
                          
                     <div>
                    	<a href="everystu.php?tag=test_score" class="customer" title="Shift+Ctrl+T">&nbsp;Test Score</a>
                    </div>                 
                    
                    <div>
                    	<a href="everystu.php?tag=contact" class="customer" title="Shift+Ctrl+C">&nbsp;Contact </a>
                    </div>
                    
              
                    
                </div><!-- end of leftmanu -->
        </div><!--end of lmaim -->
        
        <div>
        
        
        </div>
    <div id="rmain">
    	<div id="pic_manu">
    		<a href="#" title="Studnt"><img src="picture/student.png" hspace="10px" /></a>
            <a href="#" title="Teacher"><img src="picture/teacher.png" hspace="20px" /></a>
            <a href="#" title="Faculties"><img src="picture/faculties.png" hspace="15px" /></a>
            <a href="#" title="Subject"><img src="picture/subject.png" hspace="10px" /></a>
            <a href="#" title="Score"><img src="picture/score.png" hspace="20px" /></a>
            <a href="#" title="User"><img src="picture/user.png" hspace="10px" /></a>
            <a href="#" title="Contact"><img src="picture/contact.png" hspace="10px" /></a>
         </div><!--end of pic_manu -->
        
        
        
        
         <div id="menu2">
                
                <div style="width:4px; height:37px; padding:0px; margin:0px; float:left;"></div>
                
                <li id="li_menu"><a href="everystu.php?tag=view_students">Students</a>
                </li>
                
                <li id="li_menu"><a href="everystu.php?tag=view_teachers">Teachers</a>
                </li>
                
                <li id="li_menu"><a href="everystu.php?tag=view_faculties">Facuties</a>
                </li>
                
                <li id="li_menu"><a href="everystu.php?tag=view_subjects">Subjects</a>                
                </li>
                
           <li id="li_menu"><a href="everystu.php?tag=test_score">Score</a>
                </li>
                

                <li id="li_menu"><a href="?tag=view_contact">Contact</a>
                </li>
                           
      </div><!--end of menu2--> 
            
            
            <div id="contents">
            
            	<div id="informations">
                	<div id="in_informations">
				<?php
					
   						if($tag=="home" or $tag=="")
							include("home.php");
                        elseif($tag=="view_students")
                            include("View_Students1.php");
						elseif($tag=="view_teachers")
							include("View_Teachers1.php");
						elseif($tag=="view_subjects")
							include("View_Subjects1.php");
						elseif($tag=="view_scores")
							include("test_Scores1.php");
						elseif($tag=="view_faculties")
							include("View_Faculties1.php");
						elseif($tag=="test_score")
							include("test_Scores1.php");
						elseif($tag=="view_contact")
							include("View_Contact.php");
						elseif($tag=="logout")
							include("logout.php");
								
							/*$tag= $_REQUEST['tag'];
							
							if(empty($tag)){
								include ("Students_Entry.php");
							}
							else{
								include $tag;
							}*/
									
                        ?>
                    </div><!--end of in_informations -->
                </div><!--end of informations -->
    		</div><!--end of contens -->   
     </div><!--end of rmain -->
    	
    </div><!--end of admin -->

</body>
</html>