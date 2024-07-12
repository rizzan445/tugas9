<?php
$gaji = 1000000;
$tapera_rate = 0.03; // 3% TAPERA
$tapera_deduction = $gaji * $tapera_rate;
$thp = $gaji - $tapera_deduction;
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Perhitungan Gaji Bersih</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background-color: #fff;
            padding: 20px;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
        }
        .result {
            margin-top: 15px;
            padding: 10px;
            background-color: #f9f9f9;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        .result p {
            margin: 5px 0;
        }
    </style>
</head>
<body>

<div class="container">
    <h2>Perhitungan Gaji Bersih setelah Potongan TAPERA</h2>
    <div class="result">
        <p>Gaji sebelum potongan TAPERA: RP. <?php echo number_format($gaji, 0, ',', '.'); ?></p>
        <p>Potongan TAPERA (<?php echo ($tapera_rate * 100); ?>%): RP. <?php echo number_format($tapera_deduction, 0, ',', '.'); ?></p>
        <p>Gaji bersih yang dibawa pulang: RP. <?php echo number_format($thp, 0, ',', '.'); ?></p>
    </div>
</div>

</body>
</html>
