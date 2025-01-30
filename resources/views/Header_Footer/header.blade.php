<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Header</title>
    <style>
        body {
            margin: 0;
            font-family: Arial, sans-serif;
            background-color: #111;
            color: white;
        }
        nav {
            background: url('gold-texture.jpg') no-repeat center center;
            background-size: cover;
            padding: 10px 0;
            display: flex;
            justify-content: center;
        }
        .nav-container {
            display: flex;
            background-color: #d4af37;
            padding: 10px;
            border-radius: 5px;
        }
        .nav-container a {
            color: black;
            text-decoration: none;
            padding: 10px 15px;
            font-weight: bold;
            transition: background-color 0.3s, color 0.3s;
        }
        .nav-container a:hover {
            background-color: #b8860b;
            border-radius: 5px;
            color: white;
        }
        nav ul {
            list-style-type: none;
            padding: 0;
            margin: 0;
            display: flex;
        }
        nav ul li {
            position: relative;
            display: inline-block;
        }
        nav ul li ul {
            display: none;
            position: absolute;
            top: 100%;
            left: 0;
            list-style-type: none;
            padding: 0;
            margin: 0;
            background-color: #d4af37;
            border-radius: 5px;
            overflow: hidden;
        }
        nav ul li ul li {
            display: block;
        }
        nav ul li ul li a {
            padding: 10px 15px;
            display: block;
        }
        nav ul li ul li a:hover {
            background-color: #b8860b;
            color: white;
        }
    </style>
</head>
<body>
    <nav>
        <div class="nav-container">
            <ul>
                <li><a href="/">Home</a></li>
                <li><a href="/rules/home">Rules</a></li>
                <li>
                    <a href="#">Leaderboard</a>
                    <ul>
                        <li><a href="/leaderboards/skyblock">Skyblock</a></li>
                        <li><a href="/leaderboards/survival">Survival (soon)</a></li>
                    </ul>
                </li>
                <li>
                    <a href="#">Forum</a>
                    <ul>
                        <li><a href="/forums/forum">Forum Page</a></li>
                        <li><a href="/create">Create Forum</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </nav>

    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var dropdowns = document.querySelectorAll('nav ul li a');
            dropdowns.forEach(function(dropdown) {
                dropdown.addEventListener('click', function(event) {
                    var submenu = this.nextElementSibling;
                    if (submenu && submenu.tagName === 'UL') {
                        event.preventDefault();
                        var openSubmenus = document.querySelectorAll('nav ul li ul');
                        openSubmenus.forEach(function(openSubmenu) {
                            if (openSubmenu !== submenu) {
                                openSubmenu.style.display = 'none';
                            }
                        });
                        submenu.style.display = submenu.style.display === 'block' ? 'none' : 'block';
                    }
                });
            });
        });
    </script>
</body>
</html>