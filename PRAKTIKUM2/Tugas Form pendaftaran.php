<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title> Form Pendaftaran Mahasiswa Baru</title>
</head>
<body>
    <form action="form.php" method="post">
    <style>
      body {
        font-family: Arial, sans-serif;
        background-color: #f0f8ff;
        margin: 0;
        padding: 0;
      }

input[type=text] , select {
  width: 100%;
  padding: 12px 20px;
  margin: 8px 0;
  display: inline-block;
  border: 1px solid #ccc;
  border-radius: 4px;
  box-sizing: border-box; }

input [type=submit] {
  width: 10%;
  background-color: #4CAF50;
  color: white;
  padding: 14px 20px;
  margin: 8px 0;
  border: none;
  border-radius: 4px;
  cursor: pointer; }

input [type=submit]:hover {
  background-color: #45a049;
  }
div {
  border-radius: 5px;
  background-color: #f2f2f2;
  padding: 20px;
  }

.kotakform {
  width: 75%;
  margin: 20px auto 20px auto;
  }
h1{
  text-align: center;
  margin: 80px auto 0 auto;
  }
</style>
<body>

<h1>FORMULIR PENDAFTARAN</h1>



 <form action="form.php" method = "POST">
  <label for ="nama">Nama Lengkap</label>
   <input type="text" id="nama" name="nama" placeholder = "Nama Lengkap Anda">
 <label for="nik">NIK</label>
   <input type="text" id="nik" name="nik" placeholder="NIK Anda">
 <label for="tempat_lahir">Tempat Lahir</label>
   <input type="text"id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir Anda">
  <label for="tanggal_lahir">Tanggal Lahir</label>
   <input type="text" id="tanggal_lahir" name="tanggal_lahir" placeholder="Tanggal Lahir Anda">
  <label for="address">Alamat</label>
   <input type="text"id="address" name="address" placeholder="Alamat Anda">
  <label for="no_hp">No. HP</label>
   <input type="text"id="no_hp" name="no_hp" placeholder="No. HP Anda">
  <label for="agama">Agama</label>
    <input type="text"id="agama" name="agama"placeholder="Agama Anda">
  <label for="jenis_kelamin"> Jenis Kelamin </label>
  
  <p><input type='radio' name='jenis_kelamin' value='laki-laki'> 
      <label for="laki-laki">Laki-laki</label>
  <p><input type='radio' name='jenis_kelamin' value='perempuan'>
      <label for="perempuan"> Perempuan </label>
  </select> <br> <br>
  <label for="jurusan">Jurusan</label>
  <select id="jurusan" name="jurusan">
    <option value="TI">Teknik Informatika</option>
    <option value="TM">Teknik Mesin</option>
  </select>

  <h2>Data Orang Tua</h2>
  <h3>Data Ibu</h3>

  <label for ="nama_ibu">Nama Lengkap</label>
   <input type="text" id="nama_ibu" name="nama_ibu" placeholder = "Nama Lengkap">
  <label for="tempat_lahir01">Tempat Lahir</label>
   <input type="text" id="tempat_lahir01" name="tempat_lahir01" placeholder="Tempat Lahir">
  <label for="tanggal_lahir01">Tanggal Lahir</label>
   <input type="text" id="tanggal_lahir01" name="tanggal_lahir01" placeholder="Tanggal Lahir">
  <label for="umur">Umur</label>
    <input type="text" id="umur" name="umur" placeholder="Umur">
  <label for="agama01">Agama</label>
    <input type="text" id="agama01" name="agama01" placeholder="Agama">
  <label for="pekerjaanIbu">Pekerjaan</label>
    <input type="text"id="pekerjaanIbu" name="pekerjaaanIbu" placeholder="Pekerjaan">



  <h3>Data Ayah</h3>
  <label for ="nama_ayah">Nama Lengkap</label>
   <input type="text" id="nama_ayah" name="nama_ayah" placeholder = "Nama Lengkap">
  <label for="tempat_lahir02">Tempat Lahir</label>
   <input type="text" id="tempat_lahir02" name="tempat_lahir02" placeholder="Tempat Lahir">
  <label for="tanggal_lahir02">Tanggal Lahir</label>
   <input type="text" id="tanggal_lahir02" name="tanggal_lahir02" placeholder="Tanggal Lahir">
  <label for="umur01">Umur</label>
    <input type="text" id="umur01" name="umur01"placeholder="Umur">
  <label for="agama02">Agama</label>
    <input type="text"id="agama02"name="agama02"placeholder="Agama">
  <label for="pekerjaanAyah">Pekerjaan</label>
    <input type="text"id="pekerjaanAyah" name="pekerjaaanAyah" placeholder="Pekerjaan">

	<label for="penghasilan"> Penghasilan </label>
  	
  		<p><input type='radio' name='penghasilan' value='<Rp 1.500.000'> 
      <label for="Rp. 1.500.000">Rp. 1.500.000</label>
  		<p><input type='radio' name='penghasilan' value='Rp 1.500.000-Rp 3.500.000'> 
      <label for="Rp 1.500.000-Rp 3.500.000">Rp 1.500.000-Rp 3.500.000</label>
  		<p><input type='radio' name='penghasilan' value='Rp >Rp 4.500.000'> 
      <label for="Rp 4.500.000">Rp 4.500.000</label>
  	</select> <br> <br>
  <label for="alamat01">Alamat</label>
   <input type="text"id="alamat01"name="alamat01"placeholder="Alamat Orang Tua">

   <h3>Data Asal Sekolah</h3>
   <label for="tahun_lulus">Tahun Lulus</label>
   	<input type="text"id="tahun_lulus"name="tahun_lulus"placeholder="Tahun Lulus">
   <label for="asal_sekolah">Nama Asal Sekolah</label>
   	<input type="text"id="asal_sekolah"name="asal_sekolah"placeholder="Asal Sekolah">
   <label for="alamat_sekolah">Nama Asal Sekolah</label>
   	<input type="text"id="alamat_sekolah"name="alamat_sekolah"placeholder="Alamat Sekolah">	
  <input type="submit" value="submit">
  </form>
</div>
</body>
</html>