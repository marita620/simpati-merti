<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>Nilai Saya - SIMPATI MERTI</title>

<link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">

<style>

/* =====================
   RESET
===================== */

*{
    margin:0;
    padding:0;
    box-sizing:border-box;
    font-family:'Poppins',sans-serif;
}

body{

    background:
    linear-gradient(
    135deg,
    #fff8f8,
    #fff5ee);

    min-height:100vh;
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

.main{
    margin-left:320px;
    padding:40px;
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


/* =====================
   HEADER
===================== */

.header{

    display:flex;

    justify-content:space-between;

    align-items:center;

    margin-bottom:30px;
}

.header h1{

    color:#8B0000;

    font-size:55px;
}

.back-btn{

    text-decoration:none;

    background:
    linear-gradient(
    135deg,
    #8B0000,
    #C1121F);

    color:white;

    padding:14px 30px;

    border-radius:50px;

    font-weight:600;
}

/* =====================
   CARD NILAI
===================== */

.nilai-header{

    background:
    linear-gradient(
    135deg,
    #8B0000,
    #C1121F);

    color:white;

    padding:40px;

    border-radius:35px;

    box-shadow:
    0 20px 40px rgba(139,0,0,.2);
}

.nilai-header h2{

    font-size:40px;

    margin-bottom:10px;
}

/* =====================
   STATISTIK
===================== */

.stats{

    display:grid;

    grid-template-columns:
    repeat(3,1fr);

    gap:20px;

    margin-top:30px;
}

.stat{

    padding:30px;

    border-radius:25px;

    text-align:center;

    box-shadow:
    0 10px 25px rgba(0,0,0,.08);
}

.stat:nth-child(1){

    background:
    linear-gradient(
    135deg,
    #fff5f5,
    #ffe4e4);

    border-top:5px solid #8B0000;
}

.stat:nth-child(2){

    background:
    linear-gradient(
    135deg,
    #fff8e8,
    #fff1c7);

    border-top:5px solid #FFD166;
}

.stat:nth-child(3){

    background:
    linear-gradient(
    135deg,
    #fff0f0,
    #ffdede);

    border-top:5px solid #C1121F;
}

.stat h3{

    margin-bottom:10px;
}

.stat span{

    font-size:45px;

    font-weight:bold;

    color:#8B0000;
}

/* =====================
   TABEL
===================== */

.table-card{

    margin-top:35px;

    background:white;

    border-radius:30px;

    padding:30px;

    box-shadow:
    0 15px 30px rgba(0,0,0,.08);
}

.table-card h2{

    color:#8B0000;

    margin-bottom:20px;
}

table{

    width:100%;

    border-collapse:collapse;
}

th{

    background:#8B0000;

    color:white;

    padding:15px;
}

td{

    padding:15px;

    text-align:center;

    border-bottom:
    1px solid #eee;
}

tr:hover{

    background:#fff8f2;
}

/* =====================
   STATUS
===================== */

.status-card{

    margin-top:30px;

    background:
    linear-gradient(
    135deg,
    #d4edda,
    #c3e6cb);

    padding:30px;

    border-radius:25px;

    text-align:center;

    color:#155724;
}

.status-card h2{

    margin-bottom:10px;
}

/* =====================
   RESPONSIVE
===================== */

@media(max-width:900px){

.stats{

    grid-template-columns:1fr;
}

.header{

    flex-direction:column;

    gap:20px;
}

.header h1{

    font-size:40px;
}

body{

    min-height:100vh;

    background:#ffffff;

    display:flex;
    justify-content:center;
    align-items:center;

    padding:20px;

    font-family:'Poppins',sans-serif;
}

@keyframes putar{

    from{
        transform:rotate(0deg);
    }

    to{
        transform:rotate(360deg);
    }

}

.logo img.active{

    animation:
    putar 2s linear infinite;

    transform:
    scale(1.1);

    box-shadow:
    0 0 30px white;
}

@media print{

.sidebar,
.menu,
button,
.logout,
.status-card{
    display:none !important;
}

body{
    background:white;
}

.main{
    margin:0;
    padding:0;
}

.nilai-header{
    box-shadow:none;
    border:1px solid #ccc;
    margin-bottom:20px;
}

.table-card{
    box-shadow:none;
    border:1px solid #ccc;
}

table{
    width:100%;
}

th{
    background:#ddd !important;
    color:black !important;
}


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
    <a href="profil.php">👤 Profil Saya</a>
    <a href="nilai.php" class="active">📊 Nilai Saya</a>
    <a href="logout.php" class="logout">🚪 Logout</a>
</div>

</div>

    <div class="main">

    <div id="printArea">

        <div class="nilai-header">

            <h2>Ahmad Agim</h2>

            <p>
                Berikut adalah hasil penilaian siswa
                pada Sanggar Merti Desa.
            </p>

        </div>

    <div style="margin-top:20px; margin-bottom:20px;">

    <button onclick="printNilai()"
    style="
    border:none;
    background:#8B0000;
    color:white;
    padding:14px 25px;
    border-radius:15px;
    cursor:pointer;
    font-weight:600;">
        🖨 Cetak Nilai
    </button>

</div>

    <div class="stats">

        <div class="stat">

            <h3>⭐ Rata-rata</h3>

            <span>87</span>

        </div>

        <div class="stat">

            <h3>📚 Total Mapel</h3>

            <span>5</span>

        </div>

    </div>

    <div class="table-card" id="printTable">

        <table>

    <tr>
        <th>No</th>
        <th>Mata Pelajaran</th>
        <th>Nilai</th>
        <th>Grade</th>
    </tr>

    <tr>
        <td>1</td>
        <td>Tari Tradisional</td>
        <td>90</td>
        <td>A</td>
    </tr>

    <tr>
        <td>2</td>
        <td>Karawitan</td>
        <td>85</td>
        <td>A</td>
    </tr>

    <tr>
        <td>3</td>
        <td>Seni Budaya</td>
        <td>88</td>
        <td>A</td>
    </tr>

    <tr>
        <td>4</td>
        <td>Bahasa Jawa</td>
        <td>86</td>
        <td>A</td>
    </tr>

    <tr>
        <td>5</td>
        <td>Praktik Pentas</td>
        <td>89</td>
        <td>A</td>
    </tr>

    <tr class="summary">
        <td colspan="2">
            <strong>Rata-rata Nilai</strong>
        </td>

        <td>
            <strong>87</strong>
        </td>

        <td>
            <strong>A</strong>
        </td>
    </tr>

</table>
    </div>

    <div class="status-card">

    <h2>✅ Status Penilaian</h2>

    <p>
        Selamat, nilai Anda berada di atas
        standar minimal yang ditentukan.
    </p>

</div>

</div>

<script>

function printNilai(){

    let isi =
    document.getElementById("printTable").innerHTML;

    let halaman =
    window.open("", "", "width=900,height=700");

    halaman.document.write(`
    <html>
    <head>

    <title>Daftar Nilai Siswa</title>

    <style>

    body{
        font-family:Arial,sans-serif;
        padding:30px;
    }

    h1{
        text-align:center;
        color:#8B0000;
        margin-bottom:25px;
    }

    table{
        width:100%;
        border-collapse:collapse;
    }

    th,td{
        border:1px solid #000;
        padding:10px;
        text-align:center;
    }

    th{
        background:#8B0000;
        color:white;
    }

    </style>

    </head>

    <body>

        <h1>DAFTAR NILAI </h1>

        ${isi}

    </body>

    </html>
    `);

    halaman.document.close();

    halaman.print();

}

</script>
</body>
</html>