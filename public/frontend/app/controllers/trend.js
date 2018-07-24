(function(){
    app.controller('TrendController', function($scope, $http, $location, API_URL, $sce){
        $scope.$sce = $sce;
        $scope.trends = [];
        $scope.trendDetail = [];
        $scope.trendImages = [];
        $urlSplit = $location.path().split("/");
        slug = $urlSplit[3];
        if(!$urlSplit[3]){
            slug = '';
        }
        $scope.slug = slug;
        

        /**
         * Fetch trends for each type
         */
        $http({
            method: 'GET',
            url: API_URL + 'trend',
            params: {
                    slug: slug
                }
        }).then(function(success){
            
            $scope.trends = success.data;
            console.log($scope.trends);
        }, function(error){

        });

        /**
         * Fetch trends for each type
         */
        $http({
            method: 'GET',
            url: API_URL + 'trend-detail',
            params: {
                slug: slug
            }
        }).then(function(success){

            $scope.trendDetail = success.data;
            $scope.trendImages = JSON.parse($scope.trendDetail.image);
        }, function(error){

        });

    });
})();