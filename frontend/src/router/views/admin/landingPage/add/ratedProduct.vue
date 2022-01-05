<template>
    <b-modal
            id="addProductModal"
            ref="modal"
            @show="resetModal"
            @hidden="resetModal"
            no-close-on-backdrop
            hide-header-close
            no-close-on-esc
            centered
            hide-footer
    >
        <template #modal-header="{ close }">
            <h5>Add Product</h5>
            <b-button size="sm" variant="outline-danger" :disabled="submitted" @click="close()">
                <span class=" ti-close"></span>
            </b-button>
        </template>
        <form ref="form" @submit.prevent="add_product">

            <b-form-group label="Type" label-for="type">
                <b-form-select v-model="selected_type" :options="options" class="form-control" :class="{ 'is-invalid': isValid && $v.selected_type.$error }"></b-form-select>
                <label class="text-danger" style="font-size: 13px;font-weight: normal" v-if="isValid && $v.selected_type.$error">
                    Type is Required</label>
            </b-form-group>

            <b-form-group label="Title" label-for="title-input" invalid-feedback="Title is required">
                <b-form-input
                        id="name-input" v-model="title"
                        placeholder="Enter Lecture Name"
                        :class="{ 'is-invalid': isValid && $v.title.$error }" :disabled="submitted"
                        aria-describedby="title-input-feedback"
                ></b-form-input>
            </b-form-group>

            <b-form-group id="input-group-3" label="Image" label-for="input-3">
                <b-form-file id="input-3" v-model="image" :disabled="submitted"
                             placeholder="Choose a file or drop it here..." drop-placeholder="Drop file here..."
                             class="form-control" :class="{ 'is-invalid': isValid && $v.image.$error }"
                >
                </b-form-file>
                <b-form-invalid-feedback v-if="$v.image.$error">Image is Required</b-form-invalid-feedback>
                <label class="text-danger" v-if="image_error">Image must be a file of type: jpeg, png, jpg.</label>
            </b-form-group>
            <b-button variant="outline-primary" v-on:click="add_product" :disabled="submitted" class="mr-1">
                <b-spinner small v-if="submitted" label="Spinning"></b-spinner>
                Submit
            </b-button>
        </form>
    </b-modal>
</template>

<script>
    import {required} from "vuelidate/lib/validators";
    import {ratedProductMethods} from "@/state/helpers";

    export default {
        data() {
            return {
                msg: "",
                error: false,
                isValid: false,
                image_error: false,
                title: '',
                lecture_description: '',
                image: null,
                submitted: false,
                selected_type: null,
                options: [
                    {value: null, text: 'Please select type', disabled: true},
                    {value: 'best_seller', text: 'Best Seller'},
                    {value: 'superb_products', text: 'Superb Product'}
                ]
            };
        },

        validations: {
            title: {
                required
            },
            image: {
                required
            },
            selected_type: {
                required
            }
        },
        methods: {
            ...ratedProductMethods,
            resetModal() {
                this.msg = "",
                this.error = false,
                this.isValid = false,
                this.image_error = false,
                this.title = '',
                this.lecture_description = '',
                this.image = null,
                this.selected_type = null,
                this.submitted = false
            },
            add_product() {
                this.msg = '';
                this.isValid = true;
                this.$v.$touch();
                if (this.$v.$invalid) {
                    return;
                }
                if (this.image != null) {
                    if ((this.image['type'] === "image/jpeg") || (this.image['type'] === "image/jpg") || (this.image['type'] === "image/png")) {
                        this.image_error = false
                    } else {
                        this.image_error = true
                    }
                }
                this.submitted = true;
                let form_data = new FormData;
                form_data.append('title', this.title);
                form_data.append('type', this.selected_type);
                form_data.append('image', this.image);
                this.addRatedProduct({data: form_data}).then((res) => {
                    this.$refs.modal.hide()
                    this.msg = "image added successfully"
                    this.$swal({
                        position: 'top-end',
                        icon: 'success',
                        background: 'rgba(63, 63, 63, 1)',
                        toast: true,
                        title: '<span id="toast">' + this.msg + '</span>',
                        showConfirmButton: false,
                        timer: 3000
                    })
                }).catch((error) => {
                    console.log(error)
                    this.msg = error
                    this.$swal({
                        position: 'top-end',
                        icon: 'error',
                        background: 'rgba(63, 63, 63, 1)',
                        toast: true,
                        title: '<span id="toast">' + this.msg + '</span>',
                        showConfirmButton: false,
                        timer: 3000
                    })
                })
            }
        }
    };
</script>

<style>
    #toast {
        color: white;
    }

</style>
