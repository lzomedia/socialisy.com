<template>



    <div class="uk-grid uk-grid-medium uk-child-width-1-2@s uk-child-width-1-3@m uk-child-width-1-4@l  uk-child-width-1-6@xl uk-grid-match js-filter" data-uk-grid="masonry: true" data-uk-sortable="handle: .drag-icon">


        <div v-for="group in groups" class=" music-card">
            <div class="uk-card uk-card-small uk-card-default">
                <div class="uk-card-header">
                    <div class="uk-grid uk-grid-small uk-text-small" data-uk-grid="">
                        <div class="uk-width-expand uk-first-column">
                            <span class="cat-txt">MUSIC / BANDS</span>
                        </div>
                        <div class="uk-width-auto uk-text-right uk-text-muted">
                            <span data-uk-icon="icon:clock; ratio: 0.8" class="uk-icon">
                                12 min.
                            </span>
                        </div>
                    </div>
                </div>
                <div class="uk-card-media">
                    <div class="uk-inline-clip uk-transition-toggle" tabindex="0">
                        <img :src="group.image" data-width="400" data-height="470" data-uk-img :alt="group.name">
                        <div class="uk-transition-slide-bottom uk-position-bottom uk-overlay uk-overlay-primary">
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
                            John Doe
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
</template>


<div class="uk-align-center uk-animation-toggle">

    <a v-on:click="viewMoreGroups(1)" class="btn-load-more uk-button uk-button-primary uk-animation-fade">
        View More <span class="uk-margin-small-left uk-icon" uk-icon="icon: more"></span>
    </a>

</div>

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

            this.groups = this.viewMoreGroups();

        },
        methods: {

            viewMoreGroups(page){

                getGroups(page).then((data) => {

                    this.groups = data.data;

                });


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

            const response = await axios.get('/api/onGetGroups' + page);


            return response.data;

        } catch (error) {

            console.error(error);

        }
    }


</script>



