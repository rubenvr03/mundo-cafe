@extends('layout.app')
@section('content')
<div id="home-main" class="h-auto p-4">
    <div id="hm-text1" class="hblock">
        BIENVENIDO A
    </div>

    <div id="hm-text2" class="hblock">
        Mundo Café
    </div>

    <div id="hm-text3" class="hblock">
        Cafés de especialidad alrededor del mundo
    </div>

    <button  id="main-btn" class="text-yellow-900 font-bold py-2 px-4 rounded">
        ¿NOS TOMAMOS<br>UN CAFÉ?
      </button>
</div>
<div class="content-home">
<div id="home-sc2" class="h-auto p-4 general-bg">
    <div class="cntr">

        <div id="home-sc2-title-block" class="hblock">
            <div class="textline"></div>
            <div id="home-sc2-title" >¿Dónde estamos?</div>
            <div class="textline"></div>
        </div>

        <div id="home-sc2-text" class="hblock">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting, remaining
            essentially unchanged. It was popularised in the 1960s with the release of Letraset
        </div>

        <div class="home-sc2-img hblock">
            <div class="sc2-img-bd">
                <div id="mad" class="sc2-img"></div>
            </div>

            <div class="sc2-img-bd">
                <div id="bcn" class="sc2-img"></div>
            </div>

            <div class="sc2-img-bd">
                <div id="gnd" class="sc2-img"></div>
            </div>

        </div>

        <div class="home-sc2-img">
            <div class="sc2-img-bd2">
                <div class="sc2-img-text">Madrid</div>
            </div>

            <div class="sc2-img-bd2">
                <div class="sc2-img-text">Barcelona</div>
            </div>

            <div class="sc2-img-bd2">
                <div class="sc2-img-text">Granada</div>
            </div>

        </div>
    </div>

</div>

<div class="hblock general-bg home-sc3">
    <div class="sc3-block">
        <h2>Somos Mundo Café</h2>
        <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry.
            Lorem Ipsum has been the industry's standard dummy text ever since the 1500s,
            when an unknown printer took a galley of type and scrambled it to make a type specimen book.
            It has survived not only five centuries, but also the leap into electronic typesetting,
            remaining essentially unchanged. It was popularised in the 1960s with the release of Letraset
        </p>
    </div>
    <div id="sc3-img" class="sc3-block">
    </div>

</div>
<div class="hblock general-bg home-sc3">
    <div class="sc3-block">
        <h2>Contáctanos</h2>
        <p>Si necesitas algo, sólo escríbenos y te ayudaremos ;)</p>
        <form method="POST">
           <div class="form-gral">
            <label>Nombre</label>
            <input type="text">
           </div>

           <div class="form-gral">
            <label>Email</label>
            <input type="text">
           </div>

           <div class="form-gral">
            <label>Asunto</label>
            <input type="text">
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
    <div id="sc4-img" class="sc3-block">
    </div>

</div>
</div>
@endsection
