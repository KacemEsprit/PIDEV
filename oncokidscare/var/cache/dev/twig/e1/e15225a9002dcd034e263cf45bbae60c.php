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

/* admin/publications.html.twig */
class __TwigTemplate_ee7ebe0901f3a99a3da2d723533ca874 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/publications.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "admin/publications.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "admin/publications.html.twig", 1);
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

        yield "Admin - Gérer les Publications";
        
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
        yield "<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #3498db;
        color: white;
        font-weight: 600;
    }
    tr:hover {background-color: #f5f5f5;}
    .actions {
        display: flex;
        gap: 10px;
    }
    button {
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    button:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
    }
    .approve {
        background-color: #2ecc71;
        color: white;
    }
    .reject {
        background-color: #e74c3c;
        color: white;
    }
    h1 {
        color: #333;
        font-size: 2em;
        margin-bottom: 20px;
    }
    .publication-content {
        margin-top: 10px;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<div class=\"container\">
    <h1>Gérer les Publications</h1>

    <table>
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            ";
        // line 88
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 88, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 89
            yield "            <tr>
                <td>";
            // line 90
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 90), "nom", [], "any", false, false, false, 90), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 90), "prenom", [], "any", false, false, false, 90), "html", null, true);
            yield "</td>
                <td>";
            // line 91
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 91), "html", null, true);
            yield "</td>
                <td class=\"actions\">
                    ";
            // line 93
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 93) == "pending")) {
                // line 94
                yield "                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 94)]), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"approve\">Approuver</button>
                    </form>
                    <form method=\"post\" action=\"";
                // line 97
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 97)]), "html", null, true);
                yield "\">
                        <button type=\"submit\" class=\"reject\">Rejeter</button>
                    </form>
                    ";
            }
            // line 101
            yield "                </td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <div class=\"publication-content\">
                        ";
            // line 106
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 106), "html", null, true));
            yield "
                    </div>
                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 111
        yield "        </tbody>
    </table>
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
        return "admin/publications.html.twig";
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
        return array (  236 => 111,  225 => 106,  218 => 101,  211 => 97,  204 => 94,  202 => 93,  197 => 91,  191 => 90,  188 => 89,  184 => 88,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Gérer les Publications{% endblock %}

{% block body %}
<style>
    body {
        font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
        background-color: #f0f2f5;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1200px;
        margin: 0 auto;
        padding: 20px;
    }
    table {
        width: 100%;
        border-collapse: collapse;
        margin-bottom: 20px;
        background-color: white;
        border-radius: 8px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    }
    th, td {
        padding: 15px;
        text-align: left;
        border-bottom: 1px solid #ddd;
    }
    th {
        background-color: #3498db;
        color: white;
        font-weight: 600;
    }
    tr:hover {background-color: #f5f5f5;}
    .actions {
        display: flex;
        gap: 10px;
    }
    button {
        padding: 10px 15px;
        border: none;
        border-radius: 5px;
        cursor: pointer;
        transition: background-color 0.3s ease, transform 0.2s ease;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    button:hover {
        background-color: #2980b9;
        transform: translateY(-2px);
    }
    .approve {
        background-color: #2ecc71;
        color: white;
    }
    .reject {
        background-color: #e74c3c;
        color: white;
    }
    h1 {
        color: #333;
        font-size: 2em;
        margin-bottom: 20px;
    }
    .publication-content {
        margin-top: 10px;
        padding: 10px;
        background-color: #fff;
        border-radius: 5px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
</style>

<div class=\"container\">
    <h1>Gérer les Publications</h1>

    <table>
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            {% for publication in publications %}
            <tr>
                <td>{{ publication.user.nom }} {{ publication.user.prenom }}</td>
                <td>{{ publication.status }}</td>
                <td class=\"actions\">
                    {% if publication.status == 'pending' %}
                    <form method=\"post\" action=\"{{ path('publication_approve', {'id': publication.id}) }}\">
                        <button type=\"submit\" class=\"approve\">Approuver</button>
                    </form>
                    <form method=\"post\" action=\"{{ path('publication_reject', {'id': publication.id}) }}\">
                        <button type=\"submit\" class=\"reject\">Rejeter</button>
                    </form>
                    {% endif %}
                </td>
            </tr>
            <tr>
                <td colspan=\"3\">
                    <div class=\"publication-content\">
                        {{ publication.contenu|nl2br }}
                    </div>
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
{% endblock %}
", "admin/publications.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\admin\\publications.html.twig");
    }
}
