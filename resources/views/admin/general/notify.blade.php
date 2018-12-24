@if(Session::has('message'))
<script type="text/javascript">
    var type = "{{Session::get('alert-type', 'success')}}";
    switch(type){
        case 'success':
            Lobibox.notify('success', {
                size: 'mini',
                msg: '{{Session("message")}}'
            });
            break;
        case 'error':
            Lobibox.notify('error', {
                size: 'mini',
                msg: '{{Session("message")}}'
            });
            break;
    }
</script>
@endif