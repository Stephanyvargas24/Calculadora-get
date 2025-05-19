<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Calculadora</title>
  <style>
    body {
      background:rgb(7, 160, 243);
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
    }
    form {
      background:rgb(91, 201, 228);
      padding: 30px;
      border-radius: 10px;
      display: inline-block;
      box-shadow: 0 0 10px #fff3;
    }
    input, select {
      padding: 10px;
      margin: 10px;
      font-size: 16px;
      border: none;
      border-radius: 5px;
    }
    input[type="submit"] {
      background: #4caf50;
      color: white;
      cursor: pointer;
    }
    input[type="submit"]:hover {
      background: #45a049;
    }
    .resultado {
      margin-top: 20px;
      font-size: 20px;
      color:rgb(10, 40, 233);
    }
  </style>
</head>
<body>

  <h1>Calculadora </h1>

  <form method="GET">
    <input type="number" name="num1" placeholder="Primer número" required>
    <input type="number" name="num2" placeholder="Segundo número" required><br>

    <select name="operacion" required>
      <option value="">Elige operación</option>
      <option value="+">+</option>
      <option value="-">−</option>
      <option value="*">×</option>
      <option value="/">÷</option>
    </select><br>

    <input type="submit" name="calcular" value="Calcular">
  </form>

  <?php
  if (isset($_GET['calcular'])) {
    $num1 = $_GET['num1'];
    $num2 = $_GET['num2'];
    $op = $_GET['operacion'];
    $resultado = "";

    switch ($op) {
      case '+':
        $resultado = $num1 + $num2;
        break;
      case '-':
        $resultado = $num1 - $num2;
        break;
      case '*':
        $resultado = $num1 * $num2;
        break;
      case '/':
        $resultado = ($num2 != 0) ? $num1 / $num2 : "Error: división por cero";
        break;
      default:
        $resultado = "Operación inválida";
    }

    echo "<div class='resultado'><strong>$resultado</strong></div>";
  }
  ?>

</body>
</html>
