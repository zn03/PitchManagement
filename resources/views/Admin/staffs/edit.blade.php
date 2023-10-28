<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Nhân Viên | Quản Lý Bán Hàng</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/css/bootstrap.min.css">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.0/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.0/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.min.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-sweetalert/1.0.1/sweetalert.js"></script>
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto|Varela+Round|Open+Sans">
    <link rel="stylesheet" href="https://fonts.googleapis.com/icon?family=Material+Icons">
    <link rel="stylesheet" href="{{asset('css/fontawesome-free-6.4.2-web/css/all.min.css')}}">
    <link rel="stylesheet" href="{{asset('css/admin.css')}}">

    <script type="text/javascript">
        //Phân Trang Cho Table
        function Pager(tableName, itemsPerPage) {
            this.tableName = tableName;
            this.itemsPerPage = itemsPerPage;
            this.currentPage = 1;
            this.pages = 0;
            this.inited = false;

            this.showRecords = function (from, to) {
                var rows = document.getElementById(tableName).rows;
                for (var i = 1; i < rows.length; i++) {
                    if (i < from || i > to)
                        rows[i].style.display = 'none';
                    else
                        rows[i].style.display = '';
                }
            }

            this.showPage = function (pageNumber) {
                if (!this.inited) {
                    alert("not inited");
                    return;
                }
                var oldPageAnchor = document.getElementById('pg' + this.currentPage);
                oldPageAnchor.className = 'pg-normal';

                this.currentPage = pageNumber;
                var newPageAnchor = document.getElementById('pg' + this.currentPage);
                newPageAnchor.className = 'pg-selected';

                var from = (pageNumber - 1) * itemsPerPage + 1;
                var to = from + itemsPerPage - 1;
                this.showRecords(from, to);
            }

            this.prev = function () {
                if (this.currentPage > 1)
                    this.showPage(this.currentPage - 1);
            }

            this.next = function () {
                if (this.currentPage < this.pages) {
                    this.showPage(this.currentPage + 1);
                }
            }

            this.init = function () {
                var rows = document.getElementById(tableName).rows;
                var records = (rows.length - 1);
                this.pages = Math.ceil(records / itemsPerPage);
                this.inited = true;
            }
            this.showPageNav = function (pagerName, positionId) {
                if (!this.inited) {
                    alert("not inited");
                    return;
                }
                var element = document.getElementById(positionId);

                var pagerHtml = '<span onclick="' + pagerName +
                    '.prev();" class="pg-normal">&#171</span> | ';
                for (var page = 1; page <= this.pages; page++)
                    pagerHtml += '<span id="pg' + page + '" class="pg-normal" onclick="' + pagerName +
                        '.showPage(' + page + ');">' + page + '</span> | ';
                pagerHtml += '<span onclick="' + pagerName + '.next();" class="pg-normal">&#187;</span>';

                element.innerHTML = pagerHtml;
            }
        }
    </script>
</head>

<body onload="time()">
<nav class="navbar navbar-default navbar-fixed-top">
    <div class="container-fluid">
        <div class="navbar-header">
            <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#myNavbar">
                <i class="fas fa-bars"></i>
            </button>
            <a class="navbar-brand" href="{{route('staffs.index')}}"><i class="fa fa-user-circle" aria-hidden="true"></i> QUẢN
                LÝ NHÂN VIÊN</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{route('dashboard.index')}}" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD">DASHBOARD</a></li>
                <li><a href="{{route('bookings.index')}}" data-toggle="tooltip" data-placement="bottom" title="LỊCH ĐẶT SÂN">LỊCH ĐẶT SÂN</a></li>
                <li><a href="{{route('customers.index')}}" data-toggle="tooltip" data-placement="bottom" title="KHÁCH HÀNG">KHÁCH HÀNG</a></li>
                <li class="active"><a href="{{route('staffs.index')}}" data-toggle="tooltip" data-placement="bottom" title="NHÂN VIÊN">NHÂN VIÊN</a></li>
                <li><a href="{{route('timelines.index')}}" data-toggle="tooltip" data-placement="bottom" title="THỜI GIAN">THỜI GIAN</a></li>
                <li><a href="{{route('pitch_types.index')}}" data-toggle="tooltip" data-placement="bottom" title="LOẠI SÂN">LOẠI SÂN</a></li>
                <li><a href="{{route('pitches.index')}}" data-toggle="tooltip" data-placement="bottom" title="SÂN">SÂN</a></li>
                <li><a  data-toggle="tooltip" data-placement="bottom" title="TÀI KHOẢN">Tài Khoản</a>
                    <ul class="dropdown">
                        <li><a href="/index.html" data-toggle="tooltip" data-placement="bottom"
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
        <form action="{{ route('staffs.update', $staff)}}" method="post" enctype="multipart/form-data" >
            @csrf
            @method('PUT')
            <div>
                <label  class="form-label">Tên Nhân Viên:</label>
                <input type="text" class="form-control" id="staff_name" name="staff_name"  value="{{$staff->staff_name}}">
                @if($errors->has('staff_name'))
                    <span class="text-danger">{{$errors->first('staff_name')}}</span>
                @endif
            </div>
            <div>
                <label  class="form-label">Số Điện Thoại: </label>
                <input type="text" class="form-control" id="staff_phone" name="staff_phone" value="{{$staff->staff_phone}}" >
                @if($errors->has('staff_phone'))
                    <span class="text-danger">{{$errors->first('staff_phone')}}</span>
                @endif
            </div>
            <div>
                <label  class="form-label"> Địa Chỉ: </label>
                <input type="text" class="form-control" id="staff_address" name="staff_address" value="{{$staff->staff_address}}" >
                @if($errors->has('staff_address'))
                    <span class="text-danger">{{$errors->first('staff_address')}}</span>
                @endif
            </div>
            <div>
                <label  class="form-label">Email: </label>
                <input type="email" class="form-control" id="email" name="email" value="{{$staff->email}}" >
                @if($errors->has('email'))
                    <span class="text-danger">{{$errors->first('email')}}</span>
                @endif
            </div>
            <div class="mb-3">
                <label  class="form-label">Mật khẩu: </label>
                <input type="password" id="password" name="password" class="form-control" value="{{$staff->password}}">
                @if($errors->has('password'))
                    <span class="text-danger">{{$errors->first('password')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Sửa</button>
        </form>
    </div>

    <div id="pageNavPosition" class="text-right"></div>
    <script type="text/javascript">
        var pager = new Pager('myTable', 8);
        pager.init();
        pager.showPageNav('pager', 'pageNavPosition');
        pager.showPage(1);
    </script>
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
<script src="jquery.min.js"></script>
<script type="text/javascript">
    //Tìm kiếm
    function myFunction() {
        var input, filter, table, tr, td, i, txtValue;
        input = document.getElementById("myInput");
        filter = input.value.toUpperCase();
        table = document.getElementById("myTable");
        tr = table.getElementsByTagName("tr");
        for (i = 0; i < tr.length; i++) {
            td = tr[i].getElementsByTagName("td")[0];
            if (td) {
                txtValue = td.textContent || td.innerText;
                if (txtValue.toUpperCase().indexOf(filter) > -1) {
                    tr[i].style.display = "";
                } else {
                    tr[i].style.display = "none";  }}}}
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
