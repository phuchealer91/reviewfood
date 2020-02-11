// $(function() {
  
//     $('.dropdown-local > .dropdown-local-item').on('click', function() {
//       $(this).parent().toggleClass('open');
//     });

//     $('.dropdown-local > .dropdown-local-sub-menu > .dropdown-local-sub-menu-intro > .dropdown-local-sub-menu-intro-main > .main-list').on('click', function() {
//         $('.dropdown-local > .dropdown-local-sub-menu > .dropdown-local-sub-menu-intro > .dropdown-local-sub-menu-intro-main > .main-list').removeClass('selected');
        
//         $(this).addClass('selected').parent().parent().parent().removeClass('open').children('.dropdown-local-item').text( $(this).text() );
//       });
      
//       $(document).on('keyup', function(evt) {
//         if ( (evt.keyCode || evt.which) === 27 ) {
//           $('.dropdown-local').removeClass('open');
//         }
//       });

//     $(document).on('click', function(evt) {
//         evt.preventDefault();
//       if ( $(evt.target).closest(".dropdown-local > .dropdown-local-item").length === 0 ) {
//         $('.dropdown-local').removeClass('open');
//       }
//     });
    
//   });
// function myFunction() {
//     document.getElementsByClassName("dropdown-local").classList.toggle("show");
//   }
$(document).ready(function() {
    $(".dropdown-local").click(function(e) {
        e.preventDefault();
        $("ul.dropdown-local-sub-menu").slideToggle(150);
    });
    $(".dropdown-local ul.dropdown-local-sub-menu li.dropdown-local-sub-menu-intro ul.dropdown-local-sub-menu-intro-main > .main-list").click(function() {
        $("div.dropdown-local-item").text($(this).text());
    });
    
});
$(document).ready(function() {
    $('.owl-carousel').owlCarousel({
        loop:true,
        margin:10,
        dots:false,
        nav:true,
        // mouseDrag:false,
        stagePadding: 200,
        autoplay:true,
        // animateOut: 'slideOutUp',
        responsive:{
            0:{
                items: 1
            },
            600:{
                items: 1
            },
            1000:{
                items: 1
            }
        }
    });
  
});
    
$(document).ready(function() {
    $('.js-select2').select2({
        dropdownAutoWidth: true,
        placeholder: 'Select an option'
    }).on('select2:opening', function(e) {
        $(this).data('select2').$dropdown.find(':input.select2-search__field').attr('placeholder', 'Search local,.....')
    })
  });
  const $button  = document.querySelector('#sidebar-toggle');
const $wrapper = document.querySelector('#wrapper-main');

$button.addEventListener('click', (e) => {
  e.preventDefault();
  $wrapper.classList.toggle('toggled');
});
  
    // $(".js-select2-multi").select2();
  
    // $(".large").select2({
    //   dropdownCssClass: "big-drop",
    // });


