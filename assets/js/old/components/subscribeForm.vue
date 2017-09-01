<template>
    <div>
        <vue-message-modal v-if="showMessage" :type="messageType"></vue-message-modal>
        <form @submit.prevent="submit" class="footer__subscribe">
            <label for="mailInput">
                Подписаться на рассылку
            </label>
            <div class="subscribeBox">
                <input id="mailInput" type="email" placeholder="Ваш e-mail"
                       v-model="form.email"
                       v-bind:class="[errors.email ? 'eInput--black eInput--big hasError' : 'eInput--black eInput--big']">
                <button class="subscribeBtn" type="submit">
                    <svg width="30" height="30">
                        <use xlink:href="#sendBtn--black"></use>
                    </svg>
                </button>
            </div>
        </form>
    </div>
</template>
<script>
    export default {
        mounted: function () {
            console.log('Home subscribe form mounted.');
        },
        data: function() {
            return{
                form: {
                    email: null,
                },
                errors: {
                    email: null,
                },
                loading: false,
                showMessage: false,
                messageType: 'subscribe',
                url: '/subscribe/store',
            }
        },
        methods: {
            submit: function () {
                let self = this;
                self.loading = true;
                axios.post(self.url, self.form)
                    .then(function (response) {
                        self.items = response.data.items;
                        self.form = {
                            email: null,
                        };
                        self.loading = false;
                        self.showMessage = true;
                    })
                    .catch(function (error) {
                        console.log(error);
                        self.loading = false;
                        let errors = JSON.parse(error.response.request.response);
                        for (let key in errors) {
                            self.errors[key] = true;
                        }
                        setTimeout(function () {
                            self.clearErrors();
                        }, 4000)
                    });
            },
            clearErrors: function () {
                for (let key in this.errors) {
                    this.errors[key] = false;
                }
            },
        }
    }
</script>