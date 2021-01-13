<!DOCTYPE html>
<html lang="en">
  <meta charset="utf-8">
  <head>
    <title>Interactive jquery</title>
    <script type="text/javascript" language="javascript" src="js/jquery-1.4.2.js"></script>
      <script type="text/javascript">
       $("document")
         .ready(function(){
       $("a")
         .click(function(){
       $("p.kalimat")
         .css("color","red");
       $("#kotakkotaknora")
         .addClass("red");
        });
        });
    </script>

    <style>
      .red{
        height:200px;
        width:200px;
        background-color:red;
      }
    </style>
    </head>
  <body>
    <p>Orang-orang liberal mengatakan
      pergerakan untuk mempersatukan kaum
      muslimin seluruh dunia di bawah
      naungan Al-Khilafah itu merupakan
      suatu mimpi belaka. Terlalu utopis.
      ?Mana bisa!!?, kata mang Abdul
      Mosqid. Aneh dan heran ? herannya
      kenapa mimpi indah seperti ini
      nggak dibiarkan tuk tetep ada.
      Malah dilarang-larang. Kan aneh bin
      mahfuz itu namanya. Dikit-dikit
      dilarang ? dikit-dikit dilarang. Di
      larang kok dikit-dikit. Haha? Yang
      bikin penasaran lagi kenapa begitu
      giatnya perjuangan mereka (orang-
      orang perguruan pencak silat
      liberal) dalam menutup gaung upaya
      penegakkan syariat islam lewat
      berbagai media. Acara ngoprek Al-
      Quran bareng-bareng pun jadi
      kegiatan keseharian. Ngopreknya
      nggak tanggung-tanggung, Al-Quran
      dicocokkin dengan akal mereka
      sendiri, yang nggak sesuai
      dikritisi, dicaci maki. Hahaha ?
      keren-
      keren? Terus, kalo penegakkan
      syariat islam itu dibilang cuma
      mimpi belaka doang, Kenapa JIL
      harus nerbitin media kaya
      islamlib.com, mang Gusdur dengan
      wahid institutenya, dan berbagai
      media
      lainnya yang berusaha secara
      terang-terangan menjauhkan orang-
      orang islam dari gaung penegakkan
      syariat islam? dan bahkan nggak
      jarang mereka justru melencengkan
      arti dan makna syariat islam yang
      sebenarya. Heran deh gw. Heran
      nggak sih loh? Ada apa dibalik
      semua ini? Ada apa gerangan? Ada
      apa mang ulil meng-erang-erang?
      Haha... </p>
    <div id="kotakkotaknora"></div>
    <a href="#">Klik...klik...</a>

    </body>
  </html>