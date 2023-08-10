<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style/style.css">
    <title>Kalkulator Sederhana</title>
</head>
<body>
    <div class="calculator">
        <h2>Kalkulator Sederhana</h2>
        <form action="" method="post">
            <label for="bilangan1">Bilangan 1:</label>
            <input type="number" name="bilangan1" required>
            
            <label for="bilangan2">Bilangan 2:</label>
            <input type="number" name="bilangan2" required>
            
            <button type="submit" name="hitung">Hitung</button>
        </form>
        
        <?php
        // Fungsi untuk melakukan penjumlahan
        function penjumlahan($a, $b) {
            return $a + $b;
        }

        // Fungsi untuk melakukan pengurangan
        function pengurangan($a, $b) {
            return $a - $b;
        }

        // Fungsi untuk melakukan perkalian
        function perkalian($a, $b) {
            return $a * $b;
        }

        // Fungsi untuk melakukan pembagian
        function pembagian($a, $b) {
            if ($b != 0) {
                return $a / $b;
            } else {
                return "Tidak dapat melakukan pembagian dengan 0";
            }
        }
        
        if (isset($_POST["hitung"])) {
            $bilangan1 = $_POST["bilangan1"];
            $bilangan2 = $_POST["bilangan2"];
            
            $hasilPenjumlahan = penjumlahan($bilangan1, $bilangan2);
            $hasilPengurangan = pengurangan($bilangan1, $bilangan2);
            $hasilPerkalian = perkalian($bilangan1, $bilangan2);
            $hasilPembagian = pembagian($bilangan1, $bilangan2);
            
            echo "<h3>Hasil penjumlahan adalah = $hasilPenjumlahan</h3>";
            echo "<h3>Hasil pengurangan adalah = $hasilPengurangan</h3>";
            echo "<h3>Hasil perkalian adalah = $hasilPerkalian</h3>";
            echo "<h3>Hasil pembagian adalah = $hasilPembagian</h3>";
        }
        ?>
    </div>
</body>
</html>
