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
                    <div id="spinner" class="text-center"></div>
                </div>
                <div class="box-body table-responsive">
                    <table id="users" class="table table-striped table-bordered">
                        <thead>
                        <tr>
                            <th>#</th>
                            <th>seeding<span id="name" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>collect_post<span id="email" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>max_comment_1time_sacc<span id="role" class="fa fa-sort pull-right" aria-hidden="true"></span></th>
                            <th>distance_sama</th>
                            <th>max_cm_1post</th>
                            <th>delay_post_comment</th>
                            <th>on_seed</th>
                            <th>on_collect</th>
                            <th>addfriend</th>
                            <th>timer_like</th>
                            <th>percent_like</th>
                            <th></th>
                        </tr>
                        </thead>
                        <tbody id="pannel">
                        @if($setting)
                            <?php $stt = 0; ?>
                            @foreach($setting as $item)
                                <?php $stt += 1; ?>
                                <tr>
                                    <td>{!! $stt !!}</td>
                                    <td>{!! $item->seeding !!}</td>
                                    <td>{!! $item->collect_post !!}</td>
                                    <td>
                                        {!! $item->max_comment_1time_sacc !!}
                                    </td>
                                    <td>
                                        {!! $item->distance_sama !!}
                                    </td>
                                    <td>
                                        {!! $item->max_cm_1post !!}
                                    </td>
                                    <td>
                                        {!! $item->delay_post_comment !!}
                                    </td>
                                    <td>
                                        {!! $item->on_seed !!}
                                    </td>
                                    <td>
                                        {!! $item->on_collect !!}
                                    </td>
                                    <td>
                                        {!! $item->addfriend !!}
                                    </td>
                                    <td>
                                        {!! $item->timer_like !!}
                                    </td>
                                    <td>
                                        {!! $item->percent_like !!}
                                    </td>
                                    <td><a class="btn btn-warning btn-xs btn-block" href="{{ URL::route('admin.setting.getEdit', $item->id) }}" role="button" title="Edit"><span class="fa fa-edit"></span></a></td>
                                </tr>
                            @endforeach
                        @endif
                        </tbody>
                    </table>
                </div>
                <!-- /.box-body -->
                <div id="pagination" class="box-footer">
                </div>
            </div>
            <!-- /.box -->
        </div>
        <!-- /.col -->
    </div>
    <!-- /.row -->

</section>
@stop