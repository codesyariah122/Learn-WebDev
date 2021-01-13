<html>
  <head>
    <title>dataku</title>
  </head>
  <body>
    <fieldset>
      <form action="post.php" method="post">
        <label for="nama">Nama Anda</label><br>
        <input type="text" name="nama" id="nama"><br/>
        <label for="email">Email Aktif Anda :</label><br>
        <input type="email" name="email" id="email"><br/>
        <label for="bio">Biografi(perjalanan hidup/story/dan lain2) : </label><br/>
        <textarea name="bio" rows="5" cols="30"></textarea>
        <br/>
        <br/>
        <button type="submit" name="go">Enter</button>
        </form>
    </fieldset>
      <br>
<?php
if(isset($_GET['page'])):

session_start();

if(!empty($_SESSION['name']) && !empty($_SESSION['email']) && !empty($_SESSION['bio']) && $_GET['page']==$_SESSION['name']):
?>
    <fieldset>
<table border="1" cellpadding="10" cellspacing="0">
  <tr>
    <th>Nama</th>
    <th>Email</th>
    <th>Biografi</th>
  </tr>
  <tr>
    <td><?=$_SESSION['name'];?></td>
    <td><?=$_SESSION['email'];?></td>
    <td><?=$_SESSION['bio'];?></td>
  </tr>
</table>
<?php //session_destroy();
      else:?>
<h1><font face="color:salmon">Halaman Kosong</font></h1>

<?php endif;endif;?>

</fieldset>

      </body>
    </html>