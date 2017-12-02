@extends('layouts.app')

@section('content')
<div class="container">
  <div class="row">
    <div class="col-md-8 col-md-offset-2">
      <div class="panel panel-default">

        <div class="panel-body">
          @if (session('status'))
          <div class="alert alert-success">
            {{ session('status') }}
          </div>
          @endif


          <div class="row">
            @for( $i=0; $i<=2; $i++)
            <div class="col s4">
              <div class="card">
                <div class="card-image">
                  <img src="{{ asset('images/barber.jpg') }}">
                  <span class="card-title"><b>Barber Shop</b></span>
                </div>
                <div class="card-content">
                  <p>Descrição da barbearia ...</p>
                </div>
                <div class="card-action">
                  <a href="/markbarber">Marcar horário!</a>
                </div>
              </div>
            </div>
            @endfor
          </div>

        </div>
      </div>
    </div>
  </div>
</div>
@endsection
