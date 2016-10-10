<?php
  $testVar = 'Hello there!';
?>

<div class="row">
  <div class="col-md-6">
    Hello, this is the left hand side.
  </div>

  <div class="col-md-6">
    Hello, this is the right hand side. This is the test var. <?= $testVar ?>.
  </div>
</div>
