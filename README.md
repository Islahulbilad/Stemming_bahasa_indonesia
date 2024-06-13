# Stemming_bahasa_indonesia
Proyek yang dikembangkan untuk mengimplementasikan algoritma Stemming sendiri dengan mudah dan simpel. 
Kelebihan : 
1. Mudah dan simpel 
2. Mudah dikembangkan karena hanya terdiri dari satu file inti (core.php)

Kekurangan : 
Masih memungkinkan ada kosakata yang masih belum bisa distemming. 
Solusi : Tingkatkan lagi parameter dalam Prefix.txt.

Contoh penggunaan : 
Buat file demo.php dan ditaruh bersama dengan file core.php. misal  sintak berikut ini : 

include("core.php");
$input_kata = "Menyesuaikan";
echo stem($input_kata);
//output : sesuai

