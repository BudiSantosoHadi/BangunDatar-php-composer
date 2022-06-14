<?php
namespace Txnh\Composer\bangundatar;

use ErrorException;

class bangundatar {

    public function __construct()
    {
       echo "=============(RUMUS BANGUN DATAR)=================\n";
       echo "Hitung Luas dan Keliling Bangundatar\n";
       echo "1.PersegiPanjang\n";
       echo "2.Persegi\n";
       echo "3.Segitiga\n";
       echo "4.Jajar Genjang\n";
       echo "5.Trapesium\n";
       echo "6.Lingkaran\n";
       echo "=======by@atifnaufalh=========\n";
       echo "NO BANGUN DATAR: ";
       
       $bangundatar = trim(fgets(STDIN));
            while ($bangundatar == "1") {
            echo "\n";
            echo "BangunDatar : PersegiPanjang \n";
            echo "=========RUMUS========== \n \n";
            echo "Luas PersegiPanjang (P x L)\n#enter\n";
            echo "panjang = ";
            $panjang = trim(fgets(STDIN));
            echo "lebar = ";
            $lebar = trim(fgets(STDIN));
            $result = $panjang * $lebar;
            echo "Jadi Untuk Hasil Luas PersegiPanjang Ialah : $result\n \n";
            echo "Keliling PersegiPanjang 2 x (panjang ($panjang) + lebar ($lebar)\n \n";
            echo "jadi untuk Hasil Keliling PersegiPanjang Ialah :". (2 * $panjang + $lebar). "\n";
            break;



            } while ($bangundatar == "2"){
                echo "\n";
                echo "BangunDatar : Persegi \n";
                echo "=========RUMUS========== \n \n";
                echo "LUAS : sisi x sisi (s²) \n";
                echo "Sisi = ";
                $sisi = trim(fgets(STDIN));
                $result = $sisi * $sisi ;
                echo "\n";
                echo "(sisi($sisi) x sisi($sisi) $sisi ²)\n";
                echo "jadi untuk Hasil Luas Persegi Ialah : $result ($result ²)\n";
                echo "KELILING : 4 x sisi($result)\n";
                echo "jadi untuk Hasil Keliling Persegi Ialah : " . (4 * $result) ."\n";
                break;



            } while ($bangundatar == "3"){
                echo "\n";
                echo "BangunDatar : Segitiga \n";
                echo "=========RUMUS========== \n \n";
                echo "LUAS :  ½ x alas x tinggi \n";
                echo "Alas = ";
                $alas = trim(fgets(STDIN));
                echo "Tinggi = ";
                $tinggi =trim(fgets(STDIN));
                echo "\n";
                echo "(1/2 x alas($alas) x tinggi($tinggi))\n";
                echo "Jadi Untuk Hasil Luas Segitiga Ialah : " . (1 / 2 * $alas * $tinggi). "\n";
                break;



            } while ($bangundatar == "4"){
                echo "\n";
                echo "BangunDatar : Jajar Genjang \n";
                echo "=========RUMUS========== \n \n";
                echo "LUAS :  alas x tinggi \n";
                echo "alas = ";
                $alas = trim(fgets(STDIN));
                echo "tinggi = ";
                $tinggi = trim(fgets(STDIN));
                echo "\n";
                echo "alas($alas) x tinggi($tinggi)\n";
                echo "Jadi Untuk Hasil Luas jajar Genjang Ialah : " . ($alas * $tinggi). "\n";
                break;


            } while ($bangundatar == "5"){
                echo "\n";
                echo "BangunDatar : Trapesium \n";
                echo "=========RUMUS========== \n \n";
                echo "LUAS :   ½ x jumlah sisi sejajar x tinggi \n";
                echo "sejajar = ";
                $sejajar = trim(fgets(STDIN));
                echo "tinggi = ";
                $tinggi = trim(fgets(STDIN));
                echo "\n";
                echo "1/2 x sejajar($sejajar) x tinggi($tinggi) \n";
                echo "Jadi untuk Hasil Luas Trapesium Ialah : " . (1/2 * $sejajar * $tinggi) ."\n";
                break;


            } while ($bangundatar == "6") {
                echo "BangunDatar : Lingkaran \n";
                echo "=========RUMUS========== \n \n";
                echo "LUAS :   π x ruas² \n";
                echo "π = ";
                $π = trim(fgets(STDIN));
                echo "ruas = ";
                $ruas = trim(fgets(STDIN));
                echo "\n";
                echo "π($π) x ruas($ruas)²\n";
                echo "Jadi Untuk Hasil Luas Lingkaran Ialah : " . ($π * $ruas . "²"). "\n";
                break;


            } while ($bangundatar >= "7") {
                echo "\n";
                echo "ERORR NUMBER NOT FAILLED!!";
                break;
                return $bangundatar;
            }
        }


}

?>

