<?php
// URL API dengan ID post yang akan dihapus (misalnya post ID 1)
$url = 'https://jsonplaceholder.typicode.com/posts/1';

// Inisiasi CURL
$ch = curl_init($url);

// Set opsi CURL untuk DELETE request
curl_setopt($ch, CURLOPT_CUSTOMREQUEST, "DELETE");
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);

// Eksekusi CURL
$response = curl_exec($ch);

// Tutup CURL
curl_close($ch);

// Tampilkan respon
echo $response;
?>
