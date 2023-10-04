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

/* owner/reservations.html.twig */
class __TwigTemplate_c8c1d88d3551b78d83a2b27f9d268726 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "owner/reservations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "owner/reservations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "owner/reservations.html.twig", 1);
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
        echo "<div class=\"container mt-5\" style=\"padding-top: 100px;\">
    <h2>Vos biens</h2>
    <div class=\"row mt-4\">
        ";
        // line 7
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["biens"]) || array_key_exists("biens", $context) ? $context["biens"] : (function () { throw new RuntimeError('Variable "biens" does not exist.', 7, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["bien"]) {
            // line 8
            echo "            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"";
            // line 10
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "imagePath", [], "any", false, false, false, 10), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 10), "html", null, true);
            echo "\" style=\"height: 200px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">";
            // line 12
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "description", [], "any", false, false, false, 12), "html", null, true);
            echo "</h5>
                        <p class=\"card-text\">Capacité : ";
            // line 13
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["bien"], "nbrTraveller", [], "any", false, false, false, 13), "html", null, true);
            echo " voyageurs</p>
                    </div>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['bien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 18
        echo "    </div>

    <h2 class=\"mt-5\">Réservations pour vos biens</h2>

    <table class=\"table mt-3\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Bien</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Locataire</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 32
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["reservations"]) || array_key_exists("reservations", $context) ? $context["reservations"] : (function () { throw new RuntimeError('Variable "reservations" does not exist.', 32, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["reservation"]) {
            // line 33
            echo "                <tr>
                    <td>";
            // line 34
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "getBien", [], "method", false, false, false, 34), "getDescription", [], "method", false, false, false, 34), "html", null, true);
            echo "</td>
                    <td>";
            // line 35
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getDateDebut", [], "method", false, false, false, 35), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 36
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["reservation"], "getDateFin", [], "method", false, false, false, 36), "d/m/Y"), "html", null, true);
            echo "</td>
                    <td>";
            // line 37
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "getUser", [], "method", false, false, false, 37), "getFirstname", [], "method", false, false, false, 37), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, twig_get_attribute($this->env, $this->source, $context["reservation"], "getUser", [], "method", false, false, false, 37), "getLastname", [], "method", false, false, false, 37), "html", null, true);
            echo "</td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['reservation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 40
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "owner/reservations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  149 => 40,  138 => 37,  134 => 36,  130 => 35,  126 => 34,  123 => 33,  119 => 32,  103 => 18,  92 => 13,  88 => 12,  81 => 10,  77 => 8,  73 => 7,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\" style=\"padding-top: 100px;\">
    <h2>Vos biens</h2>
    <div class=\"row mt-4\">
        {% for bien in biens %}
            <div class=\"col-md-4 mb-4\">
                <div class=\"card\">
                    <img src=\"{{ bien.imagePath }}\" class=\"card-img-top\" alt=\"{{ bien.description }}\" style=\"height: 200px; object-fit: cover;\">
                    <div class=\"card-body\">
                        <h5 class=\"card-title\">{{ bien.description }}</h5>
                        <p class=\"card-text\">Capacité : {{ bien.nbrTraveller }} voyageurs</p>
                    </div>
                </div>
            </div>
        {% endfor %}
    </div>

    <h2 class=\"mt-5\">Réservations pour vos biens</h2>

    <table class=\"table mt-3\">
        <thead class=\"thead-dark\">
            <tr>
                <th>Bien</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Locataire</th>
            </tr>
        </thead>
        <tbody>
            {% for reservation in reservations %}
                <tr>
                    <td>{{ reservation.getBien().getDescription() }}</td>
                    <td>{{ reservation.getDateDebut()|date('d/m/Y') }}</td>
                    <td>{{ reservation.getDateFin()|date('d/m/Y') }}</td>
                    <td>{{ reservation.getUser().getFirstname() }} {{ reservation.getUser().getLastname() }}</td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "owner/reservations.html.twig", "/app/templates/owner/reservations.html.twig");
    }
}
