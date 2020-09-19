<main class="contact_area inner-page-sec-padding-bottom">
    <div class="container">
        <div class="row">
            <div class="col-lg-12">
                <div id="google-map">
                    <iframe class="w-100 h-100" src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d62701.49927076522!2d106.6827776!3d10.8232704!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x317529203a28ab3d%3A0x42169c426fc9b32d!2zQ8O0bmcgVmnDqm4gR2lhIMSQ4buLbmg!5e0!3m2!1svi!2s!4v1600533081548!5m2!1svi!2s" width="600" height="450" frameborder="0" style="border:0;" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>
                </div>
            </div>
        </div>
        <div class="row mt--60 ">
            <div class="col-lg-5 col-md-5 col-12">
                <div class="contact_adress">
                    <div class="ct_address">
                        <h3 class="ct_title">Location & Details</h3>
                        <p>It is a long established fact that readewill be distracted by the readable content of
                            a page when looking
                            at ilayout.</p>
                    </div>
                    <div class="address_wrapper">
                        <div class="address">
                            <div class="icon">
                                <i class="fas fa-map-marker-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Address:</span> 1234 - Bandit Tringi lAliquam <br> Vitae. New York</p>
                            </div>
                        </div>
                        <div class="address">
                            <div class="icon">
                                <i class="far fa-envelope"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Email: </span> support@example.com </p>
                            </div>
                        </div>
                        <div class="address">
                            <div class="icon">
                                <i class="fas fa-mobile-alt"></i>
                            </div>
                            <div class="contact-info-text">
                                <p><span>Phone:</span> (800) 0123 456 789 </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-lg-7 col-md-7 col-12 mt--30 mt-md--0">
                <div class="contact_form">
                    <h3 class="ct_title">Send Us a Message</h3>
                    <form id="contact-form" action="php/mail.php" method="post" class="contact-form">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Name <span class="required">*</span></label>
                                    <input type="text" id="con_name" name="con_name" class="form-control" required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Email <span class="required">*</span></label>
                                    <input type="email" id="con_email" name="con_email" class="form-control"
                                           required="">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Phone*</label>
                                    <input type="text" id="con_phone" name="con_phone" class="form-control">
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label>Your Message</label>
                                    <textarea id="con_message" name="con_message" class="form-control"></textarea>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-btn">
                                    <button type="submit" value="submit" id="submit" class="btn btn-black"
                                            name="submit">send
                                    </button>
                                </div>
                                <div class="form__output"></div>
                            </div>
                        </div>
                    </form>
                    <div class="form-output">
                        <p class="form-messege"></p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</main>