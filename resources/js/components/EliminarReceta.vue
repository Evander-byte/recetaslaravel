<template>
    <input 
        type="submit" 
        class="btn btn-danger mr-1" 
        value="Eliminar"
        @click="eliminarReceta"
    >
</template>

<script>
export default {
    props: ['recetaId'],
    methods:{
        eliminarReceta(){
            this.$swal({
                title: '¿Deseas eliminar esta receta?',
                text: "Una vez eliminada, no se puede recuperar!",
                icon: 'warning',
                showCancelButton: true,
                confirmButtonColor: '#3085d6',
                cancelButtonColor: '#d33',
                confirmButtonText: 'Sí, eliminar!',
                cancelButtonText: 'No'
            }).then((result) => {
                if (result.isConfirmed) {
                    const params = {
                        id: this.recetaId
                    }
                    // Enviar la petición al servidor
                    axios.post(`/recetas/${this.recetaId}`, {params, _method: 'delete'})
                    .then(respuesta => {
                        this.$swal({
                            position: 'top-end',
                            icon: 'success',
                            title: 'Receta Eliminada',
                            showConfirmButton: false,
                            timer: 1500
                        });
                        // Eliminar receta del DOM
                        this.$el.parentNode.parentNode.parentNode.removeChild(this.$el.parentNode.parentNode);
                    })
                    .catch(error => {
                        console.log(error);
                    })
                }
            })
        }
    }
}
</script>