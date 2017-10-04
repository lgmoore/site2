<!-- Desciption: COS10020 Assignment2 - Enhancements Page -->
<!-- Author: Lucas Moore -->
<!-- Date: 03/09/17 -->
<!-- Validated: CLEAR 05/09/17 -->

<!DOCTYPE html>
<html>
<head>
  <meta name="description" content="COS10020 Assignment2 - Enhancements" />
  <meta name="keywords" content="HTML, Assignment2, Enhancements, Javascript" />
  <meta name="author" content="Lucas Moore" />
  <meta charset="utf-8" />

  <title>Enhancements</title>
  <link  rel="stylesheet" type="text/css" href="styles/main_style.css" />
  <script type="text/javascript" src="java/terms.js" language="javascript"></script>
  
</head>
<body id="enhancements">
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
    <h1>Javascript Enhancements</h1>
    <p>
      <h2>Regular Expression Patterns</h2>
      <hr>
    </p>
    <p>
      Regular expression patterns are used to make sure data entry in <a href="form.php">form.php</a> conforms to preset standard patterns.<br>
      The patterns used are:
      <ul>
        <li><b>/^[a-zA-Z ]+$/</b> - Makes sure the input contains only letters and spaces</li>
        <ul>
          <li>It is used in the <i>First Name</i> and <i>Last Name</i> fields</li>
          <li>To achieve this I created a variable named <i>word_pattern</i> to store the pattern /^[a-zA-Z ]+$/</li>
          <li>I then used the <i>match()</i> function to compare the input to the pattern</li>
          <li>The pattern was source from Stack Overflow <a href="https://stackoverflow.com/questions/3617797/regex-to-match-only-letters">here</a></li>
        </ul>
        <li><b>/^\d+$/</b> - Makes sure the input contains only numbers</li>
        <ul>
          <li>It is used in the <i>Job Number</i>, <i>Mobile Phone</i>, <i>Desk</i> and <i>Computer</i> fields</li>
          <li>To achieve this I created a variable named <i>is_number</i> to store the pattern /^\d+$/</li>
          <li>I then used the <i>match()</i> function to compare the input to the pattern</li>
          <li>The pattern was source from Stack Overflow <a href="https://stackoverflow.com/questions/10713749/javascript-validation-numbers-only">here</a></li>
        </ul> 
        <li><b>/^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/</b> - Makes sure the input is an email</li>
        <ul>
          <li>It is used in the <i>Email</i> field</li>
          <li>To achieve this I created a variable named <i>email_pattern</i> to store the pattern /^\w+([\.-]?\w+)*@\w+([\.-]?\w+)*(\.\w{2,3})+$/</li>
          <li>I then used the <i>match()</i> function to compare the input to the pattern</li>
          <li>The pattern was source from W3 Resources <a href="http://www.w3resource.com/javascript/form/email-validation.php">here</a></li>
        </ul>                       
      </ul>
    </p>
    <p>
      <h2>Current Page Menu Highlight</h2>
      <hr>
      The current page is highlighted in red on the navigation menu in all pages
      <ul>
        <li>This is achieved by adding an ID to all nav bar elements (navigation links) and to all body elements</li>
        <li>These IDs are then used by the javascript found in <i>java/terms.js</i> to detect which body is active and highlight the corresponding menu link ID</li>
        <li>The code for this was origianlly sourced from my tutor Manuel and then altered for this purpose</li>
        <li> Example: </li>
        <ul>
          <li>var bodyId = document.body.id;</li>
          <li>var index = document.getElementById("index_link");</li>
          <li>  if (bodyId == "index") { index.style.background = "#B42929";}</li>
        </ul>
      </ul> 
    </p>  
    <p>
      <h2>Show/Hide Table</h2>
      <hr>
      On the View Jobs Page <a href="table.php">table.php</a> the <i>click here</i> text shows and hides a table which conatians the contense of the <i>users</i> database
      <ul>
        <li>To do this I put the table print php code <i>view_table.php</i> inside a section with a class <i>panel</i></li>
        <li>The <i>click here</i> text is put inside a span <i>click_btn</i></li>
        <li>When the <i>click_btn</i> is clicked the javascript <i>more.js</i> runs the function showMore() which toggles the table sections height and visibility</li>
        <li>The code for this was origianlly sourced from my tutor Manuel and then altered for this purpose</li>
      </ul>
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
