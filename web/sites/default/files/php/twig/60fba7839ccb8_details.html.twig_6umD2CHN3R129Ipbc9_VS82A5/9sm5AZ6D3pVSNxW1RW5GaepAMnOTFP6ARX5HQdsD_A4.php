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

/* core/themes/bartik/templates/classy/form/details.html.twig */
class __TwigTemplate_d91359a57fac97bfaf063409d8b3205c33784681f8e46139cc37de0b4c15816f extends \Twig\Template
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
        $this->sandbox = $this->env->getExtension('\Twig\Extension\SandboxExtension');
        $this->checkSecurity();
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        echo "<details";
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["attributes"] ?? null), 18, $this->source), "html", null, true);
        echo ">";
        // line 19
        if (($context["title"] ?? null)) {
            // line 21
            $context["summary_classes"] = [0 => ((            // line 22
($context["required"] ?? null)) ? ("js-form-required") : ("")), 1 => ((            // line 23
($context["required"] ?? null)) ? ("form-required") : (""))];
            // line 26
            echo "    <summary";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, ($context["summary_attributes"] ?? null), "addClass", [0 => ($context["summary_classes"] ?? null)], "method", false, false, true, 26), 26, $this->source), "html", null, true);
            echo ">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["title"] ?? null), 26, $this->source), "html", null, true);
            echo "</summary>";
        }
        // line 28
        echo "<div class=\"details-wrapper\">
    ";
        // line 29
        if (($context["errors"] ?? null)) {
            // line 30
            echo "      <div class=\"form-item--error-message\">
        <strong>";
            // line 31
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["errors"] ?? null), 31, $this->source), "html", null, true);
            echo "</strong>
      </div>
    ";
        }
        // line 34
        if (($context["description"] ?? null)) {
            // line 35
            echo "<div class=\"details-description\">";
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["description"] ?? null), 35, $this->source), "html", null, true);
            echo "</div>";
        }
        // line 37
        if (($context["children"] ?? null)) {
            // line 38
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["children"] ?? null), 38, $this->source), "html", null, true);
        }
        // line 40
        if (($context["value"] ?? null)) {
            // line 41
            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["value"] ?? null), 41, $this->source), "html", null, true);
        }
        // line 43
        echo "</div>
</details>
";
    }

    public function getTemplateName()
    {
        return "core/themes/bartik/templates/classy/form/details.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  87 => 43,  84 => 41,  82 => 40,  79 => 38,  77 => 37,  72 => 35,  70 => 34,  64 => 31,  61 => 30,  59 => 29,  56 => 28,  49 => 26,  47 => 23,  46 => 22,  45 => 21,  43 => 19,  39 => 18,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/bartik/templates/classy/form/details.html.twig", "/opt/web/core/themes/bartik/templates/classy/form/details.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("if" => 19, "set" => 21);
        static $filters = array("escape" => 18);
        static $functions = array();

        try {
            $this->sandbox->checkSecurity(
                ['if', 'set'],
                ['escape'],
                []
            );
        } catch (SecurityError $e) {
            $e->setSourceContext($this->source);

            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            }

            throw $e;
        }

    }
}
