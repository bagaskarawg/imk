<template>
  <main class="relative min-h-screen">
    <navbar />
    <div class="container p-4 pb-24">
      <slot />
    </div>
    <copyright />
  </main>
</template>

<script>
import Navbar from '@/Shared/Navbar'
import Copyright from '@/Shared/Copyright'

export default {
  components: {
    Navbar,
    Copyright,
  },
  props: {
    title: String,
  },
  watch: {
    title: {
      immediate: true,
      handler(title) {
        document.title = title ? `${title} - ${this.$page.app.name}` : this.$page.app.name
      }
    }
  }
}
</script>