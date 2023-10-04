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

/* base/nav.html.twig */
class __TwigTemplate_e1892defe80e9abbd779b8cd3d9e415f extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/nav.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "base/nav.html.twig"));

        // line 1
        if (( !array_key_exists("show_navbar", $context) || (isset($context["show_navbar"]) || array_key_exists("show_navbar", $context) ? $context["show_navbar"] : (function () { throw new RuntimeError('Variable "show_navbar" does not exist.', 1, $this->source); })()))) {
            // line 2
            echo "<nav class=\"navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100 my-custom-navbar\">
   <a class=\"navbar-brand\" style=\"color: #000;\" href=\"/\">
   <img src=\"";
            // line 4
            echo twig_escape_filter($this->env, $this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/Camping_Paradis.png"), "html", null, true);
            echo "\" alt=\"Logo\" width=\"100\" height=\"60\" style=\"border-radius: 50%; margin-right: 20px; margin-left: 20px;\">
    L'espadrille volante
  </a>

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav ml-auto\">
        ";
            // line 14
            if ((twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 14, $this->source); })()), "user", [], "any", false, false, false, 14) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 15
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 16
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_reservations");
                echo "\">Réservations</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 19
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_biens");
                echo "\">Gérer les biens</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 22
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("admin_facturations");
                echo "\">Facturations</a>
            </li>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 24
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 24, $this->source); })()), "user", [], "any", false, false, false, 24) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_OWNER"))) {
                // line 25
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 26
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("owner_reservations");
                echo "\">Mes réservations</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 29
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_list");
                echo "\">Voir les biens</a>
            </li>
        ";
            } elseif ((twig_get_attribute($this->env, $this->source,             // line 31
(isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 31, $this->source); })()), "user", [], "any", false, false, false, 31) && $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER"))) {
                // line 32
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 33
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("biens_list");
                echo "\">Voir les biens</a>
            </li>
        ";
            }
            // line 36
            echo "        ";
            if (twig_get_attribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 36, $this->source); })()), "user", [], "any", false, false, false, 36)) {
                // line 37
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-danger\" style=\"color: #000;\" href=\"";
                // line 38
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
                echo "\">Logout</a>
            </li>
        ";
            } else {
                // line 41
                echo "            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"";
                // line 42
                echo $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_login");
                echo "\">Login</a>
            </li>
        ";
            }
            // line 45
            echo "    </ul>
  </div>
</nav>
";
        }
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    public function getTemplateName()
    {
        return "base/nav.html.twig";
    }

    public function isTraitable()
    {
        return false;
    }

    public function getDebugInfo()
    {
        return array (  132 => 45,  126 => 42,  123 => 41,  117 => 38,  114 => 37,  111 => 36,  105 => 33,  102 => 32,  100 => 31,  95 => 29,  89 => 26,  86 => 25,  84 => 24,  79 => 22,  73 => 19,  67 => 16,  64 => 15,  62 => 14,  49 => 4,  45 => 2,  43 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% if show_navbar is not defined or show_navbar %}
<nav class=\"navbar navbar-expand-lg navbar-dark bg-transparent position-absolute w-100 my-custom-navbar\">
   <a class=\"navbar-brand\" style=\"color: #000;\" href=\"/\">
   <img src=\"{{ asset('images/Camping_Paradis.png') }}\" alt=\"Logo\" width=\"100\" height=\"60\" style=\"border-radius: 50%; margin-right: 20px; margin-left: 20px;\">
    L'espadrille volante
  </a>

  <button class=\"navbar-toggler\" type=\"button\" data-toggle=\"collapse\" data-target=\"#navbarNav\" aria-controls=\"navbarNav\" aria-expanded=\"false\" aria-label=\"Toggle navigation\">
    <span class=\"navbar-toggler-icon\"></span>
  </button>

  <div class=\"collapse navbar-collapse\" id=\"navbarNav\">
    <ul class=\"navbar-nav ml-auto\">
        {% if app.user and is_granted('ROLE_ADMIN') %}
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('admin_reservations') }}\">Réservations</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('admin_biens') }}\">Gérer les biens</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('admin_facturations') }}\">Facturations</a>
            </li>
        {% elseif app.user and is_granted('ROLE_OWNER') %}
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('owner_reservations') }}\">Mes réservations</a>
            </li>
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('biens_list') }}\">Voir les biens</a>
            </li>
        {% elseif app.user and is_granted('ROLE_USER') %}
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('biens_list') }}\">Voir les biens</a>
            </li>
        {% endif %}
        {% if app.user %}
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-danger\" style=\"color: #000;\" href=\"{{ path('app_logout') }}\">Logout</a>
            </li>
        {% else %}
            <li class=\"nav-item\">
                <a class=\"nav-link btn btn-primary\" style=\"color: #000;\" href=\"{{ path('app_login') }}\">Login</a>
            </li>
        {% endif %}
    </ul>
  </div>
</nav>
{% endif %}
", "base/nav.html.twig", "/app/templates/base/nav.html.twig");
    }
}
