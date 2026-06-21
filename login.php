<?php

session_start();
include "koneksi.php";

$error = "";

if(isset($_POST['login'])){

    $userid = $_POST['userid'];
    $password = $_POST['password'];

    $query = mysqli_query($conn,
    "SELECT * FROM users
     WHERE username='$userid'");

    if(mysqli_num_rows($query) > 0){

        $data = mysqli_fetch_assoc($query);

        if($password == $data['password']){

            $_SESSION['username'] = $data['username'];
            $_SESSION['role'] = $data['role'];

            if($data['role'] == 'Admin'){
                header("Location: dashboard_admin.php");
            }

            elseif($data['role'] == 'Pengajar'){
                header("Location: dashboard_pengajar.php");
            }

            else{
                header("Location: dashboard_siswa.php");
            }

            exit;

        }else{
            $error = "Password salah!";
        }

    }else{
        $error = "Username tidak ditemukan!";
    }
}
?>
<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>SIMPATI MERTI</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">
<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    min-height:100vh;
    display:flex;
    justify-content:center;
    align-items:center;
    background:
    linear-gradient(
        135deg,
        #fff8f8,
        #f7f7f7
    );
    overflow:hidden;
    position:relative;
}

/* Background Ornamen */

body::before{
    content:'';
    position:absolute;
    width:500px;
    height:500px;
    background:rgba(163,0,0,.08);
    border-radius:50%;
    top:-150px;
    left:-150px;
}

body::after{
    content:'';
    position:absolute;
    width:450px;
    height:450px;
    background:rgba(163,0,0,.08);
    border-radius:50%;
    bottom:-150px;
    right:-150px;
}

.container{
    width:1200px;
    max-width:95%;
    display:flex;
    border-radius:35px;
    overflow:hidden;
    background:white;
    box-shadow:
    0 25px 60px rgba(0,0,0,.08);
}

/* KIRI */

.left{
    flex:1;
    background:
    linear-gradient(
        135deg,
        #8b0000,
        #c70018
    );
    color:white;
    padding:70px;
    position:relative;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
}

.left::before{
    content:'';
    position:absolute;
    width:300px;
    height:300px;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    top:-100px;
    left:-100px;
}

.left::after{
    content:'';
    position:absolute;
    width:250px;
    height:250px;
    border-radius:50%;
    background:rgba(255,255,255,.08);
    bottom:-80px;
    right:-80px;
}

/* BAGIAN UKURAN GAMBAR LOGO */
.logo{
    width:180px;
    height:180px;
    border-radius:50%;
    overflow:hidden;
}

/* BAGIAN GAMBAR LOGO */
.logo img{
    width:100%;
    height:100%;
    object-fit:cover;
}

.title{
    z-index:2;
    text-align:center;
}

/* BAGIAN JUDUL */
.title h1{
    font-family:'Cormorant Garamond', serif;
    font-size:75px;
    margin-bottom:15px;
}

/* BAGIAN SIMPATI MERTI */
.title h2{
    color:#ffd166;
    letter-spacing:7px;
    margin-bottom:30px;
}

/* BAGIAN DESKRIPSI */
.title p{
    font-size:18px;
    line-height:39px;
    margin-height20px;
    margin-bottom:23px;
    font-familiy:'Poppins',sans-serif;
    font-weight:500;
}

/* KANAN */

.right{
    flex:1;
    display:flex;
    justify-content:center;
    align-items:center;
    padding:60px;
}

.login-box{
    width:100%;
    max-width:430px;
}

.login-box h1{
    text-align:center;
    color:#9b0000;
    font-size:55px;
    margin-bottom:10px;
}

.login-box p{
    text-align:center;
    color:#777;
    margin-bottom:40px;
}

.form-group{
    margin-bottom:22px;
}

.form-group label{
    display:block;
    margin-bottom:8px;
    font-weight:600;
}

.form-control{
    width:100%;
    height:55px;
    border:1px solid #ddd;
    border-radius:15px;
    padding:0 20px;
    outline:none;
    transition:.3s;
}

.form-control:focus{
    border-color:#c70018;
    box-shadow:0 0 10px rgba(199,0,24,.15);
}

.btn-login{
    width:100%;
    height:58px;
    border:none;
    border-radius:15px;
    margin-top:15px;
    cursor:pointer;
    color:white;
    font-size:18px;
    font-weight:600;
    background:
    linear-gradient(
        135deg,
        #8b0000,
        #e41e26
    );
    transition:.3s;
}

.btn-login:hover{
    transform:translateY(-3px);
    box-shadow:
    0 10px 25px rgba(199,0,24,.3);
}

.footer{
    text-align:center;
    margin-top:25px;
    color:#888;
    font-size:14px;
}

@media(max-width:900px){

.container{
    flex-direction:column;
}

.left{
    padding:50px 30px;
}

.title h1{
    font-size:40px;
}

.logo{
    width:140px;
    height:140px;
}

.login-box h1{
    font-size:40px;
}

}

</style>
</head>
<body>

<div class="container">

    <div class="left">

        <div class="title">
            <h1>Sugeng Rawuh</h1>
            <h2>~~SIMPATI MERTI~~</h2>

            <p>
                Sistem Informasi Pengelolaan Penilaian<br>
                Sanggar Merti Desa
            </p>
        </div>
        
        <div class="logo">
            <!-- GANTI DENGAN LOGO ASLI -->
            <img src="FOTO-8.jpeg" alt="Logo">
        </div>


    </div>

    <div class="right">

        <div class="login-box">

            <h1>LOGIN</h1>

            <p>
                Masukkan identitas Anda untuk melanjutkan
            </p>

            <form method="post">

                <div class="form-group">
                    <label>Pengguna</label>
                    <select name="pengguna" class="form-control">
                        <option>Pilih Pengguna</option>
                        <option>Admin</option>
                        <option>Pengajar</option>
                        <option>Siswa</option>
                    </select>
                </div>

                <div class="form-group">
                    <label>ID</label>
                   <input type="text"
                    name="userid"
                    class="form-control"
                placeholder="Masukkan ID Anda">
                </div>

                <div class="form-group">
                    <label>Password</label>
                    <input type="password"
                    name="password"
                    class="form-control"
                    placeholder="Masukkan Password Anda">
                </div>

                <button type="submit" name="login" class="btn-login">
                    Login
                </button>

            </form>

            <div class="footer">
                © 2026 SIMPATI MERTI
            </div>

        </div>

    </div>

</div>

</body>
</html>