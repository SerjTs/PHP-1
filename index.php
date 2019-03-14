<?php

// инициализация калькулятора при запуске
if (empty($textarea)) {
    // $textarea или 0, или пусто, или вообще не определена - будет 0 на экране калькулятора;
    $textarea = 0;
}

// если на табло были цифры, они передаются в переменную при перезагрузке страницы
if (isset($_POST['action'])) {
    $textarea = $_POST['action'];
}

// сброс калькулятора по кнопке С
if (isset($_POST['cBtn'])) {
    $textarea = 0;
}

// кнопка удаления последнего символа
if (isset($_POST['delBtn'])) {
    if (strlen ($textarea) > 1) {
        // если число знаков > 1, то удаляется последний символ строки 
        $textarea = mb_substr($textarea, 0, -1);    
    } else {
        // иначе при удалении последней цифры дисплей обнуляется
        $textarea = 0;
    }
    
}

// подключение цифровой клавиатуры
if (isset($_POST['dBtn'])) {
    // проверка на наличие =
    if (stristr($textarea, "=") !== false) {
        // стираем дисплей для ввода нового числа
        $textarea = "";
    }
    if ($textarea == "0" and $_POST['dBtn'] != ".") {
        // если на индикаторе 0 и не вводится точка, то вместо него ставится первая цифра
        $textarea = $_POST['dBtn'];    
    } else {
    // если на индикаторе не 0, цифра добавляется в строку
        $textarea .= $_POST['dBtn'];
    }
}

// функция вычисления математического результата
function result() {
    global $textarea;
    // проверка на наличие =
    if (stristr($textarea, "=") !== false) {
        // убираем = из переменной дисплея
        $textarea = mb_substr($textarea, 0, -1);
    }
    // проверка на деление
    list($firstDig, $twoDig) = explode("/", $textarea);
    if ($twoDig == "0") {
            $textarea = "На 0 делить нельзя!";
        } else if ($twoDig) {
            // если строка разбилась на две части, значит делим
            $textarea = $firstDig / $twoDig;    
        }
    // разбиваем строку на массив чисел оператором умножения
    list($firstDig, $twoDig) = explode("x", $textarea);
    if ($twoDig) {
        // если строка разбилась на две части, значит перемножаем
        $textarea = $firstDig * $twoDig;
    }
    // проверка на вычитание
    list($firstDig, $twoDig) = explode("-", $textarea);
    if ($twoDig) {
        // если строка разбилась на две части, значит вычитаем
        $textarea = $firstDig - $twoDig;
    }
    // проверка на сложение
    list($firstDig, $twoDig) = explode("+", $textarea);
    if ($twoDig) {
        // если строка разбилась на две части, значит складываем
        $textarea = $firstDig + $twoDig;
    }
    // возвращаем результат вычисления
    return $textarea;
}

// подключение математических операций
if (isset($_POST['operBtn'])) {
    // проверка на наличие математического оператора в конце строки
    $operator = substr($textarea, -1);
    if ($operator == "/" or $operator == "x" or $operator == "-" or $operator == "+") {
        // лишний оператор удаляется из операции
        $_POST['operBtn'] = "";
    } else {
    // перенаправление на функцию подсчёта результата
    result();
    }
    // если не сообщение о делении на ноль, добавляем к строке оператор
    if ($textarea != "На 0 делить нельзя!") {
        $textarea .= $_POST['operBtn'];
    }
}    

// подключение равно
if (isset($_POST['equalBtn'])) {
    // производим вычисление и выводим результат на дисплей
    result();
    // обозначим переменную равно для последующей очистки дисплея
    $equals = "=";
}     

?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>Урок 6. Калькулятор</title>
	<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	<link rel="stylesheet" href="css/styles.css">
</head>	

<body>

    <br>
    <h3 class="text-center">Калькулятор</h3>
    <form name="calc" id="calculator" action="index.php" method="POST">
        <div class="container">
            <div class="form-group col-md-13">
                <textarea disabled readonly class="form-control" id="exampleFormControlTextarea1" rows="1"><?php print $textarea; ?></textarea>
                <?php
                    // если была операция =, то добавляем знак = к числу для следующей проверки
                    // будет ли вводиться дальше число или оператор
                    if($equals == "=") {
                        $textarea .= "=";
                    }
                ?>
               <input type="hidden" name="action" value="<?php print $textarea; ?>" />
            </div>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary btn-danger" name="cBtn" value="C">C</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-danger" name="delBtn" value="delBtn">&larr;</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark" name="operBtn" value="/">/</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark" name="operBtn" value="x">х</button>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary" name="dBtn" value="7">7</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary" name="dBtn" value="8">8</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary" name="dBtn" value="9">9</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark"name="operBtn" value="-">&ndash;</button>
                </div>
            </div>
            <div class="row">
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary" name="dBtn" value="4">4</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary" name="dBtn" value="5">5</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary" name="dBtn" value="6">6</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark" name="operBtn" value="+">+</button>
                </div>
            </div>
            <div class="row">
                <div class="col-10">
                    <div class="row">
                        <div class="col-4">
                            <button type="submit" class="btn btn-secondary" name="dBtn" value="1">1</button>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-secondary" name="dBtn" value="2">2</button>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-secondary" name="dBtn" value="3">3</button>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-7">
                            <button type="submit" class="btn btnZero btn-secondary" name="dBtn" value="0">0</button>
                        </div>
                        <div class="col-2">
                            <button type="submit" class="btn btn-secondary zpt" name="dBtn" value=".">.</button>
                        </div>
                    </div>
                </div>
                <div class="col-2">
                    <button type="submit" class="btn btnEnter btn-dark" name="equalBtn" value="=">=</button>
                </div>
            </div>
        </div>
    </form>

</body>
</html>
