<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> Login SITIRTA</title>
    <link rel="stylesheet" type="text/css" href="css/stlyelogin.css">
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Crete+Round&display=swap" rel="stylesheet">
</head>
<body id="bg-login">
    <div class="box-login">
    <h2>Login</h2>
    <td align="center">
        <center><img src='logo.png' width="80" height="80"/></center>
</td> 
    <form action="" method="POST">
        <input type="text" name="user" placeholder="Username" class="input-control">
        <input type="password" name="pass" placeholder="Password" class="input-control">
        <input type="submit" name="submit" value="Login" class="btn">
    </form>
    <?php
      if(isset($_POST['submit'])){
        session_start();
        include 'koneksi.php';
        
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        $cek = mysqli_query($koneksi, "SELECT * FROM user WHERE username = '".$user."' AND password = '".MD5($pass)."'");
        if (mysqli_num_rows($cek) >0){
            $d = mysqli_fetch_object($cek);
            $_SESSION['status_login'] = true;
            $_SESSION['a_global'] = $d;
            $_SESSION['id'] = $d->id;
            echo'<script>window.location="index.php"</script>';
        }else{
            echo '<script>alert("Username atau Password Anda Salah!")</script>';
      }
    }
    ?>
    </div>
</body>
</html>