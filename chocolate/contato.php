<!DOCTYPE html>
<html lang="pt-BR">

<head>
    <link rel="stylesheet" href="css/style.css">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>contato</title>
    
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

.container {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 20px;
        }
         

        .text {
           
            flex: 1;
             width:400px;
             color: black;
             font-weight: bold;
   /*   text-align: left;
    font-weight: bold;
    background-color: #FFE1D6;
    border-radius: 5px; */
        }

        .image {
            flex: 1;
        }

        img {
            max-width: 100%;
            height: auto;
        }




      
		.carrossel {
			width: 1000px;
			height: 600px;
			margin: 0 auto;
			position: relative;
			overflow: hidden;
		}


		.slide {
			width: 1000px;   
			height: 600px;  
			position: absolute;
			top: 0;
			left: 0;
			opacity: 0;
			transition: opacity 1s ease-in-out;
		}

		.slide.active {
			opacity: 1;
		}

		.button {
			position: absolute;
			top: 50%;
			transform: translateY(-50%);
			background-color: 0.5;
			border: none;
			color: #333;
			font-size: 24px;
			padding: 10px 20px;
			cursor: pointer;
		}

		.button.left {
			left: 0;
		}
    
		.button.right {
			right: 0;
		}
    </style>

</head>

<body>
    <header>
       
        <h1>ChocoDelights</h1>
        <p>Descubra o sabor irresistível do chocolate</p>
        <a href="catalogo.php" class="cta-button"a href="file:///C:/xampp/htdocs%20-%20Copia/chocolate/index.php">Explore Nossos Chocolates</a></a>
        

    </header>



    <div class="container">
        <div class="text">
            <p>A ChocoDelights é uma empresa especializada na produção de chocolates gourmet de alta qualidade. Fundada com a paixão por chocolate e inovação culinária, a empresa se destaca por oferecer uma variedade de produtos de chocolate que cativam os paladares dos amantes de doces</p>
        </div>
        <div class="image">
            <img src="imagem/dog.jpg" alt="Sua imagem">
        </div>
    </div>

    <div class="carrossel">
		<img src="imagem/escuro.jpg" alt="" class="slide active">
		<img src="imagem/comida.jpg" alt="" class="slide">
		<img src="imagem/doce.jpg" alt="" class="slide">
		<button class="button left" onclick="mudarSlide(-1)">&#10094;</button>
		<button class="button right" onclick="mudarSlide(1)">&#10095;</button>
	</div>
	<script>
		var slideIndex = 1;
		var slides = document.getElementsByClassName("slide");
		var botaoEsquerda = document.getElementsByClassName("left")[0];
		var botaoDireita = document.getElementsByClassName("right")[0];

		function mostrarSlide(n) {
			if (n > slides.length) {
				slideIndex = 1;
			}
			if (n < 1) {
				slideIndex = slides.length;
			}
			for (var i = 0; i < slides.length; i++) {
				slides[i].classList.remove("active");
			}
			slides[slideIndex - 1].classList.add("active");
		}

		function mudarSlide(n) {
			mostrarSlide(slideIndex += n);
		}

		setInterval(function() {
			mudarSlide(1);
		}, 5000);
	</script>

    <footer>
        <p>Maresias, São Sebastião - SP, 11600-000</p>
        <p>(12)99123-4777</p>
        <p>alunoss973@gmail.com</p>
        <p>&copy; 2023 ChocoDelights</p>
    </footer>
</body>