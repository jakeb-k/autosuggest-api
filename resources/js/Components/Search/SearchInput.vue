<template>
    <div class="w-full h-full flex pl-4">
        <div class="relative flex items-center cursor-pointer">
            <i
                class="fa-solid fa-magnifying-glass absolute right-1.5 cursor-pointer transition ease-in-out z-10"
            ></i>
            <input
                :class="[
                    'border border-gray-500 rounded-full pl-3 bg-transparent text-black h-7 transition-all ease-in-out duration-300 z-30 focus:ring-gray-500 focus:border-gray-500',
                    search.length > 0
                        ? 'w-56'
                        : 'w-7 focus:w-56 hover:w-56 active:w-56',
                ]"
                id="search"
                type="text"
                name="search"
                v-model="search"
            />
        </div>
    </div>
</template>

<script>
export default {
    emits: ["SEARCHING", 'RESET'],
    props: ['isClearing'], 
    watch: {
        search(value) {
            this.$emit("SEARCHING", value);
        },
        isClearing(value){
            if(value){
                this.search = '';
                this.$emit('RESET'); 
            } 
        }
    },
    data() {
        return {
            search: "",
        };
    },
};
</script>
