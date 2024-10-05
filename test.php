<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Posts</title>
</head>
<style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 20px;
        }
        h1 {
            color: #333;
            text-align: center;
        }
        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        th, td {
            padding: 10px;
            text-align: left;
            border: 1px solid #ccc;
        }
        th {
            background-color: #f0e918;
            color: white;
        }
        tr:nth-child(even) {
            background-color: #f2f2f2;
        }
        tr:hover {
            background-color: #e9ecef;
        }
    </style>
<body>
    <h1>Data Posts</h1>

    <table border="1" cellpadding="10" cellspacing="0">
        <thead>
            <tr>
                <th>ID</th>
                <th>Title</th>
                <th>Body</th>
            </tr>
        </thead>
        <tbody>
        <?php
                // Inisialisasi URL dan pengaturan CURL
                $url = 'https://jsonplaceholder.typicode.com/posts';
                $ch = curl_init();
                curl_setopt($ch,CURLOPT_URL, $url);
                curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
                $response = curl_exec($ch);
                curl_close($ch);

                // Ubah respon JSON menjadi array
                $data = json_decode($response, true);

                // Loop untuk menampilkan data dalam tabel
                foreach ($data as $post) {
                    echo "<tr>";
                    echo "<td>" . $post['id'] . "</td>";
                    echo "<td>" . $post['title'] . "</td>";
                    echo "<td>" . $post['body'] . "</td>";
                    echo "</tr>";
                }
            ?>
        </tbody>
    </table>

</body>
</html>