<template>
    <div class="account-pages my-5 pt-5">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-8 col-lg-6 col-xl-5">
                    <div class="card overflow-hidden">
                        <div class="bg-primary">
                            <div class="text-primary text-center p-4">
                                <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                            </div>
                        </div>
                        <div class="card-body p-4">
                            <div class="p-3">
                                <b-form @submit.prevent="updatePassword" class="form-horizontal mt-4">
                                    <b-form-group
                                            id="input-group-1"
                                            label-for="email"
                                            invalid-feedback="Email is required"
                                    >
                                        <b-form-input
                                                id="email"
                                                v-model="email"
                                                type="email"
                                                placeholder="Enter Email"
                                                :class="{ 'is-invalid': isValid && $v.email.$error }"
                                                :disabled="disabled"
                                        ></b-form-input>
                                    </b-form-group>

                                    <b-form-group
                                            id="input-group-2"
                                            label-for="new_password"
                                    >
                                        <b-form-input
                                                id="new_password"
                                                v-model="new_password"
                                                type="password"
                                                placeholder="Enter New Password"
                                                :class="{ 'is-invalid': isValid && $v.new_password.$error }"
                                                :disabled="disabled"
                                        ></b-form-input>
                                        <label class="invalid-feedback" v-if="!$v.new_password.required">New password is
                                            required</label>
                                        <label class="invalid-feedback" v-if="!$v.new_password.minLength">Password must
                                            have at least {{ $v.new_password.$params.minLength.min }} letters.</label>
                                    </b-form-group>

                                    <b-form-group
                                            id="input-group-3"
                                            label-for="confirm_password"
                                    >
                                        <b-form-input
                                                id="confirm_password"
                                                v-model="confirm_password"
                                                type="password"
                                                placeholder="Enter Confirm Password"
                                                :class="{ 'is-invalid': isValid && $v.confirm_password.$error }"
                                                :disabled="disabled"
                                        ></b-form-input>
                                        <label class="invalid-feedback" v-if="!$v.confirm_password.required">Confirm
                                            password is required</label>
                                        <label class="invalid-feedback" v-if="!$v.confirm_password.sameAsPassword">Passwords
                                            must be identical.</label>
                                    </b-form-group>
                                    <div class="form-group row mb-0">
                                        <div class="col-12 text-right">
                                            <b-button type="submit" variant="primary" class="w-md" :disabled="disabled">
                                                <b-spinner small v-if="disabled" style="color:white;"
                                                           label="Spinning"></b-spinner>
                                                Save
                                            </b-button>
                                        </div>
                                    </div>
                                </b-form>
                            </div>
                        </div>
                        <!-- end card-body -->
                    </div>
                </div>
                <!-- end col -->
            </div>
            <!-- end row -->
            <div class="mt-5 text-center">
                <p>
                    Remember It ?
                    <router-link tag="a" to="/login" type="button" class="font-weight-medium text-primary">Sign
                        In here
                    </router-link>
                </p>
            </div>
        </div>
    </div>
</template>

<script>
    import {authMethods} from "@/state/helpers";
    import {required, email, sameAs, minLength} from "vuelidate/lib/validators";

    export default {
        data() {
            return {
                email: "",
                new_password: "",
                confirm_password: "",
                isValid: false,
                disabled: false
            };
        },
        validations: {
            email: {
                required, email
            },
            new_password: {
                required,
                minLength: minLength(8)
            },
            confirm_password: {
                required,
                sameAsPassword: sameAs('new_password')
            }
        },
        computed: {},
        mounted() {
            this.verifyToken()
        },
        created() {
        },

        methods: {
            ...authMethods,
            verifyToken() {
                this.tokenVerification({token: this.$route.params.token}).then(res => {
                    console.log(res)
                }).catch(error => {
                    this.$swal({
                        icon: 'error',
                        text: error.data.message,
                        showCloseButton: false,
                        showConfirmButton: true,
                    }).then(res => {
                        if (res.isConfirmed) {
                            this.$router.push({name: 'forgot-password'})
                        }
                    })

                })
            },
            updatePassword() {
                this.isValid = true,
                    this.$v.$touch();
                console.log(this.$v.$touch());
                if (this.$v.$invalid) {
                    return;
                }
                this.disabled = true,
                    this.updatedPassword({
                        email: this.email,
                        new_password: this.new_password,
                        token: this.$route.params.token
                    }).then(res => {
                        if (res.status == 200) {
                            this.disabled = false,
                                this.$swal({
                                    position: 'top-end',
                                    icon: 'success',
                                    toast: true,
                                    text: 'Password Updated Successfully',
                                    showCloseButton: false,
                                    showConfirmButton: false,
                                    timer: 3000
                                }).then(
                                    this.$router.push({name: 'login'})
                                )
                        }
                    }).catch(error => {
                        this.disabled = false;
                        if (error.data.message == 'Invalid Data. Try Again!!') {
                            this.$swal({
                                position: 'top-end',
                                icon: 'error',
                                toast: true,
                                text: error.data.message,
                                showCloseButton: false,
                                showConfirmButton: false,
                                timer: 3000
                            })
                        } else {
                            this.$swal({
                                position: 'top-end',
                                icon: 'error',
                                toast: true,
                                text: error.data.message,
                                showCloseButton: false,
                            }).then(res => {
                                if (res.isConfirmed) {
                                    this.$router.push({name: 'forgot-password'})
                                }
                            });
                        }
                    })
            }
        }
    };
</script>
