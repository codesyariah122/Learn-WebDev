<html>
  <head>
    <meta charset="utf-8">
    <title>Data Table</title>
    </head>
  <body>
    <fieldset>
      <h2>Selamat Datang</h2>
      <h1>Di Welcome</h1>
      <figcaption>
        <h3>Table View Data</h3>
        </figcaption>
      <figure>
<table border="1" cellpadding="10" cellspacing="0">
<?php    require_once(dirname(__FILE__))."/data_arr.php";?>
<tr>
<?php for($j=1;$j<=count($data['head']);$j++):?>
 <th><?=$data['head'][$j];?></th>
<?php endfor;?>
</tr>
  <tr>
    <?php for($i=1;$i<=count($data['data']);$i++):?>
    <td><?=$data['data'][$i];?></td>
    <?php endfor;?>
  </tr>
</table>

        </figure>
      </fieldset>

    </body>
  </html>