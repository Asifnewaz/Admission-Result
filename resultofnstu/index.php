<html>
<head>
<title>Noakhali Science and Technology University Admission Test Result 2013-14</title>
<link rel="icon"
type="image/png"
href="icon.png">
<style type ="text/css">
h6{
margin:0;
padding:0;
}
</style>


<body>
<table width="580" border="1" align="center" cellpadding="2" bordercolor="#000000">
  <tr>
    <td><table width="580" border="0" align="center" cellpadding="0">
  <tr>
    <td>
<table width="580" border="0" cellspacing="0" cellpadding="0">
  <tr bgcolor="#66CC66">
    <td width="176"><a href="http://results.nstu.edu.bd"><img src="NSTU.gif" width="150" height="130" /></a></td>

    <td width="574">
<h3 >Noakhali Science and Technology University</h3></td>
  </tr>
  <tr bgcolor="#E9E9E9">
  	<td width="120" align="left">&nbsp;</td>
    <td width="574" align="right" height="30">
    <h4><p style=text-align:left> ADMISSION TEST RESULT 2013-14</h4></left></p></style><p></a>
  

    </td>
  </tr>
</table></td>
  </tr>
</table>



<body>

</body>
</html>

<table width="580" border="2" align="center" cellpadding="0" cellspacing="1">
  <tr>
<form name="form1" method="post" action="">
<table width="500" border="0" align="center" cellpadding="3" cellspacing="0">
  <tr>
    <td height="30" colspan="5" align="center" class="Red11Bold" > &nbsp; </td>

    </tr>
<tr>
<td  colspan="3"><strong>Enter your Roll no. </strong></td>
</tr>
<tr ><td colspan="3" ></td></tr>
<tr>
<td width="78"><strong>Roll No.</strong></td>
<td width="6">:</td>
<td width="294"><input name="myusername" type="text" id="myusername" value="" ></td>
</tr>

<tr>
<td>&nbsp;</td>
<td>&nbsp;</td>
<td><input type="submit" name="Submit" value="OK"></td></tr>
<?php

$host="localhost"; // Host name
$username="nstu_results"; // Mysql username
$password="321478965"; // Mysql password
$db_name="nstu_results"; // Database name
$table_name="sheet1";
// Connect to server and select database.
mysql_connect("$host", "$username", "$password")or die("cannot connect");
mysql_select_db("$db_name")or die("cannot select DB");
$myusername = "";
$mypassword = "";
$msg = "";	
if( isset($_REQUEST['Submit']) ){

// Define $myusername and $mypassword
$myusername=$_POST['myusername'];


$sql="SELECT * FROM $table_name  WHERE A='$myusername'";
$result=mysql_query($sql);

// Mysql_num_row is counting table row
$count=mysql_num_rows($result);


if($count==1 ||$count==2){
// Session $myusername, $mypassword and redirect to file "login_success.php"

 


	while($row = mysql_fetch_array($result))
  {
   echo "<tr>";
echo  "<h7><left>FF-Freedom Fighter Quota</left></h7>";
  echo"<br>";
   echo  "<h7><left>TR-Trivial Quota</left></h7>"; 
  echo  "<h4><center>Roll:	".$row['A']."</center></h4>";
   echo  "<h4><center>".$row['D']."</center></h4>";
echo  "<h4><center>Status:	".$row['C']."</center></h4>"  ;
  echo  "<h4><center>Position:	".$row['B']."</center></h4>" ;
  
  

  echo   "<h4><center>".'Thank You For Your Participation'. "</center></h4>" ;
  echo "<center>___________________________________________________________</center>";

  
  
echo "</tr>";
  
  }

}
// If result matched $myusername and $mypassword, table row must be 1 row


else if($myusername>= 10001 && $myusername<= 18580)
{
echo "<center >".'<strong><br/>A unit result has not published yet now.'."</strong></center>";
}

else if($myusername>= 50001 && $myusername<= 52700)
{
echo "<center >".'<strong><br/>C unit result has not published yet now.'."</strong></center>";
}

else if($myusername>= 30001 && $myusername<= 35800)
{
echo "<center >".'<strong><br/>B unit result has not published yet now.'."</strong></center>";
}
else if($myusername>= 80001 && $myusername<= 82796)
{
echo "<center >".'<strong><br/>D unit result has not published yet now.'."</strong></center>";
}
// Session $myusername, $mypassword and redirect to file "login_success.php"

else {
echo "<center ><strong>".'<br/>Sorry, You are not selected. Try For Next Time. Wish You All The Best.'."</strong></center>";
}

}
	
?>
  <tr>
  </html>

    <td height="40" colspan="5" align="center" valign="middle">&nbsp;</td>
    </tr>
</table>
</form>	</td>
  </tr>

   <tr>
    <td width="100" align="center">  <a href="#"><blink> <h3 align=center>Admission notice for selected Candidates</h3> </blink> </a>
 </td>
  </tr>
  </tr>
  <tr>
  
  <tr>
    <td width="100" align="center">  <h6><center><a href="#" >Download Group A Result (will be published soon)</center></a></h6>
<h6><center><a href="#" >Download Group B Result (will be published soon)</center></a></h6>
<h6><center><a href="#" >Download Group C Result (will be published soon)</center></a></h6>
<h6><center><a href="#" >Download Group D Result (will be published soon)</center></a></h6>
 </td>
  </tr>
  <tr>

 </td>
  </tr>
  <tr bgcolor="#000000">

    <td width="176" align="center" valign="middle" ><font color="white"><span class="black10">&copy; Noakhali Science and Technology University.All rights reserved. <br>Department of Computer Science and Telecommunication Engineering</font></span></td>
  </tr>
</table></td>
</table>
</body>
</html>


