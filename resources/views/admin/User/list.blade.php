@extends('admin.master')
@section('title','Danh Sách Category')
@section('content')
<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Danh Sách Category
            </h1>
            <ol class="breadcrumb">
                <li class="active">
                    <i class="fa fa-list"></i> Forms
                </li>
            </ol>
        </div>
    </div>
    <!-- /.row -->
    

    <div class="row">
        <div class="col-md-2" style="margin: 2% 0%">
            <a href="{!! route('getUserAdd') !!}"><i class="fa fa-plus"></i> Thêm Mới</a>
        </div>
        <div class="col-md-9">
            @include('admin.Errors.flash')
			<table>
                <tr style="background-color: #e7e7e7;height: 30px">
                    <th style="width: 10%">STT</th>
                    <th style="width: 20%">Tên Hiển Thị</th>
                    <th style="width: 30%">Email</th>
                    <th style="width: 20%">Cấp Độ</th>
                    <th style="width: 20%">Quản Lý</th>
                </tr>   
                <?php ListUser($dataUser) ?>         
            </table>
        </div>
    </div>
    <!-- /.row -->

</div>
@endsection
<style type="text/css">
    table{
        background-color: #f5f5f5;border: 1px solid #fafafa;height: auto;width: 100%;font-family: sans-serif;
    }
    table th{
        border: 1px solid #898989;text-align: center;color: #008f02
    }
    table tr{
        border: 1px solid #ccc;
        height: 30px
    }
    table td{
        border: 1px solid #ccc;
        text-align:center;
    }
</style>