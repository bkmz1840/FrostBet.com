<?php
session_start();
    require "connection.php";


    $team_left = $_POST['left_team'];
    $team_right = $_POST['right_team'];
    $tournament = $_POST['tournament_name'];
    $date = $_POST['date'];

    $match = R::dispense('matches');
    $match->team_left = $team_left;
    $match->team_right = $team_right;
    $match->tournament = $tournament;
    $match->date = $date;
    R::store($match);
    
/*if(R::findOne('matches', 'team_left = ?', array($team_left))){ echo "Матч добавлен, жди 4с"; }
    else {echo "Что-то не так"; }
    sleep(5); */
    header('Location: ../index.php');
?>