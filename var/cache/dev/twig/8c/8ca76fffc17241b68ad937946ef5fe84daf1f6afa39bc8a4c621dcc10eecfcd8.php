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

/* etudiant/index.html.twig */
class __TwigTemplate_0ea104755ab925f693c1a435d0f7d7ac6f2e83d8046179520bea859f85d276c6 extends Template
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
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "etudiant/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "etudiant/index.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 4
    public function block_title($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        echo "Symbole";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 6
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 7
        if ((0 !== twig_compare(twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 7, $this->source); })()), "user", [], "any", false, false, false, 7), null))) {
            // line 8
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 8, $this->source); })()), 'form_start');
            echo "
 <div class=\"my-custom-class-for-errors\">
        ";
            // line 10
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 10, $this->source); })()), 'errors');
            echo "
    </div>
<div class=\"row shadow bg-light\">
<div class=\"col-lg-3\">
";
            // line 14
            echo twig_include($this->env, $context, "layout/menu.html.twig");
            echo "

</div>
<div class=\"col-lg-4 mt-5\">

<div class=\"form-group\">
 
";
            // line 21
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 21, $this->source); })()), "prenom", [], "any", false, false, false, 21), 'row', ["attr" => ["placeholder" => "Votre Prenom"]]);
            echo "
<span id=\"prenom_error\" class=\"text-danger font-weight-bold\"></span>
</div>
<div class=\"form-group\">

";
            // line 26
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 26, $this->source); })()), "email", [], "any", false, false, false, 26), 'row', ["attr" => ["placeholder" => "Votre Email", "id" => "email"]]);
            echo "
<span id=\"email_error\" class=\"text-danger font-weight-bold\" ></span>
</div>

<div class=\"form-group\">

";
            // line 32
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 32, $this->source); })()), "dateNaissance", [], "any", false, false, false, 32), 'row', ["attr" => ["placeholder" => "2020-02-20", "id" => "datenaissance"]]);
            echo "
<span id=\"datenaissance_error\" class=\"text-danger font-weight-bold\"></span>
</div>
<div class=\"form-group chambreclass\">

";
            // line 37
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 37, $this->source); })()), "numeroChambre", [], "any", false, false, false, 37), 'row', ["attr" => ["id" => "numerochambre"]]);
            echo "
<span id=\"numerochambre_error\" class=\"text-danger font-weight-bold\"></span>
</div>
</div>
<div class=\"col-lg-4 mt-5\">

<div class=\"form-group\">

";
            // line 45
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 45, $this->source); })()), "nom", [], "any", false, false, false, 45), 'row', ["attr" => ["placeholder" => "Votre Nom", "id" => "nom"]]);
            echo "
<span id=\"nom_error\" class=\"text-danger font-weight-bold\"></span>
</div>
<div class=\"form-group\" id=\"statutclass\" class=\"text-danger\">

";
            // line 50
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 50, $this->source); })()), "statut", [], "any", false, false, false, 50), 'row');
            echo "
<span id=\"\"></span>
</div>
<div class=\"form-group\">

";
            // line 55
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 55, $this->source); })()), "telephone", [], "any", false, false, false, 55), 'row', ["attr" => ["placeholder" => "Votre Numero de telephone", "id" => "telephone"]]);
            echo "
<span id=\"telephone_error\" class=\"text-danger font-weight-bold\"></span>
</div>

   <div class=\"mb-1\">Catégorie</div>
            <div class=\"form-radio mb-2 text-center\">
                <input class=\"form-radio-input categories categories_success\" type=\"radio\" required id=\"categorie1\" name=\"categorie\" value=\"boursier\">
                
                <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"categorie1\">
                    Boursier
                </label>
                <input class=\"form-radio-input categories categories_success\" required type=\"radio\" id=\"categorie2\" name=\"categorie\" value=\"Nboursier\">
                
                <label class=\"form-radio-label font-weight-bold\" for=\"categorie2\">
                    Non Boursier
                </label></br>
            </div>
                        <div class=\"form-group addresseclasse\">
            
            ";
            // line 74
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 74, $this->source); })()), "adresse", [], "any", false, false, false, 74), 'row', ["attr" => ["placeholder" => "Votre Adresse", "id" => "adresse"]]);
            echo "
            <span id=\"adresse_error\" class=\"text-danger font-weight-bold\"></span>
            </div>

                <div class=\"form-group typebourseclasse\">
                <label for=\"formGroupExampleInput\">TypeBourse</label>
                ";
            // line 80
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 80, $this->source); })()), "idTypeBourse", [], "any", false, false, false, 80), 'widget', ["attr" => ["id" => "typebourse"]]);
            echo "
                <span id=\"typebourse_error\" class=\"text-danger font-weight-bold\"></span>
                </div>
                <div class=\"form-group typebourseclasse\">
                ";
            // line 84
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 84, $this->source); })()), "inshoused", [], "any", false, false, false, 84), 'row');
            echo "
                </div>

                <div class=\"\">
                    <button type=\"submit\" name=\"submit\" id=\"mysubmitForm\" class=\"btn btn-outline-primary btn-lg btn-block\" btn-lg btn-block>Enregistrer</button>
                    </div>    
            
</div>
                                
</div>
</div>
";
            // line 95
            echo             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["formaddEtudiant"]) || array_key_exists("formaddEtudiant", $context) ? $context["formaddEtudiant"] : (function () { throw new RuntimeError('Variable "formaddEtudiant" does not exist.', 95, $this->source); })()), 'form_end');
            echo "
";
        }
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    // line 99
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 100
        echo "          ";
        $this->displayParentBlock("javascripts", $context, $blocks);
        echo "
    ";
        // line 101
        echo $this->extensions['Symfony\WebpackEncoreBundle\Twig\EntryFilesTwigExtension']->renderWebpackScriptTags("index");
        echo "
        ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "etudiant/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  245 => 101,  240 => 100,  230 => 99,  217 => 95,  203 => 84,  196 => 80,  187 => 74,  165 => 55,  157 => 50,  149 => 45,  138 => 37,  130 => 32,  121 => 26,  113 => 21,  103 => 14,  96 => 10,  91 => 8,  89 => 7,  79 => 6,  60 => 4,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}


{% block title %}Symbole{% endblock %}

{% block body %}
{% if app.user != null %}
{{ form_start(formaddEtudiant) }}
 <div class=\"my-custom-class-for-errors\">
        {{ form_errors(formaddEtudiant) }}
    </div>
<div class=\"row shadow bg-light\">
<div class=\"col-lg-3\">
{{ include('layout/menu.html.twig') }}

</div>
<div class=\"col-lg-4 mt-5\">

<div class=\"form-group\">
 
{{form_row(formaddEtudiant.prenom,{'attr':{'placeholder':\"Votre Prenom\"}}) }}
<span id=\"prenom_error\" class=\"text-danger font-weight-bold\"></span>
</div>
<div class=\"form-group\">

{{form_row(formaddEtudiant.email,{'attr':{'placeholder':\"Votre Email\",'id':\"email\"}}) }}
<span id=\"email_error\" class=\"text-danger font-weight-bold\" ></span>
</div>

<div class=\"form-group\">

{{form_row(formaddEtudiant.dateNaissance,{'attr':{'placeholder':\"2020-02-20\",'id':\"datenaissance\"}}) }}
<span id=\"datenaissance_error\" class=\"text-danger font-weight-bold\"></span>
</div>
<div class=\"form-group chambreclass\">

{{form_row(formaddEtudiant.numeroChambre,{'attr':{'id':\"numerochambre\"}}) }}
<span id=\"numerochambre_error\" class=\"text-danger font-weight-bold\"></span>
</div>
</div>
<div class=\"col-lg-4 mt-5\">

<div class=\"form-group\">

{{form_row(formaddEtudiant.nom,{'attr':{'placeholder':\"Votre Nom\",'id':\"nom\"}}) }}
<span id=\"nom_error\" class=\"text-danger font-weight-bold\"></span>
</div>
<div class=\"form-group\" id=\"statutclass\" class=\"text-danger\">

{{form_row(formaddEtudiant.statut) }}
<span id=\"\"></span>
</div>
<div class=\"form-group\">

{{form_row(formaddEtudiant.telephone,{'attr':{'placeholder':\"Votre Numero de telephone\",'id':\"telephone\"}}) }}
<span id=\"telephone_error\" class=\"text-danger font-weight-bold\"></span>
</div>

   <div class=\"mb-1\">Catégorie</div>
            <div class=\"form-radio mb-2 text-center\">
                <input class=\"form-radio-input categories categories_success\" type=\"radio\" required id=\"categorie1\" name=\"categorie\" value=\"boursier\">
                
                <label class=\"form-radio-label mr-2 font-weight-bold\" for=\"categorie1\">
                    Boursier
                </label>
                <input class=\"form-radio-input categories categories_success\" required type=\"radio\" id=\"categorie2\" name=\"categorie\" value=\"Nboursier\">
                
                <label class=\"form-radio-label font-weight-bold\" for=\"categorie2\">
                    Non Boursier
                </label></br>
            </div>
                        <div class=\"form-group addresseclasse\">
            
            {{form_row(formaddEtudiant.adresse,{'attr':{'placeholder':\"Votre Adresse\",'id':\"adresse\"}}) }}
            <span id=\"adresse_error\" class=\"text-danger font-weight-bold\"></span>
            </div>

                <div class=\"form-group typebourseclasse\">
                <label for=\"formGroupExampleInput\">TypeBourse</label>
                {{form_widget(formaddEtudiant.idTypeBourse,{'attr':{'id':\"typebourse\"}}) }}
                <span id=\"typebourse_error\" class=\"text-danger font-weight-bold\"></span>
                </div>
                <div class=\"form-group typebourseclasse\">
                {{form_row(formaddEtudiant.inshoused) }}
                </div>

                <div class=\"\">
                    <button type=\"submit\" name=\"submit\" id=\"mysubmitForm\" class=\"btn btn-outline-primary btn-lg btn-block\" btn-lg btn-block>Enregistrer</button>
                    </div>    
            
</div>
                                
</div>
</div>
{{ form_end(formaddEtudiant) }}
{% endif %}
{% endblock %}

{% block javascripts %}
          {{ parent() }}
    {{ encore_entry_script_tags('index') }}
        {% endblock %}

", "etudiant/index.html.twig", "/home/abdoukarim/Documents/appchambre/templates/etudiant/index.html.twig");
    }
}
