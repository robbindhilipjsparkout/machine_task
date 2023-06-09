<!DOCTYPE html>
<html>
<head>
     <!-- Bootstrap CSS -->
 <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
 <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- Include Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css">
    <title>Test Score</title>
   
    <style>
        body {
            background-color: #f8f9fa;
        }
        .container {
            max-width: 600px;
            margin: 0 auto;
            padding-top: 50px;
        }
        h1, h3, h4 {
            text-align: center;
        }
        .card {
            margin-bottom: 20px;
        }
        .card-header {
            background-color: #f8f9fa;
            border-bottom: none;
            font-weight: bold;
        }
        .answer {
            text-align: center;
        }
        button[type="button"] {
            /* display: block;
            margin: 20px auto 0; */
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
            text-decoration:none;
        }

        button[type="button"]:hover {
            background-color: #45a049;
           
        }
    </style>



   
</head>
<body>


    <div class="container">
    <a href="{{route('mainpage')}}" ><button type="button" class="btn btn-primary">Back</button></a>
        <h3>Your Test Score: {{ $score }} / 100</h3>

        @foreach ($questions as $question)
            <div class="card mb-3">
                <div class="card-header">
                    <h5>{{ $question->questions }}</h5>
                </div>
                <div class="card-body">
                    @if (isset($answers[$question->id]))
                        <p class="answer">Selected Answer: {{ $answers[$question->id] }}</p>
                    @else
                        <p class="answer">Selected Answer: N/A</p>
                    @endif
                    @foreach ($question->QuestionToCorrectAnswer as $answer)
                        <p class="answer"><strong>Correct Answer:</strong> {{ $answer->correctanswer }}</p>
                    @endforeach
                </div>
            </div>
        @endforeach
    </div>
</body>

        <hr>
      
        
    </div>
    @include('layouts.script')

</body>
</html>
