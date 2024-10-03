<?php
$posts = [
    '10-01-2019' => [
        [
            'title' => 'Post 1',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 1'
        ],
        [
            'title' => 'Post 2',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 2'
        ],
    ],
    '10-02-2019' => [
        [
            'title' => 'Post 3',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 3'
        ],
    ],
    '15-05-2019' => [
        [
            'title' => 'Post 4',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 4'
        ],
        [
            'title' => 'Post 5',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 5'
        ],
        [
            'title' => 'Post 6',
            'author' => 'Michele Papagni',
            'text' => 'Testo post 6'
        ],
    ],
];



foreach ($posts as $date => $postArray) {
    echo "Data: " . $date . "<br>"; 
    foreach ($postArray as $post) {
        echo "Titolo: " . $post['title'] . "<br>"; 
        echo "Autore: " . $post['author'] . "<br>"; 
        echo "Testo: " . $post['text'] . "<br>"; 
        echo "----------------------<br>"; 
    }
    echo "<br>"; 
}
?>