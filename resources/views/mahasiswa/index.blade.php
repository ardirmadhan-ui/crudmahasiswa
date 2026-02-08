<!DOCTYPE html>
<html>
<head>
    <title>Data Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --accent: #4cc9f0;
            --success: #4ade80;
            --danger: #f43f5e;
            --warning: #f59e0b;
            --light: #f8fafc;
            --dark: #1e293b;
            --gray: #64748b;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Poppins', sans-serif;
        }
        
        body {
            background: linear-gradient(135deg, #f5f7fa 0%, #c3cfe2 100%);
            color: var(--dark);
            min-height: 100vh;
            padding: 20px;
            animation: gradientBG 15s ease infinite;
            background-size: 400% 400%;
        }
        
        @keyframes gradientBG {
            0% { background-position: 0% 50%; }
            50% { background-position: 100% 50%; }
            100% { background-position: 0% 50%; }
        }
        
        .container {
            max-width: 1400px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 30px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
            animation: fadeIn 0.8s ease-out;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        header {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 40px;
            padding-bottom: 25px;
            border-bottom: 2px solid rgba(67, 97, 238, 0.1);
            position: relative;
        }
        
        header::after {
            content: '';
            position: absolute;
            bottom: -2px;
            left: 0;
            width: 150px;
            height: 3px;
            background: linear-gradient(to right, var(--primary), var(--accent));
            border-radius: 3px;
        }
        
        .title-section {
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .title-icon {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 16px rgba(67, 97, 238, 0.3);
            animation: pulse 2s infinite;
        }
        
        @keyframes pulse {
            0% { transform: scale(1); }
            50% { transform: scale(1.05); }
            100% { transform: scale(1); }
        }
        
        .title-icon i {
            font-size: 24px;
            color: white;
        }
        
        h2 {
            color: var(--dark);
            font-size: 32px;
            font-weight: 700;
            background: linear-gradient(to right, var(--primary), var(--secondary));
            -webkit-background-clip: text;
            background-clip: text;
            color: transparent;
            line-height: 1.2;
        }
        
        .subtitle {
            color: var(--gray);
            font-size: 16px;
            margin-top: 5px;
            font-weight: 400;
        }
        
        .btn-tambah {
            display: flex;
            align-items: center;
            gap: 10px;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            text-decoration: none;
            padding: 14px 28px;
            border-radius: 12px;
            font-weight: 600;
            font-size: 16px;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
            position: relative;
            overflow: hidden;
            z-index: 1;
        }
        
        .btn-tambah::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(135deg, var(--accent), var(--primary));
            transition: all 0.4s ease;
            z-index: -1;
        }
        
        .btn-tambah:hover::before {
            left: 0;
        }
        
        .btn-tambah:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(67, 97, 238, 0.4);
        }
        
        .btn-tambah i {
            font-size: 18px;
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            background: white;
            border-radius: 15px;
            padding: 25px;
            display: flex;
            align-items: center;
            gap: 20px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
            border-left: 5px solid var(--primary);
            animation: slideIn 0.6s ease-out;
            animation-fill-mode: both;
        }
        
        .stat-card:nth-child(2) {
            border-left-color: var(--accent);
            animation-delay: 0.1s;
        }
        
        .stat-card:nth-child(3) {
            border-left-color: var(--success);
            animation-delay: 0.2s;
        }
        
        .stat-card:nth-child(4) {
            border-left-color: var(--warning);
            animation-delay: 0.3s;
        }
        
        @keyframes slideIn {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        .stat-card:hover {
            transform: translateY(-8px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stat-icon {
            width: 60px;
            height: 60px;
            border-radius: 12px;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 24px;
            color: white;
        }
        
        .stat-card:nth-child(1) .stat-icon {
            background: linear-gradient(135deg, var(--primary), var(--secondary));
        }
        
        .stat-card:nth-child(2) .stat-icon {
            background: linear-gradient(135deg, var(--accent), #3a86ff);
        }
        
        .stat-card:nth-child(3) .stat-icon {
            background: linear-gradient(135deg, var(--success), #16a34a);
        }
        
        .stat-card:nth-child(4) .stat-icon {
            background: linear-gradient(135deg, var(--warning), #d97706);
        }
        
        .stat-info h3 {
            font-size: 32px;
            font-weight: 700;
            color: var(--dark);
            line-height: 1;
        }
        
        .stat-info p {
            color: var(--gray);
            font-size: 14px;
            margin-top: 5px;
        }
        
        .table-container {
            background: white;
            border-radius: 20px;
            overflow: hidden;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
            animation: fadeInUp 0.8s ease-out;
        }
        
        @keyframes fadeInUp {
            from { opacity: 0; transform: translateY(30px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        table {
            width: 100%;
            border-collapse: collapse;
        }
        
        thead {
            background: linear-gradient(90deg, var(--primary), var(--secondary));
        }
        
        th {
            padding: 22px 20px;
            text-align: left;
            font-weight: 600;
            font-size: 16px;
            color: white;
            position: relative;
            user-select: none;
        }
        
        th:not(:last-child)::after {
            content: '';
            position: absolute;
            right: 0;
            top: 25%;
            height: 50%;
            width: 1px;
            background: rgba(255, 255, 255, 0.2);
        }
        
        th i {
            margin-left: 8px;
            opacity: 0.8;
        }
        
        tbody tr {
            border-bottom: 1px solid rgba(0, 0, 0, 0.05);
            transition: all 0.3s ease;
        }
        
        tbody tr:hover {
            background-color: rgba(67, 97, 238, 0.05);
            transform: scale(1.005);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        tbody tr:nth-child(even) {
            background-color: rgba(0, 0, 0, 0.01);
        }
        
        tbody tr:nth-child(even):hover {
            background-color: rgba(67, 97, 238, 0.05);
        }
        
        td {
            padding: 20px;
            color: var(--dark);
            font-weight: 500;
        }
        
        .nim-cell {
            font-weight: 700;
            color: var(--primary);
        }
        
        .aksi-container {
            display: flex;
            gap: 10px;
        }
        
        .btn-edit, .btn-hapus, .btn-view {
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
            padding: 10px 18px;
            border-radius: 8px;
            font-weight: 500;
            font-size: 14px;
            transition: all 0.3s ease;
            cursor: pointer;
            text-decoration: none;
            border: none;
            min-width: 90px;
        }
        
        .btn-edit {
            background-color: rgba(74, 222, 128, 0.1);
            color: var(--success);
            border: 1px solid rgba(74, 222, 128, 0.3);
        }
        
        .btn-edit:hover {
            background-color: var(--success);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(74, 222, 128, 0.3);
        }
        
        .btn-hapus {
            background-color: rgba(244, 63, 94, 0.1);
            color: var(--danger);
            border: 1px solid rgba(244, 63, 94, 0.3);
        }
        
        .btn-hapus:hover {
            background-color: var(--danger);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(244, 63, 94, 0.3);
        }
        
        .btn-view {
            background-color: rgba(67, 97, 238, 0.1);
            color: var(--primary);
            border: 1px solid rgba(67, 97, 238, 0.3);
        }
        
        .btn-view:hover {
            background-color: var(--primary);
            color: white;
            transform: translateY(-3px);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.3);
        }
        
        .empty-state {
            text-align: center;
            padding: 60px 20px;
            color: var(--gray);
        }
        
        .empty-icon {
            font-size: 70px;
            color: var(--gray);
            margin-bottom: 20px;
            opacity: 0.5;
        }
        
        .empty-state h3 {
            font-size: 24px;
            margin-bottom: 10px;
            color: var(--dark);
        }
        
        .footer {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            color: var(--gray);
            font-size: 14px;
        }
        
        .footer-links {
            display: flex;
            gap: 20px;
        }
        
        .footer-links a {
            color: var(--primary);
            text-decoration: none;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: var(--secondary);
            text-decoration: underline;
        }
        
        @media (max-width: 1024px) {
            .container {
                padding: 25px;
            }
            
            .stats-container {
                grid-template-columns: repeat(2, 1fr);
            }
        }
        
        @media (max-width: 768px) {
            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .btn-tambah {
                align-self: stretch;
                justify-content: center;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            th, td {
                padding: 15px 12px;
            }
            
            .aksi-container {
                flex-direction: column;
            }
            
            .btn-edit, .btn-hapus, .btn-view {
                justify-content: flex-start;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .container {
                padding: 20px;
                border-radius: 15px;
            }
            
            h2 {
                font-size: 26px;
            }
            
            .title-icon {
                width: 50px;
                height: 50px;
            }
            
            .stat-card {
                padding: 20px;
            }
            
            .footer {
                flex-direction: column;
                gap: 15px;
                text-align: center;
            }
            
            .footer-links {
                flex-wrap: wrap;
                justify-content: center;
            }
        }
        
        /* Animasi untuk baris tabel */
        @keyframes slideInRow {
            from { opacity: 0; transform: translateX(-20px); }
            to { opacity: 1; transform: translateX(0); }
        }
        
        tbody tr {
            animation: slideInRow 0.5s ease-out;
            animation-fill-mode: both;
        }
        
        tbody tr:nth-child(1) { animation-delay: 0.1s; }
        tbody tr:nth-child(2) { animation-delay: 0.2s; }
        tbody tr:nth-child(3) { animation-delay: 0.3s; }
        tbody tr:nth-child(4) { animation-delay: 0.4s; }
        tbody tr:nth-child(5) { animation-delay: 0.5s; }
        tbody tr:nth-child(6) { animation-delay: 0.6s; }
        tbody tr:nth-child(7) { animation-delay: 0.7s; }
        tbody tr:nth-child(8) { animation-delay: 0.8s; }
        tbody tr:nth-child(9) { animation-delay: 0.9s; }
        tbody tr:nth-child(10) { animation-delay: 1.0s; }
        
        /* Search and filter styles */
        .search-filter-container {
            display: flex;
            gap: 15px;
            margin-bottom: 25px;
            flex-wrap: wrap;
        }
        
        .search-box, .filter-box {
            flex: 1;
            min-width: 250px;
        }
        
        .search-box input, .filter-box select {
            width: 100%;
            padding: 15px 20px;
            border-radius: 12px;
            border: 1px solid rgba(0, 0, 0, 0.1);
            font-size: 16px;
            background: white;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.03);
            transition: all 0.3s;
        }
        
        .search-box input:focus, .filter-box select:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.1);
        }
        
        .search-box {
            position: relative;
        }
        
        .search-box i {
            position: absolute;
            right: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--gray);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="title-section">
                <div class="title-icon">
                    <i class="fas fa-user-graduate"></i>
                </div>
                <div>
                    <h2>Data Mahasiswa</h2>
                    <p class="subtitle">Manajemen data mahasiswa Fakultas Ilmu Komputer</p>
                </div>
            </div>
            <a href="{{ route('mahasiswa.create') }}" class="btn-tambah">
                <i class="fas fa-plus-circle"></i> Tambah Mahasiswa
            </a>
        </header>
        
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-users"></i>
                </div>
                <div class="stat-info">
                    <h3 id="total-mahasiswa">{{ count($mahasiswas) }}</h3>
                    <p>Total Mahasiswa</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-book-open"></i>
                </div>
                <div class="stat-info">
                    <h3 id="total-matkul">12</h3>
                    <p>Mata Kuliah</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-chart-line"></i>
                </div>
                <div class="stat-info">
                    <h3>95%</h3>
                    <p>Kehadiran Rata-rata</p>
                </div>
            </div>
            
            <div class="stat-card">
                <div class="stat-icon">
                    <i class="fas fa-calendar-alt"></i>
                </div>
                <div class="stat-info">
                    <h3>{{ date('d/m/Y') }}</h3>
                    <p>Tanggal Hari Ini</p>
                </div>
            </div>
        </div>
        
        <div class="search-filter-container">
            <div class="search-box">
                <input type="text" id="searchInput" placeholder="Cari mahasiswa...">
                <i class="fas fa-search"></i>
            </div>
            <div class="filter-box">
                <select id="filterKelas">
                    <option value="">Semua Kelas</option>
                    <option value="A">Kelas A</option>
                    <option value="B">Kelas B</option>
                    <option value="C">Kelas C</option>
                    <option value="D">Kelas D</option>
                </select>
            </div>
        </div>
        
        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th><i class="fas fa-hashtag"></i> NIM</th>
                        <th><i class="fas fa-user"></i> Nama</th>
                        <th><i class="fas fa-school"></i> Kelas</th>
                        <th><i class="fas fa-book"></i> Mata Kuliah</th>
                        <th><i class="fas fa-cogs"></i> Aksi</th>
                    </tr>
                </thead>
                <tbody id="tableBody">
                    @foreach ($mahasiswas as $index => $mhs)
                    <tr data-nim="{{ $mhs->nim }}" data-nama="{{ $mhs->nama }}" data-kelas="{{ $mhs->kelas }}" data-matkul="{{ $mhs->matakuliah }}">
                        <td class="nim-cell">{{ $mhs->nim }}</td>
                        <td>{{ $mhs->nama }}</td>
                        <td><span class="kelas-badge">{{ $mhs->kelas }}</span></td>
                        <td>{{ $mhs->matakuliah }}</td>
                        <td>
                            <div class="aksi-container">
                                <a href="#" class="btn-view" onclick="viewDetail('{{ $mhs->nim }}')">
                                    <i class="fas fa-eye"></i> Lihat
                                </a>
                                <a href="{{ route('mahasiswa.edit', $mhs->nim) }}" class="btn-edit">
                                    <i class="fas fa-edit"></i> Edit
                                </a>
                                <form action="{{ route('mahasiswa.destroy', $mhs->nim) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn-hapus" onclick="return confirmDelete(event)">
                                        <i class="fas fa-trash-alt"></i> Hapus
                                    </button>
                                </form>
                            </div>
                        </td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
        
        @if(count($mahasiswas) === 0)
        <div class="empty-state">
            <div class="empty-icon">
                <i class="fas fa-user-graduate"></i>
            </div>
            <h3>Belum ada data mahasiswa</h3>
            <p>Mulai dengan menambahkan data mahasiswa pertama Anda</p>
            <a href="{{ route('mahasiswa.create') }}" class="btn-tambah" style="margin-top: 20px; display: inline-block;">
                <i class="fas fa-plus-circle"></i> Tambah Mahasiswa Pertama
            </a>
        </div>
        @endif
        
        <div class="footer">
            <div>
                &copy; {{ date('Y') }} Sistem Informasi Mahasiswa - Fakultas Ilmu Komputer
            </div>
            <div class="footer-links">
                <a href="#">Kebijakan Privasi</a>
                <a href="#">Syarat & Ketentuan</a>
                <a href="#">Bantuan</a>
                <a href="#">Kontak</a>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Efek hover pada baris tabel
            const tableRows = document.querySelectorAll('tbody tr');
            tableRows.forEach(row => {
                row.addEventListener('mouseenter', function() {
                    this.style.transform = 'scale(1.005)';
                    this.style.boxShadow = '0 10px 20px rgba(0, 0, 0, 0.08)';
                });
                
                row.addEventListener('mouseleave', function() {
                    this.style.transform = 'scale(1)';
                    this.style.boxShadow = 'none';
                });
            });
            
            // Pencarian dinamis
            const searchInput = document.getElementById('searchInput');
            searchInput.addEventListener('keyup', function() {
                const filter = this.value.toLowerCase();
                const rows = document.querySelectorAll('#tableBody tr');
                
                rows.forEach(row => {
                    const nim = row.getAttribute('data-nim').toLowerCase();
                    const nama = row.getAttribute('data-nama').toLowerCase();
                    const kelas = row.getAttribute('data-kelas').toLowerCase();
                    const matkul = row.getAttribute('data-matkul').toLowerCase();
                    
                    if (nim.includes(filter) || nama.includes(filter) || kelas.includes(filter) || matkul.includes(filter)) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
            
            // Filter berdasarkan kelas
            const filterKelas = document.getElementById('filterKelas');
            filterKelas.addEventListener('change', function() {
                const selectedClass = this.value;
                const rows = document.querySelectorAll('#tableBody tr');
                
                rows.forEach(row => {
                    const kelas = row.getAttribute('data-kelas');
                    
                    if (selectedClass === '' || kelas === selectedClass) {
                        row.style.display = '';
                    } else {
                        row.style.display = 'none';
                    }
                });
            });
            
            // Tambahkan badge untuk kelas
            const kelasCells = document.querySelectorAll('.kelas-badge');
            kelasCells.forEach(cell => {
                const kelas = cell.textContent;
                cell.innerHTML = `<span style="background: linear-gradient(135deg, #4361ee, #3a0ca3); color: white; padding: 5px 12px; border-radius: 20px; font-weight: 600; font-size: 13px;">${kelas}</span>`;
            });
            
            // Hitung jumlah mata kuliah unik
            const matkulSet = new Set();
            tableRows.forEach(row => {
                const matkul = row.getAttribute('data-matkul');
                if (matkul) {
                    matkulSet.add(matkul);
                }
            });
            
            document.getElementById('total-matkul').textContent = matkulSet.size;
            
            // Animasi untuk stat cards
            const statCards = document.querySelectorAll('.stat-card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            statCards.forEach(card => {
                observer.observe(card);
            });
        });
        
        function confirmDelete(event) {
            event.preventDefault();
            const form = event.target.closest('form');
            
            Swal.fire({
                title: 'Apakah Anda yakin?',
                text: "Data mahasiswa akan dihapus secara permanen!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#4361ee',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Ya, hapus!',
                cancelButtonText: 'Batal',
                reverseButtons: true
            }).then((result) => {
                if (result.isConfirmed) {
                    form.submit();
                }
            });
            
            return false;
        }
        
        function viewDetail(nim) {
            // Simulasi tampilan detail
            const row = document.querySelector(`tr[data-nim="${nim}"]`);
            const nama = row.getAttribute('data-nama');
            const kelas = row.getAttribute('data-kelas');
            const matkul = row.getAttribute('data-matkul');
            
            Swal.fire({
                title: `Detail Mahasiswa - ${nim}`,
                html: `
                    <div style="text-align: left; padding: 10px;">
                        <p><strong>NIM:</strong> ${nim}</p>
                        <p><strong>Nama:</strong> ${nama}</p>
                        <p><strong>Kelas:</strong> ${kelas}</p>
                        <p><strong>Mata Kuliah:</strong> ${matkul}</p>
                    </div>
                `,
                icon: 'info',
                confirmButtonColor: '#4361ee',
                confirmButtonText: 'Tutup'
            });
        }
        
        // Tambahkan SweetAlert jika belum ada
        if (typeof Swal === 'undefined') {
            const script = document.createElement('script');
            script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
            document.head.appendChild(script);
        }
    </script>
</body>
</html>