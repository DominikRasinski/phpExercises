<!-- 
    Metoda GET jest dosc nie bezpieczna metoda dla przesylania informacji wrazliwych typu e-mail, pesel itp. poniewaz jej
    rezultaty, jak zmienne wyslane oraz wartosci tych zmiennych sa widoczne w adresie URL, rowniez metoda GET posiada ograniczenie
    przesylanych informacji, moze ona przeslac okolo 2000 znakow w metodzie POST nie ma takiego ograniczenia
 -->


<html>
    <form action="getInfoForm.php" method="get"> <!-- parametr action prezyzuje gdzie dane z formularzu maja zostac wyslane -->

    <p>Name: <input type="text" name="name" /></p> <!-- parametr 'name' jest punketem dostepu dla php czyli jezyk php moze pobierac wartosci z html za pomoca odniesienia do parametru 'name' -->

    <p>Age: <input type="text" name="age" /></p>

    <p><input type="submit" name="submit" value="Submit" /></p>

    </form>
</html>