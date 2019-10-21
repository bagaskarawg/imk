<template>
    <div class="flex justify-between mb-2">
        <label :for="name" class="w-40 max-w-full text-center rounded p-3 bg-red-600">{{ label }}</label>
        <label :for="name" class="inline-block p-3 bg-green-500">
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
