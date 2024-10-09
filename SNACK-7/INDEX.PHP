<?php
class Player {
    public $name; // Variabile di istanza

    function greet() {
        return "Ciao! Io sono " . $this->name; // Metodo per salutare
    }
}

// Creazione delle istanze
$nino = new Player();
$nino->name = "Nino";

$senzaNome = new Player();

$nina = new Player();
$nina->name = "Nina";

// Visualizzazione delle istanze
var_dump($nino);                   // Mostra l'oggetto $nino
var_dump($nino->greet());          // Mostra il messaggio di saluto di $nino
var_dump($nina);                   // Mostra l'oggetto $nina
var_dump($nina->greet());          // Mostra il messaggio di saluto di $nina
var_dump($senzaNome);              // Mostra l'oggetto senza nome
var_dump($senzaNome->greet());     // Mostra il messaggio di saluto di $senzaNome (sarà NULL)
?>

