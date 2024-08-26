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

/* t-signin.html */
class __TwigTemplate_96f046b5a91afe90b703b55382b3d33c extends Template
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
        // line 3
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "t-signin.html", 3);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 4
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 5
        yield "<br>
<br>






    <div class=\"auth-container d-flex\">

        <div class=\"container mx-auto align-self-center\">
    
            <div class=\"row\">
    
                <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                    <div class=\"card mt-3 mb-3\">
                        <div class=\"card-body\">
                          
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    
                                    <h2>관리자 가입하기</h2>
                                    
                              <form action=\"";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-signin\" method=\"post\">
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">아이디</label>
                                      ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errors"] ?? null), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
        yield "
                                        <input type=\"text\" name=\"userid\" id=\"userid\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">비밀번호</label>
                                        <input type=\"password\" name=\"current-password\" id=\"current-password\" class=\"form-control\">
                                    </div>
                                </div>
                              
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button type=\"submit\" class=\"btn btn-secondary w-100\">생성하기</button>
                                    </div>
                                </div>
                                
                            </form>
    
                             <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\"> 로그인으로 가고 싶으신가요?<a href=\"";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-admin\" class=\"text-warning\">로그인으로 가기</a></p>
                                    </div>
                                </div> 
                              </div>
                              <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\"> 홈으로 가고 싶으신가요?<a href=\"/\" class=\"text-warning\">홈으로 가기</a></p>
                                    </div>
                                </div> 
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                           
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- END GLO -->
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "t-signin.html";
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
        return array (  111 => 55,  84 => 33,  76 => 28,  51 => 5,  47 => 4,  36 => 3,);
    }

    public function getSourceContext()
    {
        return new Source("

{% extends 'layout.html' %}
{% block content %}
<br>
<br>






    <div class=\"auth-container d-flex\">

        <div class=\"container mx-auto align-self-center\">
    
            <div class=\"row\">
    
                <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                    <div class=\"card mt-3 mb-3\">
                        <div class=\"card-body\">
                          
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    
                                    <h2>관리자 가입하기</h2>
                                    
                              <form action=\"{{ doc_root }}t-signin\" method=\"post\">
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">아이디</label>
                                      {{ errors }} {{ success }}
                                        <input type=\"text\" name=\"userid\" id=\"userid\" class=\"form-control\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">비밀번호</label>
                                        <input type=\"password\" name=\"current-password\" id=\"current-password\" class=\"form-control\">
                                    </div>
                                </div>
                              
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button type=\"submit\" class=\"btn btn-secondary w-100\">생성하기</button>
                                    </div>
                                </div>
                                
                            </form>
    
                             <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\"> 로그인으로 가고 싶으신가요?<a href=\"{{ doc_root }}t-admin\" class=\"text-warning\">로그인으로 가기</a></p>
                                    </div>
                                </div> 
                              </div>
                              <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\"> 홈으로 가고 싶으신가요?<a href=\"/\" class=\"text-warning\">홈으로 가기</a></p>
                                    </div>
                                </div> 
                              </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

                           
    
    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\"../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- END GLO -->
{% endblock %}", "t-signin.html", "/Users/nm/works/project/fbc/templates/t-signin.html");
    }
}
