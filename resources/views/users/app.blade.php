<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>@yield('title')</title>
    <meta content="" name="description">
    <meta content="" name="keywords">

    <!-- Favicons -->
    <link href="{{ asset('css/admin/asset/img/favicon.png')}}" rel="icon">

    <link rel="stylesheet" href="{{ asset('css/users/app.css')}}">

    @yield('link-css')

    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">

</head>
<body>
    @include('users.layouts.header')

    <main id="main" class="main">

      @yield('content')

    </main><!-- End #main -->

    @include('users.layouts.footer')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.3/dist/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script>
        function updateClock() {
            const now = new Date();

            const days = ['Minggu', 'Senin', 'Selasa', 'Rabu', 'Kamis', 'Jumat', 'Sabtu'];
            const months = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];

            const dayName = days[now.getDay()];
            const day = String(now.getDate()).padStart(2, '0');
            const month = months[now.getMonth()];
            const year = now.getFullYear();

            const hours = String(now.getHours()).padStart(2, '0');
            const minutes = String(now.getMinutes()).padStart(2, '0');
            const seconds = String(now.getSeconds()).padStart(2, '0');

            const currentTime = `${hours}:${minutes}:${seconds}`;
            const currentDate = `${dayName}, ${day} ${month} ${year}`;

            document.getElementById('clock').textContent = currentTime;
            document.getElementById('date').textContent = currentDate;
        }

        setInterval(updateClock, 1000);
        updateClock();
    </script>
    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const header = document.getElementById('header-responsive');
            const toggleButton = document.getElementById('toggleButton');

            toggleButton.addEventListener('click', function() {
                header.classList.toggle('show');
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const hoverBtn = document.getElementById('hoverBtnProfil');
            const card = document.getElementById('card-hover-profil');

            hoverBtn.addEventListener('mouseenter', function() {
                card.style.display = 'block';
            });

            hoverBtn.addEventListener('mouseleave', function() {
                setTimeout(function() {
                    if (!card.matches(':hover')) {
                        card.style.display = 'none';
                    }
                }, 300);
            });

            card.addEventListener('mouseleave', function() {
                card.style.display = 'none';
            });

            card.addEventListener('mouseenter', function() {
                card.style.display = 'block';
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const hoverBtn = document.getElementById('hoverBtnInfo');
            const card = document.getElementById('card-hover-info');

            hoverBtn.addEventListener('mouseenter', function() {
                card.style.display = 'block';
            });

            hoverBtn.addEventListener('mouseleave', function() {
                setTimeout(function() {
                    if (!card.matches(':hover')) {
                        card.style.display = 'none';
                    }
                }, 300);
            });

            card.addEventListener('mouseleave', function() {
                card.style.display = 'none';
            });

            card.addEventListener('mouseenter', function() {
                card.style.display = 'block';
            });
        });

        document.addEventListener("DOMContentLoaded", function() {
            const hoverBtn = document.getElementById('hoverBtnGallery');
            const card = document.getElementById('card-hover-gallery');

            hoverBtn.addEventListener('mouseenter', function() {
                card.style.display = 'block';
            });

            hoverBtn.addEventListener('mouseleave', function() {
                setTimeout(function() {
                    if (!card.matches(':hover')) {
                        card.style.display = 'none';
                    }
                }, 300);
            });

            card.addEventListener('mouseleave', function() {
                card.style.display = 'none';
            });

            card.addEventListener('mouseenter', function() {
                card.style.display = 'block';
            });
        });
    </script>
</body>
</html>
