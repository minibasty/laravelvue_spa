<template>
    <div>
        <div class="container">
            <nav class="navbar navbar-expand-md navbar-dark bg-dark fixed-top">
                <a class="navbar-brand" href="#">Laravel SPA</a>
                <button
                    class="navbar-toggler d-lg-none"
                    type="button"
                    data-toggle="collapse"
                    data-target="#collapsibleNavId"
                    aria-controls="collapsibleNavId"
                    aria-expanded="false"
                    aria-label="Toggle navigation"
                >
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="collapsibleNavId">
                    <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
                        <li class="nav-item active">
                            <router-link class="nav-link" :to="{ name: 'home' }"
                                >Home</router-link
                            >
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/about"
                                >About</router-link
                            >
                        </li>
                        <li class="nav-item active">
                            <router-link class="nav-link" to="/contact"
                                >Contact</router-link
                            >
                        </li>
                    </ul>
                    <ul class="navbar-nav ml-auto mt-2 mt-lg-0">
                        <li class="nav-item">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'login' }"
                                >Login</router-link
                            >
                        </li>
                        <li class="nav-item">
                            <router-link
                                class="nav-link"
                                :to="{ name: 'register' }"
                                >Register</router-link
                            >
                        </li>
                    </ul>
                </div>
            </nav>
        </div>
    </div>
</template>

<script>
export default {
    mounted() {
        console.log("components Mounted");
    }
};
</script>
