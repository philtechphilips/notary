<footer class="w-full bg-[#121212] md:px-20 px-5 pt-20 pb-6">
    <div class="flex flex-col md:flex-row gap-5 items-start justify-between">
        <div class="flex flex-col gap-6 md:w-96">
            <h1 class="text-white font-bold text-xl font-[Inter]">NOTARY</h1>
            <p class="text-[#AEB2B7]">Lorem ipsum dolor sit amet consectetur. Morbi urna orci integer vel. Senectus leo orci
                cras pulvinar donec viverra feugiat.</p>
        </div>

        <div class="flex flex-col gap-4 w-fit">
            <h1 class="text-[#AEB2B7]">Sitemap</h1>
           <ul class="flex flex-col gap-[6px]">
            <li class="text-[#FFFFFF] tex-lg"><a href="">Home</a></li>
            <li class="text-[#FFFFFF] tex-lg"><a href="">About Us</a></li>
            <li class="text-[#FFFFFF] tex-lg"><a href="">Services</a></li>
            <li class="text-[#FFFFFF] tex-lg"><a href="">Teams and Center</a></li>
            <li class="text-[#FFFFFF] tex-lg"><a href="">Contacts</a></li>
           </ul>
        </div>

        <div class="flex flex-col gap-4 w-fit">
            <h1 class="text-[#AEB2B7]">Policies</h1>
           <ul class="flex flex-col gap-[6px]">
            <li class="text-[#FFFFFF] tex-lg"><a href="">Terms of Service</a></li>
            <li class="text-[#FFFFFF] tex-lg"><a href="">Privacy Policy</a></li>
           </ul>
        </div>

        <div class="flex flex-col gap-4 w-fit">
            <h1 class="text-[#AEB2B7]">Socials</h1>
            <a class="text-[#FFFFFF] tex-lg flex items-center" href="">
            <p>Instagram</p>
            <img src="{{ asset("images/arrow-up-right-24.svg") }}">
            </a>

        </div>
    </div>

    <div class="mt-20">
        <p class="text-white text-sm">© {{ date("Y") }} Notary Public. All rights reserved</p>
    </div>
</footer>
