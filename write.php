<?php
//very simple php script to facilitate file output

//allow requests from live.chess.com where our script is injected
header("Access-Control-Allow-Origin: http://live.chess.com");

//write pgn to file. create file if it doesnt exist and append to it if it does
file_put_contents('C:\\Users\\derpatron\\Desktop\\chessdb.pgn', $_POST['pgn'] . PHP_EOL . PHP_EOL, FILE_APPEND);