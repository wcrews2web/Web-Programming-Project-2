<?php

    $users = file("user_data.txt");
    //$user = [];
    $userName;
    $userScore;
    $lengthOfLeaderboard = 10;

     foreach($users as $line){
        $user = explode(",", $line);
        
     }
     print_r($user);
    

?>

<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <link href="leaderboard.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<h1>Who Wants To Be A Millionaire ?</h1>
    <h1>Leaderboard</h1>

    <div id="container">
        <div class="row">
            <div class="name">Player1</div><div class="score">430</div>
        </div>
    
        <div class="row">
            <div class="name">Player2</div><div class="score">580</div>
        </div>
    
        <div class="row">
            <div class="name">Player3</div><div class="score">310</div>
        </div>
    
        <div class="row">
            <div class="name">Player4</div><div class="score">640</div>
        </div>
    
        <div class="row">
            <div class="name">Player5</div><div class="score">495</div>
        </div>
    </div>


</body>
</html>