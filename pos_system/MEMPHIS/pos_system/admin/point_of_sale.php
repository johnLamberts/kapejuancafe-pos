<?php 
session_start();
include("./config/dbcon.php");



include("./partials/_head-sales.php");

?>

<body>
<div class="page-wrapper ms-0" style="min-height: 592px">
      <div class="content">
        <div class="row">
          <div class="col-lg-8 col-sm-12 tabs_wrapper">
            <div class="page-header">
              <div class="page-title">
                <h4>Categories</h4>
                <h6>Manage your purchases</h6>
              </div>
            </div>
            <ul
              class="tabs owl-carousel owl-theme owl-product border-0 owl-loaded"
            >
              <div class="owl-stage-outer">
                <div
                  class="owl-stage"
                  style="
                    transform: translate3d(0px, 0px, 0px);
                    transition: all 0s ease 0s;
                    width: 1569px;
                  "
                >
                  <div
                    class="owl-item active"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li class="active" id="fruits">
                      <div class="product-details">
                        <img src="assets/img/product/product62.png" alt="img" />
                        <h6>Cafe</h6>
                      </div>
                    </li>
                  </div>
                  <div
                    class="owl-item active"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="headphone" class="">
                      <div class="product-details">
                        <img src="assets/img/product/product63.png" alt="img" />
                        <h6>Headphones</h6>
                      </div>
                    </li>
                  </div>
                  <div
                    class="owl-item active"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="Accessories">
                      <div class="product-details">
                        <img src="assets/img/product/product64.png" alt="img" />
                        <h6>Accessories</h6>
                      </div>
                    </li>
                  </div>
                  <div
                    class="owl-item active"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="Shoes">
                      <a class="product-details">
                        <img src="assets/img/product/product65.png" alt="img" />
                        <h6>Shoes</h6>
                      </a>
                    </li>
                  </div>
                  <div
                    class="owl-item active"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="computer">
                      <a class="product-details">
                        <img src="assets/img/product/product66.png" alt="img" />
                        <h6>Computer</h6>
                      </a>
                    </li>
                  </div>
                  <div
                    class="owl-item"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="Snacks">
                      <a class="product-details">
                        <img src="assets/img/product/product67.png" alt="img" />
                        <h6>Snacks</h6>
                      </a>
                    </li>
                  </div>
                  <div
                    class="owl-item"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="watch">
                      <a class="product-details">
                        <img src="assets/img/product/product68.png" alt="img" />
                        <h6>Watches</h6>
                      </a>
                    </li>
                  </div>
                  <div
                    class="owl-item"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="cycle">
                      <a class="product-details">
                        <img src="assets/img/product/product61.png" alt="img" />
                        <h6>Cycles</h6>
                      </a>
                    </li>
                  </div>
                  <div
                    class="owl-item"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="fruits1">
                      <div class="product-details">
                        <img src="assets/img/product/product62.png" alt="img" />
                        <h6>Fruits</h6>
                      </div>
                    </li>
                  </div>
                  <div
                    class="owl-item"
                    style="width: 146.864px; margin-right: 10px"
                  >
                    <li id="headphone1">
                      <div class="product-details">
                        <img src="assets/img/product/product63.png" alt="img" />
                        <h6>Headphones</h6>
                      </div>
                    </li>
                  </div>
                </div>
              </div>
              <div class="owl-nav">
                <button
                  type="button"
                  role="presentation"
                  class="owl-prev disabled"
                >
                  <span aria-label="Previous">‹</span></button
                ><button type="button" role="presentation" class="owl-next">
                  <span aria-label="Next">›</span>
                </button>
              </div>
              <div class="owl-dots disabled"></div>
            </ul>
            <div class="tabs_container">
              <div class="tab_content active" data-tab="fruits">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill active">
                      <div class="productsetimg">
                        <img src="assets/img/product/product29.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Orange</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product31.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Strawberry</h4>
                        <h6>15.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product35.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Banana</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product37.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Limon</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product54.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Apple</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="headphone">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product44.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Headphones</h5>
                        <h4>Earphones</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product45.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Headphones</h5>
                        <h4>Earphones</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product36.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Headphones</h5>
                        <h4>Earphones</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="Accessories">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product32.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Accessories</h5>
                        <h4>Sunglasses</h4>
                        <h6>15.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product46.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Accessories</h5>
                        <h4>Pendrive</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product55.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Accessories</h5>
                        <h4>Mouse</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="Shoes">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product60.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Shoes</h5>
                        <h4>Red nike</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="computer">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product56.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Computers</h5>
                        <h4>Desktop</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="Snacks">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product47.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Snacks</h5>
                        <h4>Duck Salad</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product48.png" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Snacks</h5>
                        <h4>Breakfast board</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product57.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Snacks</h5>
                        <h4>California roll</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product58.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Snacks</h5>
                        <h4>Sashimi</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="watch">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product49.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h4>Watch</h4>
                        <h5>Watch</h5>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product51.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                      </div>
                      <div class="productsetcontent">
                        <h4>Watch</h4>
                        <h5>Watch</h5>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="cycle">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product52.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h4>Cycle</h4>
                        <h5>Cycle</h5>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product53.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h4>Cycle</h4>
                        <h5>Cycle</h5>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="fruits1">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product29.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Orange</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product31.jpg" alt="img" />
                        <h6>Qty: 1.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Strawberry</h4>
                        <h6>15.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product35.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Banana</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product37.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Fruits</h5>
                        <h4>Limon</h4>
                        <h6>1500.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tab_content" data-tab="headphone1">
                <div class="row">
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product44.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Headphones</h5>
                        <h4>Earphones</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product45.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Headphones</h5>
                        <h4>Earphones</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-3 col-sm-6 d-flex">
                    <div class="productset flex-fill">
                      <div class="productsetimg">
                        <img src="assets/img/product/product36.jpg" alt="img" />
                        <h6>Qty: 5.00</h6>
                        <div class="check-product">
                          <i class="fa fa-check"></i>
                        </div>
                      </div>
                      <div class="productsetcontent">
                        <h5>Headphones</h5>
                        <h4>Earphones</h4>
                        <h6>150.00</h6>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
          <div class="col-lg-4 col-sm-12">
            <div class="order-list">
              <div class="orderid">
                <h4>Order List</h4>
                <h5>Transaction id : #65565</h5>
              </div>
              <div class="actionproducts">
                <ul>
                  <li>
                    <a href="javascript:void(0);" class="deletebg confirm-text"
                      ><img src="assets/img/icons/delete-2.svg" alt="img"
                    /></a>
                  </li>
                  <li>
                    <a
                      href="javascript:void(0);"
                      data-bs-toggle="dropdown"
                      aria-expanded="false"
                      class="dropset"
                    >
                      <img src="assets/img/icons/ellipise1.svg" alt="img" />
                    </a>
                    <ul
                      class="dropdown-menu"
                      aria-labelledby="dropdownMenuButton"
                      data-popper-placement="bottom-end"
                    >
                      <li>
                        <a href="#" class="dropdown-item">Action</a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item">Another Action</a>
                      </li>
                      <li>
                        <a href="#" class="dropdown-item">Something Elses</a>
                      </li>
                    </ul>
                  </li>
                </ul>
              </div>
            </div>
            <div class="card card-order">
              <div class="card-body">
                <div class="row">
                  <div class="col-12">
                    <a
                      href="javascript:void(0);"
                      class="btn btn-adds"
                      data-bs-toggle="modal"
                      data-bs-target="#create"
                      ><i class="fa fa-plus me-2"></i>Add Customer</a
                    >
                  </div>
                  <div class="col-lg-12">
                    <div class="select-split">
                      <div class="select-group w-100">
                        <select
                          class="select select2-hidden-accessible"
                          data-select2-id="1"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <option data-select2-id="3">Walk-in Customer</option>
                          <option>Chris Moris</option></select
                        ><span
                          class="select2 select2-container select2-container--default"
                          dir="ltr"
                          data-select2-id="2"
                          style="width: 100%"
                          ><span class="selection"
                            ><span
                              class="select2-selection select2-selection--single"
                              role="combobox"
                              aria-haspopup="true"
                              aria-expanded="false"
                              tabindex="0"
                              aria-disabled="false"
                              aria-labelledby="select2-mwb8-container"
                              ><span
                                class="select2-selection__rendered"
                                id="select2-mwb8-container"
                                role="textbox"
                                aria-readonly="true"
                                title="Walk-in Customer"
                                >Walk-in Customer</span
                              ><span
                                class="select2-selection__arrow"
                                role="presentation"
                                ><b role="presentation"></b></span></span></span
                          ><span
                            class="dropdown-wrapper"
                            aria-hidden="true"
                          ></span
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="select-split">
                      <div class="select-group w-100">
                        <select
                          class="select select2-hidden-accessible"
                          data-select2-id="4"
                          tabindex="-1"
                          aria-hidden="true"
                        >
                          <option data-select2-id="6">Product</option>
                          <option>Barcode</option></select
                        ><span
                          class="select2 select2-container select2-container--default"
                          dir="ltr"
                          data-select2-id="5"
                          style="width: 100%"
                          ><span class="selection"
                            ><span
                              class="select2-selection select2-selection--single"
                              role="combobox"
                              aria-haspopup="true"
                              aria-expanded="false"
                              tabindex="0"
                              aria-disabled="false"
                              aria-labelledby="select2-rw8g-container"
                              ><span
                                class="select2-selection__rendered"
                                id="select2-rw8g-container"
                                role="textbox"
                                aria-readonly="true"
                                title="Product "
                                >Product </span
                              ><span
                                class="select2-selection__arrow"
                                role="presentation"
                                ><b role="presentation"></b></span></span></span
                          ><span
                            class="dropdown-wrapper"
                            aria-hidden="true"
                          ></span
                        ></span>
                      </div>
                    </div>
                  </div>
                  <div class="col-12">
                    <div class="text-end">
                      <a class="btn btn-scanner-set"
                        ><img
                          src="assets/img/icons/scanner1.svg"
                          alt="img"
                          class="me-2"
                        />Scan bardcode</a
                      >
                    </div>
                  </div>
                </div>
              </div>
              <div class="split-card"></div>
              <div class="card-body pt-0">
                <div class="totalitem">
                  <h4>Total items : 4</h4>
                  <a href="javascript:void(0);">Clear all</a>
                </div>
                <div class="product-table">
                  <ul class="product-lists">
                    <li>
                      <div class="productimg">
                        <div class="productimgs">
                          <img
                            src="assets/img/product/product30.jpg"
                            alt="img"
                          />
                        </div>
                        <div class="productcontet">
                          <h4>
                            Pineapple
                            <a
                              href="javascript:void(0);"
                              class="ms-2"
                              data-bs-toggle="modal"
                              data-bs-target="#edit"
                              ><img src="assets/img/icons/edit-5.svg" alt="img"
                            /></a>
                          </h4>
                          <div class="productlinkset">
                            <h5>PT001</h5>
                          </div>
                          <div class="increment-decrement">
                            <div class="input-groups">
                              <input
                                type="button"
                                value="-"
                                class="button-minus dec button"
                              />
                              <input
                                type="text"
                                name="child"
                                value="0"
                                class="quantity-field"
                              />
                              <input
                                type="button"
                                value="+"
                                class="button-plus inc button"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>3000.00</li>
                    <li>
                      <a class="confirm-text" href="javascript:void(0);"
                        ><img src="assets/img/icons/delete-2.svg" alt="img"
                      /></a>
                    </li>
                  </ul>
                  <ul class="product-lists">
                    <li>
                      <div class="productimg">
                        <div class="productimgs">
                          <img
                            src="assets/img/product/product34.jpg"
                            alt="img"
                          />
                        </div>
                        <div class="productcontet">
                          <h4>
                            Green Nike
                            <a
                              href="javascript:void(0);"
                              class="ms-2"
                              data-bs-toggle="modal"
                              data-bs-target="#edit"
                              ><img src="assets/img/icons/edit-5.svg" alt="img"
                            /></a>
                          </h4>
                          <div class="productlinkset">
                            <h5>PT001</h5>
                          </div>
                          <div class="increment-decrement">
                            <div class="input-groups">
                              <input
                                type="button"
                                value="-"
                                class="button-minus dec button"
                              />
                              <input
                                type="text"
                                name="child"
                                value="0"
                                class="quantity-field"
                              />
                              <input
                                type="button"
                                value="+"
                                class="button-plus inc button"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>3000.00</li>
                    <li>
                      <a class="confirm-text" href="javascript:void(0);"
                        ><img src="assets/img/icons/delete-2.svg" alt="img"
                      /></a>
                    </li>
                  </ul>
                  <ul class="product-lists">
                    <li>
                      <div class="productimg">
                        <div class="productimgs">
                          <img
                            src="assets/img/product/product35.jpg"
                            alt="img"
                          />
                        </div>
                        <div class="productcontet">
                          <h4>
                            Banana
                            <a
                              href="javascript:void(0);"
                              class="ms-2"
                              data-bs-toggle="modal"
                              data-bs-target="#edit"
                              ><img src="assets/img/icons/edit-5.svg" alt="img"
                            /></a>
                          </h4>
                          <div class="productlinkset">
                            <h5>PT001</h5>
                          </div>
                          <div class="increment-decrement">
                            <div class="input-groups">
                              <input
                                type="button"
                                value="-"
                                class="button-minus dec button"
                              />
                              <input
                                type="text"
                                name="child"
                                value="0"
                                class="quantity-field"
                              />
                              <input
                                type="button"
                                value="+"
                                class="button-plus inc button"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>3000.00</li>
                    <li>
                      <a class="confirm-text" href="javascript:void(0);"
                        ><img src="assets/img/icons/delete-2.svg" alt="img"
                      /></a>
                    </li>
                  </ul>
                  <ul class="product-lists">
                    <li>
                      <div class="productimg">
                        <div class="productimgs">
                          <img
                            src="assets/img/product/product31.jpg"
                            alt="img"
                          />
                        </div>
                        <div class="productcontet">
                          <h4>
                            Strawberry
                            <a
                              href="javascript:void(0);"
                              class="ms-2"
                              data-bs-toggle="modal"
                              data-bs-target="#edit"
                              ><img src="assets/img/icons/edit-5.svg" alt="img"
                            /></a>
                          </h4>
                          <div class="productlinkset">
                            <h5>PT001</h5>
                          </div>
                          <div class="increment-decrement">
                            <div class="input-groups">
                              <input
                                type="button"
                                value="-"
                                class="button-minus dec button"
                              />
                              <input
                                type="text"
                                name="child"
                                value="0"
                                class="quantity-field"
                              />
                              <input
                                type="button"
                                value="+"
                                class="button-plus inc button"
                              />
                            </div>
                          </div>
                        </div>
                      </div>
                    </li>
                    <li>3000.00</li>
                    <li>
                      <a class="confirm-text" href="javascript:void(0);"
                        ><img src="assets/img/icons/delete-2.svg" alt="img"
                      /></a>
                    </li>
                  </ul>
                </div>
              </div>
              <div class="split-card"></div>
              <div class="card-body pt-0 pb-2">
                <div class="setvalue">
                  <ul>
                    <li>
                      <h5>Subtotal</h5>
                      <h6>55.00$</h6>
                    </li>
                    <li>
                      <h5>Tax</h5>
                      <h6>5.00$</h6>
                    </li>
                    <li class="total-value">
                      <h5>Total</h5>
                      <h6>60.00$</h6>
                    </li>
                  </ul>
                </div>
                <div class="setvaluecash">
                  <ul>
                    <li>
                      <a href="javascript:void(0);" class="paymentmethod">
                        <img
                          src="assets/img/icons/cash.svg"
                          alt="img"
                          class="me-2"
                        />
                        Cash
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="paymentmethod">
                        <img
                          src="assets/img/icons/debitcard.svg"
                          alt="img"
                          class="me-2"
                        />
                        Debit
                      </a>
                    </li>
                    <li>
                      <a href="javascript:void(0);" class="paymentmethod">
                        <img
                          src="assets/img/icons/scan.svg"
                          alt="img"
                          class="me-2"
                        />
                        Scan
                      </a>
                    </li>
                  </ul>
                </div>
                <div class="btn-totallabel">
                  <h5>Checkout</h5>
                  <h6>60.00$</h6>
                </div>
                <div class="btn-pos">
                  <ul>
                    <li>
                      <a class="btn"
                        ><img
                          src="assets/img/icons/pause1.svg"
                          alt="img"
                          class="me-1"
                        />Hold</a
                      >
                    </li>
                    <li>
                      <a class="btn"
                        ><img
                          src="assets/img/icons/edit-6.svg"
                          alt="img"
                          class="me-1"
                        />Quotation</a
                      >
                    </li>
                    <li>
                      <a class="btn"
                        ><img
                          src="assets/img/icons/trash12.svg"
                          alt="img"
                          class="me-1"
                        />Void</a
                      >
                    </li>
                    <li>
                      <a class="btn"
                        ><img
                          src="assets/img/icons/wallet1.svg"
                          alt="img"
                          class="me-1"
                        />Payment</a
                      >
                    </li>
                    <li>
                      <a
                        class="btn"
                        data-bs-toggle="modal"
                        data-bs-target="#recents"
                        ><img
                          src="assets/img/icons/transcation.svg"
                          alt="img"
                          class="me-1"
                        />
                        Transaction</a
                      >
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
</body>