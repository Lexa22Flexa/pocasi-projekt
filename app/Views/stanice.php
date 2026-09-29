<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Data ze stanice --název stanice--</title>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1>Data ze stanice</h1>

<?php
    helper('form');
?>

<?= form_open_multipart("item/delete") ?>

<div class="mb-3">
    <label for="smazat" class="form-label">Smazat záznamy s datem:</label>
    <input type="date" class="form-control" id="smazat" name="smazat" required>
</div>

<button class="btn btn-danger mb-3" style="float: right;" type="submit">Smazat</button>

<?= form_close() ?>

<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading("Datum", "Kvalita", "Min 5 cm", "Min 2 m", "Mid 2 m", "Max 2 m", "Vlhkost", "Mid vítr", "Max vítr", "Délka sluníčka", "Mráčky", "precipitation", "mid air pressure");
    foreach ($data as $row) {
        $output = date("d. m. Y", strtotime($row->date));
        $table->addRow($output, $row->quality, $row->min_5cm, $row->min_2m, $row->mid_2m, $row->max_2m, $row->humidity, $row->mid_wind, $row->max_wind, $row->sun_length, $row->mid_cloud, $row->precipitation, $row->mid_air_pressure);
    }
    $template = array(
        'table_open' => '<table class="table table-striped table-hover table-bordered">',
        'thead_open' => '<thead>',
        'thead_close' => '</thead>',
        'heading_row_start' => '<tr>',
        'heading_row_end' => ' </tr>',
        'heading_cell_start' => '<th>',
        'heading_cell_end' => '</th>',
        'tbody_open' => '<tbody>',
        'tbody_close' => '</tbody>',
        'row_start' => '<tr>',
        'row_end'  => '</tr>',
        'cell_start' => '<td>',
        'cell_end' => '</td>',
        'row_alt_start' => '<tr>',
        'row_alt_end' => '</tr>',
        'cell_alt_start' => '<td>',
        'cell_alt_end' => '</td>',
        'table_close' => '</table>'
    );
    $table->setTemplate($template);
    echo $table->generate();
?>

<?= $this->endSection(); ?>