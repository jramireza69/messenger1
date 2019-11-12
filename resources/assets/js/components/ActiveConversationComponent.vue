<template>
  <b-row class="h-100">
      <b-col cols="8">  
         <b-card no-body
              footer-bg-variant="light"
              footer-border-variant="dark"
              title="Conversacion activa"
              class="h-100">  

               <b-card-body class="card-body-scroll">
            <message-conversation-component
           v-for="message in messages":key="message.id"
           v-bind:written-by-me="message.written_by_me">  <!-- uso directiva bind -->
            {{ message.content}}
          </message-conversation-component>     
               </b-card-body>          
              
          
               


              <div slot="footer">
               <b-form class=" mb-0" @submit.prevent="postMessage"
               autocomplete="off" >
                   <b-input-group>
                    <b-form-input class="text-center"
                        type="text"
                        v-model="newMessage"
                        placeholder="Escribe un mensaje...">
                      </b-form-input>

                        <b-input-group-append>
                        <b-button type="submit" variant="primary">Enviar</b-button>
                        </b-input-group-append>
                    </b-input-group>
                 </b-form> 
              </div>
            </b-card>              
              </b-col>


              <b-col cols="4">
                <b-img  rounded="circle" blank width="48" height="48" blank-color="777" alt="Circle image" class="m-1"></b-img>
                  <p>{{ contactName }}</p>
                  <hr>
                  <b-form-checkbox >
                 
                Desactivar notificaciones
              </b-form-checkbox>
          </b-col>
      </b-row>   
           
</template>

<style>
  .card-body-scroll {
    max-height: calc(100vh - 63px);
    overflow-y: auto; 
  }
</style>

<script>
    export default {
      props: {
        contactId: Number,
        contactName: String,
        messages: Array
      },
        data(){
            return{
              newMessage: ''
            //  contactId: 2  //variable que se usa para hacer la peticion del contacto que pide la conversacion y esta sera la propieda que se enviara al componente hijo.
            };

        },
        mounted() {
         
        },
        methods: {
          postMessage () {
            const params = {
              to_id: this.contactId,
              content: this.newMessage
             };
            axios.post('/api/messages', params)
               .then((response) => {
                if(response.data.success){
                 this.newMessage= '';
                 const message = response.data.message;
                 message.written_by_me = true;
                 this.$emit('messageCreated', message);
                }
               
             });
            }

        }
    }
            
</script>