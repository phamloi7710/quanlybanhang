<?php

return [
    'use_package_routes' => true,
    'middlewares' => ['web', 'checkRoleAdmin'],
    'url_prefix' => 'uploads',
    'allow_multi_user' => false,
    'allow_share_folder' => true,
    'user_field' => UniSharp\LaravelFilemanager\Handlers\ConfigHandler::class,
    'base_directory' => 'assets/uploads',
    'images_folder_name' => 'images',
    'files_folder_name'  => 'files',
    'shared_folder_name' => 'system',
    'thumb_folder_name'  => 'thumbs',
    'images_startup_view' => 'grid',
    'files_startup_view' => 'list',
    'rename_file' => false,
    'alphanumeric_filename' => false,
    'alphanumeric_directory' => true,
    'should_validate_size' => true,
    'max_image_size' => 50000,
    'max_file_size' => 50000,
    'should_validate_mime' => true,
    'valid_image_mimetypes' => [
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/gif',
        'image/svg+xml',
    ],
    'should_create_thumbnails' => true,
    'raster_mimetypes' => [
        'image/jpeg',
        'image/pjpeg',
        'image/png',
    ],
    'create_folder_mode' => 0755,
    'create_file_mode' => 0644,
    'should_change_file_mode' => true,
    'valid_file_mimetypes' => [
        'image/jpeg',
        'image/pjpeg',
        'image/png',
        'image/gif',
        'image/svg+xml',
        'application/pdf',
        'text/plain',
    ],
    'thumb_img_width' => 200,
    'thumb_img_height' => 200,
    'file_type_array' => [
        'pdf'  => 'Adobe Acrobat',
        'doc'  => 'Microsoft Word',
        'docx' => 'Microsoft Word',
        'xls'  => 'Microsoft Excel',
        'xlsx' => 'Microsoft Excel',
        'zip'  => 'Archive',
        'gif'  => 'GIF Image',
        'jpg'  => 'JPEG Image',
        'jpeg' => 'JPEG Image',
        'png'  => 'PNG Image',
        'ppt'  => 'Microsoft PowerPoint',
        'pptx' => 'Microsoft PowerPoint',
    ],
    'file_icon_array' => [
        'pdf'  => 'fa-file-pdf-o',
        'doc'  => 'fa-file-word-o',
        'docx' => 'fa-file-word-o',
        'xls'  => 'fa-file-excel-o',
        'xlsx' => 'fa-file-excel-o',
        'zip'  => 'fa-file-archive-o',
        'gif'  => 'fa-file-image-o',
        'jpg'  => 'fa-file-image-o',
        'jpeg' => 'fa-file-image-o',
        'png'  => 'fa-file-image-o',
        'ppt'  => 'fa-file-powerpoint-o',
        'pptx' => 'fa-file-powerpoint-o',
    ],
    'php_ini_overrides' => [
        'memory_limit'        => '256M',
    ],

];