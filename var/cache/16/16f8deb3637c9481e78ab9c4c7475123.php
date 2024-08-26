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

/* t-dashboard.html */
class __TwigTemplate_fc39257cbe08395a2f1b40952a667d34 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "t-dashboard.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "

   <!-- BEGIN LOADER -->
    <div id=\"load_screen\"> <div class=\"loader\"> <div class=\"loader-content\">
        <div class=\"spinner-grow align-self-center\"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class=\"header-container container-xxl\">
        <header class=\"header navbar navbar-expand-sm expand-header\">

            <a href=\"javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg></a>
            
            <ul class=\"navbar-item theme-brand flex-row  text-center\">
                <li class=\"nav-item theme-logo\">
                    <a href=\"index.html\">
                        <img src=\" /src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> 신뢰기반 상호 점검 서비스 </a>
                </li>
            </ul>


            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\">

              



                <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                    ";
        // line 36
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "userName", [], "any", false, false, false, 36) == 0)) {
            // line 37
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-admin\" >로그인</a>
                    ";
        } else {
            // line 39
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "userName", [], "any", false, false, false, 39), "html", null, true);
            yield "님, 환영합니다. 
                           
               </li>

               
            </ul>

              <ul class=\"navbar-item flex-row action-area\">
              <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                 <a href=\"";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-logout\" >로그아웃</a>
                </li>
            </ul>
            ";
        }
        // line 52
        yield "        </header>
    </div>
    <!--  END NAVBAR  -->
  

    <!--  BEGIN MAIN CONTAINER  -->
    <div class=\"main-container\" id=\"container\">

        <div class=\"overlay\"></div>
        <div class=\"search-overlay\"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class=\"sidebar-wrapper sidebar-theme\">

            <nav id=\"sidebar\">

                <div class=\"navbar-nav theme-brand flex-row  text-center\">
                    <div class=\"nav-logo\">
                        <div class=\"nav-item theme-logo\">
                            <a href=\"/\">
                                <img src=\" /src/assets/img/logo.svg\" class=\"navbar-logo\" alt=\"logo\">
                            </a>
                        </div>
                        <div class=\"nav-item theme-text\">
                            <a href=\"/\" class=\"nav-link\"> CORK </a>
                        </div>
                    </div>
                    <div class=\"nav-item sidebar-toggle\">
                        <div class=\"btn-toggle sidebarCollapse\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevrons-left\"><polyline points=\"11 17 6 12 11 7\"></polyline><polyline points=\"18 17 13 12 18 7\"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class=\"shadow-bottom\"></div>
                <ul class=\"list-unstyled menu-categories\" id=\"accordionExample\">
                    <li class=\"menu active\">
                        <a href=\"t-dashboard\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\" class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 점검 목록 생성</span>
                            </div>
                            
                        </a>
              
                    </li>
                      
        

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class=\"menu\">
                        <a href=\"";
        // line 105
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-regis-s\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\"><rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect><rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect><line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line><line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line><line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line><line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line><line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line><line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line><line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line><line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line></svg>
                                <span>학생 제출 상황</span>
                            </div>
                            
                        </a>
                      
                    </li>

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class=\"menu\">
                        <a href=\"";
        // line 120
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-make-s\"class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                <span>우리반 생성/최초 1회만 실행</span>
                            </div>
                            <div>
                            </div>
                        </a>
                      
                    </li>

                    <li class=\"menu\">
                        <a href=\"";
        // line 132
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-student-manage\" class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\"><polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon></svg>
                                <span>우리반 등록 현황</span>
                            </div>
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                            </div>
                        </a>
                       
                    </li>

                 
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id=\"content\" class=\"main-content\">
            <div class=\"layout-px-spacing\">

                <div class=\"middle-content container-xxl p-0\">

                    <!--  BEGIN BREADCRUMBS  -->
                    <div class=\"secondary-nav\">
                        <div class=\"breadcrumbs-container\" data-page-heading=\"Analytics\">
                            <header class=\"header navbar navbar-expand-sm\">
                                <a href=\"javascript:void(0);\" class=\"btn-toggle sidebarCollapse\" data-placement=\"bottom\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg>
                                </a>
                                <div class=\"d-flex breadcrumb-content\">
                                    <div class=\"page-header\">

                                        <nav class=\"breadcrumb-style-one\" aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                                            </ol>
                                        </nav>

                                    </div>
                                </div>
                              
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->
                   <br>
    
        
                   <div class=\"middle-content container-xxl p-0\">
                      <div class=\"row layout\">
                          <div class=\"col-lg-12 layout-spacing\">
                              <div class=\"widget widget-table-one\">
                                  <div class=\"widget-heading\">
                                      <h5 class=\"\">학생 점검 목록 생성 하기</h5>
                                  </div>
                                  <div class=\"widget-content\">
                                  <form action=\"t-dashboard-check\" method=\"post\">
                                  <input type = \"text\" class=\"form-control\" id=\"check\" name=\"check\" placeholder=\"1. 체크박스 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button type=\"submit\" id=\"btncheck\" name=\"btncheck\" class=\"btn btn-primary\" >1. 체크박스 생성</button>
                                  </form>
                                  <br>
                                  <form action=\"t-dashboard-5check\" method=\"post\">
                                  <input type = \"text\"  class=\"form-control\" id=\"5check\" name=\"5check\" placeholder=\"2. 5단계 선택형 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button  type=\"submit\"id=\"btn5check\" name=\"btn5check\" class=\"btn btn-primary\" >2. 5단계 선택형 생성</button>
                                  </form>
                                  <br>
                                  <form action=\"t-dashboard-3check\" method=\"post\">
                                  <input type = \"text\"  class=\"form-control\" id=\"3check\" name=\"3check\" placeholder=\"3. 상,중,하 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button  type=\"submit\" id=\"btn3check\" name=\"btn3check\" class=\"btn btn-primary\" >3. 상,중,하 생성</button>
                                  </form>
                                  <br>
                                  <form action=\"t-dashboard-writing\" method=\"post\">
                                  <input type = \"text\"  class=\"form-control\" id=\"writing\" name=\"writing\" placeholder=\"4. 주관식 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button  type=\"submit\" id=\"btnwriting\" name=\"btnwriting\" class=\"btn btn-primary\" >4. 주관식 생성</button>
                                  </form>
                                  <br>
                                </div>
                                 
                              </div>
                          </div>
                        </div>
                </div>

            </div>
         
            

            <br>
            <p>
          <p>
            <!--  BEGIN FOOTER  -->
          <div>
            <div class=\"footer-wrapper\">
                <div class=\"footer-section f-section-1\">
                    <p class=\"\">Copyright © <span class=\"dynamic-year\">2024</span> <a target=\"_blank\" href=\"https://designreset.com/cork-admin/\">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class=\"footer-section f-section-2\">
                    <p class=\"\">SchoolWorks</p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\" /src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\" /src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\" /src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\" /src/plugins/src/waves/waves.min.js\"></script>
    <script src=\" /layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\" /src/plugins/src/apex/apexcharts.min.js\"></script>
    <script src=\" /src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <script>
      let check = document.getElementById('check');
      let check2 = document.getElementById('5check');
      let check3 = document.getElementById('3check');
      let check4 = document.getElementById('writing');
      let btncheck = document.getElementById('btncheck');
      let btn5check = document.getElementById('btn5check');
      let btn3check = document.getElementById('btn3check');
      let btnwriting = document.getElementById('btnwriting');
      btncheck.addEventListener('click', function(){
        if(check.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
      btn5check.addEventListener('click', function(){
        if(check2.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
      btn3check.addEventListener('click', function(){
        if(check3.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
      btnwriting.addEventListener('click', function(){
        if(check4.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
    </script>



     ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "t-dashboard.html";
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
        return array (  202 => 132,  187 => 120,  169 => 105,  114 => 52,  107 => 48,  94 => 39,  88 => 37,  86 => 36,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block content %}


   <!-- BEGIN LOADER -->
    <div id=\"load_screen\"> <div class=\"loader\"> <div class=\"loader-content\">
        <div class=\"spinner-grow align-self-center\"></div>
    </div></div></div>
    <!--  END LOADER -->

    <!--  BEGIN NAVBAR  -->
    <div class=\"header-container container-xxl\">
        <header class=\"header navbar navbar-expand-sm expand-header\">

            <a href=\"javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg></a>
            
            <ul class=\"navbar-item theme-brand flex-row  text-center\">
                <li class=\"nav-item theme-logo\">
                    <a href=\"index.html\">
                        <img src=\" /src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> 신뢰기반 상호 점검 서비스 </a>
                </li>
            </ul>


            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\">

              



                <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                    {% if session.userName == 0%}
                    <a href=\"{{ doc_root }}t-admin\" >로그인</a>
                    {% else %}
                                {{ session.userName }}님, 환영합니다. 
                           
               </li>

               
            </ul>

              <ul class=\"navbar-item flex-row action-area\">
              <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                 <a href=\"{{ doc_root }}t-logout\" >로그아웃</a>
                </li>
            </ul>
            {% endif %}
        </header>
    </div>
    <!--  END NAVBAR  -->
  

    <!--  BEGIN MAIN CONTAINER  -->
    <div class=\"main-container\" id=\"container\">

        <div class=\"overlay\"></div>
        <div class=\"search-overlay\"></div>

        <!--  BEGIN SIDEBAR  -->
        <div class=\"sidebar-wrapper sidebar-theme\">

            <nav id=\"sidebar\">

                <div class=\"navbar-nav theme-brand flex-row  text-center\">
                    <div class=\"nav-logo\">
                        <div class=\"nav-item theme-logo\">
                            <a href=\"/\">
                                <img src=\" /src/assets/img/logo.svg\" class=\"navbar-logo\" alt=\"logo\">
                            </a>
                        </div>
                        <div class=\"nav-item theme-text\">
                            <a href=\"/\" class=\"nav-link\"> CORK </a>
                        </div>
                    </div>
                    <div class=\"nav-item sidebar-toggle\">
                        <div class=\"btn-toggle sidebarCollapse\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevrons-left\"><polyline points=\"11 17 6 12 11 7\"></polyline><polyline points=\"18 17 13 12 18 7\"></polyline></svg>
                        </div>
                    </div>
                </div>
                <div class=\"shadow-bottom\"></div>
                <ul class=\"list-unstyled menu-categories\" id=\"accordionExample\">
                    <li class=\"menu active\">
                        <a href=\"t-dashboard\" data-bs-toggle=\"dropdown\" aria-expanded=\"true\" class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 점검 목록 생성</span>
                            </div>
                            
                        </a>
              
                    </li>
                      
        

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class=\"menu\">
                        <a href=\"{{ doc_root }}t-dashboard-regis-s\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\"><rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect><rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect><line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line><line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line><line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line><line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line><line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line><line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line><line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line><line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line></svg>
                                <span>학생 제출 상황</span>
                            </div>
                            
                        </a>
                      
                    </li>

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class=\"menu\">
                        <a href=\"{{ doc_root }}t-dashboard-make-s\"class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                <span>우리반 생성/최초 1회만 실행</span>
                            </div>
                            <div>
                            </div>
                        </a>
                      
                    </li>

                    <li class=\"menu\">
                        <a href=\"{{ doc_root }}t-dashboard-student-manage\" class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-zap\"><polygon points=\"13 2 3 14 12 14 11 22 21 10 12 10 13 2\"></polygon></svg>
                                <span>우리반 등록 현황</span>
                            </div>
                            <div>
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-chevron-right\"><polyline points=\"9 18 15 12 9 6\"></polyline></svg>
                            </div>
                        </a>
                       
                    </li>

                 
                </ul>
                
            </nav>

        </div>
        <!--  END SIDEBAR  -->

        <!--  BEGIN CONTENT AREA  -->
        <div id=\"content\" class=\"main-content\">
            <div class=\"layout-px-spacing\">

                <div class=\"middle-content container-xxl p-0\">

                    <!--  BEGIN BREADCRUMBS  -->
                    <div class=\"secondary-nav\">
                        <div class=\"breadcrumbs-container\" data-page-heading=\"Analytics\">
                            <header class=\"header navbar navbar-expand-sm\">
                                <a href=\"javascript:void(0);\" class=\"btn-toggle sidebarCollapse\" data-placement=\"bottom\">
                                    <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg>
                                </a>
                                <div class=\"d-flex breadcrumb-content\">
                                    <div class=\"page-header\">

                                        <nav class=\"breadcrumb-style-one\" aria-label=\"breadcrumb\">
                                            <ol class=\"breadcrumb\">
                                                <li class=\"breadcrumb-item\"><a href=\"#\">Dashboard</a></li>
                                            </ol>
                                        </nav>

                                    </div>
                                </div>
                              
                            </header>
                        </div>
                    </div>
                    <!--  END BREADCRUMBS  -->
                   <br>
    
        
                   <div class=\"middle-content container-xxl p-0\">
                      <div class=\"row layout\">
                          <div class=\"col-lg-12 layout-spacing\">
                              <div class=\"widget widget-table-one\">
                                  <div class=\"widget-heading\">
                                      <h5 class=\"\">학생 점검 목록 생성 하기</h5>
                                  </div>
                                  <div class=\"widget-content\">
                                  <form action=\"t-dashboard-check\" method=\"post\">
                                  <input type = \"text\" class=\"form-control\" id=\"check\" name=\"check\" placeholder=\"1. 체크박스 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button type=\"submit\" id=\"btncheck\" name=\"btncheck\" class=\"btn btn-primary\" >1. 체크박스 생성</button>
                                  </form>
                                  <br>
                                  <form action=\"t-dashboard-5check\" method=\"post\">
                                  <input type = \"text\"  class=\"form-control\" id=\"5check\" name=\"5check\" placeholder=\"2. 5단계 선택형 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button  type=\"submit\"id=\"btn5check\" name=\"btn5check\" class=\"btn btn-primary\" >2. 5단계 선택형 생성</button>
                                  </form>
                                  <br>
                                  <form action=\"t-dashboard-3check\" method=\"post\">
                                  <input type = \"text\"  class=\"form-control\" id=\"3check\" name=\"3check\" placeholder=\"3. 상,중,하 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button  type=\"submit\" id=\"btn3check\" name=\"btn3check\" class=\"btn btn-primary\" >3. 상,중,하 생성</button>
                                  </form>
                                  <br>
                                  <form action=\"t-dashboard-writing\" method=\"post\">
                                  <input type = \"text\"  class=\"form-control\" id=\"writing\" name=\"writing\" placeholder=\"4. 주관식 생성의 평가 항목의 명칭을 정해주세요\" required />
                                  <br>
                                  <button  type=\"submit\" id=\"btnwriting\" name=\"btnwriting\" class=\"btn btn-primary\" >4. 주관식 생성</button>
                                  </form>
                                  <br>
                                </div>
                                 
                              </div>
                          </div>
                        </div>
                </div>

            </div>
         
            

            <br>
            <p>
          <p>
            <!--  BEGIN FOOTER  -->
          <div>
            <div class=\"footer-wrapper\">
                <div class=\"footer-section f-section-1\">
                    <p class=\"\">Copyright © <span class=\"dynamic-year\">2024</span> <a target=\"_blank\" href=\"https://designreset.com/cork-admin/\">DesignReset</a>, All rights reserved.</p>
                </div>
                <div class=\"footer-section f-section-2\">
                    <p class=\"\">SchoolWorks</p>
                </div>
            </div>
            <!--  END FOOTER  -->
        </div>
        <!--  END CONTENT AREA  -->

    </div>
    <!-- END MAIN CONTAINER -->

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
    <script src=\" /src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\" /src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\" /src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\" /src/plugins/src/waves/waves.min.js\"></script>
    <script src=\" /layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\" /src/plugins/src/apex/apexcharts.min.js\"></script>
    <script src=\" /src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
     <script>
      let check = document.getElementById('check');
      let check2 = document.getElementById('5check');
      let check3 = document.getElementById('3check');
      let check4 = document.getElementById('writing');
      let btncheck = document.getElementById('btncheck');
      let btn5check = document.getElementById('btn5check');
      let btn3check = document.getElementById('btn3check');
      let btnwriting = document.getElementById('btnwriting');
      btncheck.addEventListener('click', function(){
        if(check.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
      btn5check.addEventListener('click', function(){
        if(check2.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
      btn3check.addEventListener('click', function(){
        if(check3.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
      btnwriting.addEventListener('click', function(){
        if(check4.value == ''){
          alert('평가 항목의 명칭을 정해주세요');
          return false;
        }
      });
    </script>



     {% endblock %}", "t-dashboard.html", "/Users/nm/works/project/fbc/templates/t-dashboard.html");
    }
}
