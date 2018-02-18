<?php
if(!empty($_GET["submit"])) {
	/* Form Required Field Validation */
	
	if(!isset($error_message)) {
		//require_once("dbcontroller.php");
        $message = "Your Ragistration is Recorded. We will send you the conformation email once your ragistration get conform !!!";
		//$db_handle = new DBController();
        $servername = "localhost";
        $username = "root";
        $password = "";
        $dbname = "droplets";

// Create connection
$con = new mysqli_connect($servername, $username, $password, $dbname);
// Check connection
if (mysqli_connect_errno())
  {
  echo "Failed to connect to MySQL: " . mysqli_connect_error();
  }
		mysqli_query($con,"INSERT INTO data (name, email, phone,whyCloud,ram,cpu) VALUES
		('" . $_GET["name"] . "', '" . $_GET["email"] . "', '" . $_GET["phone"] . "', '" . ($_GET["whyCloud"]) . "," . ($_GET["ram"]) . "," . ($_GET["cpu"]) . "')");
        /*$query = "INSERT INTO data (name, email, phone,whyCloud,ram,cpu) VALUES
		('" . $_GET["name"] . "', '" . $_GET["email"] . "', '" . $_GET["phone"] . "', '" . ($_GET["whyCloud"]) . "," . ($_GET["ram"]) . "," . ($_GET["cpu"]) . "')";*/
		//$result = $db_handle->insertQuery($query);
        /*
		if(!empty($result)) {
             echo "<script type='text/javascript'>alert('$message');</script>";

			$error_message = "";
			$success_message = "You have registered successfully!";	
			unset($_POST);
		} else {
			$error_message = "Problem in registration. Try Again!";	
		}*/
        if (mysqli_query === TRUE) {
 echo "<script type='text/javascript'>alert('$message');</script>";
} else {
    echo "Error: " . $query . "<br>" . $con->error;
}

          }
}
?>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Calculator</title>
  <link href="https://fonts.googleapis.com/css?family=Poppins" rel="stylesheet">
  <link rel="stylesheet" href="css/style.css">
</head>

<body>
  <div class="wrapper">
    <div class="container">
      <h2>Choose your plan</h2>
      <form action="#" name="form1" method="get">
          
        <div class="form-item">s
          <label for="name">Full Name *</label>
          <input type="text" name="name" id="name" placeholder="Full Name" required>
        </div>

        <div class="form-item">
          <label for="email">Email *</label>
          <input type="email" name="email" id="email" required>
        </div>

        <div class="form-item">
          <label for="phone">Phone</label>
          <input type="tel" name="phone" id="phone" required>
        </div>
        <div class="form-item">
          <label for="whyCloud">WHy do you need cloud services?</label>
          <select class="why-cloud" name="whyCloud">
            <option value="ecommerce">E-Commerce</option>
            <option value="ui">UI/UX</option>
              <option value="test">Test and development</option>
              <option value="filestorage">File Storage</option>
          </select>
        </div>
        <!-- <div class="form-item">
          <h3>What kind of products do you sell?</h3>
          <label for="products[0]" class="radio-label">
            <input type="radio" name="products" id="products[0]" value="physical"> Physical Products
          </label>

          <label for="products[1]" class="radio-label">
            <input type="radio" name="products" id="products[1]" value="digital"> Digital
          </label>
        </div> -->
        <div class="form-item">
          <h3>What options do you need?</h3>
          <label for="ram">Ram</label>
          <select name="ram" id="ram">
            <option value="-" disabled selected>-</option>
            <option value="1">1</option>
            <option value="2">2</option>
              <option value="4">4</option>
              <option value="8">8</option>
              <option value="16">16</option>
              <option value="32">32</option>
              <option value="48">48</option>
              <option value="64">64</option>
          </select>
        </div>
        <div class="form-item js-cpu" style="display:none;">
          <label for="cpu">CPU</label>
          <select name="cpu" id="cpu">
          </select>
        </div>
      <!--  <div class="form-item">
          <label for="message">Message</label>
          <textarea name="message" id="message" rows="5"></textarea>
        </div> -->
          
        <!-- <div class="checkbox" style="background: none;" >
             <input type="checkbox" name="Light Weight" value="Light Weight" style="margin: 0;padding: 0;" >Light Weight
              <input type="checkbox" name="More Feature" value="More Feature">More Feature
              <input type="checkbox" name="safe and reliable" value="safe and reliable">safe and reliable
              <input type="checkbox" name="Stability" value="Stability">Stability
              <input type="checkbox" name="High Quality" value="High Quality">High Quality
              <input type="checkbox" name="Secure" value="Secure">Secure
              <input type="checkbox" name="fastboot" value="fastboot">Fastboot
              <input type="checkbox" name="GUI" value="GUI">GUI
              <input type="checkbox" name="Auto Update" value="Auto Update">Auto Update
        </div>   -->
          <div class="form-item">
          <p align="left">Type of Services you want</p>
          <select>
  <option value="light weight">light weight</option>
  <option value="safe and reliable">Safe and reliable</option>
  <option value="stability">stability</option>
  <option value="High Quality and secure">High Quality and secure</option>
              <option value="Fast boot and auto update">Fast boot and auto update</option>
</select>

          </div>
          

        <input type="submit" onclick="myFunction()"  value="Submit" name="submit"/f>
          
      </form>
    </div>
  
    
  <script src="http://code.jquery.com/jquery-3.3.1.js" integrity="sha256-2Kok7MbOyxpgUVvAk/HJ2jigOSYS2auK4Pfzbm7uH60=" crossorigin="anonymous"></script>
  <script src="js/jquery-serialize.js"></script>
  <script>
    $(document).ready(function () {
      $("#ram").change(function () {
        console.log($(this).val());

        var selected = $(this).val();

        var optionsOne = ['1', '3'];
        var optionsTwo = ['1', '2'];
        var optionsfour = ['2'];
          var optioneight = ['4'];
          var optionssixteen = ['6'];
          var optionsthirtytwo = ['8'];
          var optionsfourtyeight = ['12'];
          var optionssixtyfour = ['16'];
        var html = '';
        if (selected == '1') {
          for (i = 0; i < optionsOne.length; i++) {
            html += '<option value="' + optionsOne[i] + '">' + optionsOne[i] + '</option>'
          }
        } else if (selected == '2') {
          for (i = 0; i < optionsTwo.length; i++) {
            html += '<option value="' + optionsTwo[i] + '">' + optionsTwo[i] + '</option>'
          }
        }
        $(".js-cpu").show();
        $("#cpu").html(html);
      });


      $("#form").submit(function (e) {
        e.preventDefault();
        var result = $(this).serializeJSON();
        console.log(result);
      });
    });
  </script>
</body>

</html>