<template>
    <div id="home">
        <div class="container mt-5">
            <form novalidate class="md-layout justify-content-center" @submit.prevent="validateUser">
                <md-card class="md-layout-item md-size-50 md-small-size-100">
                    <md-card-header>
                        <div class="md-title">Order</div>
                    </md-card-header>

                    <md-card-content>
                        <div class="md-layout md-gutter">
                            <div class="md-layout-item md-small-size-100">
                                <md-field>
                                    <label>Textarea</label>
                                    <md-textarea v-model="form.textarea"></md-textarea>
                                </md-field>
                                <md-field :class="getValidationClass('files')">
                                    <label>Multiple</label>
                                    <md-file id="files" name="files" v-model="form.files" :disabled="sending" multiple />
                                    <span class="md-error" v-if="!$v.form.files.required">The age is required</span>
                                </md-field>
                            </div>
                        </div>
                    </md-card-content>

                    <md-progress-bar md-mode="indeterminate" v-if="sending" />

                    <md-card-actions>
                        <md-button type="submit" class="md-primary" :disabled="sending">Upload files</md-button>
                    </md-card-actions>
                </md-card>

                <md-snackbar :md-active.sync="userSaved">The files was saved with success!</md-snackbar>
            </form>
        </div>
    </div>
</template>

<script>
    import { validationMixin } from 'vuelidate'
    import {
        required,
    } from 'vuelidate/lib/validators'

    export default {
        name: "IndexComponent",
        mixins: [validationMixin],
        data: () => ({
            form: {
                files: null,
                textarea: null,
            },
            userSaved: false,
            sending: false,
            lastUser: null
        }),
        validations: {
            form: {
                files: {
                    required,
                }
            }
        },
        methods: {
            getValidationClass (fieldName) {
                const field = this.$v.form[fieldName];
                if (field) {
                    return {
                        'md-invalid': field.$invalid && field.$dirty
                    }
                }
            },
            clearForm () {
                this.$v.$reset();
                this.form.files = null;
                this.form.textarea = null;
            },
            saveUser () {
                this.sending = true;

                // Instead of this timeout, here you can call your API
                //Bu yerda biz bazaga yozishi uchun axios dan foydalanib so'rov jo'natishimiz mumkin

                window.setTimeout(() => {
                    this.userSaved = true;
                    this.sending = false;
                    this.clearForm()
                }, 1500)
            },
            validateUser () {
                this.$v.$touch();

                if (!this.$v.$invalid) {
                    this.saveUser()
                }
            }
        }
    }
</script>

<style scoped>
    .md-progress-bar {
        position: absolute;
        top: 0;
        right: 0;
        left: 0;
    }
</style>
