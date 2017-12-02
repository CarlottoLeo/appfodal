@extends('layouts.app')

@section('content')
<div class="row">
  <form class="col s12" method="POST" action="">
      {{ csrf_field() }}

    <div class="row">
      <div class="input-field col s6">
        <i class="material-icons prefix">account_circle</i>
        <input id="icon_prefix" type="text" class="validate" name="name">
        <label for="icon_prefix">First Name</label>
      </div>
      <div class="input-field col s6">
        <i class="material-icons prefix">phone</i>
        <input id="icon_telephone" type="tel" class="validate" name="phone">
        <label for="icon_telephone">Telephone</label>
      </div>
      <div class="row col s6">
        <div class="col s6">
          <i class="material-icons prefix">date_range</i>
          <input id="icon_data" type="date" class="validate" name="date">
          <label for="icon_data"></label>
        </div>
        <div class="col s6">
          <i class="material-icons prefix">access_time</i>
          <input id="icon_hour" type="time" class="validate" name="time">
          <label for="icon_hora"></label>
        </div>
        <div class="center">
          <a class="waves-effect waves-teal btn-flat">Verificar horários disponíveis.</a>
        </div>
      </div>
      <div style="margin-top: 30px;" class="input-field col s6">
        <i class="material-icons prefix">email</i>
        <input id="icon_email" type="email" class="validate" name="email">
        <label for="icon_email">E-mail</label>
      </div>
      <div style="margin-top: 20px;" class="row col s4">
        <div class="row col s6">
          <p>
            <input type="checkbox" id="cabelo" name="cabelo" />
            <label for="cabelo">Cabelo </label>
          </p>
        </div>
        <div class="row col s6">
          <p>
            <input type="checkbox" id="barba" name="barba" />
            <label for="barba">Barba</label>
          </p>
        </div>
      </div>
    </div>
    <div style="margin-top: 50px;" class="center">
      <button class="btn waves-effect waves-light" type="submit" name="submit">Marcar Horário
        <i class="material-icons right">check</i>
      </button>
      <button class="btn waves-effect waves-light red" type="clear" name="clear">Limpar Campos
        <i class="material-icons right">clear</i>
      </button>
    </div>
  </form>
</div>

@endsection
