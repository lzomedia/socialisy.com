import UIkit from 'uikit';


import Icons from 'uikit/dist/js/uikit-icons';




import Vue from 'vue';
import Stories from '../../components/stories.vue';


// loads the Icon plugin
UIkit.use(Icons);


window.$ = window.jQuery = require('jquery');



new Vue({
    el: '#stories',
    render: (h) => h(Stories)

});
