<?php
// URL API
$url = 'https://jsonplaceholder.typicode.com/posts';

// Data yang akan dikirim
$post_data = ['nama' => 'Belajar Post',
    'isi' => 'Ini isi dari post',
    'userId' => 1
];

// Inisiasi CURL
$ch = curl_init($url);

// Set opsi CURL untuk POST request
curl_setopt($ch, CURLOPT_POST, true);
curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($post_data));
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_HTTPHEADER, array('Content-Type: application/x-www-form-urlencoded'));

// Eksekusi CURL dan simpan responnya
$response = curl_exec($ch);

// Tutup CURL
curl_close($ch);

// Tampilkan respon
echo $response;
?>
