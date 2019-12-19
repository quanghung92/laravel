@extends('master.master')

@section('title','Thêm thành viên') <!-- khi chèn 1 chuổi chỉ cần có tên của section và doạn chuỗi cần thêm -->
@section('content')
<article class="content dashboard-page">
    <div class="col-md-12">
            <div class="card card-block sameheight-item" style="height: 720px;">
                <div class="title-block">
                    <h3 class="title"> THÊM THÀNH VIÊN </h3>
                    <hr>
                </div>
                <form method="POST"> <!--Nếu có acction thì nó sẹ dịnh hướng theo tên của acction-->
                    @csrf  <!--bảo mật và bắt buộc trong thẻ from-->
                    <div class="form-group">
                        <label class="control-label">Họ Và Tên</label>
                        <input name="full" type="text" class="form-control underlined"> </div>

                        {{showErorrs($errors,'full')}}

                    <div class="form-group">
                        <label class="control-label">Số điện thoại</label>
                        <input name="phone" type="text" class="form-control underlined"> </div>

                        {{-- @if ($errors->has('phone')) <!--if $errors có key bằng full thì mới bắt lỗi-->
                        <div class="alert alert-danger" role="alert">
                            <strong>{{$errors->first('phone')}}</strong><!--lấy ra lổi của $errors cái lổi của key là full-->
                        </div>
                        @endif --}}
                        {{showErorrs($errors,'phone')}}

                    <div class="form-group">
                        <label class="control-label">Địa chỉ</label>
                        <input name="address" type="text" class="form-control underlined"> </div>

                        {{showErorrs($errors,'address')}}


                    <div class="form-group">
                        <label class="control-label">Số CMT</label>
                        <input name="id_number" type="text" class="form-control underlined"> </div>

                        {{showErorrs($errors,'id_number')}}

                    <div align='right'>
                            <button type="submit" class="btn btn-success">Thêm</button>
                            <button class="btn btn-primary" type="reset" >Nhập lại</button>
                    </div>
                </form>
            </div>
        </div>

</article>
@endsection
