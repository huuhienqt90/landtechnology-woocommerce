<?php if ( has_nav_menu( 'primary' ) ) : ?>
    <?php
    wp_nav_menu( array(
        'theme_location'    => 'primary',
        'menu_id'           => 'primary-menu',
        'container'         => '',
        'menu_class'        => 'nav navbar-nav navbar-right text-uppercase'
    ) );
    ?>
<?php else: ?>
    <ul class="nav navbar-nav navbar-right text-uppercase">
        <li class="menu-home">
            <a href="#" title="menu home" class="active">Home</a>
            <div class="hv-menu">
                <ul class="hv-product">
                    <li class="hv-list">
                        <h2>Products page</h2>
                        <ul>
                            <li class="product-detail"><a href="#" title="menu detail">Standard Product</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Variable Product</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">External Product</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Group Product</a></li>
                        </ul>
                    </li> <!-- .hv-list -->
                    <li class="hv-list">
                        <h2>Products elements</h2>
                        <ul>
                            <li class="product-detail"><a href="#" title="menu detail">Product Columns</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Products Layout</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Products Full Width</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Products Right Sidebar</a></li>
                        </ul>
                    </li> <!-- .hv-list -->
                    <li class="hv-list">
                        <h2>theme elements</h2>
                        <ul>
                            <li class="product-detail"><a href="#" title="menu detail">Accordion & Tabs</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Skills</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Team & Testimonials</a></li>
                            <li class="product-detail"><a href="#" title="menu detail">Columns</a></li>
                        </ul>
                    </li> <!-- .hv-list -->
                </ul> <!-- .hv-product -->
            </div> <!-- .hv-menu -->
        </li>
        <li><a href="#">Products</a></li>
        <li><a href="#">collection</a></li>
        <li><a href="#">pagest</a></li>
        <li><a href="#">about us</a></li>
        <li><a href="#">contact us</a></li>
        <li class="search">
            <a href="#"><i class="fa fa-search" aria-hidden="true"></i></a>
            <div id="sb-search" class="sb-search">
                <form>
                    <input class="sb-search-input" placeholder="Search ...." type="search" value="" name="search" id="search">
                    <input class="sb-search-submit" type="submit" value="">
                    <span class="sb-icon-search"></span>
                </form>
            </div>
        </li>
        <li class="menu-cart">
            <a href="#" class="a-badge">
                <i class="fa fa-shopping-cart" aria-hidden="true"></i>
                <span class="badge badge-default">50</span>
            </a>
            <div class="hv-cart">
                <div class="info-cart">
                    <ul class="mini-cart-items">
                        <li class="list-mini-cart-item row">
                            <div class="col-md-3">
                                <a href="#" title="images info"><img src="../assets/images/img-hv-cart.png" class="img-responsive" alt="images img hover cart"></a>
                            </div>
                            <div class="col-md-7">
                                <p><a href="#" class="title-hover-cart">Sacrificial Chair Design</a></p>
                                <p>Qty: 2</p>
                                <span>$170.00</span>
                            </div>
                            <div class="col-md-2">
                                <a href="#" title="icon close" class="img-icon-close"><i class="fa fa-times" aria-hidden="true"></i></a>
                            </div>
                        </li> <!-- .list-mini-cart-item -->
                    </ul> <!-- .mini-cart-items -->
                </div> <!-- .info-cart -->
                <div class="content-cart">
                    <ul>
                        <li>
                            <p>Shipping :</p>
                            <span>Total :</span>
                        </li>
                        <li>
                            <p>$30.00</p>
                            <span>$173.00</span>
                        </li>
                    </ul>
                </div> <!-- .content-cart -->
                <div class="btn-cart">
                    <ul>
                        <li><a href="#" title="btn cart" class="btn-view-cart">VIEW CART</a></li>
                        <li><a href="#" title="btn cart" class="btn-view-cart">CHECKOUT</a></li>
                    </ul>
                </div> <!-- .btn-cart -->
            </div> <!-- .hv-cart -->
        </li>
    </ul> <!-- .nav .navbar-nav .navbar-right -->
<?php endif; ?>