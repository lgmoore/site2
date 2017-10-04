<!-- Desciption: COS10020 Assignment2 - Form Page -->
<!-- Author: Lucas Moore -->
<!-- Date: 09/08/17 -->
<!-- Validated: CLEAR 05/09/17 -->

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8" />
  <meta name="description" content="COS10020 Assignment2 - Form" />
  <meta name="keywords"    content="Registration Form, Validation" />
  <meta name="author"      content="Lucas Moore" />

  <link  rel="stylesheet" type="text/css" href="styles/main_style.css" /> 
  <link rel="stylesheet" type="text/css" href="styles/form.css">
  <script type="text/javascript" src="java/java.js" language="javascript"></script>
  <script type="text/javascript" src="java/terms.js" language="javascript"></script> 
  
  <title>Tech Support Form</title>
</head>
<body id="form">
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
    <h1>Request IT Support Drone</h1> <!-- Page Heading -->

    <fieldset> <!-- Form Fieldset -->
    <form method="post" id="ITform" action="php/regtest.php" novalidate="novalidate">
      <p>

      <label for="jobid">Job Number</label> <!-- Number -->
        <input type="number" name= "jID" id="jobid" placeholder="Job ID #" min="0"  class="no-spin" required="required" />
        <span id="tooltipID" class="tooltip"> 5 Digit Number </span>
        <span id="jidErrorTip" class="ErrorTip"></span>

      <p>

      <label for="Fname">First Name</label> <!-- Text -->
        <input type="text" name= "fName" id="Fname" placeholder="Your Name" required="required"/>
        <span id="fnameErrorTip" class="ErrorTip"></span>

      <label for="Lname">Last Name</label> <!-- Text-->
        <input type="text" name= "lName" id="Lname" placeholder="Your Surname" required="required"/>
        <span id="lnameErrorTip" class="ErrorTip"></span>

      <p>

      <label for="phone">Mobile Phone</label> <!-- Number -->
        <input type="number" name= "phone" id="phone" placeholder="Mobile Phone Number" class="no-spin" required="required"/> 
        <span id="phoneErrorTip" class="ErrorTip"></span>

      <label for="email">Email</label> <!-- Email -->
        <input type="email" name= "email" id="email" placeholder="Your Email" required="required"/>
        <span id="emailErrorTip" class="ErrorTip"></span>

      <p>

      <label for="office">Office Location</label> <!-- Text -->
        <select name="office" id="office">
          <option value="" selected>- Select an Office -</option>
          <option value="Hawthorn">Hawthorn</option>
          <option value="Heidelberg">Heidelberg</option>
          <option value="Werribee">Werribee</option>
        </select>
        <span id="officeErrorTip" class="ErrorTip"></span>

      <label for="desk">Desk</label> <!-- Number -->
        <input type="number" name= "desk" id="desk" placeholder="Your Desk Number" min="0" class="no-spin" required="required"/>
        <span id="deskErrorTip" class="ErrorTip"></span>

      <label for="comp">Computer</label> <!-- Number -->
        <input type="number" name= "comp" id="comp" placeholder="Computer Number" min="0" class="no-spin" required="required"/>
        <span id="computerErrorTip" class="ErrorTip"></span>

      </p>

      <span id="legend">- Problem -</span>

      <p> 
      <select name="problem" id="problem">
        <option value="" selected>- Select Problem -</option>
        <option value="Password">Password</option>
        <option value="New User">New User</option>
        <option value="Delete User">Delete User</option>
        <option value="Lost File">Lost File</option>
        <option value="New Computer">New Computer</option>
        <option value="New Software Installation">New Software Installation</option>
        <option value="Virus">Virus</option>
        <option value="Unknown">Unknown</option>
      </select>
      <span id="problemErrorTip" class="ErrorTip"></span>
      </p>

      <p>
        <label>Comment
            <br>
            <textarea rows="5" cols="100" name="comment" maxlength="6000" placeholder="Detail Your Problem"></textarea>
        </label>
      </p>

        <div id="submit">
          <input type="submit" value="Submit" />
        </div>
    </form>
    </fieldset>

    <?php include("inc/terms.html"); ?> <!-- Terms and Conditions window -->

  </main>
  <!-- End Main -->
  <!-- Start Footer -->
  <?php include("inc/footer.html"); ?>
  <!-- End Footer -->
</div>
</body>
</html>
