<?php include("partials/header.php");?>
<!-- search-wrapper -->
<section class="sticky search-page-wrapper">
    <!-- top-search-modify -->
    <div class="bg-primary top-search-modify">
        <div class="container">
            <div class="row">
                <div class="col-lg-4">
                    <div class="trip-style">
                        <h6>One Way Trip</h6>
                        <div class="destination">
                            <span class="from">Kathmandu</span>
                            <i class="fa-sharp fa-solid fa-plane"></i>
                            <span class="to">Bhadrapur</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="departure-date">
                        <h6>Departure Date</h6>
                        <div class="date-detail">
                            <span>Sat, 01 Oct</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-2">
                    <div class="d-flex member">
                        <div class="adult">
                            <h6>Adult</h6>
                            <span>2</span>
                        </div>
                        <div class="child">
                            <h6>Child</h6>
                            <span>2</span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="modify-btn">
                        <button class="btn hover-up btn-modify" id="searchModify"><i class="fa-solid fa-pen"></i> Modify
                            Search</button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- top-search-modify -->
    <!-- search-wrapper -->
    <div class="search-wrapper sticky">
        <div class="container">
            <div class="row">
                <div id="close-search"><i class="fa-solid fa-xmark"></i></div>
                <div class="top-tabs-wrapper">
                    <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active" id="pills-home-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home"
                                aria-selected="true">One Way</button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link" id="pills-profile-tab" data-bs-toggle="pill"
                                data-bs-target="#pills-profile" type="button" role="tab" aria-controls="pills-profile"
                                aria-selected="false">Two Way</button>
                        </li>
                    </ul>
                    <div class="tab-content" id="pills-tabContent">
                        <div class="tab-pane fade show active" id="pills-home" role="tabpanel"
                            aria-labelledby="pills-home-tab" tabindex="0">
                            <div class="one-way inner-form-wrapper">
                                <div class="row align-items-center">
                                    <div class="width-16">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center origin">
                                            <div class="icon">
                                                <i class="fa-solid fa-jet-fighter"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <i class="fas fa-plane-departure search__icons"></i>
                                                <option value="AL">Origin</option>
                                                <option value="WY">Kathmandu</option>
                                                <option value="WY">Dolpa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="exchange-icon">
                                        <i class="fas fa-exchange-alt destswap"></i>
                                    </div>
                                    <div class="width-16">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center destination">
                                            <div class="icon">
                                                <i class="fa-solid fa-plane-arrival"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Destination</option>
                                                <option value="WY">Bhadrapur</option>
                                                <option value="WY">Janakpur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10 flight-date">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center input-field-wrapper">
                                            <div class="icon">
                                                <i class="fa-regular fa-calendar-days"></i>
                                            </div>
                                            <input class="date start-date form-control" placeholder="Departure"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="width-10 return-date">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center input-field-wrapper">
                                            <div class="icon">
                                                <i class="fa-regular fa-calendar-days"></i>
                                            </div>
                                            <input class="date end-date form-control" placeholder="Return" type="text"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="width-12">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center nationality">
                                            <div class="icon">
                                                <i class="fa-solid fa-flag"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Nationality</option>
                                                <option value="WY">Nepali</option>
                                                <option value="WY">Foreigner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center adult">
                                            <div class="icon">
                                                <i class="fa-sharp fa-solid fa-person"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Adult</option>
                                                <option value="WY">1</option>
                                                <option value="WY">2</option>
                                                <option value="WY">3</option>
                                                <option value="WY">4</option>
                                                <option value="WY">5</option>
                                                <option value="WY">6</option>
                                                <option value="WY">7</option>
                                                <option value="WY">8</option>
                                                <option value="WY">9</option>
                                                <option value="WY">10</option>
                                                <option value="WY">11</option>
                                                <option value="WY">12</option>
                                                <option value="WY">13</option>
                                                <option value="WY">14</option>
                                                <option value="WY">15</option>
                                                <option value="WY">16</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center child">
                                            <div class="icon">
                                                <i class="fa-solid fa-child-reaching"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Child</option>
                                                <option value="WY">1</option>
                                                <option value="WY">2</option>
                                                <option value="WY">3</option>
                                                <option value="WY">4</option>
                                                <option value="WY">5</option>
                                                <option value="WY">6</option>
                                                <option value="WY">7</option>
                                                <option value="WY">8</option>
                                                <option value="WY">9</option>
                                                <option value="WY">10</option>
                                                <option value="WY">11</option>
                                                <option value="WY">12</option>
                                                <option value="WY">13</option>
                                                <option value="WY">14</option>
                                                <option value="WY">15</option>
                                                <option value="WY">16</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center search-btn">
                                            <a href="search"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tab-pane fade" id="pills-profile" role="tabpanel"
                            aria-labelledby="pills-profile-tab" tabindex="0">
                            <div class="two-way inner-form-wrapper">
                                <div class="row align-items-center">
                                    <div class="width-16">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center origin">
                                            <div class="icon">
                                                <i class="fa-solid fa-jet-fighter"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <i class="fas fa-plane-departure search__icons"></i>
                                                <option value="AL">Origin</option>
                                                <option value="WY">Kathmandu</option>
                                                <option value="WY">Dolpa</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="exchange-icon">
                                        <i class="fas fa-exchange-alt destswap"></i>
                                    </div>
                                    <div class="width-16">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center destination">
                                            <div class="icon">
                                                <i class="fa-solid fa-plane-arrival"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Destination</option>
                                                <option value="WY">Bhadrapur</option>
                                                <option value="WY">Janakpur</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10 flight-date">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center input-field-wrapper">
                                            <div class="icon">
                                                <i class="fa-regular fa-calendar-days"></i>
                                            </div>
                                            <input class="date start-date form-control" placeholder="Departure"
                                                type="text">
                                        </div>
                                    </div>
                                    <div class="width-10 return-date">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center input-field-wrapper">
                                            <div class="icon">
                                                <i class="fa-regular fa-calendar-days"></i>
                                            </div>
                                            <input class="date end-date form-control" placeholder="Return" type="text"
                                                disabled>
                                        </div>
                                    </div>
                                    <div class="width-12">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center nationality">
                                            <div class="icon">
                                                <i class="fa-solid fa-flag"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Nationality</option>
                                                <option value="WY">Nepali</option>
                                                <option value="WY">Foreigner</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center adult">
                                            <div class="icon">
                                                <i class="fa-sharp fa-solid fa-person"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Adult</option>
                                                <option value="WY">1</option>
                                                <option value="WY">2</option>
                                                <option value="WY">3</option>
                                                <option value="WY">4</option>
                                                <option value="WY">5</option>
                                                <option value="WY">6</option>
                                                <option value="WY">7</option>
                                                <option value="WY">8</option>
                                                <option value="WY">9</option>
                                                <option value="WY">10</option>
                                                <option value="WY">11</option>
                                                <option value="WY">12</option>
                                                <option value="WY">13</option>
                                                <option value="WY">14</option>
                                                <option value="WY">15</option>
                                                <option value="WY">16</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center child">
                                            <div class="icon">
                                                <i class="fa-solid fa-child-reaching"></i>
                                            </div>
                                            <select class="w-100 select2" name="state">
                                                <option value="AL">Child</option>
                                                <option value="WY">1</option>
                                                <option value="WY">2</option>
                                                <option value="WY">3</option>
                                                <option value="WY">4</option>
                                                <option value="WY">5</option>
                                                <option value="WY">6</option>
                                                <option value="WY">7</option>
                                                <option value="WY">8</option>
                                                <option value="WY">9</option>
                                                <option value="WY">10</option>
                                                <option value="WY">11</option>
                                                <option value="WY">12</option>
                                                <option value="WY">13</option>
                                                <option value="WY">14</option>
                                                <option value="WY">15</option>
                                                <option value="WY">16</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="width-10">
                                        <div
                                            class="position-relative inner-main-wrapper d-flex align-items-center search-btn">
                                            <a href="search"><i class="fa-solid fa-magnifying-glass"></i></a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- search-wrapper -->
</section>
<!-- search-wrapper -->

<!-- book-now-form -->
<section class="py-60 book-now-form">
    <div class="container">
        <div class="row">
            <div class="d-flex mb-5 align-items-center timetobookflight">
                <div class="book-timer"></div>
                <p class="m-0">You have 9 minutes 38 seconds to book a flight.</p>
            </div>
            <div class="mb-5 contact-info">
                <h4>Contact Information</h4>
                <p>Please put the name order properly. <a href="">Login</a> for Personalization.</p>
                <div class="primary-light p-30 contact-info-form">
                    <div class="row">
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Dr</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Last Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Other</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Federation</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <input type="phone" class="rounded-0 form-control font-20" placeholder="Phone Number"
                                name="name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="email" class="rounded-0 form-control font-20" placeholder="Email" name="name">
                        </div>
                        <div class="col-12">
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="rounded-0 me-2">
                                <p class="m-0">I'm a passenger on the flight .</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <input type="checkbox" class="rounded-0 me-2">
                                <p class="m-0">Remember these details for next visit.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 passenger-info">
                <h4 class="mb-5 d-flex align-items-center"><i class="fa-solid fa-user me-2 font-30"></i> 1. Passenger
                    (Adult)
                </h4>
                <div class="primary-light p-30 passenger-info-form">
                    <div class="row">
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Dr</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Middle Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Last Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Other</option>
                                <option value="1">Male</option>
                                <option value="2">Female</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Passport</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-1">
                            <input type="number" class="rounded-0 form-control font-20" value="460" name="name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Country">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Sky Club Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 passenger-info">
                <h4 class="mb-5 d-flex align-items-center"><i class="fa-solid fa-user me-2 font-30"></i> 2. Passenger
                    (Adult)
                </h4>
                <div class="primary-light p-30 passenger-info-form">
                    <div class="row">
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Dr</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Middle Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Last Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Passport</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-1">
                            <input type="number" class="rounded-0 form-control font-20" value="460" name="name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Country">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Sky Club Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 passenger-info">
                <h4 class="mb-5 d-flex align-items-center"><i class="fa-solid fa-user me-2 font-30"></i> 3. Passenger
                    (Adult)
                </h4>
                <div class="primary-light p-30 passenger-info-form">
                    <div class="row">
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Dr</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Middle Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Last Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Female</option>
                                <option value="1">Male</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Passport</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-1">
                            <input type="number" class="rounded-0 form-control font-20" value="460" name="name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Country">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Sky Club Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 passenger-info">
                <h4 class="mb-5 d-flex align-items-center"><i class="fa-solid fa-user me-2 font-30"></i> 1. Passenger
                    (Child)
                </h4>
                <div class="primary-light p-30 passenger-info-form">
                    <div class="row">
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Miss</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Middle Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Last Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Female</option>
                                <option value="1">Male</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Birth Certificate</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-1">
                            <input type="number" class="rounded-0 form-control font-20" value="460" name="name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Country">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Sky Club Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="mb-5 passenger-info">
                <h4 class="mb-5 d-flex align-items-center"><i class="fa-solid fa-user me-2 font-30"></i> 2. Passenger
                    (Child)
                </h4>
                <div class="primary-light p-30 passenger-info-form">
                    <div class="row">
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Miss</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="First Name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Middle Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Last Name">
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Male</option>
                                <option value="1">Female</option>
                                <option value="2">Other</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-2">
                            <select class="rounded-0 form-select font-20" aria-label="Default select example">
                                <option selected>Birth Certificate</option>
                                <option value="1">Citizenship</option>
                                <option value="2">Two</option>
                                <option value="3">Three</option>
                            </select>
                        </div>
                        <div class="mb-3 col-sm-1">
                            <input type="number" class="rounded-0 form-control font-20" value="460" name="name">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20" placeholder="Country">
                        </div>
                        <div class="mb-3 col-sm-3">
                            <input type="text" class="form-control rounded-0 outline-0 font-20"
                                placeholder="Sky Club Number">
                        </div>
                    </div>
                </div>
            </div>
            <div class="d-flex mb-3 align-items-center special-services">
                <input type="checkbox" class="rounded-0 me-2">
                <p class="m-0">Special Services Request</p>
            </div>
            <div class="d-flex align-items-center agree">
                <i class="fa-solid fa-check text-primary me-2"></i>
                <p class="m-0">I now agree the <a href="#">Terms and Conditions</a> and proceed for payment.</p>
            </div>
            <div class="form-submit">
                <button class="btn mt-3 fw-600 rounded-pill text-white submit">Submit <i
                        class="fa-solid fa-angles-right"></i></button>
            </div>
        </div>
    </div>
</section>
<?php include("partials/footer.php");?>