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

/* core/themes/claro/templates/views/views-mini-pager.html.twig */
class __TwigTemplate_721854d4c6bd73525c2a9802dd8805a8 extends Template
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
        // line 15
        $context["pager_action_classes"] = ["pager__link", "pager__link--mini", "pager__link--action-link"];
        // line 21
        if (((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp) || (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 21)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 22
            yield "  <nav";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", ["pager"], "method", false, false, true, 22), "setAttribute", ["role", "navigation"], "method", false, false, true, 22), "setAttribute", ["aria-labelledby", ($context["heading_id"] ?? null)], "method", false, false, true, 22), "html", null, true);
            yield ">
    <";
            // line 23
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield " id=\"";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["heading_id"] ?? null), "html", null, true);
            yield "\" class=\"visually-hidden\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Pagination"));
            yield "</";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["pagination_heading_level"] ?? null), "html", null, true);
            yield ">
    <ul";
            // line 24
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["content_attributes"] ?? null), "addClass", ["pager__items", "js-pager__items"], "method", false, false, true, 24), "html", null, true);
            yield ">
      ";
            // line 25
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 25)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 26
                yield "        ";
                $_v0 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 27
                    yield "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--previous\">
            <a";
                    // line 28
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 28), "attributes", [], "any", false, false, true, 28), "addClass", [($context["pager_action_classes"] ?? null)], "method", false, false, true, 28), "setAttribute", ["title", t("Go to previous page")], "method", false, false, true, 28), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "previous", [], "any", false, false, true, 28), "href", [], "any", false, false, true, 28)], "method", false, false, true, 28), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 29
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Previous page"));
                    yield "</span>
            </a>
          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 26
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v0, "html", null, true));
                // line 33
                yield "      ";
            }
            // line 34
            yield "
      ";
            // line 35
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 35)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 36
                yield "        <li class=\"pager__item pager__item--mini pager__item--current\">
          <span class=\"visually-hidden\">
            ";
                // line 38
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Current page"));
                yield "
          </span>
          ";
                // line 40
                yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "current", [], "any", false, false, true, 40), "html", null, true);
                yield "
        </li>
      ";
            }
            // line 43
            yield "
      ";
            // line 44
            if ((($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 44)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
                // line 45
                yield "        ";
                $_v1 = ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
                    // line 46
                    yield "          <li class=\"pager__item pager__item--mini pager__item--action pager__item--next\">
            <a";
                    // line 47
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 47), "attributes", [], "any", false, false, true, 47), "addClass", [($context["pager_action_classes"] ?? null)], "method", false, false, true, 47), "setAttribute", ["title", t("Go to next page")], "method", false, false, true, 47), "setAttribute", ["href", CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["items"] ?? null), "next", [], "any", false, false, true, 47), "href", [], "any", false, false, true, 47)], "method", false, false, true, 47), "html", null, true);
                    yield ">
              <span class=\"visually-hidden\">";
                    // line 48
                    yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->renderVar(t("Next page"));
                    yield "</span>
            </a>
          </li>
        ";
                    return; yield;
                })())) ? '' : new Markup($tmp, $this->env->getCharset());
                // line 45
                yield (string) Twig\Extension\CoreExtension::spaceless($this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, $_v1, "html", null, true));
                // line 52
                yield "      ";
            }
            // line 53
            yield "    </ul>
  </nav>
";
        }
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["items", "attributes", "heading_id", "pagination_heading_level", "content_attributes"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/themes/claro/templates/views/views-mini-pager.html.twig";
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
        return array (  141 => 53,  138 => 52,  136 => 45,  128 => 48,  124 => 47,  121 => 46,  118 => 45,  116 => 44,  113 => 43,  107 => 40,  102 => 38,  98 => 36,  96 => 35,  93 => 34,  90 => 33,  88 => 26,  80 => 29,  76 => 28,  73 => 27,  70 => 26,  68 => 25,  64 => 24,  54 => 23,  49 => 22,  47 => 21,  45 => 15,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/themes/claro/templates/views/views-mini-pager.html.twig", "/var/www/html/web/core/themes/claro/templates/views/views-mini-pager.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 15, "if" => 21, "apply" => 26];
        static $filters = ["escape" => 22, "t" => 23, "spaceless" => 26];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if", 2 => "apply"],
                [0 => "escape", 1 => "t", 2 => "spaceless"],
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
