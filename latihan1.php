<!DOCTYPE html>
<html lang="en">
<head>
    <title>Contoh Skrip PHP</title>
</head>
<body>
    <?php 
        //Contoh1
        echo "Hello Apa Kabar"."<br>";
        echo "Hello Apa Kabar"."<br>";

        echo "<br>";

        //Contoh 2
        $a = 3;
        $b = 7;
        $a += 5;
        $b = ($c = 11) + 3;
        $d = 4;
        echo "Nilai variable a adalah = $a";
        echo "<br>";
        echo "Nilai variable b adalah = $b";
        echo "<br>";
        echo "Nilai variable c adalah = $c <br><br>";

        //Contoh 3
        $a = 3;
        $b = 7;
        echo '$a * $b = '. $a*$b . "<br>";
        echo '$a / $b = '. $a/$b . "<br>";
        echo '$a % $b = '. $a%$b . "<br><br>";

        // Contoh 4
        $nilai = 85;
        $nama = "Amir";

        if($nilai >= 80){
            echo $nama . " mendapat nilai nilai A";
        } elseif($nilai >= 70){
            echo $nama . " mendapat nilai nilai B";
        } elseif($nilai >= 60){
            echo $nama . " mendapat nilai nilai C";
        } else{
            echo $nama . " mendapat nilai nilai D";
        }
        echo "<br><br>"
    ?>

        <!-- Contoh 5 -->
        Tanggal Lahir:
        <select name="tanggal">
            <option value= 0 selected>Tanggal
            <?php
                for($i = 1; $i<32; $i++)
                    echo "<option value = $i>$i";
            ?>
            </option>
        </select>
        <br><br>
    
    <?php
        // Contoh 6
        $i = 1;
        do{
            echo "$i <br>";
            $i++;
        } while($i <= 5)

    ?>

    <br><br>
    <?php
        // Contoh 7
        $sisi = 15;
        $text1 = "Belajar menghitung ";
        $text2 = "Volume Kubus";
        $volume = $sisi * $sisi * $sisi;

        echo $text1 . $text2 . "<br>";
        echo "Sisi Kubus = $sisi <br>";
        echo "Volume Kubus = $volume cm3 <br>";


    ?>
</body>
</html>