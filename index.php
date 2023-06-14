<?php
session_start();

include "conn.php";

error_reporting(0);


if (isset($_POST['submit'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = "SELECT * FROM login WHERE username='$username' AND password='$password'";
    $result = mysqli_query($koneksi, $query);
    if ($result->num_rows > 0) {
        $row = mysqli_fetch_assoc($result);
        if($row['level'] == 'user'){
            #code
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
            header('location: welcome.php');
        }elseif($row['level'] == 'admin'){
            #code
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
            header('location: welcome.php');
        }elseif($row['level'] == 'superadmin'){
            #code
            $_SESSION['username'] = $row['username'];
            $_SESSION['nama'] = $row['nama'];
            $_SESSION['level'] = $row['level'];
            header('location: welcome.php');
        }  else {
             echo "<script>alert('username atau password salah, silahkan isi ulang')</script>";
        }
    }else{
        echo "<script>alert('username atau password salah, silahkan isi ulang')</script>";
    }
}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form</title>
    <style>
        body{
            font family: sans-serif;
            background-image: url('img/wal.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        .kotak_login{
            width: 350px;
            left: 230px;
            background: #1E90FF;
            margin: 80px auto;
            padding: 30px 20px;
            border-radius: 20px;
            background: transparent;
            position: absolute;
        }
        .judul {
            text-align: center;
            text-transform: uppercase;
            font-weight: bold;
            font-size: 18pt;
            color: white;
        }
        .input_form{
            box-sizing: border-box;
            color: white;
            width: 100%;
            padding: 10px;
            font-size: 11px;
            margin-bottom: 17px;
            border-radius: 5px;
            background: transparent;
        }
        .tombol_login{
            background: white;
            color: white;
            font-size: 11pt;
            width: 100%;
            border: none;
            border-radius: 5px;
            padding: 10px 20px;
            background: transparent;
        }
        .link{
            color: #778899;
            text-decoration: none;
            font-size: 11pt;
        }
        .teks{
            text-align: center;
        }
    </style>
</head>

<body>
    <div>
        <h4 style="color: red;"><?= $_SESSION['error'] ?></h4>
    </div>
    <div class="kotak_login">
        <p class="judul">LOGIN
        <form action="" method="post">
    

        <input class="input_form" type="text" placeholder="Username" name="username" required>
        <br><br>
        <input class="input_form" type="password" placeholder="Password" name="password" required>
        <br><br>
        <button class="tombol_login" name="submit" class="btn">Login</button>

    </form>
        </p>
    </div>     
    
    
</body>
</html>