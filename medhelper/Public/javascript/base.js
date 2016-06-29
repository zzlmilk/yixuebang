function base(argument) {




}

base.prototype.getDomainUrl = function() {

    return window.location.protocol + '//' + window.location.host + '/yixuebang/medhelper/index.php'

};
base.prototype.ajax = function(url, method, params, success, error, is_loading) {

    if (is_loading == 1) {

        hirelibEngine.displayOrHideLoading(1)
    }

    var oReq = new XMLHttpRequest();

    oReq.open(method, url, true);  
    oReq.onload = function(oEvent) {

        if (is_loading == 1) {

            hirelibEngine.displayOrHideLoading(0)
        }    
        success(oEvent.target.responseText);  
    };   
    oReq.send(params);


};
base.prototype.displayOrHideLoading = function(status) {

    if (status == 1) {

        $('.loading').show();

    } else {

        $('.loading').hide();
    }

};
base.prototype.trimData = function(name) {

    if (name) {

        return name.replace(/(^\s*)|(\s*$)/g, '');

    }

};

base.prototype.parseJson = function(json) {

    var json = json.trim();

    if (json) {

        return eval("(" + json + ")");
    }

};

base.prototype.getBrowserInfo = function() {

    var Sys = {};

    var ua = navigator.userAgent.toLowerCase();

    var re = /(msie|firefox|chrome|opera|version).*?([\d.]+)/;

    var m = ua.match(re);

    console.log(m)

    if (m) {

        Sys.browser = m[1].replace(/version/, "'safari");

        Sys.ver = m[2];

        return Sys;
    }
};

base.prototype.checkVersion = function() {

    var sys = base.getBrowserInfo();

    if (sys) {

        if (sys.browser) {

            var sys_version = parseInt(sys.ver);

            switch (sys.browser) {

                case 'msie':

                    if (sys_version <= 8) {

                        setErrorTip('游览器版本低于ie8 提示请用高版本游览器访问');

                    }

                    break;

            }

        }

    }

};

base.prototype.jump = function(content,type){

    var url = base.getDomainUrl() + '/' + content

    if(type == 1){

        window.location.href = url;
        
    } else{

        window.open(url);
    }

};

base.prototype.channel = function(value){

    if(value == 1){

        $('#channel_list').css('height','auto')

        $('#channel_list').css('overflow','auto')

        $('#more').css('display','none');

    } else{

        $('#channel_list').css('height','100px')

        $('#channel_list').css('overflow','hidden')

        $('#more').css('display','inline-block');

    }

}

var base = new base();