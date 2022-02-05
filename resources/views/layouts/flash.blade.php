@if (\Illuminate\Support\Facades\Session::has('sweet_alert.alert'))
    <script>
        @if (\Illuminate\Support\Facades\Session::has('sweet_alert.content'))
        var config = {!! \Illuminate\Support\Facades\Session::pull('sweet_alert.alert') !!}
        var content = document.createElement('div');
        content.insertAdjacentHTML('afterbegin', config.content);
        config.content = content;
        swal(config);
        @else
        swal({!! \Illuminate\Support\Facades\Session::pull('sweet_alert.alert') !!});
        @endif
    </script>
@endif
