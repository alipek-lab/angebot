<html>
<title>WintsOnline</title>

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
  <script type="text/javascript" src="quirksmode.js"></script>
  <script type="text/javascript">
    
    var counter = 0;

    function init() {
      document.getElementById('moreFields').onclick = moreFields;
      moreFields();
    }

    function moreFields() {
      counter++;
      var newFields = document.getElementById('readroot').cloneNode(true);
      //name="div_count" artır
      newFields.id = '';
      newFields.style.display = 'block';
      var newField = newFields.childNodes;
      for (var i = 0; i < newField.length; i++) {
        var theName = newField[i].name
        if (theName)
          newField[i].name = theName + counter;
      }
      var insertHere = document.getElementById('writeroot');
      insertHere.parentNode.insertBefore(newFields, insertHere);
    }

    // 
  
  </script>


<link rel="apple-touch-icon" sizes="57x57" href="/apple-icon-57x57.png">
<link rel="apple-touch-icon" sizes="60x60" href="/apple-icon-60x60.png">
<link rel="apple-touch-icon" sizes="72x72" href="/apple-icon-72x72.png">
<link rel="apple-touch-icon" sizes="76x76" href="/apple-icon-76x76.png">
<link rel="apple-touch-icon" sizes="114x114" href="/apple-icon-114x114.png">
<link rel="apple-touch-icon" sizes="120x120" href="/apple-icon-120x120.png">
<link rel="apple-touch-icon" sizes="144x144" href="/apple-icon-144x144.png">
<link rel="apple-touch-icon" sizes="152x152" href="/apple-icon-152x152.png">
<link rel="apple-touch-icon" sizes="180x180" href="/apple-icon-180x180.png">
<link rel="icon" type="image/png" sizes="192x192"  href="/android-icon-192x192.png">
<link rel="icon" type="image/png" sizes="32x32" href="/favicon-32x32.png">
<link rel="icon" type="image/png" sizes="96x96" href="/favicon-96x96.png">
<link rel="icon" type="image/png" sizes="16x16" href="/favicon-16x16.png">
<link rel="manifest" href="/manifest.json">
<meta name="msapplication-TileColor" content="#ffffff">
<meta name="msapplication-TileImage" content="/ms-icon-144x144.png">
<meta name="theme-color" content="#ffffff">
</head>

<body>

  <div class="container">
    <h2>PRODUKTE ANGEBOT</h2>
    <div id="readroot" style="display: none">

      <input type="button" value="Formular Entfernen" onclick="this.parentNode.parentNode.removeChild(this.parentNode);" />
      <!--<input type="hidden" name="div_count" style="display:none">-->
      <div class="panel panel-default">
        <label class="panel-heading">Produkte</label>
        <select id="urun_turu" name="urun_turu[]" class="form-control">
          <option value="" selected>Bitte auswählen</option>
          <option value="tur">Tür</option>
          <option value="fenster">Fernster</option>
        </select>

        <label>Höhe</label>
        <input type="text" id="yukseklik" name="yukseklik[]" class="form-control">
        <label>Breite</label>
        <input type="text" id="urungenislik" name="urungenislik[]" class="form-control">
        
        <div class="row">
          <div class="col-xs-6">
            <label>Höhe</label> <select name="yukseklik_g[]" class="form-control">
              <option value="120" selected>120 cm</option>
              <option value="130">130 cm</option>
              <option value="140">140 cm</option>
              <option value="150">150 cm</option>
              <option value="160">160 cm</option>
              <option value="180">180 cm</option>
              <option value="200">200 cm</option>
              <option value="220">220 cm</option>
              <option value="240">240 cm</option>
            </select>
          </div>
          <div class="col-xs-6">
            <label>Breite</label> <select name="genislik_g[]" id="genislik_g[]" class="form-control">
              <option value="160" selected>160 cm</option>
              <option value="180">180 cm</option>
              <option value="200">200 cm</option>
              <option value="220">220 cm</option>
              <option value="240">240 cm</option>
              <option value="260">260 cm</option>
              <option value="280">280 cm</option>
              <option value="300">300 cm</option>
            </select>
          </div>
        </div>

        <label>Profildicke</label>
        <select name="profil[]" id="profil" class="form-control">
          <option value="19" selected>19 mm</option>
          <option value="26">26 mm</option>
        </select>
        <label>Stück</label>
        <input type="text" id="adet[]" name="adet[]" class="form-control" value="1" onclick="javascript:this.value=' '">

      </div>

    </div>

    <form action="calculator.php" method="post" name="formum">
      <span id="writeroot"></span>
      <lable>Kundenname:</lable><input type="text" name="musteri_ad">
      <br><lable>Email:</lable><input type="text" name="musteri_email">
      <br><lable>Telefon:</lable><input type="text" name="musteri_telefon">
      <br><lable>Adresse:</lable><input type="text" name="musteri_adres">
      <br><lable>Lieferadresse:</lable><input type="text" name="musteri_ladres">
<p> <lable>Angebot Nummer:</lable><input type="text" name="angebot_nummer">
</p>


<p></p>

      <input type="button" id="moreFields" value="Produkt Hinzufügen" class="btn btn-default" />
      &nbsp;&nbsp;
      <input type="submit" value="Angebote Machen" class="btn btn-default"/>
    </form>


    <!-- asagi kalsin -->


    <p>* Die Längeneinheit muss in cm eingegeben werden.
      <br>
    <p align="center">ai-tech</a>
  </div>





  <script>
    function arttir() {
      var sonuc = document.getElementById("sonuc");
      sonuc.value = Number(sonuc.value) + 1;
    }

    function azalt() {
      var sonuc = document.getElementById("sonuc");
      sonuc.value = Number(sonuc.value) - 1;
    }
  </script>


</body>

</html>