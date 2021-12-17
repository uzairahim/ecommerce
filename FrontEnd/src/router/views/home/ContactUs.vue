<template>
    <section id="contact-us">
        <h1 class="text-uppercase">Contact Us</h1>
        <div class="row section">
            <div class="col-md-9">
                <b-form @submit="sendInquery" class="columns">
                    <div class="row header">
                        <div class="col-md-6">
                            <b-form-group id="input-group-1" label="Your Name" label-for="input-1"
                                          invalid-feedback="Name is required">
                                <b-form-input
                                        id="input-1"
                                        v-model="form.name"
                                        :class="{ 'is-invalid': isValid && $v.form.name.$error }"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group
                                    id="input-group-2"
                                    label="Your Email"
                                    label-for="input-2"
                                    invalid-feedback="Email is required"
                                    description="We'll never share your email with anyone else."
                            >
                                <b-form-input
                                        id="input-2"
                                        v-model="form.email"
                                        type="email"
                                        :class="{ 'is-invalid': isValid && $v.form.email.$error }"
                                ></b-form-input>
                            </b-form-group>

                            <b-form-group
                                    id="input-group-3"
                                    label="Subject"
                                    label-for="input-3"
                                    invalid-feedback="Subject is required"
                            >
                                <b-form-input
                                        id="input-3"
                                        v-model="form.subject"
                                        :class="{ 'is-invalid': isValid && $v.form.subject.$error }"
                                ></b-form-input>
                            </b-form-group>
                        </div>
                        <div class="col-md-6">
                            <b-form-group
                                    id="input-group-4"
                                    label="Your Message"
                                    label-for="textarea"
                                    invalid-feedback="Message is required"
                            >

                                <b-form-textarea
                                        id="textarea"
                                        v-model="form.message"
                                        :class="{ 'is-invalid': isValid && $v.form.message.$error }"
                                        rows="10"
                                ></b-form-textarea>
                            </b-form-group>
                            <b-button @click="sendInquery" variant="outline-warning" class="float-right">Submit
                            </b-button>
                        </div>
                    </div>
                </b-form>
            </div>
            <div class="col-md-3 columns side-column">
                <h4>Super Air Horns</h4>
                <div class="address-description description">Head Office:<br>
                    <span style="color: grey">Office # 2, 2nd Floor 37 Civic Center Model Town M Block Lahore, Pakistan</span>
                </div>
                <div class="address-text first">
                    <div class="address-text-inner">
                        <div class="icon"><i class="fa fa-map-marker-alt"></i></div>
                        <div class="content">
                            <div class="address-label">Dubai Office</div>
                            Office # 306, Zakir Business Center, Abu Hail Dubai, UAE
                        </div>
                    </div>
                </div>
                <div class="address-text second">
                    <div class="address-text-inner">
                        <div class="icon"><i class="fa fa-phone"></i></div>
                        <div class="content">
                            <div class="address-label"></div>
                            +971 55 7373984<br>
                            +971 55 3128822
                        </div>
                    </div>
                </div>
                <div class="address-text third">
                    <div class="address-text-inner">
                        <div class="icon"><i class="fa fa-envelope "></i></div>
                        <div class="content">
                            <div class="address-label"></div>
                            <a href="mailto:superairhorns@gmail.com">superairhorns@gmail.com</a>
                            <p>9:00 A.M - 5:00 P.M</p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</template>

<script>
    import {required, email} from "vuelidate/lib/validators";
    import axios from '../../../axios';

    export default {
        data() {
            return {
                isValid: false,
                form: {
                    name: '',
                    email: '',
                    subject: '',
                    message: ''
                },
            }
        },
        validations: {
            form: {
                name: {
                    required
                },
                email: {
                    required,
                    email
                },
                subject: {
                    required
                },
                message: {
                    required
                }
            }
        },
        methods: {
            sendInquery() {
                this.isValid = true
                this.$v.form.$touch();
                if (this.$v.form.$invalid) {
                    return;
                }
                axios.post('sendinquery', this.form).then().catch();
            }
        }
    }
</script>

<style>
    h1 {
        font-family: revert;
        text-align: center;
        margin: 25px;
    }
    .section{
        background-color: white;
    }
    .columns {
        border: 2px solid #c4c4c4;
        border-radius: 10px;
    }

    .row {
        padding: 30px 50px 30px 50px;
    }

    .address-text {
        margin-top: 10px;
        display: block;
    }

    .address-text .fa {
        background-color: #dfb01e;
        padding: 20px;
        border-radius: 50%;
        font-size: 15px;
    }

    .side-column {
        padding-top: 20px;
    }

    .address-text-inner {
        display: flex;
        column-gap: 10px;
        align-items: center;
    }
</style>