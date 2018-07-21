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
<h1 class="page-title"> Productos
    <a class="btn btn-primary right" href="{!!url('admin/productos/create')!!}"><i class="fa fa-plus"></i></a>
</h1>
<div class="portlet light ">
  <div class="portlet-body">
    <div class="table-scrollable">
      <table class="table table-hover">
        <thead>
          <tr>
            <th> ICONO </th>
            <th> NOMBRE PRODUCTO </th>
            <th> VARIACIONES </th>
            <th> ACCIONES </th>
          </tr>
        </thead>
        <tbody>
          @foreach($productos as $key)
          <tr >
            <td>  <img src="{!!url($key->icono_path)!!}" alt="imgen San Fernando" width="80"></td>
            <td>{{$key->nombre}}</td>
            <td><a href="{{url('admin/variaciones/'. $key->id)}}" >Ver listado</a></td>
            <td>
              <a  class="btn btn-xs blue btn-outline" href="{!!url('admin/productos/'.$key->id.'/edit')!!}"><i class="fa fa-pencil ico-editar"></i></a>
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
