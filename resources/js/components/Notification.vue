<template>
    <li class="nav-item dropdown">
        <a class="nav-link" href="#" id="navbarNotifications" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fa fa-bell"></i><span class="badge badge-count badge-primary">{{ notifications.length }}</span>
        </a>
        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarNotifications">
            <a class="dropdown-item" href="#" @click="MarkAsRead(notification)" v-for="notification in notifications">
                {{ notification.data.userName }} commented on : {{ notification.data.post.title }}
            </a>
        </div>
    </li>
</template>

<script>
    export default {
        props: ['notifications'],
        methods: {
            MarkAsRead(notification) {
                let data = {
                    id: notification.id
                };
                axios.post('/notification/read', data).then(() => {
                    window.location.href = "/post/" + notification.data.post.id;
                });
            }
        }
    }
</script>

<style scoped>
    .badge-count{
        position: relative;
        top: -15px;
        left: -9px;
        border-radius: 10px;
    }
    .fa-bell{
        font-size: 1.5em;
        color: black;
    }
</style>
