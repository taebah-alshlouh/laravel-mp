@extends('layouts.master')
@section('title','shop')
@section('content')
    <div class="page-banner bg-img bg-img-parallax overlay-dark" style="background-image: url(https://t3.ftcdn.net/jpg/02/64/92/28/360_F_264922838_NErJEovZiP9MTa49apqL1Vs3f88ZT8Dg.jpg);">
      <div class="container h-100">
        <div class="row justify-content-center align-items-center h-100">
          <div class="col-lg-8">
            <h1 class="fg-white text-center">Shop Now</h1>
            <nav aria-label="breadcrumb">
              <ol class="breadcrumb breadcrumb-dark bg-transparent justify-content-center py-0">
                <li class="breadcrumb-item"><a href="/">Home</a></li>
                <li class="breadcrumb-item active" aria-current="page">Shop</li>
              </ol>
            </nav>
          </div>
        </div>
      </div>
    </div> <!-- .page-banner -->
  </header>

  <main>
    <!-- Shop Start -->
    <div class="container-fluid pt-5">
      <div class="row px-xl-5">
          <!-- Shop Sidebar Start -->
          <div class="col-lg-3 col-md-12">
              <!-- Price Start -->
              <div class="border-bottom mb-4 pb-4">
                  <h5 class="font-weight-semi-bold mb-4">Filter by price</h5>
                  <form>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" checked id="price-all">
                          <label class="custom-control-label" for="price-all">All Price</label>
                          <span class="badge border font-weight-normal">1000</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="price-1">
                          <label class="custom-control-label" for="price-1">$0 - $100</label>
                          <span class="badge border font-weight-normal">150</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="price-2">
                          <label class="custom-control-label" for="price-2">$100 - $200</label>
                          <span class="badge border font-weight-normal">295</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="price-3">
                          <label class="custom-control-label" for="price-3">$200 - $300</label>
                          <span class="badge border font-weight-normal">246</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="price-4">
                          <label class="custom-control-label" for="price-4">$300 - $400</label>
                          <span class="badge border font-weight-normal">145</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                          <input type="checkbox" class="custom-control-input" id="price-5">
                          <label class="custom-control-label" for="price-5">$400 - $500</label>
                          <span class="badge border font-weight-normal">168</span>
                      </div>
                  </form>
              </div>
              <!-- Price End -->
              
              <!-- Color Start -->
              <div class="border-bottom mb-4 pb-4">
                  <h5 class="font-weight-semi-bold mb-4">Filter by color</h5>
                  <form>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" checked id="color-all">
                          <label class="custom-control-label" for="price-all">All Color</label>
                          <span class="badge border font-weight-normal">1000</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="color-1">
                          <label class="custom-control-label" for="color-1">Black</label>
                          <span class="badge border font-weight-normal">150</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="color-2">
                          <label class="custom-control-label" for="color-2">White</label>
                          <span class="badge border font-weight-normal">295</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="color-3">
                          <label class="custom-control-label" for="color-3">Red</label>
                          <span class="badge border font-weight-normal">246</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="color-4">
                          <label class="custom-control-label" for="color-4">Blue</label>
                          <span class="badge border font-weight-normal">145</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                          <input type="checkbox" class="custom-control-input" id="color-5">
                          <label class="custom-control-label" for="color-5">Green</label>
                          <span class="badge border font-weight-normal">168</span>
                      </div>
                  </form>
              </div>
              <!-- Color End -->

              <!-- Size Start -->
              <div class="mb-5">
                  <h5 class="font-weight-semi-bold mb-4">Filter by size</h5>
                  <form>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" checked id="size-all">
                          <label class="custom-control-label" for="size-all">All Size</label>
                          <span class="badge border font-weight-normal">1000</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="size-1">
                          <label class="custom-control-label" for="size-1">XS</label>
                          <span class="badge border font-weight-normal">150</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="size-2">
                          <label class="custom-control-label" for="size-2">S</label>
                          <span class="badge border font-weight-normal">295</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="size-3">
                          <label class="custom-control-label" for="size-3">M</label>
                          <span class="badge border font-weight-normal">246</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between mb-3">
                          <input type="checkbox" class="custom-control-input" id="size-4">
                          <label class="custom-control-label" for="size-4">L</label>
                          <span class="badge border font-weight-normal">145</span>
                      </div>
                      <div class="custom-control custom-checkbox d-flex align-items-center justify-content-between">
                          <input type="checkbox" class="custom-control-input" id="size-5">
                          <label class="custom-control-label" for="size-5">XL</label>
                          <span class="badge border font-weight-normal">168</span>
                      </div>
                  </form>
              </div>
              <!-- Size End -->
          </div>
          <!-- Shop Sidebar End -->


          <!-- Shop Product Start -->
          <div class="col-lg-9 col-md-12">
              <div class="row pb-3">
                  <div class="col-12 pb-1">
                      <div class="d-flex align-items-center justify-content-between mb-4">
                          <form action="">
                              <div class="input-group">
                                  <input type="text" class="form-control" placeholder="Search by name">
                                  <div class="input-group-append">
                                      <span class="input-group-text bg-transparent text-primary">
                                          <i class="fa fa-search"></i>
                                      </span>
                                  </div>
                              </div>
                          </form>
                          <div class="dropdown ml-4">
                              <button class="btn border dropdown-toggle" type="button" id="triggerId" data-toggle="dropdown" aria-haspopup="true"
                                      aria-expanded="false">
                                          Sort by
                                      </button>
                              <div class="dropdown-menu dropdown-menu-right" aria-labelledby="triggerId">
                                  <a class="dropdown-item" href="#">Latest</a>
                                  <a class="dropdown-item" href="#">Popularity</a>
                                  <a class="dropdown-item" href="#">Best Rating</a>
                              </div>
                          </div>
                      </div>
                  </div>
                  <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                      <div class="card product-item border-0 mb-4">
                          <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                              <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                          </div>
                          <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                              <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                              <div class="d-flex justify-content-center">
                                  <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                              </div>
                          </div>
                          <div class="card-footer d-flex justify-content-between bg-light border">
                              <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                              <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                          </div>
                      </div>
                  </div>
      
                  {{-- <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                      <div class="card product-item border-0 mb-4">
                          <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                              <img class="img-fluid w-100" src="img/product-8.jpg" alt="">
                          </div>
                          <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                              <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                              <div class="d-flex justify-content-center">
                                  <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                              </div>
                          </div>
                          <div class="card-footer d-flex justify-content-between bg-light border">
                              <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                              <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                          </div>
                      </div>
                  </div> --}}
                  {{-- <div class="col-lg-4 col-md-6 col-sm-12 pb-1">
                      <div class="card product-item border-0 mb-4">
                          <div class="card-header product-img position-relative overflow-hidden bg-transparent border p-0">
                              <img class="img-fluid w-100" src="img/product-1.jpg" alt="">
                          </div>
                          <div class="card-body border-left border-right text-center p-0 pt-4 pb-3">
                              <h6 class="text-truncate mb-3">Colorful Stylish Shirt</h6>
                              <div class="d-flex justify-content-center">
                                  <h6>$123.00</h6><h6 class="text-muted ml-2"><del>$123.00</del></h6>
                              </div>
                          </div>
                          <div class="card-footer d-flex justify-content-between bg-light border">
                              <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-eye text-primary mr-1"></i>View Detail</a>
                              <a href="" class="btn btn-sm text-dark p-0"><i class="fas fa-shopping-cart text-primary mr-1"></i>Add To Cart</a>
                          </div>
                      </div>
                  </div> --}}
                  <div class="col-12 pb-1">
                      <nav aria-label="Page navigation">
                        <ul class="pagination justify-content-center mb-3">
                          <li class="page-item disabled">
                            <a class="page-link" href="#" aria-label="Previous">
                              <span aria-hidden="true">&laquo;</span>
                              <span class="sr-only">Previous</span>
                            </a>
                          </li>
                          <li class="page-item active"><a class="page-link" href="#">1</a></li>
                          <li class="page-item"><a class="page-link" href="#">2</a></li>
                          <li class="page-item"><a class="page-link" href="#">3</a></li>
                          <li class="page-item">
                            <a class="page-link" href="#" aria-label="Next">
                              <span aria-hidden="true">&raquo;</span>
                              <span class="sr-only">Next</span>
                            </a>
                          </li>
                        </ul>
                      </nav>
                  </div>
              </div>
          </div>
          <!-- Shop Product End -->
      </div>
  </div>
  <!-- Shop End -->

    {{-- <div class="page-section">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="row">
              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="/product-single">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-md-6 col-lg-4 py-3">
                <div class="card-blog">
                  <div class="header">
                    <div class="avatar">
                      <img src="../assets/img/person/person_1.jpg" alt="">
                    </div>
                    <div class="entry-footer">
                      <div class="post-author">Sam Newman</div>
                      <a href="#" class="post-date">23 Apr 2020</a>
                    </div>
                  </div>
                  <div class="body">
                    <div class="post-title"><a href="product-single.html">What is Business Management?</a></div>
                    <div class="post-excerpt">Lorem, ipsum dolor sit amet consectetur adipisicing elit.</div>
                  </div>
                  <div class="footer">
                    <a href="product-single.html">Read More <span class="mai-chevron-forward text-sm"></span></a>
                  </div>
                </div>
              </div>

              <div class="col-12 my-5">
                <nav aria-label="Page Navigation">
                  <ul class="pagination justify-content-center">
                    <li class="page-item disabled">
                      <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                    </li>
                    <li class="page-item active" aria-current="page">
                      <a class="page-link" href="#">1 <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="page-item">
                      <a class="page-link" href="#">2</a>
                    </li>
                    <li class="page-item"><a class="page-link" href="#">3</a></li>
                    <li class="page-item">
                      <a class="page-link" href="#">Next</a>
                    </li>
                  </ul>
                </nav>
              </div>
              
            </div>
          </div>
          
        </div>
      </div> <!-- .container -->
    </div> <!-- .page-section --> --}}
  </main>
@endsection
