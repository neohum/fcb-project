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

/* page-not-found.html */
class __TwigTemplate_4fd90cf38735f0f3e00eaffb484d3a3a extends Template
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
        // line 2
        return "layout2.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout2.html", "page-not-found.html", 2);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
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
                          <h1>죄송합니다. 찾을 수 없는 페이지입니다. 이미 서비스 생성이 되어 있는 경우에도 해당 메시지가 뜹니다. 
                            <p><a href=\"/\">[홈으로 돌아가기]</a> 
                              <br>이메일로 연락주시면 답변 드리겠습니다.  : schoolworks@nate.com </p>
                          </h1>
                        </div>
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
        return "page-not-found.html";
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
        return array (  47 => 4,  36 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends 'layout2.html' %}

{% block content %}

<div class=\"auth-container d-flex\">

    <div class=\"container mx-auto align-self-center\">

        <div class=\"row\">

            <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                <div class=\"card mt-3 mb-3\">
                    <div class=\"card-body\">
                      <div class=\"row\">
                        <div class=\"col-md-12 mb-3\">
                          <h1>죄송합니다. 찾을 수 없는 페이지입니다. 이미 서비스 생성이 되어 있는 경우에도 해당 메시지가 뜹니다. 
                            <p><a href=\"/\">[홈으로 돌아가기]</a> 
                              <br>이메일로 연락주시면 답변 드리겠습니다.  : schoolworks@nate.com </p>
                          </h1>
                        </div>
                      </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


{% endblock %}", "page-not-found.html", "/Users/nm/works/project/fcb/templates/page-not-found.html");
    }
}
