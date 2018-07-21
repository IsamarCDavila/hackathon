jQuery.validator.addMethod("alphanumerico", function(value, element) {
return this.optional(element) || /^[a-zA-ZñÑáéíóúÁÉÍÓÚ0-9," ",-,.]*$/i.test(value);
}, "Sólos letras, números, espacios.");

$('#cotizacion').validate({
    rules: {
      nombreP: {
          required: true,
          lettersonly: true
          //minlength: 5
      },
      apellidoP: {
          required: true,
          lettersonly: true
          //minlength: 5
      },
      email:{
        required: true,
        email: true
      },
      razonsocial: {
      },
      telefono:{
        required: true,
        number : true,
        minlength: 8,
        maxlength: 11
      },
      ruc:{
        number : true,
        minlength: 11,
        maxlength: 11
      }
    },
    messages :{
        nombreP: {
            required : '*Campo obligatorio.',
            lettersonly: 'Por favor, sólo letras.'
        },
        apellidoP: {
            required : '*Campo obligatorio.',
            lettersonly: 'Por favor, sólo letras.'
        },
        email: {
            required : '*Campo obligatorio.',
            email: 'Por favor, ingrese correo válido.'
        },
        razonsocial: {
            required : '*Campo obligatorio.'
        },
        telefono: {
            required : '*Campo obligatorio.',
            number:'Sólo números',
            minlength: 'Por favor, ingrese por lo menos 8 caracteres.',
            maxlength: 'Por favor, ingrese no más de 12 caracteres.'
        },
        name: {
         required : '*Campo obligatorio.'
        },
        ruc: {
          required : '*Campo obligatorio.',
          number:'Sólo números.',
          minlength: 'Por favor, ingrese por lo menos 11 caracteres.',
          maxlength: 'Por favor, ingrese no más de 11 caracteres.'
        }
      },
    submitHandler: function (form) {
      // $(".msj-container").show();
  		// $(".msj-container").css('display', 'flex');
  		// $(".contendor-form").hide();
      return true;
    }
  });
// =================================================================
                        // FORM-CONTACTANOS
// =================================================================

$('#formContacto').validate({
      rules: {
        nombreP: {
            required: true,
            lettersonly: true
            //minlength: 5
        },
        email:{
          required: true,
          email: true
        },
        empresa: {
          required: true
        },
        telefono:{
          required: true,
          number : true,
          minlength: 8,
          maxlength: 11
        },
        ruc:{
          required: true,
          number : true,
          minlength: 11,
          maxlength: 11
        }
      },
      messages :{
          nombreP: {
              required : '*Campo obligatorio.',
              lettersonly: 'Por favor, sólo letras.'
          },
          email: {
              required : '*Campo obligatorio.',
              email: 'Por favor, ingrese correo válido.'
          },
          empresa: {
              required : '*Campo obligatorio.'
          },
          telefono: {
              required : '*Campo obligatorio.',
              number:'Sólo números',
              minlength: 'Por favor, ingrese por lo menos 8 caracteres.',
              maxlength: 'Por favor, ingrese no más de 12 caracteres.'
          },
          ruc: {
            required : '*Campo obligatorio.',
            number:'Sólo números.',
            minlength: 'Por favor, ingrese por lo menos 11 caracteres.',
            maxlength: 'Por favor, ingrese no más de 11 caracteres.'
          }
        },
      submitHandler: function (form) {
        // alert("Se envió correctamente");
        return true;
      }
    });
