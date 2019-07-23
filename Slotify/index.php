<?php

    include("includes/config.php");

    if(isset($_SESSION['userLoggedIn'])){

        $userLogggedIn = $_SESSION['userLoggedIn'];

    }else{

        header("Location: register.php");

    } 


    //
    
    $t = date("H:m:s Y-m-t");

    if ($t < "20") {
        echo "Have a good day! ".$t;
    } else {
        echo "Have a good night! ".$t;
    }
    

?>

<!doctype html>

<head>
    <title>Welcome to Slotify</title>
    <link rel="stylesheet" type="text/css" href="assets/css/style.css">
</head>

<body>

    <div id="nowPlayingBarContainer">
        <div id="nowPlayingBar">
            <div id="nowPlayingLeft"></div>
            <div id="nowPlayingCenter">
                <div class="content playerControlls">
                    <div class="buttons">

                        <button class="controllButton shuffle" title="Shuffle button">
                            <img src="assets/images/icons/shuffle.png" alt="Shuffle">
                        </button>

                        <button class="controllButton previous" title="Previous button">
                            <img src="assets/images/icons/previous.png" alt="Previous">
                        </button>

                        <button class="controllButton play" title="Play button">
                            <img src="assets/images/icons/play.png" alt="Play">
                        </button>

                        <button class="controllButton pause" title="Pause button" style="display:none">
                            <img src="assets/images/icons/pause.png" alt="Pause">
                        </button>

                        <button class="controllButton next" title="Next button">
                            <img src="assets/images/icons/next.png" alt="Next">
                        </button>

                        <button class="controllButton repeat" title="Repeat button">
                            <img src="assets/images/icons/repeat.png" alt="Repeat">
                        </button>

                    </div>
                </div>
            </div>
            <div id="nowPlayingright"></div>
        </div>
    </div>

</body>

</html>