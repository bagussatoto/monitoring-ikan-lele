
<p align="center">
<img align="center" src="http://ForTheBadge.com/images/badges/built-with-love.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/uses-html.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/makes-people-smile.svg"> <img align="center" src="http://ForTheBadge.com/images/badges/built-by-developers.svg">
</p>

#  Sistem Monitoring Kualitas Air untuk Budidaya Lele memakai framework Laravel 10

Sistem monitoring kualitas air untuk budidaya lele yang menggunakan Internet of Things (IoT) merupakan solusi modern yang memanfaatkan teknologi sensor dan konektivitas internet untuk memantau dan mengelola kondisi lingkungan air pada kolam budidaya lele secara real-time. Sistem ini dirancang untuk meningkatkan efisiensi operasional, mencegah kerugian, dan mendukung keberhasilan budidaya lele. 

## Siapa pembuat aplikasi ini?

| Profile        |  Keterangan                      |
|----------------|----------------------------------|
| Nama           | Bagus Budi Satoto                |
| Jurusan        | S1 - Informatika                 |
| Kampus         | Universitas Amikom Yogyakarta    |

## Login 
User : bagussatoto <br>
Password : 12345 

Atau klik [Disini](https://github.com/bagussatoto/monitoring-ikan-lele/commit/bbca23f459f992d34f4d54e5b49dfbb17d2390ac#r135821760)


## Tampilan Website
![home](https://github.com/bagussatoto/monitoring-web/assets/87259393/710b5bbe-5c49-4508-9a15-0b4288937fbd)
![rekap](https://github.com/bagussatoto/monitoring-web/assets/87259393/846d63e7-4d61-4a4f-9b69-0ee99c82c66a)
![admin](https://github.com/bagussatoto/monitoring-web/assets/87259393/b29a6666-6a5d-4862-8aea-b41bf2f84dc0)

## Penjelasan 

|<h3>Notes  </h3>       |       Keterangan                                                                  |
|-----------------------|-----------------------------------------------------------------------------------|
|<b>Sensor Kualitas Air   | </b>Sistem ini dilengkapi dengan berbagai jenis sensor untuk mengukur parameter kualitas air yang kritis, seperti suhu, pH, kadar oksigen terlarut (DO), amonia, nitrat, dan nitrit. Sensor-sensor ini secara terus-menerus mengumpulkan data dan mengirimkannya ke platform monitoring.                               |
|<b>Node IoT | </b>Setiap kolam budidaya lele dilengkapi dengan node IoT yang berfungsi sebagai pusat pengumpulan data. Node ini dapat berkomunikasi dengan sensor-sensor kualitas air dan mentransmisikan data melalui jaringan internet.  |
|<b>Analisis Data    | </b>Data kualitas air yang dikumpulkan selama periode waktu tertentu dianalisis secara otomatis. Analisis ini dapat memberikan wawasan tentang tren, pola, dan potensi masalah yang perlu diatasi.                              |
|<b>Integrasi Sistem     | </b>Sistem monitoring kualitas air dapat diintegrasikan dengan sistem otomatisasi lainnya, seperti sistem pemberian pakan otomatis atau sistem pengatur suhu, untuk menciptakan solusi terintegrasi yang mendukung keberhasilan budidaya lele secara menyeluruh.                       |

## Cara Instalasi ke Server Lokal :

-   Follow Github Saya
-   Star Repo Github Saya
-   Fork Repo Github Saya
-   Clone project repo saya dengan cara menuliskan pada terminal/cmd/git bash :<br> <b>git clone</b>
``````
git clone https://github.com/bagussatoto/monitoring-ikan-lele.git
`````` 
-   lalu masuk ke direktori repo yg sudah di clone dengan ketik lg pada terminal/cmd/git bash <b>cd monitoring-ikan-lele</b>
-   lalu ketik <b>composser install </b> dan <b>php artisan key generate</b>
-   tulis migrate database pada terminal/cmd/git bash : <b>php artisan migrate:install</b>
-   jalankan php artisan db:seed pada terminal/cmd/git bash : <b>php artisan db:seed</b>

<b>Notes :</b> Untuk db:seed jika males untuk mengetikan data, akan dibuatkan langsung oleh laravelnya.

## Alat Yang Digunakan Untuk Membuat Web :

-   WAMP
-   Visual Studio Code
-   Git
-   Cloud (Github)
-   PHP 7.4.9
-   MYSQL 8.0.13
-   Laravel 10
-   Bootstrap 7
-   Composer


## Kritik dan Saran

| *_Silahkan kirim kritik dan saran anda ke email :_*  |
|------------------------------------------------------|
| bagusbudi1308@gmail.com                              |


## Request Fitur Baru dan Pelaporan Bug

Anda dapat meminta fitur baru maupun melaporkan bug melalui menu [**issues**](https://github.com/bagussatoto/monitoring-web/issues) yang sudah disediakan oleh GitHub (lihat menu di atas), posting issues baru dan kita akan berdiskusi disana.

## Berkontribusi

Siapapun dapat berkontribusi pada proyek ini mulai dari pemrograman, pembuakan buku manual, sampai dengan mengenalkan produk ini kepada **mahasiswa**. 
Untuk belajar agar mengurangi kesenjangan pendidikan teknologi dengan cara membuat postingan issue di repository ini.

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400"></a></p>

<p align="center">
<a href="https://travis-ci.org/laravel/framework"><img src="https://travis-ci.org/laravel/framework.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
</p>
