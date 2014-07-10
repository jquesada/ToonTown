<?php 
include 'db_connection.php';
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />
<title>Team Squid Rises - Mayor of ToonTown</title> 
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1/jquery.min.js"></script>
<script type="text/javascript" src="js/ajax.js"></script>
      <meta name="viewport" content="width=device-width, initial-scale=1"> 
        
      <link rel="stylesheet" href="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.css" />
      <link rel="stylesheet" href="css/themes/police.css" type="text/css" /> 
      <link rel="stylesheet" href="css/themes/swatcheff.css" />
      <link rel="stylesheet" href="css/themes/styles.css" />
       
      <script src="http://code.jquery.com/jquery-1.7.2.min.js"></script>
      <script src="http://code.jquery.com/mobile/1.2.0-alpha.1/jquery.mobile-1.2.0-alpha.1.min.js"></script>
</head>
<body>

<?php 

$act = $_POST['action'];
$registerId = $_POST['register-id'];
$voters = $mysqli->query("SELECT * FROM Voters WHERE VOTERID=$registerId");
$count = $voters->num_rows;

if (($registerId == 1234) || ($registerId >= 1001) && ($registerId <= 1049))
{
      print "Character pages: Bugs Bunny<br />
      Woody<br />
      Woody the Woodpecker<br />";

      if ($count > 0)
      {
            $getBugs = $mysqli->query("SELECT VOTES FROM Votes WHERE CANDIDATE='Bugs'");
            $bugsRow= $getBugs->fetch_assoc();
            $bugsVotes= $bugsRow['VOTES'];

            $getWoody = $mysqli->query("SELECT VOTES FROM Votes WHERE CANDIDATE='Woody'");
            $woodyRow= $getWoody->fetch_assoc();
            $woodyVotes= $woodyRow['VOTES'];

            $getWoodpecker = $mysqli->query("SELECT VOTES FROM Votes WHERE CANDIDATE='Woodpecker'");
            $woodpeckerRow= $getWoodpecker->fetch_assoc();
            $woodpeckerVotes= $woodpeckerRow['VOTES'];
            print "You have already voted <br />
            Bugs has $bugsVotes votes<br />
            Woody has $woodyVotes votes<br />
            Woody the Woodpecker has $woodpeckerVotes votes";
      }
      else
      {
            print "<form id='vote_buttons' method='post'>";
            print "<input type='submit' name='action' id='bugs-bunny' value='Vote for Bugs Bunny'><br />";
            print "<input type='submit' name='action' id='woody' value='Vote for Woody'><br />";
            print "<input type='submit' name='action' id='woody-woodpecker' value='Vote for Woody Woodpecker'>";
            print "<input type='hidden' name='hidden' id='registerid' value=$registerId>";
            print "</form>";
            print "<div id='vote-success'></div>";
      }
}
else
{

      print "Enter Your 4-Digit Voter ID:
      <form method='post'>
            <div>
                  <input type='text' name='register-id' id='register-id' value='' />
                  <input type='submit' name='register' id='register' value='Register' />
            </div>
      </form>";
            
}
?>

</body>
</html>
