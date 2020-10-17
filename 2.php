<!DOCTYPE html>
<html lang="en">
<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
</head>
<body>

<div class="container">
  <h2>Activate Modal with JavaScript</h2>
  <!-- Trigger the modal with a button -->
  <button type="button" class="btn btn-info btn-lg" id="myBtn">Open Modal</button>

  <!-- Modal -->
  <div class="modal fade" id="myModal" role="dialog">
    <div class="modal-dialog">
    
      <!-- Modal content-->
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">&times;</button>
          <h4 class="modal-title">Modal Header</h4>
        </div>
        <div class="modal-body">
                    <form action="/action_page.php">
                      <div class="form-group">
                        <label for="email">Email address:</label>
                        <input type="email" class="form-control" id="email">
                      </div>
                      <div class="form-group">
                        <label for="pwd">Password:</label>
                        <input type="password" class="form-control" id="pwd">
                      </div>
                      <div class="checkbox">
                        <label><input type="checkbox"> Remember me</label>
                      </div>
                      <button type="submit" class="btn btn-default">Submit</button>
                    </form>

        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
      
    </div>
  </div>
  
</div>

<script>
$(document).ready(function(){
  $("#myBtn").click(function(){
    $("#myModal").modal();
  });
});
</script>
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
    
<div class="container">
  <h3>Pills With Dropdown Menu</h3>
  <ul class="nav nav-pills nav-stacked">
    <li class="active"><a href="#">Home</a></li>
    <li class="dropdown">
      <a class="dropdown-toggle" data-toggle="dropdown" href="#">Menu 1 <span class="caret"></span></a>
      <ul class="dropdown-menu">
        <li><a href="#">Submenu 1-1</a></li>
        <li><a href="#">Submenu 1-2</a></li>
        <li><a href="#">Submenu 1-3</a></li>                        
      </ul>
    </li>
    <li><a href="#">Menu 2</a></li>
    <li><a href="#">Menu 3</a></li>
  </ul>
</div>


</body>
</html>
