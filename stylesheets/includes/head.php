<?php include('config.php'); ?>
<!DOCTYPE html>
<!--[if lt IE 7]>      <html class="no-js lt-ie9 lt-ie8 lt-ie7"> <![endif]-->
<!--[if IE 7]>         <html class="no-js lt-ie9 lt-ie8"> <![endif]-->
<!--[if IE 8]>         <html class="no-js lt-ie9"> <![endif]-->
<!--[if gt IE 8]><!--> <html class="no-js"> <!--<![endif]-->
<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <title><?php print $pageTitle . " | " . $clientName ; ?><</title>
  <meta name="keywords" content="<?php print $keywordTag ; ?>">
  <meta name="description" content="<?php print $descriptionTag ; ?>">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="stylesheets/style.css">
  <script src="javascripts/vendor/modernizr-2.6.2.min.js"></script>
</head>
<body id="<?php print $file; ?>">
<!--[if lt IE 7]>
  <p class="browsehappy">You are using an <strong>outdated</strong> browser. Please <a href="http://browsehappy.com/">upgrade your browser</a> to improve your experience.</p>
<![endif]-->
  <div class="container">
  <header>
      <h1>Chase Briley<em>Kicking Prospect 2014</em></h1>
      <nav>
        <ul class="main-nav">
          <li><a href="index.php" <?php nav_function(index); ?>>Home</a></li>
          <li><a href="bio.php" <?php nav_function(bio); ?>>Bio</a></li>
          <li><a href="videos.php" <?php nav_function(videos); ?>>Videos</a></li>
        </ul>
      </nav>
      <ul class="stats-current">
        <li class="header">2013<br>Stats</li>
        <li>
          <div class="label">Touch<br>Backs</div>
          <div class="result">00</div>
        </li>
        <li>
          <div class="label">Field<br>Goals</div>
          <div class="result">00</div>
        </li>
        <li>
          <div class="label">Extra<br>Points</div>
          <div class="result">00</div>
        </li>
      </ul>
      <ul class="stats-past">
        <li>
          <div class="label">2012</div>
          <div class="result">All Conference<br>All State Honorable Mention</div>
        </li>
        <li>
          <div class="label">62</div>
          <div class="result">Points<br>11 Game</div>
        </li>
      </ul>
      <img src="images/ui/chase-briley-kicking.png" alt="Chase Briley, kicking a field goal." class="feature">
      <a href="/"><img src="images/ui/logo.png" alt="Chase The Kicker Home Page" class="logo"></a>
  </header>