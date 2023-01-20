<?php include("partials/header.php"); ?>
<!-- search-wrapper -->
<div class="search-wrapper sticky">
    <div class="container">
        <div class="row">
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
                                    <div class="position-relative inner-main-wrapper d-flex align-items-center origin">
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
                                        <input class="date start-date form-control" placeholder="Departure" type="text">
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
                                    <div class="position-relative inner-main-wrapper d-flex align-items-center adult">
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
                                    <div class="position-relative inner-main-wrapper d-flex align-items-center child">
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
                    <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab"
                        tabindex="0">
                        <div class="two-way inner-form-wrapper">
                            <div class="row align-items-center">
                                <div class="width-16">
                                    <div class="position-relative inner-main-wrapper d-flex align-items-center origin">
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
                                        <input class="date start-date form-control" placeholder="Departure" type="text">
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
                                    <div class="position-relative inner-main-wrapper d-flex align-items-center adult">
                                        <div class="icon">
                                            <i class="fa-solid fa-plane-arrival"></i>
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
                                    <div class="position-relative inner-main-wrapper d-flex align-items-center child">
                                        <div class="icon">
                                            <i class="fa-solid fa-plane-arrival"></i>
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

<!-- HOMEPAGE-TOP-BANNER-SECTION -->
<section class="container-fluid HOME TOP-BANNER-SECTION">
    <div class="row">
        <div class="owl-carousel owl-theme p-0 home-banner-wrapper">
            <div class="position-relative item">
                <img src="assets/img/banner-1.png" alt="">
            </div>
            <div class="position-relative item">
                <img src="assets/img/banner.png" alt="">
            </div>
        </div>
    </div>
</section>
<!-- HOMEPAGE-TOP-BANNER-SECTION -->

<!-- EXPLORE-DESTINATION-SECTION -->
<section class="text-center py-60 explore-destination">
    <div class="container">
        <div class="row">
            <h2>Explore Our Destination</h2>
            <p>Be Better Connected with RoamingNepal across Nepal</p>
            <div class="text-end view-more">
                <a href="destination">View More <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme explore-destination-carousel">
                <div class="item">
                    <a href="destination-detail" class="col-lg-4">
                        <div class="destination-card">
                            <div class="image-wrapper">
                                <img src="assets/img/explore-destination.png" alt="">
                                <div class="destination-short-detail">
                                    <h6>Pokhara, Nepal</h6>
                                    <p>Enjoy the Beauty of the Nature.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="destination-detail" class="col-lg-4">
                        <div class="destination-card">
                            <div class="image-wrapper">
                                <img src="assets/img/explore-destination.png" alt="">
                                <div class="destination-short-detail">
                                    <h6>Janakpur, Nepal</h6>
                                    <p>Enjoy the Beauty of the Nature.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
                <div class="item">
                    <a href="destination-detail" class="col-lg-4">
                        <div class="destination-card">
                            <div class="image-wrapper">
                                <img src="assets/img/explore-destination.png" alt="">
                                <div class="destination-short-detail">
                                    <h6>Biratnagar, Nepal</h6>
                                    <p>Enjoy the Beauty of the Nature.</p>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- EXPLORE-DESTINATION-SECTION -->

<!-- BLOGS-SECTION -->
<section class="text-center py-60 primary-light blog-and-articles">
    <div class="container">
        <div class="row">
            <h2>Blog & Articles</h2>
            <p>Recent blogs and articles</p>
            <div class="text-end view-more">
                <a href="blog-listing">View More <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme feature-blog">
                <div class="item">
                    <a href="blog-detail.php">
                        <div class="blog-card-wrapper">
                            <div class="image-wrapper">
                                <img src="assets/img/explore-destination.png" alt="">
                            </div>
                            <div class="blog-short-detail">
                                <h6>Dream Destination To Visit This Year In Paris</h6>
                                <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Facere et distinctio
                                    adipisci
                                    optio placeat dolor possimus?</p>
                                <div class="d-flex align-items-center blog-author-detail">
                                    <div class="author-image">
                                        <img src="assets/img/author.png" alt="">
                                    </div>
                                    <div class="author-detail">
                                        <h6>By Jennifed Lawrence</h6>
                                        <p>Thinker & Designer</p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- BLOGS-SECTION -->

<!-- TRAVEL-PACKAGE -->
<!-- <section class="text-center py-60 travel-package-wrapper">
    <div class="container">
        <div class="row">
            <h2>Travel Package</h2>
            <p>Explore with RoamingNepal</p>
            <div class="text-end view-more">
                <a href="package-listing">View More <i class="fa-solid fa-angles-right"></i></a>
            </div>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme travel-package">
                <div class="item">
                    <a href="">
                        <div class="travel-package-card">
                            <div class="image-wrapper">
                                <img src="assets/img/explore-destination.png" alt="">
                                <div class="tour-price">$1,900</div>
                            </div>
                            <div class="text-start content-wrapper">
                                <h6>Sunset View Of Beautiful Lakeside Resident</h6>
                                <div class="d-flex align-items-center justify-content-between inner-wrapper">
                                    <div class="package-day"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-clock" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#0d233e" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="12" r="9" />
                                            <polyline points="12 7 12 12 15 15" />
                                        </svg> 7D/6N
                                    </div>
                                    <div class="location"><svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-map-pin" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#0d233e" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="12" cy="11" r="3" />
                                            <path
                                                d="M17.657 16.657l-4.243 4.243a2 2 0 0 1 -2.827 0l-4.244 -4.243a8 8 0 1 1 11.314 0z" />
                                        </svg> Pokhara</div>
                                    <div class="person">
                                        <svg xmlns="http://www.w3.org/2000/svg"
                                            class="icon icon-tabler icon-tabler-users" width="16" height="16"
                                            viewBox="0 0 24 24" stroke-width="1.5" stroke="#0d233e" fill="none"
                                            stroke-linecap="round" stroke-linejoin="round">
                                            <path stroke="none" d="M0 0h24v24H0z" fill="none" />
                                            <circle cx="9" cy="7" r="4" />
                                            <path d="M3 21v-2a4 4 0 0 1 4 -4h4a4 4 0 0 1 4 4v2" />
                                            <path d="M16 3.13a4 4 0 0 1 0 7.75" />
                                            <path d="M21 21v-2a4 4 0 0 0 -3 -3.85" />
                                        </svg>
                                        People: 5
                                    </div>
                                </div>
                                <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Dolorem id deserunt iure.
                                </p>
                                <div class="book-btn-wrapper">
                                    <button class="btn fw-600 rounded-pill text-white book-btn">Book Now <i
                                            class="fa-solid fa-angles-right"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section> -->
<!-- TRAVEL-PACKAGE -->

<!-- FEATURE-TRAVEL-PACKAGE -->
<section class="feature-travel-pacakge">
    <div class="overlay"></div>
    <img src="assets/img/thailand.jpg" alt="">
    <div class="col-12 inner-content">
        <div class="container">
            <div class="row justify-content-center align-items-center">
                <div class="content col-lg-7">
                    <h2>Featuring Bali Tour</h2>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Ex natus cumque minima temporibus, enim
                        laudantium doloremque consequatur mollitia neque harum modi quasi molestiae molestias illo
                        incidunt
                        delectus tempore, sequi aperiam.</p>
                    <span>From: USD $300</span>
                </div>
                <div class="col-lg-4 text-center hover-up">
                    <a href="#" class="viewDetail">Details</a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- FEATURE-TRAVEL-PACKAGE -->

<!-- PAYMENT-PARTNERS -->
<section class="text-center py-60 payment-partners-wrapper">
    <div class="container">
        <div class="row">
            <h2>Payment Partners</h2>
            <p>Gateway Partners</p>
        </div>
        <div class="row">
            <div class="owl-carousel owl-theme payment-partners">
                <div class="item">
                    <a href="">
                        <img src="assets/img/esewa.png" alt="">
                    </a>
                </div>
                <div class="item">
                    <a href="">
                        <img src="assets/img/khalti.png" alt="">
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- PAYMENT-PARTNERS -->

<!-- COUNTER-AREA -->
<section class="primary-light py-60 counter-area">
    <div class="container-fluid">
        <div class="row text-center">
            <div class="trusted-partners mb-3 col-lg-4">
                <div class="icon">
                    <img src="assets/img/startup.png" alt="">
                </div>
                <div class="content">
                    <h3>Trusted Members</h3>
                    <span>90,000 +</span>
                </div>
            </div>
            <div class="active-users mb-3 col-lg-4">
                <div class="icon">
                    <img src="assets/img/user.png" alt="">
                </div>
                <div class="content">
                    <h3>Active Users</h3>
                    <span>90,000 +</span>
                </div>
            </div>
            <div class="page-visitors mb-3 col-lg-4">
                <div class="icon">
                    <img src="assets/img/returning.png" alt="">
                </div>
                <div class="content">
                    <h3>Page Visitors</h3>
                    <span>90,000 +</span>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- COUNTER-AREA -->

<!-- TESTIMONIAL-CAROUSEL -->
<section class="py-60 testimonial-carousel-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-10 mx-auto testimonial-carousel owl-carousel owl-theme">
                <div class="item">
                    <div class="image-wrapper">
                        <img src="assets/img/author.png" alt="">
                    </div>
                    <div class="info-wrapper">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!
                        </p>
                    </div>
                    <div class="name">- Denis Hudson</div>
                </div>
                <div class="item">
                    <div class="image-wrapper">
                        <img src="assets/img/author.png" alt="">
                    </div>
                    <div class="info-wrapper">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!
                        </p>
                    </div>
                    <div class="name">- Denis Hudson</div>
                </div>
                <div class="item">
                    <div class="image-wrapper">
                        <img src="assets/img/author.png" alt="">
                    </div>
                    <div class="info-wrapper">
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!
                        </p>
                        <p>
                            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!Lorem ipsum dolor sit amet, consectetur adipisicing
                            elit. Fugiat, distinctio. Ad dolores
                            tempore autem quia cum, eum porro distinctio consequuntur ea saepe excepturi consectetur,
                            corporis amet nihil iste ratione esse!
                        </p>
                    </div>
                    <div class="name">- Denis Hudson</div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- TESTIMONIAL-CAROUSEL -->
<?php include("partials/footer.php" ); ?>