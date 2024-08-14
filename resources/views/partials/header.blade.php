<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{$pagetitle}} | Tekphluent</title>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">

    <!-- CSS -->
    {{-- <!-- FONT AWESOME --><link rel="stylesheet" href="/plugins/fontawesome.css"> --}}
    <!-- OWL CAROUSEL --><link rel="stylesheet" href="/plugins/owl.carousel.min.css">
    <!-- OWL CAROUSEL --><link rel="stylesheet" href="/plugins/owl.theme.default.min.css">
    <!-- DEFAULT STYLESHEET --><link rel="stylesheet" href="/css/style.css">
</head>


<body class="">

    <nav class="navbar">

        <a href="/" class="logo"><img src="/img/tekphluent-logo.png" alt="Tekphluent logo"></a>

        <div class="navlinks">
            <a href="/" class="active">Home</a>
            <a href="/why">Why choose us</a>
            <div class="dropdown">
                <div class="dropbtn">Courses <i class="icon fas fa-angle-down"></i></div>
                <div class="dropped">
                    @php
                        $courses = App\Models\Course::all();
                    @endphp
                    @foreach ($courses as $course)
                        <a href="/course/{{$course->slug}}">{{$course->title}}</a>
                    @endforeach
                </div>
            </div>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
            <a href="https://lms.tekphluent.co.uk">Log in to LMS</a>
        </div>

        <div class="cornermenu">
            <a href="/interest-form" class="cta-button">Get Started</a>

            <a href="#" class="icon" onclick="myFunction()">
              <i class="fa fa-bars"></i>
            </a>
        </div>

    </nav>
