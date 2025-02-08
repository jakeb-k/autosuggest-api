<template>
    <Head title="Welcome" />
    <main
        class="flex flex-col items-center justify-center h-screen bg-gray-200"
    >
        <section
            class="w-1/3 rounded-2xl py-4 my-6 text-center bg-white shadow-lg"
        >
            <SearchInput @SEARCHING="searchFoods" />
        </section>
        <section
            class="w-1/3 mx-auto bg-white shadow-lg rounded-lg p-4 h-[50vh] space-y-4"
        >
            <p v-html="highlightQuery(message, query)" v-if="messages.length > 0" v-for="message in messages">
            </p>
            <div v-else class="flex flex-col mt-12 h-full text-center">
                <p>Begin typing to see food categories!</p>
            </div>
        </section>
    </main>
</template>
<script>
import { Head, Link } from "@inertiajs/vue3";
import SearchInput from "@/Components/Search/SearchInput.vue";
import axios from "axios";

export default {
    components: {
        Head,
        Link,
        SearchInput,
    },
    props: {
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
    },
    data() {
        return {
            messages: [],
            query: "",
        };
    },
    methods: {
        searchFoods(query) {
            this.query = query;
            axios
                .get(route("foods.search", query))
                .then((response) => {
                    this.messages = response.data.messages;
                })
                .catch((error) => {
                    console.error("Issue searching: " + error);
                });
        },
        highlightQuery(text, query) {
            if (!query) return text; // Return original text if query is empty

            const regex = new RegExp(`(${query})`, "gi"); // Case-insensitive global match
            return text.replace(regex, "<b>$1</b>"); // Wrap matches in 
        },
    },
};
</script>
