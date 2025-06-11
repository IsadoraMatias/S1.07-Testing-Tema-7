<?php
 function grade($score)
  {
    if ($score >= 60) {
      return "This student belongs to First division";
    } else if ($score >= 45) {
      return "This student belongs to Second division";
    } else if ($score >= 33) {
      return "This student belongs to Third division";
    } else {
      return "This student failed";
    }
  }
?>