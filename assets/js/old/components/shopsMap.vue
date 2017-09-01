<template>
    <div class="shopsMap">
        <div class="shopsMap__container">
            <div class="shopsMap__nav">
                <h3 class="shopsMap__title">
                    Заехать, пощупать
                </h3>
                <div class="shopsMap__select">
                    <div class="eCustomSelect">
                        <div class="eCustomSelect__value" v-bind:class="{ active: current_city}">
                            <p v-if="current_city">{{ current_city }}</p>
                            <p v-else>Выберите город</p>
                        </div>
                        <div class="eCustomSelect__drop">
                            <div class="eCustomSelect__scroll js_eCustomSelect__scroll">
                                <a v-for="city in cities" v-html="city" @click="getShopsByCity(city)"></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="shopsMap__list">
                    <a @click="resetMap()">Все</a>
                    <a v-for="city in primary_cities" v-html="city" @click="getShopsByCity(city)"></a>
                </div>
            </div>
        </div>
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
            console.log('Shops mounted.');
            this.getShops();
            this.fitBounds();
        },
        components: { VueGoogleMap, vSelect },
        data () {
            return {
                center: {lat: 49.203243, lng: 32.376709},
                zoom: 12,
                allMarkers: [],
                markers: [],
                cities: [],
                primary_cities: [],
                current_city: null,
                bounds: '',
                infoContent: '',
                infoWindowPos: {
                    lat: 0,
                    lng: 0
                },
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
            getShops: function () {
                let self = this;
                axios.get('/shops')
                    .then(function (response) {
                        let shops = response.data.shops;
                        let markers = [];
                        let cities = [];
                        let primary_cities = [];
                        for (let index in shops) {
                            if (shops.hasOwnProperty(index)) {
                                markers.push(
                                    {
                                        position: {
                                            lat: parseFloat(shops[index].latitude),
                                            lng: parseFloat(shops[index].longitude)
                                        },
                                        infoText: shops[index].title,
                                        icon: {url: '/img/svg/marker.svg'},
                                        city: shops[index].city_name
                                    }
                                );
                                cities.push(shops[index].city_name);
                                if (shops[index].is_primary_city === true) {
                                    primary_cities.push(shops[index].city_name);
                                }
                            }
                        }
                        self.cities = [...new Set(cities)];
                        self.primary_cities = [...new Set(primary_cities)];
                        self.markers = markers;
                        self.allMarkers = markers;
                        self.current_city = null;
                    })
                    .catch(function (error) {
                        console.log(error)
                    });
            },
            getShopsByCity: function (city) {
                let sortMarkers = [];
                _.forEach(this.allMarkers, function(marker) {
                    if (marker.city == city) {
                        sortMarkers.push(marker);
                    }
                });
                this.markers = sortMarkers;
                this.current_city = city;
                this.fitBounds();
            },
            resetMap: function () {
                this.markers = this.allMarkers;
                this.current_city = null;
                this.fitBounds();
            },
            toggleInfoWindow: function(marker, idx) {
                this.infoWindowPos = marker.position;
                this.infoContent = marker.infoText;
                if (this.currentMidx == idx) {
                    this.infoWinOpen = !this.infoWinOpen;
                } else {
                    this.infoWinOpen = true;
                    this.currentMidx = idx;
                }
            },
            fitBounds: function () {
                return this.$refs.map.$mapCreated.then(() => {
                    let bounds = new google.maps.LatLngBounds();
                    _.forEach(this.markers, function (marker) {
                        bounds.extend(marker.position);
                    });
                    this.$refs.map.fitBounds(bounds);
                    let zoom = this.$refs.map.$mapObject.getZoom();
                    if (_.size(this.markers) === 1) {
                        this.$refs.map.$mapObject.setZoom(12);
                    } else {
                        this.$refs.map.$mapObject.setZoom(zoom -1);
                    }
                });
            }
        }
    }
</script>