<?php include("partials/header-shadow.php");?>
<section class="my-100 travel-insurance-form">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-5 title-wrapper">
                    <h1>Travel Insurance For Nepal From Nepal</h1>
                    <p>Starting at just $250/Day with COVID-19 Covered</p>
                </div>
            </div>
            <div class="col-lg-6 d-sm-none d-md-block">
                <img src="assets/img/travel.svg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="primary-light main-form-wrapper">
                    <div class="d-flex align-items-center justify-content-between mb-4 select-multiple">
                        <div class="dropdown">
                            <button class="btn btn-secondary dropdown-toggle rounded-0 bg-transparent outline-0 ps-0 border-0 text-dark" type="button" data-bs-toggle="dropdown"
                                aria-expanded="false">
                                Visa Type
                            </button>
                            <ul class="dropdown-menu">
                                <li><a class="dropdown-item" href="#">Work Visa</a></li>
                                <li><a class="dropdown-item" href="#">Student Visa</a></li>
                                <li><a class="dropdown-item" href="#">Tourrist Visa</a></li>
                                <li><a class="dropdown-item" href="#">Immigration</a></li>
                            </ul>
                        </div>
                        <a href="" class="text-decoration-underline" type="button" data-bs-toggle="modal"
                            data-bs-target="#multiplecountrymodal">
                            Multiple Countries
                        </a>
                    </div>
                    <label class="mb-2" for="">
                        <h6 class="font-20">Traveling To</h6>
                    </label>
                    <div class="col-12 d-flex align-items-center mb-4 multiple-select-wrapper">
                        <i class="fa-solid fa-magnifying-glass pe-2"></i>
                        <select class="js-example-basic-multiple" placeholder="Country" name="states[]"
                            multiple="multiple">
                            <option value="WY">Wyoming</option>
                            <option value="NW">NewYork</option>
                        </select>
                    </div>
                    <div class="d-flex form-date-wrapper">
                        <div class="col-6 pe-4 flight-date">
                            <label class="mb-2" for="">
                                <h6 class="font-20">Trip Start Date</h6>
                            </label>
                            <div
                                class="position-relative inner-main-wrapper d-flex align-items-center input-field-wrapper">
                                <div class="icon pe-2">
                                    <i class="fa-regular fa-calendar-days"></i>
                                </div>
                                <input class="date start-date form-control flatpickr-input active"
                                    placeholder="Trip Start Date" type="text" readonly="readonly">
                            </div>
                        </div>
                        <div class="col-6 return-date">
                            <label class="mb-2" for="">
                                <h6 class="font-20">Trip End Date</h6>
                            </label>
                            <div
                                class="position-relative inner-main-wrapper d-flex align-items-center input-field-wrapper">
                                <div class="icon pe-2">
                                    <i class="fa-regular fa-calendar-days"></i>
                                </div>
                                <input class="date end-date form-control flatpickr-input" placeholder="Trip End Date"
                                    type="text" readonly="readonly">
                            </div>
                        </div>
                    </div>
                    <a href="travel-detail" class="btn mt-4 getplan-btn hover-up">
                        Get Plan
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<!-- multiple-country-modal -->
<div class="modal fade" id="multiplecountrymodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Selece Multiple Countries</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="search">
                <input type="text" class="searchTerm" placeholder="What are you looking for?">
                <button type="submit" class="searchButton">
                    <i class="fa fa-search"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="select-country-wrapper">
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Nepal</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Bhutan</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">China</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">America</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">France</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Nepal</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Bhutan</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">China</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">America</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">France</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-white add-traveller-btn"
                    data-bs-dismiss="modal">Continue</button>
            </div>
        </div>
    </div>
</div>

<?php include("partials/footer.php");?>