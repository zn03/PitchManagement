<!DOCTYPE html>
<head>
    <title>Đặt sân</title>
    <meta name="robots" content="index, archive, follow, noodp">
    <meta name="googlebot" content="index,archive,follow,noodp">
    <meta name="msnbot" content="all,index,follow">
    <meta name="generator" content="NukeViet v4.4">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:title" content="Đặt sân">
    <meta property="og:url" content="index.html">
    <link rel="preload" as="script" href="{{asset('js/jquery/jquery.minf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('js/language/vif361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('js/globalf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('themes/football/js/mainf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('themes/football/js/jquery-migrate-1.4.1.minf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('themes/football/js/html5lightboxf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('themes/football/js/jquery.mmenu.min.allf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('themes/football/js/jquery.slimmenuf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('js/jquery-ui/jquery-ui.minf361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('js/language/jquery.ui.datepicker-vif361.js?t=1696324888')}}">
    <link rel="preload" as="script" href="{{asset('themes/football/js/bootstrap.minf361.js?t=1696324888')}}">
    <link rel="StyleSheet" href="{{asset('css/font-awesome.minf361.css?t=1696324888')}}">
    <link rel="StyleSheet" href="{{asset('themes/football/css/bootstrap.minf361.css?t=1696324888')}}">
    <link rel="StyleSheet" href="{{asset('themes/football/css/stylef361.css?t=1696324888')}}">
    <link rel="StyleSheet" href="{{asset('themes/football/css/style.responsivef361.css?t=1696324888')}}">
    <link rel="StyleSheet" href="{{asset('themes/default/css/book-pitchf361.css?t=1696324888')}}">
    <link rel="stylesheet" href="{{asset('themes/football/css/jquery.mmenu.allf361.css?t=1696324888')}}"/>
    <link rel="stylesheet" type="text/css" media="screen" href="{{asset('themes/football/css/slimmenuf361.css?t=1696324888')}}" />
    <link type="text/css" href="{{asset('js/jquery-ui/jquery-ui.minf361.css?t=1696324888')}}" rel="stylesheet">
    <link rel="stylesheet" href="{{asset('css/client.css')}}">
</head>

<body>
<div class="body-bg">
    <div class="wraper">
        <header>
            <div class="container">
                <div class="row" id="header">
                    <div class="col-xs-24 col-sm-24 col-md-5">
                        <div class="logo">
                            <a title="Totti Stadium" href=""><img src="{{asset('uploads/totti-fianl-01-2.png')}}" width="350"  alt="Totti Stadium" /></a>
                        </div>
                    </div>
                    <div class="col-xs-24 col-sm-24 col-md-19">
                        <div><img alt="CHÁY CÙNG ĐAM MÊ" height="250" src="{{asset('uploads/chay-cung-dam-me.png')}}" width="820" /></div>
                    </div>
                </div>
            </div>
        </header>
    </div>
    <nav class="second-nav" id="menusite">
        <div class="wraper">
            <div class="container">
                <div class="row">
                    <ul class="slimmenu fl">
                        <li>
                            <a title="Trang Chủ" href="{{route('client.index')}}"><em class="fa fa-lg fa-home"></em> Trang Chủ</a>
                        </li>
                        <li >
                            <a title="Đặt Sân" href="{{route('client.booking')}}" >Đặt Sân</a>
                        </li>
                        <li>
                            <a title="Giới Thiệu" href="{{route('client.about')}}" >Giới Thiệu</a>
                        </li>
                        <li >
                            <a title="Tin Tức" href="{{route('client.news')}}" >Tin Tức</a>
                        </li>
                        <li >
                            <a title="Liên Hệ" href="{{route('client.contact')}}" >Liên Hệ</a>
                        </li>
                        <li >
                            <a title="Thành Viên" href="{{route('staffs.login')}}" >Thành Viên</a>
                        </li>
                        <li >
                            <a title="Tìm Kiếm" href="{{route('client.searchBooking')}}" >Tìm Kiếm</a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
    </nav>
    <div class="wraper">
        <section>
            <div class="container" id="body">
                <div class="row">
                </div>
                <div>
                    <div class="row">
                        <div class="col-sm-18 col-md-19 col-sm-push-6 col-md-push-3" id="col-right">
                            <div class="container">
                                <h1>Tra cứu lịch đặt</h1>
                                <div class="search-box">
                                    <form method="post" action="{{route('client.searchBookingProcess')}}">
                                        @csrf
                                        <input type="text" name="customer_phone" placeholder="Nhập số điện thoại đặt sân">
                                        <input type="submit" value="Tra cứu">
                                    </form>
                                </div>
                                <br><br>
                                <table class="table" id="table_id">
                                    <thead>
                                    <tr>
                                        <th scope="col">ID</th>
                                        <th scope="col">Tên Khách Hàng</th>
                                        <th scope="col">Điện Thoại</th>
                                        <th scope="col">Tên Đội</th>
                                        <th scope="col">Ngày Đặt Sân</th>
                                        <th scope="col">Giờ Đặt Sân</th>
                                        <th scope="col">Sân</th>
                                        <th scope="col">Tổng Tiền</th>
                                        <th scope="col">Trạng Thái</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    @foreach($bookings as $booking)
                                        <tr>
                                            <th scope="row">
                                                {{$booking->id}}
                                            </th>
                                            <td>
                                                {{$booking->customer_name}}
                                            </td>
                                            <td>
                                                {{$booking->customer_phone}}
                                            </td>
                                            <td>
                                                {{$booking->customer_nameclub}}
                                            </td>
                                            <td>
                                                {{$booking->booking_date}}
                                            </td>
                                            <td>
                                                {{ $booking->timeline_start }} - {{ $booking->timeline_end }}
                                            </td>
                                            <td>
                                                {{$booking->pitch_number}}
                                            </td>
                                            <td>
                                                {{number_format($booking->current_price, 0, ',', '.')}} VND
                                            </td>
                                            <td>
                                                @if($booking->booking_status == 0)
                                                    <span class="status waiting " >Chờ Xác Nhận</span>
                                                @elseif($booking->booking_status == 1)
                                                    <span class="status inProgress ">Đã Đặt</span>
                                                @elseif($booking->booking_status == 2)
                                                    <span class="status pending ">Đang Đá</span>
                                                @elseif($booking->booking_status == 3)
                                                    <span class="status delivered">Đã Hoàn Thành</span>
                                                @elseif($booking->booking_status == 4)
                                                    <span class="status return ">Đã Hủy</span>
                                                @endif
                                            </td>

                                        </tr>
                                    @endforeach
                                    </tbody>
                                </table>
                            </div>
                            <div class="col-sm-6 col-md-5 col-sm-pull-18 col-md-pull-19">
                                <div class="row">
                                    <div class="fixed-right">
                                        <a href="https://facebook.com" title="Facebook">
                                            <img src="{{asset('themes/football/images/icon-menu-face.png')}}" alt="Facebook"/>
                                        </a>
                                        <a href="https://zalo.me/0918398233" title="Zalo">
                                            <img src="{{asset('themes/football/images/icon-menu-zalo.png')}}" alt="Zalo"/>
                                        </a>
                                        <a href="tel:0918398233" title="0918398233" class="phone">
                                            <img src="{{asset('themes/football/images/icon-menu-phone.png')}}" alt="phone">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>
    <footer id="footer">
        <div class="wraper">
            <div class="container">
                <div class="row">
                    <div class="col-xs-24 col-sm-24 col-md-14">
                        <ul class="company_info" itemscope itemtype="">
                            <li class="hide hidden">
                                <span itemprop="image"></span>
                                <span itemprop="priceRange">N/A</span>
                            </li>
                            <li class="company_name"><span itemprop="name">Sân bóng đá cỏ nhân tạo Bồ Đề</span> (<span itemprop="alternateName"> BoDe STADIUM</span>)</li>
                            <li><a><em class="fa fa-map-marker"></em><span>Địa chỉ: <span itemprop="address" itemscope itemtype=""><span itemprop="addressLocality" class="company-address">Trung tâm Thể thao Bồ Đề - Phường Bồ Đề - Long Biên - Hà Nội</span></span></span></a></li>
                            <li><em class="fa fa-phone"></em><span>Điện thoại: <span itemprop="telephone">091.839.8233</span></span></li>
                            <li><em class="fa fa-envelope"></em><span>Email: <a href=""><span itemprop="email">duynguyen@gmail.com</span></a></span></li>
                            <li><em class="fa fa-globe"></em><span>Website: <a href="" target="_blank"><span itemprop="url">sanbong.com</span></a></span></li>
                        </ul>
                    </div>
                    <div class="col-xs-24 col-sm-24 col-md-10">
                    </div>
                </div>
            </div>
        </div>
        <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>
    </footer>
    <nav class="footerNav2">
        <div class="wraper">
            <div class="container">
                <div class="fl"></div>
                <div class="fr"><div class="copyright">
                        <span>&copy;&nbsp;Bản quyền thuộc về <a href=""> Stadium</a>.&nbsp; </span>
                        <span>Thiết kế bởi <a href="#" target="_blank">DuyyNguyenn</a>.&nbsp; </span>
                    </div>
                </div>
                <div class="clear"></div>
            </div>
        </div>
    </nav>
</div>
<script src="jquery.min.js"></script>


<script src="{{asset('js/jquery/jquery.minf361.js?t=1696324888')}}"></script>
<script src="{{asset('js/language/vif361.js?t=1696324888')}}"></script>
<script src="{{asset('js/globalf361.js?t=1696324888')}}"></script>
<script src="{{asset('themes/football/js/mainf361.js?t=1696324888')}}"></script>
<script src="{{asset('themes/football/js/jquery-migrate-1.4.1.minf361.js?t=1696324888')}}"></script>
<script src="{{asset('themes/football/js/html5lightboxf361.js?t=1696324888')}}"></script>
<script src="{{asset('js/jquery.mmenu.min.allf361.js?t=1696324888')}}"></script>
<script	type="text/javascript" src="{{asset('themes/football/js/jquery.slimmenuf361.js?t=1696324888')}}"></script>
<script src="{{asset('js/jquery-ui/jquery-ui.minf361.js?t=1696324888')}}"></script>
<script type="text/javascript" src="{{asset('js/language/jquery.ui.datepicker-vif361.js?t=1696324888')}}"></script>

<script src="{{asset('themes/football/js/bootstrap.minf361.js?t=1696324888')}}"></script>
</body>

</html>



