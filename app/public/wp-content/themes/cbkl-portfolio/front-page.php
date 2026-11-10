<?php get_header(); ?>

<main class="home-container">

    <section class="hero-section">

        <div class="hero-content">

            <div class="hero-text">

                <p class="hero-label">
                    OPOL COMMUNITY COLLEGE | BSIT
                </p>

                <h1>
                    Ideas into Innovation.
                    <br>
                    Code. Create. Document. Collaborate.
                </h1>

                <p>
                    Welcome to our collaborative portfolio.
                    We are two fourth-year BSIT students
                    showcasing our skills, projects,
                    achievements, and experiences.
                </p>

            </div>

            <div class="hero-image">

                <h2>Meet the Creators</h2>

                <div class="profile-container">

                    <!-- CESAR PROFILE -->

                    <a href="<?php echo esc_url(home_url('/cesar-profile/')); ?>"
                        class="profile-link"
                        aria-label="View Cesar Besinga's profile">

                        <div class="profile-item">

                            <div class="profile-circle">

                                <svg class="binary-ring" viewBox="0 0 200 200"
                                    aria-hidden="true">

                                    <defs>
                                        <path id="cesarCircle"
                                            d="M 100,100
                                            m -83,0
                                            a 83,83 0 1,1 166,0
                                            a 83,83 0 1,1 -166,0" />
                                    </defs>

                                    <text textLength="520" lengthAdjust="spacingAndGlyphs">
                                        <textPath href="#cesarCircle" startOffset="0%">
                                            01000011 01000101 01010011 01000001 01010010
                                        </textPath>
                                    </text>

                                </svg>

                                <img src="<?php echo esc_url(includes_url('images/Professional Passport Portrait.png')); ?>"
                                    alt="Cesar Besinga">

                            </div>

                            <h3>Cesar Besinga</h3>
                            <p>Programmer</p>

                            <span class="view-profile">
                                View Profile →
                            </span>

                        </div>

                    </a>


                    <!-- KIMBERLY PROFILE -->

                    <a href="<?php echo esc_url(home_url('/kim-profile/')); ?>"
                        class="profile-link"
                        aria-label="View Kimberly Lagat's profile">

                        <div class="profile-item">

                            <div class="profile-circle">

                                <svg class="binary-ring" viewBox="0 0 200 200"
                                    aria-hidden="true">

                                    <defs>
                                        <path id="kimberlyCircle"
                                            d="M 100,100
                                            m -83,0
                                            a 83,83 0 1,1 166,0
                                            a 83,83 0 1,1 -166,0" />
                                    </defs>
                                    <text textLength="520" lengthAdjust="spacingAndGlyphs">
                                        <textPath href="#kimberlyCircle" startOffset="0%">
                                            01001011 01001001 01001101 01000010 01000101 01010010 01001100 01011001
                                        </textPath>
                                    </text>

                                </svg>

                                <img src="<?php echo esc_url(includes_url('images/inovation.png')); ?>"
                                    alt="Kimberly Lagat">

                            </div>

                            <h3>Kimberly Lagat</h3>
                            <p>Technical Writer</p>

                            <span class="view-profile">
                                View Profile →
                            </span>

                        </div>

                    </a>

                </div>

            </div>

        </div>

    </section>

</main>

<?php get_footer(); ?>