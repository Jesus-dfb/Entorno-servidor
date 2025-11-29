<?php
$dado = rand(1, 6);

switch ($dado) {
    case 1:
        echo "Pifia";
        break;
    case 6:
        echo "Crítico";
        break;
    default:
        echo "Tirada normal";
        break;
}
?>