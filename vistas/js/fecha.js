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

mes[0]="enero";
mes[1]="febrero";
mes[2]="marzo";
mes[3]="abril";
mes[4]="mayo";
mes[5]="junio";
mes[6]="julio";
mes[7]="agosto";
mes[8]="septiembre";
mes[9]="octubre";
mes[10]="noviembre";
mes[11]="diciembre";
  
document.write(dia[d.getDay()] + ", " +d.getDate() + " de " + mes[mm.getMonth()] + " de " + d.getFullYear());