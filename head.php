

<title>Untitled</title>

        <!-- Internal Stylesheet -->
        <link rel="stylesheet" href="styles.css">
        <link rel="stylesheet" type="text/css" href="jquery.pagepiling.css">


        <!-- Required meta tags -->
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, height=device-height, initial-scale=1, shrink-to-fit=no">

        <!-- Bootstrap CSS -->
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">


        <!-- Optional JavaScript -->
        <!-- jQuery first, then Popper.js, then Bootstrap JS -->

        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
        <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery.isotope/3.0.6/isotope.pkgd.min.js"></script>
        



        <!-- Font Awesome & Google Fonts-->
        <script src="https://kit.fontawesome.com/416b391c4f.js"></script>
        <link href="https://fonts.googleapis.com/css?family=Noto+Sans+HK|Titillium+Web&display=swap" rel="stylesheet">

        <script type="text/javascript">
$(document).ready(function() {

/*
* Plugin intialization
*/

$('#pagepiling').pagepiling({
    menu: '#menu',
    anchors: ['section1', 'section2'],
    sectionsColor: ['transparent', 'transparent', 'transparent', 'transparent'],
    navigation: {
        'position': 'right',
        'tooltips': ['Page 1', 'Page 2']
    },
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
         </script>



<script type="text/javascript">
// 	 var myFullpage = new fullpage('#fullpage', {
//       anchors: ['firstPage', 'secondPage', '3rdPage', '4thpage', 'lastPage'],
//       menu: '#menu',
//       continuousVertical: true,
//       afterLoad: function(anchorLink, index){
//             console.log("AFTER LOAD - anchorLink:" +anchorLink + " index:" +index );
//         },
//         onLeave: function(index, nextIndex, direction){
//             console.log("ONLEAVE - index:" +index + " nextIndex:" +nextIndex  + " direction:" + direction);

//         },
//     });
</script>