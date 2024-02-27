<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Тестируем PHP</title>
</head>
<body>

    <header>
          <h1>Домашняя работа: Solve the equation.</h1>
    </header>
    <main>
    <?php
    $equation = 'X * 22 = 220';
    $elems = explode(" ", $equation);
    $operator = $elems[1];
    $operand = $elems[2];
    $result = $elems[4];
    $x = 0;

    switch ($operator) {
        case '*':
            $x = $result / $operand;
            break;
        default:
            echo 'Неверно введен оператор';
            break;
    }

    echo "Значение X = " . $x;
    ?>

    </main>
</footer>
<p>Фролов Александр Дммитриевич 231-322</p>
</body>
</html>