<template>
    <div class="input-group">
        <input id="btn-input" type="text" autofocus name="message" required class="form-control input-sm" placeholder="Type your message here..." v-model="newMessage" @keyup.enter="sendMessage">
    </div>
</template>

<script>
    export default {
        props: ['user'],

        data() {
            return {
                newMessage: ''
            }
        },

        methods: {
            sendMessage() {
                if(this.newMessage == '') return;
                
                ChatBus.$emit('messagesent', {
                    user: this.user,
                    message: this.newMessage
                });

                this.newMessage = '';
            }
        }
    }
</script>