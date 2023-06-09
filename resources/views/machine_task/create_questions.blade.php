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
  <div class="container">
    <h1>Create Questions:</h1>
    <!-- <form id="questionForm"  > -->
    <form method="POST" action="{{ route('questionstore')}}" style="margin-top:25px" id="questionForm" class=" login-input " enctype="multipart/form-data">

@csrf
      <div id="questionsContainer">
        <div class="question form-row">
          <div class="col">
            <input type="text" class="form-control" name="test[0][question]" placeholder="Enter a question" required><br>

          </div><br><br>
          <div class="col">
            <input type="text" class="form-control" name="test[0][option1]" placeholder="Option 1" required><br>
          </div><br><br>
          <div class="col">
            <input type="text" class="form-control" name="test[0][option2]"  placeholder="Option 2" required>
          </div><br><br>
          <div class="col">
            <input type="text" class="form-control" name="test[0][correctAnswer]" placeholder="Correct Answer" required>
          </div>
          <div class="col">
            <button type="button" class="btn btn-success addQuestion">+</button>
            
            <button type="button" class="btn btn-danger removeQuestion">-</button>
          </div>
        </div>
      </div><br>
      <button type="submit" class="btn btn-primary">Submit</button>
    </form>
  </div>


  <script>
    // JavaScript code to handle dynamic field addition
    document.addEventListener('DOMContentLoaded', function () {
        let questionIndex = 0;

        // Add question field
        document.querySelector('.addQuestion').addEventListener('click', function () {
            questionIndex++;

            const questionTemplate = `
                <div class="question form-row">
                    <div class="col">
                        <input type="text" class="form-control" name="test[${questionIndex}][question]" placeholder="Enter a question"><br>
                    </div><br><br>
                    <div class="col">
                        <input type="text" class="form-control" name="test[${questionIndex}][option1]" placeholder="Option 1"><br>
                    </div><br><br>
                    <div class="col">
                        <input type="text" class="form-control" name="test[${questionIndex}][option2]" placeholder="Option 2">
                    </div><br><br>
                    <div class="col">
                        <input type="text" class="form-control" name="test[${questionIndex}][correctAnswer]" placeholder="Correct Answer">
                    </div>
                    <div class="col">
                        <button type="button" class="btn btn-danger removeQuestion">-</button>
                    </div>
                </div>
            `;

            const questionContainer = document.getElementById('questionsContainer');
            const questionDiv = document.createElement('div');
            questionDiv.innerHTML = questionTemplate;
            questionContainer.appendChild(questionDiv);
        });

        // Remove question field
        document.addEventListener('click', function (event) {
            if (event.target.classList.contains('removeQuestion')) {
                event.target.closest('.question').remove();
            }
        });
    });
</script>

</body>
</html>
