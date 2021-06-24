
<!-- ----- début viewDoses -->
<?php
require ($root . '/app/view/fragment/fragmentCovidHeader.html');
?>

<body>
    <div class="container">
        <?php
        include $root . '/app/view/fragment/fragmentCovidMenu.html';
        include $root . '/app/view/fragment/fragmentCovidJumbotron.html';
        ?>

        <table class = "table table-striped table-bordered">
            <thead>
                <tr>
                    <th scope = "col">Label</th>
                    <th scope = "col">Doses</th>
                </tr>
            </thead>
            <tbody>
                <?php
                // La liste des centres est dans une variable $results             
                foreach ($results as $element) {
                    printf("<tr><td>%s</td><td>%d</td></tr>", $element[0], $element[1]);
                }
                ?>
            </tbody>
        </table>
    </div>
    <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

    <!-- ----- fin viewDoses -->


