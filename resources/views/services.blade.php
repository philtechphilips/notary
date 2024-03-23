@extends("layout.app")


@section("content")

<section class="w-full h-screen bg-cover bg-center bg-no-repeat relative" style="background-image: url('{{ asset('images/hero.jpeg')}}')">

    <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">Our Services</h1>
            <p class="text-white py-4 md:text-xl text-center md:text-left">We are dedicated to providing comprehensive notary and legal services to meet the diverse needs of our clients. With a team of experienced professionals and a commitment to excellence, we offer a wide range of services tailored to individuals and businesses alike. Explore our services below to learn more:</p>
    </div>
</section>


<section class="md:p-20 md:pt-10 py-16 px-5">
    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">01</h2>
                <h2 class="md:text-3xl text-xl font-medium">E-Notary Services</h2>
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
                <h2 class="md:text-3xl text-xl font-medium">General Notarization</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>


    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">03</h2>
                <h2 class="md:text-3xl text-xl font-medium">Loan Notarization</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">04</h2>
                <h2 class="md:text-3xl text-xl font-medium">Notary Signing Services</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">05</h2>
                <h2 class="md:text-3xl text-xl font-medium">Criminal Record Checks</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">06</h2>
                <h2 class="md:text-3xl text-xl font-medium">Digital Document Services</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">07</h2>
                <h2 class="md:text-3xl text-xl font-medium">Finance Documents</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">08</h2>
                <h2 class="md:text-3xl text-xl font-medium">In-Person Notary</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>


    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">09</h2>
                <h2 class="md:text-3xl text-xl font-medium">Mortgage Documents</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">10</h2>
                <h2 class="md:text-3xl text-xl font-medium">Online Notarization</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">11</h2>
                <h2 class="md:text-3xl text-xl font-medium">Online Notary Service</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">12</h2>
                <h2 class="md:text-3xl text-xl font-medium">Online Service</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">13</h2>
                <h2 class="md:text-3xl text-xl font-medium">Remote Online Notary</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">14</h2>
                <h2 class="md:text-3xl text-xl font-medium">Tax Documents</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">15</h2>
                <h2 class="md:text-3xl text-xl font-medium">Prompt and Express Service</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">16</h2>
                <h2 class="md:text-3xl text-xl font-medium">Legal Services</h2>
            </div>

            <img src="{{ asset('images/arrow-down.svg') }}" class="cursor-pointer">
        </div>

        <div class="md:px-16 pl-16 pt-5 accordion-bottom">
            <p class="text-lg font-light">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Praesentium
                blanditiis veritatis quae velit et sit sapiente consequatur at tenetur ipsam. Illum at commodi natus,
                recusandae earum minima ipsam corrupti tempore.</p>
        </div>
    </div>

    <div class="border-b border-b-[#C9CCCF] mt-16 pb-12 accordion">
        <div class="flex items-start justify-between accordion-top">
            <div class="flex items-center gap-10">
                <h2 class="text-lg">17</h2>
                <h2 class="md:text-3xl text-xl font-medium">Barrister and Solicitor</h2>
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

@include("includes.testimonial")

@endsection


@section("script")

@endsection
