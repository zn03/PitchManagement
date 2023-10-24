<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>  Lịch Đặt Sân | Quản Lý Bán Hàng</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css"
          integrity="sha384-oS3vJWv+0UjzBfQzYUhtDYW+Pj2yciDJxpsK1OYPAYjqT085Qq/1cq5FLXAZQ7Ay" crossorigin="anonymous">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <style>
        body{
            padding: 0;
            margin: 0;
            color: black;
            font-family: Montserrat-Bold;
            z-index: 9999;
        }
        ::-webkit-scrollbar {
            background:black;
            width:4px;
            height: 20px;
            overflow: hidden;
        }
        ::-webkit-scrollbar-thumb {
            background:white !important;
            border-radius: 30px;
        }
        /* Add a dark background color with a little bit see-through */
        .navbar {
            margin-bottom: 0;
            background-color: rgb(255, 255, 255) !important;
            border: 0;
            font-size: 13px;
            letter-spacing: 2px;
            font-weight: 400;
            text-align: center;
            z-index: 999;
            box-shadow: 10px 0px 40px rgb(201, 200, 200);
        }

        /* Add a gray color to all navbar links */
        .navbar li a, .navbar .navbar-brand {
            color: #000000 !important;
            padding-left:10px;
            font-family: -apple-system, BlinkMacSystemFont, 'Segoe UI', Roboto, Oxygen, Ubuntu, Cantarell, 'Open Sans', 'Helvetica Neue', sans-serif;
        }
        .navbar-brand{
            font-weight: 900 !important;

        }

        /* On hover, the links will turn white */
        .navbar-nav li a:hover {
            color: rgb(23, 81, 241) !important;
        }

        /* The active link */
        .navbar-nav li.active a {
            color: rgb(23, 45, 250) !important;
            background: none !important;
            border-bottom: 2px solid black;
        }

        /* Remove border color from the collapsible button */
        .navbar-default .navbar-toggle {
            border-color: transparent;
        }

        /* Dropdown */
        ul{
            padding: 0;
            list-style: none;

        }
        ul li{
            display: inline-block;
            position: relative;
            line-height: 21px;
            text-align: left;
        }
        ul li a{
            display: block;
            padding: 8px 25px;
            color: #333;
            text-decoration: none;
            font-weight: 900;
            font-size: 10px;
        }
        ul li a:hover{

            text-decoration: none;
        }
        ul li ul.dropdown{
            min-width: 100%; /* Set width of the dropdown */
            background: #f2f2f2;
            display: none;
            position: absolute;
            z-index: 999;
            left: 0;
        }
        ul li:hover ul.dropdown{
            display: block;	/* Display the dropdown */
            background: #ffffff;
            color: white !important;
            width: 200px;
        }
        ul li ul.dropdown li{
            display: block;
        }
        .fa-bars{
            font-size: 15px;
        }
        .al{
            padding-top: 100px !important;
            padding-bottom: 150px;
        }
        .nv{
            background: rgb(20, 97, 197);
            border: 1px solid rgb(255, 255, 255);
            width: 100px;
            text-align: center;
            height: 30px;
            border-radius: 5px;
            color: rgb(255, 255, 255);
            float: left;
            margin-right: 10px;
            margin-bottom: 10px;
            margin-top: 10px;
            font-weight: 600;
        }
        .nv1{
            background: royalblue;
            border: 1px solid rgb(255, 255, 255);
            width: 100px;
            text-align: center;
            height: 30px;
            border-radius:5px;
            color: white;
            margin-left: auto;
            margin-right: auto;
            font-weight: 600;
        }
        .nv:hover, .nv:active{
            background: white;
            border: 1px solid black;
            color: black;
        }
        .nv1:hover, .nv1:active{
            background: white;
            border: 1px solid black;
            color: black;
        }
        thead tr th{
            color: rgb(255, 255, 255);
            font-size: 14px;
            font-weight: 600;
            background: #006bcf;
            text-align: center !important;
        }
        tbody tr td{
            text-align: left;
            color: black;
            font-weight: 600;
        }
        .ds{
            font-size: 30px;
            color: black;
        }
        #myInput {
            /*background-image: url('/css/searchicon.png');*/
            background-position: 10px 10px;
            background-repeat: no-repeat;
            width: 100%;
            font-size: 14px;
            padding: 12px 20px 12px 40px;
            border: 1px solid #ddd;
            margin-bottom: 12px;
            border-radius: 20px;
            outline: none !important;
        }
        .header{
            color: rgb(255, 255, 255);
            font-size: 13px;
            background: #006bcf;
        }

        #myTable {
            border-collapse: collapse;
            width: 100%;
            border: 1px solid #ddd;
            font-size: 12px;
            padding: 0px !important;
        }

        #myTable th,
        #myTable td {
            text-align: left;
            padding: 10px;
            padding-bottom: 15px;
            padding-top: 15px;
        }

        #myTable tr {
            border-bottom: 1px solid #ddd;
        }


        form input{
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
            border-radius: 30px;
            height: 40px;
        }
        .end{
            color: rgb(0, 0, 0);
            padding-bottom: 20px;
            padding-top: 20px;
            font-weight: 600;
        }
        .col-lg-12 a{
            color: royalblue;
        }
        .col-lg-12 a:hover{
            text-decoration: none;
            color: green;
        }
        #topBtn{
            position: fixed;
            bottom: 90px;
            right: 40px;
            font-size: 12px;
            width: 30px;
            height: 30px;
            background: rgb(0, 0, 0);
            color: rgb(236, 236, 236);
            border: none;
            cursor: pointer;
            display: none;
            opacity: 1;
            opacity: 0.9;
        }
        .myInput{
            position: relative;
        }
        .fa-search{
            position: absolute;
            margin-left: 15px;
            margin-top: -40px;
        }

        #clock{
            text-align: center;
            float: right;
            border-radius: 20px;
            font-weight: 600;
            color: rgb(0, 0, 0);
            font-size: 13px;
            width: 250px;
            margin-left: auto;
            margin-right: auto;
            margin-top: 10px;
        }
        .background-modal {
            display: none;
            position: fixed;
            z-index: 1;
            left: 0;
            top: 0;
            width: 100%;
            height: 100%;
            overflow: auto;
            background-color: rgb(0,0,0);
            background-color: rgba(0,0,0,0.4);
            padding-top: 60px;
        }

        .modal-content {
            background-color: #fefefe;
            margin: 5% auto 15% auto;
            border: 1px solid #888;
            width: 80%;
            text-align: left;
            border-radius: 12px;
        }

        .dataTables_filter{
            display: none;
        }
        .sorting {
            background: none !important;
        }
        #myTable table {
            padding: 0px 0px 0px 0px !important;
            border-bottom: 1px solid black;
            font-weight: bold;
            cursor: pointer;
            *cursor: hand;
        }
        .pagination{
            float: right;
        }
        .hr1{
            border: 1px solid black;
        }
        .link i{
            margin-left: 20px;
            padding: 10px 10px 10px 10px;
            border: 2px solid black;
            border-radius: 50%;
        }
        .link{
            padding-bottom: 20px;
        }

        .table-title {
            padding-bottom: 10px;
            margin: 0 0 10px;
        }
        .table-title h2 {
            margin: 6px 0 0;
            font-size: 22px;
        }
        .table-title .add-new {
            float: right;
            height: 30px;
            font-weight: bold;
            font-size: 12px;
            text-shadow: none;
            min-width: 100px;
            border-radius: 50px;
            line-height: 13px;
        }
        .table-title .add-new i {
            margin-right: 4px;
        }
        table.table {
            table-layout: fixed;
        }
        table.table tr th, table.table tr td {
            border-color: #e9e9e9;
        }
        table.table th i {
            font-size: 13px;
            margin: 0 5px;
            cursor: pointer;
        }
        table.table th:last-child {
            width: 100px;
        }
        table.table td a {
            cursor: pointer;
            display: inline-block;
            margin: 0 5px;
            min-width: 24px;
        }
        table.table td a.add {
            color: #27C46B;
        }
        table.table td a.edit {
            color: rgb(23, 45, 250);
        }
        table.table td a.delete {
            color: #E34724;
        }
        table.table td i {
            font-size: 15px;
        }
        table.table td a.add i {
            font-size: 15px;
            margin-right: -1px;
            position: relative;
            top: 3px;
        }
        table.table .form-control {
            height: 32px;
            line-height: 32px;
            box-shadow: none;
            border-radius: 2px;
        }
        table.table .form-control.error {
            border-color: #f50000;
        }
        table.table td .add {
            display: none;
        }
        .modal-3 li a{
            border: 1px solid black !important;
            color: #000000 !important;
            font-size: 12px;
        }
        .pg-normal {
            color: #006bcf;
            font-weight: normal;
            text-decoration: none;
            cursor: pointer;
            font-weight: 600;
            text-align: center;
        }

        .pg-selected {
            color: black;
            font-weight: bold;
            text-decoration: underline;
            cursor: pointer;
            text-decoration: none;
            font-size: 15px;
            text-align: center;
        }
    </style>

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
                    </select>
                </div>
                <br>
                <div>
                    <label  class="form-label">Ghi Chú </label>
                    <input type="text" class="form-control" id="booking_note" name="booking_note"  value="{{$booking->booking_note}}">
                    @if($errors->has('booking_note'))
                        <span class="text-danger">{{$errors->first('booking_note')}}</span>
                    @endif
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
