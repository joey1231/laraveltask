angular.module('laraveltask',[])

.controller('formController', ['$scope','$http','baseUrl', function ($scope,$http,baseUrl) {
    $scope.error=false;
  
    $scope.errormsg='';
    $scope.firstname='';
    $scope.lastname='';
    
    $scope.submit=function(){
       
        if($scope.firstname==''){
            $scope.errormsg+="Firstname must not be empty <br/>";
             $scope.error=true;
        }
        if($scope.lastname==''){
               $scope.errormsg+="lastname must not be empty <br/>";
            $scope.error=true;
        }
        
        if($scope.error){
            	 angular.element( document.querySelector( '#error' ) ).html($scope.errormsg); 
        }
        var post={
        
                firstname:$scope.firstname,
                lastname:$scope.lastname,
                
        };
        console.log(post);
        $http.post(
                    baseUrl+"save", post
        ).then(function(data){
            console.log(data.data);
             angular.element( document.querySelector( '#response' ) ).html(data.data.response); 
            $scope.firstname='';
    $scope.lastname='';
        });
        
       
    }
    
}])
  .factory('baseUrl', function () {
        return $('meta[name=baseUrl]', 0).attr('content');
});