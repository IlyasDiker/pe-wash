<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import GigMapView from '@/Components/Gig/GigMapView.vue';
import { Link } from '@inertiajs/vue3';

defineProps({
    gig: Object
})
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex flex-row items-center gap-6">
                <Link :href="route('gigs.index')">
                    <Icon icon="heroicons:arrow-left" class="size-6" />
                </Link>
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    {{ gig.title }}
                </h2>
            </div>
        </template>

        <div class="sm:pt-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <GigMapView :gig="gig" />
                </div>
            </div>
        </div>

        <div class="sm:py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <pre>{{ gig }}</pre>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
