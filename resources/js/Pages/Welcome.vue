<script setup>
import { Head, Link } from '@inertiajs/vue3';

defineProps({
    canLogin: {
        type: Boolean,
    },
    canRegister: {
        type: Boolean,
    },
    laravelVersion: {
        type: String,
        required: true,
    },
    phpVersion: {
        type: String,
        required: true,
    },
});

</script>

<template>
    <Head title="Welcome" />
    <main class="flex flex-col items-center justify-center h-screen bg-gray-200">
        <section class=" w-1/3 rounded-2xl py-4 my-6 text-center bg-white shadow-lg">
            <p>Search Bar</p>
        </section>
        <section class="w-1/3 flex flex-col justify-center mx-auto bg-white shadow-lg rounded-lg p-4 text-center h-[50vh]">
            <p class="">New Page</p>
        </section>
    
    </main>
</template>
