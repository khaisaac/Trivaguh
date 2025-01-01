@extends('layouts.app')

@section('include')
    <div id="Background" class="absolute top-0 w-full h-[810px] bg-[linear-gradient(180deg,#85C8FF_0%,#D4D1FE_47.05%,#F3F6FD_100%)]">
        <img src="{{ asset('assets/images/backgrounds/Jumbo Jet Sky (1) 1.png') }}" class="absolute right-0 top-[147px] object-contain max-h-[481px]" alt="background image">
    </div>
@endsection

@section('content')
   <main class="relative flex flex-col w-full max-w-[1280px] px-[75px] mx-auto mt-[50px] mb-[62px]">
        <a href="choose-seats-economy.html"
            class="flex items-center rounded-[50px] py-3 px-5 gap-[10px] w-fit bg-garuda-black">
            <img src="assets/images/icons/arrow-left-white.svg" class="w-6 h-6" alt="icon">
            <p class="font-semibold text-white">Back to Choose Seats</p>
        </a>
        <h1 class="font-extrabold text-[50px] leading-[75px] mt-[30px]">Passenger Details</h1>
        <div class="flex gap-[30px] mt-[30px]">
            <div id="Left-Content" class="flex flex-col gap-[30px] w-[470px] shrink-0">
                <div id="Flight-Info"
                    class="accordion group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden has-[:checked]:!h-[75px] transition-all duration-300">
                    <label class="flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Your Flight</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="w-9 h-8 group-has-[:checked]:rotate-180 transition-all duration-300" alt="icon">
                        <input type="checkbox" class="hidden">
                    </label>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-garuda-grey">Departure</p>
                                <p class="font-semibold text-lg">Jakarta (CGK)</p>
                            </div>
                            <div class="text-end">
                                <p class="text-sm text-garuda-grey">Arrival</p>
                                <p class="font-semibold text-lg">Tokyo (HND)</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-garuda-grey">Date</p>
                                <p class="font-semibold text-lg">15 Sep 2024</p>
                            </div>
                            <div class="text-end">
                                <p class="text-sm text-garuda-grey">Quantity</p>
                                <p class="font-semibold text-lg">3 people</p>
                            </div>
                        </div>
                        <div class="flex flex-col rounded-[20px] border border-[#E8EFF7] p-5 gap-5">
                            <div class="flex flex-col gap-4">
                                <div class="flex items-center justify-between">
                                    <div class="flex items-center gap-[10px]">
                                        <img src="assets/images/logos/ana.svg" class="h-[100px] flex shrink-0"
                                            alt="logo">
                                    </div>
                                    <a href="#"
                                        class="flex items-center rounded-[50px] py-3 px-5 gap-[10px] w-fit bg-garuda-black">
                                        <p class="font-semibold text-white">Details</p>
                                    </a>
                                </div>
                                <div class="flex items-center justify-between">
                                    <div>
                                        <p class="font-semibold">Angga Air</p>
                                        <p class="text-sm text-garuda-grey mt-[2px]">08:30 - 12:00</p>
                                    </div>
                                    <div class="flex flex-col gap-[2px] items-center justify-center">
                                        <p class="text-sm text-garuda-grey">12 hours</p>
                                        <div class="flex items-center gap-[6px]">
                                            <p class="font-semibold">CGK</p>
                                            <img src="assets/images/icons/transit-black.svg" alt="icon">
                                            <p class="font-semibold">HND</p>
                                        </div>
                                        <p class="text-sm text-garuda-grey">Transit 1x</p>
                                    </div>
                                    <p class="font-semibold text-garuda-green text-center">Rp 4.560.341</p>
                                </div>
                            </div>
                            <hr class="border-[#E8EFF7]">
                            <div class="flex items-center rounded-[20px] gap-[14px]">
                                <div class="flex w-[120px] h-[100px] shrink-0 rounded-[20px] overflow-hidden">
                                    <img src="assets/images/thumbnails/economy-seat.png"
                                        class="w-full h-full object-cover" alt="icon">
                                </div>
                                <div>
                                    <p class="font-bold text-xl leading-[30px]">Economy Class</p>
                                    <p class="text-garuda-grey mt-1">Rp 1.560.490</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="Transaction-Info"
                    class="accordion group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden has-[:checked]:!h-[75px] transition-all duration-300">
                    <label class="flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Transaction Details</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="w-9 h-8 group-has-[:checked]:rotate-180 transition-all duration-300" alt="icon">
                        <input type="checkbox" class="hidden">
                    </label>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-garuda-grey">Quantity</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">3 People</p>
                            </div>
                            <div>
                                <p class="text-sm text-garuda-grey">Tiers</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">Economy</p>
                            </div>
                            <div>
                                <p class="text-sm text-garuda-grey">Seats</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">A1, C6, D2</p>
                            </div>
                        </div>
                        <div class="flex justify-between">
                            <div>
                                <p class="text-sm text-garuda-grey">Price</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">Rp 1.560.490</p>
                            </div>
                            <div>
                                <p class="text-sm text-garuda-grey">Govt. Tax</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">11%</p>
                            </div>
                            <div>
                                <p class="text-sm text-garuda-grey">Sub Total</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">Rp 4.849.392</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-garuda-grey">Discount</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px] text-garuda-green">-Rp 5.000.000
                                </p>
                            </div>
                            <div>
                                <p class="text-sm text-garuda-grey">Promo Code</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">MERDEKA</p>
                            </div>
                        </div>
                        <div class="flex justify-between items-center">
                            <div>
                                <p class="text-sm text-garuda-grey">Total Tax</p>
                                <p class="font-semibold text-lg leading-[27px] mt-[2px]">Rp 3.560.490</p>
                            </div>
                            <div>
                                <p class="text-sm text-garuda-grey">Grand Total</p>
                                <p class="font-bold text-2xl leading-9 text-garuda-blue mt-[2px]">Rp 844.849.392</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <form action="success-booking.html" id="Right-Content" class="flex flex-col gap-[30px] w-[490px] shrink-0">
                <div id="Customer-Info"
                    class="accordion group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden has-[:checked]:!h-[75px] transition-all duration-300">
                    <label class="flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Customer Information</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="w-9 h-8 group-has-[:checked]:rotate-180 transition-all duration-300" alt="icon">
                        <input type="checkbox" class="hidden">
                    </label>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Complete Name</p>
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/profile-black.svg" class="w-5 flex shrink-0" alt="icon">
                                <input type="text" name="" id="" value="Angga Putra Setiawan" readonly
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Write your complete name">
                            </div>
                        </label>
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Email Address</p>
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/sms-black.png" class="w-5 flex shrink-0" alt="icon">
                                <input type="email" name="" id="" value="angga@great.com" readonly
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Write your valid email">
                            </div>
                        </label>
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Phone No.</p>
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/call-black.svg" class="w-5 flex shrink-0" alt="icon">
                                <input type="tel" name="" id="" value="628123123123" readonly
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Write your active number">
                            </div>
                        </label>
                    </div>
                </div>
                <!-- for accordions with select input inside, the script was different from the normal accordion -->
                <div id="Passenger-1"
                    class="accordion-with-select group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden transition-all duration-300">
                    <button type="button" class="accordion-btn flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Passenger 1</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="arrow w-9 h-8 transition-all duration-300" alt="icon">
                    </button>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Complete Name</p>
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/profile-black.svg" class="w-5 flex shrink-0" alt="icon">
                                <input type="text" name="" id="" value="Angga Putra Setiawan" readonly
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Write your complete name">
                            </div>
                        </label>
                        <div class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Date of Birth</p>
                            <div class="flex items-center gap-[10px]">
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select day-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>21</option>
                                    </select>
                                </label>
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select month-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>08</option>
                                    </select>
                                </label>
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select year-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>1995</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Nationality</p>
                            <div
                                class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/global-black.svg"
                                    class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0" alt="icon">
                                <select name="" id=""
                                    class="appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                    <option selected>Indonesia</option>
                                </select>
                            </div>
                        </label>
                    </div>
                </div>
                <div id="Passenger-2"
                    class="accordion-with-select group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden transition-all duration-300">
                    <button type="button" class="accordion-btn flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Passenger 2</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="arrow w-9 h-8 transition-all duration-300" alt="icon">
                    </button>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Complete Name</p>
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/profile-black.svg" class="w-5 flex shrink-0" alt="icon">
                                <input type="text" name="" id="" value="Angga Putra Setiawan" readonly
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Write your complete name">
                            </div>
                        </label>
                        <div class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Date of Birth</p>
                            <div class="flex items-center gap-[10px]">
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select day-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>21</option>
                                    </select>
                                </label>
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select month-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>08</option>
                                    </select>
                                </label>
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select year-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>1995</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Nationality</p>
                            <div
                                class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/global-black.svg"
                                    class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0" alt="icon">
                                <select name="" id=""
                                    class="appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                    <option selected>Indonesia</option>
                                </select>
                            </div>
                        </label>
                    </div>
                </div>
                <div id="Passenger-3"
                    class="accordion-with-select group flex flex-col h-fit rounded-[20px] bg-white overflow-hidden transition-all duration-300">
                    <button type="button" class="accordion-btn flex items-center justify-between p-5">
                        <h2 class="font-bold text-xl leading-[30px]">Passenger 3</h2>
                        <img src="assets/images/icons/arrow-up-circle-black.svg"
                            class="arrow w-9 h-8 transition-all duration-300" alt="icon">
                    </button>
                    <div class="accordion-content p-5 pt-0 flex flex-col gap-5">
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Complete Name</p>
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/profile-black.svg" class="w-5 flex shrink-0" alt="icon">
                                <input type="text" name="" id="" value="Angga Putra Setiawan" readonly
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Write your complete name">
                            </div>
                        </label>
                        <div class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Date of Birth</p>
                            <div class="flex items-center gap-[10px]">
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select day-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>21</option>
                                    </select>
                                </label>
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select month-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>08</option>
                                    </select>
                                </label>
                                <label
                                    class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                    <img src="assets/images/icons/note-add-black.svg"
                                        class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0"
                                        alt="icon">
                                    <select id="" name=""
                                        class="date-select year-select appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                        <option selected>1995</option>
                                    </select>
                                </label>
                            </div>
                        </div>
                        <label class="flex flex-col gap-[10px]">
                            <p class="font-semibold">Nationality</p>
                            <div
                                class="relative flex items-center w-full rounded-full overflow-hidden border border-garuda-black gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/global-black.svg"
                                    class="absolute transform -translate-y-1/2 top-1/2 left-5 w-5 shrink-0" alt="icon">
                                <select name="" id=""
                                    class="appearance-none w-full outline-none pl-[50px] py-3 px-5 font-semibold indeterminate:!font-normal pointer-events-none">
                                    <option selected>Indonesia</option>
                                </select>
                            </div>
                        </label>
                    </div>
                </div>
                <div id="Promo" class="flex flex-col rounded-[20px] p-5 gap-5 bg-white overflow-hidden">
                    <h2 class="font-bold text-xl leading-[30px]">Apply Promo</h2>
                    <label class="flex flex-col gap-[10px]">
                        <p class="font-semibold">Your Promo Code</p>
                        <div class="flex items-center flex-nowrap gap-[10px]">
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/receipt-discount-black.svg" class="w-5 flex shrink-0"
                                    alt="icon">
                                <input type="text" name="" id=""
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Input promo code">
                                <img src="assets/images/icons/verify.svg" class="w-5 flex shrink-0" alt="icon">
                            </div>
                            <span class="font-semibold text-garuda-green text-nowrap">Kode promo tersedia</span>
                        </div>
                    </label>
                    <label class="flex flex-col gap-[10px]">
                        <p class="font-semibold">Your Promo Code</p>
                        <div class="flex items-center flex-nowrap gap-[10px]">
                            <div
                                class="flex items-center rounded-full border border-garuda-black py-3 px-5 gap-[10px] focus-within:border-[#0068FF] transition-all duration-300">
                                <img src="assets/images/icons/receipt-discount-black.svg" class="w-5 flex shrink-0"
                                    alt="icon">
                                <input type="text" name="" id=""
                                    class="appearance-none outline-none w-full font-semibold placeholder:font-normal"
                                    placeholder="Input promo code">
                            </div>
                            <span class="font-semibold text-garuda-red text-nowrap">Kode promo tidak tersedia</span>
                        </div>
                    </label>
                </div>
                <div id="Payment-Method" class="flex flex-col rounded-[20px] p-5 gap-5 bg-white overflow-hidden">
                    <h2 class="font-bold text-xl leading-[30px]">Payment Method</h2>
                    <div class="flex flex-col gap-[10px]">
                        <p class="font-semibold">Choose Payment</p>
                        <div class="flex items-center flex-nowrap gap-[10px]">
                            <label
                                class="group relative flex items-center w-full rounded-full py-3 px-5 bg-garuda-bg-dark-grey gap-[10px] has-[:checked]:bg-garuda-orange transition-all duration-300">
                                <img src="assets/images/icons/note-add-black.svg"
                                    class="w-5 flex shrink-0 group-has-[:checked]:invert transition-all duration-300"
                                    alt="icon">
                                <span class="font-semibold group-has-[:checked]:text-white">Midtrans Gateway</span>
                                <input type="radio" name="payment-method" class="absolute opacity-0 left-1/2" required>
                            </label>
                            <label
                                class="group relative flex items-center w-full rounded-full py-3 px-5 bg-garuda-bg-dark-grey gap-[10px] has-[:checked]:bg-garuda-orange transition-all duration-300">
                                <img src="assets/images/icons/note-add-black.svg"
                                    class="w-5 flex shrink-0 group-has-[:checked]:invert transition-all duration-300"
                                    alt="icon">
                                <span class="font-semibold group-has-[:checked]:text-white">Transfer to Bank</span>
                                <input type="radio" name="payment-method" class="absolute opacity-0 left-1/2" required>
                            </label>
                        </div>
                    </div>
                </div>
                <button type="submit"
                    class="w-full rounded-full py-3 px-5 text-center bg-garuda-blue hover:shadow-[0px_14px_30px_0px_#0068FF66] transition-all duration-300">
                    <span class="font-semibold text-white">Continue to Payment</span>
                </button>
            </form>
        </div>
    </main>
@endsection