<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <title>Dashboard</title>
</head>
<body>


<div class="col-lg-3 offset-1" style="margin-top:20px;">
@if(session()->has('message'))
    <div class="alert alert-success">
        {{ session()->get('message') }}
    </div>
@endif

</div>



  <div class="container">
    <h1>Create Questions:</h1>
    <!-- <form id="questionForm"  > -->
    <form method="POST" action="{{ route('questionstore')}}" style="margin-top:25px" id="questionForm" class=" login-input " enctype="multipart/form-data">

@csrf
      <div id="questionsContainer">
        <div class="question form-row">
          <div class="col">
            <input type="text" class="form-control" name="test[0][question]" placeholder="Enter a question" ><br>
       
          </div><br><br>
          <div class="col">
            <input type="text" class="form-control" name="test[0][option1]" placeholder="Option 1" ><br>
       
          </div><br><br>
          <div class="col">
            <input type="text" class="form-control" name="test[0][option2]"  placeholder="Option 2" >
          </div><br><br>
          <div class="col">
            <input type="text" class="form-control" name="test[0][correctAnswer]" placeholder="Correct Answer" >
          </div>
          <div class="col">
            <button type="button" class="btn btn-success addQuestion">+</button>
            
            <!-- //<button type="button" class="btn btn-danger removeQuestion">-</button> -->
            
          </div>
        </div>
      </div><br>
      <button type="submit" class="btn btn-primary">Submit</button>
     <a href="{{route('mainpage')}}" ><button type="button" class="btn btn-primary">Back</button></a>
    </form>
  </div>


 @include('layouts.script')




</body>
</html>

