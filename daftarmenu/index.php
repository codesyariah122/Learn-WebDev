<html>
  <head>
    <title>dafta menu</title>
    </head>
  <body>

    <fieldset>
      <legend>Input daftar menu</legend>
      <form action="method.php" method="post">
        <label for="nama">Nama Menu</label>&nbsp;&nbsp;
        <input type="text" name="nama" id="nama"><br/>
        <label for="harga">Harga Menu</label>&nbsp;&nbsp;
        <input type="number" name="harga" id="harga"><br/><br/>
        <button type="submit" name="tambah">Tambah</button>
        </form>
      </fieldset>

<fieldset><legend>Daftar Menu</legend>


<?php
    if(isset($_GET['id'])){
 if($_GET['id']=='lost'):

 echo "<h1>Error saat input data";
      elseif($_GET['id']=='success'):
      $dir="Menu";
      $myFile="menu.txt";

      /*@debug
      $scan=scandir($dir);
      echo "<pre>";
      print_r($scan);
      echo "</pre>";
      */
      //include $dir.'/'.$nm_file;

      endif;
    }
?>


  <table border="1" cellpadding="10" cellspacing="0">
    <tr>
      <th>Menu</th>
      <th>Harga</th>
    </tr>

<?php
$content = file_get_contents($dir."/".$myFile);

$rows = explode("\n", $content);

echo "<pre>";
print_r($rows);
echo "</pre>";

$data = [];
foreach ($rows as $row) {
    $columns = explode('-', $row);

echo "<pre>";
print_r($columns);
echo "</pre>";

$data[$columns[1]] = $columns[0];
$data[$columns[0]] = $columns[1];

?>

<tr>
 <td><?=$data[$columns[1]];?></td>
 <td><?=$data[$columns[0]];?></td>
</tr>

<?php }?>

  </table>
<?php
$count = count($rows)-1;
?>

<h1>Total Menu = <?=$count;?> Menu</h1>
  </fieldset>

    </body>
  </html>