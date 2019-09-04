<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Entertainment</title>
</head>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
      integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>
<link rel="stylesheet" href="myStyle.css">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css"/>

<body>
<div class="container">
    <div class="col-12 col-md-12 header">
        <nav class="navbar navbar-expand-lg navbar-light mt-2">
            <a href="#1">
                <img class="navbar-brand" src="images/giatri.png" style="width: 60px">
            </a>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="#2">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#3">World</a>
                    </li>
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#4" id="navbarDropdown" role="button"
                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Category
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#5">Sport</a>
                            <a class="dropdown-item" href="#6">Fashion</a>
                            <a class="dropdown-item" href="#7">Cultural</a>
                            <a class="dropdown-item" href="#8">Women</a>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#9">Premier league</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
                    <button class="btn btn-outline my-2 my-sm-0" type="submit">Search</button>
                </form>
            </div>
        </nav>
    </div>
    <div class="col-12 col-md-12 content mt-2">
        <div class="row">
            <div class="col-12 col-md-8 image">
                <div class="carousel slide" data-ride="carousel">
                    <div class="carousel-inner">
                        <div class="carousel-item" data-interval="4000">
                            <img src="images/tennis1.jpg" alt="" style="width: 720px; height: 390px">
                        </div>
                        <div class="carousel-item active" data-interval="4000">
                            <img src="images/c11.jpg" alt="" style="width: 720px; height: 390px">
                        </div>
                        <div class="carousel-item" data-interval="4000">
                            <img src="images/anh1.jpg" alt="" style="width: 720px; height: 390px">
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4 new">
                <div class="row">
                    <a href="#new">
                        <h3 style="color: darkorange;">News of the day</h3>
                    </a>
                    <div class="media" style="border-style: outset; width: 390px; padding: 5px">
                        <img src="images/vanhau.jpg" alt="" style="width: 100px; height: 70px">
                        <div class="media-body ml-2">
                            <a href="https://www.24h.com.vn/bong-da/van-hau-tung-bung-ra-mat-clb-ha-lan-hoi-hop-cho-da-tran-dau-tien-mo-duoc-dau-ajax-c48a1079822.html">
                                Văn Hậu ra mắt câu lạc bộ Hà Lan
                            </a><br>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <?php echo "1" ?>
                        </div>
                    </div>
                    <div class="media mt-2" style="border-style: outset; width: 390px; padding: 5px">
                        <img src="images/quanghai.jpg" alt="" style="width: 100px; height: 70px">
                        <div class="media-body ml-2">
                            <a href="#11">
                                Màn trình diễn của Quang Hải
                            </a><br>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <?php echo "5" ?>
                        </div>

                    </div>
                    <div class="media mt-2" style="border-style: outset; width: 390px; padding: 5px">
                        <img src="images/c11.jpg" alt="" style="width: 100px; height: 70px">
                        <div class="media-body ml-2">
                            <a href="#12">
                                Ông vua C1 Ronaldo
                            </a><br>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <?php echo "50" ?>
                        </div>
                    </div>
                    <div class="media mt-2" style="border-style: outset; width: 390px; padding: 5px">
                        <img src="images/giamcan.jpg" alt="" style="width: 100px; height: 70px">
                        <div class="media-body ml-2">
                            <a href="#13">
                                Bí quyết giảm cân
                            </a>
                            <br>
                            <i class="fa fa-eye" aria-hidden="true"></i>
                            <?php echo "59" ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 mt-5">
        <div class="row">
            <div class="col-12 col-md-8">

                <a href="#45">
                    <h3><i class="fa fa-fire" aria-hidden="true"></i> Tin nóng trong ngày</h3>
                </a>

                <div class="row">
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 14rem; height: 16rem">
                            <img class="card-img-top" src="images/ahau.jpg" alt="Card image cap">
                            <div class="card-body">

                                <a href="#16"><p class="card-text">Á hậu Kiều Loan đáp trả khi bị người lạ mặt công khai
                                        hỏi giá</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4">
                        <div class="card" style="width: 14rem; height: 16rem">
                            <img class="card-img-top" src="images/1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a href="#17"><p class="card-text">Cuộc đời và sự nghiệp của Cristiano Ronaldo</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <div class="card" style="width: 14rem; height: 16rem">
                            <img class="card-img-top" src="images/anh1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a href="#18"><p class="card-text">Thế giới Ngoại hạng Anh</p>
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-4 mt-2">
                        <div class="card" style="width: 14rem; height: 16rem">
                            <img class="card-img-top" src="images/tennis1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a href="#19"><p class="card-text">Những pha xử lý hay của Tàu tốc hành</p>
                                </a>
                            </div>
                        </div>
                    </div>

                </div>

                <a href="#25">
                    <h3><i class="fa fa-futbol-o" aria-hidden="true"></i> Bóng đá</h3>
                </a><br>
                <div class="row">
                    <div class="col-12 col-md-6 mt-3">
                        <div class="card" style="width: 22rem; height: 18rem">
                            <img class="card-img-top" src="images/anh1.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a href="#18"><p class="card-text">Thế giới Ngoại hạng Anh</p>
                                </a>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "59" ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2">
                        <div class="media mt-2" style="border-style: outset; width: 350px; padding: 5px">
                            <img src="images/c11.jpg" alt="" style="width: 100px; height: 70px">
                            <div class="media-body ml-2">
                                <a href="#12">
                                    Ông vua C1 Ronaldo
                                </a><br>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "50" ?>
                            </div>
                        </div>
                        <div class="media mt-2" style="border-style: outset; width: 350px; padding: 5px">
                            <img src="images/c11.jpg" alt="" style="width: 100px; height: 70px">
                            <div class="media-body ml-2">
                                <a href="#12">
                                    Ông vua C1 Ronaldo
                                </a><br>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "50" ?>
                            </div>
                        </div>
                        <div class="media mt-2" style="border-style: outset; width: 350px; padding: 5px">
                            <img src="images/quanghai.jpg" alt="" style="width: 100px; height: 70px">
                            <div class="media-body ml-2">
                                <a href="#12">
                                    Màn trình diễn của Quang Hải
                                </a><br>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "5" ?>
                            </div>
                        </div>
                    </div>
                </div>

                <a href="#25">
                    <h3><i class="fa fa-users" aria-hidden="true"></i> Văn Hóa</h3>
                </a><br>
                <div class="row">
                    <div class="col-12 col-md-6 mt-3">
                        <div class="card" style="width: 22rem; height: 19rem">
                            <img class="card-img-top" src="images/ahau.jpg" alt="Card image cap">
                            <div class="card-body">
                                <a href="#18"><p class="card-text">Á hậu Kiều Loan đáp trả khi bị người lạ mặt công khai
                                        hỏi giá</p>
                                </a>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "20" ?>
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-md-6 mt-2">
                        <div class="media mt-2" style="border-style: outset; width: 350px; padding: 5px">
                            <img src="images/thuquynh.jpg" alt="" style="width: 100px; height: 70px">
                            <div class="media-body ml-2">
                                <a href="#12">
                                    My Sói: Tôi không thể đóng vai ác suốt được
                                </a><br>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "10" ?>
                            </div>
                        </div>
                        <div class="media mt-2" style="border-style: outset; width: 350px; padding: 5px">
                            <img src="images/c11.jpg" alt="" style="width: 100px; height: 70px">
                            <div class="media-body ml-2">
                                <a href="#12">
                                    Ông vua C1 Ronaldo
                                </a><br>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "50" ?>
                            </div>
                        </div>
                        <div class="media mt-2" style="border-style: outset; width: 350px; padding: 5px">
                            <img src="images/datviet.jpg" alt="" style="width: 100px; height: 70px">
                            <div class="media-body ml-2">
                                <a href="#12">
                                    Vụ kiện truyện thần đồng Đất Việt
                                </a><br>
                                <i class="fa fa-eye" aria-hidden="true"></i>
                                <?php echo "21" ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-4">
                <div class="row">
                    <div class="col-12 col-md-12">
                        <a href="#43">
                            <h5 style="color: orange"><i class="fa fa-eye" aria-hidden="true"></i>
                                Tin nhiều lượt xem</h5>
                            <div class="media mt-2" style="border-style: outset; width: 390px; padding: 5px">
                                <img src="images/giamcan.jpg" alt="" style="width: 100px; height: 70px">
                                <div class="media-body ml-2">
                                    <a href="#13">
                                        Bí quyết giảm cân
                                    </a>
                                    <br>
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <?php echo "59" ?>
                                </div>
                            </div>
                            <div class="media mt-2" style="border-style: outset; width: 390px; padding: 5px">
                                <img src="images/anh1.jpg" alt="" style="width: 100px; height: 70px">
                                <div class="media-body ml-2">
                                    <a href="#12">
                                        Thế giới ngoại hạng Anh
                                    </a><br>
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <?php echo "59" ?>
                                </div>
                            </div>
                            <div class="media mt-2" style="border-style: outset; width: 390px; padding: 5px">
                                <img src="images/c11.jpg" alt="" style="width: 100px; height: 70px">
                                <div class="media-body ml-2">
                                    <a href="#12">
                                        Ông vua C1 Ronaldo
                                    </a><br>
                                    <i class="fa fa-eye" aria-hidden="true"></i>
                                    <?php echo "50" ?>
                                </div>
                            </div>
                        </a>
                    </div>
                    <div class="col-12 col-md-12 mt-5">
                        <a href="https://tocotocotea.com/">
                            <h5 style="color: orange">Good luck new day</h5>
                            <img src="images/tea.jpg" alt="" style="width: 200px; height: 250px"><br>
                        </a>
                    </div>
                    <div class="col-12 col-md-12 mt-2">
                        <a href="https://nhacaiso.vn/bet88/">
                            <img src="images/fabet88.jpg" alt="" style="width: 200px; height: 250px"><br>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="col-12 col-md-12 footer text-center mt-5">
        <div class="row">
            <div class="col-12 col-md-7">
                <img src="images/giatri.png" alt="" style="width: 100px"><br>
                <p style="text-align: left">
                    Giấy phép xuất bản số 298/GP - BTTTT cấp ngày 29.7.2013<br>
                    © 2003-2018 Bản quyền thuộc về Báo Thanh Niên.Cấm sao chép dưới mọi hình thức nếu không có sự chấp
                    thuận bằng văn bản.<br>
                    Phát triển bởi &copy;vanlinh.
                </p>
            </div>
            <div class="col-12 col-md-5 ">
                <a href="#">Đặt báo</a>
                <a href="#">Quảng Cáo</a>
                <a href="#">Thông tin tòa soạn</a>
                <a href="#"></a><br>
                <p style="text-align: left">
                    Tổng biên tập: Nguyễn Quang Thông<br>
                    Phó tổng biên tập: Hải Thành<br>
                    Phó tổng biên tập: Nguyễn Ngọc Toàn<br>
                    Phó tổng biên tập: Đặng Thị Phương Thảo<br>
                    Ủy viên Ban biên tập - Tổng Thư ký tòa soạn: Trần Việt Hưng
                </p>
            </div>
        </div>

    </div>
</div>
</body>
</html>





