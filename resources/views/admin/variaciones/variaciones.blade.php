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
@endsection
<!-- /.heading-->

@section('content')
<h1 class="page-title"> <img src="{!!url($producto->icono_path)!!}" width="80"> {{$producto->nombre}} - Variaciones
    <a class="btn btn-primary right" href="{!!url('admin/variaciones/'.$producto->id.'/create')!!}"><i class="fa fa-plus"></i></a>
</h1>
<div class="portlet light ">
  <div class="portlet-body">
    <div class="table-scrollable">
      <table class="table table-hover">
        <thead>
          <tr>
            <th> NOMBRE VARIACIÓN </th>
            <th> IMAGEN PRINCIPAL </th>
            <th> ACCIONES </th>
          </tr>
        </thead>
        <tbody>
          @foreach($variaciones as $key)
          <tr>
            <td>{{$key->nombre}}</td>
            <td>
              @if($key->imagen_principal_path)
              <img src="{!!url($key->imagen_principal_path)!!}" width="80">
              @endif
            </td>
            <td>
              <a  class="btn btn-xs blue btn-outline" href="{!!url('admin/variaciones/'.$producto->id.'/edit/'.$key->id)!!}"><i class="fa fa-pencil ico-editar"></i></a>
              <!-- <a class="btn btn-xs red btn-outline eliminar" href="javascript:;"><i class="fa fa-times"></i></a> -->
            </td>
          </tr>
          @endforeach
        </tbody>
      </table>
    </div>
  </div>
</div>
@endsection
