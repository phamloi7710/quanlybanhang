@if((sizeof($files) > 0) || (sizeof($directories) > 0))
<div class="row">
    @foreach($items as $item)
    <div class="col-xs-6 col-sm-4 col-md-3 col-lg-3 img-row">
        <?php $item_name = $item->name; ?>
        <?php $thumb_src = $item->thumb; ?>
        <?php $item_path = $item->is_file ? $item->url : $item->path; ?>
        <div class="square clickable {{ $item->is_file ? '' : 'folder-item' }}" data-id="{{ $item_path }}"
        @if($item->is_file && $thumb_src) onclick="useFile('{{ $item_path }}', '{{ $item->updated }}')"
        @elseif($item->is_file) onclick="download('{{ $item_name }}')" @endif >
        @if($thumb_src)
        <img src="{{ $thumb_src }}">
        @else
        <i class="fa {{ $item->icon }} fa-5x"></i>
        @endif
    </div>
    <div class="caption text-center">
        <div class="btn-group mr-1 mb-1 btn-group-sm">
            <button type="button" class="btn btn-success btn-secondary item_name {{ $item->is_file ? '' : 'folder-item'}}" @if($item->is_file && $thumb_src) onclick="useFile('{{ $item_path }}', '{{ $item->updated }}')"
                @elseif($item->is_file) onclick="download('{{ $item_name }}')" @endif >{{ $item_name }}</button>
            <button type="button" class="btn btn-success dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            </button>
            <div class="dropdown-menu">
                <a href="javascript:rename('{{ $item_name }}')" class="dropdown-item"><i class="fa fa-edit fa-fw"></i> {{ Lang::get('laravel-filemanager::lfm.menu-rename') }}</a>
                @if($item->is_file)
                <a href="javascript:download('{{ $item_name }}')" class="dropdown-item"><i class="fa fa-download fa-fw"></i> {{ Lang::get('laravel-filemanager::lfm.menu-download') }}</a>
                @if($thumb_src)
                <a href="javascript:fileView('{{ $item_path }}', '{{ $item->updated }}')" class="dropdown-item"><i class="fa fa-image fa-fw"></i> {{ Lang::get('laravel-filemanager::lfm.menu-view') }}</a>
                <a href="javascript:resizeImage('{{ $item_name }}')" class="dropdown-item"><i class="fa fa-arrows fa-fw"></i> {{ Lang::get('laravel-filemanager::lfm.menu-resize') }}</a>
                <a href="javascript:cropImage('{{ $item_name }}')" class="dropdown-item"><i class="fa fa-crop fa-fw"></i> {{ Lang::get('laravel-filemanager::lfm.menu-crop') }}</a>
                
                @endif
                @endif
                <div class="dropdown-divider"></div>
                <a style="color: red;" href="javascript:trash('{{ $item_name }}')" class="dropdown-item"><i class="fa fa-trash fa-fw"></i> {{ Lang::get('laravel-filemanager::lfm.menu-delete') }}</a>
            </div>
        </div>






    </div>
</div>
@endforeach
</div>
@else
<p>{{ Lang::get('laravel-filemanager::lfm.message-empty') }}</p>
@endif