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
                <form class="bg-white md:p-8 py-8 px-4 rounded-lg w-full" method="POST" action="/online-upload">
                    @csrf
                    <h1 class="text-[#1D1F21] text-2xl font-semibold">Online notorization</h1>

                    <label for="doc-upload" class="cursor-pointer">
                        <input type="file" multiple name="" id="doc-upload" hidden>
                        <div id="drop-area"
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

                    <div class="flex flex-col gap-3">
                        <h6 class="font-semibold text-gray-800 hidden" id="uploaded-title">Files Uploaded</h6>
                        <div class="flex gap-2 items-center">
                            <div id="fileNamesContainer" style="display: none;"></div>
                        </div>
                    </div>

                    <button type="submit"
                        class="buttons text-white text-lg mt-8 bg-transparent border-2 border-[#CD7F32] rounded-full z-[100] flex items-center gap-2 py-[6px] px-4 pr-10 w-fit">
                        <p class="text-[#CD7F32] font-semibold">Send document</p>
                        <img class="arrow-one" src="{{ asset('images/icon-orange.svg') }}" class="">
                        <img class="arrow-two" src="{{ asset('images/icon-orange.svg') }}" class="">
                    </button>
                </form>
            </div>

            <div class="md:w-1/2">
                <form method="POST" id="send-a-message" action="/send-a-message"
                    class="bg-white md:p-8 py-8 px-4 rounded-lg w-full">
                    @csrf
                    <h1 class="text-[#1D1F21] text-2xl font-semibold mb-8">Send a message</h1>
                    <div class="mb-8">
                        <input type="text" name="name" placeholder="Your name"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                    </div>

                    <div class="mb-8">
                        <input type="text" name="contact" placeholder="Contact"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                    </div>

                    <div class="mb-8">
                        <input type="email" name="email" placeholder="Enter your mail"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                    </div>

                    <div class="mb-8">
                        <select name="service" class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]">
                            <option selected disabled>Select service</option>
                            <option value="E-notary services">E-notary services</option>
                            <option value="Notarization of documents">Notarization of documents</option>
                            <option value="Wills and estate planning">Wills and estate planning</option>
                            <option value="Affidavit preparation">Affidavit preparation</option>
                            <option value="Commissioner of oaths">Commissioner of oaths</option>
                            <option value="Free document printing">Free document printing</option>
                            <option value="Common law statutory declarations">Common law statutory declarations</option>
                            <option value="Custody declaration">Custody declaration</option>
                            <option value="Subsidy applications">Subsidy applications</option>
                            <option value="Statutory declarations of marital status">Statutory declarations of marital
                                status</option>
                            <option value="Proof of loss document">Proof of loss document</option>
                            <option value="Letter of invitations">Letter of invitations</option>
                            <option value="Travel consent letter">Travel consent letter</option>
                            <option value="Statutory declaration to change name">Statutory declaration to change name
                            </option>
                            <option value="Witnessing signatures">Witnessing signatures</option>
                            <option value="Certified true copies">Certified true copies</option>
                        </select>
                    </div>

                    <div class="mb-8">
                        <textarea name="messages" placeholder="Type message" rows="4"
                            class="rounded-lg outline-none border-none w-full px-4 py-3 bg-[#F9F9F9]"></textarea>
                    </div>

                    <button id="send-btn" type="submit"
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
    <script>
        $(document).ready(function() {
            $("#send-a-message").on("submit", function(event) {
                event.preventDefault();
                const button = $("#send-btn");
                button.prop("disabled", true);
                button.find('p').text("Submitting..");
                jQuery.ajax({
                    url: "/send-a-message",
                    data: jQuery("#send-a-message").serialize(),
                    type: "post",

                    success: function(result) {
                        toastr.success("Message submitted sucessfully!");
                        button.prop("disabled", false);
                        button.find('p').text("Send message..");
                    },

                    error: function(xhr, status, error) {
                        button.prop("disabled", false);
                        button.find('p').text("Send message..");
                        if (error === "Unprocessable Content") {
                            toastr.error('Invalid field(s)')
                        } else {
                            toastr.error("Something went wrong")
                        }
                    }
                });
            });
        });
    </script>


    <script>
        document.addEventListener("DOMContentLoaded", function() {
            const dropArea = document.getElementById("drop-area");
            const inputFiled = document.getElementById("doc-upload");

            dropArea.addEventListener("dragover", function(event) {
                event.preventDefault();
                dropArea.style.border = "2px dashed green";
            });


            dropArea.addEventListener("dragleave", function(event) {
                dropArea.style.border = "2px dashed #E4E5E7";
            });


            dropArea.addEventListener("drop", function(event) {
                event.preventDefault();
                inputFiled.files = event.dataTransfer.files;
                displayFileNames(inputFiled.files);
            });

            inputFiled.addEventListener("change", function(event) {
                displayFileNames(inputFiled.files);
            });

            function displayFileNames(files) {
            const fileNamesContainer = document.getElementById('fileNamesContainer');
            fileNamesContainer.style.display = 'block';
            fileNamesContainer.innerHTML = '';
            document.getElementById('uploaded-title').style.display = "block";

            for (let i = 0; i < files.length; i++) {
                const fileName = files[i].name;
                const fileNameElement = document.createElement('p');
                fileNameElement.textContent = fileName;
                fileNamesContainer.appendChild(fileNameElement);
            }
        }
        });


    </script>
@endsection
