function websiteType() {


}

websiteType.prototype.addType = function(type, level) {


    var type_id = $('input[name="inlineRadioOptions"]:checked ').val();

    var main_type_name = $('#main_type_' + type_id).text();

    if (main_type_name) {

        sessionStorage.setItem("type_id_" + level, type_id);

        base.removeMainType('mainTypeModal');

        console.log(type_id)

        console.log(main_type_name)

        console.log(type)

        console.log(level)

        $('#type_' + level + '_div_name').text(main_type_name);


    }


};

var websiteType = new websiteType();