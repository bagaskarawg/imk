<template>
    <div class="inline-block relative">
        <select :name="name" :id="name" :class="className" :value="value" @input="$emit('input', $event.target.value)" class="border border-black bg-white appearance-none rounded-none p-1 w-12 max-w-full">
            <option v-if="defaultOpt" value="">{{ defaultOpt }}</option>
            <option v-for="option in options" :key="option" :value="option">{{ option }}</option>
        </select>
        <div class="pointer-events-none absolute inset-y-0 right-0 flex items-center px-2 text-gray-700">
            <svg class="fill-current h-4 w-4" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 20 20"><path d="M9.293 12.95l.707.707L15.657 8l-1.414-1.414L10 10.828 5.757 6.586 4.343 8z"/></svg>
        </div>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        className: String,
        defaultOpt: String,
        value: String,
        options: {
            type: [Number, Array, Object],
            default: [],
        },
    }
}
</script>