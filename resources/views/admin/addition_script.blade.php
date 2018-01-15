<script src="https://code.jquery.com/jquery-3.2.0.min.js"></script>
<!-- Bootstrap 3.3.7 -->
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
<!-- Sweet Alert -->
<script src="//cdn.jsdelivr.net/sweetalert2/6.3.8/sweetalert2.min.js"></script>

<script src="{{ asset('adminlte/js/back.js') }}"></script>
<script>

    {{--var user = (function () {--}}

    {{--var url = '{{ asset('admin/users') }}'--}}
    {{--var swalTitle = 'Really destroy user ?'--}}
    {{--var confirmButtonText = 'Yes'--}}
    {{--var cancelButtonText = 'No'--}}
    {{--var errorAjax = 'Looks like there is a server issue...'--}}

    {{--var onReady = function () {--}}
    {{--$('#pagination').on('click', 'ul.pagination a', function (event) {--}}
    {{--back.pagination(event, $(this), errorAjax)--}}
    {{--})--}}
    {{--$('#pannel').on('change', ':checkbox[name="seen"]', function () {--}}
    {{--back.seen(url, $(this), errorAjax)--}}
    {{--})--}}
    {{--.on('click', 'td a.btn-danger', function (event) {--}}
    {{--back.destroy(event, $(this), url, swalTitle, confirmButtonText, cancelButtonText, errorAjax)--}}
    {{--})--}}
    {{--$('th span').click(function () {--}}
    {{--back.ordering(url, $(this), errorAjax)--}}
    {{--})--}}
    {{--$('.box-header :radio, .box-header :checkbox').click(function () {--}}
    {{--back.filters(url, errorAjax)--}}
    {{--})--}}
    {{--}--}}

    {{--return {--}}
    {{--onReady: onReady--}}
    {{--}--}}

    {{--})()--}}

    {{--$(document).ready(user.onReady)--}}

</script>

<!-- AdminLTE App -->
<script src="{{ asset('adminlte/js/app.min.js') }}"></script>

<!-- Commom -->


<!-- Optionally, you can add Slimscroll and FastClick plugins.
     Both of these plugins are recommended to enhance the
     user experience. Slimscroll is required when using the
     fixed layout. -->

<script>
    $(function() {
        $('#logout').click(function(e) {
            e.preventDefault();
            $('#logout-form').submit()
        })
    })
</script>