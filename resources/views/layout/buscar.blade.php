@extends('layout.app')
@section('content')
<div class="content-home">
  <div class="general-bg">  
      <div id="buscador-main">
        <div id="buscador-title">¿DÓNDE QUIERES BUSCAR?</div>
        <div>
            <form method="POST" id="buscador-form">      
              <select name="category" id="category" form="">
                <option value="Categoría" selected="selected" disabled>Categoría</option>
                <option value="opt1">opt1</option>
                <option value="opt2">opt2</option>
                <option value="opt3">opt3</option>
                <option value="opt4">opt4</option>
              </select>

              <select name="type" id="type" form="">
                <option value="Tipo de café" selected="selected" disabled>Tipo de café</option>
                <option value="opt1">opt1</option>
                <option value="opt2">opt2</option>
                <option value="opt3">opt3</option>
                <option value="opt4">opt4</option>
              </select>

              <input type="submit" value="Buscar">
            </form>
          </div>

        </div>

        <div id="main-buscador-sc2">
          <div id="buscador-sc2">
            <div class="sc2-img-text sc2-selct">Madrid</div>
            <div class="sc2-img-text sc2-selct">Barcelona</div>
            <div class="sc2-img-text sc2-selct">Granada</div>
          </div>
          <div>Ver todo</div>
        </div>

         {{-- PARA CADA CAFETERÍA SEGÚN LA BÚSQUEDA --}}

    <div class="elem-buscador">

      <div class="elem-buscador-img">
        <img src="" alt="Img Cafetería" width="400px" height="400px">
      </div>

      <div class="elem-buscador-info">
        <div class="title-favorito">
          <p class="caf-name">NOMBRE</p>
          <img src="{{asset('img/corazon.png')}}" width="150px" class="favorito">
        </div>
        <p>Información...</p>
        <div class="btn-more">
          <button>Ver más</button>
        </div>
      </div>
    </div>
    </div>
</div>
    @endsection