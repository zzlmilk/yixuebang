function user() {

    var formData = new FormData();

    base.init('user', function($scope,$http) {

    	var form = {}

    	form.id = 1

        $http.post('http://localhost/medhelper/user_api.php', form)
            
            .success(function(response) {
                
            	$scope.user_info = response
            });
    });
}

var user = new user();