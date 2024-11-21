<?php
//koneksi ke database
$conn = mysqli_connect("localhost", "username", " ", "akademik");

//cek koneksi
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}

//menambahkan data mahasiswa
$sql = "INSERT INTO mahasiswa (NRP, Nama, Alamat ) VALUES ('12345', 'Afika Fuzi', 'Trayeman')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//menambahkan data dosen
$sql = "INSERT INTO dosen (NRP, Nama, Bidang_Studi) VALUES ('98765', 'Jane', 'Informatika')";

if (mysqli_query($conn, $sql)) {
  echo "New record created successfully";
} else {
  echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//menampilkan data mahasiswa dan dosen dalam bentuk tabel secara berurutan
$sql = "SELECT * FROM mahasiswa UNION ALL SELECT * FROM dosen";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
  //output data ke tabel
  echo "<table>
  <tr>
    <th>Nama</th>
    <th>NIM/NIDN</th>
    <th>Jurusan</th>
  </tr>";
  while($row = mysqli_fetch_assoc($result)) {
    echo "<tr>
    <td>" . $row["nama"] . "</td>
    <td>" . $row["nim"] . "</td>
    <td>" . $row["jurusan"] . "</td>
  </tr>";
  }
  echo "</table>";
} else {
  echo "0 results";
}

mysqli_close($conn);
?>