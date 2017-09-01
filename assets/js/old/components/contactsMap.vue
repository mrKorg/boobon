<template>
    <div>
        <gmap-map
                ref="map"
                :center="center"
                :zoom="zoom"
                :bounds="bounds"
                :options="options">
            <gmap-info-window
                    :options="infoOptions"
                    :position="infoWindowPos"
                    :opened="infoWinOpen"
                    :content="infoContent"
                    @closeclick="infoWinOpen=false">
            </gmap-info-window>
            <gmap-marker
                    :key="index"
                    v-for="(m, index) in markers"
                    :position="m.position"
                    :clickable="true"
                    :draggable="false"
                    :icon="m.icon"
                    @click="toggleInfoWindow(m,i)"
            ></gmap-marker>
        </gmap-map>
    </div>
</template>

<script>

    import * as VueGoogleMaps from 'vue2-google-maps';
    import Vue from 'vue';
    import vSelect from "vue-select";

    Vue.use(VueGoogleMaps, {
        load: {
            key: 'AIzaSyC7nl04gTQl-ZBg0gjus9KGEEOKiczTW7o',
            v: '3',
            // libraries: 'places', //// If you need to use place input
        }
    });

    export default {
        mounted: function () {
            console.log('Contacts mounted.');
            this.getShopPosition();
        },
        components: { VueGoogleMap, vSelect },
        data () {
            return {
                center: {},
                zoom: 12,
                markers: [],
                infoWinOpen: false,
                currentMidx: null,
                infoOptions: {
                    pixelOffset: {
                        width: 0,
                        height: -50
                    }
                },
                options: {
                    scrollwheel: false,
                    draggable: true,
                    mapTypeControl: false,
                    scaleControl: false,
                    streetViewControl: false,
                    rotateControl: false,
                    fullscreenControl: false,
                    zoomControl: true,
                },
            }
        },
        methods: {
            getShopPosition: function () {
                let latitude = parseFloat(document.head.querySelector("meta[name='shop-latitude']").content);
                let longitude = parseFloat(document.head.querySelector("meta[name='shop-longitude']").content);
                this.center = {lat: latitude, lng: longitude};
                this.markers = [{
                    position: {
                        lat: latitude,
                        lng: longitude
                    },
                    icon: {url: '/img/svg/marker.svg'},
                }];
            }
        }
    }
</script>