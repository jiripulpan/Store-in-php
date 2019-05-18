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

  <!-- Item -->
  <section class="features-icons bg-light text-center">
    <div class="container">
      <div class="row center-cols">
        <div class="col-lg-4">
          <div class="features-icons-item mx-auto mb-5 mb-lg-0 mb-lg-3">
            <div class="features-icons-icon d-flex">
              <i class="icon-screen-desktop m-auto text-primary"></i>
            </div>
            <h3><?php echo $_GET['name']; ?></h3>
            <p class="lead mb-0"><?php echo $_GET['description']; ?></p>
            <br>
            <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <!-- Pick color variant -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="colorPick" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            Black
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="colorPick" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            Blue
                        </label>
                    </div>
                </div>
                <div class="col-sm-6">
                    <!-- Pick size variant -->
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sizePick" id="exampleRadios1" value="option1" checked>
                        <label class="form-check-label" for="exampleRadios1">
                            L
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sizePick" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            XL
                        </label>
                    </div>
                    <div class="form-check">
                        <input class="form-check-input" type="radio" name="sizePick" id="exampleRadios2" value="option2">
                        <label class="form-check-label" for="exampleRadios2">
                            XXL
                        </label>
                    </div>
                </div>
            </div>
        </div>
            <br><a class="btn btn-primary" href="item.php?name=Fully Responsive">Add to cart</a>
          </div>
        </div>
  </section>

<?php
include 'footer.php';
?>

</body>
</html>
