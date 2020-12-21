<?php

    require_once "./views/components/header.php";    
    require_once "./views/components/navbar.php";    

    $route = explode('/', $_SERVER['REQUEST_URI']);
    $route = $route[1];

    switch($route){

        case 'sum':

            require_once "./routes/sum.php";

        break;

        case 'multiplicacao':

            require_once "./routes/multiplication.php";

        break;

    }


    require_once "./views/components/footer.php";    


?>