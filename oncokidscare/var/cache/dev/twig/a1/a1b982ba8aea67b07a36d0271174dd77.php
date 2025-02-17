<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;
use Twig\TemplateWrapper;

/* admin/index.html.twig */
class __TwigTemplate_f7ce04752a42c804b5b92045c472b622 extends Template
{
    private Source $source;
    /**
     * @var array<string, Template>
     */
    private array $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'title' => [$this, 'block_title'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context): bool|string|Template|TemplateWrapper
    {
        // line 1
        return "base.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/index.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/index.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_title(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "title"));

        yield "Admin Dashboard";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_body(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "body"));

        // line 6
        yield "<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card main-card\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"";
        // line 12
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </div>
                    <i class=\"fas fa-user-shield icon-large mb-3\"></i>
                    <h1 class=\"display-4\">Je suis Admin</h1>
                    <p class=\"lead\">Bienvenue ";
        // line 18
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "prenom", [], "any", false, false, false, 18), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 18, $this->source); })()), "nom", [], "any", false, false, false, 18), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-user-md icon-large\"></i>
                <h3>";
        // line 28
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["medecins"]) || array_key_exists("medecins", $context) ? $context["medecins"] : (function () { throw new RuntimeError('Variable "medecins" does not exist.', 28, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Médecins</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-procedures icon-large\"></i>
                <h3>";
        // line 35
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["patients"]) || array_key_exists("patients", $context) ? $context["patients"] : (function () { throw new RuntimeError('Variable "patients" does not exist.', 35, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Patients</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-hand-holding-heart icon-large\"></i>
                <h3>";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["donateurs"]) || array_key_exists("donateurs", $context) ? $context["donateurs"] : (function () { throw new RuntimeError('Variable "donateurs" does not exist.', 42, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Donateurs</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-users-cog icon-large\"></i>
                <h3>";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), (isset($context["admins"]) || array_key_exists("admins", $context) ? $context["admins"] : (function () { throw new RuntimeError('Variable "admins" does not exist.', 49, $this->source); })())), "html", null, true);
        yield "</h3>
                <p>Admins</p>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-tasks me-2\"></i>
                        Actions Rapides
                    </h5>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Ajouter un Médecin
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-calendar-plus me-2\"></i>
                            Gérer les Rendez-vous
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-chart-line me-2\"></i>
                            Voir les Statistiques
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-bell me-2\"></i>
                        Notifications Récentes
                    </h5>
                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Nouveau patient enregistré
                            <small class=\"text-muted d-block\">Il y a 2 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-calendar-check me-2\"></i>
                            5 nouveaux rendez-vous aujourd'hui
                            <small class=\"text-muted d-block\">Il y a 3 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-hand-holding-heart me-2\"></i>
                            Nouvelle donation reçue
                            <small class=\"text-muted d-block\">Il y a 5 heures</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "admin/index.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable(): bool
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo(): array
    {
        return array (  162 => 49,  152 => 42,  142 => 35,  132 => 28,  117 => 18,  108 => 12,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin Dashboard{% endblock %}

{% block body %}
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card main-card\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </div>
                    <i class=\"fas fa-user-shield icon-large mb-3\"></i>
                    <h1 class=\"display-4\">Je suis Admin</h1>
                    <p class=\"lead\">Bienvenue {{ user.prenom }} {{ user.nom }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-user-md icon-large\"></i>
                <h3>{{ medecins|length }}</h3>
                <p>Médecins</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-procedures icon-large\"></i>
                <h3>{{ patients|length }}</h3>
                <p>Patients</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-hand-holding-heart icon-large\"></i>
                <h3>{{ donateurs|length }}</h3>
                <p>Donateurs</p>
            </div>
        </div>
        <div class=\"col-md-3\">
            <div class=\"info-card text-center\">
                <i class=\"fas fa-users-cog icon-large\"></i>
                <h3>{{ admins|length }}</h3>
                <p>Admins</p>
            </div>
        </div>
    </div>

    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-tasks me-2\"></i>
                        Actions Rapides
                    </h5>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Ajouter un Médecin
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-calendar-plus me-2\"></i>
                            Gérer les Rendez-vous
                        </a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">
                            <i class=\"fas fa-chart-line me-2\"></i>
                            Voir les Statistiques
                        </a>
                    </div>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">
                        <i class=\"fas fa-bell me-2\"></i>
                        Notifications Récentes
                    </h5>
                    <div class=\"list-group\">
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-user-plus me-2\"></i>
                            Nouveau patient enregistré
                            <small class=\"text-muted d-block\">Il y a 2 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-calendar-check me-2\"></i>
                            5 nouveaux rendez-vous aujourd'hui
                            <small class=\"text-muted d-block\">Il y a 3 heures</small>
                        </div>
                        <div class=\"list-group-item\">
                            <i class=\"fas fa-hand-holding-heart me-2\"></i>
                            Nouvelle donation reçue
                            <small class=\"text-muted d-block\">Il y a 5 heures</small>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
{% endblock %}
", "admin/index.html.twig", "C:\\PIDEV\\oncokidscare\\templates\\admin\\index.html.twig");
    }
}
