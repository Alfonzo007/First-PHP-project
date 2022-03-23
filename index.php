<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>

<form>
    <input type="text" name="num1" placeholder="Number 1">
    <input type="text" name="num2" placeholder="Number 2">

    <select name="operator">
        <option>none</option>
        <option >add</option>
        <option >subtract</option>
        <option >multiply</option>
        <option >divide</option>
     </select>
     <br>

     <button type="submit" name="submit" value="submit">calculate</button>
</form>

<P>The answer is: </P>

<?php

 if (isset($_GET['num1'])) {
     $resutl1 = $_GET['num1'];
     $resutl2 = $_GET['num2'];
     $operator = $_GET['operator'];

     switch ($operator) {
        case "none":
            echo "Error! you need to select a method";
            break;
        case "add":
            echo $resutl1 + $resutl2;
            break;
        case "subtract":
            echo $resutl1 - $resutl2;
            break;
        case "multiply":
            echo $resutl1 * $resutl2;
            break;
        case "divide":
            echo $resutl1 / $resutl2;
            break;
        
     }
 }
?>
    
</body>
</html>