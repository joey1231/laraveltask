<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="csrf-token" content="{{ csrf_token() }}" />
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <meta name="description" content="">
    <meta name="author" content="">
    <meta content="http://localhost/laraveltask/public/" name="baseUrl"/>
		<link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <title>Laravel Task</title>
    <!-- Bootstrap core CSS -->
   
		<link rel="stylesheet" href="http://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css">
		
    
  </head>
<!-- NAVBAR
================================================== -->
  <body ng-app="laraveltask">
     <script src="//ajax.googleapis.com/ajax/libs/jquery/2.2.0/jquery.min.js"></script>       		         <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script>
    <script src="//ajax.googleapis.com/ajax/libs/angularjs/1.4.9/angular.min.js"></script>
     
    <!-- Placed at the end of the document so the pages load faster -->
     <div class="container-fluid" ng-controller='formController' style="margin-top:100px !important;">
        
         <div class='container page-contain'>
			<div class='row' id='about'>
                 <div class="alert alert-danger " ng-show="error==true">
                                        <button class="close" data-close="alert"></button>
                     <p id='error'></p>
                        </div>
					<form >
                   
                    <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Firstname</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">  <input type="text" class="form-control" id="inputPassword" placeholder="FirstName" ng-model="firstname"></p>
                    </div>
                  </div>
                  <div class="form-group row">
                    <label class="col-sm-2 form-control-label">Lastname</label>
                    <div class="col-sm-10">
                      <p class="form-control-static">  <input type="text" class="form-control" id="inputPassword" placeholder="LastName" ng-model="lastname"></p>
                    </div>
                  </div>
                  
                         <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 form-control-label"> &nbsp;</label>
                    <div class="col-sm-10">
                        <button class='btn btn-success' ng-click="submit()">Sudmit</button>
                    </div>
                  </div>
              
                </form>
                <div class="alert alert-success " >
                                        <button class="close" data-close="alert"></button>
                     <p id='response'></p>
                </div>
			</div>
			
			
		 </div>
		 
			 
     </div>
    
    
	    <script type='text/javascript' src="{{$template->asset('media/js/form.js')}}"></script>
 
 <script type='text/javascript'>
                 
                  $_token="{{ csrf_token() }}";
             </script>
		
  </body>
</html>
