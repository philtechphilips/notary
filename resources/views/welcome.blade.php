@extends('layout.app')

@section('content')
    {{-- Hero Section --}}
    <section class="hero w-full md:px-20 px-5 flex justify-center relative py-28 pb-40">

        <div class="md:w-[840px] z-[100] flex flex-col gap-6 justify-center items-center">
            <h1 class="md:text-[64px] text-[44px] text-center z-[100] font-semibold md:font-[Inter] text-white">
                Notary and Legal services
            </h1>
            <p class="text-white md:text-xl text-center">
                Discover efficiency, security, and convenience with our e-notary services. From general notarization
                of documents to document handling services. Our expert ensures seamless transactions, in-person or online.
            </p>

            <a href="/contacts"
                class="button text-white text-lg mt-12 bg-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-3 w-fit">
                <p>Book appointment</p>
                <div class="bg-[#E1B284] primary-button rounded-full p-2 h-10 w-10 flex items-center justify-center">
                    <img class="arrow-one" src="{{ asset('images/arrow-right.svg') }}">
                    <img class="arrow-two" src="{{ asset('images/arrow-right.svg') }}" class="">
                </div>
            </a>
        </div>
        <div class="w-full h-full bg-black bg-opacity-50 absolute top-0 left-0"></div>
    </section>
    {{-- Hero Section --}}

    {{-- About Us Section --}}
    <section class="md:px-20 px-5 py-16">
        <div class="bg-[#004D80] rounded-lg md:p-20 px-5 py-10  flex flex-col items-center gap-5">
            <h1 class="font-[Inter] text-white md:text-5xl text-3xl font-semibold">About Us</h1>
            <p class="text-white md:text-lg text-center">
                At Notary Public Oshawa, we specialize in providing efficient and reliable document notarization services.
                Our experienced team offers fast and express services, ensuring your urgent needs are met with promptness
                and professionalism. We provide a range of services including notarizing documents, preparing affidavits,
                and acting as a Commissioner of Oath. As part of our commitment to convenience, we offer complimentary
                document printing. Whether you require E-notary services, Certified True Copy, Subsidy Applications, or
                Statutory Declarations, we are here to assist you with accuracy and precision. Trust Notary Public Oshawa
                for all your notarization needs, and experience our dedication to excellence firsthand.
            </p>
        </div>
    </section>
    {{-- About Us Section --}}

    {{-- Services Section --}}
    <section class="md:px-20 px-5 py-16">
        <div class="flex flex-col md:flex-row justify-between items-end">
            <div class="md:w-[808px]">
                <h1 class="text-5xl text-[#121212] font-semibold text-center md:text-left">Our Services</h1>
                <p class="text-[#1D1F21] text-lg mt-2 text-center md:text-left">
                    At Notary Public Oshawa, we specialize in providing comprehensive notarization services tailored to meet
                    your legal document needs efficiently and effectively. Here's a glimpse of what we offer
                </p>
            </div>

            <div class="md:flex items-center gap-6 hidden">
                <a href="/services"
                    class="button text-white text-lg mt-12 bg-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-3 w-fit">
                    <p>View more</p>
                    <div class="bg-[#E1B284] primary-button rounded-full p-2 h-10 w-10 flex items-center justify-center">
                        <img class="arrow-one" src="{{ asset('images/arrow-right.svg') }}">
                        <img class="arrow-two" src="{{ asset('images/arrow-right.svg') }}" class="">
                    </div>
                </a>
            </div>
        </div>
        <div class="flex md:flex-row flex-col justify-between gap-10 mt-16">
            <div class="bg-[#F1F2F3] rounded-lg md:w-1/3">
                <img src="{{ asset('images/notary.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        E-Notary services
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Experience the convenience and efficiency of our E-Notary services. We ensure that your documents
                        are notarized quickly and accurately.
                    </p>

                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-1/3">
                <img src="{{ asset('images/notorization.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Notarization of documents
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Ensure the legal validity of your contracts and agreements with our expert notarization services in
                        Oshawa.
                    </p>
                </div>
            </div>


            <div class="bg-[#F1F2F3] rounded-lg  md:w-1/3">
                <img src="{{ asset('images/wills.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Wills and estate planning
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Preparing a Will and prudent estate planning is recommended at any stage of your life to ensure your
                        decisions will be carried out the way you want them to; especially when it comes to your family and
                        loved ones.
                    </p>
                </div>
            </div>
        </div>
    </section>
    {{-- Services Section --}}

    {{-- Why Choose us Section --}}
    <section class="bg-[#004D80] md:px-20 px-5 py-28">
        <div class="flex flex-col md:flex-row justify-between items-center md:items-end">
            <div class="flex flex-col gap-2 md:w-[800px] 2xl:w-[953px]">
                <h1 class="text-white md:text-[60px] text-5xl font-semibold  md:text-left text-center">Why choose us</h1>
                <p class="text-white md:text-[19px] font-light  md:text-left text-center">
                    We pride ourselves on being your trusted partner for all your notary and legal service needs. With our
                    commitment to excellence, attention to detail, and dedication to client satisfaction, we stand out as
                    the preferred choice.
                </p>
            </div>

            <a href="/contacts"
                class="button text-white text-lg mt-12 bg-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-3 w-fit">
                <p>Book appointment</p>
                <div class="bg-[#E1B284] primary-button rounded-full p-2 h-10 w-10 flex items-center justify-center">
                    <img class="arrow-one" src="{{ asset('images/arrow-right.svg') }}">
                    <img class="arrow-two" src="{{ asset('images/arrow-right.svg') }}" class="">
                </div>
            </a>
        </div>

        <div class="flex flex-col md:flex-row items-center gap-5 justify-between mt-20">
            <div class="flex flex-col text-white gap-3 w-[360px]">
                <h4 class="text-2xl text-center md:text-left font-semibold">Experience and Expertise</h4>
                <p class="text-center md:text-left font-light">Benefit from our years of industry experience and
                    knowledgeable team of
                    notaries and legal professionals who ensure precision and accuracy in every service.</p>
            </div>
            <img src="{{ asset('images/Line 13.png') }}" class="h-4 md:h-full">
            <div class="flex flex-col text-white gap-3 w-[360px]">
                <h4 class="text-2xl text-center md:text-left font-semibold">Comprehensive & Convenience</h4>
                <p class=" text-center md:text-left font-light">
                    Enjoy a wide range of services tailored to your needs, including notary services, legal advice, and
                    assistance with financial documents, all delivered promptly and securely, with the convenience of online
                    options.
                </p>
            </div>
            <img src="{{ asset('images/Line 13.png') }}" class="h-4 md:h-full">
            <div class="flex flex-col text-white gap-3 w-[360px]">
                <h4 class="text-2xl text-center md:text-left font-semibold">Client-Centric Approach</h4>
                <p class=" text-center md:text-left font-light">
                    Experience personalized attention, transparent communication, and a commitment to your satisfaction,
                    backed by our trusted reputation for excellence, reliability, and integrity in the industry.
                </p>
            </div>
        </div>
    </section>
    {{-- Why Choose us Section --}}

    {{-- Testimonial Section --}}
    @include('includes.testimonial')
    {{-- Testimonial Section --}}

    {{-- FAQs  --}}
    <section class="md:p-20 py-16 px-5">
        <h1 class="md:w-[500px] font-[Inter] md:text-6xl text-3xl font-semibold">Frequently ask questions</h1>
        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">01</h2>
                    <h2 class="text-lg">What services does Notary Public Oshawa offer?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light text-[#53595F]">
                    We provide notarization of documents, preparation of affidavits, act as a Commissioner of Oath, and
                    offer free document printing with fast and express services.
                </p>
            </div>
        </div>

        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">02</h2>
                    <h2 class="text-lg">What types of documents do you handle?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light text-[#53595F]">
                    We handle a variety of documents including affidavits, certified true copies, statutory declarations,
                    travel consent letters, and more.
                </p>
            </div>
        </div>

        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">03</h2>
                    <h2 class="text-lg">Do you offer electronic notarization services?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light text-[#53595F]">
                    Yes, we provide E-notary services for electronic documents requiring notarization.
                </p>
            </div>
        </div>

        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">04</h2>
                    <h2 class="text-lg">How quickly can I get my documents notarized?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light text-[#53595F]">
                    We offer fast and express services to ensure quick turnaround times, though it may vary based on
                    document complexity and workload.
                </p>
            </div>
        </div>


        <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
            <div class="flex items-start justify-between accordion-top">
                <div class="flex items-center gap-10">
                    <h2 class="text-lg">05</h2>
                    <h2 class="text-lg">What should I bring when visiting your office?</h2>
                </div>

                <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
            </div>

            <div class="md:px-16 pl-16 pt-5 accordion-bottom">
                <p class="text-lg font-light  text-[#53595F]">
                    Please bring the original document(s) needing notarization and valid identification such as a driver's
                    license or passport.
                </p>
            </div>
        </div>
    </section>
    {{-- FAQs  --}}
@endsection

@section('script')
    {{-- Swiper Js --}}
    <script>
        const swiper = new Swiper('.swiper', {
            direction: 'horizontal',
            loop: true,
            spaceBetween: 30,
            slidesPerView: 1,
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
    {{-- Swiper js --}}
@endsection
