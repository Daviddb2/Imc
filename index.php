<div>
    <p>O seu IMC está na faixa da: 
        <b>
        <?php

        $altura = 1.71;
        $peso = 50;
        $imc = $peso/ ($altura * $altura);

        $faixa = "";

        if($imc < 18.5) {
            $faixa = "Magreza";
        }   else if($imc >= 18.5 && $imc <= 25){
            $faixa = "Normal";
        }   else if($imc >= 25 && $imc < 30){
            $faixa = "Sobrepreso";
        }   else{
            $faixa = "Obesidade";
        }
        echo $faixa;

        ?>
        </b>
    </p>
</div>

