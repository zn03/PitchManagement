<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  Lịch Đặt Sân | Quản Lý Bán Hàng</title>
    <link rel="stylesheet" href="{{asset('css/fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

</head>

<body onload="time()">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('bookings.index')}}"><i class="fa fa-user-circle" aria-hidden="true"></i> QUẢN
                LÝ LỊCH ĐẶT SÂN</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{route('dashboard.index')}}" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD">DASHBOARD</a></li>
                <li class="active"><a href="{{route('bookings.index')}}" data-toggle="tooltip" data-placement="bottom" title="LỊCH ĐẶT SÂN">LỊCH ĐẶT SÂN</a></li>
                <li><a href="{{route('customers.index')}}" data-toggle="tooltip" data-placement="bottom" title="KHÁCH HÀNG">KHÁCH HÀNG</a></li>
                <li ><a href="{{route('staffs.index')}}" data-toggle="tooltip" data-placement="bottom" title="NHÂN VIÊN">NHÂN VIÊN</a></li>
                <li ><a href="{{route('timelines.index')}}" data-toggle="tooltip" data-placement="bottom" title="THỜI GIAN">THỜI GIAN</a></li>
                <li ><a href="{{route('pitch_types.index')}}" data-toggle="tooltip" data-placement="bottom" title="LOẠI SÂN">LOẠI SÂN</a></li>
                <li ><a href="{{route('pitches.index')}}" data-toggle="tooltip" data-placement="bottom" title="SÂN">SÂN</a></li>
                <li><a  data-toggle="tooltip" data-placement="bottom" title="TÀI KHOẢN">Tài Khoản</a>
                    <ul class="dropdown">
                        <li><a href="" data-toggle="tooltip" data-placement="bottom"
                               title="ĐĂNG XUẤT"><b>Đăng xuất <i class="fas fa-sign-out-alt"></i></b></a></li>
                    </ul>
                </li>

            </ul>
        </div>
    </div>
</nav>
<div class="container-fluid al">
    <div id="clock"></div>
    <Br>

    <div class="container-fluid">
    </div>
    <div class="container">
        @foreach($bookings as $booking)
            <form action="{{ route('bookings.update', $booking->booking_id )}}" method="post" enctype="multipart/form-data" >
                @csrf
                @method('PUT')
                <div>
                    <label  class="form-label">Tên Khách Hàng: </label>
                    <input type="text" class="form-control" id="customer_name" name="customer_name"  value="{{$booking->customer_name}}">
                    @if($errors->has('customer_name'))
                        <span class="text-danger">{{$errors->first('customer_name')}}</span>
                    @endif
                </div>
                <div>
                    <label  class="form-label">Số Điện Thoại: </label>
                    <input type="text" class="form-control" id="customer_phone" name="customer_phone"  value="{{$booking->customer_phone}}">
                    @if($errors->has('customer_phone'))
                        <span class="text-danger">{{$errors->first('customer_phone')}}</span>
                    @endif
                </div>
                <div>
                    <label  class="form-label">Tên Đội Bóng:  </label>
                    <input type="text" class="form-control" id="customer_nameclub" name="customer_nameclub"  value="{{$booking->customer_nameclub}}">
                    @if($errors->has('customer_nameclub'))
                        <span class="text-danger">{{$errors->first('customer_nameclub')}}</span>
                    @endif
                </div>
                <div>
                    <label  class="form-label">Tên Nhân Viên: </label>
                    <select name="staff_id" id="staff_id" class="form-control" value="{{$booking->staff_id}}">
                        @foreach($staffs as $staff)
                            <option value="{{$staff->id}}">
                                {{$staff->staff_name}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <label  class="form-label">Ngày Đặt: </label>
                    <input type="date" class="form-control" id="booking_date" name="booking_date" value="{{$booking->booking_date}}">
                    @if($errors->has('booking_date'))
                        <span class="text-danger">{{$errors->first('booking_date')}}</span>
                    @endif
                </div>
                <div>
                    <label  class="form-label">Thời Gian: </label>
                    <select class="form-control" name="timeline_id" id="timeline_id">
                            <option value="{{$booking->timeline_id}}"
                                {{'selected hidden'}}
                            >{{$booking->timeline_start}} - {{$booking->timeline_end}}
                            </option>
                        @foreach($timelines as $timeline)
                            <option value="{{$timeline->timeline_id}}">
                                {{$timeline->timeline_start}} - {{$timeline->timeline_end}}
                            </option>
                        @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <label  class="form-label">Sân Số: </label>
                    <select class="form-control" name="pitch_id" id="pitch_id">
                        <option value="{{$booking->pitch_id}}"
                                {{'selected hidden'}}
                        >{{$booking->pitch_number}} - Loại {{$booking->pitchtype_name}}
                        </option>
                        @foreach($pitches as $pitch)
                            <option value="{{$pitch->pitch_id}}">
                                {{$pitch->pitch_number}} - Loại {{$pitch->pitchType->pitchtype_name}}
                            </option>
                            @endforeach
                    </select>
                </div>
                <br>
                <div>
                    <label  class="form-label">Trạng Thái Sân:  </label>
                    <select class="form-control" name="booking_status" id="booking_status">
                        <option value="1" {{ $booking->booking_status == 1 ? 'selected' : '' }}>
                            Đã Đặt
                        </option>
                        <option value="2" {{ $booking->booking_status == 2 ? 'selected' : '' }}>
                            Đang Đá
                        </option>
                        <option value="3" {{ $booking->booking_status == 3 ? 'selected' : '' }}>
                            Đã Hoàn Thành
                    </select>
                </div>
                <br>
                <div>
                    <label  class="form-label">Ghi Chú </label>
                    <input type="text" class="form-control" id="booking_note" name="booking_note"  value="{{$booking->booking_note}}">
                </div>
                <button type="submit" class="btn btn-primary">Sửa</button>
            </form>
        @endforeach
    </div>

</div>
<hr class="hr1">
<div class="container-fluid end">
    <div class="row text-center">
        <div class="col-lg-12 link">
            <i class="fab fa-facebook-f"></i>
            <i class="fab fa-instagram"></i>
            <i class="fab fa-youtube"></i>
            <i class="fab fa-google"></i>
        </div>
    </div>
</div>
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
<script src="jquery.min.js"></script>
<script type="text/javascript">
    //Thời Gian
    function time() {
        var today = new Date();
        var weekday = new Array(7);
        weekday[0] = "Chủ Nhật";
        weekday[1] = "Thứ Hai";
        weekday[2] = "Thứ Ba";
        weekday[3] = "Thứ Tư";
        weekday[4] = "Thứ Năm";
        weekday[5] = "Thứ Sáu";
        weekday[6] = "Thứ Bảy";
        var day = weekday[today.getDay()];
        var dd = today.getDate();
        var mm = today.getMonth() + 1;
        var yyyy = today.getFullYear();
        var h = today.getHours();
        var m = today.getMinutes();
        var s = today.getSeconds();
        m = checkTime(m);
        s = checkTime(s);
        nowTime = h + ":" + m + ":" + s;
        if (dd < 10) {
            dd = '0' + dd
        }
        if (mm < 10) {
            mm = '0' + mm
        }
        today = day + ', ' + dd + '/' + mm + '/' + yyyy;
        tmp = '<i class="fa fa-clock-o" aria-hidden="true"></i> <span class="date">' + today + ' | ' + nowTime +
            '</span>';
        document.getElementById("clock").innerHTML = tmp;
        clocktime = setTimeout("time()", "1000", "Javascript");

        function checkTime(i) {
            if (i < 10) {
                i = "0" + i;
            }
            return i;
        }
    }
    //Tool tip
    $(document).ready(function () {
        $('[data-toggle="tooltip"]').tooltip();
    });
</script>

</body>

</html>
