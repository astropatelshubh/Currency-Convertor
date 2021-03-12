<html xmlns="http://www.w3.org/1999/xhtml">
  <head>
    <title>Currency Convertor</title>
    <meta http-equiv="content-type" content="text/html; charset=iso-8859-1" />
  </head>
  <style>
    body { font-family: times; }
    * { box-sizing: border-box; }

    button {
      background-color: #4CAF50;
      color: white;
      padding: 14px 20px;
      margin: 8px 0;
      border: none;
      cursor: pointer;
      width: 100%;
      opacity: 0.9;
    }

    button:hover { opacity:1; }

    .cancelbtn {
      float: left;
      width: 50%;
      padding: 14px 20px;
      background-color: #f44336;
    }

    .container { padding: 16px; }

    hr { border: 1px solid #f1f1f1; margin-bottom: 25px; }

    @media screen and (max-width: 300px) { .cancelbtn { width: 100%; } }
  </style>
  <body>
    <form name="convert" action="convert.html">
      <div class="container">
        <h2>Currency Convertor</h2>
        <hr>
        <h4>**Canadian Dollar (CAD) to Indian Ruppes (INR)</h4>
        <hr>
        <?php
          $errors = 0;
          if (is_numeric($_POST['dollar'])) {
            if (($_POST['dollar']) > 0) {
              $dollar = round($_POST['dollar'],2);
            }
            else {
              ++$errors;
              echo "<p>Error: 'CAD' must be greater than 0</p>\n";
            }
          }
          else {
            ++$errors;
            echo "<p>Error: 'CAD' must be a numeric value</p>\n";
          }
          if (is_numeric($_POST['rate'])) {
            if (($_POST['rate']) > 0) {
              $rate = round($_POST['rate'],2);
            }
            else {
              ++$errors;
              echo "<p>Error: 'Exchange Rate' must be greater than 0</p>\n";
            }
          }
          else {
            ++$errors;
            echo "<p>Error: 'Exchange Rate' must be a numeric value</p>\n";
          }
          if ($errors==0) {
            echo "<p>$dollar CAD = " . ($dollar * $rate) . " INR</p>\n\n";
            echo "<p>**Exchange Rate: $rate</p>\n";
          }
        ?>
        <hr>
        <div class="clearfix">
          <button onclick="convert.html" class="cancelbtn">Convert Again</button>
        </div>
      </div>
    </form>
  </body>
</html>
