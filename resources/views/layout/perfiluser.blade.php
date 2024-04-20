@extends('layout.app')
@section('content')

<div id="cafeteria-main" class="general-bg">

    <!-- DINAMIZAR NOMBRE -->
    <div class="perfil-title">
        ¡HOLA, NOMBRE!
    </div>
    <div class="elem-buscador">

        <div class="elem-buscador-img">
          <img src="" alt="Img" width="400px" height="400px">
        </div>
        <div  class="profile-info">
          <div id="">
            <p id="usr-name">Información personal</p>
            
          </div>

          <div class="details">
            <p>NOMBRE</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>

          <div class="details">
            <p>Apellido</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>

          <div class="details">
            <p>Email</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>

          <div class="details">
            <p>Contraseña</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>

          <div class="details">
            <p>Fecha de nacimiento</p>
            <div class="border-container"></div>
            <p>Información</p>
          </div>
              
            <div class="edit-btn details">
                <input type="submit" value="Editar">
              </div>
            </div>

        </div>
      </div>

    <div id="cafeteria-main" class="general-bg">
        <div class="perfil-title">
            Tus favoritos
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
        
        <div class="elem-buscador">
            <a href="#cafeteria-main">Volver arriba</a>
        </div>
    

    </div>
    
        
 
@endsection