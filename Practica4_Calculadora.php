<!DOCTYPE html>
<html lang="es">
<head>
  <meta charset="UTF-8">
  <title>Mini Calculadora</title>
  <style>
    body {
      background: #1e1e2f;
      color: #fff;
      font-family: Arial, sans-serif;
      text-align: center;
      padding-top: 50px;
    }
    form {
      background: #2a2a40;
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
      color: #00ffcc;
    }
  </style>
</head>
<body>

  <h1>🧮 Mini Calculadora PHP</h1>

  <form method="POST">
    <input type="number" name="num1" placeholder="Primer número" required>
    <input type="number" name="num2" placeholder="Segundo número" required><br>

    <select name="operacion" required>
      <option value="">Selecciona una operación</option>
      <option value="suma">Suma</option>
      <option value="resta">Resta</option>
      <option value="multiplicacion">Multiplicación</option>
      <option value="division">División</option>
    </select><br>

    <input type="submit" name="calcular" value="Calcular">
  </form>

  <?php
  if (isset($_POST['calcular'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $operacion = $_POST['operacion'];
    $resultado = "";

    switch ($operacion) {
      case "suma":
        $resultado = $num1 + $num2;
        break;
      case "resta":
        $resultado = $num1 - $num2;
        break;
      case "multiplicacion":
        $resultado = $num1 * $num2;
        break;
      case "division":
        if ($num2 != 0) {
          $resultado = $num1 / $num2;
        } else {
          $resultado = "No se puede dividir entre 0";
        }
        break;
      default:
        $resultado = "Operación no válida";
    }

    echo "<div class='resultado'>Resultado: <strong>$resultado</strong></div>";
  }
  ?>

</body>
</html>
