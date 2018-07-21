// $("#btn-send-form").click(function(e){
// 	e.preventDefault();
// 	$('#cotizacion').submit();
// });
(function ( $ ) {
	var elActive = '';
    $.fn.selectCF = function( options ) {

        // option
        var settings = $.extend({
            // color: "#FFF", // color
            // backgroundColor: "#50C9AD", // background
			change: function( ){ }, // event change
        }, options );

        return this.each(function(){

			var selectParent = $(this);
				list = [],
				html = '';

			//parameter CSS
			var width = $(selectParent).width();

			$(selectParent).hide();
			if( $(selectParent).children('option').length == 0 ){ return; }
			$(selectParent).children('option').each(function(){
				if( $(this).is(':selected') ){ s = 1; title = $(this).text(); }else{ s = 0; }
				list.push({
					value: $(this).attr('value'),
					text: $(this).text(),
					selected: s,
				})
			})

			// style
			var style = " background: "+settings.backgroundColor+"; color: "+settings.color+" ";



			html += "<ul class='selectCF'>";
			html += 	"<li class='optionCF'>";
			html += 		"<span class='titleCF' style='"+style+"; width:"+width+"px'>"+title+"</span>";
			html += 		"<span class='searchCF' style='"+style+"; width:"+width+"px'><input style='color:"+settings.color+"' /></span>";
			html += 		"<span class='arrowCF ion-chevron-right' style='"+style+"'></span>";
			html += 		"<ul>";
			$.each(list, function(k, v){ s = (v.selected == 1)? "selected":"";
			html += 			"<li value="+v.value+" class='"+s+"'>"+v.text+"</li>";})
			html += 		"</ul>";
			html += 	"</li>";
			html += "</ul>";
			$(selectParent).after(html);
			var customSelect = $(this).next('ul.selectCF'); // add Html
			var seachEl = $(this).next('ul.selectCF').children('li').children('.searchCF');
			var seachElOption = $(this).next('ul.selectCF').children('li').children('ul').children('li');
			var seachElInput = $(this).next('ul.selectCF').children('li').children('.searchCF').children('input');

			$('#id-doc ul.selectCF').children('li').children('.titleCF').addClass('titleCF-1');
			$('#id-recepcion ul.selectCF').children('li').children('.titleCF').addClass('titleCF-2');
			$('#id-depart ul.selectCF').children('li').children('.titleCF').addClass('titleCF-3');
			$('#id-provincia ul.selectCF').children('li').children('.titleCF').addClass('titleCF-4');
			$('#id-distrito ul.selectCF').children('li').children('.titleCF').addClass('titleCF-5');
			$('#id-doc-age ul.selectCF').children('li').children('.titleCF').addClass('titleCF-6');

			// handle active select
			$(customSelect).unbind('click').bind('click',function(e){
				e.stopPropagation();
				if($(this).hasClass('onCF')){
					elActive = '';
					$(this).removeClass('onCF');
					$(this).removeClass('searchActive'); $(seachElInput).val('');
					$(seachElOption).show();
				}else{
					if(elActive != ''){
						$(elActive).removeClass('onCF');
						$(elActive).removeClass('searchActive'); $(seachElInput).val('');
						$(seachElOption).show();
					}
					elActive = $(this);
					$(this).addClass('onCF');
					$(seachEl).children('input').focus();
				}
			})

			// handle choose option
			var optionSelect = $(customSelect).children('li').children('ul').children('li');
			$(optionSelect).bind('click', function(e){
				var value = $(this).attr('value');
				if( $(this).hasClass('selected') ){
					//
				}else{
					$(optionSelect).removeClass('selected');
					$(this).addClass('selected');
					$(customSelect).children('li').children('.titleCF').html($(this).html());
					$(selectParent).val(value);
					settings.change.call(selectParent); // call event change
				}
			})

			// handle search
			$(seachEl).children('input').bind('keyup', function(e){
				var value = $(this).val();
				if( value ){
					$(customSelect).addClass('searchActive');
					$(seachElOption).each(function(){
						if( $(this).text().search(new RegExp(value, "i")) < 0 ) {
							// not item
							$(this).fadeOut();
						}else{
							// have item
							$(this).fadeIn();
						}
					})
				}else{
					$(customSelect).removeClass('searchActive');
					$(seachElOption).fadeIn();
				}
			})

		});
    };
	$(document).click(function(){
		if(elActive != ''){
			$(elActive).removeClass('onCF');
			$(elActive).removeClass('searchActive');
		}
	})
}( jQuery ));
$(function(){
	var contVales=0;
	var contPane=0;
  var vale_qty = $('#vale_qty');
  $( ".tipo-vale-select .select").selectCF({
    change: function(){
			var bool=false;
      var text = $(this).children('option:selected').html();
			var id=$(this).attr("id");
			if(id=="vales"){
				contVales+=1;
			}else{
				contPane+=1;
			}
			var len=$(".lista-producto").length;
			if(len>0){
					$(".lista-producto").each(function( index ) {
						if($( this ).text()==text){
							bool=true;
						}
					});
					if(bool==false){
						vales(text,id,contVales,contPane);
					}
			}else{
				vales(text,id,contVales,contPane);
			}
    }
  });

	function vales(text,id,contVales,contPane){
		var tipo="";
		var cl;
		var inputcl;
		var clase;
		var common="lista-producto";
		if(id=="vales"){
			type="vale";
			cl="vales"+contVales;
			inputcl="pVale"+contVales;
			clase="pavo-input";
			name=" name= 'pavo-input[]'";
			name_input= " name= 'tipo_cantidad_pavo[]'";
		}else{
			type="paneton";
			cl="pane"+contPane;
			inputcl="pPane"+contPane;
			clase='paneton-input';
			name=' name= "paneton-input[]"';
			name_input= " name= 'tipo_cantidad_paneton[]'";
		}
		tipo +="<div class="+type+"_qty_"+cl+"><input"+name_input+" type='hidden' value='"+text+"'><p class="+common+">"+text+"</p></div>";

		$("."+type+"-qty-cont").append(tipo);
		$("."+type+"_qty_"+cl).addClass(inputcl);


		var cant="";
		cant +="<div class=qty-input-cont-"+type+"-"+cl+">"
			+"<input type=number"+name+"value=1 clase="+cl+" min=1 max=100 class="+clase+" style=margin-bottom:10px; >"
			+"<button type=button name=button class=btn-close-qty>x</button>"
			+"</div>";
		$(".cantidad-cont-"+type).append(cant);
		if(type=="vale"){
			var info="<li class="+inputcl+"data="+type+">"+type+" de Pavo en "+text+".</li>"
		}else{
			var info="<li class="+inputcl+"data="+type+">"+type+" Navilandia en "+text+".</li>"
		}
		$(".info-list").append(info);
		$(".qty-input-cont-"+type+"-"+cl).attr("id",inputcl);
		$(".qty-input-cont").css("display","block");
		$(".btn-close-qty").css("display","inline-block");

		var sum = 0;
		$(".paneton-input").each(function(){
				sum += +$(this).val()*6;
		});
		$("#sum").html(sum);
	}

	$(document).on('input','.paneton-input',function() {
	// $(document).on('change','.paneton-input',function() {
		var total=0;
		$(".paneton-input").each(function(){
				 total +=parseInt($(this).val())*6;
		});
		$("#sum").html(total);
	});



  $( ".test" ).selectCF({
    color: "#FFF",
    backgroundColor: "#663052",
  });
})
$(".product-item").click(function(){

	var producto=$(this).hasClass("seleccionado");
	var clase=$(this).attr("data");

	if(producto){
		$(this).removeClass("seleccionado");
		$(this).find(".item-price").css("opacity","0");
		$("#"+clase).val("");
		console.log('deseleccionado',clase);
		if(clase=='pavo')
		{
			$('.tipo_cotizacion_pavo').val('');
		}
		if(clase=='paneton')
		{
			$('.tipo_cotizacion_paneton').val('');
		}
	}else{
		$(this).addClass("seleccionado");
		$(this).find(".item-price").css("opacity","1");
		$("#"+clase).val(clase);
		console.log('selecciono',clase);
		if(clase=='pavo')
		{
			$('.tipo_cotizacion_pavo').val('pavo');
		}
		if(clase=='paneton')
		{
			$('.tipo_cotizacion_paneton').val('paneton');
		}
	}
});
