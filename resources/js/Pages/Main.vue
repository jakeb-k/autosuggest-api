<template>
    <main
        class="flex flex-col items-center justify-center h-screen bg-gray-200"
    >
        <section
            class="lg:w-1/2 w-3/4 mx-auto bg-white shadow-lg rounded-lg p-4 h-[50vh] space-y-4 relative"
        >
            <div class="flex items-center justify-between">
                <SearchInput @SEARCHING="searchFoods" @RESET="isClearing = false" :isClearing="isClearing" />
                <button
                    @click="clearValues"
                    class="text-blue-500 hover:underline"
                >
                    CLEAR
                </button>
            </div>
            <p
                v-html="highlightQuery(message, query)"
                v-if="messages.length > 0"
                v-for="message in messages"
            ></p>
            <div v-else class="flex flex-col mt-12 h-full text-center">
                <p>Begin typing to see food categories! Try <b>Berries</b>.</p>
            </div>
        </section>
    </main>
</template>
<script>
import SearchInput from "@/Components/Search/SearchInput.vue";
import axios from "axios";

export default {
    components: {
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
            isClearing: false, 
        };
    },
    methods: {
        searchFoods(query) {
            this.query = query;
            if (query.length > 2) {
                //throttle the search
                setTimeout(() => {
                    axios
                        .get(route("foods.search", query))
                        .then((response) => {
                            this.messages = response.data.messages;
                        })
                        .catch((error) => {
                            console.error("Issue searching: " + error);
                        });
                }, 100);
            } else {
                this.messages = [];
            }
        },
        highlightQuery(text, query) {
            if (!query) return text; // Return original text if query is empty

            const regex = new RegExp(`(${query})`, "gi"); // Case-insensitive global match
            return text.replace(regex, "<b>$1</b>"); // Wrap matches in bold tag
        },
        clearValues(){
            //clear the values and pass to search component to clear as well
            this.messages = [];
            this.isClearing = true; 
        }
    },
};
</script>
