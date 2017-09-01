<template>
    <div>
        <vue-message-modal v-if="showMessage" :type="messageType"></vue-message-modal>
        <form @submit.prevent="submit" class="contactsForm">
            <h5 class="contactsForm__title">
                Напишите нам
            </h5>
            <p class="contactsForm__row">
                <input type="text" placeholder="Имя" name="name" v-model="form.name" class="eInput--gray" v-bind:class="{ 'hasError': errors['name'] }">
            </p>
            <div v-if="errors['name']" class="errorMessageContainer">
                <span v-for="error in errors['name']" class="errorMessage">{{ error }}</span>
            </div>
            <p class="contactsForm__row">
                <input type="email" placeholder="E-mail" name="email" v-model="form.email" class="eInput--gray" v-bind:class="{ 'hasError': errors['email'] }">
            </p>
            <div v-if="errors['email']" class="errorMessageContainer">
                <span v-for="error in errors['email']" class="errorMessage">{{ error }}</span>
            </div>
            <p class="contactsForm__row">
                <input type="tel" placeholder="Телефон" name="phone" v-model="form.phone" class="eInput--gray" v-bind:class="{ 'hasError': errors['phone'] }">
            </p>
            <div v-if="errors['phone']" class="errorMessageContainer">
                <span v-for="error in errors['phone']" class="errorMessage">{{ error }}</span>
            </div>
            <p class="contactsForm__row">
                <textarea placeholder="Сообщение" name="message" v-model="form.message" class="eTextarea--gray" v-bind:class="{ 'hasError': errors['message'] }"></textarea>
            </p>
            <div v-if="errors['message']" class="errorMessageContainer">
                <span v-for="error in errors['message']" class="errorMessage">{{ error }}</span>
            </div>
            <p class="contactsForm__btn">
                <button @onclick.prevent="submit" type="submit" class="eBtn--big" v-bind:class="{ 'eBtn--pink': !loading, 'eBtn--disabled': loading }">
                    Отправить
                </button>
            </p>
        </form>
    </div>
</template>
<script>
    export default {
        mounted: function () {
            console.log('Home contact form mounted.');
        },
        data: function() {
            return{
                form: {
                    name: null,
                    email: null,
                    phone: null,
                    message: null,
                },
                errors: [],
                loading: false,
                showMessage: false,
                messageType: 'callback',
                url: '/messages/store',
            }
        },
        methods: {
            submit: function () {
                var self = this;
                self.loading = true;
                axios.post(self.url, self.form)
                    .then(function (response) {
                        self.items = response.data.items;
                        self.form = {
                            name: null,
                            email: null,
                            phone: null,
                            message: null,
                        };
                        self.errors = []
                        self.loading = false;
                        self.showMessage = true;
                    })
                    .catch(function (error) {
                        self.errors = error.response.data
                        self.loading = false;
                        setTimeout(function () {
                            this.errors = []
                        }, 4000)
                    });
            }
        }
    }
</script>