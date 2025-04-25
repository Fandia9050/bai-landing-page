<!DOCTYPE html>
<html
    lang="en"
    x-data="{ scrolled: false }"
    x-init="
window.addEventListener('scroll', () => {
  scrolled = window.scrollY > 50
})
"
>
    <head>
        <meta charset="UTF-8" />
        <meta name="viewport" content="width=device-width, initial-scale=1.0" />
        <link
            rel="icon"
            href="{{ asset('/images/bai.png') }}"
            type="image/x-icon"
            sizes="32x20"
        />
        @vite('resources/css/app.css') @vite('resources/css/carousel.css')
        @vite('resources/js/app.js') @vite('resources/js/carousel.js')
        <title>PT BAI - Borneo Alumina Indonesia</title>
    </head>
    <body class="font-sans text-gray-800 bg-[#F0F4F8]">
        <!-- Header -->
        <!-- class="fixed top-0 left-0 w-full backdrop-blur-md shadow-md z-50 bg-[#F0F4F8] text-[#F57C1F] h-[80px] py-6 px-20 text-center flex justify-between items-center" -->
        <header
            x-data="{ mobileOpen: false }"
            x-show="scrolled"
            x-transition:enter="transition transform ease-out duration-500"
            x-transition:enter-start="-translate-y-full opacity-0"
            x-transition:enter-end="translate-y-0 opacity-100"
            x-transition:leave="transition transform ease-in duration-300"
            x-transition:leave-start="translate-y-0 opacity-100"
            x-transition:leave-end="-translate-y-full opacity-0"
            class="fixed top-0 left-0 w-full bg-[#F5F7FA]/90 shadow-md z-50 text-[#F57C1F]"
        >
            <div
                class="flex justify-between items-center h-[80px] px-6 lg:px-20"
            >
                <img src="/images/bai.png" class="w-20 h-10" />

                <!-- Hamburger button -->
                <button
                    @click="mobileOpen = !mobileOpen"
                    class="lg:hidden text-3xl focus:outline-none"
                >
                    ☰
                </button>

                <!-- Desktop nav -->
                <nav class="hidden lg:block">
                    <div class="flex items-center gap-8">
                        <!-- Home -->
                        <a
                            href="#"
                            class="text-[#001E3C] hover:text-[#ff6600] font-medium transition"
                            >Home</a
                        >

                        <!-- About Us -->
                        <div
                            x-data="{ open: false }"
                            @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="relative group"
                        >
                            <button
                                :class="open ? 'text-[#ff6600]' : 'text-[#001E3C]'"
                                class="text-[#001E3C] hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                            >
                                About Us
                                <svg
                                    :class="open ? ' text-orange-500' : 'text-[#001E3C]'"
                                    class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                    viewBox="0 0 320 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    stroke="currentColor"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                    ></path>
                                </svg>
                                <!-- <svg
                                    :class="open ? 'rotate-180 text-orange-500' : 'text-[#001E3C]'"
                                    class="w-4 h-4 transition-transform duration-200"
                                    xmlns="http://www.w3.org/2000/svg"
                                    fill="none"
                                    viewBox="0 0 24 24"
                                    stroke="currentColor"
                                >
                                    <path
                                        stroke-linecap="round"
                                        stroke-linejoin="round"
                                        stroke-width="2"
                                        d="M19 9l-7 7-7-7"
                                    />
                                </svg> -->
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition.opacity.duration.100ms
                                class="absolute top-full left-0 mt-2 w-40 text-black shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] overflow-hidden bg-white rounded"
                            >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Company Profile</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Leadership</a
                                >
                            </div>
                        </div>

                        <!-- Product -->
                        <a
                            href="#"
                            class="text-[#001E3C] hover:text-[#ff6600] font-medium transition"
                            >Product</a
                        >

                        <!-- Sustainability -->
                        <div
                            x-data="{ open: false }"
                            @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="relative"
                        >
                            <button
                                :class="open ? 'text-[#ff6600]' : 'text-[#001E3C]'"
                                class="text-[#001E3C] hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                            >
                                Sustainability
                                <svg
                                    :class="open ? ' text-orange-500' : 'text-[#001E3C]'"
                                    class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                    viewBox="0 0 320 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    stroke="currentColor"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                    ></path>
                                </svg>
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition.opacity.duration.100ms
                                class="absolute top-full left-0 mt-2 w-52 text-black shadow-lg overflow-hidden bg-white rounded-lg"
                            >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Environment</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Social</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Governance</a
                                >
                            </div>
                        </div>

                        <!-- Activities -->
                        <div
                            x-data="{ open: false }"
                            @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="relative"
                        >
                            <button
                                :class="open ? 'text-[#ff6600]' : 'text-[#001E3C]'"
                                class="text-[#001E3C] hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                            >
                                Activities
                                <svg
                                    :class="open ? ' text-orange-500' : 'text-[#001E3C]'"
                                    class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                    viewBox="0 0 320 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    stroke="currentColor"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                    ></path>
                                </svg>
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition.opacity.duration.100ms
                                class="absolute top-full left-0 mt-2 w-48 text-black shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] overflow-hidden bg-white rounded"
                            >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Corporate Actions</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >TJSL</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Institutional Relations</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Gallery</a
                                >
                            </div>
                        </div>

                        <!-- News -->
                        <a
                            href="#"
                            class="text-[#001E3C] hover:text-[#ff6600] font-medium transition"
                            >News</a
                        >

                        <!-- Procurement -->
                        <div
                            x-data="{ open: false }"
                            @mouseenter="open = true"
                            @mouseleave="open = false"
                            class="relative"
                        >
                            <button
                                :class="open ? 'text-[#ff6600]' : 'text-[#001E3C]'"
                                class="text-[#001E3C] hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                            >
                                Procurement
                                <svg
                                    :class="open ? ' text-orange-500' : 'text-[#001E3C]'"
                                    class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                    viewBox="0 0 320 512"
                                    xmlns="http://www.w3.org/2000/svg"
                                    stroke="currentColor"
                                    fill="currentColor"
                                >
                                    <path
                                        d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                    ></path>
                                </svg>
                            </button>
                            <div
                                x-cloak
                                x-show="open"
                                x-transition.opacity.duration.100ms
                                class="absolute top-full left-0 mt-2 w-44 text-black shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] overflow-hidden bg-white rounded"
                            >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Tender Information</a
                                >
                                <a
                                    href="#"
                                    class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                    >Vendor Registration</a
                                >
                            </div>
                        </div>

                        <!-- Career -->
                        <a
                            href="#"
                            class="text-[#001E3C] hover:text-[#ff6600] font-medium transition"
                            >Career</a
                        >

                        <!-- Contact -->
                        <a
                            href="#"
                            class="text-[#001E3C] hover:text-[#ff6600] font-medium transition"
                            >Contact</a
                        >
                    </div>
                </nav>
            </div>

            <!-- Mobile Nav -->
            <div
                x-show="mobileOpen"
                x-transition
                class="lg:hidden px-6 py-4 bg-[#F0F4F8]/90 backdrop-blur-md shadow-md text-[#0E1A34]"
            >
                <!-- Home -->
                <a href="#" class="block font-semibold py-2">Home</a>

                <!-- About Us -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        About Us
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Company Profile</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Leadership</a
                        >
                    </div>
                </div>

                <!-- Our Businesses -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        Our Businesses
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Oil & Gas</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Power</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Mining</a
                        >
                    </div>
                </div>

                <!-- Sustainability -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        Sustainability
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >ESG</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Reports</a
                        >
                    </div>
                </div>

                <!-- Investors -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        Investors
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Financials</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Stock Info</a
                        >
                    </div>
                </div>

                <!-- Publications -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        Publications
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Financials</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Stock Info</a
                        >
                    </div>
                </div>

                <!-- Careers -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        Careers
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Join Us</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Life at Medco</a
                        >
                    </div>
                </div>

                <!-- Contact Us -->
                <div x-data="{ open: false }">
                    <button
                        @click="open = !open"
                        class="w-full text-left font-semibold py-2"
                    >
                        Contact Us
                    </button>
                    <div x-show="open" x-collapse>
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Location</a
                        >
                        <a href="#" class="block px-4 py-1 hover:bg-blue-100"
                            >Support</a
                        >
                    </div>
                </div>
            </div>
        </header>

        <!-- Main Content -->
        <main class="w-full mx-auto space-y-12 pb-10">
            <div class="embla">
                <div class="embla__viewport">
                    <div class="embla__container">
                        <div
                            class="embla__slide h-[70vh] relative text-white md:h-screen bg-cover bg-center"
                        >
                            <!-- Background image -->
                            <div
                                class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{
                                    asset(
                                        '/images/1_Profil-perusahaan-scaled.jpg'
                                    )
                                }}')"
                            ></div>

                            <!-- Overlay (for opacity) -->
                            <div class="absolute inset-0 bg-black/30"></div>

                            <!-- Text content -->
                            <div
                                class="relative px-6 pt-28 md:pt-0 w-full md:!flex z-10 md:w-1/2 divide-y divide-white space-y-10 flex-col items-start md:px-20 justify-center h-full"
                            >
                                <h1
                                    class="text-sm md:text-4xl font-medium pb-5"
                                >
                                    PT BORNEO ALUMINA INDONESIA
                                </h1>
                                <div class="flex flex-col gap-5">
                                    <p
                                        class="text-sm md:text-4xl font-semibold"
                                    >
                                        Latar Belakang
                                    </p>
                                    <p class="text-xs md:text-xl">
                                        Didirikan dan beroperasi berdasarkan
                                        hukum negara Republik Indonesia, akan
                                        mengembangkan, membangun, memiliki,
                                        mengoperasikan dan mengelola Smelter
                                        Grade Alumina Refinery (Proyek SGAR).
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="embla__slide relative h-[70vh] text-white md:h-screen bg-cover bg-center"
                        >
                            <!-- Background image -->
                            <div
                                class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{
                                    asset('/images/2_Produk-scaled.jpg')
                                }}')"
                            ></div>

                            <!-- Overlay (for opacity) -->
                            <div class="absolute inset-0 bg-black/30"></div>

                            <!-- Text content -->
                            <div
                                class="relative px-6 w-full pt-28 md:pt-0 md:!flex z-10 md:w-1/2 divide-y divide-white space-y-10 flex-col items-start md:px-20 justify-center h-full"
                            >
                                <h1
                                    class="text-sm md:text-4xl font-medium pb-5"
                                >
                                    PT BORNEO ALUMINA INDONESIA
                                </h1>
                                <div class="flex flex-col gap-5">
                                    <p
                                        class="text-sm md:text-4xl font-semibold"
                                    >
                                        Rantai Nilai Aluminium
                                    </p>
                                    <p class="text-sm md:text-xl">
                                        Aluminium dapat kita temukan di rumah
                                        yang kita tinggali, mobil, kereta api,
                                        pesawat terbang, telepon seluler,
                                        komputer, dan barang sehari-hari lainnya
                                        dalam desain interior modern.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="embla__slide relative h-[70vh] text-white md:h-screen bg-cover bg-center"
                        >
                            <!-- Background image -->
                            <div
                                class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{
                                    asset('/images/3_keberlanjutan-scaled.jpg')
                                }}')"
                            ></div>

                            <!-- Overlay (for opacity) -->
                            <div class="absolute inset-0 bg-black/30"></div>

                            <!-- Text content -->
                            <div
                                class="relative w-full px-6 z-10 pt-28 md:pt-0 md:w-1/2 divide-y divide-white space-y-10 md:!flex flex-col items-start md:px-20 justify-center h-full"
                            >
                                <h1
                                    class="text-sm md:text-4xl font-medium pb-5"
                                >
                                    PT BORNEO ALUMINA INDONESIA
                                </h1>
                                <div class="flex flex-col gap-5">
                                    <p
                                        class="text-sm md:text-4xl font-semibold"
                                    >
                                        Keberlanjutan
                                    </p>
                                    <p class="text-sm md:text-xl">
                                        Kesejahteraan sosial dan perkembangan
                                        ekonomi regional merupakan fasilitas
                                        bagi Perusahaan untuk mencapai misi,
                                        visi dan nilai-nilainya.
                                    </p>
                                </div>
                            </div>
                        </div>
                        <div
                            class="embla__slide relative h-[70vh] text-white md:h-screen bg-cover bg-center"
                        >
                            <!-- Background image -->
                            <div
                                class="absolute inset-0 bg-cover bg-center"
                                style="background-image: url('{{
                                    asset('/images/4_Aktivitas-scaled.jpg')
                                }}')"
                            ></div>

                            <!-- Overlay (for opacity) -->
                            <div class="absolute inset-0 bg-black/30"></div>

                            <!-- Text content -->
                            <div
                                class="relative w-full px-6 pt-28 md:pt-0 md:!flex z-10 md:w-1/2 divide-y divide-white space-y-10 flex-col items-start md:px-20 justify-center h-full"
                            >
                                <h1
                                    class="text-sm md:text-4xl font-medium pb-5"
                                >
                                    PT BORNEO ALUMINA INDONESIA
                                </h1>
                                <div class="flex flex-col gap-5">
                                    <p
                                        class="text-sm md:text-4xl font-semibold"
                                    >
                                        Aktivitas
                                    </p>
                                    <p class="text-sm md:text-xl">
                                        Kami secara aktif berupaya mendorong
                                        pertumbuhan berkelanjutan, memberdayakan
                                        masyarakat, dan menciptakan dampak
                                        positif melalui program-program kami.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <header
                        class="absolute top-0 left-0 w-full z-30 text-white transition-opacity duration-500"
                        x-show="!scrolled"
                        x-transition:enter="transition ease-out duration-300"
                        x-transition:enter-start="opacity-0"
                        x-transition:enter-end="opacity-100"
                        x-transition:leave="transition ease-in duration-300"
                        x-transition:leave-start="opacity-100"
                        x-transition:leave-end="opacity-0"
                    >
                        <div
                            class="flex justify-between items-center h-[80px] px-6 lg:px-20"
                        >
                            <img src="/images/bai.png" class="w-20 h-10" />

                            <!-- Hamburger button -->
                            <button
                                @click="mobileOpen = !mobileOpen"
                                class="lg:hidden text-3xl focus:outline-none"
                            >
                                ☰
                            </button>

                            <!-- Desktop nav -->
                            <nav class="hidden lg:block">
                                <div class="flex items-center gap-8">
                                    <!-- Home -->
                                    <a
                                        href="#"
                                        class="text-white hover:text-[#ff6600] font-medium transition"
                                        >Home</a
                                    >

                                    <!-- About Us -->
                                    <div
                                        x-data="{ open: false }"
                                        @mouseenter="open = true"
                                        @mouseleave="open = false"
                                        class="relative group"
                                    >
                                        <button
                                            :class="open ? 'text-[#ff6600]' : 'text-white'"
                                            class="text-white hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                                        >
                                            About Us
                                            <svg
                                                :class="open ? ' text-orange-500' : 'text-white'"
                                                class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                                viewBox="0 0 320 512"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke="currentColor"
                                                fill="currentColor"
                                            >
                                                <path
                                                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                                ></path>
                                            </svg>
                                            <!-- <svg
                                        :class="open ? 'rotate-180 text-orange-500' : 'text-white'"
                                        class="w-4 h-4 transition-transform duration-200"
                                        xmlns="http://www.w3.org/2000/svg"
                                        fill="none"
                                        viewBox="0 0 24 24"
                                        stroke="currentColor"
                                    >
                                        <path
                                            stroke-linecap="round"
                                            stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M19 9l-7 7-7-7"
                                        />
                                    </svg> -->
                                        </button>
                                        <div
                                            x-cloak
                                            x-show="open"
                                            x-transition.opacity.duration.100ms
                                            class="absolute top-full left-0 mt-2 w-40 text-black shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] overflow-hidden bg-white rounded"
                                        >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Company Profile</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Leadership</a
                                            >
                                        </div>
                                    </div>

                                    <!-- Product -->
                                    <a
                                        href="#"
                                        class="text-white hover:text-[#ff6600] font-medium transition"
                                        >Product</a
                                    >

                                    <!-- Sustainability -->
                                    <div
                                        x-data="{ open: false }"
                                        @mouseenter="open = true"
                                        @mouseleave="open = false"
                                        class="relative"
                                    >
                                        <button
                                            :class="open ? 'text-[#ff6600]' : 'text-white'"
                                            class="text-white hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                                        >
                                            Sustainability
                                            <svg
                                                :class="open ? ' text-orange-500' : 'text-white'"
                                                class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                                viewBox="0 0 320 512"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke="currentColor"
                                                fill="currentColor"
                                            >
                                                <path
                                                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <div
                                            x-cloak
                                            x-show="open"
                                            x-transition.opacity.duration.100ms
                                            class="absolute top-full left-0 mt-2 w-52 text-black shadow-lg overflow-hidden bg-white rounded-lg"
                                        >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Environment</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Social</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Governance</a
                                            >
                                        </div>
                                    </div>

                                    <!-- Activities -->
                                    <div
                                        x-data="{ open: false }"
                                        @mouseenter="open = true"
                                        @mouseleave="open = false"
                                        class="relative"
                                    >
                                        <button
                                            :class="open ? 'text-[#ff6600]' : 'text-white'"
                                            class="text-white hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                                        >
                                            Activities
                                            <svg
                                                :class="open ? ' text-orange-500' : 'text-white'"
                                                class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                                viewBox="0 0 320 512"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke="currentColor"
                                                fill="currentColor"
                                            >
                                                <path
                                                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <div
                                            x-cloak
                                            x-show="open"
                                            x-transition.opacity.duration.100ms
                                            class="absolute top-full left-0 mt-2 w-48 text-black shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] overflow-hidden bg-white rounded"
                                        >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Corporate Actions</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >TJSL</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Institutional Relations</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Gallery</a
                                            >
                                        </div>
                                    </div>

                                    <!-- News -->
                                    <a
                                        href="#"
                                        class="text-white hover:text-[#ff6600] font-medium transition"
                                        >News</a
                                    >

                                    <!-- Procurement -->
                                    <div
                                        x-data="{ open: false }"
                                        @mouseenter="open = true"
                                        @mouseleave="open = false"
                                        class="relative"
                                    >
                                        <button
                                            :class="open ? 'text-[#ff6600]' : 'text-white'"
                                            class="text-white hover:text-[#ff6600] font-medium transition cursor-pointer flex items-center gap-2"
                                        >
                                            Procurement
                                            <svg
                                                :class="open ? ' text-orange-500' : 'text-white'"
                                                class="e-font-icon-svg e-fas-caret-down w-4 h-4"
                                                viewBox="0 0 320 512"
                                                xmlns="http://www.w3.org/2000/svg"
                                                stroke="currentColor"
                                                fill="currentColor"
                                            >
                                                <path
                                                    d="M31.3 192h257.3c17.8 0 26.7 21.5 14.1 34.1L174.1 354.8c-7.8 7.8-20.5 7.8-28.3 0L17.2 226.1C4.6 213.5 13.5 192 31.3 192z"
                                                ></path>
                                            </svg>
                                        </button>
                                        <div
                                            x-cloak
                                            x-show="open"
                                            x-transition.opacity.duration.100ms
                                            class="absolute top-full left-0 mt-2 w-44 text-black shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] overflow-hidden bg-white rounded"
                                        >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Tender Information</a
                                            >
                                            <a
                                                href="#"
                                                class="flex items-center gap-2 px-5 py-3 text-sm hover:bg-orange-50 text-gray-800 hover:text-[#ff6600] transition-colors duration-150"
                                                >Vendor Registration</a
                                            >
                                        </div>
                                    </div>

                                    <!-- Career -->
                                    <a
                                        href="#"
                                        class="text-white hover:text-[#ff6600] font-medium transition"
                                        >Career</a
                                    >

                                    <!-- Contact -->
                                    <a
                                        href="#"
                                        class="text-white hover:text-[#ff6600] font-medium transition"
                                        >Contact</a
                                    >
                                </div>
                            </nav>
                        </div>
                    </header>
                    <div
                        class="embla__controls !hidden md:!block absolute bottom-10 left-10"
                    >
                        <button
                            class="embla__prev absolute w-8 h-8 p-2 rounded-full bg-[#F0F4F8] flex items-center justify-center cursor-pointer bottom-10 left-10"
                        >
                            <svg
                                class="embla__button__svg"
                                viewBox="0 0 532 532"
                            >
                                <path
                                    fill="black"
                                    d="M355.66 11.354c13.793-13.805 36.208-13.805 50.001 0 13.785 13.804 13.785 36.238 0 50.034L201.22 266l204.442 204.61c13.785 13.805 13.785 36.239 0 50.044-13.793 13.796-36.208 13.796-50.002 0a5994246.277 5994246.277 0 0 0-229.332-229.454 35.065 35.065 0 0 1-10.326-25.126c0-9.2 3.393-18.26 10.326-25.2C172.192 194.973 332.731 34.31 355.66 11.354Z"
                                ></path>
                            </svg>
                        </button>
                        <div
                            class="embla__dots absolute bottom-[35px] left-[70px]"
                        ></div>
                        <button
                            class="embla__next absolute w-8 h-8 rounded-full p-2 bg-[#F0F4F8] flex items-center justify-center cursor-pointer bottom-10 left-[235px]"
                        >
                            <svg
                                class="embla__button__svg"
                                viewBox="0 0 532 532"
                            >
                                <path
                                    fill="black"
                                    d="M176.34 520.646c-13.793 13.805-36.208 13.805-50.001 0-13.785-13.804-13.785-36.238 0-50.034L330.78 266 126.34 61.391c-13.785-13.805-13.785-36.239 0-50.044 13.793-13.796 36.208-13.796 50.002 0 22.928 22.947 206.395 206.507 229.332 229.454a35.065 35.065 0 0 1 10.326 25.126c0 9.2-3.393 18.26-10.326 25.2-45.865 45.901-206.404 206.564-229.332 229.52Z"
                                ></path>
                            </svg>
                        </button>
                    </div>
                </div>
            </div>

            <section class="bg-[#F0F4F8] px-6 py-3 md:py-5 md:px-20 mx-auto">
                <!-- Industry Cards -->
                <div>
                    <div class="flex flex-col justify-between mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900">
                            Our Project
                        </h2>
                        <p class="text-gray-400 text-sm">
                            Kami membangun dan mengembangkan lingkungan masa
                            depan untuk menyeimbangkan pekerjaan dan kehidupan.
                            Lokasi pabrik berada di Desa Bukit Batu, Sungai
                            Kunyit, Kab. Mempawah, Kalimantan Barat, Indonesia
                        </p>
                    </div>
                    <div class="grid grid-cols-1 md:grid-cols-2 gap-6 mb-10">
                        <!-- Card -->
                        <div
                            class="relative overflow-hidden rounded-2xl shadow-md group hover:scale-[1.01] transition-transform duration-300"
                        >
                            <img
                                src="/images/ilustration-1.jpg"
                                alt="Oil & Gas"
                                class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300"
                            />
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center"
                            >
                                <div
                                    class="text-white text-xl font-semibold flex items-center space-x-2"
                                >
                                    <img
                                        src="/icons/oil-gas-icon.svg"
                                        alt="Oil icon"
                                        class="w-6 h-6"
                                    />
                                    <span>Coal Gas Plan</span>
                                </div>
                            </div>
                        </div>

                        <!-- Power -->
                        <div
                            class="relative rounded-xl overflow-hidden shadow-md group"
                        >
                            <img
                                src="/images/ilustration-2.jpeg"
                                alt="Power"
                                class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300"
                            />
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center"
                            >
                                <span class="text-white text-xl font-semibold"
                                    >Utility Facility</span
                                >
                            </div>
                        </div>

                        <!-- Alumina Plant -->
                        <div
                            class="relative rounded-xl overflow-hidden shadow-md group"
                        >
                            <img
                                src="/images/ilustration-3.jpg"
                                alt="Copper & Gold Mining"
                                class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300"
                            />
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center"
                            >
                                <span class="text-white text-xl font-semibold"
                                    >Alumina Plant</span
                                >
                            </div>
                        </div>

                        <!-- Power Plan -->
                        <div
                            class="relative rounded-xl overflow-hidden shadow-md group"
                        >
                            <img
                                src="/images/ilustration-3.jpg"
                                alt="Copper & Gold Mining"
                                class="w-full h-96 object-cover group-hover:scale-105 transition-transform duration-300"
                            />
                            <div
                                class="absolute inset-0 bg-black/40 flex items-center justify-center"
                            >
                                <span class="text-white text-xl font-semibold"
                                    >Power Plant</span
                                >
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Press Releases Section -->
                <div class="border-t pt-8">
                    <div class="flex justify-between items-center mb-6">
                        <h2 class="text-2xl font-semibold text-gray-900">
                            Press Releases
                        </h2>
                        <a
                            href="#"
                            class="text-[#F57C1F] font-medium text-sm hover:underline"
                            >View All Press Releases</a
                        >
                    </div>

                    <div
                        class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-6 text-sm text-gray-800"
                    >
                        <!-- Item -->
                        <div>
                            <p class="text-gray-400 mb-1">
                                Tuesday, 04/08/2025
                            </p>
                            <p
                                class="font-semibold hover:underline cursor-pointer"
                            >
                                BAI Confirms US$50 Million Share Buyback
                            </p>
                        </div>
                        <!-- Item -->
                        <div>
                            <p class="text-gray-400 mb-1">Friday, 03/28/2025</p>
                            <p
                                class="font-semibold hover:underline cursor-pointer"
                            >
                                BAI Announces Its Audited Full Year 2024 Results
                            </p>
                        </div>
                        <!-- Item -->
                        <div>
                            <p class="text-gray-400 mb-1">
                                Tuesday, 03/25/2025
                            </p>
                            <p
                                class="font-semibold hover:underline cursor-pointer"
                            >
                                BAI Announces Share Buyback Program
                            </p>
                        </div>
                        <!-- Item -->
                        <div>
                            <p class="text-gray-400 mb-1">
                                Wednesday, 03/19/2025
                            </p>
                            <p
                                class="font-semibold hover:underline cursor-pointer"
                            >
                                BAI Completes Rebonjaro 3D Seismic Acquisition
                                in Corridor Block
                            </p>
                        </div>
                    </div>

                    <!-- Navigation Arrows -->
                    <div class="mt-6 flex justify-end space-x-2">
                        <button
                            class="w-9 h-9 rounded-full border border-gray-300 text-gray-500 flex items-center justify-center hover:bg-gray-100"
                        >
                            <svg
                                class="w-4 h-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M15 19l-7-7 7-7"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                        <button
                            class="w-9 h-9 rounded-full border border-gray-300 text-blue-700 flex items-center justify-center hover:bg-gray-100"
                        >
                            <svg
                                class="w-4 h-4"
                                fill="none"
                                stroke="currentColor"
                                viewBox="0 0 24 24"
                            >
                                <path
                                    d="M9 5l7 7-7 7"
                                    stroke-width="2"
                                    stroke-linecap="round"
                                    stroke-linejoin="round"
                                />
                            </svg>
                        </button>
                    </div>
                </div>
            </section>

            <!-- Businesses Section -->
            <div
                class="px-6 py-3 md:py-10 md:px-20 mx-auto bg-[#F0F4F8] min-h-screen"
            >
                <div class="grid grid-cols-1 lg:grid-cols-3 gap-6">
                    <!-- Stock Card -->
                    <div
                        class="bg-[#001E3C] shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] text-white rounded-xl p-6 relative overflow-hidden"
                    >
                        <h2 class="text-2xl font-semibold">Stock</h2>
                        <p class="text-sm text-blue-100">
                            17/04/2025 - (Trailing 20 days)
                        </p>

                        <!-- Fake background chart -->
                        <div
                            class="absolute inset-0 opacity-20 bg-cover bg-center"
                            style="
                                background-image: url('/images/chart-bg.png');
                            "
                        ></div>

                        <div class="relative space-y-4 mt-10">
                            <div
                                class="flex justify-between border-t border-blue-500 pt-4"
                            >
                                <span>MEDC-IDX (IDR)</span>
                                <span class="font-bold text-white text-lg"
                                    >1,020</span
                                >
                            </div>
                            <div
                                class="flex justify-between border-t border-blue-500 pt-4"
                            >
                                <span>Market Cap <br />(Trillion IDR)</span>
                                <span class="font-bold text-white text-lg"
                                    >25.6</span
                                >
                            </div>
                            <div
                                class="flex justify-between border-t border-blue-500 pt-4"
                            >
                                <span>Volume <br />(lot)</span>
                                <span class="font-bold text-white text-lg"
                                    >313,948</span
                                >
                            </div>
                        </div>
                    </div>

                    <!-- Publications -->
                    <div class="lg:col-span-2 space-y-4">
                        <div class="flex justify-between items-center">
                            <h2 class="text-2xl font-semibold">Publications</h2>
                            <a
                                href="#"
                                class="text-[#F57C1F] text-sm hover:underline"
                                >View All Publications</a
                            >
                        </div>

                        <!-- List items -->
                        <div class="space-y-4">
                            <div
                                class="bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-4 flex items-start space-x-3 group cursor-pointer"
                            >
                                <div>
                                    <img
                                        src="/images/book.svg"
                                        class="w-6 h-6"
                                    />
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold group-hover:text-[#F57C1F]"
                                    >
                                        Prospectus Shelf-Registered IDR Bonds V
                                        2025 Phase 3
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Complete Public Bond information
                                        submitted to the OJK
                                    </p>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-4 flex items-start space-x-3 group cursor-pointer"
                            >
                                <div>
                                    <img
                                        src="/images/book.svg"
                                        class="w-6 h-6"
                                    />
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold group-hover:text-[#F57C1F]"
                                    >
                                        BAI Capital Markets Day Presentation
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Investor presentation highlighting the
                                        Company’s achievements
                                    </p>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-4 flex items-start space-x-3 group cursor-pointer"
                            >
                                <div>
                                    <img
                                        src="/images/book.svg"
                                        class="w-6 h-6"
                                    />
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold group-hover:text-[#F57C1F]"
                                    >
                                        BAI Public Expose 2024 Presentation
                                        Material
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Corporate action disclosures submitted
                                        to the OJK
                                    </p>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-4 flex items-start space-x-3 group cursor-pointer"
                            >
                                <div>
                                    <img
                                        src="/images/book.svg"
                                        class="w-6 h-6"
                                    />
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold group-hover:text-[#F57C1F]"
                                    >
                                        Company Profile 2024
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Overview of the company’s business,
                                        mission, and strategic initiatives
                                    </p>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-4 flex items-start space-x-3 group cursor-pointer"
                            >
                                <div>
                                    <img
                                        src="/images/book.svg"
                                        class="w-6 h-6"
                                    />
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold group-hover:text-[#F57C1F]"
                                    >
                                        Sustainability Report 2023
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Summary of our ESG performance and
                                        achievements
                                    </p>
                                </div>
                            </div>

                            <div
                                class="bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-4 flex items-start space-x-3 group cursor-pointer"
                            >
                                <div>
                                    <img
                                        src="/images/book.svg"
                                        class="w-6 h-6"
                                    />
                                </div>
                                <div>
                                    <h3
                                        class="font-semibold group-hover:text-[#F57C1F]"
                                    >
                                        Annual Report 2023
                                    </h3>
                                    <p class="text-sm text-gray-600">
                                        Comprehensive report on the Company’s
                                        activities throughout the year
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Whistleblower Section -->
                <div
                    class="mt-8 bg-white rounded-xl shadow-[inset_0px_-3px_5px_-2px_rgba(255,_255,_255,_0.5)] p-6"
                >
                    <h3 class="text-xl font-semibold mb-2">Whistleblower</h3>
                    <p class="text-gray-600 mb-4">
                        Ensuring BAI is a safe, fair and honest place to work.
                    </p>
                    <button
                        class="bg-[#ff6600] text-white px-4 py-2 rounded hover:bg-[#F57C1F]/90 cursor-pointer transition"
                    >
                        Blow the whistle on misconduct
                    </button>
                </div>
            </div>
        </main>

        <!-- Footer -->
        <footer class="bg-[#001E3C] text-white px-6 md:px-20 py-10">
            <div class="mx-auto grid grid-cols-1 md:grid-cols-3 gap-8">
                <!-- Column 1: Logo + Description -->
                <div>
                    <img
                        src="/images/bai.png"
                        alt="BAI Logo"
                        class="h-16 mb-4"
                    />
                    <p class="text-sm text-gray-300">
                        PT Borneo Alumina Indonesia (PT BAI) adalah anak
                        perusahaan BUMN yang beroperasi berdasarkan hukum
                        Republik Indonesia.
                    </p>
                </div>

                <!-- Column 2: Quick Links -->
                <div>
                    <h4 class="font-semibold mb-3 text-white">Quick Links</h4>
                    <ul class="space-y-2 text-sm text-gray-300">
                        <li>
                            <a href="/about" class="hover:text-white"
                                >About Us</a
                            >
                        </li>
                        <li>
                            <a href="/business" class="hover:text-white"
                                >Our Businesses</a
                            >
                        </li>
                        <li>
                            <a href="/sustainability" class="hover:text-white"
                                >Sustainability</a
                            >
                        </li>
                        <li>
                            <a href="/careers" class="hover:text-white"
                                >Careers</a
                            >
                        </li>
                    </ul>
                </div>

                <!-- Column 3: Contact -->
                <div>
                    <h4 class="font-semibold mb-3 text-white">Contact</h4>
                    <p class="text-sm text-gray-300">
                        The Energy Building 53rd Fl.<br />Jl. Jend. Sudirman,
                        Jakarta 12190
                    </p>
                    <p class="mt-2 text-sm text-gray-300">
                        Phone:
                        <a href="tel:+622129953000" class="hover:text-white"
                            >+62 21 2995 3000</a
                        >
                    </p>
                </div>
            </div>

            <!-- Bottom -->
            <div
                class="mt-10 border-t border-gray-700 pt-6 text-center text-xs text-gray-400"
            >
                © 2025 PT Borneo Alumina Indonesia. All Rights Reserved.
            </div>
        </footer>
    </body>
</html>
