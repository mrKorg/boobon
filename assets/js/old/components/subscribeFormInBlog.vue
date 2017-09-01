<template>
    <div class="subscribeForm">
        <div class="container">
            <form @submit.prevent="submit" class="subscribeForm__form">
                <label v-if="!done"  for="subscribeForm__input" class="subscribeForm__label">
                    Подпишись на позитив!
                </label>
                <label v-if="done"for="subscribeForm__input" class="subscribeForm__label">
                    Спасибо за подписку!
                </label>
                <input v-if="!done" type="email" placeholder="Ваш e-mail" v-model="form.email" class="eInput--big eInput--gray subscribeForm__input" id="subscribeForm__input">
                <button v-if="!done" @submit.click="submit" type="submit" class="eBtn--pink eBtn--big subscribeForm__btn">
                    Подписаться
                </button>
            </form>
        </div>
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
                loading: false,
                done: false,
                url: '/subscribe/store',
            }
        },
        methods: {
            submit: function () {
                var self = this
                self.loading = true
                axios.post(self.url, self.form)
                        .then(function (response) {
                            self.items = response.data.items;
                            self.form = {
                                email: null,
                            }
                            self.done = true
                            self.loading = false
                        })
                        .catch(function (error) {
                            console.log(error);
                        });
            }
        }
    }
</script>