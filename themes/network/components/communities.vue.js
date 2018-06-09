import Vue from "vue";
import axios from 'axios';
window.$ = window.jQuery = require('jquery');




const Communities = Vue.extend({
    // language=HTML
    template: `

        <div>
            <div class="form-group">
                <div data-uk-grid class=" uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-4@xl uk-grid-match js-filter" data-uk-grid="masonry: true;paralax:true" data-uk-sortable="handle: .drag-icon">
                    <!--card !-->
                    <div  v-for="item in items" class="nature-card">
                        <div class="uk-card uk-card-small uk-card-default">
                            <div class="uk-card-header">

                                <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid>
                                    <div class="uk-width-expand">
                                        <span class="cat-txt">Nature / Outdoor</span>
                                    </div>
                                    <div class="uk-width-auto uk-text-right uk-text-muted">
                                        <span data-uk-icon="icon:clock; ratio: 0.8"></span> 3 min.
                                    </div>
                                </div>
                            </div>
                            <div class="uk-card-media">

                                <div  style="width: 100%" class="uk-inline-clip uk-align-center uk-transition-toggle" tabindex="0">
                                    <img width="100%" height="200" class="uk-text-center" :data-src="item.image | defaultImage" :src="item.image | defaultImage" title="item.image" data-uk-img :alt="item.name">
                                    <div  class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
                                        <span data-uk-icon="icon:heart; ratio: 0.8"></span> 12.345 <span data-uk-icon="icon:comment; ratio: 0.8"></span> 12.345
                                    </div>
                                   
                                   
                                </div>
                                <div class="uk-card-body">
                                    <h6 class="uk-margin-small-bottom uk-margin-remove-adjacent uk-text-bold">
                                        <a :href="'/dicover/' + item.url" class="cat-txt">
                                            {{ item.name }}
                                        </a>
                                    </h6>
                                    <p class="">{{ item.description }}</p>
                                </div>
                                <div class="uk-card-footer">
                                    <div class="uk-width-auto uk-text-small uk-first-column">
                                        <span class="uk-icon" data-uk-icon="icon:user;"></span> {{ item.user.name }}
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
                            <!-- /card -->
                        </div>

                        


                    </div>
                </div>
            </div>
            
            <div class="uk-clearfix"></div>

            <div class="uk-container">

                <div v-show="loading" uk-spinner></div>


                <div class="uk-align-center uk-animation-toggle">

                    <a id="view-more" v-on:click="viewMoreGroups()" class="uk-align-center uk-animation-fade">
                        View More <span class="uk-margin-small-left uk-icon" uk-icon="icon: more"></span>
                    </a>

                </div>

            </div>
        </div>


    `,
    data() {
        return {
            name: 'Hello!',
            items: [],
            loadPage: '',
            page: '/api/onGetGroups',
            loading: false
        }
    },
    /**
     *
     */
    created: function () {
        // GET /someUrl


    },
    activated() {

        console.log('load-more-action');

    },


    ready: function() {

        this.loading = true;
    },

    beforeMount() {

        this.loading = true;

        this.viewMoreGroups();


    },
    mounted(){


        this.viewMoreGroups();


    },
    methods: {

        viewMoreGroups() {

            let page = this.page;

            getGroups(page).then((response) => {

                this.items = this.items.concat(response.data.data);

                this.page = response.data.next_page_url;

                this.loading = false;

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

})


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


new Vue({
    el: '#fixtest',
    render: (h) => h(Communities)
});


