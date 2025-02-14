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
class __TwigTemplate_80aac6c77f02f69ca83971f4e4a9b440 extends Template
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
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 12, $this->source); })()), "contenu", [], "any", false, false, false, 12), 'widget', ["attr" => ["placeholder" => "Que voulez-vous partager ?", "class" => "form-textarea", "maxlength" => 120, "oninput" => "this.value = this.value.slice(0, 120)", "style" => "height: auto; min-height: 100px; overflow-y: auto;"]]);
        // line 20
        yield "
            </div>

            <div class=\"form-group category-select\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i class=\"fas fa-tag\"></i>
                    </span>
                    ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "category", [], "any", false, false, false, 28), 'widget', ["attr" => ["class" => "form-select custom-select"]]);
        // line 32
        yield "
                </div>
            </div> 
            <div class=\"form-group\">
                ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "imageFiles", [], "any", false, false, false, 36), 'widget', ["attr" => ["class" => "form-control", "accept" => "image/*"]]);
        // line 41
        yield "
            </div>

            <div class=\"form-group\">
                <label class=\"anonymous-toggle\">
                    ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "isAnonymous", [], "any", false, false, false, 46), 'widget');
        yield "
                    <span class=\"toggle-slider\"></span>
                    <span class=\"anonymous-label\">
                        <i class=\"fas fa-user-secret\"></i> Publier anonymement
                    </span>
                </label>
            </div>

            <div class=\"form-actions\">
                <a href=\"";
        // line 55
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
        yield "\" class=\"btn btn-secondary\">
                    <i class=\"fas fa-arrow-left\"></i> Retour
                </a>
                <button type=\"submit\" class=\"btn btn-primary\">
                    <i class=\"fas fa-save\"></i> Enregistrer
                </button>
            </div>
        ";
        // line 62
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 62, $this->source); })()), 'form_end');
        yield "
    </div>

    ";
        // line 65
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 65, $this->source); })()), "imageUrls", [], "any", false, false, false, 65)) > 0)) {
            // line 66
            yield "        <div class=\"current-images\">
            <h3>Images actuelles</h3>
            <div class=\"images-grid\">
                ";
            // line 69
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 69, $this->source); })()), "imageUrls", [], "any", false, false, false, 69));
            foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                // line 70
                yield "                    <div class=\"image-item\">
                        <img src=\"";
                // line 71
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                yield "\" alt=\"Image actuelle\" class=\"current-image\">
                    </div>
                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 74
            yield "            </div>
        </div>
    ";
        }
        // line 77
        yield "</div>

<style>
    .category-select .input-group {
    margin: 1rem 0;
}

.category-select .input-group-text {
    background-color: #95E1D3;
    border: none;
    color: white;
    border-radius: 8px 0 0 8px;
    padding: 0 1rem;
}

.custom-select {
    border: 2px solid #e0f3f8;
    border-left: none;
    border-radius: 0 8px 8px 0;
    padding: 0.75rem 1.5rem;
    height: auto;
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%2395E1D3' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e\");
    background-position: right 1rem center;
    background-repeat: no-repeat;
    background-size: 16px 12px;
    appearance: none;
}

.custom-select:focus {
    box-shadow: none;
    border-color: #95E1D3;
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #95E1D3;
    width: 100%;
    text-align: center;
}

.form-control-file {
    display: none;
}
.edit-form-container {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.edit-form-container h1 {
    color: #95E1D3;
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
    border-color: #95E1D3;
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
    background: #95E1D3;
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
    background: #95E1D3;
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
    color: #95E1D3;
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
        return array (  196 => 77,  191 => 74,  182 => 71,  179 => 70,  175 => 69,  170 => 66,  168 => 65,  162 => 62,  152 => 55,  140 => 46,  133 => 41,  131 => 36,  125 => 32,  123 => 28,  113 => 20,  111 => 12,  106 => 10,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
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
                        'class': 'form-textarea',
                            'maxlength': 120,
        'oninput': 'this.value = this.value.slice(0, 120)',
        'style': 'height: auto; min-height: 100px; overflow-y: auto;'
                    }
                }) }}
            </div>

            <div class=\"form-group category-select\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i class=\"fas fa-tag\"></i>
                    </span>
                    {{ form_widget(form.category, {
                        'attr': {
                            'class': 'form-select custom-select'
                        }
                    }) }}
                </div>
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
    .category-select .input-group {
    margin: 1rem 0;
}

.category-select .input-group-text {
    background-color: #95E1D3;
    border: none;
    color: white;
    border-radius: 8px 0 0 8px;
    padding: 0 1rem;
}

.custom-select {
    border: 2px solid #e0f3f8;
    border-left: none;
    border-radius: 0 8px 8px 0;
    padding: 0.75rem 1.5rem;
    height: auto;
    background-image: url(\"data:image/svg+xml,%3csvg xmlns='http://www.w3.org/2000/svg' viewBox='0 0 16 16'%3e%3cpath fill='none' stroke='%2395E1D3' stroke-linecap='round' stroke-linejoin='round' stroke-width='2' d='M2 5l6 6 6-6'/%3e%3c/svg%3e\");
    background-position: right 1rem center;
    background-repeat: no-repeat;
    background-size: 16px 12px;
    appearance: none;
}

.custom-select:focus {
    box-shadow: none;
    border-color: #95E1D3;
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #95E1D3;
    width: 100%;
    text-align: center;
}

.form-control-file {
    display: none;
}
.edit-form-container {
    background: white;
    padding: 2rem;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    margin-bottom: 2rem;
}

.edit-form-container h1 {
    color: #95E1D3;
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
    border-color: #95E1D3;
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
    background: #95E1D3;
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
    background: #95E1D3;
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
    color: #95E1D3;
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
{% endblock %}", "publication/edit.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\publication\\edit.html.twig");
    }
}
