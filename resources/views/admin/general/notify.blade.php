
<script>
  @if(Session::has('message'))
    var type = "{{Session::get('alert-type', 'success')}}";
    switch(type){
        case 'success':
            toastr.success('{{Session::get('message')}}', 'Thành Công', {positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right', "progressBar": true, "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 6000}, toastr.options.closeButton = true);
            break;
        case 'error':
            toastr.error('{{Session::get('message')}}', 'Thành Công', {positionClass: 'toast-bottom-right', containerId: 'toast-bottom-right', "progressBar": true, "showMethod": "slideDown", "hideMethod": "slideUp", timeOut: 6000}, toastr.options.closeButton = true);
    }
  @endif
</script>