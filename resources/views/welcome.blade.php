<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>GenerML</title>

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Varela+Round">
       

        <!-- Styles -->
        <style>
      *{
    margin: 0;
    padding: 0;
    box-sizing: border-box;
}

body{
    font-family: 'Roboto', 'Sans serif';
}

.contenedor{
    width: 90%;
    max-width: 1200px;
    margin: auto;
}

.bg_animate{
    width: 100%;
    height: 100vh;
    background: linear-gradient(to right, #005C98, #505BDA);
    position: relative;
    overflow: hidden;
}

.header_nav{
    width: 100%;
    position: absolute;
    top: 0;
    left: 0;
}

.header_nav .contenedor{
    display: flex;
    justify-content: space-between;
    align-items: center;
    padding: 15px 0;
}

.header_nav h1{
    color: #fff;
    font-family: 'Gagalin';
}

.header_nav nav a{
    color: #fff;
    text-decoration: none;
    margin-right: 8px;
}
nav {
  margin-top: 30px;
  padding: 20px;
  text-align: center;
  font-family: Raleway;
}

.link-1 {
  transition: 0.3s ease;
  background: ;
  color: #ffffff;
  font-size: 20px;
  text-decoration: none;
  border-top: 4px solid #3e60e9;
  border-bottom: 4px solid #3e60e9;
  padding: 20px 0;
  margin: 0 20px;
}
.link-1:hover {
  border-top: 4px solid #ffffff;
  border-bottom: 4px solid #ffffff;
  padding: 6px 0; 
}


.banner{
    display: flex;
    justify-content: space-between;
    align-items: center;
    height: 100%;
}

.banner_title h2{
    color: #fff;
    font-size: 60px;
    font-weight: 800;
    margin-bottom: 20px;
}

.banner_title .llamanos{
    color: #fff;
    font-size: 20px;
    text-decoration: none;
    display: inline-block;
    background: #1A2849;
    padding: 20px;
}

.banner_img{
    animation: movimiento 2.5s linear infinite;
}

.banner_img img{
    border-top-left-radius: 400px 200px;
    width: 600px;
    display: block;
}

/* burbujas */

.burbuja{
    border-radius: 50%;
    background: #fff;
    opacity: .3;

    position: absolute;
    bottom: -150;
    
    animation: burbujas 3s linear infinite ;
}

.burbuja:nth-child(1){
    width: 80px;
    height: 80px;
    left: 5%;
    animation-duration: 3s;
    animation-delay: 3s;
}

.burbuja:nth-child(2){
    width: 100px;
    height: 100px;
    left: 35%;
    animation-duration: 3s;
    animation-delay: 5s;
}

.burbuja:nth-child(3){
    width: 20px;
    height: 20px;
    left: 15%;
    animation-duration: 1.5s;
    animation-delay: 7s;
}

.burbuja:nth-child(4){
    width: 50px;
    height: 50px;
    left: 90%;
    animation-duration: 6s;
    animation-delay: 3s;
}

.burbuja:nth-child(5){
    width: 70px;
    height: 70px;
    left: 65%;
    animation-duration: 3s;
    animation-delay: 1s;
}

.burbuja:nth-child(6){
    width: 20px;
    height: 20px;
    left: 50%;
    animation-duration: 4s;
    animation-delay: 5s;
}

.burbuja:nth-child(7){
    width: 20px;
    height: 20px;
    left: 50%;
    animation-duration: 4s;
    animation-delay: 5s;
}

.burbuja:nth-child(8){
    width: 100;
    height: 100px;
    left: 52%;
    animation-duration: 5s;
    animation-delay: 5s;
}

.burbuja:nth-child(9){
    width: 65px;
    height: 65px;
    left: 51%;
    animation-duration: 3s;
    animation-delay: 2s;
}

.burbuja:nth-child(10){
    width: 40px;
    height: 40px;
    left: 35%;
    animation-duration: 3s;
    animation-delay: 4s;
}


@keyframes burbujas{
    0%{
        bottom: 0;
        opacity: 0;
    }
    30%{
        transform: translateX(30px);
    }
    50%{
        opacity: .4;
    }
    100%{
        bottom: 100vh;
        opacity: 0;
    }
}

@keyframes movimiento{
    0%{
        transform: translateY(0);
    }
    50%{
        transform: translateY(30px);
    }
    100%{
        transform: translateY(0);
    }
}
           

        </style>
    </head>
	<body>
		<header class="bg_animate">
			<div class="header_nav">
				<div class="contenedor">
					<h1>MatrizML</h1>
					<nav id="nav-1">
						  <a class="link-1" href="#">Home</a>
						  <a class="link-1" href="{{ route('login') }}">Login</a>
						  <a class="link-1" href="{{ route('register') }}">Registre</a>
						  
					</nav>
				</div>
			</div>
			
			<section class="banner contenedor">
				<secrion class="banner_title">
					<h2>Necesitas ayuda?</h2>
					<a href="#" class="llamanos">Contactanos ya!</a>
				</secrion>
				<div class="banner_img">
					<img src="{{ asset('img/prueba.jpg') }}" alt="">
				</div>
			</section>
	
			<div class="burbujas">
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
				<div class="burbuja"></div>
			</div>
		</header>
	</body>
   
</html>

