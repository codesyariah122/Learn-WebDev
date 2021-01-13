var a=prompt("masukan angka : ");
var i;
var j;
var n;
confirm("angka anda : "+a);
for(i=0; i < a; i++){
  for(j=0;j <= i; j++){
    n+= "*";
  }
  n+= "\n";
}
alert(n);