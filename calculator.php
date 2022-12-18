  <html>
<title>WintsOnline</title>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>


</head>
<body>
<div></div>
<?php
    $total_price=0;

// degerleri aliyoruz
// foreach($_POST as $k =>$v){
//  echo var_dump($k)." -- ".var_dump($v)."<br>"; 

//   foreach($v as $a) {
//     //echo $a.">>><br>";
//     //print_r($_POST['yukseklik']);

//     $total_price+=12;
//   }

// }

$keys=array_keys($_POST);

$yukseklik_s=array();
$urun_turu_s=array();
$urungenislik_s=array();
$yukseklik_g_s=array();
$genislik_g_s=array();
$profil_s=array();
$adet_s=array();
for ($i=0; $i <count($_POST[$keys[0]]) ; $i++) {  
  foreach($keys as $key){
 //   echo $_POST[$key][$i]." &mdash; ";    
    if($key=="yukseklik"){
      array_push($yukseklik_s, $_POST[$key][$i]);
    }
    if($key=="urun_turu"){
      array_push($urun_turu_s, $_POST[$key][$i]);
    }
    if($key=="urungenislik"){
      array_push($urungenislik_s, $_POST[$key][$i]);
    }
    if($key=="yukseklik_g"){
      array_push($yukseklik_g_s, $_POST[$key][$i]);
    }
    if($key=="genislik_g"){
      array_push($genislik_g_s, $_POST[$key][$i]);
    }
    if($key=="profil"){
      array_push($profil_s, $_POST[$key][$i]);
    }
    if($key=="adet"){
      array_push($adet_s, $_POST[$key][$i]);
    }
  }
 // echo "<br>";
}
if ($_POST['urun_turu'][0] ==""){
  echo "<b>Produkttyp auswählen</b>";
  echo "<p></p><a href='index.php'>Forma git</a>";
  die ();
}

?>
<?php

//if ($_POST["yukseklik"]) {
//    $array = $_POST["yukseklik"];
//    foreach ($array as $yukseklik_al) {
//        if (strlen($yukseklik_al) > 0) {
//            echo '<h3>' . $yukseklik_al . '<h3/>';
//        }
//    }
//}
// urun turu degeri al
//if ($_POST["urun_turu"]) {
//    $array = $_POST["urun_turu"];
//    foreach ($array as $urun_turu_al) {
//        if (strlen($urun_turu_al) > 0) {
//            echo '<h4>' . $urun_turu_al . '<h4/>';
//        }
//    }
//}
//

//if ($_SERVER["REQUEST_METHOD"] == "POST") {
    //$yukseklik1 = test_input($_POST["yukseklik1"]);
    //$adet3 = test_input($_POST["adet3"]);

    //$urun_turu2 = test_input($_POST["urun_turu2"]);
    //$yukseklik2 = test_input($_POST["yukseklik2"]);
    //$yukseklik3 = $_POST["yukseklik3"];
    //$genislik3 = $_POST["genislik3"];
    //$profil1 = $_POST["profil1"];
    //$profil2 = $_POST["profil2"];
    //$profil3 = $_POST["profil3"];
    //$adet2 = test_input($_POST["adet2"]);
    //$urun_turu3 = $_POST["urun_turu3"];

//}
// Burası gelen form verilerini test etme bölümüydü. Gerekmezse sil
//function test_input($data) {
//  $data = trim($data);
//  $data = stripslashes($data);
//  $data = htmlspecialchars($data);
//  return $data;
// }
?>
  <?php

//if ($urun_turu3 == "cift") {
//$cift_breite1=array("a" => "125","125","130","130","135","135","140","140");
//$cift_breite2=array(130,130,135,135,140,140,145,145);
//$cift_hohe1=array("b" =>"125","130","135","140","145","150","155","160","165");
//$cift_hohe2=array(125,130,135,140,145,150,155,160,165);

$sinif = array(
    0 => array(0, 0, 0, 0, 0, 135, 140, 140),
    1 => array(0,125, 125, 130, 130, 135, 135, 140, 140),
    2 => array(0,130, 130, 135, 135, 140, 140, 145, 145),
    3 => array(0,135, 135, 140, 140, 145, 145, 150, 150),
    4 => array(0,140, 140, 145, 145, 150, 150, 155, 155),
    5 => array(0,145, 145, 150, 150, 155, 160, 165, 165),
    6 => array(0,150, 155, 160, 160, 165, 165, 170, 170),
    7 => array(0,155, 155, 160, 160, 165, 165, 170, 170),
    8 => array(0,160, 160, 165, 165, 170, 170, 175, 175),
    9 => array(0,165, 165, 170, 170, 175, 175, 180, 180),

);
$dizi1 = array(0, 120, 130, 140, 150, 160, 180, 200, 220, 240);
$dizi2 = array(0, 160, 180, 200, 220, 240, 260, 280, 300);

//}

?>

<div class="container">
  <h2 align="center">PRODUKTE ANGEBOT</h2>
  <p><img src="wints_logo.png" width="300"></p>
  <p align="right"><?php echo date('d/m/Y H:i:s'); ?></p>
  <p><h4>Am Obstmarkt 2 55126 Mainz -Deutschland
  <br>Telefon:06131-5843161
  <br>Mobile:+0177 506 27 27
  <br>info@wints-online.de </h4>
  <h4>WINTS Wintergarten&Alüminium Inh. Seref Alakus 55126 Mainz</h4>
  <p>&nbsp;</p>
  
  <p><?php
  echo "<label>Kundenname:</label> ".$_POST['musteri_ad'];
  echo "<br><label>Kunden Email:</label> ".$_POST['musteri_email'];
  echo "<br><label>Kunden Telefon:</label> ".$_POST['musteri_telefon'];
  echo "<br><label>Kunden Adresse:</label> ".$_POST['musteri_adres'];
  echo "<br><label>Lieferadresse:</label> ".$_POST['musteri_ladres'];
  ?></p>
  <p><p>ANGEBOT NUMMER: <b><?PHP echo $_POST['angebot_nummer'];?></b></p>
Wir bedanken uns für Ihr Interese und unterbreiten Ihnen gerne unser freibleibendes Angebot. Dieses Angebot hat Gültigkeit bis zum.
<br>* Zahlungsbedingungen 50% Anzahlung / 50% Bei der Lieferung und Montage
<br>* Service Leistungen: Inklusive Leiferung und Montage
</p>
  <table class="table table-condensed">
    <thead>
      <tr>
        <th>Produkte</th>
        <th>Stück</th>
        <th>Betrag</th>
      </tr>
    </thead>
    <tbody>
<?php
    $total_price=0;

// degerleri aliyoruz
// foreach($_POST as $key =>$value){
//echo var_dump($k)." -- ".var_dump($v)."<br>"; 
for ($i=0; $i <count($_POST[$keys[0]]) ; $i++) {  

  $a = array_search($yukseklik_g_s[$i], $dizi1);
  $b = array_search($genislik_g_s[$i], $dizi2);
  // Fiyat hesaplama
  if ($urun_turu_s[$i] == "tur" and $yukseklik_s[$i] < "210" and $urungenislik_s[$i] < "110") {
    $total1 = 90 * $adet_s[$i];
} elseif ($urun_turu_s[$i] == "tur" and $yukseklik_s[$i] > "210" and $urungenislik_s[$i] < "110") {
    $total1 = 100 * $adet_s[$i];
} 
  elseif ($urun_turu_s[$i] == "fenster" and $yukseklik_s[$i] > "60" and $yukseklik_s[$i] < "100" and $urungenislik_s[$i]< "110"){
    $total1 = 65 * $adet_s[$i];
  }
  elseif ($urun_turu_s[$i] == "fenster" and $yukseklik_s[$i] > "100" and $yukseklik_s[$i] < "140" and $urungenislik_s[$i]< "110"){
    $total1 = 75 * $adet_s[$i];
  }
  elseif ($urungenislik_s[$i] > "110"){
    $total1 =  $sinif[$a][$b] * $adet_s[$i];
  }
  else {
    $total1 = "0";
}

    echo "<tr><td>".$urun_turu_s[$i] ."<br>Dicke:".$profil_s[$i]."<br>";
    if ($urungenislik_s[$i]=="andere"){
    echo "Höhe&Breite;".$yukseklik_g_s[$i]."&".$genislik_g_s[$i];
    }
    else {
      echo "Höhe:". $yukseklik_s[$i] ." cm<br>Breite;".$urungenislik_s[$i]."cm<br>";
    }
    echo "</td><td>". $adet_s[$i]."</td><td>".$total1."</td></tr>";

    
    $total_price+=$total1;
 

}
?>

      <tr>
        <td></td>
        <th>Gesamtpreis:<br>MwSt (%19):</th>
        <th><?php 
        $MwSt = $total_price * 19/100;
        $mtotal=$total_price + $MwSt;
        echo $total_price . " €<br>" . $MwSt . "€<br>" . $mtotal . "€"; ?></th>
      </tr>
    </tbody>
  </table>



<P></P>
<p>Wir hoffen, dass Ihnen unser Angebot zusagt und sehen Ihrer Auftragserteilung mit Freude entgegen.
<p>Lieferungsbedingungen:                          Frei Haus inkl. Montage</p>
<p>Transportbedingungen:                           Frei Haus</p>
<p>Zahlungsbedingungen :                           50% bei Auftragserteilung, 50% bei Lieferung und Montage</p>
<p>Liefertermin        :                           2-7 Wochen nach Auftragserteilung und Erhalt der Anzahlung</p>
<p>Die Preisgültigkeit beträgt 15 Tage nach Gebotsabgabe.
                                                                                                 



<p>&nbsp;</p
><p>&nbsp;</p>
<table width="100%"><tr><td width="50%">Wintsonline</td><td>Auftragserteilung</td></tr></table>
							

<p>&nbsp;</p




<a href="index.php">Forma git</a>
<p><input type="button" onclick="window.print()" value="Drucke">

</div>


  </body>
  </html>

<div class="container">
  <div class="row">
    <div class="col">
WINTS Wintergarten&Alüminium                                              
<br>Inf Seref Alakus                                                                   
<br>Am Obsmarkt 2, 55126 Finthen-Mainz                            
                                                                                               
                                                                                                                                                                                            
    </div>
    <div class="col">
    Telefon : 06131-584 31 61
    <br>Telefax : 0177 506 27 27 Mobil
<br>E-Mail  : info@wints-online.de
<br>Internet: www.wints-online.de
<br>Register-Nr. / Gericht: 
<br>Steuer- /  UST-ID Nummer 26/002/64346
<br>UST-ID Nummer  DE257279619
    </div>
    <div class="col">
    Bank   : SPARKASSE Mainz
    <br>IBAN   : DE39 5505 0120 0200 1148 74
    <br> BIC       : MALADE51MNZ
    <br>BANK 2: VR-Bank Mainz
    <br>IBAN    : DE82 5509 1200 0033 6206 08
    <br>BIC       : GENODE61AZY
    </div>
  </div>
</div>