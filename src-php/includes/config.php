<?php
	switch ($_SERVER["SCRIPT_NAME"]) {
		case "/src-php/about.php":
			$CURRENT_PAGE = "about";
			$PAGE_TITLE = "About Us";
			break;
		case "/src-php/contact.php":
			$CURRENT_PAGE = "contact";
			$PAGE_TITLE = "Contact Us";
			break;
    case "/src-php/join.php":
      $CURRENT_PAGE = "join";
      $PAGE_TITLE = "Join JumboCode";
      break;
    case "/index.php":
      $CURRENT_PAGE = "home";
      $PAGE_TITLE = "JumboCode";
      break;
    /* all projects should count as project pages*/
		default:
      $CURRENT_PAGE = "projects";
      $PAGE_TITLE = "Past Projects";
	}
?>
