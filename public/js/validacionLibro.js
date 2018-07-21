// $(document).on("click",".btn-send",function(){
//   var departamento=$(".titleCF-3").html();
//   var provincia=$(".titleCF-4").html();
//   var distrito=$(".titleCF-5").html();
//
//   if(departamento=="Seleccione"){
//     $("#formReclamaciones").submit(function(e){
//       $(".departamento").css("display","inline-block");
//       $(".departamento").html("*Seleccione una opción");
//       e.preventDefault();
//     });
//   }else{
//     $(".departamento").css("display","none");
//   }
//   if(provincia=="Seleccione"){
//     $("#formReclamaciones").submit(function(e){
//       $(".provincia").css("display","inline-block");
//       $(".provincia").html("*Seleccione una opción");
//       e.preventDefault();
//     });
//   }else{
//     console.log("cpro");
//     $(".provincia").css("display","none");
//   }
//   if(distrito=="Seleccione"){
//     $("#formReclamaciones").submit(function(e){
//       $(".distrito").css("display","inline-block");
//       $(".distrito").html("*Seleccione una opción");
//       e.preventDefault();
//     });
//   }else{
//     console.log("dis");
//     $(".distrito").css("display","none");
//   }
//
//   if($('#radio5').is(':checked')) {
//     console.log("chck");
//     $(".declaracion").css("display","none");
//   }else{
//     $("#formReclamaciones").submit(function(e){
//       $(".declaracion").css("display","block");
//       $(".declaracion").html("*Campo obligatorio.");
//       e.preventDefault();
//     });
//   }
//
// });
//
//
// $('#formReclamaciones').validate({ // initialize the plugin
//         rules: {
//           nombre: {
//               required: true
//           },
//           apellidoPaterno: {
//             required: true,
//             lettersonly: true
//           },
//           apellidoMaterno: {
//             required: true
//           },
//           nombreApoderado: {
//               required: true
//           },
//           apellidoPaternoApoderado: {
//             required: true,
//             lettersonly: true
//           },
//           apellidoMaternoApoderado: {
//             required: true
//           },
//           numeroDocumento: {
//             required: true
//           },
//           numeroDocumentoMenor: {
//             required: true
//           },
//           paisR: {
//             valueNotEquals: "País"
//           },
//           paisR : {
//             valueNotEquals: "*Seleccione un país."
//           },
//           paisR : {
//             valueNotEquals: "*Seleccione un país."
//           },
//           direccion : {
//               required: true
//           },
//           correo:{
//             required: true,
//             email: true
//           },
//           telefono:{
//             required: true,
//             number : true,
//             minlength: 8
//           },
//           producto: {
//             required: true,
//             lettersonly: true
//           },
//           lugar : {
//               required: true
//           },
//           ruc : {
//               required: true
//           },
//           incidente : {
//               required: true
//           },
//           solicitud : {
//               required: true
//           },
//           fechaincidente : {
//               required: true
//           },
//           montoReclamo : {
//               required: true
//           }
//         },
//         messages :{
//             nombre : {
//                 required : '*Campo obligatorio.'
//             },
//             apellidoPaterno : {
//                 required : '*Campo obligatorio.',
//                 lettersonly: 'Por favor, sólo letras.'
//             },
//             apellidoMaterno : {
//                 required : '*Campo obligatorio.',
//                 lettersonly: 'Por favor, sólo letras.'
//             },
//             nombreApoderado : {
//                 required : '*Campo obligatorio.'
//             },
//             apellidoPaternoApoderado : {
//                 required : '*Campo obligatorio.',
//                 lettersonly: 'Por favor, sólo letras.'
//             },
//             apellidoMaternoApoderado : {
//                 required : '*Campo obligatorio.',
//                 lettersonly: 'Por favor, sólo letras.'
//             },
//             numeroDocumento: {
//               required : '*Campo obligatorio.'
//             },
//             numeroDocumentoMenor: {
//               required : '*Campo obligatorio.'
//             },
//             paisR : {
//               valueNotEquals: "*Seleccione un país."
//             },
//             paisR : {
//               valueNotEquals: "*Seleccione un país."
//             },
//             paisR : {
//               valueNotEquals: "*Seleccione un país."
//             },
//              telefono : {
//                 required : '*Campo obligatorio.',
//                 number:'Sólo números.',
//                 minlength: 'Por favor, ingrese por lo menos 8 caracteres.'
//             },
//             correo : {
//                 required : '*Campo obligatorio.',
//                 email: 'Por favor, ingrese correo válido.'
//             },
//             direccion : {
//               required : '*Campo obligatorio.'
//             },
//             producto : {
//                 required : '*Campo obligatorio.',
//                 lettersonly: 'Por favor, sólo letras.'
//             },
//             lugar : {
//               required : '*Campo obligatorio.'
//             },
//             ruc : {
//               required : '*Campo obligatorio.'
//             },
//             incidente : {
//               required : '*Campo obligatorio.'
//             },
//             solicitud : {
//               required : '*Campo obligatorio.'
//             },
//             fechaincidente : {
//               required : '*Campo obligatorio.'
//             },
//             montoReclamo : {
//               required : '*Campo obligatorio.'
//             }
//           },
//         submitHandler: function (form) {
//           console.log("Se envio correctamente");
//           return false;
//         }
//     });
