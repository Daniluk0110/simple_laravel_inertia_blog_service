<script setup>
import {Head, Link} from "@inertiajs/vue3";
import {router} from '@inertiajs/vue3'
import {reactive} from "vue";
import MainLayout from "@/Layouts/MainLayout.vue";

const props = defineProps({
    post: Object
});

const form = reactive({
    title: props.post.title,
    content: props.post.content,
});

function update() {
    console.log(form)
    router.patch(`/posts/${props.post.id}`, form)
}
</script>

<template>
    <MainLayout>
        <Head><title>Create Post</title></Head>

        <h1 class="text-lg text-center pb-4 mb-5">Edit a new post</h1>
        <div class="mb-4">
            <Link :href="route('posts.index')" class="text-sm">Back</Link>
        </div>
        <form @submit.prevent="update">
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
                    type="submit">Update</button>
            </div>
        </form>
    </MainLayout>
</template>

<style scoped>

</style>
