<?php include('config.php'); ?>
<?php
//requiring this file will create a var called $season with the general stats, then $season->games array with each game populated.
require_once('stats/stats/stats.php');
?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $pageTitle . " | " . $studentName ; ?></title>
  <meta name="keywords" content="<?php print $keywordTag ; ?>">
  <meta name="description" content="<?php print $descriptionTag ; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/style.css">
  <link rel='stylesheet' href='fonts/typicons.css' />
  <script src="javascripts/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body id="<?php print $file; ?>">
<!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  <div class="container">
  <header>
      <h1>Chase Briley<em>Heading to UCONN</em></h1>
      <nav>
        <ul class="main-nav">
          <li><a href="index.php" <?php nav_function(index); ?>>Home</a></li>
          <li><a href="bio.php" <?php nav_function(bio); ?>>Bio</a></li>
          <!-- <li><a href="stats.php" <?php nav_function(stats); ?>>Stats</a></li> -->
          <li><a href="videos.php" <?php nav_function(videos); ?>>Videos</a></li>
        </ul>
      </nav>
      <ul class="stats-current">
        <li class="header">2013<br>Stats</li>
        <li>
          <div class="label">Touch<br>Backs</div>
          <div class="result"><?php echo $season->getTotalTouchbacks();?></div>
        </li>
        <li>
          <div class="label">Field<br>Goals</div>
          <div class="result"><?php echo $season->getTotalFieldGoals();?></div>
        </li>
        <li>
          <div class="label">Extra<br>Points</div>
          <div class="result"><?php echo $season->getTotalPointsAfterTouchdown();?></div>
        </li>
      </ul>
      <ul class="stats-past">
        <li>
          <div class="label">&gt;200</div>
          <div class="result">High School<br>Total Points</div>
        </li>
        <li>
          <div class="label">&gt;90%</div>
          <div class="result">Accuracy on<br>PATs &amp; FGs</div>
        </li>
      </ul>
      <img src="images/ui/chase-briley-kicking.png" alt="Chase Briley, kicking a field goal." class="feature">
      <a href="/"><img src="images/ui/logo.png" alt="Chase The Kicker Home Page" class="logo"></a>
  </header>