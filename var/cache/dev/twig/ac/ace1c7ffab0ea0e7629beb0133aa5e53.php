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

/* medecin/_edit_rapport_modal.html.twig */
class __TwigTemplate_44ff5d23b40677720f8c0fe0152f587d extends Template
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

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/_edit_rapport_modal.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "medecin/_edit_rapport_modal.html.twig"));

        // line 1
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 1, $this->source); })()), 'form_start', ["attr" => ["id" => "edit-rapport-form"], "action" => $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_medecin_edit_rapport", ["id" => CoreExtension::getAttribute($this->env, $this->source,         // line 5
(isset($context["rapport"]) || array_key_exists("rapport", $context) ? $context["rapport"] : (function () { throw new RuntimeError('Variable "rapport" does not exist.', 5, $this->source); })()), "id", [], "any", false, false, false, 5)]), "method" => "POST"]);
        // line 7
        yield "
<div class=\"modal-content\">
    <div class=\"modal-header bg-primary text-white\">
        <h5 class=\"modal-title\">
            <i class=\"fas fa-edit me-2\"></i>
            Modifier le Rapport Médical
        </h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
    </div>
    <div class=\"modal-body\">
        ";
        // line 17
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 17, $this->source); })()), 'errors');
        yield "
        
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 21
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 21, $this->source); })()), "dateRapport", [], "any", false, false, false, 21), 'row', ["label" => "Date", "attr" => ["class" => "form-control datepicker", "required" => true]]);
        // line 27
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 30
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 30, $this->source); })()), "age", [], "any", false, false, false, 30), 'row', ["label" => "Âge", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "required" => true]]);
        // line 38
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 44
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 44, $this->source); })()), "sexe", [], "any", false, false, false, 44), 'row', ["label" => "Sexe", "attr" => ["class" => "form-select", "required" => true]]);
        // line 50
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 53
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 53, $this->source); })()), "tensionArterielle", [], "any", false, false, false, 53), 'row', ["label" => "Tension Artérielle", "attr" => ["class" => "form-control", "required" => true]]);
        // line 59
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 65
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 65, $this->source); })()), "pouls", [], "any", false, false, false, 65), 'row', ["label" => "Pouls", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "required" => true]]);
        // line 73
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 76
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 76, $this->source); })()), "temperature", [], "any", false, false, false, 76), 'row', ["label" => "Température", "attr" => ["class" => "form-control", "type" => "number", "step" => "0.1", "required" => true]]);
        // line 84
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 90
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 90, $this->source); })()), "saturationOxygene", [], "any", false, false, false, 90), 'row', ["label" => "Saturation en oxygène", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "max" => "100", "required" => true]]);
        // line 99
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 102
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 102, $this->source); })()), "imc", [], "any", false, false, false, 102), 'row', ["label" => "IMC", "attr" => ["class" => "form-control", "type" => "number", "step" => "0.01", "required" => true]]);
        // line 110
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 116
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 116, $this->source); })()), "niveauDouleur", [], "any", false, false, false, 116), 'row', ["label" => "Niveau de douleur", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "max" => "10", "required" => true]]);
        // line 125
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 128
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 128, $this->source); })()), "traitement", [], "any", false, false, false, 128), 'row', ["label" => "Traitement", "attr" => ["class" => "form-select", "required" => true]]);
        // line 134
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 140
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 140, $this->source); })()), "doseMedicament", [], "any", false, false, false, 140), 'row', ["label" => "Dose du médicament", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "required" => true]]);
        // line 148
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 151
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 151, $this->source); })()), "frequenceTraitement", [], "any", false, false, false, 151), 'row', ["label" => "Fréquence du traitement", "attr" => ["class" => "form-select", "required" => true]]);
        // line 157
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 163
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 163, $this->source); })()), "perteDeSang", [], "any", false, false, false, 163), 'row', ["label" => "Perte de sang (ml)", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "required" => true]]);
        // line 171
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 174
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 174, $this->source); })()), "tempsOperation", [], "any", false, false, false, 174), 'row', ["label" => "Temps opération (min)", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "required" => true]]);
        // line 182
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 188
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 188, $this->source); })()), "dureeSeance", [], "any", false, false, false, 188), 'row', ["label" => "Durée séance (min)", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "required" => true]]);
        // line 196
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 199
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 199, $this->source); })()), "filtrationSang", [], "any", false, false, false, 199), 'row', ["label" => "Filtration sang (%)", "attr" => ["class" => "form-control", "type" => "number", "min" => "0", "max" => "100", "required" => true]]);
        // line 208
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                ";
        // line 214
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 214, $this->source); })()), "creatinine", [], "any", false, false, false, 214), 'row', ["label" => "Créatinine", "attr" => ["class" => "form-control", "type" => "number", "step" => "0.01", "required" => true]]);
        // line 222
        yield "
            </div>
            <div class=\"col-md-6\">
                ";
        // line 225
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 225, $this->source); })()), "scoreGlasgow", [], "any", false, false, false, 225), 'row', ["label" => "Score Glasgow", "attr" => ["class" => "form-control", "type" => "number", "min" => "3", "max" => "15", "required" => true]]);
        // line 234
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-12\">
                ";
        // line 240
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 240, $this->source); })()), "respirationAssistee", [], "any", false, false, false, 240), 'row', ["label" => "Respiration assistée", "attr" => ["class" => "form-check-input"]]);
        // line 245
        yield "
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-12\">
                ";
        // line 251
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 251, $this->source); })()), "complications", [], "any", false, false, false, 251), 'row', ["label" => "Complications", "attr" => ["class" => "form-control", "rows" => 3]]);
        // line 257
        yield "
            </div>
        </div>

        ";
        // line 261
        yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 261, $this->source); })()), 'rest');
        yield "
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"fas fa-times me-2\"></i>Annuler
        </button>
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Enregistrer
        </button>
    </div>
</div>
";
        // line 272
        yield         $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 272, $this->source); })()), 'form_end');
        yield "
";
        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        yield from [];
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName(): string
    {
        return "medecin/_edit_rapport_modal.html.twig";
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
        return array (  255 => 272,  241 => 261,  235 => 257,  233 => 251,  225 => 245,  223 => 240,  215 => 234,  213 => 225,  208 => 222,  206 => 214,  198 => 208,  196 => 199,  191 => 196,  189 => 188,  181 => 182,  179 => 174,  174 => 171,  172 => 163,  164 => 157,  162 => 151,  157 => 148,  155 => 140,  147 => 134,  145 => 128,  140 => 125,  138 => 116,  130 => 110,  128 => 102,  123 => 99,  121 => 90,  113 => 84,  111 => 76,  106 => 73,  104 => 65,  96 => 59,  94 => 53,  89 => 50,  87 => 44,  79 => 38,  77 => 30,  72 => 27,  70 => 21,  63 => 17,  51 => 7,  49 => 5,  48 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{{ form_start(form, {
    'attr': {
        'id': 'edit-rapport-form'
    },
    'action': path('app_medecin_edit_rapport', {'id': rapport.id}),
    'method': 'POST'
}) }}
<div class=\"modal-content\">
    <div class=\"modal-header bg-primary text-white\">
        <h5 class=\"modal-title\">
            <i class=\"fas fa-edit me-2\"></i>
            Modifier le Rapport Médical
        </h5>
        <button type=\"button\" class=\"btn-close btn-close-white\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
    </div>
    <div class=\"modal-body\">
        {{ form_errors(form) }}
        
        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.dateRapport, {
                    'label': 'Date',
                    'attr': {
                        'class': 'form-control datepicker',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.age, {
                    'label': 'Âge',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.sexe, {
                    'label': 'Sexe',
                    'attr': {
                        'class': 'form-select',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.tensionArterielle, {
                    'label': 'Tension Artérielle',
                    'attr': {
                        'class': 'form-control',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.pouls, {
                    'label': 'Pouls',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.temperature, {
                    'label': 'Température',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'step': '0.1',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.saturationOxygene, {
                    'label': 'Saturation en oxygène',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'max': '100',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.imc, {
                    'label': 'IMC',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'step': '0.01',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.niveauDouleur, {
                    'label': 'Niveau de douleur',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'max': '10',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.traitement, {
                    'label': 'Traitement',
                    'attr': {
                        'class': 'form-select',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.doseMedicament, {
                    'label': 'Dose du médicament',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.frequenceTraitement, {
                    'label': 'Fréquence du traitement',
                    'attr': {
                        'class': 'form-select',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.perteDeSang, {
                    'label': 'Perte de sang (ml)',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.tempsOperation, {
                    'label': 'Temps opération (min)',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.dureeSeance, {
                    'label': 'Durée séance (min)',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.filtrationSang, {
                    'label': 'Filtration sang (%)',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '0',
                        'max': '100',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-md-6\">
                {{ form_row(form.creatinine, {
                    'label': 'Créatinine',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'step': '0.01',
                        'required': true
                    }
                }) }}
            </div>
            <div class=\"col-md-6\">
                {{ form_row(form.scoreGlasgow, {
                    'label': 'Score Glasgow',
                    'attr': {
                        'class': 'form-control',
                        'type': 'number',
                        'min': '3',
                        'max': '15',
                        'required': true
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-12\">
                {{ form_row(form.respirationAssistee, {
                    'label': 'Respiration assistée',
                    'attr': {
                        'class': 'form-check-input'
                    }
                }) }}
            </div>
        </div>

        <div class=\"row mb-3\">
            <div class=\"col-12\">
                {{ form_row(form.complications, {
                    'label': 'Complications',
                    'attr': {
                        'class': 'form-control',
                        'rows': 3
                    }
                }) }}
            </div>
        </div>

        {{ form_rest(form) }}
    </div>
    <div class=\"modal-footer\">
        <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
            <i class=\"fas fa-times me-2\"></i>Annuler
        </button>
        <button type=\"submit\" class=\"btn btn-primary\">
            <i class=\"fas fa-save me-2\"></i>Enregistrer
        </button>
    </div>
</div>
{{ form_end(form) }}
", "medecin/_edit_rapport_modal.html.twig", "C:\\GLEsprit3eme\\Projet_PI\\Projet-recuperer\\PIDEV-raniabenali\\oncokidscare\\templates\\medecin\\_edit_rapport_modal.html.twig");
    }
}
