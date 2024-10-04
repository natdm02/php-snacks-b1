<?php

if (isset($_GET['name']) && isset($_GET['mail']) && isset($_GET['age'])) {
    $name = $_GET['name'];
    $mail = $_GET['mail'];
    $age = $_GET['age'];
        
    $isMailValid = filter_var($mail, FILTER_VALIDATE_EMAIL);
    
    
    $isAgeValid = filter_var($age, FILTER_VALIDATE_INT);

    if ($isNameValid && $isMailValid && $isAgeValid) {
        echo "<h1>Accesso riuscito</h1>";
    } else {
        echo "<h1>Accesso negato</h1>";
    }
} else {
    echo "<h1>Accesso negato: Parametri mancanti</h1>";
}