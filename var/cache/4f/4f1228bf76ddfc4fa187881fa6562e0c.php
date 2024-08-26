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

/* t-dashboard-student-manage.html */
class __TwigTemplate_64dea34c3c733834ebaf67b994c062a2 extends Template
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
        $this->parent = $this->loadTemplate("layout.html", "t-dashboard-student-manage.html", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 2
    public function block_content($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        yield "<style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');

  *{
    font-family: 'Ubuntu', sans-serif;
}
.container{
    text-align: center;
    width: 100%;
    max-width: 500px;
    min-height: 700px;
    
    margin: 20px 300px;
    background-color: white;
    border-radius: 16px;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.header-section{
    padding: 25px 0px;
}
.header-section h1{
    font-weight: 500;
    font-size: 1.7rem;
    text-transform: uppercase;
    color: #707EA0;
    margin: 0px;
    margin-bottom: 8px;
}
.header-section p{
    margin: 5px;
    font-size: 0.95rem;
    color: #707EA0;
}

.drop-section{
    min-height: 250px;
    border: 1px dashed #A8B3E3;
    background-image: linear-gradient(180deg, white, #F1F6FF);
    margin: 5px 35px 35px 35px;
    
    border-radius: 12px;
    position: relative;
}
.drop-section div.col:first-child{
    opacity: 1;
    visibility: visible;
    transition-duration: 0.2s;
    transform: scale(1);
    width: 200px;
    margin: auto;
}
.drop-section div.col:last-child{
    font-size: 40px;
    font-weight: 700;
    color: #c0cae1;
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin: auto;
    width: 200px;
    height: 55px;
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
    transform: scale(0.6);
    transition-duration: 0.2s;
}
/* we will use \"drag-over-effect\" class in js */
.drag-over-effect div.col:first-child{
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: scale(1.1);
}
.drag-over-effect div.col:last-child{
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}
.drop-section .cloud-icon{
    margin-top: 25px;
    margin-bottom: 20px;
}
.drop-section span,
.drop-section button{
    display: block;
    margin: auto;
    color: #707EA0;
    margin-bottom: 10px;
}
.drop-section button{
    color: white;
    background-color: #5874C6;
    border: none;
    outline: none;
    padding: 7px 20px;
    border-radius: 8px;
    margin-top: 20px;
    cursor: pointer;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
.drop-section input{
    display: none;
}

.list-section{
    display: none;
    text-align: left;
    margin: 0px 35px;
    padding-bottom: 20px;
}
.list-section .list-title{
    font-size: 0.95rem;
    color: #707EA0;
}
.list-section li{
    display: flex;
    margin: 15px 0px;
    padding-top: 4px;
    padding-bottom: 2px;
    border-radius: 8px;
    transition-duration: 0.2s;
}
.list-section li:hover{
    box-shadow: #E3EAF9 0px 0px 4px 0px, #E3EAF9 0px 12px 16px 0px;
}
.list-section li .col{
    flex: .1;
}
.list-section li .col:nth-child(1){
    flex: .15;
    text-align: center;
}
.list-section li .col:nth-child(2){
    flex: .75;
    text-align: left;
    font-size: 0.9rem;
    color: #3e4046;
    padding: 8px 10px;
}
.list-section li .col:nth-child(2) div.name{
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 250px;
    display: inline-block;
}
.list-section li .col .file-name span{
    color: #707EA0;
    float: right;
}
.list-section li .file-progress{
    width: 100%;
    height: 5px;
    margin-top: 8px;
    border-radius: 8px;
    background-color: #dee6fd;
}
.list-section li .file-progress span{
    display: block;
    width: 0%;
    height: 100%;
    border-radius: 8px;
    background-image: linear-gradient(120deg, #6b99fd, #9385ff);
    transition-duration: 0.4s;
}
.list-section li .col .file-size{
    font-size: 0.75rem;
    margin-top: 3px;
    color: #707EA0;
}
.list-section li .col svg.cross,
.list-section li .col svg.tick{
    fill: #8694d2;
    background-color: #dee6fd;
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
}
.list-section li .col svg.tick{
    fill: #50a156;
    background-color: transparent;
}
.list-section li.complete span,
.list-section li.complete .file-progress,
.list-section li.complete svg.cross{
    display: none;
}
.list-section li.in-prog .file-size,
.list-section li.in-prog svg.tick{
    display: none;
}
</style>


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
                    <a href=\"/\">
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
        // line 230
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "userName", [], "any", false, false, false, 230) == 0)) {
            // line 231
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-admin\" >로그인</a>
                    ";
        } else {
            // line 233
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["session"] ?? null), "userName", [], "any", false, false, false, 233), "html", null, true);
            yield "님, 환영합니다. 
                           
               </li>

               
            </ul>

              <ul class=\"navbar-item flex-row action-area\">
              <li class=\"nav-item dropdown user-profile-dropdown  order-lg-0 order-1\">
                 <a href=\"";
            // line 242
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-logout\" >로그아웃</a>
                </li>
            </ul>
            ";
        }
        // line 246
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
                        <a href=\"t-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 점검 목록 생성</span>
                            </div>
                            
                        </a>
              
                    </li>
                      
        

                  
                    <li class=\"menu \">
                        <a href=\"";
        // line 296
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-regis-s\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\"><rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect><rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect><line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line><line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line><line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line><line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line><line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line><line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line><line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line><line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line></svg>
                                <span>학생 제출 상황</span>
                            </div>
                            
                        </a>
                      
                    </li>
                 

                    <li class=\"menu menu-heading active\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class=\"menu\">
                        <a href=\"";
        // line 312
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-make-s\"class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                <span>우리반 생성/최초 1회만</span>
                            </div>
                            
                        </a>
                      
                    </li>

                    <li class=\"menu active\">
                        <a href=\"";
        // line 323
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-student-manage\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" class=\"dropdown-toggle\">
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
                            <div class=\"nav-item more-dropdown ml-200 mb-20\">
                              <h2> 우리반 등록 현황 </h2>

                              <table class=\"text-center table\">
                                <thead>
                                  <tr>
                                    
                                    <th>클래스 넘버</th>
                                    <th>학생 번호</th>
                                    <th>학생 이름</th>
                                    <th>수정</th>
                                    <th>삭제</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  ";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["students"] ?? null));
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
        foreach ($context['_seq'] as $context["_key"] => $context["student"]) {
            // line 398
            yield "                                  <tr>
                                    <td>";
            // line 399
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "classname", [], "any", false, false, false, 399), "html", null, true);
            yield "</td>
                                    <td>";
            // line 400
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "studentnumber", [], "any", false, false, false, 400), "html", null, true);
            yield "</td>
                                    <td>";
            // line 401
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "studentname", [], "any", false, false, false, 401), "html", null, true);
            yield "</td>
                                    <td><button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal";
            // line 402
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 402), "html", null, true);
            yield "\">수정</button></td>
                                    <!-- Modal -->
                                  <div class=\"modal fade\" id=\"exampleModal";
            // line 404
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 404), "html", null, true);
            yield "\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 404), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" >
                                      <div class=\"modal-content\" style=\"background-color:white;\">
                                        <div class=\"modal-header\">
                                          <h5 class=\"modal-title\" id=\"exampleModalLabel\">학생 정보 수정하기</h5>
                                          
                                          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          
                                        </div>
                                         <form action=\"";
            // line 413
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-dashboard-student-modify\" method=\"post\">
                                        <div class=\"modal-body\">
                                          
                                        
                                            <div class=\"form-group\">
                                              <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 418
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 418), "html", null, true);
            yield "\">
                                              <input type=\"hidden\" name=\"classname\" id=\"classname\" value=\"";
            // line 419
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "classname", [], "any", false, false, false, 419), "html", null, true);
            yield "\">
                                              <label for=\"studentnumber\">번호</label>
                                              <input type=\"number\" class=\"form-control\" id=\"studentnumber\" name=\"studentnumber\"  value=\"";
            // line 421
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "studentnumber", [], "any", false, false, false, 421), "html", null, true);
            yield "\">
                                              <label for=\"studentname\">이름</label>
                                              <input type=\"text\" class=\"form-control\" id=\"studentname\" name=\"studentname\"  value =\"";
            // line 423
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "studentname", [], "any", false, false, false, 423), "html", null, true);
            yield "\">
                                            </div>
                                         
                                        </div>
                                        <div class=\"modal-footer\">
                                          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">취소</button>
                                          <button type=\"submit\" class=\"btn btn-primary\">수정하기</button>
                                          
                                        </div>
                                         </form>
                                      </div>
                                    </div>
                                  </div>
                                    <td><button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal1";
            // line 436
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 436), "html", null, true);
            yield "\">삭제</button></td>
                                    
                                    <!-- Modal -->
                                  <div class=\"modal fade\" id=\"exampleModal1";
            // line 439
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 439), "html", null, true);
            yield "\" tabindex=\"-2\" aria-labelledby=\"exampleModalLabel1";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, false, 439), "html", null, true);
            yield "\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" >
                                      <div class=\"modal-content\" style=\"background-color:white;\">
                                        <div class=\"modal-header\">
                                          <h5 class=\"modal-title\" id=\"exampleModalLabel\">학생 정보 삭제하기</h5>
                                          
                                          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          
                                        </div>
                                         <form action=\"";
            // line 448
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
            yield "t-dashboard-student-delete\" method=\"post\">
                                        <div class=\"modal-body\">
                                          
                                        
                                            <div class=\"form-group\">
                                              <input type=\"hidden\" name=\"id\" id=\"id\" value=\"";
            // line 453
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "id", [], "any", false, false, false, 453), "html", null, true);
            yield "\">
                                              <input type=\"hidden\" name=\"classname\" id=\"classname\" value=\"";
            // line 454
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "classname", [], "any", false, false, false, 454), "html", null, true);
            yield "\">
                                              <label for=\"studentnumber\">번호</label>
                                              <input type=\"number\" class=\"form-control\" id=\"studentnumber\" name=\"studentnumber\"  value=\"";
            // line 456
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "studentnumber", [], "any", false, false, false, 456), "html", null, true);
            yield "\">
                                              <label for=\"studentname\">이름</label>
                                              <input type=\"text\" class=\"form-control\" id=\"studentname\" name=\"studentname\"  value =\"";
            // line 458
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["student"], "studentname", [], "any", false, false, false, 458), "html", null, true);
            yield "\">
                                            </div>
                                         
                                        </div>
                                        <div class=\"modal-footer\">
                                          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">취소</button>
                                          <button type=\"submit\" class=\"btn btn-primary\">삭제하기</button>
                                          
                                        </div>
                                         </form>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  </tr>
                                  
                                  
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['student'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 476
        yield "                                </tbody>
                              </table>

                              
                              <br>
                              <br>
                              <div class=\"\">
                                <h2>학생 추가</h2>
                                <form action=\"";
        // line 484
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-dashboard-student-manage\" method=\"post\">
                                  <div class=\"form-group\">
                                    <label for=\"studentnumber\">번호(시스템 설계상 제일 마지막에 추가 됩니다.)</label>
                                    <input type=\"number\" class=\"form-control\" id=\"studentnumber\" name=\"studentnumber\" placeholder=\"학생 번호를 입력하세요. 제일 마지막에 추가됩니다.\">
                                    <label for=\"studentname\">이름</label>
                                    <input type=\"text\" class=\"form-control\" id=\"studentname\" name=\"studentname\" placeholder=\"학생 이름을 입력하세요\">
                                  </div>
                                  <br>
                                  <input type=\"hidden\" name=\"classname\" value=\"";
        // line 492
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["classname"] ?? null), "html", null, true);
        yield "\">

                                  
                                  <button type=\"submit\" class=\"btn btn-success\">추가</button>
                                </form>
                                

                              </div>
                              
                            </div>
  
                        </li>
                         
                        <p>
                         
                    </ul>

                </div>

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
    <script src=\"../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"../src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"../src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"../layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

 
   



";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "t-dashboard-student-manage.html";
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
        return array (  654 => 492,  643 => 484,  633 => 476,  601 => 458,  596 => 456,  591 => 454,  587 => 453,  579 => 448,  565 => 439,  559 => 436,  543 => 423,  538 => 421,  533 => 419,  529 => 418,  521 => 413,  507 => 404,  502 => 402,  498 => 401,  494 => 400,  490 => 399,  487 => 398,  470 => 397,  393 => 323,  379 => 312,  360 => 296,  308 => 246,  301 => 242,  288 => 233,  282 => 231,  280 => 230,  51 => 3,  47 => 2,  36 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'layout.html' %}
{% block content %}
<style>
        @import url('https://fonts.googleapis.com/css2?family=Ubuntu:wght@400;500;700&display=swap');

  *{
    font-family: 'Ubuntu', sans-serif;
}
.container{
    text-align: center;
    width: 100%;
    max-width: 500px;
    min-height: 700px;
    
    margin: 20px 300px;
    background-color: white;
    border-radius: 16px;
    box-shadow: rgba(255, 255, 255, 0.1) 0px 1px 1px 0px inset, rgba(50, 50, 93, 0.25) 0px 50px 100px -20px, rgba(0, 0, 0, 0.3) 0px 30px 60px -30px;
}

.header-section{
    padding: 25px 0px;
}
.header-section h1{
    font-weight: 500;
    font-size: 1.7rem;
    text-transform: uppercase;
    color: #707EA0;
    margin: 0px;
    margin-bottom: 8px;
}
.header-section p{
    margin: 5px;
    font-size: 0.95rem;
    color: #707EA0;
}

.drop-section{
    min-height: 250px;
    border: 1px dashed #A8B3E3;
    background-image: linear-gradient(180deg, white, #F1F6FF);
    margin: 5px 35px 35px 35px;
    
    border-radius: 12px;
    position: relative;
}
.drop-section div.col:first-child{
    opacity: 1;
    visibility: visible;
    transition-duration: 0.2s;
    transform: scale(1);
    width: 200px;
    margin: auto;
}
.drop-section div.col:last-child{
    font-size: 40px;
    font-weight: 700;
    color: #c0cae1;
    position: absolute;
    top: 0px;
    bottom: 0px;
    left: 0px;
    right: 0px;
    margin: auto;
    width: 200px;
    height: 55px;
    pointer-events: none;
    opacity: 0;
    visibility: hidden;
    transform: scale(0.6);
    transition-duration: 0.2s;
}
/* we will use \"drag-over-effect\" class in js */
.drag-over-effect div.col:first-child{
    opacity: 0;
    visibility: hidden;
    pointer-events: none;
    transform: scale(1.1);
}
.drag-over-effect div.col:last-child{
    opacity: 1;
    visibility: visible;
    transform: scale(1);
}
.drop-section .cloud-icon{
    margin-top: 25px;
    margin-bottom: 20px;
}
.drop-section span,
.drop-section button{
    display: block;
    margin: auto;
    color: #707EA0;
    margin-bottom: 10px;
}
.drop-section button{
    color: white;
    background-color: #5874C6;
    border: none;
    outline: none;
    padding: 7px 20px;
    border-radius: 8px;
    margin-top: 20px;
    cursor: pointer;
    box-shadow: rgba(50, 50, 93, 0.25) 0px 13px 27px -5px, rgba(0, 0, 0, 0.3) 0px 8px 16px -8px;
}
.drop-section input{
    display: none;
}

.list-section{
    display: none;
    text-align: left;
    margin: 0px 35px;
    padding-bottom: 20px;
}
.list-section .list-title{
    font-size: 0.95rem;
    color: #707EA0;
}
.list-section li{
    display: flex;
    margin: 15px 0px;
    padding-top: 4px;
    padding-bottom: 2px;
    border-radius: 8px;
    transition-duration: 0.2s;
}
.list-section li:hover{
    box-shadow: #E3EAF9 0px 0px 4px 0px, #E3EAF9 0px 12px 16px 0px;
}
.list-section li .col{
    flex: .1;
}
.list-section li .col:nth-child(1){
    flex: .15;
    text-align: center;
}
.list-section li .col:nth-child(2){
    flex: .75;
    text-align: left;
    font-size: 0.9rem;
    color: #3e4046;
    padding: 8px 10px;
}
.list-section li .col:nth-child(2) div.name{
    overflow: hidden;
    white-space: nowrap;
    text-overflow: ellipsis;
    max-width: 250px;
    display: inline-block;
}
.list-section li .col .file-name span{
    color: #707EA0;
    float: right;
}
.list-section li .file-progress{
    width: 100%;
    height: 5px;
    margin-top: 8px;
    border-radius: 8px;
    background-color: #dee6fd;
}
.list-section li .file-progress span{
    display: block;
    width: 0%;
    height: 100%;
    border-radius: 8px;
    background-image: linear-gradient(120deg, #6b99fd, #9385ff);
    transition-duration: 0.4s;
}
.list-section li .col .file-size{
    font-size: 0.75rem;
    margin-top: 3px;
    color: #707EA0;
}
.list-section li .col svg.cross,
.list-section li .col svg.tick{
    fill: #8694d2;
    background-color: #dee6fd;
    position: relative;
    left: 50%;
    top: 50%;
    transform: translate(-50%, -50%);
    border-radius: 50%;
}
.list-section li .col svg.tick{
    fill: #50a156;
    background-color: transparent;
}
.list-section li.complete span,
.list-section li.complete .file-progress,
.list-section li.complete svg.cross{
    display: none;
}
.list-section li.in-prog .file-size,
.list-section li.in-prog svg.tick{
    display: none;
}
</style>


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
                    <a href=\"/\">
                        <img src=\"../src/assets/img/logo2.svg\" class=\"navbar-logo\" alt=\"logo\">
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
                        <a href=\"t-dashboard\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-home\"><path d=\"M3 9l9-7 9 7v11a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z\"></path><polyline points=\"9 22 9 12 15 12 15 22\"></polyline></svg>
                                <span>학생 점검 목록 생성</span>
                            </div>
                            
                        </a>
              
                    </li>
                      
        

                  
                    <li class=\"menu \">
                        <a href=\"{{ doc_root }}t-dashboard-regis-s\"  class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-cpu\"><rect x=\"4\" y=\"4\" width=\"16\" height=\"16\" rx=\"2\" ry=\"2\"></rect><rect x=\"9\" y=\"9\" width=\"6\" height=\"6\"></rect><line x1=\"9\" y1=\"1\" x2=\"9\" y2=\"4\"></line><line x1=\"15\" y1=\"1\" x2=\"15\" y2=\"4\"></line><line x1=\"9\" y1=\"20\" x2=\"9\" y2=\"23\"></line><line x1=\"15\" y1=\"20\" x2=\"15\" y2=\"23\"></line><line x1=\"20\" y1=\"9\" x2=\"23\" y2=\"9\"></line><line x1=\"20\" y1=\"14\" x2=\"23\" y2=\"14\"></line><line x1=\"1\" y1=\"9\" x2=\"4\" y2=\"9\"></line><line x1=\"1\" y1=\"14\" x2=\"4\" y2=\"14\"></line></svg>
                                <span>학생 제출 상황</span>
                            </div>
                            
                        </a>
                      
                    </li>
                 

                    <li class=\"menu menu-heading active\">
                        <div class=\"heading\"><svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-minus\"><line x1=\"5\" y1=\"12\" x2=\"19\" y2=\"12\"></line></svg><span>USER INTERFACE</span></div>
                    </li>

                    <li class=\"menu\">
                        <a href=\"{{ doc_root }}t-dashboard-make-s\"class=\"dropdown-toggle\">
                            <div class=\"\">
                                <svg xmlns=\"http://www.w3.org/2000/svg\" width=\"24\" height=\"24\" viewBox=\"0 0 24 24\" fill=\"none\" stroke=\"currentColor\" stroke-width=\"2\" stroke-linecap=\"round\" stroke-linejoin=\"round\" class=\"feather feather-box\"><path d=\"M21 16V8a2 2 0 0 0-1-1.73l-7-4a2 2 0 0 0-2 0l-7 4A2 2 0 0 0 3 8v8a2 2 0 0 0 1 1.73l7 4a2 2 0 0 0 2 0l7-4A2 2 0 0 0 21 16z\"></path><polyline points=\"3.27 6.96 12 12.01 20.73 6.96\"></polyline><line x1=\"12\" y1=\"22.08\" x2=\"12\" y2=\"12\"></line></svg>
                                <span>우리반 생성/최초 1회만</span>
                            </div>
                            
                        </a>
                      
                    </li>

                    <li class=\"menu active\">
                        <a href=\"{{ doc_root }}t-dashboard-student-manage\" data-bs-toggle=\"dropdown\" aria-expanded=\"false\" class=\"dropdown-toggle\">
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
                            <div class=\"nav-item more-dropdown ml-200 mb-20\">
                              <h2> 우리반 등록 현황 </h2>

                              <table class=\"text-center table\">
                                <thead>
                                  <tr>
                                    
                                    <th>클래스 넘버</th>
                                    <th>학생 번호</th>
                                    <th>학생 이름</th>
                                    <th>수정</th>
                                    <th>삭제</th>
                                    
                                  </tr>
                                </thead>
                                <tbody>
                                  {% for student in students %}
                                  <tr>
                                    <td>{{ student.classname }}</td>
                                    <td>{{ student.studentnumber }}</td>
                                    <td>{{ student.studentname }}</td>
                                    <td><button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal{{ loop.index }}\">수정</button></td>
                                    <!-- Modal -->
                                  <div class=\"modal fade\" id=\"exampleModal{{ loop.index }}\" tabindex=\"-1\" aria-labelledby=\"exampleModalLabel{{ loop.index }}\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" >
                                      <div class=\"modal-content\" style=\"background-color:white;\">
                                        <div class=\"modal-header\">
                                          <h5 class=\"modal-title\" id=\"exampleModalLabel\">학생 정보 수정하기</h5>
                                          
                                          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          
                                        </div>
                                         <form action=\"{{ doc_root }}t-dashboard-student-modify\" method=\"post\">
                                        <div class=\"modal-body\">
                                          
                                        
                                            <div class=\"form-group\">
                                              <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{ student.id }}\">
                                              <input type=\"hidden\" name=\"classname\" id=\"classname\" value=\"{{ student.classname }}\">
                                              <label for=\"studentnumber\">번호</label>
                                              <input type=\"number\" class=\"form-control\" id=\"studentnumber\" name=\"studentnumber\"  value=\"{{ student.studentnumber }}\">
                                              <label for=\"studentname\">이름</label>
                                              <input type=\"text\" class=\"form-control\" id=\"studentname\" name=\"studentname\"  value =\"{{ student.studentname }}\">
                                            </div>
                                         
                                        </div>
                                        <div class=\"modal-footer\">
                                          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">취소</button>
                                          <button type=\"submit\" class=\"btn btn-primary\">수정하기</button>
                                          
                                        </div>
                                         </form>
                                      </div>
                                    </div>
                                  </div>
                                    <td><button type=\"button\" class=\"btn btn-danger\" data-bs-toggle=\"modal\" data-bs-target=\"#exampleModal1{{ loop.index }}\">삭제</button></td>
                                    
                                    <!-- Modal -->
                                  <div class=\"modal fade\" id=\"exampleModal1{{ loop.index }}\" tabindex=\"-2\" aria-labelledby=\"exampleModalLabel1{{ loop.index }}\" aria-hidden=\"true\">
                                    <div class=\"modal-dialog\" >
                                      <div class=\"modal-content\" style=\"background-color:white;\">
                                        <div class=\"modal-header\">
                                          <h5 class=\"modal-title\" id=\"exampleModalLabel\">학생 정보 삭제하기</h5>
                                          
                                          <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                                          
                                        </div>
                                         <form action=\"{{ doc_root }}t-dashboard-student-delete\" method=\"post\">
                                        <div class=\"modal-body\">
                                          
                                        
                                            <div class=\"form-group\">
                                              <input type=\"hidden\" name=\"id\" id=\"id\" value=\"{{ student.id }}\">
                                              <input type=\"hidden\" name=\"classname\" id=\"classname\" value=\"{{ student.classname }}\">
                                              <label for=\"studentnumber\">번호</label>
                                              <input type=\"number\" class=\"form-control\" id=\"studentnumber\" name=\"studentnumber\"  value=\"{{ student.studentnumber }}\">
                                              <label for=\"studentname\">이름</label>
                                              <input type=\"text\" class=\"form-control\" id=\"studentname\" name=\"studentname\"  value =\"{{ student.studentname }}\">
                                            </div>
                                         
                                        </div>
                                        <div class=\"modal-footer\">
                                          <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">취소</button>
                                          <button type=\"submit\" class=\"btn btn-primary\">삭제하기</button>
                                          
                                        </div>
                                         </form>
                                      </div>
                                    </div>
                                  </div>
                                  
                                  </tr>
                                  
                                  
                                  {% endfor %}
                                </tbody>
                              </table>

                              
                              <br>
                              <br>
                              <div class=\"\">
                                <h2>학생 추가</h2>
                                <form action=\"{{ doc_root }}t-dashboard-student-manage\" method=\"post\">
                                  <div class=\"form-group\">
                                    <label for=\"studentnumber\">번호(시스템 설계상 제일 마지막에 추가 됩니다.)</label>
                                    <input type=\"number\" class=\"form-control\" id=\"studentnumber\" name=\"studentnumber\" placeholder=\"학생 번호를 입력하세요. 제일 마지막에 추가됩니다.\">
                                    <label for=\"studentname\">이름</label>
                                    <input type=\"text\" class=\"form-control\" id=\"studentname\" name=\"studentname\" placeholder=\"학생 이름을 입력하세요\">
                                  </div>
                                  <br>
                                  <input type=\"hidden\" name=\"classname\" value=\"{{ classname }}\">

                                  
                                  <button type=\"submit\" class=\"btn btn-success\">추가</button>
                                </form>
                                

                              </div>
                              
                            </div>
  
                        </li>
                         
                        <p>
                         
                    </ul>

                </div>

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
    <script src=\"../src/bootstrap/js/bootstrap.bundle.min.js\"></script>
    <script src=\"../src/plugins/src/perfect-scrollbar/perfect-scrollbar.min.js\"></script>
    <script src=\"../src/plugins/src/mousetrap/mousetrap.min.js\"></script>
    <script src=\"../src/plugins/src/waves/waves.min.js\"></script>
    <script src=\"../layouts/horizontal-light-menu/app.js\"></script>
    <!-- END GLOBAL MANDATORY SCRIPTS -->

    <!-- BEGIN PAGE LEVEL PLUGINS/CUSTOM SCRIPTS -->

 
   



{% endblock %}", "t-dashboard-student-manage.html", "/Users/nm/works/project/fbc/templates/t-dashboard-student-manage.html");
    }
}
