<template>
    <div class="sm:flex sm:justify-between mb-2">
        <label :for="name" class="w-full sm:w-40 max-w-full inline-block text-center sm:rounded p-3 bg-red-600">{{ label }}</label>
        <label :for="name" class="w-full sm:w-auto max-w-full inline-block text-center p-3 bg-green-500">
            Pilih File
            <input type="file" :id="name" class="hidden" :name="name" />
        </label>
    </div>
</template>

<script>
export default {
    props: {
        name: String,
        label: String,
    },
}
</script>
