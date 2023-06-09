<!DOCTYPE html>
<html>
<head>
  <title>Test App</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
  <style>
    body {
      display: flex;
      justify-content: center;
      align-items: center;
      flex-direction: column;
      height: 100vh;
      margin: 0;
      background-image: url("https://img.freepik.com/free-vector/geometric-blue-background-desktop-wallpaper-vector_53876-135927.jpg?w=1060&t=st=1686288162~exp=1686288762~hmac=19c1bce5236bdabfbabe5518c81f4cc5472bfdb8f82633840f0b6894ae69be12");
      background-size: cover;
    }

    .button-container {
      text-align: center;
      margin-top: 20px;
    }

    .button {
      margin: 10px;
    }

    .mission-task {
      color: white;
      font-size: 60px;
      font-weight: bold;
      text-align: center;
      margin-top: 50px;
    }
  </style>
</head>
<body>
  <h1 class="mission-task">Mission Task</h1>

  <div class="button-container">
  <a href="{{route('questionscreate')}}" class="color:white">    <button class="btn btn-primary button">Create Test</button>  </a>
                               
   
  <a href="{{route('attendshow')}}" class="color:white">   <button class="btn btn-primary button">Attend Test</button>   </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>