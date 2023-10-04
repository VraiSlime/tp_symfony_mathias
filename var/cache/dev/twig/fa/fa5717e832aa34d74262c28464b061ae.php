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

/* admin/bien_edit.html.twig */
class __TwigTemplate_8396a3a3073d8f884ee60ef73814d90d extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bien_edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/bien_edit.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/bien_edit.html.twig", 1);
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
    <h1 class=\"text-center mb-5\">Édition du bien</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    ";
        // line 10
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "form"]]);
        echo "

                    ";
        // line 12
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable(twig_get_attribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "children", [], "any", false, false, false, 12));
        foreach ($context['_seq'] as $context["_key"] => $context["field"]) {
            // line 13
            echo "                    <div class=\"mb-3\">
                        ";
            // line 14
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'label', ["label_attr" => ["class" => "form-label"]]);
            echo "
                        ";
            // line 15
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'errors');
            echo "
                        ";
            // line 16
            echo $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock($context["field"], 'widget', ["attr" => ["class" => "form-control"]]);
            echo "
                    </div>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['field'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 19
        echo "
                    <div class=\"mb-3 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour le bien</button>
                    </div>

                    ";
        // line 24
        echo         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 24, $this->source); })()), 'form_end');
        echo "
                </div>
            </div>

            <div class=\"mt-3 text-center\">
                <a href=\"";
        // line 29
        echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_biens");
        echo "\" class=\"btn btn-link\">Retour à la liste des biens</a>
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
        return "admin/bien_edit.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  120 => 29,  112 => 24,  105 => 19,  96 => 16,  92 => 15,  88 => 14,  85 => 13,  81 => 12,  76 => 10,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
<div class=\"container mt-5\" style=\"padding-top: 100px;\">
    <h1 class=\"text-center mb-5\">Édition du bien</h1>
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'form'}}) }}

                    {% for field in form.children %}
                    <div class=\"mb-3\">
                        {{ form_label(field, null, {'label_attr': {'class': 'form-label'}}) }}
                        {{ form_errors(field) }}
                        {{ form_widget(field, {'attr': {'class': 'form-control'}}) }}
                    </div>
                    {% endfor %}

                    <div class=\"mb-3 text-center\">
                        <button type=\"submit\" class=\"btn btn-primary\">Mettre à jour le bien</button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>

            <div class=\"mt-3 text-center\">
                <a href=\"{{ path('admin_biens') }}\" class=\"btn btn-link\">Retour à la liste des biens</a>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/bien_edit.html.twig", "/app/templates/admin/bien_edit.html.twig");
    }
}
