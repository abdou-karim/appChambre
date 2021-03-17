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

/* @DataTables/datatable_html.html.twig */
class __TwigTemplate_c62c456e9b5e99d85d15d169cb0c6d2f842acd1e571c44d5c02a1359582e52c1 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/datatable_html.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "@DataTables/datatable_html.html.twig"));

        // line 1
        $context["__internal_d48addd83116cc6aee9e9fd32b0dbfc6623ac028e6d2c99400fc9526bd6a7bd5"] = twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 1, $this->source); })()), "translationDomain", [], "any", false, false, false, 1);
        // line 2
        echo "
<table id=\"";
        // line 3
        echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 3, $this->source); })()), "name", [], "any", false, false, false, 3), "html", null, true);
        echo "\" class=\"";
        if ((array_key_exists("className", $context) &&  !twig_test_empty((isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 3, $this->source); })())))) {
            echo twig_escape_filter($this->env, (isset($context["className"]) || array_key_exists("className", $context) ? $context["className"] : (function () { throw new RuntimeError('Variable "className" does not exist.', 3, $this->source); })()), "html", null, true);
        }
        echo "\">
    <thead>
    <tr>
        ";
        // line 6
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["datatable"]) || array_key_exists("datatable", $context) ? $context["datatable"] : (function () { throw new RuntimeError('Variable "datatable" does not exist.', 6, $this->source); })()), "columns", [], "any", false, false, false, 6));
        foreach ($context['_seq'] as $context["_key"] => $context["column"]) {
            // line 7
            echo "            <th>";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\TranslationExtension']->trans(twig_get_attribute($this->env, $this->source, $context["column"], "label", [], "any", false, false, false, 7), [],             // line 1
(isset($context["__internal_d48addd83116cc6aee9e9fd32b0dbfc6623ac028e6d2c99400fc9526bd6a7bd5"]) || array_key_exists("__internal_d48addd83116cc6aee9e9fd32b0dbfc6623ac028e6d2c99400fc9526bd6a7bd5", $context) ? $context["__internal_d48addd83116cc6aee9e9fd32b0dbfc6623ac028e6d2c99400fc9526bd6a7bd5"] : (function () { throw new RuntimeError('Variable "__internal_d48addd83116cc6aee9e9fd32b0dbfc6623ac028e6d2c99400fc9526bd6a7bd5" does not exist.', 1, $this->source); })())), "html", null, true);
            // line 7
            echo "</th>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['column'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 9
        echo "    </tr>
    ";
        // line 17
        echo "    </thead>
    ";
        // line 27
        echo "    <tbody>
    </tbody>
</table>
";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    public function getTemplateName()
    {
        return "@DataTables/datatable_html.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  79 => 27,  76 => 17,  73 => 9,  66 => 7,  64 => 1,  62 => 7,  58 => 6,  48 => 3,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% trans_default_domain datatable.translationDomain %}

<table id=\"{{ datatable.name }}\" class=\"{% if className is defined and className is not empty %}{{ className }}{% endif %}\">
    <thead>
    <tr>
        {% for column in datatable.columns %}
            <th>{{ column.label|trans }}</th>
        {% endfor %}
    </tr>
    {#% if datatable.option('searching') and datatable.setting('column_filter') in ['both', 'thead'] %}
        <tr class=\"datatable-filters\">
            {% for column in datatable.columns %}
                <td>{% if column.filter != null %}{% include column.filter.templateHtml %}{% endif %}</td>
            {% endfor %}
        </tr>
    {% endif %#}
    </thead>
    {#% if datatable.option('searching') and datatable.setting('column_filter') in ['both', 'tfoot'] %}
        <tfoot>
        <tr class=\"datatable-filters\">
            {% for column in datatable.columns %}
                <td>{% if column.filter != null %}{% include column.filter.templateHtml %}{% endif %}</td>
            {% endfor %}
        </tr>
        </tfoot>
    {% endif %#}
    <tbody>
    </tbody>
</table>
", "@DataTables/datatable_html.html.twig", "/home/abdoukarim/Documents/appchambre/vendor/omines/datatables-bundle/src/Resources/views/datatable_html.html.twig");
    }
}
