@extends('layout.app')
@section('content')

<div id="cafeteria-main" class="general-bg">

    <!-- DINAMIZAR NOMBRE -->
    <div class="perfil-title">
        ¡HOLA, NOMBRE!
    </div>
    <div class="elem-buscador">

        <div id="cafeteria-img" class="elem-buscador-img">
          <img src="" alt="Img Cafetería" width="400px" height="400px">
        </div>
        <div id="cafeteria-info" class="elem-buscador-info">
          <div id="header-block">
            <p id="cafeteria-title" class="caf-name">NOMBRE</p>
            
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
                <select name="category" id="category" form="">
                    <option value="Categoría" selected="selected" disabled>Categoría</option>
                    <option value="opt1">opt1</option>
                    <option value="opt2">opt2</option>
                    <option value="opt3">opt3</option>
                    <option value="opt4">opt4</option>
                  </select>
              </div>

              <div class="details">
                <p>TIPO DE CAFÉ</p>
                <div class="border-container"></div>
                <select name="type" id="type" form="">
                    <option value="Tipo de café" selected="selected" disabled>Tipo de café</option>
                    <option value="opt1">opt1</option>
                    <option value="opt2">opt2</option>
                    <option value="opt3">opt3</option>
                    <option value="opt4">opt4</option>
                  </select>
              </div>
            </div>

            <div class="details">
                <p>VALORACIÓN</p>
                <div class="border-container"></div>
              </div>

            <!--NÚMERO DE ESTRELLAS SEGÚN LA BBDD NO MODIFICABLE-->
            <div id="stars">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
                <img src="{{asset('img/star.png')}}" width="100px" class="no-selected">
            </div>
              
            <div class="edit-btn details">
                <input type="submit" value="Editar">
              </div>
            </div>

        </div>
      </div>

    <div id="cafeteria-main" class="general-bg">
        <div class="perfil-title">
            Tu galería
        </div>

        <div class="elem-buscador">
            <div class="galeria-img">
                <img src="" alt="Imagen Cafetería" width="600px" height="400px">
              </div>
              <div class="galeria-img">
                <img src="" alt="Imagen Cafetería" width="600px" height="400px">
              </div>
        </div>

        <div class="elem-buscador">
            <div class="galeria-img">
                <img src="" alt="Imagen Cafetería" width="600px" height="400px">
              </div>
              <div class="galeria-img">
                <img src="" alt="Imagen Cafetería" width="600px" height="400px">
              </div>  
        </div>

        <div class="edit-btn">
            <input type="submit" value="Cambiar imágenes">
        </div>

        <div class="elem-buscador">
            <a href="#cafeteria-main">Volver arriba</a>
        </div>
    

    </div>
    
        
 
@endsection