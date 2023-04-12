<template>
    <app-layout title="Candidature">
        <template #header>
            <h2 class="font-semibold text-xl text-gray-800 leading-tight">
                Candidatures
            </h2>
        </template>
        <div class="py-3" v-for="candidature in candidatureList" v-bind:key="candidature.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <span class="text-gray-500">Candidature</span>
                <div class="text-2xl">{{ candidature.title }}</div>
                <a href="#"
                    class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">Voir la
                    candidature</a>
            </div>
        </div>
    </app-layout>
</template>

<script>
import AppLayout from '@/layouts/AppLayout.vue'
export default {
    components: { AppLayout },

    data() {
        return {
            candidatureList: this.candidatures
        }
    },
    props: ['candidatures'],
    mounted() {
        console.log(this.candidatureList)
    }
}
</script>
