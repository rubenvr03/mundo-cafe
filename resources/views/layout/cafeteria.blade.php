@extends('layout.app')
@section('content')


<div id="cafeteria-main" class="general-bg">
    <div class="elem-buscador">

        <div id="cafeteria-img" class="elem-buscador-img">
          <img src="" alt="Img Cafetería" width="400px" height="400px">
        </div>
        <div id="cafeteria-info" class="elem-buscador-info">
          <div id="header-block">
            <p id="cafeteria-title" class="caf-name">NOMBRE</p>
            <img src="{{asset('img/corazon.png')}}" width="150px" class="favorito">
          </div>

          <div class="details">
            <p>HORARIO</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>

          <div class="details">
            <p>DIRECCIÓN</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>

          <div class="details">
            <p>DESCRIPCIÓN</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>


            <div class="flex justify-center">
            <div class="details">
                <p>CATEGORÍA</p>
                <div class="border-container"></div>
                <div class="select">Categoría</div>
              </div>

              <div class="details">
                <p>TIPO DE CAFÉ</p>
                <div class="border-container"></div>
                <div class="select">Tipo de café</div>
              </div>
            </div>

            <div class="details">
                <p>VALORACIÓN</p>
                <div class="border-container"></div>
              </div>

            <!-- HACER DINÁMICO EL NÚMERO DE ESTRELLAS SEGÚN LA BBDD -->
            <div id="stars">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
            </div>
              
              

          
          
        </div>
      </div>
</div>

@endsection