
<template>
    <h1>Test</h1>

    <div style="display: flex;">
        <div style="flex: 1;">{{ this.sidebar }}</div>
        <div style="flex: 3;">{{ this.main }}</div>
    </div>
</template>
<script>

import { ref } from 'vue'
const message = ref('Hello World!')

export default {
    data() {
        return {
            sidebar: 'Hello World',
            main: 'Hello World'
        }
    }
}
</script>
