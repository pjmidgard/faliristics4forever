<!DOCTYPE html>
<html>
	<head>
		<meta charset="UTF-8">
		<title>Register</title>
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
			<?php session_start(); $df=0; $ds=0; ?>
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
					    <!-- <li class="s"><a href="Listing_function_faleristics.php">
						<font style="font-size:20px"> Listing_function_faleristics <font></a></li>
						<!-- Listing function of all student broken by faleristics --> 
						<!-- <li class="s"><a href="CRUD-faleristics.php">
						<font style="font-size:20px"> CRUD-faleristics </font></a></li> -->
						<!-- faleristics (admin user only) /////////////////////////////--> 
						<!-- <li class="s"><a href="Register.php">
						<font style="font-size:20px"> Register <font></a></li> -->
						<!-- button click at form Register inputjoin to sport -->
					    <!-- <li class="s"><a href="Update_Details.php"><font style="font-size:20px"> Update_Details <font>
						</a></li> --> <!-- Update Details page -->
						 <!-- <li class="s"><a href="Manage_Users.php">
						 <font style="font-size:20px"> Manage_Users </font></a></li> -->
						 <!-- Manage User (admin user only) //////////////////////-->
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
			&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Please, fill <br>&nbsp;our register form. <br> 
			&nbsp;You need fill <br>&nbsp;all six column, <br>&nbsp;choose one/few <br>
			&nbsp;faleristics. so, you <br> 
			&nbsp;can choose <br>&nbsp;minimum <br>
			&nbsp;one sport. <br>&nbsp;Also, if <br>&nbsp;you choose that <br> 
			&nbsp;you want to <br>&nbsp;be admin. You <br>&nbsp;need to ask <br>&nbsp;about that <br>&nbsp;password&nbsp;
			<br>&nbsp;the admin. After <br>&nbsp;type it. That <br>&nbsp;all.</font> <br>
			</div>  
			<div id="Bofore_Content" style="border-style: solid; border-width: 1px; padding-left: 1px; 
			padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
							<p align="center"><b><font color ="#FFF8D2"><br>faleristics
				</font></b></p></div>
				<div id="section" style="border-style: solid; border-width: 1px; padding-left: 1px; 
				padding-right: 1px; padding-top: 1px; padding-bottom: 1px">
				<br>
				<!--/////////////////////////////////////////////////////////////////////////////////-->
<table width="500" height="100" border="1" bgcolor="#FFFFFF" style="border-color: #C0C0C0" align="center">
<tr><td>
<form method="POST" action="Register.php">
<?php
if(isset($_SESSION["lg"]) || isset($_SESSION["lj"]) || isset($_SESSION["fg"])) //die('');
{echo '<meta http-equiv="refresh" content="0; url=index.php">';}
if(!isset($_SESSION["lg"]) && !isset($_SESSION["lj"]) && !isset($_SESSION["fg"])) //die('');
{
echo '
<p>&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter user_id<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="student_id" size="10" maxlength="10"></input>
</p>
<p>&nbsp;&nbsp; &nbsp;Please enter password two times to proof it<br>&nbsp;&nbsp;&nbsp;
<input type="password"  name="pass1" size="25" maxlength="25"></input>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; 
<input type="password"  name="pass2" size="25" maxlength="25"></input>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter first_name<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="first_name" size="50" maxlength="50"></input>
</p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter last_name<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="last_name" size="50" maxlength="50"></input>
</p>
<p>
&nbsp;&nbsp;&nbsp;<font color ="black" style="font-size: 10pt"> Please enter email<br>
&nbsp;&nbsp;&nbsp;
<input type="text"  name="email" size="50" maxlength="100"></input>
</p>
<br>


&nbsp;&nbsp;&nbsp;
</input>
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<input type="checkbox" name="ADMIN" value ="ADMIN">&nbsp;&nbsp;&nbsp;&nbsp;
&nbsp;ADMIN/USER  
&nbsp;&nbsp; &nbsp;Please enter password&nbsp;&nbsp;
<input type="password"  name="pass3" size="25" maxlength="25"></input>
</p>
<p>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Are you agree with Our Roles 
&nbsp;&nbsp;&nbsp;<input type="checkbox"  name="Roles" size="25" maxlength="25"></input></p>
</font>
</font>
<input type="submit" value="OK" ></input>
&nbsp;
<input type="reset" value="Reset"></input>
';
///insert into instructor values

         	if ($_SERVER["REQUEST_METHOD"] == "POST") 
	{
	$df=0;$gh=0;
		$varN1 = $_POST["student_id"];
		$varN2 = $_POST["pass1"];
        $varN3 = $_POST["pass2"];
        $varN4 = $_POST["first_name"];	
        $varN5 = $_POST["last_name"];
        $varN6 = $_POST["email"];
		$varN7 = $_POST["pass3"];
		$i=0; $add;$h=0;$addg=" ";
		$dlin7=strlen($varN6);
		$dlin8=$dlin7-1;
		$dt=0;$de=0;
		if($dlin8==0){$de=1;$i=0;}
		if($dlin8>0)
	    {
		do
	    {
		$i++;
		$add=$varN6[$i];
		if($add=="@"){$h=1;$addg=$varN6[$i];}
		if($i<$dlin8){$h=1;}
		}while($h<1 || $i<$dlin8);
         }		
		if($addg!="@" && $i<$dlin8 || $addg!="@" && $i<$dlin7)
		{
		$dt=3;
		 echo '
		<font color="#E2000D" style="font-size: 10pt">
		&nbsp;&nbsp;  You wrong fill the email column, please, try again !!! </font>';
		}
		
		if ( (!isset($_POST["Roles"]))  == "on" )
		$RUL = 0; 
	else
		$RUL = 1;
		
		if($RUL==0) {
		$dt=3;
		 echo '
		<font color="#E2000D" style="font-size: 7pt">
		&nbsp;&nbsp;  Sorry, but you cannot register because you need to choose that you agree our Roles !!! </font>';
		}
		
if($dt!=3)
{
if ( (!isset($_POST["ADMIN"])) == "on" )
		$admin = 0;
	else{
		$admin = 1;
		if($varN7!="jfm493fm320k0m")
		{$df=2; echo '
		<font color="#E2000D" style="font-size: 10pt">
		&nbsp;&nbsp;  Password wrong you can not register like admin, please, try again!!! </font>';}
		}
if ( (!isset($_POST["RBY"]))  == "on" )
		$RBY = 0;
	else
		$RBY = 1;	
if ( (!isset($_POST["TBT"]))  == "on" )
		$TBT = 0;
	else
		$TBT = 1;
if (  (!isset($_POST["FUT"]))  == "on" )
		$FUT = 0;
	else
		$FUT = 1;
if ( (!isset($_POST["TEN"]))  == "on" )
		$TEN = 0;
	else
		$TEN = 1;	
if ( (!isset($_POST["SNO"]))  == "on" )
		$SNO = 0;
	else
		$SNO = 1;		

$hash = '$2y$07$BCryptRequires22ChrcteVlQH0piJtjXl0t1XkA8pw9dMXTpOqvotnritopnretmtmnuentirpeontrienvioernvnroivnemiovmif0398u3890309j30j9f03j903';
$resultr1 = substr($hash , 85, 95);
$resultr2 = substr($hash , 22, 36);
$resultr3 = substr($hash , 45, 56);
$resultri1 = substr($resultr1 , 6, 7);
$resultri2 = substr($resultr3 , 6, 7);
$resultri3 = substr($resultr2 , 6, 7);
$resultri4=''.$resultri1.''.$resultri2.''.$resultri3.'';
$resultri5 = substr($resultri4 , 5, 15);
	
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
$dlin1=strlen($varN1);$dlin2=strlen($varN2);
$dlin3=strlen($varN3);$dlin4=strlen($varN4);
$dlin5=strlen($varN5);$dlin6=strlen($varN6);
if($df==0)
{
if($RBY =="0" || $TBT =="0" || $FUT =="0" || $TEN =="0" || $SNO =="0")
{
if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
$sql = "SELECT * FROM Students WHERE student_id = '$varN1%'";
}
}
if($RBY =="0" || $TBT =="0" || $FUT =="0" || $TEN =="0" || $SNO =="0")
{
if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
$items = $dbConnection->prepare("$sql");
$items->execute();
foreach ($items as $row) 
{
//////
/* login 1 */ 
//echo $row[0]." <br> "; 
$row1=$row[0]; $ty2=$row[0];
$ty3[0]=$ty2[0];$ty4=$ty3[0];
$dlin3=strlen($ty4);
if($dlin3==1){$df=1;}


}
}
if($df==1){echo '<font color="#E2000D" style="font-size: 10pt">
&nbsp;&nbsp; This ID already exist please, try again !!! </font>';} 
}
}
/* password 5 */
//echo $row[4]." <br> "; 
////////////	
	if($df==0){		
if($RBY =="0" || $TBT =="0" || $FUT =="0" || $TEN =="0" || $SNO =="0")
{
if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $admin =="1" && $varN2==$varN3)
{
	
$varN3 = password_hash($varN3, PASSWORD_DEFAULT);
	$sql = "insert into Students values('$varN1','$varN4','$varN5','$varN6','$varN3',1)";}}
if($RBY =="0" || $TBT =="0" || $FUT =="0" || $TEN =="0" || $SNO =="0")
{
if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $admin =="0" && $varN2==$varN3)
{
	$varN3 = password_hash($varN3, PASSWORD_DEFAULT);
	$sql = "insert into Students values('$varN1','$varN4','$varN5','$varN6','$varN3',0)";}}
/*
Students` (`student_id`,`first_name`,`last_name`,`email`,`password`,`admin`) VALUES
   					   ('20101234'  ,'Brian'   , "O'Driscoll", 'Brian@cctstudent.ie','1111'    ,0),
	$varN1 = $_POST["login"];
		$varN2 = $_POST["pass1"];
        $varN3 = $_POST["pass2"];
        $varN4 = $_POST["first_name"];	
        $varN5 = $_POST["last_name"];
        $varN6 = $_POST["email"];	
		*/
//


if($RBY !="0" && $TBT !="0" && $FUT !="0" && $TEN !="0" && $SNO !="0")
{echo '<font color="#E2000D" style="font-size: 12pt">
&nbsp;&nbsp;  You can choose faleristics not less then one, please, try again!!! </font>';}
elseif($varN2!=$varN3)
{
echo '<font color="#E2000D" style="font-size: 12pt">
&nbsp;&nbsp;  The password you typed don not match, please, try again!!! </font>';
}
		elseif($dlin1==0 || $dlin2==0 || $dlin3==0 || $dlin4==0 || $dlin5==0 || $dlin6==0 || $varN2!=$varN3)
		{echo '<font color="#E2000D" style="font-size: 12pt">
		&nbsp;&nbsp;  Please, try fill our Register form again!!! </font>';} 
		//////
else
{
if($RBY =="0" || $TBT =="0" || $FUT =="0" || $TEN =="0" || $SNO =="0")
{
if($dlin1>0 && $dlin2>0 && $dlin3>0 && $dlin4>0 && $dlin5>0 && $dlin6>0 && $varN2==$varN3)
{
$items = $dbConnection->prepare("$sql");
$items->execute();
}
}
if($RBY =="0" || $TBT =="0" || $FUT =="0" || $TEN =="0" || $SNO =="0" && $dt!=3)
{
if($RBY =="1")
{$sqlq1 = "insert into Members (student_id, sport_id) values('$varN1','RBY')";}
if($TBT =="1")
{$sqlq2 = "insert into Members (student_id, sport_id) values('$varN1','TBT')";}
if($FUT =="1")
{$sqlq3 = "insert into Members (student_id, sport_id) values('$varN1','FUT')";}
if($TEN =="1")
{$sqlq4 = "insert into Members (student_id, sport_id) values('$varN1','TEN')";}
if($SNO =="1")
{$sqlq5 = "insert into Members (student_id, sport_id) values('$varN1','SNO')";}
}
if($RBY =="1" && $dt!=3)
{
$items = $dbConnection->prepare("$sqlq1");
$items->execute();
}
if($TBT =="1" && $dt!=3)
{
$items = $dbConnection->prepare("$sqlq2");
$items->execute();
}
if($FUT =="1" && $dt!=3)
{
$items = $dbConnection->prepare("$sqlq3");
$items->execute();
}
if($TEN =="1" && $dt!=3)
{
$items = $dbConnection->prepare("$sqlq4");
$items->execute();
}
if($SNO =="1" && $dt!=3)
{
$items = $dbConnection->prepare("$sqlq5");
$items->execute();
}
//session
//echo  $row[0]." <br> "; 
 echo '<meta http-equiv="refresh" content="0; url=index.php">';
}
}
}
}//if ($_SERVER["REQUEST_METHOD"] == "POST")
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
			&nbsp;<font style="font-size: 12pt"> Thank you that you fill our Registration Form.</font>
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
	&nbsp;&nbsp; <marquee> faleristics4forever </marquee><br>
	&nbsp;&nbsp; 
						</div>
			<br><br>
			</body>
</html> 