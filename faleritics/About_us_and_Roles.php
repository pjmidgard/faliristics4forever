<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>About_us_and_Roles</title>
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
			<?php session_start(); $df=0; $ds=0; 
			$_SESSION["qwe"]="";
			$_SESSION["derk"]="ok";
			if (!isset($_SESSION["lghjas"])){}
elseif (isset($_SESSION["lghjas"])){
$_SESSION["lghjas"]="click";}
			if (!isset($_SESSION["lghj"])){}
			if (isset($_SESSION["lghj"])){$_SESSION["lghj"]="Click";}
            if (!isset($_SESSION["ldfd"])){}elseif($_SESSION["ldfd"]=="Clickh")
			{$_SESSION["ldfd"]="Click";}
			elseif (isset($_SESSION["ldfd"])){$_SESSION["ldfd"]="Click";}
			 if (!isset($_SESSION["lghlk"])){} elseif (!isset($_SESSION["lghj"])){if($_SESSION["lghlk"]=="Update_faleristics")
		  {$_SESSION["lghlk"]="Click";}}
		  if (!isset($_SESSION["lfg"])){} 
		    elseif (isset($_SESSION["lfg"])){$_SESSION["lfg"]="in";} //
			 if (!isset($_SESSION["lghld"])){} elseif (!isset($_SESSION["lghld"])){if($_SESSION["lghld"]=="Update_faleristics")
		  {$_SESSION["lghld"]="Click";}}
		  	  if (!isset($_SESSION["dert"])){} 
		    elseif (isset($_SESSION["dert"])){$_SESSION["dert"]="in";}
				
		  
 ?>
						<div id="header" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right:
						1px; padding-top: 1px; padding-bottom: 1px"><br>
	&nbsp;&nbsp;  <marquee> faleristics4forever </marquee><br>
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
					    <!-- <li class="s"><a href="Listing_function_faleristics.php">
						<font style="font-size:20px"> Listing_function_faleristics <font></a></li>
						<!-- Listing function of all student broken by faleristics --> 
						<!-- <li class="s"><a href="CRUD-faleristics.php">
						< font style="font-size:20px"> CRUD-faleristics </font></a></li> -->
						<!-- faleristics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Update_Details.php"><font style="font-size:20px"> Update_Details <font>
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
			&nbsp;&nbsp; <font style="font-size: 12pt">
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please, <br>&nbsp; Read our roles <br>&nbsp; after Please, register <br>
			&nbsp;to register you <br> 
			&nbsp;need go to home <br>&nbsp;page and click <br>&nbsp;button register. <br>
			&nbsp;Then you need to <br> 
			&nbsp;fill the form <br>
			&nbsp;and after <br> 
			&nbsp;You can manage <br>&nbsp;your details and <br>&nbsp;choose more faleristics. </font> <br>
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><img src="F4F2.jpg" width="50" height="50" hspace="15" vspace="15">
				</p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
				<font style="font-size: 12pt">
			<dl>
			<dt> History <br><br>
			<dd> Our website was exist 02/05/2020 by Matrix2014www it is has very good design and its call "faleristics4forever".<br>
			<dt> Roles <br><br>
			<dd> You should not make clones, you can have just one account otherwise we will you notify if you have not
			&nbsp;listen you will blocked.<br>
			     You should not type on the register at columns First name and Surname Name 
                 &nbsp;information like not able to pronounce, disgusting, injure any body, bad words and email address otherwise
				 &nbsp;we will you notify if you have not listen you will blocked.<br><br> 	
				
			<dt> Email <br><br>
			<dd> lelkamoja@yahoo.com <br>
		    
			    


            
			
            
				 
			
			</dl>
			</font>
			</div>			
	   <div id="After_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
	   padding-top: 1px; padding-bottom: 1px">
	   		<br>
			<!--/////////////////////////////////////////////////////////////////////////////////-->
			&nbsp;<font style="font-size: 12pt"> Thank you that you read our Roles.</font>
	   </div>
        <div id="side_bar_2" style="border-style: solid; border-width: 1px; padding-left: 1px; padding-right: 1px; 
		padding-top: 1px; padding-bottom: 1px">
        <!--Form -->
		<br><br><br><br><br><br><br><br><br><br><br><br>
		<table width="197" height="150" border="1" bgcolor="#C0C0C0" style="border-color: #C0C0C0" align="center">
		<tr> <td>
		<br>
		<form method="POST" action="index.php">
<?php
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"]))
{
echo '<div align="center">
<font color green style="font-size:12pt">';if($_SESSION["fg"]=="1"){echo "Admin <br>";}else{echo "USER <br>";} 
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
<input type="submit" name="Sign out" value="Sign out"></input>
</form>';
if(isset($_SESSION["lg"]) && isset($_SESSION["lj"])) //die('');
{
        	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	session_unset();
	session_destroy();
	echo '<meta http-equiv="refresh" content="0; url=index.php">';
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
	&nbsp;&nbsp;<marquee> faleristics4forever </marquee><br>
	&nbsp;&nbsp;
						</div>
			<br><br>
			</body>
</html> 