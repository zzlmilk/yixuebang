function pay(){


}

pay.prototype.buy = function(obj) {

	var xhr = new XMLHttpRequest();

    xhr.open("POST", base.getDomainUrl() + "/shop/ajax_buy", true);

    xhr.setRequestHeader("Content-type", "application/json");

    xhr.send(JSON.stringify({
        id:1
    }));
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

        	
        }
    }

};

var payS = new pay();