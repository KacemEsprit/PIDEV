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

/* publication/show.html.twig */
class __TwigTemplate_080bce27436d91342550f3e04acb7765 extends Template
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
            'stylesheets' => [$this, 'block_stylesheets'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
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
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/show.html.twig"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "template", "publication/show.html.twig"));

        $this->parent = $this->loadTemplate("base_publication.html.twig", "publication/show.html.twig", 1);
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

        yield "Publication";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 5
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

        // line 6
        yield "    ";
        yield from $this->yieldParentBlock("stylesheets", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        .like-btn {
    position: absolute;
    right: 15px;
    top: 15px;
    z-index: 2;
}

.like-btn i {
    font-size: 1.2rem;
    transition: all 0.3s ease;
}

.like-btn.liked i {
    animation: likeAnimation 0.5s ease;
}
        .like-count {
            font-size: 0.9em;
            font-weight: 500;
        }
        @keyframes likeAnimation {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }
        .publication-actions {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
            padding: 10px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }
        .comment-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 5px;
        }
    </style>
";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 51
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

        // line 52
        yield "<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">
    <div class=\"publication-card\">
        <div class=\"publication-header\">
            ";
        // line 55
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 55, $this->source); })()), "isAnonymous", [], "any", false, false, false, 55)) {
            // line 56
            yield "                <div class=\"anonymous-avatar\">
                    <i class=\"fas fa-user-secret\"></i>
                </div>
            ";
        } else {
            // line 60
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"Avatar\">
            ";
        }
        // line 62
        yield "            <div class=\"publication-info\">
                <div class=\"author-name\">
                    ";
        // line 64
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 64, $this->source); })()), "isAnonymous", [], "any", false, false, false, 64)) {
            // line 65
            yield "                        <span class=\"anonymous-badge\">
                            <i class=\"fas fa-user-secret\"></i> Anonyme
                        </span>
                    ";
        } else {
            // line 69
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "prenom", [], "any", false, false, false, 69), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 69, $this->source); })()), "user", [], "any", false, false, false, 69), "nom", [], "any", false, false, false, 69), "html", null, true);
            yield "
                    ";
        }
        // line 71
        yield "                </div>
                <span class=\"publication-date\">
                    <i class=\"far fa-clock\"></i> ";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 73, $this->source); })()), "datePb", [], "any", false, false, false, 73), "d/m/Y H:i"), "html", null, true);
        yield "
                </span>
            </div>
 <div class=\"header-actions\">
        ";
        // line 77
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 77, $this->source); })()), "user", [], "any", false, false, false, 77))) {
            // line 78
            yield "            ";
            if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 78, $this->source); })()), "user", [], "any", false, false, false, 78), "id", [], "any", false, false, false, 78)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                // line 79
                yield "                    <div class=\"publication-actions\">
                        <a href=\"";
                // line 80
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 80, $this->source); })()), "id", [], "any", false, false, false, 80)]), "html", null, true);
                yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" action=\"";
                // line 83
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 83, $this->source); })()), "id", [], "any", false, false, false, 83)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 84
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 84, $this->source); })()), "id", [], "any", false, false, false, 84))), "html", null, true);
                yield "\">
                            <button class=\"btn btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </form>
                    </div>
                ";
            }
            // line 91
            yield "            ";
        }
        // line 92
        yield "          ";
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
            // line 93
            yield "            <button class=\"like-btn like-publication-btn ";
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 93, $this->source); })()), "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 93, $this->source); })()), "user", [], "any", false, false, false, 93)], "method", false, false, false, 93))) ? ("liked") : (""));
            yield "\"
                    data-publication-id=\"";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 94, $this->source); })()), "id", [], "any", false, false, false, 94), "html", null, true);
            yield "\">
                <i class=\"";
            // line 95
            yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 95, $this->source); })()), "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 95, $this->source); })()), "user", [], "any", false, false, false, 95)], "method", false, false, false, 95))) ? ("fas") : ("far"));
            yield " fa-heart\"></i>
                <span class=\"like-count\">";
            // line 96
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 96, $this->source); })()), "getLikeCount", [], "method", false, false, false, 96), "html", null, true);
            yield "</span>
            </button>
        ";
        }
        // line 99
        yield "    </div>
</div>

        <div class=\"publication-content\">
            ";
        // line 103
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 103, $this->source); })()), "contenu", [], "any", false, false, false, 103), "html", null, true));
        yield "
            
            ";
        // line 105
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 105, $this->source); })()), "imageUrls", [], "any", false, false, false, 105)) > 0)) {
            // line 106
            yield "                <div class=\"publication-images ";
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 106, $this->source); })()), "imageUrls", [], "any", false, false, false, 106)) == 1)) {
                yield "single-image";
            } elseif ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 106, $this->source); })()), "imageUrls", [], "any", false, false, false, 106)) == 2)) {
                yield "two-images";
            }
            yield "\">
                    ";
            // line 107
            $context["maxDisplayImages"] = 4;
            // line 108
            yield "                    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 108, $this->source); })()), "imageUrls", [], "any", false, false, false, 108), 0, (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 108, $this->source); })()), "imageUrls", [], "any", false, false, false, 108)) > (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 108, $this->source); })()))) ? ((isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 108, $this->source); })())) : (Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 108, $this->source); })()), "imageUrls", [], "any", false, false, false, 108))))));
            foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                // line 109
                yield "                        <div class=\"publication-image\">
                            <img src=\"";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl($context["imageUrl"]), "html", null, true);
                yield "\" 
                                 alt=\"Image de publication\" 
                                 class=\"publication-img\"
                                 onclick=\"openImageModal(this.src)\">
                        </div>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_key'], $context['imageUrl'], $context['_parent']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 116
            yield "                    
                    ";
            // line 117
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 117, $this->source); })()), "imageUrls", [], "any", false, false, false, 117)) > (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 117, $this->source); })()))) {
                // line 118
                yield "                        <div class=\"publication-image more-images\" onclick=\"openImageModal('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 118, $this->source); })()), "imageUrls", [], "any", false, false, false, 118), (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 118, $this->source); })()), [], "array", false, false, false, 118)), "html", null, true);
                yield "')\">
                            <img src=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 119, $this->source); })()), "imageUrls", [], "any", false, false, false, 119), (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 119, $this->source); })()), [], "array", false, false, false, 119)), "html", null, true);
                yield "\" 
                                 alt=\"Image de publication\" 
                                 class=\"publication-img\">
                            <div class=\"more-overlay\">
                                <span>+";
                // line 123
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 123, $this->source); })()), "imageUrls", [], "any", false, false, false, 123)) - (isset($context["maxDisplayImages"]) || array_key_exists("maxDisplayImages", $context) ? $context["maxDisplayImages"] : (function () { throw new RuntimeError('Variable "maxDisplayImages" does not exist.', 123, $this->source); })())), "html", null, true);
                yield "</span>
                            </div>
                        </div>
                    ";
            }
            // line 127
            yield "                </div>
            ";
        }
        // line 129
        yield "        </div>
    </div>

    <div class=\"comments-section\">
        <h3 class=\"comments-title\">
            <i class=\"far fa-comments\"></i> 
            Commentaires (";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 135, $this->source); })()), "comments", [], "any", false, false, false, 135)), "html", null, true);
        yield ")
        </h3>

        ";
        // line 138
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 139
            yield "            <div class=\"comment-form\">
                ";
            // line 140
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 140, $this->source); })()), 'form_start');
            yield "
                    <div class=\"form-group\">
                        ";
            // line 142
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 142, $this->source); })()), "contenuCom", [], "any", false, false, false, 142), 'widget', ["attr" => ["placeholder" => "Écrivez votre commentaire...", "class" => "form-control"]]);
            // line 147
            yield "
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Commenter
                    </button>
                ";
            // line 152
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 152, $this->source); })()), 'form_end');
            yield "
            </div>
        ";
        }
        // line 155
        yield "
        <div class=\"comments-list\">
            ";
        // line 157
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 157, $this->source); })()), "comments", [], "any", false, false, false, 157), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 157, $this->source); })()), "createdAt", [], "any", false, false, false, 157) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 157, $this->source); })()), "createdAt", [], "any", false, false, false, 157)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 158
            yield "                <div class=\"comment-card\">
                    <div class=\"comment-header\">
                        <img src=\"";
            // line 160
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"Avatar\">
                        <div class=\"comment-info\">
                            <div class=\"author-name\">
                                ";
            // line 163
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 163), "prenom", [], "any", false, false, false, 163), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 163), "nom", [], "any", false, false, false, 163), "html", null, true);
            yield "
                            </div>
                            <span class=\"comment-date\">
                                <i class=\"far fa-clock\"></i> ";
            // line 166
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 166), "d/m/Y H:i"), "html", null, true);
            yield "
                            </span>
                        </div>
                        ";
            // line 169
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 169, $this->source); })()), "user", [], "any", false, false, false, 169) && CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 169))) {
                // line 170
                yield "                            ";
                if (((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 170, $this->source); })()), "user", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 170), "id", [], "any", false, false, false, 170)) || $this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_ADMIN"))) {
                    // line 171
                    yield "                                <div class=\"comment-actions\">
                                    <a href=\"";
                    // line 172
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 172)]), "html", null, true);
                    yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
                    // line 175
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 175)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 176
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 176))), "html", null, true);
                    yield "\">
                                        <button class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            ";
                }
                // line 183
                yield "                        ";
            }
            // line 184
            yield "                        ";
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 185
                yield "                            <button class=\"like-btn like-comment-btn ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185) && CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 185, $this->source); })()), "user", [], "any", false, false, false, 185), "id", [], "any", false, false, false, 185)], "method", false, false, false, 185))) ? ("liked") : (""));
                yield "\"
                                    data-comment-id=\"";
                // line 186
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 186), "html", null, true);
                yield "\">
                                <i class=\"";
                // line 187
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187) && CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 187, $this->source); })()), "user", [], "any", false, false, false, 187), "id", [], "any", false, false, false, 187)], "method", false, false, false, 187))) ? ("fas") : ("far"));
                yield " fa-heart\"></i>
                                <span class=\"like-count\">";
                // line 188
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "getLikeCount", [], "method", false, false, false, 188), "html", null, true);
                yield "</span>
                            </button>
                        ";
            }
            // line 191
            yield "                    </div>
                    <div class=\"comment-content\">
                        ";
            // line 193
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenuCom", [], "any", false, false, false, 193), "html", null, true));
            yield "
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 202
        if (!$context['_iterated']) {
            // line 197
            yield "                <div class=\"no-comments\">
                    <i class=\"far fa-comment-dots\"></i>
                    <p>Aucun commentaire pour le moment.</p>
                    <p>Soyez le premier à commenter !</p>
                </div>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_key'], $context['comment'], $context['_parent'], $context['_iterated']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 203
        yield "        </div>
    </div>

    <div class=\"back-link\">
        <a href=\"";
        // line 207
        yield $this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_index");
        yield "\" class=\"btn btn-link\">
            <i class=\"fas fa-arrow-left\"></i> Retour aux publications
        </a>
    </div>
</div>

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
.container {
    background-color: #f8f9fa;
    min-height: 100vh;
    padding-top: 2rem;
}

.publication-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
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

.publication-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.author-name {
    font-weight: 600;
    color: #2d7a7a;
    margin-bottom: 0.25rem;
}

.publication-date, .comment-date {
    font-size: 0.875rem;
    color: #6c757d;
}

.publication-actions, .comment-actions {
    display: flex;
    gap: 0.5rem;
    margin-left: auto;
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
    background: #2d7a7a;
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
    margin: 1rem 0;
    white-space: pre-line;
}

.comments-section {
    margin-top: 2rem;
}

.comments-title {
    color: #2d7a7a;
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.comment-form {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-control {
    border: 2px solid #e0f3f8;
    border-radius: 8px;
    padding: 1rem;
    resize: vertical;
    min-height: 80px;
    margin-bottom: 1rem;
    width: 100%;
}

.form-control:focus {
    border-color: #2d7a7a;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.btn-primary {
    background: #2d7a7a;
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

.comments-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.comment-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
}

.comment-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
    position: relative;
}

.comment-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.comment-content {
    margin-left: calc(40px + 1rem);
    white-space: pre-line;
}

.no-comments {
    text-align: center;
    padding: 3rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #6c757d;
}

.no-comments i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #2d7a7a;
}

.back-link {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.btn-link {
    color: #2d7a7a;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.btn-link:hover {
    color: #236161;
    background: rgba(45, 122, 122, 0.1);
}

.publication-images {
    display: grid;
    gap: 0.5rem;
    margin-top: 1rem;
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
    padding-top: 100%; /* 1:1 Aspect Ratio */
    overflow: hidden;
    border-radius: 12px;
}

.publication-img {
    position: absolute;
    top: 0;
    left: 0;
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
.publication-header {
    position: relative;
    padding-right: 100px; /* Espace pour le bouton like */
}

.header-actions {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    align-items: center;
    gap: 10px;
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
    max-width: 90%;
    max-height: 90vh;
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

@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }

    .publication-actions, .comment-actions {
        position: static;
        margin-left: auto;
        margin-top: 0;
    }

    .comment-content {
        margin-left: 0;
        margin-top: 1rem;
    }
}

/* Chatbot Styles */
.chatbot-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 350px;
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
    background: linear-gradient(45deg, #2d7a7a, #3498db);
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
    background: #2d7a7a;
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

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Ajout des styles pour l'indicateur de chargement */
.typing-indicator {
    display: flex;
    gap: 4px;
    padding: 4px 8px;
}

.typing-indicator span {
    width: 8px;
    height: 8px;
    background: #90a4ae;
    border-radius: 50%;
    animation: typing 1s infinite ease-in-out;
}

.typing-indicator span:nth-child(1) { animation-delay: 0.1s; }
.typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
.typing-indicator span:nth-child(3) { animation-delay: 0.3s; }

@keyframes typing {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
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

.like-btn {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px 10px;
    color: #666;
    transition: all 0.3s ease;
}

.like-btn:hover {
    color: #ff4b4b;
}

.like-btn.liked {
    color: #ff4b4b;
}

.like-count {
    margin-left: 5px;
    font-size: 0.9em;
}
</style>

<script>
function openImageModal(src) {
    var modal = document.createElement('div');
    modal.className = 'modal';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    document.body.appendChild(modal);
    
    setTimeout(() => modal.style.display = 'flex', 0);
    document.body.style.overflow = 'hidden';
    
    closeBtn.onclick = function() {
        document.body.removeChild(modal);
        document.body.style.overflow = 'auto';
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    }
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.contains(modal)) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    });
}

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
</script>

";
        
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->leave($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof);

        
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->leave($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof);

        yield from [];
    }

    // line 879
    /**
     * @return iterable<null|scalar|\Stringable>
     */
    public function block_javascripts(array $context, array $blocks = []): iterable
    {
        $macros = $this->macros;
        $__internal_5a27a8ba21ca79b61932376b2fa922d2 = $this->extensions["Symfony\\Bundle\\WebProfilerBundle\\Twig\\WebProfilerExtension"];
        $__internal_5a27a8ba21ca79b61932376b2fa922d2->enter($__internal_5a27a8ba21ca79b61932376b2fa922d2_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        $__internal_6f47bbe9983af81f1e7450e9a3e3768f = $this->extensions["Symfony\\Bridge\\Twig\\Extension\\ProfilerExtension"];
        $__internal_6f47bbe9983af81f1e7450e9a3e3768f->enter($__internal_6f47bbe9983af81f1e7450e9a3e3768f_prof = new \Twig\Profiler\Profile($this->getTemplateName(), "block", "javascripts"));

        // line 880
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des likes des publications
        document.querySelectorAll('.like-publication-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const publicationId = this.dataset.publicationId;
                const url = `/like/publication/\${publicationId}`;
                
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.liked) {
                        this.classList.add('liked');
                        this.innerHTML = `<i class=\"fas fa-heart\"></i> <span class=\"like-count\">\${data.likeCount}</span>`;
                    } else {
                        this.classList.remove('liked');
                        this.innerHTML = `<i class=\"far fa-heart\"></i> <span class=\"like-count\">\${data.likeCount}</span>`;
                    }
                })
                .catch(error => console.error('Error:', error));
            });
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
        return "publication/show.html.twig";
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
        return array (  1198 => 880,  1185 => 879,  502 => 207,  496 => 203,  485 => 197,  483 => 202,  475 => 193,  471 => 191,  465 => 188,  461 => 187,  457 => 186,  452 => 185,  449 => 184,  446 => 183,  436 => 176,  432 => 175,  426 => 172,  423 => 171,  420 => 170,  418 => 169,  412 => 166,  404 => 163,  398 => 160,  394 => 158,  389 => 157,  385 => 155,  379 => 152,  372 => 147,  370 => 142,  365 => 140,  362 => 139,  360 => 138,  354 => 135,  346 => 129,  342 => 127,  335 => 123,  328 => 119,  323 => 118,  321 => 117,  318 => 116,  306 => 110,  303 => 109,  298 => 108,  296 => 107,  287 => 106,  285 => 105,  280 => 103,  274 => 99,  268 => 96,  264 => 95,  260 => 94,  255 => 93,  252 => 92,  249 => 91,  239 => 84,  235 => 83,  229 => 80,  226 => 79,  223 => 78,  221 => 77,  214 => 73,  210 => 71,  202 => 69,  196 => 65,  194 => 64,  190 => 62,  184 => 60,  178 => 56,  176 => 55,  171 => 52,  158 => 51,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
    }

    public function getSourceContext(): Source
    {
        return new Source("{% extends 'base_publication.html.twig' %}

{% block title %}Publication{% endblock %}

{% block stylesheets %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css\">
    <style>
        .like-btn {
    position: absolute;
    right: 15px;
    top: 15px;
    z-index: 2;
}

.like-btn i {
    font-size: 1.2rem;
    transition: all 0.3s ease;
}

.like-btn.liked i {
    animation: likeAnimation 0.5s ease;
}
        .like-count {
            font-size: 0.9em;
            font-weight: 500;
        }
        @keyframes likeAnimation {
            0% { transform: scale(1); }
            50% { transform: scale(1.3); }
            100% { transform: scale(1); }
        }
        .publication-actions {
            display: flex;
            align-items: center;
            gap: 15px;
            margin: 15px 0;
            padding: 10px 0;
            border-top: 1px solid #eee;
            border-bottom: 1px solid #eee;
        }
        .comment-actions {
            display: flex;
            align-items: center;
            gap: 10px;
            margin-top: 5px;
        }
    </style>
{% endblock %}

{% block body %}
<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">
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
                <div class=\"author-name\">
                    {% if publication.isAnonymous %}
                        <span class=\"anonymous-badge\">
                            <i class=\"fas fa-user-secret\"></i> Anonyme
                        </span>
                    {% else %}
                        {{ publication.user.prenom }} {{ publication.user.nom }}
                    {% endif %}
                </div>
                <span class=\"publication-date\">
                    <i class=\"far fa-clock\"></i> {{ publication.datePb|date('d/m/Y H:i') }}
                </span>
            </div>
 <div class=\"header-actions\">
        {% if app.user and publication.user %}
            {% if app.user.id == publication.user.id or is_granted('ROLE_ADMIN') %}
                    <div class=\"publication-actions\">
                        <a href=\"{{ path('app_publication_edit', {'id': publication.id}) }}\" class=\"btn btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" action=\"{{ path('app_publication_delete', {'id': publication.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ publication.id) }}\">
                            <button class=\"btn btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </form>
                    </div>
                {% endif %}
            {% endif %}
          {% if is_granted('ROLE_USER') %}
            <button class=\"like-btn like-publication-btn {{ app.user and publication.isLikedByUser(app.user) ? 'liked' }}\"
                    data-publication-id=\"{{ publication.id }}\">
                <i class=\"{{ app.user and publication.isLikedByUser(app.user) ? 'fas' : 'far' }} fa-heart\"></i>
                <span class=\"like-count\">{{ publication.getLikeCount() }}</span>
            </button>
        {% endif %}
    </div>
</div>

        <div class=\"publication-content\">
            {{ publication.contenu|nl2br }}
            
            {% if publication.imageUrls|length > 0 %}
                <div class=\"publication-images {% if publication.imageUrls|length == 1 %}single-image{% elseif publication.imageUrls|length == 2 %}two-images{% endif %}\">
                    {% set maxDisplayImages = 4 %}
                    {% for imageUrl in publication.imageUrls|slice(0, publication.imageUrls|length > maxDisplayImages ? maxDisplayImages : publication.imageUrls|length) %}
                        <div class=\"publication-image\">
                            <img src=\"{{ asset(imageUrl) }}\" 
                                 alt=\"Image de publication\" 
                                 class=\"publication-img\"
                                 onclick=\"openImageModal(this.src)\">
                        </div>
                    {% endfor %}
                    
                    {% if publication.imageUrls|length > maxDisplayImages %}
                        <div class=\"publication-image more-images\" onclick=\"openImageModal('{{ asset(publication.imageUrls[maxDisplayImages]) }}')\">
                            <img src=\"{{ asset(publication.imageUrls[maxDisplayImages]) }}\" 
                                 alt=\"Image de publication\" 
                                 class=\"publication-img\">
                            <div class=\"more-overlay\">
                                <span>+{{ publication.imageUrls|length - maxDisplayImages }}</span>
                            </div>
                        </div>
                    {% endif %}
                </div>
            {% endif %}
        </div>
    </div>

    <div class=\"comments-section\">
        <h3 class=\"comments-title\">
            <i class=\"far fa-comments\"></i> 
            Commentaires ({{ publication.comments|length }})
        </h3>

        {% if is_granted('IS_AUTHENTICATED_FULLY') %}
            <div class=\"comment-form\">
                {{ form_start(commentForm) }}
                    <div class=\"form-group\">
                        {{ form_widget(commentForm.contenuCom, {
                            'attr': {
                                'placeholder': 'Écrivez votre commentaire...',
                                'class': 'form-control'
                            }
                        }) }}
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Commenter
                    </button>
                {{ form_end(commentForm) }}
            </div>
        {% endif %}

        <div class=\"comments-list\">
            {% for comment in publication.comments|sort((a, b) => b.createdAt <=> a.createdAt) %}
                <div class=\"comment-card\">
                    <div class=\"comment-header\">
                        <img src=\"{{ asset('images/img2.png') }}\" class=\"user-avatar\" alt=\"Avatar\">
                        <div class=\"comment-info\">
                            <div class=\"author-name\">
                                {{ comment.user.prenom }} {{ comment.user.nom }}
                            </div>
                            <span class=\"comment-date\">
                                <i class=\"far fa-clock\"></i> {{ comment.createdAt|date('d/m/Y H:i') }}
                            </span>
                        </div>
                        {% if app.user and comment.user %}
                            {% if app.user.id == comment.user.id or is_granted('ROLE_ADMIN') %}
                                <div class=\"comment-actions\">
                                    <a href=\"{{ path('app_comment_edit', {'id': comment.id}) }}\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"{{ path('app_comment_delete', {'id': comment.id}) }}\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"{{ csrf_token('delete' ~ comment.id) }}\">
                                        <button class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            {% endif %}
                        {% endif %}
                        {% if is_granted('ROLE_USER') %}
                            <button class=\"like-btn like-comment-btn {{ app.user and comment.isLikedByUser(app.user.id) ? 'liked' }}\"
                                    data-comment-id=\"{{ comment.id }}\">
                                <i class=\"{{ app.user and comment.isLikedByUser(app.user.id) ? 'fas' : 'far' }} fa-heart\"></i>
                                <span class=\"like-count\">{{ comment.getLikeCount() }}</span>
                            </button>
                        {% endif %}
                    </div>
                    <div class=\"comment-content\">
                        {{ comment.contenuCom|nl2br }}
                    </div>
                </div>
            {% else %}
                <div class=\"no-comments\">
                    <i class=\"far fa-comment-dots\"></i>
                    <p>Aucun commentaire pour le moment.</p>
                    <p>Soyez le premier à commenter !</p>
                </div>
            {% endfor %}
        </div>
    </div>

    <div class=\"back-link\">
        <a href=\"{{ path('app_publication_index') }}\" class=\"btn btn-link\">
            <i class=\"fas fa-arrow-left\"></i> Retour aux publications
        </a>
    </div>
</div>

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
.container {
    background-color: #f8f9fa;
    min-height: 100vh;
    padding-top: 2rem;
}

.publication-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
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

.publication-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.author-name {
    font-weight: 600;
    color: #2d7a7a;
    margin-bottom: 0.25rem;
}

.publication-date, .comment-date {
    font-size: 0.875rem;
    color: #6c757d;
}

.publication-actions, .comment-actions {
    display: flex;
    gap: 0.5rem;
    margin-left: auto;
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
    background: #2d7a7a;
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
    margin: 1rem 0;
    white-space: pre-line;
}

.comments-section {
    margin-top: 2rem;
}

.comments-title {
    color: #2d7a7a;
    font-size: 1.25rem;
    margin-bottom: 1.5rem;
    display: flex;
    align-items: center;
    gap: 0.5rem;
}

.comment-form {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 1.5rem;
}

.form-control {
    border: 2px solid #e0f3f8;
    border-radius: 8px;
    padding: 1rem;
    resize: vertical;
    min-height: 80px;
    margin-bottom: 1rem;
    width: 100%;
}

.form-control:focus {
    border-color: #2d7a7a;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
}

.btn-primary {
    background: #2d7a7a;
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

.comments-list {
    display: flex;
    flex-direction: column;
    gap: 1rem;
}

.comment-card {
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
}

.comment-header {
    display: flex;
    align-items: flex-start;
    margin-bottom: 1rem;
    position: relative;
}

.comment-info {
    flex-grow: 1;
    margin-left: 1rem;
}

.comment-content {
    margin-left: calc(40px + 1rem);
    white-space: pre-line;
}

.no-comments {
    text-align: center;
    padding: 3rem;
    background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    color: #6c757d;
}

.no-comments i {
    font-size: 3rem;
    margin-bottom: 1rem;
    color: #2d7a7a;
}

.back-link {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.btn-link {
    color: #2d7a7a;
    text-decoration: none;
    display: inline-flex;
    align-items: center;
    gap: 0.5rem;
    padding: 0.5rem 1rem;
    border-radius: 4px;
    transition: all 0.3s ease;
}

.btn-link:hover {
    color: #236161;
    background: rgba(45, 122, 122, 0.1);
}

.publication-images {
    display: grid;
    gap: 0.5rem;
    margin-top: 1rem;
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
    padding-top: 100%; /* 1:1 Aspect Ratio */
    overflow: hidden;
    border-radius: 12px;
}

.publication-img {
    position: absolute;
    top: 0;
    left: 0;
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
.publication-header {
    position: relative;
    padding-right: 100px; /* Espace pour le bouton like */
}

.header-actions {
    position: absolute;
    right: 0;
    top: 50%;
    transform: translateY(-50%);
    display: flex;
    align-items: center;
    gap: 10px;
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
    max-width: 90%;
    max-height: 90vh;
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

@media (max-width: 768px) {
    .container {
        padding: 1rem;
    }

    .publication-actions, .comment-actions {
        position: static;
        margin-left: auto;
        margin-top: 0;
    }

    .comment-content {
        margin-left: 0;
        margin-top: 1rem;
    }
}

/* Chatbot Styles */
.chatbot-widget {
    position: fixed;
    bottom: 20px;
    right: 20px;
    width: 350px;
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
    background: linear-gradient(45deg, #2d7a7a, #3498db);
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
    background: #2d7a7a;
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

@keyframes fadeIn {
    from { opacity: 0; transform: translateY(10px); }
    to { opacity: 1; transform: translateY(0); }
}

/* Ajout des styles pour l'indicateur de chargement */
.typing-indicator {
    display: flex;
    gap: 4px;
    padding: 4px 8px;
}

.typing-indicator span {
    width: 8px;
    height: 8px;
    background: #90a4ae;
    border-radius: 50%;
    animation: typing 1s infinite ease-in-out;
}

.typing-indicator span:nth-child(1) { animation-delay: 0.1s; }
.typing-indicator span:nth-child(2) { animation-delay: 0.2s; }
.typing-indicator span:nth-child(3) { animation-delay: 0.3s; }

@keyframes typing {
    0%, 100% { transform: translateY(0); }
    50% { transform: translateY(-10px); }
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

.like-btn {
    border: none;
    background: none;
    cursor: pointer;
    padding: 5px 10px;
    color: #666;
    transition: all 0.3s ease;
}

.like-btn:hover {
    color: #ff4b4b;
}

.like-btn.liked {
    color: #ff4b4b;
}

.like-count {
    margin-left: 5px;
    font-size: 0.9em;
}
</style>

<script>
function openImageModal(src) {
    var modal = document.createElement('div');
    modal.className = 'modal';
    
    var img = document.createElement('img');
    img.src = src;
    img.className = 'modal-content';
    
    var closeBtn = document.createElement('span');
    closeBtn.className = 'close';
    closeBtn.innerHTML = '&times;';
    
    modal.appendChild(img);
    modal.appendChild(closeBtn);
    document.body.appendChild(modal);
    
    setTimeout(() => modal.style.display = 'flex', 0);
    document.body.style.overflow = 'hidden';
    
    closeBtn.onclick = function() {
        document.body.removeChild(modal);
        document.body.style.overflow = 'auto';
    }
    
    modal.onclick = function(e) {
        if (e.target === modal) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    }
    
    document.addEventListener('keydown', function(e) {
        if (e.key === 'Escape' && document.contains(modal)) {
            document.body.removeChild(modal);
            document.body.style.overflow = 'auto';
        }
    });
}

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
</script>

{% endblock %}
{% block javascripts %}
    {{ parent() }}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Gestion des likes des publications
        document.querySelectorAll('.like-publication-btn').forEach(button => {
            button.addEventListener('click', function(e) {
                e.preventDefault();
                const publicationId = this.dataset.publicationId;
                const url = `/like/publication/\${publicationId}`;
                
                fetch(url, {
                    method: 'POST',
                    headers: {
                        'Content-Type': 'application/json',
                        'X-Requested-With': 'XMLHttpRequest'
                    }
                })
                .then(response => response.json())
                .then(data => {
                    if (data.liked) {
                        this.classList.add('liked');
                        this.innerHTML = `<i class=\"fas fa-heart\"></i> <span class=\"like-count\">\${data.likeCount}</span>`;
                    } else {
                        this.classList.remove('liked');
                        this.innerHTML = `<i class=\"far fa-heart\"></i> <span class=\"like-count\">\${data.likeCount}</span>`;
                    }
                })
                .catch(error => console.error('Error:', error));
            });
        });
    });
    </script>
{% endblock %}", "publication/show.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\publication\\show.html.twig");
    }
}
