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
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1400px;
        margin: 2rem auto;
        padding: 0 20px;
    }
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #e9ecef;
    }
    h1 {
        color: #2c3e50;
        font-size: 1.8rem;
        font-weight: 600;
        margin: 0;
    }
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    th, td {
        padding: 1rem 1.5rem;
        text-align: left;
        border-bottom: 1px solid #edf2f7;
        vertical-align: middle;
    }
    th {
        background-color: #4a90e2;
        color: white;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }
    tr:hover {
        background-color: #f8f9ff;
    }
    .publication-content {
        max-width: 400px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #666;
        font-size: 0.9rem;
    }
    .status-badge {
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }
    .actions {
        display: flex;
        gap: 8px;
    }
    button {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    .approve {
        background-color: #28a745;
        color: white;
    }
    .approve:hover {
        background-color: #218838;
    }
    .reject {
        background-color: #dc3545;
        color: white;
    }
    .reject:hover {
        background-color: #c82333;
    }
    .author {
        font-weight: 500;
        color: #2c3e50;
    }
    .filter-buttons {
        margin-bottom: 2rem;
        display: flex;
        gap: 1rem;
    }
    
    .filter-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s ease;
        background-color: #f8f9fa;
        color: #495057;
        border: 1px solid #dee2e6;
    }
    
    .filter-btn.active {
        background-color: #4a90e2;
        color: white;
        border-color: #4a90e2;
    }
    
    .filter-btn:hover {
        background-color: #e9ecef;
    }
    
    .filter-btn.active:hover {
        background-color: #357abd;
          }
    
    .status-approved {
        background-color: #d4edda;
        color: #155724;
    }
    
    .status-rejected {
        background-color: #f8d7da;
        color: #721c24;
    }


    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .modal-content {
         position: relative;
        background-color: #fff;
        margin: 5% auto;
        padding: 2rem;
        width: 90%;
        max-width: 800px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-height: 80vh;
        overflow-y: auto;
    }

    .close-modal {
        position: absolute;
        right: 1rem;
        top: 1rem;
        font-size: 1.5rem;
        cursor: pointer;
        color: #666;
    }
        .close-modal:hover {
        color: #333;
    }

    .publication-content {
        cursor: pointer;
    }

    .modal-title {
        font-size: 1.2rem;
        color: #2c3e50;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #eee;
    }

    .modal-body {
       line-height: 1.6;
        color: #444;
        white-space: pre-wrap;
        word-wrap: break-word;
        overflow-wrap: break-word;
        padding: 1rem;
        max-height: calc(80vh - 100px);
        overflow-y: auto;
    }
      .modal-body img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
    }

    .modal-body * {
        max-width: 100%;
    }
.modal-body::-webkit-scrollbar {
        width: 8px;
    }

    .modal-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .modal-body::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }

    .modal-body::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
        /* Animation du modal */
    .modal {
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .modal.show {
        opacity: 1;
        visibility: visible;
    }

    .modal-content {
        transform: translateY(-20px);
        transition: all 0.3s ease;
    }

    .modal.show .modal-content {
        transform: translateY(0);
    }
</style>

<div class=\"container\">
    <div class=\"page-header\">
        <h1>Gestion des Publications</h1>
    </div>
   <div class=\"filter-buttons\">
        <button class=\"filter-btn active\" data-status=\"all\">Toutes</button>
        <button class=\"filter-btn\" data-status=\"pending\">En Attente</button>
        <button class=\"filter-btn\" data-status=\"approved\">Approuvées</button>
        <button class=\"filter-btn\" data-status=\"rejected\">Rejetées</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Contenu</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             ";
        // line 277
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, (isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 277, $this->source); })()), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 277, $this->source); })()), "datePb", [], "any", false, false, false, 277) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 277, $this->source); })()), "datePb", [], "any", false, false, false, 277)); }));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 278
            yield "            <tr data-status=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 278), "html", null, true);
            yield "\">
                <td>
                    <span class=\"author\">";
            // line 280
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 280), "nom", [], "any", false, false, false, 280), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 280), "prenom", [], "any", false, false, false, 280), "html", null, true);
            yield "</span>
                </td>
             <td>
  <div class=\"publication-content\" data-full-content=\"";
            // line 283
            yield CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 283);
            yield "\">
    ";
            // line 284
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::striptags(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 284)), 0, 100), "html", null, true);
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 284)) > 100)) {
                yield "...";
            }
            // line 285
            yield "</div>
</td>
                <td>
                    <span class=\"status-badge status-";
            // line 288
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 288), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 288), "html", null, true);
            yield "</span>
                </td>
                <td class=\"actions\">
                    ";
            // line 291
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 291) == "pending")) {
                // line 292
                yield "                    <form method=\"post\" action=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_approve", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 292)]), "html", null, true);
                yield "\" style=\"display: inline;\">
                        <button type=\"submit\" class=\"approve\">Approuver</button>
                    </form>
                    <form method=\"post\" action=\"";
                // line 295
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("publication_reject", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 295)]), "html", null, true);
                yield "\" style=\"display: inline;\">
                        <button type=\"submit\" class=\"reject\">Rejeter</button>
                    </form>
                    ";
            }
            // line 299
            yield "                </td>
            </tr>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 302
        yield "        </tbody>
    </table>
</div>
<div class=\"modal\" id=\"contentModal\">
    <div class=\"modal-content\">
        <span class=\"close-modal\">&times;</span>
        <h3 class=\"modal-title\">Contenu de la publication</h3>
        <div class=\"modal-body\"></div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const rows = document.querySelectorAll('tbody tr');
 const modal = document.getElementById('contentModal');
    const modalBody = modal.querySelector('.modal-body');
    const closeModal = modal.querySelector('.close-modal');
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const status = button.getAttribute('data-status');
            
            rows.forEach(row => {
                if (status === 'all') {
                    row.style.display = '';
                } else {
                    const rowStatus = row.getAttribute('data-status');
                    row.style.display = rowStatus === status ? '' : 'none';
                }
            });
        });
    });
     // Gestion du modal
    document.querySelectorAll('.publication-content').forEach(content => {
        content.addEventListener('click', function() {
            const fullContent = this.getAttribute('data-full-content');
            modalBody.innerHTML = fullContent;
            modal.style.display = 'block';
            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        });
    });

    closeModal.addEventListener('click', function() {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    });
       window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300);
        }
    });
});
</script>
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
        return array (  437 => 302,  429 => 299,  422 => 295,  415 => 292,  413 => 291,  405 => 288,  400 => 285,  395 => 284,  391 => 283,  383 => 280,  377 => 278,  373 => 277,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Admin - Gérer les Publications{% endblock %}

{% block body %}
<style>
    body {
        font-family: 'Poppins', sans-serif;
        background-color: #f8f9fa;
        margin: 0;
        padding: 0;
    }
    .container {
        max-width: 1400px;
        margin: 2rem auto;
        padding: 0 20px;
    }
    .page-header {
        display: flex;
        justify-content: space-between;
        align-items: center;
        margin-bottom: 2rem;
        padding-bottom: 1rem;
        border-bottom: 2px solid #e9ecef;
    }
    h1 {
        color: #2c3e50;
        font-size: 1.8rem;
        font-weight: 600;
        margin: 0;
    }
    table {
        width: 100%;
        border-collapse: separate;
        border-spacing: 0;
        background-color: white;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 0 20px rgba(0, 0, 0, 0.05);
    }
    th, td {
        padding: 1rem 1.5rem;
        text-align: left;
        border-bottom: 1px solid #edf2f7;
        vertical-align: middle;
    }
    th {
        background-color: #4a90e2;
        color: white;
        font-weight: 500;
        text-transform: uppercase;
        font-size: 0.85rem;
        letter-spacing: 0.5px;
    }
    tr:hover {
        background-color: #f8f9ff;
    }
    .publication-content {
        max-width: 400px;
        overflow: hidden;
        text-overflow: ellipsis;
        white-space: nowrap;
        color: #666;
        font-size: 0.9rem;
    }
    .status-badge {
        padding: 0.4rem 0.8rem;
        border-radius: 20px;
        font-size: 0.85rem;
        font-weight: 500;
    }
    .status-pending {
        background-color: #fff3cd;
        color: #856404;
    }
    .actions {
        display: flex;
        gap: 8px;
    }
    button {
        padding: 0.5rem 1rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.85rem;
        font-weight: 500;
        transition: all 0.2s ease;
    }
    .approve {
        background-color: #28a745;
        color: white;
    }
    .approve:hover {
        background-color: #218838;
    }
    .reject {
        background-color: #dc3545;
        color: white;
    }
    .reject:hover {
        background-color: #c82333;
    }
    .author {
        font-weight: 500;
        color: #2c3e50;
    }
    .filter-buttons {
        margin-bottom: 2rem;
        display: flex;
        gap: 1rem;
    }
    
    .filter-btn {
        padding: 0.75rem 1.5rem;
        border: none;
        border-radius: 6px;
        cursor: pointer;
        font-size: 0.9rem;
        font-weight: 500;
        transition: all 0.2s ease;
        background-color: #f8f9fa;
        color: #495057;
        border: 1px solid #dee2e6;
    }
    
    .filter-btn.active {
        background-color: #4a90e2;
        color: white;
        border-color: #4a90e2;
    }
    
    .filter-btn:hover {
        background-color: #e9ecef;
    }
    
    .filter-btn.active:hover {
        background-color: #357abd;
          }
    
    .status-approved {
        background-color: #d4edda;
        color: #155724;
    }
    
    .status-rejected {
        background-color: #f8d7da;
        color: #721c24;
    }


    .modal {
        display: none;
        position: fixed;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        background-color: rgba(0, 0, 0, 0.5);
        z-index: 1000;
    }

    .modal-content {
         position: relative;
        background-color: #fff;
        margin: 5% auto;
        padding: 2rem;
        width: 90%;
        max-width: 800px;
        border-radius: 10px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        max-height: 80vh;
        overflow-y: auto;
    }

    .close-modal {
        position: absolute;
        right: 1rem;
        top: 1rem;
        font-size: 1.5rem;
        cursor: pointer;
        color: #666;
    }
        .close-modal:hover {
        color: #333;
    }

    .publication-content {
        cursor: pointer;
    }

    .modal-title {
        font-size: 1.2rem;
        color: #2c3e50;
        margin-bottom: 1rem;
        padding-bottom: 0.5rem;
        border-bottom: 1px solid #eee;
    }

    .modal-body {
       line-height: 1.6;
        color: #444;
        white-space: pre-wrap;
        word-wrap: break-word;
        overflow-wrap: break-word;
        padding: 1rem;
        max-height: calc(80vh - 100px);
        overflow-y: auto;
    }
      .modal-body img {
        max-width: 100%;
        height: auto;
        margin: 1rem 0;
    }

    .modal-body * {
        max-width: 100%;
    }
.modal-body::-webkit-scrollbar {
        width: 8px;
    }

    .modal-body::-webkit-scrollbar-track {
        background: #f1f1f1;
        border-radius: 4px;
    }

    .modal-body::-webkit-scrollbar-thumb {
        background: #888;
        border-radius: 4px;
    }

    .modal-body::-webkit-scrollbar-thumb:hover {
        background: #555;
    }
        /* Animation du modal */
    .modal {
        opacity: 0;
        visibility: hidden;
        transition: all 0.3s ease;
    }

    .modal.show {
        opacity: 1;
        visibility: visible;
    }

    .modal-content {
        transform: translateY(-20px);
        transition: all 0.3s ease;
    }

    .modal.show .modal-content {
        transform: translateY(0);
    }
</style>

<div class=\"container\">
    <div class=\"page-header\">
        <h1>Gestion des Publications</h1>
    </div>
   <div class=\"filter-buttons\">
        <button class=\"filter-btn active\" data-status=\"all\">Toutes</button>
        <button class=\"filter-btn\" data-status=\"pending\">En Attente</button>
        <button class=\"filter-btn\" data-status=\"approved\">Approuvées</button>
        <button class=\"filter-btn\" data-status=\"rejected\">Rejetées</button>
    </div>
    <table>
        <thead>
            <tr>
                <th>Auteur</th>
                <th>Contenu</th>
                <th>Statut</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
             {% for publication in publications|sort((a, b) => b.datePb <=> a.datePb) %}
            <tr data-status=\"{{ publication.status }}\">
                <td>
                    <span class=\"author\">{{ publication.user.nom }} {{ publication.user.prenom }}</span>
                </td>
             <td>
  <div class=\"publication-content\" data-full-content=\"{{ publication.contenu|raw }}\">
    {{ publication.contenu|striptags|slice(0, 100) }}{% if publication.contenu|length > 100 %}...{% endif %}
</div>
</td>
                <td>
                    <span class=\"status-badge status-{{ publication.status }}\">{{ publication.status }}</span>
                </td>
                <td class=\"actions\">
                    {% if publication.status == 'pending' %}
                    <form method=\"post\" action=\"{{ path('publication_approve', {'id': publication.id}) }}\" style=\"display: inline;\">
                        <button type=\"submit\" class=\"approve\">Approuver</button>
                    </form>
                    <form method=\"post\" action=\"{{ path('publication_reject', {'id': publication.id}) }}\" style=\"display: inline;\">
                        <button type=\"submit\" class=\"reject\">Rejeter</button>
                    </form>
                    {% endif %}
                </td>
            </tr>
            {% endfor %}
        </tbody>
    </table>
</div>
<div class=\"modal\" id=\"contentModal\">
    <div class=\"modal-content\">
        <span class=\"close-modal\">&times;</span>
        <h3 class=\"modal-title\">Contenu de la publication</h3>
        <div class=\"modal-body\"></div>
    </div>
</div>
<script>
document.addEventListener('DOMContentLoaded', function() {
    const filterButtons = document.querySelectorAll('.filter-btn');
    const rows = document.querySelectorAll('tbody tr');
 const modal = document.getElementById('contentModal');
    const modalBody = modal.querySelector('.modal-body');
    const closeModal = modal.querySelector('.close-modal');
    filterButtons.forEach(button => {
        button.addEventListener('click', () => {
            // Remove active class from all buttons
            filterButtons.forEach(btn => btn.classList.remove('active'));
            // Add active class to clicked button
            button.classList.add('active');

            const status = button.getAttribute('data-status');
            
            rows.forEach(row => {
                if (status === 'all') {
                    row.style.display = '';
                } else {
                    const rowStatus = row.getAttribute('data-status');
                    row.style.display = rowStatus === status ? '' : 'none';
                }
            });
        });
    });
     // Gestion du modal
    document.querySelectorAll('.publication-content').forEach(content => {
        content.addEventListener('click', function() {
            const fullContent = this.getAttribute('data-full-content');
            modalBody.innerHTML = fullContent;
            modal.style.display = 'block';
            setTimeout(() => {
                modal.classList.add('show');
            }, 10);
        });
    });

    closeModal.addEventListener('click', function() {
        modal.classList.remove('show');
        setTimeout(() => {
            modal.style.display = 'none';
        }, 300);
    });
       window.addEventListener('click', function(event) {
        if (event.target === modal) {
            modal.classList.remove('show');
            setTimeout(() => {
                modal.style.display = 'none';
            }, 300);
        }
    });
});
</script>
{% endblock %}", "admin/publications.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\admin\\publications.html.twig");
    }
}
