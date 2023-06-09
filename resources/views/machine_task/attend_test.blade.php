<!DOCTYPE html>
<html>
<head>
    <title>Attend test</title>
    
    @include('layouts.attend_test_script_style')

</head>
<body>
    <h1>Test</h1>  

    <form action="{{ route('score') }}" method="POST">
        @csrf

        @foreach ($questions as $question)
            <h3>{{ $question->questions }}</h3>
            
            @foreach($question->QuestionToOption as $q)
                <input type="radio" id="radioButton1"  name="answers[{{$question->id}}]" value="{{$q->option1}}" >
                <label>{{$q->option1}}</label><br>
                <input type="radio"id="radioButton2"  name="answers[{{$question->id}}]" value="{{$q->option2}}" >
                <label>{{$q->option2}}</label>
            @endforeach
            <hr>
        @endforeach

        <button type="submit">Submit</button>
        <a href="{{route('mainpage')}}" ><button type="button">Back</button></a>
    </form>

    <!-- Add Pagination -->
    <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-3">
            {{ $questions->onEachSide(1)->links('pagination::bootstrap-4') }}
        </ul>
    </nav>



</body>
</html>
