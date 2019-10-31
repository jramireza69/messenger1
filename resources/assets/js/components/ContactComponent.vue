<template>
     <b-list-group-item :variant="variant">
             <b-row class="p-2" align-h="center">
                <b-col cols="12" md=3 class="text-center">
                   <b-img  rounded="circle" blank width="48" height="48" blank-color="777" alt="Circle image" class="m-1"></b-img>
                </b-col>
                <b-col cols="6" align-self="center" class="d-none d-md-block">
                    <p class="mb-1">{{ conversation.contact_name }}</p>
                    <p class="text-muted small mb-1">{{ conversation.last_message}}</p>
                </b-col>
                <b-col cols="3" class="d-none d-md-block">
                    <p class="text-muted small">{{ conversation.last_time}}</p>
                </b-col>
             </b-row>       
          </b-list-group-item>
</template>

<script>
    export default {
        props: {
           //'variant',  //como esta variable viene desde el exterior ya na la tengo que declarar en los datos
           //'conversation'  //propiedad que viene de forma externa del componente hijo. lo convierto a un objeto
        variant: String,
        conversation: Object
        },
        data(){
            return{   //objeto
                     //las variables que vamos a mostrar sobre el componente
                     // name: 'Juan Ramos',   no neceito las variables porque ya las tengo en el objeto conversation
                     // lastMessage: 'tu: hola juan',
                     // lastTime: '1:37 pm'
            };

        },
        mounted() {
            console.log('Component mounted.')
        }
    }
</script>
