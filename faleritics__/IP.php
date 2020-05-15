<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>IP</title>
  <link href='https://fonts.googleapis.com/css?family=Alegreya SC' rel='stylesheet'>
 <style>
	#header{
	background-color : #C2D3FF;  <!-- background color -->
	border:1px solid red; 
        width:1000px;
        height:100px;
        color:black;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
		#horizontal_menu{
	background-color : #A5CCA7;  <!-- background color -->
	border:1px solid red;
        width:1000px;
        height:100px;
        color:black;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
	#side_bar_1
	{
		background-color : #A5CCA7;  <!-- background color -->
	    border:1px solid red; 
        width:200px;
        height:800px;
        color:black;              <!-- text blue -->
	text-align:center;
	float:left;
	margin-top:  -1px;
	margin-left: 40px;
	}
		#Bofore_Content
	{
		background-color : #A5CCA7;  <!-- background color -->
	    border:1px solid red; 
        width:599px;
        height:100px;
        color:black;              <!-- text blue -->
	text-align:center;
	margin-left: 240px;
	margin-top:  -1px;
	float:center;
	}	
	li.s {
display: inline;
		

}

	#section{
        background-color : #A5CCA7;    <!-- background color -->
	border:1px solid red; 
	width:599px;
    height:600px;
 	color:black;             <!-- color text -->
	float:center;
	margin-left: 240px;
	margin-right:139px;
	}  
		#side_bar_2
	{
		background-color : #74E8DD;  <!-- background color -->
	    border:1px solid red; 
        width:200px;
        height:800px;
        color:black;              <!-- text blue -->
	text-align:center
	float:right;
	margin-left: 840px;
	margin-top:  -811px;
	margin-right:39px;
	}
			#After_Content
	{
		background-color : #A5CCA7;  <!-- background color -->
	    border:1px solid red; 
        width:599px;
        height:100px;
        color:black;              <!-- text blue -->
	text-align:center;
	margin-left: 240px;
	float:center;
	}
		#footer{
	background-color : #C2D3FF;  <!-- background color -->
	border:1px solid red; 
        width:1000px;
        height:100px;
        color:black;              <!-- text blue -->
	text-align:center;
	margin-left: 40px;
	margin-right:40px;
	}
    body
    {
        font-family: 'Alegreya SC';
    }
   
    	</style>
    </head>
			<body bgcolor="#74E8DD">
			<?php session_start(); $df=0; $ds=0; $as=0; $asi=0; $asd=0;
		$_SESSION["qwe"]="";
		$_SESSION["derk"]="ok";
		
		  ?>
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; <marquee> faleristics4forever </marquee><br>
	&nbsp;&nbsp; 
						</div>
<div id="horizontal_menu" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px;
 padding-top: 1px; padding-bottom: 1px">
				<nav>
				<br>
				<div align="center">
					<ul>
						&nbsp;&nbsp; <li class="s"><a href="index.php"><font style="font-size:12px"> Home </font></a></li> 
						<!-- login page -->
						&nbsp;&nbsp; <li class="s"><a href="About_us_and_Roles.php">
						<font style="font-size:12px"> About_us_and_Roles </font></a></li> 
						<!-- About us and Roles page -->
					    <!-- <li class="s"><a href="Listing_function_faleritics.php">
						<font style="font-size:20px"> Listing_function_faleritics <font></a></li>
						<!-- Listing function of all student broken by faleritics --> 
						<!-- <li class="s"><a href="CRUD-faleritics.php">
						<font style="font-size:20px"> CRUD-faleritics </font></a></li> -->
						<!-- faleritics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Gallery2.php"><font style="font-size:20px"> Gallery2 <font>
						</a></li> --> <!-- Update Details page -->
						<?php
						//echo $_SESSION["lg"];		
                        //fg
		//////////////////////////////////////////////////////
						
					   if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="0"){
						echo '
						   
					    &nbsp;&nbsp;  <li class="s"><a href="Update_Details.php">
						<font style="font-size:12px"> Update_Details </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="Gallery.php">
						<font style="font-size:12px"> Gallery </font></a></li> 
						';
						}
					else if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="1"){
						echo ' 
					    &nbsp;&nbsp;  <li class="s"><a href="Update_Details.php">
						<font style="font-size:12px"> Update_Details </font></a></li>
						&nbsp;&nbsp;  <li class="s"><a href="Gallery.php">
                        <font style="font-size:12px"> Gallery Add</font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="Gallery2.php">
                        <font style="font-size:12px"> Gallery UPDATE </font></a></li> 
						&nbsp;&nbsp;  <li class="s"><a href="IP.php">
                        <font style="font-size:12px"> IP </font></a></li> 
						';
						}
                        else{
							echo '&nbsp;&nbsp;  <li class="s"><a href="Gallery.php">
						<font style="font-size:12px"> Gallery </font></a></li> ';
                        }
						
					
					
					?>
					</ul>
					</div>
	</nav>
			</div>	
			<div id="side_bar_1" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
			<br><br><br><br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			&nbsp;&nbsp;&nbsp;&nbsp;
			<ul>
			<li> <font style="font-size: 12pt">  On  <u>Gallery2 </u> This page for buy medals </font> </li>
			</ul>
			
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br> faleritics
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
<table width="500" height="100" bgcolor="#FFFFFF" style="border-color: #C0C0C0" align="center">
<tr><td>
<form method="POST" action="Gallery2.php">
<?php


if(isset($_SESSION["lfg"])=="You successful Update")
{
echo '<font color="#28F000" style="font-size: 10pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';
		usleep(200000);


unset($_SESSION['lghj']);
session_destroy($_SESSION['lghj']);
$Timecount=0;
while ($Timecount<=1677216)
{
	$Timecount++;
}
unset($_SESSION['lfg']);
session_destroy($_SESSION['lfg']);
echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';
}




if(!isset($_SESSION["fg"]))
{
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
if(!isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="1" || !isset($_SESSION["lj"])   &&  $_SESSION["fg"]=="1" || !isset($_SESSION["fg"])  &&  $_SESSION["fg"]=="1") //die('');
{
if(!isset($_SESSION["lfg"]) || $as==2)
{
echo '<meta http-equiv="refresh" content="0; url=index.php">';}
elseif(isset($_SESSION["lfg"])=="You successful Update")
{

$_SESSION["lfg"]="You successful Update";
if(isset($_SESSION["lfg"]))
{
echo '<font color="#28F000" style="font-size: 10pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';


usleep(200000);
echo '<meta http-equiv="refresh" content="0; url=Gallery2.php">';

if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]) && !isset($_SESSION["lfg"])=="You successful Update" || $_SESSION["fg"]=="0") //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if($as==0)
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}
		}
	}
$as=1;
  usleep(5000000);
   session_unset();
 session_destroy();$as=2;usleep(5000000);
 echo '<meta http-equiv="refresh" content="0; url=index.php">';
 }
 }
}
if(!isset($_SESSION["lfg"]))
{}
elseif(isset($_SESSION["lfg"])=="You successful Update")
{

echo '<font color="#28F000" style="font-size: 10pt">
		&nbsp;&nbsp;'  .$_SESSION["lfg"]. '!!! </font>';
$as=1;



if(!isset($_SESSION["lgi"]) || $_SESSION["fg"]=="0") //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	if($as==0)
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}
		}
	}
 
 
 
 }

if(isset($_SESSION["lg"])  &&  $_SESSION["fg"]=="1"  || isset($_SESSION["lj"]) &&  $_SESSION["fg"]=="1" || isset($_SESSION["fg"])  &&  $_SESSION["fg"]=="1") //die('');
{

$hash = '$2y$07$BCryptRequires22ChrcteVlQH0piJtjXl0t1XkA8pw9dMXTpOqvotnritopnretmtmnuentirpeontrienvioernvnroivnemiovmif0398u3890309j30j9f03j903';
$resultr1 = substr($hash , 85, 95);
$resultr2 = substr($hash , 22, 36);
$resultr3 = substr($hash , 45, 56);
$resultri1 = substr($resultr1 , 6, 7);
$resultri2 = substr($resultr3 , 6, 7);
$resultri3 = substr($resultr2 , 6, 7);
$resultri4=''.$resultri1.''.$resultri2.''.$resultri3.'';
$resultri5 = substr($resultri4 , 5, 15);

$u=0;
define("DB_HOST", "sql301.epizy.com");
	define("DB_USER", "epiz_25673480");
	define("DB_PASSWORD", $resultri5);
	define("DB_DATABASE", "epiz_25673480_Cluster");
	try{
		$dbConnection = new 
PDO('mysql:dbname='.DB_DATABASE.';host='.DB_HOST.';charset=utf8', DB_USER, DB_PASSWORD);
		$dbConnection->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
		$dbConnection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
	} catch (PDOException $e) {echo 'Connection failed: ' . $e->getMessage();}
$ddd=$_SESSION["lj"];
		{$sqlj = "SELECT * FROM IP";}
$items = $dbConnection->prepare("$sqlj");
$items->execute();
//(`Adminid`,`img2`,`img3`,`Name_of_Product`,`password`,`admin`)
$rowg[0]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;IP&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;";
$rowg[1]="&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Date and Time";
echo '<br>';
if($_SESSION["fg"]=="1"){
echo '<div align="center"><font color ="black" style="font-size: 10pt"> IP </div>';
}
foreach ($items as $row) 
{

for($u=0; $u<2; $u++)
{
echo '<div align="center"><font color ="black" style="font-size: 10pt">' .$rowg[$u]. 
"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;"
 .$row[$u]."</font></div></td></tr><tr><td>";
}
}
echo '<br>';
echo '<br>';
echo '<br>';

}


?>
</td></tr>
</form>
</table>
			</div>			
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			&nbsp;<font style="font-size: 22pt">  </font>
	   </div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
		<form method="POST" action="Gallery2.php">
<?php
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]))
{
echo '<div align="center">
<font color green style="font-size:15pt">';if($_SESSION["fg"]=="1"){echo "Admin <br>";}else{echo "USER <br>";} 
echo "</font></div>";
echo "You are welcome ";
echo $_SESSION["lj"]. " <br> ";
}
?>


<p>&nbsp;</p>

</form>
<?php 
if(isset($_SESSION["lg"])) //die('');
{
echo
'<form method="POST" action="index.php">
<input type="submit" name="Sign_out" value="Sign out"></input>
</form>'; 
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST" && isset($_POST['Sign_out'])) 
	{
	if($as==0)
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
	}
		}
	}
}
?>
<br>
<?php
function You_have_Sign_in(){
$df=2;
echo '<b><font color ="green"> You have Sign in </font></b>';
}

if(isset($_SESSION["lg"])) //die('');
{
 echo '<div align="center">';
 You_have_Sign_in();
 echo $_SESSION["lg"]. " <br> ";
}

		?>
</td></tr>
</table>

		
		</div>
						<div id="footer" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp; <marquee> faleristics4forever </marquee> <br>
	&nbsp;&nbsp; 
						</div>
			<br><br>
			</body>
</html> 