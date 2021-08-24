<template>
    <span>{{ formatearFecha }}</span>
</template>

<script>
    export default {
    props: ['fecha'],
        // mounted() {
        //     console.log(this.fecha)
        // },
       computed: {
           formatearFecha(){
               return moment(this.fecha).locale('es').format('ll')
           }
       }
    }
</script>