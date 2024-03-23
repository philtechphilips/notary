@extends('layout.app')

@section('content')
    <section class="w-full h-screen bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('images/hero.jpeg') }}')">

        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">Meet our team
            </h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">Behind our company is a team of experienced
                professionals who are passionate about delivering outstanding service to our clients. From our knowledgeable
                notaries to our skilled attorneys, each member of our team is dedicated to helping you achieve your goals
                with confidence and peace of mind.</p>
        </div>
    </section>


    <section class="w-full flex flex-wrap px-5 gap-y-10 justify-center py-28">
        <div class="relative px-5 w-[380px] flex justify-center">
            <img src="{{ asset('images/team-1.jfif') }}" width="400" class="rounded-lg">
            <div class=" w-[280px] absolute bottom-4 glassmorphism px-2 py-5 rounded-lg">
                <h3 class="text-white text-2xl">E-Notary Services</h3>
                <p class="text-white">Bio / Description</p>
            </div>
        </div>

        <div class="relative px-5 w-[380px] flex justify-center">
            <img src="{{ asset('images/team-1.jfif') }}" width="380" class="rounded-lg">
            <div class=" w-[280px] absolute bottom-4 glassmorphism px-2 py-5 rounded-lg">
                <h3 class="text-white text-2xl">E-Notary Services</h3>
                <p class="text-white">Bio / Description</p>
            </div>
        </div>


        <div class="relative px-5 w-[380px] flex justify-center">
            <img src="{{ asset('images/team-1.jfif') }}" width="380" class="rounded-lg">
            <div class=" w-[280px] absolute bottom-4 glassmorphism px-2 py-5 rounded-lg">
                <h3 class="text-white text-2xl">E-Notary Services</h3>
                <p class="text-white">Bio / Description</p>
            </div>
        </div>

        <div class="relative px-5 w-[380px] flex justify-center">
            <img src="{{ asset('images/team-1.jfif') }}" width="380" class="rounded-lg">
            <div class=" w-[280px] absolute bottom-4 glassmorphism px-2 py-5 rounded-lg">
                <h3 class="text-white text-2xl">E-Notary Services</h3>
                <p class="text-white">Bio / Description</p>
            </div>
        </div>
    </section>
@endsection


@section('script')
@endsection
