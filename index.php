<html>
  <head>
    <title>PHP Test</title>
  </head>
  <body>
    <form method="get" action="calculo.php">
      <fieldset>
      <legend>Calculo Gastos:</legend>
         <input type="checkbox" name="gasolina" value="gasolina"> Gasolina 
        <input type="checkbox" name="alcool" value="alcool">Alcool <br> 

        <label for="Tempo"> Tempo de viagem:<br> </label>
        <input type="time"  name="tempoViag"><br>
        <label for="VeloMedia"> Velocidade Media:<br> </label>
        <input type="number" step= "0.1" name="veloM"><br><br><label for="KML"> KM por litro Gasolina:<br> </label>
        <input type="number" step= "0.1" name="km_litroGas"><br>
        <label for="KML"> Valor R$ por litro Gasolina:<br> </label>
        <input type="number" step= "0.01"name="Valor_litroGas"><br>
        <label for="KMA"> KM por litro Alcool:<br> </label>
        <input type="number" step= "0.1" name="km_litroAlc"><br>
        <label for="KML"> Valor R$ por litro Alcool:<br> </label>
        <input type="number" step= "0.01"name="Valor_litroAlc"><br>
        <input type="submit" name="enviar" value="Calcular"> 
      </fieldset>
    </form>    
  </body>
</html>