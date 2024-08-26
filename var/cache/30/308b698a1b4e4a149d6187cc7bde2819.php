<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* layout2.html */
class __TwigTemplate_9e1906662fb0f388791c1210a83cc99e extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        yield "<!DOCTYPE html>
<html lang=\"en\">
  <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      
      <title>schoolworks</title>
      <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"/>

      <link href=\" /layouts/vertical-light-menu/css/light/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /layouts/vertical-light-menu/css/dark/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <script src=\" /layouts/vertical-light-menu/loader.js\"></script>

      
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
      <link href=\" /layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    
       <!-- Css File -->
      <link rel=\"stylesheet\" href=\" /css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\" /css/animate.min.css\">
      <link rel=\"stylesheet\" href=\" /css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\" /css/mediabox.min.css\">
      <link rel=\"stylesheet\" href=\" /css/owl.carousel.min.css\">
      <link rel=\"stylesheet\" href=\" /css/style.css\">
     
      <link rel=\"stylesheet\" href=\" /css/responsive.css\">
   
      
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
      <link href=\" /src/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\" /layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /src/assets/css/light/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\" /layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /src/assets/css/dark/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /src/assets/css/dark/authentication/auth-cover.css\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- END GLOBAL MANDATORY STYLES -->
       <script defer src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\"></script>
       <script src=\"https://code.jquery.com/jquery-3.6.1.js\" integrity=\"sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=\" crossorigin=\"anonymous\"></script>
   
      
  </head>

  
<body class=\"layout-boxed\" data-bs-spy=\"scroll\" data-bs-target=\"#navSection\" data-bs-offset=\"100\">

    <!--  BEGIN NAVBAR  -->
    <div class=\"header-container container-l \">
        <header class=\"header navbar navbar-expand-sm expand-header align-self-center\" >
          <div class=\"overlay\"></div>
          <div class=\"cs-overlay\"></div>
        

             <!--  BEGIN CONTENT AREA  -->
          <div class=\"container col-xl-4 col-md-4 col-sm-12 col-12\" >
            <ul class=\"navbar-item theme-brand flex-row  text-center\">
                <li class=\"nav-item theme-logo\">
                    <a href=\"/\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"  alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> schoolwork </a>
                </li>
            </ul>
          

            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\">
                <li class=\"nav-item theme-toggle-item\">
                    <a href=\"javascript:void(0);\" class=\"nav-link theme-toggle\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-moon dark-mode\"><path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path></svg>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-sun light-mode\"><circle cx=\"12\" cy=\"12\" r=\"5\"></circle><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"3\"></line><line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"23\"></line><line x1=\"4.22\" y1=\"4.22\" x2=\"5.64\" y2=\"5.64\"></line><line x1=\"18.36\" y1=\"18.36\" x2=\"19.78\" y2=\"19.78\"></line><line x1=\"1\" y1=\"12\" x2=\"3\" y2=\"12\"></line><line x1=\"21\" y1=\"12\" x2=\"23\" y2=\"12\"></line><line x1=\"4.22\" y1=\"19.78\" x2=\"5.64\" y2=\"18.36\"></line><line x1=\"18.36\" y1=\"5.64\" x2=\"19.78\" y2=\"4.22\"></line></svg>
                    </a>
                </li>
            </ul>
            </div>
        </header>
    </div>


    ";
        // line 85
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 86
        yield "
    <script>
      function copy() {
          var serviceName = \"check\";
          var code = \"l";
        // line 90
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["SD_SCHUL_CODE"] ?? null), "html", null, true);
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["year"] ?? null), "html", null, true);
        yield "\";
          var slash = \"/\";
          console.log(serviceName);
          console.log(code);
          var total = serviceName.concat(slash, code);
          var value = \"https://neohum779.mycafe24.com/www/\";
          
          value += total;
          navigator.clipboard.writeText(value).then(res=>{
            alert(\"주소가 복사되었습니다!\");
          })
  }

    </script>

      


        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\" /src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- **** All JS Files ***** -->
    <script src=\" /js/jquery.min.js\"></script>
    <script src=\" /js/popper.min.js\"></script>
    <script src=\" /js/bootstrap.min.js\"></script>

       <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\" /src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\" /src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\" /src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\" /src/plugins/src/waves/waves.min.js\"></script>
    <script src=\" /layouts/vertical-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    
   
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   
  




</body>
</html>

";
        return; yield '';
    }

    // line 85
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "layout2.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  187 => 85,  133 => 90,  127 => 86,  125 => 85,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
  <head>
      <meta charset=\"utf-8\">
      <meta name=\"viewport\" content=\"width=device-width, initial-scale=1\">
      
      <title>schoolworks</title>
      <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"/>

      <link href=\" /layouts/vertical-light-menu/css/light/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /layouts/vertical-light-menu/css/dark/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <script src=\" /layouts/vertical-light-menu/loader.js\"></script>

      
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
      <link href=\" /layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    
       <!-- Css File -->
      <link rel=\"stylesheet\" href=\" /css/bootstrap.min.css\">
      <link rel=\"stylesheet\" href=\" /css/animate.min.css\">
      <link rel=\"stylesheet\" href=\" /css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\" /css/mediabox.min.css\">
      <link rel=\"stylesheet\" href=\" /css/owl.carousel.min.css\">
      <link rel=\"stylesheet\" href=\" /css/style.css\">
     
      <link rel=\"stylesheet\" href=\" /css/responsive.css\">
   
      
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
      <link href=\" /src/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\" /layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /src/assets/css/light/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\" /layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /src/assets/css/dark/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\" /src/assets/css/dark/authentication/auth-cover.css\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- END GLOBAL MANDATORY STYLES -->
       <script defer src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\"></script>
       <script src=\"https://code.jquery.com/jquery-3.6.1.js\" integrity=\"sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=\" crossorigin=\"anonymous\"></script>
   
      
  </head>

  
<body class=\"layout-boxed\" data-bs-spy=\"scroll\" data-bs-target=\"#navSection\" data-bs-offset=\"100\">

    <!--  BEGIN NAVBAR  -->
    <div class=\"header-container container-l \">
        <header class=\"header navbar navbar-expand-sm expand-header align-self-center\" >
          <div class=\"overlay\"></div>
          <div class=\"cs-overlay\"></div>
        

             <!--  BEGIN CONTENT AREA  -->
          <div class=\"container col-xl-4 col-md-4 col-sm-12 col-12\" >
            <ul class=\"navbar-item theme-brand flex-row  text-center\">
                <li class=\"nav-item theme-logo\">
                    <a href=\"/\">
                        <img src=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"  alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> schoolwork </a>
                </li>
            </ul>
          

            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\">
                <li class=\"nav-item theme-toggle-item\">
                    <a href=\"javascript:void(0);\" class=\"nav-link theme-toggle\">
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-moon dark-mode\"><path d=\"M21 12.79A9 9 0 1 1 11.21 3 7 7 0 0 0 21 12.79z\"></path></svg>
                        <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-sun light-mode\"><circle cx=\"12\" cy=\"12\" r=\"5\"></circle><line x1=\"12\" y1=\"1\" x2=\"12\" y2=\"3\"></line><line x1=\"12\" y1=\"21\" x2=\"12\" y2=\"23\"></line><line x1=\"4.22\" y1=\"4.22\" x2=\"5.64\" y2=\"5.64\"></line><line x1=\"18.36\" y1=\"18.36\" x2=\"19.78\" y2=\"19.78\"></line><line x1=\"1\" y1=\"12\" x2=\"3\" y2=\"12\"></line><line x1=\"21\" y1=\"12\" x2=\"23\" y2=\"12\"></line><line x1=\"4.22\" y1=\"19.78\" x2=\"5.64\" y2=\"18.36\"></line><line x1=\"18.36\" y1=\"5.64\" x2=\"19.78\" y2=\"4.22\"></line></svg>
                    </a>
                </li>
            </ul>
            </div>
        </header>
    </div>


    {% block content %}{% endblock %}

    <script>
      function copy() {
          var serviceName = \"check\";
          var code = \"l{{ SD_SCHUL_CODE }}{{ year }}\";
          var slash = \"/\";
          console.log(serviceName);
          console.log(code);
          var total = serviceName.concat(slash, code);
          var value = \"https://neohum779.mycafe24.com/www/\";
          
          value += total;
          navigator.clipboard.writeText(value).then(res=>{
            alert(\"주소가 복사되었습니다!\");
          })
  }

    </script>

      


        <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\" /src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- **** All JS Files ***** -->
    <script src=\" /js/jquery.min.js\"></script>
    <script src=\" /js/popper.min.js\"></script>
    <script src=\" /js/bootstrap.min.js\"></script>

       <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\" /src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\" /src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\" /src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\" /src/plugins/src/waves/waves.min.js\"></script>
    <script src=\" /layouts/vertical-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    
   
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
   
  




</body>
</html>

", "layout2.html", "/Users/nm/works/project/fbc/templates/layout2.html");
    }
}
