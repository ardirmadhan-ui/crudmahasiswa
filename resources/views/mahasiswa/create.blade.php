<!DOCTYPE html>
<html>
<head>
    <title>Tambah Mahasiswa</title>
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
            max-width: 800px;
            margin: 0 auto;
            background-color: rgba(255, 255, 255, 0.95);
            border-radius: 20px;
            box-shadow: 0 15px 35px rgba(0, 0, 0, 0.1);
            padding: 40px;
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
        
        .form-container {
            background: white;
            border-radius: 20px;
            padding: 30px;
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.05);
            margin-bottom: 30px;
        }
        
        .form-group {
            margin-bottom: 25px;
            position: relative;
        }
        
        .form-group label {
            display: block;
            margin-bottom: 10px;
            font-weight: 600;
            color: var(--dark);
            font-size: 16px;
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .form-group label i {
            color: var(--primary);
            font-size: 18px;
        }
        
        .form-control {
            width: 100%;
            padding: 16px 20px;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            font-size: 16px;
            color: var(--dark);
            background-color: white;
            transition: all 0.3s ease;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.03);
        }
        
        .form-control:focus {
            outline: none;
            border-color: var(--primary);
            box-shadow: 0 5px 15px rgba(67, 97, 238, 0.1);
            transform: translateY(-2px);
        }
        
        .form-control:hover {
            border-color: #cbd5e1;
        }
        
        .form-control::placeholder {
            color: #94a3b8;
        }
        
        .form-row {
            display: grid;
            grid-template-columns: 1fr 1fr;
            gap: 20px;
        }
        
        @media (max-width: 768px) {
            .form-row {
                grid-template-columns: 1fr;
            }
        }
        
        .button-group {
            display: flex;
            gap: 15px;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid #e2e8f0;
        }
        
        .btn-submit {
            flex: 1;
            background: linear-gradient(135deg, var(--primary), var(--secondary));
            color: white;
            border: none;
            padding: 18px 30px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(67, 97, 238, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        
        .btn-submit:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(67, 97, 238, 0.4);
        }
        
        .btn-submit:active {
            transform: translateY(-2px);
        }
        
        .btn-cancel {
            flex: 1;
            background: white;
            color: var(--dark);
            border: 2px solid #e2e8f0;
            padding: 18px 30px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            text-decoration: none;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        
        .btn-cancel:hover {
            background-color: #f8fafc;
            border-color: var(--primary);
            color: var(--primary);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .validation-message {
            color: var(--danger);
            font-size: 14px;
            margin-top: 8px;
            display: flex;
            align-items: center;
            gap: 5px;
            opacity: 0;
            transform: translateY(-10px);
            transition: all 0.3s ease;
        }
        
        .validation-message.show {
            opacity: 1;
            transform: translateY(0);
        }
        
        .validation-message i {
            font-size: 16px;
        }
        
        .form-group.error .form-control {
            border-color: var(--danger);
            background-color: rgba(244, 63, 94, 0.05);
        }
        
        .form-group.success .form-control {
            border-color: var(--success);
            background-color: rgba(74, 222, 128, 0.05);
        }
        
        .info-box {
            background: linear-gradient(135deg, rgba(67, 97, 238, 0.1), rgba(76, 201, 240, 0.1));
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid var(--primary);
        }
        
        .info-box h4 {
            color: var(--primary);
            margin-bottom: 10px;
            font-size: 18px;
            display: flex;
            align-items: center;
            gap: 10px;
        }
        
        .info-box p {
            color: var(--gray);
            font-size: 14px;
            line-height: 1.5;
        }
        
        .footer {
            text-align: center;
            margin-top: 40px;
            padding-top: 25px;
            border-top: 1px solid rgba(0, 0, 0, 0.08);
            color: var(--gray);
            font-size: 14px;
        }
        
        @media (max-width: 768px) {
            .container {
                padding: 25px;
            }
            
            header {
                flex-direction: column;
                align-items: flex-start;
                gap: 20px;
            }
            
            .button-group {
                flex-direction: column;
            }
            
            h2 {
                font-size: 28px;
            }
        }
        
        @media (max-width: 480px) {
            body {
                padding: 10px;
            }
            
            .container {
                padding: 20px;
            }
            
            .form-container {
                padding: 20px;
            }
            
            .title-icon {
                width: 50px;
                height: 50px;
            }
            
            .btn-submit, .btn-cancel {
                padding: 16px 20px;
                font-size: 16px;
            }
        }
        
        .input-hint {
            display: block;
            font-size: 13px;
            color: var(--gray);
            margin-top: 5px;
            margin-left: 30px;
        }
        
        .character-count {
            position: absolute;
            right: 15px;
            top: 45px;
            font-size: 13px;
            color: var(--gray);
        }
        
        .character-count.warning {
            color: var(--warning);
        }
        
        .character-count.danger {
            color: var(--danger);
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="title-section">
                <div class="title-icon">
                    <i class="fas fa-user-plus"></i>
                </div>
                <div>
                    <h2>Tambah Data Mahasiswa</h2>
                    <p class="subtitle">Isi form berikut untuk menambahkan data mahasiswa baru</p>
                </div>
            </div>
        </header>
        
        <div class="info-box">
            <h4><i class="fas fa-info-circle"></i> Informasi Penting</h4>
            <p>Pastikan semua data yang dimasukkan sudah benar sebelum menyimpan. Data NIM harus unik dan belum terdaftar sebelumnya.</p>
        </div>
        
        <form action="{{ route('mahasiswa.store') }}" method="POST" id="mahasiswaForm">
            @csrf
            
            <div class="form-container">
                <div class="form-row">
                    <div class="form-group" id="nim-group">
                        <label for="nim"><i class="fas fa-hashtag"></i> NIM</label>
                        <input type="text" 
                               name="nim" 
                               id="nim" 
                               class="form-control" 
                               placeholder="Contoh: 2021071001"
                               maxlength="20"
                               required>
                        <div class="input-hint">Nomor Induk Mahasiswa (maksimal 20 karakter)</div>
                        <div class="character-count" id="nim-counter">0/20</div>
                        <div class="validation-message" id="nim-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>NIM harus diisi</span>
                        </div>
                    </div>
                    
                    <div class="form-group" id="nama-group">
                        <label for="nama"><i class="fas fa-user"></i> Nama Lengkap</label>
                        <input type="text" 
                               name="nama" 
                               id="nama" 
                               class="form-control" 
                               placeholder="Contoh: Ahmad Fauzi"
                               maxlength="100"
                               required>
                        <div class="input-hint">Nama lengkap mahasiswa (maksimal 100 karakter)</div>
                        <div class="character-count" id="nama-counter">0/100</div>
                        <div class="validation-message" id="nama-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Nama harus diisi</span>
                        </div>
                    </div>
                </div>
                
                <div class="form-row">
                    <div class="form-group" id="kelas-group">
                        <label for="kelas"><i class="fas fa-school"></i> Kelas</label>
                        <input type="text" 
                               name="kelas" 
                               id="kelas" 
                               class="form-control" 
                               placeholder="Contoh: A, B, C atau 4IA01"
                               maxlength="10"
                               required>
                        <div class="input-hint">Kode kelas mahasiswa (maksimal 10 karakter)</div>
                        <div class="character-count" id="kelas-counter">0/10</div>
                        <div class="validation-message" id="kelas-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Kelas harus diisi</span>
                        </div>
                    </div>
                    
                    <div class="form-group" id="matakuliah-group">
                        <label for="matakuliah"><i class="fas fa-book"></i> Mata Kuliah</label>
                        <input type="text" 
                               name="matakuliah" 
                               id="matakuliah" 
                               class="form-control" 
                               placeholder="Contoh: Pemrograman Web"
                               maxlength="100"
                               required>
                        <div class="input-hint">Nama mata kuliah (maksimal 100 karakter)</div>
                        <div class="character-count" id="matakuliah-counter">0/100</div>
                        <div class="validation-message" id="matakuliah-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Mata kuliah harus diisi</span>
                        </div>
                    </div>
                </div>
                
                <div class="button-group">
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-save"></i> Simpan Data
                    </button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn-cancel">
                        <i class="fas fa-arrow-left"></i> Kembali
                    </a>
                </div>
            </div>
        </form>
        
        <div class="footer">
            &copy; {{ date('Y') }} Sistem Informasi Mahasiswa - Fakultas Ilmu Komputer
        </div>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Fungsi untuk menghitung karakter
            function setupCharacterCounter(inputId, counterId, maxLength) {
                const input = document.getElementById(inputId);
                const counter = document.getElementById(counterId);
                
                input.addEventListener('input', function() {
                    const length = this.value.length;
                    counter.textContent = `${length}/${maxLength}`;
                    
                    // Ubah warna berdasarkan panjang karakter
                    if (length > maxLength * 0.8) {
                        counter.classList.add('warning');
                        counter.classList.remove('danger');
                    } else if (length > maxLength) {
                        counter.classList.remove('warning');
                        counter.classList.add('danger');
                    } else {
                        counter.classList.remove('warning', 'danger');
                    }
                    
                    // Validasi real-time
                    validateField(inputId);
                });
                
                // Inisialisasi counter
                counter.textContent = `${input.value.length}/${maxLength}`;
            }
            
            // Setup counter untuk setiap field
            setupCharacterCounter('nim', 'nim-counter', 20);
            setupCharacterCounter('nama', 'nama-counter', 100);
            setupCharacterCounter('kelas', 'kelas-counter', 10);
            setupCharacterCounter('matakuliah', 'matakuliah-counter', 100);
            
            // Validasi form
            function validateField(fieldId) {
                const field = document.getElementById(fieldId);
                const value = field.value.trim();
                const group = document.getElementById(`${fieldId}-group`);
                const errorElement = document.getElementById(`${fieldId}-error`);
                
                // Reset state
                group.classList.remove('error', 'success');
                errorElement.classList.remove('show');
                
                // Validasi berdasarkan field
                let isValid = true;
                let errorMessage = '';
                
                if (!value) {
                    isValid = false;
                    errorMessage = 'Field ini harus diisi';
                } else if (fieldId === 'nim') {
                    // Validasi NIM (hanya angka dan minimal 8 karakter)
                    if (!/^\d+$/.test(value)) {
                        isValid = false;
                        errorMessage = 'NIM harus berupa angka';
                    } else if (value.length < 8) {
                        isValid = false;
                        errorMessage = 'NIM minimal 8 digit';
                    }
                } else if (fieldId === 'nama') {
                    // Validasi nama (minimal 2 karakter)
                    if (value.length < 2) {
                        isValid = false;
                        errorMessage = 'Nama minimal 2 karakter';
                    }
                }
                
                if (!isValid) {
                    group.classList.add('error');
                    errorElement.querySelector('span').textContent = errorMessage;
                    errorElement.classList.add('show');
                    return false;
                } else {
                    group.classList.add('success');
                    return true;
                }
            }
            
            // Validasi saat input kehilangan fokus
            document.querySelectorAll('.form-control').forEach(input => {
                input.addEventListener('blur', function() {
                    validateField(this.id);
                });
            });
            
            // Validasi saat form di-submit
            document.getElementById('mahasiswaForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validasi semua field
                const fields = ['nim', 'nama', 'kelas', 'matakuliah'];
                let isValid = true;
                
                fields.forEach(fieldId => {
                    if (!validateField(fieldId)) {
                        isValid = false;
                    }
                });
                
                // Jika valid, submit form
                if (isValid) {
                    // Tampilkan loading indicator
                    const submitBtn = document.querySelector('.btn-submit');
                    const originalText = submitBtn.innerHTML;
                    submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Menyimpan...';
                    submitBtn.disabled = true;
                    
                    // Simulasikan proses penyimpanan (dalam aplikasi nyata, ini akan submit form)
                    setTimeout(() => {
                        // Jika berhasil, arahkan ke halaman daftar
                        // Untuk sekarang, langsung submit form asli
                        this.submit();
                    }, 1500);
                } else {
                    // Tampilkan pesan error
                    Swal.fire({
                        title: 'Validasi Gagal',
                        text: 'Harap periksa kembali data yang Anda masukkan',
                        icon: 'error',
                        confirmButtonColor: '#4361ee',
                        confirmButtonText: 'Baik, saya akan periksa'
                    });
                }
            });
            
            // Animasi untuk form groups
            const formGroups = document.querySelectorAll('.form-group');
            formGroups.forEach((group, index) => {
                group.style.opacity = '0';
                group.style.transform = 'translateY(20px)';
                
                setTimeout(() => {
                    group.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                    group.style.opacity = '1';
                    group.style.transform = 'translateY(0)';
                }, 100 * index);
            });
            
            // Tambahkan SweetAlert jika belum ada
            if (typeof Swal === 'undefined') {
                const script = document.createElement('script');
                script.src = 'https://cdn.jsdelivr.net/npm/sweetalert2@11';
                document.head.appendChild(script);
            }
        });
    </script>
</body>
</html>