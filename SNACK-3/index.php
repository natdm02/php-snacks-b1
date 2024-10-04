<?php
 
    $db = [
        'teachers' => [
            [
                'name' => 'Michele',
                'lastname' => 'Papagni'
            ],
            [
                'name' => 'Fabio',
                'lastname' => 'Forghieri'
            ]
        ],
        'pm' => [
            [
                'name' => 'Roberto',
                'lastname' => 'Marazzini'
            ],
            [
                'name' => 'Federico',
                'lastname' => 'Pellegrini'
            ]
        ]
            ];


?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SNACK-3</title>
    <link rel="stylesheet" href="style.css">

</head>
<body>
    <main>
        <?php
            foreach ($db as $key => $list) { ?>
                <article>
                    <h2><?= ucfirst($key); ?></h2>
                    <ul>
                        <?php 
                        
                        foreach ($list as $personValue) { 
                        ?>
                        <li class="<?= $key; ?>">
                            <?= $personValue["name"] . ' ' . $personValue["lastname"]; ?>
                        </li>
                        <?php } ?>
                    </ul>
                </article>
        <?php } ?>
    </main>
    
</body>
</html>