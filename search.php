<?php include("partials/header.php"); ?>
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

<!-- flight-detail -->
<section class="py-40 position-relative flight-detail">
    <div class="container">
        <div class="row">
            <div class="outbound-flight">
                <ul class="nav nav-pills justify-content-center m-auto col-sm-6" id="pills-tab" role="tablist">
                    <li class="nav-item mb-3" role="presentation">
                        <button class="nav-link rounded-0 font-18 fw-600 active" id="home-tab" data-bs-toggle="tab"
                            data-bs-target="#home" type="button" role="tab" aria-controls="home" aria-selected="true">05
                            October</button>
                    </li>
                    <li class="nav-item mb-3" role="presentation">
                        <button class="nav-link rounded-0 font-18 fw-600" id="profile-tab" data-bs-toggle="tab"
                            data-bs-target="#profile" type="button" role="tab" aria-controls="profile"
                            aria-selected="false">06 October</button>
                    </li>
                    <li class="nav-item mb-3" role="presentation">
                        <button class="nav-link rounded-0 font-18 fw-600" id="messages-tab" data-bs-toggle="tab"
                            data-bs-target="#messages" type="button" role="tab" aria-controls="messages"
                            aria-selected="false">07 October</button>
                    </li>
                    <li class="nav-item mb-3" role="presentation">
                        <button class="nav-link rounded-0 font-18 fw-600" id="settings-tab" data-bs-toggle="tab"
                            data-bs-target="#settings" type="button" role="tab" aria-controls="settings"
                            aria-selected="false">08 October</button>
                    </li>
                </ul>
                <div class="flight-type">
                    <p><i class="fa-solid fa-plane"></i> <span>Outbound Flight</span></p>
                </div>
                <!-- Tab panes -->
                <div class="tab-content">
                    <div class="tab-pane active" id="home" role="tabpanel" aria-labelledby="home-tab" tabindex="0">
                        <div class="table-responsive">
                            <table class="table table-bordered">
                                <thead class="text-center font-20 text-white">
                                    <tr>
                                        <th scope="col" class="py-3 bg-light text-dark">Time</th>
                                        <th scope="col" class="py-3 bg-light text-dark">Airlines</th>
                                        <th scope="col" class="py-3 bg-success">Saver</th>
                                        <th scope="col" class="py-3 bg-primary">Flexi</th>
                                        <th scope="col" class="py-3 bg-light text-dark">SuperFlexi</th>
                                    </tr>
                                </thead>
                                <tbody class="text-center font-18">
                                    <tr>
                                        <th><span>KTM 10:10 - BDP 10:55</span>
                                            <div class="time"><i class="fa-solid fa-clock"></i> 45 min</div>
                                        </th>
                                        <th>Flight YT-927 ATR72</th>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><span>KTM 10:10 - BDP 10:55</span>
                                            <div class="time"><i class="fa-solid fa-clock"></i> 45 min</div>
                                        </th>
                                        <th>Flight YT-927 ATR72</th>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                    <tr>
                                        <th><span>KTM 10:10 - BDP 10:55</span>
                                            <div class="time"><i class="fa-solid fa-clock"></i> 45 min</div>
                                        </th>
                                        <th>Flight YT-927 ATR72</th>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                        <td>
                                            <div
                                                class="d-sm-flex text-primary align-items-baseline fw-600 justify-content-evenly">
                                                <div id="click-to-book">
                                                    <input type="radio">
                                                </div>
                                                <div class="flight_price text-start font-20">
                                                    <div class="adult">
                                                        <span>NPR 8,844.68 (Adult)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Adult)</del>
                                                    </div>
                                                    <div class="child">
                                                        <span>NPR 8,844.68 (Child)</span><br>
                                                        <del class="font-14">NPR 9,125.00 (Child)</del>
                                                    </div>
                                                    <div class="refundable text-grey fw-500 fst-italic font-14">
                                                        <i class="fa-solid fa-cart-flatbed-suitcase"></i>
                                                        <span>20.00kg NonRefundable</span>
                                                    </div>
                                                </div>
                                            </div>
                                        </td>
                                    </tr>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <div class="tab-pane" id="profile" role="tabpanel" aria-labelledby="profile-tab" tabindex="0">
                        <h2>No Flights for 06 October</h2>
                    </div>
                    <div class="tab-pane" id="messages" role="tabpanel" aria-labelledby="messages-tab" tabindex="0">
                        <h2>No Flights for 07 October</h2>
                    </div>
                    <div class="tab-pane" id="settings" role="tabpanel" aria-labelledby="settings-tab" tabindex="0">
                        <h2>No Flights for 08 October</h2>
                    </div>
                </div>
                <!-- <div class="tabs-control position-absolute">
                <a href="" class="previous-button position-absolute" role="button"><i
                        class="fa-solid fa-arrow-left"></i></a>
                <a href="" class="next-button position-absolute" role="button"><i
                        class="fa-solid fa-arrow-right"></i></a>
            </div> -->
            </div>
        </div>
    </div>
</section>
<!-- flight-detail -->


<?php include("partials/footer.php" ); ?>