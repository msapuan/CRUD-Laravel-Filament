<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>

## About This App

Aplikasi CRUD sederhana yang dilengkapi dengan fitur Login Multiuser dibuat menggunakan `Laravel 11.x` & `Filament 3.x` serta `MySQL`. Aplikasi ini dibangun dengan tujuan untuk pembelajaran atau latihan.

## Prerequisite 

Sebelum dapat menggunakan aplikasi ini anda sebaiknya menyiapkan beberapa tool untuk dapat menunjang keberhasilan program ini dapat dijalankan yaitu :

- Composer [link](https://getcomposer.org/download/)
- Node.js [link](https://nodejs.org/en/download/prebuilt-installer/current)
- Laragon [link](https://laragon.org/download/)

## How to Run 🎉✨

1. Buat file `.env` berdasarkan dari file `.env.example` dengan cara :

```bash
copy .env.example .env
```

atau kalau kalian menggunakan Linux bisa gunakan ini :

```bash
cp .env.example .env
```

2. Lalu pada file `.env` ganti atau sesuaikan seperti berikut :

```php
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=sim_epro
DB_USERNAME=root
DB_PASSWORD=
```

Pada bagian `DB_DATABASE` sesuaikan dengan kebutuhan masing-masing.

3. Berikutnya, kita instal package-package yang diinstal dalam composer di mana package tersebut akan disimpan dalam folder vendor. Jalankan perintah berikut di dalam command prompt atau terminal :

```bash
composer install
```

4. Jika terdapat error atau gagal bisa jalankan perintah ini terlebih dahulu :

```bash
composer update
```

5. Setelah berhasil, jalankan perintah dibawah ini. Perintah ini akan meng-generate keyuntuk dimasukkan ke `APP_KEY` di file `.env` :

```bash
php artisan key:generate
```

6. Lanjutkan dengan menjalankan perintah dibawah ini. Perintah ini akan meng-generate table yang dimiliki database aplikasi, tapi terlebih dahulu pastikan kalau aplikasi tersebut menyediakan file-file migration di folder `database/migrations`.

```bash
php artisan migrate
```

7. Terakhir untuk menjalakan aplikasi pada browser, jalankan perintah dibawah ini :

```bash
php artisan serve
```

## 📸 Screenshoot

- Login Page


- Dashboard Page