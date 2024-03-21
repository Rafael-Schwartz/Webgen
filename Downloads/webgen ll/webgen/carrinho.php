<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Carrinho de Compras</title>
    <link rel="stylesheet" type="text/css" href="css/style_carrinho.css">
</head>
<body>
    <div class="container">
        <h2>Carrinho de Compras</h2>

        <form action="processar_formulario.php" method="POST">
            <label for="idproduto">Selecionar Produto:</label>
            <select id="idproduto" name="idproduto">
                <option value="1">Motorola E13</option>
                <option value="2">Samsung Galaxy A05</option>
                <option value="3">Samsung Galaxy Book2</option>
                <option value="4">Asus Vivobook 15</option>
                <option value="5">Smart TV 50</option>
                <option value="6">Smart TV 43</option>
            </select>

            <input type="hidden" id="idproduto" name="idproduto" value="idproduto">

            <label for="name">Nome:</label>
            <input type="text" id="name" name="name" required>

            <label for="email">Email:</label>
            <input type="email" id="email" name="email" required>

            <label for="address">Endereço de Entrega:</label>
            <textarea id="address" name="address" required></textarea>

            <button type="submit">Finalizar Compra</button>
            <button onclick="location.href='index.html'">Voltar</button>
        </form>
    </div>
    <script>
        function returnToIndex() {
            window.location.href = '../index.html';
        }
    </script>
</body>
</html>
