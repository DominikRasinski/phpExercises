<?php

// Uruchomienie sesji

session_start();

?>

<!DOCTYPE html>

<html>

    <body>

    <?php

    echo "Your name is " . $_SESSION['name'] . '</br>';
    echo "My favorite color is " . $_SESSION['color']; 

    ?>

    </body>

</html>