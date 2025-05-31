@extends('layout')

@section('title', 'Isi Buku Tamu')

@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-lg-8 col-md-10">
                <div class="card shadow-lg rounded-lg border-0" style="background: linear-gradient(135deg, rgba(255, 255, 255, 0.95), rgba(255, 255, 255, 0.9));">
                    <div class="card-body p-5">
                        <div class="text-center mb-4">
                            <h2 class="text-gradient fw-bold mb-2">✨ Isi Buku Tamu ✨</h2>
                            <p class="text-muted">Tinggalkan pesan indah untuk Dea's Birthday Party</p>
                        </div>

                        @if ($errors->any())
                            <div class="alert alert-danger alert-dismissible fade show custom-alert" role="alert">
                                <div class="d-flex align-items-center">
                                    <i class="fas fa-exclamation-triangle me-2"></i>
                                    <div>
                                        <strong>Oops! Ada kesalahan:</strong>
                                        <ul class="mb-0 mt-1">
                                            @foreach ($errors->all() as $error)
                                                <li>{{ $error }}</li>
                                            @endforeach
                                        </ul>
                                    </div>
                                </div>
                                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>
                        @endif

                        <form action="{{ route('buku-tamu.store') }}" method="POST" class="needs-validation" novalidate>
                            @csrf
                            
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="nama" class="form-label text-gradient fw-semibold">
                                        <i class="fas fa-user me-2"></i>Nama Lengkap
                                    </label>
                                    <input type="text" name="nama" id="nama" class="form-control form-control-custom" 
                                           value="{{ old('nama') }}" required placeholder="Masukkan nama lengkap">
                                    <div class="invalid-feedback">
                                        Nama lengkap wajib diisi.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="email" class="form-label text-gradient fw-semibold">
                                        <i class="fas fa-envelope me-2"></i>Email
                                    </label>
                                    <input type="email" name="email" id="email" class="form-control form-control-custom" 
                                           value="{{ old('email') }}" required placeholder="contoh@email.com">
                                    <div class="invalid-feedback">
                                        Email valid wajib diisi.
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <label for="no_hp" class="form-label text-gradient fw-semibold">
                                        <i class="fas fa-phone me-2"></i>No HP
                                    </label>
                                    <input type="text" name="no_hp" id="no_hp" class="form-control form-control-custom" 
                                           value="{{ old('no_hp') }}" required placeholder="08xxxxxxxxxx">
                                    <div class="invalid-feedback">
                                        Nomor HP wajib diisi.
                                    </div>
                                </div>

                                <div class="col-md-6 mb-4">
                                    <label for="instansi" class="form-label text-gradient fw-semibold">
                                        <i class="fas fa-building me-2"></i>Instansi
                                    </label>
                                    <input type="text" name="instansi" id="instansi" class="form-control form-control-custom" 
                                           value="{{ old('instansi') }}" required placeholder="Nama instansi/organisasi">
                                    <div class="invalid-feedback">
                                        Instansi wajib diisi.
                                    </div>
                                </div>
                            </div>

                            <div class="mb-4">
                                <label for="pesan" class="form-label text-gradient fw-semibold">
                                    <i class="fas fa-heart me-2"></i>Pesan & Ucapan
                                </label>
                                <textarea name="pesan" id="pesan" class="form-control form-control-custom" 
                                          rows="4" required placeholder="Tulis pesan dan ucapan terbaik untuk Dea...">{{ old('pesan') }}</textarea>
                                <div class="invalid-feedback">
                                    Pesan wajib diisi.
                                </div>
                                <small class="text-muted">Minimum 10 karakter</small>
                            </div>

                            <div class="d-grid gap-3 mt-5">
                                <button type="submit" class="btn btn-custom btn-lg py-3">
                                    <i class="fas fa-paper-plane me-2"></i>
                                    Kirim Ucapan Sekarang
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('styles')
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        body {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: 100vh;
        }

        .text-gradient {
            background: linear-gradient(135deg, #ff6b9d, #c44569);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .btn-custom {
            background: linear-gradient(135deg, #ff6b9d, #ff8a80);
            color: white;
            font-weight: 600;
            border-radius: 50px;
            border: none;
            box-shadow: 0 8px 25px rgba(255, 107, 157, 0.3);
            transition: all 0.3s ease;
            position: relative;
            overflow: hidden;
        }

        .btn-custom::before {
            content: '';
            position: absolute;
            top: 0;
            left: -100%;
            width: 100%;
            height: 100%;
            background: linear-gradient(90deg, transparent, rgba(255, 255, 255, 0.2), transparent);
            transition: left 0.5s;
        }

        .btn-custom:hover::before {
            left: 100%;
        }

        .btn-custom:hover {
            background: linear-gradient(135deg, #f093fb, #f5576c);
            transform: translateY(-2px);
            box-shadow: 0 12px 35px rgba(255, 107, 157, 0.4);
        }

        .btn-outline-secondary {
            border: 2px solid #6c757d;
            color: #6c757d;
            border-radius: 50px;
            font-weight: 600;
            transition: all 0.3s ease;
        }

        .btn-outline-secondary:hover {
            background: #6c757d;
            color: white;
            transform: translateY(-1px);
        }

        .form-control-custom {
            font-size: 1.1rem;
            padding: 15px 20px;
            border: 2px solid #e9ecef;
            border-radius: 15px;
            transition: all 0.3s ease;
            background: rgba(255, 255, 255, 0.9);
        }

        .form-control-custom:focus {
            border-color: #ff6b9d;
            box-shadow: 0 0 0 0.2rem rgba(255, 107, 157, 0.25);
            background: white;
        }

        .card {
            border-radius: 25px;
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .custom-alert {
            border-radius: 15px;
            border: none;
            background: linear-gradient(135deg, #ffebee, #fce4ec);
            border-left: 5px solid #ff6b9d;
        }

        .form-label {
            font-size: 1rem;
            margin-bottom: 8px;
        }

        /* Animasi untuk form */
        .form-control-custom {
            transform: translateY(0);
            transition: all 0.3s ease;
        }

        .form-control-custom:focus {
            transform: translateY(-2px);
        }

        /* Responsive */
        @media (max-width: 768px) {
            .card-body {
                padding: 2rem !important;
            }
            
            .form-control-custom {
                font-size: 1rem;
                padding: 12px 15px;
            }
            
            .btn-lg {
                padding: 12px 20px !important;
            }
        }

        /* Validasi form */
        .was-validated .form-control:invalid {
            border-color: #dc3545;
        }

        .was-validated .form-control:valid {
            border-color: #28a745;
        }
    </style>
@endpush

@push('scripts')
    <script>
        // Form validation
        (function() {
            'use strict';
            window.addEventListener('load', function() {
                var forms = document.getElementsByClassName('needs-validation');
                var validation = Array.prototype.filter.call(forms, function(form) {
                    form.addEventListener('submit', function(event) {
                        if (form.checkValidity() === false) {
                            event.preventDefault();
                            event.stopPropagation();
                        }
                        form.classList.add('was-validated');
                    }, false);
                });
            }, false);
        })();

        // Character counter for message
        document.getElementById('pesan').addEventListener('input', function() {
            const maxLength = 500;
            const currentLength = this.value.length;
            
            if (!document.querySelector('.char-counter')) {
                const counter = document.createElement('small');
                counter.className = 'char-counter text-muted float-end';
                this.parentNode.appendChild(counter);
            }
            
            document.querySelector('.char-counter').textContent = `${currentLength}/${maxLength} karakter`;
            
            if (currentLength > maxLength) {
                this.value = this.value.substring(0, maxLength);
            }
        });
    </script>
@endpush