<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>MÉORA | Redefine Your Natural Radiance</title>

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Cormorant+Garamond:ital,wght@0,300;0,400;0,500;0,600;0,700;1,400&family=Plus+Jakarta+Sans:wght@300;400;500;600;700&display=swap" rel="stylesheet">

    <!-- FontAwesome Icons -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">

    <!-- Tailwind CSS CDN -->
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            theme: {
                extend: {
                    colors: {
                        meora: {
                            bg: '#FFF8F6',       /* Soft porcelain with warm red undertone */
                            card: '#FADBD8',     /* Soft blush Papuan red card */
                            accent: '#D93829',   /* Vibrant Papuan Fruit Red */
                            deep: '#9B1B1B',     /* Rich Deep Crimson Papua Red */
                            dark: '#2D0A0E',     /* Deep Mahogany Red-Black */
                            rose: '#E54B4B',     /* Warm Papuan Crimson Highlight */
                            blush: '#FCEBEB',    /* Light Rose Petal Wash */
                            gold: '#D4A017',     /* Papuan Sun Gold Accent */
                            muted: '#7A5458'     /* Muted Rosewood Charcoal */
                        }
                    },
                    fontFamily: {
                        serif: ['"Cormorant Garamond"', 'Georgia', 'serif'],
                        sans: ['"Plus Jakarta Sans"', 'sans-serif']
                    },
                    boxShadow: {
                        'glass': '0 8px 32px 0 rgba(155, 27, 27, 0.08)',
                        'soft': '0 10px 30px -5px rgba(45, 10, 14, 0.06)',
                        'luxury': '0 20px 40px -10px rgba(155, 27, 27, 0.16)'
                    }
                }
            }
        }
    </script>

    <!-- Alpine.js CDN for dynamic cart & interactive state -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>

    <style>
        body {
            background-color: #FFF8F6;
            color: #2D0A0E;
            font-family: 'Plus Jakarta Sans', sans-serif;
            overflow-x: hidden;
        }

        .glass-nav {
            background: rgba(255, 248, 246, 0.88);
            backdrop-filter: blur(12px);
            -webkit-backdrop-filter: blur(12px);
            border-bottom: 1px solid rgba(217, 56, 41, 0.15);
        }

        .glass-card {
            background: rgba(255, 255, 255, 0.7);
            backdrop-filter: blur(10px);
            border: 1px solid rgba(255, 255, 255, 0.85);
        }

        .hero-gradient {
            background: linear-gradient(135deg, #FFF8F6 0%, #FADBD8 50%, #F5B7B1 100%);
        }

        /* Custom Scrollbar */
        ::-webkit-scrollbar {
            width: 8px;
        }
        ::-webkit-scrollbar-track {
            background: #FFF8F6;
        }
        ::-webkit-scrollbar-thumb {
            background: #D93829;
            border-radius: 4px;
        }
        ::-webkit-scrollbar-thumb:hover {
            background: #9B1B1B;
        }

        [x-cloak] { display: none !important; }
    </style>
</head>

<body x-data="meoraStore()" x-init="initData()">

    <!-- POPUP PROMO -->
<div
    x-show="promoOpen"
    x-cloak
    x-transition
    class="fixed inset-0 z-[9999] flex items-center justify-center bg-black/70 px-4"
>

    <!-- Klik background untuk menutup -->
    <div
        @click="promoOpen = false"
        class="absolute inset-0"
    ></div>

    <!-- BOX POPUP -->
    <div
        x-transition:enter="transition ease-out duration-300"
        x-transition:enter-start="opacity-0 scale-75"
        x-transition:enter-end="opacity-100 scale-100"
        class="relative z-10 w-full max-w-[650px]"
    >

        <!-- TOMBOL CLOSE -->
        <button
            @click="promoOpen = false"
            type="button"
            class="absolute -right-3 -top-3 z-20 flex h-9 w-9 items-center justify-center rounded-full bg-white text-gray-800 shadow-lg hover:bg-black hover:text-white"
        >
            <i class="fa-solid fa-xmark"></i>
        </button>

        <!-- BANNER PROMO -->
        <a
            href="#shop"
            @click="promoOpen = false"
            class="block"
        >
            <img
                src="/images/promo-meora.jpg"
                alt="Promo MEORA"
                class="w-full rounded-lg shadow-2xl"
            >
        </a>

    </div>

</div>

    <!-- Toast Notification Container -->
    <div class="fixed bottom-6 right-6 z-50 flex flex-col gap-3 pointer-events-none">
        <template x-for="toast in toasts" :key="toast.id">
            <div x-show="toast.show" 
                 x-transition:enter="transition ease-out duration-300 transform translate-y-2 opacity-0"
                 x-transition:enter-end="transform translate-y-0 opacity-100"
                 x-transition:leave="transition ease-in duration-200 transform opacity-0"
                 class="pointer-events-auto flex items-center gap-3 bg-meora-dark text-white px-5 py-3.5 rounded-full shadow-luxury text-sm">
                <i class="fa-solid fa-circle-check text-meora-gold"></i>
                <span x-text="toast.message"></span>
            </div>
        </template>
    </div>

    <!-- Announcement Bar -->
    <div class="bg-meora-dark text-meora-blush text-xs tracking-widest py-2.5 px-4 text-center font-medium uppercase relative overflow-hidden">
        <div class="flex items-center justify-center gap-2">
            <span class="inline-block w-1.5 h-1.5 rounded-full bg-meora-gold animate-pulse"></span>
            <span>Free Shipping on orders over <strong class="text-white">Rp 500.000</strong> &nbsp;|&nbsp; Use code <span class="tracking-wider underline font-bold text-meora-gold">GLOWMEORA</span> for 15% OFF</span>
        </div>
    </div>

    <header class="sticky top-0 z-40 glass-nav transition-all duration-300">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="flex items-center justify-between h-20">
                
                <!-- Mobile Menu Button -->
                <div class="flex items-center lg:hidden">
                    <button @click="mobileMenuOpen = !mobileMenuOpen" class="text-meora-dark hover:text-meora-deep p-2">
                        <i class="fa-solid" :class="mobileMenuOpen ? 'fa-xmark text-xl' : 'fa-bars text-xl'"></i>
                    </button>
                </div>

                <!-- Navigation Links (Desktop) -->
                <nav class="hidden lg:flex items-center space-x-8 text-sm font-medium tracking-wide">
                    <a href="#home" class="text-meora-deep font-semibold border-b-2 border-meora-deep pb-1">Home</a>
                    <a href="#shop" class="text-meora-dark hover:text-meora-deep transition-colors pb-1">Shop All</a>
                    <a href="#bestsellers" class="text-meora-dark hover:text-meora-deep transition-colors pb-1">Best Sellers</a>
                    <a href="#categories" class="text-meora-dark hover:text-meora-deep transition-colors pb-1">Skincare</a>
                    <a href="#about" class="text-meora-dark hover:text-meora-deep transition-colors pb-1">Our Story</a>
                </nav>

                <!-- Brand Logo -->
                <div class="text-center">
                    <a href="#" class="inline-block select-none">
                        <span class="font-serif text-3xl sm:text-4xl tracking-widest text-meora-dark font-normal">M É O R A</span>
                        <span class="block text-[9px] tracking-[0.3em] uppercase text-meora-deep font-semibold -mt-1">Botanical Luxury</span>
                    </a>
                </div>

                <!-- Header Actions -->
                <div class="flex items-center space-x-5 sm:space-x-6">
                    <!-- Search Button -->
                    <button @click="searchOpen = true" class="text-meora-dark hover:text-meora-deep transition-colors p-1">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>

                    <!-- Wishlist -->
                    <button @click="toggleWishlistModal()" class="relative text-meora-dark hover:text-meora-deep transition-colors p-1 hidden sm:block">
                        <i class="fa-regular fa-heart text-lg"></i>
                        <span x-show="wishlist.length > 0" x-text="wishlist.length" class="absolute -top-1 -right-2 bg-meora-deep text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"></span>
                    </button>

                    <!-- Cart Drawer Toggle -->
                    <button @click="cartDrawerOpen = true" class="relative bg-meora-dark hover:bg-meora-deep text-meora-bg px-4 py-2.5 rounded-full flex items-center gap-2 transition-all duration-300 shadow-md">
                        <i class="fa-solid fa-bag-shopping text-sm text-meora-gold"></i>
                        <span class="text-xs font-semibold tracking-wider uppercase hidden sm:inline">Bag</span>
                        <span x-text="cartTotalItems" class="bg-meora-gold text-meora-dark text-xs font-extrabold w-5 h-5 rounded-full flex items-center justify-center">0</span>
                    </button>
                </div>
            </div>
        </div>

        <!-- Mobile Menu Dropdown -->
        <div x-show="mobileMenuOpen" x-cloak x-transition class="lg:hidden bg-meora-bg border-b border-meora-accent/20 px-6 py-6 space-y-4 shadow-xl">
            <a href="#home" @click="mobileMenuOpen = false" class="block text-base font-medium text-meora-deep">Home</a>
            <a href="#shop" @click="mobileMenuOpen = false" class="block text-base font-medium text-meora-dark">Shop All</a>
            <a href="#bestsellers" @click="mobileMenuOpen = false" class="block text-base font-medium text-meora-dark">Best Sellers</a>
            <a href="#categories" @click="mobileMenuOpen = false" class="block text-base font-medium text-meora-dark">Skincare Routine</a>
            <a href="#about" @click="mobileMenuOpen = false" class="block text-base font-medium text-meora-dark">Our Story</a>
        </div>
    </header>

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
                        <!-- Main Beauty Image -->
                        <div class="relative z-10 rounded-2xl overflow-hidden shadow-2xl border-4 border-white">
                            <img src="https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=1200&auto=format&fit=crop" 
                                 alt="MEORA Glowing Skin" 
                                 class="w-full h-[460px] sm:h-[540px] object-cover hover:scale-105 transition-transform duration-700">
                        </div>

                        <!-- Floating Product Card Badge -->
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

                        <!-- Decorative Accent Circle -->
                        <div class="absolute -top-10 -right-10 w-48 h-48 bg-meora-rose/40 rounded-full blur-2xl z-0"></div>
                        <div class="absolute -bottom-10 -left-10 w-64 h-64 bg-meora-gold/20 rounded-full blur-3xl z-0"></div>
                    </div>
                </div>

            </div>
        </div>
    </section>

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

    <section id="categories" class="py-20 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
        <div class="text-center max-w-2xl mx-auto mb-14 space-y-3">
            <span class="text-xs font-bold tracking-[0.2em] uppercase text-meora-deep">Curated Collections</span>
            <h2 class="font-serif text-4xl sm:text-5xl text-meora-dark">Targeted Care for Every Need</h2>
            <p class="text-meora-muted text-sm font-light">Explore formulas specifically crafted to nourish, protect, and illuminate your complexion.</p>
        </div>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">
            
            <!-- Category Card 1 -->
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

            <!-- Category Card 2 -->
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

            <!-- Category Card 3 -->
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

            <!-- Category Card 4 -->
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
                            
                            <!-- Badge -->
                            <div class="absolute top-3 left-3 flex flex-col gap-1">
                                <span x-show="product.badge" x-text="product.badge" class="bg-meora-deep text-white text-[10px] uppercase tracking-wider font-bold px-3 py-1 rounded-full shadow-sm"></span>
                            </div>

                            <!-- Wishlist Button -->
                            <button @click="toggleWishlist(product)" class="absolute top-3 right-3 w-9 h-9 rounded-full bg-white/80 backdrop-blur-sm text-meora-dark flex items-center justify-center shadow-sm hover:bg-white transition-colors">
                                <i :class="isWishlisted(product.id) ? 'fa-solid text-red-600' : 'fa-regular'" class="fa-heart"></i>
                            </button>

                            <!-- Quick View Hover Overlay -->
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

    <section id="about" class="py-24 bg-meora-bg relative overflow-hidden">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 lg:grid-cols-12 gap-12 lg:gap-16 items-center">
                
                <div class="lg:col-span-6 relative">
                    <div class="relative z-10 rounded-2xl overflow-hidden shadow-luxury border-8 border-white">
                        <img src="https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?q=80&w=1000&auto=format&fit=crop" 
                             alt="Botanical Ingredients" 
                             class="w-full h-[500px] object-cover">
                    </div>
                    <!-- Secondary Accent Photo Overlay -->
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

    <section class="py-20 bg-white border-y border-meora-accent/15">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="text-center max-w-xl mx-auto mb-14">
                <span class="text-xs font-bold tracking-[0.2em] uppercase text-meora-deep">Real Stories</span>
                <h2 class="font-serif text-4xl text-meora-dark mt-1">Loved by Conscious Beauty Lovers</h2>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8">
                
                <!-- Review Card 1 -->
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

                <!-- Review Card 2 -->
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

                <!-- Review Card 3 -->
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

    <footer class="bg-meora-dark border-t border-white/10 text-white/70 text-xs py-16">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-5 gap-10">
                
                <!-- Brand Column -->
                <div class="lg:col-span-2 space-y-4">
                    <span class="font-serif text-3xl tracking-widest text-white block select-none">M É O R A</span>
                    <p class="text-white/60 text-xs max-w-sm font-light leading-relaxed">
                        High-performance botanical skincare formulated for natural radiance and timeless beauty. Crafted with sustainability at heart.
                    </p>
                    <div class="flex space-x-4 text-sm text-meora-gold pt-2">
                        <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-instagram"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-tiktok"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-pinterest"></i></a>
                        <a href="#" class="hover:text-white transition-colors"><i class="fa-brands fa-facebook-f"></i></a>
                    </div>
                </div>

                <!-- Shop Links -->
                <div class="space-y-3">
                    <h4 class="text-white font-semibold tracking-wider uppercase text-xs">Shop Collection</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Hydrating Serums</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Face Creams</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Lip Oils & Balms</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Daily Sunscreen</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Gift Sets</a></li>
                    </ul>
                </div>

                <!-- About Links -->
                <div class="space-y-3">
                    <h4 class="text-white font-semibold tracking-wider uppercase text-xs">About MEORA</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Our Philosophy</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Clean Ingredients</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Sustainability</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Journal & Tips</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Store Locator</a></li>
                    </ul>
                </div>

                <!-- Customer Care -->
                <div class="space-y-3">
                    <h4 class="text-white font-semibold tracking-wider uppercase text-xs">Customer Care</h4>
                    <ul class="space-y-2">
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Contact Support</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Shipping & Returns</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Track Order</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">FAQs</a></li>
                        <li><a href="#" class="hover:text-meora-gold transition-colors">Privacy Policy</a></li>
                    </ul>
                </div>

            </div>

            <div class="mt-16 pt-8 border-t border-white/10 flex flex-col sm:flex-row items-center justify-between text-[11px] text-white/40">
                <p>&copy; 2026 MÉORA Botanical Luxury. All rights reserved.</p>
                <div class="flex items-center space-x-4 mt-4 sm:mt-0">
                    <i class="fa-brands fa-cc-visa text-base text-white/60"></i>
                    <i class="fa-brands fa-cc-mastercard text-base text-white/60"></i>
                    <i class="fa-brands fa-cc-paypal text-base text-white/60"></i>
                    <span>Midtrans / QRIS Verified</span>
                </div>
            </div>
        </div>
    </footer>

    <!-- Slide-over Cart Drawer -->
    <div x-show="cartDrawerOpen" x-cloak class="relative z-50">
        <!-- Backdrop -->
        <div x-show="cartDrawerOpen" 
             x-transition:enter="ease-in-out duration-300"
             x-transition:enter-start="opacity-0"
             x-transition:enter-end="opacity-100"
             x-transition:leave="ease-in-out duration-300"
             x-transition:leave-start="opacity-100"
             x-transition:leave-end="opacity-0"
             @click="cartDrawerOpen = false" 
             class="fixed inset-0 bg-meora-dark/60 backdrop-blur-sm transition-opacity"></div>

        <div class="fixed inset-y-0 right-0 max-w-full flex pl-10">
            <div x-show="cartDrawerOpen" 
                 x-transition:enter="transform transition ease-in-out duration-300"
                 x-transition:enter-start="translate-x-full"
                 x-transition:enter-end="translate-x-0"
                 x-transition:leave="transform transition ease-in-out duration-300"
                 x-transition:leave-start="translate-x-0"
                 x-transition:leave-end="translate-x-full"
                 class="w-screen max-w-md bg-meora-bg text-meora-dark shadow-2xl flex flex-col justify-between">
                
                <!-- Drawer Header -->
                <div class="p-6 border-b border-meora-accent/20 flex items-center justify-between bg-white">
                    <div class="flex items-center gap-2">
                        <i class="fa-solid fa-bag-shopping text-meora-deep"></i>
                        <h3 class="font-serif text-2xl text-meora-dark">Your Shopping Bag</h3>
                        <span class="text-xs text-meora-muted font-bold" x-text="`(${cartTotalItems})`"></span>
                    </div>
                    <button @click="cartDrawerOpen = false" class="text-meora-dark hover:text-meora-deep p-2">
                        <i class="fa-solid fa-xmark text-lg"></i>
                    </button>
                </div>

                <!-- Free Shipping Progress Bar -->
                <div class="bg-meora-blush px-6 py-3 border-b border-meora-accent/10">
                    <div class="flex items-center justify-between text-xs mb-1.5 font-medium text-meora-dark">
                        <span x-show="cartSubtotal < freeShippingThreshold">
                            Add <strong class="text-meora-deep" x-text="formatRupiah(freeShippingThreshold - cartSubtotal)"></strong> for <strong>FREE Shipping</strong>
                        </span>
                        <span x-show="cartSubtotal >= freeShippingThreshold" class="text-emerald-700 font-bold flex items-center gap-1">
                            <i class="fa-solid fa-circle-check"></i> You unlocked FREE Shipping!
                        </span>
                    </div>
                    <div class="w-full bg-white rounded-full h-2 overflow-hidden shadow-inner">
                        <div class="bg-meora-deep h-full transition-all duration-500 rounded-full" 
                             :style="`width: ${Math.min((cartSubtotal / freeShippingThreshold) * 100, 100)}%`"></div>
                    </div>
                </div>

                <!-- Cart Items List -->
                <div class="flex-1 overflow-y-auto p-6 space-y-4">
                    <template x-if="cart.length === 0">
                        <div class="text-center py-16 space-y-4">
                            <div class="w-16 h-16 mx-auto rounded-full bg-meora-card flex items-center justify-center text-meora-deep text-2xl">
                                <i class="fa-solid fa-bag-shopping"></i>
                            </div>
                            <p class="text-meora-muted text-sm font-light">Your bag is currently empty.</p>
                            <button @click="cartDrawerOpen = false" class="px-6 py-2.5 bg-meora-dark text-white rounded-full text-xs font-semibold uppercase tracking-wider">
                                Start Shopping
                            </button>
                        </div>
                    </template>

                    <template x-for="item in cart" :key="item.id">
                        <div class="flex gap-4 p-3 bg-white rounded-xl border border-meora-accent/15 shadow-sm">
                            <img :src="item.image" :alt="item.name" class="w-20 h-20 object-cover rounded-lg">
                            
                            <div class="flex-1 flex flex-col justify-between">
                                <div class="flex justify-between">
                                    <h4 class="font-serif text-base text-meora-dark font-medium leading-tight" x-text="item.name"></h4>
                                    <button @click="removeFromCart(item.id)" class="text-meora-muted hover:text-red-500 text-xs pl-2">
                                        <i class="fa-solid fa-trash-can"></i>
                                    </button>
                                </div>
                                <span class="text-xs font-semibold text-meora-deep" x-text="formatRupiah(item.price)"></span>

                                <!-- Qty selector -->
                                <div class="flex items-center justify-between mt-2">
                                    <div class="flex items-center border border-meora-accent/30 rounded-full bg-meora-bg">
                                        <button @click="updateQty(item.id, -1)" class="w-6 h-6 flex items-center justify-center text-xs text-meora-dark hover:text-meora-deep">-</button>
                                        <span class="w-8 text-center text-xs font-bold" x-text="item.qty"></span>
                                        <button @click="updateQty(item.id, 1)" class="w-6 h-6 flex items-center justify-center text-xs text-meora-dark hover:text-meora-deep">+</button>
                                    </div>
                                    <span class="text-xs font-bold text-meora-dark" x-text="formatRupiah(item.price * item.qty)"></span>
                                </div>
                            </div>
                        </div>
                    </template>
                </div>

                <!-- Drawer Footer & Checkout CTA -->
                <div class="p-6 bg-white border-t border-meora-accent/20 space-y-4">
                    <div class="space-y-2 text-xs">
                        <div class="flex justify-between text-meora-muted">
                            <span>Subtotal</span>
                            <span class="font-semibold text-meora-dark" x-text="formatRupiah(cartSubtotal)"></span>
                        </div>
                        <div class="flex justify-between text-meora-muted">
                            <span>Estimated Shipping</span>
                            <span x-text="cartSubtotal >= freeShippingThreshold ? 'FREE' : 'Rp 25.000'" class="font-semibold text-meora-dark"></span>
                        </div>
                        <div class="flex justify-between text-base font-bold text-meora-dark pt-2 border-t border-meora-accent/10">
                            <span>Total</span>
                            <span x-text="formatRupiah(cartSubtotal >= freeShippingThreshold ? cartSubtotal : cartSubtotal + 25000)"></span>
                        </div>
                    </div>

                    <button @click="checkout()" 
                            :disabled="cart.length === 0"
                            class="w-full py-4 bg-meora-dark hover:bg-meora-deep disabled:opacity-50 text-white text-xs font-bold tracking-widest uppercase rounded-full shadow-luxury transition-all">
                        Proceed To Checkout
                    </button>
                </div>

            </div>
        </div>
    </div>

    <!-- Quick View Modal -->
    <div x-show="quickViewOpen" x-cloak class="relative z-50">
        <div x-show="quickViewOpen" x-transition class="fixed inset-0 bg-meora-dark/70 backdrop-blur-sm" @click="quickViewOpen = false"></div>

        <div class="fixed inset-0 z-10 overflow-y-auto p-4 sm:p-6 lg:p-8 flex items-center justify-center">
            <div x-show="quickViewOpen" 
                 x-transition
                 class="bg-white rounded-3xl max-w-3xl w-full overflow-hidden shadow-2xl relative border border-meora-accent/20">
                
                <button @click="quickViewOpen = false" class="absolute top-4 right-4 z-20 w-10 h-10 rounded-full bg-white/80 hover:bg-white text-meora-dark flex items-center justify-center shadow-sm">
                    <i class="fa-solid fa-xmark text-lg"></i>
                </button>

                <template x-if="selectedProduct">
                    <div class="grid grid-cols-1 md:grid-cols-2">
                        <div class="h-80 md:h-full bg-meora-bg relative">
                            <img :src="selectedProduct.image" :alt="selectedProduct.name" class="w-full h-full object-cover">
                        </div>

                        <div class="p-8 flex flex-col justify-between space-y-6">
                            <div class="space-y-3">
                                <span class="text-xs uppercase tracking-widest text-meora-deep font-bold" x-text="selectedProduct.category"></span>
                                <h2 class="font-serif text-3xl text-meora-dark" x-text="selectedProduct.name"></h2>
                                
                                <div class="flex items-center gap-2 text-xs">
                                    <div class="text-meora-gold font-bold">★★★★★</div>
                                    <span class="text-meora-muted" x-text="`(${selectedProduct.rating} / 5.0)`"></span>
                                </div>

                                <div class="text-2xl font-bold text-meora-dark pt-2" x-text="formatRupiah(selectedProduct.price)"></div>

                                <p class="text-xs text-meora-muted leading-relaxed font-light" x-text="selectedProduct.description"></p>

                                <div class="pt-2 space-y-2">
                                    <h5 class="text-xs font-bold uppercase tracking-wider text-meora-dark">Key Benefits:</h5>
                                    <ul class="text-xs text-meora-muted space-y-1">
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-meora-gold text-[10px]"></i> Deep 72-hour moisture lock</li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-meora-gold text-[10px]"></i> Non-comedogenic & soothing</li>
                                        <li class="flex items-center gap-2"><i class="fa-solid fa-check text-meora-gold text-[10px]"></i> 100% Organic certified botanicals</li>
                                    </ul>
                                </div>
                            </div>

                            <div class="pt-4 border-t border-meora-accent/15 flex gap-4">
                                <button @click="addToCart(selectedProduct); quickViewOpen = false;" class="flex-1 py-3.5 bg-meora-dark hover:bg-meora-deep text-white text-xs font-bold tracking-widest uppercase rounded-full shadow-md transition-all">
                                    Add To Bag
                                </button>
                                <button @click="toggleWishlist(selectedProduct)" class="w-12 h-12 rounded-full border border-meora-accent/30 flex items-center justify-center text-meora-dark hover:bg-meora-blush transition-colors">
                                    <i :class="isWishlisted(selectedProduct.id) ? 'fa-solid text-red-600' : 'fa-regular'" class="fa-heart"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </template>
            </div>
        </div>
    </div>

    <script>
        function meoraStore() {
            return {
                mobileMenuOpen: false,
                cartDrawerOpen: false,
                quickViewOpen: false,
                searchOpen: false,
                promoOpen: false,
                activeTab: 'all',
                newsletterEmail: '',
                freeShippingThreshold: 500000,
                
                selectedProduct: null,
                wishlist: [],
                toasts: [],
                cart: [
                    {
                        id: 1,
                        name: 'Luminescence Rose Serum',
                        category: 'serums',
                        price: 385000,
                        rating: 4.9,
                        image: 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=600&auto=format&fit=crop',
                        qty: 1
                    }
                ],

                products: [
                    {
                        id: 1,
                        name: 'Luminescence Rose Serum',
                        category: 'serums',
                        badge: 'Best Seller',
                        price: 385000,
                        rating: 4.9,
                        description: 'Infused with Damascus Rose oil and triple hyaluronic acid for instant dewy glow and deep hydration.',
                        image: 'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=600&auto=format&fit=crop'
                    },
                    {
                        id: 2,
                        name: 'Velvet Celestial Cream',
                        category: 'creams',
                        badge: 'Award Winner',
                        price: 420000,
                        rating: 4.9,
                        description: 'Ultra-nourishing night moisturizer enriched with bio-retinol and oat ceramides to firm and renew skin overnight.',
                        image: 'https://images.unsplash.com/photo-1608248597261-5421d55ab385?q=80&w=600&auto=format&fit=crop'
                    },
                    {
                        id: 3,
                        name: 'Nectarine Glow Lip Oil',
                        category: 'lips',
                        badge: 'Trending',
                        price: 189000,
                        rating: 4.8,
                        description: 'Non-sticky glass-shine lip therapy packed with wild jojoba and Vitamin E for lush, plush lips.',
                        image: 'https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=600&auto=format&fit=crop'
                    },
                    {
                        id: 4,
                        name: 'Hydra-Shield Sunscreen SPF 50+',
                        category: 'creams',
                        badge: 'Must Have',
                        price: 265000,
                        rating: 4.9,
                        description: 'Invisible Broad Spectrum SPF 50+ serum sunscreen. Zero white cast, infused with Niacinamide.',
                        image: 'https://images.unsplash.com/photo-1556228720-195a672e8a03?q=80&w=600&auto=format&fit=crop'
                    },
                    {
                        id: 5,
                        name: 'Midnight Recovery Elixir',
                        category: 'serums',
                        badge: 'New Formula',
                        price: 495000,
                        rating: 5.0,
                        description: 'Potent botanical facial oil with Bakuchiol and Rosehip extract for radiant morning elasticity.',
                        image: 'https://images.unsplash.com/photo-1601049541289-9b1b7bbbfe19?q=80&w=600&auto=format&fit=crop'
                    },
                    {
                        id: 6,
                        name: 'Botanical Radiance Essence',
                        category: 'serums',
                        badge: 'Pure Glow',
                        price: 340000,
                        rating: 4.7,
                        description: 'Micro-exfoliating fermented essence water that clarifies pores while drenching skin in moisture.',
                        image: 'https://images.unsplash.com/photo-1570172619644-dfd03ed5d881?q=80&w=600&auto=format&fit=crop'
                    }
                ],

                instaImages: [
                    'https://images.unsplash.com/photo-1522337360788-8b13dee7a37e?q=80&w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1620916566398-39f1143ab7be?q=80&w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1598440947619-2c35fc9aa908?q=80&w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1608248597261-5421d55ab385?q=80&w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1586495777744-4413f21062fa?q=80&w=400&auto=format&fit=crop',
                    'https://images.unsplash.com/photo-1512496015851-a90fb38ba796?q=80&w=400&auto=format&fit=crop'
                ],

                initData() {
                    setTimeout(() => {
                        this.promoOpen = true;
                    }, 1000);
                },

                get filteredProducts() {
                    if (this.activeTab === 'all') return this.products;
                    return this.products.filter(p => p.category === this.activeTab);
                },

                get cartTotalItems() {
                    return this.cart.reduce((sum, item) => sum + item.qty, 0);
                },

                get cartSubtotal() {
                    return this.cart.reduce((sum, item) => sum + (item.price * item.qty), 0);
                },

                formatRupiah(number) {
                    return new Intl.NumberFormat('id-ID', { style: 'currency', currency: 'IDR', maximumFractionDigits: 0 }).format(number);
                },

                addToCart(product) {
                    const existing = this.cart.find(i => i.id === product.id);
                    if (existing) {
                        existing.qty++;
                    } else {
                        this.cart.push({ ...product, qty: 1 });
                    }
                    this.showToast(`Added "${product.name}" to bag`);
                },

                updateQty(id, delta) {
                    const item = this.cart.find(i => i.id === id);
                    if (item) {
                        item.qty += delta;
                        if (item.qty <= 0) {
                            this.removeFromCart(id);
                        }
                    }
                },

                removeFromCart(id) {
                    this.cart = this.cart.filter(i => i.id !== id);
                    this.showToast('Item removed from shopping bag');
                },

                toggleWishlist(product) {
                    const idx = this.wishlist.findIndex(id => id === product.id);
                    if (idx > -1) {
                        this.wishlist.splice(idx, 1);
                        this.showToast('Removed from wishlist');
                    } else {
                        this.wishlist.push(product.id);
                        this.showToast('Added to wishlist ♥');
                    }
                },

                isWishlisted(id) {
                    return this.wishlist.includes(id);
                },

                toggleWishlistModal() {
                    if (this.wishlist.length === 0) {
                        this.showToast('Your wishlist is empty!');
                    } else {
                        this.showToast(`You have ${this.wishlist.length} item(s) in wishlist`);
                    }
                },

                openQuickView(product) {
                    this.selectedProduct = product;
                    this.quickViewOpen = true;
                },

                subscribeNewsletter() {
                    if (this.newsletterEmail) {
                        this.showToast('Welcome to MEORA Glow Club! Check your inbox.');
                        this.newsletterEmail = '';
                    }
                },

                checkout() {
                    const totalAmt = this.formatRupiah(this.cartSubtotal >= this.freeShippingThreshold ? this.cartSubtotal : this.cartSubtotal + 25000);
                    this.showToast(`Checkout total: ${totalAmt}. Forwarding to payment gateway...`);
                },

                showToast(message) {
                    const id = Date.now();
                    this.toasts.push({ id, message, show: true });
                    setTimeout(() => {
                        this.toasts = this.toasts.filter(t => t.id !== id);
                    }, 3000);
                }
            }
        }
    </script>

</body>
</html>