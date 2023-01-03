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

foreach ($mahasiswa as $mhs) {
    echo "<td>Nama : {$mhs['nama']}";
    echo "<br>NIM : {$mhs['nim']}";
    echo "<br>Jurusan : {$mhs['jurusan']}";
    echo "<br>Email : {$mhs['email']}";
    echo "<br>Nilai : {$mhs['nilai']}";
    echo "<br>Status : {$mhs['status']}";
    echo "<br>";
}
