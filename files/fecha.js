var d = new Date();
var dia = new Array(7);
var mm = new Date();
var mes = (mm < 10) ? '0' + mm : mm;
var mes=new Array(12);

dia[0]="Domingo";
dia[1]="Lunes";
dia[2]="Martes";
dia[3]="Miércoles";
dia[4]="Jueves";
dia[5]="Viernes";
dia[6]="Sábado";

mes[0]="Enero";
mes[1]="Febrero";
mes[2]="Marzo";
mes[3]="Abril";
mes[4]="Mayo";
mes[5]="Junio";
mes[6]="Julio";
mes[7]="Agosto";
mes[8]="Septiembre";
mes[9]="Octubre";
mes[10]="Noviembre";
mes[11]="Diciembre";
  
document.write(dia[d.getDay()] + ", " +d.getDate() + " de " + mes[mm.getMonth()] + " de " + d.getFullYear());