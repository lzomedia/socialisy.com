//import vue
import Vue from 'vue';


//import UIkit
import UIkit from 'uikit';
import Icons from 'uikit/dist/js/uikit-icons';



// loads the Icon plugin
UIkit.use(Icons);

//attach jquery
window.$ = window.jQuery = require('jquery');


// import components

import Communities from '../../components/communities.vue';


new Vue({
    el: '#communities',
    render: (h) => h(Communities)

});





$(window).on('ajaxInvalidField', function(event, fieldElement, fieldName, errorMsg, isFirst) {
    $(fieldElement).closest('.form-group').addClass('has-error');
});




$(window).on('ajaxInvalidField', function(event, fieldElement, fieldName, errorMsg, isFirst) {
    $(fieldElement).closest('.form-group').addClass('has-error');
});

$(document).on('ajaxPromise', '[data-request]', function() {
    $(this).closest('form').find('.form-group.has-error').removeClass('has-error');
});
