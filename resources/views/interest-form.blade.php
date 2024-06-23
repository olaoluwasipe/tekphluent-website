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

footer {
    display: none;
}
</style>

    <div class="form-space">

        <form action="functions/interestForm.php" method="POST" class="interest" id="interest-form">

            <div class="top">
                <div class="header">interest Form</div>
            </div>

            <div id="errorContainer" class="input-tab"></div>

            <div class="input-tab">
                <label for="name">Full Name</label>
                <input type="text" name="fullName" id="userName" placeholder="Enter Name" required>
            </div>

            <div class="input-tab">
                <label for="mail">Email</label>
                <input type="email" name="email" id="email" placeholder="Enter Email" required>
            </div>

            <div class="input-tab">
                <label for="number">Phone Number</label>
                <input type="text" name="phoneNumber" id="phoneNumber" placeholder="Enter Phone Number" required>
            </div>

            @csrf

            <div class="input-tab mini">
                <label for="number">Country</label>
                <select name="country" id="country">

                    <option value="England">England</option>
                    <option value="Nigeria">Nigeria</option>
                    <option value="Canada">Canada</option>
                    <option value="Ireland">Ireland</option>
                </select>
            </div>

            <div class="input-tab mini">
                <label for="number">Age Range</label>
                <select name="agerange" required>
                    <option value="XXX">Select age range</option>
                    <option value="18-24">18 - 24</option>
                    <option value="25-29">25 - 29</option>
                    <option value="30-39">30 - 39</option>
                    <option value="40+">40+</option>
                </select>
            </div>

            <div class="input-tab">
                <label for="number">Course of Interest</label>
                <select name="course_id" id="courseOfInterest" required>
                    @foreach ($courses as $course)
                        <option value="{{$course->id}}" {{isset($_GET['course']) && $_GET['course'] == $course->id ? 'selected' : ''}}>{{$course->title}}</option>
                    @endforeach
                </select>
            </div>

            <div class="input-tab">
                <label for="number">Course Start Date</label>
                <select name="courseDate" id="courseDate" required>
                    <option value="July(2024)">July (2024)</option>
                    <option value="October(2024)">October (2024)</option>
                    <option value="December(2024)">December (2024)</option>
                </select>
            </div>

            <div class="input-tab">

                <!-- other form fields -->
            </div>

            <button type="submit" class="button" id="submit"> Submit </button>

        </form>

    </div>

    <div class="modal" id="finMod">
        <div class="icon"><i class="fas fa-check"></i></div>

        <p>Form Submitted Successfully</p>

        <p>A member of our team will get in touch with you shortly.</p>
    </div>



    @include('partials.footer')

    <script>
        $("#interest-form").on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const button = form.find('button');
            const formData = form.serialize();

            $.ajax({
                url: '/interest',
                method: 'post',
                data: formData,
                dataType: 'json',
                beforeSend: function () {
                    button.text('Sending...')
                    button.append('<div class="loader"></div>')
                },
                success: function(response) {
                    console.log(response)
                    button.text('Submit')
                    button.find('loader').remove()
                    if (response.success) {

                        console.log(response);
                        $("body").addClass("modalisOpen")
                        $('#interest-form')[0].reset();
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

</body>
</html>
