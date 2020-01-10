<?php
              date_default_timezone_set("Asia/Jakarta");
              function sign($x) {
                if ($x == 0) return 0;
                else return $x / abs($x);
              }

              $time_ini = date('H : i : s');

              function WaktuShalat($jadwal) {
                $tanggal = getdate();
                date_default_timezone_set("Asia/Jakarta");
                $J = $tanggal['yday'];
                $H = 0; // Ketinggian laut (meter)
                $Gd = 19.5; // Sudut Fajar Senja (15°-19°)  -  Dawn’s Twilight Angle (15°-19°)
                $Gn = 17.5; // Sudut Malam Senja (15°-19°)  -  Night’s Twilight Angle (15°-19°)
                $B = - 6.3944475; // Garis Lintang (derajat)  -  Latitude (Degrees)
                $L = 106.8213664; // Garis Bujur (derajat)  -  Longitude (Degrees)
                $TZ = 7; // Waktu Daerah (jam)  -  Time Zone (Hours)
                $Sh = 1; // Sh=1 (Shafii) - Sh=2 (Hanafi)

                // STOP EDITING,

                $D = 0; // Turun mengenai matahari (derajat)  -  Solar Declination (derajat)
                $T = 0; // Persamaan dari waktu (menit)  -  Equation of times (minutes)
                $R = 0; // Referensi Garis Bujur (derajat)  -  Reference Longitude (Degrees)
                $beta = 2 * pi() * $J / 365;
                $D = (180 / pi()) * (0.006918 - (0.399912 * cos($beta)) + (0.070257 * sin($beta)) - (0.006758 * cos(2 * $beta)) + (0.000907 * sin(2 * $beta)) - (0.002697 * cos(3 * $beta)) + (0.001480 * sin(3 * $beta)));
                $T = 229.18 * (0.000075 + (0.001868 * cos($beta)) - (0.032077 * sin($beta)) - (0.014615 * cos(2 * $beta)) - (0.040849 * sin(2 * $beta)));
                $R = 15 * $TZ;
                $G = 18;
                $Z = 12 + (($R - $L) / 15) - ($T / 60);
                $U = (180 / (15 * pi())) * acos((sin((-0.8333 - 0.0347 * sign($H) * sqrt(abs($H))) * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
                $Vd = (180 / (15 * pi())) * acos((-sin($Gd * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
                $Vn = (180 / (15 * pi())) * acos((-sin($Gn * (pi() / 180)) - sin($D * (pi() / 180)) * sin($B * (pi() / 180))) / (cos($D * (pi() / 180)) * cos($B * (pi() / 180))));
                $W = (180 / (15 * pi())) * acos((sin(atan(1 / ($Sh + tan(abs($B - $D) * pi() / 180)))) - sin($D * pi() / 180) * sin($B * pi() / 180)) / (cos($D * pi() / 180) * cos($B * pi() / 180)));
                switch ($jadwal)
                {
                  case 1:
                  $hasil = $Z - $Vd;
                  break;

                  case 2:
                  $hasil = $Z - $U;
                  break;

                  case 3:
                  $hasil = $Z;
                  break;

                  case 4:
                  $hasil = $Z + $W;
                  break;

                  case 5:
                  $hasil = $Z + $U;
                  break;

                  case 6:
                  $hasil = $Z + $Vn;
                  break;
                }

                $subuh = $Z - $Vd;
                $jam = floor($hasil);
                $menit = floor(($hasil - $jam) * 60);
                $detik = floor(((($hasil - $jam) * 60) - $menit) * 60);
                if (strlen($jam) == 1) $jam = "0" . $jam;
                if (strlen($menit) == 1) $menit = "0" . $menit;
                if (strlen($detik) == 1) $detik = "0" . $detik;
                $output = "$jam.$menit WIB";
                return $output;
              }
                  
              if ($time_ini > WaktuShalat(1) && $time_ini < WaktuShalat(2)) {
                echo "Sholat Dhuha : " . WaktuShalat(2);
              }
              elseif ($time_ini > WaktuShalat(2) && $time_ini < WaktuShalat(3)) {
                echo "Sholat Dzuhur : " . WaktuShalat(3);
              }
              elseif ($time_ini > WaktuShalat(3) && $time_ini < WaktuShalat(4)) {
                echo "Sholat Ashar : " . WaktuShalat(4);
              }
              elseif ($time_ini > WaktuShalat(4) && $time_ini < WaktuShalat(5)) {
                echo "Sholat Magrib : " . WaktuShalat(5);
              }
              elseif ($time_ini > WaktuShalat(5) && $time_ini < WaktuShalat(6)) {
                echo "Sholat Isya : " . WaktuShalat(6);
              }
              elseif ($time_ini > WaktuShalat(6) && $time_ini > WaktuShalat(1)) {
                echo "Sholat Subuh : " . WaktuShalat(1);
              }
            ?><?php /**PATH /Users/macbook/Sites/depok/resources/views/includes/waktu-shalat.blade.php ENDPATH**/ ?>