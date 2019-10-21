<template>
    <div class="border border-black" :class="faceStyle">
        <div v-if="title" class="bg-blue-900 text-white p-2">
            {{ title }}
        </div>
        <div class="p-2">
            <slot />
        </div>
    </div>
</template>

<script>
export default {
    props: {
        type: String,
        title: String,
        face: String,
    },
    computed: {
        faceStyle () {
            let faceStyle = ''

            if (this.face === 'blue') {
                faceStyle = 'bg-blue-800 text-white'
            }

            return faceStyle
        }
    },
}
</script>