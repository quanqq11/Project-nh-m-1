<!DOCTYPE html>
<html lang="vi" class="h-100">

<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Nền tảng - Kiến thức cơ bản về WEB | Bảng tin</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="{{ url('./vendor/bootstrap/css/bootstrap.min.css') }}" type="text/css">
    <!-- Font awesome -->
    <link rel="stylesheet" href="{{ url('./vendor/font-awesome/css/font-awesome.min.css') }}" type="text/css">
<<<<<<< HEAD
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.2/css/all.min.css" integrity="sha512-1sCRPdkRXhBV2PBLUdRb4tMg1w2YPf37qatUFeS7zlBy7jJI8Lf4VHwWfZZfpXtYSLy85pkm9GaYVYMfw5BC1A==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    
=======

>>>>>>> 0181047a971f83579d44536327046c1e4d523cc3
    <!-- Custom css - Các file css do chúng ta tự viết -->
    <link rel="stylesheet" href="{{ url('./css/app.css') }}" type="text/css">
</head>

<body>
    <!-- header -->
<<<<<<< HEAD
    <nav class="navbar navbar-expand-custom navbar-mainbg bg-dark">
        <a class="navbar-brand navbar-logo" href="#">Trang chủ</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
        <form class="form-inline mt-2 mt-md-0" method="get" action="pages/search.html">
                    <input class="form-control mx-0 rounded-left" type="text" placeholder="Tìm kiếm" aria-label="Search"
                        name="keyword_tensanpham">
                    <button class="btn btn-success my-2 my-sm-0 mx-0 rounded-right" type="submit"><i class=" fas fa-thin fa-magnifying-glass"></i></button>
        </form>
=======
    <nav class="navbar navbar-expand-custom navbar-mainbg">
        <a class="navbar-brand navbar-logo" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <i class="fas fa-bars text-white"></i>
        </button>
>>>>>>> 0181047a971f83579d44536327046c1e4d523cc3
        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ml-auto">
                <div class="hori-selector"><div class="left"></div><div class="right"></div></div>
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Sản phẩm</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Liên hệ</a>
=======
                    <a class="nav-link" href="javascript:void(0);"><i class="fas fa-tachometer-alt"></i>Dashboard</a>
                </li>
                <li class="nav-item active">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-address-book"></i>Address Book</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-clone"></i>Components</a>
>>>>>>> 0181047a971f83579d44536327046c1e4d523cc3
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-calendar-alt"></i>Calendar</a>
                </li>
                <li class="nav-item">
<<<<<<< HEAD
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Giỏ hàng</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Đăng nhập</a>
=======
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-chart-bar"></i>Charts</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="javascript:void(0);"><i class="far fa-copy"></i>Documents</a>
>>>>>>> 0181047a971f83579d44536327046c1e4d523cc3
                </li>
            </ul>
        </div>
    </nav>
    <!-- end header -->



    <main role="main">
        <!-- Carousel - Slider -->
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
                <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                <li data-target="#myCarousel" data-slide-to="2" class=""></li>
            </ol>
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img src="{{ url('./img/slider/slider-1.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption text-left">
                            <h1>Nền Tảng - Nơi mua sắm tuyệt vời</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('./img/slider/slider-2.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption">
                            <h1>Hàng triệu sản phẩm - Lựa chọn mỏi tay</h1>
                        </div>
                    </div>
                </div>
                <div class="carousel-item">
                    <img src="{{ url('./img/slider/slider-3.jpg') }}">
                    <div class="container">
                        <div class="carousel-caption text-right">
                            <h1>Chất lượng là Hàng đầu.</h1>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                <span class="carousel-control-prev-icon" aria-hidden="true"></span>
                <span class="sr-only">Previous</span>
            </a>
            <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                <span class="carousel-control-next-icon" aria-hidden="true"></span>
                <span class="sr-only">Next</span>
            </a>
        </div>

        <!-- Tính năng Marketing -->
        <div class="container marketing">
            <!-- Three columns of text below the carousel -->
            <div class="row">
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                        src="{{ url('./img/icon/icon-1.png') }}">
                    <h2>Đặt hàng</h2>
                    <p>Chọn sản phẩm bạn yêu thích, và Đặt hàng.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                        src="{{ url('./img/icon/icon-2.png') }}">
                    <h2>Tạo đơn hàng</h2>
                    <p>Theo dõi đơn hàng của bạn.</p>
                </div><!-- /.col-lg-4 -->
                <div class="col-lg-4">
                    <img class="bd-placeholder-img rounded-circle" width="140" height="140"
                        src="{{ url('./img/icon/icon-3.png') }}">
                    <h2>Giao hàng</h2>
                    <p>Giao hàng tận nơi.</p>
                </div><!-- /.col-lg-4 -->
            </div><!-- /.row -->


            <!-- START THE FEATURETTES -->
            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7">
                    <h2 class="featurette-heading">Đặt hàng, Tạo đơn hàng, Giao hàng <span class="text-muted">Nhanh
                            chóng</span>
                    </h2>
                    <p class="lead">Nơi mua sắm tuyệt vời cho mọi lứa tuổi.</p>
                </div>
                <div class="col-md-5">
                    <img src="{{ url('./img/marketing/marketing-1.png') }}">
                </div>
            </div>

            <hr class="featurette-divider">
            <div class="row featurette">
                <div class="col-md-7 order-md-2">
                    <h2 class="featurette-heading">Báo cáo Doanh thu tuyệt vời <span class="text-muted">Theo dõi đơn
                            hàng của
                            bạn.</span></h2>
                    <p class="lead">Hệ thống theo dõi đơn hàng chi tiết, thông tin mọi lúc mọi nơi.</p>
                </div>
                <div class="col-md-5 order-md-1">
                    <img src="{{ url('./img/marketing/marketing-2.png') }}">
                </div>
            </div>

            <hr class="featurette-divider">
            <!-- /END THE FEATURETTES -->
        </div>

        <!-- Danh sách sản phẩm -->
        <section class="jumbotron text-center">
            <div class="container">
                <h1 class="jumbotron-heading">Danh sách Sản phẩm</h1>
                <p class="lead text-muted">Các sản phẩm với chất lượng, uy tín, cam kết từ nhà Sản xuất, phân phối và
                    bảo hành
                    chính hãng.</p>
            </div>
        </section>

        <!-- Giải thuật duyệt và render Danh sách sản phẩm theo dòng, cột của Bootstrap -->
        <div class="danhsachsanpham py-5 bg-light">
            <div class="container">
                <div class="row">
                    <div class="col-md-4">
                        <div class="card mb-4 shadow-sm">
                            <a href="pages/product-detail.html">
                                <img class="bd-placeholder-img card-img-top" width="100%" height="350"
                                    src="{{ url('./img/product/samsung-s3.webp') }}">
                            </a>
                            <div class="card-body">
                                <a href="pages/product-detail.html">
                                    <h5>Samsung Galaxy S3</h5>
                                </a>
                                <h6>Điện thoại</h6>
                                <p class="card-text">Sản phẩm của Samsung năm 2013</p>
                                <div class="d-flex justify-content-between align-items-center">
                                    <div class="btn-group">
                                        <a class="btn btn-sm btn-outline-secondary"
                                            href="pages/product-detail.html">Xem chi tiết</a>
                                    </div>
                                    <small class="text-muted text-right">
                                        <s>12,600,000.00</s>
                                        <b>12,000,000.00 vnđ</b>
                                    </small>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>   
            </div>
        </div>

        <!-- End block content -->
    </main>

    <!-- footer -->
    <footer class="footer mt-auto py-3">
        <div class="container">
            <span>Bản quyền © bởi <a href="">Nền Tảng</a> - <script>document.write(new Date().getFullYear());</script>.</span>
            <span class="text-muted">Hành trang tới Tương lai</span>

            <p class="float-right">
                <a href="#">Về đầu trang</a>
            </p>
        </div>
    </footer>
    <!-- end footer -->

    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="{{ url('./vendor/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('./vendor/popperjs/popper.min.js') }}"></script>
    <script src="{{ url('./vendor/bootstrap/js/bootstrap.min.js') }}"></script>

    <!-- Custom script - Các file js do mình tự viết -->
<<<<<<< HEAD
    <script src="{{ url('./js/app.js') }}"></script>
    
=======
    <!-- Js -->
    <script src="{{ url('./js/app.js') }}"></script>

>>>>>>> 0181047a971f83579d44536327046c1e4d523cc3
</body>

</html>