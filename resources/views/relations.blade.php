<html lang="en">
<head>
  <title>Laravel 8 Multiple Image Upload Example - ItSolutionStuff.com</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
  <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
</head>
<body>
  
<div class="container lst">
  
@if (count($errors) > 0)
<div class="alert alert-danger">
    <strong>Sorry!</strong> There were more problems with your HTML input.<br><br>
    <ul>
      @foreach ($errors->all() as $error)
          <li>{{ $error }}</li>
      @endforeach
    </ul>
</div>
@endif
  
@if(session('success'))
<div class="alert alert-success">
  {{ session('success') }}
</div> 
@endif
  
<h3 class="well">Laravel 8 Multiple </h3>
 
<form method="post" action="{{url('save_form')}}" enctype="multipart/form-data">
    @csrf
  
    <div class="form-group">
      <label for="email">Name:</label>
      <input type="text" class="form-control" placeholder="Enter name" name="player_name">
    </div>
    <div class="form-group">
      <label for="email">File:</label>
      <input required type="file" class="form-control" placeholder="Enter name" name="player_profile[]" multiple>
    </div>
    <div class="form-group">
      <label for="email">City:</label>
      <input type="text" class="form-control" placeholder="Enter city name" name="city_name">
    </div>
    <button type="submit" class="btn btn-success" style="margin-top:10px">Submit</button>
  
</form>        
</div>
  
<script type="text/javascript">
    $(document).ready(function() {
      $(".btn-success").click(function(){ 
          var lsthmtl = $(".clone").html();
          $(".increment").after(lsthmtl);
      });
      $("body").on("click",".btn-danger",function(){ 
          $(this).parents(".hdtuto").remove();
      });
    });
</script>
  
</body>
</html>