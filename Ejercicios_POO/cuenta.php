<?php

class Cuenta {
    private $nombreCliente;
    private $apellidoCliente;
    private $numCuenta;
    private $tipoInteres;
    private $saldo;
  
    public function __construct($nombreCliente,$apellidoCliente, $numCuenta, $tipoInteres, $saldo) {
      $this->nombreCliente = $nombreCliente;
      $this->apellidoCliente = $apellidoCliente;
      $this->numCuenta = $numCuenta;
      $this->tipoInteres = $tipoInteres;
      $this->saldo = $saldo;
    }
  
    public function setNombreCliente($nombreCliente) {
      $this->nombreCliente = $nombreCliente;
    }
  
    public function getNombreCliente() {
      return $this->nombreCliente;
    }

    public function setapellidoCliente($apellidoCliente) {
      $this->apellidoCliente = $apellidoCliente;
    }
  
    public function getapellidoCliente() {
      return $this->apellidoCliente;
    }
  
    public function setNumCuenta($numCuenta) {
      $this->numCuenta = $numCuenta;
    }
  
    public function getNumCuenta() {
      return $this->numCuenta;
    }
  
    public function setTipoInteres($tipoInteres) {
      $this->tipoInteres = $tipoInteres;
    }
  
    public function getTipoInteres() {
      return $this->tipoInteres;
    }
  
    public function setSaldo($saldo) {
      $this->saldo = $saldo;
    }
  
    public function getSaldo() {
      return $this->saldo;
    }
  
    public function ingreso($cantidad) {
      if ($cantidad < 0) {
        return false;
      }
  
      $this->saldo += $cantidad;
      return true;
    }
  
    public function reintegro($cantidad) {
      if ($cantidad < 0 || $this->saldo < $cantidad) {
        return false;
      }
  
      $this->saldo -= $cantidad;
      return true;
    }
  }

$cuenta1 = new Cuenta("Juan","Pérez", "ES1234567890123456789012", 0.05, 1000);
$cuenta2 = new Cuenta("María","Gómez", "ES9876543210987654321098", 0.02, 500);

$cuenta1->ingreso(500);
$cuenta1->reintegro(200);
$cuenta2->reintegro(600);

// echo "Cuenta 1: " . $cuenta1->getNombreCliente() . " - " . $cuenta1->getNumCuenta() . " - " . $cuenta1->getSaldo() . "\n" . "<br>";
// echo "Cuenta 2: " . $cuenta2->getNombreCliente() . " - " . $cuenta2->getNumCuenta() . " - " . $cuenta2->getSaldo() . "\n";


?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Ejercicio Cuenta POO</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin-bottom: 20px;
        }

        th, td {
            border: 1px solid black;
            padding: 8px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }
    </style>
</head>
<body>
  <h1>La Cuenta</h1>
<table>
    <tr>
        <th>ID</th>
        <th>Nombre</th>
        <th>Apellido</th>
        <th>Numero de Cuenta</th>
        <th>Saldo</th>
    </tr>
    <?php
    echo "<tr>";
    echo "<td>1</td>";
    echo "<td>" . $cuenta1->getNombreCliente() . "</td>";
    echo "<td>" . $cuenta1->getApellidoCliente() . "</td>";
    echo "<td>" . $cuenta1->getNumCuenta() . "</td>";
    echo "<td>" . $cuenta1->getSaldo() . "</td>";
    echo "</tr>";

    echo "<tr>";
    echo "<td>2</td>";
    echo "<td>" . $cuenta2->getNombreCliente() . "</td>";
    echo "<td>" . $cuenta1->getApellidoCliente() . "</td>";
    echo "<td>" . $cuenta2->getNumCuenta() . "</td>";
    echo "<td>" . $cuenta2->getSaldo() . "</td>";
    echo "</tr>";
    ?>
      </table>
</body>
</html>