<?PHP
	// Database Connection code
	$host = 'localhost';
	$username = 'id11387127_projectpsit2019';
	$password = 'Imnayeon1995';
	$databasename = 'id11387127_psit';
    $con = mysqli_connect($host,$username,$password,$databasename);
    if(isset($_POST['save'])) {
    
    // GET information from register.html
    $userid = $_POST['userid'];
    $Name = $_POST['Name'];
    $Surname = $_POST['Surname'];
	$email = $_POST['email'];
    $gender = $_POST['gender'];
    $userwname = $_POST['userwname'];
	$pass1 = $_POST['renterPass'];
	$pass2 = $_POST['rconfirmPass'];
	$temp = explode('.', $_FILES('filupload')['name']);
	$new =  round(microtime(true)). '.'. end($temp);
    }
	if(!$con)
	{
		die("Error : ".mysqli_connect_error());
	}
	if(move_uploaded_file($_FILES['filupload']['tmp_name'], 'uploads/'.$new));{
		if($pass1 == $pass2)
		{
		$sql = "INSERT INTO `register`(`userid`, `Name`, `Surname`, `email`, `userwname`, `pass`, `gender`, `picture`)
				 VALUES('$userid', '$Name', '$Surname', '$email', '$userwname', '$pass1', '$gender', '$new);";
		if(mysqli_query($con,$sql))
		{
			echo "<script>
            alert('Successful');
            window.location.href='login.html';
            </script>";
		}
		else
		{
			echo "<script>
            alert('ERROR');
            window.location.href='register.html';
            </script>";
		}
	}else
	{
        // if  comfirm password has not the same password with password
        echo "<script>
    alert('Wrong password');
    window.location.href='register.html';
    </script>";
	}
	}
	// close connection
	mysqli_close($con);
?>
