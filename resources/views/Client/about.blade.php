<!DOCTYPE html>
<head>
    <title>Đặt sân</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta property="og:title" content="Đặt sân">
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
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            margin: 0;
            padding: 0;
        }

        h1 {
            font-size: 24px;
            color: #333;
        }

        p {
            font-size: 16px;
            color: #555;
        }
    </style>
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
                            <a title="Tìm Kiếm" href="{{route('client.searchBooking')}}">Tìm Kiếm</a>
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
                            <h1>Giới Thiệu Về Sân Bóng</h1>
                            <p>
                                Một sân bóng lớn gồm nhiều sân khác nhau là một cơ sở thể thao đa dạng, thường có nhiều sân bóng khác nhau được xây dựng trên cùng một khu đất hoặc trong cùng một cơ sở thể thao. Đây là một sự kết hợp hoàn hảo để đáp ứng nhu cầu của nhiều người tham gia thể thao, từ những trận đấu bóng đá thân mật cho đến các giải đấu và sự kiện thể thao lớn hơn.
                            </p>
                            <p>
                                1. Số lượng sân và đa dạng sân chơi: Sân bóng lớn thường có nhiều sân bóng với kích thước và loại sân khác nhau. Có thể có sân bóng 11 người, sân bóng 7 người, sân bóng 5 người, sân cỏ nhân tạo, sân cỏ tự nhiên, và nhiều loại sân chơi khác. Điều này giúp phục vụ nhu cầu đa dạng của người chơi.
                            </p>
                            <p>
                                2. Cơ sở vật chất: Sân bóng lớn thường được trang bị cơ sở vật chất tốt như ánh sáng chiếu sáng ban đêm, khu vực sân thi đấu rộng rãi, hệ thống lưới bảo vệ để ngăn bóng bay ra ngoài, khán đài cho khán giả và khu vực nghỉ ngơi.
                            </p>
                            <p>
                                3. Sự kiện và giải đấu: Sân bóng lớn thường là nơi tổ chức các sự kiện thể thao lớn như giải bóng đá, giải bóng đá mini, giải thể thao cộng đồng, và các sự kiện thể thao khác. Đây là điểm đến phổ biến cho các đội bóng, câu lạc bộ thể thao, và tổ chức tổ chức giải đấu.
                            </p>
                            <p>
                                4. Đặt sân: Đa số sân bóng lớn cho phép người chơi đặt sân theo lịch trước để đảm bảo rằng họ có thời gian và sân chơi mong muốn.
                            </p>
                            <p>
                                5. Học viện và đào tạo: Nhiều sân bóng lớn cung cấp các khóa học huấn luyện và đào tạo cho người chơi thể thao, bao gồm cả trẻ em và người trưởng thành.
                            </p>
                            <p>
                                6. Tiện ích và dịch vụ đi kèm: Các sân bóng lớn thường có các tiện ích bổ sung như cửa hàng bán đồ thể thao, nhà hàng, quầy bar, phòng thay đồ và vệ sinh.
                            </p>
                            <p>
                                7. Cộng đồng thể thao: Các sân bóng lớn thường là điểm gặp gỡ của cộng đồng thể thao, nơi người dân và người chơi thể thao đến để thể hiện kỹ năng, tận hưởng sự kết nối xã hội và tạo ra những kỷ niệm thú vị.
                            </p>
                            <p>
                                Các sân bóng lớn thường đóng vai trò quan trọng trong việc thúc đẩy thể thao cơ sở và thúc đẩy lối sống lành mạnh. Chúng cung cấp một nền tảng cho người chơi thể thao và cộng đồng để thực hiện thể thao, xây dựng mối quan hệ và tham gia vào các hoạt động thể thao đa dạng.
                            </p>
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
