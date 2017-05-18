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
        <li class="active">Danh sách khách hàng</li>
      </ol>
    </section>

    <!-- Main content -->
    <section class="content">
      <div class="row">
        <div class="col-xs-12">
          <div class="box">
            <div class="box-header">
              <h3 class="box-title">Danh sách khách hàng</h3>
            </div>
            <!-- /.box-header -->
            <div class="box-body">
            <div class="row">
              <div class="col-sm-6"></div>
              <div class="col-sm-6"></div>
            </div>
             <div class="row"> 
                 <div class="col-sm-12">
                 <table id="example1" class="table table-bordered table-striped">
                <thead>
                <tr>
                  <th>Họ và tên</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Email</th>
                  <th>Ngày Gửi</th>
                  <th>Thao tác</th>
                </tr>
                </thead>
                <tbody>
                <?php for($i=0; $i<15;$i++){ ?>
                <tr>
                  <td><a href="#" title="Click xem chi tiết giao dịch">Nguyễn Văn Đức</a></td>
                  <td>Hà Đông - Hà Nội
                  </td>
                  <td>0976460950</td>
                  <td>ducnvna@gmail.com</td>
                  <td>30/05/2017</td>
                  <td>         
                   <a href="">  <span class="glyphicon glyphicon-pencil"></span></a>
                        <label>&nbsp;&nbsp;|&nbsp;&nbsp;</label>
                        <a style="cursor:pointer;" onclick="" ><span class="glyphicon glyphicon-trash"></span></a>
                   </td>
                </tr>
                <?php }?>
           

                </tbody>
                <tfoot>
                <tr>
                  <th>Họ và tên</th>
                  <th>Địa chỉ</th>
                  <th>Số điện thoại</th>
                  <th>Email</th>
                  <th>Ngày Gửi</th>
                  <th>Thao tác</th>
                </tr>
                </tfoot>
                  </table>
                 </div> 
              </div>

              <div class="row"><div class="col-sm-5"><div class="dataTables_info" id="example2_info" role="status" aria-live="polite">Showing 1 to 10 of 57 entries</div></div><div class="col-sm-7"><div class="dataTables_paginate paging_simple_numbers" id="example2_paginate"><ul class="pagination"><li class="paginate_button previous disabled" id="example2_previous"><a href="#" aria-controls="example2" data-dt-idx="0" tabindex="0">Previous</a></li><li class="paginate_button active"><a href="#" aria-controls="example2" data-dt-idx="1" tabindex="0">1</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="2" tabindex="0">2</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="3" tabindex="0">3</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="4" tabindex="0">4</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="5" tabindex="0">5</a></li><li class="paginate_button "><a href="#" aria-controls="example2" data-dt-idx="6" tabindex="0">6</a></li><li class="paginate_button next" id="example2_next"><a href="#" aria-controls="example2" data-dt-idx="7" tabindex="0">Next</a></li></ul></div></div></div>

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
