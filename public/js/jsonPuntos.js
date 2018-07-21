var tienda=[];
var minimarkert=[];
var multimarket=[];
var agente=[];
var pavicar=[];
var lugardistrito=[];
var lima=[];
var prov=[];
for(var i=0; i<puntos.length; i++){
  // console.log(puntos[i].type.slug);
  var tipo=puntos[i].type.slug;
  var cd=puntos[i].lugar;
  switch (tipo) {
    case 'tienda':
      tienda.push(puntos[i]);
      break;
    case 'minimarkert':
      minimarkert.push(puntos[i]);
      break;
    case 'multimarket':
      multimarket.push(puntos[i]);
      break;
    case 'pavicar':
      pavicar.push(puntos[i]);
      break;
    default:
      agente.push(puntos[i]);
      break;
    }



}
var pt=puntos;
// console.log(prov);
