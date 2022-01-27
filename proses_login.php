<?php

    $username=$_POST["username"];
    $password=$_POST["password"];
    
    if($username=="admin" AND $password=="admin")
    {
        echo "<script>
		alert('Welcome')
		document.location='index.php'
		</script>";
    }else{
	echo "<script>
		alert('Login Gagal')
		document.location='login.php'
		</script>";
     
    }
?>