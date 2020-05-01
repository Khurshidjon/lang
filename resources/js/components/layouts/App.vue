<template>
    <div class="page-container md-layout-column">
        <md-toolbar class="md-primary">
            <md-button class="md-icon-button" @click="showNavigation = true">
                <md-icon>menu</md-icon>
            </md-button>
            <span class="md-title">COMPANY NAME</span>

            <div class="md-toolbar-section-end">
                <md-button @click="showDialog = true">Sign in</md-button>
            </div>
        </md-toolbar>

        <md-drawer :md-active.sync="showNavigation" md-swipeable>
            <md-toolbar class="md-transparent" md-elevation="0">
                <span class="md-title">Company name</span>
            </md-toolbar>

            <md-list>
                <md-list-item href="#">
                    <md-icon>move_to_inbox</md-icon>
                    <span class="md-list-item-text">Inbox</span>
                </md-list-item>

                <md-list-item href="#">
                    <md-icon>send</md-icon>
                    <span class="md-list-item-text">Sent Mail</span>
                </md-list-item>

                <md-list-item href="#">
                    <md-icon>delete</md-icon>
                    <span class="md-list-item-text">Trash</span>
                </md-list-item>

                <md-list-item href="#">
                    <md-icon>error</md-icon>
                    <span class="md-list-item-text">Spam</span>
                </md-list-item>
            </md-list>
        </md-drawer>
        <md-content>
            <router-view></router-view>
        </md-content>
        <md-dialog :md-active.sync="showDialog">
            <md-progress-bar md-mode="indeterminate" v-if="sending" />
            <div class="p-md-5">
                <form novalidate class="md-layout justify-content-center" @submit.prevent="validateUser">
                    <md-card class="md-layout-item md-size-80 md-small-size-100">
                        <md-card-header>
                            <div class="md-title">Sign In</div>
                        </md-card-header>

                        <md-card-content>
                            <div class="md-layout md-gutter">
                                <div class="md-layout-item md-small-size-100">
                                    <md-field :class="getValidationClass('email')">
                                        <label for="email">Email</label>
                                        <md-input type="email" name="email" id="email" autocomplete="email" v-model="form.email" :disabled="sending" />
                                        <span class="md-error" v-if="!$v.form.email.required">The email is required</span>
                                        <span class="md-error" v-else-if="!$v.form.email.email">Invalid email</span>
                                    </md-field>
                                </div>
                                <div class="md-layout-item md-small-size-100">
                                    <md-field :class="getValidationClass('password')">
                                        <label for="password">Password</label>
                                        <md-input name="password" type="password" id="password" autocomplete="password" v-model="form.password" :disabled="sending" />
                                        <span class="md-error" v-if="!$v.form.password.required">The password is required</span>
                                        <span class="md-error" v-else-if="!$v.form.password.minlength">Invalid password</span>
                                    </md-field>
                                </div>

                            </div>
                        </md-card-content>

                        <md-card-actions>
                            <md-button type="submit" class="md-primary" :disabled="sending">Sign In</md-button>
                        </md-card-actions>
                    </md-card>

                    <md-snackbar :md-active.sync="userSaved">The user {{ lastUser }} was saved with success!</md-snackbar>
                </form>
            </div>
        </md-dialog>
        <footer class="page-footer font-small mdb-color pt-4">

            <!-- Footer Links -->
            <div class="container text-center text-md-left">

                <!-- Footer links -->
                <div class="row text-center text-md-left mt-3 pb-3">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Company name</h6>
                        <p>Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                            consectetur
                            adipisicing elit.</p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-2 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Products</h6>
                        <p>
                            <a href="#!">MDBootstrap</a>
                        </p>
                        <p>
                            <a href="#!">MDWordPress</a>
                        </p>
                        <p>
                            <a href="#!">BrandFlow</a>
                        </p>
                        <p>
                            <a href="#!">Bootstrap Angular</a>
                        </p>
                    </div>
                    <!-- Grid column -->

                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-3 col-lg-2 col-xl-2 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Useful links</h6>
                        <p>
                            <a href="#!">Your Account</a>
                        </p>
                        <p>
                            <a href="#!">Become an Affiliate</a>
                        </p>
                        <p>
                            <a href="#!">Shipping Rates</a>
                        </p>
                        <p>
                            <a href="#!">Help</a>
                        </p>
                    </div>

                    <!-- Grid column -->
                    <hr class="w-100 clearfix d-md-none">

                    <!-- Grid column -->
                    <div class="col-md-4 col-lg-3 col-xl-3 mx-auto mt-3">
                        <h6 class="text-uppercase mb-4 font-weight-bold">Contact</h6>
                        <p>
                            <i class="fas fa-home mr-3"></i> New York, NY 10012, US</p>
                        <p>
                            <i class="fas fa-envelope mr-3"></i> info@gmail.com</p>
                        <p>
                            <i class="fas fa-phone mr-3"></i> + 01 234 567 88</p>
                        <p>
                            <i class="fas fa-print mr-3"></i> + 01 234 567 89</p>
                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Footer links -->

                <hr>

                <!-- Grid row -->
                <div class="row d-flex align-items-center">

                    <!-- Grid column -->
                    <div class="col-md-7 col-lg-8">

                        <!--Copyright-->
                        <p class="text-center text-md-left">© 2020 Copyright:
                            <a href="https://mdbootstrap.com/">
                                <strong> MDBootstrap.com</strong>
                            </a>
                        </p>

                    </div>
                    <!-- Grid column -->

                    <!-- Grid column -->
                    <div class="col-md-5 col-lg-4 ml-lg-0">

                        <!-- Social buttons -->
                        <div class="text-center text-md-right">
                            <ul class="list-unstyled list-inline">
                                <li class="list-inline-item">
                                    <router-link to="#" class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <i class="fab fa-facebook"></i>
                                    </router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link to="#" class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <i class="fab fa-twitter"></i>
                                    </router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link to="#" class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <i class="fab fa-google-plus-g"></i>
                                    </router-link>
                                </li>
                                <li class="list-inline-item">
                                    <router-link to="#" class="btn-floating btn-sm rgba-white-slight mx-1">
                                        <i class="fab fa-linkedin-in"></i>
                                    </router-link>
                                </li>
                            </ul>
                        </div>

                    </div>
                    <!-- Grid column -->

                </div>
                <!-- Grid row -->

            </div>
            <!-- Footer Links -->
            <div class="text-center">
                <div class="phone-viewport">
                    <md-bottom-bar md-type="shift">
                        <md-bottom-bar-item id="bottom-bar-item-home" md-label="Home" md-icon="home"></md-bottom-bar-item>
                        <md-bottom-bar-item id="bottom-bar-item-pages" md-label="Pages" md-icon="pages"></md-bottom-bar-item>
                        <md-bottom-bar-item id="bottom-bar-item-favorites" md-label="Favorites" md-icon="favorite"></md-bottom-bar-item>
                    </md-bottom-bar>
                </div>
            </div>
        </footer>
    </div>
</template>

<script>
    import { validationMixin } from 'vuelidate'
    import {
        required,
        email,
    } from 'vuelidate/lib/validators'

    export default {
        name: "AppLayout",
        mixins: [validationMixin],
        data: () => ({
            showNavigation: false,
            showSidepanel: false,
            showDialog: false,
            form: {
                password: null,
                email: null,
            },
            userSaved: false,
            sending: false,
            lastUser: null
        }),
        validations: {
            form: {
                password: {
                    required,
                },
                email: {
                    required,
                    email
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
                this.form.password = null;
                this.form.email = null;
            },
            saveUser () {
                this.sending = true;

                // Instead of this timeout, here you can call your API
                //Bu yerda biz bazaga yozishi uchun axios dan foydalanib so'rov jo'natishimiz mumkin

                window.setTimeout(() => {
                    this.email = `${this.form.email}`;
                    this.userSaved = true;
                    this.sending = false;
                    this.showDialog = false;
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

<style lang="scss" scoped>
    // Demo purposes only
     .md-drawer {
        width: 230px;
        max-width: calc(100vw - 125px);
     }
    .md-content {
        padding: 16px;
    }
    footer{
        position:absolute;
        bottom: 0;
        width:100%;
        border-top: 1px solid rgba(#000, .12);
    }
</style>
