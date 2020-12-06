<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Calculater</title>
    <link rel="stylesheet" href="css/style.css" />

  </head>
  <body>
    <div class="container">
      <h2>Calculater</h2>
      <div class="inner" >
        <form action="" method="POST">
        <input type="text" autocomplte="none" placeholder="Enter 1st Number" name="n1" id="n1" />
        <input type="text" autocomplte="off" placeholder="Enter 2nd Number" name="n2" is="n2" />
        <label for="oper"></label>
        <select name="oper" id="oper">
          <option value="Select">Select Operation</option>
          <option value="Add">Addition</option>
          <option value="Sub">Subtraction</option>
          <option value="Mul">Multiplication</option>
          <option value="Div">Division</option>
          <option value="Rem">Remainder</option>
        </select>
        <button id="btn" name="cal">Calculate</button>
        </form>
        <p>
          <?php
          
          if(isset($_POST['cal'])){
            
              $n1 = $_POST['n1'];
            $n2 = $_POST['n2']; 
            $oper = $_POST['oper']; 
              if($oper == "Add"){
                $r = $n1 + $n2;
              echo "The Addition Of Numbers : {$r}";
              }elseif($oper == "Sub"){
                $r = $n1 - $n2;
              echo "The Subtraction Of Numbers : {$r}";
              }elseif($oper == "Mul"){
                $r = $n1 * $n2;
              echo "The Multiplication Of Numbers : {$r}";
              }elseif($oper == "Div"){
                $r = $n1 / $n2;
              echo "The Division Of Numbers : {$r}";
              }elseif($oper == "Rem"){
                $r = $n1 % $n2;
              echo "The Remainder Of Numbers : {$r}";
              }elseif(($n1 == "") || ($n2 == "")){
                echo "Enter Values";
              }elseif($oper == "Select"){
                echo "Select Operation";
              }else{
                echo "Invalid";
              }
            
          }
          ?>
        </p>
      </div>
      <script src="js/script.js"></script>
    </div>
  </body>
</html>
