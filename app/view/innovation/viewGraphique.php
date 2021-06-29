<?php
require($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <h1>Voici la répartition des stocks de vaccins disponibles :</h1>
        <canvas id="camembert" width="350" height="250"></canvas>
        <script>
            labels = <?=json_encode($labels)?>;
            new RGraph.Pie({
                id: 'camembert',
                data: <?=json_encode($values)?>,
                options: {
                    tooltips: '<b>Quantitée :</b><br />%{key}',
                    tooltipsFormattedKeyLabels: labels,
                    labels: labels,
                    linewidth: 2,
                    shadow: false,
                    tooltipsCss: {
                        fontSize: '16pt',
                        textAlign: 'left'
                    },
                }
            }).draw();
        </script>
        


    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>
