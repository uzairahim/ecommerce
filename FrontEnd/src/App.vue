<style>
    @import "assets/css/custom-style.css";
</style>
<script>
    import appConfig from "@/app.config";
    import {
        authComputed
    } from "@/state/helpers";

    export default {
        name: "app",
        page: {
            // All subcomponent titles will be injected into this template.
            titleTemplate(title) {
                title = typeof title === "function" ? title(this.$store) : title;
                return title ? `${title} | ${appConfig.title}` : appConfig.title;
            }
        },
        computed: {
            ...authComputed,
        },
    };
</script>

<template>
    <div id="app">
        <RouterView/>

    </div>
</template>
