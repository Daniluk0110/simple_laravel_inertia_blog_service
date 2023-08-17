<script setup>
import {Head, Link} from "@inertiajs/vue3";

defineProps({post: Object})
</script>

<template>
    <Head><title>Show one post</title></Head>

    <div class="w-96 mx-auto pt-8">
        <h1 class="text-lg text-center pb-4 mb-2">Posts</h1>
        <div class="mb-4">
            <Link :href="route('posts.index')" class="text-sm">Back</Link>
        </div>
        <div v-if="post">
            <div class="mt-4 pt-4 border-t border-gray-400">
                <div>id: {{ post.id }}</div>
                <div>title: {{ post.title }}</div>
                <div>content: {{ post.content }}</div>
            </div>
        </div>
    </div>
</template>

<style scoped>

</style>
