@extends('layouts.main', ['activePage' => 'dashboard', 'titlePage' => __('MatrizML')])

@section('content')
    <html> 
        <head>
            <style>
                /* -------------------------------- 

💡 Styling siblings on hover
🔗 https://codyhouse.co/nuggets/styling-siblings-on-hover

-------------------------------- */

.radio-btns {
  display: grid;
  gap: 4px;
  grid-template-columns: repeat(3, 100px);
}

.radio-btns:hover .radio-btns__btn:not(:hover) {
  filter: grayscale(100%);
  opacity: 0.75;
}

.radio-btns:hover .radio-btns__btn:not(:hover)::after {
  background-color: rgba(#000, 0.5);
}

@media (min-width: 30rem) {
  .radio-btns {
    grid-template-columns: repeat(3, 150px);
  }
}

.radio-btns__btn {
  position: relative;
  cursor: pointer;
  transition: .3s;
}

.radio-btns__btn::after {
  content: '';
  position: absolute;
  top: 0;
  left: 0;
  width: 100%;
  height: 100%;
  background-color: rgba(#000, 0);
  transition: .3s;
}

.radio-btns__btn img {
  display: block;
  width: 100%;
  max-width: 100%;
}

/* demo stuff */
body {
  padding: 1em;
  height: 100%;
  background-color: white;
}
            </style>
        </head>
    <body>
    <div class="content">
        <div class="container-fluid">
            <div class="row">
                <!--Enter code here -->
                <h1 class="car-title" > Bienvenido  a MATRIZML</h1>  
                
            </div>
            <div class="row">
                <p class="car-category">Para empezar a desarrollar el sistema de marco logico para su proyecto.<br> Primero se necesita crear la matris de involucrados</p>
        
             </div>
             <div class="row">
                <div class="radio-btns" role="radiogroup">
                    <div class="radio-btns__btn" role="radio" aria-checked="false" tabindex="-1" aria-label="Select image one">
                      <img src="{{ asset('img/sidebar-3.jpg') }}" alt="Image description">
                    </div>
                  
                    <div class="radio-btns__btn" role="radio" aria-checked="false" tabindex="-1" aria-label="Select image two">
                      <img src="{{ asset('img/sidebar-3.jpg') }}" alt="Image description">
                    </div>
                  
                    <div class="radio-btns__btn" role="radio" aria-checked="false" tabindex="-1" aria-label="Select image three">
                      <img src="{{ asset('img/sidebar-3.jpg') }}" alt="Image description">
                    </div>
                  </div>
                  
             </div>
        </div>
    </div>
    </body>
    </html>
@endsection
