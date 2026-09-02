<?= $this->extend("layout/sablona"); ?>

<?= $this->section("titulek"); ?>
    <title>Seznam spolkových zemí Německa</title>
<?= $this->endSection(); ?>

<?= $this->section("content"); ?>

<h1 class="mt-1 mb-2">Seznam spolkových zemích Německa</h1>

<?php
    $table = new \CodeIgniter\View\Table();
    $table->setHeading("Název", "Zkrácený název");

    foreach ($bundesland as $row) {
        $table->addRow(anchor("zeme/".$row->id, $row->name), $row->short_name); //, $row->$img, $row->mapka echo img($row->imgMap)
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

<h2><?= anchor("vsechny-stanice/", "Seznam všech stanic") ?></h2>

<?= $this->endSection(); ?>