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

/* index.html */
class __TwigTemplate_1054725d4f0c7f5dbbdfc772353eab17 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "index.html", 1);
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
                                    
                                    <center><h2>신뢰 기반 학생 자율 점검표 <br>서비스</h2></center>
                                    <p>고학년을 대상으로 학생 스스로가 자신의 과제 등을 스스로 평가하는 서비스입니다.</p>
                                    
                                </div>
                                <form action=\"/\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">인증번호</label>
                                        <input type=\"number\" id=\"classname\" name=\"classname\" class=\"form-control\" placeholder=\"예) 123456789 \">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">번호</label>
                                        <input type=\"number\" id=\"studentnumber\" name=\"studentnumber\" class=\"form-control\" placeholder=\"예) 1\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">이름</label>
                                        <input type=\"text\" id=\"studentname\" name=\"studentname\" class=\"form-control\" placeholder=\"예)홍길동, 빈칸이 없어야 합니다.\">
                                    </div>
                                </div>
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button class=\"btn btn-primary w-100\">입장하기</button>
                                    </div>
                                </div>
                            </form>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                      <a href=\"";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-admin\" class=\"btn btn-secondary w-100\">관리자 페이지(담임 교사)</a>
                                        
                                
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
    <script src=\" ../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->





";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "index.html";
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
        return array (  103 => 53,  51 => 3,  47 => 2,  36 => 1,);
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
                                    
                                    <center><h2>신뢰 기반 학생 자율 점검표 <br>서비스</h2></center>
                                    <p>고학년을 대상으로 학생 스스로가 자신의 과제 등을 스스로 평가하는 서비스입니다.</p>
                                    
                                </div>
                                <form action=\"/\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">인증번호</label>
                                        <input type=\"number\" id=\"classname\" name=\"classname\" class=\"form-control\" placeholder=\"예) 123456789 \">
                                    </div>
                                </div>
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\">번호</label>
                                        <input type=\"number\" id=\"studentnumber\" name=\"studentnumber\" class=\"form-control\" placeholder=\"예) 1\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">이름</label>
                                        <input type=\"text\" id=\"studentname\" name=\"studentname\" class=\"form-control\" placeholder=\"예)홍길동, 빈칸이 없어야 합니다.\">
                                    </div>
                                </div>
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button class=\"btn btn-primary w-100\">입장하기</button>
                                    </div>
                                </div>
                            </form>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                      <a href=\"{{ doc_root }}t-admin\" class=\"btn btn-secondary w-100\">관리자 페이지(담임 교사)</a>
                                        
                                
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
    <script src=\" ../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->





{% endblock %}", "index.html", "/Users/nm/works/project/fbc/templates/index.html");
    }
}
