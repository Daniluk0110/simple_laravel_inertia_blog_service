<script setup>
import {Head, Link, router} from "@inertiajs/vue3";
import MainLayout from "@/Layouts/MainLayout.vue";

defineProps({posts: Object})

function deletePost(id) {
    router.delete(`/posts/${id}`)
}
</script>

<template>
    <MainLayout>
        <Head><title>All posts</title></Head>

        <h1 class="text-lg text-center pb-4 mb-5">Posts</h1>
        <div class="mb-8">
            <Link :href="route('posts.create')" class="hover:bg-white hover:text-sky-500 border border-sky-500 block p-2 w-32 bg-sky-500 rounded-full text-center text-white"
            >Add post</link>
        </div>
        <div v-if="posts">
            <div v-for="post in posts" class="mt-4 pt-4 border-t border-gray-400">
                <div>id: {{ post.id }}</div>
                <div>title: {{ post.title }}</div>
                <div>content: {{ post.content }}</div>
                <div class="text-sm text-right">{{ post.date }}</div>

                <div class="text-sm text-right">
                    <Link class="text-sky-500" :href="route('posts.show', post.id)">Open</Link>
                </div>

                <div class="text-sm text-right">
                    <Link class="text-sky-500" :href="route('posts.edit', post.id)">Edit</Link>
                </div>

                <div class="text-sm text-right">
                    <p @click="deletePost(post.id)" class="cursor-pointer text-red-500">Delete</p>
                </div>
            </div>
        </div>
    </MainLayout>
</template>

<style scoped>

</style>
