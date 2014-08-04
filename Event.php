<?php

namespace Plugin\GridExample;

class Event
{
    public static function ipBeforeController()
      {
    $script2 = "
   $(document).ready(function() {
   $('.ipsAdminAutoHeight.ipAdminContentWrapper.clearfix').removeAttr('style');
   $('.ipsAdminAutoHeight.ipAdminContentWrapper.clearfix').attr('style', 'padding:20px 10px 40px;min-height: 337px;');
   $('.ipModuleGrid.ipsGrid').addClass('table-responsive'); 
   $('.ipModuleGrid.ipsGrid').attr('style', 'padding-left: 5px;'); 
   
   
  });
  
  

";

        ipAddJsContent('resptable', $script2);
          
        
    }
}
