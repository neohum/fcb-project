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
class __TwigTemplate_04065fd0197da00b1769851e550df63d extends Template
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\" />
    <!-- Css File -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/mediabox.min.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    
    <link rel=\"stylesheet\" href=\"/css/responsive.css\">
      <link rel=\"stylesheet\" href=\"/style.css\">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->    

  </head>

  <body>

    ";
        // line 25
        yield from $this->unwrap()->yieldBlock('content', $context, $blocks);
        // line 26
        yield "

     

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    
    <script src=\"/src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    

   
  </body>
</html>

";
        return; yield '';
    }

    // line 25
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
        return array (  95 => 25,  67 => 26,  65 => 25,  39 => 1,);
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\" />
    <!-- Css File -->
    <link rel=\"stylesheet\" href=\"/css/bootstrap.min.css\">
    <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
    <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
    <link rel=\"stylesheet\" href=\"/css/mediabox.min.css\">
    <link rel=\"stylesheet\" href=\"/css/owl.carousel.min.css\">
    <link rel=\"stylesheet\" href=\"/css/style.css\">
    
    <link rel=\"stylesheet\" href=\"/css/responsive.css\">
      <link rel=\"stylesheet\" href=\"/style.css\">
    <!-- END PAGE LEVEL PLUGINS/CUSTOM STYLES -->    

  </head>

  <body>

    {% block content %}{% endblock %}


     

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    
    <script src=\"/src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    

   
  </body>
</html>

", "layout.html", "/Users/nm/works/project/fcb/templates/layout.html");
    }
}
