<template>
    <h1>
        Welcome broooooooo
    </h1>
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

