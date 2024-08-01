<template>
    <div class="flex flex-col items-center text-center">
        <img
            class="size-12 rounded-full"
            :src="user.profile_photo_url"
            alt=""
        />
        <p class="text-xs font-semibold">{{ user.first_name }}</p>
        <div class="flex flex-row gap-1 items-center text-xs">
            <Icon
                icon="heroicons:star-16-solid"
                class="text-yellow-500 size-3"
            />
            <p>{{ (5, 0) }} ({{ 0 }})</p>
        </div>
    </div>
</template>

<script setup>
defineProps({
    user: Object,
});
</script>
