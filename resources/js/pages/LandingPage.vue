<script setup lang="ts">
import { Button } from '@/components/ui/button';
import { Head, Link } from '@inertiajs/vue3';
</script>

<template>
    <Head title="Welcome" />
    <div class="flex min-h-svh flex-col bg-background text-foreground">
        <!-- Header -->
        <header class="sticky top-0 z-50 w-full border-b border-border/40 bg-background/95 backdrop-blur supports-[backdrop-filter]:bg-background/60">
            <div class="container flex h-14 max-w-screen-2xl items-center justify-between">
                <Link href="/" class="mr-6 ml-4 flex items-center space-x-2">
                    <img src="/images/logo/Nilam Logo.png" alt="Nilam Logo" class="h-8 w-auto" />
                </Link>
                <nav class="flex items-center gap-4">
                    <Link :href="route('login')">
                        <Button variant="ghost">Log in</Button>
                    </Link>
                    <Link :href="route('register')">
                        <Button>Sign up</Button>
                    </Link>
                </nav>
            </div>
        </header>

        <!-- Main Content -->
        <main class="flex-1">
            <div class="">
                <!-- Hero Section -->
                <section class="relative flex h-[calc(100svh-3.5rem)] w-full flex-col items-center justify-center text-center">
                    <!-- Note: A background image could be added here for more visual appeal -->
                    <!-- Example: style="background-image: url('/path/to/your/image.jpg'); background-size: cover; background-position: center;" -->
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
