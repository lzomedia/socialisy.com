<template>

    <!-- start the filter !-->
    <div id="filter" uk-filter="target: .js-filter">



        <div class="uk-container uk-container-expand uk-align-center filter-bar">

            <div class="uk-grid-small uk-flex-middle " uk-grid>

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





        <div class="uk-container uk-container-expand">
            <ul class="js-filter uk-grid-match uk-child-width-1-2 uk-child-width-1-3@m uk-child-width-1-3@l uk-text-center uk-grid-small" uk-grid="masonry: true">
                <li data-color="blue"
                    data-size="small"
                    data-name="B"
                    v-for="group in communities" :class="group.type" :data-category="group.type">


                    <div class="uk-card uk-card-small uk-card-default uk-box-shadow-large picture-item">
                        <div class="uk-card-header">
                            <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                                <div class="uk-width-expand uk-first-column">

                                    <a :href="'/dicover/' + group.url" class="cat-txt">
                                        {{ group.name }}
                                    </a>

                                </div>
                            </div>
                        </div>
                        <div class="uk-card-media uk-inline" v-if="group.image != null">

                            <div class="uk-inline">
                                <img :src="group.image | defaultImage" width="400" data-uk-img :alt="group.name">
                            </div>

                        </div>
                        <div class="uk-card-body" v-if="group.short_description != ''">
                            <span class="uk-icon" data-uk-icon="icon:user;"></span> {{group.user.name}}
                            <p class="uk-text-small uk-text-muted">
                                {{group.short_description }}
                            </p>
                        </div>
                        <div class="uk-card-footer">
                            <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">


                                <div class="uk-width-auto uk-text-right">
                                    <a data-request="onJoinCommunity"  class="">
                                        <span class="uk-icon" data-uk-icon="icon:plus;"></span>
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </li>

            </ul>

        </div>


        <div class="container uk-align-center">

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

    export default {

        /**
         *
         * @returns {{groups: Array, page: string, defaultImage: string, instance: string}}
         */
        data() {
            return {
                communities:[],
                page: '/api/onGetCommunities',
                instance: '',
                filter:'',

            }
        },
        /**
         *
         */
        beforeMount() {

            this.viewMoreGroups();

            this.comunities = [];
        },
        /**
         * .$el.__uikit__.grid.masonry
         */
        methods: {

            viewMoreGroups() {


                let page = this.page;

                getGroups(page).then((response) => {

                    if(response.status == 200){


                        //console.log(response.data);


                        this.communities = this.communities.concat(response.data.data);

                        this.page = response.data.next_page_url;

                        console.log(this.communities);



                    }



                });

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

                    return 'https://picsum.photos/300/300/?random';
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



        }

    }


    $(window).on('ajaxErrorMessage', function(event, message){

        // This can be any custom JavaScript you want
        alert('Something bad happened, mate, here it is: ' + message);

        // This will stop the default alert() message
        event.preventDefault();

    })

</script>

