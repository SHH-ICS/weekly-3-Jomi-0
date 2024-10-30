<!DOCTYPE html>
<html>

<head>

  <!-- Stylesheet Stuff goes here -->
  <link rel="stylesheet" href="./css/styles.css">
  <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
  <link rel="stylesheet" href="https://code.getmdl.io/1.3.0/material.indigo-pink.min.css">
  <script defer src="https://code.getmdl.io/1.3.0/material.min.js"></script>

  <!-- Favicon Stuff goes here-->
  <link rel="apple-touch-icon" sizes="180x180" href="favicon/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="favicon/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="favicon/favicon-16x16.png">
  <link rel="manifest" href="favicon/site.webmanifest">

  <!-- Title Stuff goes here -->
  <title>Julia Fan Page</title>

</head>

<body>

  <!-- Always shows a header, even in smaller screens. -->
  <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
    <header class="mdl-layout__header">
      <div class="mdl-layout__header-row">
        <!-- Title -->
        <span class="mdl-layout-title">Area and Circumference Calculator</span>
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
      </div>
    </header>
    <main class="mdl-layout__content">
      <div class="page-content"><br />

        <!-- Your content goes here -->


        <center>


          <?php
          $myVariable = "";
          if (isset($_POST['myVariable'])) {
            $myVariable = $_POST['myVariable'];
          }
          echo "<h1>My Program</h1>\n";
          echo "<p>My Variable is = " . $myVariable . "</p>\n";
          ?>

</body>

</html>