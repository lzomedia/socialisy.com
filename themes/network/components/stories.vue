<template>

    <div class="uk-child-width-1-3@m uk-grid-match uk-grid" uk-grid>


        <div v-for="story in stories">
            <div class="uk-card uk-card-default">
                <div class="uk-card-media-top">
                    <img :src="story.image">
                </div>
                <div class=uk-card-body>
                    <h3 class=uk-card-title>
                        {{story.title}}
                    </h3>
                    <p>
                        {{story.message}}
                    </p>
                </div>
            </div>
        </div>



        <div class="uk-align-center uk-animation-toggle">

            <a v-on:click="viewMoreStories(1)" class="btn-load-more uk-button uk-button-primary uk-animation-fade">
                View More <span class="uk-margin-small-left uk-icon" uk-icon="icon: more"></span>
            </a>

        </div>

    </div>


</template>

<script>
    import axios from 'axios';

    export default {
        data() {
            return {
                groups: [],
                errors: []
            }
        },
        created() {

            getGroups().then((data) => {
                this.groups = data.data;

            });

        },
        methods: {

            viewMoreStories(page){

                getGroups(page).then((data) => {

                    this.groups.push(data.data);

                });


            }
        }


    };

    /**
     * @returns {Promise<*>}
     */
    async function getGroups(page) {

        console.log(page);

        try {



            if(page){

                page = 'page=' + page + 1;

            }else{

                page = 'page=' + 1;
            }


            const response = await axios.get('/api/onGetStories?' + page);


            return response.data;

        } catch (error) {

            console.error(error);

        }
    }


</script>


