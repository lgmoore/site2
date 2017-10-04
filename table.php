<!-- Desciption: COS10020 Assignment2 - Table Page -->
<!-- Author: Lucas Moore -->
<!-- Date: 05/09/17 -->
<!-- Validated: CLEAR 05/09/17 -->

<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="COS10020 Assignment2 - Table" />
  <meta name="keywords" content="HTML, Assignment2, Enhancements, Javascript, Table, SQL" />
  <meta name="author" content="Lucas Moore" />
  <meta charset="utf-8" />

  <title>View Table</title>
  <link  rel="stylesheet" type="text/css" href="styles/main_style.css" />
  <script type="text/javascript" src="java/terms.js" language="javascript"></script>
  <script type="text/javascript" src="java/more.js" language="javascript"></script>
  
</head>
<body id="table">
<div id="scrnOverlay"></div>
<div id='container'>
  <!-- Start Banner -->
  <?php include("inc/banner.html"); ?>
  <!-- End Banner -->
  <!-- Start Menu -->
  <?php include("inc/nav.html"); ?>
  <!-- End Menu-->
  <!-- Start Main -->
  <main id='content'>
    <h1>View Pending Orders</h1>
    <p>
    <h2 id="click_btn">Click here to view table of orders</h2>
    <section class="panel"><?php include("php/view_table.php"); ?></section>>
    </p>
    
    <?php include("inc/terms.html"); ?> <!-- Terms and Conditions window -->

  </main>
  <!-- End Main -->
  <!-- Start Footer -->
  <?php include("inc/footer.html"); ?>
  <!-- End Footer -->
</div>
</body>
</html>
