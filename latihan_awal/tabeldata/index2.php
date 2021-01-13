<html>
  <head>
    <meta charset="utf-8">
    <title>Data Table</title>
    <style>
      .warna-baris{
        background-color:#fff59f;
      }
    </style>
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
  <?php for($i=1;$i<=7;$i++):?>
  <?php if($i % 2 == 1):?>
<tr class="warna-baris">
  <?php else:?>
  <tr>
    <?php endif;?>
  <?php for($j=1;$j<=5;$j++):?>
  <td><?="$i,$j";?></td>
  <?php endfor;?>

  </tr>
  <?php endfor;?>
</table>

        </figure>
      </fieldset>

    </body>
  </html>