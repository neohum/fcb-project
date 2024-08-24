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
          <div class=\"row\">
            <div class=\"col\">
              <div class=\"row \">
                <div class=\"col\">점검 대상</div>
                
                <div class=\"col\">항목</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\">점수2</div>
                <div class=\"col\">생성일</div>
                <div class=\"col\">입력</div>
              </div>
              ";
        // line 194
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
            // line 195
            yield "              <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "s-dashboard-checkbox\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentname", [], "any", false, false, false, 197), "html", null, true);
            yield "</div>
                
                <div class=\"col\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname2", [], "any", false, false, false, 199), "html", null, true);
            yield "</div>
                <div  class=\"col\" >
                  ";
            // line 201
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 201) == "CheckBox")) {
                // line 202
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 202) == 1)) {
                    // line 203
                    yield "                        <input type=\"checkbox\" checked name=\"score1\" checked value=1>
                      ";
                } else {
                    // line 205
                    yield "                        <input type=\"checkbox\" name=\"score1\" value=1>
                      ";
                }
                // line 207
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 207) == "5CheckBox")) {
                // line 208
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 208) == 1)) {
                    // line 209
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 210
$context["next_student1"], "score", [], "any", false, false, false, 210) == 2)) {
                    // line 211
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 212
$context["next_student1"], "score", [], "any", false, false, false, 212) == 3)) {
                    // line 213
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 214
$context["next_student1"], "score", [], "any", false, false, false, 214) == 4)) {
                    // line 215
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 216
$context["next_student1"], "score", [], "any", false, false, false, 216) == 5)) {
                    // line 217
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\" checked>
                      ";
                } else {
                    // line 219
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                      ";
                }
                // line 221
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 221) == "3CheckBox")) {
                // line 222
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 222) == 1)) {
                    // line 223
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 224
$context["next_student1"], "score", [], "any", false, false, false, 224) == 2)) {
                    // line 225
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 226
$context["next_student1"], "score", [], "any", false, false, false, 226) == 3)) {
                    // line 227
                    yield "                          <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\" checked>
                      ";
                } else {
                    // line 229
                    yield "                           <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                      ";
                }
                // line 231
                yield "                           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 231) == "Writing")) {
                // line 232
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 232) != null)) {
                    // line 233
                    yield "                              <textarea class=\"form-control\" name=\"score1\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 233), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 235
                    yield "                              <textarea class=\"form-control\" name=\"score1\"></textarea>
                              ";
                }
                // line 237
                yield "                  ";
            }
            // line 238
            yield "                  

                  <input type=\"hidden\" name=\"subjectname1\" value=\"";
            // line 240
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 240), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"score\" value=\"";
            // line 241
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "score", [], "any", false, false, false, 241), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentname\" value=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentname", [], "any", false, false, false, 242), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentnumber", [], "any", false, false, false, 243), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"created_at\" value=\"";
            // line 244
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "created_at", [], "any", false, false, false, 244), "html", null, true);
            yield "\">

                </div>
                <div class=\"col\" >점수2</div>
                <div class=\"col\">";
            // line 248
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "created_at", [], "any", false, false, false, 248), "Y/m/d"), "html", null, true);
            yield "</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 249), "html", null, true);
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
        // line 253
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
        // line 266
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
            // line 267
            yield "              <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "s-dashboard-checkbox\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >";
            // line 269
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentname", [], "any", false, false, false, 269), "html", null, true);
            yield "</div>
                
                <div class=\"col\">";
            // line 271
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname2", [], "any", false, false, false, 271), "html", null, true);
            yield "</div>
                <div class=\"col\" >점수1</div>
                <div  class=\"col\" >
                  ";
            // line 274
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 274) == "CheckBox")) {
                // line 275
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 275) == 1)) {
                    // line 276
                    yield "                        <input type=\"checkbox\" checked name=\"score2\" checked value=1>
                      ";
                } else {
                    // line 278
                    yield "                        <input type=\"checkbox\" name=\"score2\">
                      ";
                }
                // line 280
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 280) == "5CheckBox")) {
                // line 281
                yield "                     ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 281) == 1)) {
                    // line 282
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 283
$context["next_student2"], "score2", [], "any", false, false, false, 283) == 2)) {
                    // line 284
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 285
$context["next_student2"], "score2", [], "any", false, false, false, 285) == 3)) {
                    // line 286
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 287
$context["next_student2"], "score2", [], "any", false, false, false, 287) == 4)) {
                    // line 288
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 289
$context["next_student2"], "score2", [], "any", false, false, false, 289) == 5)) {
                    // line 290
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\" checked>
                      ";
                } else {
                    // line 292
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      ";
                }
                // line 294
                yield "                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 294) == "3CheckBox")) {
                // line 295
                yield "                      ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 295) == 1)) {
                    // line 296
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 297
$context["next_student2"], "score2", [], "any", false, false, false, 297) == 2)) {
                    // line 298
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">
                      ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 299
$context["next_student2"], "score2", [], "any", false, false, false, 299) == 3)) {
                    // line 300
                    yield "                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\" checked>
                      ";
                } else {
                    // line 302
                    yield "                           <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">
                      ";
                }
                // line 304
                yield "                           ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 304) == "Writing")) {
                // line 305
                yield "                              ";
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 305) != null)) {
                    // line 306
                    yield "                              <textarea class=\"form-control\" name=\"score2\">";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 306), "html", null, true);
                    yield "</textarea>
                              ";
                } else {
                    // line 308
                    yield "                              <textarea class=\"form-control\" name=\"score2\"></textarea>
                              ";
                }
                // line 310
                yield "                  ";
            }
            // line 311
            yield "                  

                  <input type=\"hidden\" name=\"subjectname1\" value=\"";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 313), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"score2\" value=\"";
            // line 314
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "score2", [], "any", false, false, false, 314), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentname\" value=\"";
            // line 315
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentname", [], "any", false, false, false, 315), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"";
            // line 316
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentnumber", [], "any", false, false, false, 316), "html", null, true);
            yield "\">
                  <input type=\"hidden\" name=\"created_at\" value=\"";
            // line 317
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "created_at", [], "any", false, false, false, 317), "html", null, true);
            yield "\">

                </div>
                
                <div class=\"col\">";
            // line 321
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "created_at", [], "any", false, false, false, 321), "Y/m/d"), "html", null, true);
            yield "</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn";
            // line 322
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 322), "html", null, true);
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
        // line 326
        yield "              

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

     <script>
      let subjectname1 = document.getElementsByName('subjectname1');
      let subjectname2 = document.getElementsByName('subjectname2');
      let score1 = document.getElementsByName('score1');
      let score2 = document.getElementsByName('score2');
      let score3 = document.getElementsByName('score3');
      let score4 = document.getElementsByName('score4');
      let content1 = '<input type=\"checkbox\" name=\"score1\" value=\"1\">';
      let content2 = '<input type=\"checkbox\" name=\"score1\" value=\"1\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"2\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"3\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"4\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"5\">';
      let content3 = '<input type=\"checkbox\" name=\"score1\" value=\"1\">';
      let content4 = '<textarea></textarea>';
      let btn1 = document.getElementById('btn1');
      let btn2 = document.getElementById('btn2');
      let btn3 = document.getElementById('btn3');
      let btn4 = document.getElementById('btn4');
      
      console.log(score1);

         for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == 'CheckBox') {
            //score1[i].appendChild(document.createElement('input'));
            console.log(subjectname1[i].innerText);

        } 
      }

     

      for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == '5CheckBox') {
            
            console.log(subjectname1[i].innerText);
         
        } 
      }


      for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == '3CheckBox') {
           
            
           console.log(subjectname1[i].innerText);
        } 
      }


      for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == 'Writing') {
            
            console.log(subjectname1[i].innerText);
        } 
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
        return array (  621 => 326,  603 => 322,  599 => 321,  592 => 317,  588 => 316,  584 => 315,  580 => 314,  576 => 313,  572 => 311,  569 => 310,  565 => 308,  559 => 306,  556 => 305,  553 => 304,  549 => 302,  545 => 300,  543 => 299,  540 => 298,  538 => 297,  535 => 296,  532 => 295,  529 => 294,  525 => 292,  521 => 290,  519 => 289,  516 => 288,  514 => 287,  511 => 286,  509 => 285,  506 => 284,  504 => 283,  501 => 282,  498 => 281,  495 => 280,  491 => 278,  487 => 276,  484 => 275,  482 => 274,  476 => 271,  471 => 269,  465 => 267,  448 => 266,  433 => 253,  415 => 249,  411 => 248,  404 => 244,  400 => 243,  396 => 242,  392 => 241,  388 => 240,  384 => 238,  381 => 237,  377 => 235,  371 => 233,  368 => 232,  365 => 231,  361 => 229,  357 => 227,  355 => 226,  352 => 225,  350 => 224,  347 => 223,  344 => 222,  341 => 221,  337 => 219,  333 => 217,  331 => 216,  328 => 215,  326 => 214,  323 => 213,  321 => 212,  318 => 211,  316 => 210,  313 => 209,  310 => 208,  307 => 207,  303 => 205,  299 => 203,  296 => 202,  294 => 201,  289 => 199,  284 => 197,  278 => 195,  261 => 194,  229 => 165,  221 => 160,  108 => 49,  89 => 36,  85 => 34,  83 => 33,  51 => 3,  47 => 2,  36 => 1,);
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
          <div class=\"row\">
            <div class=\"col\">
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
                        <input type=\"checkbox\" checked name=\"score1\" checked value=1>
                      {% else %}
                        <input type=\"checkbox\" name=\"score1\" value=1>
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
              <form action=\"{{doc_root}}s-dashboard-checkbox\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >{{ next_student2.studentname }}</div>
                
                <div class=\"col\">{{ next_student2.subjectname2 }}</div>
                <div class=\"col\" >점수1</div>
                <div  class=\"col\" >
                  {% if next_student2.subjectname == \"CheckBox\" %}
                     {%  if next_student2.score2 == 1 %}
                        <input type=\"checkbox\" checked name=\"score2\" checked value=1>
                      {% else %}
                        <input type=\"checkbox\" name=\"score2\">
                      {% endif %}
                  {% elseif next_student2.subjectname == \"5CheckBox\" %}
                     {% if next_student2.score2 == 1%}
                          <input type=\"radio\" name=\"score2\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      {% elseif next_student2.score2 == 2%}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      {% elseif next_student2.score2 == 3%}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      {% elseif next_student2.score2 == 4%}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      {% elseif next_student2.score2 == 5%}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\" checked>
                      {% else %}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">&ensp;<input type=\"radio\" name=\"score2\" value=\"4\">&ensp;<input type=\"radio\" name=\"score2\" value=\"5\">
                      {% endif %}
                  {% elseif next_student2.subjectname == \"3CheckBox\" %}
                      {% if next_student2.score2 == 1%}
                          <input type=\"radio\" name=\"score2\" value=\"1\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">
                      {% elseif next_student2.score2 == 2%}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\" checked>&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">
                      {% elseif next_student2.score2 == 3%}
                          <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\" checked>
                      {% else %}
                           <input type=\"radio\" name=\"score2\" value=\"1\">&ensp;<input type=\"radio\" name=\"score2\" value=\"2\">&ensp;<input type=\"radio\" name=\"score2\" value=\"3\">
                      {% endif %}
                           {% elseif next_student2.subjectname == \"Writing\" %}
                              {% if next_student2.score2 != null %}
                              <textarea class=\"form-control\" name=\"score2\">{{ next_student2.score2 }}</textarea>
                              {% else %}
                              <textarea class=\"form-control\" name=\"score2\"></textarea>
                              {% endif %}
                  {% endif %}
                  

                  <input type=\"hidden\" name=\"subjectname1\" value=\"{{ next_student2.subjectname }}\">
                  <input type=\"hidden\" name=\"score2\" value=\"{{ next_student2.score2 }}\">
                  <input type=\"hidden\" name=\"studentname\" value=\"{{ next_student2.studentname }}\">
                  <input type=\"hidden\" name=\"studentnumber\" value=\"{{ next_student2.studentnumber }}\">
                  <input type=\"hidden\" name=\"created_at\" value=\"{{ next_student2.created_at }}\">

                </div>
                
                <div class=\"col\">{{ next_student2.created_at|date(\"Y/m/d\") }}</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn{{ loop.index }}\">입력하기</div>
              </div>
              </form>
              {% endfor %}
              

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

     <script>
      let subjectname1 = document.getElementsByName('subjectname1');
      let subjectname2 = document.getElementsByName('subjectname2');
      let score1 = document.getElementsByName('score1');
      let score2 = document.getElementsByName('score2');
      let score3 = document.getElementsByName('score3');
      let score4 = document.getElementsByName('score4');
      let content1 = '<input type=\"checkbox\" name=\"score1\" value=\"1\">';
      let content2 = '<input type=\"checkbox\" name=\"score1\" value=\"1\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"2\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"3\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"4\">&ensp;<input type=\"checkbox\" name=\"score1\" value=\"5\">';
      let content3 = '<input type=\"checkbox\" name=\"score1\" value=\"1\">';
      let content4 = '<textarea></textarea>';
      let btn1 = document.getElementById('btn1');
      let btn2 = document.getElementById('btn2');
      let btn3 = document.getElementById('btn3');
      let btn4 = document.getElementById('btn4');
      
      console.log(score1);

         for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == 'CheckBox') {
            //score1[i].appendChild(document.createElement('input'));
            console.log(subjectname1[i].innerText);

        } 
      }

     

      for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == '5CheckBox') {
            
            console.log(subjectname1[i].innerText);
         
        } 
      }


      for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == '3CheckBox') {
           
            
           console.log(subjectname1[i].innerText);
        } 
      }


      for (let i = 0; i < subjectname1.length; i++) {
        if (subjectname1[i].innerText == 'Writing') {
            
            console.log(subjectname1[i].innerText);
        } 
      }
 

      

    </script>

   
      



{% endblock %}", "s-dashboard-check.html", "/Users/nm/works/project/fbc/templates/s-dashboard-check.html");
    }
}
