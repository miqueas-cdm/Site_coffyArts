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

/* core/modules/system/templates/form-element.html.twig */
class __TwigTemplate_a72a9a7e21012e6c92dbd676f3cb182d extends Template
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
        // line 50
        $context["classes"] = ["js-form-item", "form-item", ("js-form-type-" . \Drupal\Component\Utility\Html::getClass(        // line 53
($context["type"] ?? null))), ("form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 54
($context["name"] ?? null))), ("js-form-item-" . \Drupal\Component\Utility\Html::getClass(        // line 55
($context["name"] ?? null))), ((!CoreExtension::inFilter(        // line 56
($context["title_display"] ?? null), ["after", "before"])) ? ("form-no-label") : ("")), (((        // line 57
($context["disabled"] ?? null) == "disabled")) ? ("form-disabled") : ("")), (((($tmp =         // line 58
($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) ? ("form-item--error") : (""))];
        // line 62
        $context["description_classes"] = ["description", (((        // line 64
($context["description_display"] ?? null) == "invisible")) ? ("visually-hidden") : (""))];
        // line 67
        yield "<div";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["attributes"] ?? null), "addClass", [($context["classes"] ?? null)], "method", false, false, true, 67), "html", null, true);
        yield ">
  ";
        // line 68
        if (CoreExtension::inFilter(($context["label_display"] ?? null), ["before", "invisible"])) {
            // line 69
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 71
        yield "  ";
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["prefix"] ?? null))) {
            // line 72
            yield "    <span class=\"field-prefix\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["prefix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 74
        yield "  ";
        if (((($context["description_display"] ?? null) == "before") && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 74)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 75
            yield "    <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 75), "html", null, true);
            yield ">
      ";
            // line 76
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 76), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 79
        yield "  ";
        yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["children"] ?? null), "html", null, true);
        yield "
  ";
        // line 80
        if ( !Twig\Extension\CoreExtension::testEmpty(($context["suffix"] ?? null))) {
            // line 81
            yield "    <span class=\"field-suffix\">";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["suffix"] ?? null), "html", null, true);
            yield "</span>
  ";
        }
        // line 83
        yield "  ";
        if ((($context["label_display"] ?? null) == "after")) {
            // line 84
            yield "    ";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["label"] ?? null), "html", null, true);
            yield "
  ";
        }
        // line 86
        yield "  ";
        if ((($tmp = ($context["errors"] ?? null)) && $tmp instanceof Markup ? (string) $tmp : $tmp)) {
            // line 87
            yield "    <div class=\"form-item--error-message\">
      ";
            // line 88
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, ($context["errors"] ?? null), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 91
        yield "  ";
        if ((CoreExtension::inFilter(($context["description_display"] ?? null), ["after", "invisible"]) && (($tmp = CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 91)) && $tmp instanceof Markup ? (string) $tmp : $tmp))) {
            // line 92
            yield "    <div";
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "attributes", [], "any", false, false, true, 92), "addClass", [($context["description_classes"] ?? null)], "method", false, false, true, 92), "html", null, true);
            yield ">
      ";
            // line 93
            yield (string) $this->extensions['Drupal\Core\Template\TwigExtension']->escapeFilter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["description"] ?? null), "content", [], "any", false, false, true, 93), "html", null, true);
            yield "
    </div>
  ";
        }
        // line 96
        yield "</div>
";
        $this->env->getExtension('\Drupal\Core\Template\TwigExtension')
            ->checkDeprecations($context, ["type", "name", "title_display", "disabled", "errors", "description_display", "attributes", "label_display", "label", "prefix", "description", "children", "suffix"]);        return; yield;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "core/modules/system/templates/form-element.html.twig";
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
        return array (  140 => 96,  134 => 93,  129 => 92,  126 => 91,  120 => 88,  117 => 87,  114 => 86,  108 => 84,  105 => 83,  99 => 81,  97 => 80,  92 => 79,  86 => 76,  81 => 75,  78 => 74,  72 => 72,  69 => 71,  63 => 69,  61 => 68,  56 => 67,  54 => 64,  53 => 62,  51 => 58,  50 => 57,  49 => 56,  48 => 55,  47 => 54,  46 => 53,  45 => 50,);
    }

    public function getSourceContext(): Source
    {
        return new Source("", "core/modules/system/templates/form-element.html.twig", "/var/www/html/web/core/modules/system/templates/form-element.html.twig");
    }
    
    public function ensureSecurityChecked(): void
    {
        if ($this->sandbox->isSandboxed($this->source)) {
            $this->checkSecurity();
        }
    }
    
    public function checkSecurity()
    {
        static $tags = ["set" => 50, "if" => 68];
        static $filters = ["clean_class" => 53, "escape" => 67];
        static $functions = [];
        static $tests = [];

        try {
            $this->sandbox->checkSecurity(
                [0 => "set", 1 => "if"],
                [0 => "clean_class", 1 => "escape"],
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
