<template>
    <div>
        <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="/">
                    Click And Collect
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        
                    </ul>

                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                        <li class="nav-item" v-if="!is_logged">
                            <a class="nav-link" href="/login">Login</a>
                        </li>

                        <li class="nav-item" v-if="!is_logged">
                            <a class="nav-link" href="/register">Register</a>
                        </li>

                        <li class="nav-item dropdown"  v-if="is_logged">
                            <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                Dame NDIAYE <span class="caret"></span>
                            </a>

                            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                <a class="dropdown-item" href="" @click.prevent="onLogout">Logout</a>

                                <form ref="logoutForm" id="logout-form" action="/logout" method="POST" style="display: none;">
                                    <input type="hidden" name="_token" :value="csrf_token">
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
            </div>
        </nav>
        <main class="py-4">
            <slot />
        </main>
    </div>
</template>

<script>
    export default {
        props: {
            is_logged: { type: Boolean, default: false }
        },
        name: 'Application',


        computed: {
            csrf_token() {
                return window.csrfContent;
            }
        },

        methods: {
            onLogout() {
                this.$refs.logoutForm.submit();
            }
        }
    }
</script>
