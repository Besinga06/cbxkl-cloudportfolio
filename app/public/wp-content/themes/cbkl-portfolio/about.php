<?php
/*
Template Name: About Us
*/
get_header();
?>

<main class="about-page">

    <!-- HERO SECTION -->
    <section class="about-hero">
        <div class="about-hero-content reveal">
            <span class="about-label">OPOL COMMUNITY COLLEGE | BSIT</span>

            <h1>
                More Than Just<br>
                <span>Technology.</span>
            </h1>

            <p>
                Two aspiring IT professionals, one shared vision.
                Discover who we are, what we do, and how we turn
                ideas into meaningful digital solutions.
            </p>

            <a href="#our-story" class="about-button">
                Discover Our Story <span>↓</span>
            </a>
        </div>

        <div class="about-hero-decoration">
            <div class="orbit orbit-one"></div>
            <div class="orbit orbit-two"></div>
            <div class="orbit-center">
                <span>CB</span>
                <span class="orbit-x">×</span>
                <span>KL</span>
            </div>
            <span class="floating-code code-one">01001001</span>
            <span class="floating-code code-two">10101010</span>
            <span class="floating-code code-three">&lt;/code&gt;</span>
        </div>

        <div class="about-scroll">SCROLL TO EXPLORE ↓</div>
    </section>


    <!-- OUR STORY -->
    <section class="about-story section-padding" id="our-story">
        <div class="about-section-heading reveal">
            <span class="section-tag">WHO WE ARE</span>
            <h2>Two Minds. <span>One Vision.</span></h2>
        </div>

        <div class="story-content reveal">
            <div class="story-number">01</div>

            <div class="story-text">
                <p>
                    We are two fourth-year Bachelor of Science in
                    Information Technology (BSIT) students from
                    <strong>Opol Community College</strong>, working
                    together to transform ideas into meaningful
                    digital solutions.
                </p>

                <p>
                    This collaborative portfolio represents our
                    journey as aspiring IT professionals. It showcases
                    our skills, experiences, projects, and the
                    knowledge we have gained throughout our academic
                    journey.
                </p>

                <p>
                    Through teamwork, creativity, and continuous
                    learning, we aim to explore how technology can
                    address real-world challenges.
                </p>
            </div>
        </div>
    </section>


    <!-- OUR MEMBERS -->
    <section class="about-members section-padding">
        <div class="about-section-heading reveal">
            <span class="section-tag">THE PEOPLE BEHIND THE WORK</span>
            <h2>Meet Our <span>Team.</span></h2>
            <p>
                Different strengths, complementary skills,
                and one collaborative goal.
            </p>
        </div>

        <div class="about-member-grid">

            <!-- CESAR -->
            <article class="about-member-card reveal">
                <div class="member-image-area">
                    <div class="member-number">01</div>

                    <div class="member-photo">
                        <img
                            src="<?php echo esc_url(includes_url() . '/images/Professional Passport Portrait.png'); ?>"
                            alt="Cesar Besinga">
                    </div>

                    <span class="member-code">PROGRAMMER</span>
                </div>

                <div class="member-information">
                    <span class="member-role">01 / PROGRAMMING</span>

                    <h3>Cesar Besinga</h3>

                    <p>
                        Focused on programming and system development,
                        transforming ideas into functional applications
                        through coding, problem-solving, and technology
                        integration.
                    </p>

                    <div class="member-skills">
                        <span>Programming</span>
                        <span>Web Development</span>
                        <span>IoT</span>
                    </div>

                    <a href="<?php echo esc_url(home_url('/cesar-profile/')); ?>"
                        class="member-link">
                        Explore Profile <span>↗</span>
                    </a>
                </div>
            </article>


            <!-- KIMBERLY -->
            <article class="about-member-card reveal">
                <div class="member-image-area">
                    <div class="member-number">02</div>

                    <div class="member-photo">
                        <img
                            src="<?php echo esc_url(includes_url() . '/images/jorja.jpg'); ?>"
                            alt="Kimberly Lagat">
                    </div>

                    <span class="member-code">TECHNICAL WRITER</span>
                </div>

                <div class="member-information">
                    <span class="member-role">02 / DOCUMENTATION</span>

                    <h3>Kimberly Lagat</h3>

                    <p>
                        Focused on technical writing, research, and
                        project documentation, communicating technical
                        ideas through organized and understandable
                        written materials.
                    </p>

                    <div class="member-skills">
                        <span>Research</span>
                        <span>Documentation</span>
                        <span>Technical Writing</span>
                    </div>

                    <a href="<?php echo esc_url(home_url('/kim-profile/')); ?>"
                        class="member-link">
                        Explore Profile <span>↗</span>
                    </a>
                </div>
            </article>

        </div>
    </section>


    <!-- OUR COLLABORATION -->
    <section class="about-collaboration section-padding">
        <div class="collaboration-content reveal">
            <span class="section-tag">BETTER TOGETHER</span>

            <h2>
                Combining Skills.<br>
                <span>Creating Possibilities.</span>
            </h2>

            <p>
                We believe successful technology projects require
                both technical skills and effective communication.
                By combining programming and technical writing,
                we work together to develop, document, and present
                our projects.
            </p>

            <div class="collaboration-visual">
                <div class="collab-box">
                    <span class="collab-icon">&lt;/&gt;</span>
                    <h3>Programming</h3>
                    <p>Building functional solutions</p>
                </div>

                <div class="collab-symbol">+</div>

                <div class="collab-box">
                    <span class="collab-icon">✎</span>
                    <h3>Documentation</h3>
                    <p>Communicating ideas clearly</p>
                </div>

                <div class="collab-symbol">=</div>

                <div class="collab-result">
                    <span>✦</span>
                    <h3>Innovation</h3>
                </div>
            </div>
        </div>
    </section>


    <!-- FEATURED PROJECT -->
    <section class="about-project section-padding">
        <div class="project-content reveal">
            <div class="project-info">
                <span class="section-tag">WHAT WE ARE WORKING ON</span>

                <h2>Ideas That Make <span>An Impact.</span></h2>

                <p>
                    One of our featured academic projects is our proposed
                    IoT-Enabled Flood Monitoring and Evacuation Mapping
                    Using ESP32 Real-Time Safe Route Guidance.
                </p>

                <p>
                    The project explores how IoT technology can support
                    flood monitoring, evacuation awareness, and
                    community safety through real-time information.
                </p>

                <span class="project-status">ACADEMIC PROJECT</span>
            </div>

            <div class="project-visual">
                <div class="project-visual-circle">
                    <span class="project-icon">⌁</span>
                    <strong>IoT</strong>
                    <small>SMART TECHNOLOGY</small>
                </div>

                <span class="project-decoration decoration-one">ESP32</span>
                <span class="project-decoration decoration-two">REAL-TIME</span>
            </div>
        </div>
    </section>


    <!-- MISSION -->
    <section class="about-mission section-padding">
        <div class="about-section-heading reveal">
            <span class="section-tag">OUR PURPOSE</span>
            <h2>Our Mission.</h2>
        </div>

        <div class="mission-card reveal">
            <div class="mission-symbol">✦</div>

            <p>
                To continuously learn, create, and develop
                technology-based solutions while sharing our
                experiences and growth as future IT professionals.
            </p>

            <div class="mission-signature">
                CB <span>×</span> KL
            </div>
        </div>
    </section>


    <!-- FINAL CALL TO ACTION -->
    <section class="about-cta reveal">
        <span class="section-tag">OUR JOURNEY CONTINUES</span>

        <h2>
            Ideas into Innovation.
        </h2>

        <p>
            Code. Create. Document. Collaborate.
        </p>

        <a href="<?php echo esc_url(home_url()); ?>"
            class="about-button">
            Get in Touch <span>↗</span>
        </a>
    </section>

</main>


<!-- SCROLL REVEAL ANIMATION -->
<script>
    document.addEventListener("DOMContentLoaded", function() {

        const revealElements = document.querySelectorAll(".reveal");

        if ("IntersectionObserver" in window) {

            const observer = new IntersectionObserver(function(entries) {

                entries.forEach(function(entry) {

                    if (entry.isIntersecting) {
                        entry.target.classList.add("active");
                        observer.unobserve(entry.target);
                    }

                });

            }, {
                threshold: 0.12
            });

            revealElements.forEach(function(element) {
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