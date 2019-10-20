<template>
    <input :type="type" :name="name" class="border border-black p-1 w-40 max-w-full" :placeholder="placeholder">
</template>

<script>
export default {
    props: ['type', 'name', 'placeholder']
}
</script>