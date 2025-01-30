<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://unicons.iconscout.com/release-pro/v4.0.0/css/solid.css">

    <title>Footer</title>
    <style>
        footer {
            background-color: #222;
            color: white;
            padding: 20px;
            display: flex;
            justify-content: space-around;
            flex-wrap: wrap;
        }
        .footer-section {
            flex: 1;
            min-width: 250px;
            margin: 10px;
        }
        .footer-section h3 {
            border-bottom: 2px solid #555;
            padding-bottom: 5px;
        }
        .footer-links a, .social-icons a {
            display: block;
            color: #bbb;
            text-decoration: none;
            margin: 5px 0;
        }
        .footer-links a:hover, .social-icons a:hover {
            color: white;
            text-decoration: underline;
        }
        .social-icons a {
            display: inline-block;
            margin-right: 10px;
        }
        .copyright {
            text-align: center;
            padding: 10px;
            background-color: #111;
            color: #bbb;
        }

    </style>
</head>
<body>
    <footer>

        <div class="footer-section">
            <h3>About Us</h3>
            <p>Lorem ipsum dolor sit amet consectetur, adipisicing elit. Ipsum totam officia consequatur laborum sed dicta odit, incidunt voluptatem, cum excepturi quasi minus aliquam. Cum doloribus deleniti optio. Animi, aspernatur iusto?</p>
        </div>

        <div class="footer-section footer-links">
            <h3>Useful Links</h3>
            <a href="/">Home</a>
            <a href="rules/home">Rules</a>
            <a href="/support">Support</a>
        </div>

        <div class="footer-section">
            <h3>Socials</h3>
            <div class="social-icons">
                <a href="https://www.tiktok.com/@fadeblocksmc" target="_blank">
                    <img src="{{ asset('images/socials/tiktok.png') }}" alt="TikTok" style="width: 50px; height: 50px; vertical-align: middle;">
                </a>
                <a href="https://x.com/fadeblocksmc" target="_blank">
                    <img src="{{ asset('images/socials/twitter.png') }}" alt="Twitter" style="width: 45px; height: 45px; vertical-align: middle;">
                    
                </a>
                <a href="https://discord.gg/BcFF3fKPTA" target="_blank">
                    <img src="{{ asset('images/socials/discord.png') }}" alt="Discord" style="width: 45px; height: 45px; vertical-align: middle;">
                    
                </a>
                <a href="https://www.instagram.com/fadeblocksmc/" target="_blank">
                    <img src="{{ asset('images/socials/instagram.png') }}" alt="Instagram" style="width: 45px; height: 45px; vertical-align: middle;">
                    
                </a>
            </div>
        </div>

        <div class="footer-section">
            <h3>Our Store</h3>
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Consequatur labore deleniti tempore. Est fugit numquam ut quam culpa. Suscipit soluta quae natus perspiciatis unde sapiente nesciunt perferendis porro temporibus dolores?</p>
        </div>

    </footer>
    <div class="copyright">&copy; 2025 FadeBlocksMC. All Rights Reserved.</div>
</body>
</html>