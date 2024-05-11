
<
       <?php
        if (isset($_POST['num1']) && isset($_POST['num2'])) {
            $numero1 = $_POST['num1'];
            $numero2 = $_POST['num2'];
            
            $suma = $num1 + $num2;
            $resta = $num1 - $num2;
            $multi = $num1 * $num2;
            $div = ($num2 != 0) ? $num1 / $num2 
            $raiz1 = sqrt($num1);
            $raiz2 = sqrt($num2);

           
            echo "<p>Suma: $suma</p>";
            echo "<p>Resta: $resta</p>";
            echo "<p>Multiplicación: $multi</p>";
            echo "<p>División: $div</p>";
            echo "<p>Raíz cuadrada de $numero1: $raiz1</p>";
            echo "<p>Raíz cuadrada de $numero2: $raiz2</p>";
        } 
       
