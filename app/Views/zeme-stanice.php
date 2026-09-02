<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Stanice ve spolkové zemi</title>
<?= $this->endSection(); ?>

<?= $this->section("content"); 
use App\Models\Bundesland;
//$this->bundesland = new Bundesland();
//$dat["bundesland"] = $this->bundesland->where("id", $stanice->S_ID)->findAll();
//<?= $dat?
?>

<h1>Přehled meteorologických stanic ve spolkové zemi ---název země---</h1>


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
                    </div>
                </div>
                <?php
            }
        ?>
    </div>
</div>

<?= $this->endSection(); ?>