<?php 
session_start();
include "koneksi.php"
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>

    <?php 
        if(isset($_POST['username'])) {
            $username = $_POST['username'];
            $password = $_POST['password'];

            $query = mysqli_query($koneksi, "SELECT*FROM user2 where username='$username' and password='$password'");

            if(mysqli_num_rows($query) > 0){
                $data = mysqli_fetch_array($query);
                $_SESSION['user'] = $data;
                echo '<script>alert("selamat datang, '.$data['nama'].'");
                    location.href="index.php";</script>';
            }else{
                echo '<script>alert("Username/Password tidak sesuai.");</script>';
            }
        }
    ?>

<form method="post">
        <table align="center">
            <tr>
                <td colspan="2" align="center">
                    <h3>Login User</h3>
                </td>
            </tr>
            <tr>
                <td>Nim</td>
                <td><input type="text" name="username"></td>
            </tr>
            <tr>
                <td>Password</td>
                <td><input type="password" name="password"></td>
            </tr>
            <tr>
                <tr>
                    <td></td>
                    <td>
                        <button type="submit">Login</button>
                        <!-- <a href="daftar.php">Daftar</a> -->
                    </td>
                </tr>
            </tr>
        </table>
    </form>
</body>
</html>

