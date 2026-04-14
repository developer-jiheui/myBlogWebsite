<aside class="sidebar" data-sidebar>

    <div class="sidebar-info">

        <figure class="avatar-box">
            <img src="{{ asset('images/my-avatar.png') }}" alt="Zia Lee" width="80">
        </figure>

        <div class="info-content">
            <h1 class="name" title="my-name">Zia Lee</h1>
            <p class="title">Full Stack developer</p>
        </div>

        <button class="info_more-btn" data-sidebar-btn>
            <span>Show Contacts</span>
            <ion-icon name="chevron-down"></ion-icon>
        </button>

    </div>

    <div class="sidebar-info_more">

        <div class="separator"></div>

        <ul class="contacts-list">

            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="mail-outline"></ion-icon>
                </div>

                <div class="contact-info">
                    <p class="contact-title">Email</p>
                    <a href="mailto:developer.jiheuilee@gmail.com" class="contact-link">
                        developer.jiheuilee@gmail.com
                    </a>
                </div>
            </li>

            <li class="contact-item">
                <div class="icon-box">
                    <ion-icon name="location-outline"></ion-icon>
                </div>

                <div class="contact-info">
                    <p class="contact-title">Location</p>
                    <address>Vancouver, BC, Canada</address>
                </div>
            </li>

        </ul>

        <div class="separator"></div>

        <ul class="social-list">
            <li class="social-item">
                <a href="https://www.linkedin.com/in/jiheuilee/" class="social-link" target="_blank">
                    <ion-icon name="logo-linkedin"></ion-icon>
                </a>
            </li>

            <li class="social-item">
                <a href="https://github.com/developer-jiheui" class="social-link" target="_blank">
                    <ion-icon name="logo-github"></ion-icon>
                </a>
            </li>

            <li class="social-item">
                <a href="#" class="social-link">
                    <ion-icon name="logo-instagram"></ion-icon>
                </a>
            </li>
        </ul>

    </div>

</aside>
