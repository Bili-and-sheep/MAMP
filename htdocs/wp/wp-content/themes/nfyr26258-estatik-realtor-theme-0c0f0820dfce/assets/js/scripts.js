( function( $ ) {
    'use strict';

    $( function() {
        var $gallery = $( '.ert-gallery-image' );
        var $galleryPager = $( '.ert-gallery-image-pager' );
        var $singleGoogleMap = $( '#es-google-map' );
        var $testimonials_widget = $( '.js-ert-testimonials' );

        if ( typeof $.fn.magnificPopup !== 'undefined' ) {
            $('.js-ert-share-popup').magnificPopup();
        }

        $( '.navbar .dropdown-toggle' ).attr( 'data-hover', 'dropdown' ).removeAttr( 'data-toggle' );

        $( '.js-ert-slick' ).not('.slick-initialized').slick();

        if ( $gallery.length ) {
            $gallery.slick( {
                slidesToShow: 1,
                arrows: true,
                dots: false,
                asNavFor: $galleryPager,
                nextArrow: '<i class="fa fa-long-arrow-right slick-next"></i>',
                prevArrow: '<i class="fa fa-long-arrow-left slick-prev"></i>'
            } );


            $galleryPager.not('.slick-initialized').slick( {
                slidesToShow: 5,
                arrows: false,
                dots: false,
                asNavFor: $gallery,
                focusOnSelect: true,
                responsive: [
                    {
                        breakpoint: 992,
                        settings: {
                            slidesToShow: 4
                        }
                    },
                    {
                        breakpoint: 700,
                        settings: {
                            slidesToShow: 3
                        }
                    },
                    {
                        breakpoint: 450,
                        settings: {
                            slidesToShow: 2
                        }
                    }
                ]
            } );
        }

        if ( $singleGoogleMap.length ) {
            var map = document.getElementById( 'es-google-map' );

            var data = $( map ).data();

            if ( map && data.lat && data.lon && typeof( EsGoogleMap ) !== 'undefined' ) {
                var instance = new EsGoogleMap( map, data.lon, data.lat ).init();
                instance.setMarker();
            }
        }

        if ( $testimonials_widget.length ) {
            $testimonials_widget.not('.slick-initialized').slick( {
                slidesToShow: 1,
                arrows: true,
                dots: true,
                prevArrow: '<i class="fa fa-angle-left slick-prev"></i>',
                nextArrow: '<i class="fa fa-angle-right slick-next"></i>',
                responsive: [
                    {
                        breakpoint: 1000,
                        settings: {
                            arrows: false
                        }
                    }
                ]
            } );
        }

        $( '.js-advanced-search-link' ).click( function() {
            $( this ).closest( 'form' ).find( '.js-ert-search__advanced' ).toggleClass( 'hidden' );

            if ( $( this ).find( '.fa-plus' ).length ) {
                $( this ).find( '.fa-plus' ).removeClass( 'fa-plus' ).addClass( 'fa-minus' );
            } else {
                $( this ).find( '.fa-minus' ).removeClass( 'fa-minus' ).addClass( 'fa-plus' );
            }

            $( window ).trigger( 'resize' );

            return false;
        } );

        $( '.es-select2-tags' ).select2( {
            // dropdownAutoWidth : true,
            width: '100%'
        } );

        $( '.ert-search' ).find( 'select:not(.es-select2-tags)' ).select2( {
            createTag: function () { return null; },
            width: '100%'
        } );

        $( '.js-ert-hero-gallery' ).not('.slick-initialized').slick( {
            slidesToShow: 1,
            arrows: true,
            nextArrow: '<i class="fa fa-arrow-right slick-arrow-next"></i>',
            prevArrow: '<i class="fa fa-arrow-left slick-arrow-prev"></i>'
        } );

        $( '.ert-perfomance__item h4 .counter' ).counterUp();

        if ( typeof $.fn.magnificPopup !== 'undefined' ) {
            jQuery('.es-property-single-fields, .es-property-fields').magnificPopup({
                delegate: 'a.js-magnific-gallery',
                type: 'image',
                tLoading: 'Loading image #%curr%...',
                mainClass: 'mfp-img-mobile',
                gallery: {
                    enabled: true,
                    navigateByImgClick: true,
                    preload: [0,5]
                }
            });
        }

        $( '.advanced-search-control' ).find('input[type=reset]' ).click( function() {
            var $form = $( this ).closest( 'form' );
            $form.find( '.ert-search-field' ).find( 'input, select' )
                .val( null )
                .attr( 'value', '' )
                .attr( 'data-value', '' )
                .trigger( 'change' );

            var $select2Tags = $form.find( '.es-select2-tags' );

            if ( $select2Tags.length ) {
                $select2Tags.select2( 'val', '' );
                $select2Tags.select2( 'data', null );
                $select2Tags.find( 'option' ).removeProp( 'selected' ).removeAttr( 'selected' );
            }
        } );
    } );
} )( jQuery );
