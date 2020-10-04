<!DOCTYPE html>
<html>
<head>
 <meta name="viewport" content="width=device-width, initial-scale=1">
 <meta charset="utf-8">
   <script src="//ajax.googleapis.com/ajax/libs/jquery/2.0.3/jquery.min.js"></script>
     <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
<title>AJAX FORM</title>
<style>
	.false{
		color:red;
	}
	img{
		position:absolute;
		transnform:translate(-50%,-50%);
		top:50%;
		left:50%;
		display:none;
	}
</style>
</head>
<body>
<div class="container">
	<img src="spinner.svg" alt="spinner" id="spinner">
	<h2>AJAX FORM</h2>
 <form action="process.php" method="post" id="my_form">
	<div class="form-group" id="name-group">
      <label for="name">Name:</label>
      <input type="text" class="form-control" id="name" onkeyup="typeCheck(event)" placeholder="Enter Your Name" name="name">
      <div class="invalid-feedback">Please Fill Out This Field.</div>
    </div>
  
    <div class="form-group" id="email-group">
      <label for="email">Email:</label>
      <input type="email" class="form-control" id="email" onkeyup="emailCheck(event)" placeholder="Enter email" name="email">
      <div class="invalid-feedback">Please Enter Valid Email.</div>
    </div>
	
	<div class="form-group" id="org-group">
      <label for="org">Organization:</label>
      <input type="text" class="form-control" id="org" onkeyup="typeCheck(event)" placeholder="Organization Name" name="org">
      <div class="invalid-feedback">Please Fill Out This Field.</div>
    </div>
	
	<div class="form-group" id="event-group">
      <label for="event">Event Name:</label>
      <input type="text" class="form-control" id="event" onkeyup="typeCheck(event)" placeholder="Event Name" name="event">
      <div class="invalid-feedback">Please Fill Out This Field.</div>
    </div>
	
	<div class="form-group">
	  <label for="suggestion">Suggestion:</label>
	  <textarea class="form-control" rows="5" id="suggestion" onkeyup="typeCheck(event)" name="suggestion"></textarea>
	</div>
    <button type="submit" class="btn btn-primary">Submit</button>
  </form>
  <div id="server-results">
  </div>
</div>
</body>
<script src="ajax.js"></script>
</html
