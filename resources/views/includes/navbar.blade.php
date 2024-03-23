<nav class="flex items-center justify-between md:px-20 px-5 md:py-9 py-4">
    <h1 class="uppercase font-bold text-xl font-[Inter]">Notary</h1>

    <div class="md:flex items-center gap-1 hidden">
        <a href="/services" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">Services</a>
        <i class="ri-arrow-down-s-line cursor-pointer text-2xl" onclick="toggleDropdown()"></i>
    </div>

    <ul class="hidden md:flex items-center gap-6">
        <li><a href="/about-us" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">About Us</a></li>
        <li><a href="/teams" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">Team and Career</a></li>
        <li><a href="/contacts" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">Contacts</a></li>
    </ul>

    <a href="tel:+14169538776" class="text-lg text-[#CD7F32] font-medium hidden md:flex">+1 416-953-8776</a>
    <i class="ri-menu-2-line text-[34px] flex md:hidden menuButton"></i>
</nav>
<nav id="menu"
class="w-full p-5 md:hidden bg-gray-100 h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform z-[1000]">
<div class="flex items-center justify-between mb-20">
    <h1 class="uppercase font-bold text-xl font-[Inter]">Notary</h1>

    <div class="w-10 h-10 menuButton flex items-center justify-center">
        <i class="ri-close-line text-3xl"></i>
    </div>
</div>

<ul class="flex flex-col gap-10 items-center list">
    <li>
        <a href="/" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>
    </li>

    <li>
        <a href="/about-us" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Services</a>
    </li>

    <li>
        <a href="/services" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Team and Career</a>

    </li>

    <li>
        <a href="/projects" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Contacts</a>

    </li>

    <li class="flex gap-2 items-center bg-[#CD7F32] rounded-lg px-6 py-3">
        <a href="tel:+14169538776">
            <p class="text-[#ffffff] font-medium md:text-xl">+1 416-953-8776</p>
        </a>
    </li>
</ul>

</nav>

<div id="service_dropdown"
    class="w-full gap-20 service-hidden bg-white px-12 py-10 hidden md:flex justify-center items-start absolute top-[105px] z-[1000]">
    <div class="w-[284px]">
        <h1 class="text-[#121212] text-4xl font-[Inter] font-medium">Services</h1>
        <p class="mt-2 text-[#5F666D]">Lorem ipsum dolor sit amet consectetur. Morbi urna orci integer vel. Senectus leo
            orci cras pulvinar donec viverra feugiat.</p>
    </div>

    <div class="w-[608px]">
        <h1 class="text-[#5F666D]">Notary Public</h1>
        <div class="flex gap-12">
            <ul class="mt-4 flex flex-col gap-2 w-full">
                <li>
                    <a href="">E-notary services</a>
                </li>
                <li>
                    <a href="">General notarisation</a>
                </li>

                <li>
                    <a href="">Loan notarisation</a>
                </li>

                <li>
                    <a href="">Notary signing services</a>
                </li>

                <li>
                    <a href="">Criminal Record Checks</a>
                </li>

                <li>
                    <a href="">Digital Document</a>
                </li>
            </ul>

            <ul class="mt-4 flex flex-col gap-2 w-full">
                <li>
                    <a href="">Finance Documents</a>
                </li>
                <li>
                    <a href="">In-Person Notary</a>
                </li>

                <li>
                    <a href="">Mortgage Documents</a>
                </li>

                <li>
                    <a href="">Online Notarization</a>
                </li>

                <li>
                    <a href="">Online Notary Service</a>
                </li>

                <li>
                    <a href="">Online Service</a>
                </li>
            </ul>

            <ul class="mt-4 flex flex-col gap-2 w-full">
                <li>
                    <a href="">Remote Online Notary</a>
                </li>
                <li>
                    <a href="">Tax Documents</a>
                </li>

                <li>
                    <a href="">Prompt and Express Services</a>
                </li>

                <li>
                    <a href="">Legal Services</a>
                </li>
            </ul>
        </div>
    </div>

    <div class="w-fit">
        <h1 class="text-[#5F666D]">Commissioner of Oath</h1>
        <p>Barrister and Solicitor</p>
    </div>
</div>
