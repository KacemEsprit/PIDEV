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

/* publication/edit.html.twig */
class __TwigTemplate_388b871fc621d1440c794d36ed455e23 extends Template
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
        return "base_publication.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/edit.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/edit.html.twig"));

        $this->parent = $this->loadTemplate("base_publication.html.twig", "publication/edit.html.twig", 1);
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

        yield "Modifier la publication";
        
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
        yield "<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">
    <div class=\"edit-form-container\">
        <h1>Modifier la publication</h1>

        ";
        // line 10
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 10, $this->source); })()), 'form_start', ["attr" => ["class" => "edit-publication-form"]]);
        yield "
            <div class=\"form-group\">
                ";
        // line 12
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "contenu", [], "any", false, false, false, 12), 'widget', ["attr" => ["placeholder" => "Que voulez-vous partager ?", "class" => "form-textarea"]]);
        // line 17
        yield "
            </div>
            
            <div class=\"form-group\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "imageFiles", [], "any", false, false, false, 21), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        // line 26
        yield "
            </div>

            <div class=\"form-group\">
                <label class=\"anonymous-toggle\">
                    ";
        // line 31
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 31, $this->source); })()), "isAnonymous", [], "any", false, false, false, 31), 'widget');
        yield "
                    <span class=\"toggle-slider\"></span>
                    <span class=\"anonymous-label\">
                        <i class=\"fas fa-user-secret\"></i> Publier anonymement
                    </span>
                </label>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 40
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save\"></i> Enregistrer
                </button>
            </div>
        ";
        // line 47
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 47, $this->source); })()), 'form_end');
        yield "
    </div>

    ";
        // line 50
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 50, $this->source); })()), "imageUrls", [], "any", false, false, false, 50)) > 0)) {
            // line 51
            yield "        <div class=\"current-images\">
            <h3>Images actuelles</h3>
            <div class=\"images-grid\">
                ";
            // line 54
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 54, $this->source); })()), "imageUrls", [], "any", false, false, false, 54));
            foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                // line 55
                yield "                    <div class=\"image-item\">
                        <img src=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                yield "\" alt=\"Image actuelle\" class=\"current-image\">
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 59
            yield "            </div>
        </div>
    ";
        }
        // line 62
        yield "</div>

<style>
.edit-form-container {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.edit-form-container h1 {
    color: #2d7a7a;
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
}

.form-textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e0f3f8;
    border-radius: 8px;
    font-size: 1rem;
    line-height: 1.5;
    resize: vertical;
    min-height: 120px;
}

.form-textarea:focus {
    outline: none;
    border-color: #2d7a7a;
    box-shadow: 0 0 0 2px rgba(45, 122, 122, 0.2);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
    width: 100%;
    padding: 0.5rem;
    border: 2px solid #e0f3f8;
    border-radius: 8px;
}

.anonymous-toggle {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

.toggle-slider {
    width: 40px;
    height: 20px;
    background: #e0f3f8;
    border-radius: 20px;
    position: relative;
    transition: all 0.3s ease;
}

.toggle-slider:before {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50%;
    top: 2px;
    left: 2px;
    transition: all 0.3s ease;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider {
    background: #2d7a7a;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.anonymous-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #666;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    margin-top: 2rem;
}

.btn {
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    transition: opacity 0.3s;
}

.btn-primary {
    background: #2d7a7a;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}

.current-images {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.current-images h3 {
    color: #2d7a7a;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.images-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 1rem;
}

.image-item {
    aspect-ratio: 1;
    border-radius: 8px;
    overflow: hidden;
}

.current-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>
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
        return "publication/edit.html.twig";
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
        return array (  184 => 62,  179 => 59,  170 => 56,  167 => 55,  163 => 54,  158 => 51,  156 => 50,  150 => 47,  140 => 40,  128 => 31,  121 => 26,  119 => 21,  113 => 17,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_publication.html.twig' %}

{% block title %}Modifier la publication{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">
    <div class=\"edit-form-container\">
        <h1>Modifier la publication</h1>

        {{ form_start(form, {'attr': {'class': 'edit-publication-form'}}) }}
            <div class=\"form-group\">
                {{ form_widget(form.contenu, {
                    'attr': {
                        'placeholder': 'Que voulez-vous partager ?',
                        'class': 'form-textarea'
                    }
                }) }}
            </div>
            
            <div class=\"form-group\">
                {{ form_widget(form.imageFiles, {
                    'attr': {
                        'class': 'form-control',
                        'accept': 'image/*'
                    }
                }) }}
            </div>

            <div class=\"form-group\">
                <label class=\"anonymous-toggle\">
                    {{ form_widget(form.isAnonymous) }}
                    <span class=\"toggle-slider\"></span>
                    <span class=\"anonymous-label\">
                        <i class=\"fas fa-user-secret\"></i> Publier anonymement
                    </span>
                </label>
            </div>

            <div class=\"form-actions\">
                <a href=\"{{ path('app_publication_index') }}\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save\"></i> Enregistrer
                </button>
            </div>
        {{ form_end(form) }}
    </div>

    {% if publication.imageUrls|length > 0 %}
        <div class=\"current-images\">
            <h3>Images actuelles</h3>
            <div class=\"images-grid\">
                {% for imageUrl in publication.imageUrls %}
                    <div class=\"image-item\">
                        <img src=\"{{ asset(imageUrl) }}\" alt=\"Image actuelle\" class=\"current-image\">
                    </div>
                {% endfor %}
            </div>
        </div>
    {% endif %}
</div>

<style>
.edit-form-container {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.edit-form-container h1 {
    color: #2d7a7a;
    margin-bottom: 1.5rem;
    font-size: 1.5rem;
}

.form-textarea {
    width: 100%;
    padding: 1rem;
    border: 2px solid #e0f3f8;
    border-radius: 8px;
    font-size: 1rem;
    line-height: 1.5;
    resize: vertical;
    min-height: 120px;
}

.form-textarea:focus {
    outline: none;
    border-color: #2d7a7a;
    box-shadow: 0 0 0 2px rgba(45, 122, 122, 0.2);
}

.form-group {
    margin-bottom: 1.5rem;
}

.form-control {
    width: 100%;
    padding: 0.5rem;
    border: 2px solid #e0f3f8;
    border-radius: 8px;
}

.anonymous-toggle {
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    cursor: pointer;
}

.toggle-slider {
    width: 40px;
    height: 20px;
    background: #e0f3f8;
    border-radius: 20px;
    position: relative;
    transition: all 0.3s ease;
}

.toggle-slider:before {
    content: '';
    position: absolute;
    width: 16px;
    height: 16px;
    background: white;
    border-radius: 50%;
    top: 2px;
    left: 2px;
    transition: all 0.3s ease;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider {
    background: #2d7a7a;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.anonymous-label {
    display: flex;
    align-items: center;
    gap: 0.5rem;
    color: #666;
}

.form-actions {
    display: flex;
    justify-content: flex-end;
    gap: 1rem;
    margin-top: 2rem;
}

.btn {
    padding: 0.8rem 1.5rem;
    border: none;
    border-radius: 4px;
    cursor: pointer;
    font-size: 1rem;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    text-decoration: none;
    transition: opacity 0.3s;
}

.btn-primary {
    background: #2d7a7a;
    color: white;
}

.btn-secondary {
    background: #6c757d;
    color: white;
}

.btn:hover {
    opacity: 0.9;
}

.current-images {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.current-images h3 {
    color: #2d7a7a;
    margin-bottom: 1rem;
    font-size: 1.2rem;
}

.images-grid {
    display: grid;
    grid-template-columns: repeat(auto-fill, minmax(150px, 1fr));
    gap: 1rem;
}

.image-item {
    aspect-ratio: 1;
    border-radius: 8px;
    overflow: hidden;
}

.current-image {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
    }
    
    .btn {
        width: 100%;
        justify-content: center;
    }
}
</style>
{% endblock %}
", "publication/edit.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\publication\\edit.html.twig");
    }
}
