<template>
    <div class="messages">
        <div v-for="item in messages" :key="item.id"  class="message">
            <p>{{ item.id }}</p>
            <p>{{ item.ip }}</p>
            <p>{{ item.created_at }}</p>
            <p>{{ item.method }}</p>
        </div>
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
