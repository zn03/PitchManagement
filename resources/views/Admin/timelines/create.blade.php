<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet"
          integrity="sha384-wvfXpqpZZVQGK6TAh5PVlGOfQNHSoD2xbE+QkPxCAFlNEevoEH3Sl0sibVcOQVnN" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Thời Gian | Quản Lý Bán Hàng</title>
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
            <a class="navbar-brand" href="{{route('timelines.index')}}"><i class="fa fa-user-circle" aria-hidden="true"></i> QUẢN
                LÝ THỜI GIAN</a>
        </div>
        <div class="collapse navbar-collapse" id="myNavbar">
            <ul class="nav navbar-nav navbar-right">
                <li ><a href="{{route('dashboard.index')}}" data-toggle="tooltip" data-placement="bottom" title="DASHBOARD">DASHBOARD</a></li>
                <li><a href="{{route('bookings.index')}}" data-toggle="tooltip" data-placement="bottom" title="LỊCH ĐẶT SÂN">LỊCH ĐẶT SÂN</a></li>
                <li><a href="{{route('customers.index')}}" data-toggle="tooltip" data-placement="bottom" title="KHÁCH HÀNG">KHÁCH HÀNG</a></li>
                <li ><a href="{{route('staffs.index')}}" data-toggle="tooltip" data-placement="bottom" title="NHÂN VIÊN">NHÂN VIÊN</a></li>
                <li class="active"><a href="{{route('timelines.index')}}" data-toggle="tooltip" data-placement="bottom" title="THỜI GIAN">THỜI GIAN</a></li>
                <li><a href="{{route('pitch_types.index')}}" data-toggle="tooltip" data-placement="bottom" title="LOẠI SÂN">LOẠI SÂN</a></li>
                <li><a href="{{route('pitches.index')}}" data-toggle="tooltip" data-placement="bottom" title="SÂN">SÂN</a></li>
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
    <div class="table-title">
        <div class="row">
        </div>
    </div>
    <div class="container-fluid">
        <div id="toolbar">
            <h1 align="center">Thêm Thời Gian</h1>
        </div>
    </div>
    <div class="container">
        <form action="{{ route('timelines.store')}}" method="post" enctype="multipart/form-data" >
            @csrf
            <div>
                <label  class="form-label">Thời Gian Bắt Đầu:</label>
                <input type="time" class="form-control" id="timeline_start" name="timeline_start" >
                @if($errors->has('timeline_start'))
                    <span class="text-danger">{{$errors->first('timeline_start')}}</span>
                @endif
            </div>
            <div>
                <label  class="form-label">Thời Gian Kết Thúc:  </label>
                <input type="time" class="form-control" id="timeline_end" name="timeline_end" >
                @if($errors->has('timeline_end'))
                    <span class="text-danger">{{$errors->first('timeline_end')}}</span>
                @endif
            </div>
            <div>
                <label  class="form-label"> Giá Tiền Theo Thời Gian: </label>
                <input type="text" class="form-control" id="timeline_price" name="timeline_price" >
                @if($errors->has('timeline_price'))
                    <span class="text-danger">{{$errors->first('timeline_price')}}</span>
                @endif
            </div>
            <button type="submit" class="btn btn-primary">Thêm Vào</button>
        </form>
    </div>



    <div id="pageNavPosition" class="text-right"></div>
    <script type="text/javascript">
        var pager = new Pager('myTable', 5);
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
