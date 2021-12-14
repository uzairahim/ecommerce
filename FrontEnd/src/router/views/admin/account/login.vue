<template>
    <Form>
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-primary">
                    <div class="text-primary text-center p-4">
                        <h5 class="text-white font-size-20">Welcome Back!</h5>
                        <p class="text-white-50">Sign in to continue to My Portal</p>
                        <!-- <a href="/" class="logo logo-admin">
                          <img src="@/assets/logo-white.png" height="60" alt="logo" />
                        </a> -->
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="p-3">
                        <b-alert
                                v-model="isAuthError"
                                variant="danger"
                                class="mt-3"
                                dismissible
                        >{{authError}}
                        </b-alert>

                        <b-form @submit.prevent="tryToLogIn" class="form-horizontal mt-4">
                            <b-form-group id="input-group-1" label="Email" label-for="input-1"
                                          invalid-feedback="email is required">
                                <b-form-input
                                        id="input-1"
                                        v-model="email"
                                        type="email"
                                        placeholder="Enter email"
                                        :class="{ 'is-invalid': isValid && $v.email.$error }"
                                        :disabled="submitted"
                                        aria-describedby="input-feedback"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group
                                    id="input-group-2"
                                    label="Password"
                                    label-for="input-2"
                            >
                                <div class="input-group mb-3">
                                    <b-form-input
                                            id="input-2"
                                            v-model="password"
                                            :type="showPassword == false ? 'password':'text'"
                                            placeholder="Enter password"
                                            :class="{ 'is-invalid': isValid && $v.password.$error }"
                                            :disabled="submitted"
                                    ></b-form-input>
                                    <div class="input-group-append">
                                      <span class="input-group-text"
                                            style="background-color: #eeeeee;border: 1px solid #dbdbdb;"
                                            @click="showPassword = !showPassword">
                                            <i class="fa" :class="[showPassword ? 'fa-eye' : 'fa-eye-slash']"
                                               aria-hidden="true"></i>
                                          </span>
                                    </div>
                                    <label class="invalid-feedback" v-if="!$v.password.required">password is required</label>
                                </div>
                            </b-form-group>

                            <div class="form-group row">
                                <div class="col-sm-6">
                                    <div class="form-group mt-2 mb-0 row">
                                        <div class="col-12 mt-4">
                                            <router-link tag="a" to="/forgot-password">
                                                <i class="mdi mdi-lock"></i> Forgot your password?
                                            </router-link>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-6 text-right">
                                    <b-button type="submit" variant="primary" class="w-md" :disabled="submitted">
                                        <b-spinner small v-if="submitted" style="color:white;"
                                                   label="Spinning"></b-spinner>
                                        Log In
                                    </b-button>
                                </div>
                            </div>
                        </b-form>
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
            <div class="mt-5 text-center" v-if="!is_token">
                <p>
                    Don't have an account ?
                    <router-link tag="a" to="/register" class="font-weight-medium text-primary">Signup now
                    </router-link>
                </p>
            </div>
        </div>
    </Form>
</template>
<script>
    import {authMethods} from "@/state/helpers";
    import appConfig from "@/app.config";
    import Form from "../../../layouts/form";
    import {email, required} from "vuelidate/lib/validators";

    /**
     * Login component
     */
    export default {
        page: {
            title: "Login",
            meta: [{name: "description", content: appConfig.description}]
        },
        components: {Form},
        data() {
            return {
                email: "admin@gmail.com",
                password: "123456789",
                showPassword: false,
                submitted: false,
                authError: null,
                tryingToLogIn: false,
                isAuthError: false,
                is_token: false,
                isValid: false
            };
        },
        validations: {
            email: {
                required,
                email
            },
            password: {
                required
            },
        },
        methods: {
            ...authMethods,
            // Try to log the user in with the username
            // and password they provided.
            async tryToLogIn() {
                this.isValid = true;
                this.$v.$touch();
                if (this.$v.$invalid) {
                    return;
                }
                this.submitted = true;
                this.tryingToLogIn = true;
                // Reset the authError if it existed.
                this.authError = null;
                return (
                    await this.logIn({
                        email: this.email,
                        password: this.password
                    })
                        // eslint-disable-next-line no-unused-vars
                        .then(token => {
                            this.isValid = false;
                            this.submitted = true;
                            this.tryingToLogIn = false;
                            this.isAuthError = false;
                            setTimeout(() => {
                                this.$router.push({name: "carousel-data"});
                            },3000)
                        }).catch(error => {
                            console.log('error', error)
                            this.isValid = false;
                            this.submitted = false;
                            this.tryingToLogIn = false;
                            this.authError = "Invalid Credentials";
                            this.isAuthError = true;
                        })
                );
            }
        }
    };
</script>

<style lang="scss" scoped>
    .logo-admin {
        background: #2e3648 !important;
    }
</style>
