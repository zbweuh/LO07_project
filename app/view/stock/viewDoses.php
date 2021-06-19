
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
           printf("<tr><td>%d</td><td>%d</td></tr>", $element->getCentreId(), 
             $element->getDoses()); //comment afficher la variable doses
          }
          ?>
      </tbody>
    </table>
  </div>
  <?php include $root . '/app/view/fragment/fragmentCovidFooter.html'; ?>

  <!-- ----- fin viewDoses -->
  
  
  