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

/* layout.html */
class __TwigTemplate_2ff01592f8ad33662428e752c8879c43 extends Template
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
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>schoolworks</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"/>

      <link href=\"/layouts/vertical-light-menu/css/light/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <script src=\"/layouts/vertical-light-menu/loader.js\"></script>

      
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    
       <!-- Css File -->
   
      <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
      <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"/css/mediabox.min.css\">
      <link rel=\"stylesheet\" href=\"/css/owl.carousel.min.css\">
      <link rel=\"stylesheet\" href=\"/css/style.css\">
     
      <link rel=\"stylesheet\" href=\"/css/responsive.css\">
       <link rel=\"stylesheet\" href=\"/style.css\">
      
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
      <link href=\"/src/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/light/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-cover.css\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- END GLOBAL MANDATORY STYLES -->
       <script defer src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\"></script>
       <script src=\"https://code.jquery.com/jquery-3.6.1.js\" integrity=\"sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=\" crossorigin=\"anonymous\"></script>
        
      <script src=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />

  </head>

  <body>
     

    ";
        // line 53
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 54
        yield "

     

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   
    <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- **** All JS Files ***** -->
    <script src=\"/js/jquery.min.js\"></>
    <script src=\"/js/popper.min.js\"></script>
    

      
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/vertical-light-menu/app.js\"></script>

    

   
  </body>
</html>

";
        return; yield '';
    }

    // line 53
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
        return "layout.html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  125 => 53,  95 => 54,  93 => 53,  39 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<!DOCTYPE html>
<html lang=\"en\">
<head>
    <meta charset=\"utf-8\">
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\">
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1, maximum-scale=1, shrink-to-fit=no\">
    <title>schoolworks</title>
    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"/>

      <link href=\"/layouts/vertical-light-menu/css/light/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <script src=\"/layouts/vertical-light-menu/loader.js\"></script>

      
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    
       <!-- Css File -->
   
      <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
      <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"/css/mediabox.min.css\">
      <link rel=\"stylesheet\" href=\"/css/owl.carousel.min.css\">
      <link rel=\"stylesheet\" href=\"/css/style.css\">
     
      <link rel=\"stylesheet\" href=\"/css/responsive.css\">
       <link rel=\"stylesheet\" href=\"/style.css\">
      
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
      <link href=\"/src/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/light/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-cover.css\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- END GLOBAL MANDATORY STYLES -->
       <script defer src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\"></script>
       <script src=\"https://code.jquery.com/jquery-3.6.1.js\" integrity=\"sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=\" crossorigin=\"anonymous\"></script>
        
      <script src=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />

  </head>

  <body>
     

    {% block content %}{% endblock %}


     

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   
    <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- **** All JS Files ***** -->
    <script src=\"/js/jquery.min.js\"></>
    <script src=\"/js/popper.min.js\"></script>
    

      
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/vertical-light-menu/app.js\"></script>

    

   
  </body>
</html>

", "layout.html", "/Users/nm/works/project/fbc/templates/layout.html");
    }
}
