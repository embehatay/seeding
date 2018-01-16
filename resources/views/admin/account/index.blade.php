@extends('admin/master')
@section('title')
    Account
@stop
@section('content-title')
    Danh sách Account
    <a style="float: right" href="{{ route('admin.account.getAdd') }}" class="btn btn-primary">Thêm Account</a>
@stop
@section('content')
@include('admin/block/message')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border text-right">
                    <span>Tổng số: <strong>{!! $total !!}</strong></span>
                    <div id="spinner" class="text-center"></div>
                </div>
                <div class="box-body table-responsive">
                    <table id="users" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã số Account<span id="name" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Họ tên <span id="email" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Loại<span id="role" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Username</th>
                            <th>Điện thoại</th>
                            <th>Thông tin</th>
                            <th></th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="pannel">
                        @if ($account)
                            <?php $stt = 0; ?>
                            @foreach ($account as $item)
                                <?php $stt += 1; ?>
                                <tr>
                                    <td>{!! $stt !!}</td>
                                    <td>{!! $item->uid !!}</td>
                                    <td>{!! $item->name !!}</td>
                                    <td>
                                        @if ($item->type == 0)
                                            {!! 'User' !!}
                                        @elseif ($item->type == 1)
                                            {!! 'Admin' !!}
                                        @else
                                            {!! 'Root' !!}
                                        @endif
                                    </td>
                                    <td>
                                        {!! $item->user !!}
                                    </td>
                                    <td>
                                        {!! $item->phone !!}
                                    </td>
                                    <td>
                                        {!! $item->info !!}
                                    </td>
                                    <td><a class="btn btn-warning btn-xs btn-block" href="{!! URL::route('admin.account.getEdit', $item->uid) !!}" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
                                    <td><a class="btn btn-danger btn-xs btn-block" href="{!! URL::route('admin.account.getDelete', $item->uid) !!}" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div id="pagination" class="box-footer">
                    @if ($account)
                        {{ $account->links() }}
                    @endif
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
@stop