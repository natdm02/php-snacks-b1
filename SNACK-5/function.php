<?php

function isPalindrome($str) {
    $reversedStr = '';
    $length = 0;

    
    for ($i = 0; isset($str[$i]); $i++) {
        $length++;
    }

    
    for ($i = $length - 1; $i >= 0; $i--) {
        $reversedStr .= $str[$i];
    }

    return $str === $reversedStr;
}

$input = $_GET['inputString'] ?? '';
$result = ''; 

if (!empty($input)) {
    if (isPalindrome($input)) {
        $result = 'Il tuo input "' . $input . '" è un palindromo';
    } else {
        $result = 'Il tuo input "' . $input . '" non è un palindromo';
    }
}
?>




<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<div style="color: <?= isPalindrome($input) ? 'green' : 'red'; ?>;">
        <h2><?= $result; ?></h2>
    </div>
    <a href="index.php">torna indietro</a>
</body>
</html>