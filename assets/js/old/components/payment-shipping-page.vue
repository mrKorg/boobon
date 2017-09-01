<template>

    <div class="pPaymentShipping">
        <vue-content-modal v-if="isModalShow" :type="contentType" :isModalShow="isModalShow" :modalContent="modalContent" :modalSize="modalSize"></vue-content-modal>
        <div class="container">
            <div class="row">
                <div class="col-xs-12 col-lg-8">
                    <h3 class="pPaymentShipping__titleSmall">
                        Способы доставки
                    </h3>
                    <div class="row">
                        <div v-for="(shipping, index) in data.shippings" class="col-xs-12 col-md-6 col-lg-4">
                            <p class="pPaymentShipping__delivery" @click="showModal(shipping)">
                                <span class="image">
                                    <img :src="shipping.home_image_url" :alt="shipping.title">
                                </span>
                                <span class="text" v-html="shipping.title"></span>
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-xs-12 col-lg-4">

                    <div class="pPaymentShipping__payment">
                        <h3 class="pPaymentShipping__titleBig">
                            Способы оплаты
                        </h3>
                        <ul>
                            <li v-for="(payment, index) in data.payments" @click="showModal(payment)">
                                <img :src="payment.home_image_url" :alt="payment.title">
                            </li>
                        </ul>
                    </div>

                </div>
            </div>
        </div>
    </div>

</template>

<script>
    export default {
        data: function() {
            return{
                isModalShow: false,
                showMessage: false,
                contentType: 'payment-shipping',
                data: {},
                modalContent: null,
                modalSize: 'md'
            }
        },
        mounted: function () {
            console.log('Payment Shipping mounted.');
            this.getData();
        },
        methods: {
            getData: function () {
                let self = this;
                axios.get('/get_payment_and_shipping')
                    .then(function (response) {
                        self.data = response.data;
                    })
                    .catch(function (error) {
                        console.log(error)
                    });
            },
            showModal: function (content) {
                this.isModalShow = true;
                this.modalContent = content;
            }
        }
    }
</script>