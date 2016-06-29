function medical(){




}


medical.prototype.submitInfo = function(type) {

    var type_id_1 = sessionStorage.getItem("type_id_1");

    var type_id_2 = sessionStorage.getItem("type_id_2");

    var article_content = $('#article_content').summernote('code');

    var formData = new FormData();

    var i = 0;

    formData.append('article_content', article_content)

    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择一级分类')) {

        formData.append('type_id_1', type_id_1)

        i++;
    }

    if (base.checkSession('type_id_2', 'type_2_div_name', '请选择二级分类')) {

        formData.append('type_id_2', type_id_2)

        i++;
    }

    if (i == 2) {

        formData.append('id', $('#id').val())

        formData.append('article_type', 5)

        formData.append('operation_type', type)

        var url = base.getDomainUrl() + '/pageredirst.php?action=medical&functionname=add_medical_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=medical&functionname=medical_list';

            window.location.href = url;

        }, function error(error) {


        })

    }
};


var medical = new medical();


