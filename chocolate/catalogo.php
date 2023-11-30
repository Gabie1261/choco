<!DOCTYPE html>
<html lang="pt-BR">
<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>catálogo</title>
        <style>
       
body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
}

header {
    background-color: #f2b8a3;
    text-align: center;
    padding: 100px 0;
    color: #fff;
}

h1 {
    font-size: 2.5em;
}

.cta-button {
    display: inline-block;
    background-color: #d94c35;
    color: #fff;
    padding: 10px 20px;
    text-decoration: none;
    border-radius: 5px;
    font-weight: bold;
    transition: background-color 0.3s;
}

.cta-button:hover {
    background-color: #e64d3b;
}

.popular-products {
    text-align: center;
    margin: 40px 0;
}

.product {
    display: inline-block;
    width: 300px;
    margin: 0 20px;
}

.product img {
    height: 150px;
    width: 250px;
    max-width: 100%;
    border: 2px solid #d94c35;
    border-radius: 5px;
}

.price {
    font-weight: bold;
    color: #d94c35;
}

.company-info {
    background-color: #fff;
    text-align: center;
    padding: 40px 0;
}


footer {
    background-color: #f2b8a3;
    text-align: center;
    padding: 10px 0;
    color: #fff;
}

    </style>
</head>
<body>
    <header>
        <h1>Bem-vindo à ChocoDelights</h1>
        <p>Descubra o sabor irresistível do chocolate</p>
        <a href="catalogo.php" class="cta-button">Explore Nossos Chocolates</a>
    </header>

    <section class="popular-products">
        <h2>Produtos em Destaque</h2>
      
        <div class="product">
            <img src="imagem/bombom.jpg" alt="Chocolate Ao Leite">
            <h3>Chocolate Ao Leite</h3>
            <p>Delicioso chocolate ao leite com uma textura cremosa.</p>
            <span class="price">R$ 12,99</span>
        </div>

        <div class="product">
            <img src="imagem/chocolate.jpg" alt="Trufa de Chocolate">
            <h3>Trufa de Chocolate</h3>
            <p>Uma trufa irresistível com recheio de chocolate cremoso.</p>
            <span class="price">R$ 5,99</span>
        </div>
    </section>

    <section class="company-info">
        <h2>Nossa História</h2>
        <p>A ChocoDelights é apaixonada por criar os chocolates mais saborosos e requintados. Nossa jornada começou há mais de uma década, e desde então temos sido dedicados à qualidade, inovação e alegria do chocolate.</p>
    </section>

    <footer>
        <p>&copy; 2023 ChocoDelights</p>
    </footer>
</body>
</html>
