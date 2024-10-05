<?php
// URL API
$url = 'https://jsonplaceholder.typicode.com/posts';

// Inisiasi CURL
$ch = curl_init();

// Set opsi CURL untuk GET request
curl_setopt($ch, CURLOPT_URL, $url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi CURL
$response = curl_exec($ch);

// Tutup CURL
curl_close($ch);

// Decode JSON response menjadi array PHP
$data = json_decode($response, true);

// Tampilkan 5 data pertama
$lima_pertama = array_slice($data, 0, 5);
print_r($lima_pertama);
?>
