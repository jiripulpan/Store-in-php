<?php
include 'header.php';

$username = 'admin';
if($username != 'admin') {
  echo 'You dont have permissions to use admin panel';
  exit();
}

include 'admin-panel-menu.php';
?>
  
    <!-- Shop items -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <!-- Generate with PHP -->
          <?php
          // Ask items from DB through object with interface
          $getItems = $items->getItems();
          foreach($getItems as $item) {
            echo '<div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                      <div class="features-icons-icon d-flex">
                        <i class="'.$item["icon"].' m-auto text-primary"></i>
                      </div>
                      <h3>'.$item["title"].'</h3>
                      <p class="lead mb-0">'.$item["description"].'</p>
                      <p class="lead mb-0">orders '.$item["timesbought"].'</p>
                      <br>
                      <a class="btn btn-info" href="item-edit.php?name='.$item["title"].'&description='.$item["description"].'">Edit</a>
                      <a class="btn btn-danger" href="item-delete.php?name='.$item["title"].'">Delete</a>
                    </div>
                  </div>
                  ';
          }
          ?>
        </div>
      </div>
    </section>
<?php
include 'footer.php';
?>
</body>
</html>
