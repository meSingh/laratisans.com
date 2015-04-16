@extends('layouts.master')


@section('content')

    
   <!-- Banner -->
            <section id="banner">
                <div id="banner-bg"></div>
                <div class="banner-inner" style="z-index:99; position:relative;">
                <h2>Laratisans</h2>
                <p>Simple Resources, Tools & Help for Laravel Artisans.</p>
                <ul class="actions">
                    <li><a href="#cta" class="button special" data-scroll>Sign Up</a></li>
                    <li><a data-scroll href="#learnMore" class="button">Learn More</a></li>
                </ul>
                </div>
            </section>

        <!-- Main -->
            <section id="main" class="container">

                <section class="box special">
                    <header class="major">
                        <h2>Introducing the ultimate resource center, 
                        <br />
                        tools kit & help desk for laravel artisans.</h2>
                        <p>We are the helpers of web builders and want to provide them with open knowledge, resources, tools that will help them build better products.</p>
                    </header>
                </section>

                <section class="box special">
                    <header class="major">
                        <h2>Join us on slack to help us in helping you!</h2>
                        <p>You can join us on slack today to get help or give help to others.</p>
                    </header>
                    <span class="image featured"><img src="assets/images/slack.jpg" alt="" /></span>
                </section>

                <section id="learnMore" class="box special features">
                    <div class="features-row">
                        <section>
                            <span class="icon major fa-server accent2"></span>
                            <h3>Resources</h3>
                            <p>The best resources that you can find in Laravel Community hunted down & curated in one place to help you work faster & more efficiently.</p>
                        </section>
                        <section>
                            <span class="icon major fa-wrench accent3"></span>
                            <h3>Tools</h3>
                            <p>Tools to help you do common tasks with a button click. Now you don't have to do all those recurring tasks again and again for each project.</p>
                        </section>
                    </div>
                    <div class="features-row">
                        <section>
                            <span class="icon major fa-life-ring accent4"></span>
                            <h3>HelpDesk</h3>
                            <p>We have a very great community of laravel developers that feel obliged to help the community. You can ask questions, get feedback or just network with them on our slack group.</p>
                        </section>
                        <section>
                            <span class="icon major fa-question accent5"></span>
                            <h3>Coming Soon</h3>
                            <p>We have a lot of things planned to help you do what you do best, but we also have a very limited free time and need your help to help you back.</p>
                        </section>
                    </div>
                </section>

            </section>

        <!-- CTA -->
            <section id="cta">

                <h2>Sign up to join us on slack</h2>
                <p>We promise that you will love it from day one if you don't just tell us to remove your account.</p>

                <form action="http://websterfolks.us4.list-manage.com/subscribe/post-json?u=d20ef0f2d44b0fed0db91c6c2&amp;id=4505a41e46" method="post">
                    <div class="row uniform 50%">
                        <div class="4u 12u(mobilep)">
                            <input type="text" name="FNAME" id="name" placeholder="Your Name" />
                        </div>
                        <div class="6u 12u(mobilep)">
                            <input type="email" name="EMAIL" id="email" placeholder="Email Address" />
                        </div>
                        <input type="hidden" name="b_d20ef0f2d44b0fed0db91c6c2_4505a41e46" tabindex="-1" value="">
                        <div class="2u 12u(mobilep)">
                            <input type="submit" value="Sign Up" class="fit" />
                        </div>
                    </div>
                </form>

                <br>
                <p id="mailChimpMsg" style="display:none;"></p>


            </section>


@stop



  




 





