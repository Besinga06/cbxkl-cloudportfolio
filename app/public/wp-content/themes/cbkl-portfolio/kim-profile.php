<?php
/*
Template Name: Kimberly Profile
*/

get_header();
?>

<main class="kimberly-profile-page">

    <!-- PROFILE HERO -->
    <section class="kimberly-hero">

        <div class="kimberly-hero-content">

            <div class="kimberly-profile-image">
                <img
                    src="<?php echo esc_url(includes_url() . '/images/jorja.jpg'); ?>"
                    alt="Kimberly Lagat">
            </div>

            <div class="kimberly-intro">

                <p class="kimberly-label">
                    OPOL COMMUNITY COLLEGE | BSIT
                </p>

                <h1>
                    Hello, I'm <span>Kimberly Georgia M. Lagat.</span>
                </h1>

                <h2>Technical Writer & Documentation Specialist</h2>

                <p>
                    I am a Bachelor of Science in Information Technology
                    student passionate about technical writing,
                    documentation, research, and communicating complex
                    technical information in a clear and understandable way.
                </p>

                <div class="kimberly-social-links">


                    <!-- Instagram -->
                    <a href="https://www.instagram.com/YOUR_USERNAME/"
                        class="cesar-social-icon instagram-icon"
                        aria-label="Visit my Instagram"
                        title="Instagram"
                        target="_blank"
                        rel="noopener noreferrer">

                        <svg viewBox="0 0 24 24" width="25" height="25"
                            fill="none">

                            <defs>
                                <linearGradient id="instagramGradient"
                                    x1="0%" y1="100%" x2="100%" y2="0%">

                                    <stop offset="0%" stop-color="#feda75" />
                                    <stop offset="25%" stop-color="#fa7e1e" />
                                    <stop offset="50%" stop-color="#d62976" />
                                    <stop offset="75%" stop-color="#962fbf" />
                                    <stop offset="100%" stop-color="#4f5bd5" />

                                </linearGradient>
                            </defs>

                            <rect x="3" y="3" width="18" height="18" rx="5"
                                stroke="url(#instagramGradient)"
                                stroke-width="2" />

                            <circle cx="12" cy="12" r="4"
                                stroke="url(#instagramGradient)"
                                stroke-width="2" />

                            <circle cx="17.5" cy="6.5" r="1"
                                fill="#d62976" />

                        </svg>

                    </a>

                    <!-- FACEBOOK -->
                    <a href="https://www.facebook.com/kimberly.m.lagat"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="kimberly-social-icon"
                        aria-label="Visit my Facebook profile"
                        title="Facebook">

                        <svg viewBox="0 0 24 24" width="25" height="25"
                            fill="currentColor">
                            <path d="M13.5 21v-8h2.7l.4-3h-3.1V8.1c0-.9.3-1.5 1.6-1.5h1.6V3.9c-.3 0-1.3-.1-2.5-.1-2.5 0-4.2 1.5-4.2 4.3V10H7.2v3h2.8v8h3.5z" />
                        </svg>

                    </a>

                </div>

            </div>

        </div>

    </section>


    <!-- ABOUT ME -->
    <section class="kimberly-about">

        <div class="kimberly-section-heading">
            <p>GET TO KNOW ME</p>
            <h2>About Me</h2>
        </div>

        <div class="kimberly-about-content">

            <p>
                I am Kimberly Lagat, a Bachelor of Science in
                Information Technology student at Opol Community College.
                I have an interest in technical writing and creating
                organized, informative, and meaningful documentation.
            </p>

            <p>
                I enjoy transforming technical concepts into
                easy-to-understand information. My interests include
                project documentation, technical research, report writing,
                and preparing user-friendly guides that help people
                understand and use technology.
            </p>

        </div>

    </section>



    <!-- EDUCATION SECTION -->
    <section class="kimberly-education">

        <div class="kimberly-section-heading">
            <span>MY BACKGROUND</span>
            <h2>Educational Journey</h2>
            <p>My academic journey and educational background.</p>
        </div>

        <div class="kimberly-education-timeline">

            <!-- ELEMENTARY -->
            <div class="kimberly-education-item">
                <div class="kimberly-education-icon">🎓</div>
                <div class="kimberly-education-card">
                    <img src="<?php echo get_theme_file_uri('/images/elementary-logo.png'); ?>"
                        alt="Elementary School Logo"
                        class="kimberly-school-logo">
                    <div class="kimberly-education-info">
                        <span class="kimberly-education-level">ELEMENTARY</span>
                        <h3>Sample Elementary School</h3>
                        <span class="kimberly-education-date">School Year: 2010–2016</span>
                        <span class="kimberly-education-status graduated-status">
                            <span class="status-dot"></span> Graduated
                        </span>
                    </div>
                </div>
            </div>

            <!-- JUNIOR HIGH SCHOOL -->
            <div class="kimberly-education-item">
                <div class="kimberly-education-icon">🎓</div>
                <div class="kimberly-education-card">
                    <img src="<?php echo get_theme_file_uri('/images/junior-high-logo.png'); ?>"
                        alt="Junior High School Logo"
                        class="kimberly-school-logo">
                    <div class="kimberly-education-info">
                        <span class="kimberly-education-level">JUNIOR HIGH SCHOOL</span>
                        <h3>Sample National High School</h3>
                        <span class="kimberly-education-date">School Year: 2016–2020</span>
                        <span class="kimberly-education-status graduated-status">
                            <span class="status-dot"></span> Graduated
                        </span>
                    </div>
                </div>
            </div>

            <!-- SENIOR HIGH SCHOOL -->
            <div class="kimberly-education-item">
                <div class="kimberly-education-icon">🎓</div>
                <div class="kimberly-education-card">
                    <img src="<?php echo get_theme_file_uri('/images/senior-high-logo.png'); ?>"
                        alt="Senior High School Logo"
                        class="kimberly-school-logo">
                    <div class="kimberly-education-info">
                        <span class="kimberly-education-level">SENIOR HIGH SCHOOL</span>
                        <h3>Sample Senior High School</h3>
                        <span class="kimberly-education-date">School Year: 2020–2022</span>
                        <span class="kimberly-education-status graduated-status">
                            <span class="status-dot"></span> Graduated
                        </span>
                    </div>
                </div>
            </div>

            <!-- COLLEGE -->
            <div class="kimberly-education-item">
                <div class="kimberly-education-icon">🎓</div>
                <div class="kimberly-education-card">
                    <img src="<?php echo get_theme_file_uri('/images/occ-logo.png'); ?>"
                        alt="Opol Community College Logo"
                        class="kimberly-school-logo">
                    <div class="kimberly-education-info">
                        <span class="kimberly-education-level">COLLEGE</span>
                        <h3>Opol Community College</h3>
                        <span class="kimberly-education-date">Bachelor of Science in Information Technology</span>
                        <span class="kimberly-education-status current-status">
                            <span class="status-dot"></span> Currently Studying
                        </span>
                    </div>
                </div>
            </div>

        </div>
    </section>



    <!-- SKILLS -->
    <section class="kimberly-skills">

        <div class="kimberly-section-heading">
            <p>WHAT I DO BEST</p>
            <h2>Technical Writing Skills</h2>
        </div>

        <div class="kimberly-skills-grid">

            <div class="kimberly-skill-card">
                <h3>Technical Documentation</h3>
                <p>Creating organized technical documents and system documentation.</p>
            </div>

            <div class="kimberly-skill-card">
                <h3>Research Writing</h3>
                <p>Gathering, analyzing, and presenting relevant information.</p>
            </div>

            <div class="kimberly-skill-card">
                <h3>Report Writing</h3>
                <p>Preparing structured academic and project reports.</p>
            </div>

            <div class="kimberly-skill-card">
                <h3>User Documentation</h3>
                <p>Developing user guides and step-by-step instructions.</p>
            </div>

            <div class="kimberly-skill-card">
                <h3>Content Organization</h3>
                <p>Arranging technical information clearly and logically.</p>
            </div>

            <div class="kimberly-skill-card">
                <h3>Communication</h3>
                <p>Explaining technical ideas through clear written communication.</p>
            </div>

        </div>

    </section>


    <!-- FEATURED PROJECTS -->
    <section class="kimberly-projects">

        <div class="kimberly-section-heading">
            <p>MY CONTRIBUTIONS</p>
            <h2>Featured Projects</h2>
        </div>

        <div class="kimberly-project-grid">

            <!-- IOT FLOOD MONITORING -->
            <div class="kimberly-project-card">

                <div class="kimberly-project-image">
                    <img
                        src="PASTE_FLOOD_PROJECT_IMAGE_URL_HERE"
                        alt="IoT Flood Monitoring System"
                        loading="lazy">
                </div>

                <div class="kimberly-project-details">

                    <span class="kimberly-project-category">
                        TECHNICAL WRITING & RESEARCH
                    </span>

                    <h3>IoT Flood Monitoring System</h3>

                    <p>
                        Contributed to the technical documentation,
                        research materials, related literature,
                        project descriptions, and system documentation
                        for an ESP32-based flood monitoring project.
                    </p>

                    <div class="kimberly-project-tech">
                        <span>Technical Writing</span>
                        <span>Research</span>
                        <span>Documentation</span>
                    </div>

                    <a href="#"
                        class="kimberly-project-link">
                        View Research →
                    </a>

                </div>

            </div>


            <!-- CB x KL PORTFOLIO -->
            <div class="kimberly-project-card">

                <div class="kimberly-project-image">
                    <img
                        src="PASTE_PORTFOLIO_SCREENSHOT_URL_HERE"
                        alt="CB and KL Portfolio Website"
                        loading="lazy">
                </div>

                <div class="kimberly-project-details">

                    <span class="kimberly-project-category">
                        WEB DEVELOPMENT & CONTENT
                    </span>

                    <h3>CB × KL Portfolio</h3>

                    <p>
                        Collaborated in developing a portfolio website
                        by preparing written content, organizing
                        project descriptions, and presenting the
                        team's skills and accomplishments.
                    </p>

                    <div class="kimberly-project-tech">
                        <span>WordPress</span>
                        <span>Content Writing</span>
                        <span>Documentation</span>
                    </div>

                    <a href="#"
                        class="kimberly-project-link">
                        View Portfolio →
                    </a>

                </div>

            </div>


            <!-- ACADEMIC DOCUMENTATION -->
            <div class="kimberly-project-card">

                <div class="kimberly-project-image">
                    <img
                        src="PASTE_DOCUMENTATION_IMAGE_URL_HERE"
                        alt="Academic Documentation"
                        loading="lazy">
                </div>

                <div class="kimberly-project-details">

                    <span class="kimberly-project-category">
                        ACADEMIC WRITING
                    </span>

                    <h3>Academic Documentation</h3>

                    <p>
                        Prepared and organized academic reports,
                        research documents, project descriptions,
                        and other written materials for
                        information technology activities.
                    </p>

                    <div class="kimberly-project-tech">
                        <span>MS Word</span>
                        <span>Research Writing</span>
                        <span>Technical Documentation</span>
                    </div>

                    <a href="#"
                        class="kimberly-project-link">
                        View Documentation →
                    </a>

                </div>

            </div>

        </div>

    </section>



    <!-- CONTACT -->
    <section class="kimberly-contact">

        <h2>Words That Connect Technology.</h2>

        <p>
            I believe that good documentation makes technology
            easier to understand. Feel free to connect with me
            and explore my work.
        </p>

        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
            class="kimberly-button">
            Get In Touch
        </a>

    </section>

</main>


<!-- SCROLL ANIMATION -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const revealElements = document.querySelectorAll(
            ".kimberly-profile-page .kimberly-hero-content, " +
            ".kimberly-profile-page .kimberly-section-heading, " +
            ".kimberly-profile-page .kimberly-about-content, " +
            ".kimberly-profile-page .kimberly-info-card, " +
            ".kimberly-profile-page .kimberly-skill-card, " +
            ".kimberly-profile-page .kimberly-project-card, " +
            ".kimberly-profile-page .kimberly-contact"
        );

        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }

        if ("IntersectionObserver" in window) {

            const observer = new IntersectionObserver(function(entries) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {

                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);

                    }

                });

            }, {
                threshold: 0.15
            });

            revealElements.forEach(function(element) {

                element.classList.add("reveal");
                observer.observe(element);

            });

        } else {

            revealElements.forEach(function(element) {
                element.classList.add("active");
            });

        }

    });
</script>

<?php get_footer(); ?>