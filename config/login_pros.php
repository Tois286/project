<?php 
    include 'koneksi.php';

    $username=$_POST['username'];
    $password=$_POST['password'];
    session_start();
    $sql_query="SELECT * FROM config WHERE username='$username'AND password='$password'";

    $result=mysqli_query($koneksi,$sql_query);
    if(mysqli_num_rows($result)>0){
        $row=mysqli_fetch_assoc($result);
        $_SESSION['id']=$row['id'];
        $_SESSION['username']=$row['username'];
        $_SESSION['password']=$row['password'];
        echo "<script>alert('anda berhasil masuk')</script>";
        echo "<meta http-equiv='refresh' content='0,URL=../view/dasboard_admin.php'>";
    }else{
        echo "<script>alert('id password anda salah')</script>";
        echo "<meta http-equiv='refresh' content='0,URL=../login.php'>";
    }
?>