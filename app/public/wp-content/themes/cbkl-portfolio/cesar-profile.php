<?php
/*
Template Name: Cesar Profile
*/

get_header();
?>

<main class="cesar-profile-page">

    <!-- PROFILE HERO -->
    <section class="cesar-hero">

        <div class="cesar-hero-content">

            <div class="cesar-profile-image">
                <img
                    src="<?php echo includes_url(); ?>/images/Professional Corporate Portrait.png"
                    alt="Cesar Besinga">
            </div>

            <div class="cesar-intro">

                <p class="cesar-label">
                    OPOL COMMUNITY COLLEGE | BSIT
                </p>

                <h1>
                    Hello, I'm <span>Cesar Besinga.</span>
                </h1>

                <h2>Programmer & Web Developer</h2>

                <p>
                    I am a Bachelor of Science in Information Technology
                    student passionate about programming, web development,
                    and creating technology-based solutions.
                </p>


                <div class="cesar-social-links">

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
                    <!-- Facebook -->
                    <a href="https://www.facebook.com/cesar.besinga.6"
                        target="_blank"
                        rel="noopener noreferrer"
                        class="cesar-social-icon facebook-icon"
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
    <section class="cesar-about">

        <div class="cesar-section-heading">
            <p>GET TO KNOW ME</p>
            <h2>About Me</h2>
        </div>

        <div class="cesar-about-content">

            <p>
                I am Cesar Besinga, a BSIT student at Opol Community
                College. I enjoy learning how technology works and
                developing applications that can help solve real-world
                problems.
            </p>

            <p>
                My main interest is programming, particularly in web
                development, database management, and integrating
                hardware with software. I continuously improve my
                technical skills through academic activities and
                hands-on projects.
            </p>

        </div>

    </section>


    <!-- EDUCATION -->
    <section class="cesar-education">

        <div class="cesar-section-heading">
            <p>MY ACADEMIC BACKGROUND</p>
            <h2>Education</h2>
        </div>

        <div class="cesar-info-card">

            <h3>Opol Community College</h3>

            <p>Bachelor of Science in Information Technology</p>

            <span>BSIT Student</span>

        </div>

    </section>


    <!-- SKILLS -->
    <section class="cesar-skills">

        <div class="cesar-section-heading">
            <p>WHAT I WORK WITH</p>
            <h2>Technical Skills</h2>
        </div>

        <div class="cesar-skills-grid">

            <div class="cesar-skill-card">
                <h3>PHP</h3>
                <p>Backend Web Development</p>
            </div>

            <div class="cesar-skill-card">
                <h3>MySQL</h3>
                <p>Database Management</p>
            </div>

            <div class="cesar-skill-card">
                <h3>HTML & CSS</h3>
                <p>Website Structure and Design</p>
            </div>

            <div class="cesar-skill-card">
                <h3>JavaScript</h3>
                <p>Interactive Web Features</p>
            </div>

            <div class="cesar-skill-card">
                <h3>WordPress</h3>
                <p>Theme Development</p>
            </div>

            <div class="cesar-skill-card">
                <h3>ESP32 & IoT</h3>
                <p>Hardware and Software Integration</p>
            </div>

        </div>

    </section>


    <!-- PROJECTS -->
    <section class="cesar-projects">

        <div class="cesar-section-heading">
            <p>MY WORK</p>
            <h2>Featured Projects</h2>
        </div>

        <div class="cesar-project-grid">

            <div class="cesar-project-card">
                <h3>Farmers Cooperative Management System</h3>
                <p>
                    A web-based cooperative management system
                    developed using PHP and MySQL.
                </p>
            </div>

            <div class="cesar-project-card">
                <h3>IoT Flood Monitoring System</h3>
                <p>
                    An academic project concept involving ESP32-based
                    flood monitoring and evacuation route guidance.
                </p>
            </div>

            <div class="cesar-project-card">
                <h3>CB × KL Portfolio</h3>
                <p>
                    A collaborative portfolio website showcasing
                    programming and technical writing skills.
                </p>
            </div>

        </div>

    </section>


    <!-- CONTACT -->
    <section class="cesar-contact">

        <h2>Let's Build Something Together.</h2>

        <p>
            Thank you for visiting my profile. Feel free to connect
            with me and explore my work.
        </p>

        <a href="<?php echo esc_url(home_url('/contact-us/')); ?>"
            class="cesar-button">
            Get In Touch
        </a>

    </section>

</main>


<script>
    document.addEventListener("DOMContentLoaded", function() {

        const revealElements = document.querySelectorAll(
            ".cesar-profile-page .cesar-hero-content, " +
            ".cesar-profile-page .cesar-section-heading, " +
            ".cesar-profile-page .cesar-about-content, " +
            ".cesar-profile-page .cesar-info-card, " +
            ".cesar-profile-page .cesar-skill-card, " +
            ".cesar-profile-page .cesar-project-card, " +
            ".cesar-profile-page .cesar-contact"
        );

        // Show everything if animations are disabled
        if (window.matchMedia("(prefers-reduced-motion: reduce)").matches) {
            return;
        }

        // Check browser support
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

<?php get_footer(); ?>