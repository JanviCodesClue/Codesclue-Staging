<?php
/**
 * Template Name: Hire React-Native Developer Page
 *
 * @package CodesClue
 */
get_header(); ?>


    <main class="hiring-main">
        <section class="react-native-bg">
            <div class="container">
                <div class="row align-items-center">
                  <div class="col-lg-7">
                     <h1 class="hiring-h1 text-light">Hire <span class="text-primary">React Native</span> Developers</h1>
                     <p class="hiring-des text-light hiring-mt-16">Build powerful and efficient cross-platform mobile apps with our experienced React Native developers. We ensure seamless performance, faster development, and cost-effective solutions to bring your mobile app vision to life.</p>
                           <div class="row equal-height justify-content-center text-center mb-16-hiring-md">
                                <div class="col-lg-4-hiring">
                                    <div class="hiring-feature-box">
                                        <div class="hiring-feature-icon">
                                        <i class="fa-solid fa-user-tie"></i>
                                        </div>
                                        <h5>No Charges for Project Manager</h5>
                                    </div>
                                </div>

                                <div class="col-lg-4-hiring">
                                    <div class="hiring-feature-box">
                                        <div class="hiring-feature-icon">
                                        <i class="fa-solid fa-code"></i>
                                        </div>
                                        <h5>Pre-vetted Inhouse Sr. Developer(s)</h5>
                                    </div>
                                </div>

                                <div class="col-lg-4-hiring">
                                    <div class="hiring-feature-box">
                                        <div class="hiring-feature-icon">
                                        <i class="fa-solid fa-shield"></i>
                                        </div>
                                        <h5>100% Risk Free Trial Service</h5>
                                    </div>
                                </div>
                            </div>
                  </div>
                  <div class="col-lg-5">
                       <div class="bg-custom bg-opacity-75 p-4 rounded">

                            <span class="hiring-form-heading mb-3 text-white border-4">Get Free Consultation</span>
                                <form id="ReactNativehiringForm">
                                    <div class="form-group hiring-mt-16">
                                        <label for="name" class="text-light mb-10-hiring">Full Name</label>
                                        <input type="text" class="form-control" id="name" placeholder="Full Name"
                                            required />
                                    </div>
                                    <div class="form-group hiring-mt-16">
                                        <label for="email" class="text-light mb-10-hiring">Email</label>
                                        <input type="email" class="form-control" id="email" placeholder="Email Address"
                                            required />
                                    </div>
                                    <div class="form-group hiring-mt-16">
                                        <label for="phone" class="text-light mb-10-hiring">Phone No</label>
                                        <input type="number" id="phone" class="form-control" name="phone" required
                                            minlength="8" maxlength="12" placeholder="Phone No." />
                                    </div>

                                    <div class="form-group hiring-checks hiring-mt-16">
                                        <label for="exampleInput1" class="text-light mb-10-hiring">Choose one hiring model</label>
                                        <div class="d-flex gap-2 flex-wrap">
                                            <div class="bagdehire" data-service="Full Time">
                                                <input type="checkbox" name="job-type[]" id="full" value="Full time">
                                                <label for="full" itemprop="name">Full time</label>
                                            </div>
                                            <div class="bagdehire" data-service="Part Time">
                                                <input type="checkbox" name="job-type[]" id="part" value="Part time">
                                                <label for="part" itemprop="name">Part time</label>
                                            </div>
                                            <div class="bagdehire" data-service="Hourly Hire">
                                                <input type="checkbox" name="job-type[]" id="hourly"
                                                    value="Hourly hire">
                                                <label for="hourly" itemprop="name">Hourly hire</label>
                                            </div>
                                        </div>
                                    </div>
                                    <button class="hiring-mt-16 btn btn-primary border-radius w-100 reverse col-12"
                                        type="submit">Hire
                                        Developer</button>
                                </form>
                                <div class="position-fixed top-0 end-0 p-3" style="z-index: 1050;">
                                    <div id="toastContainer"
                                        class="toast align-items-center text-white bg-success border-0" role="alert"
                                        aria-live="assertive" aria-atomic="true">
                                        <div class="d-flex">
                                            <div class="toast-body" id="toastMessage">Your message here.</div>
                                            <button type="button" class="btn-close btn-close-white me-2 m-auto"
                                                data-bs-dismiss="toast" aria-label="Close"></button>
                                        </div>
                                    </div>
                                </div>
                                </aritcle>
                        </div>
                  </div>
                </div>
            </div>
        </section>

        <section class="mt-40-hiring">
            <div class="container">
                <h2 class="section-heading">Our Dedicated Developer Hiring Models</h2>
                <div class="row hiring-mt-16">
                    <div class="col-lg-6">
                        <div class="bg-sec-blue">
                            <div class="inner-blue-heading">
                                <i class="fa-solid fa-clock-rotate-left me-2"></i>
                                <span class="py-3">
                                    Full Time Monthly Hire
                                </span>
                            </div>
                            <div class="d-flex align-items-center border-bottom-1 hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Hours:</strong>
                                    <p class="content-desc-hiring text-light ms-2">160 hours / 4 weeks</p>
                                </div>
                                <div class="d-flex align-items-center border-bottom-1 hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Minimum Duration:</strong>
                                    <p class="content-desc-hiring text-light ms-2">1 Month</p>
                                </div>
                                <div class="d-flex align-items-center border-bottom-1 hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Methodology:</strong>
                                    <p class="content-desc-hiring text-light ms-2">Agile/ SCRUM</p>
                                </div>
                                <div class="d-flex align-items-center hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Communication:</strong>
                                    <p class="content-desc-hiring text-light ms-2"> eMail, Chat, Phone</p>
                                </div>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="bg-sec-blue">
                            <div class="inner-blue-heading">
                                <i class="fa-regular fa-clock me-2"></i>
                                <span class="py-3">
                                    Hourly Hire
                                </span>
                            </div>
                            <div class="d-flex align-items-center border-bottom-1 hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Hours:</strong>
                                    <p class="content-desc-hiring text-light ms-2">Flexible</p>
                                </div>
                                <div class="d-flex align-items-center border-bottom-1 hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Minimum Duration:</strong>
                                    <p class="content-desc-hiring text-light ms-2">1 Month</p>
                                </div>
                                <div class="d-flex align-items-center border-bottom-1 hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Methodology:</strong>
                                    <p class="content-desc-hiring text-light ms-2">Agile/ SCRUM</p>
                                </div>
                                <div class="d-flex align-items-center hiring-mt-11">
                                    <strong class="content-desc-hiring text-light bold-text">Communication:</strong>
                                    <p class="content-desc-hiring text-light ms-2"> eMail, Chat, Phone</p>
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <section class="mt-40-hiring">
            <div class="container">
                <h4 class="font-24 text-center">Benifits</h4>
            <div class="row align-items-center">
                <!-- Left Features -->
                <div class="col-lg-4">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-building"></i></div>
                    <div class="feature-text">Zero Charges for Project Management</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-comments"></i></div>
                    <div class="feature-text">Direct & Transparent Communication</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-diagram-project"></i></div>
                    <div class="feature-text">Agile & SCRUM-Based Development</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-shield-halved"></i></div>
                    <div class="feature-text">Complete Code Ownership & IP Protection</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-layer-group"></i></div>
                    <div class="feature-text">Flexible Engagement Models</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-code-branch"></i></div>
                    <div class="feature-text">Daily Progress Updates & Code Releases</div>
                </div>
                </div>

                <!-- Center Image -->
                <div class="col-lg-4 text-center feature-image">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/hiring/benifits.png" alt="Team Collaboration" class="mb-16-hiring-md" />
                </div>

                <!-- Right Features -->
                <div class="col-lg-4">
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-clock"></i></div>
                    <div class="feature-text">Time Zone Aligned Collaboration</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-user-check"></i></div>
                    <div class="feature-text">Exclusive Developer(s) Allocation</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-bolt"></i></div>
                    <div class="feature-text">Rapid Onboarding Process</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-gear"></i></div>
                    <div class="feature-text">Advanced Project Management Tools</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-lock"></i></div>
                    <div class="feature-text">Robust Version Control & Code Security</div>
                </div>
                <div class="feature-item">
                    <div class="feature-icon"><i class="fa-solid fa-users"></i></div>
                    <div class="feature-text">Effortless Team Scaling</div>
                </div>
                </div>

            </div>
            </div>
        </section>

        <section>
            <div class="container">
                <div class="row">
                     <div class="col-lg-2"></div>
                     <div class="col-lg-7"></div>
                     <div class="col-lg-3"></div>
                </div>
            </div>
        </section>
    </main>



<?php get_footer(); ?>