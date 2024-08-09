<?php

$request = $_SERVER['REQUEST_URI'];
$method = $_SERVER['REQUEST_METHOD'];
// echo "request+++++++++++++" . $request;
switch ($request) {
  case '/corecrushing/':
    require __DIR__ . '/home.php';
    break;
    // About us
  case '/corecrushing/about-us':
    require __DIR__ . '/about-us.php';
    break;
    // contact-us
  case '/corecrushing/contact-us':
    require __DIR__ . '/contact-us.php';
    break;

    // Product Category
  case '/corecrushing/Crushers':
    require __DIR__ . '/productcategory.php';
    break;
  case '/corecrushing/Feeders_and_Screens':
    require __DIR__ . '/productcategory.php';
    break;
  case '/corecrushing/Classifiers':
    require __DIR__ . '/productcategory.php';
    break;
    // Application Category
  case '/corecrushing/Aggregate_CrushingAnd_Screening_Plant':
    require __DIR__ . '/application.php';
    break; 
    case '/corecrushing/Sand_Plant':
    require __DIR__ . '/application.php';
    break;
  case '/corecrushing/Classification':
    require __DIR__ . '/application.php';
    break;
// new-application
case '/corecrushing/new-application':
  require __DIR__ . '/new-application.php';
  break;

    // Product page
    // Crushers
  case '/corecrushing/Crushers/jaw-crushers':
    require __DIR__ . '/productpage.php';
    break;
  case '/corecrushing/Crushers/cone-crushers':
    require __DIR__ . '/productpage.php';
    break;
  case '/corecrushing/Crushers/sander-cone':
    require __DIR__ . '/productpage.php';
    break;
  case '/corecrushing/Crushers/vertical-shaft-impactor':
    require __DIR__ . '/productpage.php';
    break;
    // Classifiers
  case '/corecrushing/Classifiers/high-frequency-screens':
    require __DIR__ . '/productpage.php';
    break;
    // Feeders_and_Screens
  case '/corecrushing/Feeders_and_Screens/grizzly-feeders':
    require __DIR__ . '/productpage.php';
    break;
  case '/corecrushing/Feeders_and_Screens/vibrating-screen':
    require __DIR__ . '/productpage.php';
    break;
  case '/corecrushing/Feeders_and_Screens/grizzly-screen':
    require __DIR__ . '/upcomming.php';
    break;
    case '/corecrushing/Feeders_and_Screens/pan-feeders':
      require __DIR__ . '/upcomming.php';
      break;
    //Privacy- policy
  case '/corecrushing/privacy-policy':
    require __DIR__ . '/privacy-policy.php';
    break;
    case '/corecrushing/brochures':
      require __DIR__ . '/brochures.php';
      break;




  default:
    http_response_code(404);
    require __DIR__ . '/404.php';
    break;
}
