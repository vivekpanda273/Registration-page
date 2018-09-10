<html>
 <head>
<title>REGISTRATION FORM</title>
</head>
<style type="text/css">
body{
	background-image: url("library4.jpg");
	background-size: cover;
}
</style>
<body>
<font color='white'>
<form method='post' action='register.php'>
  <table width='400' border='5' align='center'>
     <tr>
     <td colspan='5' align='center'><h1><font color='white'>Registration Form</h1></td></font>
     </tr>

 <tr>
     <td><font color='white'>First Name:</td></font>
   <td><input type='text' name='name' /></td>
 </tr>
<tr>
     <td><font color='white'>Last Name:</td></font>
   <td><input type='text' name='name' /></td>
 </tr>
 


  <tr>
     <td><font color='white'>username:</td></font>
 <td><input type='email' name='email' /></td>
</tr>

<tr>
     <td><font color='white'>user Password</td></font>
<td><input type='password' name='pass' /></td>
</tr>

     <td><font color='white'>Branch:</td></font>
 <td><input type='text' name='name' /><td>
</tr>

<tr>
<td>Securiyt Question:</td> 
<td><select Name="question">
						<option value="-1" selected>select..</option>
						<option value="1">What was your first teacher's name?</option>
						<option value="2">What was your first pet's name?</option>
						<option value="3">What was your first friend's name?</option>
						<option value="4">What is your favourite colour?</option>
				  </select><br></br></td></tr>

				
<tr><td>Answer:</td> <td><input type="text" name="answer" required="required" ><br></br></td></tr>

<tr>
<td>

<center>

  <input type="radio" name="catagory" value="Admin" checked> Admin<br>
  <input type="radio" name="catagory" value="Student"> Student<br>
  <input type="radio" name="catagory" value="Teacher"> Teacher<br>
  

</center>
</td>
</tr>
 <tr>    <td colspan='5' align='center'>
<input type='submit' name='submit' value='Sign Up'/></td>
</tr></table>
</form>
<center><b>Already registed</b>
<a href='login.php'><font color='red'><br>Login here</a></font>
</center>
</body>
</html>

<?php
 $con = mysqli_connect("localhost","root","","user");

if (mysqli_connect_errno())

{

echo "MySQLi Connection was not established: " . mysqli_connect_error();
}
 if(isset($_POST['submit']))
{
  $first_name=$_POST['name'];
  $last_name=$_POST['name'];
  $user_name=$_POST['email'];
  $user_pass=$_POST['pass'];
  $s_question=$_POST['question'];
  $ans=$_POST['answer'];
  
  $user_branch=$_POST['name'];
  
 if($first_name==''){
echo "<script>alert('Please enter your name!')</script>";
exit();}
 if($last_name==''){
 echo "<script>alert('Please enter your name!')</script>";
exit();}
 if($user_name==''){
echo "<script>alert('Please enter your email!')</script>";
exit();
 }
if($user_pass==''){
echo "<script>alert('Please enter your password!')</script>";
exit();
 }

if($user_branch==''){
echo "<script>alert('Please enter your branch!')</script>";
exit();
 }


 /* $check_email = "select * from entry where user_name = '$user_email' ";
  $run = mysql_query($check_email);
  if( mysql_num_rows($run) != False){
   echo "<script> alert('Email $user_email already exists in our database, please try another one!')</script>";
   exit();  
  }?*/

 $query = "insert into entry(first_name,last_name,user_name,user_pass,user_branch,security_question,answer) values ('$first_name','$last_name','$user_name','$user_pass','$user_branch',' $s_question','$ans')";
 if(mysqli_query($con,$query)){
     echo "<script> alert('registration successfull')</script>";
   echo"<script>window.open('login.php',_self)</script>";

 }

}
