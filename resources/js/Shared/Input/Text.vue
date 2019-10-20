<template>
    <input v-if="label === ''" :type="type" :name="name" :class="`${defaultClass} ${className}`" :placeholder="placeholder">
    <div v-else>
        <div class="sm:flex mb-2" :class="containerClass">
            <label class="sm:w-2/6 sm:text-right sm:pr-3" :for="name">{{ label }}</label>
            <div class="sm:w-4/6">
                <input :type="type" :id="name" :name="name" :value="value" @input="$emit('input', $event.target.value)" :class="`${defaultClass} ${className}`" :placeholder="placeholder">
                <slot />
            </div>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        type: {
            type: String,
            default: 'text'
        },
        name: String,
        className: String,
        containerClass: String,
        placeholder: String,
        value: String,
        label: {
            type: String,
            default: ''
        },
    },
    data: () => {
        return {
            defaultClass: 'border border-black p-1 w-full sm:w-56 max-w-full'
        }
    }
}
</script>