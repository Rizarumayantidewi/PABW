<!DOCTYPE html>
<html lang="en">
  
<!-- ini adalah data array nya -->
<?php
 $mahasiswa = [
     [
       "nama" => "Rizky",
       "nim" => "123456",
       "jurusan" => "Teknik Informatika",
       "email" => "rizky@gmail.com",
       "nilai"=> 90,
       "status"=> "Lulus"
     ],
     [  
       "nama" => "Rizky",
       "nim" => "123456",
       "jurusan" => "Teknik Informatika",
       "email" => "rizky@gmail.com",
       "nilai"=> 60,
       "status"=> "Tidak"
     ],
     [
       "nama" => "Rizky",
       "nim" => "123456",
       "jurusan" => "Teknik Informatika",
       "email" => "rizky@gmail.com",
       "nilai"=> 80,
       "status"=> "Lulus"
     ]
     ];
     
     ?>

  
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perulangan</title>
</head>
<body>
    <table border="1">
        <thead>
            <tr bgcolor="#f0f1f1" bordercolor="#f0f1f1">
                <th rowspan="2">Nama</th>
                <th rowspan="2">NIM</th>
                <th rowspan="2">Jurusan</th>
                <th rowspan="2">Email</th>
                <th rowspan="2">Nilai</th>
                <th rowspan="2">Status</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td>Rizky</td>
                <td>123456</td>
                <td>TI</td>
                <td>rizky@gmail.com</td>
                <td>90</td>
                <td>Lulus</td>
            </tr>
            <tr>
                <td>Rizky</td>
                <td>123456</td>
                <td>TI</td>
                <td>rizky@gmail.com</td>
                <td>60</td>
                <td>Tidak</td>
            </tr>
            <tr>
                <td>Rizky</td>
                <td>123456</td>
                <td>TI</td>
                <td>rizky@gmail.com</td>
                <td>80</td>
                <td>Lulus</td>
            </tr>
        </tbody>
    </table>
</body>
</html>

<?php 
   foreach ($mahasiswa as $mhs) {
       echo "<td>Nama : {$mhs['nama']}";
     echo "<br>NIM : {$mhs['nim']}";
     echo "<br>Jurusan : {$mhs['jurusan']}";
     echo "<br>Email : {$mhs['email']}";
     echo "<br>Nilai : {$mhs['nilai']}";
     echo "<br>Status : {$mhs['status']}";
     echo "<br>";
 }
 ?>
 
