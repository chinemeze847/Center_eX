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

/* index.html */
class __TwigTemplate_e9f80340fe718cb065a4b356a2a49b858b2e5258c8c0b28f1ef129b644e63880 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'main' => [$this, 'block_main'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 2
        return "base.html";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 3
        $macros["index"] = $this->macros["index"] = $this->loadTemplate("macros/index.html", "index.html", 3)->unwrap();
        // line 2
        $this->parent = $this->loadTemplate("base.html", "index.html", 2);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
    }

    // line 6
    public function block_main($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 7
        echo "  
  <section class=\"bg-main-grad\">
    <div class=\"container\">
      <div class=\"row py-5 align-items-center\">
        <div class=\"col-md-8\">
          <h2 class=\"fw-bold fs-1 text-white mb-4\">Centre of Excellence in <br /> Sustainable Procurement, Environment and Social Standards.</h2>
          <a href=\"\" class=\"d-inline-block bg-white text-sub-main px-4 py-3 rounded fw-bold\">Enroll now</a>
        </div>
        <div class=\"d-none d-md-block col-md-4\">
          <img src=\"resources/images/learning-animate.svg\" alt=\"\" widtkh=\"200\" height=\"300\" class=\"d-block w-100\" />
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class=\"container\">
      <div class=\"py-5\">
        <h3 class=\"fw-bold\">Programmes</h3>
        <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
          ";
        // line 28
        echo twig_call_macro($macros["index"], "macro_programmesListItem", ["Procurement Management", "", "procurement.jpg"], 28, $context, $this->getSourceContext());
        echo "
          ";
        // line 29
        echo twig_call_macro($macros["index"], "macro_programmesListItem", ["Environmental Standards", "", "environmental.jpg"], 29, $context, $this->getSourceContext());
        echo "
          ";
        // line 30
        echo twig_call_macro($macros["index"], "macro_programmesListItem", ["Social Standards", "", "social.jpg"], 30, $context, $this->getSourceContext());
        echo "
        </ul>
      </div>
    </div>
  </section>

  <section class=\"bg-main-gradx\">
    <div class=\"container\">
      <div class=\"py-5\">
        <h3 class=\"fw-bold\">Learning tracks</h3>
        <ul class=\"list-unstyled row justify-content-center\">
          ";
        // line 41
        echo twig_call_macro($macros["index"], "macro_tracksListItem", ["A", "1 - 3 weeks", "", "a.jpg"], 41, $context, $this->getSourceContext());
        echo "
          ";
        // line 42
        echo twig_call_macro($macros["index"], "macro_tracksListItem", ["B", "9 months", "", "b.jpg"], 42, $context, $this->getSourceContext());
        echo "
          ";
        // line 43
        echo twig_call_macro($macros["index"], "macro_tracksListItem", ["C", "12 months", "", "c.jpg"], 43, $context, $this->getSourceContext());
        echo "
          ";
        // line 44
        echo twig_call_macro($macros["index"], "macro_tracksListItem", ["D", "18 months", "", "d.jpg"], 44, $context, $this->getSourceContext());
        echo "
          ";
        // line 45
        echo twig_call_macro($macros["index"], "macro_tracksListItem", ["E", "4 years", "", "e.jpg"], 45, $context, $this->getSourceContext());
        echo "
        </ul>
      </div>
    </div>
  </section>

  <section>
    <div class=\"container\">
      <div class=\"py-5\">
        <h3 class=\"fw-bold\">Our team</h3>
        <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
          ";
        // line 56
        echo twig_call_macro($macros["index"], "macro_teamListItem", ["Professor Gloria Chukwudebe", "Director CEs-PESS FUTO", "", "director.jpeg"], 56, $context, $this->getSourceContext());
        echo "
          ";
        // line 57
        echo twig_call_macro($macros["index"], "macro_teamListItem", ["Prof. (Mrs) B.U. Dike", "Deputy Director of Procurement Management", "", "procurement.jpg"], 57, $context, $this->getSourceContext());
        echo "
          ";
        // line 58
        echo twig_call_macro($macros["index"], "macro_teamListItem", ["Prof Chris Nwoko", "Deputy Director of Environmental Standards", "", "environmental.jpg"], 58, $context, $this->getSourceContext());
        echo "
          ";
        // line 59
        echo twig_call_macro($macros["index"], "macro_teamListItem", ["Prof Gloria N. Okwu", "Deputy Director of Social Standards", "", "social.jpg"], 59, $context, $this->getSourceContext());
        echo "
        </ul>
      </div>
    </div>
  </section>

  <section>
    <div class=\"container\">
      <div class=\"py-0\">
        <h3 class=\"fw-bold\">Our partners</h3>
        <ul class=\"list-unstyled d-flex flex-wrap align-items-stretch\">
          ";
        // line 70
        echo twig_call_macro($macros["index"], "macro_partnersListItem", ["Federal University of Technology, Owerri", "futo.jpg"], 70, $context, $this->getSourceContext());
        echo "
          ";
        // line 71
        echo twig_call_macro($macros["index"], "macro_partnersListItem", ["Nigeria University Coperation", "nuc.png"], 71, $context, $this->getSourceContext());
        echo "
          ";
        // line 72
        echo twig_call_macro($macros["index"], "macro_partnersListItem", ["World bank group", "wbg.jpg"], 72, $context, $this->getSourceContext());
        echo "
        </ul>
      </div>
    </div>
  </section>
  
";
    }

    public function getTemplateName()
    {
        return "index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  162 => 72,  158 => 71,  154 => 70,  140 => 59,  136 => 58,  132 => 57,  128 => 56,  114 => 45,  110 => 44,  106 => 43,  102 => 42,  98 => 41,  84 => 30,  80 => 29,  76 => 28,  53 => 7,  49 => 6,  44 => 2,  42 => 3,  35 => 2,);
    }

    public function getSourceContext()
    {
        return new Source("
{% extends \"base.html\" %}
{% import 'macros/index.html' as index %}


{% block main %}
  
  <section class=\"bg-main-grad\">
    <div class=\"container\">
      <div class=\"row py-5 align-items-center\">
        <div class=\"col-md-8\">
          <h2 class=\"fw-bold fs-1 text-white mb-4\">Centre of Excellence in <br /> Sustainable Procurement, Environment and Social Standards.</h2>
          <a href=\"\" class=\"d-inline-block bg-white text-sub-main px-4 py-3 rounded fw-bold\">Enroll now</a>
        </div>
        <div class=\"d-none d-md-block col-md-4\">
          <img src=\"resources/images/learning-animate.svg\" alt=\"\" widtkh=\"200\" height=\"300\" class=\"d-block w-100\" />
        </div>
      </div>
    </div>
  </section>


  <section>
    <div class=\"container\">
      <div class=\"py-5\">
        <h3 class=\"fw-bold\">Programmes</h3>
        <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
          {{ index.programmesListItem('Procurement Management', '', 'procurement.jpg') }}
          {{ index.programmesListItem('Environmental Standards', '', 'environmental.jpg') }}
          {{ index.programmesListItem('Social Standards', '', 'social.jpg') }}
        </ul>
      </div>
    </div>
  </section>

  <section class=\"bg-main-gradx\">
    <div class=\"container\">
      <div class=\"py-5\">
        <h3 class=\"fw-bold\">Learning tracks</h3>
        <ul class=\"list-unstyled row justify-content-center\">
          {{ index.tracksListItem('A', '1 - 3 weeks', '', 'a.jpg') }}
          {{ index.tracksListItem('B', '9 months', '', 'b.jpg') }}
          {{ index.tracksListItem('C', '12 months', '', 'c.jpg') }}
          {{ index.tracksListItem('D', '18 months', '', 'd.jpg') }}
          {{ index.tracksListItem('E', '4 years', '', 'e.jpg') }}
        </ul>
      </div>
    </div>
  </section>

  <section>
    <div class=\"container\">
      <div class=\"py-5\">
        <h3 class=\"fw-bold\">Our team</h3>
        <ul class=\"list-unstyled row justify-content-center align-items-stretch\">
          {{ index.teamListItem('Professor Gloria Chukwudebe', 'Director CEs-PESS FUTO', '', 'director.jpeg') }}
          {{ index.teamListItem('Prof. (Mrs) B.U. Dike', 'Deputy Director of Procurement Management', '', 'procurement.jpg') }}
          {{ index.teamListItem('Prof Chris Nwoko', 'Deputy Director of Environmental Standards', '', 'environmental.jpg') }}
          {{ index.teamListItem('Prof Gloria N. Okwu', 'Deputy Director of Social Standards', '', 'social.jpg') }}
        </ul>
      </div>
    </div>
  </section>

  <section>
    <div class=\"container\">
      <div class=\"py-0\">
        <h3 class=\"fw-bold\">Our partners</h3>
        <ul class=\"list-unstyled d-flex flex-wrap align-items-stretch\">
          {{ index.partnersListItem('Federal University of Technology, Owerri', 'futo.jpg') }}
          {{ index.partnersListItem('Nigeria University Coperation', 'nuc.png') }}
          {{ index.partnersListItem('World bank group', 'wbg.jpg') }}
        </ul>
      </div>
    </div>
  </section>
  
{% endblock %}


    ", "index.html", "C:\\Users\\Jasper\\Documents\\PHPProjects\\Center_eX\\src\\View\\index.html");
    }
}
