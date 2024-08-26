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

/* t-dashboard-each.html */
class __TwigTemplate_8ba04aa67bbd93ded81607f9afe62e66 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"/>

      <link href=\"/layouts/vertical-light-menu/css/light/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <script src=\"/layouts/vertical-light-menu/loader.js\"></script>

      
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    
       <!-- Css File -->
   
      <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
      <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"/css/mediabox.min.css\">
      <link rel=\"stylesheet\" href=\"/css/owl.carousel.min.css\">
      <link rel=\"stylesheet\" href=\"/css/style.css\">
     
      <link rel=\"stylesheet\" href=\"/css/responsive.css\">
   
      
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
      <link href=\"/src/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/light/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-cover.css\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- END GLOBAL MANDATORY STYLES -->
       <script defer src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\"></script>
       <script src=\"https://code.jquery.com/jquery-3.6.1.js\" integrity=\"sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=\" crossorigin=\"anonymous\"></script>
        
      <script src=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />

  </head>

  <body>
     


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
                        <img src=\"/src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
                    </a>
                </li>
                <li class=\"nav-item theme-text\">
                    <a href=\"/\" class=\"nav-link\"> 신뢰기반 상호 점검 서비스 </a>
                </li>
            </ul>


            <ul class=\"navbar-item flex-row ms-lg-auto ms-0 action-area\">

                 <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                    ";
        // line 81
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "userName", [], "any", false, false, false, 81) == 0)) {
            // line 82
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-admin\" >로그인</a>
                    ";
        } else {
            // line 84
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "userName", [], "any", false, false, false, 84), "html", null, true);
            yield "님, 환영합니다. 
                           
               </li>

               
            </ul>

              <ul class=\"navbar-item flex-row action-area\">
              <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                 <a href=\"";
            // line 93
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-logout\" >로그아웃</a>
                </li>
            </ul>
            ";
        }
        // line 97
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
                                <img src=\"/src/assets/img/logo.svg\" class=\"navbar-logo\" alt=\"logo\">
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
                    <li class=\"menu \">
                        <a href=\"t-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 점검 목록 생성</span>
                            </div>
                            
                        </a>
              
                    </li>
                      
        

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class=\"menu active\">
                        <a href=\"";
        // line 149
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
        // line 164
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-make-s\"class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                <span>우리반 생성/최초 1회만</span>
                            </div>
                            <div>
                            </div>
                        </a>
                      
                    </li>

                    <li class=\"menu\">
                        <a href=\"";
        // line 176
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

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>TABLES AND FORMS</span></div>
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
    
                   <ul class=\"navbar-nav flex-row ms-auto breadcrumb-action-dropdown\">
              
                        <li class=\"nav-item more-dropdown\">
                           
                            <div class=\"nav-item more-dropdown ml-130 mb-20\">
                                <h2><span>번호: ";
        // line 236
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentnumber"] ?? null), "html", null, true);
        yield " =>  ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentname"] ?? null), "html", null, true);
        yield " 학생의 평가 결과입니다.</span></h2>
                            </div>
                           
                        </li>
                    </ul>

                </div>
                <table class=\"table table-hover text-center\">
                  <thead>
                    <tr>
                        <th>평가 항목</th>
                        <th>평가 결과 1</th>
                        <th>평가 결과 2</th>
                        <th>평가일</th>
                    </tr>
                </thead>
                <tbody>
                    ";
        // line 253
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["student_results"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 254
            yield "                    
                    <tr>
                        <td>";
            // line 256
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname2", [], "any", false, false, false, 256), "html", null, true);
            yield "</td>
                        <td>
                          ";
            // line 258
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 258) == "CheckBox")) {
                // line 259
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score", [], "any", false, false, false, 259) == 1)) {
                    // line 260
                    yield "                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      ";
                } else {
                    // line 262
                    yield "                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      ";
                }
                // line 264
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 264) == "5CheckBox")) {
                // line 265
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score", [], "any", false, false, false, 265) == 1)) {
                    // line 266
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 267
$context["student"], "score", [], "any", false, false, false, 267) == 2)) {
                    // line 268
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 269
$context["student"], "score", [], "any", false, false, false, 269) == 3)) {
                    // line 270
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 271
$context["student"], "score", [], "any", false, false, false, 271) == 4)) {
                    // line 272
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 273
$context["student"], "score", [], "any", false, false, false, 273) == 5)) {
                    // line 274
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      ";
                } else {
                    // line 276
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                }
                // line 278
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 278) == "3CheckBox")) {
                // line 279
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score", [], "any", false, false, false, 279) == 1)) {
                    // line 280
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 281
$context["student"], "score", [], "any", false, false, false, 281) == 2)) {
                    // line 282
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 283
$context["student"], "score", [], "any", false, false, false, 283) == 3)) {
                    // line 284
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      ";
                } else {
                    // line 286
                    yield "                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                }
                // line 288
                yield "                           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 288) == "Writing")) {
                // line 289
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score", [], "any", false, false, false, 289) != null)) {
                    // line 290
                    yield "                              <textarea class=\"form-control\" name=\"score1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score", [], "any", false, false, false, 290), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 292
                    yield "                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              ";
                }
                // line 294
                yield "                  ";
            }
            // line 295
            yield "                        </td>
                        <td>
                          ";
            // line 297
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 297) == "CheckBox")) {
                // line 298
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score2", [], "any", false, false, false, 298) == 1)) {
                    // line 299
                    yield "                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      ";
                } else {
                    // line 301
                    yield "                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      ";
                }
                // line 303
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 303) == "5CheckBox")) {
                // line 304
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score2", [], "any", false, false, false, 304) == 1)) {
                    // line 305
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 306
$context["student"], "score2", [], "any", false, false, false, 306) == 2)) {
                    // line 307
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 308
$context["student"], "score2", [], "any", false, false, false, 308) == 3)) {
                    // line 309
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 310
$context["student"], "score2", [], "any", false, false, false, 310) == 4)) {
                    // line 311
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 312
$context["student"], "score2", [], "any", false, false, false, 312) == 5)) {
                    // line 313
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      ";
                } else {
                    // line 315
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                }
                // line 317
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 317) == "3CheckBox")) {
                // line 318
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score2", [], "any", false, false, false, 318) == 1)) {
                    // line 319
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 320
$context["student"], "score2", [], "any", false, false, false, 320) == 2)) {
                    // line 321
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 322
$context["student"], "score2", [], "any", false, false, false, 322) == 3)) {
                    // line 323
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      ";
                } else {
                    // line 325
                    yield "                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                }
                // line 327
                yield "                           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "subjectname", [], "any", false, false, false, 327) == "Writing")) {
                // line 328
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score2", [], "any", false, false, false, 328) != null)) {
                    // line 329
                    yield "                              <textarea class=\"form-control\" name=\"score1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "score2", [], "any", false, false, false, 329), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 331
                    yield "                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              ";
                }
                // line 333
                yield "                  ";
            }
            // line 334
            yield "                        </td>
                        <td>";
            // line 335
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "created_at", [], "any", false, false, false, 335), "Y-m-d"), "html", null, true);
            yield "</td>
                    </tr>
                    
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 339
        yield "                </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
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
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"/src/plugins/src/apex/apexcharts.min.js\"></script>
    <script src=\"/src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- **** All JS Files ***** -->
    <script src=\"/js/jquery.min.js\"></>
    <script src=\"/js/popper.min.js\"></script>
    

      
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/vertical-light-menu/app.js\"></script>

    

   
  </body>
</html>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "t-dashboard-each.html";
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
        return array (  530 => 339,  520 => 335,  517 => 334,  514 => 333,  510 => 331,  504 => 329,  501 => 328,  498 => 327,  494 => 325,  490 => 323,  488 => 322,  485 => 321,  483 => 320,  480 => 319,  477 => 318,  474 => 317,  470 => 315,  466 => 313,  464 => 312,  461 => 311,  459 => 310,  456 => 309,  454 => 308,  451 => 307,  449 => 306,  446 => 305,  443 => 304,  440 => 303,  436 => 301,  432 => 299,  429 => 298,  427 => 297,  423 => 295,  420 => 294,  416 => 292,  410 => 290,  407 => 289,  404 => 288,  400 => 286,  396 => 284,  394 => 283,  391 => 282,  389 => 281,  386 => 280,  383 => 279,  380 => 278,  376 => 276,  372 => 274,  370 => 273,  367 => 272,  365 => 271,  362 => 270,  360 => 269,  357 => 268,  355 => 267,  352 => 266,  349 => 265,  346 => 264,  342 => 262,  338 => 260,  335 => 259,  333 => 258,  328 => 256,  324 => 254,  320 => 253,  298 => 236,  235 => 176,  220 => 164,  202 => 149,  148 => 97,  141 => 93,  128 => 84,  122 => 82,  120 => 81,  38 => 1,);
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
    <link rel=\"icon\" type=\"image/x-icon\" href=\"https://upload.wikimedia.org/wikipedia/commons/8/8d/Icon_S_blue.svg\"/>

      <link href=\"/layouts/vertical-light-menu/css/light/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/loader.css\" rel=\"stylesheet\" type=\"text/css\" />
      <script src=\"/layouts/vertical-light-menu/loader.js\"></script>

      
      <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\"> 
      <link rel=\"stylesheet\" href=\"https://fonts.googleapis.com/css2?family=Inter:wght@400;700&display=swap\">
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
    
       <!-- Css File -->
   
      <link rel=\"stylesheet\" href=\"/css/animate.min.css\">
      <link rel=\"stylesheet\" href=\"/css/font-awesome.min.css\">
      <link rel=\"stylesheet\" href=\"/css/mediabox.min.css\">
      <link rel=\"stylesheet\" href=\"/css/owl.carousel.min.css\">
      <link rel=\"stylesheet\" href=\"/css/style.css\">
     
      <link rel=\"stylesheet\" href=\"/css/responsive.css\">
   
      
      <!-- BEGIN GLOBAL MANDATORY STYLES -->
      <link href=\"https://fonts.googleapis.com/css?family=Nunito:400,600,700\" rel=\"stylesheet\">
      <link href=\"/src/bootstrap/css/bootstrap.min.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/light/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/light/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      
      <link href=\"/layouts/vertical-light-menu/css/dark/plugins.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-boxed.css\" rel=\"stylesheet\" type=\"text/css\" />
      <link href=\"/src/assets/css/dark/authentication/auth-cover.css\" rel=\"stylesheet\" type=\"text/css\" />
      <!-- END GLOBAL MANDATORY STYLES -->
       <script defer src=\"https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js\"></script>
       <script src=\"https://code.jquery.com/jquery-3.6.1.js\" integrity=\"sha256-3zlB5s2uwoUzrXK3BT7AX3FyvojsraNFxCc2vC/7pNI=\" crossorigin=\"anonymous\"></script>
        
      <script src=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.js\"></script>
<link rel=\"stylesheet\" href=\"https://unpkg.com/dropzone@5/dist/min/dropzone.min.css\" type=\"text/css\" />

  </head>

  <body>
     


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
                        <img src=\"/src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
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
                                <img src=\"/src/assets/img/logo.svg\" class=\"navbar-logo\" alt=\"logo\">
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
                    <li class=\"menu \">
                        <a href=\"t-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 점검 목록 생성</span>
                            </div>
                            
                        </a>
              
                    </li>
                      
        

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>APPLICATIONS</span></div>
                    </li>

                    <li class=\"menu active\">
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
                                <span>우리반 생성/최초 1회만</span>
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

                    <li class=\"menu menu-heading\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>TABLES AND FORMS</span></div>
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
    
                   <ul class=\"navbar-nav flex-row ms-auto breadcrumb-action-dropdown\">
              
                        <li class=\"nav-item more-dropdown\">
                           
                            <div class=\"nav-item more-dropdown ml-130 mb-20\">
                                <h2><span>번호: {{ studentnumber }} =>  {{ studentname }} 학생의 평가 결과입니다.</span></h2>
                            </div>
                           
                        </li>
                    </ul>

                </div>
                <table class=\"table table-hover text-center\">
                  <thead>
                    <tr>
                        <th>평가 항목</th>
                        <th>평가 결과 1</th>
                        <th>평가 결과 2</th>
                        <th>평가일</th>
                    </tr>
                </thead>
                <tbody>
                    {% for student in student_results %}
                    
                    <tr>
                        <td>{{ student.subjectname2 }}</td>
                        <td>
                          {% if student.subjectname == \"CheckBox\" %}
                     {%  if student.score == 1 %}
                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      {% else %}
                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      {% endif %}
                  {% elseif student.subjectname == \"5CheckBox\" %}
                     {% if student.score == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score == 4%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score == 5%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      {% else %}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% endif %}
                  {% elseif student.subjectname == \"3CheckBox\" %}
                      {% if student.score == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif student.score == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif student.score == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      {% else %}
                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% endif %}
                           {% elseif student.subjectname == \"Writing\" %}
                              {% if student.score != null %}
                              <textarea class=\"form-control\" name=\"score1\">{{ student.score }}</textarea>
                              {% else %}
                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              {% endif %}
                  {% endif %}
                        </td>
                        <td>
                          {% if student.subjectname == \"CheckBox\" %}
                     {%  if student.score2 == 1 %}
                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      {% else %}
                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      {% endif %}
                  {% elseif student.subjectname == \"5CheckBox\" %}
                     {% if student.score2 == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score2 == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score2 == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score2 == 4%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif student.score2 == 5%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      {% else %}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% endif %}
                  {% elseif student.subjectname == \"3CheckBox\" %}
                      {% if student.score2 == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif student.score2 == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif student.score2 == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      {% else %}
                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% endif %}
                           {% elseif student.subjectname == \"Writing\" %}
                              {% if student.score2 != null %}
                              <textarea class=\"form-control\" name=\"score1\">{{ student.score2 }}</textarea>
                              {% else %}
                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              {% endif %}
                  {% endif %}
                        </td>
                        <td>{{ student.created_at|date('Y-m-d') }}</td>
                    </tr>
                    
                    {% endfor %}
                </tbody>
                </table>
            </div>
            <br>
            <br>
            <br>
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
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
    <script src=\"/src/plugins/src/apex/apexcharts.min.js\"></script>
    <script src=\"/src/assets/js/dashboard/dash_1.js\"></script>
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->
        <!-- END GLOBAL MANDATORY SCRIPTS -->
        <!-- **** All JS Files ***** -->
    <script src=\"/js/jquery.min.js\"></>
    <script src=\"/js/popper.min.js\"></script>
    

      
    <script src=\"/src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"/src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"/src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"/src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"/layouts/vertical-light-menu/app.js\"></script>

    

   
  </body>
</html>", "t-dashboard-each.html", "/Users/nm/works/project/fbc/templates/t-dashboard-each.html");
    }
}
