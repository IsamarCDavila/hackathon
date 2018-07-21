$(document).on('change', '.file', function() {

   var input = $(this);
   var parent = $(input).parent();
   var reader = new FileReader();

   if(this.files[0].size<2097153)
   {
        reader.onload = function(e) {
           $(parent).find('img').attr('src', e.target.result);
           $(parent).find('.mensaje-rq').remove();
       };
       reader.readAsDataURL(this.files[0]);
   }
   else{
     $(parent).append('<span class="danger mensaje-rq">*El archivo no debe exceder 2MB de tamaño.</span>');
     $(parent).find('img').attr('src', '');
   }

});
