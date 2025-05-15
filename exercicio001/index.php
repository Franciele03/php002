<?php
echo "<h3>Números pares de 0 a 100:</h3>";

for ($i = 0; $i <= 100; $i++) {
    if ($i % 2 == 0) {
        echo $i . "<br>";
    }
}
?>