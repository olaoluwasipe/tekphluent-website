@include('partials.header')

<style>
    body{
        height: 100vh;
        overflow: hidden;
        background-image: url('../img/interest.png');
        background-color: var(--color1);
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .modal {
        left: 150%;
    }
footer {
    display: none;
}
</style>

    <div class="form-space">
        <form action="functions/reviewForm.php" method="POST" class="interest" id="review-form">

            <div class="top">
                <div class="header">review Form</div>
            </div>

            <div id="errorContainer" class="input-tab"></div>

            <div class="input-tab">
                <label for="name">Full Name</label>
                <input type="text" name="fullName" id="fullName" placeholder="Enter Name" required>
            </div>


            <div class="input-tab">
                <label for="number">Course of Interest</label>
                <select name="course_id" id="courseOfInterest" required>
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}">{{$course->title}}</option>
                    @endforeach
                </select>
            </div>

            @csrf

            <div class="input-tab">
                <label for="number">Course Start Date</label>
                <select name="courseDate" id="courseDate" required>
                    <option value="March(2024)">March (2024)</option>
                    <option value="April(2024)">April (2024)</option>
                    <option value="July(2024)">July (2024)</option>
                    <option value="October(2024)">October (2024)</option>
                    <option value="December(2024)">December (2024)</option>
                </select>
            </div>

            <div class="input-tab">
                <label for="name">message</label>
                <textarea name="message" id="message" placeholder="Enter your message" required>

                </textarea>
            </div>

            <div class="input-tab">

                <!-- other form fields -->
            </div>

            <button type="submit" class="button" id="submit"> Submit</button>

        </form>

    </div>

    <div class="modal" id="finMod">
        <div class="icon"><i class="fas fa-check"></i></div>

        <p>Review Form Submitted Successfully</p>

    </div>


    @include('partials.footer')

    <script>

    $("#review-form").on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const button = form.find('button');
            const formData = form.serialize();
            $.ajax({
                url: 'review',
                data: formData,
                method: 'POST',
                dataType: 'json',
                beforeSend: function () {
                    button.text('Sending...')
                    button.append('<div class="loader"></div>')
                },
                success: function(response) {
                    console.log(response.success)
                    button.text('Submit')
                    button.find('loader').remove()
                    if (response.success) {

                        console.log(response);
                        $("body").addClass("modalisOpen")
                        $('#review-form')[0].reset();
                        $('#finMod').css('left',"50%")
                        $('#overlay').css('height',"100vh")
                        setTimeout(function() {
                            $("body").removeClass("modalisOpen")
                            $('#finMod').css('left', '150%')
                            $('#overlay').css('height',"0vh")
                        }, 3000)
                    }
                    else {
                      // Form submission failed
                      if (response.errors) {
                          // Display validation errors
                          displayErrors(response.errors);
                      } else {
                          // Display a generic error message
                          displayErrors({ error: response.error });
                      }

                    }
                },
                error: function(error) {
                    button.text('Submit')
                    button.find('loader').remove()
                    let errors = error.responseJSON;
                    if(errors.errors.length < 2){
                        displayErrors(error.message);
                    }else {
                        displayErrors(errors.errors)
                    }
                }
            })
        })

        function displayErrors(error) {

        // Clear any existing error messages
            const errorContainer = document.getElementById('errorContainer');
            errorContainer.innerHTML = '';

            if (typeof error === 'object') {
                for (const field in error) {
                const errorMessage = `<div class="error-message"> ${error[field]}</div>`;
                errorContainer.innerHTML += errorMessage;
                }
            } else {
                const errorMessage = `<div class="error-message">${error}</div>`;
                errorContainer.innerHTML += errorMessage;
            }
        }

    </script>



    <script>

    </script>


</body>
</html>
