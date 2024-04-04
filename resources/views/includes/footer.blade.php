<footer class="w-full bg-[#121212] md:px-20 px-5 pt-20 pb-6 flex flex-col justify-center">
    <div class="flex flex-col md:flex-row gap-5 items-start justify-between">
        <div class="flex flex-col gap-6 md:w-96">
            <img src="{{ asset("images/notary-logo.png") }}" alt="" class="w-24">
            <p class="text-[#FFFFFF]">
                Trust us with your notarization needs, and experience unparalleled convenience and reliability.
            </p>
        </div>

        <div class="flex flex-col gap-4 w-fit">
            <h1 class="text-[#AEB2B7]">Sitemap</h1>
           <ul class="flex flex-col gap-[6px]">
            <li class="text-[#FFFFFF] hover:text-[#CD7F32] tex-lg"><a href="/">Home</a></li>
            <li class="text-[#FFFFFF] hover:text-[#CD7F32] tex-lg"><a href="/about-us">About Us</a></li>
            <li class="text-[#FFFFFF] hover:text-[#CD7F32] tex-lg"><a href="/services">Services</a></li>
            <li class="text-[#FFFFFF] hover:text-[#CD7F32] tex-lg"><a href="/contacts">Contacts</a></li>
           </ul>
        </div>

        <div class="flex flex-col gap-4 w-fit">
            <h1 class="text-[#AEB2B7] hover:text-[#CD7F32]">Policies</h1>
           <ul class="flex flex-col gap-[6px]">
            <li class="text-[#FFFFFF] hover:text-[#CD7F32] tex-lg"><a href="/privacy-policy">Privacy Policy</a></li>
           </ul>
        </div>

        <div class="flex flex-col gap-4 w-fit">
            <h1 class="text-[#AEB2B7]">Socials</h1>
            <a class="text-[#FFFFFF] hover:text-[#CD7F32] tex-lg flex items-center" href="">
            <p>Instagram</p>
            <img src="{{ asset("images/arrow-up-right-24.svg") }}">
            </a>

        </div>
    </div>

    <div class="mt-20">
        <p class="text-white text-sm">© {{ date("Y") }} Notary Public. All rights reserved</p>
    </div>
</footer>
