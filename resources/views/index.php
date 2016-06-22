<!DOCTYPE html>
<html lang="en" ng-app="myModule">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Todos App in Laravel + AngularJs</title>
    <!-- Bootstrap -->
    <link href="/assets/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="/assets/css/custom.css" rel="stylesheet">
    <script src="/assets/scripts/angular.js"></script>
    <script src="/assets/scripts/script.js"></script>
    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    
    <style>
    
.done-true {
  text-decoration: line-through;
  color: #ddd;
}

    </style>
  </head>
  <body ng-app="myModule">
  <div class="container" ng-controller="myController">
    <div class="row">
        <div class="col-md-6">
            <div class="todolist not-done">
             <h1>Todos</h1>
				<form>
					<input type="text" ng-model="formTodoText" name="text" class="form-control add-todo" placeholder="Add todo">
					<button id="checkAll" ng-click="addTodo()" class="btn btn-success">Add</button>
				</form>		
                    <hr>
                    <ul id="sortable" class="list-unstyled">
                    <li class="ui-state-default" ng-repeat="todo in todos">
                        <div class="checkbox">
                            <label>
                            <input type="checkbox" value="" ng-click="todoDone(todo.id)" ng-model="todo.done" />
                            <span class="done-{{todo.done}}">{{todo.title}}</span></label>
                        </div>
                    </li>
                  </ul>
                <div class="todo-footer">
                    <strong><span class="count-todos"></span></strong> Items Left
                </div>
            </div>
        </div>
        <div class="col-md-6">
            <div class="todolist">
             <h1>Already Done</h1>
                <ul id="done-items" class="list-unstyled">
                    <li>Some item <button class="remove-item btn btn-default btn-xs pull-right"><span class="glyphicon glyphicon-remove"></span></button></li>
                    
                </ul>
            </div>
        </div>
    </div>
</div>
	      <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="/assets/bootstrap/js/bootstrap.min.js"></script>
  </body>
</html>
