<?php
    $title="Form";
?>
<html>
<head>
    <meta charset="UTF-8">
    <title><?php echo $title; ?></title>
    <link rel="stylesheet" href="style.css">
</head>
<body>

        <div class="main">
            <div class="head">
                <h1>Calculator</h1>
            </div>

        <form action="" method="post">
            <label for="">First Number :
            <input type="text" name="num1" value="" placeholder="INPUT FIRST NUMBER">
            </label><br/><br/>

            <label for="">First Number :
            <input type="text" name="num2" placeholder="INPUT SECOND NUMBER">
            </label><br/><br/>
            <div class="opt">
            <label for="">&#43;
                <input type="radio" name="operator" value="add">
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label for="">&#45;
                <input type="radio" name="operator" value="sub">
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label for="">&#215;
                <input type="radio" name="operator" value="mult">
            </label>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;

            <label for="">&divide;

                <input type="radio" name="operator" value="div">
            </label><br/>

            </div>


            <input type="submit" name="submit" value="Calculate"> <input type="reset" name="reset" value="Reset">
        </form>

            <?php
            if(isset($_POST['num1'])&& isset($_POST['num2'])&& isset($_POST['operator'])){
            $one=$_POST['num1'];
            $two=$_POST['num2'];
            $operator=$_POST['operator'];

            if($operator=='add'){
            echo $one + $two;
            }

            else if($operator=='sub'){
            echo $one - $two;
            }

            else if($operator=='mult'){
            echo $one * $two;
            }

            else if($operator=='div'){
            echo $one / $two;
            }
            }

            ?>

        </div>



</body>

</html>