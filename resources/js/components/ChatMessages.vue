<template>
    <ul class="chat">
        <li :class="{ 'text-right': message.user.email == user.email }" class="clearfix" v-for="message in messages">
            <div class="chat-body clearfix">
                <div class="header">
                    <strong class="primary-font">
                        {{ message.user.name }}
                    </strong>
                </div>
                <p>
                    {{ message.message }}
                </p>
            </div>
        </li>
    </ul>
</template>

<script>
    export default {
        props: ['user'],
        data(){
            return {
                messages: []
            }
        },
        created(){
            const $this = this;
            
            this.fetchMessages();

            Echo.private('chat').listen('MessageSent', (e) => {
                $this.messages.push({
                    message: e.message.message,
                    user: e.user
                });
                $this.scrollToBottom();
            });
            
            ChatBus.$on('messagesent', this.addMessage);
        },
        methods: {
            fetchMessages() {
                const $this = this;
                axios.get('/fetchMessages').then(({data}) => {
                    $this.messages = data;
                    $this.scrollToBottom();
                });
            },
            addMessage(message) {
                const $this = this;
                axios.post('/sendMessage', message).then(({data}) => {
                    $this.messages.push(message);
                    $this.scrollToBottom();
                });
            },
            scrollToBottom(){
                setTimeout(() => {
                    $('.chatBody').scrollTop($('.chatBody')[0].scrollHeight);
                }, 100);
            }
        }
    }
</script>