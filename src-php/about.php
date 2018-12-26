<?php include("includes/config.php");?>
<!DOCTYPE html>
<html lang="en">
<head>
	<?php include("includes/head-tag.php");?>

	<!-- Custom styles for this page -->
	<link rel="stylesheet" href="../src/assets/styles/about.css" />
</head>

<body>
  <?php include("includes/nav.php");?>

  <div class="container-fluid">
    <div class="overview">
      <h1>Philanthropy, </br> meet the <span class="seafoam">future</span></h1>
    </div>
    <div class="flex-grid row">
      <div class="col-12 col-sm-3 explain-t-left">
        <h1 class="align-bottom">Who We Are</h1>
      </div>
    <div class="col-12 col-sm-9 explain-p quote-right">
        <p>
          JumboCode is a student-run organization at Tufts University committed
          to developing software at no charge for nonprofit and Federal
          organizations. In an increasingly technological world, we have
          dedicated ourselves to helping organizations keep up. We strive to
          offer incredible service while providing a platform for Tufts
          undergraduates to gain first-hand software development experience.
        </p>
    </div>
  </div>

  <div class="flex-grid row" id="bottom-bio">
    <div class="col-12 col-sm-9 explain-p quote-left text-sm-right">
      <p>
        In order to offer high quality service, we assemble specialized
        teams of programmers, designers and entrepreneurs to work on
        projects until completion. Each team is assigned a Project Manager,
        who is in charge of planning, team management, and client
        communication. We use agile methodologies to ensure great service.
      </p>
      <p>
        The Executive Board is responsible for overseeing general club
        operations, as well as managing clients and teams. As a new
        organization, we continue to learn, grow, and adapt. We hope to
        become the premier digital consulting organization in the Greater
        Boston area.
      </p>
    </div>
    <div class="col-12 col-sm-3 explain-t-right">
        <h1>How We Operate</h1>
    </div>
  </div>



  <div class="our-services-page">

    <h1 class="section-header">Our Services</h1>

    <div class="services">
      <div class="tile">
        <a href="#openApp" class="popup"><img src="/src/assets/img/mobile.svg" attr="app development button"></a>
        <div id="openApp" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">&times;</a>
            <img src="/src/assets/img/mobile.svg">
            <h2>App<br></br>Development</h2>
            <p><span>Mobile apps for both iOS and Android.</span><br>The teams at JumboCode are skilled in both iOS and Android app development. Whatever your specific needs, the students and project leaders at JumboCode are more than up to the task. Part of the beauty of our organization is that we create teams based on each student’s individual strengths, ensuring that your fancy new iPhone app isn’t made by a group of coders specialized in creating Android applications. That said, we are also suited to cross-platform distribution, and will never make you choose between developing your app for either iOS or Android alone.</br></p>
          </div>
        </div>
        <p class="services-titles">App Development</p>
      </div>

      <div class="tile">
        <a href="#openWeb" class="popup"><img src="/src/assets/img/web.svg" attr="web development button"></a>
        <div id="openWeb" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">&times;</a>
            <img src="/src/assets/img/web.svg">
            <h2>Web<br></br>Development</h2>
            <p><span>Web apps and websites for every browser.</span><br>Websites and web applications are a massive part of what we do at JumboCode. The vast majority of our programmers have taken the web programming course at Tufts, and put their knowledge to good use when creating your new website or web application. Knowing that more and more people are viewing the internet through their phones, JumboCode has embraced the concept of responsive design - our teams recognize the prevalence of mobile users, and can create a site that works just as well on a smartphone as it does on your desktop.</br></p>
          </div>
        </div>
        <p class="services-titles">Web Development</p>
      </div>

      <div class="tile">
        <a href="#openMarket" class="popup"><img src="/src/assets/img/marketing.svg" attr="digital marketing button" style="padding-left: 50px;"></a>
        <div id="openMarket" class="modalDialog">
          <div>
            <a href="#close" title="Close" class="close">&times;</a>
            <img src="/src/assets/img/marketing.svg">
            <h2>Digital<br></br>Marketing</h2>
            <p><span>From interfaces to logos.</span><br>As JumboCode has grown, so have our strengths. In recent years, we have added more designers in an attempt to not only create functional products, but also beautiful ones. Each project now has at least one dedicated designer, who can work with your organization to create an application or website uniquely tailored to your branding and digital identity. Furthermore, if you are looking for a new logo, color scheme, or typeface, the designers at JumboCode will work with you to create something fresh and exciting.</br></p>
          </div>
        </div>
        <p class="services-titles">Digital Marketing</p>
      </div>
    </div>
  </div>

  <div class="exec-board">
    <h1 class="section-header">Executive Board</h1>
    <div class="container">
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h2 class="overlay-name">Yuki Zaninovich</h2>
            <p class="overlay-position">President</p>
          </div>
        </div>
        <img class="card-img square" src="/src/assets/img/board/yuki.JPG">
      </div>
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h1 class="overlay-name">Andrew Hoiberg</h1>
            <p class="overlay-position">Project Manager</p>
          </div>
        </div>
        <img class="square" src="/src/assets/img/board/andrew.JPG">
      </div>
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h1 class="overlay-name">Ben Cresitello-Dittmar</h1>
            <p class="overlay-position">Project Manager</p>
          </div>
        </div>
        <img class="square" src="/src/assets/img/board/ben.JPG">
      </div>
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h1 class="overlay-name">Julia <br />Grace</h1>
            <p class="overlay-position">Client Manager</p>
          </div>
        </div>
        <img class="square" src="/src/assets/img/board/julia.JPG">
      </div>
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h1 class="overlay-name">Ryan<br/>Osgood</h1>
            <p class="overlay-position">Operations Manager</p>
          </div>
        </div>
        <img class="square" src="/src/assets/img/board/ryan.JPG">
      </div>
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h1 class="overlay-name">Emily Lin</h1>
            <p class="overlay-position">Design Lead</p>
          </div>
        </div>
        <img class="square" src="/src/assets/img/board/emily.JPG">
      </div>
      <div class="card">
        <div class="overlay">
          <div class="overlay-text">
            <h1 class="overlay-name">Spencer Perry</h1>
            <p class="overlay-position">Operations Manager</p>
          </div>
        </div>
        <img class="square" src="/src/assets/img/board/spencer.JPG">
      </div>
    </div>
  </div>
</div>

  </body>
