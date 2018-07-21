var pathname = window.location.pathname;
for(var i=0;i<banner.length;i++){
  var orden = banner[i].orden;
  var seccion = banner[i].ubicacion;
  if(pathname.indexOf(seccion)>0){
    contenido(orden,banner[i]);
  }else{
    // console.log("path",pathname);
    if(pathname==='/'){
      if(seccion == 'home'){
        contenido(orden,banner[i]);
      }
    }

}
}
function contenido(orden,array){
  var padre=$(".bloque_"+orden);
  $(padre).css("display","block");
  if($(padre).hasClass("banner")){
    $(padre).css("background-image","url("+array.path_imagen+")");
  }else if ($(padre).hasClass("fondo_db")) {
    $(padre).find("#fondo_db").css("background-image","url("+array.path_imagen+")");
  }else{
    $(padre).find("imagen_db").attr("src",array.path_imagen);
  }
  $(padre).find(".titulo_db").html(array.titulo);
  $(padre).find(".subtitulo_db").html(array.subtitulo);
  $(padre).find(".descripcion_db").html(array.descripcion);
  $(padre).find(".btn-red").html(array.texto_boton);
  $(padre).find(".btn-red").attr("href",array.url_boton);
}
