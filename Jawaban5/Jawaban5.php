<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> CONTOH GUI </title>
</head>
<body>
    <h1>Formulir Pengguna</h1>

    <?php
    // Proses formulir jika data dikirimkan
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Ambil nilai dari formulir
        $nama = $_POST["nama"];
        $email = $_POST["email"];

        // Tampilkan data yang diinputkan
        echo "<h2>Data yang Diinputkan:</h2>";
        echo "<p>Nama: $nama</p>";
        echo "<p>Email: $email</p>";
    }
    ?>

    <!-- Formulir masukan -->
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" required><br>

        <label for="email">Email:</label>
        <input type="email" id="email" name="email" required><br>

        <input type="submit" value="Submit">
    </form>
</body>
</html>