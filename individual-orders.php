<?php
include 'header.php';

$username = 'admin';
if($username != 'admin') {
  echo 'You dont have permissions to use admin panel';
  exit();
}

include 'admin-panel-menu.php';
?>
  
    <!-- Individual orders -->
    <section class="features-icons bg-light text-center">
      <div class="container">
        <div class="row">
          <!-- Generate with PHP -->
          <?php
          // Ask items from DB through object with interface
          $individualOrders = $orders->getIndividualOrders();
          foreach($individualOrders as $individualOrder) {
            print_r($individualOrder);
            echo '<div class="col-lg-4">
                    <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
                      <div class="features-icons-icon d-flex">
                        <i class="icon-drawer m-auto text-primary"></i>
                      </div>
                      <h3>title</h3>
                      <p class="lead mb-0">description</p>
                      <p class="lead mb-0">orders timesbought</p>
                      <br>
                      <a class="btn btn-info" href="item-edit.php?name=title&description=description">Edit</a>
                      <a class="btn btn-danger" href="item-delete.php?name=title">Delete</a>
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
