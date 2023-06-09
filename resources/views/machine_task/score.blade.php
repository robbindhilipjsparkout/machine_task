<!DOCTYPE html>
<html>
<head>
    <title>Test Score</title>
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css">
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
    </style>
</head>
<body>
    <div class="container">
        <h3>Your Test Score: : {{ $score }} / 100</h3>
        
        @foreach ($questions as $question)
        <div class="card">
            <div class="card-header">
                <h5>{{ $question->questions }}</h5>
            </div>
            <div class="card-body">
                <p class="answer">Selected Answer: {{ $answers[$question->id] }}</p>
                @foreach($question->QuestionToCorrectAnswer as $answer)
                <p class="answer"><strong>Correct Answer:</strong> {{$answer->correctanswer}}</p>
                @endforeach
            </div>
        </div>
        @endforeach
        
        <hr>
        
    </div>
    
    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>
