<?php

$result='';
if (isset($_POST['sub'])){
    $num1=$_POST['n1'];
    $num2=$_POST['n2'];
    $operand=$_POST['sub'];
    
    if ($operand == '+'){
        $result = $num1 + $num2;
    }
        
    elseif ($operand == '-'){
        $result = $num1 - $num2;
    }
    
    elseif ($operand == 'x'){
        $result = $num1 * $num2;
    }

    elseif ($operand == '/'){
        $result = $num1 / $num2;
    }
        
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculator</title>
</head>
<body style="text-align: center">
    <h1>SIMPLE CALCULATOR</h1>
    <form action="" method="POST">
        First Number: <input name="n1" id="n1" value="" placeholder="Enter first number"><br><br>
        Second Number: <input name="n2" id="n2" value="" placeholder="Enter second number"><br><br>
        <input type="submit" name="sub" value="+">
        <input type="submit" name="sub" value="-">
        <input type="submit" name="sub" value="x">
        <input type="submit" name="sub" value="/"><br><br>
        Result: <input readonly="readonly" name="result" value="<?php echo $result; ?>">
    </form>
</body>
</html>