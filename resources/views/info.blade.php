@extends('layouts.app')

@section('content')

<div class="center">
  <table class="responsive-table centered highlight">
       <thead>
         <tr>
             <th>Atendimento</th>
             <th>Horário</th>
             <th>Barbeiros</th>
         </tr>
       </thead>

       <tbody>
         <tr>
           <td>Segunda</td>
           <td>10H - 17H</td>
           <td>Jonas e Luiz</td>
         </tr>
         <tr>
           <td>terça</td>
           <td>10H - 17H</td>
           <td>Carlos</td>
         </tr>
         <tr>
           <td>Quinta</td>
           <td>11H - 19H</td>
           <td>Marcos</td>
         </tr>
       </tbody>
     </table>
</div>

@endsection
