
/**
 * First we will load all of this project's JavaScript dependencies which
 * includes Vue and other libraries. It is a great starting point when
 * building robust, powerful web applications using Vue and Laravel.
 */

require('./bootstrap');

window.Vue = require('vue');

/**
 * Next, we will create a fresh Vue application instance and attach it to
 * the page. Then, you may begin adding components to this application
 * or customize the JavaScript scaffolding to fit your unique needs.
 */

// Vue.component('example-component', require('./components/ExampleComponent.vue'));
//
const apply_form = new Vue({
    el: '#v-form',
    data: {
        //  form data
        legal_nr: document.querySelector('#legal_nr').value,
        legal_name: document.querySelector('#legal_name').value,
        responsible_person: document.querySelector('#responsible_person').value,
        phone: document.querySelector('#phone').value,
        email: document.querySelector('#email').value,
        notes: document.querySelector('#notes').value,
        offer: true,

        //
        applied: false
    },
    methods: {
        submitForm: function(){
            //
            var inst = this;
            //
            axios.post('/apply', this.$data)
                .then(function (response) {
                    //
                    if((response.data).status){
                        inst.applied = true;
                    }
                })
                .catch(function (error) {
                    console.log(error);
                });
        },
        resetForm: function(){
            this.legal_nr = null;
            this.legal_name = '';
            this.responsible_person = '';
            this.phone = null;
            this.email = '';
            this.notes = '';
            this.offer = true;
            this.applied = false;
        }
    },
    watch: {
        'applied': function(newVal, oldVal){
            //
            if(this.applied){
                //  show modal
                $('#v-modal').modal('show');
                //  reset form
                this.resetForm();
            }
        },
        'legal_nr': function(newVal, oldVal){
            //
            if(((newVal).toString()).length == 11){
                // fetch data from url and get company name
            }
        },

    },
    computed: {
        validation: function () {
            return {
                legal_nr: !!this.legal_nr && !isNaN(this.legal_nr),
                responsible_person: !!this.responsible_person.trim(),
                phone: !!this.phone && !isNaN(this.phone),
                email: !!this.email.trim()
            };
        },

        isValid: function () {
            //
            var validation = this.validation;
            return Object.keys(validation).every(function (key) {
                return validation[key];
            });
        }
    },
    mounted: function(){
        //
        console.log('BITSS :: apply form loaded');
    }
});
