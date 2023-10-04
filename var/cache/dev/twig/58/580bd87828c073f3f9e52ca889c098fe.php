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

/* home/index.html.twig */
class __TwigTemplate_14d5ccb34dfbf8ade4bddd4eb48282ac extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "home/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "home/index.html.twig", 1);
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
        echo "
<div class=\"container-fluid px-0\"> 
    <div class=\"position-relative\" style=\"height: 400px;\">
        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"/images/banniere.jpg\" alt=\"bannière du site\" style=\"object-fit: cover; top: 0; left: 0;\"> 
    </div>
    <div class=\"p-3\">
        <h1 class=\"mt-2 text-center\">l'espadrille volante</h1>
        <p class=\"mt-2\">L'inventaire du camping offre un aperçu varié des hébergements disponibles pour les campeurs. Le camping est doté de 50 mobile-homes, représentant l'essentiel des logements sur le site. Parmi ces mobile-homes, 30 d'entre eux sont la propriété de particuliers, ce qui traduit un fort taux d'occupation par des résidents habituels ou saisonniers. De plus, le camping propose 10 caravanes prêtes à accueillir les visiteurs en quête d'une expérience de camping plus traditionnelle. Enfin, pour ceux qui préfèrent planter leur propre tente ou garer leur camping-car, le camping dispose de 30 emplacements dédiés. Ces options variées assurent que le camping peut accueillir une grande variété de campeurs, qu'ils recherchent le confort d'un mobile-home ou l'authenticité d'une nuit sous une tente.</p>
    </div>

    <div class=\"container mt-5\">
       <div class=\"row\">
   ";
        // line 16
        $context['_parent'] = $context;
        $context['_seq'] = twig_ensure_traversable((isset($context["typesBiens"]) || array_key_exists("typesBiens", $context) ? $context["typesBiens"] : (function () { throw new RuntimeError('Variable "typesBiens" does not exist.', 16, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["typeBien"]) {
            // line 17
            echo "      <div class=\"col-md-4 mb-4\">
        <div class=\"card\">
            <img src=\"";
            // line 19
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, (isset($context["images"]) || array_key_exists("images", $context) ? $context["images"] : (function () { throw new RuntimeError('Variable "images" does not exist.', 19, $this->source); })()), twig_get_attribute($this->env, $this->source, $context["typeBien"], "id", [], "any", false, false, false, 19), [], "array", false, false, false, 19), "html", null, true);
            echo "\" class=\"card-img-top\" alt=\"";
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeBien"], "label", [], "any", false, false, false, 19), "html", null, true);
            echo "\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">";
            // line 21
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeBien"], "label", [], "any", false, false, false, 21), "html", null, true);
            echo "</h5>
                <p class=\"card-text\">";
            // line 22
            echo twig_escape_filter($this->env, twig_get_attribute($this->env, $this->source, $context["typeBien"], "price", [], "any", false, false, false, 22), "html", null, true);
            echo "€ par jour</p>
            </div>
        </div>
    </div>
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['typeBien'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 27
        echo "        </div>
    </div>
";
        // line 29
        if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 29, $this->source); })()), "user", [], "any", false, false, false, 29) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
            // line 30
            echo "            <li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
            // line 31
            echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_list");
            echo "\">Voir les biens</a>
            </li>
            ";
        }
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

    }

    public function getTemplateName()
    {
        return "home/index.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  121 => 31,  118 => 30,  116 => 29,  112 => 27,  101 => 22,  97 => 21,  90 => 19,  86 => 17,  82 => 16,  68 => 4,  58 => 3,  35 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}

<div class=\"container-fluid px-0\"> 
    <div class=\"position-relative\" style=\"height: 400px;\">
        <img class=\"img-fluid position-absolute w-100 h-100\" src=\"/images/banniere.jpg\" alt=\"bannière du site\" style=\"object-fit: cover; top: 0; left: 0;\"> 
    </div>
    <div class=\"p-3\">
        <h1 class=\"mt-2 text-center\">l'espadrille volante</h1>
        <p class=\"mt-2\">L'inventaire du camping offre un aperçu varié des hébergements disponibles pour les campeurs. Le camping est doté de 50 mobile-homes, représentant l'essentiel des logements sur le site. Parmi ces mobile-homes, 30 d'entre eux sont la propriété de particuliers, ce qui traduit un fort taux d'occupation par des résidents habituels ou saisonniers. De plus, le camping propose 10 caravanes prêtes à accueillir les visiteurs en quête d'une expérience de camping plus traditionnelle. Enfin, pour ceux qui préfèrent planter leur propre tente ou garer leur camping-car, le camping dispose de 30 emplacements dédiés. Ces options variées assurent que le camping peut accueillir une grande variété de campeurs, qu'ils recherchent le confort d'un mobile-home ou l'authenticité d'une nuit sous une tente.</p>
    </div>

    <div class=\"container mt-5\">
       <div class=\"row\">
   {% for typeBien in typesBiens %}
      <div class=\"col-md-4 mb-4\">
        <div class=\"card\">
            <img src=\"{{ images[typeBien.id] }}\" class=\"card-img-top\" alt=\"{{ typeBien.label }}\">
            <div class=\"card-body\">
                <h5 class=\"card-title\">{{ typeBien.label }}</h5>
                <p class=\"card-text\">{{ typeBien.price }}€ par jour</p>
            </div>
        </div>
    </div>
{% endfor %}
        </div>
    </div>
{% if app.user and is_granted('ROLE_USER') %}
            <li class=\"nav-item\">
\t\t\t\t<a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('biens_list') }}\">Voir les biens</a>
            </li>
            {% endif %}
{% endblock %}
", "home/index.html.twig", "/app/templates/home/index.html.twig");
    }
}
