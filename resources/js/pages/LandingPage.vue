<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <div class="flex min-h-svh flex-col bg-background text-foreground">
        
        <!-- Main Content -->
        <main class="flex-1">
            <div class="">
                <!-- Hero Section -->
                <section
                    class="relative flex h-[calc(100svh-3.5rem)] w-full flex-col items-center justify-center text-center"
                    style="background-image: url('/Images/Landing Page/Landing page.png'); background-size: cover; background-position: center"
                >

                    <div class="absolute inset-0 bg-black/50" />
                    <div class="relative z-10 mx-auto max-w-3xl">
                        <h1 class="text-4xl font-bold tracking-tight text-white sm:text-5xl md:text-6xl">The Art of the Auction</h1>
                        <p class="mt-6 text-lg text-gray-300 md:text-xl">Discover, bid, and win rare and exclusive items from around the world.</p>
                        <div class="mt-10 flex items-center justify-center gap-4">
                            <Link :href="route('register')">
                                <Button size="lg">Get Started</Button>
                            </Link>
                            <Link :href="route('dashboard')">
                                <Button size="lg" variant="outline">Browse Auctions</Button>
                            </Link>
                        </div>
                    </div>
                </section>
            </div>
        </main>
    </div>
</template>
