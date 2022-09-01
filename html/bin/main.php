<?php
require_once "builder.php";

$themes = ["dark","light"];
$colors = ["orange", "blue", "purple", "red", "yellow", "green"];

if(count($argv) <= 1){
    help();
    exit;
}

function help(){
    echo"Commands list:\n\n css\n build:prod\n build:dev\n build:all\n help\n";
}

switch ($argv[1]) {
    case 'css':
        Builder::generateCssfiles($themes,$colors);
        break;
    case 'build:prod': 
        Builder::generateProdFiles($themes,$colors);
        break;
    case 'build:all':
        Builder::generateDevFiles($themes,$colors);
        Builder::generateProdFiles($themes,$colors);
        break;
    case 'build:dev':
        Builder::generateDevFiles($themes,$colors);
        break;
    case 'help':
        help();
        break;
    default:
        help();
        break;
}

