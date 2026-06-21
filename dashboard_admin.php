<!DOCTYPE html>
<html lang="id">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<title>SIMPATI MERTI - Dashboard Admin (Tanpa Database)</title>

<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Great+Vibes&family=Playfair+Display:ital,wght@0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@400;500;600;700&display=swap" rel="stylesheet">

<style>
*{margin:0;padding:0;box-sizing:border-box;font-family:'Plus Jakarta Sans', -apple-system, BlinkMacSystemFont, sans-serif}
body{background:#f8fafc;color:#1e293b; min-height: 100vh; overflow-x: hidden; position: relative;}

body::before {
    content: ''; position: fixed; top: -10%; right: -10%; width: 500px; height: 500px;
    background: radial-gradient(circle, rgba(163,22,33,0.05) 0%, rgba(255,255,255,0) 70%); z-index: -1; pointer-events: none;
}
body::after {
    content: ''; position: fixed; bottom: -5%; left: 20%; width: 400px; height: 400px;
    background: radial-gradient(circle, rgba(255,209,102,0.1) 0%, rgba(255,255,255,0) 70%); z-index: -1; pointer-events: none;
}

.mobile-header {
    display: none; background: linear-gradient(135deg,#5c0000,#8a121a); color: #fff; padding: 15px 20px;
    align-items: center; justify-content: space-between; position: fixed; top: 0; left: 0; width: 100%; z-index: 1000; box-shadow: 0 4px 20px rgba(0,0,0,0.1);
}
.mobile-title { 
    font-family: 'Great Vibes', cursive; font-size: 32px; 
    background: linear-gradient(135deg, #FFF3CD 0%, #FFD166 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}
.menu-toggle { background: none; border: none; color: #fff; font-size: 24px; cursor: pointer; }

.sidebar{
    position:fixed; left:0; top:0; width:280px; height:100vh; background: linear-gradient(180deg, #3d0000 0%, #610005 100%);
    padding:30px 20px; overflow-y:auto; box-shadow: 5px 0 25px rgba(0,0,0,0.15); z-index: 999; transition: transform 0.3s ease;
}
.logo-container { text-align: center; margin-bottom: 30px; }
.logo-wrapper {
    width: 95px; height: 95px; border: 3px solid #FFD166; border-radius: 50%; margin: 0 auto 15px;
    background: #fff; display: flex; align-items: center; justify-content: center; overflow: hidden;
}
.logo-wrapper img { width: 100%; height: 100%; object-fit: cover; }
h2.logo-text {
    font-family: 'Great Vibes', cursive; font-size: 42px; text-align: center; line-height: 1.1; margin-top: 5px;
    background: linear-gradient(135deg, #FFF3CD 0%, #FFD166 40%, #E6A100 70%, #FFF3CD 100%); -webkit-background-clip: text; -webkit-text-fill-color: transparent;
}

.menu a{
    display: flex; align-items: center; gap: 12px; color:#f1f5f9; text-decoration:none; padding:14px 16px; border-radius:12px; margin:8px 0; transition: all 0.25s ease; font-size: 14px;
}
.menu a:hover { background: rgba(255, 255, 255, 0.08); color: #FFD166; transform: translateX(5px); }
.menu a.active{ background: #FFD166; color: #5c0000; font-weight: 700; box-shadow: 0 4px 15px rgba(255,209,102,0.35); }

.main{margin-left:280px; padding:40px; min-height: 100vh; transition: all 0.3s ease;}
.page{display:none; background:#ffffff; padding:40px; border-radius:24px; box-shadow:0 10px 30px rgba(0,0,0,0.02); border: 1px solid #e2e8f0;}
.page.active{display:block; animation: fadeInSlide 0.4s ease;}
@keyframes fadeInSlide { from { opacity: 0; transform: translateY(20px); } to { opacity: 1; transform: translateY(0); } }

h1 { font-family: 'Playfair Display', Georgia, serif; font-size: 34px; color: #0f172a; margin-bottom: 6px; font-weight: 700; }
.subtitle { color: #64748b; margin-bottom: 30px; font-size: 14px; }

.welcome-banner { 
    background: linear-gradient(135deg, #fffcf0 0%, #fef3c7 100%); padding: 35px; border-radius: 20px; margin-bottom: 35px; border-left: 6px solid #8a121a;
}
.welcome-banner h2 { font-family: 'Playfair Display', Georgia, serif; color: #5c0000; margin-bottom: 10px; font-size: 26px; }
.welcome-banner p { color: #475569; font-size: 15px; line-height: 1.6; }

.dashboard{display:grid; grid-template-columns: repeat(auto-fit, minmax(240px, 1fr)); gap: 25px; margin-bottom: 10px;}
.card{
    background: #ffffff; border: 1px solid #e2e8f0; padding: 25px; border-radius: 20px; display: flex; align-items: center; justify-content: space-between; cursor: pointer; transition: all 0.3s ease;
}
.card:hover { transform: translateY(-6px); box-shadow: 0 12px 25px rgba(138,18,26,0.08); }
.card .card-info h3 { color:#64748b; font-size: 13px; text-transform: uppercase; margin-bottom: 6px;}
.card .card-info h2 { color:#0f172a; font-size: 32px; font-weight: 700;}
.card-icon-wrapper { width: 55px; height: 55px; background: #f8fafc; border-radius: 14px; display: flex; align-items: center; justify-content: center; font-size: 26px; }

.action-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 30px; flex-wrap: wrap; gap: 15px; }
.btn{padding:10px 18px; border:none; border-radius:12px; cursor: pointer; font-weight: 600; font-size: 13px; display: inline-flex; align-items: center; gap: 8px; transition: opacity 0.2s;}
.btn:hover{ opacity: 0.9; }
.add{background:#059669; color:#fff;}
.edit{background:#f59e0b; color: #fff;}
.del{background:#dc2626; color:#fff;}

.table-container { width: 100%; overflow-x: auto; border-radius: 16px; border: 1px solid #e2e8f0; }
table{width:100%; border-collapse:collapse; background: #fff; text-align: left; min-width: 700px;} 
th{ background:#f8fafc; color:#475569; padding:18px 24px; font-weight: 600; font-size: 13px; text-transform: uppercase; border-bottom: 2px solid #e2e8f0; }
td{ padding:18px 24px; border-bottom: 1px solid #f1f5f9; color: #334155; font-size: 14px; }

.badge { padding: 6px 14px; border-radius: 99px; font-size: 12px; font-weight: 600; display: inline-block; }
.badge-active { background: #d1fae5; color: #065f46; }
.badge-inactive { background: #fee2e2; color: #991b1b; }

.sidebar-overlay { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(0,0,0,0.3); z-index: 998; backdrop-filter: blur(4px); }

.modal { display: none; position: fixed; top: 0; left: 0; width: 100%; height: 100%; background: rgba(15, 23, 42, 0.4); backdrop-filter: blur(4px); z-index: 2000; align-items: center; justify-content: center; }
.modal.open { display: flex; }
.modal-content { background: #fff; padding: 35px; border-radius: 20px; width: 100%; max-width: 500px; box-shadow: 0 20px 25px -5px rgba(0,0,0,0.1); }
.modal-title { font-family: 'Playfair Display', Georgia, serif; font-size: 24px; margin-bottom: 20px; font-weight: 700; }
.form-group { margin-bottom: 15px; }
.form-group label { display: block; font-size: 13px; font-weight: 600; color: #475569; margin-bottom: 5px; }
.form-control { width: 100%; height: 45px; border: 1px solid #cbd5e1; border-radius: 10px; padding: 0 16px; font-size: 14px; outline: none; }
.modal-footer { display: flex; justify-content: flex-end; gap: 12px; margin-top: 20px; }

@media (max-width: 992px) {
    .mobile-header { display: flex; }
    .sidebar { transform: translateX(-100%); } 
    .sidebar.open { transform: translateX(0); } .sidebar-overlay.open { display: block; }
    .main { margin-left: 0; padding: 100px 20px 30px 20px; } .page { padding: 30px 20px; border-radius: 20px; }
}
</style>
</head>
<body>

<div class="mobile-header" id="mobileHeader">
    <button class="menu-toggle" onclick="toggleSidebar()">☰</button>
    <span class="mobile-title">Simpati Merti</span>
    <div style="width:24px;"></div>
</div>

<div class="sidebar-overlay" id="overlay" onclick="closeSidebar()"></div>

<div class="sidebar" id="sidebar">
    <div class="logo-container">
        <div class="logo-wrapper">
            <img src="https://placehold.co/150x150/png?text=ADMIN" alt="Logo Admin">
        </div>
        <h2 class="logo-text">SIMPATI</h2>
    </div>

    <div class="menu">
        <a href="#" class="active" onclick="showPage('beranda',this)"><span>🏠</span> Beranda</a>
        <a href="#" onclick="showPage('pengguna',this)"><span>🔑</span> Kelola Data Pengguna</a>
    </div>
</div>

<div class="main" id="mainContent">

    <div id="beranda" class="page active">
        <h1>Beranda Dashboard Admin</h1>
        <p class="subtitle">Akses Kontrol Sistem Informasi Penilaian Sanggar Merti Desa.</p>
        
        <div class="welcome-banner">
            <h2>Selamat Datang di Portal Admin! 👋</h2>
            <p>Fungsi utama Anda di sistem ini murni melingkupi manajemen akun pengguna secara virtual (Tanpa Database Server).</p>
        </div>

        <div class="dashboard">
            <div class="card" onclick="document.querySelectorAll('.menu a')[1].click()">
                <div class="card-info">
                    <h3>Total Akun Terdaftar</h3>
                    <h2 id="total-akun-text">3 Pengguna</h2>
                </div>
                <div class="card-icon-wrapper">🔑</div>
            </div>
            <div class="card">
                <div class="card-info">
                    <h3>Status Koneksi Sistem</h3>
                    <h2 style="color:#f59e0b; font-size: 20px;">Mode Virtual (No DB)</h2>
                </div>
                <div class="card-icon-wrapper">⚡</div>
            </div>
        </div>
    </div>

    <div id="pengguna" class="page">
        <div class="action-header">
            <div>
                <h1>Kelola Data Pengguna</h1>
                <p class="subtitle">Proses Pengelolaan Data Record Akun (Tambah, Edit, Hapus Langsung di Tabel)</p>
            </div>
            <button class="btn add" onclick="openAddModal()">➕ Tambah Pengguna</button>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>ID Pengguna</th>
                        <th>Username</th>
                        <th>Password</th>
                        <th>Role / Hak Akses</th>
                        <th>Status Akun</th>
                        <th>Aksi Kontrol</th>
                    </tr>
                </thead>
                <tbody id="user-table-body">
                </tbody>
            </table>
        </div>
    </div>
</div>

<div class="modal" id="userModal">
    <div class="modal-content">
        <h2 class="modal-title" id="modalTitle">Form Pengguna</h2>
        <div class="form-group">
            <label>ID Pengguna</label>
            <input type="text" id="form-id" class="form-control" placeholder="Contoh: USR001">
        </div>
        <div class="form-group">
            <label>Username</label>
            <input type="text" id="form-username" class="form-control">
        </div>
        <div class="form-group">
            <label>Password</label>
            <input type="text" id="form-password" class="form-control" value="[Encrypted]">
        </div>
        <div class="form-group">
            <label>Role</label>
            <select id="form-role" class="form-control">
                <option value="Admin">Admin</option>
                <option value="Pengajar">Pengajar</option>
                <option value="Siswa">Siswa</option>
            </select>
        </div>
        <div class="form-group">
            <label>Status</label>
            <select id="form-status" class="form-control">
                <option value="Aktif">Aktif</option>
                <option value="Tidak Aktif">Tidak Aktif</option>
            </select>
        </div>
        <div class="modal-footer">
            <button type="button" class="btn" style="background:#cbd5e1; color:#000;" onclick="closeModal()">Batal</button>
            <button type="button" id="btn-save-modal" class="btn add" onclick="saveData()">💾 Simpan Data</button>
        </div>
    </div>
</div>

<script>
let dataPengguna = [
    { id: "USR001", username: "admin_merti", password: "$2y$10$92IX...", role: "Admin", status: "Aktif" },
    { id: "USR002", username: "kadek_mentor", password: "$2y$10$X3kL...", role: "Pengajar", status: "Tidak Aktif" },
    { id: "USR003", username: "budi_siswa", password: "$2y$10$Za8P...", role: "Siswa", status: "Aktif" }
];

let modeForm = "tambah";
let selectedIndex = null;

function showPage(id, el){
    document.querySelectorAll('.page').forEach(p=>p.classList.remove('active'));
    document.getElementById(id).classList.add('active');
    document.querySelectorAll('.menu a').forEach(a=>a.classList.remove('active'));
    el.classList.add('active');
    closeSidebar();
}

function toggleSidebar() {
    document.getElementById('sidebar').classList.toggle('open');
    document.getElementById('overlay').classList.toggle('open');
}

function closeSidebar() {
    document.getElementById('sidebar').classList.remove('open');
    document.getElementById('overlay').classList.remove('open');
}

function renderTable() {
    const tableBody = document.getElementById('user-table-body');
    tableBody.innerHTML = "";

    dataPengguna.forEach((user, index) => {
        const badgeClass = user.status === "Aktif" ? "badge-active" : "badge-inactive";
        
        const row = document.createElement('tr');
        row.innerHTML = `
            <td><strong>${user.id}</strong></td>
            <td>${user.username}</td>
            <td style="font-family: monospace; color: #64748b;">${user.password}</td>
            <td><span style="font-weight:600;">${user.role}</span></td>
            <td><span class="badge ${badgeClass}">${user.status}</span></td>
            <td>
                <div style="display:flex; gap:8px;">
                    <button class="btn edit" style="padding: 6px 12px;" onclick="openEditModal(${index})">✏️ Edit</button>
                    <button class="btn del" style="padding: 6px 12px;" onclick="hapusData(${index})">🗑️ Hapus</button>
                </div>
            </td>
        `;
        tableBody.appendChild(row);
    });

    document.getElementById('total-akun-text').innerText = `${dataPengguna.length} Pengguna`;
}

function openAddModal() {
    modeForm = "tambah";
    document.getElementById('modalTitle').innerText = " Tambah Pengguna Baru";
    document.getElementById('form-id').disabled = false;
    
    document.getElementById('form-id').value = "USR00" + (dataPengguna.length + 1);
    document.getElementById('form-username').value = "";
    document.getElementById('form-password').value = "password123";
    document.getElementById('form-role').value = "Siswa";
    document.getElementById('form-status').value = "Aktif";
    
    document.getElementById('userModal').classList.add('open');
}

function openEditModal(index) {
    modeForm = "edit";
    selectedIndex = index;
    const user = dataPengguna[index];

    document.getElementById('modalTitle').innerText = "✏️ Ubah Data Pengguna";
    
    document.getElementById('form-id').value = user.id;
    document.getElementById('form-id').disabled = true; 
    document.getElementById('form-username').value = user.username;
    document.getElementById('form-password').value = user.password;
    document.getElementById('form-role').value = user.role;
    document.getElementById('form-status').value = user.status;

    document.getElementById('userModal').classList.add('open');
}

function closeModal() {
    document.getElementById('userModal').classList.remove('open');
}

function saveData() {
    const id = document.getElementById('form-id').value.trim();
    const username = document.getElementById('form-username').value.trim();
    const password = document.getElementById('form-password').value.trim();
    const role = document.getElementById('form-role').value;
    const status = document.getElementById('form-status').value;

    if (!id || !username || !password) {
        alert("Mohon melengkapi seluruh field isian data form terlebih dahulu!");
        return;
    }

    if (modeForm === "tambah") {
        const isExist = dataPengguna.some(u => u.id.toLowerCase() === id.toLowerCase());
        if (isExist) {
            alert("Gagal menyimpan! ID Pengguna ini sudah terpakai.");
            return;
        }
        dataPengguna.push({ id, username, password, role, status });
    } else if (modeForm === "edit") {
        dataPengguna[selectedIndex] = { id, username, password, role, status };
    }

    closeModal();
    renderTable();
}

function hapusData(index) {
    if (confirm(`Apakah Anda yakin ingin menghapus pengguna "${dataPengguna[index].username}"?`)) {
        dataPengguna.splice(index, 1);
        renderTable();
    }
}

document.addEventListener("DOMContentLoaded", () => {
    renderTable();
});
</script>
</body>
</html>