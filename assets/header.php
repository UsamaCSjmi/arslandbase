<?php require_once('./assets/head.php')?>
<header id="header" class="container <?php if ($current_page != "home") echo "header-scrolled"?>">
    <nav class="header-nav row w-100">
        <div class="header-left row">
            <div class="menu-btn" onclick='showMenu()'>
                <hr>
                <hr>
                <hr>
            </div>
            <div id="cross-btn" class="cross-btn" onclick='hideMenu()'>
                <hr id="tilted-1">
                <hr id="tilted-2">
            </div>
            <ul id="first-nav" class="nav-list">
                <li class="nav-item has-sub-nav">
                    <a class="nav-link" href="<?php echo SITE_PATH;?>/about">About Us</a>
                    <ul class="sub-nav-list">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/about">Our Story</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/about#mission">Mission</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/about#vision">Vision</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub-nav">
                    <a class="nav-link" href="#">Services</a>
                    <ul class="sub-nav-list">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/properties/services/residential">Residential</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/properties/services/commercial">Commercial</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/properties/services/sco">SCO</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/Leasing">Leasing</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub-nav">
                    <a class="nav-link" href="#">Cities</a>
                    <ul class="sub-nav-list">
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/properties/cities/gurugram">Gurugram</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH;?>/properties/cities/delhi">Delhi</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item has-sub-nav">
                    <a class="nav-link" href="#">Resources</a>
                    <ul class="sub-nav-list">
                        <li class="nav-item">
                            <a class="nav-link" href="#">Blogs</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH?>/news">News & Events</a>
                        </li>
                        <!--<li class="nav-item">-->
                        <!--    <a class="nav-link" href="<? php// echo SITE_PATH;?>/developers">Developers</a>-->
                        <!--</li>-->
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH?>/careers">Careers</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="<?php echo SITE_PATH?>/people">People</a>
                        </li>
                    </ul>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo SITE_PATH;?>/contact">Contact Us</a>
                </li>
            </ul>
        </div>
        <div class="header-center row">
            <a href="<?php echo SITE_PATH?>">
                <img class="logo" src="<?php echo SITE_PATH?>/images/logo.png" alt="ARS Landbase Logo"/>
            </a>
        </div>
        <div class="header-quick-enquiry row">
            <button onclick="showQuickEnq()" class="quick-enquiry-btn">Quick Enquiry</button>
        </div>
    </nav>
    
</header>
<div id="quick-enq" class="quick-enquiry">
    <button class="quick-enquiry-close" onclick="hideQuickEnq()">
        <svg xmlns="http://www.w3.org/2000/svg" height="25" width="25" viewBox="0 0 384 512"><path d="M376.6 84.5c11.3-13.6 9.5-33.8-4.1-45.1s-33.8-9.5-45.1 4.1L192 206 56.6 43.5C45.3 29.9 25.1 28.1 11.5 39.4S-3.9 70.9 7.4 84.5L150.3 256 7.4 427.5c-11.3 13.6-9.5 33.8 4.1 45.1s33.8 9.5 45.1-4.1L192 306 327.4 468.5c11.3 13.6 31.5 15.4 45.1 4.1s15.4-31.5 4.1-45.1L233.7 256 376.6 84.5z"/></svg>
    </button>
  <div class="overlay-container">
    <form action="mail_API/mail.php" method="post"class="inquiry-form">
        <div class="form-row">
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" id="name" name="name" class="form-input" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" id="email" name="email" class="form-input" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="phone" class="form-label">Phone :</label>
                <input type="number" id="phone" name="mobile" class="form-input" required>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <label for="message" class="form-label">Message:</label>
                <textarea id="message" name="message" rows="4" class="form-input" required></textarea>
            </div>
        </div>
        <div class="form-row">
            <div class="form-group">
                <button type="submit" name="submit_quick_enq" class="form-button">Submit</button>
            </div>
        </div>
    </form>
  </div>
</div>