function LoginCtrl($scope, $route, $routeParams, $location, User) {
    $scope.users = User.query();
    $scope.loginUser = function() {
        var loggedin = false;
        var totalUsers = $scope.users.length;
        var usernameTyped = $scope.userUsername;

        for( i=0; i < totalUsers; i++ ) {
            if( $scope.users[i].name === usernameTyped ) {
                loggedin = true;
                break;
            }
        }

        if( loggedin === true ) {
            alert("login successful");
            $location.path("/loggedin");
        } else {
            alert("username does not exist")
        }
    }
}

function UserCtrl($scope, $route, $routeParams, $location) {
    $scope.logoutUser = function() {
        $location.path("/login");
    }
}