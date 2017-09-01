<template>
    <div class="mainSlider">
        <slick ref="slick" :options="slickOptions">
            <div v-for="item in items">

                <div class="mainSlider__item" style="background-color: #501b7d;">



                </div>

            </div>
        </slick>
        <nav></nav>
    </div>
</template>

<script>
    export default {
        mounted: function () {
            console.log('Home mainSlider mounted.');
            this.getItems();
        },
        components: { Slick },
        data: function() {
            return{
                items: [
                    {
                        preview_image_url: '/images/placeholder-idea.jpg',
                    },
                    {
                        preview_image_url: '/images/placeholder-idea.jpg',
                    },
                    {
                        preview_image_url: '/images/placeholder-idea.jpg',
                    },
                    {
                        preview_image_url: '/images/placeholder-idea.jpg',
                    },
                    {
                        preview_image_url: '/images/placeholder-idea.jpg',
                    },
                ],
                slickOptions: {
                    arrows: true,
                    autoplay: true,
                    autoplaySpeed: 7000
                },
            }
        },
        methods: {
            getItems: function () {
                var self = this
                axios.get(self.url)
                    .then(function (response) {
                        self.items = response.data.items;
                        self.$nextTick(function () {
                            self.reInit()
                        })

                    })
                    .catch(function (error) {
                        console.log(error);
                    });
            },
            reInit() {
                // Helpful if you have to deal with v-for to update dynamic lists
                this.$refs.slick.reSlick();
            },
        }
    }
</script>