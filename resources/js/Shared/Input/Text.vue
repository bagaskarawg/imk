<template>
    <div v-if="label === ''">
        <input
            :type="type"
            :name="name"
            :class="`${defaultClass} ${className}`"
            :placeholder="placeholder"
            @input="$emit('input', $event.target.value)"
        />
        <div v-if="errors.length" class="text-red mt-2 text-sm">
            {{ errors[0] }}
        </div>
    </div>
    <div v-else>
        <div class="sm:flex mb-2" :class="containerClass">
            <label class="sm:w-2/6 sm:text-right sm:pr-3" :for="name">{{
                label
            }}</label>
            <div class="sm:w-4/6">
                <input
                    :type="type"
                    :id="name"
                    :name="name"
                    :value="value"
                    @input="$emit('input', $event.target.value)"
                    :class="
                        `${defaultClass} ${className} ${
                            errors.length ? 'error' : ''
                        }`
                    "
                    :placeholder="placeholder"
                />
                <div v-if="errors.length" class="text-red mt-2 text-sm">
                    {{ errors[0] }}
                </div>
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
            default: "text"
        },
        errors: {
            type: Array,
            default: () => []
        },
        name: String,
        className: String,
        containerClass: String,
        placeholder: String,
        value: String,
        label: {
            type: String,
            default: ""
        }
    },
    data: () => {
        return {
            defaultClass: "border border-black p-1 w-full sm:w-56 max-w-full"
        };
    }
};
</script>
