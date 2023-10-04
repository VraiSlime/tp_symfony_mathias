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

/* reservation/index.html.twig */
class __TwigTemplate_9f2664ec6f8ab556cf6a19c91fccaa4c extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "reservation/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "reservation/index.html.twig", 1);
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
        echo "    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h2 class=\"text-center\">Réservation</h2>
                <p>Prix du bien : ";
        // line 8
        echo twig_escape_filter($this->env, twig_number_format_filter($this->env, (isset($context["bienPrice"]) || array_key_exists("bienPrice", $context) ? $context["bienPrice"] : (function () { throw new RuntimeError('Variable "bienPrice" does not exist.', 8, $this->source); })()), 2, ",", " "), "html", null, true);
        echo " €</p>


                ";
        // line 11
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 11, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "
                <div class=\"form-group\">
                    ";
        // line 13
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 13, $this->source); })()), "dateDebut", [], "any", false, false, false, 13), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 16
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 16, $this->source); })()), "dateFin", [], "any", false, false, false, 16), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 19
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 19, $this->source); })()), "nbrAdult", [], "any", false, false, false, 19), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 22
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 22, $this->source); })()), "nbrEnfant", [], "any", false, false, false, 22), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
                <div class=\"form-group\">
                    ";
        // line 25
        echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(twig_get_attribute($this->env, $this->source, (isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 25, $this->source); })()), "nbrBaby", [], "any", false, false, false, 25), 'row', ["attr" => ["class" => "form-control"]]);
        echo "
                </div>
             
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Réserver</button>
                ";
        // line 29
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["reservationForm"]) || array_key_exists("reservationForm", $context) ? $context["reservationForm"] : (function () { throw new RuntimeError('Variable "reservationForm" does not exist.', 29, $this->source); })()), 'form_end');
        echo "
            ";
        // line 30
        if ((isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 30, $this->source); })())) {
            // line 31
            echo "    <div class=\"error-message\">
        ";
            // line 32
            echo twig_escape_filter($this->env, (isset($context["errorMessage"]) || array_key_exists("errorMessage", $context) ? $context["errorMessage"] : (function () { throw new RuntimeError('Variable "errorMessage" does not exist.', 32, $this->source); })()), "html", null, true);
            echo "
    </div>
            </div>
";
        }
        // line 36
        echo "        </div>
    </div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "reservation/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 36,  125 => 32,  122 => 31,  120 => 30,  116 => 29,  109 => 25,  103 => 22,  97 => 19,  91 => 16,  85 => 13,  80 => 11,  74 => 8,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <div class=\"container\" style=\"padding-top: 100px;\">
        <div class=\"row justify-content-center\">
            <div class=\"col-md-6\">
                <h2 class=\"text-center\">Réservation</h2>
                <p>Prix du bien : {{ (bienPrice) | number_format(2, ',', ' ') }} €</p>


                {{ form_start(reservationForm, {'attr': {'class': 'form'}}) }}
                <div class=\"form-group\">
                    {{ form_row(reservationForm.dateDebut, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(reservationForm.dateFin, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(reservationForm.nbrAdult, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(reservationForm.nbrEnfant, {'attr': {'class': 'form-control'}}) }}
                </div>
                <div class=\"form-group\">
                    {{ form_row(reservationForm.nbrBaby, {'attr': {'class': 'form-control'}}) }}
                </div>
             
                <button type=\"submit\" class=\"btn btn-primary btn-block\">Réserver</button>
                {{ form_end(reservationForm) }}
            {% if errorMessage %}
    <div class=\"error-message\">
        {{ errorMessage }}
    </div>
            </div>
{% endif %}
        </div>
    </div>
{% endblock %}
", "reservation/index.html.twig", "/app/templates/reservation/index.html.twig");
    }
}
