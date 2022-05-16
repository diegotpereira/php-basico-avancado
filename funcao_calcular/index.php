
    <h1>Matemática</h1>
    <h3>Digite os valores de x e y</h3>
    <form method="POST">
        Valor de x: <br />
        <input type="number" name="x" id="" required>
        <br /><br /> Valor de y: <br />
        <input type="number" name="y" id="" required>
        <br /><br />
        <input type="submit" value="Calcular">
    </form>
    
    <?php 
    
    include('calcular.php');

    if (isset($_POST['x']) AND isset($_POST['y'])) {
        # code...
        $x = addslashes($_POST['x']);
        $y = addslashes($_POST['y']);

        $resultado = Calcular($x, $y);
    
    ?>

    <hr />
    <h1>Resultados</h1>
    <h2>Valores de x e y => x = <?php echo $x; ?> e y = <?php echo $y; ?></h2>

    <h2>x + y = <?php echo $resultado['soma']; ?></h2>
    <h2>x - y = <?php echo $resultado['subtracao']; ?></h2>
    <h2>x * y = <?php echo $resultado['multiplicacao']; ?></h2>
    <h2>x / y = <?php echo $resultado['divisao']; ?></h2>
    <h2>x ^ y = <?php echo $resultado['exponenciacao']; ?></h2>

    <?php } ?>
