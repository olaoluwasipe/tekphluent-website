<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Tekphluent</title>
    <link rel="shortcut icon" href="/img/favicon.png" type="image/x-icon">

    <!-- CSS -->
    <!-- FONT AWESOME --><link rel="stylesheet" href="/plugins/fontawesome.css">
    <!-- OWL CAROUSEL --><link rel="stylesheet" href="/plugins/owl.carousel.min.css">
    <!-- OWL CAROUSEL --><link rel="stylesheet" href="/plugins/owl.theme.default.min.css">
    <!-- DEFAULT STYLESHEET --><link rel="stylesheet" href="/css/style.css">
</head>


<body class="">

    <nav class="navbar">

        <div class="logo"><img src="/img/favicon.png" alt="Tekphluent logo"></div>

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
                    {{-- <a href="proj-mgt.php">Project Management and Business Analysis</a>
                    <a href="cybersecurity.php">Cybersecurity</a>
                    <a href="data-analysis.php">Data Analytics and Business Intelligence</a>
                    <a href="fullstack.php">Fullstack</a>
                    <a href="software-quality.php">Software Quality Assuarnce</a> --}}
                </div>
            </div>
            <a href="/about">About Us</a>
            <a href="/contact">Contact Us</a>
        </div>

        <a href="interest-form" class="cta-button">Get Started</a>

    </nav>
