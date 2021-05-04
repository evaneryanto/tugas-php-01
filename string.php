<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>String PHP</title>
</head>
<body>
    <h1>Berlatih String PHP</h1>
    <?php   
        echo "<h3> Soal No 1</h3>";
        /* 
            SOAL NO 1
            Tunjukan dengan menggunakan echo berapa panjang dari string yang diberikan berikut! Tunjukkan juga jumlah kata di dalam kalimat tersebut! 

            Contoh: 
            $string = "PHP is never old";
            Output:
            Panjang string: 16, 
            Jumlah kata: 4 
        */
       

        $first_sentence = "Hello PHP!" ; // Panjang string 10, jumlah kata: 2
        $second_sentence = "I'm ready for the challenges"; // Panjang string: 28,  jumlah kata: 5

        $panjang_karakter_1 = strlen($first_sentence);
        $jum_kata1 = substr_count($first_sentence, " ") + 1;
        echo "Panjang String 1: ". $panjang_karakter_1."<br>";
        echo "jumlah kata string 1: ". $jum_kata1 . "<br>";

        $panjang_karakter2 = strlen($second_sentence);
        $jum_kata2 = substr_count($second_sentence, " ") + 1;
        echo "Panjang String 2: ". $panjang_karakter2."<br>";
         echo "jumlah kata string 2: ".$jum_kata2 . "<br>";
        
        echo "<h3> Soal No 2</h3>";
        /* 
            SOAL NO 2
            Mengambil kata pada string dan karakter-karakter yang ada di dalamnya. 
            
            
        */
        $string2 = "I love PHP";
        
        echo "<label>String: </label> \"$string2\" <br>";
        echo "Kata pertama: " . substr($string2, 0, 1) . "<br>" ; 
        // Lanjutkan di bawah ini
        echo "Kata kedua: " .substr($string2,2,4);
        echo "<br> Kata Ketiga: ".substr($string2,7,3) ;

        echo "<h3> Soal No 3 </h3>";
        /*
            SOAL NO 3
            Mengubah karakter atau kata yang ada di dalam sebuah string.
        */
        $string3 = "PHP is old but sexy!";
        $newString = substr_replace($string3,"awesome",15,4);
        echo "String: \"$string3\" ". $newString; 
        // OUTPUT : "PHP is old but awesome"

    ?>
</body>
</html>