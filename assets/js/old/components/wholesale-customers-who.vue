<template>
    <div class="pWholesaleCustomers__who">
        <vue-content-modal v-if="isModalShow" :type="contentType" :isModalShow="isModalShow"></vue-content-modal>
        <div class="row">
            <div class="pWholesaleCustomers__col">
                <a @click="showModal('cooperation-1')" class="image">
                    <svg width="84" height="74">
                        <use xlink:href="#cooperation-1"></use>
                    </svg>
                </a>
                <p class="text">
                    Торговыми сетям
                </p>
            </div>
            <div class="pWholesaleCustomers__col">
                <a @click="showModal('cooperation-2')" class="image">
                    <svg width="80" height="80">
                        <use xlink:href="#cooperation-3"></use>
                    </svg>
                </a>
                <p class="text">
                    Дистрибьюторами
                </p>
            </div>
            <div class="pWholesaleCustomers__col">
                <a @click="showModal('cooperation-3')" class="image">
                    <svg width="100" height="80">
                        <use xlink:href="#cooperation-5"></use>
                    </svg>
                </a>
                <p class="text">
                    Оптовикам
                </p>
            </div>
            <div class="pWholesaleCustomers__col">
                <a @click="showModal('cooperation-4')" class="image">
                    <svg width="86" height="82">
                        <use xlink:href="#cooperation-2"></use>
                    </svg>
                </a>
                <p class="text">
                    Интернет-магазинами
                </p>
            </div>
            <div class="pWholesaleCustomers__col">
                <a @click="showModal('cooperation-5')" class="image">
                    <svg width="68" height="76">
                        <use xlink:href="#cooperation-4"></use>
                    </svg>
                </a>
                <p class="text">
                    Крутыми мамами, папами, дядями и тётями
                </p>
            </div>
        </div>
        <div class="row">
            <div class="col-xs-12">
                <p class="pWholesaleCustomers__cooperationElse">
                    и всеми, кто хочет дарить детям счастливое, здоровое детство!
                </p>
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
                contentType: null,
            }
        },
        methods: {
            showModal: function (type) {
                this.contentType = type;
                this.isModalShow = true;
            }
        }
    }
</script>