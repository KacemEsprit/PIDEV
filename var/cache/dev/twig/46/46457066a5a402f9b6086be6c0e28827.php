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

/* medecin/dashboard.html.twig */
class __TwigTemplate_f112c14ba8ee19005cbea8551b653c1f extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/dashboard.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/dashboard.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medecin/dashboard.html.twig", 1);
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

        yield "Médecin Dashboard";
        
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
        yield from $this->loadTemplate("partials/_navigation.html.twig", "medecin/dashboard.html.twig", 6)->unwrap()->yield($context);
        // line 7
        yield "
<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"";
        // line 14
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_logout");
        yield "\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </div>
                    <h1 class=\"display-4\">Je suis Médecin</h1>
                    <p class=\"lead\">Bienvenue Dr. ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "prenom", [], "any", false, false, false, 19), "html", null, true);
        yield " ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 19, $this->source); })()), "nom", [], "any", false, false, false, 19), "html", null, true);
        yield "</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Your Information</h5>
                    <ul class=\"list-unstyled\">
                        <li><strong>Email:</strong> ";
        // line 31
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 31, $this->source); })()), "email", [], "any", false, false, false, 31), "html", null, true);
        yield "</li>
                        <li><strong>Phone:</strong> ";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 32, $this->source); })()), "tel", [], "any", false, false, false, 32), "html", null, true);
        yield "</li>
                        <li><strong>Address:</strong> ";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["user"]) || array_key_exists("user", $context) ? $context["user"] : (function () { throw new RuntimeError('Variable "user" does not exist.', 33, $this->source); })()), "adresse", [], "any", false, false, false, 33), "html", null, true);
        yield "</li>
                        <li><strong>Role:</strong> Médecin</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Quick Actions</h5>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">View Patients</a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Manage Appointments</a>
                        <a href=\"";
        // line 47
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_rapports");
        yield "\" class=\"list-group-item list-group-item-action\">Rapports Médicaux</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

";
        // line 55
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 55, $this->source); })()), "flashes", [], "any", false, false, false, 55));
        foreach ($context['_seq'] as $context["label"] => $context["messages"]) {
            // line 56
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($context["messages"]);
            foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
                // line 57
                yield "        <div class=\"toast-container position-fixed bottom-0 end-0 p-3\">
            <div class=\"toast align-items-center text-white bg-";
                // line 58
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["label"], "html", null, true);
                yield " border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        ";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
                yield "
                    </div>
                    <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
            </div>
        </div>
    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['label'], $context['messages'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "
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
        return "medecin/dashboard.html.twig";
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
        return array (  207 => 69,  190 => 61,  184 => 58,  181 => 57,  176 => 56,  172 => 55,  161 => 47,  144 => 33,  140 => 32,  136 => 31,  119 => 19,  111 => 14,  102 => 7,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Médecin Dashboard{% endblock %}

{% block body %}
{% include 'partials/_navigation.html.twig' %}

<div class=\"container mt-4\">
    <div class=\"row\">
        <div class=\"col-md-12\">
            <div class=\"card\">
                <div class=\"card-body text-center\">
                    <div class=\"d-flex justify-content-end mb-3\">
                        <a href=\"{{ path('app_logout') }}\" class=\"btn btn-danger\">
                            <i class=\"fas fa-sign-out-alt\"></i> Déconnexion
                        </a>
                    </div>
                    <h1 class=\"display-4\">Je suis Médecin</h1>
                    <p class=\"lead\">Bienvenue Dr. {{ user.prenom }} {{ user.nom }}</p>
                </div>
            </div>
        </div>
    </div>
    
    <div class=\"row mt-4\">
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Your Information</h5>
                    <ul class=\"list-unstyled\">
                        <li><strong>Email:</strong> {{ user.email }}</li>
                        <li><strong>Phone:</strong> {{ user.tel }}</li>
                        <li><strong>Address:</strong> {{ user.adresse }}</li>
                        <li><strong>Role:</strong> Médecin</li>
                    </ul>
                </div>
            </div>
        </div>
        
        <div class=\"col-md-6\">
            <div class=\"card\">
                <div class=\"card-body\">
                    <h5 class=\"card-title\">Quick Actions</h5>
                    <div class=\"list-group\">
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">View Patients</a>
                        <a href=\"#\" class=\"list-group-item list-group-item-action\">Manage Appointments</a>
                        <a href=\"{{ path('app_medecin_rapports') }}\" class=\"list-group-item list-group-item-action\">Rapports Médicaux</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

{% for label, messages in app.flashes %}
    {% for message in messages %}
        <div class=\"toast-container position-fixed bottom-0 end-0 p-3\">
            <div class=\"toast align-items-center text-white bg-{{ label }} border-0\" role=\"alert\" aria-live=\"assertive\" aria-atomic=\"true\">
                <div class=\"d-flex\">
                    <div class=\"toast-body\">
                        {{ message }}
                    </div>
                    <button type=\"button\" class=\"btn-close btn-close-white me-2 m-auto\" data-bs-dismiss=\"toast\" aria-label=\"Close\"></button>
                </div>
            </div>
        </div>
    {% endfor %}
{% endfor %}

{% endblock %}
", "medecin/dashboard.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\medecin\\dashboard.html.twig");
    }
}
