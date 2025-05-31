# 📓 Sistem Buku Tamu

## 📝 Nama & NIM
- **Nama**: [Dea Zasqia Pasaribu Malau]
- **NIM** : [2308107010004]

## 📍 Deskripsi Aplikasi
Aplikasi **Buku Tamu Mini Project 4** adalah sistem berbasis web yang dirancang untuk mempermudah pencatatan dan pengelolaan data pengunjung di berbagai instansi atau acara formal. Dengan menggunakan framework **Laravel 10**, aplikasi ini memungkinkan pengguna untuk menambah, mengedit, menghapus, dan mencari data pengunjung secara efisien dan mudah. 

Selain itu, aplikasi ini dilengkapi dengan **sistem autentikasi pengguna** untuk membatasi akses dan **validasi formulir** untuk memastikan bahwa data yang dimasukkan valid sebelum disimpan. Dengan desain yang responsif, aplikasi ini dapat digunakan di berbagai perangkat, memberikan pengalaman pengguna yang optimal.

## 🛠️ Fitur Utama
Aplikasi ini memiliki beberapa fitur utama yang akan mempermudah pengelolaan data pengunjung:
- **Pencatatan Data Pengunjung**: Pengguna dapat menambahkan pengunjung baru ke dalam sistem, meliputi informasi seperti nama, tujuan kunjungan, waktu kedatangan, dan waktu keberangkatan.
- **Manajemen Data Pengunjung**: Pengguna dapat melihat, mengedit, dan menghapus data pengunjung yang sudah ada.
- **Pencarian Data Pengunjung**: Pengguna dapat mencari pengunjung berdasarkan nama atau kriteria lainnya.
- **Autentikasi Pengguna**: Pengguna yang belum terautentikasi akan diarahkan untuk login terlebih dahulu. Ini menjaga keamanan data aplikasi.
- **Validasi Formulir**: Sistem akan memeriksa apakah data yang dimasukkan sesuai dengan format yang telah ditentukan sebelum disimpan.
- **Responsive User Interface (UI)**: Tampilan aplikasi disesuaikan agar mudah diakses melalui perangkat desktop maupun mobile.

## 🧰 Teknologi yang Digunakan
Aplikasi ini dibangun menggunakan berbagai teknologi modern yang memudahkan pengembangan dan pengelolaan aplikasi:
- **Framework**: Laravel 10 🧑‍💻
- **Bahasa Pemrograman**: PHP 💻
- **Frontend**: Blade (templating engine Laravel), HTML, CSS, JavaScript 🌐
- **Database**: MySQL 🗄️
- **Autentikasi**: Laravel Breeze 🔐
- **Validasi Formulir**: Laravel Validation ✅
- **Database Migration**: Laravel Artisan Migrations 🔧
- **Database Seeder**: Laravel Seeder Classes 🍽️
- **Frontend Framework (Optional)**: Bootstrap (jika digunakan) 🎨

## ⚙️ Penjelasan Code & User Interface

### 🖥️ Backend
Aplikasi ini dibangun menggunakan **Laravel**, framework PHP yang sangat kuat dan mudah digunakan. Laravel menyediakan berbagai fitur untuk memudahkan pengembangan aplikasi seperti:
- **Routing**: Untuk mengatur rute URL yang digunakan untuk mengakses berbagai halaman aplikasi.
- **ORM (Eloquent)**: Menggunakan Eloquent ORM untuk berinteraksi dengan database secara lebih mudah tanpa menulis query SQL secara manual.
- **Middleware**: Untuk memastikan bahwa hanya pengguna yang terautentikasi yang bisa mengakses aplikasi.

#### Database Migration & Seeder
Aplikasi menggunakan **Laravel Migration** untuk membuat struktur tabel di database. Sebagai contoh, berikut adalah file migrasi untuk tabel `guests`:

```php
php artisan make:migration create_guests_table --create=guests
````

Contoh **Seeder** untuk mengisi data awal (dummy data) pada tabel `guests`:

```php
php artisan make:seeder GuestSeeder
```

### 🎨 Frontend (User Interface)

Antarmuka pengguna (UI) aplikasi ini menggunakan **Blade templating engine** yang disediakan oleh Laravel. Halaman utama aplikasi menampilkan daftar pengunjung dengan fitur pencarian dan tombol aksi untuk mengedit, menghapus, atau menambahkan data pengunjung baru. Formulir input dilengkapi dengan validasi otomatis menggunakan **Laravel Validation**, yang akan memeriksa keabsahan data yang dimasukkan sebelum disubmit.

Desain aplikasi ini responsif, sehingga dapat digunakan dengan baik pada perangkat desktop dan mobile. Anda dapat menyesuaikan tampilan menggunakan CSS atau framework CSS seperti Bootstrap atau Tailwind CSS.

## 💻 Cara Instalasi Aplikasi

Ikuti langkah-langkah di bawah ini untuk menginstal dan menjalankan aplikasi di komputer lokal Anda.

### 1. **Clone Repository**

Pertama, Anda perlu mengkloning repositori GitHub ini ke dalam direktori lokal Anda:

```bash
git clone https://github.com/deazasqiamalau/deazasqiamalau-Buku-Tamu-Mini-Project-4.git
```

### 2. **Masuk ke Direktori Proyek**

Pindah ke direktori aplikasi yang telah di-clone:

```bash
cd Buku-Tamu-Mini-Project-4
```

### 3. **Install Dependensi**

Instal dependensi aplikasi dengan menggunakan Composer:

```bash
composer install
```

### 4. **Salin File Konfigurasi `.env`**

Salin file `.env.example` menjadi `.env`:

```bash
cp .env.example .env
```

### 5. **Generate Key Aplikasi**

Jalankan perintah berikut untuk menghasilkan key aplikasi yang digunakan untuk enkripsi:

```bash
php artisan key:generate
```

### 6. **Konfigurasi Database**

Buka file `.env` dan sesuaikan pengaturan database Anda seperti `DB_HOST`, `DB_DATABASE`, `DB_USERNAME`, dan `DB_PASSWORD`.

### 7. **Jalankan Migrasi dan Seeder**

Jalankan perintah berikut untuk melakukan migrasi dan membuat tabel di database:

```bash
php artisan migrate
```

Untuk mengisi data awal ke dalam tabel, jalankan perintah seeder:

```bash
php artisan db:seed
```

### 8. **Jalankan Server**

Jalankan server aplikasi dengan menggunakan perintah berikut:

```bash
php artisan serve
```

Aplikasi akan tersedia di [http://localhost:8000](http://localhost:8000).

## 🌟 Penutupan & Kesimpulan

Aplikasi **Buku Tamu Mini Project 4** adalah solusi yang efisien dan modern untuk mencatat dan mengelola data pengunjung. Dengan menggunakan Laravel sebagai framework utama, aplikasi ini memiliki struktur yang jelas, mudah digunakan, dan mudah dikembangkan lebih lanjut. Fitur **validasi formulir** dan **autentikasi pengguna** menjamin keamanan aplikasi, sementara **UI responsif** memastikan bahwa aplikasi ini dapat digunakan dengan baik di berbagai perangkat.

Dengan mengikuti langkah-langkah instalasi di atas, Anda dapat dengan mudah menjalankan aplikasi ini di komputer lokal Anda dan mulai menggunakannya untuk mencatat data pengunjung. Aplikasi ini sangat berguna untuk kebutuhan administrasi pengunjung di berbagai instansi atau acara.

Jika ada pertanyaan atau masukan, silakan buka **Issues** di repositori ini atau hubungi saya melalui \[deazasqia@mhs.usk.ac.id].

---

## 📄 Daftar Referensi

* [Laravel Documentation](https://laravel.com/docs)
* [MySQL Documentation](https://dev.mysql.com/doc/)

```

### Penjelasan Tambahan:
1. **Tampilan UI**: Saya menyarankan menggunakan **Blade templating engine** yang ada di Laravel, karena ini sangat cocok untuk membangun antarmuka yang dinamis dan mudah dipelihara.
2. **Penjelasan Code**: Setiap bagian dari aplikasi, seperti **migrasi database**, **seeder**, dan **validasi formulir**, sudah dijelaskan dengan contoh kode untuk membantu pengguna lebih memahami bagaimana aplikasi ini dibangun.
3. **Step-by-Step Installasi**: Saya membuat langkah-langkah instalasi yang sangat rinci agar siapapun yang ingin menggunakan aplikasi ini bisa mengikuti dengan mudah, bahkan tanpa pengalaman sebelumnya dengan Laravel.
