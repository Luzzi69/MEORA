<!DOCTYPE html>
<html lang="id" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('title', 'MÉORA | Redefine Your Natural Radiance')</title>
    <link rel="icon" type="image/x-icon" href="{{ asset('logo.ico') }}">

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
                            bg: '#FFF8F6',
                            card: '#FADBD8',
                            accent: '#D93829',
                            deep: '#9B1B1B',
                            dark: '#2D0A0E',
                            rose: '#E54B4B',
                            blush: '#FCEBEB',
                            gold: '#D4A017',
                            muted: '#7A5458'
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

    <!-- Alpine.js CDN -->
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

        ::-webkit-scrollbar { width: 8px; }
        ::-webkit-scrollbar-track { background: #FFF8F6; }
        ::-webkit-scrollbar-thumb { background: #D93829; border-radius: 4px; }
        ::-webkit-scrollbar-thumb:hover { background: #9B1B1B; }

        [x-cloak] { display: none !important; }
    </style>
    @stack('styles')
</head>

<body x-data="meoraStore()" x-init="initData()">

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

    <!-- HEADER & NAVBAR -->
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
                    <button @click="searchOpen = true" class="text-meora-dark hover:text-meora-deep transition-colors p-1">
                        <i class="fa-solid fa-magnifying-glass text-lg"></i>
                    </button>

                    <button @click="toggleWishlistModal()" class="relative text-meora-dark hover:text-meora-deep transition-colors p-1 hidden sm:block">
                        <i class="fa-regular fa-heart text-lg"></i>
                        <span x-show="wishlist.length > 0" x-text="wishlist.length" class="absolute -top-1 -right-2 bg-meora-deep text-white text-[10px] w-4 h-4 rounded-full flex items-center justify-center font-bold"></span>
                    </button>

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

    <!-- MAIN CONTENT INJECTION -->
    <main>
        @yield('content')
    </main>

    <!-- FOOTER -->
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

    <!-- Alpine.js Store Script -->
    <script>
        function meoraStore() {
            return {
                mobileMenuOpen: false,
                cartDrawerOpen: false,
                quickViewOpen: false,
                searchOpen: false,
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
                initData() {},
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
    @stack('scripts')
</body>
</html>