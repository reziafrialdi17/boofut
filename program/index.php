<?php
session_start();
include "../koneksi.php";
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $pswrd = $_POST['pswrd'];

        $query = mysqli_query($conn, "SELECT * FROM lg WHERE username = '$username' AND pswrd = '$pswrd'");

        if(mysqli_num_rows($query) === 1) {

            $get = mysqli_fetch_array($query);
            $level = $get['id_level'];

            $_SESSION['username'] = $get['username'];
            $_SESSION['pswrd'] = $get['pswrd'];

            if($level == 1){
                $_SESSION['admin']=true;
                echo "
                <script>
                alert('Selamat datang Admin');
                document.location.href = 'admin.php';
                </script>
                ";

            }elseif($level == 2){
                $_SESSION['user']=true;
                echo "
                <script>
                alert('Selamat datang User');
                document.location.href = 'user.php';
                </script>
                ";

            }else{
                echo "
                <script>
                alert('Username atau Password yang anda inputkan salah');
                document.location.href = 'index.php';
                </script>
                ";
            }
        }
    }
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- API Google Font untuk Display (Righteous) -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Righteous&display=swap" rel="stylesheet">

    <!-- API Google Font untuk desc (Poppins - Regular)-->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins&display=swap" rel="stylesheet">

    <link rel="icon" type="image/png" href="../asset/Logo Boofut hijau.png">
    <title>Login Page</title>
    <link rel="stylesheet" type="text/css" href="login.css">
</head>

<body>
    
    <h1>Futsal<br>Boofut<h1>   
 
    <!-- main -->
    <div>
		<div class="container">
			<form action="" method="post" name="form" class="form" id="box" onsubmit="return checkStuff()">

				<h3>Sign In</h3>
				<h5>Sign in to your account</h5>

                <!--input username-->
				<input type="text" name="username" placeholder="Username" autocomplete="off" required>

                <!--input password-->
				<input type="password" name="pswrd" placeholder="Passsword" autocomplete="off" required>
				
				<input type="submit" name="login" value="Sign in" class="btn">
                
			</form>
		</div>
    </div>


</body>
</html>