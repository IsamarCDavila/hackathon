@extends('app.app')
@section('style')
    <link href="<?php echo URL::asset('http://code.jquery.com/ui/1.10.1/themes/base/jquery-ui.css'); ?>" rel="stylesheet" type="text/css" />
    <!-- END PAGE LEVEL STYLES -->
@endsection
@section('script')
<!--[if lt IE 9]>
    <script src="../assets/global/plugins/respond.min.js"></script>
    <script src="../assets/global/plugins/excanvas.min.js"></script>
    <![endif]-->
    <!-- BEGIN CORE PLUGINS -->

    <script src="http://code.jquery.com/ui/1.10.1/jquery-ui.js"></script>
    <script type="text/javascript" src="http://maps.google.com/maps/api/js?sensor=false"></script>
    <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBdpwpFsQVvwgD-vL7SJe8FLrTYqPKizbA&libraries=places"></script>
    <script>

      var latitud ='{!!$marker[0]->latitud!!}';
      var longitud='{!!$marker[0]->longitud!!}';
      initialize(latitud,longitud);
    </script>
@endsection
<!-- /.heading-->

@section('content')

<h1 class="page-title"> Editar Ubicación </h1>
<div class="portlet light ">
  <div class="portlet-body form">
    {!! Form::open(['url' => '/editar-marker/'.$idmarker, 'method' => 'POST'])!!}
    <div class="form-body">
      @foreach ($marker as $key)
      <div class="row">
        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Nombre</label>
              <input type="text" class="form-control" value="{!!$key->nombre!!}" name="nombre_newubicacion">
              {!! $errors->first('nombre_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Teléfono</label>
              <input type="text" class="form-control" value="{!!$key->telefono!!}" name="telefono_newubicacion">
              {!! $errors->first('telefono_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Mapa</label>
              {{ Form::select('mapa_newubicacion',array('0'=>'Seleccione','1'=>'Puntos de Venta', '2'=>'Canje vale de pavos', '3'=>'Ambas'),$key->mapa,['class' => 'form-control']) }}
              {!! $errors->first('mapa_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}
              <!-- <input type="text" class="form-control" name="ubicacion_newubicacion"> -->

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Tipo</label>
              {{ Form::select('tipo_newubicacion',array(''=>'Seleccione','tienda' =>'Tienda', 'minimarkert'=>'Paviferias', 'pavicar'=>'Pavicar', 'multimarket'=>'Multimarkert'),$key->tipo_marker,['class' => 'form-control']) }}
              {!! $errors->first('tipo_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Id Lugar</label>
              <input type="text" class="form-control" id="place_id" value="{!!$key->id_lugar!!}"  name="placeid_newubicacion">
              {!! $errors->first('placeid_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>

        <div class="col-md-4">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Ciudad</label>
              <input type="text" class="form-control" value="{!!$key->ciudad!!}" name="ciudad_newubicacion">
              {!! $errors->first('ciudad_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}

            </div>
          </div>
        </div>
        <div class="col-md-4">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Distrito</label>
              <input type="text" class="form-control" value="{!!$key->distrito!!}" name="distrito_newubicacion">
              {!! $errors->first('distrito_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1" >Horario de Atención</label>
              <input type="text" class="form-control" value="{!!$key->horario!!}" name="horario_newubicacion">
              {!! $errors->first('horario_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group has-success">
            <div class="input-icon">
              <label for="form_control_1">Restricciones</label>
              <input type="text" class="form-control" value="{!!$key->restricciones!!}" name="restricciones_newubicacion">
              {!! $errors->first('restricciones_newubicacion', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group  has-success">
            <div class="input-icon">
              <label class="label-input-format label-titulo">Dirección</label>
              <div class="input-group">
                <input id="direccion-maps" type="text" value="{!!$key->direccion!!}" name="direccion" class="form-control input-admin"/>
                {!! $errors->first('direccion', '<span class="help-block alert-danger">:message</span>') !!}
                <span class="input-group-btn">
                  <button class="btn btn-default" type="button" onclick="codeAddress()"><i class="fa fa-search"></i></a></button>
                </span>
              </div>
              <!-- <p>* Busque una dirección o arrastre el marcador (<i class="fa fa-map-marker" style="color: red; font-style: normal;"></i>)
                para obtener las coordenadas.</p> -->
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group  has-success">
            <div class="input-icon">
              <label class="label-input-format label-titulo">Latitud</label>
              <input type="text" id="latitud-maps" name="latitud"  value="{!!$key->latitud!!}" class="form-control input-admin" required/>
              {!! $errors->first('latitud', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-6">
          <div class="form-group  has-success">
            <div class="input-icon">
              <label class="label-input-format label-titulo">Longitud</label>
              <input type="text" id="longitud-maps" name="longitud"  value="{!!$key->longitud!!}" class="form-control input-admin" required/>
              {!! $errors->first('longitud', '<span class="help-block alert-danger">:message</span>') !!}
            </div>
          </div>
        </div>
        <div class="col-md-12">
          <div class="form-group  has-success">
            <div class="input-icon">
              <div id="mapCanvas" style="height:500px; width:100%"></div>
            </div>
          </div>
        </div>


      </div>
      @endforeach
      <div class="form-actions noborder">
        <button type="submit" class="btn blue">Guardar Cambios</button>
        <a class="btn btn-danger btn-cancelar" href="{{url('/puntosventa')}}" type="button">Cancelar</a>
      </div>
    </div>
    {!! Form::close() !!}
  </div>
</div>
@endsection
