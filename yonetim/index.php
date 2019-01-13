<?php $title = "Yönetim Paneli";
include "inc/header.php";
require_once("../funcs/hakkimda.php");
?>
<!-- Page Content -->
<div id="page-wrapper">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                <?php
                    if(isset($_POST["frms"]))
                        echo(hakkimda_guncelle(
                            $_POST["adsoyad"],
                            $_POST["meslek"],
                            $_POST["yas"],
                            $_POST["ulke"],
                            $_POST["adres"],
                            $_POST["telefon"],
                            $_POST["skype"],
                            $_POST["email"],
                            $_POST["website"],
                            $_POST["hakkimda"]
                        ));
                ?>
                
                <h1 class="page-header">Genel Site Ayarları</h1>
            </div>
            <!-- /.col-lg-12 -->
        </div>
        <!-- /.row -->
        <div class="panel panel-default">
            <div class="panel-heading">Site Ayarları</div>
            <div class="panel-body">
                <!-- Genel ayarlar burada olacak. -->
            </div>
        </div>
        <?php  ?>
        <div class="panel panel-default">
            <div class="panel-heading">Hakkınızda Ayarları</div>
            <div class="panel-body">
                <form method="POST" action="">
                    <?php $query=hakkimda_cek(); while($cek=mysqli_fetch_assoc($query)){ ?>
                    <div class="form-group">
                        <label for="adsoyad">Adınız Soyadınız</label>
                        <input type="text" class="form-control" value="<?php echo $cek["adsoyad"]; ?>" name="adsoyad" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="meslek">Mesleğiniz</label>
                        <input type="text" class="form-control" value="<?php echo $cek["meslek"] ?>" name="meslek" id="meslek" aria-describedby="emailHelp">
                    </div>
                    <div class="form-group">
                        <label for="yas">Yaşınız</label>
                        <input type="number" min="0" max="99" value="<?php echo $cek["yas"] ?>" name="yas" class="form-control" id="yas">
                    </div>
                    <div class="form-group">
                        <label for="ulke">Ülkee</label>
                        <input type="text" class="form-control" value="<?php echo $cek["ulke"] ?>" name="ulke" id="ulke">
                    </div>
                    <div class="form-group">
                        <label for="adres">Adres</label>
                        <input type="text" class="form-control" value="<?php echo $cek["adres"] ?>" name="adres" id="adres">
                    </div>
                    <div class="form-group">
                        <label for="telefon">Telefon</label>
                        <input type="tel" class="form-control" value="<?php echo $cek["telefon"] ?>" name="telefon" id="telefon">
                    </div>
                    <div class="form-group">
                        <label for="skype">Skype</label>
                        <input type="input" class="form-control" value="<?php echo $cek["skype"] ?>" name="skype" id="skype">
                    </div>
                    <div class="form-group">
                        <label for="mail">E-Mail</label>
                        <input type="email" class="form-control" value="<?php echo $cek["email"] ?>" name="email" id="mail">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputPassword1">Website</label>
                        <input type="input" class="form-control" value="<?php echo $cek["website"] ?>" name="website" id="exampleInputPassword1">
                    </div>
                    <div class="form-group">
                        <label for="hakkimda">Hakkınızda</label>
                        <textarea class="form-control" id="hakkimda" style="resize:none;" rows="20"  name="hakkimda"><?php echo $cek["hakkimda"] ?></textarea>
                    </div>

                    <button type="submit" name="frms" class="btn btn-primary">Kaydet</button>
                    <?php } ?>
                </form>
            </div>
        </div>


    </div>
    <!-- /.container-fluid -->
</div>
<!-- /#page-wrapper -->

</div>
<!-- /#wrapper -->

<?php include "inc/footer.php";?>