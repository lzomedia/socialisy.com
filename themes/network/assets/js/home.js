//import vue
import Vue from 'vue';


//import UIkit
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';

require('../../node_modules/shufflejs/dist/shuffle');


// loads the Icon plugin
UIkit.use(Icons);

//attach jquery
window.$ = window.jQuery = require('jquery');


// import components
import Groups from '../../components/groups';

//start the VueJS
new Vue({
    el: '#top-groups',
    render: (h) => h(Groups)
});
