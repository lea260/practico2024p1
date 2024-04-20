<?php
echo "hola mundo";
require_once 'Cuenta.php';
$res = [];
$cuenta = new Cuenta("Diego", 2000);
$cuenta->ingresar(1000);
$cuenta->retirar(300);
?>
<pre>
    <?php var_dump($cuenta); ?>
</pre>