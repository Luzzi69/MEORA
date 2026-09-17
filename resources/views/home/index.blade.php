@extends('layouts.app')

@section('title', 'MÉORA | Redefine Your Natural Radiance')

@section('content')
    <!-- HERO SECTION -->
    <section id="home" class="relative hero-gradient overflow-hidden py-16 sm:py-24 lg:py-32">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#9B1B1B_1px,transparent_1px)] [background-size:16px_16px]"></div>
        
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 relative z-10">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-8 items-center">
                
                <!-- Hero Text Content -->
                <div class="lg:col-span-6 space-y-6 text-center lg:text-left">
                    <div class="inline-flex items-center gap-2 px-4 py-1.5 rounded-full bg-white/60 border border-meora-accent/30 text-xs tracking-widest uppercase text-meora-deep font-semibold shadow-sm">
                        <i class="fa-solid fa-sparkles text-meora-gold"></i>
                        <span>New Radiance Collection 2026</span>
                    </div>

                    <h1 class="font-serif text-5xl sm:text-6xl lg:text-7xl font-normal leading-[1.1] text-meora-dark">
                        Redefine Your <br>
                        <span class="italic font-light text-meora-deep">Natural Radiance</span>
                    </h1>

                    <p class="text-meora-muted text-base sm:text-lg max-w-xl mx-auto lg:mx-0 leading-relaxed font-light">
                        Formulated with rare botanical extracts and advanced bio-ferments. MÉORA restores your skin's innate vitality with pure, potent, and sustainable luxury.
                    </p>

                    <div class="pt-4 flex flex-col sm:flex-row items-center justify-center lg:justify-start gap-4">
                        <a href="#shop" class="w-full sm:w-auto px-8 py-4 bg-meora-dark hover:bg-meora-deep text-white font-medium text-sm tracking-wider uppercase rounded-full shadow-luxury transition-all duration-300 hover:scale-[1.02] text-center">
                            Shop The Collection
                        </a>
                        <a href="#bestsellers" class="w-full sm:w-auto px-8 py-4 glass-card hover:bg-white text-meora-dark font-medium text-sm tracking-wider uppercase rounded-full transition-all duration-300 border border-meora-accent/40 text-center">
                            Discover Serum <i class="fa-solid fa-arrow-right-long ml-2 text-xs"></i>
                        </a>
                    </div>

                    <!-- Micro Trust Elements -->
                    <div class="pt-8 flex items-center justify-center lg:justify-start space-x-8 text-xs text-meora-muted border-t border-meora-accent/20">
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-star text-meora-gold"></i>
                            <span><strong>4.9/5</strong> (2,400+ Reviews)</span>
                        </div>
                        <div class="flex items-center gap-2">
                            <i class="fa-solid fa-leaf text-meora-deep"></i>
                            <span>100% Bio-Active</span>
                        </div>
                    </div>
                </div>

                <!-- Hero Image Visual Stack -->
                <div class="lg:col-span-6 relative flex justify-center">
                    <div class="relative w-full max-w-md lg:max-w-none">
                        <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=1200&auto=format&fit=crop" 
                                 alt="MEORA Glowing Skin" 
                                 class="w-full h-[460px] sm:h-[540px] object-cover hover:scale-105 transition-transform duration-700">
                        </div>

                        <!-- Floating Badge -->
                        <div class="absolute -bottom-6 -left-6 z-20 glass-card p-4 rounded-xl shadow-luxury max-w-[220px] hidden sm:block animate-bounce-slight">
                            <div class="flex items-center gap-3">
                                <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=200&auto=format&fit=crop" class="w-12 h-12 rounded-lg object-cover">
                                <div>
                                    <p class="text-xs font-bold text-meora-dark">Rose Elixir Serum</p>
                                    <p class="text-[11px] text-meora-deep font-semibold">Rp 385.000</p>
                                    <div class="text-[10px] text-meora-gold">★★★★★ (482)</div>
                                </div>
                            </div>
                        </div>

                        <div class="absolute -top-10 -right-10 w-48 h-48 bg-meora-rose/40 rounded-full blur-2xl z-0"></div>
                        <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-meora-gold/20 rounded-full blur-3xl z-0"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- VALUE PROPOSITION / FEATURES -->
    <section class="py-12 bg-white border-y border-meora-accent/15">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-8 text-center">
                
                <div class="p-4 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-meora-blush text-meora-deep flex items-center justify-center text-xl">
                        <i class="fa-solid fa-seedling"></i>
                    </div>
                    <h4 class="font-serif font-bold text-lg text-meora-dark">100% Vegan</h4>
                    <p class="text-xs text-meora-muted">Pure botanical ingredients sourced ethically.</p>
                </div>

                <div class="p-4 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-meora-blush text-meora-deep flex items-center justify-center text-xl">
                        <i class="fa-solid fa-heart-pulse"></i>
                    </div>
                    <h4 class="font-serif font-bold text-lg text-meora-dark">Cruelty-Free</h4>
                    <p class="text-xs text-meora-muted">Never tested on animals, certified Leaping Bunny.</p>
                </div>

                <div class="p-4 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-meora-blush text-meora-deep flex items-center justify-center text-xl">
                        <i class="fa-solid fa-microscope"></i>
                    </div>
                    <h4 class="font-serif font-bold text-lg text-meora-dark">Derm Tested</h4>
                    <p class="text-xs text-meora-muted">Formulated & approved by skin specialists.</p>
                </div>

                <div class="p-4 space-y-2">
                    <div class="w-12 h-12 mx-auto rounded-full bg-meora-blush text-meora-deep flex items-center justify-center text-xl">
                        <i class="fa-solid fa-recycle"></i>
                    </div>
                    <h4 class="font-serif font-bold text-lg text-meora-dark">Eco Packaging</h4>
                    <p class="text-xs text-meora-muted">100% recyclable glass & sustainable pumps.</p>
                </div>

            </div>
        </div>
    </section>

    <!-- CATEGORIES SECTION -->
    <section id="categories" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold tracking-[0.2em] uppercase text-meora-deep">Curated Collections</span>
            <h2 class="font-serif text-4xl sm:text-5xl text-meora-dark">Targeted Care for Every Need</h2>
            <p class="text-meora-muted text-sm font-light">Explore formulas specifically crafted to nourish, protect, and illuminate your complexion.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <div class="group relative rounded-2xl overflow-hidden shadow-soft cursor-pointer bg-meora-card">
                <div class="h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=600&auto=format&fit=crop" 
                         alt="Hydrating Serums" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-meora-dark/80 via-transparent to-transparent flex flex-col justify-end p-6 text-white">
                    <span class="text-xs uppercase tracking-widest text-meora-gold font-semibold">Category</span>
                    <h3 class="font-serif text-2xl font-normal mt-1">Hydrating Serums</h3>
                    <p class="text-xs text-meora-blush/80 mt-1">Deep moisture locking elixirs</p>
                    <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-meora-gold group-hover:translate-x-1 transition-transform">
                        <span>Shop Serums</span> <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class="group relative rounded-2xl overflow-hidden shadow-soft cursor-pointer bg-meora-card">
                <div class="h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1608248597261-5421d55ab385?q=80&w=600&auto=format&fit=crop" 
                         alt="Glow Moisturizers" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-meora-dark/80 via-transparent to-transparent flex flex-col justify-end p-6 text-white">
                    <span class="text-xs uppercase tracking-widest text-meora-gold font-semibold">Category</span>
                    <h3 class="font-serif text-2xl font-normal mt-1">Glow Moisturizers</h3>
                    <p class="text-xs text-meora-blush/80 mt-1">Rich creams for radiant skin</p>
                    <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-meora-gold group-hover:translate-x-1 transition-transform">
                        <span>Shop Creams</span> <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class="group relative rounded-2xl overflow-hidden shadow-soft cursor-pointer bg-meora-card">
                <div class="h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=600&auto=format&fit=crop" 
                         alt="Sun Protection" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-meora-dark/80 via-transparent to-transparent flex flex-col justify-end p-6 text-white">
                    <span class="text-xs uppercase tracking-widest text-meora-gold font-semibold">Category</span>
                    <h3 class="font-serif text-2xl font-normal mt-1">Sun Protection</h3>
                    <p class="text-xs text-meora-blush/80 mt-1">Invisible UV barrier lotions</p>
                    <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-meora-gold group-hover:translate-x-1 transition-transform">
                        <span>Shop Sunscreen</span> <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>

            <div class="group relative rounded-2xl overflow-hidden shadow-soft cursor-pointer bg-meora-card">
                <div class="h-80 overflow-hidden">
                    <img src="https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=600&auto=format&fit=crop" 
                         alt="Lip Treatments" 
                         class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-700">
                </div>
                <div class="absolute inset-0 bg-gradient-to-t from-meora-dark/80 via-transparent to-transparent flex flex-col justify-end p-6 text-white">
                    <span class="text-xs uppercase tracking-widest text-meora-gold font-semibold">Category</span>
                    <h3 class="font-serif text-2xl font-normal mt-1">Lip Treatments</h3>
                    <p class="text-xs text-meora-blush/80 mt-1">Nourishing glowing lip oils</p>
                    <div class="mt-4 flex items-center gap-2 text-xs font-semibold text-meora-gold group-hover:translate-x-1 transition-transform">
                        <span>Shop Lips</span> <i class="fa-solid fa-arrow-right"></i>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- BEST SELLERS / PRODUCTS SECTION -->
    <section id="bestsellers" class="py-20 bg-meora-card/40 border-y border-meora-accent/10">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            
            <div class="flex flex-col md:flex-row md:items-end justify-between mb-12">
                <div>
                    <span class="text-xs font-bold tracking-[0.2em] uppercase text-meora-deep">Customer Favorites</span>
                    <h2 class="font-serif text-4xl sm:text-5xl text-meora-dark mt-1">Best Selling Formulas</h2>
                </div>

                <!-- Filter Tabs -->
                <div class="flex flex-wrap gap-2 mt-6 md:mt-0">
                    <template x-for="tab in ['all', 'serums', 'creams', 'lips']" :key="tab">
                        <button @click="activeTab = tab" 
                                :class="activeTab === tab ? 'bg-meora-dark text-white' : 'bg-white/80 text-meora-dark hover:bg-white'"
                                class="px-5 py-2 rounded-full text-xs font-medium tracking-wider uppercase transition-all duration-300 capitalize border border-meora-accent/20">
                            <span x-text="tab === 'all' ? 'All Products' : tab"></span>
                        </button>
                    </template>
                </div>
            </div>

            <!-- Product Grid -->
            <div id="shop" class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 xl:grid-cols-4 gap-8">
                
                <template x-for="product in filteredProducts" :key="product.id">
                    <div class="group bg-white rounded-2xl overflow-hidden shadow-soft border border-meora-accent/15 flex flex-col justify-between transition-all duration-300 hover:shadow-luxury hover:-translate-y-1">
                        
                        <!-- Image Container & Badges -->
                        <div class="relative overflow-hidden bg-meora-bg aspect-square">
                            <img :src="product.image" :alt="product.name" class="w-full h-full object-cover group-hover:scale-105 transition-transform duration-500">
                            
                            <div class="absolute top-3 left-3 flex flex-col gap-1">
                                <span x-show="product.badge" x-text="product.badge" class="bg-meora-deep text-white text-[10px] uppercase tracking-wider font-bold px-3 py-1 rounded-full shadow-sm"></span>
                            </div>

                            <button @click="toggleWishlist(product)" class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/80 backdrop-blur-sm text-meora-dark flex items-center justify-center shadow-sm hover:bg-white transition-colors">
                                <i :class="isWishlisted(product.id) ? 'fa-solid text-red-600' : 'fa-regular'" class="fa-heart"></i>
                            </button>

                            <div class="absolute inset-x-0 bottom-4 px-4 opacity-0 group-hover:opacity-100 transition-opacity duration-300">
                                <button @click="openQuickView(product)" class="w-full py-2.5 bg-white/90 backdrop-blur-md hover:bg-white text-meora-dark text-xs font-semibold tracking-wider uppercase rounded-xl shadow-md transition-colors">
                                    Quick View
                                </button>
                            </div>
                        </div>

                        <!-- Product Info -->
                        <div class="p-5 flex-1 flex flex-col justify-between">
                            <div>
                                <div class="flex items-center justify-between text-xs text-meora-muted mb-1">
                                    <span class="uppercase tracking-widest text-[10px] font-semibold text-meora-deep" x-text="product.category"></span>
                                    <div class="flex items-center gap-1 text-meora-gold font-bold">
                                        <i class="fa-solid fa-star text-[11px]"></i>
                                        <span x-text="product.rating"></span>
                                    </div>
                                </div>

                                <h3 class="font-serif text-xl font-normal text-meora-dark hover:text-meora-deep transition-colors cursor-pointer" 
                                    @click="openQuickView(product)" 
                                    x-text="product.name"></h3>
                                <p class="text-xs text-meora-muted line-clamp-2 mt-1 font-light" x-text="product.description"></p>
                            </div>

                            <div class="mt-4 pt-4 border-t border-meora-accent/10 flex items-center justify-between">
                                <div>
                                    <span class="text-xs text-meora-muted block">Price</span>
                                    <span class="font-semibold text-meora-dark text-base" x-text="formatRupiah(product.price)"></span>
                                </div>

                                <button @click="addToCart(product)" class="bg-meora-dark hover:bg-meora-deep text-white p-3 rounded-full transition-colors flex items-center justify-center shadow-md">
                                    <i class="fa-solid fa-plus text-xs"></i>
                                </button>
                            </div>
                        </div>

                    </div>
                </template>

            </div>
        </div>
    </section>

    <!-- ABOUT SECTION -->
    <section id="about" class="py-24 bg-meora-bg relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <div class="lg:col-span-6 relative">
                    <div class="relative z-10 rounded-2xl overflow-hidden shadow-luxury border-8 border-white">
                        <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?q=80&w=1000&auto=format&fit=crop" 
                             alt="Botanical Ingredients" 
                             class="w-full h-[500px] object-cover">
                    </div>
                    <div class="absolute -bottom-10 -right-8 w-60 h-60 rounded-2xl overflow-hidden shadow-2xl border-4 border-white hidden sm:block z-20">
                        <img src="https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=600&auto=format&fit=crop" 
                             alt="Beauty Ritual" 
                             class="w-full h-full object-cover">
                    </div>
                </div>

                <div class="lg:col-span-6 space-y-6">
                    <span class="text-xs font-bold tracking-[0.25em] uppercase text-meora-deep">The MÉORA Philosophy</span>
                    <h2 class="font-serif text-4xl sm:text-5xl font-normal leading-tight text-meora-dark">
                        Pure Ingredients, <br>
                        <span class="italic font-light text-meora-deep">Honest Beauty Rituals</span>
                    </h2>
                    
                    <p class="text-meora-muted text-base leading-relaxed font-light">
                        Founded with a mission to eliminate harsh synthetic additives, MÉORA blends cold-pressed botanical oils, active peptides, and soothing floral waters. We believe that caring for your skin should be an intentional daily sanctuary.
                    </p>

                    <div class="grid grid-cols-2 gap-6 pt-4 border-t border-meora-accent/20">
                        <div>
                            <span class="font-serif text-3xl font-normal text-meora-dark block">98%</span>
                            <span class="text-xs text-meora-muted uppercase tracking-wider">Naturally Derived</span>
                        </div>
                        <div>
                            <span class="font-serif text-3xl font-normal text-meora-dark block">0%</span>
                            <span class="text-xs text-meora-muted uppercase tracking-wider">Parabens & Sulfates</span>
                        </div>
                    </div>

                    <div class="pt-2">
                        <a href="#shop" class="inline-flex items-center gap-3 text-xs uppercase tracking-widest font-bold text-meora-dark border-b-2 border-meora-dark pb-1 hover:text-meora-deep hover:border-meora-deep transition-all">
                            <span>Explore Our Ingredients Index</span>
                            <i class="fa-solid fa-arrow-right-long"></i>
                        </a>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- TESTIMONIALS SECTION -->
    <section class="py-20 bg-white border-y border-meora-accent/15">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-[0.2em] uppercase text-meora-deep">Real Stories</span>
                <h2 class="font-serif text-4xl text-meora-dark mt-1">Loved by Conscious Beauty Lovers</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <div class="p-8 rounded-2xl bg-meora-bg border border-meora-accent/15 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="text-meora-gold text-sm">★★★★★</div>
                        <p class="text-sm text-meora-dark italic leading-relaxed">
                            "The Luminescence Rose Serum completely transformed my dry patches within a week. My skin has never looked so naturally dewy without feeling heavy!"
                        </p>
                    </div>
                    <div class="pt-4 border-t border-meora-accent/10 flex items-center justify-between">
                        <div>
                            <h5 class="font-bold text-xs text-meora-dark">Sophia R.</h5>
                            <span class="text-[10px] text-meora-muted">Verified Buyer — Jakarta</span>
                        </div>
                        <span class="text-[10px] bg-meora-blush text-meora-deep px-2.5 py-1 rounded-full font-semibold">Rose Serum</span>
                    </div>
                </div>

                <div class="p-8 rounded-2xl bg-meora-bg border border-meora-accent/15 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="text-meora-gold text-sm">★★★★★</div>
                        <p class="text-sm text-meora-dark italic leading-relaxed">
                            "The Velvet Celestial Cream feels like silk. It absorbs so quickly and gives me that coveted glass skin finish before putting on makeup."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-meora-accent/10 flex items-center justify-between">
                        <div>
                            <h5 class="font-bold text-xs text-meora-dark">Amanda L.</h5>
                            <span class="text-[10px] text-meora-muted">Verified Buyer — Surabaya</span>
                        </div>
                        <span class="text-[10px] bg-meora-blush text-meora-deep px-2.5 py-1 rounded-full font-semibold">Celestial Cream</span>
                    </div>
                </div>

                <div class="p-8 rounded-2xl bg-meora-bg border border-meora-accent/15 flex flex-col justify-between space-y-4">
                    <div class="space-y-3">
                        <div class="text-meora-gold text-sm">★★★★★</div>
                        <p class="text-sm text-meora-dark italic leading-relaxed">
                            "I am obsessed with the Lip Oil. It gives a gorgeous subtle rose flush without any sticky feeling. Permanently in my handbag now."
                        </p>
                    </div>
                    <div class="pt-4 border-t border-meora-accent/10 flex items-center justify-between">
                        <div>
                            <h5 class="font-bold text-xs text-meora-dark">Clarissa M.</h5>
                            <span class="text-[10px] text-meora-muted">Verified Buyer — Bandung</span>
                        </div>
                        <span class="text-[10px] bg-meora-blush text-meora-deep px-2.5 py-1 rounded-full font-semibold">Nectarine Lip Oil</span>
                    </div>
                </div>

            </div>
        </div>
    </section>

    <!-- INSTAGRAM FEED -->
    <section class="py-16 bg-meora-bg">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center mb-8">
            <span class="text-xs font-bold tracking-[0.2em] uppercase text-meora-deep">@MEORABEAUTY ON INSTAGRAM</span>
            <h3 class="font-serif text-3xl text-meora-dark mt-1">Follow Our Radiant Journey</h3>
        </div>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-2 px-2">
            <template x-for="(img, idx) in instaImages" :key="idx">
                <div class="group relative aspect-square overflow-hidden cursor-pointer rounded-xl">
                    <img :src="img" alt="Instagram Post" class="w-full h-full object-cover group-hover:scale-110 transition-transform duration-500">
                    <div class="absolute inset-0 bg-meora-dark/60 opacity-0 group-hover:opacity-100 transition-opacity flex items-center justify-center text-white">
                        <i class="fa-brands fa-instagram text-2xl"></i>
                    </div>
                </div>
            </template>
        </div>
    </section>

    <!-- NEWSLETTER SECTION -->
    <section class="py-20 bg-meora-dark text-white relative overflow-hidden">
        <div class="absolute inset-0 opacity-10 bg-[radial-gradient(#D93829_1px,transparent_1px)] [background-size:20px_20px]"></div>
        
        <div class="max-w-4xl mx-auto px-4 sm:px-6 lg:px-8 text-center relative z-10 space-y-6">
            <span class="text-xs font-bold tracking-[0.25em] uppercase text-meora-gold">Exclusive Membership</span>
            <h2 class="font-serif text-4xl sm:text-5xl font-normal">Join the MÉORA Glow Club</h2>
            <p class="text-meora-blush/80 text-sm sm:text-base font-light max-w-lg mx-auto">
                Subscribe to receive private invitations to new product launches, expert skincare advice, and <strong>15% OFF</strong> your first order.
            </p>

            <form @submit.prevent="subscribeNewsletter()" class="max-w-md mx-auto flex flex-col sm:flex-row gap-3 pt-2">
                <input type="email" 
                       x-model="newsletterEmail" 
                       placeholder="Enter your email address" 
                       required 
                       class="flex-1 px-5 py-3.5 rounded-full bg-white/10 border border-white/20 text-white placeholder-white/50 text-sm focus:outline-none focus:border-meora-gold transition-colors">
                <button type="submit" class="px-8 py-3.5 bg-meora-accent hover:bg-meora-rose text-white font-semibold text-xs tracking-widest uppercase rounded-full transition-all duration-300">
                    Subscribe
                </button>
            </form>
            
            <p class="text-[11px] text-white/40">By subscribing, you agree to our Privacy Policy. Unsubscribe anytime.</p>
        </div>
    </section>
@endsection