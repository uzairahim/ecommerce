<template>
    <header id="page-topbar">
        <div class="navbar-header">
            <div class="d-flex">

                <div class="navbar-brand-box">
                    <router-link tag="a" to="/" class="logo logo-light">
                        <span class="logo-lg">
                                    <img
                                            class="logo-img"
                                            src="@/assets/images/logo-1.png"
                                            alt="Header Avatar"
                                    />
                        </span>
                    </router-link>
                </div>
                <button
                        type="button"
                        class="btn btn-sm px-3 font-size-24 header-item"
                        style="margin-top: 20px;"
                        id="vertical-menu-btn"
                        @click="toggleMenu()"
                >
                    <i class="mdi mdi-menu"></i>
                </button>
            </div>

            <div class="d-flex">
                <b-dropdown class="d-inline-block" right toggle-class="header-item" variant="white">
                    <template v-slot:button-content>
                        <img
                                class="rounded-circle header-profile-user"
                                src="@/assets/images/user-placeholder2.png"
                                alt="Header Avatar"
                        />
                    </template>
                    <a class="dropdown-item bg-dark-blue" href="/logout">
                        <i class="bx bx-power-off font-size-17 align-middle mr-1 text-danger"></i> Logout
                    </a>
                </b-dropdown>
            </div>
        </div>
    </header>
</template>

<script>
    export default {
        methods: {
            initFullScreen() {
                document.body.classList.toggle("fullscreen-enable");
                if (
                    !document.fullscreenElement &&
                    /* alternative standard method */ !document.mozFullScreenElement &&
                    !document.webkitFullscreenElement
                ) {
                    // current working methods
                    if (document.documentElement.requestFullscreen) {
                        document.documentElement.requestFullscreen();
                    } else if (document.documentElement.mozRequestFullScreen) {
                        document.documentElement.mozRequestFullScreen();
                    } else if (document.documentElement.webkitRequestFullscreen) {
                        document.documentElement.webkitRequestFullscreen(
                            Element.ALLOW_KEYBOARD_INPUT
                        );
                    }
                } else {
                    if (document.cancelFullScreen) {
                        document.cancelFullScreen();
                    } else if (document.mozCancelFullScreen) {
                        document.mozCancelFullScreen();
                    } else if (document.webkitCancelFullScreen) {
                        document.webkitCancelFullScreen();
                    }
                }
            },
            toggleMenu() {
                this.$parent.toggleMenu();
            },
            toggleRightSidebar() {
                this.$parent.toggleRightSidebar();
            },

        },
        created() {
        },
        mounted() {
        },
    };
</script>

<style>
    .logo-img{
        height: 70px;
        width: 70px;
        margin-top: 40px;
        border-radius: 10px;
        background-color: #fbfbfb;
    }
</style>