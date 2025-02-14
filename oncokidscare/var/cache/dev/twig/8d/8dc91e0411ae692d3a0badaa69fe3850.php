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
            'javascripts' => [$this, 'block_javascripts'],
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

    // line 50
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

        // line 51
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Explicitly target only publication likes
        document.querySelectorAll('.publication-card .like-publication-btn').forEach(button => {
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

    // line 84
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

        // line 85
        yield "<div class=\"container\" style=\"max-width: 800px; margin: 2rem auto; padding: 0 1rem;\">
    <div class=\"publication-card\">
        <div class=\"publication-header\">
            ";
        // line 88
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 88, $this->source); })()), "isAnonymous", [], "any", false, false, false, 88)) {
            // line 89
            yield "                <div class=\"anonymous-avatar\">
                    <i class=\"fas fa-user-secret\"></i>
                </div>
            ";
        } else {
            // line 93
            yield "                <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"Avatar\">
            ";
        }
        // line 95
        yield "            <div class=\"publication-info\">
                <div class=\"author-name\">
                    ";
        // line 97
        if (CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 97, $this->source); })()), "isAnonymous", [], "any", false, false, false, 97)) {
            // line 98
            yield "                        <span class=\"anonymous-badge\">
                            <i class=\"fas fa-user-secret\"></i> Anonyme
                        </span>
                    ";
        } else {
            // line 102
            yield "                        ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "prenom", [], "any", false, false, false, 102), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 102, $this->source); })()), "user", [], "any", false, false, false, 102), "nom", [], "any", false, false, false, 102), "html", null, true);
            yield "
                    ";
        }
        // line 104
        yield "                </div>
                <span class=\"publication-date\">
                    <i class=\"far fa-clock\"></i> ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 106, $this->source); })()), "datePb", [], "any", false, false, false, 106), "d/m/Y H:i"), "html", null, true);
        yield "
                </span>
            </div>
 <div class=\"header-actions\">
        ";
        // line 110
        if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 110, $this->source); })()), "user", [], "any", false, false, false, 110))) {
            // line 111
            yield "            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 111, $this->source); })()), "user", [], "any", false, false, false, 111), "id", [], "any", false, false, false, 111))) {
                // line 112
                yield "                    <div class=\"publication-actions\">
                        <a href=\"";
                // line 113
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 113, $this->source); })()), "id", [], "any", false, false, false, 113)]), "html", null, true);
                yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                            <i class=\"fas fa-edit\"></i>
                        </a>
                        <form method=\"post\" action=\"";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_publication_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 116, $this->source); })()), "id", [], "any", false, false, false, 116)]), "html", null, true);
                yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer cette publication ?');\" style=\"display: inline-block;\">
                            <input type=\"hidden\" name=\"_token\" value=\"";
                // line 117
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 117, $this->source); })()), "id", [], "any", false, false, false, 117))), "html", null, true);
                yield "\">
                            <button class=\"btn btn-delete\" title=\"Supprimer\">
                                <i class=\"fas fa-trash-alt\"></i>
                            </button>
                        </form>
                    </div>
                ";
            }
            // line 124
            yield "            ";
        }
        // line 125
        yield "        
    </div>
</div>

        <div class=\"publication-content\">
            ";
        // line 130
        yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 130, $this->source); })()), "contenu", [], "any", false, false, false, 130), "html", null, true));
        yield "
          ";
        // line 131
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 131, $this->source); })()), "imageUrls", [], "any", false, false, false, 131)) > 0)) {
            // line 132
            yield "    <div class=\"publication-images\">
        ";
            // line 133
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 133, $this->source); })()), "imageUrls", [], "any", false, false, false, 133), 0, 3));
            foreach ($context['_seq'] as $context["_key"] => $context["imageUrl"]) {
                // line 134
                yield "            <div class=\"publication-image\">
                <img src=\"";
                // line 135
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
            // line 141
            yield "        
        ";
            // line 142
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 142, $this->source); })()), "imageUrls", [], "any", false, false, false, 142)) > 3)) {
                // line 143
                yield "            <div class=\"publication-image more-images\" onclick=\"openImageModal('";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 143, $this->source); })()), "imageUrls", [], "any", false, false, false, 143), 3, [], "array", false, false, false, 143)), "html", null, true);
                yield "')\">
                <img src=\"";
                // line 144
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 144, $this->source); })()), "imageUrls", [], "any", false, false, false, 144), 3, [], "array", false, false, false, 144)), "html", null, true);
                yield "\" 
                     alt=\"Image de publication\" 
                     class=\"publication-img\">
                <div class=\"more-overlay\">
                    <span>+";
                // line 148
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 148, $this->source); })()), "imageUrls", [], "any", false, false, false, 148)) - 3), "html", null, true);
                yield "</span>
                </div>
            </div>
        ";
            }
            // line 152
            yield "    </div>

</br>
</br>
    <div class=\"publication-likes\">
    ";
            // line 157
            if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("ROLE_USER")) {
                // line 158
                yield "        <button class=\"like-btn like-publication-btn ";
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 158, $this->source); })()), "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 158, $this->source); })()), "user", [], "any", false, false, false, 158)], "method", false, false, false, 158))) ? ("liked") : (""));
                yield "\"
                data-publication-id=\"";
                // line 159
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 159, $this->source); })()), "id", [], "any", false, false, false, 159), "html", null, true);
                yield "\">
            <i class=\"";
                // line 160
                yield (((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160) && CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 160, $this->source); })()), "isLikedByUser", [CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 160, $this->source); })()), "user", [], "any", false, false, false, 160)], "method", false, false, false, 160))) ? ("fas") : ("far"));
                yield " fa-heart\"></i>
            <span class=\"like-count\">";
                // line 161
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 161, $this->source); })()), "getLikeCount", [], "method", false, false, false, 161), "html", null, true);
                yield "</span>
        </button>
    ";
            }
            // line 164
            yield "</div>
";
        }
        // line 166
        yield "        </div>
    </div>

    <div class=\"comments-section\">
        <h3 class=\"comments-title\">
            <i class=\"far fa-comments\"></i> 
            Commentaires (";
        // line 172
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 172, $this->source); })()), "comments", [], "any", false, false, false, 172)), "html", null, true);
        yield ")
        </h3>

        ";
        // line 175
        if ($this->extensions['Symfony\Bridge\Twig\Extension\SecurityExtension']->isGranted("IS_AUTHENTICATED_FULLY")) {
            // line 176
            yield "            <div class=\"comment-form\">
                ";
            // line 177
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 177, $this->source); })()), 'form_start');
            yield "
                    <div class=\"form-group\">
                        ";
            // line 179
            yield $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->searchAndRenderBlock(CoreExtension::getAttribute($this->env, $this->source, (isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 179, $this->source); })()), "contenuCom", [], "any", false, false, false, 179), 'widget', ["attr" => ["placeholder" => "Écrivez votre commentaire...", "class" => "form-control", "maxlength" => 120, "oninput" => "this.value = this.value.slice(0, 120)"]]);
            // line 186
            yield "
                    </div>
                    <button type=\"submit\" class=\"btn btn-primary\">
                        <i class=\"fas fa-paper-plane\"></i> Commenter
                    </button>
                ";
            // line 191
            yield             $this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderBlock((isset($context["commentForm"]) || array_key_exists("commentForm", $context) ? $context["commentForm"] : (function () { throw new RuntimeError('Variable "commentForm" does not exist.', 191, $this->source); })()), 'form_end');
            yield "
            </div>
        ";
        }
        // line 194
        yield "
        <div class=\"comments-list\">
            ";
        // line 196
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::sort($this->env, CoreExtension::getAttribute($this->env, $this->source, (isset($context["publication"]) || array_key_exists("publication", $context) ? $context["publication"] : (function () { throw new RuntimeError('Variable "publication" does not exist.', 196, $this->source); })()), "comments", [], "any", false, false, false, 196), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, (isset($context["b"]) || array_key_exists("b", $context) ? $context["b"] : (function () { throw new RuntimeError('Variable "b" does not exist.', 196, $this->source); })()), "createdAt", [], "any", false, false, false, 196) <=> CoreExtension::getAttribute($this->env, $this->source, (isset($context["a"]) || array_key_exists("a", $context) ? $context["a"] : (function () { throw new RuntimeError('Variable "a" does not exist.', 196, $this->source); })()), "createdAt", [], "any", false, false, false, 196)); }));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["comment"]) {
            // line 197
            yield "                <div class=\"comment-card\">
                    <div class=\"comment-header\">
                        <img src=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\AssetExtension']->getAssetUrl("images/img2.png"), "html", null, true);
            yield "\" class=\"user-avatar\" alt=\"Avatar\">
                        <div class=\"comment-info\">
                            <div class=\"author-name\">
                                ";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 202), "prenom", [], "any", false, false, false, 202), "html", null, true);
            yield " ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 202), "nom", [], "any", false, false, false, 202), "html", null, true);
            yield "
                            </div>
                            <span class=\"comment-date\">
                                <i class=\"far fa-clock\"></i> ";
            // line 205
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "createdAt", [], "any", false, false, false, 205), "d/m/Y H:i"), "html", null, true);
            yield "
                            </span>
                        </div>
                        ";
            // line 208
            if ((CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 208, $this->source); })()), "user", [], "any", false, false, false, 208) && CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 208))) {
                // line 209
                yield "                            ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, (isset($context["app"]) || array_key_exists("app", $context) ? $context["app"] : (function () { throw new RuntimeError('Variable "app" does not exist.', 209, $this->source); })()), "user", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "user", [], "any", false, false, false, 209), "id", [], "any", false, false, false, 209))) {
                    // line 210
                    yield "                                <div class=\"comment-actions\">
                                    <a href=\"";
                    // line 211
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_edit", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 211)]), "html", null, true);
                    yield "\" class=\"btn btn-edit\" title=\"Modifier\">
                                        <i class=\"fas fa-edit\"></i>
                                    </a>
                                    <form method=\"post\" action=\"";
                    // line 214
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Symfony\Bridge\Twig\Extension\RoutingExtension']->getPath("app_comment_delete", ["id" => CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 214)]), "html", null, true);
                    yield "\" onsubmit=\"return confirm('Êtes-vous sûr de vouloir supprimer ce commentaire ?');\" style=\"display: inline-block;\">
                                        <input type=\"hidden\" name=\"_token\" value=\"";
                    // line 215
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getRuntime('Symfony\Component\Form\FormRenderer')->renderCsrfToken(("delete" . CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "id", [], "any", false, false, false, 215))), "html", null, true);
                    yield "\">
                                        <button class=\"btn btn-delete\" title=\"Supprimer\">
                                            <i class=\"fas fa-trash-alt\"></i>
                                        </button>
                                    </form>
                                </div>
                            ";
                }
                // line 222
                yield "                        ";
            }
            // line 223
            yield "                        
                    </div>
                    <div class=\"comment-content\">
                        ";
            // line 226
            yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["comment"], "contenuCom", [], "any", false, false, false, 226), "html", null, true));
            yield "
                    </div>
                </div>
            ";
            $context['_iterated'] = true;
        }
        // line 235
        if (!$context['_iterated']) {
            // line 230
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
        // line 236
        yield "        </div>
    </div>

    <div class=\"back-link\">
        <a href=\"";
        // line 240
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


.publication-card {
  background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
    word-wrap: break-word; 
    overflow-wrap: break-word;
}
}


.user-avatar, .anonymous-avatar {
    width: 30px; 
    height: 30px; 
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0; 
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
  margin-left: 0.75rem;}

.author-name {
    font-weight: 600;
    color: #95E1D3;
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
   margin: 1rem 0;
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

.comments-section {
    margin-top: 2rem;
}

.comments-title {
    color: #95E1D3;
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
    border-color: #95E1D3;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
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
    align-items: center;
    margin-bottom: 1rem;
    position: relative;
    gap: 0.5rem; /* Reduced gap */
}

.comment-info {
    flex-grow: 1;
    margin-left: 0.5rem;
}

.comment-content {
    margin-left: calc(30px + 0.75rem); 
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}
/* Pour gérer les éléments de type code ou URL longs */
pre, code, a {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
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
    color: #95E1D3;
}

.back-link {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.btn-link {
    color: #95E1D3;
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
    grid-template-columns: repeat(3, 1fr); /* Affiche 3 images par défaut */
    max-height: 300px; /* Limite la hauteur de la grille */
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
    padding-top: 100%;
    overflow: hidden;
    border-radius: 8px;
    max-height: 200px;
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
   display: flex;
    align-items: center;
    position: relative;
    padding-right: 100px;
    margin-bottom: 1rem;
    gap: 0.5rem;
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
    max-width: 80%;
    max-height: 80vh;
    object-fit: contain;
}

.modal img {
    width: 100%;
    height: 100%;
    object-fit: contain;
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

.modal-next {right: 20px;
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
let currentImageIndex = 0;
let images = [];

function openImageModal(src) {
    // Récupérer toutes les images de la publication
    images = Array.from(document.querySelectorAll('.publication-img')).map(img => img.src);
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
        return array (  536 => 240,  530 => 236,  519 => 230,  517 => 235,  509 => 226,  504 => 223,  501 => 222,  491 => 215,  487 => 214,  481 => 211,  478 => 210,  475 => 209,  473 => 208,  467 => 205,  459 => 202,  453 => 199,  449 => 197,  444 => 196,  440 => 194,  434 => 191,  427 => 186,  425 => 179,  420 => 177,  417 => 176,  415 => 175,  409 => 172,  401 => 166,  397 => 164,  391 => 161,  387 => 160,  383 => 159,  378 => 158,  376 => 157,  369 => 152,  362 => 148,  355 => 144,  350 => 143,  348 => 142,  345 => 141,  333 => 135,  330 => 134,  326 => 133,  323 => 132,  321 => 131,  317 => 130,  310 => 125,  307 => 124,  297 => 117,  293 => 116,  287 => 113,  284 => 112,  281 => 111,  279 => 110,  272 => 106,  268 => 104,  260 => 102,  254 => 98,  252 => 97,  248 => 95,  242 => 93,  236 => 89,  234 => 88,  229 => 85,  216 => 84,  171 => 51,  158 => 50,  102 => 6,  89 => 5,  66 => 3,  43 => 1,);
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
{% block javascripts %}
    {{ parent() }}
    <script>
    document.addEventListener('DOMContentLoaded', function() {
        // Explicitly target only publication likes
        document.querySelectorAll('.publication-card .like-publication-btn').forEach(button => {
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
            {% if app.user.id == publication.user.id %}
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
        
    </div>
</div>

        <div class=\"publication-content\">
            {{ publication.contenu|nl2br }}
          {% if publication.imageUrls|length > 0 %}
    <div class=\"publication-images\">
        {% for imageUrl in publication.imageUrls|slice(0, 3) %}
            <div class=\"publication-image\">
                <img src=\"{{ asset(imageUrl) }}\" 
                     alt=\"Image de publication\" 
                     class=\"publication-img\"
                     onclick=\"openImageModal(this.src)\">
            </div>
        {% endfor %}
        
        {% if publication.imageUrls|length > 3 %}
            <div class=\"publication-image more-images\" onclick=\"openImageModal('{{ asset(publication.imageUrls[3]) }}')\">
                <img src=\"{{ asset(publication.imageUrls[3]) }}\" 
                     alt=\"Image de publication\" 
                     class=\"publication-img\">
                <div class=\"more-overlay\">
                    <span>+{{ publication.imageUrls|length - 3 }}</span>
                </div>
            </div>
        {% endif %}
    </div>

</br>
</br>
    <div class=\"publication-likes\">
    {% if is_granted('ROLE_USER') %}
        <button class=\"like-btn like-publication-btn {{ app.user and publication.isLikedByUser(app.user) ? 'liked' }}\"
                data-publication-id=\"{{ publication.id }}\">
            <i class=\"{{ app.user and publication.isLikedByUser(app.user) ? 'fas' : 'far' }} fa-heart\"></i>
            <span class=\"like-count\">{{ publication.getLikeCount() }}</span>
        </button>
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
                                'class': 'form-control',
                                    'maxlength': 120,
        'oninput': 'this.value = this.value.slice(0, 120)'
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
                            {% if app.user.id == comment.user.id %}
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


.publication-card {
  background: white;
    border-radius: 8px;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    padding: 1.5rem;
    margin-bottom: 2rem;
    word-wrap: break-word; 
    overflow-wrap: break-word;
}
}


.user-avatar, .anonymous-avatar {
    width: 30px; 
    height: 30px; 
    border-radius: 50%;
    object-fit: cover;
    flex-shrink: 0; 
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
  margin-left: 0.75rem;}

.author-name {
    font-weight: 600;
    color: #95E1D3;
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
   margin: 1rem 0;
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}

.comments-section {
    margin-top: 2rem;
}

.comments-title {
    color: #95E1D3;
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
    border-color: #95E1D3;
    box-shadow: 0 0 0 0.2rem rgba(45, 122, 122, 0.25);
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
    align-items: center;
    margin-bottom: 1rem;
    position: relative;
    gap: 0.5rem; /* Reduced gap */
}

.comment-info {
    flex-grow: 1;
    margin-left: 0.5rem;
}

.comment-content {
    margin-left: calc(30px + 0.75rem); 
    word-wrap: break-word;
    overflow-wrap: break-word;
    max-width: 100%;
}
/* Pour gérer les éléments de type code ou URL longs */
pre, code, a {
    max-width: 100%;
    word-wrap: break-word;
    overflow-wrap: break-word;
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
    color: #95E1D3;
}

.back-link {
    margin-top: 2rem;
    margin-bottom: 2rem;
}

.btn-link {
    color: #95E1D3;
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
    grid-template-columns: repeat(3, 1fr); /* Affiche 3 images par défaut */
    max-height: 300px; /* Limite la hauteur de la grille */
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
    padding-top: 100%;
    overflow: hidden;
    border-radius: 8px;
    max-height: 200px;
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
   display: flex;
    align-items: center;
    position: relative;
    padding-right: 100px;
    margin-bottom: 1rem;
    gap: 0.5rem;
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
    max-width: 80%;
    max-height: 80vh;
    object-fit: contain;
}

.modal img {
    width: 100%;
    height: 100%;
    object-fit: contain;
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

.modal-next {right: 20px;
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
let currentImageIndex = 0;
let images = [];

function openImageModal(src) {
    // Récupérer toutes les images de la publication
    images = Array.from(document.querySelectorAll('.publication-img')).map(img => img.src);
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
{% endblock %}", "publication/show.html.twig", "D:\\PIDEV\\oncokidscare\\templates\\publication\\show.html.twig");
    }
}
