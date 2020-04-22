<?php
if (isset($_POST['submit'])) {
    $Matrix = $_POST['matrix'];
    $verticesCount = $_POST['vertex'];

    // if (!empty($Matrix)) {
    //     for ($i = 0; $i < count($Matrix); $i++) {
    //         if (!empty($Matrix[$i])) {
    //             $mt = $Matrix[$i];
    //             $ary[$i] = "array($mt),";
    //         }
    //     }
    // }


    $gp = array();
    foreach ($Matrix as $mt => $value) {
        $gp[$mt] = "array($value),";
        // if ($mt >= 0) echo 'array(' . $value . '),';
    }

    echo implode($gp);
    $graph =  array(implode($gp));



    Prim($graph, $verticesCount);
}
