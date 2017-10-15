@extends('layouts.master')

@section('title','Editar Marca')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('market')}}"> Marcas</a></li>
     <li class="active">Editar Marca</li>
   </ol>
 

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Editar Marca
           </div>
          <div class="panel-body">


            {!!Form::model($marks,['route'=>
            ['market.update',$marks->id],'method'=>'PUT'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('name',null,['id'=>'name','class'=>
                  'form-control','placeholder'=>'Digite la Marca'])!!}
             </div>
                  {!!form::submit('Grabar',['name'=>'grabar','id'=>
                  'grabar','content'=>'<span>Grabar</span>','class'=>
                  'btn btn-warning btn-sm m-t-10'])!!}
              <button type="button" id='cancelar'  name='cancelar'
               class="btn btn-info btn-sm m-t-10" >Cancelar</button>             
          {!!Form::close()!!}


           </div>
        </div>


     </div>
   </div>

<script>
  $("#cancelar").click(function(event)
  {
      document.location.href = "{{ route('product.index')}}";
  });
</script>


@endsection