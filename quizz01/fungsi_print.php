/* Cara menampilkan teks pada PHP
Menampilkan teks pada PHP dapat dilakukan melalui 3 fungsi yaitu
fungsi echo(),
fungsi print(),
dan fungsi printf().
Lalu, apa perbedaan pada ketiga fungsi tersebut dan apa saja kegunaannya?
LETS TRY!
*/

// Fungsi echo
<?php
echo "<h1> Mari Belajar PHP di Politeknik Bisnis Indonesia</h1>";
echo("Hello Dunia!!...<br>");
echo "Ini adalah contoh tulisan<br>";
echo "Ini ", "contoh ", "teks ", "yang ", "terpisah.";
?>

<!-- Fungsi print -->
<?php
print "<h2>Ini adalah contoh mencetak Teks</h2>";
print "Contoh mencetak teks 1<br>";
print ("Contoh mencetak teks 2");
?>

<!-- Fungsi printf() -->
<?php
$var1=123456789;
$var2=-123456789;
$var3=50; //untuk ascii, ascii 50 adalah 2;

printf("%s <br>", $var1);
printf("%d <br>", $var1);
printf("%d <br>", $var2);
printf("%f <br>", $var1);
printf("%b <br>", $var1);
printf("%c <br>", $var3);
?>