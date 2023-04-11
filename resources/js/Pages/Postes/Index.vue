<template>
    <app-layout>
        <template #header>
            Postes
        </template>
        <div class="py-3" v-for="poste in this.posteList" v-bind:key="poste.id">
            <div class="mx-8 bg-white rounded shadow p-4">
                <div class="text-4xl">{{ poste.title }}</div>
                <div>
                    <span class="text-gray-500">Description :</span>
                    <div class=" text-sm">{{ poste.description }}</div>
                </div>

                <div> <span class="text-gray-500">Enterprise :</span> {{ poste.enterprise_name }}</div>
                <div><span class="text-gray-500">Lien :</span> {{ poste.lien }}</div>

                <div class="text-sm text-gray-500">Publié le {{ poste.created_at }}</div>
                <a href="#"
                    class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">Voir le
                    poste</a>
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
