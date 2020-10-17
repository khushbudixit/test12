                  

<?php



$connect=mysqli_connect('localhost','root','','shop');

if(isset($_POST['submit']))
{
    
    
 
   $email= $_POST['email'];
   $password = $_POST['password']; 
   $query =" INSERT INTO login(email,password)  VALUES('{$email }','{$password}')  ";
   $user_create = mysqli_query($connect,$query);
                                    
     if(!$user_create)
    {
     die("QUERY FAILED" . mysqli_error($connect));
    }
}


?>
                        
                        
                        
                        
                        
      
<html>

<head>
  <title>Bootstrap Example</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
 <link rel="canonical" href="https://getbootstrap.com/docs/4.5/examples/sign-in/">

</head>


<body>
    
    <div class="jumbotron jumbotron-fluid">
  <div class="container">
    <h1 class="display-4">Fluid jumbotron</h1>
    <p class="lead">This is a modified jumbotron that occupies the entire horizontal space of its parent.</p>
  </div>
</div>
    
    
   <div class="container">
    
    
     <form action="" method="post" >  
            <div class="form-group">
            <label for="user_email">Email Address</label>
            <input class="form-control"type="email" name="email">
            </div> 
            <div class="form-group">
            <label for="user_email">Password</label>
            <input class="form-control"type="password" name="password">
            </div> 
          
          
           
            <div class="form-group">
            <input class ="btn btn-primary"type="submit" name="submit" value="SUBMIT">
            </div>
            </form>    
    

    
    </div>
    
    </body>


</html>
