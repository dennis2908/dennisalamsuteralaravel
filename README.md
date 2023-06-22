# Instalasi dan running project di localhost:

# Backend : </br>

- install composer,laravel 8.31.0, php 7.3 64 Bit</br>
- git clone https://github.com/dennis2908/dennisalamsuteralaravel </br>
- buka cmd dan lalu ketik composer install </br>
- Hapus file .env <br>
- rename file .env.mysql ke .env<br>
- buka file .env dan edit DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, </br>
   DB_PASSWORD ke settingan mysql local / cloud<br>
- tutup file .env dan buka cmd dan lalu ketik php artisan optimize</br>
- php artisan key:generate </br>
- php artisan optimize:clear</br>
- php artisan optimize</br>
- php artisan jwt:secret</br>
- php artisan optimize</br>
- php artisan optimize:clear</br>
- php artisan migrate --seed</br>
- php artisan serve --port=8441</br>

	
# Bukti running : (project frontend + backend ini yg sudah di deploy online)

  https://alamsuteradennis.herokuapp.com
  
# Waktu Pengerjaan Backend + Frontend Termasuk deploy online : </br>

  4 hari
  
# Notes :

  - Login : </br>
     
	Username : dana88 </br>
	
	Passsword : dana88 </br>
	
	Role : Super Admin </br>
	
	================== </br>
	
	Username : dina88 </br>
	
	Passsword : dina88 </br>
	
	Role : Admin </br>  
	
	
# Fill Data :

  - Php version : 7.32 64 Bit
     
  - Framework : Laravel 8.31.0 </br>
	
  - Database selection : mysql mariaDB 10.1.37 </br>
	
  - Database Configuration used : root = "root", </br> 
  
    password = "", port = "3306", database name = "alamsutera", host = "" </br>
	
  - Library dipake : JWT Token Tymon </br>	
  
  - Keterangan : Laravel menggunakan token untuk authentifikasi <br>
    
	Begitu login maka user akan dapat token yang akan </br>
	
	dimasukkan otomatis ke bearer token untuk auth nya sehingga </br>
	
	penggunaan tidak bisa sembarangan.</br>
	
	Dibangun 4 data master :  role, user, barang, customer </br>
	
	dan 1 data order transaksi </br>
	
	Untuk role, bisa memilih menu otorisasi di assign </br>
	
	Untuk data user, field email : unique <br>
	
	Untuk data customer, field name , code : unique <br>
	
	Untuk data barang, field name , code : unique <br>
	
	Untuk order barang, item bisa banyak, auto total & sum<br>
	
	Untuk role superadmin : semua menu unlock <br>
	
	Untuk role admin : menu barang, order <br>
	
	
# Front End : https://github.com/dennis2908/dennisalamsuteranext </br>	