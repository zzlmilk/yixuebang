function doctor() {


}

doctor.prototype.submitDoctor = function(type) {

    var doctor_name = $("#doctor_name").val()

    var hospital_name = $('#hospital_name').val()

    var article_content = $('#article_content').summernote('code');

    var college_id = sessionStorage.getItem("type_id_1");

    var doctor_type = $('#doctor_type').val();

    var chk_value = [];

    $('input[name="patient_time"]:checked').each(function() {

        chk_value.push($(this).val());

    });

    var formData = new FormData();

    var i = 0;

    if(chk_value.length > 0){

        formData.append('patient_time',chk_value);

    }

    if (base.checkString('hospital_name', 0, '请输入医院名称') && article_content) {

        i++;

        formData.append('hospital_name', hospital_name)

        formData.append('article_content', article_content)
    }

    if (base.checkString('doctor_name', 0, '请输入医生名称')) {

        i++;

        formData.append('doctor_name', doctor_name)
    }

    console.log('bbbbb'+i)

    if (base.checkString('doctor_type', 0, '请选择医生类型')) {

        i++;

        formData.append('doctor_type', doctor_type)
    }

    console.log('aaa'+i)

    if (base.checkSession('type_id_1', 'type_1_div_name', '请选择专科')) {

        formData.append('college_id', college_id)

        i++;
    }

    console.log(i)

    if (i == 4) {

        formData.append('id', $('#id').val())

        formData.append('article_type', 4)

        formData.append('operation_type', type)

        var url = base.getDomainUrl() + '/pageredirst.php?action=doctor&functionname=add_doctor_ajax';

        base.ajax(url, 'post', formData, function success(data) {

            var url = 'pageredirst.php?action=doctor&functionname=doctor_list';

            window.location.href = url;

        }, function error(error) {


        })

    }


}

var doctor = new doctor();