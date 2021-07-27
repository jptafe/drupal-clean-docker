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

/* core/themes/olivero/templates/navigation/menu--primary-menu.html.twig */
class __TwigTemplate_6d5957a22620b1906bca11443d247d0cc1d9624a21bfde16c249e8250e61ab0a extends \Twig\Template
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
        // line 23
        $macros["menus"] = $this->macros["menus"] = $this;
        // line 24
        echo "
";
        // line 29
        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "menu"], "method", false, false, true, 29);
        // line 30
        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [($context["items"] ?? null), ($context["attributes"] ?? null), 0], 30, $context, $this->getSourceContext()));
        echo "

";
    }

    // line 32
    public function macro_menu_links($__items__ = null, $__attributes__ = null, $__menu_level__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "items" => $__items__,
            "attributes" => $__attributes__,
            "menu_level" => $__menu_level__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        ob_start(function () { return ''; });
        try {
            // line 33
            echo "  ";
            $context["primary_nav_level"] = ("primary-nav__menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 34
            echo "  ";
            $context["drupal_selector_primary_nav_level"] = ("primary-nav-menu--level-" . (($context["menu_level"] ?? null) + 1));
            // line 35
            echo "  ";
            $macros["menus"] = $this;
            // line 36
            echo "  ";
            if (($context["items"] ?? null)) {
                // line 37
                echo "
    ";
                // line 42
                echo "    ";
                if ((($context["menu_level"] ?? null) == 1)) {
                    // line 43
                    echo "      <span data-drupal-selector=\"primary-nav-menu-🥕\" class=\"primary-nav__menu-🥕\"></span>
    ";
                }
                // line 45
                echo "
    <ul ";
                // line 46
                echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [0 => "primary-nav__menu", 1 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 46), "setAttribute", [0 => "data-drupal-selector", 1 => ($context["drupal_selector_primary_nav_level"] ?? null)], "method", false, false, true, 46), 46, $this->source), "html", null, true);
                echo ">
      ";
                // line 47
                $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "removeClass", [0 => ($context["primary_nav_level"] ?? null)], "method", false, false, true, 47);
                // line 48
                echo "      ";
                $context['_parent'] = $context;
                $context['_seq'] = twig_ensure_traversable(($context["items"] ?? null));
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
                foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                    // line 49
                    echo "
        ";
                    // line 50
                    if ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "isRouted", [], "any", false, false, true, 50) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 50), "routeName", [], "any", false, false, true, 50) == "<nolink>"))) {
                        // line 51
                        echo "          ";
                        $context["menu_item_type"] = "nolink";
                        // line 52
                        echo "        ";
                    } elseif ((twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "isRouted", [], "any", false, false, true, 52) && (twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 52), "routeName", [], "any", false, false, true, 52) == "<button>"))) {
                        // line 53
                        echo "          ";
                        $context["menu_item_type"] = "button";
                        // line 54
                        echo "        ";
                    } else {
                        // line 55
                        echo "          ";
                        $context["menu_item_type"] = "link";
                        // line 56
                        echo "        ";
                    }
                    // line 57
                    echo "
        ";
                    // line 58
                    $context["item_classes"] = [0 => "primary-nav__menu-item", 1 => ("primary-nav__menu-item--" . $this->sandbox->ensureToStringAllowed(                    // line 60
($context["menu_item_type"] ?? null), 60, $this->source)), 2 => ("primary-nav__menu-item--level-" . (                    // line 61
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 62
$context["item"], "in_active_trail", [], "any", false, false, true, 62)) ? ("primary-nav__menu-item--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 63
$context["item"], "below", [], "any", false, false, true, 63)) ? ("primary-nav__menu-item--has-children") : (""))];
                    // line 66
                    echo "
        ";
                    // line 67
                    $context["link_classes"] = [0 => "primary-nav__menu-link", 1 => ("primary-nav__menu-link--" . $this->sandbox->ensureToStringAllowed(                    // line 69
($context["menu_item_type"] ?? null), 69, $this->source)), 2 => ("primary-nav__menu-link--level-" . (                    // line 70
($context["menu_level"] ?? null) + 1)), 3 => ((twig_get_attribute($this->env, $this->source,                     // line 71
$context["item"], "in_active_trail", [], "any", false, false, true, 71)) ? ("primary-nav__menu-link--active-trail") : ("")), 4 => ((twig_get_attribute($this->env, $this->source,                     // line 72
$context["item"], "below", [], "any", false, false, true, 72)) ? ("primary-nav__menu-link--has-children") : (""))];
                    // line 75
                    echo "
        <li";
                    // line 76
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 76), "addClass", [0 => ($context["item_classes"] ?? null)], "method", false, false, true, 76), "setAttribute", [0 => "data-drupal-selector", 1 => ((twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 76)) ? ("primary-nav-menu-item-has-children") : (false))], "method", false, false, true, 76), 76, $this->source), "html", null, true);
                    echo ">
          ";
                    // line 82
                    echo "          ";
                    $context["aria_id"] = \Drupal\Component\Utility\Html::getId((($this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 82), 82, $this->source) . "-submenu-") . $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["loop"], "index", [], "any", false, false, true, 82), 82, $this->source)));
                    // line 83
                    echo "          ";
                    ob_start(function () { return ''; });
                    // line 84
                    echo "            <span class=\"primary-nav__menu-link-inner\">";
                    echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 84), 84, $this->source), "html", null, true);
                    echo "</span>
          ";
                    $context["link_title"] = ('' === $tmp = ob_get_clean()) ? '' : new Markup($tmp, $this->env->getCharset());
                    // line 86
                    echo "
          ";
                    // line 87
                    if (((($context["menu_item_type"] ?? null) == "link") || (($context["menu_item_type"] ?? null) == "nolink"))) {
                        // line 88
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink((((($context["menu_item_type"] ?? null) == "link")) ? (($context["link_title"] ?? null)) : (twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 88))), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 88), 88, $this->source), ["class" =>                         // line 89
($context["link_classes"] ?? null), "data-drupal-selector" => "primary-nav-menu-link-has-children"]), "html", null, true);
                        // line 92
                        echo "

            ";
                        // line 94
                        if (twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 94)) {
                            // line 95
                            echo "              ";
                            // line 100
                            echo "              ";
                            // line 101
                            $context["toggle_button_attributes"] = $this->extensions['Drupal\Core\Template\TwigExtension']->createAttribute(["class" => "primary-nav__button-toggle", "data-drupal-selector" => "primary-nav-submenu-toggle-button", "aria-controls" =>                             // line 104
($context["aria_id"] ?? null), "aria-expanded" => "false", "aria-hidden" => "true", "tabindex" => "-1"]);
                            // line 110
                            echo "              <button";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->sandbox->ensureToStringAllowed(($context["toggle_button_attributes"] ?? null), 110, $this->source), "html", null, true);
                            echo ">
                <span class=\"visually-hidden\">";
                            // line 111
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("@title sub-navigation", ["@title" => twig_get_attribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, true, 111)]));
                            echo "</span>
                <span class=\"icon--menu-toggle\"></span>
              </button>

              ";
                            // line 115
                            $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? null)], "method", false, false, true, 115);
                            // line 116
                            echo "              ";
                            echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 116), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 116, $context, $this->getSourceContext()));
                            echo "
            ";
                        }
                        // line 118
                        echo "
          ";
                    } elseif ((                    // line 119
($context["menu_item_type"] ?? null) == "button")) {
                        // line 120
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $this->extensions['Drupal\Core\Template\TwigExtension']->getLink($this->sandbox->ensureToStringAllowed(($context["link_title"] ?? null), 120, $this->source), $this->sandbox->ensureToStringAllowed(twig_get_attribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, true, 120), 120, $this->source), ["class" =>                         // line 121
($context["link_classes"] ?? null), "aria-controls" => ((twig_get_attribute($this->env, $this->source,                         // line 122
$context["item"], "below", [], "any", false, false, true, 122)) ? (($context["aria_id"] ?? null)) : (false)), "aria-expanded" => ((twig_get_attribute($this->env, $this->source,                         // line 123
$context["item"], "below", [], "any", false, false, true, 123)) ? ("false") : (false)), "data-drupal-selector" => ((twig_get_attribute($this->env, $this->source,                         // line 124
$context["item"], "below", [], "any", false, false, true, 124)) ? ("primary-nav-submenu-toggle-button") : (false))]), "html", null, true);
                        // line 126
                        echo "

            ";
                        // line 128
                        $context["attributes"] = twig_get_attribute($this->env, $this->source, ($context["attributes"] ?? null), "setAttribute", [0 => "id", 1 => ($context["aria_id"] ?? null)], "method", false, false, true, 128);
                        // line 129
                        echo "            ";
                        echo $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(twig_call_macro($macros["menus"], "macro_menu_links", [twig_get_attribute($this->env, $this->source, $context["item"], "below", [], "any", false, false, true, 129), ($context["attributes"] ?? null), (($context["menu_level"] ?? null) + 1)], 129, $context, $this->getSourceContext()));
                        echo "
          ";
                    }
                    // line 131
                    echo "        </li>
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
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 133
                echo "    </ul>
  ";
            }

            return ('' === $tmp = ob_get_contents()) ? '' : new Markup($tmp, $this->env->getCharset());
        } finally {
            ob_end_clean();
        }
    }

    public function getTemplateName()
    {
        return "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  258 => 133,  243 => 131,  237 => 129,  235 => 128,  231 => 126,  229 => 124,  228 => 123,  227 => 122,  226 => 121,  224 => 120,  222 => 119,  219 => 118,  213 => 116,  211 => 115,  204 => 111,  199 => 110,  197 => 104,  196 => 101,  194 => 100,  192 => 95,  190 => 94,  186 => 92,  184 => 89,  182 => 88,  180 => 87,  177 => 86,  171 => 84,  168 => 83,  165 => 82,  161 => 76,  158 => 75,  156 => 72,  155 => 71,  154 => 70,  153 => 69,  152 => 67,  149 => 66,  147 => 63,  146 => 62,  145 => 61,  144 => 60,  143 => 58,  140 => 57,  137 => 56,  134 => 55,  131 => 54,  128 => 53,  125 => 52,  122 => 51,  120 => 50,  117 => 49,  99 => 48,  97 => 47,  93 => 46,  90 => 45,  86 => 43,  83 => 42,  80 => 37,  77 => 36,  74 => 35,  71 => 34,  68 => 33,  53 => 32,  46 => 30,  44 => 29,  41 => 24,  39 => 23,);
    }

    public function getSourceContext()
    {
        return new Source("", "core/themes/olivero/templates/navigation/menu--primary-menu.html.twig", "/opt/web/core/themes/olivero/templates/navigation/menu--primary-menu.html.twig");
    }
    
    public function checkSecurity()
    {
        static $tags = array("import" => 23, "set" => 29, "macro" => 32, "if" => 36, "for" => 48);
        static $filters = array("escape" => 46, "clean_id" => 82, "t" => 111);
        static $functions = array("link" => 88, "create_attribute" => 101);

        try {
            $this->sandbox->checkSecurity(
                ['import', 'set', 'macro', 'if', 'for'],
                ['escape', 'clean_id', 't'],
                ['link', 'create_attribute']
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
