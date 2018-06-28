<!DOCTYPE html>
<html>
<head>
	<title>Form Pembelian Kosmetik</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<script language="Javascript">
  function hitungtotal(){

    var jenis = (document.fform.ijenis.value);
    var jumlahpaket = (document.fform.ijumlah.value);
    
    var ht = 0.0;
    var sub = 0.0;
    var diskon = 0.0;
    var total = 0.0;

    if(jenis=="bedak"){
      ht = 37000;
    }
    else if(jenis=="lipstik"){
      ht = 365000;
    }
    else if(jenis=="mascara"){
      ht = 25000;
    }else if (jenis == "eyeliner") {
      ht = 18000
    }else if (jenis == "facial foam") {
      ht = 30000
    } else if (jenis == "serum") {
      ht = 20000
    }
	else if (jenis=="bb_cream_wardah"){
		ht = 25000
	}
	else if (jenis=="wardah_white_scret"){
		ht = 23000
	}

    sub = jumlahpaket*ht;

    document.fform.osub.value=eval(sub);
    document.fform.otiket.value=eval(ht);
    document.fform.ototal.value=eval(total);
    document.fform.otiket.value=eval(ht);
  
  }
</script>
<body>
	<form method="post" action="simpandata.php" name="fform">
	<div class="container">
  <form action="action_page.php">
    <div class="row">
      <div class="col-25">
        <label for="lname">Nama Pesanan</label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="txtnama" placeholder="Nama Pesanan">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country">Jenis Produk</label>
      </div>
      <div class="col-75">
        <select id="country" name="ijenis">
          <option value="bedak">Bedak</option>
          <option value="lipstik">Lipstik</option>
          <option value="eyeliner">eyeliner</option>
          <option value="mascara">mascara</option>
		  <option value="bb_cream_wardah">bb cream wardah</option>
		  <option value="wardah_white_scret">wardah white scret</option>
        </select>
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <label for="fname">Jumlah Beli</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="ijumlah" placeholder="Jumlah Pesan Produk">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <input type="button" name="hitung" value="hitung" onclick="hitungtotal()">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Harga Produk</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="otiket">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Total Harga</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="osub">
      </div>
    </div>
     <div class="row">
      <div class="col-25">
        <!--<label for="fname">Total Harga</label>-->
      </div>
      <div class="col-75">
       <!-- <input type="text" id="fname" name="ototal">-->
          <label for="fname">*silahkan lakukan pembayaran ke ATM BRI<br>(A/N : Tiket Konser 0133-02-325621-25-1)</label>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">No. Hp</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="txthp" placeholder="masukan No Hp">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="fname">Alamat Email</label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="txtemail" placeholder="Alamat Email anda">
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="subject">Alamat</label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="txtalamat" style="height:200px"></textarea>
      </div>
    </div>
		<input type="submit" value="simpan">
      <button class="button">Lihat Data </button></a> 
			</div>
		</form>
	  </form>
</body>
</html>