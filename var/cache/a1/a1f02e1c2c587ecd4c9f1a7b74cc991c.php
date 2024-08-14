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

/* t-admin.html */
class __TwigTemplate_0ff67c109b2462325610df7bf61d0f60 extends Template
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
        return "layout.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("layout.html", "t-admin.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
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
                                    
                                    <h2>관리자 로그인</h2>
                                    ";
        // line 25
        if (($context["errors"] ?? null)) {
            // line 26
            yield "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errors"] ?? null), "html", null, true);
            yield "
                                    </div>
                                    ";
        }
        // line 30
        yield "                                    ";
        if (($context["success"] ?? null)) {
            // line 31
            yield "                                    <div class=\"alert alert-success\" role=\"alert\">
                                        ";
            // line 32
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "
                                    </div>
                                    ";
        }
        // line 35
        yield "                                </div>

                                <form action=\"";
        // line 37
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-admin\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\" >아이디</label>
                                        <input type=\"text\" class=\"form-control\" id=\"userid\" name=\"userid\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">비밀번호</label>
                                        <input type=\"password\" class=\"form-control\" id=\"
                                        current-password\" name=\"current-password\">
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button type=\"submit\" class=\"btn btn-secondary w-100\">입장하기</button>
                                    </div>
                                </div>
                            </form>
                            
    
                                

                                <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\">아직 계정이 없으신가요?<a href=\"";
        // line 65
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-signin\" class=\"text-warning\">가입하기</a></p>
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
        return "t-admin.html";
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
        return array (  133 => 65,  102 => 37,  98 => 35,  92 => 32,  89 => 31,  86 => 30,  80 => 27,  77 => 26,  75 => 25,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
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
                                    
                                    <h2>관리자 로그인</h2>
                                    {% if errors %}
                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        {{ errors }}
                                    </div>
                                    {% endif %}
                                    {% if success %}
                                    <div class=\"alert alert-success\" role=\"alert\">
                                        {{ success }}
                                    </div>
                                    {% endif %}
                                </div>

                                <form action=\"{{ doc_root }}t-admin\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\" >아이디</label>
                                        <input type=\"text\" class=\"form-control\" id=\"userid\" name=\"userid\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">비밀번호</label>
                                        <input type=\"password\" class=\"form-control\" id=\"
                                        current-password\" name=\"current-password\">
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button type=\"submit\" class=\"btn btn-secondary w-100\">입장하기</button>
                                    </div>
                                </div>
                            </form>
                            
    
                                

                                <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\">아직 계정이 없으신가요?<a href=\"{{ doc_root }}t-signin\" class=\"text-warning\">가입하기</a></p>
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
{% endblock %}", "t-admin.html", "/Users/nm/works/project/fcb/templates/t-admin.html");
    }
}
