<template>
    <app-layout>
        <template #header>
            Postes
        </template>
        <div v-for="poste in this.posteList" v-bind:key="poste.id">
        <div>{{ poste.title }}</div>
        <div>{{ poste.description }}</div>
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
