<?php
    include_once('./conf/conf.php');
    include_once('./models/PlayerModel.php');
    include_once('./controllers/playerController.php');

    //! setup
    $conf = new Config();
    $modelPlayer = necontrollerPlayer = w PlayerModel($conf);
    $new PlayerController();

    //* insert and check
    $modelPlayer->checkAndInserter();

    $controllerPlayer->mvcHandler();


    


?>