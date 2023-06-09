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
      background-image: url("https://img.freepik.com/free-vector/geometric-blue-background-desktop-wallpaper-vector_53876-135927.jpg");
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
  <a href="{{route('teachlogin')}}" class="color:white">    <button class="btn btn-success button">Create Test</button>  </a>
                               
   
  <a href="{{route('studlogin')}}" class="color:white">   <button class="btn btn-success button">Attend Test</button>   </a>
  </div>

  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>
</html>