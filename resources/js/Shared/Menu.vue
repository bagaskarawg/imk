<template>
    <div class="border-b border-gray-500 mb-5 p-3 text-right">
        <inertia-link :href="route('home')" class="p-3"
            :class="active === 'home' ? 'border-b-2 border-black' : ''">Beranda</inertia-link>
        <inertia-link :href="route('home')" class="p-3"
            :class="active === 'registration' ? 'border-b-2 border-black' : ''">Pendaftaran</inertia-link>
        <inertia-link :href="route('home')" class="p-3"
            :class="active === 'requirements' ? 'border-b-2 border-black' : ''">Persyaratan</inertia-link>
    </div>
</template>

<script>
export default {
    props: {
        active: String,
        default: 'home',
    },
}
</script>