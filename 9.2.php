<?php
$a = 5;
$b = 4;

// Array of expressions to evaluate
$expressions = [
    "$a == $b" => ($a == $b),
    "$a != $b" => ($a != $b),
    "$a > $b" => ($a > $b),
    "$a < $b" => ($a < $b),
    "($a != $b) && ($a > $b)" => (($a != $b) && ($a > $b)),
    "($a != $b) || ($a > $b)" => (($a != $b) || ($a > $b))
];

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Expression Evaluation</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f0f0;
            padding: 20px;
        }
        .table {
            width: 50%;
            margin: auto;
            border-collapse: collapse;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            background-color: #fff;
        }
        .table th, .table td {
            padding: 10px;
            text-align: center;
            border: 1px solid #ccc;
        }
        .table th {
            background-color: #f0f0f0;
        }
        .true {
            color: green;
            font-weight: bold;
        }
        .false {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table class="table">
    <tr><th>Expression</th><th>Result</th></tr>
    <?php foreach ($expressions as $expr => $result): ?>
        <tr>
            <td><?php echo htmlspecialchars($expr); ?></td>
            <td class="<?php echo $result ? 'true' : 'false'; ?>"><?php echo $result ? 'true' : 'false'; ?></td>
        </tr>
    <?php endforeach; ?>
</table>

</body>
</html>
