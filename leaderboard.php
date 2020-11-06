 <?php
    $users = file("user_data.txt");
    $userLine = array();
    $usernAge = array();
    $userName;
    $userScore;
    $leaderboardCount = 0;
    $lengthOfLeaderboard = 10;

    foreach($users as $line){
        $userLine[] = explode(",", $line);

        foreach($userLine as $user){
            //Initializing and Associative array
            $usernAge[$user[0]] = $user[2];
        }
    }
    asort($usernAge);
?>

<!DOCTYPE html>
<html>
<head>
    <title>Leaderboard</title>
    <link href="leaderboard.css" type="text/css" rel="stylesheet" />
</head>
<body>

	<h1>WHO WANTS TO BE A MILLIONAIRE?</h1>
	<img src="logo.png"><br/>
    <h1>Leaderboard</h1>

    <div id="container">
    <?php
    foreach($usernAge as $key => $value){
        $leaderboardCount++;
        echo "<div class=row>
            <div class=name>$key</div><div class=score>$value</div>
        </div>";
        //Print only 10 top user
        if($leaderboardCount == $lengthOfLeaderboard){
            break;
        }
    }
    ?>
    </div>
</body>
</html>