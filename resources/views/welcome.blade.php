@extends('layouts.app')

@section('content')


<video autoplay loop poster="nome-do-video.jpg" class="bg_video">
  <source src="videos/a1.mp4" type="video/mp4">
</video>

  <div class="center">
    <h1 class="white-text"><b>Barber Shop</b></h1>
  </div>

  <div class="subMenu center">
    <a href="/galeria" class="btn-flat white-text">Galeria</a>
    <a href="/info" class="btn-flat white-text">Informações</a>
    <a href="contato" class="btn-flat white-text">Contato</a>
    <a href="historia" class="btn-flat white-text">História</a>
  </div>

  <div class="center local">
    <h2 class="white-text"><b>Agende já o seu horário!</b></h2>
    <a style="border-radius: 50px;" class="waves-effect waves-light btn-large white black-text"><i class="material-icons right">access_time</i>Agendar Horário</a>
    <br>
    <br>
  </div>

  @endsection
