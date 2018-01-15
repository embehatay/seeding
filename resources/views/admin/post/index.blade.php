@extends('admin/master')
@section('title')
    Post
@stop
@section('content-title')
    Danh sách Post
@stop
@section('content')
<section class="content">
    <div class="row">
        <div class="col-md-12">
            <div class="box">
                <div class="box-header with-border">
                    <form class="list_filter form" action="{!! url('admin/post/index') !!}" method="get">
                        <div class="form-group">
                            <label for="post_id">Mã số Post:</label>
                            <input type="text" name="post_id" class="form-control" id="post_id" value="{{ request()->post_id }}" autofocus>
                        </div>
                        <div class="form-group">
                            <label for="user_name">Tên người Post:</label>
                            <input type="text" name="user_name" class="form-control" id="user_name" value="{{ request()->user_name }}">
                        </div>
                        <input class="btn btn-primary" value="Lọc" type="submit">
                        <input class="btn btn-basic" value="Reset" onclick="window.location.href = '{!! url('admin/post/index') !!}'; " type="reset">
                    </form>
                    <div id="spinner" class="text-center"></div>
                </div>
                <div class="box-body table-responsive">
                    <table id="users" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>Mã số post<span id="name" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Tên người post<span id="email" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Ngày cập nhật<span id="role" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>Số comment</th>
                            <th>tmid</th>
                        </tr>
                        </thead>
                        <tbody id="pannel">
                        @if($post)
                            <?php $stt = 0; ?>
                            @foreach($post as $item)
                                <?php $stt += 1; ?>
                                <tr>
                                    <td>{!! $stt !!}</td>
                                    <td>{!! $item->postid !!}</td>
                                    <td>{!! $item->account->name !!}</td>
                                    <td>
                                        {!! get_vn_time($item->time_update2) !!}
                                    </td>
                                    <td>
                                        {!! $item->count_comment !!}
                                    </td>
                                    <td>
                                        {!! $item->tmid !!}
                                    </td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div id="pagination" class="box-footer">
                    @if($post)
                        {{ $post->links() }}
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