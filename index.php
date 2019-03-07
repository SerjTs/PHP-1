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
            <table class="table table-borderless container">
              <tbody>
               <tr>
                <td colspan="4">
                    <div class="form-group col-md-13">
<!--                        <input type="text" class="form-control" rows="2" id="digitalArea">-->
                       <textarea disabled readonly class="form-control" id="exampleFormControlTextarea1" rows="2"></textarea>
                    </div>
                </td>
                </tr>
                <tr>
                <tr>
                  <td><button type="submit" class="btn btn-primary">C</button></td>
                  <td><button type="submit" class="btn btn-primary">&larr;</button></td>
                  <td><button type="submit" class="btn btn-primary">/</button></td>
                  <td><button type="submit" class="btn btn-primary">х</button></td>
                </tr>
                <tr>
                  <td><button type="submit" class="btn btn-primary">7</button></td>
                  <td><button type="submit" class="btn btn-primary">8</button></td>
                  <td><button type="submit" class="btn btn-primary">9</button></td>
                  <td><button type="submit" class="btn btn-primary">&ndash;</button></td>
                </tr>
                <tr>
                  <td><button type="submit" class="btn btn-primary">4</button></td>
                  <td><button type="submit" class="btn btn-primary">5</button></td>
                  <td><button type="submit" class="btn btn-primary">6</button></td>
                  <td><button type="submit" class="btn btn-primary">+</button></td>
                </tr>
                <tr>
                  <td><button type="submit" class="btn btn-primary">1</button></td>
                  <td><button type="submit" class="btn btn-primary">2</button></td>
                  <td><button type="submit" class="btn btn-primary">3</button></td>
                  <td rowspan="4"><button type="submit" class="btn btnEnter btn-primary">=</button></td>
                </tr>
                <tr>
                  <td colspan="2"><button type="submit" class="btn btnZero btn-primary">0</button></td>
                  <td><button type="submit" class="btn btn-primary">,</button></td>
                </tr>
              </tbody>
            </table>
        </form>
                    
</body>
</html>
