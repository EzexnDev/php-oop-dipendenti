<?php

require 'people.php';
require 'employes.php';
require 'employe_commission.php';
require 'employes_fullTime.php';
require 'hour_employes.php';

$impiegato_salariato = new employes_fullTime('Gianmarco', 'Cavaliere', 'Mario', 1020, 5, 30, 30);

try {
    $impiegato_commissione = new employe_commission('Baluardo', 'Giovani', 'piropiro', '136', 'irbudello', 'MySite', 'pippo', );
} catch (Exception $e) {
    $impiegato_commissione = new employes('Pippo', 'Pluto', 'Paperino', 'CFCF', 200, 5);
    echo $e->getMessage();
}

$impiegato_commissione->toString();
$impiegato_commissione->profitCalculation();
