$(document).on('change', '.select_nutriente', function(){
  var parent = $(this).parent().parent().parent();
  $(parent).find('.unidad_nutriente').val($(this).find(":selected").attr('data-unidad'));
});
$(document).on('click', '.editar-imagen-variacion', function(){
  $('#editImage').find('.image-edit-show').attr('src', $(this).attr('data-path'));
  $('#id_imagen').val($(this).attr('data-id'));
});
$(document).on('click', '.editar-nutriente-variacion', function(){
  $('#id_nutriente').val($(this).attr('data-id'));
  $('#edit_nutriente').val($(this).attr('data-nutriente'));
  $('#edit_cantidad').val($(this).attr('data-cantidad'));
  $('#edit_unidad_nutriente').val($(this).attr('data-unidad'));

});

$(document).on('click', '.subir-img', function(){
  $('.spin-message').empty();
  var data = new FormData();
  var id = $('#variacion_id').val();
  var file = document.getElementById('nueva_img');

   if(file)
   {
    if (file.files.length > 0) {
      $('.spin-message').append('Subiendo <i class="fa fa-spin fa-spinner"></i>');
       data.append('file', file.files[0]);
       data.append('variacion', id);
       data.append('_token', $('meta[name="csrf-token"]').attr('content'));

      $.ajax({
        type: "POST",
        url: ruta_principal + '/admin/variaciones/saveimgvariacion',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
          $('.spin-message').empty();
          if(data==0)
          {
              swal("", "No se envió el archivo.", "danger");
          }
          else {
            $("#nueva_img").replaceWith('<input type="file" class="imagen-variacion file" id="nueva_img"/>');
            $("#nueva_img").parent().find('img').attr('src', '');
            $("#listado_imagenes").append('<tr id="img'+data.id+'"><td><img src="'+data.path+'" width="80"></td>'
              +'<td><a  class="btn btn-xs blue btn-outline editar-imagen-variacion" data-toggle="modal" href="#editImage" data-id="'+data.id+'" data-path="'+data.path+'"><i class="fa fa-pencil ico-editar"></i></a>'
              +  '<a class="btn btn-xs red btn-outline eliminar-img" data-id="'+data.id+'" href="javascript:;"><i class="fa fa-times"></i></a></td></tr>');
            swal("", "Se agregó la imagen correctamente.", "success");
          }

        },
        error: function (){
          $('.spin-message').empty();
          swal("", "Error.", "danger");
        }

      });
    }
    else{
      swal("", "Debe seleccionar un archivo.", "warning");
    }
   }
   else{
     swal("", "Debe seleccionar un archivo.", "warning");
   }



});

$(document).on('click', '.edit-img', function(){
  $('.spin-message').empty();
  var data = new FormData();
  var id = $('#id_imagen').val();
  var file = document.getElementById('edit_img');

   if(file)
   {
    if (file.files.length > 0) {
      $('.spin-message').append('Subiendo <i class="fa fa-spin fa-spinner"></i>');
       data.append('file', file.files[0]);
       data.append('id_img', id);
       data.append('_token', $('meta[name="csrf-token"]').attr('content'));

      $.ajax({
        type: "POST",
        url: ruta_principal + '/admin/variaciones/editimgvariacion',
        processData: false,
        contentType: false,
        data: data,
        success: function (data) {
          $('.spin-message').empty();
          if(data==0)
          {
              swal("", "No se envió el archivo.", "danger");
          }
          else {
            $("#img"+data.id).find('img').attr('src', data.path);
            $("#img"+data.id).find('.editar-imagen-variacion').attr('data-path', data.path);
            $("#editImage").modal("hide");
          }

        },
        error: function (){
          $('.spin-message').empty();
          swal("", "Error.", "danger");
        }

      });
    }
    else{
      swal("", "Debe seleccionar un archivo.", "warning");
    }
   }
   else{
     swal("", "Debe seleccionar un archivo.", "warning");
   }
});
$(document).on('click', '.eliminar-img', function(){
  var button = $(this);
  var val = $(button).attr('data-id');
  swal({
    title: "¿Está seguro que desea eliminar la imagen?",
    text: "",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "SÍ",
    cancelButtonText: "CANCELAR",
    closeOnConfirm: true,
    closeOnCancel: true
  },
  function(isConfirm){
    if (isConfirm) {

      var data = {};
          data._token = $("meta[name='csrf-token']").attr('content');
          data.id = val;

      $.ajax({
          url: ruta_principal +  '/admin/variaciones/deleteimg',
          data: data,
          type: 'POST',
          success: function(data) {
              $('#img'+val).remove();
              swal("", "Se eliminó la imagen correctamente.", "success");

          }
      });
    }
  });

});

$(document).on('click', '.agregar-nutriente', function(){
  $('.spin-message').empty();
  var val = $('#variacion_id').val();
  var nutriente = $('#new_nutriente').find(":selected").text();
  var unidad = $('#new_unidad_nutriente').val();
  var data = {};
        data._token = $("meta[name='csrf-token']").attr('content');
        data.variacion = val;
        data.nutriente = $('#new_nutriente').val();
        data.cantidad = $('#new_cantidad').val();

    $.ajax({
        url:  ruta_principal + '/admin/variaciones/newnutriente',
        data: data,
        type: 'POST',
        success: function(data) {
          $('.spin-message').empty();
          if(data!="existe")
          {
            $("#listado_nutrientes").append('<tr id="nutri'+data.obj.id+'"><td class="nutri-name">'+nutriente+'</td><td class="nutri-unidad">'+unidad+'</td><td class="nutri-cant">'+data.obj.cantidad+'</td>'
              +'<td><a  class="btn btn-xs blue btn-outline editar-nutriente-variacion" data-toggle="modal" href="#editNutriente" data-id="'+data.obj.id+'" data-nutriente="'+data.obj.id_nutriente+'" data-cantidad="'+data.obj.cantidad+'" data-unidad="'+unidad+'"><i class="fa fa-pencil ico-editar"></i></a>'
              +  '<a class="btn btn-xs red btn-outline eliminar-nutriente" data-id="'+data.obj.id+'" href="javascript:;"><i class="fa fa-times"></i></a></td></tr>');
            swal("", "Se agregó el nutriente correctamente.", "success");
          }
          else{
            swal("", "El nutriente ya existe.", "warning");
          }


        }
    });

});
$(document).on('click', '.editar-nutriente', function(){
  $('.spin-message').empty();
  var val = $('#id_nutriente').val();
  var variacion = $('#variacion_id').val();
  var nutriente = $('#edit_nutriente').find(":selected").text();
  var unidad = $('#edit_unidad_nutriente').val();
  var data = {};
        data._token = $("meta[name='csrf-token']").attr('content');
        data.id = val;
        data.nutriente = $('#edit_nutriente').val();
        data.cantidad = $('#edit_cantidad').val();
        data.variacion = variacion;
    $.ajax({
        url:  ruta_principal + '/admin/variaciones/editnutriente',
        data: data,
        type: 'POST',
        success: function(data) {
          $('.spin-message').empty();
          if(data!="existe")
          {
            $('#nutri'+val).find('.nutri-name').text(nutriente);
            $('#nutri'+val).find('.nutri-unidad').text(unidad);
            $('#nutri'+val).find('.nutri-cant').text(data.obj.cantidad);
            $('#nutri'+val).find('.editar-nutriente-variacion').attr('data-nutriente', data.obj.id_nutriente);
            $('#nutri'+val).find('.editar-nutriente-variacion').attr('data-cantidad', data.obj.cantidad);
            $('#nutri'+val).find('.editar-nutriente-variacion').attr('data-unidad', unidad);
            $('#editNutriente').modal('hide');
          }
          else{
            swal("", "El nutriente seleccionado ya existe.", "warning");
          }
        }
    });

});
$(document).on('click', '.eliminar-nutriente', function(){
  var button = $(this);
  var val = $(button).attr('data-id');
  swal({
    title: "¿Está seguro que desea eliminar el nutriente?",
    text: "",
    type: "warning",
    showCancelButton: true,
    confirmButtonText: "SÍ",
    cancelButtonText: "CANCELAR",
    closeOnConfirm: true,
    closeOnCancel: true
  },
  function(isConfirm){
    if (isConfirm) {

      var data = {};
          data._token = $("meta[name='csrf-token']").attr('content');
          data.id = val;

      $.ajax({
          url: ruta_principal +  '/admin/variaciones/deletenutriente',
          data: data,
          type: 'POST',
          success: function(data) {
              $('#nutri'+val).remove();
              swal("", "Se eliminó el nutriente correctamente.", "success");

          }
      });
    }
  });

});
