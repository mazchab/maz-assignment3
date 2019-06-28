$(document).ready(function() {

    /*
    * Plugin intialization
    */

    $('#pagepiling').pagepiling({
    menu: '#menu',
    anchors: ['page1', 'page2', 'page3'],
    sectionsColor: ['transparent', 'transparent', 'transparent', 'transparent'],
    navigation: {
    'textColor': '#000',
    'bulletsColor': '#000',
    'position': 'bottom',
    'tooltips': ['Page 1', 'Page 2', 'Page 3']
    },
    
    
    // Code for the changes in the nav buttons on the right
    afterRender: function(){
    $('#pp-nav').addClass('custom');
    },
    afterLoad: function(anchorLink, index){
    if(index>1){
    $('#pp-nav').removeClass('custom');
    }else{
    $('#pp-nav').addClass('custom');
    }
    }
    });

    });