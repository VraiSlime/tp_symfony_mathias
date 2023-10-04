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

/* admin/biens.html.twig */
class __TwigTemplate_62143f068a97f5c3ceeef4935566232f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/biens.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/biens.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/biens.html.twig", 1);
        $this->parent->display($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 4
        echo "<div class=\"container\" style=\"padding-top: 100px;\">
    <h1 class=\"text-center mb-4\">Gestion des biens</h1>
    <div class=\"mb-4\">
        <a href=\"";
        // line 7
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bien_add");
        echo "\" class=\"btn btn-primary\">Ajouter un bien</a>
    </div>

    <div class=\"row\">
        ";
        // line 11
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 11, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 12
            echo "        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                ";
            // line 14
            $context["imagePath"] = (((is_string($__internal_compile_0 = twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 14)) && is_string($__internal_compile_1 = "/images/") && ('' === $__internal_compile_1 || 0 === strpos($__internal_compile_0, $__internal_compile_1)))) ? (twig_slice($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 14), 1, null)) : (("images/" . twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 14))));
            // line 15
            echo "                <img src=\"";
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl((isset($context["imagePath"]) || array_key_exists("imagePath", $context) ? $context["imagePath"] : (function () { throw new RuntimeError('Variable "imagePath" does not exist.', 15, $this->source); })())), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"Image du bien\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">ID: ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 17), "html", null, true);
            echo "</h5>
                    <p class=\"card-text\">";
            // line 18
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 18), "html", null, true);
            echo "</p>
                    <p><strong>Nombre de voyageurs:</strong> ";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nbrTraveller", [], "any", false, false, false, 19), "html", null, true);
            echo "</p>
                    <p><strong>Type:</strong> ";
            // line 20
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["bien"], "typeBien", [], "any", false, false, false, 20), "label", [], "any", false, false, false, 20), "html", null, true);
            echo "</p>
                    <a href=\"";
            // line 21
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_bien_edit", ["id" => twig_get_attribute($this->env, $this->source, $context["bien"], "id", [], "any", false, false, false, 21)]), "html", null, true);
            echo "\" class=\"btn btn-warning\">Modifier</a>
                </div>
            </div>
        </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        echo "    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/biens.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  123 => 26,  112 => 21,  108 => 20,  104 => 19,  100 => 18,  96 => 17,  90 => 15,  88 => 14,  84 => 12,  80 => 11,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\" style=\"padding-top: 100px;\">
    <h1 class=\"text-center mb-4\">Gestion des biens</h1>
    <div class=\"mb-4\">
        <a href=\"{{ path('admin_bien_add') }}\" class=\"btn btn-primary\">Ajouter un bien</a>
    </div>

    <div class=\"row\">
        {% for bien in biens %}
        <div class=\"col-md-4 mb-4\">
            <div class=\"card\">
                {% set imagePath = bien.imagePath starts with '/images/' ? bien.imagePath[1:] : 'images/' ~ bien.imagePath %}
                <img src=\"{{ asset(imagePath) }}\" class=\"card-img-top\" alt=\"Image du bien\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">ID: {{ bien.id }}</h5>
                    <p class=\"card-text\">{{ bien.description }}</p>
                    <p><strong>Nombre de voyageurs:</strong> {{ bien.nbrTraveller }}</p>
                    <p><strong>Type:</strong> {{ bien.typeBien.label }}</p>
                    <a href=\"{{ path('admin_bien_edit', {'id': bien.id}) }}\" class=\"btn btn-warning\">Modifier</a>
                </div>
            </div>
        </div>
        {% endfor %}
    </div>
</div>
{% endblock %}
", "admin/biens.html.twig", "/app/templates/admin/biens.html.twig");
    }
}
