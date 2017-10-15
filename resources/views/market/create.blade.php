@extends('layouts.master')

@section('title','Marca Nueva')

@section('content')

<ol class="breadcrumb">
     <li><a href="{{url('dashboard')}}">Escritorio</a></li>
     <li><a href="{{url('product')}}"> Marcas</a></li>
     <li class="active">Nueva Marca</li>
   </ol>
 
  @include('partials.messages')

   <div class="page-header">
     <h1>Marca Nueva </h1>
   </div>

   <div class="row">
     <div class="col-md-8">

        <div class="panel panel-default">
          <div class="panel-heading">
             Nuevo Producto
           </div>
          <div class="panel-body">



            {!!Form::open(['route'=>'market.store','method'
            =>'POST'])!!}
            
	      <div class="form-group">
                  {!!form::label('Nombre')!!}
                  {!!form::text('name',null,['id'=>'name','class'=>'form-control','placeholder'=>'Digite la Marca'])!!}
             </div>
                 {!!form::submit('Grabar',['name'=>'grabar','id'=>'grabar','content'=>'<span>Grabar</span>','class'=>'btn btn-warning btn-sm m-t-10'])!!}             
          {!!Form::close()!!}




           </div>
        </div>


     </div>
   </div>



@endsection