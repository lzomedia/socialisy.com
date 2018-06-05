<template>

    <div class="come" data-filter=".data-uk-filter-control=">

        <div class="uk-grid uk-animation-toggle uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-6@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">

            <div class="row">


                <div class="">
                    <ul class="uk-subnav uk-subnav-pill" >
                        <li class="uk-active" data-uk-filter-control><a href="#">Show All</a></li>
                        <li data-uk-filter-control=".yahoo"><a href="#">Yahoo</a></li>
                        <li data-uk-filter-control=".facebook"><a href="#">Facebook</a></li>
                        <li data-uk-filter-control=".news"><a href="#">News</a></li>
                        <li data-uk-filter-control=".ads"><a href="#">Ads</a></li>
                    </ul>
                </div>

            </div>
            <div v-for="group in groups" :class="group.type">
                <div class="uk-card uk-card-small uk-card-default">
                    <div class="uk-card-header">
                        <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                            <div class="uk-width-expand uk-first-column">
                            <span class="cat-txt">
                                {{ group.type| capitalize }}
                            </span>
                            </div>
                            <div class="uk-width-auto uk-text-right uk-text-muted">
                            <span data-uk-icon="icon:clock; ratio: 0.8" class="uk-icon">
                                {{ group.created_at | formatTime }}
                            </span>
                            </div>
                        </div>
                    </div>
                    <div class="uk-card-media">
                        <div class="uk-inline-clip uk-transition-toggle" tabindex="0" uk-parallax="sepia: 100;">
                            <img :src="group.image | defaultImage" width="400" data-uk-img :alt="group.name">
                            <div v-if="group.image | defaultImage" class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                <span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345
                                <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
                            </div>
                        </div>
                    </div>

                    <div class="uk-card-body">
                        <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">
                            {{group.name}}
                        </h6>
                        <p class="uk-text-small uk-text-muted">
                            {{group.description}}
                        </p>
                    </div>
                    <div class="uk-card-footer">
                        <div class="uk-grid uk-grid-small uk-grid-divider uk-flex uk-flex-middle" data-uk-grid="">
                            <div class="uk-width-expand uk-text-small uk-first-column">
                                {{ group.user.name }}
                            </div>
                            <div class="uk-width-auto uk-text-right">
                                <a data-uk-tooltip="title: Drag this card" href="#" class="uk-icon-link drag-icon uk-icon" data-uk-icon="icon:move; ratio: 1" title="" aria-expanded="false">

                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

        </div>

        <div class="uk-align-center uk-animation-toggle uk-flex-center">

            <a v-on:click="viewMoreGroups(1)" class="btn-load-more uk-button uk-button-primary uk-animation-fade">
                View More <span class="uk-margin-small-left uk-icon" uk-icon="icon: more"></span>
            </a>

        </div>

    </div>

</template>


<script>
    import axios from 'axios';
    import moment from 'moment';

    export default {
        data() {
            return {
                groups: [],
                errors: []
            }
        },
        created() {

            this.defaultImage(0);
            
            this.groups = this.viewMoreGroups();

        },
        methods: {

            viewMoreGroups(page){

                getGroups(page).then((data) => {

                    this.groups = data.data;

                });


            }
        },
        filters: {
            capitalize: function (value) {



                if (!value) return ''
                value = value.toString()
                return value.charAt(0).toUpperCase() + value.slice(1)
            },

            formatTime:function (value) {

                if (value) {

                    return moment(value).format('ll');
                }

            },
            defaultImage:function (value) {

                console.log(value);

                if(value == 'false'){

                    return false;
                }

                return value;

            }
        }


    };




    /**
     * @method async viewMoreGroups
     * @returns {Promise<*>}
     */
    async function getGroups(page) {

        console.log(page);

        try {

            if(page){

                page = '?page=' + page;

            }else{

                page = '?page=' + 1;
            }

            const response = await axios.get('/api/onGetStories' + page);


            return response.data;

        } catch (error) {

            console.error(error);

        }
    }


</script>



