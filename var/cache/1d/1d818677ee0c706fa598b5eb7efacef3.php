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
            yield "              <form action=\"/s-dashboard-check\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >";
            // line 197
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "studentname", [], "any", false, false, false, 197), "html", null, true);
            yield "</div>
                <input type=\"hidden\" name=\"subjectname1\" value=\"";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 198), "html", null, true);
            yield "\">
                <div class=\"col\">";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname2", [], "any", false, false, false, 199), "html", null, true);
            yield "</div>
                <div  class=\"col\" >
                  ";
            // line 201
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "subjectname", [], "any", false, false, false, 201) == "CheckBox")) {
                // line 202
                yield "                  <input type=\"checkbox\" name=\"score1\" value=\"1\">
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 203
$context["next_student1"], "subjectname", [], "any", false, false, false, 203) == "5CheckBox")) {
                // line 204
                yield "                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 205
$context["next_student1"], "subjectname", [], "any", false, false, false, 205) == "3CheckBox")) {
                // line 206
                yield "                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 207
$context["next_student1"], "subjectname", [], "any", false, false, false, 207) == "Writing")) {
                // line 208
                yield "                  <textarea class=\"form-control\"></textarea>
                  ";
            }
            // line 210
            yield "
                </div>
                <div class=\"col\" >점수2</div>
                <div class=\"col\">";
            // line 213
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["next_student1"], "created_at", [], "any", false, false, false, 213), "Y/m/d"), "html", null, true);
            yield "</div>
                <div class=\"col\"><button class=\"btn btn-primary\" id=\"btn";
            // line 214
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 214), "html", null, true);
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
        // line 218
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
        // line 231
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
            // line 232
            yield "              <form action=\"/s-dashboard-check\" method=\"post\">
              <div class=\"row\">
                <div class=\"col\" >";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "studentname", [], "any", false, false, false, 234), "html", null, true);
            yield "</div>
                
                <div class=\"col\">";
            // line 236
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname2", [], "any", false, false, false, 236), "html", null, true);
            yield "</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\" >
                <input type=\"hidden\" name=\"subjectname2\" value=\"";
            // line 239
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 239), "html", null, true);
            yield "\">
                  ";
            // line 240
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "subjectname", [], "any", false, false, false, 240) == "CheckBox")) {
                // line 241
                yield "                  <input type=\"checkbox\"  name=\"score1\" value=\"1\">
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 242
$context["next_student2"], "subjectname", [], "any", false, false, false, 242) == "5CheckBox")) {
                // line 243
                yield "                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 244
$context["next_student2"], "subjectname", [], "any", false, false, false, 244) == "3CheckBox")) {
                // line 245
                yield "                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                  ";
            } elseif ((CoreExtension::getAttribute($this->env, $this->source,             // line 246
$context["next_student2"], "subjectname", [], "any", false, false, false, 246) == "Writing")) {
                // line 247
                yield "                  <textarea class=\"form-control\"></textarea>
                  ";
            }
            // line 248
            yield "</div>
                <div class=\"col\">";
            // line 249
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["next_student2"], "created_at", [], "any", false, false, false, 249), "Y/m/d"), "html", null, true);
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['next_student2'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 254
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
        return array (  440 => 254,  422 => 250,  418 => 249,  415 => 248,  411 => 247,  409 => 246,  406 => 245,  404 => 244,  401 => 243,  399 => 242,  396 => 241,  394 => 240,  390 => 239,  384 => 236,  379 => 234,  375 => 232,  358 => 231,  343 => 218,  325 => 214,  321 => 213,  316 => 210,  312 => 208,  310 => 207,  307 => 206,  305 => 205,  302 => 204,  300 => 203,  297 => 202,  295 => 201,  290 => 199,  286 => 198,  282 => 197,  278 => 195,  261 => 194,  229 => 165,  221 => 160,  108 => 49,  89 => 36,  85 => 34,  83 => 33,  51 => 3,  47 => 2,  36 => 1,);
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
              <form action=\"/s-dashboard-check\" method=\"post\">
              <div class=\"row \">
                <div class=\"col\" >{{ next_student1.studentname }}</div>
                <input type=\"hidden\" name=\"subjectname1\" value=\"{{ next_student1.subjectname }}\">
                <div class=\"col\">{{ next_student1.subjectname2 }}</div>
                <div  class=\"col\" >
                  {% if next_student1.subjectname == \"CheckBox\" %}
                  <input type=\"checkbox\" name=\"score1\" value=\"1\">
                  {% elseif next_student1.subjectname == \"5CheckBox\" %}
                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                  {% elseif next_student1.subjectname == \"3CheckBox\" %}
                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                  {% elseif next_student1.subjectname == \"Writing\" %}
                  <textarea class=\"form-control\"></textarea>
                  {% endif %}

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
              <form action=\"/s-dashboard-check\" method=\"post\">
              <div class=\"row\">
                <div class=\"col\" >{{ next_student2.studentname }}</div>
                
                <div class=\"col\">{{ next_student2.subjectname2 }}</div>
                <div class=\"col\">점수1</div>
                <div class=\"col\" >
                <input type=\"hidden\" name=\"subjectname2\" value=\"{{ next_student2.subjectname }}\">
                  {% if next_student2.subjectname == \"CheckBox\" %}
                  <input type=\"checkbox\"  name=\"score1\" value=\"1\">
                  {% elseif next_student2.subjectname == \"5CheckBox\" %}
                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">&ensp;<input type=\"radio\" name=\"score1\" value=\"4\">&ensp;<input type=\"radio\" name=\"score1\" value=\"5\">
                  {% elseif next_student2.subjectname == \"3CheckBox\" %}
                  <input type=\"radio\" name=\"score1\" value=\"1\">&ensp;<input type=\"radio\" name=\"score1\" value=\"2\">&ensp;<input type=\"radio\" name=\"score1\" value=\"3\">
                  {% elseif next_student2.subjectname == \"Writing\" %}
                  <textarea class=\"form-control\"></textarea>
                  {% endif %}</div>
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
