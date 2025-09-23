<?php
/**
 * Template Name: Therapix Page
 *
 * @package CodesClue
 */
get_header(); ?>

    <main class="mt-main">
    


<section class="th-bg hero-section section-40">
  <div class="container-fluid px-xxl-5 px-3 z-11">
    <div class="row mx-0 px-0 gx-4 align-items-center">
      
      <!-- Left: Image -->
      <div class="col-lg-6 col-12 d-flex justify-content-center mb-4 mb-lg-0">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_therapix-screens.gif"
          alt="codesclue_therapix-screens"
          class="th-mobile img-fluid" />
      </div>

      <!-- Right: Content -->
      <div class="col-lg-6 col-12 d-flex flex-column align-items-start">
        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_therapix-logo.svg"
          alt="codesclue_therapix-logo"
          class="th-logo img-fluid mb-4" />

        <h1 class="section-title font-48 text-white mb-3">
          Therapix - AI-Powered Physiotherapy Assistant
        </h1>
        
        <p class="content-desc text-white">
          Therapix is an intelligent physiotherapy platform developed for healthcare professionals
          to streamline and enhance patient care using artificial intelligence. Built for a client in
          the healthcare space, the goal was to simplify documentation, boost clinical insights, and
          enable physiotherapists to focus more on their patients and less on paperwork.
        </p>

        <!-- Tech List -->
    

      </div>
          <div class="th-grid-hero-section mt-lg-4 mt-3 w-100">
          <ul class="tech-list">
            <li>
              <div class="th-icon-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-tech.svg"
                  alt="codesclue_gr-tech" />
              </div>
              <div class="ribbon">
                <p class="content-desc mb-0 text-white">
                  <strong>Technology:</strong><br />React.Js, MongoDB, Tailwind CSS, OpenAI
                </p>
              </div>
            </li>
            <li>
              <div class="th-icon-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-indus.svg"
                  alt="codesclue_gr-indus" />
              </div>
              <div class="ribbon">
                <p class="content-desc mb-0 text-white">
                  <strong>Industry:</strong><br />Healthcare
                </p>
              </div>
            </li>
            <li>
              <div class="th-icon-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-built.svg"
                  alt="codesclue_gr-built" />
              </div>
              <div class="ribbon">
                <p class="content-desc mb-0 text-white">
                  <strong>Built for:</strong><br />Mobile and Web
                </p>
              </div>
            </li>
            <li>
              <div class="th-icon-bg">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_gr-world.svg"
                  alt="codesclue_gr-world" />
              </div>
              <div class="ribbon">
                <p class="content-desc mb-0 text-white">
                  <strong>Access:</strong><br />Worldwide
                </p>
              </div>
            </li>
          </ul>
        </div>
    </div>
  </div>
</section>





        <section class="section-40 th-bg-img">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">AI-Driven Physiotherapy Platform</h2>
                    </div>
                    <p class="section-description px-0">We designed an intuitive mobile and web interface tailored
                        for physiotherapists. The platform enables in-session audio recording and AI-powered
                        transcription,
                        analyzes conversations to suggest treatment insights, and includes a real-time chatbot
                        assistant.
                        All data is managed securely with HIPAA-compliant infrastructure to ensure patient privacy.</p>
                </div>
                <div class="row mx-0 px-0 row-gap-md-5 row-gap-4 mt-md-4 mt-3 th-about-section">
                    <div class="col-12 d-flex gap-3 flex-md-row flex-column px-lg-2 px-0">
                        <div class="ribbon">
                            <h3
                                class="content-title text-white d-flex align-items-center h-100 justify-content-md-start justify-content-center">
                                Generate a soap note</h3>
                        </div>
                        <div class="border-th-dash px-0">
                            <p class="content-desc text-th mb-0">Automatically generate structured SOAP (Consent,
                                Subjective, Objective, Assessment, Treatment) notes from recorded patient sessions. Save
                                time on documentation while maintaining clinical accuracy and consistency.</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex gap-3 flex-md-row-reverse flex-column px-lg-2 px-0">
                        <div class="ribbon reverse">
                            <h3
                                class="content-title text-white d-flex align-items-center h-100 justify-content-md-end justify-content-center">
                                Generate WSIB Forms</h3>
                        </div>
                        <div class="border-th-dash px-0">
                            <p class="content-desc text-th mb-0">Quickly generate Workplace Safety and Insurance Board
                                (WSIB) forms using AI-powered data extraction. Reduce administrative burden and ensure
                                timely submissions with pre-filled, ready-to-send reports.</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex gap-3 flex-md-row flex-column px-lg-2 px-0">
                        <div class="ribbon">
                            <h3
                                class="content-title text-white d-flex align-items-center h-100 justify-content-md-start justify-content-center">
                                Generate MVA Forms</h3>
                        </div>
                        <div class="border-th-dash px-0">
                            <p class="content-desc text-th mb-0">Streamline the creation of Motor Vehicle Accident
                                assessment and reporting forms. Therapix extracts key information from sessions and
                                formats it into MVA-compliant documentation with minimal manual input.</p>
                        </div>
                    </div>
                    <div class="col-12 d-flex gap-3 flex-md-row-reverse flex-column px-lg-2 px-0">
                        <div class="ribbon reverse">
                            <h3
                                class="content-title text-white d-flex align-items-center h-100 justify-content-md-end justify-content-center">
                                AI Assistant Chatbots</h3>
                        </div>
                        <div class="border-th-dash px-0">
                            <p class="content-desc text-th mb-0">Access an always-available clinical assistant for
                                instant answers, treatment recommendations, or help with workflows. The AI chatbot
                                supports physiotherapists in making quicker, more informed decisions.</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="py-4 th-bg-secondary-color h-100vh">
            <div class="container">
                <div class="col-xl-9 col-sm-7 col-12 px-0 mx-auto">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_th-responsive.svg"
                        alt="codesclue_th-responsive" class="img-fluid object-fit-cover w-100" />
                </div>
            </div>
        </section>

        <section class="section-40 th-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">Generate a Soap Note</h2>
                    </div>
                    <p class="section-description px-0">We designed an intuitive mobile and web interface tailored
                        for physiotherapists. The platform enables in-session audio recording and AI-powered
                        transcription,
                        analyzes conversations to suggest treatment insights, and includes a real-time chatbot
                        assistant.
                        All data is managed securely with HIPAA-compliant infrastructure to ensure patient privacy.</p>
                </div>
                <div class="row mx-0 px-0 row-gap-md-5 row-gap-4 mt-md-4 mt-3 th-about-section">
                    <div class="col-lg-3 col-12 px-lg-2 px-0 d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codescle_genrate-shoapNotes.webp"
                            alt="codescle_genrate-shoapNotes" class="img-soap" />
                    </div>
                    <div class="col-lg-9 col-12 px-lg-2 px-0 d-flex flex-column row-gap-lg-4 row-gap-3">
                        <p class="content-desc bold-text">This screen showcases the automated SOAP Note generated by
                            Therapix's AI engine.
                            Each section of the note Consent, Subjective, Objective, Assessment, and Treatment is
                            populated based
                            on real-time audio analysis of a physiotherapist's session with the patient.</p>
                        <div class="d-flex flex-column gap-lg-4 gap-3">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">01</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">Consent:</h3>
                                    <p class="content-desc">Captures whether the patient provided or denied consent
                                        during the conversation.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">02</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">Subjective:</h3>
                                    <p class="content-desc">Records any new symptoms or concerns expressed by the
                                        patient.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">03</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">Objective:</h3>
                                    <p class="content-desc">Extracts measurable data or observations made by the
                                        therapist.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">04</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">Assessment:</h3>
                                    <p class="content-desc">Provides clinical interpretations based on subjective and
                                        objective findings.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">05</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">Treatment:</h3>
                                    <p class="content-desc">Documents interventions, exercises, or educational advice
                                        discussed.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="section-40 th-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">WSIB & MVA Form Generation</h2>
                    </div>
                    <p class="section-description px-0">We design this demonstrates Therapix's form automation module,
                        designed to help physiotherapists instantly generate essential legal and insurance-related
                        documents
                        based on existing SOAP notes.</p>
                </div>
                <div
                    class="row mx-0 px-0 row-gap-md-5 row-gap-4 mt-md-4 mt-3 flex-lg-row flex-column-reverse th-about-section">
                    <div class="col-lg-9 col-12 px-lg-2 px-0 d-flex flex-column row-gap-lg-4 row-gap-3">
                        <p class="content-desc bold-text">At the top, users can select a SOAP note (e.g., Initial Note)
                            as the source
                            of information. Therapix then uses AI to pre-fill relevant details into the selected form,
                            ensuring
                            consistency, accuracy, and significant time savings.</p>
                        <div class="d-flex flex-column gap-lg-4 gap-3">
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">01</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">WSIB Initial Assessment
                                        Report:</h3>
                                    <p class="content-desc">Document baseline findings at the start of treatment.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">02</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">WSIB Midpoint Report:</h3>
                                    <p class="content-desc">Provide updates on patient progress mid-treatment.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">03</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">WSIB Care and Summary:</h3>
                                    <p class="content-desc">Summarize final results and outcomes of care.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">04</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">WSIB Supplementary Report:
                                    </h3>
                                    <p class="content-desc">Add extra details or updated assessments when required.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">05</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">WSIB Functional Abilities
                                        Form:</h3>
                                    <p class="content-desc">Define what physical tasks a patient can safely perform
                                        post-injury.</p>
                                </div>
                            </div>
                            <div class="d-flex gap-3 align-items-center">
                                <div class="circle one">
                                    <div class="circle two">
                                        <strong class="content-sub-title">06</strong>
                                    </div>
                                </div>
                                <div class="d-flex flex-column gap-1">
                                    <h3 class="content-sub-title d-flex align-items-center">MVA Form 1 & MVA Form 2:
                                    </h3>
                                    <p class="content-desc">Capture standardized reports related to Motor Vehicle
                                        Accident claims and treatment.</p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 col-12 px-lg-2 px-0 d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codescle_genrate-MVC.webp"
                            alt="codescle_genrate-MVC" class="img-soap" />
                    </div>
                </div>
            </div>
        </section>

        <section class="section-40 th-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">AI Assistant</h2>
                    </div>
                    <p class="section-description px-0">We design this demonstrates Therapix's form automation module,
                        designed to help physiotherapists instantly generate essential legal and insurance-related
                        documents
                        based on existing SOAP notes.</p>
                </div>
                <div class="row mx-0 px-0 row-gap-md-5 row-gap-4 mt-md-4 mt-3 th-about-section">
                    <div class="col-lg-3 col-12 px-lg-2 px-0 d-flex justify-content-center">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codescle_ai-Assistant.webp"
                            alt="codescle_ai-Assistant" class="img-soap" />
                    </div>
                    <div class="col-lg-9 col-12 px-lg-2 px-0 d-flex flex-column row-gap-lg-4 row-gap-3">
                        <div class="d-flex flex-column gap-lg-3 gap-2">
                            <div class="d-flex flex-column gap-1">
                                <h3 class="content-sub-title d-flex align-items-center">Real-Time Clinical Support</h3>
                                <p class="content-desc">Ask questions about treatment protocols, injury classifications,
                                    or rehab techniques. Get instant summaries of clinical guidelines or best practices.
                                    Perfect for use during patient sessions or in between appointments.</p>
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <h3 class="content-sub-title d-flex align-items-center">Smart Treatment Recommendations
                                </h3>
                                <p class="content-desc">Input symptoms or goals and receive AI-suggested exercise plans.
                                    Explore variations based on age, injury type, or patient history. Supports a broad
                                    range of musculoskeletal and neurological conditions.</p>
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <h3 class="content-sub-title d-flex align-items-center">Red Flag Awareness & Safety</h3>
                                <p class="content-desc">Ask about potential red flags or contraindications for
                                    treatment. Get alerts when something in the conversation may require physician
                                    referral. Ensures safer, evidence-informed decision-making.</p>
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <h3 class="content-sub-title d-flex align-items-center">Documentation Help</h3>
                                <p class="content-desc">Clarify SOAP note structure or wording on the fly. Get help
                                    choosing the right WSIB/MVA form to generate. Ask for summaries or action points
                                    post-session.</p>
                            </div>
                            <div class="d-flex flex-column gap-1">
                                <h3 class="content-sub-title d-flex align-items-center">Benefits for Physiotherapists
                                </h3>
                                <p class="content-desc">Reduce clinical lookup time by 80% Improve accuracy and
                                    consistency in documentation Make faster, more confident care decisions Enhance
                                    patient interaction without breaking flow.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- <section class="section-40 th-bg-img-secondary">
            <div class="container-fluid">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-white mb-0">Therapix App Flow</h2>
                    </div>
                    <div class="row mx-0 px-0 justify-content-center z-11">
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_phone_frame.webp" alt="frame" class="phone-frame" />
                        <div class="d-flex bg-frame justify-content-center px-0">
                                <div class="owl-carousel" id="th-carousel">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-1.webp" alt="codesclue_patient-1" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-2.webp" alt="codesclue_patient-2" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-3.webp" alt="codesclue_patient-3" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-4.webp" alt="codesclue_patient-4" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-5.webp" alt="codesclue_patient-5" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-6.webp" alt="codesclue_patient-6" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-7.webp" alt="codesclue_patient-7" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-8.webp" alt="codesclue_patient-8" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-9.webp" alt="codesclue_patient-9" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-10.webp" alt="codesclue_patient-10" />
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/Therapix phone/codesclue_patient-11.webp" alt="codesclue_patient-11" />
                                </div>
                        </div>
                    </div>
                </div>
            </div>
        </section> -->

        <section class="section-40 th-bg-color therapix-100vh">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">Therapix's Ecosystem</h2>
                    </div>
                    <p class="section-description px-0">Therapix offers a complete, AI-driven ecosystem built
                        specifically
                        for physiotherapists and rehabilitation clinics. It combines smart automation, real-time
                        support,
                        and secure infrastructure to transform the way care is delivered making workflows faster,
                        documentation
                        easier, and patient outcomes better.</p>
                </div>
            </div>
            <div class="water-mark px-0">
                <div class="row mx-0 px-0 d-md-grid grid-mobiles-therapix flex-md-row justify-content-around d-none">
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_therapix-create-patient.gif"
                            alt="codesclue_therapix-create-patient" />
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_therapix-soapnote.gif" alt="codesclue_therapix-soapnote" />
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_therapix-MVC.gif" alt="codesclue_therapix-MVC" />
                    </div>
                    <div>
                        <img src="<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_therapix-AI.gif" alt="codesclue_therapix-AI" />
                    </div>
                </div>
                <div class="row mx-0 px-0 d-flex grid-mobiles-therapix justify-content-center d-md-none">
                    <img src="<?php echo get_template_directory_uri(); ?>/assets/gif/codesclue_therapix-screens.gif" alt="codesclue_therapix-screens"
                        class="th-mobile-all" />
                </div>
            </div>
            <div class="d-sm-flex justify-content-center section-40 pt-0 d-none">
                <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_mobile-bottom-line.svg"
                    alt="codesclue_mobile-bottom-line" class="img-fluid" />
            </div>
        </section>

        <section class="section-40 th-bg-color">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">Key Features of Therapix</h2>
                    </div>
                    <p class="section-description px-0">Therapix is packed with advanced features designed to simplify
                        clinical workflows, reduce documentation time, and enhance decision-making for physiotherapists.
                    </p>
                </div>
                <div class="row mx-0 px-0 mt-md-4 mt-3">
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0 therapix-feature-card-section">
                        <article class="therapix-card border-radius p-md-3 p-2">
                            <p class="card-title pb-md-3 pb-2 mt-0 content-sub-title text-left text-white">
                                AI-Powered Audio Transcription
                            </p>
                            <p class="card-body px-3 border-radius py-2 bg-white content-desc">
                                Record in-session conversations and automatically transcribe them using advanced AI,
                                enabling efficient documentation and insight extraction.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0 therapix-feature-card-section">
                        <article class="therapix-card border-radius p-md-3 p-2">
                            <p class="card-title pb-md-3 pb-2 mt-0 content-sub-title text-left text-white">
                                SOAP Note Generation (C-SOAPT Format)
                            </p>
                            <p class="card-body px-3 border-radius py-2 bg-white content-desc">
                                Instantly generate structured SOAP notes including Consent, Subjective,
                                Objective, Assessment, and Treatment sections saving time and improving consistency.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0 therapix-feature-card-section">
                        <article class="therapix-card border-radius p-md-3 p-2">
                            <p class="card-title pb-md-3 pb-2 mt-0 content-sub-title text-left text-white">
                                Smart Treatment Recommendations
                            </p>
                            <p class="card-body px-3 border-radius py-2 bg-white content-desc">
                                Automatically analyze patient conversations to identify symptoms,
                                goals, and suggest personalized exercises, red flags, and follow-ups.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0 therapix-feature-card-section">
                        <article class="therapix-card border-radius p-md-3 p-2">
                            <p class="card-title pb-md-3 pb-2 mt-0 content-sub-title text-left text-white">
                                Real-Time Clinical Chatbot
                            </p>
                            <p class="card-body px-3 border-radius py-2 bg-white content-desc">
                                Integrated AI assistant offers physiotherapists instant support for
                                treatment queries, clinical decisions, or navigating workflows.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0 therapix-feature-card-section">
                        <article class="therapix-card border-radius p-md-3 p-2">
                            <p class="card-title pb-md-3 pb-2 mt-0 content-sub-title text-left text-white">
                                WSIB Form Automation
                            </p>
                            <p class="card-body px-3 border-radius py-2 bg-white content-desc">
                                Auto-generate Workplace Safety and Insurance Board forms using AI to extract
                                relevant data and pre-fill submissions accurately.
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0 therapix-feature-card-section">
                        <article class="therapix-card border-radius p-md-3 p-2">
                            <p class="card-title pb-md-3 pb-2 mt-0 content-sub-title text-left text-white">
                                MVA Report Generation
                            <p>
                            <p class="card-body px-3 border-radius py-2 bg-white content-desc">
                                Seamlessly produce Motor Vehicle Accident documentation based on patient
                                conversations and assessments with minimal manual input.
                            </p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

        <section class="th-bg-img">
            <div class="section-40 pb-0">
                <div class="container">
                    <div class="row mx-0 px-0">
                        <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                            <i class="fa-solid fa-kit-medical"></i>
                            <h2 class="section-title text-therapix mb-0">Therapix's Branding</h2>
                        </div>
                        <p class="section-description px-0">Typography & Colors</p>
                    </div>

                    <div class="row mx-0 px-0 gx-3 section-40 therapix-card border-raidus mt-3">
                        <div class="col-lg-5 col-12">
                            <h3 class="content-title text-center text-white">Typography</h3>
                            <div class="d-flex grid-bg justify-content-center">
                                <strong class="section-title-300 text-therapix">Aa</strong>
                            </div>
                            <p class="content-sub-title mt-2 text-white">Font-Family: <span
                                    class="fw-400">Poppins</span></p>
                        </div>
                        <div class="col-lg-7 col-12">
                            <h3 class="content-title text-center text-white">Colors</h3>
                            <div class="d-flex flex-wrap th-section mt-3 gap-sm-0 row-gap-2">
                                <div class="col-sm-3 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_therapix-0e2644.svg"
                                        alt="codesclue_therapix-0e2644" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#0e2644</h4>
                                </div>
                                <div class="col-sm-3 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_therapix-213d59.svg"
                                        alt="codesclue_therapix-213d59" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#213d59</h4>
                                </div>
                                <div class="col-sm-3 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_therapix-35556f.svg"
                                        alt="codesclue_therapix-35556f" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#35556f</h4>
                                </div>
                                <div class="col-sm-3 col-6 px-0 d-flex gap-0 flex-column align-items-center">
                                    <img src="<?php echo get_template_directory_uri(); ?>/assets/images/portfolio-img/project-assets/codesclue_therapix-507289.svg"
                                        alt="codesclue_therapix-507289" loading="lazy" />
                                    <h4 class="content-sub-title text-white p-2 border-radius">#507289</h4>
                                </div>
                            </div>
                            <p class="content-sub-title mt-lg-4 mt-2 text-white">Font-Weight: <span class="fw-400">400,
                                    500, 600, 700, 800 & 900</span></p>
                        </div>
                    </div>

                </div>
            </div>
        </section>

        <section class="section-40 th-bg-color pb-0 mb-5">
            <div class="container">
                <div class="row mx-0 px-0">
                    <div class="d-flex gap-lg-3 gap-2 align-items-center justify-content-center title-part px-0">
                        <i class="fa-solid fa-kit-medical"></i>
                        <h2 class="section-title text-therapix mb-0">Technologies We Use</h2>
                    </div>
                    <p class="section-description px-0">Tech Stack & Third-party APIs</p>
                </div>
                <div class="row mx-0 px-0 mt-md-4 mt-3">
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0">
                        <article class="w-100 therapix-card reverse border-radius p-md-3 p-2">
                            <h3 class="card-title pb-2 mt-0 content-sub-title text-left text-white">
                                Frontend
                            </h3>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>Angular</strong> - Web interface (as needed per module)
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>HTML5, Talwind CSS</strong> - Responsive layout and UI styling
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>Font Awesome</strong> - Iconography
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0">
                        <article class="w-100 therapix-card reverse p-md-3 p-2">
                            <h3 class="card-title pb-2 mt-0 content-sub-title text-left text-white">
                                Backend
                            </h3>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>Node.js + Express.js</strong> - RESTful API development
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>OpenAI APIs (ChatGPT, Whisper)</strong> - Transcription, Smart Suggestions
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>MongoDB</strong> - Document-oriented, real-time database
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0">
                        <article class="w-100 therapix-card reverse p-md-3 p-2">
                            <h3 class="card-title pb-2 mt-0 content-sub-title text-left text-white">
                                AI, DevOps & Infrastucture
                            </h3>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>AWS (EC2, Lambda, S3, CloudWatch)</strong> - Scalable, HIPAA-ready hosting
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>GitHub Actions</strong> - Automated builds and deployments
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>DynamoDB</strong> - AWS-managed NoSQL database for fast data storage
                            </p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 py-2 px-0">
                        <article class="w-100 therapix-card reverse p-md-3 p-2">
                            <h3 class="card-title pb-2 mt-0 content-sub-title text-left text-white">
                                Testing & QA
                            </h3>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>BrowserStack</strong> - Cross-platform frontend testing
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>Manual QA Scripts</strong> - Clinical scenario-based validations
                            </p>
                            <p class="card-body px-3 py-1 mb-0 bg-white content-desc">
                                <strong>Test Lab</strong> - Cloud-based automated testing on real devices
                            </p>
                        </article>
                    </div>
                </div>
                <div class="row mx-0 px-0 mt-md-3">
                    <div class="col-md-6 col-12 px-md-2 px-0 pt-md-0">
                        <article
                            class="th-tech-card p-md-3 p-2 border-radius d-flex flex-column h-100 align-items-stretch">
                            <h3 class="content-sub-title">OpenAI API</h3>
                            <p class="content-desc text-center">AI-powered features including transcription, chatbot
                                support, and content generation.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 px-0 pt-md-0 pt-3">
                        <article
                            class="th-tech-card p-md-3 p-2 border-radius d-flex flex-column h-100 align-items-stretch">
                            <h3 class="content-sub-title">Mapbox / Google Maps API</h3>
                            <p class="content-desc text-center">Enables precise geolocation features such as
                                store/clinic locators and state-wise filtering.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 px-0 pt-3">
                        <article
                            class="th-tech-card p-md-3 p-2 border-radius d-flex flex-column h-100 align-items-stretch">
                            <h3 class="content-sub-title">SendGrid</h3>
                            <p class="content-desc text-center">Transactional and marketing email delivery with
                                real-time status tracking.</p>
                        </article>
                    </div>
                    <div class="col-md-6 col-12 px-md-2 px-0 pt-3">
                        <article class="th-tech-card p-md-3 p-2 border-radius">
                            <h3 class="content-sub-title">Stripe</h3>
                            <p class="content-desc text-center">Secure payment processing and billing.</p>
                        </article>
                    </div>
                </div>
            </div>
        </section>

    </main>

<?php get_footer(); ?> 