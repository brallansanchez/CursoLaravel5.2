@extends('layouts.master')

@section('title','Lista de Marcas')

@section('content')

   <!-- Main component for a primary marketing message or call to action -->
   
  <ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li class="active">Marcas</li>
   </ol>
   <div class="page-header">
     <h1>Marcas <small>Actualizados hasta hoy</small></h1>
   </div>
  @include('partials.messages')
   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Lista
             <p class="navbar-text navbar-right" style=" margin-top: 1px;">
                <button type="button" id='nuevo'  name='nuevo' 
                class="btn btn-warning navbar-btn" 
                style="margin-bottom: 1px; 
                margin-top: -5px;margin-right: 8px;padding: 3px 20px;
                background-color:  #3bd3e5;">
                Nuevo</button>
             </p>
           </div>
          <div class="panel-body">

             <table class="table table-bordered">
               <thead>
                  <th>Nombre</th>                 
                  <th>Acción</th>
               </thead>
               <tbody>
               @foreach($marks as $mark)
                  <tr>
                     <td>{{$mark->name}}</td>
                     <td><a href="{{route('market.edit',$mark->id)}}" 
                     class="btn btn-warning navbar-btn" 
                     style="margin-bottom: 1px; 
                     margin-top: -5px;
                     margin-right: 8px;padding: 3px 10px;">
                     [Editar]</a> 
                     <a href="{{route('market.show',$mark->id)}}"
                     class="btn btn-danger navbar-btn" 
                     style="margin-bottom: 1px; 
                     margin-top: -5px;margin-right: 8px;padding: 3px 10px;">
                     [Eliminar]</a></td>
                  </tr>
               @endforeach
               </tbody>


             </table>
           <div class='text-center'>
              {!!$marks->links()!!}
           </div>

          </div>
        </div>


     </div>
   </div>

<script>
  $("#nuevo").click(function(event)
  {
      document.location.href = "{{ route('market.create')}}";
  });
</script>
  
@endsection