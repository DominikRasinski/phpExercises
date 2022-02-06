<!-- 
    Metoda POST ma to do siebie ze jest o wiele bezpieczniejsza niz metoda GET poniewaz nie przesyla informacji 
    pobranych z formularza za sprawa URL tylko wysylane te dane za sprawa zadania HTTP, ktore jest nie widoczne dla nas i osob postronych
    Metoda POST rowniez nie posiada ograniczenia w przesylaniu ilosci informacji jak matoda GET, ktora ma ograniczenia na okolo 2000 znakow
-->

<html>
    <form action="postGetInfoForm.php" method="post"> <!-- parametr action prezyzuje gdzie dane z formularzu maja zostac wyslane -->

    <p>Name: <input type="text" name="name" /></p> <!-- parametr 'name' jest punketem dostepu dla php czyli jezyk php moze pobierac wartosci z html za pomoca odniesienia do parametru 'name' -->

    <p>Age: <input type="text" name="age" /></p>

    <p><input type="submit" name="submit" value="Submit" /></p>

    </form>
</html>