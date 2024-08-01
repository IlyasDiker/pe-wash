<script setup>
import AppLayout from '@/Layouts/AppLayout.vue';

defineProps({
    teams: Array
})
</script>

<template>
    <AppLayout title="Dashboard">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 dark:text-gray-200 leading-tight">
                Teams
            </h2>
        </template>

        <div class="py-12">
            <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
                <div class="bg-white dark:bg-gray-800 overflow-hidden shadow-xl sm:rounded-lg">
                    <ul>
                        <template v-for="team in teams.data">
                            <li>
                                <p>{{ team.name }}</p>
                                <pre>{{ team }}</pre>
                            </li>
                        </template>
                    </ul>
                </div>
            </div>
        </div>
    </AppLayout>
</template>
