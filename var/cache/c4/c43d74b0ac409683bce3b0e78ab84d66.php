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

/* t-admin.html */
class __TwigTemplate_449cc5a4742b3d8bbad848c057fa91e1 extends Template
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
     

    


    

    <div class=\"auth-container d-flex\">

        <div class=\"container mx-auto align-self-center\">
    
            <div class=\"row\">
    
                <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                    <div class=\"card mt-3 mb-3\">
                        <div class=\"card-body\">
    
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    
                                    <h2>관리자 로그인</h2>
                                    ";
        // line 72
        if (($context["errors"] ?? null)) {
            // line 73
            yield "                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        ";
            // line 74
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["errors"] ?? null), "html", null, true);
            yield "
                                    </div>
                                    ";
        }
        // line 77
        yield "                                    ";
        if (($context["success"] ?? null)) {
            // line 78
            yield "                                    <div class=\"alert alert-success\" role=\"alert\">
                                        ";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["success"] ?? null), "html", null, true);
            yield "
                                    </div>
                                    ";
        }
        // line 82
        yield "                                </div>

                                <form action=\"";
        // line 84
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-admin\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\" >아이디</label>
                                        <input type=\"text\" class=\"form-control\" id=\"userid\" name=\"userid\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">비밀번호</label>
                                        <input type=\"password\" class=\"form-control\" id=\"
                                        password\" name=\"password\">
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button type=\"submit\" class=\"btn btn-secondary w-100\">입장하기</button>
                                    </div>
                                </div>
                            </form>
                            
    
                                

                                <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\">아직 계정이 없으신가요?<a href=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["doc_root"] ?? null), "html", null, true);
        yield "t-signin\" class=\"text-warning\">가입하기</a></p>
                                    </div>
                                </div>

                                <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\"><a href=\"/\" class=\"text-warning\">홈으로 가기</a></p>
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

 

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   
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
</html>






";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "t-admin.html";
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
        return array (  169 => 112,  138 => 84,  134 => 82,  128 => 79,  125 => 78,  122 => 77,  116 => 74,  113 => 73,  111 => 72,  38 => 1,);
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
     

    


    

    <div class=\"auth-container d-flex\">

        <div class=\"container mx-auto align-self-center\">
    
            <div class=\"row\">
    
                <div class=\"col-xxl-4 col-xl-5 col-lg-5 col-md-8 col-12 d-flex flex-column align-self-center mx-auto\">
                    <div class=\"card mt-3 mb-3\">
                        <div class=\"card-body\">
    
                            <div class=\"row\">
                                <div class=\"col-md-12 mb-3\">
                                    
                                    <h2>관리자 로그인</h2>
                                    {% if errors %}
                                    <div class=\"alert alert-danger\" role=\"alert\">
                                        {{ errors }}
                                    </div>
                                    {% endif %}
                                    {% if success %}
                                    <div class=\"alert alert-success\" role=\"alert\">
                                        {{ success }}
                                    </div>
                                    {% endif %}
                                </div>

                                <form action=\"{{ doc_root }}t-admin\" method=\"post\">
                                <div class=\"col-md-12\">
                                    <div class=\"mb-3\">
                                        <label class=\"form-label\" >아이디</label>
                                        <input type=\"text\" class=\"form-control\" id=\"userid\" name=\"userid\">
                                    </div>
                                </div>
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <label class=\"form-label\">비밀번호</label>
                                        <input type=\"password\" class=\"form-control\" id=\"
                                        password\" name=\"password\">
                                    </div>
                                </div>
                                
                                
                                <div class=\"col-12\">
                                    <div class=\"mb-4\">
                                        <button type=\"submit\" class=\"btn btn-secondary w-100\">입장하기</button>
                                    </div>
                                </div>
                            </form>
                            
    
                                

                                <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\">아직 계정이 없으신가요?<a href=\"{{ doc_root }}t-signin\" class=\"text-warning\">가입하기</a></p>
                                    </div>
                                </div>

                                <div class=\"col-12\">
                                    <div class=\"text-center\">
                                        <p class=\"mb-0\"><a href=\"/\" class=\"text-warning\">홈으로 가기</a></p>
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

 

    <!-- BEGIN GLOBAL MANDATORY SCRIPTS -->
   
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
</html>






", "t-admin.html", "/Users/nm/works/project/fbc/templates/t-admin.html");
    }
}
