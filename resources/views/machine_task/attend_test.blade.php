<!DOCTYPE html>
<html>
<head>
    <title>Attend test</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 20px;
        }

        h1 {
            text-align: center;
        }

        form {
            max-width: 500px;
            margin: 0 auto;
            padding: 20px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }

        h3 {
            margin-bottom: 10px;
        }

     

        button[type="submit"] {
            display: block;
            margin: 20px auto 0;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            font-size: 16px;
        }

        button[type="submit"]:hover {
            background-color: #45a049;
        }
    </style>


</head>
<body>
    <h1>Test</h1>  

    <form action="{{ route('score') }}" method="POST">
        @csrf

        @foreach ($questions as $question)
            <h3>{{ $question->questions }}</h3>
            
            @foreach($question->QuestionToOption as $q)
                <input type="radio" id="radioButton1"  name="answers[{{$question->id}}]" value="{{$q->option1}}" required>
                <label>{{$q->option1}}</label><br>
                <input type="radio"id="radioButton2"  name="answers[{{$question->id}}]" value="{{$q->option2}}" required>
                <label>{{$q->option2}}</label>
            @endforeach
            <hr>
        @endforeach

        <button type="submit">Submit</button>
    </form>


</body>


</html>
