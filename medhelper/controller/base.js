function base() {


}

base.prototype.init = function(name, params) {

    if (name) {

        angular.module('myApp', []).controller(name, params);

    }

};

base.prototype.ajax = function(url, method, params, success, error) {

    var oReq = new XMLHttpRequest();

    oReq.open(method, url, true);  
    oReq.onload = function(oEvent) {    
        success(oEvent.target.responseText);  
    };   
    oReq.send(params);

};

var base = new base();