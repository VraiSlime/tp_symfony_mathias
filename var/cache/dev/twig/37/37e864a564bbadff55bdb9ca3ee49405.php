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

/* admin/facturations.html.twig */
class __TwigTemplate_d3dcf434939daad728752403f2726f14 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/facturations.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/facturations.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/facturations.html.twig", 1);
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
    <h1 class=\"text-center mb-4\">Liste des facturations</h1>
    <table class=\"table table-striped table-hover table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>ID</th>
                <th>Nom du client</th>
                <th>Email</th>
                <th>Montant total</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Action</th> <!-- Pour le bouton \"Annuler\" -->
            </tr>
        </thead>
        <tbody>
            ";
        // line 19
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["facturations"]) || array_key_exists("facturations", $context) ? $context["facturations"] : (function () { throw new RuntimeError('Variable "facturations" does not exist.', 19, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["facturation"]) {
            // line 20
            echo "                <tr>
                    <td>";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facturation"], "id", [], "any", false, false, false, 21), "html", null, true);
            echo "</td>
                    <td>";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facturation"], "fisrtname", [], "any", false, false, false, 22), "html", null, true);
            echo " ";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facturation"], "lastname", [], "any", false, false, false, 22), "html", null, true);
            echo "</td> <!-- Faute de frappe avec \"fisrtname\" pris en compte -->
                    <td>";
            // line 23
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facturation"], "email", [], "any", false, false, false, 23), "html", null, true);
            echo "</td>
                    <td>";
            // line 24
            echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (twig_get_attribute($this->env, $this->source, $context["facturation"], "prixTotal", [], "any", false, false, false, 24) / 100), 2, ",", " "), "html", null, true);
            echo " €</td>
                    <td>";
            // line 25
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facturation"], "dateDebut", [], "any", false, false, false, 25), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>";
            // line 26
            echo twig_escape_filter($this->env, twig_date_format_filter($this->env, twig_get_attribute($this->env, $this->source, $context["facturation"], "dateFin", [], "any", false, false, false, 26), "Y-m-d"), "html", null, true);
            echo "</td>
                    <td>
                        <a href=\"";
            // line 28
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_annuler_facturation", ["id" => twig_get_attribute($this->env, $this->source, $context["facturation"], "id", [], "any", false, false, false, 28)]), "html", null, true);
            echo "\" class=\"btn btn-danger\">Annuler</a>
                    </td>
                </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['facturation'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 32
        echo "        </tbody>
    </table>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "admin/facturations.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  129 => 32,  119 => 28,  114 => 26,  110 => 25,  106 => 24,  102 => 23,  96 => 22,  92 => 21,  89 => 20,  85 => 19,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container\" style=\"padding-top: 100px;\"> 
    <h1 class=\"text-center mb-4\">Liste des facturations</h1>
    <table class=\"table table-striped table-hover table-bordered\">
        <thead class=\"thead-dark\">
            <tr>
                <th>ID</th>
                <th>Nom du client</th>
                <th>Email</th>
                <th>Montant total</th>
                <th>Date de début</th>
                <th>Date de fin</th>
                <th>Action</th> <!-- Pour le bouton \"Annuler\" -->
            </tr>
        </thead>
        <tbody>
            {% for facturation in facturations %}
                <tr>
                    <td>{{ facturation.id }}</td>
                    <td>{{ facturation.fisrtname }} {{ facturation.lastname }}</td> <!-- Faute de frappe avec \"fisrtname\" pris en compte -->
                    <td>{{ facturation.email }}</td>
                    <td>{{ (facturation.prixTotal / 100)|number_format(2, ',', ' ') }} €</td>
                    <td>{{ facturation.dateDebut|date('Y-m-d') }}</td>
                    <td>{{ facturation.dateFin|date('Y-m-d') }}</td>
                    <td>
                        <a href=\"{{ path('app_annuler_facturation', { 'id': facturation.id }) }}\" class=\"btn btn-danger\">Annuler</a>
                    </td>
                </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/facturations.html.twig", "/app/templates/admin/facturations.html.twig");
    }
}
