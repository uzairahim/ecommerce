<template>
    <Form>
        <div class="col-md-8 col-lg-6 col-xl-5">
            <div class="card overflow-hidden">
                <div class="bg-primary">
                    <div class="text-primary text-center p-4">
                        <h5 class="text-white font-size-20 p-2">Reset Password</h5>
                    </div>
                </div>
                <div class="card-body p-4">
                    <div class="p-3">
                        <b-alert v-model="isShowRes" class="mt-3" variant="secondary" dismissible>
                            {{msg}}
                        </b-alert>

                        <b-form @submit.prevent="tryToReset" class="form-horizontal mt-4">
                            <b-form-group id="email-group" label="Email" label-for="email">
                                <b-form-input id="email" v-model="email" type="email" placeholder="Enter email"
                                              :disabled="disabled"></b-form-input>
                            </b-form-group>

                            <div class="form-group row mb-0">
                                <div class="col-12 text-right">
                                    <b-button type="submit" variant="primary" class="w-md" :disabled="disabled">
                                        <b-spinner small v-if="disabled" style="color:white;"
                                                   label="Spinning"></b-spinner>
                                        Send Mail
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
                    Remember It ?
                    <router-link tag="a" to="/login" type="button" class="font-weight-medium text-primary">Sign
                        In here
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

    /**
     * Forgot password component
     */
    export default {
        page: {
            title: "Forgot Password",
            meta: [{name: "description", content: appConfig.description}]
        },
        data() {
            return {
                email: "",
                disabled: false,
                restPasswordResponse: '',
                msg: '',
                isShowRes: false
            };
        },
        components: {Form},
        methods: {
            ...authMethods,
            tryToReset() {
                this.msg = '';
                this.isShowRes = false;
                this.disabled = true;
                this.passwordResetEmail({email: this.email}).then(res => {
                    this.isShowRes = true;
                    this.disabled = false;
                    this.msg = "Reset Password link sent at your email"
                }).catch(error => {
                    this.disabled = false;
                    this.msg = error.response.data.message
                    if (this.msg.includes('Failed to authenticate')) {
                        this.msg = 'Email not send due to Authentication Failure'
                    }
                    this.isShowRes = true;
                });
            }
        }
    };
</script>

<style lang="scss" scoped>
    .logo-admin {
        background: #2e3648 !important;
    }
</style>
