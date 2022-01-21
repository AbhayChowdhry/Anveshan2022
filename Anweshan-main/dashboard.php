<html>
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
 <link rel="icon" href="bee.png">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/normalize/5.0.0/normalize.min.css">
<link rel='stylesheet prefetch' href='https://fonts.googleapis.com/css?family=Roboto:400,700'>
<link rel='stylesheet prefetch' href='http://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.6.3/css/font-awesome.min.css'>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<link href="https://fonts.googleapis.com/css2?family=Nunito:ital,wght@0,400;0,500;1,300&display=swap" rel="stylesheet">

<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

<link href="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
<script src="//maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"></script>
<script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<link href="style.css" rel="stylesheet">
<title>BumbleBee</title>

<style>

body{
    font-family: nunito;
    /*background-image: url("hi.jpeg");*/
    background-size: cover;
background-repeat: no-repeat;
background-attachment: fixed;
 background-image-opacity: 0.5;
 background-image: linear-gradient(to bottom, rgba(252, 250, 250, 0.2) 0%,rgba(260, 260, 260, 0.2) 100%), url("https://wallpaperaccess.com/full/2767049.jpg");
/*background-filter: blur(8px);
  background-webkit-filter: blur(8px);
backdrop-filter: blur(5px);*/
}
/*.bg{
background-image: url("hi.jpeg");
opacity:0.2;
width:300px;
height:300px;
}*/
$itemGrow: 1.2;
$duration: 250ms;

html {
  scroll-behavior: smooth;
}

h1 {
  color: red;
  text-align: center;
}

.wrapper {
  display: grid;
  grid-template-columns: repeat(3,100%);
  overflow:hidden;
  scroll-behavior: smooth;


  section {
    width: 100%;
    position: relative;
    display: grid;
    grid-template-columns: repeat(5, auto);
    margin: 20px 0;
    
    .item {
      position: relative;
      padding: 0 2px;
      transition: $duration all;
      display: inline-block;
      height:40px;
      
      &:hover { 
        margin: 0 40px;
        transform: scale(1.2);
      }


      .heading {
        position: absolute;
        bottom: 20px;
        left: 20px;
        color: #fff;
      }

      .duration {
        position: absolute;
        bottom: 0;
        left: 20px;
        color: #fff;
        height:40px;
      }
      
    }

    .arrow__btn {
      position: absolute;
      color: #fff;
      text-decoration: none;
      font-size: 16px;
      background:rgb(0,0,0);
      width: 100px;
      height: 100px;
      padding: 20px;
      text-align: center;
      z-index: 5;
      top: 50%;
      display: inline-block;
    }

    .left-arrow {
      font-size: 16px;
      width: 100px;
      height: 100px;
      top:50; bottom:50; left:0;
      display: inline-block;
      background: linear-gradient(-90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%);
    }
    
    .right-arrow {
      font-size: 16px;
      width: 100px;
      height: 100px;
      top:50; bottom:50; right: 0;
      display: inline-block;
      background: linear-gradient(90deg, rgba(0,0,0,0) 0%, rgba(0,0,0,1) 100%);
    }

  }
}
@import url('https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
/*#team {
    background: #eee !important;
}*/



.btn-primary {
    color: #545563;
    background-color: white;
    border-color: #EDEEF2;
    width: 12.5rem;
    height: 5.5rem;
    margin: 1rem;
    font-family: nunito;
    border-width: 2px;
    font-size: 1.16rem;
    border-radius: 8%;
    font-size: 1rem;
    font-weight: 590;
    transition-duration: 0.2s;
}

.radio-button input[type="radio"] {
    display: none;
  }    

.btn-primary:hover{
    background-color: #F8F9FF;
    border-color: #697BFF;
    color: #545563;

}


.radio-button input[type="radio"]:checked+label {
        background-color: #1597e5 ;
        border-color: #1597e5 ;
        box-shadow: none;
        outline: none;
        color: #F8F9FF;
        border-width: 0.2rem;
    }

  ul {
  list-style-type: none;
  margin: 0;
  padding: 0;
  overflow: hidden;
  background-color: rgba(0, 0, 0, 0);
}

li {
  float: right;
}

li a {
  display: block;
  color: rgb(3, 0, 0);
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
}

li a:hover {
  background-color: rgba(10, 255, 255, 0.815);
  border-radius: 50px;
  margin: 5%;
}
.navbar-custom{
  background-color: rgba(0,0,0, 0);
}
/*.aligncenter {
    text-align: center;
    top: 10px;
}*/
.card-img-top {
    /*width:300px;
    height:170px;*/
    margin: 10px auto 20px;
    /*display: block;*/
    border-radius:10px;
}
.card{
  margin-right:20px;
  margin-left:20px;
    margin-bottom: 30px;
    px-0;
}
h11{
  font-family:"nunito";
  font-weight: bold;
  color:blue;
  background-color: rgba(255, 255, 255, 0.2);
  align:center;
  font-size:35px;
  margin-bottom:3rem;
  margin-left:20rem;

}
h5{
  color:blue;
  font-weight: bold;
}
.navbar-brand-text{
  font-weight:bold;
  font-size:25px;
  color:black;
}
.awesomeText{
  color: #000;
    font-size: 150%;
}
    </style>
</head>

<body>


<?php
$name = $_GET['username'];
$email=$_GET["Email"];
$year=$_GET["Year"];
// echo $year;
?>
    <nav class="navbar navbar-expand-lg navbar-custom" >
      <div class="container-fluid">
        <a class="navbar-brand" href="#"><img src="logo.png" alt="" width="130" height="70"></a>
        <a class="navbar-brand-text" href="#"><?php echo $name ; ?><img src="profile.png" alt="" width="70" height="70"></a>
      </div>
    </nav>

<hr style="width:95%; height:0.2rem; margin: auto;">
<div style="margin-left: 7rem; background-color: rgba(255, 255, 255, 0.5); margin-right: 7rem; margin-top:3rem; padding-bottom:1rem; padding-left:1rem;" >
<form name="frmContact" method="post" action="">
<div class="radio-button">
<div class="wrapper" >


<section id="section1" style="display:flex; flex-direction: row; ">
    <a href="#section3" class="arrow__btn left-arrow" style="font-size: 100px; position="absolute";">‹</a>
    <div class="item">

      <input type="radio" id="control_01" name="select" value="Badminton">
  <label for="control_01" class="btn btn-primary">
  <img src="BadmintonSym.png" width = "50" height = "50" alt="Badminton img">
    <br>Badminton
  </label>
        
    </div>
    <div class="item">

      <input type="radio" id="control_02" name="select" value="Basketball">
  <label for="control_02" class="btn btn-primary">
  <img src="BasketBallSymb.png" width = "100" height = "50" alt="Basket Ball img">
    <br>BasketBall
  </label>
        
    </div>
    <div class="item">

      <input type="radio" id="control_03" name="select" value="Carrom">
  <label for="control_03" class="btn btn-primary">
  <img src="carromSymb.png" width = "50" height = "50" alt="Carrom img">
    <br>Carrom
  </label>
       
    </div>
    <div class="item">

      <input type="radio" id="control_04" name="select" value="Chess">
  <label for="control_04" class="btn btn-primary">
  <img src="ChessSymb.png" width = "50" height = "50" alt="Chess img">
    <br>Chess
  </label>
       
    </div>
    <div class="item">

      <input type="radio" id="control_05" name="select" value="Cricket">
  <label for="control_05" class="btn btn-primary">
  <img src="cricketSymb.png" width = "50" height = "50" alt="Cricket img">
    <br>Cricket
  </label>
       
    </div>
    <a href="#section2" class="arrow__btn right-arrow" style="font-size: 100px; position="absolute";">›</a>
  </section>

  <section id="section2" style="display:flex; flex-direction: row;">
    <a href="#section1" class="arrow__btn left-arrow" style="font-size: 100px; position="absolute";">‹</a>
    <div class="item">

      <input type="radio" id="control_06" name="select" value="Football">
  <label for="control_06" class="btn btn-primary">
  <img src="FootballSymb.png" width = "50" height = "50" alt="Football img">
    <br>Football
  </label>
        
    </div>
    <div class="item">

      <input type="radio" id="control_07" name="select" value="Foosball">
  <label for="control_07" class="btn btn-primary">
  <img src="FoosballSymb.png" width = "50" height = "50" alt="Foosball img">
    <br>Foosball
  </label>
        
    </div>
    <div class="item">

      <input type="radio" id="control_08" name="select" value="Squash">
  <label for="control_08" class="btn btn-primary">
  <img src="squashSymb.png" width = "50" height = "50" alt="Squash img">
    <br>Squash
  </label>
       
    </div>
    <div class="item">

      <input type="radio" id="control_09" name="select" value="Swimming">
  <label for="control_09" class="btn btn-primary">
  <img src="SwimmingSymb.png" width = "50" height = "50" alt="Swimming img">
    <br>Swimming
  </label>
       
    </div>
    <div class="item">

      <input type="radio" id="control_10" name="select" value="Tennis">
  <label for="control_10" class="btn btn-primary">
  <img src="TennisSymb.png" width = "50" height = "50" alt="Tennis img">
    <br>Tennis
  </label>
       
    </div>
    <a href="#section3" class="arrow__btn right-arrow" style="font-size: 100px; position="absolute";">›</a>
  </section>

  <section id="section3" style="display:flex; flex-direction: row;">
    <a href="#section2" class="arrow__btn left-arrow" style="font-size: 100px; position="absolute";">‹</a>
    <div class="item">

      <input type="radio" id="control_11" name="select" value="TT">
  <label for="control_11" class="btn btn-primary">
  <img src="TTSymb.png" width = "50" height = "50" alt="TT img">
    <br>Table Tennis
  </label>
        
    </div>
    <div class="item">

      <input type="radio" id="control_12" name="select" value="Volleyball">
  <label for="control_12" class="btn btn-primary">
  <img src="VolleyballSymb.png" width = "50" height = "50" alt="Volleyball img">
    <br>Volleyball
  </label>
        
    </div>
    <div class="item">

      <input type="radio" id="control_13" name="select" value="Snookers">
  <label for="control_13" class="btn btn-primary">
  <img src="SnookersSymb.png" width = "50" height = "50" alt="Snookers img">
    <br>Snookers
  </label>
       
    </div>
    <div class="item">

      <input type="radio" id="control_14" name="select" value="Hockey">
  <label for="control_14" class="btn btn-primary">
  <img src="HockeySymb.png" width = "50" height = "50" alt="hockey img">
    <br>Hockey
  </label>
       
    </div>
    <div class="item">

      <input type="radio" id="control_15" name="select" value="Ludo">
  <label for="control_15" class="btn btn-primary">
  <img src="LudoSymb.png" width = "50" height = "50" alt="ludo img">
    <br>Ludo
  </label>
  </div>
    


    <a href="#section1" class="arrow__btn right-arrow" style="font-size: 100px; position="absolute";">›</a>
  </section>
  </div>
</div>





  <script src='https://code.jquery.com/jquery-2.2.4.min.js'></script>

<div style="margin-top:-4rem; margin-left:1.75rem;">
<div class="radio-button">
  <input type="radio" id="control_011" name="select_lev" value="Beginner">
  <label for="control_011" class="btn btn-primary">
    <img src="beggin.png" width = "70" height = "40" alt="Badminton img">
    <br>Beginner
  </label>

  <input type="radio" id="control_022" name="select_lev" value="Intermediate">
  <label for="control_022" class="btn btn-primary">
    <img src="inte.png" width = "70" height = "40" alt="Badminton img">
    <br>Intermediate
  </label>

  <input type="radio" id="control_033" name="select_lev" value="Expert">
  <label for="control_033" class="btn btn-primary">
    <img src="adv.png" width = "70" height = "40" alt="Badminton img">
    <br>Expert
  </label>
</div>
</div>

<div style="padding-left:2rem;">
<div style="margin-top: 2rem;">
<label for="start" style="margin-left: 1rem; font-size: 25px;">Start time:</label>
  <input type="datetime-local" id="start" name="start" style="margin-right: 5rem;" value=>
<label for="end" style="font-size: 25px;">End time:</label>
  <input type="datetime-local" id="end" name="end">
<input type="hidden" name="txtname" id="txtName" value= "<?php echo htmlspecialchars($name); ?>">
<input type="hidden" name="email" id="email" value="<?php echo htmlspecialchars($email); ?>">
<input type="hidden" name="year" id="year" value="<?php echo htmlspecialchars($year); ?>">
</div>

<p>&nbsp;</p>
<p>
<input type="submit" class="btn btn-info" name="Submit" id="Submit" value="Submit" style="margin-left: 1rem; color: white; background-color: #ef476f; border-color: #ef476f;">
<!-- <input type="submit" name="Submit" id="Submit" value="Submit" style="margin-left: 1rem;"> -->
</p>
</div>
</form>
</div>
<?php

if (isset($_POST['Submit'])) { ?>


<section id="team" class="pb-5">
    <div class="container">
        <h11 >Players available to play:</h11>
        <div class="row">
<hr>
<?php
$link = mysqli_connect('eu-cdbr-west-02.cleardb.net' , 'bdfb9ab0d78ea7', '146b682b','heroku_af0e497ced1ec21');
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

<div class="card" style="width: 18rem;margin-left: 1rem; margin-right: 2rem; ">
    <?php $ans=$row['sport']; 
                                    if(($ans=="Badminton")){ ?>
                                    <p ><img class="card-img-top" src="CardPhotos/Badminton.jpg" alt="card image" ></p>
                                    <?php }?>
                                    <?php if(($ans=="Tennis")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Tennis.png" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Carrom")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Carrom.jpeg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Squash")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Squash.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Football")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Football.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Cricket")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Cricket.png" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Swimming")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Swimming.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Foosball")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Foosball.jpeg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Pool")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Pool.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Ludo")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Ludo.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="TT")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/TT.jpeg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Basketball")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/BB.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Volleyball")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Volleyball.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Hockey")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Hockey.jpg" alt="card image"></p>
                                    <?php }?>
                                    <?php if(($ans=="Chess")){ ?>
                                    <p><img class="card-img-top" src="CardPhotos/Chess.jpeg" alt="card image"></p>
                                    <?php }?>

    <div class="card-body">
      <h5 class="card-title"><?php echo $row['name']; ?></h5>
      <p class="card-text"><?php echo $row['year']; ?></p>
<!--       <?php
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
      ?> -->
      <a href="mailto:<?php echo $row['email']; ?>?subject=BumbleBee request for your <?php echo $row['sport']; ?> slot&body=Hi <?php echo $row['name']; ?>, I saw your <?php echo $row['sport']; ?> card, would you like to play?" class="btn btn-dark" font-size:10px;>Invite</a>
&nbsp
<br>
   <h7><?php echo ( $start );?> to <?php echo $end; ?></h7>
    </div>
  </div>



                                    
                                  
    
  <?php }?>
  </div>
    </div>
</section>
<?php
} else {
  echo "<div class='awesomeText'>Sorry! No players available for this slot currently.</div>";
}}
?>
<hr>
</body>
</html>
