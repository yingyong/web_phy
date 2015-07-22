/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */



    (function(d, s, id) {
        var js, fjs = d.getElementsByTagName(s)[0];
        if (d.getElementById(id))
            return;
        js = d.createElement(s);
        js.id = id;
        js.src = "//connect.facebook.net/en_US/sdk.js#xfbml=1&version=v2.0";
        fjs.parentNode.insertBefore(js, fjs);
    }(document, 'script', 'facebook-jssdk'));
    
    jQuery(document).ready(function() {
        
 
           jQuery('.social_tabs .tab-links a').on('click', function(e) {
            var currentAttrValue = jQuery(this).attr('href');
            var lineColor = "#2C58AD";
            var tName = "facebook : idealfanpage";
            // Show/Hide Tabs
            jQuery('.social_tabs ' + currentAttrValue).show().siblings().hide();

            // Change/remove current tab to active
            jQuery(this).parent('li').addClass('active').siblings();
            if (currentAttrValue === '#tab1') {
                lineColor = "#2C58AD";
                tName = "facebook : ideal Physics";
            } else if (currentAttrValue === '#tab2') {
                lineColor = "#49A4BF";
                tName = "Twitter : ideal Physics";
            } else if (currentAttrValue === '#tab3') {
                lineColor = "#A2755A";
                tName = "Instargram : ideal Physics";
            } else if (currentAttrValue === '#tab4') {
                lineColor = "#D01B1F";
                tName = "You Tube : ideal Physics";
            } else {
                lineColor = "#2C58AD";
                tName = "facebook : ideal Physics";
            }
            jQuery('#tab_line').css("background-color", lineColor);
            jQuery("#tab_head").text(tName);
            e.preventDefault();
        });
    });
    
    

