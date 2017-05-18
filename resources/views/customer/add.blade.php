@extends('layouts.dashboard')
@section('section')
    <!-- Content Header (Page header) -->
    <section class="content-header">
      <h1>
        Quản lý
        <small>Khách hàng gửi</small>
      </h1>
      <ol class="breadcrumb">
        <li><a href="{{ url ('/') }}"><i class="fa fa-dashboard"></i> Trang chủ</a></li>
        <li class="active">Thêm mới khách hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Thêm mới khách hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6"></div>
            </div>
             <div class="row"> 
                <div class="col-sm-12">
            <form role="form" action="" method="POST" enctype="multipart/form-data">
            <div class="row">
              <div class="col-md-12">
                  <div class="form-group">
                      <label>Họ và tên:</label>
                      <input class="form-control" name="full_name" required="">
                      <div class="form-group has-error">
                          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('full_name') }}</label>
                      </div>              
                   </div>

                    <div class="form-group">
                      <label>Địa chỉ:</label>
                      <input class="form-control" name="address" required="">
                      <div class="form-group has-error">
                          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('address') }}</label>
                      </div>              
                   </div>

                    <div class="form-group">
                      <label>Số điện thoại:</label>
                      <input class="form-control" name="mobile" required="">
                      <div class="form-group has-error">
                          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('mobile') }}</label>
                      </div>              
                   </div>
                  <div class="form-group">
                      <label>Email:</label>
                      <input class="form-control" name="email" required="">
                      <div class="form-group has-error">
                          <label lass="control-label" for="inputError" style="color:red;" >{{ $errors->first('email') }}</label>
                      </div>              
                   </div>                                                    
               
                <div class="form-group">
                  <input type="submit" name="" value="Tạo mới" class="btn btn-primary">
                  <a href="{{ url ('/') }}" class="btn btn-danger">Quay lại</a>
                </div>

              </div>
            </div>                      
        </form>
              </div>

            </div>
            <!-- /.box-body -->
          </div>
          <!-- /.box -->
        </div>
        <!-- /.col -->
      </div>
      <!-- /.row -->
    </section>
    <!-- /.content -->
@stop
