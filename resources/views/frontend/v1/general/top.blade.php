<div class="mainbar">
                    <div class="container">
                        <div class="row">
                            <div class="menu-bar hidden-lg hidden-md">
                                <a href="#nav-mobile">
                                <i class="fa fa-align-justify"></i>
                                </a>
                            </div>
                            <div class="col-xs-6 col-xs-offset-3 col-sm-offset-0 col-sm-12 col-md-3 col-md-offset-0 col-lg-3 col-lg-offset-0 col-hg-3 logo">
                                <a title="Libra Mart" href="/">
                                <img class="img-responsive" src="{{url('')}}/assets/frontend/v1.0/images/icons/logo.png" alt="Logo Libra Mart">                    
                                </a> 
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-6 col-lg-6 col-hg-6 searchbar">
                                <div class="search_bar search-auto">
                                    <form action="/search" method="get">
                                        <input type="text" class="form-control smartsearch_input" autocomplete="off" maxlength="70" name="query" id="search" title="Nhập từ khoá cần tìm" placeholder="Tìm kiếm ..." required>
                                        <button class="btn button-hover-3" type="submit">
                                        <i class="fa fa-search"></i>
                                        </button>
                                    </form>
                                    <div id='search_suggestion'>
                                        <div id='search_top'>
                                            <div id="product_results"></div>
                                            <div id="article_results"></div>
                                        </div>
                                        <div id='search_bottom'>
                                            <a class='show_more' href='#'>Hiển thị tất cả kết quả cho "<span></span>"</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="col-xs-12 col-sm-12 col-md-3 col-lg-3 col-hg-3 panel_cart">
                                <div class="fw">
                                    <div class="hotline hidden-xs hidden-sm">
                                        <a href="tel:19001009" title="Hotline">
                                        <span>1900 1009</span>
                                        </a>
                                    </div>
                                    <div class="top-cart-contain">
                                        <div class="mini-cart text-xs-center">
                                            <div class="heading-cart" onclick="window.location.href='/cart'">
                                                <span class="cartImg"><i class="fa fa-shopping-bag" aria-hidden="true"></i></span>
                                                <span class="cartCount count_item_pr" id="cart-total">0</span>
                                            </div>
                                            <div class="top-cart-content hidden-sm hidden-xs">
                                                <ul id="cart-sidebar" class="mini-products-list count_li">
                                                    <li class="list-item">
                                                        <ul></ul>
                                                    </li>
                                                    <li class="action">
                                                        <ul>
                                                            <li class="li-fix-1">
                                                                <div class="top-subtotal">
                                                                    Tổng tiền thanh toán: 
                                                                    <span class="price"></span>
                                                                </div>
                                                            </li>
                                                            <li class="li-fix-2" style="">
                                                                <div class="actions">
                                                                    <a href="/cart" class="btn btn-primary">
                                                                    <span>Giỏ hàng</span>
                                                                    </a>
                                                                    <a href="/checkout" class="btn btn-checkout btn-gray">
                                                                    <span>Thanh toán</span>
                                                                    </a>
                                                                </div>
                                                            </li>
                                                        </ul>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>