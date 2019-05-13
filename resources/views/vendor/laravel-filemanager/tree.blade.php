
<ul class="list-group">
    @foreach($root_folders as $root_folder)
    <li class="list-group-item node-custom-icon-treeview" style="text-align: center; background-color: #428BCA">
        <a class="clickable folder-item" data-id="{{ $root_folder->path }}" style="color: #fff; font-weight: bold;"> {{ $root_folder->name }}</a>
    </li>
    @foreach($root_folder->children as $directory)
    <li class="list-group-item node-custom-icon-treeview">
        <a class="clickable folder-item" data-id="{{ $directory->path }}" style="color: #2ECC71;">
            <i class="fa fa-folder"></i> {{ $directory->name }}
        </a>
    </li>
    @endforeach
    @if($root_folder->has_next)
    <hr>
    @endif
    @endforeach
</ul>