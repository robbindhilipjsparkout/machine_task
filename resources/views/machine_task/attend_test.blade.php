<!DOCTYPE html>
<html>
<head>
    <title>Attend test</title>
    
    <!-- Include other HTML head elements -->
    <link rel="stylesheet" href="path/to/custom.css">

<style>


 .pagination a:hover{
  color: green;
 }
/* Pagination styles */
.my-pagination-class .page-link {
  color: green; /* Default color for pagination links */
  border: 1px solid #dee2e6; /* Default border color for pagination links */
}

.my-pagination-class .page-item.active .page-link {
  background-color: green; /* Color for active page */
  border-color: green; /* Border color for active page */
  color: white; /* Text color for active page */
}



</style>

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

        <nav aria-label="Page navigation">
        <ul class="pagination justify-content-center mt-3 my-pagination-class">
            {{ $questions->onEachSide(1)->links('pagination::bootstrap-4' , ['class' => 'my-pagination-class'])  }}
        </ul>
    </nav>

    @if ($questions->currentPage() == $questions->lastPage())
        <button type="submit">Submit</button>
        @else
        <a href="{{ $questions->nextPageUrl() }}"><button type="button">Next</button></a>
    @endif

    <a href="{{ route('mainpage') }}"><button type="button">Back</button></a>
</form>


</body>
</html>
