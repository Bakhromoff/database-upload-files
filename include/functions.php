<?php
function message() {
  if(isset($_GET['er'])) {
    ?>
    <div class="container">
    <div class="col-4 offset-4">
    <p class="mt-2 alert alert-danger text-center"><?=$_GET['er'];?></p>
    </div>
    </div>
    <?php
  } elseif(isset($_GET['s'])) {
    ?>
    <div class="container">
    <div class="col-4 offset-4">
    <p class="mt-2 alert alert-success text-center"><?=$_GET['s'];?></p>
    </div>
    </div>
    <?php
  }
}
?>