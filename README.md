# Instalasi dan menjalankan project di localhost:

>>>Backend : </br>

1. install composer,laravel 8.31.0, php 7.3 64 Bit</br>
2. git clone https://github.com/dennis2908/dennisalamsuteralaravel </br>
3. buka cmd dan lalu ketik composer install </br>
4. Hapus file .env <br>
5. rename file .env.mysql ke .env<br>
6. buka file .env dan edit DB_HOST, DB_PORT, DB_DATABASE, DB_USERNAME, </br>
   DB_PASSWORD ke settingan mysql local / cloud<br>
7. buka cmd dan lalu ketik php artisan optimize</br>
8. php artisan key:generate </br>
9. php artisan optimize:clear</br>
10.php artisan optimize</br>
11.php artisan jwt:secret</br>
12.php artisan optimize</br>
13.php artisan optimize:clear</br>
14.php artisan migrate --seed</br>
13.php artisan serve --port=8441</br>

	
# Bukti running : (project frontend + backend ini yg sudah di deploy online)

  https://alamsuteradennis.herokuapp.com
  
# Notes :

  - Login : </br>
     
	Username : dana88 </br>
	
	Passsword : dana88 </br>
	
	Role : Super Admin </br></br></br>
	
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