<div>  
  <div class ="popup-content">
    <div id="popup-text">      
      <?php print $message ?>
    </div>
    <div id="popup-buttons">
      <button type="button" onclick="javascript:eu_cookie_compliance_has_agreed()">Yes, I agree</button>
      <button type="button" <?php if ($link) : ?> onclick="window.location.href='<?php print $link ?>'" <?php endif ?> >No, I want to find out more</button>
    </div>
  </div>
</div>