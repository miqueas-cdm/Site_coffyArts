<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\MacroNamespace;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Sandbox\SecurityNotAllowedTestError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* core/themes/olivero/templates/navigation/pager.html.twig */
class __TwigTemplate_230b77cd6844cc7331797287d70afbf3 extends Template
{
    private Source $source;
    /**
     * @var array<string, MacroNamespace>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        $this->sandbox = $env->getExtension(SandboxExtension::class)->getChecker();
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        // line 34
        if ((($tmp = ($context["items"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 35
            yield "  <nav class=\"pager\" role=\"navigation\" aria-labelledby=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\">
    <";
            // line 36
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul class=\"pager__items js-pager__items\">
      ";
            // line 39
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 39)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 40
                yield "        ";
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 41
                    yield "          <li class=\"pager__item pager__item--control pager__item--first\">
            <a href=\"";
                    // line 42
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "href", [], "any", false, false, true, 42), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to first page"));
                    yield "\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "first", [], "any", false, false, true, 42), "attributes", [], "any", false, false, true, 42), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 42), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 43
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("First page"));
                    yield "</span>
              ";
                    // line 44
                    yield from $this->load("@olivero/../images/pager-first.svg", 44)->unwrap()->yield($context);
                    // line 45
                    yield "            </a>
          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 40
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v0, "html", null, true));
                // line 48
                yield "      ";
            }
            // line 49
            yield "
      ";
            // line 51
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 51)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 52
                yield "        ";
                $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 53
                    yield "          <li class=\"pager__item pager__item--control pager__item--previous\">
            <a href=\"";
                    // line 54
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54), "href", [], "any", false, false, true, 54), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to previous page"));
                    yield "\" rel=\"prev\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 54), "attributes", [], "any", false, false, true, 54), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 54), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 55
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                    yield "</span>
              ";
                    // line 56
                    yield from $this->load("@olivero/../images/pager-previous.svg", 56)->unwrap()->yield($context);
                    // line 57
                    yield "            </a>
          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 52
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v1, "html", null, true));
                // line 60
                yield "      ";
            }
            // line 61
            yield "
      ";
            // line 63
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "previous", [], "any", false, false, true, 63)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 64
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 66
            yield "
      ";
            // line 68
            yield "      ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "pages", [], "any", false, false, true, 68));
            foreach ($context['_seq'] as $context["key"] => $context["item"]) {
                // line 69
                yield "        ";
                $_v2 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 70
                    yield "          <li class=\"pager__item";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar((((($context["current"] ?? null) == $context["key"])) ? (" pager__item--active") : ("")));
                    yield " pager__item--number\">
            ";
                    // line 71
                    if ((($context["current"] ?? null) == $context["key"])) {
                        // line 72
                        yield "              ";
                        $context["title"] = t("Current page");
                        // line 73
                        yield "            ";
                    } else {
                        // line 74
                        yield "              ";
                        $context["title"] = t("Go to page @key", ["@key" => $context["key"]]);
                        // line 75
                        yield "            ";
                    }
                    // line 76
                    yield "            ";
                    if ((($context["current"] ?? null) != $context["key"])) {
                        // line 77
                        yield "              <a href=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $context["item"], "href", [], "any", false, false, true, 77), "html", null, true);
                        yield "\" title=\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["title"] ?? null), "html", null, true);
                        yield "\"";
                        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "attributes", [], "any", false, false, true, 77), "href", "title"), "addClass", ["pager__link", (((($context["current"] ?? null) == $context["key"])) ? (" is-active") : (""))], "method", false, false, true, 77), "html", null, true);
                        yield ">
            ";
                    }
                    // line 79
                    yield "            <span class=\"visually-hidden\">
              ";
                    // line 80
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Page"));
                    yield "
            </span>
            ";
                    // line 82
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $context["key"], "html", null, true);
                    yield "
            ";
                    // line 83
                    if ((($context["current"] ?? null) != $context["key"])) {
                        // line 84
                        yield "              </a>
            ";
                    }
                    // line 86
                    yield "          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 69
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v2, "html", null, true));
                // line 88
                yield "      ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['key'], $context['item'], $context['_parent']);
            $context = array_intersect_key($context, $_parent);
            $context += $_parent;
            // line 89
            yield "
      ";
            // line 91
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["ellipses"] ?? null), "next", [], "any", false, false, true, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 92
                yield "        <li class=\"pager__item pager__item--ellipsis\" role=\"presentation\">&hellip;</li>
      ";
            }
            // line 94
            yield "
      ";
            // line 96
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 96)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 97
                yield "        ";
                $_v3 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 98
                    yield "          <li class=\"pager__item pager__item--control pager__item--next\">
            <a href=\"";
                    // line 99
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99), "href", [], "any", false, false, true, 99), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to next page"));
                    yield "\" rel=\"next\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 99), "attributes", [], "any", false, false, true, 99), "href", "title", "rel"), "addClass", ["pager__link"], "method", false, false, true, 99), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 100
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                    yield "</span>
              ";
                    // line 101
                    yield from $this->load("@olivero/../images/pager-previous.svg", 101)->unwrap()->yield($context);
                    // line 102
                    yield "            </a>
          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 97
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v3, "html", null, true));
                // line 105
                yield "      ";
            }
            // line 106
            yield "
      ";
            // line 108
            yield "      ";
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 108)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 109
                yield "        ";
                $_v4 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 110
                    yield "          <li class=\"pager__item pager__item--control pager__item--last\">
            <a href=\"";
                    // line 111
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 111), "href", [], "any", false, false, true, 111), "html", null, true);
                    yield "\" title=\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Go to last page"));
                    yield "\"";
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, $this->extensions['Drupal\Core\Template\TwigExtension']->withoutFilter(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "last", [], "any", false, false, true, 111), "attributes", [], "any", false, false, true, 111), "href", "title"), "addClass", ["pager__link"], "method", false, false, true, 111), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 112
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Last page"));
                    yield "</span>
              ";
                    // line 113
                    yield from $this->load("@olivero/../images/pager-first.svg", 113)->unwrap()->yield($context);
                    // line 114
                    yield "            </a>
          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 109
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v4, "html", null, true));
                // line 117
                yield "      ";
            }
            // line 118
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "heading_id", "pagination_heading_level", "ellipses", "current"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/olivero/templates/navigation/pager.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDefaultEscapeStrategy(): string|false
    {
        return "html";
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  303 => 118,  300 => 117,  298 => 109,  292 => 114,  290 => 113,  286 => 112,  278 => 111,  275 => 110,  272 => 109,  269 => 108,  266 => 106,  263 => 105,  261 => 97,  255 => 102,  253 => 101,  249 => 100,  241 => 99,  238 => 98,  235 => 97,  232 => 96,  229 => 94,  225 => 92,  222 => 91,  219 => 89,  212 => 88,  210 => 69,  205 => 86,  201 => 84,  199 => 83,  195 => 82,  190 => 80,  187 => 79,  177 => 77,  174 => 76,  171 => 75,  168 => 74,  165 => 73,  162 => 72,  160 => 71,  155 => 70,  152 => 69,  147 => 68,  144 => 66,  140 => 64,  137 => 63,  134 => 61,  131 => 60,  129 => 52,  123 => 57,  121 => 56,  117 => 55,  109 => 54,  106 => 53,  103 => 52,  100 => 51,  97 => 49,  94 => 48,  92 => 40,  86 => 45,  84 => 44,  80 => 43,  72 => 42,  69 => 41,  66 => 40,  63 => 39,  52 => 36,  47 => 35,  45 => 34,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/olivero/templates/navigation/pager.html.twig", "/var/www/html/web/core/themes/olivero/templates/navigation/pager.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["if" => 34, "apply" => 40, "include" => 44, "for" => 68, "set" => 72];
        static $filters = ["escape" => 35, "t" => 36, "without" => 42, "spaceless" => 40];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "if", 1 => "apply", 2 => "include", 3 => "for", 4 => "set"],
                [0 => "escape", 1 => "t", 2 => "without", 3 => "spaceless"],
                [],
                [],
                $this->source
            );
        } catch (SecurityError $e) {
            if ($e instanceof SecurityNotAllowedTagError && isset($tags[$e->getTagName()])) {
                $e->setTemplateLine($tags[$e->getTagName()]);
            } elseif ($e instanceof SecurityNotAllowedFilterError && isset($filters[$e->getFilterName()])) {
                $e->setTemplateLine($filters[$e->getFilterName()]);
            } elseif ($e instanceof SecurityNotAllowedFunctionError && isset($functions[$e->getFunctionName()])) {
                $e->setTemplateLine($functions[$e->getFunctionName()]);
            } elseif ($e instanceof SecurityNotAllowedTestError && isset($tests[$e->getTestName()])) {
                $e->setTemplateLine($tests[$e->getTestName()]);
            }

            throw $e;
        }

    }
}
