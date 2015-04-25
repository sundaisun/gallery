<?php $active="contact"; include("parts/header.php"); ?>
   </header>
    <!--HEADER-->
<div id="contact-wrapper">
<section>
       <div class="row intro">
        <p>We’ve been up, down, over and around for our clients. Wherever the job takes us, we’re happy to go, even if it’s overseas. Our brick and mortars may be stateside but our presence is worldwide.</p>
        </div>
        <div class="row offices">
            <div class="small-12 medium-4 columns wow fadeIn">
            <div class="weather" id="weather-la"></div>
            <h4>Los Angeles</h4>
            <hr>
            <p>8687 Melrose Ave. Suite G540<br>West Hollywood, CA 90069<br>T 310.289.5500 • F 310.289.5501</p></div>
            <div class="small-12 medium-4 columns wow fadeIn" data-wow-delay="0.2s">
            <div class="weather" id="weather-sf"></div>
            <h4>San Francisco</h4>
            <hr>
            <p>33 New Montgomery St. Suite 990<br>San Francisco, CA 94105<br>T 415.905.0360 • F 415.905.0376</p></div>
            <div class="small-12 medium-4 columns wow fadeIn" data-wow-delay="0.4s">
            <div class="weather" id="weather-ny"></div>
            <h4>New York</h4>
            <hr>
            <p>100 W 33rd Street, 5th Floor<br>New York, NY 10001<br>T 212.494.8676 • F 646.865.8987</p></div>
        </div>
        <div class="clearfix"></div>
        <div id="contact-map">
            <a href="#" data-reveal-id="footprint">
            <img src="images/map.jpg" alt="map">
            </a>
<!--            <iframe src="https://mapsengine.google.com/map/embed?mid=zCQdS7kxy0Fs.kpRJpU2qsn78" width="640px" height="507px"></iframe>-->
        </div>
        <!--reveal modal-->
        <div id="footprint" class="reveal-modal large" data-reveal>
            <ul class="photos" data-orbit>
                <li class="active">
                    <img src="images/map/ofyq-1.jpg" alt="Our Food Your Questions">
                    <div class="orbit-caption">
                        Fresno, CA • McDonald's • Our Food, Your Questions.
                    </div>
                </li>
                <li>
                    <img src="images/map/ofyq-2.jpg" alt="Our Food Your Questions">
                    <div class="orbit-caption">
                        Fresno, CA • McDonald's • Our Food, Your Questions.
                    </div>
                </li>
                <li>
                    <img src="images/map/ofyq-3.jpg" alt="Our Food Your Questions">
                    <div class="orbit-caption">
                        Caldwell, ID • McDonald's • Our Food, Your Questions.
                    </div>
                </li>
                <li>
                    <img src="images/map/ofyq-4.jpg" alt="Our Food Your Questions">
                    <div class="orbit-caption">
                        Caldwell, ID • McDonald's • Our Food, Your Questions.
                    </div>
                </li>
                <li>
                    <img src="images/map/walmart-cn-1.jpg" alt="Walmart China">
                    <div class="orbit-caption">
                        Shanghai, China • Walmart • Anthemic (China)
                    </div>
                </li>
                 <li>
                    <img src="images/map/walmart-cn-2.jpg" alt="Walmart China">
                    <div class="orbit-caption">
                        Shanghai, China • Walmart • Anthemic (China)
                    </div>
                </li>               
            </ul>       
            <a class="close-reveal-modal"><i class="fa fa-times-circle-o"></i></a>
        </div>
        <!--reveal modal ends-->

</section>
</div>


<?php include("parts/footer.php");  ?>
