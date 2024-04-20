@extends('layout.app')
@section('content')

<div id="unete-main" class="general-bg">
    <div class="sc3-block">
        <h2>Únete</h2>
        <p>Envianos tu información y nos pondremos en contacto<br>
            contigo para ser parte de Mundo Café</p>
        <div id="unete-img" class="sc3-block"></div>
        
    </div>

    <div id="unete-form" class="sc3-block">
        <form method="POST">
            <div class="form-gral">
                <label>Nombre Cafetería</label>
                <input type="text">
            </div>
     
            <div class="form-gral">
                <label>Dirección</label>
                <input type="text">
            </div>
     
            <div class="form-gral">
                <select name="category" id="category" form="">
                    <option value="Categoría" selected="selected" disabled>Categoría</option>
                    <option value="opt1">opt1</option>
                    <option value="opt2">opt2</option>
                    <option value="opt3">opt3</option>
                    <option value="opt4">opt4</option>
                  </select>
            </div>

            <div class="form-gral">
                <select name="type" id="type" form="">
                    <option value="Tipo de café" selected="selected" disabled>Tipo de café</option>
                    <option value="opt1">opt1</option>
                    <option value="opt2">opt2</option>
                    <option value="opt3">opt3</option>
                    <option value="opt4">opt4</option>
                  </select>
            </div>
     
            <div class="form-gral">
                <label>Mensaje</label>
                <input type="textarea" rows="10">
            </div>
     
            <div class="form-gral">
                <input type="submit" value="Enviar">
            </div>
     
        </form>
    </div>

</div>
    @endsection