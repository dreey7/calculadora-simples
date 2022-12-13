<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora Simples</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div id="calculadora">
    <h1>CALCULADORA</h1>
    <?php
        $numero1 = $_POST['numero1'];
        $numero2 = $_POST['numero2'];
        $op = $_POST['operacao'];

        if($op == '+') {
            $operacao = $numero1 + $numero2;
            echo '<div id="resultado">'. 
                    $operacao . '</div>';
        }
        else if($op == '-') {
            $operacao = $numero1 - $numero2;
            echo '<div id="resultado">'. 
                    $operacao . '</div>';
        }
        else if($op == '*') {
            $operacao = $numero1 * $numero2;
            echo '<div id="resultado">'. 
                    $operacao . '</div>';
        }
        else if($op == '/') {
            $operacao = $numero1 / $numero2;
            echo '<div id="resultado">'. 
                    $operacao . '</div>';
        } else {
            echo "Deu erro!";
        }
    ?>
        <form action="index.php" method="post">
            <input class="numeros" type="text" name="numero1" placeholder="Primeiro número">
            <input class="numeros" type="text" name="numero2" placeholder="Segundo número">
            <br>
            <div id="op">
                <input  type="submit" value="+" name="operacao">
                <input  type="submit" value="-" name="operacao">
                <input  type="submit" value="*" name="operacao">
                <input  type="submit" value="/" name="operacao">
            </div>
    </form>
    
    
</div>
</body>
</html>


