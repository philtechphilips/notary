<nav class="flex items-center justify-between md:px-20 px-5 md:py-1 py-4">
    <a href="/">
        <img src="{{ asset('images/notary-logo.png') }}" alt="" class="w-16">
    </a>


    <div class="md:flex items-center gap-1 hidden">
        <a href="/services" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">Services</a>
        <i class="ri-arrow-down-s-line cursor-pointer text-2xl" onclick="toggleDropdown()"></i>
    </div>

    <ul class="hidden md:flex items-center gap-6">
        <li><a href="/about-us" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">About Us</a></li>
        {{-- <li><a href="/teams" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">Team and Career</a></li> --}}
        <li><a href="/contacts" class="text-lg font-medium text-[#1D1F21] hover:text-[#CD7F32]">Contacts</a></li>
    </ul>

    <a href="tel:+14169538776" class="text-lg text-[#CD7F32] font-medium hidden md:flex">+1 416-953-8776</a>
    <i class="ri-menu-2-line text-[28px] flex md:hidden menuButton"></i>
</nav>
<nav id="menu"
    class="w-full p-5 md:hidden bg-gray-100 h-screen fixed top-0 left-0 translate-x-[500px] duration-[300ms] ease-in transform z-[1000]">
    <div class="flex items-center justify-between mb-20">
        <a href="/">
            <img src="{{ asset('images/notary-logo.png') }}" alt="" class="w-16">
        </a>

        <div class="w-10 h-10 menuButton flex items-center justify-center">
            <i class="ri-close-line text-3xl"></i>
        </div>
    </div>

    <ul class="flex flex-col gap-12 items-center list">
        <li>
            <a href="/" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2"> Home</a>
        </li>

        <li>
            <a href="/services" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Services</a>
        </li>

        <li>
            <a href="/about-us" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">About us</a>
        </li>

        {{-- <li>
        <a href="/services" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Team and Career</a>

    </li> --}}

        <li>
            <a href="/contacts" class="uppercase font-medium text-xl text-[#434343] leading-6 py-2">Contacts</a>

        </li>

        <li class="flex gap-2 items-center bg-[#CD7F32] rounded-lg px-6 py-3">
            <a href="tel:+14169538776">
                <p class="text-[#ffffff] font-medium md:text-xl">+1 416-953-8776</p>
            </a>
        </li>
    </ul>

</nav>

<div id="service_dropdown"
    class="w-full md:px-20 gap-20 service-hidden bg-white py-10  md:flex items-start absolute top-[67px] z-[1000]">
    <div class="w-[284px]">
        <h1 class="text-[#121212] text-3xl font-[Inter] font-medium">Notary Public Oshawa</h1>
        <p class="mt-2 text-[#1D1F21]">
            Trust us with your notarization needs, and experience unparalleled convenience and reliability.
        </p>
    </div>

    <div class="w-full">
        <div class="flex justify-between w-full">
            <ul class="mt-4 flex flex-col gap-4 w-full">
                <li class="text-[#53595F]">
                    E-notary services
                </li>

                <li class="text-[#53595F]">
                    Notarization of documents
                </li>

                <li class="text-[#53595F]">
                    Affidavit preparation
                </li>

                <li class="text-[#53595F]">
                    Commissioner of oaths
                </li>

                <li class="text-[#53595F]">
                    Free document printing
                </li>
            </ul>

            <ul class="mt-4 flex flex-col gap-4 w-full">
                <li class="text-[#53595F]">
                    Proof of loss document
                </li>

                <li class="text-[#53595F]">
                    Subsidy applications
                </li>

                <li class="text-[#53595F]">
                    Common law statutory declarations
                </li>

                <li class="text-[#53595F]">
                    Custody declaration
                </li>

                <li class="text-[#53595F]">
                    Letter of invitations
                </li>
            </ul>


            <ul class="mt-4 flex flex-col gap-4 w-full">
                <li class="text-[#53595F]">
                    Statutory declarations of marital status
                </li>

                <li class="text-[#53595F]">
                    Statutory declaration to change name
                </li>

                <li class="text-[#53595F]">
                    Travel consent letter
                </li>

                <li class="text-[#53595F]">
                    Witnessing signatures
                </li>

                <li class="text-[#53595F]">
                    Certified true copies
                </li>
            </ul>


            <ul class="mt-4 flex flex-col gap-4 w-full">
                <li class="text-[#53595F]">
                    Wills and estate planning
                </li>
            </ul>

        </div>
    </div>
</div>
