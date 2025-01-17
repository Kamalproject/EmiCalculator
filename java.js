var app=angular.module("Myapp",[]);
app.controller("Myctrl",function($scope){
    $scope.amount={
        principle:"",
        rate:"",
        year:"",
        months:"",
        days:""
    };
    $scope.calculateAmount=function(){
        var time=0;
        var intrest=0;
        time=$scope.amount.year-(-$scope.amount.months/12)-(-$scope.amount.days/365);
        intrest=$scope.amount.principle*$scope.amount.rate*time/100;
        $scope.amount.TotalAmount=$scope.amount.principle-(-intrest);
        $scope.amount.intrest=$scope.amount.principle*$scope.amount.rate*time/100;
    }
})
