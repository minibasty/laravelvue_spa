<template>
    <div>
        <navbar-component></navbar-component>
        <div class="mt-4">
            <router-view></router-view>
        </div>
        <footer-component></footer-component>
    </div>
</template>

<script>
let brand = ' | Laravel Vue';
export default {
    mounted() {

    },
    watch: {
        '$route'(to,from){
            document.title= to.meta.title + brand
        }
    },
};
</script>
