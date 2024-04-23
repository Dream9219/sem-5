<?php 
for($i=1; $i <=50 ; $i++) {
    $resultado = determinarPar($i);
    if($resultado){
        echo "el numero ".$i.": es par <br/>";
    }else{
        echo "el numero ".$i.": es impar <br/>";
    }
}




function determinarPar($numero){
    if($numero % 2==0){
        return true;
    } else{
        return false;
    }
}
?>