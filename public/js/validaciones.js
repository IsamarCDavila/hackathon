jQuery.validator.addMethod("lettersonly", function(value, element) {
return this.optional(element) || /^[a-zA-ZñÑáéíóúÁÉÍÓÚ," ",-]+$/i.test(value);}, "Por favor, ingrese sólo letras.");

// $('#cometarios-form').validate({
//         rules: {
//           nombre: {
//               required: true,
//               lettersonly: true
//           },
//           correo: {
//             required: true,
//             email: true
//           },
//           celular: {
//               required: true,
//               number : true,
//               minlength: 8
//           },
//           comentarios: {
//             required: true
//           }
//         },
//         messages :{
//             nombre: {
//               required : '*Campo obligatorio.',
//               lettersonly: 'Por favor, sólo letras.'
//             },
//             correo: {
//               required : '*Campo obligatorio.',
//               email: 'Por favor, ingrese correo válido.'
//             },
//             celular: {
//               required : '*Campo obligatorio.',
//               number:'Sólo números.',
//               minlength: 'Por favor, ingrese por lo menos 8 caracteres.'
//             },
//             comentarios: {
//               required : '*Campo obligatorio.',
//             }
//           },
//         submitHandler: function (form) {
//           // alert("envio correcto");
//           return false;
//         }
//     });

    // $('#distribuidor-form').validate({
    //         rules: {
    //           nombre: {
    //               required: true,
    //               lettersonly: true
    //           },
    //           correo: {
    //             required: true,
    //             email: true
    //           },
    //           celular: {
    //               required: true,
    //               number : true,
    //               minlength: 8
    //           },
    //           comentarios: {
    //             required: true
    //           }
    //         },
    //         messages :{
    //             nombre: {
    //               required : '*Campo obligatorio.',
    //               lettersonly: 'Por favor, sólo letras.'
    //             },
    //             correo: {
    //               required : '*Campo obligatorio.',
    //               email: 'Por favor, ingrese correo válido.'
    //             },
    //             celular: {
    //               required : '*Campo obligatorio.',
    //               number:'Sólo números.',
    //               minlength: 'Por favor, ingrese por lo menos 8 caracteres.'
    //             },
    //             comentarios: {
    //               required : '*Campo obligatorio.',
    //             }
    //           },
    //         submitHandler: function (form) {
    //           alert("envio correcto");
    //           return false;
    //         }
    //     });
