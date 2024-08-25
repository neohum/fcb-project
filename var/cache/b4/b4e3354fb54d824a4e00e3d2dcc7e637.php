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
                        <td>: ";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentname"] ?? null), "html", null, true);
        yield "</td>
                    </tr>
                     <tr>
                        <td>번호</td>
                        <td id=\"studentnumber\">: ";
        // line 163
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentnumber"] ?? null), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>생성된 클래스명</td>
                        
                        <td>: ";
        // line 168
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
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["checklists"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["checklist"]) {
            // line 197
            yield "            <tr id=\"check_list\">
            
              <td >";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 199), "html", null, true);
            yield "</td>  
              <td >";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname2", [], "any", false, false, false, 200), "html", null, true);
            yield "</td> 
              
                ";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 202) == "CheckBox")) {
                // line 203
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 203) == 1)) {
                    // line 204
                    yield "                       <td> <input type=\"checkbox\" checked disabled></td>
                    ";
                } else {
                    // line 206
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 208
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 208) == 1)) {
                    // line 209
                    yield "                        <td> <input type=\"checkbox\" checked disabled></td>
                    ";
                } else {
                    // line 211
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 213
                yield "                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 213) == "5CheckBox")) {
                // line 214
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 214) == 1)) {
                    // line 215
                    yield "                        <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["checklist"], "score", [], "any", false, false, false, 216) == 2)) {
                    // line 217
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 219
$context["checklist"], "score", [], "any", false, false, false, 219) == 3)) {
                    // line 220
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 222
$context["checklist"], "score", [], "any", false, false, false, 222) == 4)) {
                    // line 223
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 225
$context["checklist"], "score", [], "any", false, false, false, 225) == 5)) {
                    // line 226
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    ";
                } else {
                    // line 228
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 230
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 230) == 1)) {
                    // line 231
                    yield "                        <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 232
$context["checklist"], "score2", [], "any", false, false, false, 232) == 2)) {
                    // line 233
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 235
$context["checklist"], "score2", [], "any", false, false, false, 235) == 3)) {
                    // line 236
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 238
$context["checklist"], "score2", [], "any", false, false, false, 238) == 4)) {
                    // line 239
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>

                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 241
$context["checklist"], "score2", [], "any", false, false, false, 241) == 5)) {
                    // line 242
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    ";
                } else {
                    // line 244
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 246
                yield "                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "subjectname", [], "any", false, false, false, 246) == "3CheckBox")) {
                // line 247
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 247) == 1)) {
                    // line 248
                    yield "                       <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 249
$context["checklist"], "score", [], "any", false, false, false, 249) == 2)) {
                    // line 250
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 251
$context["checklist"], "score", [], "any", false, false, false, 251) == 3)) {
                    // line 252
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    ";
                } else {
                    // line 254
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 256
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 256) == 1)) {
                    // line 257
                    yield "                        <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 258
$context["checklist"], "score2", [], "any", false, false, false, 258) == 2)) {
                    // line 259
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>
                    ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 260
$context["checklist"], "score2", [], "any", false, false, false, 260) == 3)) {
                    // line 261
                    yield "                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    ";
                } else {
                    // line 263
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 265
                yield "
                ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 266
$context["checklist"], "subjectname", [], "any", false, false, false, 266) == "Writing")) {
                // line 267
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 267) != null)) {
                    // line 268
                    yield "                        <td> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score", [], "any", false, false, false, 268), "html", null, true);
                    yield "</td>
                    ";
                } else {
                    // line 270
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 272
                yield "                    ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 272) != null)) {
                    // line 273
                    yield "                        <td> ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "score2", [], "any", false, false, false, 273), "html", null, true);
                    yield "</td>
                    ";
                } else {
                    // line 275
                    yield "                        <td> 미작성 </td>
                    ";
                }
                // line 277
                yield "
                ";
            } else {
                // line 279
                yield "
                ";
            }
            // line 281
            yield "              <td >";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["checklist"], "created_at", [], "any", false, false, false, 281), "Y-m-d"), "html", null, true);
            yield "</td>
              </tr>
              ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['checklist'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 284
        yield "
              
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
        return array (  474 => 284,  464 => 281,  460 => 279,  456 => 277,  452 => 275,  446 => 273,  443 => 272,  439 => 270,  433 => 268,  430 => 267,  428 => 266,  425 => 265,  421 => 263,  417 => 261,  415 => 260,  412 => 259,  410 => 258,  407 => 257,  404 => 256,  400 => 254,  396 => 252,  394 => 251,  391 => 250,  389 => 249,  386 => 248,  383 => 247,  380 => 246,  376 => 244,  372 => 242,  370 => 241,  366 => 239,  364 => 238,  360 => 236,  358 => 235,  354 => 233,  352 => 232,  349 => 231,  346 => 230,  342 => 228,  338 => 226,  336 => 225,  332 => 223,  330 => 222,  326 => 220,  324 => 219,  320 => 217,  318 => 216,  315 => 215,  312 => 214,  309 => 213,  305 => 211,  301 => 209,  298 => 208,  294 => 206,  290 => 204,  287 => 203,  285 => 202,  280 => 200,  276 => 199,  272 => 197,  268 => 196,  237 => 168,  229 => 163,  222 => 159,  110 => 49,  89 => 36,  85 => 34,  83 => 33,  51 => 3,  47 => 2,  36 => 1,);
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
                        <td>: {{ studentname }}</td>
                    </tr>
                     <tr>
                        <td>번호</td>
                        <td id=\"studentnumber\">: {{ studentnumber }}</td>
                    </tr>
                    <tr>
                        <td>생성된 클래스명</td>
                        
                        <td>: {{ classname }}</td>
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
              
                {% if checklist.subjectname == \"CheckBox\" %}
                    {% if checklist.score == 1 %}
                       <td> <input type=\"checkbox\" checked disabled></td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}
                    {% if checklist.score2 == 1 %}
                        <td> <input type=\"checkbox\" checked disabled></td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}
                {% elseif checklist.subjectname == \"5CheckBox\" %}
                    {% if checklist.score == 1 %}
                        <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>
                    {% elseif checklist.score == 2 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>

                    {% elseif checklist.score == 3 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>

                    {% elseif checklist.score == 4 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>

                    {% elseif checklist.score == 5 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}
                    {% if checklist.score2 == 1 %}
                        <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>
                    {% elseif checklist.score2 == 2 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" ></td>

                    {% elseif checklist.score2 == 3 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>

                    {% elseif checklist.score2 == 4 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>

                    {% elseif checklist.score2 == 5 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}
                {% elseif checklist.subjectname == \"3CheckBox\" %}
                    {% if checklist.score == 1 %}
                       <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>
                    {% elseif checklist.score == 2 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>
                    {% elseif checklist.score == 3 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}
                    {% if checklist.score2 == 1 %}
                        <td> <input type=\"radio\" checked disabled> <input type=\"radio\" > <input type=\"radio\" ></td>
                    {% elseif checklist.score2 == 2 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" checked disabled> <input type=\"radio\" ></td>
                    {% elseif checklist.score2 == 3 %}
                        <td> <input type=\"radio\" > <input type=\"radio\" > <input type=\"radio\" checked disabled></td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}

                {% elseif checklist.subjectname == \"Writing\" %}
                    {% if checklist.score != null %}
                        <td> {{ checklist.score }}</td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}
                    {% if checklist.score2 != null %}
                        <td> {{ checklist.score2 }}</td>
                    {% else %}
                        <td> 미작성 </td>
                    {% endif %}

                {% else %}

                {% endif %}
              <td >{{ checklist.created_at|date(\"Y-m-d\") }}</td>
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

    

      
        
      
      

{% endblock %}", "s-dashboard.html", "/Users/nm/works/project/fbc/templates/s-dashboard.html");
    }
}
