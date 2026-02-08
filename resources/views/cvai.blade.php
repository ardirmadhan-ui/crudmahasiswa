<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Ardi Ramadhan - CV</title>
    <style>
        /* Variabel dan reset */
        :root {
            --primary: #2d3748;
            --primary-light: #4a5568;
            --accent: #3182ce;
            --accent-light: #ebf8ff;
            --surface: #ffffff;
            --background: #f7fafc;
            --border: #e2e8f0;
            --text-primary: #1a202c;
            --text-secondary: #4a5568;
            --text-tertiary: #718096;
            --radius: 10px;
            --shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.05), 0 2px 4px -1px rgba(0, 0, 0, 0.03);
            --shadow-lg: 0 10px 25px -5px rgba(0, 0, 0, 0.08);
            --transition: all 0.3s ease;
        }
        
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Inter', -apple-system, BlinkMacSystemFont, 'Segoe UI', sans-serif;
            background-color: var(--background);
            color: var(--text-primary);
            line-height: 1.6;
            padding: 30px 20px;
            min-height: 100vh;
        }
        
        .container {
            max-width: 900px;
            margin: 0 auto;
            background-color: var(--surface);
            border-radius: var(--radius);
            box-shadow: var(--shadow);
            overflow: hidden;
            border: 1px solid var(--border);
        }
        
        /* Header Section */
        .header {
            padding: 50px 50px 40px;
            background: linear-gradient(135deg, var(--primary) 0%, var(--primary-light) 100%);
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        .header::before {
            content: '';
            position: absolute;
            top: 0;
            right: 0;
            width: 200px;
            height: 200px;
            background: radial-gradient(circle, rgba(255,255,255,0.1) 0%, rgba(255,255,255,0) 70%);
        }
        
        .profile-header {
            display: flex;
            align-items: center;
            gap: 35px;
            flex-wrap: wrap;
        }
        
        .profile-img-container {
            flex-shrink: 0;
        }
        
        .profile-img {
            width: 140px;
            height: 140px;
            border-radius: 50%;
            object-fit: cover;
            border: 4px solid rgba(255, 255, 255, 0.2);
            box-shadow: var(--shadow-lg);
            transition: var(--transition);
        }
        
        .profile-img:hover {
            transform: scale(1.03);
        }
        
        .profile-info {
            flex: 1;
        }
        
        .profile-info h1 {
            font-size: 2.5rem;
            font-weight: 700;
            margin-bottom: 8px;
            letter-spacing: -0.025em;
        }
        
        .profile-info .title {
            font-size: 1.25rem;
            font-weight: 400;
            opacity: 0.9;
            margin-bottom: 20px;
        }
        
        .contact-badge {
            display: inline-flex;
            align-items: center;
            background-color: rgba(255, 255, 255, 0.1);
            padding: 8px 16px;
            border-radius: 20px;
            margin-right: 10px;
            margin-bottom: 10px;
            font-size: 0.9rem;
            backdrop-filter: blur(10px);
        }
        
        .contact-badge i {
            margin-right: 8px;
        }
        
        /* Main Content */
        .content {
            padding: 50px;
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 40px;
        }
        
        @media (max-width: 768px) {
            .content {
                grid-template-columns: 1fr;
                padding: 30px;
            }
        }
        
        /* Section Styling */
        .section {
            margin-bottom: 35px;
        }
        
        .section-title {
            display: flex;
            align-items: center;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid var(--accent-light);
        }
        
        .section-title h2 {
            font-size: 1.25rem;
            font-weight: 600;
            color: var(--primary);
            margin: 0;
        }
        
        .section-title i {
            margin-right: 12px;
            color: var(--accent);
            font-size: 1.2rem;
        }
        
        .section-content {
            color: var(--text-secondary);
        }
        
        /* About Section */
        .about-text {
            font-size: 1.05rem;
            line-height: 1.7;
        }
        
        /* Education & Skills Lists */
        .timeline {
            list-style: none;
            padding-left: 0;
        }
        
        .timeline-item {
            position: relative;
            padding-left: 24px;
            margin-bottom: 22px;
        }
        
        .timeline-item::before {
            content: '';
            position: absolute;
            left: 0;
            top: 8px;
            width: 10px;
            height: 10px;
            border-radius: 50%;
            background-color: var(--accent);
        }
        
        .timeline-item::after {
            content: '';
            position: absolute;
            left: 4px;
            top: 18px;
            bottom: -22px;
            width: 2px;
            background-color: var(--border);
        }
        
        .timeline-item:last-child::after {
            display: none;
        }
        
        .timeline-year {
            font-weight: 600;
            color: var(--accent);
            font-size: 0.95rem;
            margin-bottom: 4px;
        }
        
        .timeline-desc {
            font-weight: 600;
            color: var(--text-primary);
            margin-bottom: 3px;
        }
        
        .timeline-detail {
            font-size: 0.95rem;
            color: var(--text-tertiary);
        }
        
        /* Skills */
        .skills-list {
            list-style: none;
            padding-left: 0;
        }
        
        .skill-item {
            display: flex;
            align-items: center;
            margin-bottom: 16px;
            padding: 12px 15px;
            background-color: var(--accent-light);
            border-radius: 8px;
            transition: var(--transition);
        }
        
        .skill-item:hover {
            transform: translateX(5px);
            background-color: #e6f2ff;
        }
        
        .skill-item i {
            color: var(--accent);
            margin-right: 12px;
            font-size: 1.1rem;
            width: 24px;
            text-align: center;
        }
        
        /* Footer */
        .footer {
            padding: 25px 50px;
            background-color: var(--background);
            border-top: 1px solid var(--border);
            text-align: center;
            color: var(--text-tertiary);
            font-size: 0.9rem;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .header {
                padding: 40px 30px;
            }
            
            .profile-header {
                flex-direction: column;
                text-align: center;
                gap: 25px;
            }
            
            .profile-info h1 {
                font-size: 2rem;
            }
            
            .contact-badge {
                margin-bottom: 10px;
            }
            
            .content {
                padding: 30px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 15px;
            }
            
            .header {
                padding: 30px 20px;
            }
            
            .profile-img {
                width: 120px;
                height: 120px;
            }
            
            .content {
                padding: 25px 20px;
            }
        }
        
        /* Animations */
        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
        
        .fade-in {
            animation: fadeInUp 0.6s ease-out forwards;
        }
    </style>
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700&display=swap" rel="stylesheet">
</head>
<body>
    <div class="container fade-in">
        <!-- Header -->
        <div class="header">
            <div class="profile-header">
                <div class="profile-img-container">
                    <img src="images/absurd.jpeg" alt="Ardi Ramadhan" class="profile-img">
                </div>
                <div class="profile-info">
                    <h1>Ardi Ramadhan</h1>
                    <div class="title">Akuntan & Fresh Graduate</div>
                    <div>
                        <span class="contact-badge">
                            <i class="fas fa-envelope"></i> ardirmadhan@gmail.com
                        </span>
                        <span class="contact-badge">
                            <i class="fas fa-map-marker-alt"></i> Cirebon, Indonesia
                        </span>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Main Content -->
        <div class="content">
            <!-- Left Column -->
            <div class="left-column">
                <!-- Tentang Saya -->
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-user"></i>
                        <h2>Tentang Saya</h2>
                    </div>
                    <div class="section-content about-text">
                        <p>Fresh graduate dengan semangat tinggi untuk belajar dan berkembang di dunia kerja. Terbiasa bekerja dalam tim, cepat beradaptasi, dan mampu mempelajari hal baru dengan cepat. Memiliki ketertarikan pada bidang administrasi, akuntansi, dan pelayanan.</p>
                    </div>
                </div>
                
                <!-- Pendidikan -->
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-graduation-cap"></i>
                        <h2>Pendidikan</h2>
                    </div>
                    <div class="section-content">
                        <ul class="timeline">
                            <li class="timeline-item">
                                <div class="timeline-year">2024 – Sekarang</div>
                                <div class="timeline-desc">STMIK IKMI</div>
                                <div class="timeline-detail">Komputerisasi Akuntansi</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-year">2019 – 2022</div>
                                <div class="timeline-desc">SMKN 1 Jamblang</div>
                                <div class="timeline-detail">Teknik Komputer dan Jaringan</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-year">2016 – 2019</div>
                                <div class="timeline-desc">MTsN 4 Cirebon</div>
                            </li>
                            <li class="timeline-item">
                                <div class="timeline-year">2010 – 2016</div>
                                <div class="timeline-desc">SDN 1 Weru Lor</div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            
            <!-- Right Column -->
            <div class="right-column">
                <!-- Keahlian -->
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-tools"></i>
                        <h2>Keahlian</h2>
                    </div>
                    <div class="section-content">
                        <ul class="skills-list">
                            <li class="skill-item">
                                <i class="fas fa-code"></i>
                                <span>HTML & CSS Dasar</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-server"></i>
                                <span>Laravel Dasar</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-paint-brush"></i>
                                <span>Desain Web Dasar</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-file-word"></i>
                                <span>Microsoft Word & Excel</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-calculator"></i>
                                <span>Software Accurate</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Informasi Tambahan -->
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-star"></i>
                        <h2>Kualitas</h2>
                    </div>
                    <div class="section-content">
                        <ul class="skills-list">
                            <li class="skill-item">
                                <i class="fas fa-users"></i>
                                <span>Teamwork & Kolaborasi</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-bolt"></i>
                                <span>Adaptasi Cepat</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-brain"></i>
                                <span>Pembelajaran Cepat</span>
                            </li>
                            <li class="skill-item">
                                <i class="fas fa-clock"></i>
                                <span>Manajemen Waktu</span>
                            </li>
                        </ul>
                    </div>
                </div>
                
                <!-- Minat -->
                <div class="section">
                    <div class="section-title">
                        <i class="fas fa-heart"></i>
                        <h2>Minat</h2>
                    </div>
                    <div class="section-content">
                        <p>Akuntansi, Administrasi, Teknologi Informasi, Pengembangan Web, Pelayanan Pelanggan, Analisis Data</p>
                    </div>
                </div>
            </div>
        </div>
        
        <!-- Footer -->
        <div class="footer">
            <p>CV Ardi Ramadhan • Terakhir diperbarui: {{ date('Y') }}</p>
        </div>
    </div>
    
    <script>
        // Efek scroll animation
        document.addEventListener('DOMContentLoaded', function() {
            // Animasi untuk elemen timeline
            const timelineItems = document.querySelectorAll('.timeline-item');
            const skillItems = document.querySelectorAll('.skill-item');
            
            const observerOptions = {
                threshold: 0.1,
                rootMargin: '0px 0px -50px 0px'
            };
            
            const observer = new IntersectionObserver(function(entries) {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = '1';
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, observerOptions);
            
            // Atur animasi untuk timeline items
            timelineItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateY(20px)';
                item.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
                observer.observe(item);
            });
            
            // Atur animasi untuk skill items
            skillItems.forEach((item, index) => {
                item.style.opacity = '0';
                item.style.transform = 'translateX(-20px)';
                item.style.transition = `opacity 0.5s ease ${index * 0.1}s, transform 0.5s ease ${index * 0.1}s`;
                observer.observe(item);
            });
        });
    </script>
</body>
</html>