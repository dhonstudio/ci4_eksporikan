# CI4 Ekspor Ikan

CI4 Ekspor Ikan adalah landing page yang dibuat menggunakan framework CodeIgniter 4.

## Yang dapat dilakukan user

- [ ] User dapat melihat tampilan halaman Beranda

## Yang dapat dilakukan developer

- [ ] Developer dapat memilih branch `local` untuk melakukan uji coba atas perubahan yang dibuat pada localhost; branch `master` untuk melakukan uji coba di server development; atau branch `main` untuk menetapkan landing page di server production

## Yang harus dilakukan developer

- [ ] Developer harus memastikan ketersediaan folder `system` sesuai dengan `$systemDirectory` pada `app/Config/Paths.php`; `__DIR__ . '/../../system'` berarti folder system berada pada root project ini, untuk setiap satu level folder di atasnya, tambahkan `../` sebelum `system`
- [ ] Developer harus memastikan seluruh `==================================== MUST BE SET ====================================` pada `app/Controllers/BaseController.php` sudah diset dan `==================================== MUST BE RUN ====================================` sudah dijalankan sesuai kebutuhan
- [ ] Developer harus melakukan langkah berikut untuk pengembangan lebih lanjut di Git: menambahkan konfigurasi user, jalankan perintah `git config user.name "nama_user"` dan `git config user.email "email@email.com"`; untuk melakukan commit berikutnya, jalankan perintah `git config --global alias.add-commit '!git add -A && git commit'`, kemudian `git add-commit -m "catatan commit"`; untuk mengunggah ke dalam Git Cloud, jalankan perintah `git remote set-url origin <url>` dan kemudian `git push --set-upstream origin <nama_branch>` (sesuaikan dengan nama branch)

## Referensi

- [CodeIgniter 4](https://codeigniter.com/download)
- [Free Template 538 Digital Trend](https://templatemo.com/tm-538-digital-trend)
- [CI4 Libraries by Dhon Studio](https://github.com/dhonstudio/ci4_libraries)

## Contoh live project

[CI4 Ekspor Ikan](http://dev.dhonstudio.com/ci4/eksporikan)
