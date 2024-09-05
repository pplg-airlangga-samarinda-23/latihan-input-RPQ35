<?php
session_start();

// Initialize variables
if (!isset($_SESSION['expression'])) {
  $_SESSION['expression'] = '';
}
$expression = $_SESSION['expression'];
$result = '';

// Check if a button was clicked
if (isset($_POST['button'])) {
  // Get the button value
  $button = $_POST['button'];

  // Handle numbers and operators
  if (in_array($button, array('0', '1', '2', '3', '4', '5', '6', '7', '8', '9', '+', '-', '*', '/'))) {
    $_SESSION['expression'] .= $button;
  }

  // Handle equals button
  elseif ($button == '=') {
    // Evaluate the expression
    $result = eval('return ' . $_SESSION['expression'] . ';');

    // Reset the expression
    $_SESSION['expression'] = '';
  }

  // Handle clear button
  elseif ($button == 'C') {
    // Reset the expression and result
    $_SESSION['expression'] = '';
    $result = '';
  }
}
?>

<html>
  <head>
    <title>Soal 3</title>
    <style>
      .calculator {
        width: 300px;
        margin: 50px auto;
        padding: 20px;
        border: 1px solid #ccc;
        border-radius: 10px;
        box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
      }

      .display {
        width: 100%;
        height: 40px;
        margin-bottom: 20px;
        padding: 10px;
        border: none;
        border-radius: 10px;
        font-size: 24px;
        font-weight: bold;
        text-align: right;
      }

      .button {
        width: 60px;
        height: 40px;
        margin: 5px;
        padding: 10px;
        border: none;
        border-radius: 10px;
        font-size: 18px;
        cursor: pointer;
      }

      .button:hover {
        background-color: #ccc;
      }
    </style>
  </head>
  <body>
    <div class="calculator">
      <form method="post">
        <input type="text" class="display" value="<?php echo $_SESSION['expression'] . ($result != '' ? ' = ' . $result : ''); ?>" readonly>
        <div>
          <button class="button" name="button" value="7">7</button>
          <button class="button" name="button" value="8">8</button>
          <button class="button" name="button" value="9">9</button>
          <button class="button" name="button" value="/">/</button>
        </div>
        <div>
          <button class="button" name="button" value="4">4</button>
          <button class="button" name="button" value="5">5</button>
          <button class="button" name="button" value="6">6</button>
          <button class="button" name="button" value="*">*</button>
        </div>
        <div>
          <button class="button" name="button" value="1">1</button>
          <button class="button" name="button" value="2">2</button>
          <button class="button" name="button" value="3">3</button>
          <button class="button" name="button" value="-">-</button>
        </div>
        <div>
          <button class="button" name="button" value="0">0</button>
          <button class="button" name="button" value="C">C</button>
          <button class="button" name="button" value="=">=</button>
          <button class="button" name="button" value="+">+</button>
        </div>
      </form>
    </div>
  </body>
</html>