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

/* medecin/appointment.html.twig */
class __TwigTemplate_3b2c71f1adcdbbdb8374e962248d1a8e extends Template
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/appointment.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/appointment.html.twig"));

        $this->parent = $this->loadTemplate("base.html.twig", "medecin/appointment.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

    }

    // line 3
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

        // line 4
        yield "    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Rapport d'État</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"";
        // line 10
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_home");
        yield "\">Accueil</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Rapport d'État</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Formulaire de rapport médical -->
    <div class=\"container py-5\">
        <div class=\"bg-white p-5 rounded shadow-sm border\">
            <h2 class=\"text-center text-primary mb-4\">Rapport Médical</h2>
            <hr>
            ";
        // line 23
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 23, $this->source); })()), 'form_start', ["attr" => ["class" => "needs-validation", "novalidate" => "novalidate"]]);
        yield "
                <!-- Section 1 : Informations Générales -->
                <h4 class=\"text-secondary mb-4\">Informations Générales</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        ";
        // line 28
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 28, $this->source); })()), "dateRapport", [], "any", false, false, false, 28), 'row', ["label" => "Date du Rapport", "attr" => ["class" => "form-control"]]);
        // line 31
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 34
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 34, $this->source); })()), "age", [], "any", false, false, false, 34), 'row', ["label" => "Âge", "attr" => ["class" => "form-control", "placeholder" => "Ex: 45"]]);
        // line 37
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 40
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 40, $this->source); })()), "sexe", [], "any", false, false, false, 40), 'row', ["label" => "Sexe", "attr" => ["class" => "form-select"]]);
        // line 43
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 46
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 46, $this->source); })()), "patient", [], "any", false, false, false, 46), 'row', ["label" => "Patient", "attr" => ["class" => "form-select"]]);
        // line 49
        yield "
                    </div>
                </div>

                <!-- Section 2 : Signes Vitaux -->
                <h4 class=\"text-secondary mb-4\">Signes Vitaux</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        ";
        // line 57
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 57, $this->source); })()), "tensionArterielle", [], "any", false, false, false, 57), 'row', ["label" => "Tension Artérielle", "attr" => ["class" => "form-control", "placeholder" => "Ex: 120/80"]]);
        // line 60
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 63
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 63, $this->source); })()), "pouls", [], "any", false, false, false, 63), 'row', ["label" => "Pouls", "attr" => ["class" => "form-control", "placeholder" => "Ex: 75"]]);
        // line 66
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 69
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 69, $this->source); })()), "temperature", [], "any", false, false, false, 69), 'row', ["label" => "Température", "attr" => ["class" => "form-control", "placeholder" => "Ex: 37.2"]]);
        // line 72
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 75
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 75, $this->source); })()), "saturationOxygene", [], "any", false, false, false, 75), 'row', ["label" => "Saturation en Oxygène", "attr" => ["class" => "form-control", "placeholder" => "Ex: 98"]]);
        // line 78
        yield "
                    </div>
                </div>

                <!-- Section 3 : Traitement -->
                <h4 class=\"text-secondary mb-4\">Traitement</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-4\">
                        ";
        // line 86
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 86, $this->source); })()), "traitement", [], "any", false, false, false, 86), 'row', ["label" => "Type de Traitement", "attr" => ["class" => "form-select"]]);
        // line 89
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 92
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 92, $this->source); })()), "doseMedicament", [], "any", false, false, false, 92), 'row', ["label" => "Dose du Médicament", "attr" => ["class" => "form-control", "placeholder" => "Ex: 500mg"]]);
        // line 95
        yield "
                    </div>
                    <div class=\"col-md-4\">
                        ";
        // line 98
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "frequenceTraitement", [], "any", false, false, false, 98), 'row', ["label" => "Fréquence du Traitement", "attr" => ["class" => "form-select"]]);
        // line 101
        yield "
                    </div>
                </div>

                <!-- Section 4 : Paramètres Spécifiques -->
                <h4 class=\"text-secondary mb-4\">Paramètres Spécifiques</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        ";
        // line 109
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 109, $this->source); })()), "imc", [], "any", false, false, false, 109), 'row', ["label" => "IMC", "attr" => ["class" => "form-control", "placeholder" => "Ex: 22.5"]]);
        // line 112
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 115
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 115, $this->source); })()), "niveauDouleur", [], "any", false, false, false, 115), 'row', ["label" => "Niveau de Douleur", "attr" => ["class" => "form-control", "placeholder" => "Ex: 3"]]);
        // line 118
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 121
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 121, $this->source); })()), "perteDeSang", [], "any", false, false, false, 121), 'row', ["label" => "Perte de Sang", "attr" => ["class" => "form-control", "placeholder" => "Ex: 100ml"]]);
        // line 124
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 127
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 127, $this->source); })()), "tempsOperation", [], "any", false, false, false, 127), 'row', ["label" => "Temps d'Opération", "attr" => ["class" => "form-control", "placeholder" => "Ex: 120min"]]);
        // line 130
        yield "
                    </div>
                </div>

                <!-- Section 5 : Paramètres Spéciaux -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        ";
        // line 137
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 137, $this->source); })()), "dureeSeance", [], "any", false, false, false, 137), 'row', ["label" => "Durée de Séance", "attr" => ["class" => "form-control", "placeholder" => "Ex: 60min"]]);
        // line 140
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 143
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 143, $this->source); })()), "filtrationSang", [], "any", false, false, false, 143), 'row', ["label" => "Filtration du Sang", "attr" => ["class" => "form-control", "placeholder" => "Ex: 500ml/min"]]);
        // line 146
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 149
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 149, $this->source); })()), "creatinine", [], "any", false, false, false, 149), 'row', ["label" => "Créatinine", "attr" => ["class" => "form-control", "placeholder" => "Ex: 80"]]);
        // line 152
        yield "
                    </div>
                    <div class=\"col-md-3\">
                        ";
        // line 155
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 155, $this->source); })()), "scoreGlasgow", [], "any", false, false, false, 155), 'row', ["label" => "Score de Glasgow", "attr" => ["class" => "form-control", "placeholder" => "Ex: 15"]]);
        // line 158
        yield "
                    </div>
                </div>

                <!-- Section 6 : État Respiratoire et Complications -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-4\">
                        ";
        // line 165
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 165, $this->source); })()), "respirationAssistee", [], "any", false, false, false, 165), 'row', ["label" => "Respiration Assistée", "attr" => ["class" => "form-select"]]);
        // line 168
        yield "
                    </div>
                    <div class=\"col-md-8\">
                        ";
        // line 171
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 171, $this->source); })()), "complications", [], "any", false, false, false, 171), 'row', ["label" => "Complications", "attr" => ["class" => "form-control", "placeholder" => "Décrivez les complications éventuelles..."]]);
        // line 174
        yield "
                    </div>
                </div>

                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary px-5\">Enregistrer le Rapport</button>
                </div>

            ";
        // line 182
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 182, $this->source); })()), 'form_end');
        yield "
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
        return "medecin/appointment.html.twig";
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
        return array (  283 => 182,  273 => 174,  271 => 171,  266 => 168,  264 => 165,  255 => 158,  253 => 155,  248 => 152,  246 => 149,  241 => 146,  239 => 143,  234 => 140,  232 => 137,  223 => 130,  221 => 127,  216 => 124,  214 => 121,  209 => 118,  207 => 115,  202 => 112,  200 => 109,  190 => 101,  188 => 98,  183 => 95,  181 => 92,  176 => 89,  174 => 86,  164 => 78,  162 => 75,  157 => 72,  155 => 69,  150 => 66,  148 => 63,  143 => 60,  141 => 57,  131 => 49,  129 => 46,  124 => 43,  122 => 40,  117 => 37,  115 => 34,  110 => 31,  108 => 28,  100 => 23,  84 => 10,  76 => 4,  63 => 3,  40 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base.html.twig' %}

{% block body %}
    <!-- Page Header Start -->
    <div class=\"container-fluid page-header py-5 mb-5 wow fadeIn\" data-wow-delay=\"0.1s\">
        <div class=\"container py-5\">
            <h1 class=\"display-3 text-white mb-3 animated slideInDown\">Rapport d'État</h1>
            <nav aria-label=\"breadcrumb animated slideInDown\">
                <ol class=\"breadcrumb text-uppercase mb-0\">
                    <li class=\"breadcrumb-item\"><a class=\"text-white\" href=\"{{ path('app_home') }}\">Accueil</a></li>
                    <li class=\"breadcrumb-item text-primary active\" aria-current=\"page\">Rapport d'État</li>
                </ol>
            </nav>
        </div>
    </div>
    <!-- Page Header End -->

    <!-- Formulaire de rapport médical -->
    <div class=\"container py-5\">
        <div class=\"bg-white p-5 rounded shadow-sm border\">
            <h2 class=\"text-center text-primary mb-4\">Rapport Médical</h2>
            <hr>
            {{ form_start(form, {'attr': {'class': 'needs-validation', 'novalidate': 'novalidate'}}) }}
                <!-- Section 1 : Informations Générales -->
                <h4 class=\"text-secondary mb-4\">Informations Générales</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        {{ form_row(form.dateRapport, {
                            'label': 'Date du Rapport',
                            'attr': {'class': 'form-control'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.age, {
                            'label': 'Âge',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 45'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.sexe, {
                            'label': 'Sexe',
                            'attr': {'class': 'form-select'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.patient, {
                            'label': 'Patient',
                            'attr': {'class': 'form-select'}
                        }) }}
                    </div>
                </div>

                <!-- Section 2 : Signes Vitaux -->
                <h4 class=\"text-secondary mb-4\">Signes Vitaux</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        {{ form_row(form.tensionArterielle, {
                            'label': 'Tension Artérielle',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 120/80'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.pouls, {
                            'label': 'Pouls',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 75'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.temperature, {
                            'label': 'Température',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 37.2'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.saturationOxygene, {
                            'label': 'Saturation en Oxygène',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 98'}
                        }) }}
                    </div>
                </div>

                <!-- Section 3 : Traitement -->
                <h4 class=\"text-secondary mb-4\">Traitement</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-4\">
                        {{ form_row(form.traitement, {
                            'label': 'Type de Traitement',
                            'attr': {'class': 'form-select'}
                        }) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.doseMedicament, {
                            'label': 'Dose du Médicament',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 500mg'}
                        }) }}
                    </div>
                    <div class=\"col-md-4\">
                        {{ form_row(form.frequenceTraitement, {
                            'label': 'Fréquence du Traitement',
                            'attr': {'class': 'form-select'}
                        }) }}
                    </div>
                </div>

                <!-- Section 4 : Paramètres Spécifiques -->
                <h4 class=\"text-secondary mb-4\">Paramètres Spécifiques</h4>
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        {{ form_row(form.imc, {
                            'label': 'IMC',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 22.5'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.niveauDouleur, {
                            'label': 'Niveau de Douleur',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 3'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.perteDeSang, {
                            'label': 'Perte de Sang',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 100ml'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.tempsOperation, {
                            'label': 'Temps d\\'Opération',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 120min'}
                        }) }}
                    </div>
                </div>

                <!-- Section 5 : Paramètres Spéciaux -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-3\">
                        {{ form_row(form.dureeSeance, {
                            'label': 'Durée de Séance',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 60min'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.filtrationSang, {
                            'label': 'Filtration du Sang',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 500ml/min'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.creatinine, {
                            'label': 'Créatinine',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 80'}
                        }) }}
                    </div>
                    <div class=\"col-md-3\">
                        {{ form_row(form.scoreGlasgow, {
                            'label': 'Score de Glasgow',
                            'attr': {'class': 'form-control', 'placeholder': 'Ex: 15'}
                        }) }}
                    </div>
                </div>

                <!-- Section 6 : État Respiratoire et Complications -->
                <div class=\"row mb-4\">
                    <div class=\"col-md-4\">
                        {{ form_row(form.respirationAssistee, {
                            'label': 'Respiration Assistée',
                            'attr': {'class': 'form-select'}
                        }) }}
                    </div>
                    <div class=\"col-md-8\">
                        {{ form_row(form.complications, {
                            'label': 'Complications',
                            'attr': {'class': 'form-control', 'placeholder': 'Décrivez les complications éventuelles...'}
                        }) }}
                    </div>
                </div>

                <div class=\"text-center mt-4\">
                    <button type=\"submit\" class=\"btn btn-primary px-5\">Enregistrer le Rapport</button>
                </div>

            {{ form_end(form) }}
        </div>
    </div>
{% endblock %}
", "medecin/appointment.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\medecin\\appointment.html.twig");
    }
}
