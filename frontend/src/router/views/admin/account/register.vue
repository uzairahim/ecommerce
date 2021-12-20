<template>
    <Form>
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-primary">
                    <div class="text-primary text-center p-4">
                        <h5 class="text-white font-size-20">Free Register</h5>
                        <p class="text-white-50">Get your free account now.</p>
                        <!--                <a href="/" class="logo logo-admin">-->
                        <!--                  <img src="@/assets/images/logo-sm.png" height="24" alt="logo" />-->
                        <!--                </a>-->
                    </div>
                </div>

                <div class="card-body p-4">
                    <div class="p-3">
                        <b-alert
                                v-model="registerSuccess"
                                class="mt-3"
                                variant="success"
                                dismissible
                        >Registration successfull.
                        </b-alert>

                        <b-alert
                                v-model="isRegisterError"
                                class="mt-3"
                                variant="danger"
                                dismissible
                        >{{regError}}
                        </b-alert>

                        <b-form @submit.prevent="tryToRegisterIn" class="form-horizontal mt-4">
                            <b-form-group id="username-group" label="Username" label-for="username"
                                          invalid-feedback="Name is required">
                                <b-form-input
                                        id="username"
                                        v-model="username"
                                        type="text"
                                        placeholder="Enter name"
                                        :class="{ 'is-invalid': isValid && $v.username.$error }"
                                        :disabled="disabled"
                                        aria-describedby="name-input-feedback"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group id="email-group" label="Email address" label-for="email"
                                          invalid-feedback="email is required">
                                <b-form-input
                                        id="email"
                                        v-model="email"
                                        type="email"
                                        placeholder="Enter email"
                                        :class="{ 'is-invalid': isValid && $v.email.$error }"
                                        :disabled="disabled"
                                        aria-describedby="name-input-feedback"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group id="password-group" label="Password" label-for="password">
                                <div class="input-group mb-3">
                                    <b-form-input
                                            id="password"
                                            v-model="password"
                                            :type="showPassword == false ? 'password':'text'"
                                            placeholder="Enter password"
                                            :class="{ 'is-invalid': isValid && $v.password.$error }"
                                            :disabled="disabled"
                                    ></b-form-input>
                                    <div class="input-group-append">
                                          <span class="input-group-text"
                                                style="background-color: #eeeeee;border: 1px solid #dbdbdb;"
                                                @click="showPassword = !showPassword">
                                            <i class="fa" :class="[showPassword ? 'fa-eye' : 'fa-eye-slash']"
                                               aria-hidden="true"></i>
                                          </span>
                                    </div>
                                    <label class="invalid-feedback" v-if="!$v.password.required">passwords is
                                        required</label>
                                    <label class="invalid-feedback" v-if="!$v.password.minLength">Password length
                                        must be greater than 8</label>
                                </div>
                            </b-form-group>

                            <div class="form-group mb-0 text-center">
                                <div class="col-12 text-right">
                                    <b-button type="submit" variant="primary" class="w-md" :disabled="disabled">
                                        <b-spinner small v-if="submitted" style="color:white;"
                                                   label="Spinning"></b-spinner>
                                        Register
                                    </b-button>
                                </div>
                            </div>
                        </b-form>
                    </div>
                </div>
                <!-- end card-body -->
            </div>
            <!-- end card -->
            <div class="mt-5 text-center">
                <p>
                    Already have an account ?
                    <router-link tag="a" to="/login" type="button" class="font-weight-medium text-primary">Login
                    </router-link>
                </p>
            </div>
        </div>
    </Form>
</template>

<script>
    import {authMethods} from "@/state/helpers";
    import appConfig from "@/app.config";
    import {email, minLength, required} from "vuelidate/lib/validators";
    import Form from "../../../layouts/form";

    /**
     * Register component
     */
    export default {
        page: {
            title: "Register",
            meta: [{name: "description", content: appConfig.description}]
        },
        data() {
            return {
                username: "",
                email: "",
                password: "",
                showPassword: false,
                isValid: false,
                regError: null,
                submitted: false,
                disabled: false,
                tryingToRegister: false,
                isRegisterError: false,
                registerSuccess: false
            };
        },
        components: {Form},
        validations: {
            username: {
                required
            },
            email: {
                required, email
            },
            password: {
                required,
                minLength: minLength(8)
            },
        },
        methods: {
            ...authMethods,
            // Try to register the user in with the email, username
            // and password they provided.
            tryToRegisterIn() {
                this.isValid = true;
                this.$v.$touch();
                if (this.$v.$invalid) {
                    return;
                }
                this.tryingToRegister = true;
                this.regError = null;
                this.submitted = true;
                this.disabled = true;
                let user = {
                    name: this.username,
                    email: this.email,
                    password: this.password,
                }
                return (
                    this.addUser({user: user}).then(res => {
                        this.tryingToRegister = false;
                        this.isRegisterError = false;
                        this.registerSuccess = true;
                        this.submitted = this.disabled = false;
                        setTimeout(() => {
                            this.$router.push({name:'login'})
                        },3000)
                    }).catch(error => {
                        console.log(error.data.message)
                        this.submitted = this.disabled = false;
                        this.regError = error.data.message ? error.data.message : "Something went wrong!! try Again";
                        this.isRegisterError = true;
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
