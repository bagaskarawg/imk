<template>
    <span>
        <button v-if="isButton" :type="type" :class="`${className} ${faceStyle}`">
            <slot />
        </button>
        <inertia-link v-else :href="href" :class="`${className} ${faceStyle}`">
            <slot />
        </inertia-link>
    </span>
</template>

<script>
export default {
    props: {
        type: String,
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
            return styles
        },
        isButton () {
            return this.href === ''
        }
    },
    data: () => {
        return {
            className: 'block w-32 mx-auto p-3 rounded-lg text-white uppercase'
        }
    }
}
</script>
