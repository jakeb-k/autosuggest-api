<template>
    <div class="relative flex flex-row w-full h-full">
        <i class="fa-solid fa-magnifying-glass left-3 top-1/2 transform -translate-y-1/2 absolute cursor-pointer transition ease-in-out z-10"></i>
        <input
            :class="[
                'border border-gray-500 rounded-full bg-transparent text-black h-7 transition-all ease-in-out duration-300 ml-2 z-30 focus:ring-gray-500 focus:border-gray-500',
                search.length > 0
                    ? 'w-48 pl-6'
                    : 'w-7 focus:w-48 hover:w-48 active:w-48 pl-4',
            ]"
            id="search"
            type="text"
            name="search"
            v-model="search"
        />
    </div>
</template>

<script>
export default {
    props: {
        searchIcon: String, // Pass the icon URL as a prop
    },
    data() {
        return {
            search: "",
        };
    },
};
</script>
