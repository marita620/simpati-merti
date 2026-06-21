<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Profil Saya | SIMPATI MERTI</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&family=Cormorant+Garamond:wght@700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:#f7f8fc;
    display:flex;
}

/* ================= SIDEBAR ================= */

.sidebar{
    position:fixed;
    width:280px;
    height:100vh;
    background:linear-gradient(180deg,#8B0000,#C1121F);
    padding:30px;
    color:white;
}

.logo{
    text-align:center;
    margin-bottom:50px;
}

.logo img{
    width:120px;
    height:120px;
    border-radius:50%;
    border:5px solid #FFD166;
    object-fit:cover;
}

.logo h2{
    margin-top:15px;
    color:#FFD166;
}

.menu a{
    display:block;
    text-decoration:none;
    color:white;
    padding:16px 20px;
    margin-bottom:15px;
    border-radius:18px;
    transition:.3s;
}

.menu a:hover{
    background:rgba(255,255,255,.15);
    transform:translateX(8px);
}

.active{
    background:#FFD166;
    color:#8B0000 !important;
    font-weight:600;
}


/* ===bentuk di dalam profilnya bisa sejajar sama sidebar ================= */

.content{
    margin-left:260px;
    width:100%;
    padding:30px;
}

/* === buat di judul profil saya  ================= */

.hero{
    height:230px;

    background:
    linear-gradient(
    135deg,
    #8b0000,
    #c70018);

    border-radius:30px;

    position:relative;

    overflow:hidden;

    padding:40px;
}

.hero::before{
    content:'';

    position:absolute;

    width:260px;
    height:260px;

    border-radius:50%;

    background:
    rgba(255,255,255,.08);

    top:-70px;
    right:-70px;
}

.hero h1{
    color:white;
    font-size:52px;
}

.hero p{
    color:rgba(255,255,255,.85);
    margin-top:10px;
}

/* ================= PROFILE ================= */

.profile-card{

    margin-top:-50px;

    background:white;

    border-radius:30px;

    box-shadow:
    0 20px 40px rgba(0,0,0,.08);

    padding:35px;

    position:relative;
}

.profile-top{
    display:grid;
    grid-template-columns:320px 1fr;
    gap:35px;
    align-items:start;
}

/* FOTO */

.profile-left{

    background:#fafafa;

    border-radius:25px;

    padding:30px 20px;

    text-align:center;

    border:1px solid #eeeeee;

    height:100%;
}

.profile-left img{

    width:180px;
    height:180px;

    object-fit:cover;

    border-radius:50%;

    border:6px solid white;

    box-shadow:
    0 10px 25px rgba(0,0,0,.15);
}

.profile-left h2{

    margin-top:18px;

    font-size:38px;

    line-height:1;

    color:#8b0000;

    font-family:
    'Cormorant Garamond',
    serif;
}

.status{

    display:inline-block;

    margin-top:15px;

    padding:10px 22px;

    border-radius:50px;

    background:#d4edda;

    color:#155724;

    font-weight:600;
}

/* DATA */

.profile-right{

    background:white;

    border-radius:25px;
}

.profile-right h3{
    color:#8b0000;
    margin-bottom:20px;
}

.data-grid{

    display:grid;

    grid-template-columns:
    repeat(2,1fr);

    gap:18px;
}

.item{

    background:white;

    border:1px solid #eee;

    border-left:5px solid #FFD166;

    border-radius:18px;

    padding:20px;
}

.item label{

    display:block;

    font-size:13px;

    color:#888;

    margin-bottom:6px;
}

.item span{

    font-size:18px;

    font-weight:600;
}

.full{
    grid-column:1/3;
}

/* ================= STATISTIK ================= */

.stats{

    margin-top:30px;

    display:grid;

    grid-template-columns:
    repeat(3,1fr);

    gap:20px;
}

.stat{

    text-align:center;

    padding:30px;

    border-radius:25px;

    box-shadow:
    0 10px 25px rgba(0,0,0,.06);
}

.stat:nth-child(1){
    background:
    linear-gradient(
    135deg,
    #fff5cf,
    #ffe49c);
}

.stat:nth-child(2){
    background:
    linear-gradient(
    135deg,
    #fff5f5,
    #ffe4e4);
}

.stat:nth-child(3){
    background:
    linear-gradient(
    135deg,
    #eef6ff,
    #d7eaff);
}

.stat h4{
    color:#666;
    margin-bottom:10px;
}

.stat span{
    font-size:50px;
    font-weight:bold;
    color:#8b0000;
}

/* ================= INFO ================= */

.info{

    margin-top:30px;

    background:
    linear-gradient(
    135deg,
    #8b0000,
    #c70018);

    color:white;

    padding:30px;

    border-radius:25px;
}

.info h2{
    margin-bottom:15px;
}

.info p{
    line-height:1.8;
}

/* ================= RESPONSIVE ================= */

@media(max-width:1000px){

.profile-top{
    flex-direction:column;
}

.profile-left{
    width:100%;
}


.data-grid{
    grid-template-columns:1fr;
}

.full{
    grid-column:auto;
}

.stats{
    grid-template-columns:1fr;
}

.kelas-siswa{

    margin-top:12px;

    color:#777;

    font-size:14px;
}

}

</style>
</head>
<body>

<!-- SIDEBAR -->

<div class="sidebar">

    <div class="logo">
        <img src="FOTO-8.jpeg">
        <h2>SIMPATI MERTI</h2>
    </div>

    <div class="menu">
        <a href="dashboard_siswa.php">🏠 Beranda</a>
        <a href="#" class="active">👤 Profil Saya</a>
        <a href="nilai.php">📊 Nilai Saya</a>
         <a href="logout.php" class="logout">🚪 Logout</a>
    </div>

</div>

<!-- CONTENT -->

<div class="content">

    <div class="hero">
        <h1>Profil Saya</h1>
        <p>
            Informasi data siswa Sanggar Merti Desa
        </p>
    </div>

    <div class="profile-card">

        <div class="profile-top">

            <div class="profile-left">

                <img src="FOTO-1.jpeg">

                <h2>Imania Haque</h2>

                <div class="status">
                    Siswa Aktif
                </div>

            </div>

            <div class="profile-right">

                <h3>Data Siswa</h3>

                <div class="data-grid">

                    <div class="item">
                        <label>ID Siswa</label>
                        <span>SIS001</span>
                    </div>

                    <div class="item">
                        <label>Kelas</label>
                        <span>Tari A</span>
                    </div>

                    <div class="item">
                        <label>Jenis Kelamin</label>
                        <span>Perempuan</span>
                    </div>

                    <div class="item">
                        <label>Tanggal Lahir</label>
                        <span>10 Januari 2012</span>
                    </div>

                    <div class="item">
                        <label>No HP</label>
                        <span>08123456789</span>
                    </div>

                    <div class="item">
                        <label>Username</label>
                        <span>agim123</span>
                    </div>

                    <div class="item full">
                        <label>Alamat</label>
                        <span>Bantul, Yogyakarta</span>
                    </div>

                </div>

            </div>

    </div>

    <div class="info">

        <h2>🎭 Tentang Sanggar Merti Desa</h2>

        <p>
            Sanggar Merti Desa merupakan wadah pembelajaran dan
            pengembangan seni budaya yang bertujuan melestarikan
            budaya daerah melalui kegiatan pelatihan, evaluasi,
            dan penilaian siswa secara berkala.
        </p>

        <p class="kelas-siswa">

            Tari Tradisional A
        </p>

    </div>

</div>

</body>
</html>