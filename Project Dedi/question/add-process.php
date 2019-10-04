<?php

    include_once "../autoload.php";
    include_once $url . "models/quiz.php";

    

        $ans = $_POST['col-1'];

        $query = $quiz->insert([
            'q1' => $ans
        ]);

        if($query){
            echo "success";
        }
        else {
            echo "fail";
        }


    






?>