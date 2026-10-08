
    <?php
    function calcular($n1, $n2, $op){
    switch ($op) {
        case 'suma':
            return $n1 + $n2;
            
        case 'resta':
            return  $n1 - $n2;
            
        case 'multiplicacion':
            return  $n1 * $n2;
           
        case 'division':
            if($n2 == 0) {
                return "Error: No se puede dividir entre 0";
            } else {
                return $n1 / $n2;
            }
        }}
    ?>
