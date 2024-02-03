<?php require_once('./assets/header.php')?>
<div style="margin-top:65px" class="container col">
    <div class="container col pad-prop" style="margin:60px 0">
        <h2 class="big-heading mbt-50 font-heading">News & Events</h2>
        <div class="container" style="border-top: 1px solid #00000040;padding-top: 45px;">
            <style>
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