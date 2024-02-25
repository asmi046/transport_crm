<template>
    <div class="messages">
        <div v-for="item in messages" :key="item.id"  class="message">
            <p class="data_time">{{ item.created_at }}</p>
            <p class="phone">{{ item.phone }}</p>
            <p v-if="item.cmd == 'contact'" class="type"> Входящий звонок </p>
            <p v-if="item.cmd == 'history'" class="type"> История звонков </p>
            <p v-if="item.cmd != 'history' && item.cmd != 'contact'" class="type"> {{item.cmd}} </p>
        </div>

        <p v-if="messages.length == 0">Ожидаем входящих сообщений</p>
    </div>
</template>

<script>
import { ref } from 'vue';


export default {

    setup() {
        let messages = ref([])

        Echo.channel(`vats_messages_channel`)
        .listen('.vats_messages_channel', (e) => {
            messages.value.push(e.message)
            console.log(e.message)
        });

        return {
            messages
        }
    }
}
</script>

<style>

</style>
