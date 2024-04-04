@extends('layout.app')


@section('content')
    <section class="w-full h-[700px] bg-cover bg-center bg-no-repeat relative"
        style="background-image: url('{{ asset('images/notary-services.png') }}')">

        <div class="w-full md:px-20 px-5 py-10 absolute bottom-0 glassmorphism">
            <h1 class="text-white font-[Inter] md:text-6xl text-4xl font-semibold  text-center md:text-left">Our Services
            </h1>
            <p class="text-white font-light py-4 md:text-xl text-center md:text-left">Welcome to Notary Public Oshawa, your
                trusted
                destination for efficient and reliable document notarization services in the Oshawa area. We are dedicated
                to providing prompt and professional assistance for all your notarization needs. Explore our comprehensive
                range of services designed to meet your requirements with accuracy and precision</p>
        </div>
        <div class="bg-black bg-opacity-60 w-full h-[700px] top-0 left-0"></div>
    </section>


    <section class="md:px-20 px-5 py-0 flex justify-center items-center">
        <div class="flex md:flex-row flex-col justify-center flex-wrap gap-6 mt-16">
            <div class="bg-[#F1F2F3] rounded-lg md:w-[350px] 2xl:w-[400px]">
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

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
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

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
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

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/affidafit.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Affidavit preparation
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        We us handle the meticulous preparation of affidavits, ensuring precision and compliance with legal
                        standards.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/oaut.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Commissioner of oaths
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Rely on our expertise to uphold legal integrity by meticulously verifying declarations and
                        affirmations with precision and professionalism.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/printing.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Free document printing
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Our printing facilities ensure high-quality reproductions of your documents, providing added
                        convenience and value to all our clients.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/common-law.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Common law statutory declarations
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Ensure legal compliance with our professional assistance in drafting and notarizing statutory
                        declarations for common law relationships.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/custody.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Custody declaration
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Protect and secure your custody arrangements with our professional drafting and notarization
                        services for custody declarations.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/subsidy.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Subsidy applications
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Navigate subsidy applications smoothly with our assistance in preparing and executing necessary
                        documentation.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/status.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Statutory declarations of marital status
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Obtain legally binding declarations of marital status through our precise drafting and notarization
                        services.
                    </p>
                </div>
            </div>


            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/loss.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Proof of loss document
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Our attention to detail ensures that your proof of loss documents meet all legal requirements,
                        providing you with added assurance in your insurance claims process.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/invitations.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Letter of invitations
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Our notarization ensures your letters of invitation carry the necessary legal authenticity for all
                        your intended purposes.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/travel.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Travel consent letter
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        Planning to travel with a minor? We provide notarization services for travel consent letters,
                        ensuring compliance with legal requirements.
                    </p>
                </div>
            </div>


            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/name-change.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Statutory declaration to change name
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        We assist in drafting and notarizing statutory declarations for name changes.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/witness.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Witnessing signatures
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        We offer witnessing services for various legal documents, ensuring signatures are properly
                        authenticated.
                    </p>
                </div>
            </div>

            <div class="bg-[#F1F2F3] rounded-lg  md:w-[350px] 2xl:w-[400px]">
                <img src="{{ asset('images/true-copy.png') }}" class="rounded-t-lg w-full">
                <div class="mt-6 px-5 pb-8">
                    <h1 class="text-2xl font-semibold text-[#1D1F21]">
                        Certified true copies
                    </h1>
                    <p class="text-[#53595F] mt-2 mb-4">
                        We've got you covered with our certified true copy services if you need certified copies of
                        important documents.
                    </p>
                </div>
            </div>
        </div>
    </section>

    @include('includes.testimonial')
@endsection


@section('script')
@endsection
