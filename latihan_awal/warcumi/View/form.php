<form action="<?=$_SERVER['PHP_SELF'];?>" method="post">
<label for="change">Pilih Menu</label>
<select name="menu" id="change">
<?php
include_once 'menu.php';
reset($menu);
while(list($list_menu, $change)=each($menu)){
?>
<option value="<?=$change;?>"><?=$change;?></option>
<?php }?>
</select>
<button type="submit" name="enter">ENTER</button>
</form>
<br/>
</fieldset>

