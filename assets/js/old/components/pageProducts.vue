<template>
    <div class="row">
        <div v-for="(item, index) in items.data" class="col-xs-12 col-lg-6 pCatalog__item"
             v-bind:class="{ 'last-lg': index ==  items.data.length}"
             data-aos="fade-up"
             :data-aos-delay="{ '200': index == 1}">
            <vue-page-product :item.sync="item"></vue-page-product>
        </div>
    </div>
</template>
<script>
    export default {
        mounted: function () {
            console.log('Home page products mounted.');
            this.getItems();
        },
        data: function() {
            return{
                items: [

                ],
                loading: false,
            }
        },
        methods: {
            getItems: function () {
                let self = this
                self.loading = true
                axios.get('/api/products')
                        .then(function (response) {
                            self.items = response.data.items;
                            self.loading = false

                        })
                        .catch(function (error) {
                            console.log(error);
                            self.loading = false
                        });
            },
            reInit() {
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$refs.slick.reSlick();
            },
        }
    }
</script>