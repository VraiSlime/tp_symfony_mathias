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

/* biens/list.html.twig */
class __TwigTemplate_0810f3a86239168603d9d050e5db45c5 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/list.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "biens/list.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "biens/list.html.twig", 1);
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
        echo "<div style=\"padding-top: 100px;\">
    <h1 class=\"text-center\">Liste des biens</h1>

    <div class=\"container\">
        <div class=\"row\">
            ";
        // line 9
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesBiens"]) || array_key_exists("typesBiens", $context) ? $context["typesBiens"] : (function () { throw new RuntimeError('Variable "typesBiens" does not exist.', 9, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeBien"]) {
            // line 10
            echo "                ";
            $context["representativeBien"] = twig_first($this->env, twig_array_filter($this->env, (isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 10, $this->source); })()), function ($__bien__) use ($context, $macros) { $context["bien"] = $__bien__; return (twig_get_attribute($this->env, $this->source, (isset($context["bien"]) || array_key_exists("bien", $context) ? $context["bien"] : (function () { throw new RuntimeError('Variable "bien" does not exist.', 10, $this->source); })()), "typeBien", [], "any", false, false, false, 10) == $context["typeBien"]); }));
            // line 11
            echo "
                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"";
            // line 14
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["representativeBien"]) || array_key_exists("representativeBien", $context) ? $context["representativeBien"] : (function () { throw new RuntimeError('Variable "representativeBien" does not exist.', 14, $this->source); })()), "getImagePath", [], "method", false, false, false, 14), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["representativeBien"]) || array_key_exists("representativeBien", $context) ? $context["representativeBien"] : (function () { throw new RuntimeError('Variable "representativeBien" does not exist.', 14, $this->source); })()), "getDescription", [], "method", false, false, false, 14), "html", null, true);
            echo "\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">";
            // line 16
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["representativeBien"]) || array_key_exists("representativeBien", $context) ? $context["representativeBien"] : (function () { throw new RuntimeError('Variable "representativeBien" does not exist.', 16, $this->source); })()), "getDescription", [], "method", false, false, false, 16), "html", null, true);
            echo "</h5>
                            <p class=\"card-text\">Capacité : ";
            // line 17
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["representativeBien"]) || array_key_exists("representativeBien", $context) ? $context["representativeBien"] : (function () { throw new RuntimeError('Variable "representativeBien" does not exist.', 17, $this->source); })()), "getNbrTraveller", [], "method", false, false, false, 17), "html", null, true);
            echo "</p>
                            <a href=\"";
            // line 18
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_reservation", ["bien_id" => twig_get_attribute($this->env, $this->source, (isset($context["representativeBien"]) || array_key_exists("representativeBien", $context) ? $context["representativeBien"] : (function () { throw new RuntimeError('Variable "representativeBien" does not exist.', 18, $this->source); })()), "id", [], "any", false, false, false, 18)]), "html", null, true);
            echo "\" class=\"btn btn-primary btn-block\">Réserver</a>
                        </div>
                    </div>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeBien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 23
        echo "        </div>

     <!-- Section pour la piscineee -->
        <div class=\"row mt-5 mb-5\">
            <div class=\"col-md-4 offset-md-4\">
                <h2 class=\"text-center mb-4\">Piscine du camping</h2>
                <div class=\"card border shadow\">
                    <img src=\"";
        // line 30
        echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/pexels-photo-5746250.jpg"), "html", null, true);
        echo "\" class=\"card-img-top\" alt=\"Piscine du camping\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tarifs accès piscine</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Accès piscine - Enfant : 1€</li>
                            <li class=\"list-group-item\">Accès piscine - Adulte : 1.50€</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "biens/list.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  122 => 30,  113 => 23,  102 => 18,  98 => 17,  94 => 16,  87 => 14,  82 => 11,  79 => 10,  75 => 9,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div style=\"padding-top: 100px;\">
    <h1 class=\"text-center\">Liste des biens</h1>

    <div class=\"container\">
        <div class=\"row\">
            {% for typeBien in typesBiens %}
                {% set representativeBien = biens|filter(bien => bien.typeBien == typeBien)|first %}

                <div class=\"col-md-4\">
                    <div class=\"card mb-4\">
                        <img src=\"{{ representativeBien.getImagePath() }}\" class=\"card-img-top\" alt=\"{{ representativeBien.getDescription() }}\">
                        <div class=\"card-body\">
                            <h5 class=\"card-title\">{{ representativeBien.getDescription() }}</h5>
                            <p class=\"card-text\">Capacité : {{ representativeBien.getNbrTraveller() }}</p>
                            <a href=\"{{ path('app_reservation', {'bien_id': representativeBien.id}) }}\" class=\"btn btn-primary btn-block\">Réserver</a>
                        </div>
                    </div>
                </div>
            {% endfor %}
        </div>

     <!-- Section pour la piscineee -->
        <div class=\"row mt-5 mb-5\">
            <div class=\"col-md-4 offset-md-4\">
                <h2 class=\"text-center mb-4\">Piscine du camping</h2>
                <div class=\"card border shadow\">
                    <img src=\"{{ asset('images/pexels-photo-5746250.jpg') }}\" class=\"card-img-top\" alt=\"Piscine du camping\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">Tarifs accès piscine</h5>
                        <ul class=\"list-group list-group-flush\">
                            <li class=\"list-group-item\">Accès piscine - Enfant : 1€</li>
                            <li class=\"list-group-item\">Accès piscine - Adulte : 1.50€</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "biens/list.html.twig", "/app/templates/biens/list.html.twig");
    }
}
