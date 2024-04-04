@extends('layout.app')


@section('content')
    <section class="w-full h-[700px] bg-cover bg-center bg-no-repeat relative"
    style="background-image: url('{{ asset('images/notary-services.png') }}')">

        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">
                Your trusted partner for all your notary and legal needs.
            </h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">
                Founded with a commitment to excellence and client satisfaction, we have been serving individuals and businesses with integrity and professionalism for years.
            </p>
        </div>
        <div class="bg-black bg-opacity-60 w-full h-[700px] top-0 left-0"></div>
    </section>

    <section class="w-full md:px-40 px-5 md:py-24 py-16 flex flex-col justify-center md:items-start gap-5">
        <p class="md:text-2xl text-[#1D1F21] text-center md:text-left">Notary Public Oshawa is your premier destination for professional document notarization services in Oshawa and beyond. With a dedicated team of experienced professionals, we strive to deliver efficient and reliable solutions for all your notarization needs. Our commitment to excellence is evident in every aspect of our work, from the meticulous attention to detail to the prompt and courteous service we provide to our valued clients. Whether you're in need of notarizing documents, preparing affidavits, or seeking assistance with Commissioner of Oath duties, you can trust Notary Public Oshawa to deliver results that exceed your expectations.</p>

        <p class="md:text-3xl text-[#1D1F21] text-center md:text-left font-semibold">Our Mission</p>

        <p class="md:text-2xl text-[#1D1F21] text-center md:text-left">Our mission at Notary Public Oshawa is to provide top-notch notarization services with utmost efficiency and professionalism. We aim to simplify the notarization process for our clients, ensuring their documents are handled accurately and confidentially. With a focus on excellence and customer satisfaction, we strive to be your trusted partner for all your notarization needs.</p>
    </section>


    <section class="relative h-full">
        <img src="{{ asset('images/about-2.png') }}" alt="">
        <div class="absolute bottom-0 md:py-16 py-8 md:px-20 px-5 bg-[#004D80]">
            <p class="text-white text-center font-[Inter] md:text-3xl">
                Count on us to be your trusted ally in navigating the intricacies of notarization and legal documentation. At Notary Public Oshawa, your satisfaction is our priority, and we strive to exceed your expectations with every interaction.
            </p>
        </div>
    </section>

    <section class="flex flex-col md:flex-row pt-24 md:px-20 px-5 justify-center md:gap-16 gap-10">
        <div class="md:w-1/2">
            <img src="{{ asset("images/notary-values.png") }}" alt="" class="h-full">
        </div>
        <div class="md:w-1/2">
            <h1 class="md:text-5xl text-center md:text-left text-3xl font-[Inter] text-[#121212] font-semibold">Our Values</h1>
            <div class="md:mt-6 mt-4">
                <h3 class="md:text-2xl text-xl font-semibold text-center md:text-left ">Professionalism</h3>
                <p class="mt-2 text-[#53595F] text-center md:text-left ">We adhere unwaveringly to the highest standards of professionalism and ethics in everything we do, ensuring integrity, trust, and excellence.</p>
            </div>

            <div class="mt-6">
                <h3 class="md:text-2xl text-xl font-semibold text-center md:text-left ">Integrity</h3>
                <p class="mt-2 text-[#53595F] text-center md:text-left ">
                    We conduct our business with honesty, transparency, and integrity, earning the trust and respect of our clients.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="md:text-2xl text-xl font-semibold text-center md:text-left ">Client-Centric Approach</h3>
                <p class="mt-2 text-[#53595F] text-center md:text-left ">
                    We prioritize the needs and satisfaction of our clients, striving to provide personalized solutions and exceptional service.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="md:text-2xl text-xl font-semibold text-center md:text-left ">Innovation</h3>
                <p class="mt-2 text-[#53595F] text-center md:text-left ">
                    We embrace innovation and technology to enhance the efficiency and effectiveness of our services, staying ahead of industry trends and advancements.
                </p>
            </div>

            <div class="mt-6">
                <h3 class="md:text-2xl text-xl font-semibold text-center md:text-left ">Community Engagement</h3>
                <p class="mt-2 text-[#53595F] text-center md:text-left ">
                    We are committed to giving back to the communities we serve, supporting local initiatives and organizations.
                </p>
            </div>
        </div>
    </section>

    @include('includes.testimonial')
@endsection


@section('script')
@endsection
