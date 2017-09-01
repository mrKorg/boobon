<template>
    <div class="row">
        <div v-for="(item, index) in items.data" class="col-xs-12 col-lg-6 pCatalog__item"
             v-bind:class="{ 'last-lg': index ==  items.data.length}"
             data-aos="fade-up"
             :data-aos-delay="{ '200': index == 1}">
            <vue-page-product :item.sync="item"></vue-page-product>
        </div>
        <div class="col-xs-12 col-lg-6" data-aos="fade-up" data-aos-delay="500">

            <div class="mainProducts__gadget">
                <p class="title">Злой монстр <strong>ГАД<span>ЖЕТ</span></strong></p>
                <p class="image">
                    <svg width="265" height="295">
                        <use xlink:href="#gadget"></use>
                    </svg>
                </p>
                <p class="text">
                    Lorem Ipsum - это текст-"рыба", часто используемый в печати и вэб-дизайне. Lorem Ipsum является стандартной "рыбой" для текстов на латинице с начала XVI века. В то время некий безымянный печатник.
                </p>
            </div>

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
                axios.get('/api/home-products')
                        .then(function (response) {
                            self.items = response.data.items;
                            self.$nextTick(function () {
                                self.reInit()
                            })
                            self.loading = false

                        })
                        .catch(function (error) {
                            console.log(error);
                            self.loading = false
                        });
            },
            reInit() {
                $('.js_eProductPreview__slider').each(function () {
                    let slider = $(this).slick({
                        dots: false,
                        arrows: false,
                        infinite: true,
                        speed: 500,
                        fade: true,
                        autoplay: false,
                        autoplaySpeed: 2000
                    });

                    if (window.matchMedia('(min-width: 1200px)').matches) {
                        $(this).hover(
                                function () {
                                    slider.slick('slickNext');
                                    slider.slick('slickPlay');
                                }, function () {
                                    slider.slick('slickPause');
                                }
                        );
                    } else {
                        $(this).on('click', function () {
                            slider.slick('slickNext');
                        })
                    }
                });
            }
        }
    }
</script>