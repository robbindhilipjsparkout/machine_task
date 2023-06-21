<!DOCTYPE html>
<html>
<head>
    <title>Attend test</title>
    
    @include('layouts.attend_test_script_style')
   


</head>
<body>
    

<h1 class="test">Test</h1> 
        <!-- <div class="time">
            Time Remaining: <span id="timer"></span>
        </div> -->


    @if($questions->currentPage()==1 )
        <p>* You must use a functioning webcam and microphone.<br>
           * No cell phones or other secondary devices in the room or test area.<br>
           * Your desk/table must be clear or any materials except your test-taking device.<br>
           * No one else can be in the room with you.<br>
           * No talking.</p>
        @endif


    <form action="{{ route('score') }}" method="GET">
        @csrf

        @php
        $counter = ($questions->currentPage() - 1) * $questions->perPage() + 1;
        @endphp

        @foreach ($questions as $question)
           <h6>
               <span class="counter">{{ $counter }} ) </span>
               <span class="question-text">{{ $question->questions }}</span>
           </h6>
            
            @foreach($question->QuestionToOption as $q)
                <div class="options-container">
                    <div class="option">
                        <div class="letter">A</div>
                        <input type="radio" id="radioButton1" name="answers[{{ $question->id }}]" value="{{ $q->option1 }}" >
                        <label>{{ $q->option1 }}</label>
                    </div>
                    <div class="option">
                        <div class="letter">B</div>
                        <input type="radio" id="radioButton2" name="answers[{{ $question->id }}]" value="{{ $q->option2 }}" >
                        <label>{{ $q->option2 }}</label>
                    </div>
                </div>
            @endforeach
            <hr style="color:white">
            @php
                $counter++;
            @endphp
        @endforeach

        @if ($questions->currentPage() == $questions->lastPage())
            <a href="{{ $questions->previousPageUrl() }}"><button type="button">Prev</button></a>
            <button style="margin-top:15px" class="submit" type="submit">Submit</button>
        @else
            <a href="{{ $questions->nextPageUrl() }}"><button class="submit" type="button">Next</button></a>
            <a href="{{ $questions->previousPageUrl() }}"><button type="button">Prev</button></a>
        @endif


    </form> 

   
        <a href="{{route('mainpage')}}" ><button style="margin:7px" type="button" class="btn btn-primary">Back</button></a>
   

    
</body>
</html>
 