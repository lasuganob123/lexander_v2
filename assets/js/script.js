$(function() {    
    //expandable divisions 
    
    var techInside = $('div.tech-inside');
    
    $('div.contain-desc').hide();
    
    techInside.click(
    function() {
       $(this).find('div.contain-desc').slideToggle("slow"); 
    });
});