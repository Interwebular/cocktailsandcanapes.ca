@extends('website.layout')

@section('body-classes')
dark
@endsection


@section('meta-description') Vancouver Catering Services @endsection
@section('page-title') Vancouver Catering Company | Cocktails & Canapes @endsection

@section('content')

 <!-- <div class="bgimage" style="background-image:url({{ asset('img/services.jpg') }}); background-position: left center; display:block;"></div> -->
 <div class="bgimage" style="background-image:url({{ asset('img/about.jpg') }}); background-position: left center; display:block;"></div>

    <section class="section-panel section-fluid-height" style="padding: 220px 0;">
        <!-- <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button> -->
        <!-- <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button> -->
        <div class="content-center">
            <h1 class="wedding-title">
                About
            </h1>

            <!-- <div class="spacer" style="background: #fff;"></div> -->
            <div class="clients">
                <div class="client" style="color: #fff;">
                    <div style="text-shadow: 2px 2px 5px rgba(0, 0, 0, 0.8);" class="quote quote__justified">
                       
                      <p>Cocktails & Canapes is Vancouver’s premier catering and event planning company. We specialize in creating distinct culinary experiences, as well as conceptualizing, marketing, and producing memorable events of all sizes. Through our catering services, we aim to provide our clients with creative, world-class cuisine delivered with high quality, professional service.</p>
                       
                      <p>Launched in 2013, Cocktails & Canapes has firmly cemented its reputation in Western Canada as a trendsetter and leader in the catering industry. Our unique brand of customized hospitality experiences and catering services are truly exceptional, immersive, and highly innovative.</p>
                       
                      <p>We’re proud to exhibit an unwavering track record of success in the catering and events industry through contracts with organizations such as Vancouver Pride Society, Diner En Blanc, and TEDx Vancouver.</p>
                       
                      <p>Our team has over 20 years experience working in the food and beverage industry, not to mention extensive experience in catering and event planning, business, and marketing. </p>
                       
                      <p>Cocktails & Canapes possess the skills, relationships and expertise needed to make your event unforgettable. From lush garden parties to sidewalk soirees; all-night corporate gatherings to music festivals; intimate romantic weddings to a party for thousands... Cocktails & Canapes is Vancouver’s must-hire catering and event planning company.</p>

                    </div>
                </div>
            </div>
            <div class="wedding-button-group">
                <a href="#team">Team</a>
                <a href="#clients">Clients</a>
                <a href="#testimonials">Testimonials</a>
                <!-- <a href="{{ route('weddings.index') }}">Team</a> -->
                <!-- <a href="{{ route('contact.index') }}">Testimonials</a> -->
                <!-- <a href="{{ route('events') }}">clients</a> -->
            </div>
        </div>
    </section>

    <section id="team" class="section-panel section-dark section-fluid-height padding">
      <div class="content-center">
        <h1>Our Team</h1>
      </div>
      <div class="team-flex">
        <?php $first = true; ?>
        <div class="flex-left" style="margin-right: 30px;">
          <div data-name="brett" class="team-name <?php echo $first ? 'isActive' : ''?>">Brett Turner</div>
          <div data-name="olivia" class="team-name">Olivia Fobert</div>
          <div data-name="mel" class="team-name">Mel Yeaman</div>
          <div data-name="adam" class="team-name">Adam Meade</div>
          <div data-name="bianca" class="team-name">Bianca Gabriele</div>
        </div>
        <div class="flex-right">
          <div id="brett" class="team-descriptions show">
            <h3>Brett Turner - Owner and Culinary Director</h3>
            <div class="team-descriptions__info">
              <p class="default">A graduate of the Dubrulle Culinary Institute</a>, Brett started off his career working at The Beach House before quickly making his way up the culinary ladder and becoming the first Executive Chef for Brown’s Social Group.</p>
              <p class="default">Brett then accepted the position of Executive Chef of Blueprint Hospitality Group, a role in which he oversaw the building, operations, and culinary vision of some of Vancouver’s hottest restaurants including Charles Bar, Bismarck, and The Colony. Over the next fifteen years, Brett’s experience and drive took him from the kitchen to the boardroom.</p>
              <p class="default">Launching Cocktails and Canapes in 2013, Brett strives to work with local purveyors of produce and has formed strong relationships with suppliers. This allows Cocktails and Canapes to continually build a unique menu of offerings around locally and sustainably sourced foods. Brett’s penchant for attention to detail, event operations experience, sense of culinary creativity, and his passion for food and wine make him a true asset as Owner and Culinary Director of Cocktails & Canapes.</p>
            </div> 
          </div>
          <div id="olivia" class="team-descriptions">
            <h3>Oliva Fobert - Partner, Director of Sales</h3>
            <div class="team-descriptions__info">
              <p class="default">Olivia graduated with a Masters in International Business from the University of Hertfordshire in London. With a focus on Sales and Marketing, Olivia knew that she needed to find a position at a company that she felt passionately about in a bustling industry – and Cocktails & Canapes was just that.</p>
              <p class="default">With experience in sales, digital marketing and content creation, augmented by time spent in the non-profit sector, Olivia has a balanced perspective on both the private sector and giving back to the community.</p>
              <p class="default">Drawn to British Columbia over ten years ago, she can't imagine not being close to the mountains, where she spends quality time hiking with her rescue dog Ozzy, snowboarding and exploring. She has a passion for travel and discovering unique, local food offerings.</p>
            </div> 
          </div>
          <div id="mel" class="team-descriptions">
            <h3>Mel Yeaman - Director of Operations</h3>
            <div class="team-descriptions__info">
              <p class="default">Mel grew up in a small town on Vancouver Island but always knew she would venture to Vancouver after graduation for a world of opportunities. After studying at Douglas College and Simon Fraser University, Mel obtained her Arts & Humanities Degree while working full time in the hospitality industry.</p>
              <p class="default">Mel worked at Earls Kitchen + Bar for 10 years prior to joining the Cocktails & Canapes team and had the opportunity to work in upper management as the Night Manager. She developed a team of people who succeeded in a high volume restaurant while ensuring the happiness of all customers who walked through the door. Creating relationships with those individuals is something Mel excels at, as she understands that this is what fuels the success of the industry and creates community.</p>
              <p class="default">Mel is always ready for a new adventure - whether it be trying out a new recipe in the kitchen, exploring beautiful British Columbia or checking out a funky, new restaurant. She has an attention to even the smallest of details and always loves a good DIY project. Mel loves being part of an industry that is constantly evolving and the many memorable connections she has made along the way.</p>
            </div> 
          </div>
          <div id="adam" class="team-descriptions">
            <h3>Adam Meade - Executive Chef</h3>
            <div class="team-descriptions__info">
              <p class="default">Growing up in Ontario, Adam had big dreams and an abundance of curiosity. He recalls spending many summer days cooking all of his family’s old Italian recipes with his mother and grandmother, an experience which lead him to discover his passion for food.</p>
              <p class="default">Adam relocated to Toronto and enrolled in the Chef Management Program at George Brown College. From there he began work at Toronto’s Canoe, North 44, and Centro. Adam found that being a chef was a beautiful, creative, ever evolving, graceful, complicated industry and it was exactly what he was looking for. His goal was simple: to learn and absorb as much as he could.</p>
              <p class="default">Now, at the age of 31, Adam is lucky enough to find himself surrounded by a lot of like-minded individuals, where he has taken up the role of Executive Chef at Cocktails and Canapes Catering and Events.</p>
            </div> 
          </div>
          <div id="bianca" class="team-descriptions">
            <h3>Bianca Gabriele - Event Manager</h3>
            <div class="team-descriptions__info">
              <p class="default">After six years as a Legal Administrative Assistant, Bianca realized that she was not following her dreams. She quit her job and bought a one-way ticket to Australia to pursue an internship in Events, Sales and Marketing.</p>
              <p class="default">Throughout her year in Australia Bianca began her career and worked on events such as The Hurley Australian Open of Surfing and The Manly Jazz Festival. Not only does Bianca enjoy planning and attending events, she also has a passion for innovative food and cooking.</p>
              <p class="default">At Cocktails & Canapes, you can find Bianca in a chef jacket prepping in the kitchen, or on-site, finishing up the final touches on the plate. From a four person wedding tasting, to managing over 50 staff at a 6000 person event, Bianca is ready to deliver a one of a kind experience with a rock-star team to back her up.</p>
            </div> 
          </div>
        </div>
      </div>

      <div id="clients">
        <div class="content-center">
          <h1>Our Clients</h1>
        </div>
        <div style="display: flex; justify-content: center; flex-wrap: wrap;">
          <a target="_blank" href="http://www.openroadautogroup.com
" style="background-image: url({{ asset('img/auto-group.png') }}); display: block;" class="client-card">
          </a>
          <a target="_blank" href="https://www.gfs.ca/en" style="background-image: url({{ asset('img/gordon.jpg') }}); display:block;" class="client-card">
          </a>
          <a target="_blank" href="https://vancouver.dinerenblanc.com" style="background-image: url({{ asset('img/diner-blanc.jpg') }}); display:block;" class="client-card">
          </a>
          <a target="_blank" href="http://www.thesocialconcierge.com" style="background-image: url({{ asset('img/concierge.png') }}); display:block;" class="client-card">
          </a>
          <a target="_blank" href="http://deightoncup.com" style="background-size: 60%; background-image: url({{ asset('img/deighton-cup.jpg') }}); display:block;" class="client-card">
          </a>
        </div>
      </div>
    </section>


    <!-- <section id="clients" class="section-panel "></section> -->

    <section id="testimonials" class="section-panel section-white section-fluid-height padding">
        <button class="section-button section-button-left client-left hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-left"></i></button>
        <button class="section-button section-button-right client-right hidden-xs hidden-sm"><i class="fa fa-arrow-circle-o-right"></i></button>
        <div class="content-center">

            <div  class="clients">
                <div class="client">
                    <div class="quote quote__justified">
                        “Cocktails and Canapes never disappoints. We have used them for appies & 
                        drinks for large corporate events as well as workplace luncheons. 
                        People always remark on the creative pairings and the high-quality food. Would recommend 100%!”
                    </div>
                    <blockquote>
                        Breanna Vander Helm
                    </blockquote>
                </div>

                <div class="client">
                    <div class="quote quote__justified">
                        “We hired Cocktails and Canapes to cater our wedding and they did a fantastic job - 
                        from canapes during the cocktail hour, to an amazing dinner and late night mac-n-cheese snack 
                        at midnight. They came up with creative menu options for our event and executed like professionals. 
                        Everything came in on time and on budget. Everybody was happy and there was no stress in dealing with 
                        them. Would recommend these guys if you are looking for a wedding caterer.”
                    </div>
                    <blockquote>
                        Laurent Munier
                    </blockquote>
                </div>

                <div class="client">
                    <div class="quote quote__justified">
                        “Love the team at Cocktails & Canapes! They've catered a large number of
                        our events over the past 2 years, often creating custom menus designed specifically 
                        for our guests and event theme. Whenever I need great food, a professional service 
                        team that I can depend on, and fun ideas, I look to them for help. Would definitely 
                        recommend them for your next event/party!”
                    </div>
                    <blockquote>
                        Melissa Mak
                    </blockquote>
                </div>
            </div>
            
        </div>
    </section>
   <!--  <section id="clients" class="section-panel section-dark section-fluid-height padding">
      <div class='content-center'>Clients Section blah blah</div>
    </section> -->
    <style>
      .client-card {
        background-repeat: no-repeat;
        /*background-size: contain; */
        background-size: 95%;
        margin: 10px 5px 0;
        background-repeat: no-repeat;
        background-position: center;
        height: 150px;
        background-color: white;
        width: 150px;
      }
      #clients {
        margin-top: 60px;
      }
      .team-flex {
        display: flex;
        max-width: 900px; 
        margin-left: auto; 
        margin-right: auto;
      }
      .team-name {
        border:1px solid #fff;
        text-align: center;
        padding: 10px;
        margin: 10px;
        cursor: pointer;
        font-family: "museo-sans", "Helvetica Neue", Helvetica, Arial, sans-serif;
        text-transform: uppercase;
      }
      .team-name:hover { 
        background-color: white;
        color: black;
      }
      .team-name.isActive {
        background-color: white;
        color: black;
      }
      .flex-left {
        flex-shrink: 0;
      }
      .flex-right {
        margin-right: 20px;
      }
      .team-descriptions {
        display: none;
      }
      .show {
        display: block;
      }

      @media (max-width: 650px) {
        .team-flex {
          flex-direction: column;
        }
        .flex-left {
          margin-right: 0;
          margin-bottom: 20px;
        }
        .team-name {
          display: inline-flex;
          width: 45%;
          margin: 5px;
          justify-content: center;
        }
      }
      @media (max-width: 325px) {
        .team-name {
          width: 40%;
        }
      }
    </style>
@endsection

@section('js')
    <script>

        $('a[href*=\\#]:not([href=\\#])').click(function () {
            if (location.pathname.replace(/^\//, '') == this.pathname.replace(/^\//, '') && location.hostname == this.hostname) {
                var target = $(this.hash);
                target = target.length ? target : $('[name=' + this.hash.slice(1) + ']');
                if (target.length) {
                    $('html,body').animate({
                        scrollTop: target.offset().top
                    }, 1000);
                    return false;
                }
            }
        });

    </script>


@endsection
