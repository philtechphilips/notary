@extends('layout.app')


@section('content')
    <section class="w-full h-screen bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('images/hero.jpeg') }}')">

        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">Your trusted
                partner for all your notary and legal needs.</h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">Founded with a commitment to excellence and client
                satisfaction, we have been serving individuals and businesses with integrity and professionalism for years.
            </p>
        </div>
    </section>

    <section class="w-full md:px-20 px-5 md:py-24 py-16 flex flex-col md:flex-row justify-center items-start gap-16">
        <div class="md:w-1/2">
            <img src="{{ asset('images/about.jfif') }}" alt="" class="w-full rounded-t-lg">
            <div class="mt-6">
                <h1 class="text-[#121212] font-[Inter] text-4xl font-medium text-center md:text-left ">Our Story</h1>
                <p class="mt-2 text-center md:text-left ">In today's fast-paced world, where time is of the essence and precision is paramount, the
                    significance of reliable and efficient notary and legal services cannot be overstated. Whether you're
                    navigating the complexities of a real estate transaction, solidifying the terms of a crucial loan
                    agreement, or seeking astute legal counsel to safeguard your interests, our dedicated team stands ready
                    to accompany you through every intricate step of the process. With a steadfast commitment to excellence
                    and a wealth of experience in the field, we pride ourselves on delivering unparalleled guidance and
                    support, ensuring that your legal endeavors are executed seamlessly and with utmost confidence.</p>
            </div>
        </div>

        <div class="md:w-1/2">
            <img src="{{ asset('images/about.jfif') }}" alt="" class="w-full rounded-t-lg">
            <div class="mt-6">
                <h1 class="text-[#121212] text-center md:text-left font-[Inter] text-4xl font-medium">Our Mission</h1>
                <p class="mt-2 text-center md:text-left">
                    At [Company Name], our mission is clear: to provide exceptional notary and legal services that go above
                    and beyond our clients' expectations. We adhere to the highest standards of professionalism, integrity,
                    and reliability in every aspect of our work. From personalized attention to expert guidance, we strive
                    to ensure that every client feels supported and empowered throughout their journey with us. With
                    [Company Name], you can trust that your legal matters are in capable hands, and we are dedicated to
                    achieving the best possible outcomes for you.
                </p>
            </div>
        </div>
    </section>


    <section class="relative h-full">
        <img src="{{ asset('images/about-2.png') }}" alt="">
        <div class="absolute bottom-0 md:py-16 py-8 md:px-20 px-5 bg-[#004D80]">
            <p class="text-white text-center font-[Inter] md:text-3xl">
                We are committed to building long-term relationships with our clients based on trust, reliability, and
                mutual respect. Whether you need a simple document notarized or complex legal advice, you can rely on us to
                provide prompt, professional, and personalized service every step of the way.
            </p>
        </div>
    </section>

    <section class="flex flex-col md:flex-row pt-24 md:px-20 px-5 justify-center md:gap-16 gap-10">
        <div class="md:w-1/2">
            <img src="{{ asset("images/about.png") }}" alt="" class="h-full">
        </div>
        <div class="md:w-1/2">
            <h1 class="md:text-6xl text-center md:text-left text-4xl font-[Inter] text-[#121212] font-semibold">Our Values</h1>
            <div class="mt-6">
                <h3 class="text-2xl text-center md:text-left ">Professionalism</h3>
                <p class="mt-2 text-[#1D1F21] text-center md:text-left ">We adhere unwaveringly to the highest standards of professionalism and ethics in everything we do, ensuring integrity, trust, and excellence.</p>
            </div>

            <div class="mt-6">
                <h3 class="text-2xl text-center md:text-left ">Integrity</h3>
                <p class="mt-2 text-[#1D1F21] text-center md:text-left ">
                    We conduct our business with honesty, transparency, and integrity, earning the trust and respect of our clients.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-2xl text-center md:text-left ">Client-Centric Approach</h3>
                <p class="mt-2 text-[#1D1F21] text-center md:text-left ">
                    We prioritize the needs and satisfaction of our clients, striving to provide personalized solutions and exceptional service.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-2xl text-center md:text-left ">Innovation</h3>
                <p class="mt-2 text-[#1D1F21] text-center md:text-left ">
                    We embrace innovation and technology to enhance the efficiency and effectiveness of our services, staying ahead of industry trends and advancements.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="text-2xl text-center md:text-left ">Community Engagement</h3>
                <p class="mt-2 text-[#1D1F21] text-center md:text-left ">
                    We are committed to giving back to the communities we serve, supporting local initiatives and organizations.
                </p>
            </div>
        </div>
    </section>

    @include('includes.testimonial')
@endsection


@section('script')
@endsection
