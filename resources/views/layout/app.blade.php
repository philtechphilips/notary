<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notary Public Oshawa - Notary And Legal Services </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod-swiper.css') }}">
    <link rel="icon" href="{{ asset('images/notary-logo.png') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-ed9e150d.css') }}">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
</head>


<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.cta')

    @include('includes.footer')




    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swipers = new Swiper('.swiper-2', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next-mod-1',
                prevEl: '.swiper-button-prev-mod-1',
            },
            breakpoints: {
                300: {
                    slidesPerView: 1,
                },
                640: {
                    slidesPerView: 3
                }
            }
        });
    </script>
    {{-- Swiper JS --}}

    {{-- Service Dropdown --}}
    <script>
        const toggleDropdown = () => {
            const dropdown = document.getElementById("service_dropdown");
            dropdown.classList.toggle("service-hidden");
        }
    </script>
    {{-- Service Dropdown --}}

    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}


    <!-- Accordion Script -->
    <script>
        const accordions = document.getElementsByClassName("accordion");

        for (let i = 0; i < accordions.length; i++) {
            accordions[i].addEventListener("click", function() {
                this.classList.toggle("active");
            });
        }
    </script>
    <!-- Accordion script Ends Here -->

    @yield('script')
</body>

</html>
