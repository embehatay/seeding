@extends('admin/master')
@section('title')
    User
@stop
@section('content-title')
    Danh sách User
    <a style="float: right" href="{{ route('admin.user.create') }}" class="btn btn-primary">Thêm Account</a>
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
                                <th>Họ tên <span id="name" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                                <th>Loại<span id="role" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                                <th>Username</th>
                                <th>Ngày tạo</th>
                                <th>Sửa</th>
                                <th>Xóa</th>
                            </tr>
                            </thead>
                            <tbody id="pannel">
                            @if ($user)
                                <?php $stt = 0; ?>
                                @foreach ($user as $item)
                                    <?php $stt += 1; ?>
                                    <tr>
                                        <td>{!! $stt !!}</td>
                                        <td>{!! $item->name !!}</td>
                                        <td>
                                            @if ($item->level == 0)
                                                {!! 'User' !!}
                                            @elseif ($item->level == 1)
                                                {!! 'Admin' !!}
                                            @else
                                                {!! 'Root' !!}
                                            @endif
                                        </td>
                                        <td>
                                            {!! $item->username !!}
                                        </td>
                                        <td>
                                            {!! $item->created_at !!}
                                        </td>
                                        <td><a class="btn btn-warning btn-xs btn-block" href="{!! URL::route('admin.user.edit', $item->id) !!}" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
                                        <td><a class="btn btn-danger btn-xs btn-block" href="{!! URL::route('admin.user.destroy', $item->id) !!}" role="button" title="Destroy"><span class="fa fa-remove"></span></a></td>
                                    </tr>
                                @endforeach
                            @endif
                            </tbody>
                        </table>
                    </div>
                    <!-- /.box-body -->
                    <div id="pagination" class="box-footer">
                        @if ($total > 10)
                            {{ $user->links() }}
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