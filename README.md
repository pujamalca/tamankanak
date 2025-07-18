# TK Ceria - Website Sekolah TK

Website modern untuk Taman Kanak-kanak dengan fitur lengkap dan mudah dikustomisasi.

## 🚀 Fitur Utama

### Frontend
- **Landing Page Modern** - Desain menarik dengan animasi dan efek visual
- **Responsive Design** - Optimal di semua perangkat
- **Customizable Colors** - Warna dapat diatur dari backend
- **Blog/Artikel** - Sistem blog lengkap dengan kategori
- **Galeri Foto** - Showcase kegiatan sekolah
- **Formulir Pendaftaran Online** - Pendaftaran siswa baru

### Backend (Admin Panel)
- **Dashboard Admin** - Powered by Filament
- **Manajemen Konten** - Kelola semua konten website
- **Manajemen Guru** - Data guru dan staff
- **Manajemen Kelas** - Informasi kelas dan kapasitas
- **Manajemen Siswa** - Database siswa lengkap
- **Pendaftaran Online** - Review dan kelola pendaftaran
- **Pengaturan Website** - Kustomisasi tampilan

## 📋 Requirements

- PHP 8.2 atau lebih tinggi
- Composer
- MySQL/MariaDB
- Node.js & NPM
- Laravel 10.x

## 🛠️ Instalasi

### 1. Clone Repository
```bash
git clone https://github.com/yourusername/tk-website.git
cd tk-website
```

### 2. Install Dependencies
```bash
composer install
npm install
```

### 3. Setup Environment
```bash
cp .env.example .env
php artisan key:generate
```

### 4. Konfigurasi Database
Edit file `.env` dan sesuaikan pengaturan database:
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=tk_ceria
DB_USERNAME=root
DB_PASSWORD=
```

### 5. Migrasi Database
```bash
php artisan migrate
php artisan db:seed
```

### 6. Install Filament
```bash
php artisan filament:install --panels
```

### 7. Build Assets
```bash
npm run build
```

### 8. Storage Link
```bash
php artisan storage:link
```

### 9. Jalankan Server
```bash
php artisan serve
```

Website akan berjalan di `http://localhost:8000`

## 👤 Login Admin

- **URL**: `http://localhost:8000/admin`
- **Email**: admin@tkceria.sch.id
- **Password**: password

## 🎨 Kustomisasi

### Mengubah Warna
1. Login ke admin panel
2. Masuk ke menu **Pengaturan**
3. Cari pengaturan `primary_color` dan `secondary_color`
4. Ubah nilai hex color sesuai keinginan

### Mengubah Konten
Semua konten dapat diubah melalui admin panel:
- **Settings** - Informasi umum, kontak, sosial media
- **Pages** - Halaman statis
- **Blog Posts** - Artikel dan berita
- **Gallery** - Foto kegiatan

## 📁 Struktur Folder

```
tk-website/
├── app/
│   ├── Filament/         # Filament resources
│   ├── Http/
│   │   └── Controllers/  # Laravel controllers
│   └── Models/           # Eloquent models
├── database/
│   ├── migrations/       # Database migrations
│   └── seeders/         # Database seeders
├── resources/
│   └── views/           # Blade templates
├── routes/
│   └── web.php          # Web routes
└── public/              # Public assets
```

## 🔧 Konfigurasi Tambahan

### Email Configuration
Untuk notifikasi email, konfigurasi di `.env`:
```env
MAIL_MAILER=smtp
MAIL_HOST=smtp.gmail.com
MAIL_PORT=587
MAIL_USERNAME=your-email@gmail.com
MAIL_PASSWORD=your-app-password
MAIL_ENCRYPTION=tls
```

### Upload Limits
Untuk file upload yang lebih besar, edit `php.ini`:
```ini
upload_max_filesize = 10M
post_max_size = 10M
```

## 📱 Fitur Mobile

Website sudah responsive dan mobile-friendly. Fitur khusus mobile:
- Touch-friendly navigation
- Optimized images
- Fast loading
- PWA ready (dapat ditambahkan)

## 🔒 Keamanan

- CSRF Protection
- SQL Injection Prevention
- XSS Protection
- Authentication & Authorization
- Regular security updates

## 🚀 Deployment

### Shared Hosting
1. Upload semua file kecuali folder `node_modules`
2. Set document root ke folder `public`
3. Import database
4. Update `.env` file
5. Run `composer install --optimize-autoloader --no-dev`

### VPS/Cloud
1. Clone repository
2. Install dependencies
3. Configure web server (Nginx/Apache)
4. Setup SSL certificate
5. Configure supervisor untuk queue (opsional)

## 📝 Maintenance

### Update Dependencies
```bash
composer update
npm update
```

### Clear Cache
```bash
php artisan cache:clear
php artisan config:clear
php artisan view:clear
```

### Backup Database
```bash
php artisan backup:run
```

## 🆘 Troubleshooting

### Error 500
- Check file permissions (storage dan bootstrap/cache harus writable)
- Check `.env` configuration
- Run `php artisan config:cache`

### Gambar tidak muncul
- Pastikan sudah run `php artisan storage:link`
- Check folder permissions

### Admin panel tidak bisa diakses
- Clear cache: `php artisan filament:cache-components`
- Check route cache: `php artisan route:clear`

## 📞 Support

Jika ada pertanyaan atau masalah:
- Email: support@tkceria.sch.id
- Documentation: [Link to docs]
- Issues: [GitHub Issues]

## 📄 License

This project is licensed under the MIT License.

---

**Made with ❤️ for TK Ceria**