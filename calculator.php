<?php  //include "function.php"; ?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Calculator using OOP in PHP</title>
</head>
<body>
    <div>
        <form action="" method="post">
            <table>
                <tr>
                    <td> Enter your frist number: </td>
                    <td> <input type="number" name="num1"> </td>
                </tr>
                <tr>
                    <td> Enter your Second number: </td>
                    <td> <input type="number" name="num2"> </td>
                </tr>
                <tr>
                    <td></td>
                    <td> <input type="submit" name="calculation" valu="Caculate"> </td>
                </tr>
            </table>
        </form>
    </div>

    <?php
        if (isset($_POST['calculation'])){
            $numOne = $_POST['num1'];
            $numTwo = $_POST['num2'];
        
        if(empty($numOne) or empty($numTwo)){
            echo"<span style='color: red;>'> Fuild Must not be empty</span>";
        }
        $cal = new calculation;
        $cal->add($numOne,$numTwo);
        $cal->subtraction($numOne,$numTwo);
        $cal->multipication($numOne,$numTwo);
        $cal->division($numOne,$numTwo);
        

    }
    
    ?>
<?php

class Calculation {
    function add($a,$b){
        echo"Summation =".($a+$b) ."<br>";
    }

    function subtraction($a,$b){
        echo"subtraction =".($a-$b) ."<br>";
    }
    function multipication($a,$b){
        echo"multipication =".($a*$b) ."<br>";
    }
    function division($a,$b){
        echo"division =".($a/$b) ."<br>";
    }
}
?>


</body>
</html>
