function pay(){


}

pay.prototype.buy = function(order_status) {

    var order_id = $('#order_id').val().toString();

    order_id_string = order_id.toString();

	var xhr = new XMLHttpRequest();

    xhr.open("POST", base.getDomainUrl() + "/shop/order_callback_ajax", true);

    xhr.setRequestHeader("Content-type", "application/json");

    xhr.send(JSON.stringify({
        order_id:order_id_string,
        order_status:1
    }));
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            alert('购买成功~~~~')

            location.reload();
        
        }
    }

};

pay.prototype.createOrder = function(){

    var order_id = $('#order_id').val();

    var shop_id = $('#id').val();

    var open_id = $('#open_id').val();

    var money = $('#money').val();

    var xhr = new XMLHttpRequest();

    xhr.open("POST", base.getDomainUrl() + "/shop/create_order_ajax", true);

    xhr.setRequestHeader("Content-type", "application/json");

    xhr.send(JSON.stringify({
        order_id:order_id,
        shop_id:shop_id,
        open_id:open_id,
        money:money
    }));
    xhr.onreadystatechange = function() {

        if (xhr.readyState == 4 && xhr.status == 200) {

            
        }
    }

}

var payS = new pay();