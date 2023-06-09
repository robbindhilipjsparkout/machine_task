
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>

    <!-- Bootstrap JavaScript -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>



<!-- error message jquery -->
<script>
$(document).ready(function() {
  $('form#questionForm').on('submit', function(e) {
    e.preventDefault();

    var form = $(this);
    var questionsContainer = form.find('#questionsContainer');

    // Clear any previous error messages
    form.find('.error-message').remove();

    var isValid = true;

    // Perform client-side validation
    questionsContainer.find('.question').each(function() {
      var question = $(this);
      var questionInput = question.find('input[name$="[question]"]');
      var option1Input = question.find('input[name$="[option1]"]');
      var option2Input = question.find('input[name$="[option2]"]');
      var correctAnswerInput = question.find('input[name$="[correctAnswer]"]');

      if (questionInput.val() === '') {
        questionInput.after('<div class="error-message text-danger">*Please enter a question</div>');
        isValid = false;
      }

      if (option1Input.val() === '') {
        option1Input.after('<div class="error-message text-danger">*Please enter Option 1</div>');
        isValid = false;
      }

      if (option2Input.val() === '') {
        option2Input.after('<div class="error-message text-danger">*Please enter Option 2</div>');
        isValid = false;
      }

      if (correctAnswerInput.val() === '') {
        correctAnswerInput.after('<div class="error-message text-danger">*Please enter the Correct Answer</div>');
        isValid = false;
      }
    });

    // Submit the form if valid
    if (isValid) {
      form.off('submit').submit();
    }
  });
});
</script>





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



