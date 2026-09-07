# Pertemuan 4: Laravel Environment Setup

**Nama:** Disha Dwi Arandi  
**NPM:** 2410631250048  
**Kelas:** 5C  
**Mata Kuliah:** Praktikum Pemrograman Web  

---

## Deskripsi Project
Project ini adalah project inisialisasi Laravel 9 (`library-system`) yang terhubung dengan database MySQL (XAMPP).

## Prasyarat & Perangkat
- **PHP:** 8.1+
- **Composer**
- **Laravel Framework:** 9.x
- **Database:** MySQL (XAMPP)

## Langkah Instalasi & Konfigurasi
Jalankan perintah berikut secara berurutan:

```bash
# 1. Clone repository & masuk folder
git clone [https://github.com/Dishada/library-system.git](https://github.com/Dishada/library-system.git)
cd library-system

# 2. Install dependensi composer
composer install --ignore-platform-req=ext-fileinfo

# 3. Konfigurasi .env (sesuaikan database ke library_system)
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=library_system
DB_USERNAME=root
DB_PASSWORD=

# 4. Jalankan migrasi database
php artisan migrate

# 5. Jalankan lokal server
php artisan serve