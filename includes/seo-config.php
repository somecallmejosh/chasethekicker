<?php

  $siteDescription = "2014 College Kicking Prospect"; 
  $clientGoogleAnalytics = "UA-xxxxxx-x";

  switch ($file) {
    // Home Page title and meta data
    case "index":
      $pageTitle = "Chase Briley | 2014 College Kicking Prospect"; 
      $keywordTag = "$pageTitle, college kicker, high school kicker "; 
      $descriptionTag = "Chase Briley is a 2014 college kicking prospect from Hartford, CT."; 
      break;
    
    // BioPage title and meta data
      case "bio":
      $pageTitle = "Chase Briley Bio";
      $keywordTag = "biography, college, kicking, kicker, chase briley";
      $descriptionTag = "Biography of Chase Briley, a 2014 College kicking prospect.";
      break;
    
    // Videos Page title and meta data
      case "videos":
      $pageTitle = "Chase Briley Kicking Videos";
      $keywordTag = "kicking videos, punting, field goals, kicking";
      $descriptionTag = "College Kicker recruiting videos for Chase Briley.";
      break;
    
    // Default title and meta data
    default:
      $pageTitle = "Chase Briley";
      $keywordTag = "$studentName | $bodyID";
      $descriptionTag = "$pageTitle | $siteDescription";
      break;
  }
?>