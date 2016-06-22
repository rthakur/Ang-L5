function TodoCtrl($scope, $http) {
  
  $http.get('/todo').then(function(response){
	    $scope.todos = response.data;
	  });
  
  $scope.getTotalTodos = function () {
    return $scope.todos.length;
  };
  
  
  
  $scope.addTodo = function () {
	var text = $scope.formTodoText;
	$http({
		url: 'todo/save', 
		method: "GET",
		params: {title: text}
	 }) 
    $scope.todos.push({title:text, done:false});
    $scope.formTodoText = '';
  };
  
 //done
 $scope.todoDone = function (id){
	 alert(id);
 }; 
  
$scope.clearCompleted = function () {
	$scope.todos = _.filter($scope.todos, function(todo){
		return !todo.done;
	});
};
}

var myApp = angular
.module("myModule",[])
.controller("myController",TodoCtrl);
