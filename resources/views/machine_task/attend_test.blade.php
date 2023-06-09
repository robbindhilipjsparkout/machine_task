<!DOCTYPE html>
<html>
<head>
    <title>Attend test</title>
    
    @include('layouts.attend_test_style')

</head>
<body>
   
    <!-- <div class="time">
        Time Remaining: <span id="timer"></span>
    </div> -->

    @if ($questions->currentPage() == 1)
     <h1 class="test">Test</h1>
        <p>
            * You must use a functioning webcam and microphone.<br>
            * No cell phones or other secondary devices in the room or test area.<br>
            * Your desk/table must be clear or any materials except your test-taking device.<br>
            * No one else can be in the room with you.<br>
            * No talking.
        </p>
    @endif
    <div id="questionContainer">
    <form id="questionForm" action="{{ route('score') }}" method="GET"  >
            @csrf

            @php
            $counter = ($questions->currentPage() - 1) * $questions->perPage() + 1;
            @endphp

            @foreach ($questions as $question)
                <h6>
                    <span class="counter">{{ $counter }} ) </span>
                    <span class="question-text">{{ $question->questions }}</span>
                </h6>

              
                @foreach ($question->QuestionToOption as $q)
            <div class="options-container">
                <div class="option">
                    <div class="letter">A</div>
                    <input type="radio" id="radioButton{{ $q->id }}" name="answers[{{ $question->id }}]" value="{{ $q->option1 }}">
                    <label for="radioButton{{ $q->id }}">{{ $q->option1 }}</label>
                </div>
                <div class="option">
                    <div class="letter">B</div>
                    <input type="radio" id="radioButton{{ $q->id + 1 }}" name="answers[{{ $question->id }}]" value="{{ $q->option2 }}">
                    <label for="radioButton{{ $q->id + 1 }}">{{ $q->option2 }}</label>
                </div>
            </div>
        @endforeach

                <hr style="color:white">
                @php
                    $counter++;
                @endphp
            @endforeach

      


            @if ($questions->currentPage() == $questions->lastPage())
    <button type="button" onclick="navigate('{{ $questions->previousPageUrl() }}')">Prev</button>
    <button style="margin-top:15px" class="submit" type="button" onclick="submitForm()">Submit</button>
@else
    <button type="button" onclick="navigate('{{ $questions->nextPageUrl() }}')">Next</button>
    <button type="button" onclick="navigate('{{ $questions->previousPageUrl() }}')">Prev</button>
@endif




        </form>
    </div>

    <a href="{{ route('mainpage') }}"><button style="margin:7px" type="button" class="btn btn-primary">Back</button></a>

    @include('layouts.attend_test_script')

    <script>
    function navigate(url) {
        var form = document.getElementById('questionForm');
        
        var xhr = new XMLHttpRequest();
        xhr.open('GET', url);
        xhr.onload = function() {
            if (xhr.status === 200) {
                var response = xhr.responseText;
                var parser = new DOMParser();
                var newDocument = parser.parseFromString(response, 'text/html');
                
                var newForm = newDocument.getElementById('questionForm');
                form.innerHTML = newForm.innerHTML;
            }
        };
        xhr.send();
    }

    function submitForm() {
        var form = document.getElementById('questionForm');
        form.submit();
    }
</script>



</body>
</html>
