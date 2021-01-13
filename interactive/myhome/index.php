
<style>
h1{
color:"StateBlue";
}
</style>


<h1 id="welcome">Hallo Bastard</h1>
<p id="demo"></p>

<script language="javascript">
  var start=true;

  while(start){
  alert("Hallo Bastard");
  var tanya=prompt("What you name ?");

  if(tanya && tanya==tanya){
    confirm("Hai Welcome "+tanya+" in my planet");
    document.getElementById("welcome").innerHTML="Welcome in my Planet <font color='Tomato'>"+tanya+"</font>";
  }else{

    alert("sshhiiiit Man");

    var lanjut=confirm("Skip ? ");

  }

    if(lanjut){
     window.location.href="https://puji1903.github.io"

   }else{
     confirm("ok");
    break;
   }

 }
</script>