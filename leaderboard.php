 <?php
    $users = file("user_data.txt");
    $userLine = array();
    $usernAge = array();
    $userName;
    $userScore;
    $leaderboardCount = 0;
    $lengthOfLeaderboard = 5;

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

    <table id="container">
    <tbody>
    <tr class="head">
        <th>Rank</th>
    	<th>Participants</th>
    	<th>Scores</th>
    </tr>
    <?php
    foreach($usernAge as $key => $value){
        $leaderboardCount++;
        echo"
        <tr class=row>
            <td class=name>$leaderboardCount</td>
            <td class=rank>$key</td>
            <td class=score>$value</td>
        </tr>";
        //Print only 5 top user
        if($leaderboardCount == $lengthOfLeaderboard){
            break;
        }
    }
    ?>
    </tbody>
    </table>
</body>
</html>