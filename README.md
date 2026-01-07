# Project UAS Pemrograman Web

**Nama Mahasiswa**  : Ananda Friezy Eka Cahya
**NIM**             : 312410151
**Mata Kuliah**     : Pemrograman Web


## Aplikasi Manajemen Data Buku Perpustakaan

### Deskripsi Umum

Aplikasi ini merupakan aplikasi web sederhana berbasis PHP Native dengan konsep **OOP (Object Oriented Programming)** dan **arsitektur MVC (Model-View-Controller)**. Aplikasi digunakan untuk mengelola data buku perpustakaan dan dibuat untuk memenuhi tugas **Ujian Akhir Semester (UAS) Pemrograman Web**.

Aplikasi telah dilengkapi dengan sistem login, pembagian role pengguna (Admin dan User), serta fitur CRUD lengkap, pencarian data, dan pagination. Tampilan aplikasi dibuat responsif dengan pendekatan *mobile-first* menggunakan **Bootstrap**.

---

## Fitur Aplikasi

### 1. Autentikasi & Autorisasi

* Login menggunakan username dan password
* Role pengguna:

  * **Admin**: dapat menambah, mengedit, dan menghapus data buku
  * **User**: hanya dapat melihat data buku
* Proteksi halaman menggunakan session

### 2. Manajemen Data Buku (CRUD)

* Tambah data buku
* Tampilkan daftar buku
* Edit data buku
* Hapus data buku

### 3. Pencarian Data

* Pencarian berdasarkan judul buku
* Menggunakan query `LIKE` pada database

### 4. Pagination

* Menampilkan data buku per halaman
* Navigasi halaman otomatis menyesuaikan hasil pencarian

### 5. Desain UI

* Responsive (mobile, tablet, desktop)
* Menggunakan Bootstrap
* Tampilan bersih dan profesional

---

## Struktur Folder Project

```
uas_sem_3/
├── assets/
│   ├── css/bootstrap.min.css
│   └── js/bootstrap.bundle.min.js
├── config/database.php
├── controllers/
│   ├── AuthController.php
│   └── BukuController.php
├── models/
│   ├── UserModel.php
│   └── BukuModel.php
├── views/
│   ├── layouts/main.php
│   ├── auth/login.php
│   └── buku/
│       ├── index.php
│       ├── create.php
│       └── edit.php
├── .htaccess
├── index.php
└── README.md
```

---

## Teknologi yang Digunakan

* PHP Native (OOP)
* MySQL (Database)
* Bootstrap 5
* Apache (.htaccess Routing)
* XAMPP

---

## Instalasi & Cara Menjalankan Aplikasi

1. Aktifkan Apache dan MySQL melalui XAMPP
2. Letakkan folder `uas_sem_3` di dalam direktori `htdocs`
3. Buat database dengan nama `db_buku`
4. Import file SQL ke database
5. Buka browser dan akses:

   ```
   http://localhost/uas_sem_3
   ```

---

## Akun Login Default

### Admin

* Username: **admin**
* Password: **admin123**

### User

* Username: **user**
* Password: **user123**

---

## Dokumentasi Aplikasi

### Screenshot

<img width="1919" height="943" alt="image" src="https://github.com/user-attachments/assets/bd5619f2-5354-41a6-8ff3-3d1c683fff6b" />
<img width="1918" height="943" alt="image" src="https://github.com/user-attachments/assets/9a160d41-d848-4d0a-8e13-b931ca52395f" />
<img width="1919" height="884" alt="image" src="https://github.com/user-attachments/assets/42f3122b-c453-4b58-84b0-18159f687073" />

* Halaman Login
* Halaman Dashboard Buku
* Form Tambah Buku
* Form Edit Buku
* Fitur Pencarian
* Pagination

### Video Demo

* Durasi maksimal: 10 menit
* Platform: YouTube
* Menampilkan:

  * Login
  * CRUD Buku
  * Search
  * Pagination
  * Logout

---

## Kesimpulan

Aplikasi Manajemen Data Buku ini telah memenuhi seluruh ketentuan Project UAS Pemrograman Web, mulai dari penggunaan OOP, routing, sistem login dengan role, CRUD, pencarian, pagination, hingga tampilan responsive. Aplikasi ini siap untuk dipresentasikan dan dikumpulkan sebagai tugas UAS.

---


