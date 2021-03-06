<?php
include 'header.php';
?>
  <!-- User -->
  <div class="container login-container signin-and-signup-form">
    <div class="row">
        <div class="col-md-6 login-form-1">
            <h3>Sign In</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Login" />
                </div>
                <div class="form-group">
                    <a href="#" class="ForgetPwd">Forget Password?</a>
                </div>
            </form>
        </div>
        <div class="col-md-6 login-form-2">
            <h3>Sign Up</h3>
            <form>
                <div class="form-group">
                    <input type="text" class="form-control" placeholder="Your Email *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Password *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your City *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Address *" value="" />
                </div>
                <div class="form-group">
                    <input type="password" class="form-control" placeholder="Your Postal Code *" value="" />
                </div>
                <div class="form-group">
                    <input type="submit" class="btnSubmit" value="Register" />
                </div>
            </form>
        </div>
      </div>
  </div>

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

  <!-- Shop items -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3>Fully Responsive</h3>
            <p class="lead mb-0">This theme will look great on any device, no matter the size!</p>
            <br><a class="btn btn-primary" href="item.php?name=Fully Responsive&description=This theme will look great on any device, no matter the size!">Add to cart</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-layers m-auto text-primary"></i>
            </div>
            <h3>Bootstrap 4 Ready</h3>
            <p class="lead mb-0">Featuring the latest build of the new Bootstrap 4 framework!</p>
            <br><a class="btn btn-primary" href="item.php?name=Bootstrap 4 Ready&description=Featuring the latest build of the new Bootstrap 4 framework!">Add to cart</a>
          </div>
        </div>
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-check m-auto text-primary"></i>
            </div>
            <h3>Easy to Use</h3>
            <p class="lead mb-0">Ready to use with your own content, or customize the source files!</p>
            <br><a class="btn btn-primary" href="item.php?name=Easy to Use&description=Ready to use with your own content, or customize the source files!">Add to cart</a>
          </div>
        </div>
      </div>
    </div>
  </section>

<?php
include 'footer.php';
?>

</body>
</html>
