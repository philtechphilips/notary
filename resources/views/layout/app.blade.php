<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Notary Public Oshawa - Notary And Legal Services </title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link href="https://cdn.jsdelivr.net/npm/remixicon@3.4.0/fonts/remixicon.css" rel="stylesheet">
    <link rel="stylesheet" href="{{ asset('css/global.css') }}">
    <link rel="stylesheet" href="{{ asset('css/mod-swiper.css') }}">
    <link rel="icon" href="{{ asset('images/notary-logo.png') }}">
    <link rel="stylesheet" href="{{ asset('build/assets/app-ed9e150d.css') }}">
    @vite('resources/css/app.css')
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js"
        integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g=="
        crossorigin="anonymous" referrerpolicy="no-referrer"></script>
    <link rel="stylesheet" type="text/css"
        href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/css/toastr.min.css">
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
    <style>
        @import"https://fonts.googleapis.com/css2?family=Archivo:ital,wght@0,100..900;1,100..900&family=Inter:wght@100..900&display=swap";

        *,
        :before,
        :after {
            box-sizing: border-box;
            border-width: 0;
            border-style: solid;
            border-color: #e5e7eb
        }

        :before,
        :after {
            --tw-content: ""
        }

        html,
        :host {
            line-height: 1.5;
            -webkit-text-size-adjust: 100%;
            -moz-tab-size: 4;
            -o-tab-size: 4;
            tab-size: 4;
            font-family: ui-sans-serif, system-ui, sans-serif, "Apple Color Emoji", "Segoe UI Emoji", Segoe UI Symbol, "Noto Color Emoji";
            font-feature-settings: normal;
            font-variation-settings: normal;
            -webkit-tap-highlight-color: transparent
        }

        body {
            margin: 0;
            line-height: inherit
        }

        hr {
            height: 0;
            color: inherit;
            border-top-width: 1px
        }

        abbr:where([title]) {
            -webkit-text-decoration: underline dotted;
            text-decoration: underline dotted
        }

        h1,
        h2,
        h3,
        h4,
        h5,
        h6 {
            font-size: inherit;
            font-weight: inherit
        }

        a {
            color: inherit;
            text-decoration: inherit
        }

        b,
        strong {
            font-weight: bolder
        }

        code,
        kbd,
        samp,
        pre {
            font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, Liberation Mono, Courier New, monospace;
            font-feature-settings: normal;
            font-variation-settings: normal;
            font-size: 1em
        }

        small {
            font-size: 80%
        }

        sub,
        sup {
            font-size: 75%;
            line-height: 0;
            position: relative;
            vertical-align: baseline
        }

        sub {
            bottom: -.25em
        }

        sup {
            top: -.5em
        }

        table {
            text-indent: 0;
            border-color: inherit;
            border-collapse: collapse
        }

        button,
        input,
        optgroup,
        select,
        textarea {
            font-family: inherit;
            font-feature-settings: inherit;
            font-variation-settings: inherit;
            font-size: 100%;
            font-weight: inherit;
            line-height: inherit;
            color: inherit;
            margin: 0;
            padding: 0
        }

        button,
        select {
            text-transform: none
        }

        button,
        [type=button],
        [type=reset],
        [type=submit] {
            -webkit-appearance: button;
            background-color: transparent;
            background-image: none
        }

        :-moz-focusring {
            outline: auto
        }

        :-moz-ui-invalid {
            box-shadow: none
        }

        progress {
            vertical-align: baseline
        }

        ::-webkit-inner-spin-button,
        ::-webkit-outer-spin-button {
            height: auto
        }

        [type=search] {
            -webkit-appearance: textfield;
            outline-offset: -2px
        }

        ::-webkit-search-decoration {
            -webkit-appearance: none
        }

        ::-webkit-file-upload-button {
            -webkit-appearance: button;
            font: inherit
        }

        summary {
            display: list-item
        }

        blockquote,
        dl,
        dd,
        h1,
        h2,
        h3,
        h4,
        h5,
        h6,
        hr,
        figure,
        p,
        pre {
            margin: 0
        }

        fieldset {
            margin: 0;
            padding: 0
        }

        legend {
            padding: 0
        }

        ol,
        ul,
        menu {
            list-style: none;
            margin: 0;
            padding: 0
        }

        dialog {
            padding: 0
        }

        textarea {
            resize: vertical
        }

        input::-moz-placeholder,
        textarea::-moz-placeholder {
            opacity: 1;
            color: #9ca3af
        }

        input::placeholder,
        textarea::placeholder {
            opacity: 1;
            color: #9ca3af
        }

        button,
        [role=button] {
            cursor: pointer
        }

        :disabled {
            cursor: default
        }

        img,
        svg,
        video,
        canvas,
        audio,
        iframe,
        embed,
        object {
            display: block;
            vertical-align: middle
        }

        img,
        video {
            max-width: 100%;
            height: auto
        }

        [hidden] {
            display: none
        }

        *,
        :before,
        :after {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        ::backdrop {
            --tw-border-spacing-x: 0;
            --tw-border-spacing-y: 0;
            --tw-translate-x: 0;
            --tw-translate-y: 0;
            --tw-rotate: 0;
            --tw-skew-x: 0;
            --tw-skew-y: 0;
            --tw-scale-x: 1;
            --tw-scale-y: 1;
            --tw-pan-x: ;
            --tw-pan-y: ;
            --tw-pinch-zoom: ;
            --tw-scroll-snap-strictness: proximity;
            --tw-gradient-from-position: ;
            --tw-gradient-via-position: ;
            --tw-gradient-to-position: ;
            --tw-ordinal: ;
            --tw-slashed-zero: ;
            --tw-numeric-figure: ;
            --tw-numeric-spacing: ;
            --tw-numeric-fraction: ;
            --tw-ring-inset: ;
            --tw-ring-offset-width: 0px;
            --tw-ring-offset-color: #fff;
            --tw-ring-color: rgb(59 130 246 / .5);
            --tw-ring-offset-shadow: 0 0 #0000;
            --tw-ring-shadow: 0 0 #0000;
            --tw-shadow: 0 0 #0000;
            --tw-shadow-colored: 0 0 #0000;
            --tw-blur: ;
            --tw-brightness: ;
            --tw-contrast: ;
            --tw-grayscale: ;
            --tw-hue-rotate: ;
            --tw-invert: ;
            --tw-saturate: ;
            --tw-sepia: ;
            --tw-drop-shadow: ;
            --tw-backdrop-blur: ;
            --tw-backdrop-brightness: ;
            --tw-backdrop-contrast: ;
            --tw-backdrop-grayscale: ;
            --tw-backdrop-hue-rotate: ;
            --tw-backdrop-invert: ;
            --tw-backdrop-opacity: ;
            --tw-backdrop-saturate: ;
            --tw-backdrop-sepia:
        }

        .fixed {
            position: fixed
        }

        .absolute {
            position: absolute
        }

        .relative {
            position: relative
        }

        .bottom-0 {
            bottom: 0
        }

        .bottom-4 {
            bottom: 1rem
        }

        .left-0 {
            left: 0
        }

        .top-0 {
            top: 0
        }

        .top-\[67px\] {
            top: 67px
        }

        .z-\[1000\] {
            z-index: 1000
        }

        .z-\[100\] {
            z-index: 100
        }

        .my-8 {
            margin-top: 2rem;
            margin-bottom: 2rem
        }

        .mb-12 {
            margin-bottom: 3rem
        }

        .mb-20 {
            margin-bottom: 5rem
        }

        .mb-28 {
            margin-bottom: 7rem
        }

        .mb-4 {
            margin-bottom: 1rem
        }

        .mb-6 {
            margin-bottom: 1.5rem
        }

        .mb-8 {
            margin-bottom: 2rem
        }

        .ml-7 {
            margin-left: 1.75rem
        }

        .ml-8 {
            margin-left: 2rem
        }

        .mt-10 {
            margin-top: 2.5rem
        }

        .mt-12 {
            margin-top: 3rem
        }

        .mt-16 {
            margin-top: 4rem
        }

        .mt-2 {
            margin-top: .5rem
        }

        .mt-20 {
            margin-top: 5rem
        }

        .mt-4 {
            margin-top: 1rem
        }

        .mt-6 {
            margin-top: 1.5rem
        }

        .mt-8 {
            margin-top: 2rem
        }

        .block {
            display: block
        }

        .flex {
            display: flex
        }

        .table {
            display: table
        }

        .hidden {
            display: none
        }

        .h-10 {
            height: 2.5rem
        }

        .h-16 {
            height: 4rem
        }

        .h-4 {
            height: 1rem
        }

        .h-\[1px\] {
            height: 1px
        }

        .h-\[352px\] {
            height: 352px
        }

        .h-\[700px\] {
            height: 700px
        }

        .h-full {
            height: 100%
        }

        .h-screen {
            height: 100vh
        }

        .w-1\/2 {
            width: 50%
        }

        .w-10 {
            width: 2.5rem
        }

        .w-16 {
            width: 4rem
        }

        .w-24 {
            width: 6rem
        }

        .w-32 {
            width: 8rem
        }

        .w-\[250px\] {
            width: 250px
        }

        .w-\[280px\] {
            width: 280px
        }

        .w-\[284px\] {
            width: 284px
        }

        .w-\[300px\] {
            width: 300px
        }

        .w-\[360px\] {
            width: 360px
        }

        .w-\[380px\] {
            width: 380px
        }

        .w-fit {
            width: -moz-fit-content;
            width: fit-content
        }

        .w-full {
            width: 100%
        }

        .translate-x-\[500px\] {
            --tw-translate-x: 500px;
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .transform {
            transform: translate(var(--tw-translate-x), var(--tw-translate-y)) rotate(var(--tw-rotate)) skew(var(--tw-skew-x)) skewY(var(--tw-skew-y)) scaleX(var(--tw-scale-x)) scaleY(var(--tw-scale-y))
        }

        .cursor-pointer {
            cursor: pointer
        }

        .list-disc {
            list-style-type: disc
        }

        .flex-col {
            flex-direction: column
        }

        .flex-wrap {
            flex-wrap: wrap
        }

        .items-start {
            align-items: flex-start
        }

        .items-end {
            align-items: flex-end
        }

        .items-center {
            align-items: center
        }

        .justify-end {
            justify-content: flex-end
        }

        .justify-center {
            justify-content: center
        }

        .justify-between {
            justify-content: space-between
        }

        .gap-1 {
            gap: .25rem
        }

        .gap-10 {
            gap: 2.5rem
        }

        .gap-12 {
            gap: 3rem
        }

        .gap-2 {
            gap: .5rem
        }

        .gap-20 {
            gap: 5rem
        }

        .gap-3 {
            gap: .75rem
        }

        .gap-4 {
            gap: 1rem
        }

        .gap-5 {
            gap: 1.25rem
        }

        .gap-6 {
            gap: 1.5rem
        }

        .gap-\[6px\] {
            gap: 6px
        }

        .gap-y-10 {
            row-gap: 2.5rem
        }

        .rounded-full {
            border-radius: 9999px
        }

        .rounded-lg {
            border-radius: .5rem
        }

        .rounded-t-lg {
            border-top-left-radius: .5rem;
            border-top-right-radius: .5rem
        }

        .border {
            border-width: 1px
        }

        .border-2 {
            border-width: 2px
        }

        .border-b {
            border-bottom-width: 1px
        }

        .border-dashed {
            border-style: dashed
        }

        .border-none {
            border-style: none
        }

        .border-\[\#C9CCCF\] {
            --tw-border-opacity: 1;
            border-color: rgb(201 204 207 / var(--tw-border-opacity))
        }

        .border-\[\#CD7F32\] {
            --tw-border-opacity: 1;
            border-color: rgb(205 127 50 / var(--tw-border-opacity))
        }

        .border-\[\#E4E5E7\] {
            --tw-border-opacity: 1;
            border-color: rgb(228 229 231 / var(--tw-border-opacity))
        }

        .border-b-\[\#C9CCCF\] {
            --tw-border-opacity: 1;
            border-bottom-color: rgb(201 204 207 / var(--tw-border-opacity))
        }

        .bg-\[\#004D80\] {
            --tw-bg-opacity: 1;
            background-color: rgb(0 77 128 / var(--tw-bg-opacity))
        }

        .bg-\[\#121212\] {
            --tw-bg-opacity: 1;
            background-color: rgb(18 18 18 / var(--tw-bg-opacity))
        }

        .bg-\[\#CD7F32\] {
            --tw-bg-opacity: 1;
            background-color: rgb(205 127 50 / var(--tw-bg-opacity))
        }

        .bg-\[\#E1B284\] {
            --tw-bg-opacity: 1;
            background-color: rgb(225 178 132 / var(--tw-bg-opacity))
        }

        .bg-\[\#E4E5E7\] {
            --tw-bg-opacity: 1;
            background-color: rgb(228 229 231 / var(--tw-bg-opacity))
        }

        .bg-\[\#F1F2F3\] {
            --tw-bg-opacity: 1;
            background-color: rgb(241 242 243 / var(--tw-bg-opacity))
        }

        .bg-\[\#F9F9F9\] {
            --tw-bg-opacity: 1;
            background-color: rgb(249 249 249 / var(--tw-bg-opacity))
        }

        .bg-black {
            --tw-bg-opacity: 1;
            background-color: rgb(0 0 0 / var(--tw-bg-opacity))
        }

        .bg-gray-100 {
            --tw-bg-opacity: 1;
            background-color: rgb(243 244 246 / var(--tw-bg-opacity))
        }

        .bg-gray-50 {
            --tw-bg-opacity: 1;
            background-color: rgb(249 250 251 / var(--tw-bg-opacity))
        }

        .bg-transparent {
            background-color: transparent
        }

        .bg-white {
            --tw-bg-opacity: 1;
            background-color: rgb(255 255 255 / var(--tw-bg-opacity))
        }

        .bg-opacity-50 {
            --tw-bg-opacity: .5
        }

        .bg-opacity-60 {
            --tw-bg-opacity: .6
        }

        .bg-cover {
            background-size: cover
        }

        .bg-center {
            background-position: center
        }

        .bg-no-repeat {
            background-repeat: no-repeat
        }

        .p-2 {
            padding: .5rem
        }

        .p-5 {
            padding: 1.25rem
        }

        .px-2 {
            padding-left: .5rem;
            padding-right: .5rem
        }

        .px-3 {
            padding-left: .75rem;
            padding-right: .75rem
        }

        .px-4 {
            padding-left: 1rem;
            padding-right: 1rem
        }

        .px-5 {
            padding-left: 1.25rem;
            padding-right: 1.25rem
        }

        .px-6 {
            padding-left: 1.5rem;
            padding-right: 1.5rem
        }

        .py-0 {
            padding-top: 0;
            padding-bottom: 0
        }

        .py-10 {
            padding-top: 2.5rem;
            padding-bottom: 2.5rem
        }

        .py-14 {
            padding-top: 3.5rem;
            padding-bottom: 3.5rem
        }

        .py-16 {
            padding-top: 4rem;
            padding-bottom: 4rem
        }

        .py-2 {
            padding-top: .5rem;
            padding-bottom: .5rem
        }

        .py-28 {
            padding-top: 7rem;
            padding-bottom: 7rem
        }

        .py-3 {
            padding-top: .75rem;
            padding-bottom: .75rem
        }

        .py-4 {
            padding-top: 1rem;
            padding-bottom: 1rem
        }

        .py-5 {
            padding-top: 1.25rem;
            padding-bottom: 1.25rem
        }

        .py-8 {
            padding-top: 2rem;
            padding-bottom: 2rem
        }

        .py-\[6px\] {
            padding-top: 6px;
            padding-bottom: 6px
        }

        .pb-12 {
            padding-bottom: 3rem
        }

        .pb-40 {
            padding-bottom: 10rem
        }

        .pb-6 {
            padding-bottom: 1.5rem
        }

        .pb-8 {
            padding-bottom: 2rem
        }

        .pl-16 {
            padding-left: 4rem
        }

        .pr-10 {
            padding-right: 2.5rem
        }

        .pt-20 {
            padding-top: 5rem
        }

        .pt-24 {
            padding-top: 6rem
        }

        .pt-5 {
            padding-top: 1.25rem
        }

        .text-center {
            text-align: center
        }

        .font-\[Inter\] {
            font-family: Inter
        }

        .text-2xl {
            font-size: 1.5rem;
            line-height: 2rem
        }

        .text-3xl {
            font-size: 1.875rem;
            line-height: 2.25rem
        }

        .text-4xl {
            font-size: 2.25rem;
            line-height: 2.5rem
        }

        .text-5xl {
            font-size: 3rem;
            line-height: 1
        }

        .text-\[28px\] {
            font-size: 28px
        }

        .text-\[44px\] {
            font-size: 44px
        }

        .text-lg {
            font-size: 1.125rem;
            line-height: 1.75rem
        }

        .text-sm {
            font-size: .875rem;
            line-height: 1.25rem
        }

        .text-xl {
            font-size: 1.25rem;
            line-height: 1.75rem
        }

        .font-light {
            font-weight: 300
        }

        .font-medium {
            font-weight: 500
        }

        .font-semibold {
            font-weight: 600
        }

        .uppercase {
            text-transform: uppercase
        }

        .leading-6 {
            line-height: 1.5rem
        }

        .leading-\[48px\] {
            line-height: 48px
        }

        .text-\[\#121212\] {
            --tw-text-opacity: 1;
            color: rgb(18 18 18 / var(--tw-text-opacity))
        }

        .text-\[\#1D1F21\] {
            --tw-text-opacity: 1;
            color: rgb(29 31 33 / var(--tw-text-opacity))
        }

        .text-\[\#434343\] {
            --tw-text-opacity: 1;
            color: rgb(67 67 67 / var(--tw-text-opacity))
        }

        .text-\[\#53595F\] {
            --tw-text-opacity: 1;
            color: rgb(83 89 95 / var(--tw-text-opacity))
        }

        .text-\[\#AEB2B7\] {
            --tw-text-opacity: 1;
            color: rgb(174 178 183 / var(--tw-text-opacity))
        }

        .text-\[\#CD7F32\] {
            --tw-text-opacity: 1;
            color: rgb(205 127 50 / var(--tw-text-opacity))
        }

        .text-\[\#FFFFFF\],
        .text-\[\#ffffff\] {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .text-gray-800 {
            --tw-text-opacity: 1;
            color: rgb(31 41 55 / var(--tw-text-opacity))
        }

        .text-white {
            --tw-text-opacity: 1;
            color: rgb(255 255 255 / var(--tw-text-opacity))
        }

        .underline {
            text-decoration-line: underline
        }

        .outline-none {
            outline: 2px solid transparent;
            outline-offset: 2px
        }

        .duration-\[300ms\] {
            transition-duration: .3s
        }

        .ease-in {
            transition-timing-function: cubic-bezier(.4, 0, 1, 1)
        }

        body {
            font-family: Archivo, Inter, Arial, Helvetica, sans-serif !important;
            background-color: #f9f9f9 !important
        }

        .accordion-bottom {
            transition: .4s;
            height: 0;
            overflow: hidden;
            opacity: 1;
            padding: 0
        }

        .swiper-slide {
            width: 400px !important
        }

        .service-hidden {
            display: none !important
        }

        @keyframes fade {
            0% {
                opacity: 0
            }

            to {
                opacity: 1
            }
        }

        .accordion.active .accordion-bottom {
            height: -moz-fit-content;
            height: fit-content;
            padding: 10px 60px;
            animation: fade .4s
        }

        .buttons {
            position: relative;
            overflow: hidden
        }

        .buttons .arrow-one {
            position: absolute;
            bottom: 22%;
            right: 7%;
            transition: bottom .3s ease
        }

        .buttons:hover .arrow-one {
            bottom: 100%;
            right: 7%
        }

        .buttons .arrow-two {
            position: absolute;
            bottom: -100%;
            right: 7%;
            transition: bottom .3s ease
        }

        .buttons:hover .arrow-two {
            bottom: 22%;
            right: 7%
        }

        .primary-button {
            position: relative;
            overflow: hidden
        }

        .button .arrow-one {
            position: absolute;
            bottom: 22%;
            right: 25% !important;
            transition: bottom .3s ease
        }

        .button:hover .arrow-one {
            bottom: 100%;
            right: 25% !important
        }

        .button .arrow-two {
            position: absolute;
            bottom: -100%;
            right: 25% !important;
            transition: bottom .3s ease
        }

        .button:hover .arrow-two {
            bottom: 22%;
            right: 25% !important
        }

        @media (max-width: 720px) {
            .accordion.active .accordion-bottom {
                padding: 10px
            }
        }

        .hover\:text-\[\#CD7F32\]:hover {
            --tw-text-opacity: 1;
            color: rgb(205 127 50 / var(--tw-text-opacity))
        }

        @media (min-width: 768px) {
            .md\:mt-6 {
                margin-top: 1.5rem
            }

            .md\:flex {
                display: flex
            }

            .md\:hidden {
                display: none
            }

            .md\:h-full {
                height: 100%
            }

            .md\:w-1\/2 {
                width: 50%
            }

            .md\:w-1\/3 {
                width: 33.333333%
            }

            .md\:w-96 {
                width: 24rem
            }

            .md\:w-\[350px\] {
                width: 350px
            }

            .md\:w-\[482px\] {
                width: 482px
            }

            .md\:w-\[500px\] {
                width: 500px
            }

            .md\:w-\[527px\] {
                width: 527px
            }

            .md\:w-\[800px\] {
                width: 800px
            }

            .md\:w-\[808px\] {
                width: 808px
            }

            .md\:w-\[811px\] {
                width: 811px
            }

            .md\:w-\[840px\] {
                width: 840px
            }

            .md\:w-full {
                width: 100%
            }

            .md\:flex-row {
                flex-direction: row
            }

            .md\:items-start {
                align-items: flex-start
            }

            .md\:items-end {
                align-items: flex-end
            }

            .md\:gap-16 {
                gap: 4rem
            }

            .md\:gap-24 {
                gap: 6rem
            }

            .md\:p-20 {
                padding: 5rem
            }

            .md\:p-8 {
                padding: 2rem
            }

            .md\:px-16 {
                padding-left: 4rem;
                padding-right: 4rem
            }

            .md\:px-20 {
                padding-left: 5rem;
                padding-right: 5rem
            }

            .md\:px-40 {
                padding-left: 10rem;
                padding-right: 10rem
            }

            .md\:px-52 {
                padding-left: 13rem;
                padding-right: 13rem
            }

            .md\:py-1 {
                padding-top: .25rem;
                padding-bottom: .25rem
            }

            .md\:py-16 {
                padding-top: 4rem;
                padding-bottom: 4rem
            }

            .md\:py-24 {
                padding-top: 6rem;
                padding-bottom: 6rem
            }

            .md\:py-28 {
                padding-top: 7rem;
                padding-bottom: 7rem
            }

            .md\:pl-20 {
                padding-left: 5rem
            }

            .md\:pr-5 {
                padding-right: 1.25rem
            }

            .md\:text-left {
                text-align: left
            }

            .md\:font-\[Inter\] {
                font-family: Inter
            }

            .md\:text-2xl {
                font-size: 1.5rem;
                line-height: 2rem
            }

            .md\:text-3xl {
                font-size: 1.875rem;
                line-height: 2.25rem
            }

            .md\:text-5xl {
                font-size: 3rem;
                line-height: 1
            }

            .md\:text-6xl {
                font-size: 3.75rem;
                line-height: 1
            }

            .md\:text-\[19px\] {
                font-size: 19px
            }

            .md\:text-\[60px\] {
                font-size: 60px
            }

            .md\:text-\[64px\] {
                font-size: 64px
            }

            .md\:text-lg {
                font-size: 1.125rem;
                line-height: 1.75rem
            }

            .md\:text-xl {
                font-size: 1.25rem;
                line-height: 1.75rem
            }

            .md\:leading-\[70px\] {
                line-height: 70px
            }
        }

        @media (min-width: 1536px) {
            .\32xl\:w-\[400px\] {
                width: 400px
            }

            .\32xl\:w-\[953px\] {
                width: 953px
            }
        }
    </style>

</head>


<body>
    @include('includes.navbar')

    @yield('content')

    @include('includes.cta')

    @include('includes.footer')




    {{-- Swiper JS --}}
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script>
        const swipers = new Swiper('.swiper-2', {
            direction: 'horizontal',
            loop: true,
            slidesPerView: 1,
            navigation: {
                nextEl: '.swiper-button-next-mod-1',
                prevEl: '.swiper-button-prev-mod-1',
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
    {{-- Swiper JS --}}

    {{-- Service Dropdown --}}
    <script>
        const toggleDropdown = () => {
            const dropdown = document.getElementById("service_dropdown");
            dropdown.classList.toggle("service-hidden");
        }
    </script>
    {{-- Service Dropdown --}}

    {{-- Toggle Mobile Navigation  --}}
    <script>
        const toggleButton = document.querySelectorAll('.menuButton');
        const menu = document.getElementById('menu');

        toggleButton.forEach(function(button) {
            button.addEventListener('click', function() {
                menu.classList.toggle('translate-x-[500px]');
            })
        });
    </script>
    {{-- Toggle Mobile Navigation --}}


    <!-- Accordion Script -->
    <script>
        const accordions = document.getElementsByClassName("accordion");

        for (let i = 0; i < accordions.length; i++) {
            accordions[i].addEventListener("click", function() {
                this.classList.toggle("active");
            });
        }
    </script>
    <!-- Accordion script Ends Here -->

    @yield('script')
</body>

</html>
