<?php
// Set Base Path 
    $bodyID = $_SERVER["SCRIPT_NAME"];
    // $file is set to "index"
  $file = basename($bodyID, ".php");

// Adds class to nav items when you're on a given page
    function nav_function($body_id) {
      // change scope of file so it can be used inside this function.
      global $file;
      if($file == $body_id) {
          print 'class="active"';
      }
   }

// Student Data
  $studentName = "Chase Briley";
  $copyright =  $studentName;
  $studentPhone = "860-232-8250";
  $studentSchool = "Capital Preparatory Magnet School";
  $schoolCity = "Hartford";
  $schoolState = "CT";
  $postalCode = "12345";
  $clientEmailAddress = "chase@chasethekicker.com";
  $clientWebAddress = "http://www.chasethekicker.com";

// Web design firm data
  $authorWebAddress = "http://www.joshuabriley.com";

  include ('includes/seo-config.php')
?>