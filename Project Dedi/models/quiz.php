<?php


    require_once "../database/query.php";

    class Quiz extends Query {
       protected $table = "quiz";   
    }

    $quiz = new Quiz();


?>