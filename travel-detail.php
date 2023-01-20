<?php include("partials/header-shadow.php");?>
<section class="my-60 travel-detail-wrapper">
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="mb-5 top-wrapper">
                    <div class="d-flex flex-wrap main-wrapper">
                        <div class="col-lg-4 col-12 d-flex align-items-center font-20 inner-wrapper destination">
                            <h6 class="pe-3">Destination:</h6>
                            <span>Cape Verde</span>
                        </div>
                        <div class="col-lg-4 col-12 d-flex align-items-center font-20 inner-wrapper duration">
                            <h6 class="pe-3">Duration:</h6>
                            <span>11th October - 20th October 2022</span>
                        </div>
                        <div class="col-lg-4 col-12 d-flex align-items-center font-20 inner-wrapper travellers">
                            <h6 class="pe-3">Travellers:</h6>
                            <span>3</span>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-6 d-sm-none d-md-block">
                <img src="assets/img/Traveling-bro.svg" alt="">
            </div>
            <div class="col-lg-6">
                <div class="my-80 add-traveller-wrapper">
                    <div class="row">
                        <div class="mb-5 d-flex position-relative align-items-center pe-5 dob-main-wrapper col-sm-6">
                            <div class="col-2 me-3 text-center">
                                <div class="avatar">
                                    <i class="fa-solid fa-person"></i>
                                </div>
                            </div>
                            <div class="position-absolute avatar-name">
                                <p class="fw-600">Self</p>
                            </div>
                            <div class="col-9 me-3">
                                <div class="dob-wrapper">
                                    <input type="" placeholder="Date of Birth" class="DOB">
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="close-traveller">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 d-flex position-relative align-items-center pe-5 dob-main-wrapper col-sm-6">
                            <div class="col-2 me-3 text-center">
                                <div class="avatar">
                                    <i class="fa-solid fa-person"></i>
                                </div>
                            </div>
                            <div class="position-absolute avatar-name">
                                <p class="fw-600">adult</p>
                            </div>
                            <div class="col-9 me-3">
                                <div class="dob-wrapper">
                                    <input type="" placeholder="Date of Birth" class="DOB">
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="close-traveller">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 d-flex position-relative align-items-center pe-5 dob-main-wrapper col-sm-6">
                            <div class="col-2 me-3 text-center">
                                <div class="avatar">
                                    <i class="fa-solid fa-person"></i>
                                </div>
                            </div>
                            <div class="position-absolute avatar-name">
                                <p class="fw-600">Self</p>
                            </div>
                            <div class="col-9 me-3">
                                <div class="dob-wrapper">
                                    <input type="" placeholder="Date of Birth" class="DOB">
                                </div>
                            </div>
                            <div class="col-1">
                                <div class="close-traveller">
                                    <i class="fa-solid fa-xmark"></i>
                                </div>
                            </div>
                        </div>
                        <div class="mb-5 col-sm-6 add-traveller-btn-wrapper">
                            <div class="d-flex align-items-center add-traveller-btn-pop" data-bs-toggle="modal"
                                data-bs-target="#addtravellermodal">
                                <div class="me-3 add-icon">
                                    <i class="fa-solid fa-plus"></i>
                                </div>
                                <h5 class="m-0 font-20">Add Traveller</h5>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="primary-light main-form-wrapper">
                    <label class="mb-2" for="">
                        <h6 class="font-20">Phone Number</h6>
                    </label>
                    <div class="d-flex align-items-center number-field">
                        <i class="fa-solid fa-phone pe-2"></i>
                        <input type="tel" placeholder="90XXXXXXXX">
                    </div>
                    <p class="font-14 mt-4">We Need This To Serve You</p>
                    <div class="col-12 mt-1 policy-wrapper">
                        <label class="d-flex align-items-center">
                            <span>GetQuote and Policy Document on <img src="assets/img/whatsapp.svg"
                                    alt="">WhatsApp</span>
                            <input class="me-2" type="checkbox" checked="">
                            <span for="" aria-hidden="true"></span>
                        </label>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<div class="modal fade" id="addtravellermodal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h1 class="modal-title fs-5" id="exampleModalLabel">Choose Traveller</h1>
                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
            </div>
            <div class="modal-body">
                <div class="choose-traveller-wrapper">
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Self</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Spouse</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Son</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Daughter</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Father</p>
                    </div>
                    <div class="d-flex inner-wrapper">
                        <input class="me-3" type="checkbox">
                        <p class="m-0">Mother</p>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-primary text-white add-traveller-btn" data-bs-dismiss="modal">Continue</button>
            </div>
        </div>
    </div>
</div>

<!-- see-plan-fixed -->
<div class="py-20 total-price-pop position-fixed bottom-0 w-100 see-plan" style="transform: translateY(0px);">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-2">
            </div>
            <div class="col-lg-2">
            </div>
            <div class="col-lg-6">
            </div>
            <div class="col-lg-2">
                <div class="continue-btn">
                    <a href="book-now" class="btn btn-modify text-white">Submit
                        <i class="fa-solid fa-angles-right"></i></a>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- see-plan-fixed -->


<?php include("partials/footer.php");?>