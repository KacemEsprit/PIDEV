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

/* publication/index.html.twig */
class __TwigTemplate_2347e704b52a0a4b612aff4ebe4c8a3d extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/index.html.twig"));

        $this->parent = $this->loadTemplate("base_publication.html.twig", "publication/index.html.twig", 1);
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

        yield "Publications";
        
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

        // line 7
        yield "<div class=\"game-sidebar\">
    <div class=\"stress-relief-card\" data-bs-toggle=\"modal\" data-bs-target=\"#gameModal\">
        <div class=\"stress-icon\">
            <i class=\"fas fa-gamepad\"></i>
        </div>
        <h4>Déstressez en jouant!</h4>
        <p>Cliquez ici pour libérer votre stress</p>
        <div class=\"stress-meter\">
            <div class=\"meter-fill\" style=\"width: 80%\"></div>
        </div>
    </div>
</div>

";
        // line 21
        yield "<div class=\"modal fade\" id=\"gameModal\" tabindex=\"-1\" aria-labelledby=\"gameModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"gameModalLabel\">ReactoMédico - Jeu anti-stress</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mini-game\">
                    <div class=\"game-container\">
                        <div class=\"target\"></div>
                        <div class=\"score-board\">
                            <span>Score: <span id=\"score\">0</span></span>
                            <span>Meilleur: <span id=\"highscore\">0</span></span>
                        </div>
                        <div class=\"timer-bar\">
                            <div class=\"timer-progress\"></div>
                        </div>
                        <button class=\"btn-start\">Commencer!</button>
                    </div>
                    <p class=\"game-instruction\">Cliquez le plus vite possible sur les cercles qui apparaissent!</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <small class=\"text-muted\">30 secondes de jeu = -40% de stress!</small>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">

    ";
        // line 53
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 53, $this->source); })()), "flashes", ["info"], "method", false, false, false, 53));
        foreach ($context['_seq'] as $context["_key"] => $context["message"]) {
            // line 54
            yield "        <div class=\"toast-message\">
            ";
            // line 55
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["message"], "html", null, true);
            yield "
        </div>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['message'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "
    ";
        // line 59
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 60
            yield "        <div class=\"new-publication-form\">
            <div class=\"form-header\">
                <img src=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 62, $this->source); })()), "user", [], "any", false, false, false, 62), "prenom", [], "any", false, false, false, 62), "html", null, true);
            yield "\">
                <h2>Créer une publication</h2>
            </div>

            ";
            // line 66
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 66, $this->source); })()), 'form_start', ["attr" => ["class" => "publication-form"]]);
            yield "
                <div class=\"form-group\">
                    ";
            // line 68
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 68, $this->source); })()), "contenu", [], "any", false, false, false, 68), 'widget', ["attr" => ["placeholder" => "Partagez votre expérience ou posez une question...", "class" => "form-control", "maxlength" => 120, "oninput" => "this.value = this.value.slice(0, 120)"]]);
            // line 75
            yield "
                </div>
                
                <div class=\"form-group\">
                    <label class=\"file-input-label\">
                        <i class=\"fas fa-camera\"></i> Photos (maximum 5)
                        ";
            // line 81
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 81, $this->source); })()), "imageFiles", [], "any", false, false, false, 81), 'widget', ["attr" => ["class" => "form-control-file", "accept" => "image/*", "multiple" => true, "data-max-files" => 5]]);
            // line 88
            yield "
                    </label>
                </div>
            </br></br>

        <div class=\"form-group category-select\">
                <div class=\"input-group\">
                    <span class=\"input-group-text\">
                        <i class=\"fas fa-tag\"></i>
                    </span>
                    ";
            // line 98
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 98, $this->source); })()), "category", [], "any", false, false, false, 98), 'widget', ["attr" => ["class" => "form-select custom-select"]]);
            // line 102
            yield "
                </div>
            </div> 
                <div class=\"form-actions\">
                    <div class=\"anonymous-option\">
                        <label class=\"anonymous-toggle\">
                            ";
            // line 108
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 108, $this->source); })()), "isAnonymous", [], "any", false, false, false, 108), 'widget');
            yield "
                            <span class=\"toggle-slider\"></span>
                            <span class=\"toggle-label\">
                                <i class=\"fas fa-user-secret\"></i> Publier en anonyme
                            </span>
                        </label>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Publier
                    </button>
                </div>
            ";
            // line 120
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["form"]) || array_key_exists("form", $context) ? $context["form"] : (function () { throw new RuntimeError('Variable "form" does not exist.', 120, $this->source); })()), 'form_end');
            yield "
        </div>
    ";
        }
        // line 123
        yield "<div class=\"category-filters mb-4\">
    <div class=\"btn-group\" role=\"group\">
        <a href=\"";
        // line 125
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
        yield "\" 
           class=\"btn btn-outline-secondary ";
        // line 126
        yield (( !CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 126, $this->source); })()), "request", [], "any", false, false, false, 126), "query", [], "any", false, false, false, 126), "get", ["category"], "method", false, false, false, 126)) ? ("active") : (""));
        yield "\">
            Toutes
        </a>
        ";
        // line 129
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(["Témoignage", "Question médicale", "Conseil", "Autre"]);
        foreach ($context['_seq'] as $context["_key"] => $context["category"]) {
            // line 130
            yield "            <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index", ["category" => $context["category"]]), "html", null, true);
            yield "\" 
               class=\"btn btn-outline-secondary ";
            // line 131
            yield (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 131, $this->source); })()), "request", [], "any", false, false, false, 131), "query", [], "any", false, false, false, 131), "get", ["category"], "method", false, false, false, 131) == $context["category"])) ? ("active") : (""));
            yield "\">
                ";
            // line 132
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["category"], "html", null, true);
            yield "
            </a>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['category'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 135
        yield "    </div>    </div>


    <div class=\"publications-list\">
        ";
        // line 139
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 139, $this->source); })()));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 140
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 140) == "approved")) {
                // line 141
                yield "                <div class=\"publication-card\">
                    <div class=\"publication-header\">
                        ";
                // line 143
                if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 143)) {
                    // line 144
                    yield "                            <div class=\"anonymous-avatar\">
                                <i class=\"fas fa-user-secret\"></i>
                            </div>
                        ";
                } else {
                    // line 148
                    yield "                            <img src=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                    yield "\" class=\"user-avatar\" alt=\"Avatar\">
                        ";
                }
                // line 150
                yield "                        <div class=\"publication-info\">
                                <div class=\"d-flex align-items-center gap-2\">

                            <div class=\"author-name\">
                           
            </div>
                                ";
                // line 156
                if (CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isAnonymous", [], "any", false, false, false, 156)) {
                    // line 157
                    yield "                                    <span class=\"anonymous-badge\">
                                        <i class=\"fas fa-user-secret\"></i> Anonyme
                                    </span>
                                ";
                } else {
                    // line 161
                    yield "                                    ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 161), "prenom", [], "any", false, false, false, 161), "html", null, true);
                    yield " ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 161), "nom", [], "any", false, false, false, 161), "html", null, true);
                    yield "
                                ";
                }
                // line 163
                yield "                                   <span class=\"badge category-badge badge-";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "category", [], "any", false, false, false, 163)), [" " => "-"]), "html", null, true);
                yield "\">
                ";
                // line 164
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "category", [], "any", false, false, false, 164), "html", null, true);
                yield "
            </span>
                            </div>
                            <span class=\"publication-date\">
                                <i class=\"far fa-clock\"></i> ";
                // line 168
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "datePb", [], "any", false, false, false, 168), "d/m/Y H:i"), "html", null, true);
                yield "
                            </span>
                        </div>
                        ";
                // line 171
                if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 171, $this->source); })()), "user", [], "any", false, false, false, 171) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 171))) {
                    // line 172
                    yield "                            ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 172, $this->source); })()), "user", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 172), "id", [], "any", false, false, false, 172))) {
                        // line 173
                        yield "                                <div class=\"publication-actions\">
                                    <a href=\"";
                        // line 174
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 174)]), "html", null, true);
                        yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
                        // line 177
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 177)]), "html", null, true);
                        yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                        // line 178
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 178))), "html", null, true);
                        yield "\">
                                        <button type=\"submit\" class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            ";
                    }
                    // line 185
                    yield "                        ";
                }
                // line 186
                yield "                    </div>
<div class=\"publication-content\">
    ";
                // line 188
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "contenu", [], "any", false, false, false, 188), "html", null, true));
                yield "
    
    ";
                // line 190
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 190)) > 0)) {
                    // line 191
                    yield "       <div class=\"publication-images\" data-publication-id=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 191), "html", null, true);
                    yield "\">
    ";
                    // line 192
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 192), 0, 3));
                    foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                        // line 193
                        yield "        <div class=\"publication-image\">
            <img src=\"";
                        // line 194
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                        yield "\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\"
                 onclick=\"openImageModal(this.src, ";
                        // line 197
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 197), "html", null, true);
                        yield ")\">
        </div>
    ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 200
                    yield "    
    ";
                    // line 201
                    if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 201)) > 3)) {
                        // line 202
                        yield "        <div class=\"publication-image more-images\" 
             onclick=\"openImageModal('";
                        // line 203
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 203), 3, [], "array", false, false, false, 203)), "html", null, true);
                        yield "', ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 203), "html", null, true);
                        yield ")\">
            <img src=\"";
                        // line 204
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 204), 3, [], "array", false, false, false, 204)), "html", null, true);
                        yield "\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\">
            <div class=\"more-overlay\">
                <span>+";
                        // line 208
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "imageUrls", [], "any", false, false, false, 208)) - 3), "html", null, true);
                        yield "</span>
            </div>
        </div>
    ";
                    }
                    // line 212
                    yield "</div>
    ";
                }
                // line 214
                yield "</div>

<div class=\"publication-footer\">
    <div class=\"action-buttons\">
        ";
                // line 218
                if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
                    // line 219
                    yield "            <div class=\"like-section d-flex align-items-center\">
                <a href=\"";
                    // line 220
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_like", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 220)]), "html", null, true);
                    yield "\" class=\"btn btn-link me-1\">
                    <i class=\"";
                    // line 221
                    if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221) && CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 221, $this->source); })()), "user", [], "any", false, false, false, 221)], "method", false, false, false, 221))) {
                        yield "fas";
                    } else {
                        yield "far";
                    }
                    yield " fa-heart\"></i>
                </a>
                <span class=\"like-count\" data-bs-toggle=\"modal\" data-bs-target=\"#likesModal";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 223), "html", null, true);
                    yield "\" style=\"cursor: pointer;\">
                    ";
                    // line 224
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 224)), "html", null, true);
                    yield "
                </span>
            </div>
        ";
                }
                // line 228
                yield "        <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_show", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 228)]), "html", null, true);
                yield "\" class=\"btn btn-link\">
            <i class=\"far fa-comment\"></i> Commenter (";
                // line 229
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "comments", [], "any", false, false, false, 229)), "html", null, true);
                yield ")
        </a>
    </div>
</div>
                </div>
            ";
            } else {
                // line 235
                yield "                 ";
                if ((((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 235) == "pending") && CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235)) && (CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 235, $this->source); })()), "user", [], "any", false, false, false, 235) == CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "user", [], "any", false, false, false, 235)))) {
                    // line 236
                    yield "        <div class=\"pending-publication-card\">
            <div class=\"pending-content\">
                <div class=\"pending-icon\">
                    <i class=\"fas fa-hourglass-half\"></i>
                </div>
                <div class=\"pending-text\">
                    <h3>Publication en cours de modération</h3>
                    <p>Votre contribution est actuellement examinée par notre équipe.</p>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill\"></div>
                    </div>
                    <small>Cette publication sera visible après approbation</small>
                </div>
            </div>
        </div>
    ";
                }
                // line 252
                yield "            ";
            }
            // line 253
            yield "        ";
            $context['_iterated'] = true;
        }
        // line 259
        if (!$context['_iterated']) {
            // line 254
            yield "            <div class=\"no-publications\">
                <i class=\"far fa-comment-dots\"></i>
                <p>Aucune publication pour le moment.</p>
                <p>Soyez le premier à partager votre expérience !</p>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 260
        yield "    </div>
</div>

<!-- Modal for likes -->
";
        // line 264
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable((isset($context["publications"]) || array_key_exists("publications", $context) ? $context["publications"] : (function () { throw new RuntimeError('Variable "publications" does not exist.', 264, $this->source); })()));
        foreach ($context['_seq'] as $context["_key"] => $context["publication"]) {
            // line 265
            yield "    ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "status", [], "any", false, false, false, 265) == "approved")) {
                // line 266
                yield "        <div class=\"modal fade\" id=\"likesModal";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 266), "html", null, true);
                yield "\" tabindex=\"-1\" aria-labelledby=\"likesModalLabel";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 266), "html", null, true);
                yield "\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"likesModalLabel";
                // line 270
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "id", [], "any", false, false, false, 270), "html", null, true);
                yield "\">Liste des utilisateurs ayant aimé la publication</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        ";
                // line 274
                if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 274)) > 0)) {
                    // line 275
                    yield "                            <ul class=\"list-group\">
                                ";
                    // line 276
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["publication"], "likes", [], "any", false, false, false, 276));
                    foreach ($context['_seq'] as $context["_key"] => $context["like"]) {
                        // line 277
                        yield "                                    <li class=\"list-group-item d-flex align-items-center\">
                                        <img src=\"";
                        // line 278
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
                        yield "\" class=\"user-avatar me-2\" alt=\"Avatar\" style=\"width: 30px; height: 30px; border-radius: 50%;\">
                                        <span>";
                        // line 279
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["like"], "user", [], "any", false, false, false, 279), "prenom", [], "any", false, false, false, 279), "html", null, true);
                        yield " ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["like"], "user", [], "any", false, false, false, 279), "nom", [], "any", false, false, false, 279), "html", null, true);
                        yield "</span>
                                    </li>
                                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_key'], $context['like'], $context['_parent']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 282
                    yield "                            </ul>
                        ";
                } else {
                    // line 284
                    yield "                            <p class=\"text-center\">Aucun like pour le moment</p>
                        ";
                }
                // line 286
                yield "                    </div>
                </div>
            </div>
        </div>
    ";
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['publication'], $context['_parent']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 292
        yield "<div id=\"chatbot-widget\" class=\"chatbot-widget\">
    <div class=\"chatbot-header\">
        <span class=\"chatbot-title\">Assistant OncoKids</span>
        <button class=\"chatbot-toggle\">
            <i class=\"fas fa-comments\"></i>
        </button>
    </div>
    <div class=\"chatbot-body\">
        <div class=\"chatbot-messages\"></div>
        <div class=\"chatbot-input\">
            <input type=\"text\" placeholder=\"Posez votre question...\" />
            <button type=\"submit\">
                <i class=\"fas fa-paper-plane\"></i>
            </button>
        </div>
    </div>
</div>
<style>
    .category-filters .btn-outline-secondary {
    border-color: transparent !important;
    box-shadow: none !important;
}

.category-filters .btn-outline-secondary:hover,
.category-filters .btn-outline-secondary:focus,
.category-filters .btn-outline-secondary.active {
    border-color: transparent !important;
    background-color: #95E1D3 !important;
    color: white !important;
    transform: translateY(-2px);
    transition: all 0.2s ease;
}
/* Chatbot Styles */
.chatbot-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 320px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transform: translateY(calc(100% - 60px));
    transition: transform 0.3s ease;
}

.chatbot-widget.open {
    transform: translateY(0);
}

.chatbot-header {
    background: linear-gradient(45deg, #95E1D3, #3498db);
    color: white;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.chatbot-title {
    font-weight: 600;
    font-size: 1.1em;
}

.chatbot-toggle {
    background: none;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 1.2em;
}

.chatbot-body {
    height: 400px;
    display: flex;
    flex-direction: column;
}

.chatbot-messages {
    flex-grow: 1;
    padding: 15px;
    overflow-y: auto;
}

.chatbot-message {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 10px;
    max-width: 80%;
    animation: fadeIn 0.3s ease;
}

.chatbot-message.user {
    background: #e3f2fd;
    margin-left: auto;
}

.chatbot-message.bot {
    background: #f5f5f5;
    margin-right: auto;
}

.chatbot-input {
    display: flex;
    padding: 15px;
    border-top: 1px solid #eee;
}

.chatbot-input input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 20px;
    margin-right: 10px;
}

.chatbot-input button {
    background: #95E1D3;
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.chatbot-input button:hover {
    background: #236161;
}
.chatbot-message.error {
    background: #ffebee;
    color: #c62828;
}

.chatbot-message.bot {
    background: #f5f5f5;
    margin-right: auto;
    position: relative;
}
.mini-game {
    background: #e3f2fd;
    padding: 1rem;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.game-container {
    position: relative;
    height: 200px;
    margin: 1rem 0;
}

.target {
    position: absolute;
    width: 40px;
    height: 40px;
    background: #ff6b6b;
    border-radius: 50%;
    cursor: pointer;
    display: none;
    transition: transform 0.1s;
    box-shadow: 0 2px 4px rgba(255, 107, 107, 0.3);
}

.target:hover {
    transform: scale(1.1);
}

.score-board {
    display: flex;
    justify-content: space-between;
    font-size: 0.9rem;
    color: #2d3436;
    margin-bottom: 0.5rem;
}

.timer-bar {
    height: 4px;
    background: #dfe6e9;
    border-radius: 2px;
    margin-bottom: 1rem;
}

.timer-progress {
    height: 100%;
    width: 100%;
    background: #55efc4;
    transition: width 0.1s linear;
}

.btn-start {
    background: #95E1D3;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: white;
    cursor: pointer;
    width: 100%;
    transition: transform 0.2s;
}

.btn-start:hover {
    transform: translateY(-2px);
    background: #7acbbe;
}

.game-instruction {
    font-size: 0.8rem;
    color: #636e72;
    text-align: center;
    margin: -0.5rem 0 0.5rem 0; 
    position: relative;
    top: -18px; 
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}
.pending-publication-card {
    background: #fff3e0;
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1rem 0;
    border-left: 4px solid #ffb74d;
    position: relative;
    box-shadow: 0 3px 6px rgba(0,0,0,0.05);
}

.pending-content {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.pending-icon {
    background: #ffe0b2;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulse 2s infinite;
}

.pending-icon i {
    color: #ff9800;
    font-size: 1.5rem;
}

.pending-text h3 {
    color: #ff6d00;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.pending-text p {
    color: #666;
    margin: 0 0 1rem 0;
    font-size: 0.9rem;
}

.progress-bar {
    width: 200px;
    height: 6px;
    background: #ffe0b2;
    border-radius: 3px;
    overflow: hidden;
    margin: 0.5rem 0;
}

.progress-fill {
    width: 45%;
    height: 100%;
    background: #ffb74d;
    animation: progress 2s ease-in-out infinite;
}

.pending-text small {
    color: #999;
    font-size: 0.8rem;
    display: block;
    margin-top: 0.5rem;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes progress {
    0% { width: 30%; }
    50% { width: 60%; }
    100% { width: 30%; }
}

@media (max-width: 480px) {
    .pending-content {
        flex-direction: column;
        text-align: center;
    }
    
    .progress-bar {
        width: 100%;
    }
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

.custom-select option {
    padding: 0.5rem;
    background: white;
    color: #333;
}

.custom-select option:checked {
    background-color: #95E1D3 !important;
    color: white;
}

.custom-select:hover {
    cursor: pointer;
}
.category-badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
    border-radius: 0.25rem;
}

.badge-témoignage { background-color: #95E1D3; color: white; }
.badge-question-médicale { background-color: #ff6b6b; color: white; }
.badge-conseil { background-color: #4ecdc4; color: white; }
.badge-autre { background-color: #ffe66d; color: black; }

.category-filters .btn.active {
    background-color: #95E1D3;
    color: white;
    border-color: #95E1D3;
}
.new-publication-form {
  background: #fefcfc ;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.form-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.form-header h2 {
    margin: 0 0 0 1rem;
    color: #95E1D3;
    font-size: 1.5rem;
}

.user-avatar, .anonymous-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.anonymous-avatar {
    background: #e9ecef;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
}

.form-control {
  border: 2px solid #e0f3f8;
    border-radius: 8px;
    padding: 1rem;
    resize: vertical;
    min-height: 100px;
    margin-bottom: 1rem;
    width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    
}
.publication-info, 
.author-name, 
.publication-date,
.action-buttons,
.btn-link {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
/* For handling long URLs or unbreakable content */
a, pre, code {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
.form-control:focus {
    border-color: #95E1D3;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #95E1D3;
}

.file-input-label i {
    margin-right: 0.5rem;
}

.form-control-file {
    display: none;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
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

.anonymous-toggle input[type=\"checkbox\"] {
    display: none;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider {
    background: #95E1D3;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.toggle-label {
    color: #495057;
}

.btn-primary {
    background: #95E1D3;
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: #236161;
}

.publications-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.publication-card {
  background: #fefcfc ;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.publication-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
    position: relative;
}

.publication-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.author-name {
    font-weight: 600;
    color: #95E1D3;
    margin-bottom: 0.25rem;
}

.publication-date {
    font-size: 0.875rem;
    color: #6c757d;
}

.publication-actions {
    position: absolute;
    right: 0;
    top: 0;
    display: flex;
    gap: 0.5rem;
}

.btn-edit, .btn-delete {
    padding: 0.5rem;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-edit {
    background: #95E1D3;
}

.btn-delete {
    background: #dc3545;
}

.btn-edit:hover {
    background: #236161;
}

.btn-delete:hover {
    background: #c82333;
}

.publication-content {
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

.publication-images {
display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1rem;
    max-height: 400px;
    overflow: hidden;
}

.publication-images.single-image {
    grid-template-columns: 1fr;
}

.publication-images.two-images {
    grid-template-columns: repeat(2, 1fr);
}

.publication-images:not(.single-image):not(.two-images) {
    grid-template-columns: repeat(2, 1fr);
}

@media (min-width: 768px) {
    .publication-images:not(.single-image):not(.two-images) {
        grid-template-columns: repeat(2, 1fr);
    }
}

.publication-image {
  position: relative;
    aspect-ratio: 1;
    height: 160px;
    border-radius: 8px;
    overflow: hidden;
}

.publication-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.publication-img:hover {
    transform: scale(1.05);
}

.more-images {
    position: relative;
    cursor: pointer;
}

.more-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 2rem;
    font-weight: bold;
}

.publication-footer {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e0f3f8;
}

.action-buttons {
    display: flex;
    gap: 1rem;
}

.btn-link {
    color: #95E1D3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-link:hover {
    color: #236161;
}

.no-publications {
    text-align: center;
    padding: 3rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #6c757d;
}

.no-publications i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #95E1D3;
}

.toast-message {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    padding: 20px;
}

.modal-content {
    position: relative;
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80vh;
    object-fit: contain;
}

.modal img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 15px;
    cursor: pointer;
    border-radius: 50%;
    border: none;
    font-size: 24px;
    transition: background 0.3s ease;
}

.modal-nav:hover {
    background: rgba(255, 255, 255, 0.4);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}
.modal-counter {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 14px;
}
@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
        gap: 1rem;
    }
    
    .btn-primary {
        width: 100%;
        justify-content: center;
    }
    
    .publication-actions {
        position: static;
        margin-top: 1rem;
    }
}
.game-sidebar {
    position: fixed;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 200px;
    z-index: 1000;
}

.stress-relief-card {
    background: linear-gradient(45deg, #95E1D3, #3498db);
    color: white;
    padding: 1.5rem;
    border-radius: 15px;
    cursor: pointer;
    transition: transform 0.3s ease;
    box-shadow: 0 8px 20px rgba(149, 225, 211, 0.3);
    text-align: center;
}

.stress-relief-card:hover {
    transform: translateY(-5px);
}

.stress-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    animation: pulse 2s infinite;
}

.stress-meter {
    width: 100%;
    height: 8px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 4px;
    margin: 1rem 0;
}

.meter-fill {
    height: 100%;
    background: white;
    border-radius: 4px;
    transition: width 0.5s ease;
}

#gameModal .modal-content {
    border-radius: 20px;
    overflow: hidden;
}

#gameModal .modal-header {
    background:linear-gradient(45deg, #95E1D3, #3498db);;
    color: white;
    border-bottom: none;
}

#gameModal .modal-body {
    padding: 2rem;
}

#gameModal .game-container {
    height: 400px;
}

#gameModal .target {
    width: 50px;
    height: 50px;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

@media (max-width: 768px) {
    .game-sidebar {
        position: static;
        width: 100%;
        margin-bottom: 2rem;
        transform: none;
    }
    
    #gameModal .modal-dialog {
        margin: 1rem;
    }
    
    #gameModal .game-container {
        height: 300px;
    }
}
</style>
<script>

// Chatbot JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const chatbot = document.getElementById('chatbot-widget');
    const chatbotHeader = chatbot.querySelector('.chatbot-header');
    const chatbotMessages = chatbot.querySelector('.chatbot-messages');
    const chatbotInput = chatbot.querySelector('input');
    const chatbotSubmit = chatbot.querySelector('button[type=\"submit\"]');

    // Toggle chatbot
    chatbotHeader.addEventListener('click', () => {
        chatbot.classList.toggle('open');
    });

    // Add loading message
    function addLoadingMessage() {
        const loadingMessage = document.createElement('div');
        loadingMessage.className = 'chatbot-message bot loading';
        loadingMessage.innerHTML = '<div class=\"typing-indicator\"><span></span><span></span><span></span></div>';
        chatbotMessages.appendChild(loadingMessage);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        return loadingMessage;
    }

    // Remove loading message
    function removeLoadingMessage(element) {
        if (element && element.parentNode) {
            element.parentNode.removeChild(element);
        }
    }

    // Send message
    function sendMessage(message) {
        // Add user message to chat
        const userMessage = document.createElement('div');
        userMessage.className = 'chatbot-message user';
        userMessage.textContent = message;
        chatbotMessages.appendChild(userMessage);

        // Add loading indicator
        const loadingMessage = addLoadingMessage();

        // Scroll to bottom
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

        // Send to server
        fetch('/chatbot/message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ message: message })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            // Remove loading message
            removeLoadingMessage(loadingMessage);

            // Add bot response
            const botMessage = document.createElement('div');
            botMessage.className = 'chatbot-message bot';
            if (data.error) {
                botMessage.textContent = 'Désolé, une erreur est survenue: ' + data.error;
            } else {
                botMessage.textContent = data.message;
            }
            chatbotMessages.appendChild(botMessage);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        })
        .catch(error => {
            console.error('Error:', error);
            removeLoadingMessage(loadingMessage);
            
            const errorMessage = document.createElement('div');
            errorMessage.className = 'chatbot-message bot error';
            errorMessage.textContent = 'Désolé, je ne peux pas répondre pour le moment. Erreur: ' + error.message;
            chatbotMessages.appendChild(errorMessage);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        });
    }

    // Handle submit
    chatbotSubmit.addEventListener('click', () => {
        const message = chatbotInput.value.trim();
        if (message) {
            sendMessage(message);
            chatbotInput.value = '';
        }
    });

    // Handle enter key
    chatbotInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            const message = chatbotInput.value.trim();
            if (message) {
                sendMessage(message);
                chatbotInput.value = '';
            }
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const target = document.querySelector('.target');
    const startBtn = document.querySelector('.btn-start');
    const timerProgress = document.querySelector('.timer-progress');
    const scoreEl = document.getElementById('score');
    const highscoreEl = document.getElementById('highscore');
    
    let score = 0;
    let timeLeft = 30;
    let gameActive = false;
    let highscore = localStorage.getItem('reactoHighscore') || 0;
    highscoreEl.textContent = highscore;

    const moveTarget = () => {
        if (!gameActive) return;
        
        const containerRect = document.querySelector('.game-container').getBoundingClientRect();
        const maxX = containerRect.width - 40;
        const maxY = containerRect.height - 40;
        
        target.style.display = 'block';
        target.style.left = Math.random() * maxX + 'px';
        target.style.top = Math.random() * maxY + 'px';
    };

    target.addEventListener('click', () => {
        if (!gameActive) return;
        score++;
        scoreEl.textContent = score;
        target.style.display = 'none';
        moveTarget();
    });

    startBtn.addEventListener('click', () => {
        if (gameActive) return;
        
        gameActive = true;
        score = 0;
        timeLeft = 30;
        scoreEl.textContent = '0';
        startBtn.disabled = true;
        
        const gameInterval = setInterval(() => {
            timeLeft--;
            timerProgress.style.width = (timeLeft/30)*100 + '%';
            
            if (timeLeft <= 0) {
                clearInterval(gameInterval);
                gameActive = false;
                startBtn.disabled = false;
                target.style.display = 'none';
                if (score > highscore) {
                    highscore = score;
                    localStorage.setItem('reactoHighscore', highscore);
                    highscoreEl.textContent = highscore;
                }
            }
        }, 1000);
        
        moveTarget();
    });
});

let currentImageIndex = 0;
let images = [];

function openImageModal(src, publicationId) {
    // Récupérer uniquement les images de la publication courante
    images = Array.from(document.querySelector(`[data-publication-id=\"\${publicationId}\"]`)
        .querySelectorAll('.publication-img'))
        .map(img => img.src);
    currentImageIndex = images.indexOf(src);
    
    var modal = document.createElement('div');
    modal.className = 'modal';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    var prevBtn = document.createElement('button');
    prevBtn.className = 'modal-nav modal-prev';
    prevBtn.innerHTML = '&#10094;';
    
    var nextBtn = document.createElement('button');
    nextBtn.className = 'modal-nav modal-next';
    nextBtn.innerHTML = '&#10095;';
    
    var counter = document.createElement('div');
    counter.className = 'modal-counter';
    updateCounter(counter);
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    modal.appendChild(prevBtn);
    modal.appendChild(nextBtn);
    modal.appendChild(counter);
    document.body.appendChild(modal);
    
    setTimeout(() => modal.style.display = 'flex', 0);
    document.body.style.overflow = 'hidden';
    
    // Navigation
    prevBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    nextBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex + 1) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    // Fermeture
    closeBtn.onclick = function() {
        closeModal(modal);
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            closeModal(modal);
        }
    }
    
    // Navigation avec les flèches du clavier
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
        } else if (e.key === 'Escape') {
            closeModal(modal);
        }
    });
}

function updateCounter(counter) {
    counter.textContent = `\${currentImageIndex + 1} / \${images.length}`;
}

function closeModal(modal) {
    document.body.removeChild(modal);
    document.body.style.overflow = 'auto';
}
</script>
";
        // line 1447
        yield from $this->unwrap()->yieldBlock('stylesheets', $context, $blocks);
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_stylesheets(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "stylesheets"));

        // line 1448
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
<style>
    .like-count:hover {
        text-decoration: underline;
    }
    
    .modal-header {
        background-color: #95E1D3;
        color: white;
    }
    
    .list-group-item {
        border: none;
        border-bottom: 1px solid #eee;
    }
    
    .list-group-item:last-child {
        border-bottom: none;
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
        return "publication/index.html.twig";
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
        return array (  1801 => 1448,  1778 => 1447,  621 => 292,  610 => 286,  606 => 284,  602 => 282,  591 => 279,  587 => 278,  584 => 277,  580 => 276,  577 => 275,  575 => 274,  568 => 270,  558 => 266,  555 => 265,  551 => 264,  545 => 260,  534 => 254,  532 => 259,  528 => 253,  525 => 252,  507 => 236,  504 => 235,  495 => 229,  490 => 228,  483 => 224,  479 => 223,  470 => 221,  466 => 220,  463 => 219,  461 => 218,  455 => 214,  451 => 212,  444 => 208,  437 => 204,  431 => 203,  428 => 202,  426 => 201,  423 => 200,  414 => 197,  408 => 194,  405 => 193,  401 => 192,  396 => 191,  394 => 190,  389 => 188,  385 => 186,  382 => 185,  372 => 178,  368 => 177,  362 => 174,  359 => 173,  356 => 172,  354 => 171,  348 => 168,  341 => 164,  336 => 163,  328 => 161,  322 => 157,  320 => 156,  312 => 150,  306 => 148,  300 => 144,  298 => 143,  294 => 141,  291 => 140,  286 => 139,  280 => 135,  271 => 132,  267 => 131,  262 => 130,  258 => 129,  252 => 126,  248 => 125,  244 => 123,  238 => 120,  223 => 108,  215 => 102,  213 => 98,  201 => 88,  199 => 81,  191 => 75,  189 => 68,  184 => 66,  175 => 62,  171 => 60,  169 => 59,  166 => 58,  157 => 55,  154 => 54,  150 => 53,  116 => 21,  101 => 7,  88 => 5,  65 => 3,  42 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_publication.html.twig' %}

{% block title %}Publications{% endblock %}

{% block body %}
{# Ajouter en haut du body, avant le container principal #}
<div class=\"game-sidebar\">
    <div class=\"stress-relief-card\" data-bs-toggle=\"modal\" data-bs-target=\"#gameModal\">
        <div class=\"stress-icon\">
            <i class=\"fas fa-gamepad\"></i>
        </div>
        <h4>Déstressez en jouant!</h4>
        <p>Cliquez ici pour libérer votre stress</p>
        <div class=\"stress-meter\">
            <div class=\"meter-fill\" style=\"width: 80%\"></div>
        </div>
    </div>
</div>

{# Modal du jeu #}
<div class=\"modal fade\" id=\"gameModal\" tabindex=\"-1\" aria-labelledby=\"gameModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg modal-dialog-centered\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"gameModalLabel\">ReactoMédico - Jeu anti-stress</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <div class=\"mini-game\">
                    <div class=\"game-container\">
                        <div class=\"target\"></div>
                        <div class=\"score-board\">
                            <span>Score: <span id=\"score\">0</span></span>
                            <span>Meilleur: <span id=\"highscore\">0</span></span>
                        </div>
                        <div class=\"timer-bar\">
                            <div class=\"timer-progress\"></div>
                        </div>
                        <button class=\"btn-start\">Commencer!</button>
                    </div>
                    <p class=\"game-instruction\">Cliquez le plus vite possible sur les cercles qui apparaissent!</p>
                </div>
            </div>
            <div class=\"modal-footer\">
                <small class=\"text-muted\">30 secondes de jeu = -40% de stress!</small>
            </div>
        </div>
    </div>
</div>

<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">

    {% for message in app.flashes('info') %}
        <div class=\"toast-message\">
            {{ message }}
        </div>
    {% endfor %}

    {% if is_granted('IS_AUTHENTICATED_FULLY') %}
        <div class=\"new-publication-form\">
            <div class=\"form-header\">
                <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar\" alt=\"{{ app.user.prenom }}\">
                <h2>Créer une publication</h2>
            </div>

            {{ form_start(form, {'attr': {'class': 'publication-form'}}) }}
                <div class=\"form-group\">
                    {{ form_widget(form.contenu, {
                        'attr': {
                            'placeholder': 'Partagez votre expérience ou posez une question...',
                            'class': 'form-control',
                                'maxlength': 120,
        'oninput': 'this.value = this.value.slice(0, 120)'
                        }
                    }) }}
                </div>
                
                <div class=\"form-group\">
                    <label class=\"file-input-label\">
                        <i class=\"fas fa-camera\"></i> Photos (maximum 5)
                        {{ form_widget(form.imageFiles, {
                            'attr': {
                                'class': 'form-control-file',
                                'accept': 'image/*',
                                'multiple': true,
                                'data-max-files': 5
                            }
                        }) }}
                    </label>
                </div>
            </br></br>

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
                <div class=\"form-actions\">
                    <div class=\"anonymous-option\">
                        <label class=\"anonymous-toggle\">
                            {{ form_widget(form.isAnonymous) }}
                            <span class=\"toggle-slider\"></span>
                            <span class=\"toggle-label\">
                                <i class=\"fas fa-user-secret\"></i> Publier en anonyme
                            </span>
                        </label>
                    </div>
                    
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Publier
                    </button>
                </div>
            {{ form_end(form) }}
        </div>
    {% endif %}
<div class=\"category-filters mb-4\">
    <div class=\"btn-group\" role=\"group\">
        <a href=\"{{ path('app_publication_index') }}\" 
           class=\"btn btn-outline-secondary {{ not app.request.query.get('category') ? 'active' }}\">
            Toutes
        </a>
        {% for category in ['Témoignage', 'Question médicale', 'Conseil', 'Autre'] %}
            <a href=\"{{ path('app_publication_index', {category: category}) }}\" 
               class=\"btn btn-outline-secondary {{ app.request.query.get('category') == category ? 'active' }}\">
                {{ category }}
            </a>
        {% endfor %}
    </div>    </div>


    <div class=\"publications-list\">
        {% for publication in publications %}
            {% if publication.status == 'approved' %}
                <div class=\"publication-card\">
                    <div class=\"publication-header\">
                        {% if publication.isAnonymous %}
                            <div class=\"anonymous-avatar\">
                                <i class=\"fas fa-user-secret\"></i>
                            </div>
                        {% else %}
                            <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar\" alt=\"Avatar\">
                        {% endif %}
                        <div class=\"publication-info\">
                                <div class=\"d-flex align-items-center gap-2\">

                            <div class=\"author-name\">
                           
            </div>
                                {% if publication.isAnonymous %}
                                    <span class=\"anonymous-badge\">
                                        <i class=\"fas fa-user-secret\"></i> Anonyme
                                    </span>
                                {% else %}
                                    {{ publication.user.prenom }} {{ publication.user.nom }}
                                {% endif %}
                                   <span class=\"badge category-badge badge-{{ publication.category|lower|replace({' ': '-'}) }}\">
                {{ publication.category }}
            </span>
                            </div>
                            <span class=\"publication-date\">
                                <i class=\"far fa-clock\"></i> {{ publication.datePb|date('d/m/Y H:i') }}
                            </span>
                        </div>
                        {% if app.user and publication.user %}
                            {% if app.user.id == publication.user.id %}
                                <div class=\"publication-actions\">
                                    <a href=\"{{ path('app_publication_edit', {'id': publication.id}) }}\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_publication_delete', {'id': publication.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ publication.id) }}\">
                                        <button type=\"submit\" class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            {% endif %}
                        {% endif %}
                    </div>
<div class=\"publication-content\">
    {{ publication.contenu|nl2br }}
    
    {% if publication.imageUrls|length > 0 %}
       <div class=\"publication-images\" data-publication-id=\"{{ publication.id }}\">
    {% for imageUrl in publication.imageUrls|slice(0, 3) %}
        <div class=\"publication-image\">
            <img src=\"{{ asset(imageUrl) }}\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\"
                 onclick=\"openImageModal(this.src, {{ publication.id }})\">
        </div>
    {% endfor %}
    
    {% if publication.imageUrls|length > 3 %}
        <div class=\"publication-image more-images\" 
             onclick=\"openImageModal('{{ asset(publication.imageUrls[3]) }}', {{ publication.id }})\">
            <img src=\"{{ asset(publication.imageUrls[3]) }}\" 
                 alt=\"Image de publication\" 
                 class=\"publication-img\">
            <div class=\"more-overlay\">
                <span>+{{ publication.imageUrls|length - 3 }}</span>
            </div>
        </div>
    {% endif %}
</div>
    {% endif %}
</div>

<div class=\"publication-footer\">
    <div class=\"action-buttons\">
        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"like-section d-flex align-items-center\">
                <a href=\"{{ path('app_publication_like', {'id': publication.id}) }}\" class=\"btn btn-link me-1\">
                    <i class=\"{% if app.user and publication.isLikedByUser(app.user) %}fas{% else %}far{% endif %} fa-heart\"></i>
                </a>
                <span class=\"like-count\" data-bs-toggle=\"modal\" data-bs-target=\"#likesModal{{ publication.id }}\" style=\"cursor: pointer;\">
                    {{ publication.likes|length }}
                </span>
            </div>
        {% endif %}
        <a href=\"{{ path('app_publication_show', {'id': publication.id}) }}\" class=\"btn btn-link\">
            <i class=\"far fa-comment\"></i> Commenter ({{ publication.comments|length }})
        </a>
    </div>
</div>
                </div>
            {% else %}
                 {% if publication.status == 'pending' and app.user and app.user == publication.user %}
        <div class=\"pending-publication-card\">
            <div class=\"pending-content\">
                <div class=\"pending-icon\">
                    <i class=\"fas fa-hourglass-half\"></i>
                </div>
                <div class=\"pending-text\">
                    <h3>Publication en cours de modération</h3>
                    <p>Votre contribution est actuellement examinée par notre équipe.</p>
                    <div class=\"progress-bar\">
                        <div class=\"progress-fill\"></div>
                    </div>
                    <small>Cette publication sera visible après approbation</small>
                </div>
            </div>
        </div>
    {% endif %}
            {% endif %}
        {% else %}
            <div class=\"no-publications\">
                <i class=\"far fa-comment-dots\"></i>
                <p>Aucune publication pour le moment.</p>
                <p>Soyez le premier à partager votre expérience !</p>
            </div>
        {% endfor %}
    </div>
</div>

<!-- Modal for likes -->
{% for publication in publications %}
    {% if publication.status == 'approved' %}
        <div class=\"modal fade\" id=\"likesModal{{ publication.id }}\" tabindex=\"-1\" aria-labelledby=\"likesModalLabel{{ publication.id }}\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\" id=\"likesModalLabel{{ publication.id }}\">Liste des utilisateurs ayant aimé la publication</h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body\">
                        {% if publication.likes|length > 0 %}
                            <ul class=\"list-group\">
                                {% for like in publication.likes %}
                                    <li class=\"list-group-item d-flex align-items-center\">
                                        <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar me-2\" alt=\"Avatar\" style=\"width: 30px; height: 30px; border-radius: 50%;\">
                                        <span>{{ like.user.prenom }} {{ like.user.nom }}</span>
                                    </li>
                                {% endfor %}
                            </ul>
                        {% else %}
                            <p class=\"text-center\">Aucun like pour le moment</p>
                        {% endif %}
                    </div>
                </div>
            </div>
        </div>
    {% endif %}
{% endfor %}
<div id=\"chatbot-widget\" class=\"chatbot-widget\">
    <div class=\"chatbot-header\">
        <span class=\"chatbot-title\">Assistant OncoKids</span>
        <button class=\"chatbot-toggle\">
            <i class=\"fas fa-comments\"></i>
        </button>
    </div>
    <div class=\"chatbot-body\">
        <div class=\"chatbot-messages\"></div>
        <div class=\"chatbot-input\">
            <input type=\"text\" placeholder=\"Posez votre question...\" />
            <button type=\"submit\">
                <i class=\"fas fa-paper-plane\"></i>
            </button>
        </div>
    </div>
</div>
<style>
    .category-filters .btn-outline-secondary {
    border-color: transparent !important;
    box-shadow: none !important;
}

.category-filters .btn-outline-secondary:hover,
.category-filters .btn-outline-secondary:focus,
.category-filters .btn-outline-secondary.active {
    border-color: transparent !important;
    background-color: #95E1D3 !important;
    color: white !important;
    transform: translateY(-2px);
    transition: all 0.2s ease;
}
/* Chatbot Styles */
.chatbot-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 320px;
    background: white;
    border-radius: 15px;
    box-shadow: 0 5px 25px rgba(0, 0, 0, 0.2);
    z-index: 1000;
    overflow: hidden;
    display: flex;
    flex-direction: column;
    transform: translateY(calc(100% - 60px));
    transition: transform 0.3s ease;
}

.chatbot-widget.open {
    transform: translateY(0);
}

.chatbot-header {
    background: linear-gradient(45deg, #95E1D3, #3498db);
    color: white;
    padding: 15px;
    display: flex;
    justify-content: space-between;
    align-items: center;
    cursor: pointer;
}

.chatbot-title {
    font-weight: 600;
    font-size: 1.1em;
}

.chatbot-toggle {
    background: none;
    border: none;
    color: white;
    cursor: pointer;
    font-size: 1.2em;
}

.chatbot-body {
    height: 400px;
    display: flex;
    flex-direction: column;
}

.chatbot-messages {
    flex-grow: 1;
    padding: 15px;
    overflow-y: auto;
}

.chatbot-message {
    margin-bottom: 10px;
    padding: 10px;
    border-radius: 10px;
    max-width: 80%;
    animation: fadeIn 0.3s ease;
}

.chatbot-message.user {
    background: #e3f2fd;
    margin-left: auto;
}

.chatbot-message.bot {
    background: #f5f5f5;
    margin-right: auto;
}

.chatbot-input {
    display: flex;
    padding: 15px;
    border-top: 1px solid #eee;
}

.chatbot-input input {
    flex-grow: 1;
    padding: 10px;
    border: 1px solid #ddd;
    border-radius: 20px;
    margin-right: 10px;
}

.chatbot-input button {
    background: #95E1D3;
    color: white;
    border: none;
    border-radius: 50%;
    width: 40px;
    height: 40px;
    cursor: pointer;
    transition: background 0.3s ease;
}

.chatbot-input button:hover {
    background: #236161;
}
.chatbot-message.error {
    background: #ffebee;
    color: #c62828;
}

.chatbot-message.bot {
    background: #f5f5f5;
    margin-right: auto;
    position: relative;
}
.mini-game {
    background: #e3f2fd;
    padding: 1rem;
    border-radius: 10px;
    margin-bottom: 1.5rem;
    box-shadow: 0 4px 6px rgba(0, 0, 0, 0.05);
}

.game-container {
    position: relative;
    height: 200px;
    margin: 1rem 0;
}

.target {
    position: absolute;
    width: 40px;
    height: 40px;
    background: #ff6b6b;
    border-radius: 50%;
    cursor: pointer;
    display: none;
    transition: transform 0.1s;
    box-shadow: 0 2px 4px rgba(255, 107, 107, 0.3);
}

.target:hover {
    transform: scale(1.1);
}

.score-board {
    display: flex;
    justify-content: space-between;
    font-size: 0.9rem;
    color: #2d3436;
    margin-bottom: 0.5rem;
}

.timer-bar {
    height: 4px;
    background: #dfe6e9;
    border-radius: 2px;
    margin-bottom: 1rem;
}

.timer-progress {
    height: 100%;
    width: 100%;
    background: #55efc4;
    transition: width 0.1s linear;
}

.btn-start {
    background: #95E1D3;
    border: none;
    padding: 0.5rem 1rem;
    border-radius: 20px;
    color: white;
    cursor: pointer;
    width: 100%;
    transition: transform 0.2s;
}

.btn-start:hover {
    transform: translateY(-2px);
    background: #7acbbe;
}

.game-instruction {
    font-size: 0.8rem;
    color: #636e72;
    text-align: center;
    margin: -0.5rem 0 0.5rem 0; 
    position: relative;
    top: -18px; 
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}
.pending-publication-card {
    background: #fff3e0;
    border-radius: 12px;
    padding: 1.5rem;
    margin: 1rem 0;
    border-left: 4px solid #ffb74d;
    position: relative;
    box-shadow: 0 3px 6px rgba(0,0,0,0.05);
}

.pending-content {
    display: flex;
    align-items: center;
    gap: 1.5rem;
}

.pending-icon {
    background: #ffe0b2;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    animation: pulse 2s infinite;
}

.pending-icon i {
    color: #ff9800;
    font-size: 1.5rem;
}

.pending-text h3 {
    color: #ff6d00;
    margin: 0 0 0.5rem 0;
    font-size: 1.1rem;
}

.pending-text p {
    color: #666;
    margin: 0 0 1rem 0;
    font-size: 0.9rem;
}

.progress-bar {
    width: 200px;
    height: 6px;
    background: #ffe0b2;
    border-radius: 3px;
    overflow: hidden;
    margin: 0.5rem 0;
}

.progress-fill {
    width: 45%;
    height: 100%;
    background: #ffb74d;
    animation: progress 2s ease-in-out infinite;
}

.pending-text small {
    color: #999;
    font-size: 0.8rem;
    display: block;
    margin-top: 0.5rem;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.05); }
    100% { transform: scale(1); }
}

@keyframes progress {
    0% { width: 30%; }
    50% { width: 60%; }
    100% { width: 30%; }
}

@media (max-width: 480px) {
    .pending-content {
        flex-direction: column;
        text-align: center;
    }
    
    .progress-bar {
        width: 100%;
    }
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

.custom-select option {
    padding: 0.5rem;
    background: white;
    color: #333;
}

.custom-select option:checked {
    background-color: #95E1D3 !important;
    color: white;
}

.custom-select:hover {
    cursor: pointer;
}
.category-badge {
    font-size: 0.75rem;
    padding: 0.35em 0.65em;
    border-radius: 0.25rem;
}

.badge-témoignage { background-color: #95E1D3; color: white; }
.badge-question-médicale { background-color: #ff6b6b; color: white; }
.badge-conseil { background-color: #4ecdc4; color: white; }
.badge-autre { background-color: #ffe66d; color: black; }

.category-filters .btn.active {
    background-color: #95E1D3;
    color: white;
    border-color: #95E1D3;
}
.new-publication-form {
  background: #fefcfc ;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
}

.form-header {
    display: flex;
    align-items: center;
    margin-bottom: 1.5rem;
}

.form-header h2 {
    margin: 0 0 0 1rem;
    color: #95E1D3;
    font-size: 1.5rem;
}

.user-avatar, .anonymous-avatar {
    width: 40px;
    height: 40px;
    border-radius: 50%;
    object-fit: cover;
}

.anonymous-avatar {
    background: #e9ecef;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #6c757d;
}

.form-control {
  border: 2px solid #e0f3f8;
    border-radius: 8px;
    padding: 1rem;
    resize: vertical;
    min-height: 100px;
    margin-bottom: 1rem;
    width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
    white-space: pre-wrap;
    
}
.publication-info, 
.author-name, 
.publication-date,
.action-buttons,
.btn-link {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
/* For handling long URLs or unbreakable content */
a, pre, code {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
.form-control:focus {
    border-color: #95E1D3;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.file-input-label {
    display: inline-block;
    padding: 0.5rem 1rem;
    background: #e0f3f8;
    border-radius: 4px;
    cursor: pointer;
    color: #95E1D3;
}

.file-input-label i {
    margin-right: 0.5rem;
}

.form-control-file {
    display: none;
}

.form-actions {
    display: flex;
    justify-content: space-between;
    align-items: center;
    margin-top: 1rem;
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

.anonymous-toggle input[type=\"checkbox\"] {
    display: none;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider {
    background: #95E1D3;
}

.anonymous-toggle input[type=\"checkbox\"]:checked + .toggle-slider:before {
    transform: translateX(20px);
}

.toggle-label {
    color: #495057;
}

.btn-primary {
    background: #95E1D3;
    color: white;
    border: none;
    padding: 0.5rem 1.5rem;
    border-radius: 4px;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    transition: all 0.3s ease;
}

.btn-primary:hover {
    background: #236161;
}

.publications-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.publication-card {
  background: #fefcfc ;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    word-wrap: break-word;
    overflow-wrap: break-word;
}

.publication-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
    position: relative;
}

.publication-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.author-name {
    font-weight: 600;
    color: #95E1D3;
    margin-bottom: 0.25rem;
}

.publication-date {
    font-size: 0.875rem;
    color: #6c757d;
}

.publication-actions {
    position: absolute;
    right: 0;
    top: 0;
    display: flex;
    gap: 0.5rem;
}

.btn-edit, .btn-delete {
    padding: 0.5rem;
    border: none;
    border-radius: 4px;
    color: white;
    cursor: pointer;
    transition: all 0.3s ease;
}

.btn-edit {
    background: #95E1D3;
}

.btn-delete {
    background: #dc3545;
}

.btn-edit:hover {
    background: #236161;
}

.btn-delete:hover {
    background: #c82333;
}

.publication-content {
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

.publication-images {
display: grid;
    grid-template-columns: repeat(3, 1fr);
    gap: 0.5rem;
    margin-top: 1rem;
    max-height: 400px;
    overflow: hidden;
}

.publication-images.single-image {
    grid-template-columns: 1fr;
}

.publication-images.two-images {
    grid-template-columns: repeat(2, 1fr);
}

.publication-images:not(.single-image):not(.two-images) {
    grid-template-columns: repeat(2, 1fr);
}

@media (min-width: 768px) {
    .publication-images:not(.single-image):not(.two-images) {
        grid-template-columns: repeat(2, 1fr);
    }
}

.publication-image {
  position: relative;
    aspect-ratio: 1;
    height: 160px;
    border-radius: 8px;
    overflow: hidden;
}

.publication-img {
    width: 100%;
    height: 100%;
    object-fit: cover;
    cursor: pointer;
    transition: transform 0.3s ease;
}

.publication-img:hover {
    transform: scale(1.05);
}

.more-images {
    position: relative;
    cursor: pointer;
}

.more-overlay {
    position: absolute;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.6);
    display: flex;
    justify-content: center;
    align-items: center;
    color: white;
    font-size: 2rem;
    font-weight: bold;
}

.publication-footer {
    margin-top: 1rem;
    padding-top: 1rem;
    border-top: 1px solid #e0f3f8;
}

.action-buttons {
    display: flex;
    gap: 1rem;
}

.btn-link {
    color: #95E1D3;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
}

.btn-link:hover {
    color: #236161;
}

.no-publications {
    text-align: center;
    padding: 3rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #6c757d;
}

.no-publications i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #95E1D3;
}

.toast-message {
    background-color: #f8f9fa;
    padding: 1rem;
    border-radius: 8px;
    margin-bottom: 1rem;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
}

.modal {
    display: none;
    position: fixed;
    z-index: 1000;
    top: 0;
    left: 0;
    width: 100%;
    height: 100%;
    background-color: rgba(0, 0, 0, 0.9);
    padding: 20px;
}

.modal-content {
    position: relative;
    margin: auto;
    display: block;
    max-width: 80%;
    max-height: 80vh;
    object-fit: contain;
}

.modal img {
    width: 100%;
    height: 100%;
    object-fit: contain;
}

.close {
    position: absolute;
    top: 15px;
    right: 35px;
    color: #f1f1f1;
    font-size: 40px;
    font-weight: bold;
    cursor: pointer;
}
.modal-nav {
    position: absolute;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(255, 255, 255, 0.2);
    color: white;
    padding: 15px;
    cursor: pointer;
    border-radius: 50%;
    border: none;
    font-size: 24px;
    transition: background 0.3s ease;
}

.modal-nav:hover {
    background: rgba(255, 255, 255, 0.4);
}

.modal-prev {
    left: 20px;
}

.modal-next {
    right: 20px;
}
.modal-counter {
    position: absolute;
    bottom: 20px;
    left: 50%;
    transform: translateX(-50%);
    color: white;
    background: rgba(0, 0, 0, 0.5);
    padding: 5px 15px;
    border-radius: 15px;
    font-size: 14px;
}
@media (max-width: 768px) {
    .form-actions {
        flex-direction: column;
        gap: 1rem;
    }
    
    .btn-primary {
        width: 100%;
        justify-content: center;
    }
    
    .publication-actions {
        position: static;
        margin-top: 1rem;
    }
}
.game-sidebar {
    position: fixed;
    left: 20px;
    top: 50%;
    transform: translateY(-50%);
    width: 200px;
    z-index: 1000;
}

.stress-relief-card {
    background: linear-gradient(45deg, #95E1D3, #3498db);
    color: white;
    padding: 1.5rem;
    border-radius: 15px;
    cursor: pointer;
    transition: transform 0.3s ease;
    box-shadow: 0 8px 20px rgba(149, 225, 211, 0.3);
    text-align: center;
}

.stress-relief-card:hover {
    transform: translateY(-5px);
}

.stress-icon {
    font-size: 2.5rem;
    margin-bottom: 1rem;
    animation: pulse 2s infinite;
}

.stress-meter {
    width: 100%;
    height: 8px;
    background: rgba(255, 255, 255, 0.3);
    border-radius: 4px;
    margin: 1rem 0;
}

.meter-fill {
    height: 100%;
    background: white;
    border-radius: 4px;
    transition: width 0.5s ease;
}

#gameModal .modal-content {
    border-radius: 20px;
    overflow: hidden;
}

#gameModal .modal-header {
    background:linear-gradient(45deg, #95E1D3, #3498db);;
    color: white;
    border-bottom: none;
}

#gameModal .modal-body {
    padding: 2rem;
}

#gameModal .game-container {
    height: 400px;
}

#gameModal .target {
    width: 50px;
    height: 50px;
}

@keyframes pulse {
    0% { transform: scale(1); }
    50% { transform: scale(1.1); }
    100% { transform: scale(1); }
}

@media (max-width: 768px) {
    .game-sidebar {
        position: static;
        width: 100%;
        margin-bottom: 2rem;
        transform: none;
    }
    
    #gameModal .modal-dialog {
        margin: 1rem;
    }
    
    #gameModal .game-container {
        height: 300px;
    }
}
</style>
<script>

// Chatbot JavaScript
document.addEventListener('DOMContentLoaded', function() {
    const chatbot = document.getElementById('chatbot-widget');
    const chatbotHeader = chatbot.querySelector('.chatbot-header');
    const chatbotMessages = chatbot.querySelector('.chatbot-messages');
    const chatbotInput = chatbot.querySelector('input');
    const chatbotSubmit = chatbot.querySelector('button[type=\"submit\"]');

    // Toggle chatbot
    chatbotHeader.addEventListener('click', () => {
        chatbot.classList.toggle('open');
    });

    // Add loading message
    function addLoadingMessage() {
        const loadingMessage = document.createElement('div');
        loadingMessage.className = 'chatbot-message bot loading';
        loadingMessage.innerHTML = '<div class=\"typing-indicator\"><span></span><span></span><span></span></div>';
        chatbotMessages.appendChild(loadingMessage);
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        return loadingMessage;
    }

    // Remove loading message
    function removeLoadingMessage(element) {
        if (element && element.parentNode) {
            element.parentNode.removeChild(element);
        }
    }

    // Send message
    function sendMessage(message) {
        // Add user message to chat
        const userMessage = document.createElement('div');
        userMessage.className = 'chatbot-message user';
        userMessage.textContent = message;
        chatbotMessages.appendChild(userMessage);

        // Add loading indicator
        const loadingMessage = addLoadingMessage();

        // Scroll to bottom
        chatbotMessages.scrollTop = chatbotMessages.scrollHeight;

        // Send to server
        fetch('/chatbot/message', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-Requested-With': 'XMLHttpRequest'
            },
            body: JSON.stringify({ message: message })
        })
        .then(response => {
            if (!response.ok) {
                throw new Error('Erreur réseau: ' + response.status);
            }
            return response.json();
        })
        .then(data => {
            // Remove loading message
            removeLoadingMessage(loadingMessage);

            // Add bot response
            const botMessage = document.createElement('div');
            botMessage.className = 'chatbot-message bot';
            if (data.error) {
                botMessage.textContent = 'Désolé, une erreur est survenue: ' + data.error;
            } else {
                botMessage.textContent = data.message;
            }
            chatbotMessages.appendChild(botMessage);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        })
        .catch(error => {
            console.error('Error:', error);
            removeLoadingMessage(loadingMessage);
            
            const errorMessage = document.createElement('div');
            errorMessage.className = 'chatbot-message bot error';
            errorMessage.textContent = 'Désolé, je ne peux pas répondre pour le moment. Erreur: ' + error.message;
            chatbotMessages.appendChild(errorMessage);
            chatbotMessages.scrollTop = chatbotMessages.scrollHeight;
        });
    }

    // Handle submit
    chatbotSubmit.addEventListener('click', () => {
        const message = chatbotInput.value.trim();
        if (message) {
            sendMessage(message);
            chatbotInput.value = '';
        }
    });

    // Handle enter key
    chatbotInput.addEventListener('keypress', (e) => {
        if (e.key === 'Enter') {
            const message = chatbotInput.value.trim();
            if (message) {
                sendMessage(message);
                chatbotInput.value = '';
            }
        }
    });
});
document.addEventListener('DOMContentLoaded', () => {
    const target = document.querySelector('.target');
    const startBtn = document.querySelector('.btn-start');
    const timerProgress = document.querySelector('.timer-progress');
    const scoreEl = document.getElementById('score');
    const highscoreEl = document.getElementById('highscore');
    
    let score = 0;
    let timeLeft = 30;
    let gameActive = false;
    let highscore = localStorage.getItem('reactoHighscore') || 0;
    highscoreEl.textContent = highscore;

    const moveTarget = () => {
        if (!gameActive) return;
        
        const containerRect = document.querySelector('.game-container').getBoundingClientRect();
        const maxX = containerRect.width - 40;
        const maxY = containerRect.height - 40;
        
        target.style.display = 'block';
        target.style.left = Math.random() * maxX + 'px';
        target.style.top = Math.random() * maxY + 'px';
    };

    target.addEventListener('click', () => {
        if (!gameActive) return;
        score++;
        scoreEl.textContent = score;
        target.style.display = 'none';
        moveTarget();
    });

    startBtn.addEventListener('click', () => {
        if (gameActive) return;
        
        gameActive = true;
        score = 0;
        timeLeft = 30;
        scoreEl.textContent = '0';
        startBtn.disabled = true;
        
        const gameInterval = setInterval(() => {
            timeLeft--;
            timerProgress.style.width = (timeLeft/30)*100 + '%';
            
            if (timeLeft <= 0) {
                clearInterval(gameInterval);
                gameActive = false;
                startBtn.disabled = false;
                target.style.display = 'none';
                if (score > highscore) {
                    highscore = score;
                    localStorage.setItem('reactoHighscore', highscore);
                    highscoreEl.textContent = highscore;
                }
            }
        }, 1000);
        
        moveTarget();
    });
});

let currentImageIndex = 0;
let images = [];

function openImageModal(src, publicationId) {
    // Récupérer uniquement les images de la publication courante
    images = Array.from(document.querySelector(`[data-publication-id=\"\${publicationId}\"]`)
        .querySelectorAll('.publication-img'))
        .map(img => img.src);
    currentImageIndex = images.indexOf(src);
    
    var modal = document.createElement('div');
    modal.className = 'modal';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    var prevBtn = document.createElement('button');
    prevBtn.className = 'modal-nav modal-prev';
    prevBtn.innerHTML = '&#10094;';
    
    var nextBtn = document.createElement('button');
    nextBtn.className = 'modal-nav modal-next';
    nextBtn.innerHTML = '&#10095;';
    
    var counter = document.createElement('div');
    counter.className = 'modal-counter';
    updateCounter(counter);
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    modal.appendChild(prevBtn);
    modal.appendChild(nextBtn);
    modal.appendChild(counter);
    document.body.appendChild(modal);
    
    setTimeout(() => modal.style.display = 'flex', 0);
    document.body.style.overflow = 'hidden';
    
    // Navigation
    prevBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex - 1 + images.length) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    nextBtn.onclick = function(e) {
        e.stopPropagation();
        currentImageIndex = (currentImageIndex + 1) % images.length;
        img.src = images[currentImageIndex];
        updateCounter(counter);
    }
    
    // Fermeture
    closeBtn.onclick = function() {
        closeModal(modal);
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            closeModal(modal);
        }
    }
    
    // Navigation avec les flèches du clavier
    document.addEventListener('keydown', function(e) {
        if (e.key === 'ArrowLeft') {
            prevBtn.click();
        } else if (e.key === 'ArrowRight') {
            nextBtn.click();
        } else if (e.key === 'Escape') {
            closeModal(modal);
        }
    });
}

function updateCounter(counter) {
    counter.textContent = `\${currentImageIndex + 1} / \${images.length}`;
}

function closeModal(modal) {
    document.body.removeChild(modal);
    document.body.style.overflow = 'auto';
}
</script>
{% block stylesheets %}
{{ parent() }}
<style>
    .like-count:hover {
        text-decoration: underline;
    }
    
    .modal-header {
        background-color: #95E1D3;
        color: white;
    }
    
    .list-group-item {
        border: none;
        border-bottom: 1px solid #eee;
    }
    
    .list-group-item:last-child {
        border-bottom: none;
    }
</style>
{% endblock %}
{% endblock %}", "publication/index.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\publication\\index.html.twig");
    }
}
