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

    <footer>

        <div class="start">
            <div class="logo"><img src="img/favicon.png" alt="logo"></div>

            <div class="emphasis">A reputable and certified academy you can kickstart your tech career</div>

            <div class="socials">
                <a href="#" class="soci"><i class="icon fab fa-facebook-f"></i></a>
                <a href="#" class="soci"><i class="icon fab fa-twitter"></i></a>
                <a href="#" class="soci"><i class="icon fab fa-instagram"></i></a>
                <a href="#" class="soci"><i class="icon fab fa-youtube"></i></a>
            </div>
        </div>

        <div class="end">

            <div class="group">
                <div class="head">Top Courses</div>
                <a href="prod-design.php">Product Design</a>
                <a href="proj-mgt.php">Project Management and Business Analysis</a>
                <a href="data-analysis.php">Data Analytics and Business Intelligence</a>
                <a href="cybersecurity.php">Cybersecurity</a>
            </div>
            
            <div class="group">
                <div class="head">Policies</div>
                <a href="#">Payment Policy</a>
                <a href="#">Terms and Conditions</a>
                <a href="#">Privacy Policy</a>
                <a href="#">FAQs</a>
            </div>
            
            <div class="group">
                <div class="head">Support</div>
                <a href="about.php">About Us</a>
                <a href="contact.php">Contact Us</a>
            </div>
            
            <div class="group">
                <div class="head">Contact Us</div>

                <div class="linking">
                    <div class="icon"><i class="fas fa-envelope"></i></div>
                    <a href=" mailto: info.tekpluent.co.uk">info.tekpluent.co.uk</a>
                </div>
                
                <div class="linking">
                    <div class="icon"><i class="fab fa-whatsapp"></i></div>
                    <a href="#">Chat on Whatsapp</a>
                </div>
                
                <div class="linking">
                    <div class="icon"><i class="fas fa-phone"></i></div>
                    <a href="07900400572">07900400572</a>
                </div>
            </div>

        </div>

    </footer>



    <!-- JAVASCRIPT -->
    <!-- JQUERY --><script src="plugins/jquery.min.js"></script>
    <!-- DEFAULT SCRIPT<script src="/js/index.js"></script> -->
    <!-- FONTAWESOME --><script src="plugins/fontawesome.js"></script>
    <!-- OWL CAROUSEL --><script src="plugins/owl.carousel.min.js"></script>

    <script>


        $("#contact-us-form").on('submit', function(e) {
            e.preventDefault();
            const form = $(this);
            const formData = form.serialize();

            $.ajax({
                url: 'functions/contactForm.php',
                data: formData,
                method: 'POST',
                dataType: 'json',
                success: function(response) {
                    console.log(response)
                    if (response.success === true) {
                        console.log(response);
                        openModal();
                        closeModal();
                        $('#contact-us-form')[0].reset();
                        $('#finMod').css('left',"50%")
                        setTimeout(function() {
                        $('#finMod').css('left', '150%')
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

            if (error && typeof error === 'object') {
                for (const field in error) {
                const errorMessage = `<div class="error-message"> ${error[field]}</div>`;
                errorContainer.innerHTML += errorMessage;
                }
            } else {
                const errorMessage = `<div class="error-message">${errors}</div>`;
                errorContainer.innerHTML += errorMessage;
            }
    }
    </script>

</body>
</html>