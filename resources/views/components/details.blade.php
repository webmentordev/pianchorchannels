<section class="w-full bg-gray-100">
    <div class="max-w-[970px] m-auto px-4 py-[100px]">
        <h2 class="text-3xl font-bold mb-6 text-center">Products Details</h2>
        <div x-data="{ open: true }">
            <div x-on:click="open = ! open" class="w-full rounded-lg p-4 mb-3 text-white bg-dark hover:bg-main transition-all cursor-pointer flex justify-between items-center">
                <span class="font-bold text-lg">Product portfolio</span>
                <i class="fas fa-caret-down text-lg" :class="open ? 'rotate-180' : ''"></i>
            </div>
            <div x-show="open" class="p-6 bg-white rounded-lg shadow-md mb-3" x-transition x-cloak>
                <h2 class="text-2xl font-semibold mb-2">PI anchor channels</h2>
                <p class="mb-3">PI anchor channels are available in standard and customized versions which can fulfill all the application requirements:</p>
                <ul class="text-sm ml-3 400px:ml-0">
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Fully adjustable system solution</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Hot-rolled channels profiles which can take high loads</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Suitable for use in cracked and non-cracked concrete</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Easy to customize</li>
                </ul>
                <h3 class="text-center font-semibold mb-3">Standard PI hot-rolled anchor channels</h3>
                <a class="w-full lazyload" href="{{ asset('assets/products/product-2.png') }}" target="_blank"><img data-src="{{ asset('assets/products/product-2.png') }}" class="m-auto max-w-[600px] w-full lazyload"></a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <div x-on:click="open = ! open" class="w-full rounded-lg p-4 mb-3 text-white bg-dark hover:bg-main transition-all cursor-pointer flex justify-between items-center">
                <span class="font-bold text-lg">Application area</span>
                <i class="fas fa-caret-down text-lg" :class="open ? 'rotate-180' : ''"></i>
            </div>
            <div x-show="open" class="p-6 bg-white rounded-lg shadow-md mb-3" x-transition x-cloak>
                <h2 class="text-2xl font-semibold mb-2">PI anchor channels</h2>
                <p class="mb-3">Post-installed anchor channels can be used for many applications:</p>
                <ul class="text-sm ml-3 400px:ml-0">
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Glass facades- Curtain walls bracket fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Concrete facades- Facing concrete panels fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Masonry facades- Masonry support system fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Elevators- Car brackets or counter-weight brackets fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Tunnels- Catenary, signals, sign, boards etc. fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Balcony- Balustrade fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Bridges- Pipe, ladders, cables fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Precast- Panels, walls fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Stadium- Seat fixing</li>
                    <li class="my-2"><i class="fas fa-check text-green-600"></i> Machine - Foundation fixing</li>
                </ul>
                <h3 class="text-center font-semibold mb-3">Following are some examples of applications</h3>
                <a class="w-full" href="{{ asset('assets/products/product-3.png') }}" target="_blank"><img data-src="{{ asset('assets/products/product-3.png') }}" class="m-auto max-w-[600px] lazyload"></a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <div x-on:click="open = ! open" class="w-full rounded-lg p-4 mb-3 text-white bg-dark hover:bg-main transition-all cursor-pointer flex justify-between items-center">
                <span class="font-bold text-lg">Advantages</span>
                <i class="fas fa-caret-down text-lg" :class="open ? 'rotate-180' : ''"></i>
            </div>
            <div x-show="open" class="p-6 bg-white rounded-lg shadow-md mb-3 grid grid-cols-2 gap-6 670px:grid-cols-1" x-transition x-cloak>
                <div class="p-6">
                    <img data-src="{{ asset('assets/products/ad-1.png') }}" class="lazyload w-[80%] m-auto mb-3">
                    <p>Offers bracket flexibility in all directions</p>
                </div>
                <div class="p-6">
                    <img data-src="{{ asset('assets/products/ad-2.png') }}" alt="Detail image" class="lazyload w-[80%] m-auto mb-3">
                    <p>Can be installed in different base materials (Concrete, masonry, wood etc.)</p>
                </div>
                <div class="p-6">
                    <img data-src="{{ asset('assets/products/ad-3.png') }}" alt="Detail image" class="lazyload w-[80%] m-auto mb-3">
                    <p>No pre-planning is required at a very early stage. PI anchor channels can be installed at any desired location</p>
                </div>
                <div class="p-6">
                    <img data-src="{{ asset('assets/products/ad-4.png') }}" alt="Detail image" class="lazyload w-[80%] m-auto mb-3">
                    <p>Controlled installation of the anchor channel. No danger that the channel is out of concrete, too deep in concrete, tilted, or rotated. No more misplaced anchor channels</p>
                </div>

                <div class="p-6">
                    <img data-src="{{ asset('assets/products/ad-5.png') }}" alt="Detail image" class="lazyload w-[80%] m-auto mb-3">
                    <p>At any later stage, the attached fixings can be replaced and re-adjusted on the channel profile</p>
                </div>

                <div class="p-6">
                    <img data-src="{{ asset('assets/products/ad-6.png') }}" alt="Detail image" class="lazyload w-[80%] m-auto mb-3 lazyload">
                    <p>Can be installed close to the existing wrongly installed anchor channels (25mm) to achieve the same flexibility in installation of a bracket</p>
                </div>
            </div>
        </div>
        <div x-data="{ open: false }">
            <div x-on:click="open = ! open" class="w-full rounded-lg p-4 mb-3 text-white bg-dark hover:bg-main transition-all cursor-pointer flex justify-between items-center">
                <span class="font-bold text-lg">Technical details</span>
                <i class="fas fa-caret-down text-lg" :class="open ? 'rotate-180' : ''"></i>
            </div>
            <div x-show="open" class="p-6 bg-white rounded-lg shadow-md mb-3" x-transition x-cloak>
                <h2 class="text-2xl font-semibold mb-2">The design of PI anchor channels is based on EN 1992-4</h2>
                <p class="mb-3">Steel capacities of channel profiles are based on tests performed in external labs.Concrete capacities are based on the type of anchor used i.e. chemical anchor or mechanical anchors.</p>
                <a class="w-full" href="{{ asset('assets/products/product-3.png') }}" target="_blank"><img data-src="{{ asset('assets/products/product-4.png') }}" class="w-full lazyload"></a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <div x-on:click="open = ! open" class="w-full rounded-lg p-4 mb-3 text-white bg-dark hover:bg-main transition-all cursor-pointer flex justify-between items-center">
                <span class="font-bold text-lg">Design software</span>
                <i class="fas fa-caret-down text-lg" :class="open ? 'rotate-180' : ''"></i>
            </div>
            <div x-show="open" class="p-6 bg-white rounded-lg shadow-md mb-3" x-transition x-cloak>
                <p class="mb-3">To design the post-installed anchor channels, we have developed a user-friendly design software. The design of the post-installed anchor channel is based on the principles of Euro code (EN 1992-4)& EN 1993.</p>
                <a class="w-full" href="{{ asset('assets/products/product-3.png') }}" target="_blank"><img data-src="{{ asset('assets/products/product-5.png') }}" class="w-full lazyload"></a>
            </div>
        </div>
        <div x-data="{ open: false }">
            <div x-on:click="open = ! open" class="w-full rounded-lg p-4 mb-3 text-white bg-dark hover:bg-main transition-all cursor-pointer flex justify-between items-center">
                <span class="font-bold text-lg">Design assistance</span>
                <i class="fas fa-caret-down text-lg" :class="open ? 'rotate-180' : ''"></i>
            </div>
            <div x-show="open" class="p-6 bg-white rounded-lg shadow-md mb-3 relative overflow-hidden" x-transition x-cloak>
                <p class="mb-3">Our team of expert engineers is available to assist you in the design of PI anchor channels.</p>
                <p>Please send us an email at <i class="fas fa-envlope"></i> <span class="text-main font-bold">technical@pianchorhannel.com</span></p>
                <img data-src="{{ asset('assets/email.png') }}" class="lazyload absolute right-3 bottom-5 w-[60px] rotate-45">
            </div>
        </div>
    </div>
</section>