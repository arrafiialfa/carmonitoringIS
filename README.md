# Project Details

## PHP Version

PHP 8.2.7 LTS

## Framework

-   Composer Version: 2.5.8
-   Laravel Version: 10.13.5

## Database

-   SQLite Version: Laravel Default SQlite Database

## About the Company

A nickel mining company is located in several regions, with one headquarters, one branch office, and six mines in different locations. The company has many vehicles, including passenger and cargo transport vehicles. In addition to company-owned vehicles, there are also vehicles rented from a leasing company.

The company needs an application to monitor the vehicles it owns. This includes monitoring fuel consumption, service schedules, and vehicle usage history. To use a vehicle, employees are required to make a reservation in advance with the vehicle management department or pool, and the vehicle usage must be known or approved by their respective supervisors.

## How to Install?

1. Make sure PHP and Composer are installed on your local computer. If not, you can install PHP with the same version used in this application, which is PHP 8.2.7. Install Composer if not already installed, which can be downloaded from here: [https://getcomposer.org/](https://getcomposer.org/)
2. Fork the project to your GitHub repository or download the zip file.
3. Extract the zip file to the desired folder location.
4. Open the terminal in that folder.
5. Run `composer install` command, press enter, and wait until it finishes.
6. Once finished, run `php artisan key:generate` command and press enter.
7. Run `php artisan serve` command and press enter.
8. The project will be deployed at the default location [localhost:8000](http://localhost:8000/).

## Penggunaan Aplikasi

1. Register jika ingin menambahkan pengguna baru
2. Login dengan pengguna Admin
3. Pada halaman dashboard, admin dapat menambahkan pemesanan baru, klik tombol pemesanan baru
4. Isi data yang diperlukan, jika ingin menambahkan kendaraan atau sopir, tekan tombol tambah di samping kolom yang sesuai
5. Klik tombol buat pemesanan baru
6. Pemesanan baru akan muncul dalam tabel pemesanan

**Update Pemesanan**

1. Klik update pada daftar dalam tabel pemesanan
2. Akan terlihat detail pemesanan dan persetujuan yang sedang berlangsung
3. Login ke akun yang bersangkutan untuk menyetujui pemesanan. Contoh: jika persetujuan dilakukan oleh "manager2", maka harus login sebagai "manager2"
4. Klik tombol approve untuk menyetujui pemesanan atau reject untuk menolak pemesanan
5. Jika manager menerima pemesanan, sistem akan memeriksa apakah manager tersebut memiliki atasan yang ditentukan dalam database
6. Jika iya, sistem akan membuat persetujuan baru yang akan diarahkan kepada atasan manager tersebut

**Menambahkan Bawahan**
Manager dapat menambahkan bawahan ke dalam sistem

1. Klik tombol tambah bawahan, yang terletak di pojok kanan atas
2. Lihat tabel pengguna di bawah, jika daftar pengguna tersedia, Anda dapat menekan tombol tambah pada pengguna yang ingin dijadikan bawahan
    - Bawahan yang dapat dijadikan pengguna harus menjadi bawahan langsung dengan tingkat manajerial 1 tingkat di bawah manajer tersebut
    - Admin memiliki tingkat manajerial 0 sehingga tidak dapat menambahkan bawahan
