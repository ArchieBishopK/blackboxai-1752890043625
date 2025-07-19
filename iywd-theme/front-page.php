<?php
/* Template Name: Front Page */
get_header();
?>

<style>
.front-hero {
    position: relative;
    background: url('https://via.placeholder.com/1920x600?text=Hero+Image') no-repeat center center/cover;
    color: white;
    padding: 6rem 1rem;
    text-align: center;
    font-family: 'Inter', sans-serif;
}
.front-hero::before {
    content: "";
    position: absolute;
    top:0; left:0; right:0; bottom:0;
    background-color: rgba(0,0,0,0.5);
    z-index: 0;
}
.front-hero-content {
    position: relative;
    z-index: 1;
    max-width: 800px;
    margin: 0 auto;
}
.front-hero h1 {
    font-size: 2.5rem;
    color: #660273;
    margin-bottom: 1rem;
}
.front-hero p {
    font-size: 1.25rem;
    margin-bottom: 2rem;
    color: white;
}
.front-hero .btn-primary {
    background-color: #660273;
    color: white;
    padding: 0.75rem 1.5rem;
    border: none;
    border-radius: 4px;
    font-weight: 600;
    margin-right: 1rem;
    cursor: pointer;
    text-decoration: none;
}
.front-hero .btn-secondary {
    background-color: transparent;
    border: 2px solid white;
    color: white;
    padding: 0.75rem 1.5rem;
    border-radius: 4px;
    font-weight: 600;
    cursor: pointer;
    text-decoration: none;
}

/* Additional sections styles will be added here */
</style>

<main id="main-content" role="main">

<section class="front-hero" aria-label="Hero section">
    <div class="front-hero-content">
        <h1>A Movement of Young Women, Forging a Just Future for Zimbabwe.</h1>
        <p>We are the Institute for Young Women Development, building feminist leadership from the ground up to challenge inequality and create lasting change.</p>
        <a href="/donate" class="btn-primary">Donate Now</a>
        <a href="/impact" class="btn-secondary">Discover Our Impact</a>
    </div>
</section>

<!-- Additional sections to be implemented -->

<section aria-label="Our Call to Action: The Reality for Young Women in Zimbabwe" style="background:white; padding:3rem 1rem; font-family: 'Inter', sans-serif; max-width:1200px; margin:2rem auto;">
    <h2 style="color:#660273; text-align:center; font-size:2rem; margin-bottom:2rem;">Our Call to Action: The Reality for Young Women in Zimbabwe.</h2>
    <div style="display:flex; flex-wrap:wrap; justify-content:space-around; gap:2rem; text-align:center;">
        <div style="flex:1; min-width:250px;">
            <div style="font-size:3rem; color:#7C038C; margin-bottom:1rem;">⚖️</div>
            <div style="font-size:2rem; font-weight:700; margin-bottom:0.5rem;">1 in 3</div>
            <p>women in Zimbabwe faces physical violence in her lifetime, a stark reality we are working to change through rights education and advocacy.</p>
        </div>
        <div style="flex:1; min-width:250px;">
            <div style="font-size:3rem; color:#7C038C; margin-bottom:1rem;">💰</div>
            <div style="font-size:2rem; font-weight:700; margin-bottom:0.5rem;">~67%</div>
            <p>is what a waged woman earns compared to her male counterpart, entrenching economic disparity that we tackle with feminist economics.</p>
        </div>
        <div style="flex:1; min-width:250px;">
            <div style="font-size:3rem; color:#7C038C; margin-bottom:1rem;">🏛️</div>
            <div style="font-size:2rem; font-weight:700; margin-bottom:0.5rem;">28.9%</div>
            <p>of parliamentary seats are held by women, a gap in representation we are closing by mentoring the next generation of women political leaders.</p>
        </div>
    </div>
</section>

<section aria-label="Proof of Progress. Power in Numbers." style="background:white; padding:3rem 1rem; font-family: 'Inter', sans-serif; max-width:1200px; margin:2rem auto; text-align:center;">
    <h2 style="color:#660273; font-size:2rem; margin-bottom:2rem;">Proof of Progress. Power in Numbers.</h2>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:3rem; font-weight:700; color:#7C038C;">
        <div style="flex:1; min-width:150px; font-size:2rem;">
            500+<br />
            <span style="font-weight:400; color:#222;">Women in Leadership Roles</span>
        </div>
        <div style="flex:1; min-width:150px; font-size:2rem;">
            10,000+<br />
            <span style="font-weight:400; color:#222;">Movement Members</span>
        </div>
        <div style="flex:1; min-width:150px; font-size:2rem;">
            65+<br />
            <span style="font-weight:400; color:#222;">Dariro Committees Instituted</span>
        </div>
        <div style="flex:1; min-width:150px; font-size:2rem;">
            20+<br />
            <span style="font-weight:400; color:#222;">Local Councils Transformed</span>
        </div>
    </div>
    <a href="/impact" style="display:inline-block; margin-top:2rem; background-color:#660273; color:white; padding:0.75rem 1.5rem; border-radius:4px; text-decoration:none; font-weight:600;">See Our Full Impact</a>
</section>

<section aria-label="Voices from the Movement: Her Story, Her Power" style="background:#F2F2F2; padding:3rem 1rem; font-family: 'Inter', sans-serif; max-width:1200px; margin:2rem auto;">
    <h2 style="color:#660273; font-size:2rem; margin-bottom:2rem; text-align:center;">Voices from the Movement: Her Story, Her Power.</h2>
    <div style="display:grid; grid-template-columns: repeat(auto-fit, minmax(250px, 1fr)); gap:1.5rem; margin-bottom:2rem;">
        <!-- Placeholder cards -->
        <article style="background:white; padding:1rem; border-radius:8px;">
            <h3>Her Story Title 1</h3>
            <p>Excerpt from the story or blog post goes here. This is a placeholder.</p>
            <a href="/stories/story-1" style="color:#7C038C; text-decoration:none;">Read More</a>
        </article>
        <article style="background:white; padding:1rem; border-radius:8px;">
            <h3>Her Story Title 2</h3>
            <p>Excerpt from the story or blog post goes here. This is a placeholder.</p>
            <a href="/stories/story-2" style="color:#7C038C; text-decoration:none;">Read More</a>
        </article>
        <article style="background:white; padding:1rem; border-radius:8px;">
            <h3>Her Story Title 3</h3>
            <p>Excerpt from the story or blog post goes here. This is a placeholder.</p>
            <a href="/stories/story-3" style="color:#7C038C; text-decoration:none;">Read More</a>
        </article>
    </div>
    <div style="text-align:center;">
        <a href="/stories" style="background-color:#660273; color:white; padding:0.75rem 1.5rem; border-radius:4px; text-decoration:none; font-weight:600;">Read More Stories</a>
    </div>
</section>

<section aria-label="Founder's Quote" style="background:#591C44; color:white; padding:4rem 1rem; font-family: 'Inter', sans-serif; text-align:center; max-width:1200px; margin:2rem auto; border-radius:8px;">
    <blockquote style="font-size:1.5rem; font-style:italic; max-width:800px; margin:0 auto 1rem auto;">
        “It was my utmost desire to empower women in the country to aspire to be whatever they want to be, as the male-dominated landscape was not conducive for the girl child to freely express or aspire for any higher position.”
    </blockquote>
    <cite style="font-weight:700; font-size:1rem;">- Glanis Changachirere, Founder & Director, IYWD</cite>
</section>

<section aria-label="Trusted by Our Partners" style="background:white; padding:3rem 1rem; font-family: 'Inter', sans-serif; max-width:1200px; margin:2rem auto; text-align:center;">
    <h2 style="color:#660273; font-size:2rem; margin-bottom:2rem;">Trusted by Our Partners.</h2>
    <div style="display:flex; flex-wrap:wrap; justify-content:center; gap:2rem; align-items:center;">
        <!-- Placeholder logos -->
        <img src="https://via.placeholder.com/150x80?text=Partner+1" alt="Partner 1 Logo" style="max-height:80px;"/>
        <img src="https://via.placeholder.com/150x80?text=Partner+2" alt="Partner 2 Logo" style="max-height:80px;"/>
        <img src="https://via.placeholder.com/150x80?text=Partner+3" alt="Partner 3 Logo" style="max-height:80px;"/>
        <img src="https://via.placeholder.com/150x80?text=Partner+4" alt="Partner 4 Logo" style="max-height:80px;"/>
        <img src="https://via.placeholder.com/150x80?text=Partner+5" alt="Partner 5 Logo" style="max-height:80px;"/>
    </div>
</section>

<section aria-label="Join Us. Fund the Future." style="background:#F2F2F2; padding:3rem 1rem; font-family: 'Inter', sans-serif; max-width:1200px; margin:2rem auto; text-align:center; border-radius:8px;">
    <h2 style="color:#660273; font-size:2rem; margin-bottom:1rem;">Join Us. Fund the Future.</h2>
    <p style="max-width:600px; margin:0 auto 2rem auto; color:#222; font-size:1.125rem;">
        Your support is an investment in a future where every young woman in Zimbabwe can realize her full potential. Partner with us to make this vision a reality.
    </p>
    <a href="/donate" style="background-color:#660273; color:white; padding:0.75rem 1.5rem; border-radius:4px; text-decoration:none; font-weight:600; margin-bottom:2rem; display:inline-block;">Donate Now</a>
    <form style="max-width:400px; margin:0 auto;">
        <input type="email" placeholder="Your email" style="padding:0.5rem; width:100%; border:none; border-radius:4px; margin-bottom:0.5rem;" />
        <button type="submit" style="background-color:#7C038C; color:white; border:none; padding:0.5rem 1rem; border-radius:4px; cursor:pointer; width:100%;">Subscribe</button>
    </form>
</section>

</main>

<?php get_footer(); ?>
