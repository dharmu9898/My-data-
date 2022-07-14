
    // console.log($);
    // console.log(jQuery);

    // jQuery("button").click(function(){
    //     console.log("Button Clicked");
    // });

    // $("button").click(function(){
    //     console.log("Button Clicked");
    // });

    // jQuery(document).ready(function(){
    //     jQuery("button").click(function(){
    //         console.log("Button Clicked");
    //         });
    // });

    // jQuery.noConflict();
    // jQuery(document).ready(function($){
    //     $("button").click(function(){
    //         console.log("Button Clicked");
    //         });
    // });
    
    // jQuery.noConflict();
    // jQuery(document).ready(function($){
    //   $("p").click(function(){
    //       alert("Element Selector");
    //   });

    //   $("#btn-id").click(function(){
    //       alert("ID Selector");
    //   });

    //   $(".btn-class").click(function(){
    //     alert("Class Selector");
    //   });
    // }); 

   
     
        // // Mouse Events
        //     $("p").click(function(){
        //         console.log("Clicked");
        //     });

        //     $("p").dblclick(function(){
        //         console.log("Double Clicked");
        //     });

        //     $("p").mouseenter(function(){
        //         console.log("Mouse Enter");
        //     });

        //     $("p").mouseleave(function(){
        //         console.log("Mouse Leave");
        //     });

        //     // Keyboard Events
        //     $("#name").keypress(function(){
        //         console.log("Key Pressed");
        //     });

        //     $("#name").keydown(function(){
        //         console.log("Key Down");
        //     });

        //     $("#name").keyup(function(){
        //         console.log("Key Up");
        //     });
            
        //     //Form Events
        //     $("#fname").focus(function(){
        //         console.log("Focus Field");
        //     });

        //     $("#fname").blur(function(){
        //         console.log("Blur Field");
        //     });

        //     $("#form-id").submit(function(e){
        //         console.log("Form Submitted");
        //         e.preventDefault();
        //     });

        //     // Window Event
        //     $(window).resize(function(){
        //             console.log("Windows Resized");
        //         });

        jQuery.noConflict();
        jQuery(document).ready(function($){
            // Hide
            $("#btn-hide").click(function(){
                $("#image-id").hide(function(){
                    console.log("Image Hide Ho Chuka hai");
                });
            });
    });

