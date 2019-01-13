<?php
require_once('db.php');
function hakkimda_cek()
{
    global $db;
    $about = mysqli_query($db,"SELECT * from hakkimda");
    return $about;
}
function hakkimda_guncelle($adsoyad,$meslek,$yas,$ulke,$adres,$telefon,$skype,$email,$website,$hakkimda)
{
    global $db;
    $query="UPDATE hakkimda SET adsoyad='$adsoyad',meslek='$meslek',yas='$yas',ulke='$ulke',adres='$adres',telefon='$telefon',skype='$skype',email='$email',website='$website',hakkimda='$hakkimda'";
    if(@mysqli_query($db,$query))
        return '<div class="alert alert-success" role="alert">
        Kayıt Başarılı!
      </div>';
    else
        return '<div class="alert alert-warning" role="alert">
        Hata Var. Kontrol Edin!
      </div>';

}