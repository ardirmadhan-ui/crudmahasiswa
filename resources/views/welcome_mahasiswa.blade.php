<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Portal Mahasiswa - {{ $nama ?? 'STMIK IKMI' }}</title>
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    
    <!-- Custom CSS -->
    <style>
        :root {
            --primary-color: #2c3e50;
            --secondary-color: #3498db;
            --accent-color: #e74c3c;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .navbar-custom {
            background-color: var(--primary-color) !important;
            box-shadow: 0 2px 10px rgba(0,0,0,0.1);
        }
        
        .header-section {
            background: linear-gradient(135deg, var(--primary-color), var(--secondary-color));
            color: white;
            padding: 80px 0;
            margin-bottom: 40px;
            border-radius: 0 0 20px 20px;
        }
        
        .welcome-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 20px rgba(0,0,0,0.1);
            margin-bottom: 30px;
            border-left: 5px solid var(--secondary-color);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            gap: 20px;
            margin-bottom: 25px;
        }
        
        .profile-icon {
            width: 80px;
            height: 80px;
            background: var(--secondary-color);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 36px;
            color: white;
        }
        
        .matkul-list {
            list-style: none;
            padding-left: 0;
        }
        
        .matkul-item {
            padding: 12px 20px;
            margin-bottom: 10px;
            background: #f8f9fa;
            border-left: 4px solid var(--secondary-color);
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .matkul-item:hover {
            background: #e3f2fd;
            transform: translateX(5px);
        }
        
        .features {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 25px;
            margin: 40px 0;
        }
        
        .feature {
            background: white;
            padding: 25px;
            border-radius: 12px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.08);
            text-align: center;
            transition: transform 0.3s ease;
            border-top: 4px solid var(--secondary-color);
        }
        
        .feature:hover {
            transform: translateY(-10px);
            box-shadow: 0 8px 25px rgba(0,0,0,0.15);
        }
        
        .feature-icon {
            font-size: 40px;
            color: var(--secondary-color);
            margin-bottom: 20px;
        }
        
        .feature h3 {
            color: var(--primary-color);
            margin-bottom: 15px;
            font-size: 1.4rem;
        }
        
        .feature p {
            color: #666;
            font-size: 0.95rem;
        }
        
        .info-card {
            background: white;
            border-radius: 12px;
            padding: 25px;
            box-shadow: 0 4px 12px rgba(0,0,0,0.05);
            margin-bottom: 25px;
            height: 100%;
        }
        
        .info-card h4 {
            color: var(--primary-color);
            border-bottom: 2px solid #eee;
            padding-bottom: 10px;
            margin-bottom: 20px;
        }
        
        .footer {
            background-color: var(--primary-color);
            color: white;
            padding: 30px 0;
            margin-top: 50px;
            text-align: center;
        }
        
        .badge-custom {
            background-color: var(--accent-color);
            color: white;
            padding: 5px 15px;
            border-radius: 20px;
            font-weight: 500;
        }
        
        .fade-in {
            animation: fadeIn 0.8s ease-in;
        }
        
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        @media (max-width: 768px) {
            .features {
                grid-template-columns: 1fr;
            }
            
            .header-section {
                padding: 50px 0;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark navbar-custom">
        <div class="container">
            <a class="navbar-brand" href="#">
                <i class="fas fa-graduation-cap me-2"></i>
                Portal Mahasiswa
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#">
                            <i class="fas fa-home me-1"></i> Beranda
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-book me-1"></i> Akademik
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-calendar me-1"></i> Jadwal
                        </a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">
                            <i class="fas fa-user me-1"></i> Profil
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Header Section -->
    <div class="header-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">
                        <i class="fas fa-university me-2"></i>
                        {{ $welcome_message ?? 'Selamat Datang di Portal Akademik' }}
                    </h1>
                    <p class="lead mb-4">
                        Ini adalah halaman pertama saya di Laravel 12. Dikembangkan dengan pendekatan minimalis
                        yang fokus pada pengalaman pengguna yang bersih dan fungsionalitas yang optimal.
                    </p>
                    <div class="d-flex gap-3 flex-wrap">
                        <span class="badge-custom">
                            <i class="fas fa-user-graduate me-1"></i> {{ $nama ?? 'Mahasiswa' }}
                        </span>
                        <span class="badge-custom">
                            <i class="fas fa-layer-group me-1"></i> Semester {{ $semester ?? '1' }}
                        </span>
                        <span class="badge-custom">
                            <i class="fas fa-star me-1"></i> IPK: {{ $ipk ?? '0.00' }}
                        </span>
                    </div>
                </div>
                <div class="col-lg-4 text-center">
                    <div class="profile-icon">
                        <i class="fas fa-user-graduate"></i>
                    </div>
                    <h4 class="mt-3">{{ $nama ?? 'Mahasiswa' }}</h4>
                    <p class="mb-0">{{ $prodi ?? 'Program Studi' }}</p>
                </div>
            </div>
        </div>
    </div>

    <!-- Main Content -->
    <div class="container">
        <!-- Welcome Card -->
        <div class="welcome-card fade-in">
            <div class="profile-header">
                <div>
                    <h2 class="mb-2">Halo, {{ $nama ?? 'Mahasiswa' }}!</h2>
                    <p class="text-muted mb-0">
                        <i class="fas fa-id-card me-1"></i> NIM: {{ $nim ?? '00000000' }} | 
                        <i class="fas fa-calendar-alt me-1 ms-3"></i> Tahun Akademik: {{ $tahun_akademik ?? '2024/2025' }}
                    </p>
                </div>
            </div>
            
            <div class="row">
                <div class="col-md-6">
                    <div class="info-card">
                        <h4><i class="fas fa-book me-2"></i> Mata Kuliah Semester Ini</h4>
                        <ul class="matkul-list">
                            @if(isset($matkul) && count($matkul) > 0)
                                @foreach($matkul as $mk)
                                    <li class="matkul-item">
                                        <i class="fas fa-check-circle me-2 text-success"></i> {{ $mk }}
                                    </li>
                                @endforeach
                            @else
                                <li class="matkul-item text-muted">
                                    <i class="fas fa-info-circle me-2"></i> Belum ada data mata kuliah
                                </li>
                            @endif
                        </ul>
                        <p class="mt-3 mb-0">
                            <strong>Total SKS:</strong> {{ $total_sks ?? '0' }} SKS
                        </p>
                    </div>
                </div>
                
                <div class="col-md-6">
                    <div class="info-card">
                        <h4><i class="fas fa-chart-line me-2"></i> Informasi Akademik</h4>
                        <div class="mb-3">
                            <h5 class="text-primary">IPK Semester</h5>
                            <div class="progress" style="height: 25px;">
                                <div class="progress-bar bg-success" 
                                     role="progressbar" 
                                     style="width: {{ ($ipk ?? 0) / 4 * 100 }}%"
                                     aria-valuenow="{{ $ipk ?? 0 }}" 
                                     aria-valuemin="0" 
                                     aria-valuemax="4">
                                    {{ $ipk ?? '0.00' }}
                                </div>
                            </div>
                            <small class="text-muted">Skala 4.00</small>
                        </div>
                        
                        <div class="mt-4">
                            <h5 class="text-primary">Status Akademik</h5>
                            <div class="alert alert-success">
                                <i class="fas fa-check-circle me-2"></i>
                                <strong>Aktif</strong> - Mahasiswa terdaftar di semester {{ $semester ?? '1' }}
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Features Section -->
        <div class="mt-5">
            <h2 class="text-center mb-4" style="color: var(--primary-color);">
                <i class="fas fa-star me-2"></i> Fasilitas & Fitur Unggulan
            </h2>
            
            <div class="features">
                @if(isset($fitur) && is_array($fitur) && count($fitur) > 0)
                    @foreach($fitur as $index => $f)
                    <div class="feature fade-in" style="animation-delay: {{ $index * 0.1 }}s;">
                        <div class="feature-icon">
                            <i class="{{ $f['icon'] ?? 'fas fa-star' }}"></i>
                        </div>
                        <h3>{{ $f['title'] ?? 'Fitur Mahasiswa' }}</h3>
                        <p>{{ $f['description'] ?? 'Deskripsi fitur akan ditampilkan di sini.' }}</p>
                    </div>
                    @endforeach
                @else
                    <div class="col-12 text-center">
                        <div class="alert alert-info">
                            <i class="fas fa-info-circle me-2"></i>
                            Informasi fitur akan ditampilkan di sini.
                        </div>
                    </div>
                @endif
            </div>
        </div>

        <!-- Additional Info -->
        <div class="row mt-5">
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-clock me-2"></i> Waktu Perkuliahan</h4>
                    <p>Perkuliahan berlangsung sesuai jadwal yang telah ditetapkan. Pastikan untuk selalu mengecek jadwal terbaru di portal.</p>
                    <a href="#" class="btn btn-outline-primary btn-sm">
                        <i class="fas fa-calendar-alt me-1"></i> Lihat Jadwal
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-download me-2"></i> Materi & Tugas</h4>
                    <p>Akses materi pembelajaran, tugas, dan pengumuman penting dari dosen pengampu mata kuliah.</p>
                    <a href="#" class="btn btn-outline-success btn-sm">
                        <i class="fas fa-download me-1"></i> Download Materi
                    </a>
                </div>
            </div>
            <div class="col-md-4">
                <div class="info-card">
                    <h4><i class="fas fa-question-circle me-2"></i> Bantuan & Support</h4>
                    <p>Jika mengalami kendala teknis atau memiliki pertanyaan akademik, hubungi admin atau dosen wali.</p>
                    <a href="#" class="btn btn-outline-info btn-sm">
                        <i class="fas fa-envelope me-1"></i> Hubungi Admin
                    </a>
                </div>
            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="footer">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h5><i class="fas fa-graduation-cap me-2"></i> Portal Mahasiswa</h5>
                    <p class="mb-0">
                        Sistem informasi akademik untuk mahasiswa STMIK IKMI.
                        <br>Dibangun dengan Laravel 12.
                    </p>
                </div>
                <div class="col-md-6 text-md-end">
                    <p class="mb-1">
                        <i class="fas fa-user me-1"></i> {{ $nama ?? 'Mahasiswa' }}
                    </p>
                    <p class="mb-0">
                        <i class="fas fa-calendar me-1"></i> {{ date('d F Y') }}
                    </p>
                    <p class="mt-3 mb-0">
                        <small>© 2024 STMIK IKMI. All rights reserved.</small>
                    </p>
                </div>
            </div>
        </div>
    </footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Animasi sederhana untuk elemen saat scroll
        document.addEventListener('DOMContentLoaded', function() {
            // Efek aktif untuk navbar
            const currentLocation = window.location.href;
            const menuItems = document.querySelectorAll('.nav-link');
            
            menuItems.forEach(item => {
                if(item.href === currentLocation) {
                    item.classList.add('active');
                }
            });
            
            // Menambahkan efek hover pada card
            const cards = document.querySelectorAll('.feature, .info-card');
            cards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.style.transition = 'all 0.3s ease';
                });
            });
            
            // Menampilkan tahun akademik di footer
            const yearElement = document.querySelector('.footer .text-muted');
            if(yearElement) {
                yearElement.textContent = `© ${new Date().getFullYear()} STMIK IKMI. All rights reserved.`;
            }
        });
        
        // Fungsi untuk menampilkan notifikasi
        function showNotification(message, type = 'info') {
            const alert = document.createElement('div');
            alert.className = `alert alert-${type} alert-dismissible fade show position-fixed top-0 end-0 m-3`;
            alert.style.zIndex = '1050';
            alert.innerHTML = `
                ${message}
                <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
            `;
            document.body.appendChild(alert);
            
            // Hapus otomatis setelah 5 detik
            setTimeout(() => {
                if(alert.parentNode) {
                    alert.remove();
                }
            }, 5000);
        }
        
        // Contoh penggunaan notifikasi
        // showNotification('Selamat datang di portal mahasiswa!', 'success');
    </script>
</body>
</html>