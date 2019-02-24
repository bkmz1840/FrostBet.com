<?php
session_start();
    require "connection.php";


    $team_left = $_POST['team_left'];
    $team_right = $_POST['team_right'];
    $tournament = $_POST['tournament'];
    $date = $_POST['date'];

    $match = R::dispence('matches');
    $match['team_left'] = $team_left;
    $match['team_right'] = $team_right;
    $match['tournament'] = $tournament;
    $match['date'] = $date;
    R::store($match);
    echo "0";
?>