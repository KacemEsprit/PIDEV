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

/* medecin/edit_rapport.html.twig */
class __TwigTemplate_bf9e3f1b2b8669063dd1dddf6a59b126 extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/edit_rapport.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/edit_rapport.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medecin/edit_rapport.html.twig", 1);
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

        yield "Modifier le Rapport";
        
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
        yield "<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"card-title mb-0\">
                        <i class=\"fas fa-edit me-2\"></i>
                        Modifier le Rapport Médical
                    </h3>
                </div>
                <div class=\"card-body\">
                    ";
        // line 17
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation"]]);
        yield "
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "age", [], "any", false, false, false, 21), 'row', ["label" => "Âge", "attr" => ["class" => "form-control"]]);
        // line 24
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 27
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 27, $this->source); })()), "sexe", [], "any", false, false, false, 27), 'row', ["label" => "Sexe", "attr" => ["class" => "form-control"]]);
        // line 30
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 36
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 36, $this->source); })()), "tensionArterielle", [], "any", false, false, false, 36), 'row', ["label" => "Tension Artérielle", "attr" => ["class" => "form-control"]]);
        // line 39
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 42
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 42, $this->source); })()), "pouls", [], "any", false, false, false, 42), 'row', ["label" => "Pouls", "attr" => ["class" => "form-control"]]);
        // line 45
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 51
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 51, $this->source); })()), "temperature", [], "any", false, false, false, 51), 'row', ["label" => "Température (°C)", "attr" => ["class" => "form-control"]]);
        // line 54
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "saturationOxygene", [], "any", false, false, false, 57), 'row', ["label" => "Saturation en Oxygène (%)", "attr" => ["class" => "form-control"]]);
        // line 60
        yield "
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 66
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), "imc", [], "any", false, false, false, 66), 'row', ["label" => "IMC", "attr" => ["class" => "form-control"]]);
        // line 69
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 72
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 72, $this->source); })()), "niveauDouleur", [], "any", false, false, false, 72), 'row', ["label" => "Niveau de Douleur (1-10)", "attr" => ["class" => "form-control", "min" => "1", "max" => "10"]]);
        // line 75
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 80
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 80, $this->source); })()), "traitement", [], "any", false, false, false, 80), 'row', ["label" => "Traitement", "attr" => ["class" => "form-control"]]);
        // line 83
        yield "
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            ";
        // line 88
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 88, $this->source); })()), "doseMedicament", [], "any", false, false, false, 88), 'row', ["label" => "Dose du Médicament (mg)", "attr" => ["class" => "form-control"]]);
        // line 91
        yield "
                        </div>
                        <div class=\"col-md-6\">
                            ";
        // line 94
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 94, $this->source); })()), "frequenceTraitement", [], "any", false, false, false, 94), 'row', ["label" => "Fréquence du Traitement", "attr" => ["class" => "form-control"]]);
        // line 97
        yield "
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "complications", [], "any", false, false, false, 102), 'row', ["label" => "Complications", "attr" => ["class" => "form-control", "rows" => "3"]]);
        // line 105
        yield "
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"";
        // line 109
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_rapports");
        yield "\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                    </div>

                    ";
        // line 117
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 117, $this->source); })()), 'form_end');
        yield "
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    background: linear-gradient(45deg, #007bff, #0056b3);
    padding: 1.5rem;
}

.card-title {
    font-size: 1.5rem;
}

.form-control {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    padding: 0.75rem;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn {
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary {
    background: #007bff;
    border: none;
}

.btn-primary:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

.btn-secondary {
    background: #6c757d;
    border: none;
}

.btn-secondary:hover {
    background: #545b62;
    transform: translateY(-2px);
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
        return "medecin/edit_rapport.html.twig";
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
        return array (  231 => 117,  220 => 109,  214 => 105,  212 => 102,  205 => 97,  203 => 94,  198 => 91,  196 => 88,  189 => 83,  187 => 80,  180 => 75,  178 => 72,  173 => 69,  171 => 66,  163 => 60,  161 => 57,  156 => 54,  154 => 51,  146 => 45,  144 => 42,  139 => 39,  137 => 36,  129 => 30,  127 => 27,  122 => 24,  120 => 21,  113 => 17,  100 => 6,  87 => 5,  64 => 3,  41 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block title %}Modifier le Rapport{% endblock %}

{% block body %}
<div class=\"container py-5\">
    <div class=\"row justify-content-center\">
        <div class=\"col-md-8\">
            <div class=\"card shadow\">
                <div class=\"card-header bg-primary text-white\">
                    <h3 class=\"card-title mb-0\">
                        <i class=\"fas fa-edit me-2\"></i>
                        Modifier le Rapport Médical
                    </h3>
                </div>
                <div class=\"card-body\">
                    {{ form_start(form, {'attr': {'class': 'needs-validation'}}) }}
                    
                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.age, {
                                'label': 'Âge',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.sexe, {
                                'label': 'Sexe',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.tensionArterielle, {
                                'label': 'Tension Artérielle',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.pouls, {
                                'label': 'Pouls',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.temperature, {
                                'label': 'Température (°C)',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.saturationOxygene, {
                                'label': 'Saturation en Oxygène (%)',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.imc, {
                                'label': 'IMC',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.niveauDouleur, {
                                'label': 'Niveau de Douleur (1-10)',
                                'attr': {'class': 'form-control', 'min': '1', 'max': '10'}
                            }) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(form.traitement, {
                            'label': 'Traitement',
                            'attr': {'class': 'form-control'}
                        }) }}
                    </div>

                    <div class=\"row mb-3\">
                        <div class=\"col-md-6\">
                            {{ form_row(form.doseMedicament, {
                                'label': 'Dose du Médicament (mg)',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                        <div class=\"col-md-6\">
                            {{ form_row(form.frequenceTraitement, {
                                'label': 'Fréquence du Traitement',
                                'attr': {'class': 'form-control'}
                            }) }}
                        </div>
                    </div>

                    <div class=\"mb-3\">
                        {{ form_row(form.complications, {
                            'label': 'Complications',
                            'attr': {'class': 'form-control', 'rows': '3'}
                        }) }}
                    </div>

                    <div class=\"d-flex justify-content-between\">
                        <a href=\"{{ path('app_medecin_rapports') }}\" class=\"btn btn-secondary\">
                            <i class=\"fas fa-arrow-left me-2\"></i>Retour
                        </a>
                        <button type=\"submit\" class=\"btn btn-primary\">
                            <i class=\"fas fa-save me-2\"></i>Enregistrer les modifications
                        </button>
                    </div>

                    {{ form_end(form) }}
                </div>
            </div>
        </div>
    </div>
</div>

<style>
.card {
    border-radius: 15px;
    overflow: hidden;
}

.card-header {
    background: linear-gradient(45deg, #007bff, #0056b3);
    padding: 1.5rem;
}

.card-title {
    font-size: 1.5rem;
}

.form-control {
    border-radius: 8px;
    border: 2px solid #e9ecef;
    padding: 0.75rem;
    transition: all 0.3s ease;
}

.form-control:focus {
    border-color: #007bff;
    box-shadow: 0 0 0 0.2rem rgba(0, 123, 255, 0.25);
}

.btn {
    padding: 0.75rem 1.5rem;
    border-radius: 8px;
    font-weight: 500;
    transition: all 0.3s ease;
}

.btn-primary {
    background: #007bff;
    border: none;
}

.btn-primary:hover {
    background: #0056b3;
    transform: translateY(-2px);
}

.btn-secondary {
    background: #6c757d;
    border: none;
}

.btn-secondary:hover {
    background: #545b62;
    transform: translateY(-2px);
}
</style>
{% endblock %}
", "medecin/edit_rapport.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\medecin\\edit_rapport.html.twig");
    }
}
