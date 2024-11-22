<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Booking Tickets</title>
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" type="image/x-icon" href="img/Amtrak-Logo (3).png" />

    <!-- Favicon -->
    <link href="img/favicon.ico" rel="icon">

    <!-- Google Web Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;600&family=Roboto:wght@500;700&display=swap" rel="stylesheet">

    <!-- Icon Font Stylesheet -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.10.0/css/all.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.4.1/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Libraries Stylesheet -->
    <link href="lib/animate/animate.min.css" rel="stylesheet">
    <link href="lib/owlcarousel/assets/owl.carousel.min.css" rel="stylesheet">
    <link href="lib/tempusdominus/css/tempusdominus-bootstrap-4.min.css" rel="stylesheet" />

    <!-- Customized Bootstrap Stylesheet -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

    <!-- Template Stylesheet -->
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <!-- Spinner Start -->
    <div id="spinner" class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->


    <!-- Topbar Start -->
    <div class="container-fluid bg-light d-none d-lg-block">
        <div class="row align-items-center top-bar">
            <div class="col-lg-3 col-md-12 text-center text-lg-start">
                <a href="index.html" class="navbar-brand m-0 p-0">
                 <img src="img/Amtrak-Logo (2).png" style="width: 140%;height: 300%;">
                </a>
            </div>
            <div class="col-lg-9 col-md-12 text-end">
                
                <div class="h-100 d-inline-flex align-items-center">
                    <a class="btn btn-sm-square bg-black text-primary me-1" style="color: black;" href="https://web.facebook.com/Amtrak/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-black text-primary me-1" style="color: black;" href="https://x.com/amtrak?mx=2"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-black text-primary me-1" style="color: black;" href="https://www.linkedin.com/company/amtrak"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-black text-primary me-1" style="color: black;" href="https://www.instagram.com/amtrak/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-black text-primary me-1" style="color: black;" href="https://www.youtube.com/amtrak"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-sm-square bg-black text-primary me-0" style="color: black;" href="https://www.pinterest.com/amtrak/"><i class="fab fa-pinterest"></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid nav-bar bg-light">
        <nav class="navbar navbar-expand-lg navbar-light bg-white p-3 py-lg-0 px-lg-4">
            <a href="" class="navbar-brand d-flex align-items-center m-0 p-0 d-lg-none">
                <h1 class="text-primary m-0">AMTRAK</h1>
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarCollapse">
                <div class="navbar-nav me-auto">
                    <a href="index.html" class="nav-item nav-link active">HOME</a>
                    <a href="#" class="nav-item nav-link">BOOK</a>
                    <a href="tracking.html" class="nav-item nav-link">TRAIN STATUS</a>
                    <a href="check.php" class="nav-item nav-link">MY TRIP</a>
                    <a href="https://www.amtrak.com/plan-your-trip.html" class="nav-item nav-link">PLAN</a>
                    <a href="https://www.amtrak.com/train-schedules-timetables" class="nav-item nav-link">SCHEDULES</a>
                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-bs-toggle="dropdown">DEALS</a>
                        <div class="dropdown-menu fade-up m-0">
                        <a href="seniors.html" class="dropdown-item">Senior Discounts</a>
                            <a href="child.html" class="dropdown-item">Child Discounts</a>
                            <a href="student.html" class="dropdown-item">Student Discounts</a>
                            <a href="deals.html" class="dropdown-item">See all discounts</a>
                        </div>
                    </div>
                    <a href="reward.html" class="nav-item nav-link">Guest Reward <i class="bi bi-person-circle"></i></i></a>
                    <a href="contact.html" class="nav-item nav-link">Need Help?</a>
                </div>
                
            </div>
        </nav>
    </div>
    <!-- Navbar End -->


    <!-- Page Header Start -->
    <div class="container-fluid page-header mb-5 py-5">
        <div class="container">
            <h1 class="display-3 text-white mb-3 animated slideInDown">Booking</h1>
            <nav aria-label="breadcrumb animated slideInDown">
                <ol class="breadcrumb text-uppercase">
                    <li class="breadcrumb-item"><a class="text-white" href="#">Home</a></li>
                    <li class="breadcrumb-item"><a class="text-white" href="#">Pages</a></li>
                    <li class="breadcrumb-item text-white active" aria-current="page">Booking</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->


    <!-- Booking Start -->
    <div class="container-fluid my-5 px-0">
        <div class="video wow fadeInUp" data-wow-delay="0.1s">
            <button type="button" class="btn-play" data-bs-toggle="modal" data-src="https://www.youtube.com/watch?v=yS9liga5JF4" data-bs-target="#videoModal">
                <span></span>
            </button>

            <div class="modal fade" id="videoModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content rounded-0">
                        <div class="modal-header">
                            <h5 class="modal-title" id="exampleModalLabel">Youtube Video</h5>
                            <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                        </div>
                        <div class="modal-body">
                            <!-- 16:9 aspect ratio -->
                            <div class="ratio ratio-16x9">
                                <iframe class="embed-responsive-item" src="" id="video" allowfullscreen allowscriptaccess="always"
                                    allow="autoplay"></iframe>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="text-white mb-4">Beginner's Guide to Train Travel</h1>
            <h3 class="text-white mb-0">New to train travel? This Beginner's Guide will give you all the tips and tricks for vacationing by rail!</h3>
        </div>
        <div class="container position-relative wow fadeInUp" data-wow-delay="0.1s" style="margin-top: -6rem;">
            <div class="row justify-content-center">
                <div class="col-lg-8">
                    <div class="bg-light text-center p-5">
                        <h1 class="mb-4">Book A Train</h1><br>
                        <form action="crud/adddata.php" method="post">
                            <div class="row g-3">
                                <div class="col-12 col-sm-6">
                                <h5>Name</h5>
                                    <input type="text" name="name" id="name" class="form-control border-0" placeholder="Your Name" style="height: 55px;" class="form-control" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                <h5>Email</h5>
                                    <input type="email" name="email" id="email" class="form-control border-0" placeholder="Your Email" style="height: 55px;" class="form-control" required>
                                </div>
                                <div class="col-12 col-sm-6">
                                <h5>Departing Location</h5>
                                    <select name="station_from" id="station_to" class="form-select border-0" style="height: 55px;" class="form-control" required>
                                        <option selected>From</option>
                                        <option value="Washington, D.C. (Union Station)">Washington, D.C. (Union Station)</option>
                                        <option value="New York, NY (Penn Station)">New York, NY (Penn Station)</option>
                                        <option value="Chicago, IL (Union Station)">Chicago, IL (Union Station)</option>
                                        <option value="Los Angeles, CA (Union Station)">Los Angeles, CA (Union Station)</option>
                                        <option value="San Francisco, CA (Embarcadero)">San Francisco, CA (Embarcadero)</option>
                                        <option value="Boston, MA (South Station)">Boston, MA (South Station)</option>
                                        <option value="Philadelphia, PA (30th Street Station)">Philadelphia, PA (30th Street Station)</option>
                                        <option value="Baltimore, MD (Penn Station)">Baltimore, MD (Penn Station)</option>
                                        <option value="Seattle, WA (King Street Station)">Seattle, WA (King Street Station)</option>
                                        <option value="Miami, FL (Amtrak Station)">Miami, FL (Amtrak Station)</option>
                                        <option value="Portland, OR (Union Station)">Portland, OR (Union Station)</option>
                                        <option value="Sacramento, CA (Amtrak Station)">Sacramento, CA (Amtrak Station)</option>
                                        <option value="Dallas, TX (Union Station)">Dallas, TX (Union Station)</option>
                                        <option value="Denver, CO (Union Station)">Denver, CO (Union Station)</option>
                                        <option value="Detroit, MI (Amtrak Station)">Detroit, MI (Amtrak Station)</option>
                                        <option value="Cleveland, OH (Amtrak Station)">Cleveland, OH (Amtrak Station)</option>
                                        <option value="Atlanta, GA (Peachtree Station)">Atlanta, GA (Peachtree Station)</option>
                                        <option value="New Orleans, LA (Union Passenger Terminal)">New Orleans, LA (Union Passenger Terminal)</option>
                                        <option value="Minneapolis, MN (Amtrak Station)">Minneapolis, MN (Amtrak Station)</option>
                                        <option value="Kansas City, MO (Union Station)">Kansas City, MO (Union Station)</option>
                                        <option value="St. Louis, MO (Amtrak Station)">St. Louis, MO (Amtrak Station)</option>
                                        <option value="Salt Lake City, UT (Amtrak Station)">Salt Lake City, UT (Amtrak Station)</option>
                                        <option value="Cincinnati, OH (Union Terminal)">Cincinnati, OH (Union Terminal)</option>
                                        <option value="Charlotte, NC (Amtrak Station)">Charlotte, NC (Amtrak Station)</option>
                                        <option value="Raleigh, NC (Amtrak Station)">Raleigh, NC (Amtrak Station)</option>
                                        <option value="Richmond, VA (Amtrak Station)">Richmond, VA (Amtrak Station)</option>
                                        <option value="Albany, NY (Rensselaer Station)">Albany, NY (Rensselaer Station)</option>
                                        <option value="Pittsburgh, PA (Amtrak Station)">Pittsburgh, PA (Amtrak Station)</option>
                                        <option value="Columbus, OH (Amtrak Station)">Columbus, OH (Amtrak Station)</option>
                                        <option value="Hartford, CT (Union Station)">Hartford, CT (Union Station)</option>
                                        <option value="Burlington, VT (Amtrak Station)">Burlington, VT (Amtrak Station)</option>
                                        <option value="Nashville, TN (Amtrak Station)">Nashville, TN (Amtrak Station)</option>
                                        <option value="Indianapolis, IN (Amtrak Station)">Indianapolis, IN (Amtrak Station)</option>
                                        <option value="Jacksonville, FL (Amtrak Station)">Jacksonville, FL (Amtrak Station)</option>
                                        <option value="Providence, RI (Amtrak Station)">Providence, RI (Amtrak Station)</option>
                                        <option value="Springfield, IL (Amtrak Station)">Springfield, IL (Amtrak Station)</option>
                                        <option value="Charleston, SC (Amtrak Station)">Charleston, SC (Amtrak Station)</option>
                                        <option value="Birmingham, AL (Amtrak Station)">Birmingham, AL (Amtrak Station)</option>
                                        <option value="Boise, ID (Amtrak Station)">Boise, ID (Amtrak Station)</option>
                                        <option value="Montreal, QC (Central Station)">Montreal, QC (Central Station)</option>
                                        <option value="Vancouver, BC (Pacific Central Station)">Vancouver, BC (Pacific Central Station)</option>
                                        <option value="San Diego, CA (Amtrak Station)">San Diego, CA (Amtrak Station)</option>
                                        <option value="Santa Fe, NM (Amtrak Station)">Santa Fe, NM (Amtrak Station)</option>
                                        <option value="Flagstaff, AZ (Amtrak Station)">Flagstaff, AZ (Amtrak Station)</option>
                                        <option value="El Paso, TX (Amtrak Station)">El Paso, TX (Amtrak Station)</option>
                                        <option value="Tucson, AZ (Amtrak Station)">Tucson, AZ (Amtrak Station)</option>
                                        <option value="Albuquerque, NM (Amtrak Station)">Albuquerque, NM (Amtrak Station)</option>
                                        <option value="Phoenix, AZ (Amtrak Station)">Phoenix, AZ (Amtrak Station)</option>
                                        <option value="Reno, NV (Amtrak Station)">Reno, NV (Amtrak Station)</option>
                                        <option value="Flagstaff, AZ (Amtrak Station)">Flagstaff, AZ (Amtrak Station)</option>
                                        <option value="Los Angeles, CA (Union Station)">Los Angeles, CA (Union Station)</option>
                                        <option value="Montgomery, AL (Amtrak Station)">Montgomery, AL (Amtrak Station)</option>
                                        <option value="Anchorage, AK (Amtrak Station)">Anchorage, AK (Amtrak Station)</option>
                                        <option value="Glenwood Springs, CO (Amtrak Station)">Glenwood Springs, CO (Amtrak Station)</option>
                                        <option value="Santa Barbara, CA (Amtrak Station)">Santa Barbara, CA (Amtrak Station)</option>
                                        <option value="Tampa, FL (Amtrak Station)">Tampa, FL (Amtrak Station)</option>
                                        <option value="Naples, FL (Amtrak Station)">Naples, FL (Amtrak Station)</option>
                                        <option value="Orlando, FL (Amtrak Station)">Orlando, FL (Amtrak Station)</option>
                                        <option value="Pine Bluff, AR (Amtrak Station)">Pine Bluff, AR (Amtrak Station)</option>
                                        <option value="Little Rock, AR (Amtrak Station)">Little Rock, AR (Amtrak Station)</option>
                                        <option value="Bakersfield, CA (Amtrak Station)">Bakersfield, CA (Amtrak Station)</option>
                                        <option value="Harrisburg, PA (Amtrak Station)">Harrisburg, PA (Amtrak Station)</option>
                                        <option value="North Platte, NE (Amtrak Station)">North Platte, NE (Amtrak Station)</option>
                                        <option value="Kalamazoo, MI (Amtrak Station)">Kalamazoo, MI (Amtrak Station)</option>
                                        <option value="Peoria, IL (Amtrak Station)">Peoria, IL (Amtrak Station)</option>
                                        <option value="Omaha, NE (Amtrak Station)">Omaha, NE (Amtrak Station)</option>
                                        <option value="Fargo, ND (Amtrak Station)">Fargo, ND (Amtrak Station)</option>
                                        <option value="Cheyenne, WY (Amtrak Station)">Cheyenne, WY (Amtrak Station)</option>
                                        <option value="Grand Junction, CO (Amtrak Station)">Grand Junction, CO (Amtrak Station)</option>
                                        <option value="Lincoln, NE (Amtrak Station)">Lincoln, NE (Amtrak Station)</option>
                                        <option value="Rochester, NY (Amtrak Station)">Rochester, NY (Amtrak Station)</option>
                                        <option value="Syracuse, NY (Amtrak Station)">Syracuse, NY (Amtrak Station)</option>
                                        <option value="Buffalo, NY (Amtrak Station)">Buffalo, NY (Amtrak Station)</option>
                                        <option value="Albany, NY (Rensselaer Station)">Albany, NY (Rensselaer Station)</option>
                                        <option value="Worcester, MA (Amtrak Station)">Worcester, MA (Amtrak Station)</option>
                                        <option value="Amtrak Station, Binghamton, NY (Amtrak Station)">Amtrak Station, Binghamton, NY (Amtrak Station)</option>
                                        <option value="Erie, PA (Amtrak Station)">Erie, PA (Amtrak Station)</option>
                                        <option value="Clinton, NJ (Amtrak Station)">Clinton, NJ (Amtrak Station)</option>
                                        <option value="Poughkeepsie, NY (Amtrak Station)">Poughkeepsie, NY (Amtrak Station)</option>
                                        <option value="New Haven, CT (Amtrak Station)">New Haven, CT (Amtrak Station)</option>
                                        <option value="Hartford, CT (Amtrak Station)">Hartford, CT (Amtrak Station)</option>
                                        <option value="Schenectady, NY (Amtrak Station)">Schenectady, NY (Amtrak Station)</option>
                                        <option value="Cortland, NY (Amtrak Station)">Cortland, NY (Amtrak Station)</option>
                                        <option value="Macon, GA (Amtrak Station)">Macon, GA (Amtrak Station)</option>
                                        <option value="Roanoke, VA (Amtrak Station)">Roanoke, VA (Amtrak Station)</option>
                                        <option value="Fayetteville, AR (Amtrak Station)">Fayetteville, AR (Amtrak Station)</option>
                                        <option value="Bismarck, ND (Amtrak Station)">Bismarck, ND (Amtrak Station)</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                <h5>Destination</h5>
                                    <select name="station_to" id="station_to" class="form-select border-0" style="height: 55px;" class="form-control" required>
                                        <option selected>To</option>
                                        <option value="Washington, D.C. (Union Station)">Washington, D.C. (Union Station)</option>
                                        <option value="New York, NY (Penn Station)">New York, NY (Penn Station)</option>
                                        <option value="Chicago, IL (Union Station)">Chicago, IL (Union Station)</option>
                                        <option value="Los Angeles, CA (Union Station)">Los Angeles, CA (Union Station)</option>
                                        <option value="San Francisco, CA (Embarcadero)">San Francisco, CA (Embarcadero)</option>
                                        <option value="Boston, MA (South Station)">Boston, MA (South Station)</option>
                                        <option value="Philadelphia, PA (30th Street Station)">Philadelphia, PA (30th Street Station)</option>
                                        <option value="Baltimore, MD (Penn Station)">Baltimore, MD (Penn Station)</option>
                                        <option value="Seattle, WA (King Street Station)">Seattle, WA (King Street Station)</option>
                                        <option value="Miami, FL (Amtrak Station)">Miami, FL (Amtrak Station)</option>
                                        <option value="Portland, OR (Union Station)">Portland, OR (Union Station)</option>
                                        <option value="Sacramento, CA (Amtrak Station)">Sacramento, CA (Amtrak Station)</option>
                                        <option value="Dallas, TX (Union Station)">Dallas, TX (Union Station)</option>
                                        <option value="Denver, CO (Union Station)">Denver, CO (Union Station)</option>
                                        <option value="Detroit, MI (Amtrak Station)">Detroit, MI (Amtrak Station)</option>
                                        <option value="Cleveland, OH (Amtrak Station)">Cleveland, OH (Amtrak Station)</option>
                                        <option value="Atlanta, GA (Peachtree Station)">Atlanta, GA (Peachtree Station)</option>
                                        <option value="New Orleans, LA (Union Passenger Terminal)">New Orleans, LA (Union Passenger Terminal)</option>
                                        <option value="Minneapolis, MN (Amtrak Station)">Minneapolis, MN (Amtrak Station)</option>
                                        <option value="Kansas City, MO (Union Station)">Kansas City, MO (Union Station)</option>
                                        <option value="St. Louis, MO (Amtrak Station)">St. Louis, MO (Amtrak Station)</option>
                                        <option value="Salt Lake City, UT (Amtrak Station)">Salt Lake City, UT (Amtrak Station)</option>
                                        <option value="Cincinnati, OH (Union Terminal)">Cincinnati, OH (Union Terminal)</option>
                                        <option value="Charlotte, NC (Amtrak Station)">Charlotte, NC (Amtrak Station)</option>
                                        <option value="Raleigh, NC (Amtrak Station)">Raleigh, NC (Amtrak Station)</option>
                                        <option value="Richmond, VA (Amtrak Station)">Richmond, VA (Amtrak Station)</option>
                                        <option value="Albany, NY (Rensselaer Station)">Albany, NY (Rensselaer Station)</option>
                                        <option value="Pittsburgh, PA (Amtrak Station)">Pittsburgh, PA (Amtrak Station)</option>
                                        <option value="Columbus, OH (Amtrak Station)">Columbus, OH (Amtrak Station)</option>
                                        <option value="Hartford, CT (Union Station)">Hartford, CT (Union Station)</option>
                                        <option value="Burlington, VT (Amtrak Station)">Burlington, VT (Amtrak Station)</option>
                                        <option value="Nashville, TN (Amtrak Station)">Nashville, TN (Amtrak Station)</option>
                                        <option value="Indianapolis, IN (Amtrak Station)">Indianapolis, IN (Amtrak Station)</option>
                                        <option value="Jacksonville, FL (Amtrak Station)">Jacksonville, FL (Amtrak Station)</option>
                                        <option value="Providence, RI (Amtrak Station)">Providence, RI (Amtrak Station)</option>
                                        <option value="Springfield, IL (Amtrak Station)">Springfield, IL (Amtrak Station)</option>
                                        <option value="Charleston, SC (Amtrak Station)">Charleston, SC (Amtrak Station)</option>
                                        <option value="Birmingham, AL (Amtrak Station)">Birmingham, AL (Amtrak Station)</option>
                                        <option value="Boise, ID (Amtrak Station)">Boise, ID (Amtrak Station)</option>
                                        <option value="Montreal, QC (Central Station)">Montreal, QC (Central Station)</option>
                                        <option value="Vancouver, BC (Pacific Central Station)">Vancouver, BC (Pacific Central Station)</option>
                                        <option value="San Diego, CA (Amtrak Station)">San Diego, CA (Amtrak Station)</option>
                                        <option value="Santa Fe, NM (Amtrak Station)">Santa Fe, NM (Amtrak Station)</option>
                                        <option value="Flagstaff, AZ (Amtrak Station)">Flagstaff, AZ (Amtrak Station)</option>
                                        <option value="El Paso, TX (Amtrak Station)">El Paso, TX (Amtrak Station)</option>
                                        <option value="Tucson, AZ (Amtrak Station)">Tucson, AZ (Amtrak Station)</option>
                                        <option value="Albuquerque, NM (Amtrak Station)">Albuquerque, NM (Amtrak Station)</option>
                                        <option value="Phoenix, AZ (Amtrak Station)">Phoenix, AZ (Amtrak Station)</option>
                                        <option value="Reno, NV (Amtrak Station)">Reno, NV (Amtrak Station)</option>
                                        <option value="Flagstaff, AZ (Amtrak Station)">Flagstaff, AZ (Amtrak Station)</option>
                                        <option value="Los Angeles, CA (Union Station)">Los Angeles, CA (Union Station)</option>
                                        <option value="Montgomery, AL (Amtrak Station)">Montgomery, AL (Amtrak Station)</option>
                                        <option value="Anchorage, AK (Amtrak Station)">Anchorage, AK (Amtrak Station)</option>
                                        <option value="Glenwood Springs, CO (Amtrak Station)">Glenwood Springs, CO (Amtrak Station)</option>
                                        <option value="Santa Barbara, CA (Amtrak Station)">Santa Barbara, CA (Amtrak Station)</option>
                                        <option value="Tampa, FL (Amtrak Station)">Tampa, FL (Amtrak Station)</option>
                                        <option value="Naples, FL (Amtrak Station)">Naples, FL (Amtrak Station)</option>
                                        <option value="Orlando, FL (Amtrak Station)">Orlando, FL (Amtrak Station)</option>
                                        <option value="Pine Bluff, AR (Amtrak Station)">Pine Bluff, AR (Amtrak Station)</option>
                                        <option value="Little Rock, AR (Amtrak Station)">Little Rock, AR (Amtrak Station)</option>
                                        <option value="Bakersfield, CA (Amtrak Station)">Bakersfield, CA (Amtrak Station)</option>
                                        <option value="Harrisburg, PA (Amtrak Station)">Harrisburg, PA (Amtrak Station)</option>
                                        <option value="North Platte, NE (Amtrak Station)">North Platte, NE (Amtrak Station)</option>
                                        <option value="Kalamazoo, MI (Amtrak Station)">Kalamazoo, MI (Amtrak Station)</option>
                                        <option value="Peoria, IL (Amtrak Station)">Peoria, IL (Amtrak Station)</option>
                                        <option value="Omaha, NE (Amtrak Station)">Omaha, NE (Amtrak Station)</option>
                                        <option value="Fargo, ND (Amtrak Station)">Fargo, ND (Amtrak Station)</option>
                                        <option value="Cheyenne, WY (Amtrak Station)">Cheyenne, WY (Amtrak Station)</option>
                                        <option value="Grand Junction, CO (Amtrak Station)">Grand Junction, CO (Amtrak Station)</option>
                                        <option value="Lincoln, NE (Amtrak Station)">Lincoln, NE (Amtrak Station)</option>
                                        <option value="Rochester, NY (Amtrak Station)">Rochester, NY (Amtrak Station)</option>
                                        <option value="Syracuse, NY (Amtrak Station)">Syracuse, NY (Amtrak Station)</option>
                                        <option value="Buffalo, NY (Amtrak Station)">Buffalo, NY (Amtrak Station)</option>
                                        <option value="Albany, NY (Rensselaer Station)">Albany, NY (Rensselaer Station)</option>
                                        <option value="Worcester, MA (Amtrak Station)">Worcester, MA (Amtrak Station)</option>
                                        <option value="Amtrak Station, Binghamton, NY (Amtrak Station)">Amtrak Station, Binghamton, NY (Amtrak Station)</option>
                                        <option value="Erie, PA (Amtrak Station)">Erie, PA (Amtrak Station)</option>
                                        <option value="Clinton, NJ (Amtrak Station)">Clinton, NJ (Amtrak Station)</option>
                                        <option value="Poughkeepsie, NY (Amtrak Station)">Poughkeepsie, NY (Amtrak Station)</option>
                                        <option value="New Haven, CT (Amtrak Station)">New Haven, CT (Amtrak Station)</option>
                                        <option value="Hartford, CT (Amtrak Station)">Hartford, CT (Amtrak Station)</option>
                                        <option value="Schenectady, NY (Amtrak Station)">Schenectady, NY (Amtrak Station)</option>
                                        <option value="Cortland, NY (Amtrak Station)">Cortland, NY (Amtrak Station)</option>
                                        <option value="Macon, GA (Amtrak Station)">Macon, GA (Amtrak Station)</option>
                                        <option value="Roanoke, VA (Amtrak Station)">Roanoke, VA (Amtrak Station)</option>
                                        <option value="Fayetteville, AR (Amtrak Station)">Fayetteville, AR (Amtrak Station)</option>
                                        <option value="Bismarck, ND (Amtrak Station)">Bismarck, ND (Amtrak Station)</option>
                                    </select>
                                </div>
                                <div class="col-12 col-sm-6">
                                <h5>Departure Date</h5>
                                    <div class="date">
                                      <input 
                                      type="date" 
                                      name="departure" 
                                      id="departure" 
                                      class="form-control border-0 datetimepicker-input" 
                                      placeholder="Departure Date" 
                                      style="height: 55px;" 
                                      required>
                                    </div>
                                </div>

                                <div class="col-12 col-sm-6">
                                <h5>Return Date</h5>
                                    <div class="date">
                                        <input 
                                        type="date" 
                                        name="arrival" 
                                        id="arrival" 
                                        class="form-control border-0 datetimepicker-input" 
                                        placeholder="Return Date" 
                                        style="height: 55px;" 
                                        required>
                                    </div>
                                </div>

                                <div class="col-12">
                                <h5>Coupon</h5>
                                    <input name="coupon" id="coupon" class="form-control border-0" placeholder="Coupon" maxlength="10" pattern="\d{10}"></input>
                                </div>
                                <div class="col-12">
                                    <h4>Traveller</h4>
                                    <div class="row mb-3">
    <div class="col-md-3">
        <h5 for="adult" class="form-label">Adult</h5>
    </div>
    <div class="col-md-9">
        <input type="number" name="adult" id="adult" class="form-control border-0" placeholder="Adult Traveller" required>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <h5 for="senior" class="form-label">Senior</h5>
    </div>
    <div class="col-md-9">
        <input type="number" name="senior" id="senior" class="form-control border-0" placeholder="Senior Traveller" required>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <h5 for="youth" class="form-label">Youth</h5>
    </div>
    <div class="col-md-9">
        <input type="number" name="youth" id="youth" class="form-control border-0" placeholder="Youth Traveller" required>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <h5 for="child" class="form-label">Child</h5>
    </div>
    <div class="col-md-9">
        <input type="number" name="child" id="child" class="form-control border-0" placeholder="Child Traveller" required>
    </div>
</div>

<div class="row mb-3">
    <div class="col-md-3">
        <h5 for="infant" class="form-label">Infant</h5>
    </div>
    <div class="col-md-9">
        <input type="number" name="infant" id="infant" class="form-control border-0" placeholder="Infant Traveller" required>
    </div>
</div>

<div class="row">
    <div class="col-12">
        <button class="btn btn-primary w-100 py-3" type="submit" name="submit" id="submit">Book Now</button>
    </div>
</div>

                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Booking End -->



    <!-- Footer Start -->
    <div class="container-fluid bg-dark text-light footer pt-5 mt-5 wow fadeIn" data-wow-delay="0.1s">
        <div class="container py-5">
            <div class="row g-5">
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Address</h4>
                    <p class="mb-2"><i class="fa fa-map-marker-alt me-3"></i>Amtrak Headquarters, 1 Massachusetts Ave NW, Washington, DC 20001, US</p>
                    <p class="mb-2"><i class="fa fa-phone-alt me-3"></i>+1-800-872-7245</p>
                    <p class="mb-2"><i class="fa fa-envelope me-3"></i>OCR@amtrak.com</p>
                    <div class="d-flex pt-2">
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://web.facebook.com/Amtrak/?_rdc=1&_rdr"><i class="fab fa-facebook-f"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://x.com/amtrak?mx=2"><i class="fab fa-twitter"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.linkedin.com/company/amtrak"><i class="fab fa-linkedin-in"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.instagram.com/amtrak/"><i class="fab fa-instagram"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-1" href="https://www.youtube.com/amtrak"><i class="fab fa-youtube"></i></a>
                    <a class="btn btn-sm-square bg-white text-primary me-0" href="https://www.pinterest.com/amtrak/"><i class="fab fa-pinterest"></i></a>

                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Chat with a live agent</h4>
                    <h6 class="text-light">Every day:</h6>
                    <p class="mb-4">8:00 AM - 10:00 PM EST</p>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Site Tools</h4>
                    <a class="btn btn-link" href="booking.php">Booking</a>
                    <a class="btn btn-link" href="https://www.amtrak.com/train-schedules-timetables">Schedules</a>
                    <a class="btn btn-link" href="deals.html">Discounts</a>
                    <a class="btn btn-link" href="tracking.html">Track Your Train</a>
                    <a class="btn btn-link" href="contact.html">Contact Us</a>
                </div>
                <div class="col-lg-3 col-md-6">
                    <h4 class="text-light mb-4">Subscribe Today</h4>
                    <p>Receive flash sales, promotions and special offers by email.</p>
                    <div class="position-relative mx-auto" style="max-width: 400px;">
                        <input class="form-control border-0 w-100 py-3 ps-4 pe-5" type="text" placeholder="Your email">
                        <button type="button" class="btn btn-primary py-2 position-absolute top-0 end-0 mt-2 me-2">SignUp</button>
                    </div>
                </div>
            </div>
        </div>
        <div class="container">
            <div class="copyright">
                <div class="row">
                    <div class="col-md-6 text-center text-md-start mb-3 mb-md-0">
                        &copy; <a class="border-bottom" href="#">Nathan & Cullen</a>, All Right Reserved.
                    </div>
                    <div class="col-md-6 text-center text-md-end">
                        <!--/*** This template is free as long as you keep the footer author’s credit link/attribution link/backlink. If you'd like to use the template without the footer author’s credit link/attribution link/backlink, you can purchase the Credit Removal License from "https://htmlcodex.com/credit-removal". Thank you for your support. ***/-->
                        Designed By <a class="border-bottom" href="https://htmlcodex.com">HTML Codex</a> Distributed By <a href="https://themewagon.com">ThemeWagon</a>
                    </div>
                </div>

            </div>
        </div>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary btn-lg-square rounded-0 back-to-top"><i class="bi bi-arrow-up"></i></a>


    <!-- JavaScript Libraries -->
    <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="lib/wow/wow.min.js"></script>
    <script src="lib/easing/easing.min.js"></script>
    <script src="lib/waypoints/waypoints.min.js"></script>
    <script src="lib/counterup/counterup.min.js"></script>
    <script src="lib/owlcarousel/owl.carousel.min.js"></script>
    <script src="lib/tempusdominus/js/moment.min.js"></script>
    <script src="lib/tempusdominus/js/moment-timezone.min.js"></script>
    <script src="lib/tempusdominus/js/tempusdominus-bootstrap-4.min.js"></script>

    <!-- Template Javascript -->
    <script src="js/main.js"></script>
</body>

</html>