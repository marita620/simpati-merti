<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Dashboard Siswa</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{
    background:
    radial-gradient(circle at top right,#ffd16640,transparent 30%),
    radial-gradient(circle at bottom left,#c1121f20,transparent 30%),
    #fff8f2;
}

/* SIDEBAR */

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

/* MAIN */

.main{
    margin-left:300px;
    padding:40px;
}

/* HEADER */

.header{
    display:flex;
    justify-content:space-between;
    align-items:center;
    margin-bottom:25px;
}

.header h1{
    color:#8B0000;
    font-size:45px;
}

.logout{
    text-decoration:none;
    background:#8B0000;
    color:white;
    padding:14px 25px;
    border-radius:50px;
}

/* HERO */

.hero{
    background:linear-gradient(135deg,#8B0000,#C1121F);
    border-radius:40px;
    padding:50px;
    color:white;
    display:flex;
    justify-content:space-between;
    align-items:center;
    box-shadow:0 20px 40px rgba(139,0,0,.25);
}

.hero h2{
    font-size:55px;
}

.hero p{
    margin-top:15px;
    font-size:18px;
}

.quote{
    margin-top:20px;
    background:rgba(255,255,255,.15);
    display:inline-block;
    padding:12px 20px;
    border-radius:30px;
}

.hero img{
    width:240px;
    height:240px;
    border-radius:50%;
    border:8px solid #FFD166;
    object-fit:cover;
}

/* BADGE */

.badges{
    display:flex;
    justify-content:center;
    gap:40px;
    margin-top:40px;
    flex-wrap:wrap;
}

.badge{
    width:180px;
    height:180px;
    background:white;
    border-radius:50%;
    display:flex;
    flex-direction:column;
    justify-content:center;
    align-items:center;
    box-shadow:0 15px 30px rgba(0,0,0,.08);
    transition:.3s;
}

.badge:hover{
    transform:translateY(-10px);
}

.badge h3{
    color:#666;
    font-size:18px;
}

.badge span{
    font-size:50px;
    color:#8B0000;
    font-weight:700;
}

/* MOTIVASI */

.motivasi{
    margin-top:40px;
    background:white;
    padding:35px;
    border-radius:30px;
    box-shadow:0 15px 30px rgba(0,0,0,.08);
}

.motivasi h2{
    color:#8B0000;
    margin-bottom:15px;
}

.motivasi p{
    color:#555;
    line-height:1.8;
}

/* PENGUMUMAN */

.pengumuman{
    margin-top:25px;
    background:#fff1e5;
    border-left:8px solid #FFD166;
    padding:30px;
    border-radius:25px;
}

.pengumuman h2{
    color:#8B0000;
    margin-bottom:10px;
}

/* ================= INFO BOX ================= */

.info-box{
    display:grid;
    grid-template-columns:repeat(3,1fr);
    gap:20px;
    margin-top:30px;
}

.card{
    padding:25px;
    border-radius:22px;
    box-shadow:0 10px 25px rgba(0,0,0,.05);
    transition:.3s;
}

.card:hover{
    transform:translateY(-5px);
}

/* Status */

.card:nth-child(1){
    background:#fffafa;
    border-top:5px solid #8B0000;
}

.card:nth-child(2){
    background:#fffdf6;
    border-top:5px solid #FFD166;
}

.card:nth-child(3){
    background:#fff7f7;
    border-top:5px solid #C1121F;
}
.card p{
    color:#777;
    font-size:14px;
    margin-bottom:8px;
}

.card h3{
    color:#8B0000;
    font-size:30px;
    font-weight:700;
}

/* RESPONSIVE */

@media(max-width:1000px){

.sidebar{
    position:relative;
    width:100%;
    height:auto;
}

.main{
    margin-left:0;
}

.hero{
    flex-direction:column;
    text-align:center;
    gap:25px;
}

.header{
    flex-direction:column;
    gap:15px;
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

}

</style>
</head>
<body>

<div class="sidebar">

    <div class="logo">
        <img src="FOTO-8.jpeg">
        <h2>SIMPATI MERTI</h2>
    </div>

    <div class="menu">
        <a href="#" class="active">🏠 Beranda</a>
        <a href="profil.php">👤 Profil Saya</a>
        <a href="nilai.php">📊 Nilai Saya</a>
         <a href="logout.php" class="logout">🚪 Logout</a>
    </div>

</div>

<div class="main">

    <div class="header">

    </div>

    <div class="hero">

        <div>

            <h2>Halo, A ............👋</h2>

            <p>
                Selamat datang di Sistem Informasi Penilaian
                Sanggar Merti Desa.
            </p>

            <div class="quote">
                ✨ Tari adalah bahasa jiwa yang tidak membutuhkan kata.
            </div>

        </div>

        <img src="FOTO-1.jpeg">

    </div>

        <div class="info-box">

        <div class="card">
            <p>Status Siswa</p>
            <h3>Aktif</h3>
        </div>

        <div class="card">
            <p>Total Mata Pelajaran</p>
            <h3>5 Mapel</h3>
    </div>

    <div class="card">
        <p>Semester</p>
        <h3>Genap</h3>
    </div>

</div>

    <div class="pengumuman">

        <h2>📢 Pengumuman</h2>

        <p>
            Ujian semester akan dilaksanakan tanggal 20 Juni 2026.
        </p>

    </div>

    <div class="motivasi">

        <h2>🌸 Motivasi Hari Ini</h2>

        <p>
            Jangan takut berjalan lambat. Takutlah jika hanya diam di tempat.
            Terus belajar, terus berkembang, dan terus berkarya.
        </p>

    </div>

</div>

</body>
</html>