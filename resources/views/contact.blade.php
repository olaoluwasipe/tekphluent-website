@include('partials.header')

    <div class="contact">

        <div class="top">
            <div class="header">Contact Us</div>
        </div>

        <div id="errorContainer" class="input-tab"></div>

        <div class="base">

            <div class="details">

                <div class="heading">Get In touch with us</div>

                <p>
                    Not sure which course to enrol in? Our team is here to help you make a decision.
                    Send us a message now, and we will be happy to assist you.
                </p>

                <div class="list">

                    <div class="line">
                        <div class="icon"><i class="fas fa-envelope"></i></div>
                        <a href="mailto:info@tekphluent.co.uk" style="text-decoration: underline;">info@tekphluent.co.uk</a>
                    </div>

                    <div class="line">
                        <div class="icon"><i class="fab fa-whatsapp"></i></div>
                        <a href="#">Chat on whatsapp</a>
                    </div>

                    <div class="line">
                        <div class="icon"><i class="fas fa-phone"></i></div>
                        <a href="tel:+07900400572">07900400572</a>
                    </div>

                </div>

            </div>

            <form action="functions/contactForm.php" method="POST" id="contact-us-form">

                <div class="input-tab">
                    <label for="name">Full Name</label>
                    <input type="text" name="fullName" id="fullName" placeholder="Enter Name" required>
                </div>

                <div class="input-tab">
                    <label for="mail">Email</label>
                    <input type="email" name="email" id="email" placeholder="Enter Email" required>
                </div>

                @csrf

                <div class="input-tab">
                    <label for="number">Phone Number</label>
                    <input type="text" name="phoneNumber" placeholder="Enter Phone Number" required>
                </div>

                <div class="input-tab">
                    <label for="message">Message</label>
                    <textarea name="message" style="color: black; font-family: inherit;" placeholder="Enter your Message" required></textarea>
                </div>

                <button type="submit" class="button" id="submit">Send Message</button>

            </form>

        </div>

    </div>

    <div class="overlay" id="overlay">
        <div class="inside">

            <div class="backdrop" onclick="closeModal()"></div>

            <div class="modal">
                <div class="icon"><i class="fas fa-check"></i></div>

                <p>Message Sent Successfully</p>

                <p>
                    Thank you for contacting us. <br>
                    A member of our team will be in touch with you shortly.
                </p>
            </div>
        </div>
    </div>

    @include('partials.footer')

    <script>


        $("#contact-us-form").on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const button = form.find('button');
            const formData = form.serialize();

            $.ajax({
                url: 'contact',
                data: formData,
                method: 'POST',
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
                        openModal();
                        closeModal();
                        $('#contact-us-form')[0].reset();
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

        function openModal() {
            document.getElementById('overlay').style.height = "100vh";
        }

        function closeModal() {
            document.getElementById('overlay').style.height = "0vh";
        }


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
