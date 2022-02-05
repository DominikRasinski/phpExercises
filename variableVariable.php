<?php

// zmienna zmiennej

$zmiennaPierwsza = 'hello'; //deklarwonie podstawy zmiennej 
$$zmiennaPierwsza = "Hi"; //deklaracja tej samej zmiennej lecz z inna wartoscia

echo "$zmiennaPierwsza ${$zmiennaPierwsza}"; //skladnia uzywania zmiennej zmiennej jest taka ${$nazwa_zmiennej} jak widac trzeba uzyc klamr
//aby wykonac kod poprawnie i odwolac sie do stanu nadpisania zmiennej

//klarmy sa wykorzystywane po to aby nie bylo problemu z jednoznacznoscia zmiennej, ten problem jest dosc czesty w przypadku wykorzystywania 
//tablic oraz metody zmienna zmienna np. $$a[1] - interpreter nie rozumie o co nam chodzi, czy o nadpisanie tylko zmiennej $a czy jednak indeksu 1 zmiennej $a
//dlatego aby ominac taka dwuznacznosci wykorzustuje sie taki zapis ${$a[1]} lub ${$a}[1] oba zapisy sa podobne