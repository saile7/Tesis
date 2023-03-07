@extends('layouts.main', ['activePage'=> 'acercade','titlePage' =>'Acerca de'])
@section('content')
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <link rel="preconnect" href="https://fonts.gstatic.com" />
        <link
          href="https://fonts.googleapis.com/css2?family=Bebas+Neue&family=Dancing+Script:wght@700&display=swap"
          rel="stylesheet"
        />
        <style>
            body {
    margin: 0;
    min-height: 100vh;
    display: flex;
    justify-content: center;
    align-items: center;
    background-color: #f7f7f7;
  }
  
  .section-heading {
    font-family: "Dancing Script", cursive;
    text-align: center;
    font-size: 64px;
    color: #10996d;
    margin: 0 0 70px;
  }
  
  .container {
    display: flex;
    justify-content: center;
    width: 80%;
    max-width: 1440px;
    margin: 0 auto;
  }
  
  .profile {
    position: relative;
    transition: all 0.3s;
  }
  
  .profile:hover {
    transform: translateY(25px);
  }
  
  .profile img {
    max-width: 50%;
    border-radius: 50%;
    border: 5px solid #f7f7f7;
    filter: drop-shadow(-20px 0 10px rgba(0, 0, 0, 0.1));
    cursor: pointer;
  }

  .profile:not(:first-child) img {
    margin-left: -20px;
  }
  
  .profile .name {
    position: absolute;
    background-color: #10996d;
    color: #fff;
    font-family: "Bebas Neue", cursive;
    padding: 15px 30px;
    border-radius: 100px;
    bottom: -80px; left: 50%;
    white-space: nowrap;
    transform: translate(-50%, -50px);
    letter-spacing: 1px;
    font-size: 20px;
    opacity: 0;
    transition: all 0.3s;
  }
  
  .profile .name::before {
    content: "";
    position: absolute;
    width: 15px; height: 15px;
    background-color: #10996d;
    top: 0; left: 50%;
    transform: translate(-50%, -50%) rotate(45deg);
  }
  
  .profile img:hover + .name {
    opacity: 1;
    transform: translateX(-50%);
    box-shadow: 0 10px 20px rgba(86, 86, 198, 0.3);
  }
        </style>
    </head>
<body>    
<div class="content">
    <div class="row">
        <section class="team">
            <h2 class="section-heading">Quienes Somos</h2>
            <div class="container">
              <div class="profile">
                <img src="{{ asset('img/jonathan.jpeg') }}" alt=""/><span class="name">Jonathan Quintanilla</span>
              </div>
              <div class="profile">
                <img src="{{ asset('img/miguel.jpg') }}" alt=""/><span class="name">Migel lema</span>
              </div>
            </div>
            
            
            </div>
          </section> 
    </div>
</div>
</body>
</html>
@endsection