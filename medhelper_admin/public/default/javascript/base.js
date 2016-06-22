var check = 0

function base() {


}

base.prototype.getDomainUrl = function() {

    return 'http://localhost/medhelper_admin';

}

base.prototype.ajax = function(url, method, params, success, error) {

    var oReq = new XMLHttpRequest();

    oReq.open(method, url, true);  
    oReq.onload = function(oEvent) {    
        success(oEvent.target.responseText);  
    };   
    oReq.send(params);

};

base.prototype.log = function(content) {

    console.log(content)
}

base.prototype.preview = function(name) {

    var text = $('#' + name).summernote('code');

    $('#previewModal').find('#preview_body').html(text);

    $('#previewModal').find('img').css('max-width', '100%');

    $('#previewModal').find('img').css('width', '100%');

    $("#previewModal").modal();

};

base.prototype.edit = function() {

    var readerObject = $('#readerModal');

    readerObject.modal();

};

base.prototype.getMainType = function(type) {

    var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=getMainType';

    var formData = new FormData();

    formData.append('belog_type', type);

    base.ajax(url, 'post', formData, function success(data) {

        $('body').append(data)

        $('#mainTypeModal').modal();

    }, function error(error) {


    })

};

base.prototype.getBranceType = function() {

    var main_type_id = sessionStorage.getItem("main_type_id", main_type_id);

    if (main_type_id > 0) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=getBranceType';

        var formData = new FormData();

        formData.append('main_type_id', main_type_id);

        base.ajax(url, 'post', formData, function success(data) {

            $('body').append(data)

            $('#branchTypeModal').modal('show');

        }, function error(error) {


        })

        $('#main_type_error').html('');

    } else {

        $('#main_type_error').html('请选择大分类');

    }

};

base.prototype.saveBranchType = function(type) {

    var branch_type_name = $('#addBranchTypeName').val()

    if (branch_type_name && type) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=addBranchType';

        var formData = new FormData();

        formData.append('id', type);

        formData.append('branch_type_name', $('#addBranchTypeName').val());

        base.ajax(url, 'post', formData, function success(data) {

            base.removeMainType('branchTypeModal');

            base.getBranceType(type)

        }, function error(error) {


        })

    }

};

base.prototype.submitBranchType = function() {

    var main_type_id = $('input[name="inlineRadioOptions"]:checked ').val();

    var main_type_name = $('#branch_type_' + main_type_id).text();

    sessionStorage.setItem("branch_type_id", main_type_id);

    sessionStorage.setItem("branch_type_name", main_type_name);

    base.removeMainType('branchTypeModal');

    $('#branch_type_div_name').text(main_type_name);

};


base.prototype.removeMainType = function(name) {

    $('#' + name).modal('hide');

    $('.modal-backdrop').remove();

    $('#' + name).remove();

    $('.modal-open').removeClass('modal-open');

}

base.prototype.saveMainType = function(type) {

    var main_type_name = $('#addMainTypeName').val()

    if (main_type_name && type) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=ajax&functionname=addMainType';

        var formData = new FormData();

        formData.append('belog_type', type);

        formData.append('main_type_name', $('#addMainTypeName').val());

        base.ajax(url, 'post', formData, function success(data) {

            base.removeMainType('mainTypeModal');

            base.getMainType(type)

        }, function error(error) {


        })
    }
};

base.prototype.submitMainType = function() {

    var main_type_id = $('input[name="inlineRadioOptions"]:checked ').val();

    var main_type_name = $('#main_type_' + main_type_id).text();

    sessionStorage.setItem("main_type_id", main_type_id);

    sessionStorage.setItem("main_type_name", main_type_name);

    base.removeMainType('mainTypeModal');

    $('#main_type_div_name').text(main_type_name);

};

base.prototype.jumpAddShop = function() {

    var url = 'pageredirst.php?action=shop&functionname=addShop';

    window.location.href = url;
};

base.prototype.setShopValue = function() {

    var shop_name = $('#shop_name').val()

    var shop_price = $('#shop_price').val()

    var shop_describe = $('#shop_describe').summernote('code');

    var main_type_id = sessionStorage.getItem('main_type_id');

    var branch_type_id = sessionStorage.getItem('branch_type_id');

    var shop_type = $("#shop_type option:selected").val();

    var logo = document.getElementById('logo').files[0];

    var shop_content = document.getElementById('shop_content').files[0];

    var params = {};

    params['shop_name'] = shop_name;

    params['shop_price'] = shop_price;

    params['shop_describe'] = shop_describe;

    params['main_type_id'] = main_type_id;

    params['branch_type_id'] = branch_type_id;

    params['shop_type'] = shop_type;

    params['logo'] = logo;

    params['shop_content'] = shop_content;

    return params
};

base.prototype.setErrorInfo = function(data) {

    var i = 0

    var type_array = new Array();

    if (data['shop_name']) {

        i++;

        $('#shop_name_error').html('');

    } else {

        $('#shop_name_error').html('请输入商品名称');
    }


    if (!isNaN(data['shop_price']) && parseInt(data['shop_price']) > 0) {

        i++;

        $('#shop_price_error').html('');

    } else {

        $('#shop_price_error').html('请输入商品价格或商品价格应为数字并大于0');
    }

    if (data['shop_describe']) {

        i++;

        $('#shop_describe_error').html('');

    } else {

        $('#shop_describe_error').html('请输入商品介绍');
    }

    if (sessionStorage.getItem('main_type_id') > 0) {

        i++;

    } else {

        type_array.push('请选择主分类');
    }

    if (sessionStorage.getItem('branch_type_id') > 0) {

        i++;

    } else {

        type_array.push('请选择小分类');
    }

    if (type_array.length > 0) {

        $('#main_type_error').html(type_array.join(','));

    } else {

        $('#main_type_error').html('');
    }

    if (data['logo']) {

        i++;

        filepath = data['logo'].name;

        var extStart = filepath.lastIndexOf('.');

        var ext = filepath.substring(extStart, filepath.length).toUpperCase();

        if (ext != '.BMP' && ext != '.PNG' && ext != '.GIF' && ext != '.JPG' && ext != '.JPEG') {

            $('#logo_error').html('封面图限于png, gif, jpeg, jpg格式');

        } else {

            $('#logo_error').html('');
        }

    } else {

        $('#logo_error').html('封面图必须上传');

    }


    if (data['shop_content']) {

        i++;


        $('#shop_content_error').html('');


    } else {

        $('#shop_content_error').html('商品附件必须上传');

    }

    return i;

};

base.prototype.submitShop = function() {

    var data = base.setShopValue();

    var number = base.setErrorInfo(data);

    if (number == 7 && check == 0) {

        check++;

        var formData = new FormData();

        for (var i in data) {

            if(data[i]){

                formData.append(i, data[i])
            }
        }

        var url = base.getDomainUrl() + '/pageredirst.php?action=shop&functionname=submitShop';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=shop&functionname=shop_list';

            window.location.href = url;


        }, function error(error) {


        })
    }

};


var base = new base();