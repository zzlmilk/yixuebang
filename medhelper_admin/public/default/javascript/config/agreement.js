function agreement() {


}

agreement.prototype.submitAgreementHtml = function() {

    var agreement_content = $('#agreement_content').summernote('code');

    if (agreement_content) {

        var url = base.getDomainUrl() + '/pageredirst.php?action=config&functionname=saveAgreement';

        var formdata = new FormData();

        formdata.append('agreement_content', agreement_content);

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


var agreement = new agreement();