<template>
    <app-layout>
        <template #header>
            Postes
        </template>
        <div class="py-3" v-for="poste in this.posteList" v-bind:key="poste.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-4xl">{{ poste.title }}</div>
                <div text-sm->{{ poste.description }}</div>
                <a href="#" class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">Voir le poste</a>
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
            posteList: this.postes
        }
    },
    props: ['postes'],
    mounted() {
        console.log(this.posteList)
    }

}
</script>
