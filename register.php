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
      <div data-role="header"> <!--Team Squid presents-->
            <img class="squid" src="images/squid.png" alt="logo" />
      </div><!-- /Team Squid preents -->
<?php 
$candidate = $_POST['candidate'];
$voter = $_POST['voter'];

if ($candidate == 'bugsbunny')
{
      $sql="SELECT VOTES FROM Votes WHERE CANDIDATE='Bugs'"; 
      $result = $mysqli->query($sql); 
      while($row = mysqli_fetch_array($result)) 
      { 
            $num = $row[0]; 
            $num++; 
      } 
      $sql2="UPDATE Votes SET VOTES='$num' WHERE CANDIDATE='Bugs'"; 
      $result2 = $mysqli->query($sql2);  
      if ($voter != 1234)
      {
            $mysqli->query("INSERT INTO Voters VALUES (null,'$voter')");
      }

      print "You Voted for Bugs Bunny! <br />";
      print $registerId;
}
else if ($candidate == 'woody')
{
      $sql3="SELECT VOTES FROM Votes WHERE CANDIDATE='Woody'"; 
      $result3 = $mysqli->query($sql3); 
      while($row2 = mysqli_fetch_array($result3)) 
      { 
            $num2 = $row2[0]; 
            $num2++; 
      } 
      $sql4="UPDATE Votes SET VOTES='$num2' WHERE CANDIDATE='Woody'"; 
      $result4 = $mysqli->query($sql4);  
      if ($voter != 1234)
      {
            $mysqli->query("INSERT INTO Voters VALUES (null,'$voter')");
      }

      print "You Voted for Woody! <br />";
}
else if ($candidate == 'woodywoodpecker')
{
      $sql5="SELECT VOTES FROM Votes WHERE CANDIDATE='Woodpecker'"; 
      $result5 = $mysqli->query($sql5); 
      while($row3 = mysqli_fetch_array($result5)) 
      { 
            $num3 = $row3[0]; 
            $num3++; 
      } 
      $sql6="UPDATE Votes SET VOTES='$num3' WHERE CANDIDATE='Woodpecker'"; 
      $result6 = $mysqli->query($sql6);  
      if ($voter != 1234)
      {
            $mysqli->query("INSERT INTO Voters VALUES (null,'$voter')");
      }

      print "You Voted for Woody Woodpecker! <br />";
}
else
{
      print "Error!";
}
print "<div class='voting-results'></div>";
?>
<div data-role="footer"> <!--Footer with a thank you message-->
         <img class="thanks" src="images/thankyou.png" alt="" />
      </div><!-- /Footer with a thank you message -->
</body>
</html>