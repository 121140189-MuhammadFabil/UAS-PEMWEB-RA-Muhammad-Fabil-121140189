# UAS-PEMWEB-RA-Muhammad-Fabil-121140189
UAS Pemrograman Web RA | Muhammad Fabil-121140189


Bagian 1: Client-side Programming (Bobot: 30%)
1.1 (15%) Buatlah sebuah halaman web sederhana yang memanfaatkan JavaScript untuk melakukan manipulasi DOM.
Panduan:
- Buat form input dengan minimal 4 elemen input (teks, checkbox, radio, dll.)
- Menampilkan data dari server kedalam sebuah halaman menggunakan tag `table`
1.2 (15%) Buatlah beberapa event untuk menghandle interaksi pada halaman web
Panduan:
- Tambahkan minimal 3 event yang berbeda untuk menghandle form pada 1.1
- Implementasikan JavaScript untuk validasi setiap input sebelum diproses oleh PHP

PENJELASAN 1.1

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/d10a5328-6c1b-4c32-a103-2b6e9cf439d0)

di sini saya menggunakan 4 elemen input yaitu:
1. input teks pada input nama dan prodi
2. radio (option) pada input jalur penerimaan
3. (select)/dropdown pada input angkatan
4. email pada input email

PENJELASAN 1.2

saya menggunakan 3 event pada script.js yaitu

pertama : ![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/6950d555-c0e2-4290-a663-ee66a9e2b3bb)

Event ini terjadi saat DOM telah sepenuhnya dimuat. Ketika itu terjadi, fungsi fetchDataFromServer akan dipanggil.

kedua : ![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/59aa49fa-3a08-42be-8e71-aeed45a7c2ed)

Ini adalah event click pada tombol 'Edit'. Saat tombol ini diklik, fungsi anonim yang mengarahkan ke 'edit.php' dengan parameter 'id' akan dipanggil

ketiga : ![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/2e91f815-62d8-48f4-8859-7bf150a0ad35)

ini adalah event yang terjadi ketika nilai dropdown angkatan berubah (change). Saat itu terjadi, fungsi validateAngkatan akan dipanggil.


2.1 (20%) Implementasikan script PHP untuk mengelola data dari formulir pada Bagian 1 menggunakan variabel global seperti `$_POST` atau `$_GET`. Tampilkan hasil pengolahan data ke layar.

Panduan:
- Gunakan metode POST atau GET pada formulir.
- Parsing data dari variabel global dan lakukan validasi disisi server
- Simpan ke basisdata termasuk jenis browser dan alamat IP pengguna
2.2 (10%) Buatlah sebuah objek PHP berbasis OOP yang memiliki minimal dua metode dan gunakan objek tersebut dalam skenario tertentu pada halaman web Anda.

Panduan:
- Objek yang dibuat harus terkait dengan konteks pengembangan web saat ini.

PENJELASAN 2.1

saya menggunakan metode POST pada index.php dan edit php 
![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/b99d089a-33f2-434b-89c3-0eef9cf00085)
![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/8185f2a1-ed30-4aec-b967-99715af8a4e5)

Parsing data dari variabel global dan validasi:

1.Pada proses.php, saya melakukan validasi dan pengolahan data dari variabel global $_POST

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/f4b9edce-f7e7-4251-9d6e-bdc989171219)

2. Validasi
Fungsi validateInput digunakan untuk membersihkan dan memvalidasi input.

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/393932f1-3a12-4cae-b25c-2a49610b3628)

Bagian 3: Database Management (Bobot: 20%)
3.1 (5%) Buatlah sebuah tabel pada database MySQL
Panduan:
- Lampirkan langkah-langkah dalam membuat basisdata dengan syntax basisdata
3.2 (5%) Buatlah konfigurasi koneksi ke database MySQL pada file PHP. Pastikan koneksi berhasil dan dapat diakses.
Panduan:
- Gunakan konstanta atau variabel untuk menyimpan informasi koneksi (host, username, password, nama database).
3.3 (10%) Lakukan manipulasi data pada tabel database dengan menggunakan query SQL. Misalnya, tambah data, ambil data, atau update data.
Panduan:
- Gunakan query SQL yang sesuai dengan skenario yang diberikan.

1. langkah membuat database

saya menggunakan query sebagai berikut untuk membuat databasenya :

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/e411602c-73a7-4c8a-a3e6-b5e998776d63)

2. untuk konfigurasi koneksi ke database saya menggunakan konfigurasi sebagai berikut:

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/f5d9af9b-1386-48e7-b809-4e75761d65ec)

3. untuk manipulasi data saya menggunakan update pada update.php untuk mengedit data :
![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/e978400f-23a9-4854-bdb6-3290d2524a04)


Bagian 4: State Management (Bobot: 20%)
4.1 (10%) Buatlah skrip PHP yang menggunakan session untuk menyimpan dan mengelola state pengguna. Implementasikan logika yang memanfaatkan session.
Panduan:
- Gunakan `session_start()` untuk memulai session.
- Simpan informasi pengguna ke dalam session.
4.2 (10%) Implementasikan pengelolaan state menggunakan cookie dan browser storage pada sisi client menggunakan JavaScript.
Panduan:
- Buat fungsi-fungsi untuk menetapkan, mendapatkan, dan menghapus cookie.
- Gunakan browser storage untuk menyimpan informasi secara lokal

4.1 Session start pada php
![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/45b88e6c-f4fb-4c6d-9d65-d2c6c655360b)

4.2 Implementasi Cookie
![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/30c33ce3-f285-42e1-8511-736019c3003f)


Bagian Bonus: Hosting Aplikasi Web (Bobot: 20%)
Bagian bonus ini akan memberikan bobot tambahan 20% jika Anda berhasil meng-host aplikasi web yang Anda buat. Jawablah pertanyaan-pertanyaan berikut:

(5%) Apa langkah-langkah yang Anda lakukan untuk meng-host aplikasi web Anda?
(5%) Pilih penyedia hosting web yang menurut Anda paling cocok untuk aplikasi web Anda. Berikan alasan Anda.
(5%) Bagaimana Anda memastikan keamanan aplikasi web yang Anda host?
(5%) Jelaskan konfigurasi server yang Anda terapkan untuk mendukung aplikasi web Anda.


Bonus 1. langkah-langkah host 
saya menggunakan [id.000webhost.com](https://id.000webhost.com/)
berikut langkah-langkahnya:

1. login
2. masuk ke file manager

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/4a36fcd9-fd25-4f81-8642-976ea87c1eff)

3. upload semua code pada folder public_html

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/03ec52d0-a885-4c31-bfa6-123ce13b8983)

4. lalu upload dan konfigurasi database

![image](https://github.com/121140189-MuhammadFabil/UAS-PEMWEB-RA-Muhammad-Fabil-121140189/assets/148723984/93eb9979-bc56-411d-b844-f2544beb759f)

Bonus 2 . Saya memilih https://id.000webhost.com/ untuk tempat saya hosting website UAS Pewmweb ini karena mudah, gratis, dan termasuk ringan untuk akses servernya, cukup cepat juga, jadi cocok untuk saya melakuka hosting di sini

Bonus 3. kita dapat memastikan keaman web dengan melakukan hal berikut:
1. Enkripsi dan HTTPS
2. Validasi Input
3. Otentikasi dan manajemen akses
4. Pemantauan dan pemeliharaan rutin

Bonus 4. 

a. untuk database menggunakan extension MySQLi pada MySQL
b. menggunakan htaccess
c. pengelolaan sesi menggunakan php





