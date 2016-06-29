function college() {


}

college.prototype.submitCollege = function(type) {

    var hospital_name = $('#hospital').val()

    var prov = $('#prov').val()

    var city = $('#city').val()

    var dist = $('#dist').val()

    var article_content = $('#article_content').summernote('code');

    var college_id = sessionStorage.getItem("type_id_1");

    var college_type = $('#college_type').val();

    var formData = new FormData();

    var i = 0;

    if (base.checkString('hospital', 0, '请输入医院名称') && article_content) {

        i++;

        formData.append('hospital', hospital_name)

        formData.append('article_content', article_content)
    }

    if (base.checkString('prov', 0, '请输入省份')) {

        i++;

        formData.append('prov', prov)
    }

    

    if (base.checkString('city', 0, '请输入城市')) {

        i++;

        formData.append('city', city)
    }

    if (base.checkString('dist', 0, '请输入区县') && dist != '') {

        i++;

        formData.append('dist', dist)
    }

    if (base.checkString('college_type', 0, '请选择专科类型')) {

        i++;

        formData.append('college_type', college_type)
    }

    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择专科')) {

        formData.append('college_id', college_id)

        i++;
    }

    if (i == 6) {

        formData.append('id', $('#id').val())

        formData.append('article_type', 2)

        formData.append('operation_type', type)

        var url = base.getDomainUrl() + '/pageredirst.php?action=college&functionname=add_college_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=college&functionname=college_list';

            window.location.href = url;

        }, function error(error) {


        })

    }


}

var college = new college();