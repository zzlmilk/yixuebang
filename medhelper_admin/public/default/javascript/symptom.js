function symptom(){


}

symptom.prototype.submitInfo = function(type) {


    var type_id_1 = sessionStorage.getItem("type_id_1");

    var type_id_2 = sessionStorage.getItem("type_id_2");

    var type_id_3 = sessionStorage.getItem("type_id_3");

    var article_content = $('#article_content').summernote('code');

    var formData = new FormData();

    var i = 0;

    formData.append('article_content', article_content)

    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择一级分类')) {

        formData.append('type_1_id', type_id_1)

        i++;
    }

    if (base.checkSession('type_id_2', 'type_2_div_name', '请选择二级分类')) {

        formData.append('type_2_id', type_id_2)

        i++;
    }

    if (base.checkSession('type_id_3', 'type_3_div_name', '请选择三级分类')) {

        formData.append('type_3_id', type_id_3)

        i++;
    }

    if (i == 3) {

        formData.append('id', $('#id').val())

        formData.append('article_type', 3)

        formData.append('operation_type', type)

        var url = base.getDomainUrl() + '/pageredirst.php?action=symptom&functionname=add_symptom_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=symptom&functionname=symptom_list';

            window.location.href = url;

        }, function error(error) {


        })

    }
};

var symptom = new symptom();