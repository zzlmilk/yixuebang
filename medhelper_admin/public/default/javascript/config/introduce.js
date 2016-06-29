function introduce() {


}

introduce.prototype.submitHtml = function() {

    var content = $('#content').summernote('code');

    if (content) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=config&functionname=saveIntroduce';

        var formdata = new FormData();

        formdata.append('content', content);

        base.ajax(url, 'post', formdata, function success(data) {

        	var dataObj=eval("("+data+")");

        	if(dataObj['res']){

        		var res = dataObj['res'];

        		switch(res){

        			case 1:

        				$('#tipModal').find('#tip_body').html('保存成功');

        				$('#tipModal').modal();

        				break;
        		}

        	}


        }, function error() {


        })

    }

};


var introduce = new introduce();