<?php 
# Construa um script em PHP que calcula a quantidade de litros de combustível gastos em uma viagem utilizando-se um automóvel que faz (12 Km- formulario) por litro. 
# O tempo gasto da viagem e a velocidade média durante a mesma são fornecidos através de formulário. O algoritmo deverá apresentar como resultado os valores da velocidade média, tempo gasto na viagem, a distância percorrida e a quantidade de litros utilizados na viagem.
#colocar o valor gasto 
#Fórmulas para o cálculo.
# distância = tempoGastoNaViagem * velocidadeMedia;
# litros_usados = (distância / 12);
$check_Gas = isset($_GET['gasolina']);
$check_Alc = isset($_GET['alcool']);
$km_litroGas = $_GET['km_litroGas'];
$km_litroAlc = $_GET['km_litroAlc'];
$tempoViag = $_GET['tempoViag'];
$veloM = $_GET['veloM'];
$Valor_litroGas  = $_GET['Valor_litroGas'];
$Valor_litroAlc  = $_GET['Valor_litroAlc'];
#calculos
#echo ($tempoViag);
$tempViagArray=explode(":",$tempoViag);
#print_r($tempViagArray);
$tempoViagHora=$tempViagArray[0]+($tempViagArray[1]/60);
#echo $tempoViagHora;
$distancia = $tempoViagHora * $veloM;
echo '<h2>Informações da viagem</h2><br>';
echo 'Distancia percorrida: '.number_format($distancia,2,",",".").' Km<br>';
if($check_Gas){
    $litrosUsadosGas = $distancia / $km_litroGas ;
    $gastoTotalGas = $litrosUsadosGas * $Valor_litroGas;
    echo 'Consumo gasolina: '.number_format($litrosUsadosGas,2,",",".").' litros<br>';
    echo 'Valor Gasto gasolina: R$ '.number_format($gastoTotalGas,2,",",".").'<br>';
}  
if($check_Alc){
    $litrosUsadosAlc = $distancia / $km_litroAlc ;
    $gastoTotalAlc = $litrosUsadosAlc * $Valor_litroAlc;
    echo 'Consumo alcool: '.number_format($litrosUsadosAlc,2,",",".").' litros<br>';

echo 'Valor Gasto alcool: R$ '. number_format($gastoTotalAlc,2,",",".");
}
?>
