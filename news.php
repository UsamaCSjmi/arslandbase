<?php require_once('./assets/header.php')?>

<div style="margin-top:65px" class="container col">
    <div class="banner banner-about container">
        <div class="banner-img">
            <img src="<?php echo SITE_PATH?>/images/news.jpg" style="width:100%">
        </div>
        <div class="banner-cover container end-in-banner">
            <div class="row center">
                <h1 class="big-heading font-heading uppercase" style="color:#fff;">News & Events</h1>
            </div>
        </div>
    </div>
    <div class="container col pad-prop" style="margin:60px 0">
        <div class="container" style="border-top: 1px solid #00000040;padding-top: 45px;">
            <style>
                .container{
                    flex-wrap: wrap;
                }
                .news-container,
                .news-event-container {
                font-family: var(--font-cormorant-garamond-decent-stylist);
                background-color: #fff;
                box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
                border-radius: 8px;
                overflow: hidden;
                margin: 20px;
                width: 300px;
                display: flex;
                flex-direction: column;
                height: 100%;
                }

                .news-image,
                .news-event-image {
                width: 100%;
                height: 150px;
                object-fit: cover;
                }

                .news-content,
                .news-event-content {
                padding: 15px;
                flex-grow: 1;
                overflow: hidden;
                }

                .news-title,
                .news-event-title {
                margin-top: 0;
                }

                .news-text,
                .news-event-text {
                color: #555;
                margin: 20px 0;
                }

                .news-date,
                .news-event-date {
                color: #888;
                font-size: 0.8em;
                margin-top: 10px;
                }

                .news-event-badge {
                background-color: #3498db;
                color: #fff;
                padding: 5px 10px;
                border-radius: 5px;
                display: inline-block;
                margin-bottom: 10px;
                }

                .news-read-more {
                margin-top: 10px;
                text-align: center;
                }

                .news-read-more-button {
                background-color: #3498db;
                color: #fff;
                padding: 5px 10px;
                border-radius: 5px;
                cursor: pointer;
                }

                .news-additional-content {
                display: none;
                margin-top: 10px;
                }

                @media (max-width: 768px) {
                .news-container,
                .news-event-container {
                    width: 100%;
                    margin: 10px 0;
                }

                .news-image,
                .news-event-image {
                    height: 200px;
                }
                }

                @media (min-width: 769px) and (max-width: 1079px) {
                .news-container,
                .news-event-container {
                    width: 48%;
                    margin: 10px;
                }

                .news-image,
                .news-event-image {
                    height: 150px;
                }
                }
            </style>

            
            <div class="news-container">
                <img class="news-image" src="<?php echo SITE_PATH?>/images/news-events/news5.avif" alt="News Image">
                <div class="news-content">
                    <h3 class="news-title">Elan Group Appoints BENOY to Design the 1st Luxury Mall of Gurugram</h3>
                    <p class="news-text">Gurugram (Haryana) [India], February 21: In the dynamic world ...</p>
                    <p class="news-date">February 22, 2024</p>
                    <div class="news-read-more">
                        <a class="news-read-more-button" target="_blank" rel="nofollow" href="https://www.business-standard.com/amp/content/press-releases-ani/elan-group-appoints-benoy-to-design-the-1st-luxury-mall-of-gurugram-124022100510_1.html">Read More</a>
                    </div>
                </div>
            </div>

            
            <div class="news-container">
                <img class="news-image" src="<?php echo SITE_PATH?>/images/news-events/news2.avif" alt="News Image">
                <div class="news-content">
                    <h3 class="news-title">Haryana govt begins work on Global City project phase 1</h3>
                    <p class="news-text">The Haryana government has started work on Phase 1 of the Global City project in Gurugram, which will include residential and commercial spaces with modern infrastructure.</p>
                    <p class="news-date">February 03, 2024</p>
                    <div class="news-read-more">
                        <a class="news-read-more-button" target="_blank" rel="nofollow" href="https://www.hindustantimes.com/cities/gurugram-news/haryana-govt-begins-work-on-global-city-project-phase-1-101706722949854.html">Read More</a>
                    </div>
                </div>
            </div>
            <div class="news-container">
                <img class="news-image" src="<?php echo SITE_PATH?>/images/news-events/news1.webp" alt="News Image">
                <div class="news-content">
                    <h3 class="news-title">Boney Kapoor & Bhutani to build UP's Film City</h3>
                    <p class="news-text">Producer Boney Kapoor's Bayview Projects and real estate company Bhutani Group bagged the rights to develop UP government's ambitious Film City near the upcoming Noida...</p>
                    <p class="news-date">January 10, 2024</p>
                    <div class="news-read-more">
                        <a class="news-read-more-button" target="_blank" rel="nofollow" href="http://timesofindia.indiatimes.com/articleshow/107275578.cms?utm_source=contentofinterest&utm_medium=text&utm_campaign=cppst">Read More</a>
                    </div>
                </div>
            </div>
            
            <div class="news-container">
                <img class="news-image" src="<?php echo SITE_PATH?>/images/news-events/news3.avif" alt="News Image">
                <div class="news-content">
                    <h3 class="news-title">The return of the NRI homebuyer</h3>
                    <p class="news-text">Bengaluru: Last April, Snigdha Basu and her husband Deep Basu flew to Kolkata from Singapore for the house-warming ceremony of their three-bedroom apartment, which they had registered the year before...</p>
                    <p class="news-date">February 8, 2024</p>
                    <div class="news-read-more">
                        <a class="news-read-more-button" target="_blank" rel="nofollow" href="https://www.livemint.com/industry/the-return-of-the-nri-homebuyer-11707135197136.html">Read More</a>
                    </div>
                </div>
            </div>

            <div class="news-container">
                <img class="news-image" src="<?php echo SITE_PATH?>/images/news-events/news4.avif" alt="News Image">
                <div class="news-content">
                    <h3 class="news-title">15 real estate firm figure in the list of India’s most valuable companies</h3>
                    <p class="news-text">As many as 15 real estate companies, including DLF, Macrotech and Godrej Properties, figure in the list of India's most valuable companies released by Axis Bank's...</p>
                    <p class="news-date">February 13, 2024</p>
                    <div class="news-read-more">
                        <a class="news-read-more-button" target="_blank" rel="nofollow" href="https://www-hindustantimes-com.cdn.ampproject.org/c/s/www.hindustantimes.com/real-estate/15-real-estate-firms-including-dlf-figure-in-the-list-of-india-s-most-valuable-companies-101707745359566-amp.html">Read More</a>
                    </div>
                </div>
            </div>

            <!-- <div class="news-container">
                <img class="news-image" src="https://via.placeholder.com/300x150" alt="News Image">
                <div class="news-content">
                <h3 class="news-title">Breaking News</h3>
                <p class="news-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="news-date">January 10, 2024</p>
                <div class="news-read-more">
                    <button class="news-read-more-button" onclick="toggleContent('news-content-1')">Read More</button>
                    <div class="news-additional-content" id="news-content-1">
                    <p>This is additional content that becomes visible when you click "Read More".</p>
                    </div>
                </div>
                </div>
            </div> -->

            <!-- <div class="news-event-container">
                <img class="news-event-image" src="https://via.placeholder.com/300x150" alt="Event Image">
                <div class="news-event-content">
                <div class="news-event-badge">Event</div>
                <h3 class="news-event-title">Upcoming Event</h3>
                <p class="news-event-text">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                <p class="news-event-date">January 15, 2024</p>
                <div class="news-read-more">
                    <button class="news-read-more-button" onclick="toggleContent('news-content-2')">Read More</button>
                    <div class="news-additional-content" id="news-content-2">
                    <p>This is additional content that becomes visible when you click "Read More".</p>
                    </div>
                </div>
                </div>
            </div> -->
        </div>
    </div>
</div>
  <script>
    function toggleContent(contentId) {
      var additionalContent = document.getElementById(contentId);
      if (additionalContent.style.display === 'none' || additionalContent.style.display === '') {
        additionalContent.style.display = 'block';
      } else {
        additionalContent.style.display = 'none';
      }
    }
  </script>

<?php require_once('./assets/footer.php')?>