<template>
    <div class="sm:flex sm:justify-between mb-2">
        <label
            :for="name"
            class="w-full sm:w-40 max-w-full inline-block text-center sm:rounded p-3 bg-red-600"
            >{{ label }}</label
        >
        <label
            :for="name"
            class="w-full sm:w-auto max-w-full inline-block text-center p-3 bg-green-500"
        >
            <span v-if="!chosen">Pilih File</span>
            <span v-else><icon class="fill-current" /> Ganti File</span>
            <input
                type="file"
                :id="name"
                class="hidden"
                :name="name"
                @change="chooseFile"
            />
        </label>
    </div>
</template>

<script>
import { Icon } from "@/Shared";

export default {
    components: {
        Icon
    },
    data() {
        return {
            chosen: false
        };
    },
    props: {
        name: String,
        label: String
    },
    methods: {
        chooseFile(e) {
            let files = e.target.files;
            this.chosen = files.length > 0;
            this.$emit("input", files);
        }
    }
};
</script>
