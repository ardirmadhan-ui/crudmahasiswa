<!DOCTYPE html>
<html>
<head>
    <title>Edit Mahasiswa</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    <style>
        :root {
            --primary: #4361ee;
            --secondary: #3a0ca3;
            --accent: #4cc9f0;
            --success: #4ade80;
            --warning: #f59e0b;
            --danger: #f43f5e;
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
            background: linear-gradient(135deg, var(--warning), #d97706);
            width: 60px;
            height: 60px;
            border-radius: 15px;
            display: flex;
            align-items: center;
            justify-content: center;
            box-shadow: 0 8px 16px rgba(245, 158, 11, 0.3);
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
            background: linear-gradient(to right, var(--warning), #d97706);
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
        
        .mahasiswa-info {
            background: linear-gradient(135deg, rgba(245, 158, 11, 0.1), rgba(217, 119, 6, 0.05));
            border-radius: 12px;
            padding: 20px;
            margin-bottom: 30px;
            border-left: 4px solid var(--warning);
            display: flex;
            align-items: center;
            gap: 15px;
        }
        
        .mahasiswa-info i {
            color: var(--warning);
            font-size: 24px;
        }
        
        .mahasiswa-info-content h4 {
            color: var(--warning);
            margin-bottom: 5px;
            font-size: 18px;
        }
        
        .mahasiswa-info-content p {
            color: var(--gray);
            font-size: 14px;
            line-height: 1.5;
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
            color: var(--warning);
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
            border-color: var(--warning);
            box-shadow: 0 5px 15px rgba(245, 158, 11, 0.1);
            transform: translateY(-2px);
        }
        
        .form-control:hover {
            border-color: #cbd5e1;
        }
        
        .form-control::placeholder {
            color: #94a3b8;
        }
        
        .form-control:disabled {
            background-color: #f8fafc;
            color: #94a3b8;
            cursor: not-allowed;
            border-color: #e2e8f0;
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
            background: linear-gradient(135deg, var(--warning), #d97706);
            color: white;
            border: none;
            padding: 18px 30px;
            border-radius: 12px;
            font-size: 18px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            box-shadow: 0 8px 20px rgba(245, 158, 11, 0.3);
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 12px;
        }
        
        .btn-submit:hover {
            transform: translateY(-5px);
            box-shadow: 0 12px 25px rgba(245, 158, 11, 0.4);
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
            border-color: var(--warning);
            color: var(--warning);
            transform: translateY(-5px);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
        }
        
        .btn-reset {
            flex: 0.5;
            background: white;
            color: var(--gray);
            border: 2px solid #e2e8f0;
            padding: 18px 20px;
            border-radius: 12px;
            font-size: 16px;
            font-weight: 600;
            cursor: pointer;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }
        
        .btn-reset:hover {
            background-color: #f8fafc;
            border-color: var(--gray);
            color: var(--dark);
            transform: translateY(-5px);
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
            
            .btn-reset {
                order: 3;
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
            
            .btn-submit, .btn-cancel, .btn-reset {
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
        
        .nim-display {
            display: flex;
            align-items: center;
            gap: 10px;
            background-color: #f8fafc;
            border: 2px solid #e2e8f0;
            border-radius: 12px;
            padding: 16px 20px;
            font-size: 16px;
            color: var(--dark);
            margin-top: 10px;
        }
        
        .nim-display i {
            color: var(--warning);
        }
        
        .nim-label {
            font-weight: 600;
            color: var(--warning);
        }
        
        .last-updated {
            text-align: center;
            color: var(--gray);
            font-size: 14px;
            margin-top: 10px;
            font-style: italic;
        }
    </style>
</head>
<body>
    <div class="container">
        <header>
            <div class="title-section">
                <div class="title-icon">
                    <i class="fas fa-edit"></i>
                </div>
                <div>
                    <h2>Edit Data Mahasiswa</h2>
                    <p class="subtitle">Perbarui informasi data mahasiswa</p>
                </div>
            </div>
        </header>
        
        <div class="mahasiswa-info">
            <i class="fas fa-user-graduate"></i>
            <div class="mahasiswa-info-content">
                <h4>Sedang Mengedit Data Mahasiswa</h4>
                <p>Anda sedang mengedit data mahasiswa dengan NIM <strong>{{ $mahasiswa->nim }}</strong>. Pastikan data yang diubah sudah benar sebelum menyimpan perubahan.</p>
            </div>
        </div>
        
        <form action="{{ route('mahasiswa.update', $mahasiswa->nim) }}" method="POST" id="editMahasiswaForm">
            @csrf
            @method('PUT')
            
            <div class="form-container">
                <div class="form-group">
                    <label><i class="fas fa-hashtag"></i> NIM</label>
                    <div class="nim-display">
                        <i class="fas fa-id-card"></i>
                        <span class="nim-label">NIM:</span>
                        <span>{{ $mahasiswa->nim }}</span>
                        <span style="margin-left: auto; font-size: 12px; color: var(--warning);">
                            <i class="fas fa-lock"></i> Tidak dapat diubah
                        </span>
                    </div>
                    <div class="input-hint">Nomor Induk Mahasiswa tidak dapat diubah setelah pendaftaran</div>
                </div>
                
                <div class="form-row">
                    <div class="form-group" id="nama-group">
                        <label for="nama"><i class="fas fa-user"></i> Nama Lengkap</label>
                        <input type="text" 
                               name="nama" 
                               id="nama" 
                               class="form-control" 
                               value="{{ $mahasiswa->nama }}"
                               placeholder="Contoh: Ahmad Fauzi"
                               maxlength="100"
                               required>
                        <div class="input-hint">Nama lengkap mahasiswa (maksimal 100 karakter)</div>
                        <div class="character-count" id="nama-counter">{{ strlen($mahasiswa->nama) }}/100</div>
                        <div class="validation-message" id="nama-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Nama harus diisi</span>
                        </div>
                    </div>
                    
                    <div class="form-group" id="kelas-group">
                        <label for="kelas"><i class="fas fa-school"></i> Kelas</label>
                        <input type="text" 
                               name="kelas" 
                               id="kelas" 
                               class="form-control" 
                               value="{{ $mahasiswa->kelas }}"
                               placeholder="Contoh: A, B, C atau 4IA01"
                               maxlength="10"
                               required>
                        <div class="input-hint">Kode kelas mahasiswa (maksimal 10 karakter)</div>
                        <div class="character-count" id="kelas-counter">{{ strlen($mahasiswa->kelas) }}/10</div>
                        <div class="validation-message" id="kelas-error">
                            <i class="fas fa-exclamation-circle"></i>
                            <span>Kelas harus diisi</span>
                        </div>
                    </div>
                </div>
                
                <div class="form-group" id="matakuliah-group">
                    <label for="matakuliah"><i class="fas fa-book"></i> Mata Kuliah</label>
                    <input type="text" 
                           name="matakuliah" 
                           id="matakuliah" 
                           class="form-control" 
                           value="{{ $mahasiswa->matakuliah }}"
                           placeholder="Contoh: Pemrograman Web"
                           maxlength="100"
                           required>
                    <div class="input-hint">Nama mata kuliah (maksimal 100 karakter)</div>
                    <div class="character-count" id="matakuliah-counter">{{ strlen($mahasiswa->matakuliah) }}/100</div>
                    <div class="validation-message" id="matakuliah-error">
                        <i class="fas fa-exclamation-circle"></i>
                        <span>Mata kuliah harus diisi</span>
                    </div>
                </div>
                
                <div class="last-updated">
                    <i class="fas fa-clock"></i> Terakhir diperbarui: {{ date('d F Y, H:i') }}
                </div>
                
                <div class="button-group">
                    <button type="submit" class="btn-submit">
                        <i class="fas fa-sync-alt"></i> Perbarui Data
                    </button>
                    <button type="button" class="btn-reset" id="resetButton">
                        <i class="fas fa-undo"></i> Reset
                    </button>
                    <a href="{{ route('mahasiswa.index') }}" class="btn-cancel">
                        <i class="fas fa-times"></i> Batal
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
            // Simpan nilai awal form untuk reset
            const initialValues = {
                nama: document.getElementById('nama').value,
                kelas: document.getElementById('kelas').value,
                matakuliah: document.getElementById('matakuliah').value
            };
            
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
            }
            
            // Setup counter untuk setiap field
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
                } else if (fieldId === 'nama' && value.length < 2) {
                    isValid = false;
                    errorMessage = 'Nama minimal 2 karakter';
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
            
            // Fungsi reset form
            document.getElementById('resetButton').addEventListener('click', function() {
                Swal.fire({
                    title: 'Reset Form?',
                    text: "Semua perubahan yang belum disimpan akan hilang. Yakin ingin reset?",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#f59e0b',
                    cancelButtonColor: '#d33',
                    confirmButtonText: 'Ya, Reset!',
                    cancelButtonText: 'Batal',
                    reverseButtons: true
                }).then((result) => {
                    if (result.isConfirmed) {
                        // Reset ke nilai awal
                        document.getElementById('nama').value = initialValues.nama;
                        document.getElementById('kelas').value = initialValues.kelas;
                        document.getElementById('matakuliah').value = initialValues.matakuliah;
                        
                        // Reset counter
                        document.getElementById('nama-counter').textContent = `${initialValues.nama.length}/100`;
                        document.getElementById('kelas-counter').textContent = `${initialValues.kelas.length}/10`;
                        document.getElementById('matakuliah-counter').textContent = `${initialValues.matakuliah.length}/100`;
                        
                        // Reset validasi
                        document.querySelectorAll('.form-group').forEach(group => {
                            group.classList.remove('error', 'success');
                        });
                        
                        document.querySelectorAll('.validation-message').forEach(msg => {
                            msg.classList.remove('show');
                        });
                        
                        // Reset counter color
                        document.querySelectorAll('.character-count').forEach(counter => {
                            counter.classList.remove('warning', 'danger');
                        });
                        
                        Swal.fire(
                            'Berhasil!',
                            'Form telah direset ke nilai awal.',
                            'success'
                        );
                    }
                });
            });
            
            // Deteksi perubahan pada form
            let formChanged = false;
            document.querySelectorAll('.form-control').forEach(input => {
                input.addEventListener('input', function() {
                    formChanged = true;
                });
            });
            
            // Validasi saat form di-submit
            document.getElementById('editMahasiswaForm').addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Validasi semua field
                const fields = ['nama', 'kelas', 'matakuliah'];
                let isValid = true;
                
                fields.forEach(fieldId => {
                    if (!validateField(fieldId)) {
                        isValid = false;
                    }
                });
                
                // Jika valid, submit form
                if (isValid) {
                    // Tampilkan konfirmasi jika ada perubahan
                    if (formChanged) {
                        Swal.fire({
                            title: 'Simpan Perubahan?',
                            text: "Apakah Anda yakin ingin menyimpan perubahan data ini?",
                            icon: 'question',
                            showCancelButton: true,
                            confirmButtonColor: '#f59e0b',
                            cancelButtonColor: '#d33',
                            confirmButtonText: 'Ya, Simpan!',
                            cancelButtonText: 'Batal',
                            reverseButtons: true
                        }).then((result) => {
                            if (result.isConfirmed) {
                                // Tampilkan loading indicator
                                const submitBtn = document.querySelector('.btn-submit');
                                const originalText = submitBtn.innerHTML;
                                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Memperbarui...';
                                submitBtn.disabled = true;
                                
                                // Submit form
                                setTimeout(() => {
                                    this.submit();
                                }, 1500);
                            }
                        });
                    } else {
                        // Tidak ada perubahan, tampilkan pesan
                        Swal.fire({
                            title: 'Tidak Ada Perubahan',
                            text: "Tidak ada perubahan data yang perlu disimpan.",
                            icon: 'info',
                            confirmButtonColor: '#f59e0b',
                            confirmButtonText: 'Baik'
                        });
                    }
                } else {
                    // Tampilkan pesan error validasi
                    Swal.fire({
                        title: 'Validasi Gagal',
                        text: 'Harap periksa kembali data yang Anda masukkan',
                        icon: 'error',
                        confirmButtonColor: '#f59e0b',
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
            
            // Peringatan saat meninggalkan halaman jika ada perubahan
            window.addEventListener('beforeunload', function(e) {
                if (formChanged) {
                    e.preventDefault();
                    e.returnValue = '';
                }
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