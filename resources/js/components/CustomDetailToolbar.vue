<template>
    <div class="flex w-full justify-end items-center mx-3">
        <component v-if="hasComponent" :is="component"></component>
    </div>
</template>

<script>
export default {
    props: ['resource', 'resourceName', 'resourceId'],

    computed: {
        component(){
            return this.resourceName + '-detail-toolbar';
        },
        hasComponent()
        {
            return this.component in this.$options.components;
        }
    }
}
</script>
