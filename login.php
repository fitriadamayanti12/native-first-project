<html>
<head>
  <title>Login Form</title>
</head>
<body>
 
    <?php 
        if(isset($_GET["login_error"])){
            echo "<h2 style='color:red';>Username atau password salah</h2>";
        }
    ?>
	<body background="background1.gif">
    <form id="form1" name="form1" method="post"  action="proses_login.php">
  
    <table width="400" border="1" align="center" cellspacing="8" bgcolor="pink">
	<marquee behavior="alternate" width ="80%">
<p align="center">
<img src = "1.jpg"width="100">
<img src = "2.jpg"width="100">
<img src = "1.jpg"width="100">
<img src = "2.jpg"width="100">
</p>
</marquee>
      <tr>
        <td colspan="3" bgcolor="#33CCFF"><div align="center">Login</div></td>
      </tr>  
<tr>
	  <td width="100">Username</td>
        <td width="10"><div align="center">:</div></td>
        <td><p><input type="text" name="username" value="" placeholder="Username or Email"></p>
		</td></tr>
		<tr>
		<td width="100">Password</td>
        <td width="10"><div align="center">:</div></td>
       <td> <p><input type="password" name="password" value="" placeholder="Password"></p>
	   </td></tr>
	   <tr>
        <td colspan="4" bgcolor="#33CCFF"><div align="center">
          <input type="submit" value="Login" />          
        </div></td>
      </tr>
      </form>
	  </table>
	  </form>
    
  
</body>
</html> 
