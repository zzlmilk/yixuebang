function channel() {


}

channel.prototype.submitChannel = function(type) {

    var title = $('#title').val()

    var summary_info = $('#summary_info').val()

    var table_id = sessionStorage.getItem("type_id_1");

    var article_content = $('#article_content').summernote('code');

    var img_file = document.getElementById('cover_pic_url').files[0];

    var formData = new FormData();

    var i = 0;

    if (base.checkImg('cover_pic_url', 1,type)) {

        formData.append('cover_pic_url', img_file)

        i++;

    } else if (type == 1) {

        i++;
    }

    if (base.checkString('title', 0, '文章标题必须填写') && article_content) {

        i++;

        formData.append('title', title)

        formData.append('article_content', article_content)
    }

    if (base.checkString('summary_info', 0, '文章简介必须填写')) {

        formData.append('summary_info', summary_info)

        i++;
    }

    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择分类')) {

        formData.append('table_id', table_id)

        i++;
    }

    if (i == 4) {

    	formData.append('article_type', 1)

        formData.append('operation_type', type)

        formData.append('id', $('#id').val())

        var url = base.getDomainUrl() + '/pageredirst.php?action=channel&functionname=add_channel_ajax';

        base.ajax(url, 'post', formData, function success(data) {

           var url = 'pageredirst.php?action=channel&functionname=channel_list';

   		   window.location.href = url;

        }, function error(error) {


        })

    }

};

var channel = new channel();