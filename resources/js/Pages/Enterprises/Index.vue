<template>
    <app-layout>
        <template #header>
            Enterprises
        </template>
        <div class="py-3" v-for="enterprise in this.enterpriseList" v-bind:key="enterprise.id">
            <div class="mx-8 bg-white rounded shadow p-4">
            <span class="text-gray-500">Entreprise</span>
                <div class="text-2xl">{{ enterprise.name }}</div>



                <a href="#" class="bg-indigo-500 text-white px-2 py-1 text-sm mt-3 inline-block rounded hover:bg-indigo-700">Voir l'entreprise</a>
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
            enterpriseList: this.enterprises
        }
    },
    props: ['enterprises'],
    mounted() {
        console.log(this.enterpriseList)
    }
}
</script>
