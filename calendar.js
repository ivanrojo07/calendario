function fecha(etiqueta){
    var fecha = document.getElementById(etiqueta).value;
    fecha = fecha.split("-");
    return fecha;
}
function calendarios(){

}

function fechas(){
        var inicio = new fecha("inicio");
        var fin = new fecha("fin");
        inicio = new Date(parseInt(inicio[0]),parseInt(inicio[1])-1);
    
        var calendario1 = new calendarios(inicio);

        fin = new Date(parseInt(fin[0]),parseInt(fin[1])-1);
        var calendario2 = new calendarios(fin);
    }

function verificarFecha(){
    // var inicio = document.getElementById("inicio").value;
    //     document.getElementById("printInicio").innerHTML = inicio;
    //     inicio = inicio.split("-");
    var inicio = new fecha("inicio");
    var fin = new fecha("fin");
    if (inicio > fin) {

        document.getElementById("enviar").disabled = true;
        return alert("La fecha de inicio debe ser menor que la fecha de fin");
    }
    else{
        document.getElementById("enviar").disabled = false;
    }
}
function calendarios(fecha){
    return calendario(fecha);
}
// window.onload = function() {
//                 calendario();
//             }

function calendario(fecha){
    miFecha = new Date(fecha);
    console.log(miFecha);
    var nombreDia = ['Lu', 'Ma', 'Mi', 'Ju', 'Vi', 'Sa', 'Do'];
    var nodoTd = document.getElementsByTagName('td');
    var diaSemana = getDiaDeInicio(miFecha);
    var diasEnMes = getDiasPorMes(miFecha.getMonth(), miFecha.getFullYear());
    rellenaTabla(nodoTd, diasEnMes, diaSemana, nombreDia);
    rellenaMesYAnno(miFecha);
}
function rellenaMesYAnno(miFecha){
    fecham = document.getElementById('mesYAnno').innerHTML = getMes(miFecha.getMonth()) + ' de ' +  miFecha.getFullYear();
    console.log("fecham:"+fecham);
}
function rellenaTabla(nodoTd, diasEnMes, diaSemana, nombreDia){
    for(var i = 0; i < nodoTd.length; i++){
        if(i>0 && i<8){nodoTd[i].innerHTML = nombreDia[i-1];}
        if(i>7 && i<(diasEnMes+8+diaSemana)){
            if((i-8)<diaSemana){
                nodoTd[i].innerHTML = ' ';
            }else{
                nodoTd[i].innerHTML = i - 7 - diaSemana;
            }
        }
    }
}
function getDiaDeInicio(fecha){
    var diaSemana = fecha.getDay();
    for(var i = fecha.getDate(); i>0; i--){
        if(diaSemana == 0){
            diaSemana = 7;
        }
            diaSemana--;
    }
    if(diaSemana==0){diaSemana=7;}
    return diaSemana
}
function getMes(mes){
    switch(mes) {
        case 0:
            return 'Enero';
            break;
        case 1:
            return 'Febrero';
            break;
        case 2:
            return 'Marzo';
            break;
        case 3:
            return 'Abril';
            break;
        case 4:
            return 'Mayo';
            break;
        case 5:
            return 'Junio';
            break;
        case 6:
            return 'Julio';
            break;
        case 7:
            return 'Agosto';
            break;
        case 8:
            return 'Septiembre';
            break;
        case 9:
            return 'Octubre';
            break;
        case 10:
            return 'Noviembre';
            break;
        case 11:
            return 'Diciembre';
            break;
        default:
            break;
    }
}
function getDiasPorMes(mes, anno){
    switch(mes){
        case 0:
        case 2:
        case 4:
        case 6:
        case 7:
        case 9:
        case 11:
            return 31;
            break;
        case 3:
        case 5:
        case 8:
        case 10:
            return 30;
            break;
        case 1:
            if (((anno%100 == 0) && (anno%400 == 0)) || ((anno%100 != 0) && (anno%4 == 0))){
                return 29; 
            }else{
                return 28;
            }
            break;
        default:
         break;
    }
}