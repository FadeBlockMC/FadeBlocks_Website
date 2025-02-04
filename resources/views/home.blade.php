<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Stacked Background Images</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            font-family: Arial, sans-serif;
            overflow-y: auto;
            height: 100vh;
        }
        .section {
            position: relative;
            width: 100%;
            height: 100vh;
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
            display: flex;
            align-items: center;
            justify-content: center;
            color: white;
            font-size: 2rem;
            font-weight: bold;
            text-shadow: 2px 2px 10px rgba(0, 0, 0, 0.7);
            scroll-snap-align: start;
        }
        .section-intro {
            background-image: url('images/background/background1.png');
            color: white;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: center;
            height: 100vh;
            padding-left: 50px;
            text-align: left;
            scroll-snap-align: start;
        }
        .section-intro img {
            max-width: 900px;
            margin-bottom: 20px;
        }
        .section:nth-child(2) {
            background-image: url('images/background/background2.png');
        }
        .section:nth-child(3) {
            background-image: url('images/background/background3.png');
        }
        .section:nth-child(4) {
            background-image: url('images/background/background4.png');
        }
        .section:nth-child(5) {
            background-image: url('images/background/background5.png');
        }
        html {
            scroll-snap-type: y mandatory;
        }
    </style>
</head>
<body>
    <div class="section-intro">
        <img src="images/background/fadeblockslogo.png" alt="Fade Blocks Logo">
        <h1>Welcome to Fade Blocks</h1>
    </div>
    <div class="section">Survival</div>
    <div class="section">Prison</div>
    <div class="section"></div>
    <div class="section">skyblock</div>

    <script>
        document.documentElement.style.scrollBehavior = 'smooth';
        window.addEventListener('wheel', (event) => {
            if (event.deltaY > 0) {
                setTimeout(() => {
                    window.scrollBy(0, window.innerHeight);
                }, 1); // Adjust the delay as needed
            } else {
                setTimeout(() => {
                    window.scrollBy(0, -window.innerHeight);
                }, 1); // Adjust the delay as needed
            }
            event.preventDefault();
        }, { passive: false });
    </script>
</body>
</html>