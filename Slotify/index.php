<?php

    include("includes/config.php");

    if(isset($_SESSION['userLoggedIn'])){

        $userLogggedIn = $_SESSION['userLoggedIn'];

    }else{

        header("Location: register.php");

    }

    


?>

<!doctype html>

<head></head>

<body>

    <?php
        
        $t = date("H:m:s Y-m-t");

        if ($t < "20") {
            echo "Have a good day! ".$t;
        } else {
            echo "Have a good night! ".$t;
        }

    ?>


    <div>This is me - MSLUKA</div>
    <table>
        <tr>
            <td></td>
            <td></td>
            <td></td>
        </tr>
    </table>

</body>

</html>