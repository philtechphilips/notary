@extends('layout.app')

@section('content')
    <section class="w-full h-[700px] bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('images/notary-services.png') }}')">
        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-3xl font-semibold  text-center md:text-left">We help our
                clients to manage legal complexity and unlock opportunities</h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">
                Experience seamless notarization solutions tailored to your needs. From e-notary and online services to
                prompt in-person assistance, we've got you covered. Contact us
            </p>
        </div>
        <div class="bg-black bg-opacity-60 w-full h-[700px] top-0 left-0"></div>
    </section>

    <section
        class="md:px-20 px-5 md:py-28 py-14 w-full bg-[#F9F9F9] flex  flex-col md:flex-row justify-center md:gap-24 gap-5">
        <div class="md:w-full flex md:flex-row flex-col gap-10">
            <div class="flex flex-col md:w-1/2">
                <h1 class="text-[#121212] font-medium text-4xl">Contact us</h1>
                <div class="flex items-start gap-2 mt-4">
                    <img src="{{ asset('images/mingcute_location-line.svg') }}" alt="">
                    <p class="text-[#1D1F21]">Dymon Work Refined, 285 Taunton Rd E Suite 208, Oshawa, ON L1G 3V2, Canada</p>
                </div>

                <div class="flex items-start gap-2 mt-6">
                    <img src="{{ asset('images/icon.svg') }}" alt="">
                    <p class="text-[#1D1F21]">Contact@notarypublicoshawa.com</p>
                </div>

                <div class="flex items-start gap-2 mt-6">
                    <img src="{{ asset('images/call.svg') }}" alt="">
                    <p class="text-[#1D1F21]">+1 416-953-8776, +1 647 735 3033</p>
                </div>
            </div>

            <div class="w-1/2 flex flex-col gap-5">
                <div class="flex flex-col gap-6 w-[250px]">
                    <h1 class="text-2xl text-[#1D1F21] font-semibold">Business hour</h1>
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

                <div class="flex flex-col gap-6 w-[250px]">
                    <h1 class="text-2xl text-[#1D1F21] font-semibold">Online service</h1>
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

    <section class="w-full md:px-20 px-5 mb-28">
        <div class="w-full flex md:flex-row flex-col gap-12">
            <div class="md:w-1/2">
                <form class="bg-white md:p-8 py-8 px-4 rounded-lg w-full">
                    <h1 class="text-[#1D1F21] text-2xl font-semibold">Online notorization</h1>

                    <label for="doc-upload" class="cursor-pointer">
                        <input type="file" name="" id="doc-upload" hidden>
                        <div
                            class="border-2 border-[#E4E5E7] bg-[#F9F9F9] border-dashed rounded-lg gap-6 my-8 flex flex-col items-center justify-center py-28">
                            <h1 class="text-[#121212]">Upload your document</h1>
                            <img src="{{ asset('images/upload-icon.svg') }}" class="w-10" alt="">
                            <div class="w-full flex flex-col gap-3 items-center justify-center">
                                <h1 class="text-[#121212]">Drag and drop your document here</h1>
                                <div class="flex items-center gap-2">
                                    <div class="w-32 bg-[#E4E5E7] h-[1px]"></div>
                                    <h1 class="text-[#121212]">OR</h1>
                                    <div class="w-32 bg-[#E4E5E7] h-[1px]"></div>
                                </div>
                                <h1 class="text-[#CD7F32]">choose a file</h1>
                            </div>
                        </div>
                    </label>

                    <button type="submit" class="buttons text-white text-lg mt-8 bg-transparent border-2 border-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-4 pr-10 w-fit">
                        <p class="text-[#CD7F32] font-semibold">Send document</p>
                        <img class="arrow-one" src="{{ asset('images/icon-orange.svg') }}" class="">
                        <img class="arrow-two" src="{{ asset('images/icon-orange.svg') }}" class="">
                    </button>
                </form>
            </div>

            <div class="md:w-1/2">
                <form class="bg-white md:p-8 py-8 px-4 rounded-lg w-full">
                    <h1 class="text-[#1D1F21] text-2xl font-semibold mb-8">Send a message</h1>
                    <div class="mb-8">
                        <input type="text" placeholder="Your name"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                    </div>

                    <div class="mb-8">
                        <input type="text" placeholder="Contact"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                    </div>

                    <div class="mb-8">
                        <input type="email" placeholder="Enter your mail"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                    </div>

                    <div class="mb-8">
                        <select class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                            <option selected disabled>Select service</option>
                            <option>Notary</option>
                        </select>
                    </div>

                    <div class="mb-8">
                        <textarea placeholder="Type message" rows="4"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]"></textarea>
                    </div>

                    <button type="submit"
                        class="buttons text-white text-lg mt-8 bg-transparent border-2 pr-10 border-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-4 w-fit">
                        <p class="text-[#CD7F32] font-semibold">Send message</p>
                        <img class="arrow-one" src="{{ asset('images/icon-orange.svg') }}" class="">
                        <img class="arrow-two" src="{{ asset('images/icon-orange.svg') }}" class="">
                    </button>
                </form>
            </div>
        </div>
    </section>
@endsection

@section('script')
@endsection
