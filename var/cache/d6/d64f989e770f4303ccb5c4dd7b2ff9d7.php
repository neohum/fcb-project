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

/* auto_install_table.html */
class __TwigTemplate_c6d6887d880ae1a0f6d0065efc8b46c8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'content' => [$this, 'block_content'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "layout2.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout2.html", "auto_install_table.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "


    <div class=\"auth-container d-flex\">

        <div class=\"container mx-auto align-self-center\">
    
            <div class=\"row\">
    
                <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                    <div class=\"card mt-3 mb-3\">
                        <div class=\"card-body\">
    
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    <h2>컴퓨터 시스템 가동을 위한 기본 준비가 완료 되었습니다.
                                    </h2>
                                  
                                 
                                  <br>
                                 
                                <div>
           
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "auto_install_table.html";
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
        return array (  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout2.html' %}
{% block content %}



    <div class=\"auth-container d-flex\">

        <div class=\"container mx-auto align-self-center\">
    
            <div class=\"row\">
    
                <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                    <div class=\"card mt-3 mb-3\">
                        <div class=\"card-body\">
    
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    <h2>컴퓨터 시스템 가동을 위한 기본 준비가 완료 되었습니다.
                                    </h2>
                                  
                                 
                                  <br>
                                 
                                <div>
           
                            </div>
                            
                        </div>
                    </div>
                </div>
                
            </div>
            
        </div>

    </div>


{% endblock %}", "auto_install_table.html", "/Users/nm/works/project/fbc/templates/auto_install_table.html");
    }
}
