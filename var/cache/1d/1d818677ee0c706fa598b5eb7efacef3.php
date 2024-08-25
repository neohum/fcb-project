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

/* s-dashboard-check.html */
class __TwigTemplate_cdf111911503b3ba71bd1c7e025f38c5 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "s-dashboard-check.html", 1);
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
        if ((($context["studentname"] ?? null) == 0)) {
            // line 34
            yield "                    <a href=\"/\" >로그인</a>
                    ";
        } else {
            // line 36
            yield "                   ";
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
                    <li class=\"menu \">
                        <a href=\"s-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 자율 점검 결과</span>
                            </div>
                            
                        </a>
              
                    </li>
                    <li class=\"menu active\">
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
    
               <h1>자율 점검 하기</h1>
                <br>
                <table>
        
                    <tr>
                        <td>점검하는 학생 --></td>
                        <td> </td>
                        <td>";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentname"] ?? null), "html", null, true);
        yield "</td>
                    </tr>
                    <tr>
                        <td>점검하는 학생 번호 --></td>
                        <td> </td>
                        <td>";
        // line 165
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["studentnumber"] ?? null), "html", null, true);
        yield "번</td>
                    </tr>

                </table>
                <table>
        
                    
                </table>
             
             
            </div>
            <br>
            <br>
            <tr>   
                 
                   

        <div class=\"container text-center table\">
          
              <div class=\"row \">
               
                  <div class=\"col\">점검 대상</div>
                  <div class=\"col\">항목</div>
                  <div class=\"col\">점수1</div>
                  <div class=\"col\">점수2</div>
                  <div class=\"col\">생성일</div>
                  <div class=\"col\">입력</div>
               
              </div>
              
              ";
        // line 195
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["next_student1s"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["next_student1"]) {
            // line 196
            yield "              <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "s-dashboard-checkbox\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentname", [], "any", false, false, false, 198), "html", null, true);
            yield "</div>
                
                <div class=\"col\">";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname2", [], "any", false, false, false, 200), "html", null, true);
            yield "</div>
                <div  class=\"col\" >
                  ";
            // line 202
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 202) == "CheckBox")) {
                // line 203
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 203) == 1)) {
                    // line 204
                    yield "                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      ";
                } else {
                    // line 206
                    yield "                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      ";
                }
                // line 208
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 208) == "5CheckBox")) {
                // line 209
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 209) == 1)) {
                    // line 210
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 211
$context["next_student1"], "score", [], "any", false, false, false, 211) == 2)) {
                    // line 212
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 213
$context["next_student1"], "score", [], "any", false, false, false, 213) == 3)) {
                    // line 214
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 215
$context["next_student1"], "score", [], "any", false, false, false, 215) == 4)) {
                    // line 216
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 217
$context["next_student1"], "score", [], "any", false, false, false, 217) == 5)) {
                    // line 218
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      ";
                } else {
                    // line 220
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                }
                // line 222
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 222) == "3CheckBox")) {
                // line 223
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 223) == 1)) {
                    // line 224
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 225
$context["next_student1"], "score", [], "any", false, false, false, 225) == 2)) {
                    // line 226
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 227
$context["next_student1"], "score", [], "any", false, false, false, 227) == 3)) {
                    // line 228
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      ";
                } else {
                    // line 230
                    yield "                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                }
                // line 232
                yield "                           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 232) == "Writing")) {
                // line 233
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 233) != null)) {
                    // line 234
                    yield "                              <textarea class=\"form-control\" name=\"score1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 234), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 236
                    yield "                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              ";
                }
                // line 238
                yield "                  ";
            }
            // line 239
            yield "                  

                  <input type=\"hidden\" name=\"subjectname1\" value=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 241), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"score\" value=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 242), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentname\" value=\"";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentname", [], "any", false, false, false, 243), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentnumber", [], "any", false, false, false, 244), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"created_at\" value=\"";
            // line 245
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "created_at", [], "any", false, false, false, 245), "html", null, true);
            yield "\">
                 
                </div>
                <div class=\"col\" >점수2</div>
                <div class=\"col\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "created_at", [], "any", false, false, false, 249), "Y/m/d"), "html", null, true);
            yield "</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn";
            // line 250
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 250), "html", null, true);
            yield "\">입력하기</div>
              </div>
              </form>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['next_student1'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
        yield "              <br>
              <br>


              <div class=\"row\">
                <div class=\"col\">점검 대상</div>
               
                <div class=\"col\">항목</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\">점수2</div>
                <div class=\"col\">생성일</div>
                <div class=\"col\">입력</div>
              </div>
              ";
        // line 267
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["next_student2s"] ?? null));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["_key"] => $context["next_student2"]) {
            // line 268
            yield "              <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "s-dashboard-checkbox2\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentname", [], "any", false, false, false, 270), "html", null, true);
            yield "</div>
                
                <div class=\"col\">";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname2", [], "any", false, false, false, 272), "html", null, true);
            yield "</div>
                <div class=\"col\" >점수1</div>
                <div  class=\"col\" >
                  ";
            // line 275
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 275) == "CheckBox")) {
                // line 276
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 276) == 1)) {
                    // line 277
                    yield "                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      ";
                } else {
                    // line 279
                    yield "                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      ";
                }
                // line 281
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 281) == "5CheckBox")) {
                // line 282
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 282) == 1)) {
                    // line 283
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 284
$context["next_student2"], "score2", [], "any", false, false, false, 284) == 2)) {
                    // line 285
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 286
$context["next_student2"], "score2", [], "any", false, false, false, 286) == 3)) {
                    // line 287
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 288
$context["next_student2"], "score2", [], "any", false, false, false, 288) == 4)) {
                    // line 289
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 290
$context["next_student2"], "score2", [], "any", false, false, false, 290) == 5)) {
                    // line 291
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      ";
                } else {
                    // line 293
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                }
                // line 295
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 295) == "3CheckBox")) {
                // line 296
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 296) == 1)) {
                    // line 297
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 298
$context["next_student2"], "score2", [], "any", false, false, false, 298) == 2)) {
                    // line 299
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 300
$context["next_student2"], "score2", [], "any", false, false, false, 300) == 3)) {
                    // line 301
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      ";
                } else {
                    // line 303
                    yield "                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                }
                // line 305
                yield "                           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 305) == "Writing")) {
                // line 306
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 306) != null)) {
                    // line 307
                    yield "                              <textarea class=\"form-control\" name=\"score1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 307), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 309
                    yield "                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              ";
                }
                // line 311
                yield "                  ";
            }
            // line 312
            yield "                  
                  
                  <input type=\"hidden\" name=\"subjectname1\" value=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 314), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"score\" value=\"";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 315), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentname\" value=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentname", [], "any", false, false, false, 316), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentnumber", [], "any", false, false, false, 317), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"created_at\" value=\"";
            // line 318
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "created_at", [], "any", false, false, false, 318), "html", null, true);
            yield "\">
                 
                </div>
                
                <div class=\"col\">";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "created_at", [], "any", false, false, false, 322), "Y/m/d"), "html", null, true);
            yield "</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn";
            // line 323
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 323), "html", null, true);
            yield "\">입력하기</div>
              </div>
              </form>
              ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['next_student2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 327
        yield "           
            </div>
          </div>
        </div>


              <br>
              <br>

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
   
  
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

  
      


";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "s-dashboard-check.html";
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
        return array (  622 => 327,  604 => 323,  600 => 322,  593 => 318,  589 => 317,  585 => 316,  581 => 315,  577 => 314,  573 => 312,  570 => 311,  566 => 309,  560 => 307,  557 => 306,  554 => 305,  550 => 303,  546 => 301,  544 => 300,  541 => 299,  539 => 298,  536 => 297,  533 => 296,  530 => 295,  526 => 293,  522 => 291,  520 => 290,  517 => 289,  515 => 288,  512 => 287,  510 => 286,  507 => 285,  505 => 284,  502 => 283,  499 => 282,  496 => 281,  492 => 279,  488 => 277,  485 => 276,  483 => 275,  477 => 272,  472 => 270,  466 => 268,  449 => 267,  434 => 254,  416 => 250,  412 => 249,  405 => 245,  401 => 244,  397 => 243,  393 => 242,  389 => 241,  385 => 239,  382 => 238,  378 => 236,  372 => 234,  369 => 233,  366 => 232,  362 => 230,  358 => 228,  356 => 227,  353 => 226,  351 => 225,  348 => 224,  345 => 223,  342 => 222,  338 => 220,  334 => 218,  332 => 217,  329 => 216,  327 => 215,  324 => 214,  322 => 213,  319 => 212,  317 => 211,  314 => 210,  311 => 209,  308 => 208,  304 => 206,  300 => 204,  297 => 203,  295 => 202,  290 => 200,  285 => 198,  279 => 196,  262 => 195,  229 => 165,  221 => 160,  108 => 49,  89 => 36,  85 => 34,  83 => 33,  51 => 3,  47 => 2,  36 => 1,);
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
                    {% if studentname == 0%}
                    <a href=\"/\" >로그인</a>
                    {% else %}
                   {{ studentnumber }}번 / {{ studentname }}님, 환영합니다. 
                           
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
                    <li class=\"menu \">
                        <a href=\"s-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 자율 점검 결과</span>
                            </div>
                            
                        </a>
              
                    </li>
                    <li class=\"menu active\">
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
    
               <h1>자율 점검 하기</h1>
                <br>
                <table>
        
                    <tr>
                        <td>점검하는 학생 --></td>
                        <td> </td>
                        <td>{{ studentname }}</td>
                    </tr>
                    <tr>
                        <td>점검하는 학생 번호 --></td>
                        <td> </td>
                        <td>{{ studentnumber }}번</td>
                    </tr>

                </table>
                <table>
        
                    
                </table>
             
             
            </div>
            <br>
            <br>
            <tr>   
                 
                   

        <div class=\"container text-center table\">
          
              <div class=\"row \">
               
                  <div class=\"col\">점검 대상</div>
                  <div class=\"col\">항목</div>
                  <div class=\"col\">점수1</div>
                  <div class=\"col\">점수2</div>
                  <div class=\"col\">생성일</div>
                  <div class=\"col\">입력</div>
               
              </div>
              
              {% for next_student1 in next_student1s%}
              <form action=\"{{doc_root}}s-dashboard-checkbox\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >{{ next_student1.studentname }}</div>
                
                <div class=\"col\">{{ next_student1.subjectname2 }}</div>
                <div  class=\"col\" >
                  {% if next_student1.subjectname == \"CheckBox\" %}
                     {%  if next_student1.score == 1 %}
                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      {% else %}
                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      {% endif %}
                  {% elseif next_student1.subjectname == \"5CheckBox\" %}
                     {% if next_student1.score == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student1.score == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student1.score == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student1.score == 4%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student1.score == 5%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      {% else %}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% endif %}
                  {% elseif next_student1.subjectname == \"3CheckBox\" %}
                      {% if next_student1.score == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif next_student1.score == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif next_student1.score == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      {% else %}
                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% endif %}
                           {% elseif next_student1.subjectname == \"Writing\" %}
                              {% if next_student1.score != null %}
                              <textarea class=\"form-control\" name=\"score1\">{{ next_student1.score }}</textarea>
                              {% else %}
                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              {% endif %}
                  {% endif %}
                  

                  <input type=\"hidden\" name=\"subjectname1\" value=\"{{ next_student1.subjectname }}\">
                  <input type=\"hidden\" name=\"score\" value=\"{{ next_student1.score }}\">
                  <input type=\"hidden\" name=\"studentname\" value=\"{{ next_student1.studentname }}\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"{{ next_student1.studentnumber }}\">
                  <input type=\"hidden\" name=\"created_at\" value=\"{{ next_student1.created_at }}\">
                 
                </div>
                <div class=\"col\" >점수2</div>
                <div class=\"col\">{{ next_student1.created_at|date(\"Y/m/d\") }}</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn{{ loop.index }}\">입력하기</div>
              </div>
              </form>
              {% endfor %}
              <br>
              <br>


              <div class=\"row\">
                <div class=\"col\">점검 대상</div>
               
                <div class=\"col\">항목</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\">점수2</div>
                <div class=\"col\">생성일</div>
                <div class=\"col\">입력</div>
              </div>
              {% for next_student2 in next_student2s%}
              <form action=\"{{doc_root}}s-dashboard-checkbox2\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >{{ next_student2.studentname }}</div>
                
                <div class=\"col\">{{ next_student2.subjectname2 }}</div>
                <div class=\"col\" >점수1</div>
                <div  class=\"col\" >
                  {% if next_student2.subjectname == \"CheckBox\" %}
                     {%  if next_student2.score2 == 1 %}
                        <input type=\"checkbox\" checked name=\"score1\" value=1>
                      {% else %}
                        <input type=\"checkbox\" name=\"score1\" value=\"1\">
                      {% endif %}
                  {% elseif next_student2.subjectname == \"5CheckBox\" %}
                     {% if next_student2.score2 == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student2.score2 == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student2.score2 == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student2.score2 == 4%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% elseif next_student2.score2 == 5%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      {% else %}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      {% endif %}
                  {% elseif next_student2.subjectname == \"3CheckBox\" %}
                      {% if next_student2.score2 == 1%}
                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif next_student2.score2 == 2%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% elseif next_student2.score2 == 3%}
                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      {% else %}
                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      {% endif %}
                           {% elseif next_student2.subjectname == \"Writing\" %}
                              {% if next_student2.score2 != null %}
                              <textarea class=\"form-control\" name=\"score1\">{{ next_student2.score2 }}</textarea>
                              {% else %}
                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              {% endif %}
                  {% endif %}
                  
                  
                  <input type=\"hidden\" name=\"subjectname1\" value=\"{{ next_student2.subjectname }}\">
                  <input type=\"hidden\" name=\"score\" value=\"{{ next_student2.score2 }}\">
                  <input type=\"hidden\" name=\"studentname\" value=\"{{ next_student2.studentname }}\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"{{ next_student2.studentnumber }}\">
                  <input type=\"hidden\" name=\"created_at\" value=\"{{ next_student2.created_at }}\">
                 
                </div>
                
                <div class=\"col\">{{ next_student2.created_at|date(\"Y/m/d\") }}</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn{{ loop.index }}\">입력하기</div>
              </div>
              </form>
              {% endfor %}
           
            </div>
          </div>
        </div>


              <br>
              <br>

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
   
  
    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

  
      


{% endblock %}", "s-dashboard-check.html", "/Users/nm/works/project/fbc/templates/s-dashboard-check.html");
    }
}
