@extends('layouts.app')

@section('content')

<div class="row col s4 center">
  @for($i=0; $i<8; $i++)
    <img style="width: 300px;" src="images/logo.png" alt="">
  @endfor
</div>

@endsection
