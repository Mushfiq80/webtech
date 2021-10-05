<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Experiment Name</title>
    </head>
    <body>
    
    <p>
    <fieldset>
    <form action="<?php echo $_SERVER['PHP_SELF']; ?>" method="post">
        <label for="name"><strong>NAME</strong></label><br/>
        <input type="text" id="name" name="name"> </fieldset>
        <br/>

        <fieldset>
        <label for="mail"><strong>EMAIL</strong></label><br/>
        <input type="text" id="mail" name="mail"></fieldset>
        <br/>

        <fieldset>
        <label for="birthday"><strong>Birthday</strong></label><br/>
        <input type="date" id="birthday" name="birthday"></fieldset>
        <br/>

        <fieldset>
        <label for="Gender"><strong>GENDER</strong></label><br/>
        <input type="radio" id="male" name="Gender" value="Male">
          <label for="html">Male</label>
          <input type="radio" id="Female" name="Gender" value="Female">
          <label for="css">Female</label>
          <input type="radio" id="Other" name="Gender" value="Other">
          <label for="javascript">Other</label></fieldset>

        <br/>
        <fieldset>
        <label for="Gender"><strong>DEGREE</strong></label><br/>
        <input type="checkbox" id="deg1" name="deg1" value="ssc">
        <label for="deg1">SSC</label>
        <input type="checkbox" id="deg2" name="deg2" value="hsc">
        <label for="deg2">HSC</label>
        <input type="checkbox" id="deg3" name="deg3" value="bsc">
        <label for="deg3">BSc</label>  
        <input type="checkbox" id="deg4" name="deg4" value="msc">
        <label for="deg4">MSc</label></fieldset>
        <br/>
        <fieldset>
        <label for="Gender"><strong>BLOOD GROUP</strong></label><br/>
        <select>
            <option>A +</option>
            <option>A -</option>
            <option>B +</option>
            <option>B -</option>
            <option>AB +</option>
            <option>AB -</option>
            <option>O +</option>
            <option>O -</option>
            
        </select></fieldset>
        <br/>
        <input type="submit" value="Submit">
    </form>  
    </p>
    <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $name = $_REQUEST['name'];
	  if (empty($name)) {
	    echo "Name is empty";
	  } else {
	    echo $name;
	  }
	}
	?>
    <br>
    <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $mail = $_REQUEST['mail'];
	  if (empty($mail)) {
	    echo "Email is empty";
	  } else {
	    echo $mail;
	  }
	}
	?>
    <br>
    <?php
	if ($_SERVER["REQUEST_METHOD"] == "POST") {
	  // collect value of input field
	  $birthday = $_REQUEST['birthday'];
	  if (empty($birthday)) {
	    echo "DOB is empty";
	  } else {
	    echo $birthday;
	  }
	}
	?>
    

    </body>
</html>
