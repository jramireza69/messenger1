<template>
     <b-list-group-item :variant="variant">
             <b-row class="p-2" align-h="center">
                <b-col cols="12" md=3 class="text-center">
                   <b-img  rounded="circle" blank width="48" height="48" blank-color="777" alt="Circle image" class="m-1"></b-img>
                </b-col>
                <b-col cols="6" align-self="center" class="d-none d-md-block">
                    <p class="mb-1">{{ name }}</p>
                    <p class="text-muted small mb-1">{{ lastMessage}}</p>
                </b-col>
                <b-col cols="3" class="d-none d-md-block">
                    <p class="text-muted small">{{ lastTime}}</p>
                </b-col>
             </b-row>       
          </b-list-group-item>
</template>

<script>
    export default {
        props: [
           'variant'  //como esta variable viene desde el exterior ya na la tengo que declarar en los datos
        ],
        data(){
            return{   //objeto
                     //las variables que vamos a mostrar sobre el componente
                     name: 'Juan Ramos',
                     lastMessage: 'tu: hola juan',
                     lastTime: '1:37 pm'
            };

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
