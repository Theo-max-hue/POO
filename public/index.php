<?php

require_once __DIR__ . "/../src/app.php";

echo "Test création d'une écurie :\n";
$Ecuriz = new Ecurie("Ecu", "calambour", "rue des chevales", "666", "ville");
echo $Ecuriz->__toString();

echo "Test création d'un rider :\n";
$Clethus = new Rider("JC", "oui", "rue des fringues", "12345", "rami", "jeu null");
echo $Clethus->__toString();

echo "Test création d'un manager :\n";
$rudolf = new Manager("Iench", "miche", "rue des managers", "490490", "ville", "manager de rue");
echo $rudolf->__toString();
