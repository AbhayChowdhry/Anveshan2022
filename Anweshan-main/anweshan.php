<?php 
?><!DOCTYPE html>
<html>
<head>
<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<link rel="icon" href="bee.png">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
    
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<section id="team" class="pb-5">
    <div class="container">
        <h5 class="section-title h1">Following peeps are available to play</h5>
        <div class="row">

<?php
$link = mysqli_connect('localhost:3306' , 'root', '','practice');
$txtName=$_POST["txtname"];
$email = $_POST["email"];
$year = $_POST["year"];
$txtsport = $_POST["select"];
$level = $_POST["select_lev"];
$start = date('Y-m-d H:i:s',strtotime($_POST['start']));
$end = date('Y-m-d H:i:s',strtotime($_POST['end']));



$sql = "INSERT INTO students (name,email,year, sport,level, start, end) VALUES ('$txtName','$email','$year', '$txtsport','$level' ,'$start', '$end')";
// insert in database 
mysqli_query($link,"DELETE FROM students WHERE end < NOW()");
$rs = mysqli_query($link, $sql);

$sq = "SELECT name,email,year,sport,level,start,end FROM students WHERE sport='$txtsport' AND level='$level' AND ((start between '$start' AND '$end') OR
  (end between '$start' AND '$end') OR
  (start <= '$start' AND end >= '$end') OR
  (start >= '$start' AND end <= '$end')) AND (sport!='$txtsport' OR name!='$txtName' OR email!='$email' OR year!='$year' OR level!='$level' OR start!='$start' OR end!='$end')";
$result = $link->query($sq);

if ($result->num_rows > 0) {
  // output data of each row
  while($row = $result->fetch_assoc()) {
  	?>

<div class="card" style="width: 25rem;">
    <?php $ans=$row['sport']; 
                                    if(($ans=="Badminton")){ ?>
                                    <p><img class=" img-fluid" src="badminton.jfif" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Tennis")){ ?>
                                    <p><img class=" img-fluid" src="tennis.jfif" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Carrom")){ ?>
                                    <p><img class=" img-fluid" src="carrom.jfif" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Squash")){ ?>
                                    <p><img class=" img-fluid" src="squash.jfif" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Football")){ ?>
                                    <p><img class=" img-fluid" src="football.jfif" alt="card image"></p>
                                    <?php }?>

    <div class="card-body">
      <h5 class="card-title"><?php echo $row['name']; ?></h5>
      <p class="card-text"><?php echo $row['year']; ?></p>
      <?php
      date_default_timezone_set('Asia/Kolkata'); 
      $datetime = date("Y-m-d H:i:s");
// Subtract time from datetime
$diff = abs(strtotime($row['end']) - strtotime($datetime));
$years = floor($diff / (365*60*60*24));
  $months = floor(($diff - $years * 365*60*60*24)
                                 / (30*60*60*24));
  $days = floor(($diff - $years * 365*60*60*24 -
               $months*30*60*60*24)/ (60*60*24));
  $hours = floor(($diff - $years * 365*60*60*24
         - $months*30*60*60*24 - $days*60*60*24)
                                     / (60*60));
  $minutes = floor(($diff - $years * 365*60*60*24
           - $months*30*60*60*24 - $days*60*60*24
                            - $hours*60*60)/ 60);
      ?>
      <a href="mailto:<?php echo $row['email']; ?>?subject=BumbleBee request for your <?php echo $row['sport']; ?> slot&body=Hi <?php echo $row['name']; ?> Would you like to play <?php echo $row['sport']; ?> now?" class="btn btn-primary">Invite</a>

Free for next <?php echo ( $minutes ); ?> mins
    </div>
  </div>



                                    
                                  
    
  <?php }?>
  </div>
    </div>
</section>
<?php
} else {
  echo "0 results";
}
?>
