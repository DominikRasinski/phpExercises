<?php

if(isset($_POST['name']) && (isset($_POST['surname'])) && (isset($_POST['email']))){
    $name = $_POST['name'];
    $surname = $_POST['surname'];
    $email = $_POST['email'];

    $fileHandle = fopen('userInfo.txt', 'a');

    fwrite($fileHandle, "Name: " . $name . "\n" . "Surname: " . $surname . "\n" . "E-mail: " . $email . "\n");

    fclose($fileHandle);

}

?>

<html>
    <form method="post">
        Name: <input type="text" name="name" /></br>
        Surname: <input type="text" name="surname" /></br>
        E-mail: <input type="text" name="email" /></br>
        <input type="submit" name="submit" />
    </form>
</html>