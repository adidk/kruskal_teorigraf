<div class="container mt-2">
    <a href="<?= base_url() ?>kruskal" class="btn btn-primary">Kembali</a>
    <div class="row mt-2">
        <div class="col-lg-8">
            <h4>Hasil perhitungan untuk algoritma kruskal untuk mencari Tree dengan nilai terendah adalah</h4>

            <?php
            if (isset($_POST['submit'])) {
                $Source = $_POST['source'];
                $Destination = $_POST['end'];
                $Weight = $_POST['value'];
                $verticesCount = $_POST['vertex'];
                // echo 'Jumlah vertex = ' . $verticesCount . '<br/>';
                if (!empty($Source)) {
                    for ($i = 0; $i < count($Source); $i++) {
                        if (!empty($Source[$i])) {
                            $edge = $i + 1;
                        }
                    }
                }
            ?>
                <h6>Jumlah Vetrex(titik) = <?= $verticesCount ?></h6>
                <?php
                $edgesCount = $edge;
                $graph = CreateGraph($verticesCount, $edgesCount);
                ?>

                <h6>Jumlah Edge(sisi) = <?= $edgesCount ?></h6>
            <?php
                if (!empty($Source)) {
                    for ($i = 0; $i < count($Source); $i++) {
                        if (!empty($Source[$i])) {
                            $sc = $Source[$i];
                            $de = $Destination[$i];
                            $we = $Weight[$i];

                            echo 'Edge ' . ($i + 1) . ' : ' . $sc . ' -> ' . $de . ' = ' . $we . '<br/>';
                            $sc = $Source[$i] - 1;
                            $de = $Destination[$i] - 1;
                            $we = $Weight[$i];
                            $graph->_edge[$i]->Source = $sc;
                            $graph->_edge[$i]->Destination = $de;
                            $graph->_edge[$i]->Weight = $we;
                        }
                    }
                }
            }
            ?>

        </div>
        <div class="col-lg-4">
            <h3>Hasil Edge Bobot Terkecil</h3>
            <?php
            Kruskal($graph);
            ?>
        </div>
    </div>
</div>