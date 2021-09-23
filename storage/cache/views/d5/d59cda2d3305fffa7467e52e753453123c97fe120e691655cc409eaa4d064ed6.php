<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* base.html */
class __TwigTemplate_c4b34d73bf92aed6d02ec7743979541bf0d591722fc95b630ab75635c51a5ae2 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 1
        $macros["base"] = $this->macros["base"] = $this->loadTemplate("macros/base.html", "base.html", 1)->unwrap();
        // line 2
        echo "
<!DOCTYPE html>
<html lang=\"en\">
  <head>

    <meta charset=\"UTF-8\" />
    <title>CE-sPESS FUTO Center of Excellence</title>
    <base href=\"http://localhost/center_ex/public/\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"shortcut icon\" type=\"image/jpg\" href=\"resources/images/logo.jpg\"/>

    <script src=\"resources/js/bootstrap.min.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/jquery3.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/app.js\" type=\"application/javascript\" defer></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/style.css?cfff\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\" />
    
  </head>

  <body>

    <header class=\"bg-main py-3 px-2\">
      <div class=\"container\">
        <div class=\"d-flex align-items-center\">
          <div>
            <img src=\"resources/images/logo.jpg\" alt=\"Website logo\" width=\"60\" height=\"60\" />
          </div>
          <h1 class=\"mb-0 flex-fill\">
            <a href=\"\" class=\"text-white text-decoration-none fw-bold mx-2 d-none d-sm-inline-block\">
              <span class=\"d-block\">CE-sPESS</span>
              <span class=\"d-block fs-5\">FUTO</span>
            </a>
          </h1>
          <nav>
            <a href=\"#\" id=\"open-nav-drawer-button\" class=\"py-2 px-3 border border-white border-2 bg-transparent text-white rounded d-lg-none\">
              <i class=\"fas fa-bars\"></i>
            </a>
            <div id=\"nav-drawer\" class=\"nav-drawer h-100 w-100 top-0 end-0 end-100\">
              <ul class=\"bg-main h-100 w-75 list-unstyled pb-3 d-lg-flex pb-lg-0\">
                <li class=\"mb-3 text-end d-lg-none\">
                  <button id=\"close-nav-drawer-button\" class=\"border border-0 bg-transparent text-white rounded fs-1 px-2\">
                    <i class=\"fas fa-times\"></i>
                  </button>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <div class=\"position-relative\">
                    <a id=\"open-programmes-button\" href=\"#\" class=\"text-white d-flex p-2 border border-white rounded align-items-center\">
                      <span class=\"flex-fill\">";
        // line 57
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("Programmes"), "html", null, true);
        echo "</span>
                      <span>
                        <i class=\"fas fa-angle-down\"></i>
                      </span>
                    </a>
                    <ul id=\"nav-drawer-programmes\" class=\"nav-drawer-programmes bg-main-varient h-0 mt-lg-2\">
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">";
        // line 64
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_programmes.Procurement_management"), "html", null, true);
        echo "</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">";
        // line 67
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_programmes.Environmental_standards"), "html", null, true);
        echo "</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">";
        // line 70
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans("_programmes.Social_standards"), "html", null, true);
        echo "</a>
                      </li>
                    </ul>
                  </div>
                </li>
                ";
        // line 75
        echo twig_call_macro($macros["base"], "macro_navLink", ["About_us", ""], 75, $context, $this->getSourceContext());
        echo "
                ";
        // line 76
        echo twig_call_macro($macros["base"], "macro_navLink", ["Sign_up", ""], 76, $context, $this->getSourceContext());
        echo "
                ";
        // line 77
        echo twig_call_macro($macros["base"], "macro_navSigninLink", ["I_m_teaching", ""], 77, $context, $this->getSourceContext());
        echo "
                ";
        // line 78
        echo twig_call_macro($macros["base"], "macro_navSigninLink", ["I_m_learning", "student/signin"], 78, $context, $this->getSourceContext());
        echo "
              </ul>
            </div>
          </nav> 
        </div>
      </div>
    </header>

    <main>
      ";
        // line 87
        $this->displayBlock('main', $context, $blocks);
        // line 88
        echo "    </main>

    <footer class=\"position-absolute bottom-0 left-0 bg-main-varient w-100 text-white py-4\">
      <div class=\"container\">
        <div>

          <div>
            <div class=\"fs-3 fw-bold\">CE-sPESS</div>
            <div>Centre of Excellence in Sustainable Procurement, Environment and Social Standards.</div>
          </div>

          <div class=\"row my-4\">

            <div class=\"col-lg-3\">
              <h6>Join us</h6>
              <ul>
                ";
        // line 104
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["Sign_up"], 104, $context, $this->getSourceContext());
        echo "
                ";
        // line 105
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["I_m_learning"], 105, $context, $this->getSourceContext());
        echo "
                ";
        // line 106
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["I_m_teaching"], 106, $context, $this->getSourceContext());
        echo "
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Our programmes</h6>
              <ul>
                ";
        // line 113
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["_programmes.Procurement_management"], 113, $context, $this->getSourceContext());
        echo "
                ";
        // line 114
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["_programmes.Environmental_standards"], 114, $context, $this->getSourceContext());
        echo "
                ";
        // line 115
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["_programmes.Social_standards"], 115, $context, $this->getSourceContext());
        echo "
              </ul>
            </div>
            
            <div class=\"col-lg-3\">
              <h6>Contact us</h6>
              <ul>
                ";
        // line 122
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["Phone: 08037714993"], 122, $context, $this->getSourceContext());
        echo "
                ";
        // line 123
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["Email: cespess@futo.edu.org"], 123, $context, $this->getSourceContext());
        echo "
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Code of conduct</h6>
              <ul>
                ";
        // line 130
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["Terms"], 130, $context, $this->getSourceContext());
        echo "
                ";
        // line 131
        echo twig_call_macro($macros["base"], "macro_footerListItem", ["Privacy policy"], 131, $context, $this->getSourceContext());
        echo "
              </ul>
            </div>

          </div>

          <div class=\"small\">Copyright 2021 &copy; All rights reserved.</div>
        </div>
      </div>
    </footer>
        
  </body>
</html>



";
    }

    // line 87
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
    }

    public function getTemplateName()
    {
        return "base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  246 => 87,  225 => 131,  221 => 130,  211 => 123,  207 => 122,  197 => 115,  193 => 114,  189 => 113,  179 => 106,  175 => 105,  171 => 104,  153 => 88,  151 => 87,  139 => 78,  135 => 77,  131 => 76,  127 => 75,  119 => 70,  113 => 67,  107 => 64,  97 => 57,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% import 'macros/base.html' as base %}

<!DOCTYPE html>
<html lang=\"en\">
  <head>

    <meta charset=\"UTF-8\" />
    <title>CE-sPESS FUTO Center of Excellence</title>
    <base href=\"http://localhost/center_ex/public/\" />
    <meta http-equiv=\"X-UA-Compatible\" content=\"IE=edge\" />
    <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\" />

    <link rel=\"shortcut icon\" type=\"image/jpg\" href=\"resources/images/logo.jpg\"/>

    <script src=\"resources/js/bootstrap.min.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/jquery3.js\" type=\"application/javascript\" defer></script>
    <script src=\"resources/js/app.js\" type=\"application/javascript\" defer></script>

    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/bootstrap.min.css\" />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"resources/css/style.css?cfff\" />

    <link rel=\"preconnect\" href=\"https://fonts.googleapis.com\" />
    <link rel=\"preconnect\" href=\"https://fonts.gstatic.com\" crossorigin />
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://fonts.googleapis.com/css2?family=Nunito:wght@400;700&display=swap\" /> 
    <link rel=\"stylesheet\" type=\"text/css\" href=\"https://pro.fontawesome.com/releases/v5.10.0/css/all.css\" integrity=\"sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p\" crossorigin=\"anonymous\" />
    
  </head>

  <body>

    <header class=\"bg-main py-3 px-2\">
      <div class=\"container\">
        <div class=\"d-flex align-items-center\">
          <div>
            <img src=\"resources/images/logo.jpg\" alt=\"Website logo\" width=\"60\" height=\"60\" />
          </div>
          <h1 class=\"mb-0 flex-fill\">
            <a href=\"\" class=\"text-white text-decoration-none fw-bold mx-2 d-none d-sm-inline-block\">
              <span class=\"d-block\">CE-sPESS</span>
              <span class=\"d-block fs-5\">FUTO</span>
            </a>
          </h1>
          <nav>
            <a href=\"#\" id=\"open-nav-drawer-button\" class=\"py-2 px-3 border border-white border-2 bg-transparent text-white rounded d-lg-none\">
              <i class=\"fas fa-bars\"></i>
            </a>
            <div id=\"nav-drawer\" class=\"nav-drawer h-100 w-100 top-0 end-0 end-100\">
              <ul class=\"bg-main h-100 w-75 list-unstyled pb-3 d-lg-flex pb-lg-0\">
                <li class=\"mb-3 text-end d-lg-none\">
                  <button id=\"close-nav-drawer-button\" class=\"border border-0 bg-transparent text-white rounded fs-1 px-2\">
                    <i class=\"fas fa-times\"></i>
                  </button>
                </li>
                <li class=\"px-2 mb-3 mb-lg-0\">
                  <div class=\"position-relative\">
                    <a id=\"open-programmes-button\" href=\"#\" class=\"text-white d-flex p-2 border border-white rounded align-items-center\">
                      <span class=\"flex-fill\">{{ 'Programmes'|trans }}</span>
                      <span>
                        <i class=\"fas fa-angle-down\"></i>
                      </span>
                    </a>
                    <ul id=\"nav-drawer-programmes\" class=\"nav-drawer-programmes bg-main-varient h-0 mt-lg-2\">
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">{{ '_programmes.Procurement_management'|trans }}</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">{{ '_programmes.Environmental_standards'|trans }}</a>
                      </li>
                      <li>
                        <a href=\"\" class=\"d-block text-white py-2 pe-4\">{{ '_programmes.Social_standards'|trans }}</a>
                      </li>
                    </ul>
                  </div>
                </li>
                {{ base.navLink('About_us', '') }}
                {{ base.navLink('Sign_up', '') }}
                {{ base.navSigninLink('I_m_teaching', '') }}
                {{ base.navSigninLink('I_m_learning', 'student/signin') }}
              </ul>
            </div>
          </nav> 
        </div>
      </div>
    </header>

    <main>
      {% block main %}{% endblock %}
    </main>

    <footer class=\"position-absolute bottom-0 left-0 bg-main-varient w-100 text-white py-4\">
      <div class=\"container\">
        <div>

          <div>
            <div class=\"fs-3 fw-bold\">CE-sPESS</div>
            <div>Centre of Excellence in Sustainable Procurement, Environment and Social Standards.</div>
          </div>

          <div class=\"row my-4\">

            <div class=\"col-lg-3\">
              <h6>Join us</h6>
              <ul>
                {{ base.footerListItem('Sign_up') }}
                {{ base.footerListItem('I_m_learning') }}
                {{ base.footerListItem('I_m_teaching') }}
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Our programmes</h6>
              <ul>
                {{ base.footerListItem('_programmes.Procurement_management') }}
                {{ base.footerListItem('_programmes.Environmental_standards') }}
                {{ base.footerListItem('_programmes.Social_standards') }}
              </ul>
            </div>
            
            <div class=\"col-lg-3\">
              <h6>Contact us</h6>
              <ul>
                {{ base.footerListItem('Phone: 08037714993') }}
                {{ base.footerListItem('Email: cespess@futo.edu.org') }}
              </ul>
            </div>

            <div class=\"col-lg-3\">
              <h6>Code of conduct</h6>
              <ul>
                {{ base.footerListItem('Terms') }}
                {{ base.footerListItem('Privacy policy') }}
              </ul>
            </div>

          </div>

          <div class=\"small\">Copyright 2021 &copy; All rights reserved.</div>
        </div>
      </div>
    </footer>
        
  </body>
</html>



", "base.html", "C:\\Users\\Jasper\\Documents\\PHPProjects\\Center_eX\\src\\View\\base.html");
    }
}
