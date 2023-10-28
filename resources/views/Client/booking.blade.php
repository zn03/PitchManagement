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
                            <a ></a>
                        </li>
                        <li>
                            <a></a>
                        </li>
                        <li>
                            <a></a>
                        </li>
                        <li>
                            <a title="Trang Chủ" href="{{route('home.index')}}"><em class="fa fa-lg fa-home"></em> Trang Chủ</a>
                        </li>
                        <li >
                            <a title="Đặt Sân" href="{{route('home.booking')}}" >Đặt Sân</a>
                        </li>
                        <li>
                            <a title="Giới Thiệu" href="{{route('home.about')}}" >Giới Thiệu</a>
                        </li>
                        <li >
                            <a title="Tin Tức" href="{{route('home.news')}}" >Tin Tức</a>
                        </li>
                        <li >
                            <a title="Liên Hệ" href="{{route('home.contact')}}" >Liên Hệ</a>
                        </li>
                        <li >
                            <a title="Thành Viên" href="{{route('home.staff')}}" >Nhân Viên</a>
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
                        <div class="col-sm-18 col-md-19 col-sm-push-6 col-md-push-5" id="col-right">
                            <h1>Đặt sân</h1>
                            <div class="panel panel-default panel-bds-post">
                                <div class="panel-body">
                                    <form action="{{ route('booking.store')}}" method="post" class="form-horizontal" enctype="multipart/form-data" >
                                        @csrf
                                        <div class="text-center guide">
                                            <label>Bạn muốn đặt sân, vui lòng <span class="guide-pro">Chọn ngày</span> và <span class="guide-pro">Xem khung giờ trống</span>!</label>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Tên Khách Hàng:  <span class="text-danger">(*)</span>:</label>
                                            <div class="col-sm-18 col-lg-12">
                                                <input type="text" name="customer_name"  class="form-control" maxlength="250">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Tên đội: <span class="text-danger">(*)</span></label>
                                            <div class="col-sm-18 col-lg-12">
                                                <input type="text" name="customer_nameclub" value="" class="form-control" maxlength="250">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Điện thoại: <span class="text-danger">(*)</span>:</label>
                                            <div class="col-sm-18 col-lg-12">
                                                <input type="text" name="customer_phone"  class="form-control" maxlength="100">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Ngày đặt <span class="text-danger">(*)</span>:</label>
                                            <div class="col-sm-18 col-lg-12">
                                                <input type="date" name="booking_date" id="booking_date" class="form-control d-inline-block w-120 mr-1" maxlength="10">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Thời Gian: <span class="text-danger">(*)</span>:</label>
                                            <div class="col-sm-18 col-lg-12">
                                                <select name="timeline_id" id="timeline_id" class="form-control">
                                                    @foreach($timelines as $timeline)
                                                        <option value="{{$timeline->id}}">
                                                            {{$timeline->timeline_start}} - {{$timeline->timeline_end}}
                                                        </option>
                                                    @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Chọn sân: <span class="text-danger">(*)</span>:</label>
                                            <div class="col-sm-18 col-lg-12">
                                                <div class="form-inline">
                                                    <select name="pitch_id" id="pitch_id" class="form-control">
                                                        @foreach($pitches as $pitch)
                                                            <option value="{{$pitch->id}}">
                                                                {{$pitch->pitch_number}} - Loại Sân: {{$pitch->pitchType->pitchtype_name}}
                                                            </option>
                                                        @endforeach
                                                    </select>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="col-sm-6 control-label">Thông tin khác:</label>
                                            <div class="col-sm-18 col-lg-12">
                                                <textarea rows="5" class="form-control" name="booking_note"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group text-center">
                                            <div class="col-sm-18">
                                                <button type="submit" name="submit" value="submit" class="btn btn-primary">Đặt sân</button>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
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
<script>
    // Lấy ngày hôm nay và định dạng nó thành yyyy-MM-dd
    const today = new Date();
    const maxDate = new Date();
    maxDate.setDate(maxDate.getDate() + 10);

    const yyyy = today.getFullYear();
    const mm = String(today.getMonth() + 1).padStart(2, '0'); // Thêm 0 đằng trước nếu cần
    const dd = String(today.getDate()).padStart(2, '0'); // Thêm 0 đằng trước nếu cần
    const formattedDate = yyyy + '-' + mm + '-' + dd;

    // Lấy trường input theo id
    const bookingDateInputById = document.getElementById('booking_date');

    // Đặt giá trị tối thiểu cho trường input theo id
    if (bookingDateInputById) {
        bookingDateInputById.setAttribute('min', formattedDate);
        bookingDateInputById.setAttribute('max', maxDate.toISOString().split('T')[0]);
    }
</script>

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
