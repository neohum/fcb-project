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

            <a href=\"/\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http:</td> <td>www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg></a>
            
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
        if ((($context["studentname"] ?? null) == 0)) {
            // line 34
            yield "                    <a href=\"/\" >로그인</a>
                    ";
        } else {
            // line 36
            yield "                  ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classname"] ?? null), "html", null, true);
            yield "  / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentnumber"] ?? null), "html", null, true);
            yield "번 / ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentname"] ?? null), "html", null, true);
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
    
               <h1>오늘 나의 평가 결과</h1>
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
                        <td>번호</td>
                        <td> </td>
                        <td>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentnumber"] ?? null), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>생성된 클래스명</td>
                        <td> </td>
                        <td>";
        // line 170
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classname"] ?? null), "html", null, true);
        yield "</td>
                    </tr>

                </table>
             
            </div>
            <br>
            <br>
        <div class=\"container text-center\">
         <table class=\"table table-bordered table-sm\" style=\"table-layout:fixed;\">
            
              <thead>
                <tr>
                  <td >유형</td>
                  <td >항목</td>
                  <td style=\"
                              width: 200px;
                              
                              overflow: hidden;\">점수1</td>
                  <td style=\"
                                width: 200px;
                                
                                overflow: hidden;\">점수2</td>
                  <td >생성일</td>
                </tr>
              </thead>

            <tbody>
            ";
        // line 198
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["checklists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["checklist"]) {
            // line 199
            yield "            <tr id=\"check_list\">
            
              <td >";
            // line 201
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 201), "html", null, true);
            yield "</td>  
              <td >";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname2", [], "any", false, false, false, 202), "html", null, true);
            yield "</td> 
              
                ";
            // line 204
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 204) == "Writing")) {
                // line 205
                yield "              <td id=\"writing_score\" class=\"\" style=\"
                                                      width: 200px;
                                                      white-space: nowrap;
                                                      overflow: hidden;
                                                      text-overflow: ellipsis;

                                                      
                                                      white-space: normal;\">
                  ";
                // line 213
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 213), "html", null, true);
                yield "
              </td>
               <td id=\"writing_score2\" style=\"
                                              width: 200px;
                                              white-space: nowrap;
                                              overflow: hidden;
                                              text-overflow: ellipsis;

                                              
                                              white-space: normal;
                                          \">";
                // line 223
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 223), "html", null, true);
                yield "</td>  
               <td>";
                // line 224
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 224), "Y-m-d"), "html", null, true);
                yield "</td>  
         
             
            
               
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 229
$context["checklist"], "subjectname", [], "any", false, false, false, 229) == "5CheckBox")) {
                // line 230
                yield "                <td id=\"checkbox5_score\" name=\"checkbox5\">
                  ";
                // line 231
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 231), "html", null, true);
                yield "
               </td>  
               <td id=\"checkbox5_score2\" name=\"checkbox5\">";
                // line 233
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 233), "html", null, true);
                yield "</td>  
               <td>";
                // line 234
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 234), "Y-m-d"), "html", null, true);
                yield "</td>
              

            
               
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 239
$context["checklist"], "subjectname", [], "any", false, false, false, 239) == "3CheckBox")) {
                // line 240
                yield "                <td id=\"checkbox3_score\" name=\"checkbox3\">
                  ";
                // line 241
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 241), "html", null, true);
                yield "
                </td> 
                <td id=\"checkbox3_score2\" name=\"checkbox3\">";
                // line 243
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 243), "html", null, true);
                yield " </td> 
                <td>";
                // line 244
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 244), "Y-m-d"), "html", null, true);
                yield "</td>
            

           
               
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 249
$context["checklist"], "subjectname", [], "any", false, false, false, 249) == "CheckBox")) {
                // line 250
                yield "                <td id=\"checkbox_score\">
                ";
                // line 251
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 251), "html", null, true);
                yield " 
                </td>
               <td id=\"checkbox_score2\">";
                // line 253
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 253), "html", null, true);
                yield " </td>
               <td>";
                // line 254
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 254), "Y-m-d"), "html", null, true);
                yield "</td>
             
              ";
            }
            // line 257
            yield "              </tr>
            
          

            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checklist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 262
        yield "            </tbody>
          </table>
        </div>
            <!--  BEGIN FOOTER  -->

            
          <div>
            <div class=\"footer-wrapper mb-5\">
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
    
    <script src=\"../src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"../src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"../layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

   
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    

    <script>
      let writing_score = document.querySelector('#writing_score');
      let writing_score2 = document.getElementById('writing_score2');
      let checkbox_score = document.getElementById('checkbox_score');
      let checkbox_score2 = document.getElementById('checkbox_score2');
      let checkbox3_score = document.getElementById('checkbox3_score');
      let checkbox3_score2 = document.getElementById('checkbox3_score2');
      let checkbox5_score = document.getElementById('checkbox5_score');
      let checkbox5_score2 = document.getElementById('checkbox5_score2');
      
    
      if (writing_score.innerHTML == 0) {
        writing_score.innerHTML = \"미작성\";
      }
      if (writing_score2.innerHTML == 0) {
        writing_score2.innerHTML = \"미작성\";
      }
      if (checkbox_score.innerHTML == 0) {
        checkbox_score.innerHTML = \"미작성\";
      } else {
        checkbox_score.innerHTML = \"<input type='checkbox' checked disabled />\";
      }

      if (checkbox_score2.innerHTML == 0) {
        checkbox_score2.innerHTML = \"미작성\";
      } else {
        checkbox_score2.innerHTML = \"<input type='checkbox' checked disabled />\";
      }
     
      if (checkbox3_score.innerHTML == 0) {
        checkbox3_score.innerHTML = \"미작성\";
      } else if (checkbox3_score.innerHTML == 1) {
        checkbox3_score.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled  />\";
      } else if (checkbox3_score.innerHTML == 2) {
        checkbox3_score.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox3_score.innerHTML == 3) {
        checkbox3_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />\";
      }

      if (checkbox3_score2.innerHTML == 0) {
        checkbox3_score2.innerHTML = \"미작성\";
      } else if (checkbox3_score2.innerHTML == 1) {
        checkbox3_score2.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled  />\";
      } else if (checkbox3_score2.innerHTML == 2) {
        checkbox3_score2.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox3_score2.innerHTML == 3) {
        checkbox3_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />\";
      }

      if (checkbox5_score.innerHTML == 0) {
        checkbox5_score.innerHTML = \"미작성\";
      } else if (checkbox5_score.innerHTML == 1) {
        checkbox5_score.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />\";
      } else if (checkbox5_score.innerHTML == 2) {
        checkbox5_score.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score.innerHTML == 3) {
        checkbox5_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score.innerHTML == 4) {
        checkbox5_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score.innerHTML == 5) {
        checkbox5_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />\";
      }

      if (checkbox5_score2.innerHTML == 0) {
        checkbox5_score2.innerHTML = \"미작성\";
      } else if (checkbox5_score2.innerHTML == 1) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />\";
      } else if (checkbox5_score2.innerHTML == 2) {
        checkbox5_score2.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score2.innerHTML == 3) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score2.innerHTML == 4) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score2.innerHTML == 5) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />\";
      }
    

    </script>



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
        return array (  398 => 262,  388 => 257,  382 => 254,  378 => 253,  373 => 251,  370 => 250,  368 => 249,  360 => 244,  356 => 243,  351 => 241,  348 => 240,  346 => 239,  338 => 234,  334 => 233,  329 => 231,  326 => 230,  324 => 229,  316 => 224,  312 => 223,  299 => 213,  289 => 205,  287 => 204,  282 => 202,  278 => 201,  274 => 199,  270 => 198,  239 => 170,  231 => 165,  223 => 160,  110 => 49,  89 => 36,  85 => 34,  83 => 33,  51 => 3,  47 => 2,  36 => 1,);
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

            <a href=\"/\" class=\"sidebarCollapse\" data-placement=\"bottom\"><svg xmlns=\"http:</td> <td>www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-menu\"><line x1=\"3\" y1=\"12\" x2=\"21\" y2=\"12\"></line><line x1=\"3\" y1=\"6\" x2=\"21\" y2=\"6\"></line><line x1=\"3\" y1=\"18\" x2=\"21\" y2=\"18\"></line></svg></a>
            
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
                    {% if studentname == 0%}
                    <a href=\"/\" >로그인</a>
                    {% else %}
                  {{ classname }}  / {{ studentnumber }}번 / {{ studentname }}님, 환영합니다. 
                           
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
    
               <h1>오늘 나의 평가 결과</h1>
                <br>
                <table>
        
                    <tr>
                        <td>학생 이름</td>
                        <td> </td>
                        <td>{{ studentname }}</td>
                    </tr>
                     <tr>
                        <td>번호</td>
                        <td> </td>
                        <td>{{ studentnumber }}</td>
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
         <table class=\"table table-bordered table-sm\" style=\"table-layout:fixed;\">
            
              <thead>
                <tr>
                  <td >유형</td>
                  <td >항목</td>
                  <td style=\"
                              width: 200px;
                              
                              overflow: hidden;\">점수1</td>
                  <td style=\"
                                width: 200px;
                                
                                overflow: hidden;\">점수2</td>
                  <td >생성일</td>
                </tr>
              </thead>

            <tbody>
            {% for checklist in checklists %}
            <tr id=\"check_list\">
            
              <td >{{ checklist.subjectname }}</td>  
              <td >{{ checklist.subjectname2 }}</td> 
              
                {% if checklist.subjectname == \"Writing\" %}
              <td id=\"writing_score\" class=\"\" style=\"
                                                      width: 200px;
                                                      white-space: nowrap;
                                                      overflow: hidden;
                                                      text-overflow: ellipsis;

                                                      
                                                      white-space: normal;\">
                  {{ checklist.score }}
              </td>
               <td id=\"writing_score2\" style=\"
                                              width: 200px;
                                              white-space: nowrap;
                                              overflow: hidden;
                                              text-overflow: ellipsis;

                                              
                                              white-space: normal;
                                          \">{{ checklist.score2 }}</td>  
               <td>{{ checklist.created_at|date('Y-m-d') }}</td>  
         
             
            
               
                {% elseif checklist.subjectname== \"5CheckBox\"%}
                <td id=\"checkbox5_score\" name=\"checkbox5\">
                  {{ checklist.score }}
               </td>  
               <td id=\"checkbox5_score2\" name=\"checkbox5\">{{ checklist.score2 }}</td>  
               <td>{{ checklist.created_at|date('Y-m-d') }}</td>
              

            
               
                {% elseif checklist.subjectname == \"3CheckBox\" %}
                <td id=\"checkbox3_score\" name=\"checkbox3\">
                  {{ checklist.score }}
                </td> 
                <td id=\"checkbox3_score2\" name=\"checkbox3\">{{ checklist.score2 }} </td> 
                <td>{{ checklist.created_at|date('Y-m-d') }}</td>
            

           
               
                {% elseif checklist.subjectname == \"CheckBox\" %}
                <td id=\"checkbox_score\">
                {{ checklist.score }} 
                </td>
               <td id=\"checkbox_score2\">{{ checklist.score2 }} </td>
               <td>{{ checklist.created_at|date('Y-m-d') }}</td>
             
              {% endif %}
              </tr>
            
          

            {% endfor %}
            </tbody>
          </table>
        </div>
            <!--  BEGIN FOOTER  -->

            
          <div>
            <div class=\"footer-wrapper mb-5\">
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
    
    <script src=\"../src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"../src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"../layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

   
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

    

    <script>
      let writing_score = document.querySelector('#writing_score');
      let writing_score2 = document.getElementById('writing_score2');
      let checkbox_score = document.getElementById('checkbox_score');
      let checkbox_score2 = document.getElementById('checkbox_score2');
      let checkbox3_score = document.getElementById('checkbox3_score');
      let checkbox3_score2 = document.getElementById('checkbox3_score2');
      let checkbox5_score = document.getElementById('checkbox5_score');
      let checkbox5_score2 = document.getElementById('checkbox5_score2');
      
    
      if (writing_score.innerHTML == 0) {
        writing_score.innerHTML = \"미작성\";
      }
      if (writing_score2.innerHTML == 0) {
        writing_score2.innerHTML = \"미작성\";
      }
      if (checkbox_score.innerHTML == 0) {
        checkbox_score.innerHTML = \"미작성\";
      } else {
        checkbox_score.innerHTML = \"<input type='checkbox' checked disabled />\";
      }

      if (checkbox_score2.innerHTML == 0) {
        checkbox_score2.innerHTML = \"미작성\";
      } else {
        checkbox_score2.innerHTML = \"<input type='checkbox' checked disabled />\";
      }
     
      if (checkbox3_score.innerHTML == 0) {
        checkbox3_score.innerHTML = \"미작성\";
      } else if (checkbox3_score.innerHTML == 1) {
        checkbox3_score.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled  />\";
      } else if (checkbox3_score.innerHTML == 2) {
        checkbox3_score.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox3_score.innerHTML == 3) {
        checkbox3_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />\";
      }

      if (checkbox3_score2.innerHTML == 0) {
        checkbox3_score2.innerHTML = \"미작성\";
      } else if (checkbox3_score2.innerHTML == 1) {
        checkbox3_score2.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled  />\";
      } else if (checkbox3_score2.innerHTML == 2) {
        checkbox3_score2.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox3_score2.innerHTML == 3) {
        checkbox3_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />\";
      }

      if (checkbox5_score.innerHTML == 0) {
        checkbox5_score.innerHTML = \"미작성\";
      } else if (checkbox5_score.innerHTML == 1) {
        checkbox5_score.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />\";
      } else if (checkbox5_score.innerHTML == 2) {
        checkbox5_score.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score.innerHTML == 3) {
        checkbox5_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score.innerHTML == 4) {
        checkbox5_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score.innerHTML == 5) {
        checkbox5_score.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />\";
      }

      if (checkbox5_score2.innerHTML == 0) {
        checkbox5_score2.innerHTML = \"미작성\";
      } else if (checkbox5_score2.innerHTML == 1) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' checked disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />&ensp;<input type='checkbox'disabled />\";
      } else if (checkbox5_score2.innerHTML == 2) {
        checkbox5_score2.innerHTML = \"<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score2.innerHTML == 3) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score2.innerHTML == 4) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />&ensp;<input type='checkbox' disabled />\";
      } else if (checkbox5_score2.innerHTML == 5) {
        checkbox5_score2.innerHTML = \"<input type='checkbox' disabled />&ensp;<input type='checkbox'  disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' disabled />&ensp;<input type='checkbox' checked disabled />\";
      }
    

    </script>



{% endblock %}", "s-dashboard.html", "/Users/nm/works/project/fbc/templates/s-dashboard.html");
    }
}
