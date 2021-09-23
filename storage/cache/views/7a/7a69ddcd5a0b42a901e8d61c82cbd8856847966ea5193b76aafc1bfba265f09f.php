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

/* macros/index.html */
class __TwigTemplate_2cf4411be30ead7204b9a035a9ebaec3b9801781ddf9c99e42f6b463e0a34575 extends Template
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
        echo "
";
        // line 10
        echo "
";
        // line 23
        echo "
";
        // line 33
        echo "
";
        // line 39
        echo "



";
    }

    // line 2
    public function macro_programmesListItem($__name__ = null, $__link__ = null, $__img__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "link" => $__link__,
            "img" => $__img__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "<li class=\"col-md-4 my-4\">
  <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" class=\"d-block shadow-sm rounded h-100 position-relative\">
    <img src=\"resources/images/programmes/";
            // line 5
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
    <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">";
            // line 6
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
  </a>
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 11
    public function macro_tracksListItem($__name__ = null, $__duration__ = null, $__link__ = null, $__img__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "duration" => $__duration__,
            "link" => $__link__,
            "img" => $__img__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 12
            echo "<li class=\"col-md-4 my-4\">
  <a href=\"";
            // line 13
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" class=\"d-block shadow-sm rounded bg-white\">
    <img src=\"resources/images/tracks/";
            // line 14
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
    <div class=\"p-2 pb-0 fs-2 text-body\">Track ";
            // line 15
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
    <div class=\"p-2 text-secondary\">
      <i class=\"far fa-clock\"></i>
      <span>";
            // line 18
            echo twig_escape_filter($this->env, ($context["duration"] ?? null), "html", null, true);
            echo "</span>
    </div>
  </a>
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 24
    public function macro_teamListItem($__name__ = null, $__title__ = null, $__link__ = null, $__img__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "title" => $__title__,
            "link" => $__link__,
            "img" => $__img__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 25
            echo "<li class=\"col-md-6 col-xl-3 my-4\">
  <a href=\"";
            // line 26
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" class=\"d-block shadow-sm rounded h-100\">
    <img src=\"resources/images/team/";
            // line 27
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
    <div class=\"p-2 pb-0 fw-bold text-body fs-5\">";
            // line 28
            echo twig_escape_filter($this->env, ($context["title"] ?? null), "html", null, true);
            echo "</div>
    <div class=\"p-2 text-secondary\">";
            // line 29
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "</div>
  </a>
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 34
    public function macro_partnersListItem($__name__ = null, $__img__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "img" => $__img__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 35
            echo "<li class=\"\">
  <img src=\"resources/images/partners/";
            // line 36
            echo twig_escape_filter($this->env, ($context["img"] ?? null), "html", null, true);
            echo "\" alt=\"";
            echo twig_escape_filter($this->env, ($context["name"] ?? null), "html", null, true);
            echo "\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/index.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  204 => 36,  201 => 35,  187 => 34,  174 => 29,  170 => 28,  166 => 27,  162 => 26,  159 => 25,  143 => 24,  129 => 18,  123 => 15,  119 => 14,  115 => 13,  112 => 12,  96 => 11,  83 => 6,  79 => 5,  75 => 4,  72 => 3,  57 => 2,  49 => 39,  46 => 33,  43 => 23,  40 => 10,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro programmesListItem(name, link, img) %}
<li class=\"col-md-4 my-4\">
  <a href=\"{{ link }}\" class=\"d-block shadow-sm rounded h-100 position-relative\">
    <img src=\"resources/images/programmes/{{ img }}\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded\" />
    <div class=\"w-100 p-2 fw-bold fs-4 position-absolute bottom-0 text-white bg-blur rounded-bottom\">{{ name }}</div>
  </a>
</li>
{% endmacro %}

{% macro tracksListItem(name, duration, link, img) %}
<li class=\"col-md-4 my-4\">
  <a href=\"{{ link }}\" class=\"d-block shadow-sm rounded bg-white\">
    <img src=\"resources/images/tracks/{{ img }}\" alt=\"\" width=\"80\" height=\"200\" class=\"d-block w-100 rounded-top\" />
    <div class=\"p-2 pb-0 fs-2 text-body\">Track {{ name }}</div>
    <div class=\"p-2 text-secondary\">
      <i class=\"far fa-clock\"></i>
      <span>{{ duration }}</span>
    </div>
  </a>
</li>
{% endmacro %}

{% macro teamListItem(name, title, link, img) %}
<li class=\"col-md-6 col-xl-3 my-4\">
  <a href=\"{{ link }}\" class=\"d-block shadow-sm rounded h-100\">
    <img src=\"resources/images/team/{{ img }}\" alt=\"\" width=\"80\" height=\"300\" class=\"d-block w-100 rounded-top\" />
    <div class=\"p-2 pb-0 fw-bold text-body fs-5\">{{ title }}</div>
    <div class=\"p-2 text-secondary\">{{ name }}</div>
  </a>
</li>
{% endmacro %}

{% macro partnersListItem(name, img) %}
<li class=\"\">
  <img src=\"resources/images/partners/{{ img }}\" alt=\"{{ name }}\" width=\"100\" height=\"100\" class=\"d-block rounded bg-white me-2 mb-2\" />
</li>
{% endmacro %}




", "macros/index.html", "C:\\Users\\Jasper\\Documents\\PHPProjects\\Center_eX\\src\\View\\macros\\index.html");
    }
}
