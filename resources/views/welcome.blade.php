@extends('layout.app')

@section('content')
    <section class="hero w-full md:px-20 px-5 flex justify-center relative py-28 pb-40">

        <div class="md:w-[800px] z-[100] flex flex-col justify-center items-center">
            <h1 class="md:text-[80px] text-[44px] text-center z-[100] font-bold md:font-[Inter] text-white">Seamless Notary
                and Legal Services
            </h1>
            <p class="text-white md:text-2xl text-center">Discover efficiency, security, and convenience with our e-notary
                services. From general notarization to specialized loan and mortgage documents, our expert team ensures
                seamless transactions, in-person or online.
            </p>

            <a href=""
                class="button text-white text-lg mt-12 bg-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-3 w-fit">
                <p>Book appointment</p>
                <img class="arrow bg-[#E1B284] rounded-full p-2" src="{{ asset('images/arrow-right.svg') }}" class="">
            </a>
        </div>
        <div class="w-full h-screen bg-black bg-opacity-50 absolute top-0 left-0"></div>
    </section>

    <section class="md:px-20 px-5 py-16">
        <div class="bg-[#004D80] rounded-lg md:p-20 px-5 py-10  flex flex-col items-center gap-5">
            <h1 class="font-[Inter] text-white md:text-5xl text-3xl font-semibold">About Us</h1>
            <p class="text-white md:text-lg text-center">At [Company Name], we're dedicated to simplifying your notary and
                legal needs. With [number] years of experience in the industry, we've built a reputation for excellence and
                reliability. Our team of experienced professionals is committed to providing personalized service and
                guiding you through every step of the process with integrity and professionalism. Whether you're closing a
                real estate deal, finalizing a loan agreement, or seeking expert legal advice, you can trust [Company Name]
                to deliver exceptional results. </p>
            <a href="" class="button text-[#CD7F32] flex items-center gap-2  w-fit">
                <p>About us</p>
                <img class="arrow" src="{{ asset('images/arrow-right-orange.svg') }}" class="">
            </a>
        </div>
    </section>


    <section class="md:px-20 px-5 py-16">
        <div class="flex flex-col md:flex-row justify-between items-end">
            <div class="md:w-[542px]">
                <h1 class="text-5xl text-[#121212] font-semibold">Our Services</h1>
                <p class="text-[#1D1F21] text-lg mt-2">Our dedicated team and cutting-edge solutions ensure that every
                    shipment
                    reflects the pinnacle of logistical excellence</p>
            </div>

            <div class="flex items-center gap-6">
                <div
                    class="bg-[#F1F2F3] swiper-button-prev-mod border border-[#C9CCCF] rounded-full h-10 w-10 flex items-center justify-center">
                    <i class="ri-arrow-left-line text-2xl text-[#1D1F21]"></i>
                </div>

                <div
                    class="bg-[#F1F2F3] swiper-button-next-mod border border-[#C9CCCF] rounded-full h-10 w-10 flex items-center justify-center">
                    <i class="ri-arrow-right-line text-2xl text-[#1D1F21]"></i>
                </div>
            </div>
        </div>
        <div class="w-full swiper">
            <div class="w-full flex justify-center mt-16 md:gap-10 gap-5 swiper-wrapper">
                <div class="bg-[#F1F2F3] rounded-lg md:w-[400px] swiper-slide">
                    <img src="{{ asset('images/image 10.png') }}" class="rounded-t-lg">
                    <div class="mt-6 px-5 pb-8">
                        <h1 class="text-2xl text-[#1D1F21]">
                            E-Notary Services
                        </h1>
                        <p class="text-[#1D1F21] mt-2 mb-4">
                            Experience the convenience and efficiency of our E-Notary services. We ensure that your
                            documents are notarized quickly and accurately.
                        </p>
                        <a href="" class="button text-[#CD7F32] flex items-center gap-2  w-fit">
                            <p>About us</p>
                            <img class="arrow" src="{{ asset('images/arrow-right-orange.svg') }}" class="">
                        </a>
                    </div>
                </div>

                <div class="bg-[#F1F2F3] rounded-lg md:w-[400px] swiper-slide">
                    <img src="{{ asset('images/image 10.png') }}" class="rounded-t-lg">
                    <div class="mt-6 px-5 pb-8">
                        <h1 class="text-2xl text-[#1D1F21]">
                            E-Notary Services
                        </h1>
                        <p class="text-[#1D1F21] mt-2 mb-4">
                            Experience the convenience and efficiency of our E-Notary services. We ensure that your
                            documents are notarized quickly and accurately.
                        </p>
                        <a href="" class="button text-[#CD7F32] flex items-center gap-2  w-fit">
                            <p>About us</p>
                            <img class="arrow" src="{{ asset('images/arrow-right-orange.svg') }}" class="">
                        </a>
                    </div>
                </div>


                <div class="bg-[#F1F2F3] rounded-lg md:w-[400px] swiper-slide">
                    <img src="{{ asset('images/image 10.png') }}" class="rounded-t-lg">
                    <div class="mt-6 px-5 pb-8">
                        <h1 class="text-2xl text-[#1D1F21]">
                            E-Notary Services
                        </h1>
                        <p class="text-[#1D1F21] mt-2 mb-4">
                            Experience the convenience and efficiency of our E-Notary services. We ensure that your
                            documents are notarized quickly and accurately.
                        </p>
                        <a href="" class="button text-[#CD7F32] flex items-center gap-2  w-fit">
                            <p>About us</p>
                            <img class="arrow" src="{{ asset('images/arrow-right-orange.svg') }}" class="">
                        </a>
                    </div>
                </div>

                <div class="bg-[#F1F2F3] rounded-lg md:w-[400px] swiper-slide">
                    <img src="{{ asset('images/image 10.png') }}" class="rounded-t-lg">
                    <div class="mt-6 px-5 pb-8">
                        <h1 class="text-2xl text-[#1D1F21]">
                            E-Notary Services
                        </h1>
                        <p class="text-[#1D1F21] mt-2 mb-4">
                            Experience the convenience and efficiency of our E-Notary services. We ensure that your
                            documents are notarized quickly and accurately.
                        </p>
                        <a href="" class="button text-[#CD7F32] flex items-center gap-2  w-fit">
                            <p>About us</p>
                            <img class="arrow" src="{{ asset('images/arrow-right-orange.svg') }}" class="">
                        </a>
                    </div>
                </div>
            </div>
            {{-- <div class=""></div>
            <div class="swiper-button-next"></div> --}}
        </div>
    </section>



    <section class="bg-[#004D80] md:px-20 px-5 py-28">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end">
            <div class="flex flex-col gap-2 md:w-[724px]">
                <h1 class="text-white md:text-[60px] text-5xl font-semibold  md:text-left text-center">Why choose us</h1>
                <p class="text-white md:text-[19px] font-light  md:text-left text-center">we pride ourselves on being your
                    trusted partner for all your
                    notary and legal service needs. With our commitment to excellence, attention to detail, and dedication
                    to client satisfaction, we stand out as the preferred choice.</p>
            </div>

            <a href=""
                class="button text-white text-lg mt-12 bg-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-3 w-fit">
                <p>Book appointment</p>
                <img class="arrow bg-[#E1B284] rounded-full p-2" src="{{ asset('images/arrow-right.svg') }}"
                    class="">
            </a>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-5 justify-between mt-20">
            <div class="flex flex-col text-white gap-3 w-[360px]">
                <h4 class="text-2xl text-center md:text-left">Experience and Expertise</h4>
                <p class=" text-center md:text-left">Benefit from our years of industry experience and knowledgeable team of
                    notaries and legal professionals who ensure precision and accuracy in every service.</p>
            </div>
            <img src="{{ asset('images/Line 13.png') }}" class="h-4 md:h-full">
            <div class="flex flex-col text-white gap-3 w-[360px]">
                <h4 class="text-2xl text-center md:text-left">Comprehensive & Convenience</h4>
                <p class=" text-center md:text-left">
                    Enjoy a wide range of services tailored to your needs, including notary services, legal advice, and
                    assistance with financial documents, all delivered promptly and securely, with the convenience of online
                    options.
                </p>
            </div>
            <img src="{{ asset('images/Line 13.png') }}" class="h-4 md:h-full">
            <div class="flex flex-col text-white gap-3 w-[360px]">
                <h4 class="text-2xl text-center md:text-left">Client-Centric Approach</h4>
                <p class=" text-center md:text-left">
                    Experience personalized attention, transparent communication, and a commitment to your satisfaction,
                    backed by our trusted reputation for excellence, reliability, and integrity in the industry.
                </p>
            </div>
        </div>
    </section>

    <section class="md:p-20 py-16 px-5">
        <h1 class="md:w-[500px] font-[Inter] md:text-6xl text-3xl font-semibold">Frequently ask questions</h1>
        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">01</h2>
                    <h2 class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light ">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                    blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                    recusandae earum minima ipsam corrupti tempore.</p>
            </div>
        </div>
        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">02</h2>
                    <h2 class="text-lg">Lorem ipsum dolor sit amet, consectetur adipiscing elit?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                    blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                    recusandae earum minima ipsam corrupti tempore.</p>
            </div>
        </div>
    </section>
@endsection

@section('script')
    {{-- Swiper Js --}}
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            centeredSlides: false,
            navigation: {
                nextEl: '.swiper-button-next-mod',
                prevEl: '.swiper-button-prev-mod',
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


    <script>
        const swipers = new Swiper('.swiper-2', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 3,
            navigation: {
                nextEl: '.swiper-button-next-mod-1',
                prevEl: '.swiper-button-prev-mod-1',
            },

        });
    </script>
    {{-- Swiper js --}}
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
@endsection
