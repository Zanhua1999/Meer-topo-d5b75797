<?php
$line = readline("Hoeveel landen ga je toevoegen?" . PHP_EOL);
$friends = array();
for($i = 1; $i <= $line; $i++){
    $result1 = readline("Welk land wil je toevoegen?" . PHP_EOL);
    $result2 = readline("Wat is de hoofdstad van " . $result1 . PHP_EOL);
    $array = array(
        'landen' => $result1,
        'steden' =>$result2
    );
    array_push($friends, $array);
}
foreach ($friends as $friend) {
    print($friend['landen'] . PHP_EOL );
    print($friend['steden'] . PHP_EOL );
}
?>