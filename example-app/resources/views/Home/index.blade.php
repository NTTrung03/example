<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="css/style.css" rel="stylesheet">
</head>

<body>
    <div class="flex-wrapper">
    @include('Home.components.header')

    @yield('body')

    @include('Home.components.footer')
    </div>
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script src="/js/script.js"></script>
    <script>
        document.addEventListener("DOMContentLoaded", function () {
            const links = {
                "/": "home-link",
                "/portfolio": "portfolio-link",
                "/info": "info-link",
                "/team": "team-link",
                "/mission": "mission-link",
                "/blog": "blog-link",
                "/contact": "contact-link"
            };
    
            const currentPath = window.location.pathname;
            if (links[currentPath]) {
                document.getElementById(links[currentPath]).classList.add("active");
            }
        });
    </script>
    
</body>
</html>
