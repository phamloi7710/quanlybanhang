


var row = 0;
function asdqwwdasda(){
    html = '<tr id="rowImage'+row+'">';
    html += '<td>';
    html += '<div class="row">';
    html += '<div class="col-md-10">';
    html += '<input type="text" class="form-control" placeholder="{{__("general.imageUrl")}}" name="txtImageUrl[]">';
    html += '</div>';           
    html += '<div class="col-md-2">';           
    html += '<div class="heading-elements">';              
    html += '<a href="javascript:;" class="selectImage btn btn-success btn-sm"><i class="ft-plus-circle"></i> {{__("general.chooseImage")}}</a>';                   
    html += '</div>';               
    html += '</div>';           
    html += '</div>';       
    html += '</td>';   
    html += '<td class="text-center">';   
    html += '<div class="heading-elements">';       
    html += '<a href="javascript:void(0)" onclick="$(\'#rowImage'+row+'\').remove();" class="btn btn-danger btn-sm"><i class="ft-trash-2"></i></a>';           
    html += '</div>';       
    html += '</td>';   
    html +='</tr>';
    $('#contentImage').append(html);
    $('.selectImage'+row+'').filemanager('image');
        var lfm = function(options, cb) {
        var route_prefix = (options && options.prefix) ? options.prefix : 'admin/uploads';
        window.open(route_prefix + '?type=' + options.type || 'file', 'FileManager', 'width=1200,height=800');
        window.SetUrl = cb;
    };
    row++;
}
