@extends('layout.app')

@section('content')
    <section class="w-full h-[700px] bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ asset('images/notary-services.png') }}')">
        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">We help our
                clients to manage legal complexity and unlock opportunities</h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">
                Experience seamless notarization solutions tailored to your needs. From e-notary and online services to
                prompt in-person assistance, we've got you covered. Contact us
            </p>
        </div>
        <div class="bg-black bg-opacity-60 w-full h-[700px] top-0 left-0"></div>
    </section>

    <section class="md:px-20 px-5 md:py-28 py-14  w-full bg-[#F9F9F9] flex  flex-col md:flex-row justify-center md:gap-24 gap-5">
        <div class="md:w-full flex">
            <div class="flex flex-col w-1/2">
                <h1 class="text-[#121212] font-medium text-4xl">Contact us</h1>
                <p class="text-[#1D1F21] mt-4">Dymon Work Refined, 285 Taunton Rd E Suite 208, Oshawa, ON L1G 3V2, Canada</p>
                <p class="text-[#1D1F21] mt-6">+1 416-953-8776</p>
            </div>

            <div class="w-1/2 flex flex-col gap-5">
                <div class="flex flex-col gap-6 w-[220px]">
                    <h1 class="text-2xl">Business hour</h1>
                    <div class="w-full flex justify-between">
                        <p>Monday - Friday</p>
                        <p>7am - 9pm</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <p>Saturday</p>
                        <p>7am - 7pm</p>
                    </div>
                    <div class="w-full flex justify-between">
                        <p>Sunday</p>
                        <p>7am - 8pm</p>
                    </div>
                </div>

                <div class="w-full flex flex-col gap-6">
                    <h1 class="text-2xl">Online service</h1>
                    <div class="w-full flex justify-between">
                        <p>Monday - Sunday</p>
                        <p>9am - 5pm</p>
                    </div>
                </div>
                <div>

                </div>
            </div>
        </div>

    </section>
@endsection

@section('script')
@endsection
