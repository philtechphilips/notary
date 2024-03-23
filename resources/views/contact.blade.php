@extends('layout.app')

@section('content')
    <section class="w-full h-[700px] bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('images/hero.jpeg') }}')">

        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">We help our
                clients to manage legal complexity and unlock opportunities</h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">
                Experience seamless notarization solutions tailored to your needs. From e-notary and online services to
                prompt in-person assistance, we've got you covered. Contact us
            </p>
        </div>
    </section>

    <section class="md:px-20 px-5 md:py-28 py-14  w-full bg-[#F9F9F9] flex  flex-col md:flex-row justify-center md:gap-24 gap-5">
        <div class="md:w-1/2">
            <h1 class="text-[#121212] font-medium text-4xl">Contact us</h1>
            <p class="text-[#1D1F21] mt-4">Dymon Work Refined, 285 Taunton Rd E Suite 208, Oshawa, ON L1G 3V2, Canada</p>
            <p class="text-[#1D1F21] mt-6">+1 416-953-8776</p>

            <div class="w-full flex flex-col md:flex-row justify-between md:gap-10 lg:gap-12 2xl:gap-20 gap-10 md:mt-16 mt-10">
                <div class="w-full flex flex-col gap-6">
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
        <div class="md:w-1/2">
            <form class="bg-white md:p-8 py-8 px-4 rounded-lg w-full">
                <div class="mb-8">
                    <input type="text" placeholder="Your name"
                        class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                </div>

                <div class="mb-8">
                    <input type="email" placeholder="Enter your mail"
                        class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                </div>

                <div class="mb-8">
                    <select placeholder="Enter your mail"
                        class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                        <option selected disabled>Choose service</option>
                        <option>Notary</option>
                    </select>
                </div>

                <div class="mb-8">
                    <textarea placeholder="Type message" rows="4"
                        class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]"></textarea>
                </div>

                <button type="submit"
                    class="button text-white text-lg mt-8 bg-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-3 w-fit">
                    <p>Send message</p>
                    <img class="arrow bg-[#E1B284] rounded-full p-2" src="{{ asset('images/arrow-right.svg') }}"
                        class="">
                </button>
            </form>
        </div>
    </section>
@endsection

@section('script')
@endsection
