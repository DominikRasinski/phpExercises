<?php

// aby przechowywac inforamcje o aktualnej sesji i uzywac ich pomiedzy wieksza iloscia stron
// wykorzystuje sie super globalna $_SESSION ktora zbiera informacje o sesji
// inforamcje nie sa przetrzymywane na komputerach uzytkonikow jak to ma miejsce z plikami cookies
// domyslnie inforamcje sa usuwane w momencie zakonczenia pracy przegladarki

session_start(); //Aby rozpoczacz zmiebranie inforamcji do zmiennej $_SESSION najpierw nalezy uruchomic taka zmienna a robi sie to za pomoca funkcji session_start()

/**
 * zmienne 'color' oraz 'name' zteraz sa dostepne na kazdej stronie w trwajacej sesji
 */

$_SESSION['color'] = 'red'; 
$_SESSION['name'] = 'Dominik';
