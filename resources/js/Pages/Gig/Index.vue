<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';
import UserProfileSmall from '@/Components/User/UserProfileSmall.vue';
import moment from 'moment';
import { Link } from '@inertiajs/vue3'

moment.locale('fr', {
    relativeTime: {
      future: 'in %s',
      past: '%s',
      s:  'seconds',
      ss: '%ss',
      m:  'a minute',
      mm: '%dm',
      h:  'an hour',
      hh: '%dh',
      d:  'a day',
      dd: '%dd',
      M:  'a month',
      MM: '%dM',
      y:  'a year',
      yy: '%dY'
    }
});

defineProps({
    gigs: Object
})
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <div class="flex flex-row items-center gap-6">
                <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                    Gigs
                </h2>
            </div>
        </template>

        <div class="sm:py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <ul class="flex flex-col divide-y">
                        <template v-for="gig in gigs.data" :key="gig.id">
                            <Link :href="route('gigs.show', gig.id)">
                                <li class="flex flex-col">
                                    <div class="flex flex-row">
                                        <div class="flex flex-col w-20 shrink-0 p-3 text-center">
                                            <UserProfileSmall :user="gig.user"/>
                                            <p class="text-xs text-gray-500">{{ moment(gig.created_at).fromNow() }}</p>
                                        </div>
                                        <div class="flex flex-col flex-grow p-3 ps-0">
                                            <p>{{ gig.title }}</p>
                                            <p class="text-sm">{{ gig.description }}</p>
                                            <span class="flex flex-row gap-2 items-center">
                                                <p class="text-red-600">{{ gig.initial_price }} MAD</p>
                                            </span>
                                            <p class="text-sm text-gray-500">{{ gig.address_road }}</p>
                                        </div>
                                        <button class="bg-gray-100 text-gray-500 flex justify-center items-center p-1 shrink-0">
                                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="size-6">
                                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 6.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 12.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5ZM12 18.75a.75.75 0 1 1 0-1.5.75.75 0 0 1 0 1.5Z" />
                                            </svg>
                                        </button>
                                    </div>
                                </li>
                            </Link>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
