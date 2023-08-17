<script setup>
import {Head, Link} from "@inertiajs/vue3";
import {router} from '@inertiajs/vue3'
import {reactive} from "vue";

const form = reactive({
    title: null,
    content: null,
})

function store() {
    router.post('/posts', form)
}
</script>

<template>
    <Head><title>Create Post</title></Head>

    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg text-center pb-4 mb-5">Create a new post</h1>
        <form @submit.prevent="store">
            <div class="mb-4">
                <input v-model="form.title" class="mb-1 rounded-full border-gray-300 w-full" type="text"
                       placeholder="title"/>
            </div>
            <div class="mb-4">
                <textarea v-model="form.content" class="mb-1 rounded-full border-gray-300 w-full"
                          placeholder="content"></textarea>
            </div>
            <div>
                <button
                    class="ml-auto hover:bg-white hover:text-sky-500 border border-sky-500 block p-2 w-32 bg-sky-500 rounded-full text-center text-white"
                    type="submit">Store</button>
            </div>
        </form>
    </div>
</template>

<style scoped>

</style>
