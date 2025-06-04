<?php
require __DIR__ . "/parts/top.php";
?>
    <div class="main-content">
        <div class="column">
            <h2>Inserir produto</h2>
            <form method="POST" action="actions/InsertProductAction.php" id="insert-product">
                <label for="product-name">Nome: </label>
                <input type="text" id="product-name" name="product-name"><br>
                <label for="product-name">Descrição: </label>
                <input type="text" id="product-name" name="product-name"><br>
                <label for="product-price">Preço: </label>
                <input type="number" id="product-price" name="product-price"><br>
                <button type="submit">Inserir</button>
            </form>
        </div>
    </div>
</body>
</html>