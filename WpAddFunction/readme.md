Penjelasan Script Wordpress
===========================

Deskripsi
---------

Script ini adalah script PHP yang digunakan untuk membuat akun admin baru pada Wordpress, dengan username, password, dan email yang telah ditentukan. Selain itu, script ini juga memfilter query yang mengambil data user agar tidak menampilkan user dengan username 'wpadminas', serta menambahkan filter pada view user agar menampilkan jumlah administrator yang ada.

Cara Penggunaan
---------------

1.  Buka file functions.php pada tema Wordpress yang digunakan
2.  Salin dan tempelkan script di atas ke dalam file functions.php
3.  Ganti nilai variabel $user, $pass, dan $email pada fungsi wpb\_admin\_account() dengan nilai yang diinginkan untuk akun admin baru
4.  Simpan file functions.php

Setelah script di atas diterapkan, maka akun admin baru akan dibuat pada Wordpress dengan username, password, dan email yang telah ditentukan. Selain itu, query yang mengambil data user tidak akan menampilkan user dengan username 'wpadminas' (ganti dengan username yang anda isi, ini berada pada line 19), dan view user akan menampilkan jumlah administrator yang ada.
