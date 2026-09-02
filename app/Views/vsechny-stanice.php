<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Všechny stanice v Německu</title>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1 class="mt-1 mb-2">Přehled všech stanic v Německu</h1>

<div class="row">
        <?php
            foreach($stanice as $row) {
                ?>
                <div class="card col-lg-4 mb-2">
                    <div class="card-header">
                        <h4> <?= anchor("stanice/".$row->S_ID, $row->place) ?> </h4>
                    </div>
                    <div class="card-body">
                        <p>koordinace: <?= $row->geo_latitude ?> <?= $row->geo_longtitude ?></p>
                        <p>nadmořská výška: <?= $row->height ?> mnm</p>

                        <?php
//                      dodělat/opravit/zjistit
//                          $imgVlajka = array(
//                              "src" => base_url("obrazky/vlajky/Flag_of_".$row->getBundesland()->where("id", $row->S_ID)->Flagge),
//                              "alt" => "vlajka",
//                              "class" => "img-fluid",
//                           );

                        ?>

                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>

<?= $this->endSection(); ?>