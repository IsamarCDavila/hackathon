@extends('app.appfront')
<?php
$title = 'Error 404';
?>
@section('style')
  <link href="css/vale-pavo.css" rel="stylesheet" type="text/css" />
@endsection
@section('script')
@endsection
<!-- /.heading-->
@section('content')
<div id="container-sanfer" class="container-sanfer">
  @include('front.includes.header')
  <div class="row cont-cabecera row-nomargin">
    <div class="main-text-cont">
      <h1 class="tit-cabecera">Error 404</h1>
      <br>
      <p class="parraf-cabecera">Parece que la página que estás buscando no existe. Usa el menú para navegar por nuestra web.</p>
    </div>
  </div>
  <div class="bloque" style="height: 100vh;">
    <div class="events-content">
        <ol class="list-unstyled">
          <li data-date="20/04/2014">
            <br>
          </li>
        </ol>
    </div>
  </div>
  @include('front.includes.footer')
</div>
@endsection
