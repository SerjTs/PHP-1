<?php

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

           
    <h4 class="text-center">Калькулятор</h4>
    <form name="calc" id="calculator">
        <div class="container col-xs-6 col-sm-4 col-md-3 col-lg-2">
            <div class="form-group col-md-13">
               <textarea disabled readonly class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
            </div>
            <div class="row" style="max-width: 200px;">
                <div class="col-3">
                    <button type="submit" class="btn btn-primary btn-danger">C</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-danger">&larr;</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark">/</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark">х</button>
                </div>
            </div>
            <div class="row" style="max-width: 200px;">
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">7</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">8</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">9</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark">&ndash;</button>
                </div>
            </div>
            <div class="row" style="max-width: 200px;">
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">4</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">5</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">6</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-dark">+</button>
                </div>
            </div>
            <div class="row" style="max-width: 200px;">
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">1</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">2</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">3</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btnEnter btn-dark">=</button>
                </div>
            </div>
            <div class="row align-items-start" style="max-width: 200px;">
                <div class="clearfix"></div>  
                   <div class="col-6">
                    <button type="submit" class="btn btnZero btn-secondary">0</button>
                </div>
                <div class="col-3">
                    <button type="submit" class="btn btn-secondary">,</button>
                </div>
            </div>
        </div>
    </form>                                                                                                                                  
</body>
</html>
