<!doctype html>
<html lang="id">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Dashboard Pengajar - SIMPATI MERTI</title>

    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet" />

    <style>
      * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
        font-family: "Poppins", sans-serif;
      }

      body {
        background: #f5f5f5;
        display: flex;
      }

      /* SIDEBAR */

      .sidebar {
        width: 260px;
        min-height: 100vh;
        background: linear-gradient(180deg, #8b0000, #c1121f);
        color: white;
        padding: 25px;
      }

      .sidebar h2 {
        text-align: center;
        margin-bottom: 30px;
      }

      .sidebar a {
        display: block;
        text-decoration: none;
        color: white;
        padding: 12px 15px;
        margin-bottom: 10px;
        border-radius: 10px;
        transition: 0.3s;
      }

      .sidebar a:hover {
        background: rgba(255, 255, 255, 0.2);
      }

      /* KONTEN */

      .main {
        flex: 1;
        padding: 30px;
      }

      .header {
        background: white;
        padding: 20px;
        border-radius: 20px;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
        margin-bottom: 25px;
      }

      .header h1 {
        color: #8b0000;
      }

      .card-container {
        display: flex;
        justify-content: center;
      }

      .card {
        max-width: 700px;
        margin: auto;
        background: white;
        padding: 40px;
        border-radius: 25px;
        text-align: center;
        box-shadow: 0 5px 15px rgba(0, 0, 0, 0.1);
      }

      .card h3 {
        color: #8b0000;
        margin-bottom: 15px;
      }

      .deskripsi {
        font-size: 16px;
        color: #555;
        margin-bottom: 25px;
      }

      .menu-btn {
        padding: 12px 25px;
        border: none;
        border-radius: 10px;

        background: linear-gradient(90deg, #8b0000, #dc2626);

        color: white;
        font-size: 16px;
        cursor: pointer;

        transition: 0.3s;
      }

      .menu-btn:hover {
        transform: translateY(-2px);

        box-shadow: 0 8px 15px rgba(220, 38, 38, 0.3);
      }
    </style>
  </head>

  <body>
    <div class="sidebar">
      <div style="text-align: center; margin-bottom: 40px">
        <img src="logomerti.jpeg" alt="Logo" style="width: 120px; height: 120px; border-radius: 50%; border: 5px solid #ffd166" />

        <h2 style="margin-top: 15px">SIMPATI MERTI</h2>
      </div>

      <a href="#">🏠 Beranda</a>
      <a href="kelola_nilai.html">📝 Kelola Nilai Siswa</a>
      <a href="login.html">🚪 Logout</a>
    </div>

    <div class="main">
      <div class="header">
        <h1>Dashboard Pengajar</h1>

        <p>Selamat Datang di Sistem Informasi Penilaian Sanggar Merti Desa.</p>
      </div>

      <div class="card">
        <h3>Halo, Pengajar CANTIK👋</h3>

        <p class="deskripsi">Gunakan menu Kelola Nilai Siswa untuk menambah, mengubah, dan menghapus nilai siswa.</p>

        <button class="menu-btn" onclick="window.location.href = 'kelola-nilai.html'">Kelola Nilai Siswa</button>
      </div>
    </div>
  </body>
</html>
