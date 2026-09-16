<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Seznam všech stanic v Německu</title>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<?php
    foreach ($bundesland as $row) {
        /*$imgMap = array(
          "src" => base_url("obrazky/mapy/".$row->Map),
          "alt" => "mapa zeme",
          "class" => "img-fluid w-100",
        );
        $imgVlajka = array(
            "src" => base_url("obrazky/vlajky/Flag_of_".$row->id.".png"),
            "alt" => "mapa zeme",
            "class" => "img-fluid w-100",
        );*/
        
        ?>
        <h1 class="mt-1 mb-2"><?= $row->name ?></h1>
        <?php
    }
?>
    <div class="row">
        <div class="col-lg-6">
            
            <h1 class="p-1"><?= anchor("zeme-stanice/".$row->id, "Stanice") ?></h1>
        </div>

        <div class="col-lg-6">
            
        </div>
    </div>


<?= $this->endSection(); ?>


<!--img($imgMap);
 img($imgVlajka);-->