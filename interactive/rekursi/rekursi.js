function faktorial(n){
  if(n===0) return 1;
  return n * faktorial(n - 1);
}

function looping(x){
  if(x===0)return;
  confirm(x);
  return looping(x-1);

}