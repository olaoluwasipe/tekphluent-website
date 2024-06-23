@include('partials.header')

<style>
    body{
        height: 100vh;
        overflow: hidden;
        background-image: url('../img/interest.png');
        background-size: cover;
        background-position: center;
        background-repeat: no-repeat;
    }
    .modal{
    position: absolute;
    z-index: 50;
    top: 50%;
    left: 150%;
    transform: translate(-50%,-50%);
    width: fit-content;
    padding: 40px 5px;
    border-radius: 20px;
    display: flex;
    flex-direction: column;
    align-items: center;
    justify-content: center;
    gap: 25px;
    text-align: center;
    background-color: rgba(255,255,255,.2);
    backdrop-filter: blur(10px);
    transition: .3s;
}

.modal .icon{
    width: 70px;
    height: 70px;
    border-radius: 50px;
    border: 1px solid #D2F1EB;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 2em;
    background-color: #E8F7F4;
    color: #179980;
}

.modal p{
    width: 70%;
    font-size: 1.1em;
    color: #fff;
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

    <!-- JAVASCRIPT -->
    <!-- JQUERY --><script src="/plugins/jquery.min.js"></script>
    <!-- DEFAULT SCRIPT<script src="/js/index.js"></script> -->
    <!-- FONTAWESOME --><script src="/plugins/fontawesome.js"></script>
    <!-- OWL CAROUSEL --><script src="/plugins/owl.carousel.min.js"></script>

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
                }
            })
        })

        function displayErrors(errors) {
            const errorContainer = document.getElementById('errorContainer');
            errorContainer.innerHTML = '';

            if (errors && typeof errors === 'object') {
                for (const field in errors) {
                const errorMessage = `<div class="error-message"> ${errors[field]}</div>`;
                errorContainer.innerHTML += errorMessage;
                }
            } else {
                const errorMessage = `<div class="error-message">${errors}</div>`;
                errorContainer.innerHTML += errorMessage;
            }

        }

    </script>



    <script>

    </script>


</body>
</html>
