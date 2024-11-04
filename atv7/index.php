<?php
   $bebida=1;
   switch ($bebida){
    case 1:
       $preco = 3.50;
       $nomebebida = "Refrigerante";
    break;

    case 2:
        $preco = 3.50;
        $nomebebida = "Suco";
    break;

    case 3:
        $preco = 3.50;
       $nomebebida = "Água";
    break;

    default:
        echo "Opção invalida";
   }
    echo "<p>Voce escolheu: $nomebebida</p>";
    echo "Preço : " , number_format($preco, 2,',',);
  ?>