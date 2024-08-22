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

/* s-dashboard.html */
class __TwigTemplate_dde6b3b52fe0c1447470e8899c91333f extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "s-dashboard.html", 1);
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

            <a href=\"javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http:</td> <td>www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg></a>
            
            <ul class=\"navbar-item theme-brand flex-row  text-center\">
                <li class=\"nav-item theme-logo\">
                    <a href=\"index.html\">
                        <img src=\"../src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> 신뢰기반 상호 점검 서비스 </a>
                </li>
            </ul>


            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\"> 

            <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                    ";
        // line 33
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "studentname", [], "any", false, false, false, 33) == 0)) {
            // line 34
            yield "                    <a href=\"/\" >로그인</a>
                    ";
        } else {
            // line 36
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "classname", [], "any", false, false, false, 36), "html", null, true);
            yield "  /  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "studentname", [], "any", false, false, false, 36), "html", null, true);
            yield "님, 환영합니다. 
                           
               </li>

               
            </ul>

              <ul class=\"navbar-item flex-row action-area\">
              <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                 <a href=\"/\" >로그아웃</a>
                </li>
            </ul>
            ";
        }
        // line 49
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
                                <img src=\"../src/assets/img/logo.svg\" class=\"navbar-logo\" alt=\"logo\">
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
                        <a href=\"s-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 자율 점검 결과</span>
                            </div>
                            
                        </a>
              
                    </li>
                    <li class=\"menu\">
                        <a href=\"s-dashboard-check\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\"><rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect><rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect><line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line><line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line><line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line><line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line><line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line><line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line><line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line><line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line></svg>
                                
                            <span>학생 자율 점검하기</span>
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
                                    <svg xmlns=\"http:</td> <td>www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg>
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
    
               <h1>나의 평가 결과</h1>
                <br>
                <table>
        
                    <tr>
                        <td>학생 이름</td>
                        <td> </td>
                        <td>";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentname"] ?? null), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>생성된 클래스명</td>
                        <td> </td>
                        <td>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classname"] ?? null), "html", null, true);
        yield "</td>
                    </tr>

                </table>
             
            </div>
            <br>
            <br>
        <div class=\"container text-center\">
         
            
              <div class=\"row\">
                <div class=\"col\">유형</div>
                <div class=\"col\">항목</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\">점수2</div>
                <div class=\"col\">생성일</div>
              </div>

            <div class=\"row\">
            ";
        // line 185
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["checklists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["checklist"]) {
            // line 186
            yield "            
            
              <div class=\"col\">";
            // line 188
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 188), "html", null, true);
            yield "</div>  
              <div class=\"col\">";
            // line 189
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname2", [], "any", false, false, false, 189), "html", null, true);
            yield "</div> 
              
                ";
            // line 191
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 191) == "Writing")) {
                // line 192
                yield "              <div class=\"col\">
                  ";
                // line 193
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 193), "html", null, true);
                yield "
              </div>
               <div class=\"col\">";
                // line 195
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 195), "html", null, true);
                yield "</div>  
               <div class=\"col\">";
                // line 196
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 196), "Y-m-d"), "html", null, true);
                yield "</div>  
            
             
            
               
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 201
$context["checklist"], "subjectname", [], "any", false, false, false, 201) == "5Check")) {
                // line 202
                yield "                <div class=\"col\">
                  ";
                // line 203
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 203), "html", null, true);
                yield "
               </div>  
               <div class=\"col\">";
                // line 205
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 205), "html", null, true);
                yield "</div>  
               <div class=\"col\">";
                // line 206
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 206), "Y-m-d"), "html", null, true);
                yield "</div>
               </div>

            
               
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 211
$context["checklist"], "subjectname", [], "any", false, false, false, 211) == "3Check")) {
                // line 212
                yield "                <div class=\"col\">
                  ";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 213), "html", null, true);
                yield "
              </div> 
                <div class=\"col\">";
                // line 215
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 215), "html", null, true);
                yield " </div> 
                <div class=\"col\">";
                // line 216
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 216), "Y-m-d"), "html", null, true);
                yield "</div>
              </div>

           
               
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 221
$context["checklist"], "subjectname", [], "any", false, false, false, 221) == "Check")) {
                // line 222
                yield "                <div class=\"col\">
                <div class=\"checklist\">
                
                ";
                // line 225
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 225), "html", null, true);
                yield " 
                </div>
               </div> 
               
               <div class=\"col\">";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 229), "html", null, true);
                yield " </div>
               <div class=\"col\">";
                // line 230
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 230), "Y-m-d"), "html", null, true);
                yield "</div>
              </div>
              ";
            }
            // line 233
            yield "            </div>
          

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checklist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 237
        yield "          </div>
            <!--  BEGIN FOOTER  -->
          <div>
            <div class=\"footer-wrapper\">
                <div class=\"footer-section f-section-1\">
                    <p class=\"\">Copyright © <span class=\"dynamic-year\">2024</span> <a target=\"_blank\" href=\"https:</td> <td>designreset.com/cork-admin/\">DesignReset</a>, All rights reserved.</p>
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
    <script src=\"../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"../src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"../src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"../layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"../src/plugins/src/apex/apexcharts.min.js\"></script>
    <script src=\"../src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

     <script>
      var className = localStorage.getItem('className');
      document.getElementById('className').value = className;
    </script>

    <script>
      localStorage.clear();
      localStorage.setItem('className', '";
        // line 275
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["className"] ?? null), "html", null, true);
        yield "');
    </script>

    <script>
      let checklist = document.querySelector('.checklist');
      console.log(checklist);


   



";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "s-dashboard.html";
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
        return array (  408 => 275,  368 => 237,  359 => 233,  353 => 230,  349 => 229,  342 => 225,  337 => 222,  335 => 221,  327 => 216,  323 => 215,  318 => 213,  315 => 212,  313 => 211,  305 => 206,  301 => 205,  296 => 203,  293 => 202,  291 => 201,  283 => 196,  279 => 195,  274 => 193,  271 => 192,  269 => 191,  264 => 189,  260 => 188,  256 => 186,  252 => 185,  229 => 165,  221 => 160,  108 => 49,  89 => 36,  85 => 34,  83 => 33,  51 => 3,  47 => 2,  36 => 1,);
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

            <a href=\"javascript:void(0);\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http:</td> <td>www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg></a>
            
            <ul class=\"navbar-item theme-brand flex-row  text-center\">
                <li class=\"nav-item theme-logo\">
                    <a href=\"index.html\">
                        <img src=\"../src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> 신뢰기반 상호 점검 서비스 </a>
                </li>
            </ul>


            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\"> 

            <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                    {% if session.studentname == 0%}
                    <a href=\"/\" >로그인</a>
                    {% else %}
                  {{ session.classname }}  /  {{ session.studentname }}님, 환영합니다. 
                           
               </li>

               
            </ul>

              <ul class=\"navbar-item flex-row action-area\">
              <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                 <a href=\"/\" >로그아웃</a>
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
                                <img src=\"../src/assets/img/logo.svg\" class=\"navbar-logo\" alt=\"logo\">
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
                        <a href=\"s-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 자율 점검 결과</span>
                            </div>
                            
                        </a>
              
                    </li>
                    <li class=\"menu\">
                        <a href=\"s-dashboard-check\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                            <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\"><rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect><rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect><line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line><line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line><line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line><line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line><line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line><line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line><line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line><line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line></svg>
                                
                            <span>학생 자율 점검하기</span>
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
                                    <svg xmlns=\"http:</td> <td>www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg>
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
    
               <h1>나의 평가 결과</h1>
                <br>
                <table>
        
                    <tr>
                        <td>학생 이름</td>
                        <td> </td>
                        <td>{{ studentname }}</td>
                    </tr>
                    <tr>
                        <td>생성된 클래스명</td>
                        <td> </td>
                        <td>{{ classname }}</td>
                    </tr>

                </table>
             
            </div>
            <br>
            <br>
        <div class=\"container text-center\">
         
            
              <div class=\"row\">
                <div class=\"col\">유형</div>
                <div class=\"col\">항목</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\">점수2</div>
                <div class=\"col\">생성일</div>
              </div>

            <div class=\"row\">
            {% for checklist in checklists %}
            
            
              <div class=\"col\">{{ checklist.subjectname }}</div>  
              <div class=\"col\">{{ checklist.subjectname2 }}</div> 
              
                {% if checklist.subjectname == \"Writing\" %}
              <div class=\"col\">
                  {{ checklist.score }}
              </div>
               <div class=\"col\">{{ checklist.score2 }}</div>  
               <div class=\"col\">{{ checklist.created_at|date('Y-m-d') }}</div>  
            
             
            
               
                {% elseif checklist.subjectname== \"5Check\"%}
                <div class=\"col\">
                  {{ checklist.score }}
               </div>  
               <div class=\"col\">{{ checklist.score2 }}</div>  
               <div class=\"col\">{{ checklist.created_at|date('Y-m-d') }}</div>
               </div>

            
               
                {% elseif checklist.subjectname == \"3Check\" %}
                <div class=\"col\">
                  {{ checklist.score }}
              </div> 
                <div class=\"col\">{{ checklist.score2 }} </div> 
                <div class=\"col\">{{ checklist.created_at|date('Y-m-d') }}</div>
              </div>

           
               
                {% elseif checklist.subjectname == \"Check\" %}
                <div class=\"col\">
                <div class=\"checklist\">
                
                {{ checklist.score }} 
                </div>
               </div> 
               
               <div class=\"col\">{{ checklist.score2 }} </div>
               <div class=\"col\">{{ checklist.created_at|date('Y-m-d') }}</div>
              </div>
              {% endif %}
            </div>
          

            {% endfor %}
          </div>
            <!--  BEGIN FOOTER  -->
          <div>
            <div class=\"footer-wrapper\">
                <div class=\"footer-section f-section-1\">
                    <p class=\"\">Copyright © <span class=\"dynamic-year\">2024</span> <a target=\"_blank\" href=\"https:</td> <td>designreset.com/cork-admin/\">DesignReset</a>, All rights reserved.</p>
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
    <script src=\"../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"../src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"../src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"../layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"../src/plugins/src/apex/apexcharts.min.js\"></script>
    <script src=\"../src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

     <script>
      var className = localStorage.getItem('className');
      document.getElementById('className').value = className;
    </script>

    <script>
      localStorage.clear();
      localStorage.setItem('className', '{{ className }}');
    </script>

    <script>
      let checklist = document.querySelector('.checklist');
      console.log(checklist);


   



{% endblock %}", "s-dashboard.html", "/Users/nm/works/project/fbc/templates/s-dashboard.html");
    }
}
