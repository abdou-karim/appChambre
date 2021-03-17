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

/* layout/menu.html.twig */
class __TwigTemplate_b6667c019e2ff67ee9448cd1076772dd6ce3faaf15820286dcb908dcecc4bb21 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'menu' => [$this, 'block_menu'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "layout/menu.html.twig"));

        // line 1
        echo "
   


            ";
        // line 5
        $this->displayBlock('menu', $context, $blocks);
        // line 43
        echo "                   
 ";
        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

    }

    // line 5
    public function block_menu($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->enter($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02 = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->enter($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "menu"));

        // line 6
        echo "<div class=\"d-none d-lg-block shadow bg-light\">
    <div class=\"row mt-4 ml-1 mb-4\">
        <h5 class=\"font-weight-normal color-general\">Menu</h5>
    </div>
    <div class=\"row ml-1 d-block mb-5\">
        <div>
            <h6 class=\"font-weight-bold text-secondary\">Etudiant</h6>
        </div>
        <div class=\"d-inline d-block mb-3\">

            <img src=\"";
        // line 16
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("source/icones/student.png"), "html", null, true);
        echo "\" alt=\"\" class=\"icone-menu mr-1\" height=\"40px\" id=\"icone-add-etudiant\">
            <span class=\"color-general font-weight-bold\"><a class=\"nav-link\" href=\"";
        // line 17
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addetudiant");
        echo "\" >Ajouter un étudiant</a></span>
        </div>
       
        <div class=\"d-inline d-block mb-3\">
            <img src=\"";
        // line 21
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("source/icones/list.png"), "html", null, true);
        echo "\" alt=\"\" height=\"40px\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
            <span class=\"text-secondary\"><a class=\"nav-link\" href=\"#\">Liste étudiants</a></span>
           
        </div>
    </div>
    <div class=\"row ml-1 d-block mb-3\">
        <div>
            <h6 class=\"font-weight-bold text-secondary\">Chambres</h6>
        </div>
        <div class=\"d-inline d-block mb-3\">
            <img src=\" ";
        // line 31
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("source/icones/bed.png"), "html", null, true);
        echo "\" alt=\"\" height=\"40px\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
            <span class=\"text-secondary\"><a class=\"nav-link\" href=\"";
        // line 32
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("addchambre");
        echo "\">Ajouter une chambre</a></span>
        </div>
         
        <div class=\"d-inline d-block mb-3\">
            <img src=\"";
        // line 36
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("source/icones/list.png"), "html", null, true);
        echo "\" alt=\"\" height=\"40px\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
            <span class=\"text-secondary\"><a class=\"nav-link\" href=\"";
        // line 37
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("chambre");
        echo "\">Liste chambres</a></span>
        </div>
    </div>
    <div class=\"row\"></div>
</div>
            ";
        
        $__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02->leave($__internal_319393461309892924ff6e74d6d6e64287df64b63545b994e100d4ab223aed02_prof);

        
        $__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e->leave($__internal_085b0142806202599c7fe3b329164a92397d8978207a37e79d70b8c52599e33e_prof);

    }

    public function getTemplateName()
    {
        return "layout/menu.html.twig";
    }

    public function getDebugInfo()
    {
        return array (  124 => 37,  120 => 36,  113 => 32,  109 => 31,  96 => 21,  89 => 17,  85 => 16,  73 => 6,  63 => 5,  52 => 43,  50 => 5,  44 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("
   


            {% block menu %}
<div class=\"d-none d-lg-block shadow bg-light\">
    <div class=\"row mt-4 ml-1 mb-4\">
        <h5 class=\"font-weight-normal color-general\">Menu</h5>
    </div>
    <div class=\"row ml-1 d-block mb-5\">
        <div>
            <h6 class=\"font-weight-bold text-secondary\">Etudiant</h6>
        </div>
        <div class=\"d-inline d-block mb-3\">

            <img src=\"{{ asset('source/icones/student.png') }}\" alt=\"\" class=\"icone-menu mr-1\" height=\"40px\" id=\"icone-add-etudiant\">
            <span class=\"color-general font-weight-bold\"><a class=\"nav-link\" href=\"{{path('addetudiant')}}\" >Ajouter un étudiant</a></span>
        </div>
       
        <div class=\"d-inline d-block mb-3\">
            <img src=\"{{ asset('source/icones/list.png') }}\" alt=\"\" height=\"40px\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
            <span class=\"text-secondary\"><a class=\"nav-link\" href=\"#\">Liste étudiants</a></span>
           
        </div>
    </div>
    <div class=\"row ml-1 d-block mb-3\">
        <div>
            <h6 class=\"font-weight-bold text-secondary\">Chambres</h6>
        </div>
        <div class=\"d-inline d-block mb-3\">
            <img src=\" {{ asset('source/icones/bed.png') }}\" alt=\"\" height=\"40px\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
            <span class=\"text-secondary\"><a class=\"nav-link\" href=\"{{path('addchambre')}}\">Ajouter une chambre</a></span>
        </div>
         
        <div class=\"d-inline d-block mb-3\">
            <img src=\"{{ asset('source/icones/list.png') }}\" alt=\"\" height=\"40px\" class=\"icone-menu mr-1\" id=\"icone-add-etudiant\">
            <span class=\"text-secondary\"><a class=\"nav-link\" href=\"{{path('chambre')}}\">Liste chambres</a></span>
        </div>
    </div>
    <div class=\"row\"></div>
</div>
            {% endblock %}
                   
 ", "layout/menu.html.twig", "/home/abdoukarim/Documents/appchambre/templates/layout/menu.html.twig");
    }
}
