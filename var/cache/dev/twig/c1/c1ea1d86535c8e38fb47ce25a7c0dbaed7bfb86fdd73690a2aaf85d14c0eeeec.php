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

/* chambre/afficheid.html.twig */
class __TwigTemplate_8a6f567fc5ad3a399f5c6869900583b36242b3135bf55ad76c205b052839d02d extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/afficheid.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "chambre/afficheid.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "chambre/afficheid.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 3
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Hello ChambreController!";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 5
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 6, $this->source); })()), "user", [], "any", false, false, false, 6), null))) {
            // line 7
            echo "<div class=\"row\">
<div class=\"col-lg-3\">
";
            // line 9
            echo twig_include($this->env, $context, "layout/menu.html.twig");
            echo "
</div>

<div class=\"col-lg-9\">
<table class=\"table\">
  <thead class=\"bg-dark text-light\">
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Batiment</th>
      <th scope=\"col\">Type chambre</th>
      <th scope=\"col\">Numero</th>
      <th scope=\"col\">Supprimer</th>
      <th scope=\"col\">Modifier</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id=\"idchambre\">";
            // line 26
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 26, $this->source); })()), "id", [], "any", false, false, false, 26), "html", null, true);
            echo "</td>
      <td >";
            // line 27
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 27, $this->source); })()), "idBatiment", [], "any", false, false, false, 27), "html", null, true);
            echo "</td>
      <td >";
            // line 28
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 28, $this->source); })()), "idTypeChambre", [], "any", false, false, false, 28), "html", null, true);
            echo "</td>
      <td id=\"numerochambre\">";
            // line 29
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 29, $this->source); })()), "numero", [], "any", false, false, false, 29), "html", null, true);
            echo "</td>
      <td><button type=\"button\" data-target=\"#myModal\" data-toggle=\"modal\" name=\"\"  class=\"btn btn-danger\" btn-lg btn-block><span class=\"fa fa-archive\"></button></td>
      <td><a href=\"";
            // line 31
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre_edit", ["id" => twig_get_attribute($this->env, $this->source, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 31, $this->source); })()), "id", [], "any", false, false, false, 31)]), "html", null, true);
            echo "\"><button type=\"button\" name=\"\" id=\"\" class=\"btn btn-primary\" btn-lg btn-block><span class=\"fas fa-edit\"></button></a></td>
     
    </tr>
  </tbody>
</table>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"modal fade\" id=\"myModal\">
<div class=\"modal-dialog modal-md\">
    <div class=\"modal-content\">
    <div class=\"modal-header\">
    <h1 class=\"text-danger font-weight-bold\">Suppression de chambre</h1>
    </div>
    <div class=\"modal-body text-center\">
    <span><h2>Voulez vous vraiment supprimer la chambre <em class=\"text-success font-weight-bold\">";
            // line 47
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["chambres"]) || array_key_exists("chambres", $context) ? $context["chambres"] : (function () { throw new RuntimeError('Variable "chambres" does not exist.', 47, $this->source); })()), "numero", [], "any", false, false, false, 47), "html", null, true);
            echo "</em></h2></span>
    </div>
    <div class=\"modal-footer\">
    <input class=\"btn btn-danger\" data-dismiss=\"modal\" value=\"Annuler\">
    <a href=\"";
            // line 51
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre");
            echo "\"><input class=\"btn btn-primary\" value=\"OK\" data-dismiss=\"modal\"  id=\"delete\" ></a>
    </div>
    </div>
</div>
</div>
</div>
</div>
 ";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 60
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 61
        echo "          ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 62
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("delete");
        echo "
    
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "chambre/afficheid.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  192 => 62,  187 => 61,  177 => 60,  158 => 51,  151 => 47,  132 => 31,  127 => 29,  123 => 28,  119 => 27,  115 => 26,  95 => 9,  91 => 7,  89 => 6,  79 => 5,  60 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Hello ChambreController!{% endblock %}

{% block body %}
{% if app.user != null %}
<div class=\"row\">
<div class=\"col-lg-3\">
{{ include('layout/menu.html.twig') }}
</div>

<div class=\"col-lg-9\">
<table class=\"table\">
  <thead class=\"bg-dark text-light\">
    <tr>
      <th scope=\"col\">ID</th>
      <th scope=\"col\">Batiment</th>
      <th scope=\"col\">Type chambre</th>
      <th scope=\"col\">Numero</th>
      <th scope=\"col\">Supprimer</th>
      <th scope=\"col\">Modifier</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <td id=\"idchambre\">{{ chambres.id }}</td>
      <td >{{ chambres.idBatiment}}</td>
      <td >{{ chambres.idTypeChambre }}</td>
      <td id=\"numerochambre\">{{ chambres.numero}}</td>
      <td><button type=\"button\" data-target=\"#myModal\" data-toggle=\"modal\" name=\"\"  class=\"btn btn-danger\" btn-lg btn-block><span class=\"fa fa-archive\"></button></td>
      <td><a href=\"{{ path('chambre_edit', {'id': chambres.id}) }}\"><button type=\"button\" name=\"\" id=\"\" class=\"btn btn-primary\" btn-lg btn-block><span class=\"fas fa-edit\"></button></a></td>
     
    </tr>
  </tbody>
</table>
</div>
</div>
<div class=\"row\">
<div class=\"col-md-12\">
<div class=\"modal fade\" id=\"myModal\">
<div class=\"modal-dialog modal-md\">
    <div class=\"modal-content\">
    <div class=\"modal-header\">
    <h1 class=\"text-danger font-weight-bold\">Suppression de chambre</h1>
    </div>
    <div class=\"modal-body text-center\">
    <span><h2>Voulez vous vraiment supprimer la chambre <em class=\"text-success font-weight-bold\">{{ chambres.numero}}</em></h2></span>
    </div>
    <div class=\"modal-footer\">
    <input class=\"btn btn-danger\" data-dismiss=\"modal\" value=\"Annuler\">
    <a href=\"{{ path('chambre') }}\"><input class=\"btn btn-primary\" value=\"OK\" data-dismiss=\"modal\"  id=\"delete\" ></a>
    </div>
    </div>
</div>
</div>
</div>
</div>
 {% endif %}
{% endblock %}
{% block javascripts %}
          {{ parent() }}
    {{ encore_entry_script_tags('delete') }}
    
        {% endblock %}
        ", "chambre/afficheid.html.twig", "/home/abdoukarim/Documents/appchambre/templates/chambre/afficheid.html.twig");
    }
}
