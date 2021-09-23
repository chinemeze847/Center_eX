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

/* macros/base.html */
class __TwigTemplate_a318ff93df2dcf52e628909797852760486a26b7d21a34c5f80e74397467bf04 extends Template
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
        // line 7
        echo "
";
        // line 13
        echo "
";
        // line 19
        echo "



";
    }

    // line 2
    public function macro_footerListItem($__name__ = null, $__link__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "link" => $__link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 3
            echo "<li>
  <a href=\"";
            // line 4
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" class=\"text-white\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["name"] ?? null)), "html", null, true);
            echo "</a>
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 8
    public function macro_navLink($__name__ = null, $__link__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "link" => $__link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 9
            echo "<li class=\"px-2 mb-3 mb-lg-0\">
  <a href=\"";
            // line 10
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" class=\"text-white d-block p-2 border border-white rounded\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["name"] ?? null)), "html", null, true);
            echo "</a>
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    // line 14
    public function macro_navSigninLink($__name__ = null, $__link__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "name" => $__name__,
            "link" => $__link__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start();
        try {
            // line 15
            echo "<li class=\"px-2 mb-3 mb-lg-0\">
  <a href=\"";
            // line 16
            echo twig_escape_filter($this->env, ($context["link"] ?? null), "html", null, true);
            echo "\" class=\"text-white d-block p-2 border bg-sub-main rounded\">";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(($context["name"] ?? null)), "html", null, true);
            echo "</a>
</li>
";

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "macros/base.html";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  133 => 16,  130 => 15,  116 => 14,  102 => 10,  99 => 9,  85 => 8,  71 => 4,  68 => 3,  54 => 2,  46 => 19,  43 => 13,  40 => 7,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
{% macro footerListItem(name, link) %}
<li>
  <a href=\"{{ link }}\" class=\"text-white\">{{ name|trans }}</a>
</li>
{% endmacro %}

{% macro navLink(name, link) %}
<li class=\"px-2 mb-3 mb-lg-0\">
  <a href=\"{{ link }}\" class=\"text-white d-block p-2 border border-white rounded\">{{ name|trans }}</a>
</li>
{% endmacro %}

{% macro navSigninLink(name, link) %}
<li class=\"px-2 mb-3 mb-lg-0\">
  <a href=\"{{ link }}\" class=\"text-white d-block p-2 border bg-sub-main rounded\">{{ name|trans }}</a>
</li>
{% endmacro %}




", "macros/base.html", "C:\\Users\\Jasper\\Documents\\PHPProjects\\Center_eX\\src\\View\\macros\\base.html");
    }
}
