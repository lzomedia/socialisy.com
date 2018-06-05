<template>

    <!-- start the filter !-->
    <div id="test" data-uk-filter="target: .js-filter">


        <div class="uk-container uk-align-center filter-bar">

            <div class="uk-grid-small uk-flex-middle " uk-grid>
                <div class="uk-width-expand">

                    <div class="uk-grid-small uk-grid-divider uk-child-width-auto" uk-grid>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li class="uk-active" uk-filter-control><a href="#">All</a></li>
                            </ul>
                        </div>
                        <div>
                            <ul class="uk-subnav uk-subnav-pill" uk-margin>
                                <li uk-filter-control="[data-category='yahoo']"><a href="#">Yahoo</a></li>
                                <li uk-filter-control="[data-category='facebook']"><a href="#">Facebook</a></li>
                            </ul>
                        </div>
                    </div>

                </div>
                <div class="uk-text-nowrap">

                    <span class="uk-active" uk-filter-control="sort: data-name">
                        <a class="uk-icon-link" href="#" uk-icon="icon: arrow-down"></a>
                    </span>
                    <span uk-filter-control="sort: data-name; order: desc">
                        <a class="uk-icon-link" href="#" uk-icon="icon: arrow-up"></a>
                    </span>


                </div>
            </div>

        </div>


        <div class=" uk-container">


            
            <div class="selector uk-grid uk-child-width-1-3@m js-filter">
                <div  packed v-for="group in groups" :class="group.type" :data-category="group.type" :data-name="group.name.slice(0,1)  ">
                    <!-- card !-->
                    <div class="uk-card uk-card-small uk-card-default uk-box-shadow-large picture-item">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                                <div class="uk-width-expand uk-first-column">
                                    <span class="cat-txt">
                                      <a :href="'/dicover/' + group.url" class="">
                                            {{ group.name| capitalize }}
                                      </a>
                                    </span>
                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media uk-inline" v-if="group.image != 0">

                            <div class="uk-inline">
                                <img :src="group.image | defaultImage" width="400" data-uk-img :alt="group.name">
                                <div class="uk-overlay uk-transition-toggle uk-position-bottom">

                                </div>
                            </div>


                        </div>
                        <div class="uk-card-body">
                            <p class="uk-text-small uk-text-muted">
                                {{group.description}}
                            </p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                                <div class="uk-width-expand uk-text-small uk-first-column">
                                    <span class="uk-icon" data-uk-icon="icon:user;"></span> {{ group.user.name }}
                                </div>

                                <div class="uk-width-auto uk-text-right">
                                    <a href="#" class="">
                                        <span class="uk-icon" data-uk-icon="icon:plus;"></span>

                                    </a>
                                    <span class="uk-icon" data-uk-icon="icon:check;"></span>
                                    <span class="uk-icon" data-uk-icon="icon:clock;"></span>
                                    <span class="uk-icon" data-uk-icon="icon:lock;"></span>
                                    <span class="uk-icon" data-uk-icon="icon:unlock;"></span>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>


            <div class="uk-align-center uk-animation-toggle">

                <a id="load-more-action" v-on:click="viewMoreGroups()" class="uk-align-center uk-animation-fade">
                    View More <span class="uk-margin-small-left uk-icon" uk-icon="icon: more"></span>
                </a>

            </div>


        </div>


    </div>

</template>


<script>
    import axios from 'axios';
    import Bricks from 'bricks.js';
    window.$ = window.jQuery = require('jquery');


    export default {

        /**
         *
         * @returns {{groups: Array, page: string, defaultImage: string, instance: string}}
         */
        data() {
            return {
                groups: [],
                page: 'api/onGetGroups',
                defaultImage: '../assets/icon-disabled.svg',
                instance: ''

            }
        },

        /**
         *
         */
        beforeMount() {


            this.scroll();

            this.viewMoreGroups();




        },
        /**
         * @method
         */
        mounted() {

            $(function() {
                $('[data-uk-grid]').on('beforeupdate.uk.grid', function(e, children) {
                    // your event-handling goes here
                });
            });
        },

        /**
         *
         */
        methods: {

            viewMoreGroups() {

                let page = this.page;

                getGroups(page).then((response) => {

                    this.groups = this.groups.concat(response.data.data);

                    this.page = response.data.next_page_url;



                });


            },

            scroll() {

            },

        },
        filters: {

            capitalize: function (value) {

                if (!value) return ''
                value = value.toString()
                return value.charAt(0).toUpperCase() + value.slice(1)
            },
            formatTime: function (value) {

                if (value) {
                    return moment(value).format('gggg');
                }

            },
            defaultImage: function (value) {


                if (value == 0) {

                    return false;
                }

                return value;

            }
        },

    }


    /**
     * @method async viewMoreGroups
     * @returns {Promise<*>}
     */
    async function getGroups(page) {

        try {

            return await axios.get(page);

        } catch (error) {

            console.error(error);

        }

    }


</script>

