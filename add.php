<?php
include "include/header.php";
?>
<div class="container">
  <div class="row">
    <div class="col-4 offset-4 pt-4">
  <form action="actions.php" method="POST" enctype="multipart/form-data">
  <div class="mb-3">
  <label for="title" class="form-label h2">Title</label>
  <input class="form-control" name="title" type="text" id="title">
</div>
<div class="mb-3">
  <label for="formFile" class="form-label">Input file</label>
  <input class="form-control" name="image" type="file" accept="image/*" id="formFile">
</div>
<input class="btn btn-primary form-control" type="submit" name="submit" value="Submit">
  </form>
    </div>
  </div>
</div>
<?php
message();
?>
<div class="container">
<div class="row">
  <div class="col-2 offset-4 mt-2">
  <a class="btn btn-success" href="index.php">Go back to gallery</a>
  </div>
</div>
</div>
<?php
include "include/footer.php";
?>