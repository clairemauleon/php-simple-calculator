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
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>

</head>
<body style="text-align: center">
    <h1>SIMPLE CALCULATOR</h1>
    <form action="" method="POST">
        <label for="n1" class="form-label">First Number: </label>
        <input name="n1" id="n1" value="" placeholder="Enter first number"><br><br>

        <label for="n2" class="form-label">Second Number: </label>
        <input name="n2" id="n2" value="" placeholder="Enter second number"><br><br>

        <input type="submit" name="sub" class="btn btn-primary" value="+">
        <input type="submit" name="sub" class="btn btn-primary" value="-">
        <input type="submit" name="sub" class="btn btn-primary" value="x">
        <input type="submit" name="sub" class="btn btn-primary" value="/"><br><br>

        <label for="result" class="form-label">Result: </label>
        <input readonly="readonly" name="result" value="<?php echo $result; ?>">
    </form>
</body>
</html>
