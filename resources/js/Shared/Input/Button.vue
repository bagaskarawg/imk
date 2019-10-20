<template>
    <button v-if="isButton" @click="$emit('click')" :type="type" :class="`${defaultClass} ${className} ${faceStyle}`">
        <slot />
    </button>
    <inertia-link v-else :href="href" :class="`${defaultClass} ${className} ${faceStyle}`">
        <slot />
    </inertia-link>
</template>

<script>
export default {
    props: {
        type: String,
        className: String,
        clickEvent: Function,
        href: {
            type: String,
            required: false
        },
        face: {
            type: String,
            default: 'success'
        }
    },
    computed: {
        faceStyle () {
            let styles = 'bg-tertier hover:bg-green-700'

            if (this.face === 'danger') {
                styles = 'bg-red-500 hover:bg-red-700'
            }

            return styles
        },
        isButton () {
            return typeof this.href === 'undefined' || this.href === ''
        }
    },
    data: () => {
        return {
            defaultClass: 'max-w-full mx-auto p-3 rounded-lg text-white'
        }
    }
}
</script>
