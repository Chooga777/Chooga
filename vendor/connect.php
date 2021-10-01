<?php
    class Connect{
        /**
         * @param $connect
         */
        function check_connect($connect){
            if (!$connect) {
                die('Error connect to DataBase');
            }
        }
    }
    $connect = mysqli_connect('localhost', 'root', 'root', 'text');
    $CONNECT = new Connect();
    $CONNECT ->check_connect($connect);
    ?>
