<!-- Admin panel menu -->
<nav class="navbar navbar-expand-lg navbar-light bg-light rounded">
        <a class="navbar-brand"></a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample09" aria-controls="navbarsExample09" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarsExample09">
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="admin-panel.php">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item">
              <a class="nav-link disabled" href="#">Disabled</a>
            </li>
            <li class="nav-item dropdown">
              <a class="nav-link dropdown-toggle" href="http://example.com" id="dropdown09" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Selects</a>
              <div class="dropdown-menu" aria-labelledby="dropdown09">
                <a class="dropdown-item" href="individual-orders.php">Individual orders</a>
                <a class="dropdown-item" href="#">Another action</a>
                <a class="dropdown-item" href="#">Something else here</a>
              </div>
            </li>
          </ul>
          <form class="form-inline my-2 my-md-0">
            <input class="form-control" type="text" placeholder="Search" aria-label="Search">
          </form>
        </div>
      </nav>

<!-- Shopping cart -->
    <div class="container">
      <div class="card shopping-cart">
               <div class="card-header bg-dark text-light">
                   <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                   Shopping cart
                   <div class="clearfix"></div>
               </div>
               <div class="card-body">
                       <div class="row">
                           <div class="col-12 col-sm-12 col-md-2 text-center">
                                   <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                           </div>
                           <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                               <h4 class="product-name"><strong>Product Name</strong></h4>
                               <h4>
                                   <small>Product description</small>
                               </h4>
                           </div>
                           <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                               <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                   <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                               </div>
                               <div class="col-4 col-sm-4 col-md-4">
                                   <div class="quantity">
                                       <input type="button" value="+" class="plus">
                                       <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                              size="4">
                                       <input type="button" value="-" class="minus">
                                   </div>
                               </div>
                               <div class="col-2 col-sm-2 col-md-2 text-right">
                                   <button type="button" class="btn btn-outline-danger btn-xs">
                                       <i class="fa fa-trash" aria-hidden="true"></i>
                                   </button>
                               </div>
                           </div>
                       </div>
                       <hr>
                       <div class="row">
                           <div class="col-12 col-sm-12 col-md-2 text-center">
                                   <img class="img-responsive" src="http://placehold.it/120x80" alt="prewiew" width="120" height="80">
                           </div>
                           <div class="col-12 text-sm-center col-sm-12 text-md-left col-md-6">
                               <h4 class="product-name"><strong>Product Name</strong></h4>
                               <h4>
                                   <small>Product description</small>
                               </h4>
                           </div>
                           <div class="col-12 col-sm-12 text-sm-center col-md-4 text-md-right row">
                               <div class="col-3 col-sm-3 col-md-6 text-md-right" style="padding-top: 5px">
                                   <h6><strong>25.00 <span class="text-muted">x</span></strong></h6>
                               </div>
                               <div class="col-4 col-sm-4 col-md-4">
                                   <div class="quantity">
                                       <input type="button" value="+" class="plus">
                                       <input type="number" step="1" max="99" min="1" value="1" title="Qty" class="qty"
                                              size="4">
                                       <input type="button" value="-" class="minus">
                                   </div>
                               </div>
                               <div class="col-2 col-sm-2 col-md-2 text-right">
                                   <button type="button" class="btn btn-outline-danger btn-xs">
                                       <i class="fa fa-trash" aria-hidden="true"></i>
                                   </button>
                               </div>
                           </div>
                       </div>
               </div>
               <div class="card-footer">
                   <div class="pull-right" style="margin: 10px">
                       <a href="" class="btn btn-success pull-right">Checkout</a>
                       <div class="pull-right" style="margin: 5px">
                           Total price: <b>50.00€</b>
                       </div>
                   </div>
               </div>
           </div>
        </div>
