<?php

fungsi get($id,$mes){

$token = "5678061285:AAFsu7kLHs1wW9_swYu7vm9kE0A-obM247M";

$ch = curl_init();

curl_setopt($ch, CURLOPT_POST, benar);

curl_setopt($ch, CURLOPT_RETURNTRANSFER, benar);

curl_setopt($ch, CURLOPT_HTTPHEADER, ['Content-Type: multipart/form-data']);

curl_setopt($ch, CURLOPT_URL, "https://api.telegram.org/bot$token/sendMessage?");

$postFields = array(

    'chat_id' => $id,

    'teks' => $mes,

    'parse_mode' => 'HTML',

    'disable_web_page_preview' => salah,

);

curl_setopt($ch, CURLOPT_POSTFIELDS, $postFields);

kembali curl_exec($ch);

curl_close($ch);

}

$cek = file_get_contents('php://input');

$x = json_decode($cek,1);

$id = $x["pesan"]["obrolan"]["id"];

$nama = $x["pesan"]["obrolan"]["nama_depan"];

$teks = $x["pesan"]["teks"];

if($teks == "/mulai"){

  $msg = "Selamat Datang $nama \n";

}kalau tidak{
if(strpos($text,"youtu.be") != null | strpos($text,"youtube.com") != null){

  $tautan = $teks;
   if(file_exists("save.html")){
       hapus tautan("simpan.html");
       }
  include("file.php");
  $msg = file_get_contents("simpan.html");
}kalau tidak{
    // bila tidak url YouTube kita bisa kasih pesan
    $msg = "url maaf tidak valid";
}
}

dapatkan($id,$msg);

?>
