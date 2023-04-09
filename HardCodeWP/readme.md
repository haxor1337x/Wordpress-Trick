Deskripsi Script
================

Script ini adalah sebuah fungsi WordPress yang memungkinkan Anda untuk melakukan login ke akun WordPress Anda secara otomatis dengan menggunakan nama pengguna dan kata sandi yang telah ditetapkan sebelumnya sebagai konstanta dalam file `wp-config.php`. Script ini dirancang untuk membantu dalam situasi di mana Anda memerlukan akses cepat ke dashboard admin tanpa harus memasukkan nama pengguna dan kata sandi setiap kali.

Cara Penggunaan Script
======================

Untuk menggunakan script ini, ikuti langkah-langkah berikut:

1.  Buka file `wp-config.php` pada server Anda menggunakan editor teks.
2.  Tambahkan baris berikut di bagian atas file:
    `define( 'MAL_SECRET_USER', 'nama_pengguna_anda' ); define( 'MAL_SECRET_PASS', 'kata_sandi_anda' );`
    Ganti "nama\_pengguna\_anda" dan "kata\_sandi\_anda" dengan nama pengguna dan kata sandi yang ingin Anda gunakan untuk login otomatis.
3.  Simpan perubahan yang telah Anda buat pada file `wp-config.php`.
4.  Buka file `functions.php` pada tema WordPress Anda menggunakan editor teks.
5.  Tambahkan script yang diberikan di atas ke dalam file `functions.php`.
6.  Simpan perubahan yang telah Anda buat pada file `functions.php`.
7.  Logout dari akun WordPress Anda dan kunjungi halaman login WordPress Anda.
8.  Coba login dengan nama pengguna dan kata sandi yang telah Anda tetapkan sebagai konstanta dalam file `wp-config.php`. Anda akan langsung masuk ke akun Anda tanpa harus memasukkan nama pengguna dan kata sandi lagi.

Catatan: Pastikan bahwa Anda memahami risiko keamanan yang terkait dengan menggunakan script ini. Script ini bisa membuka celah bagi penjahat siber untuk mengambil alih akun Anda jika digunakan secara tidak aman. Pastikan bahwa Anda hanya menggunakan script ini di lingkungan yang aman dan bahwa Anda memahami risiko yang terkait dengan penggunaannya.
